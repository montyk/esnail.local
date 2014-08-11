<div class="container">
	<div class="row-fluid">
		<div class="span8">
			<h3>Piece of news</h3>
		</div>
		<div class="span4 subheader-buttons">
			<ul class="nav nav-pills">
				<li class="pull-right"><a href="/manage/news/">&laquo; Back to News</a></li>
			</ul>
		</div>
	</div>
	<?php $this->load->view('admin/subheader'); ?>
	<?=$form['open'];?>
	<label for="title">Title*:</label>
	<?=$form['title'];?>
	<label for="added_on">Added on (YYYY-MM-DD HH:MM:SS):</label>
	<?=$form['added_on'];?>
	<label for="excerpt">Excerpt:</label>
	<?=$form['excerpt'];?><br>
	<label for="content">Content*:</label>
	<?=$form['content'];?><br>
	<?=$form['submit'];?>
	<?=$form['close'];?>

</div>
<script src="/js/tinymce/tinymce.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){

	tinyMCE.init({
	        mode : "textareas",
	        plugins: ["image wordcount table code"]
	});
});
</script>