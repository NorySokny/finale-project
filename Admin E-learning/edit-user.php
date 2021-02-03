<!DOCTYPE html>
<html lang="en">
<?php include 'connect_db.php';?>

<!-- Mirrored from edumin.dexignlab.com/xhtml/edit-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 06:54:11 GMT -->
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
	
	<!-- Pick date -->
    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">

</head>

<body>

    <?php 
        $id=$_GET['id']??$_POST['id']??"";
        $redirect='';
        if($_SERVER['REQUEST_METHOD']=='GET'&&isset($_GET['id'])){
            $redirect="all-users.php";
        }
        if($id>0){
            $data_sel="select * from users where id=".$id;
            $data_get=$conn->query($data_sel)->fetch_row();
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $id=stripslashes(trim($_POST['id']));
                $fname=stripslashes(trim($_POST['fname']));
                $lname=stripslashes(trim($_POST['lname']));
                $email=stripslashes(trim($_POST['email']));
                $password=stripslashes(trim($_POST['password']));
                $cpassword=stripslashes(trim($_POST['cpassword']));
                $birthday=stripslashes(trim($_POST['birthday']));
                $gender=stripslashes(trim($_POST['gender']));
                $mobile=stripslashes(trim($_POST['mobile']));

                //     $check="select id,email from users where email=".$email;
                //     $all_email=$conn->query($check)->fetch_all();
                //     if($all_email===TRUE&&count($all_email)==1){
                //         $false=true;
                //         if($id!=$all_email['0']){
                //             $alert_message='<div class="message_alert"><strong>Error:</strong>email already use by other user.</div>';  
                //             $fales=fales;
                //         }     
                //     }elseif($all_email===TRUE){
                //         $alert_message='<div class="message_alert"><strong>Error:</strong>email already use by other user.</div>';
                //         $false=fales;
                //         // foreach($all_email as $data){
                //         //    if($data['1']==$d)
                //     }elseif($password!=$cpassword){
                //         $alert_message='<div class="message_alert">password and confirme password not the same.</div>';
                //         $false=false;
                //     }
                // if($fales){
                    header('location:all-users.php');
                    $update="update users set fname='$fname',lname='$lname'
                            ,email='$email',`password`='$password',Cpassword='$cpassword'
                            ,birthday='$birthday',gender='$gender',mobile='$mobile' where id=".$id;
                    $result_update=$conn->query($update);
                    if($result_update===true){
                        $alert_message='<div class="message_alert">update not successful.</div>';
                        header('location:all-users.php');
                    
                }
            }
        }
            //header('location:edit-user.php');
    ?>


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
    <?php include 'header.php';?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Edit User</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Users</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit User</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">Basic Info</h5>
							</div>
							<div class="card-body">
                                <form action="edit-user.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-12">
                                           <?php echo @$alert_message;?>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
                                                <input type="button" name="search-id-user" class="search-id-user" value="Search ID">
												<input type="text" class="id-user-edit" id="id-user-edit" value="">
                                                
											</div>
										</div>
                                    </div>
                                    <hr size='2px' style="margin-top:-10px;border-color:red;">
									<div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Id</label>
												<input type="text" class="form-control" name="id1" disabled value="<?php echo @$data_get[0]?>">
                                                <input type="hidden" name="id" value="">
                                            </div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">First Name</label>
												<input type="text" class="form-control" name="fname" value="<?php echo @$data_get[1]?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Last Name</label>
												<input type="text" class="form-control" name="lname" value="<?php echo @$data_get[2]?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" class="form-control" name="email" value="<?php echo @$data_get[3]?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Password</label>
												<input type="password" class="form-control" name="password" value="<?php echo @$data_get[4]?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Confirm Password</label>
												<input type="password" class="form-control" name="cpassword" value="<?php echo @$data_get[5]?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Gender</label>
												<select class="form-control" name="gender">
													<option value="male" <?php if(strtolower(@$data_get[7])=="male") echo "selected";?>>Male</option>
													<option value="female" <?php if(strtolower(@$data_get[7])=="female") echo "selected";?>>Female</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mobile Number</label>
												<input type="text" class="form-control" name="mobile" value="<?php echo @$data_get[8]?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date of Birth</label>
												<input  type="date" name="birthday" class="form-control" id="birthday" value="<?php echo @$data_get[6]?>">
											</div>
										</div>										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary" name="submit">Submit</button>
											<button type="reset" class="btn btn-light">Cencel</button>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
				</div>
				
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://web.facebook.com/neth.kh.7967/" target="_blank">Groub-3</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>

	<!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <!-- <script src="js/styleSwitcher.js"></script> -->
	
	<!-- pickdate -->
    <script src="vendor/pickadate/picker.js"></script>
    <script src="vendor/pickadate/picker.time.js"></script>
    <script src="vendor/pickadate/picker.date.js"></script>
	
	<!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>
	
</body>

<!-- Mirrored from edumin.dexignlab.com/xhtml/edit-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 06:54:11 GMT -->
</html>