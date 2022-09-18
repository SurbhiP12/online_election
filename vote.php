<?php include("./session.php") ?>
<?php include("./header.php") ?>
<body>
<?php include("./nav.php"); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-auto">
		<?php
			if(isset($_POST['submitVote']))
				{
					if(!isset($_POST['pm']))
					{
						$_SESSION['pm'] = "";
					}
					else
					{
						$_SESSION['pm'] = $_POST['pm'];
					}
					if(!isset($_POST['pre']))
					{
						$_SESSION['pre'] = "";
					}
					else
					{
						$_SESSION['pre'] = $_POST['pre'];
					}
					if(!isset($_POST['lss']))
					{
						$_SESSION['lss'] = "";
					}
					else
					{
						$_SESSION['lss'] = $_POST['lss'];
					}
					if(!isset($_POST['cji']))
					{
						$_SESSION['cji'] = "";
					}
					else
					{
						$_SESSION['cji'] = $_POST['cji'];
					}
					
				}
		?>
                </div>
            </div>
        </div>
        <h4 class="card-header bg-info" align="center">YOUR POLLS</h4><br>
        <div class="container-fluid" align="center">
                <!-- Prime minister -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center"  style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Prime minister</h5>
                        <div class="card-body">
                            <?php
                                if ($_SESSION["pm"]) {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pm]'")->fetch_array();
                                    ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>POLITICAL PARTY: </b><?php echo $fetch["party"];?></p> 
                                    
                                <?php
                                
                                } else {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                }
                            ?>
                            </div>
                    </div>
                </div>
                <br> 
                <!-- President-->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">President</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["pre"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pre]'")->fetch_array();
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>POLITICAL PARTY: </b><?php echo $fetch["party"];?></p> 

                                <?php 
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <br> 
                <!--LOK SABHA SPEAKER -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Lok sabha speaker</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["lss"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[lss]'")->fetch_array();
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>POLITICAL PARTY: </b><?php echo $fetch["party"];?></p> 

                                <?php 
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <br> 
                <!--chief justice -->
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">chief justice of india</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["cji"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[cji]'")->fetch_array();
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>POLITICAL PARTY: </b><?php echo $fetch["party"];?></p> 

                                <?php 
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <br> 
                
        <?php include("./confirm_modal.php"); ?>  
    </main>
</body>
</html>