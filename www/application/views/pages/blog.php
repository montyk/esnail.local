<div class="blog-page-box">
	<h1>Blog Entries</h1>
</div>
 <?php foreach (ORM::factory('News')->find_all() as $news): ?>
	  <div class="entries-single">
	      <div class="single-entry-date">
	          <h2><?php echo $news->title; ?></h2>
	          August 12<sup>th</sup>, 2013
	          <? //=$n->date_month.' '.$n->date_day.'<sup>'.$n->date_suffix.'</sup>, '.$n->date_year;?>
      </div>
      <div class="single-entry-text">             
      	<?=$news->content;?>
      </div>
      <div class="clear"></div>
</div>
<?php endforeach; ?>