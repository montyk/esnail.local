<div class="container">
	<div class="row-fluid">
		<div class="span8">
			<h3>News</h3>
		</div>
		<div class="span4 subheader-buttons">
			<a href="/manage/news/add/" class="btn btn-success">Add a piece of News</a>
		</div>
	</div>
	<?php $this->load->view('admin/subheader'); ?>
	<div class="row-fluid">
		<div class="span12">
			<table class="table table-condensed table-bordered table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Excerpt</th>
						<th style="width: 100px;">Added On</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($news as $n): ?>
					<tr>
						<td><?=$n->id;?></td>
						<td><?=$n->title;?></td>
						<td><?=$n->excerpt;?></td>
						<td><?=date("F jS Y", strtotime($n->added_on));?></td>
						<td style="width: 80px;">
							<a href="/manage/news/edit/<?=$n->id;?>/" class="btn btn-info btn-mini">Edit</a>
							<a href="/manage/news/delete/<?=$n->id;?>" class="btn btn-danger btn-mini delete">Delete</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

<script type="text/javascript" src="/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".delete").bind('click', function(e){
		var r = confirm("Are you sure you want to delete this piece of news?");
		if(r==true){
			return true;
		}
			else{
				return false;
			}
	})

	$(".table").dataTable({
        "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
        "iDisplayLength ": 5,
        "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
    });

})
</script>