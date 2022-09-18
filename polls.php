<?php include("./session.php"); ?>
<?php include("./header.php"); ?>
<body>
<?php include("./nav.php"); ?>    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" >
        
    <form action="./vote.php" method="post" align="center">
            <div class="container">
                <!-- PRIME MINISTER -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" >
                            <h1 class="h4 card-header text-white bg-info">Candidates For PRIME MINISTER</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'PRIME MINISTER'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>POLITICAL PARTY: </b><?php echo $fetch["party"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="pm" class="pm" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>                                                                                           
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- PRESIDENT -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For PRESIDENT</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'PRESIDENT'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>POLITICAL PARTY: </b><?php echo $fetch["party"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="pre" class="pre" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!--LOK SABHA SPEAKER -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For LOK SABHA SPEAKER</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'LOK SABHA SPEAKER'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                               
                                <b>POLITICAL PARTY: </b><?php echo $fetch["party"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="lss" class="lss" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- (chief justice) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For CHIEF JUSTICE OF INDIA</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'CHIEF JUSTICE OF INDIA'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>POLITICAL PARTY: </b><?php echo $fetch["party"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="cji" class="cji" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row" align="center">
                    <div class="col-lg-6">
                        <button class = "btn btn-success" type = "submit" name = "submitVote"> SUBMIT VOTE </button>    
                    </div>
                </div>
            </div>
        </form>
        
    </main>
    <script type="text/javascript" src="./assets/js/main.js"></script>
</body>
</html>