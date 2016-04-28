
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
				<div class="panel-heading">
					News Archive
				</div>
				<div class="panel-body">
					
					<?php foreach($news as $news_item): ?>

						<h3><?php echo $news_item['title']; ?></h3>
						<div class="main">
							<?php echo $news_item['text']; ?>
						</div>
						<p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>"><?php echo lang('view_articles'); ?></a></p>
						<hr />
					<?php endforeach; ?>

				</div>
			</div>
			
		</div> <!-- /.col -->
	</div> <!-- /.row -->
</div> <!-- /.container -->

