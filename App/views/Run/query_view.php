<?php include base_url('App/views/header.php') ?>
<link rel="stylesheet" type="text/css" href="<?=base_url('App/views/Run/codemirror/lib/codemirror.css')?>">
<script src="<?=base_url('App/views/Run/codemirror/lib/codemirror.js')?>"></script>
<script src="<?=base_url('App/views/Run/codemirror/mode/'.$mode.'/'.$mode.'.js')?>"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url('App/views/Run/codemirror/theme/material-darker.css')?>">
<style type="text/css">
	.CodeMirror{
		font-family: monospace;
		font-size: 25px;
	}
</style>
<div class="sticky-top bg-white">
	<span class="display-4 mb-5">Database: <?=$curr_dbname?></span>
	<div class="h3 pt-3"><a class="badge badge-primary mr-3" href="<?=base_url()?>">Back</a><a class="badge badge-primary" href="<?=base_url('Database/add')?>">Add Table</a></div>
	<hr class="bg-info">
	<textarea id="editor">select * from logs</textarea>
	<button onclick="run_query()" id="submitQuery" class="btn btn-success mt-3 mr-3 ">
		<i class="fa fa-send"></i>&nbsp;&nbsp;Run
	</button>
	<hr class="bg-info">
</div>

<div class="row mt-5 mb-5">
	<div class="p-3 col-lg-10 offset-lg-1 border">
		<span style="display:none;" id="loader" class="alert alert-primary">Loading...</span>
		<div id="result"></div>
	</div>
</div>

<script type="text/javascript">
	var editor = CodeMirror.fromTextArea(document.getElementById('editor'),{
				lineNumbers:true,
				mode:'<?=$mode?>',
				theme:'material-darker'
			});
			editor.setSize(window.width,100);
			const run_query = () => {
				
				$("#loader").toggle();
				$("#result").empty();
				var editorVal = editor.getValue();
				editorVal = "code="+editorVal;
				var xhttp = new XMLHttpRequest();
				xhttp.open('POST', '<?=base_url('Database/query_handle')?>', true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						$("#loader").toggle();
						console.log(this.responseText);
						$('#result').html(this.responseText);
					}
				}
				xhttp.send(editorVal);console.log('here');
			}
	$(document).ready(function(){
		$(document).keyup(function(){
			var e = e || window.event;
			if(e.ctrlKey && e.which == 13) {
				run_query();
				return false;
			}
		});
	});

</script>
<?php base_url('App/views/footer.php') ?>