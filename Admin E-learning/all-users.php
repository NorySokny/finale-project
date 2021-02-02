<!DOCTYPE html>
<html lang="en">

<?php include 'connect_db.php'; ?>
<!-- Mirrored from edumin.dexignlab.com/xhtml/all-students.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 06:54:11 GMT -->
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo-zvalley.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
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
                            <li><a href="add-user.php">Add Users</a></li>
                            <li><a href="edit-user.php">Edit Users</a></li>
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
        <?php 
        $select_all="SELECT * FROM users";
        $result=$conn->query($select_all)->fetch_all();
                       $message='';
                          if(!isset($result)){
                            $message = "<div style='margin-top:10px;color:white;' class='alert alert-danger' role='alert'>selection not Successful</div>";
                          }else{
                            $message = "<div style='margin-top:10px;color:white;' class='alert alert-success' role='alert'>selection  Successful</div>";
                          }

        ?>
		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>All Users</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Users</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">All Users</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<ul class="nav nav-pills mb-3">
							<li class="nav-item"><a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">List View</a></li>
						</ul>
					</div>
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">All Users List  </h4>
										<a href="add-user.php" class="btn btn-primary">+ Add new</a>
									</div>
									<div class="card-body">
                                    <div class="display_message"></div>
										<div class="table-responsive">
											<table id="example3" class="display" style="min-width: 1000px">
												<thead>
													<tr>
														<th>Id</th>
														<th>Fname</th>
														<th>Lname</th>
														<th>Email</th>
														<th>Password</th>
														<th>Cpassword</th>
														<th>Birthday</th>
														<th>Gender</th>
														<th>mobile</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>	
                                                    <?php
                                                        foreach($result as $data){
                                                            echo "<tr class='item".$data[0]."'>
                                                            <td>".$data[0]."</td>
                                                            <td>".$data[1]."</td>
                                                            <td>".$data[2]."</td>
                                                            <td>".$data[3]."</td>
                                                            <td>".$data[4]."</td>
                                                            <td>".$data[5]."</td>
                                                            <td>".$data[6]."</td>
                                                            <td>".$data[7]."</td>
                                                            <td>".$data[8]."</td>
                                                            <td>
                                                                <a href='edit-user.php?id=".$data[0]."' class='btn btn-sm btn-primary'><i class='la la-pencil'></i></a>
                                                                <a data-id='".$data[0]."' class='btn btn-sm btn-danger delete_user'><i class='la la-trash-o'></i></a>
                                                            </td>
                                                        </tr>";
                                                        }
                                                    
                                                    ?>	
                        				
													
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
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Groub-3</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
 <script type="text/javascript">
    $(document).ready(function(){
        $('.delete_user').click(function(){
            var user_id=$(this).attr("data-id");
                $.ajax({
                        data: { id :user_id},
                        url: "delete_user.php",
                        method: "post",
                        success: function(data){
                            var data = JSON.parse(data);
                            if(data.status == 1)
                                {
                                    $(".item"+user_id).remove();
                                    $(".display_message").html(data.message);
                            }
                            

                        }


                })
        })
    });



</script>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>	
	
	<!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
	
    <!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <!-- <script src="js/styleSwitcher.js"></script> -->
	
</body>

<!-- Mirrored from edumin.dexignlab.com/xhtml/all-students.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 06:54:11 GMT -->
</html>