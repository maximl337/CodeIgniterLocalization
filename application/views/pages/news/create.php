<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">

			<div class="panel panel-default">
				<div class="panel-header">
					Create News		
				</div>

				<div class="errors">
					<?php echo validation_errors(); ?>
				</div>
				<!-- /.panel-header -->
				<div class="panel-body">

					<?php echo form_open('news/create'); ?>

						<div class="form-group">
							<label for="title">Title</label>
						    <input class="form-control" type="input" name="title" />
					    </div>

						<div class="form-group">
						    <label for="text">Text</label>
						    <textarea name="text"></textarea>
					    </div>

						<div class="form-group">
							<input class="form-control btn btn-primary" type="submit" name="submit" value="Create news item" />
						</div>
					    

					</form>
					
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel panel-default -->
			
			
		</div>
		<!-- /.col-md-4 col-md-offset-4 -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container -->