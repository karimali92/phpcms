<aside class="col-lg-4">
			<form class="panel-group form-horizontal" action="search.php" role="form">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="panel-header">
							<h4>Search Panel</h4>
						</div>
						<div class="input-group">
							<input type="Search" name="search" class="form-control" placeholder="Search here ...">
							<div class="input-group-btn">
								<button class="btn btn-default" name="search_submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
						
					</div>
					
				</div>
			</form>
			<form role="form" class="panel-group form-horizontal">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>login form</h4>
					</div>
					<div class="panel-body">

						<div class="form-group">
							<label class="control-label col-sm-3" for="username">Username</label>
							<div class="col-sm-8">
								<input type="text" name="username" id="username" placeholder="Enter your Email" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3" for="password">Password</label>
							<div class="col-sm-8">
								<input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-3"></label>
							<div class="col-sm-8">
								<input type="submit" value="login" class="btn btn-success btn-block">
							</div>
						</div>
					</div>
				</div>
			</form>
<div class="list-group">
				<?php
					$post_query = "SELECT * FROM posts";

					$post_sql = mysqli_query($conn,$post_query);

					while ($rows = mysqli_fetch_array($post_sql)) {

						if(isset($_GET['id'])){
							if ($_GET['id'] == $rows['id']) {
								# code...
								$class = 'active';
							}else{
								$class = '';
							}
						}else{
							$class = '';
						}
						echo '<a href="post.php?id='.$rows['id'].'" class="list-group-item '.$class.'">
								<div class="col-sm-4">
									<img src="'.$rows['image'].'" width="100%">
								</div>
								<div class="col-sm-8">
									<h4 class="list-group-item-heading">'.$rows['title'].'</h4>
									<p class="list-group-item-text">'.substr($rows['description'],0,50).'</p>
								</div>
								<div style="clear:both"></div>
								
							</a>
						';
					}
				?>
				
</div>
</aside>