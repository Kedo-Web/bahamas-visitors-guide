<script src="PERCH_LOGINPATH/addons/plugins/editors/ace/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script>


	$(document).ready(function(){

		var set_up_ace = function(){
			$('textarea.ace:not([data-init])').attr('data-init', true).wrap('<div class="editor-wrap" style="float:left;"></div>').each(function(i, o){
				var textarea = $(o);
				var id = textarea.attr('id')+'_ace';
				var editdiv = textarea.after('<div id="'+id+'" class="ace_editdiv editor-wrap '+textarea.attr('class')+'"></div>');
				textarea.hide();
				var editor = ace.edit(id);
			    editor.setTheme("ace/theme/monokai");

			    if (textarea.hasClass('textile')) {
			    	editor.getSession().setMode("ace/mode/textile");
			    }else if (textarea.hasClass('markdown')) {
			    	editor.getSession().setMode("ace/mode/markdown");
			    }else{
			    	editor.getSession().setMode("ace/mode/html");
			    }

			    editor.getSession().setValue(textarea.val());
				editor.getSession().on('change', function(){
					textarea.val(editor.getSession().getValue());
				});

			    editor.getSession().setUseWrapMode(true);
			    editor.setHighlightActiveLine(false);
			    editor.setShowPrintMargin(false);
			    editor.renderer.setShowGutter(false);

			    Perch.UI.Global.resizeFields();
				editor.resize();

				$(window).on('perch.sidebar-toggle', function(){
					editor.resize();
				});
			});
		}

		$(window).on('Perch_Init_Editors', function(){
			   set_up_ace();
		});

		set_up_ace();
	});


</script>
<style>
.ace_editdiv {
	min-width: 100%;
	min-height: 450px;
	border: 1px solid #DDDDDD;
	border-radius: 3px;
	font-size: 1em;
}

.ace_editdiv.large {
	min-height: 250px;
}

.ace_editdiv.xs {
	min-height: 50px;
	height: 50px;
}

.ace_editdiv.s {
	min-height: 100px;
	height: 100px;
}

.ace_editdiv.m {
	min-height: 150px;
	height: 150px;
}

.ace_editdiv.l {
	min-height: 250px;
	height: 250px;
}

.ace_editdiv.xl {
	min-height: 350px;
	height: 350px;
}

.ace_editdiv.xxl {
	min-height: 450px;
	height: 450px;
}

.ace_editdiv.xxxl {
	min-height: 850px;
	height: 850px;
}
</style>
