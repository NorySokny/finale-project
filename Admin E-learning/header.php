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
					<!-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-book"></i>
							<span class="nav-text">Library</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-library.html">All Library</a></li>
                            <li><a href="add-library.html">Add Library</a></li>
                            <li><a href="edit-library.html">Edit Library</a></li>
                        </ul>
                    </li>
					
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="la la-signal"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="chart-flot.html">Flot</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                            <li><a href="chart-chartist.html">Chartist</a></li>
                            <li><a href="chart-sparkline.html">Sparkline</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    -->
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