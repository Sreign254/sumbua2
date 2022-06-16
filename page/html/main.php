
<?php session_start();


$uid = $_SESSION['id'];

?>
 <?php
    include "db.php";
    //get all packages
					$sqlpack = "SELECT id,fullname,email,profileimg FROM lead where id=$uid";
					$stmtpack = $conn->prepare($sqlpack);
					$stmtpack->execute();
					$resultpack = $stmtpack->get_result();
					?>
					<?php
              while ($rowpack = $resultpack->fetch_assoc()) {
							$fullname = $rowpack['fullname'];
							$email = $rowpack['email'];
              $profileimg = $rowpack['profileimg'];
							$id = $rowpack['id'];}
							?>
<!DOCTYPE html>
<html lang="en">
<?php include("header.php"); ?>
<body>


	<!-- SIDEBAR -->
	<?php include("sidebar.php"); ?>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<!--<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>-->
			<a>
			<?php
			if($profileimg==NULL)
                      {
                      echo '<img alt="User Pic" src="https://d30y9cdsu7xlg0.cloudfront.net/png/138926-200.png" id="profile-image1" style="width: 36px;height: 36px;object-fit: cover; border-radius: 50%;"">';
                      }
                      else 
                      {
                      echo '<img alt="User Pic" src="uploads/'.$profileimg .'" id="profile-image1" style="width: 36px; height: 36px;object-fit: cover; border-radius: 50%;" \>';
                      // echo $profileimg;

                      }
                      ?> 
			</a>
		</nav>
		
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="./main.php">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
					
				</div>
				
			</div>

			<ul class="box-info">				
				<li>
					<a href="./survey.php">
                    <i class='bx bx-dumbbell' ></i>
				</a>
				<span class="text">
					<h3></h3>
					
					<p>Add project</p>
				
				</span>
				</li>
				<li>
					<a href="./site.php">
                    <i class='bx bx-dumbbell' ></i>
				</a>
				<span class="text">
					<h3></h3>
					
					<p>Add site</p>
				
				</span>
				</li>
				<li>
					<a href="./survey.php">
                    <i class='bx bx-dumbbell' ></i>
				</a>
				<span class="text">
					<h3></h3>
					
					<p>Site</p>
				
				</span>
				</li>
                
               
			</ul>
           

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Projects</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<?php
					require_once 'db.php';

					//get all packages
					$sqlpack = "SELECT id,siteid,sitename FROM add_project";
					$stmtpack = $conn->prepare($sqlpack);
					$stmtpack->execute();
					$resultpack = $stmtpack->get_result();
					?>
					<table>
						<thead>
							<tr>
								<th>Site Id</th>
								<th>Site Name</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
						<?php
							while ($rowpack = $resultpack->fetch_assoc()) {
							$siteid = $rowpack['siteid'];
							$sitename = $rowpack['sitename'];
							$id = $rowpack['id'];
							?>
							<tr>
								<td>
								<?= $siteid; ?>
								</td>
								<td><?= $sitename; ?></td>
								<td><a class="status completed" href="view.php?edit=<?=$id; ?>">View</span></td>
							</tr>
							<?php  } ?>

						</tbody>
					</table>
				</div>
				<div class="Recent Update">
					<div class="head">
						<h3>Recent Update</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
							</div>
						<?php
					require_once 'db.php';

					//get all packages
					$sqlpack = "SELECT id,siteid,sitename FROM add_project";
					$stmtpack = $conn->prepare($sqlpack);
					$stmtpack->execute();
					$resultpack = $stmtpack->get_result();
					?>
					<table>
						<thead>
							<tr>
								<th>Site Id</th>
								<th>Site Name</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
						<?php
							while ($rowpack = $resultpack->fetch_assoc()) {
							$siteid = $rowpack['siteid'];
							$sitename = $rowpack['sitename'];
							$id = $rowpack['id'];
							?>
							<tr>
								<td>
								<?= $siteid; ?>
								</td>
								<td><?= $sitename; ?></td>
								<td><a class="status completed" href="view.php?edit=<?=$id; ?>"button></button>>View</span></td>
							</tr>
							<?php  } ?>

						</tbody>
					</table>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<?php include('script.php');?>

	
</body>
</html>