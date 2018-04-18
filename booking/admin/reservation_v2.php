<!-- This following code was written as a project for Object oriented software engineering course in 
  Interneational Islamic University Malaysia. For any question, please email me at fezulnordin@gmail.com -->


<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
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
                        <a  href="index.php"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    
                    </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Form <small>Please fill in the form below</small>
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
                                      <select name="Venue"  class="form-control" required>
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
                                            <input name="Date" type ="date" class="form-control" required>
                                            
                               </div>

                               <div class="form-group">
                                            <label>Time In</label>
                                            <select name="Timein"  class="form-control" required>
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

                                    $sql1="SELECT Venue FROM venuebook WHERE Venue = '$_POST[Venue]'";
                                    $sql2="SELECT Date FROM venuebook WHERE Date = '$_POST[Date]'";
                                    $sql3="SELECT Timein FROM venuebook WHERE Timein = '$_POST[Timein]'";

                                    $result1=mysqli_query($con,$sql1);
                                    $result2=mysqli_query($con,$sql2);
                                    $result3=mysqli_query($con,$sql3);



                                    $row1=mysqli_fetch_array($result1,MYSQLI_NUM);
                                    $row2=mysqli_fetch_array($result2,MYSQLI_NUM);
                                    $row3=mysqli_fetch_array($result3,MYSQLI_NUM);
                                    //echo $row[0];
                                    

                                    
                                    $checkvenue = $_POST['Venue'];
                                    $checkdate = $_POST['Date'];
                                    $checktime = $_POST['Timein'];
                                   // echo $checkvenue;
                                    
                                    if (($checkvenue == $row1[0]) && ($checkdate == $row2[0]) && ($checktime == $row3[0]) ) {
                                            echo "<script type='text/javascript'> alert('The selected time/date already booked by someone else. Please check the schedule.')</script>";
                                        }
                                 

                                    else
                                    {
                                        
                                        $newUser="INSERT INTO `venuebook`(`Title`, `FName`, `Matric`, `Email`, `Userstatus`, `Kulliyyah`, `Phone`, `Venue`, `Date`, `Timein`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[matric]','$_POST[email]','$_POST[userstatus]','$_POST[kulliyyah]','$_POST[phone]','$_POST[Venue]','$_POST[Date]','$_POST[Timein]')";
                                        if (mysqli_query($con,$newUser))
                                        {
                                            echo "<script type='text/javascript'> alert('You will be redirect to confirmation page')</script>"; 
                                            $last_id = mysqli_insert_id($con);                                            
                                            echo "<script type='text/javascript'>window.location = 'userdetails.php?rid=".$last_id." ';</script>";                        
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
           
                
                </div>
                    
            
                
                    </div>
                       
            
			
				<!-- DEOMO-->
				
				
				<!--DEMO END-->
				
										
                    

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