<?php
session_start();

if( isset( $_GET['username'] ) AND $_GET['username'] != '' ):

	require_once('oauth/twitteroauth.php'); //Path to twitteroauth library

	$username = $_GET['username'];
	$limit = ( isset( $_GET['count'] ) AND $_GET['count'] != '' ) ? $_GET['count'] : 2;
	$consumerkey = "7ZWq2k2kMD5JloPJlCXsnNTLu";
	$consumersecret = "T0exaACcYa6DisgItCSU5asGnki1jC42XP64m4daD3YydEH6Uc";
	$accesstoken = "89261126-1vll41nl8Wxho5hSjrmRj6IY55LCkxGlwiIWLFrxN";
	$accesstokensecret = "Qtl3CXle5gusnsMVMWfHutJL74ESNZKHwtHY6Nck7eB8l";

	function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
	  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
	  return $connection;
	}

	$interval = 600;

	$cache_file = dirname(__FILE__) . '/cache/' . $username . '_' . $limit;

	if (file_exists($cache_file)) {
		$last = filemtime($cache_file);
	} else { $last = false; }

	$now = time();

	if ( !$last || (( $now - $last ) > $interval) ) {

		$context = stream_context_create(array(
			'http' => array(
				'timeout' => 3
			)
		));

		$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
		$twitter_feed = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$username."&count=".$limit);

		$cache_rss = serialize($twitter_feed);

		if (!empty($cache_rss)) {
			$cache_static = fopen($cache_file, 'wb');
			fwrite($cache_static, $cache_rss);
			fclose($cache_static);
		}

		$rss = @unserialize(file_get_contents($cache_file));
	} else {
		$rss = @unserialize(file_get_contents($cache_file));
	}

	echo json_encode($rss);

endif;

?>
