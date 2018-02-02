<header class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<a href="index.php" class="navbar-brand">CMS System</a>
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#">Home</a></li>
				<?php
					$sql_stm = "SELECT * FROM category";
					$run_sql = mysqli_query($conn,$sql_stm);
					while ($rows = mysqli_fetch_assoc($run_sql)) {
						# code...
						if(isset($_GET['category'])){
							if($_GET['category'] == $rows['cat_name']){
								$class = 'active';
							}else{
								$class = '';
							}
						}else{
							$class = '';
						}
						
						echo '<li class="'.$class.'"><a href="menu.php?category='.$rows['cat_name'].'">'.ucfirst($rows['cat_name']).'</a></li>';
					}
				?>
				<li><a href="#">Articles</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="#">Logout</a></li>
			</ul>

		</div>
	</header>