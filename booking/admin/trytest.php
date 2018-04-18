<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.html"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Title</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Br.">Br.</option>
                                                <option value="Sr.">Sr.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
												<option value="Dr.">Dr.</option>
												<option value="Prof">Prof</option>
												
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Full Name</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Matric Number</label>
                                            <input name="matric" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>E-mail</label>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>User Status</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="userstatus"  value="Student" checked="">Student
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="userstatus"  value="Staff">Staff
                                            </label>
                         
                                </div>
								<?php

								$kulliyyah = array("LAWS", "ENMS", "IRKHS", "ENGINEERING", "ARCHITECTURE", "EDUCATION", "SCIENCE", "ICT", "CELPAD", "KLM" );

								?>
								<div class="form-group">
                                            <label>Kulliyyah</label>
                                            <select name="kulliyyah" class="form-control" required>
												<option value selected ></option>
                                                <?php
												foreach($kulliyyah as $key => $value):
												echo '<option value="'.$value.'">'.$value.'</option>';
												endforeach;
												?>
                                            </select>
								</div>
								<div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                    <label>Venue </label>
                                      <select name="venue"  class="form-control" required>
                                                <option value selected ></option>
                                                <option value="Futsal">Futsal Court</option>
                                                <option value="Badminton">Badminton Court</option>
                                                <option value="Football">Football Field</option>
                                                <option value="Basketball">Basketball</option>
                                      </select>
                        </div>
            




                              <!--
							  <div class="form-group">
                                            <label>Type</label>
                                            <select name="bed" class="form-control" required>
												<option value selected ></option>
                                                <option value="Single">1</option>
                                                <option value="Double">2</option>
												<option value="Triple">3</option>
                                                <option value="Quad">Q4</option>
												<option value="None">5</option>
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>No.of *</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                             
                                            </select>
                              </div>
							 
							 
							  <div class="form-group">
                                            <label>Meal Plan</label>
                                            <select name="meal" class="form-control"required>
												<option value selected ></option>
                                                <option value="Room only">1</option>
                                                <option value="Breakfast">2</option>
												<option value="Half Board">3</option>
												<option value="Full Board">4</option>
												
                                                
                                             
                                            </select>
                              </div> 
                          -->


							  <div class="form-group">
                                            <label>Date</label>
                                            <input name="Date" type ="date" class="form-control" required>
                                            
                               </div>

							   <div class="form-group">
                                            <label>Time In</label>
                                            <select name="Timein"  class="form-control" required>
                                                <option value selected ></option>
                                                <option value="0600">06:00 AM</option>
                                                <option value="0700">07:00 AM</option>
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

                                <div class="form-group">
                                            <label>Time Out</label>
                                            <input name="Timeout" type ="time" class="form-control">
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>VERIFICATION</h4>
                        <h2><?php $Random_code=rand(); echo$Random_code; ?> </h2>
						<p>Please enter the code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
							
									$con=mysqli_connect("localhost","root","hahaha123","booking");
									$check="SELECT * FROM roombook WHERE venue = '$_POST[venue]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
										
									}

									else
									{
										$new ="Not Conform";
										$newUser="INSERT INTO `roombook`(`Title`, `FName`, `Matric`, `Email`, `Userstatus`, `Kulliyyah`, `Phone`, `Venue`, `Timeout`, `Date`, `Timein`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[matric]','$_POST[email]','$_POST[userstatus]','$_POST[kulliyyah]','$_POST[phone]','$_POST[venue]','$_POST[Timeout]','$_POST[Date]','$_POST[Timein]','$new',timediff('$_POST[Timeout]','$_POST[Timein]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							$msg="Your code is correct";
							}
							}
							?>
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
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
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
