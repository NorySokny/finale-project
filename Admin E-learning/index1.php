<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo-zvalley.png">
	<link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin.css">
</head>
<body>
    <!-- connection to database name e_learning assign to object $conn -->
    <?php
    include "connect_db.php";
    ?>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index1.php" class="brand-logo">
                <img class="logo-abbr" src="images/logo-zvalley.png" alt="">
                <h1 class="brand-title">ADMIN</h1>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/education/pic1.jpg" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.php" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.php" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="page-login.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="index1.php" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-user"></i>
							<span class="nav-text">Professors</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-professors.php">All Professor</a></li>
                            <li><a href="add-professor.php">Add Professor</a></li>
                            <li><a href="edit-professor.php">Edit Professor</a></li>
                            <li><a href="professor-profile.php">Professor Profile</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Users</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-users.php">All Users</a></li>
                            <li><a href="add-user.php">Add User</a></li>
                            <li><a href="edit-user.php">Edit User</a></li>
                            <li><a href="about-user.php">About Users</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">Courses</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-courses.php">All Courses</a></li>
                            <li><a href="add-courses.php">Add Courses</a></li>
                            <li><a href="edit-courses.php">Edit Courses</a></li>
                            <li><a href="about-courses.php">About Courses</a></li>
                        </ul>
                    </li>
					
                    <li class="nav-label">Extra</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-th-list"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="page-register.php">Register</a></li>
                            <li><a href="page-login.php">Login</a></li>
                        </ul>
                    </li>
				</ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">			    
                <div class="row">
					<div class=" col-xxl-6 col-sm-12">
						<div class="row">
    <!----------col-xl-6----------------------------------------------->
    <!---------total user it here------------------------------------------>
							<div class=" col-xl-3 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
    <!--==========php script select all users---------------------------------------------- -->
                                        <?php
                                            $sel_all_user="select count(*) as total from users" ;
                                            $total_user=$conn->query($sel_all_user)->fetch_assoc();
                                            // $data=$conn->fetch_assoc($total_user);  
                                        ?>
										<h4 class="card-title">Total Users</h4>
										<h3><?php echo $total_user['total']; ?></h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
										</div>
										<small>80% Increase in 20 Days</small>
									</div>
								</div>
                            </div>

    <!---------end total user it here------------------------------------------>
    <!---------all student register course------------------------------------------>
                           <div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">All Student Register course</h4>
										<h3>145</h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-warning" style="width: 50%"></div>
										</div>
										<small>50% Increase in 25 Days</small>
									</div>
								</div>
                            </div>
    <!---------end all student register course------------------------------------------>
    <!---------Total course------------------------------------------>
							<div class="col-xl-3 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">Total Course</h4>
										<h3>28</h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-red" style="width: 76%"></div>
										</div>
										<small>76% Increase in 20 Days</small>
									</div>
								</div>
                            </div>
    <!---------end Total course------------------------------------------>
    <!---------current active lesson------------------------------------------>
							<div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">Current Active Lesson</h4>
										<h3>25</h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-success" style="width: 30%"></div>
										</div>
										<small>1 week ago</small>
									</div>
								</div>
                            </div>
    <!---------end current active lesson------------------------------------------>
    <!---------start total test------------------------------------------>
                            <div class="col-xl-6 col-xxl-6 col-sm-6">
								<div class="widget-stat card">
									<div class="card-body">
										<h4 class="card-title">Total Test</h4>
										<h3>32</h3>
										<div class="progress mb-2">
											<div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
										</div>
										<small>80% Pass Test</small>
									</div>
								</div>
							</div>
						</div>
                    </div>					
    <!---------end start total test------------------------------------------>
    <!---------start professors list------------------------------------------>
                    <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-12">
						<div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Professors List</h4>
                            </div>
                            <div class="card-body">
								<div class="media mb-3 align-items-center border-bottom pb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="images/profile/education/nethphoto.jpg">
                                    <div class="media-body">
                                        <h5 class="mb-0 text-pale-sky">Nory Sokny<small class="text-muted">( B.Com )</small></h5>
                                        <small class="text-primary mb-0">Available</small>
									</div>
								</div>
								<div class="media mb-3 align-items-center border-bottom pb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="images/profile/education/dyna.jpg">
                                    <div class="media-body">
                                        <h5 class="mb-0 text-pale-sky">Dyna<small class="text-muted">( M.Com )</small></h5>
                                        <small class="text-danger mb-0">Available</small>
									</div>
								</div>
								<div class="media mb-3 align-items-center border-bottom pb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="images/profile/education/sopheak.jpg">
                                    <div class="media-body">
                                        <h5 class="mb-0 text-pale-sky">Onn Sopheak <small class="text-muted">( M.Tach  )</small></h5>
                                        <small class="text-primary mb-0">Available</small>
									</div>
								</div>
								<div class="media mb-3 align-items-center border-bottom pb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="images/profile/education/linda.jpg">
                                    <div class="media-body">
                                        <h5 class="mb-0 text-pale-sky">Linda Ear<small class="text-muted">( B.Tach  )</small></h5>
                                        <small class="text-danger mb-0">Available</small>
									</div>
								</div>
								<div class="media mb-2 align-items-center border-bottom pb-3">
                                    <img class="mr-3 rounded-circle" alt="image" width="50" src="images/profile/education/pic5.jpg">
                                    <div class="media-body">
                                        <h5 class="mb-0 text-pale-sky">Morese Sharpe <small class="text-muted">( B.A, M.A )</small></h5>
                                        <small class="text-primary mb-0">Available</small>
									</div>
								</div>
								<div class="text-center pt-3">
									<a href="javascript:void(0);" class="btn btn-primary btn-rounded btn px-5 btn-lg">View All</a>
								</div>
							</div>
						</div>
					</div>
					
    <!---------end start professors list------------------------------------------>
    <!---------start users list------------------------------------------>
                <?php
                $select="SELECT id, fname, lname, email FROM users";
                $result=$conn->query($select)->fetch_all();
                $message='';
                   if(!isset($result)){
                       $message="selection is not successful";
                   }else{
                       $message="selection is successful";
                   }
                ?>
                    <div class="col-xl-8 col-lg-8 col-xxl-8 col-md-12">
						<div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Users list</h4>
                            </div>
                            <div class="card-body">
							    <div class="table-responsive users-list">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">User_Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $i=0;
                                            foreach($result as $val){
                                                echo '<tr>
                                                    <td>'.++$i.'</td>
                                                   <td>'.$val[0].'</td>
                                                   <td>'.$val[1]." ".$val[2].'</td>
                                                   <td>'.$val[3].'</td>
                                                   <td>
                                                   <a class="dropdown-item" href="about-user.php?id='.$val[0].'">Details</a>
                                                   </td>
                                                   </tr>';} ?>                                           
                                        </tbody>
                                    </table>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
						<div class="card profile-tab">
                            <div class="card-header">
                                <h4 class="card-title">List of Student's Registration</h4>
                            </div>
        <!-- select student's registration from database--------------------------------------------->
                            <?php
                                $sel_stu_reg="SELECT s.`no`, s.`course`, u.`fname`,u.`lname`, u.`email`, s.`registration_date` FROM student_register AS s  INNER JOIN users as u ON s.`student_id`=u.`id`" ;              
                                $s_register=$conn->query($sel_stu_reg)->fetch_all();
                                if(!isset($s_register)){
                                    $message="Error";
                                }          
                            ?>
							<div class="card-body custom-tab-1">
								<ul class="nav nav-tabs mb-3">
									<li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link pb-2">Student's Registration</a></li>
								</ul>
								<div class="tab-content">
									<div id="profile-settings" class="tab-pane fade">
										<div class="table-responsive">
											<table class="table table-responsive-md">
												<thead>
													<tr>
														<th scope="col">No</th>
														<th scope="col">Course</th>
														<th scope="col">Student_name</th>														
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Register_Date</th>
														<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
                                                <?php
                                            foreach($s_register as $reg){
                                                echo '<tr>
                                                   <td>'.$reg[0].'</td>
                                                   <td>'.$reg[1].'</td>
                                                   <td>'.$reg[2]." ".$reg[3].'</td>
                                                   <td>'.$reg[4].'</td>
                                                   <td>'.$reg[5].'</td>
                                                   <td>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="edit"><i class="la la-pencil"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                    </td>
                                                   </tr>';} ?>   
												</tbody>
											</table>
										</div>
									</div>
								</div>
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
                <p>Copyright © Designed &amp; Developed by <a href="javascript:void()" target="_blank">Groub-3</a> 2021</p>
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
		<!-- Demo scripts -->
    <script src="js/dashboard/dashboard-2.js"></script>
	
	<!-- Svganimation scripts -->
    <!-- <script src="vendor/svganimation/vivus.min.js"></script>	 -->
    <script src="vendor/svganimation/svg.animation.js"></script>
</body>
</html>