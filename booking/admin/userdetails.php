

<?php
		if(!isset($_GET["rid"]))
		{
				
			 header("location:index.php");
		}
		else {
				$curdate=date("d/m/Y");
				include ('db.php');
				$id = $_GET['rid'];
				
				
				$sql ="Select * from venuebook where id = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					$title = $row['Title'];
					$fname = $row['FName'];
					$matric = $row['Matric'];
					$email = $row['Email'];
					$userstatus = $row['Userstatus'];
					$kulliyyah = $row['Kulliyyah'];
					$Phone = $row['Phone'];
					$venue = $row['Venue'];
					$date = $row['Date'];
					$timein = $row['Timein'];				
				}
					
					
				
		
	}
		
?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Confirmation</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.html"> <?php echo "i-RESERVATION"; ?> </a>
            </div>

            
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.html"><i class="fa fa-home"></i> Homepage</a>
                    </li>
           <li>
                        <a  href="reservation_v2.php"><i class="fa fa-book"></i> Reservation form</a>
                    </li>

                    <li>
                        <a  href="okok1.php"><i class="fa fa-check"></i> Venue availability</a>
                    </li>

                    <li>
                        <a  href="index.php"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    
                    </ul>


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Booking Confirmation<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Booking details
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>ITEM</th>
                                            <th>INFORMATION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th><?php echo $title.$fname; ?> </th>
                                            
                                        </tr>
                                          <tr>
                                            <th>Matric number</th>
                                            <th><?php echo $matric; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>User Status </th>
                                            <th><?php echo $userstatus; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Kulliyyah </th>
                                            <th><?php echo $kulliyyah;  ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Phone No </th>
                                            <th><?php echo $Phone; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Venue </th>
                                            <th><?php echo $venue; ?></th>
                                            
                                        </tr>
									
										<tr>
                                            <th>Booking Date </th>
                                            <th><?php echo $date; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Time In</th>
                                            <th><?php echo $timein; ?></th>
                                            
                                        </tr>

                                       
									
                                   
                                  
                              
                                        
                                    
                                </table>
                            </div>
                        
					
							
                        </div>
                        <div class="panel-footer">
                            <form method="post">
										<div class="form-group">
														<label>Click to print</label>
														
										 </div>
							<input type="submit" name="submit" class="btn btn-success">
							<?php
							if(isset($_POST['submit']))
							{
								
								echo "<script type='text/javascript'>window.location = 'userprint.php?sid=".$id." ';</script>";
							}
								?>
							</form>
                        </div>
                    </div>
					</div>
				
                            
                        </div>
                    </div>
					</div>
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
         </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>
