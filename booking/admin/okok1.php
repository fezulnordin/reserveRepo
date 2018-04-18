
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><body>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>i-Reservation</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
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

            </div>


        </nav>
   <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Check the availibility now! <small></small>
                        </h1>
                    </div>
                </div>
                 
                                 
            <div class="row">


<div class="row">
	<div class="col-md-6 col-sm-6">
		 <div class="panel panel-primary">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>
                          <div class="panel-body">
							<div class="form-group">
								<form action="testcolumn.php" method="post">
											<label>Venue </label>
 											<select name="cvenue"  class="form-control" required>
                                                <option value selected ></option>
                                                <option value="Futsal">Futsal Court</option>
                                                <option value="Handball">Handball Court</option>
                                                <option value="Football">Football Field</option>
                                                <option value="Basketball">Basketball court</option>
                                                <option value="Volleyball">Volleyball court</option>
                                                <option value="Rugby">Rugby Field</option>
                                      		</select>
                       					 </div>


										<div class="form-group">
											<label>Date</label>
											<input type= "date" name="cdate" class="form-control" required>
										</div>

										<div class="form-group">
                                            <label>Time In</label>
                                            <select name="ctime"  class="form-control" required>
                                                <option value selected ></option>
                                              
                                                <option value="0800">08:00 AM</option>
                                                <option value="0900">09:00 AM</option>
                                                <option value="1000">10:00 AM</option>
                                                <option value="1100">11:00 AM</option>
                                                <option value="1200">12:00 PM</option>
                                                <option value="1300">01:00 PM</option>
                                                <option value="1400">02:00 PM</option>
                                                <option value="1500">03:00 PM</option>
                                                <option value="1600">04:00 PM</option>
                                                <option value="1700">05:00 PM</option>
                                                <option value="1800">06:00 PM</option>
                                                <option value="1900">07:00 PM</option>
                                                <option value="2000">08:00 PM</option>
                                                <option value="2100">09:00 PM</option>
                                                <option value="2200">10:00 PM</option>
                                                <option value="2300">11:00 PM</option>
                                               
                                      		</select>
                                            
                              			 </div>

										<input type="submit" class="btn btn-primary">
</div>
</div>
							</div>
								</form>


<script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    </body>
</html>