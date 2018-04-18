
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Database</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="../index.html"> <?php echo "I-RESERVATION"; ?> </a>
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
                        <a  href="../index.html"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    
                    </ul>

            </div>


        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                          Schedule availibility<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                         <tr>
                                            <th>Time in</th>

                                            <th>Name</th>
                                           
                                            <th>Venue</th>
                                            <th>Date</th>
                                            
                                          

                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                            $cvenue = $_POST["cvenue"];
                                            $cdate = $_POST["cdate"];
                                            $ctime = $_POST["ctime"];

                                        ?>

									<?php
									
                                    
                                    
                                        $con=mysqli_connect("localhost","root","hahaha123","booking");
										$tsql = "SELECT Date,Timein,FName,Venue FROM venuebook WHERE Venue = '$cvenue' AND Date = '$cdate' ORDER BY Date AND Timein";
                                        $tre = mysqli_query($con,$tsql);
                                        while($trow=mysqli_fetch_array($tre) )
										{

										          echo"<tr>
                                                <th>".$trow['Timein']."</th>
                                                <th>".$trow['FName']."</th>
                                              
                                                <th>".$trow['Venue']."</th>
                                                <th>".$trow['Date']."</th>
                                                
												</tr>";
											
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
