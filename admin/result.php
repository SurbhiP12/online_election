<?php include("./session.php"); ?>
<?php include("./header.php"); ?>
<body>
<?php include("./nav.php"); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="container">
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2" style="text-align:center;"><i class="fa fa-fw fa-list-alt"></i> View Election Result</h1>
        </div>
        <div class="card">
             <h4 class="card-header bg-secondary" align="center">View Election Result</h4>
            <div class="card-body">
                <form action="sort.php" method="post">
                    <div class="form-group">
                        <select name="position" id="position" class = "form-control custom-select" style = "width:300px;">
							<option readonly> --- Select by Position --- </option>
							<option>PRIME MINISTER</option>
							<option>PRESIDENT</option>
							<option>LOK SABHA SPEAKER</option>
							<option>CHIEF JUSTICE OF INDIA</option>
                        </select>
                         <button id="sort" class="btn btn-warning">SORT</button>
                         <button type="button" onclick="window.print();" style="margin-right:14px;" id ="print" class="pull-right btn btn-success"><i class = "fa fa-print"></i> Print Out Result</button>
                    </div>
                </form>
                <hr>
                <div class="table-responsive">
                <!-- PRIME MINISTER -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For PRIME MINISTER</h4>
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
							<th scope="col">Image</th>
                            <th scope="col">Total Votes</th>
                        </tr>
                    </thead>
                    <?php
                        require("./conn.php");
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'PRIME MINISTER'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>POLITICAL PARTY: </b><?php echo $fetch ['party'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- PRESIDENT -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For PRESIDENT</h4>
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
							<th scope="col">Image</th>
                            <th scope="col">Total Votes</th>
                        </tr>
                    </thead>
                    <?php
                        require("./conn.php");
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'PRESIDENT'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>POLITICAL PARTY: </b><?php echo $fetch ['party'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- LOK SABHA SPEAKER -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For LOK SABHA SPEAKER</h4>
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
							<th scope="col">Image</th>
                            <th scope="col">Total Votes</th>
                        </tr>
                    </thead>
                    <?php
                        require("./conn.php");
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'LOK SABHA SPEAKER'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>POLITICAL PARTY: </b><?php echo $fetch ['party'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- CHIEF JUSTICE OF INDIA -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For CHIEF JUSTICE OF INDIA</h4>
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
							<th scope="col">Image</th>
                            <th scope="col">Total Votes</th>
                        </tr>
                    </thead>
                    <?php
                        require("./conn.php");
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'CHIEF JUSTICE OF INDIA'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>POLITICAL PARTY: </b><?php echo $fetch ['party'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
            </div>
            </div>
        </div>
    </div>
</main>   
</body>
</html>