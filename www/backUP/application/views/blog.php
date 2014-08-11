<div class="blog-page-box">
	<h1>Blog Entries</h1>
</div>
<?php foreach($news as $n): ?>
<div class="content-box blog-page-box entries-single">
      <div class="single-entry-date">
          <h2><?=$n->title?></h2>
           <?=$n->date_month.' '.$n->date_day.'<sup>'.$n->date_suffix.'</sup> '.$n->date_year;?>
      </div>
      <div class="single-entry-text">             
      	<?=$n->content;?>
      </div>
      <div class="clear"></div>
</div>
<?php endforeach; ?>