<?php
include_once 'dbfunctions.inc.php';
session_start();

if(isset($_SESSION['loggedUser'])) {
    $loggedUser = $_SESSION['loggedUser'];
    if($loggedUser['role_id'] != 0) {
        header("Location: admin_dashboard.php");
	}
	$audits = selectAudits();
} else {
    header("Location: admin_login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>   
        <!-- Base Css Files -->
        <link href="assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="assets/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" /> 
        <link href="assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" /> 
        <link href="assets/libs/pace/pace.css" rel="stylesheet" />
        <link href="assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link href="assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="assets/libs/prettify/github.css" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
                <link href="assets/libs/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/morrischart/morris.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/jquery-clock/clock.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/bootstrap-calendar/css/bic_calendar.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/jquery-weather/simpleweather.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/bootstrap-xeditable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
                <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="assets/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body class="fixed-left">
        <!-- Modal Start -->
        	<!-- Modal Task Progress -->	
	
		
	<!-- Modal Logout -->
	<div class="md-modal md-just-me" id="logout-modal">
		<div class="md-content">
			<h3><strong>Logout</strong> Confirmation</h3>
			<div>
				<p class="text-center">Are you sure want to logout?</p>
				<p class="text-center">
				<button class="btn btn-danger md-close">Cancel</button>
				<a href="admin_logout.php" class="btn btn-success md-close">Yes</a>
				</p>
			</div>
		</div>
	</div>        
	<!-- Modal End -->	
	<!-- Begin page -->
	<div id="wrapper">
		
<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
        <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">               
                <ul class="nav navbar-nav navbar-right top-navbar">
                    <li class="dropdown iconify hide-phone">
                        <ul class="dropdown-menu dropdown-message">
                        </ul>
                    </li>                                  
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Ramon <strong>Arceo</strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Change Password</a></li>                         
                            <li class="divider"></li>                          
                            <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
		    <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">           
                <div class="clearfix"></div>
                <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-8">
                        <div class="profile-text">Welcome <b>Admin</b></div>
                    </div>
                </div>
                <!--- Divider -->
                <div class="clearfix"></div>
                <hr class="divider" />
                <div class="clearfix"></div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                    <li>
                    <a href='javascript:void(0);'>
                    <a href='admin_dashboard.php'><i class='icon-home-3'></i><span>Dashboard</span></a>
                    <a href='admin_transactions.php'><i class='fa fa-file-text-o'></i><span>Transactions</span></a>
                    <a href='admin_user_withdrawals.php'><i class='fa fa-money'></i><span>Withdrawals</span></a>
                    <a href='admin_user_add.php'><i class='fa fa-user'></i><span>Add User/Investor</span></a>
                    <a href='admin_user_edit.php'><i class='fa fa-user'></i><span>Edit User</span></a>
                    <a href='admin_coop_add.php'><i class='fa fa-users'></i><span>Add Cooperative</span></a>
                    <a href='admin_coop_edit.php'><i class='fa fa-users'></i><span>Edit Cooperative</span></a>
                    <a href='admin_viewAll.php'><i class='icon-list'></i><span>View All Users/Coop</span></a>
					<div class="clearfix"></div>
                	<hr class="divider" />
                	<div class="clearfix"></div>
					<a href='admin_viewTickets.php'><i class='fa fa-question-circle'></i><span>View Tickets</span></a>
					<a href='admin_addAdmin.php'><i class='icon-users-1'></i><span>Add Administrator</span></a>
                </div>
            <div class="clearfix"></div>
           
            <div class="clearfix"></div><br><br><br>
        </div>
           
        </div>
        <!-- Left Sidebar End -->			
		<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
				<!-- Start info box -->
				<div class="row top-summary">
					<div class="col-lg-3 col-md-6">
						<div class="widget green-1 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="icon-globe-inv"></i>
								</div>
								<div class="text-box">
									<p class="maindata">TOTAL <b>USERS</b></p>
									<h2><span class="animate-number" data-value="25153" data-duration="3000">0</span></h2>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="widget darkblue-2 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="icon-bag"></i>
								</div>
								<div class="text-box">
									<p class="maindata">TOTAL <b>COOPERATIVES</b></p>
									<h2><span class="animate-number" data-value="6399" data-duration="3000">0</span></h2>

									<div class="clearfix"></div>
								</div>
							</div>							
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="widget pink-1 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="fa fa-money"></i>
								</div>
								<div class="text-box">
									<p class="maindata">TOTAL <b>INCOME</b></p>
									<h2>PHP <span class="animate-number" data-value="70389" data-duration="3000">0</span></h2>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="widget lightblue-1 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="fa fa-users"></i>
								</div>
								<div class="text-box">
									<p class="maindata">TOTAL <b>USERS</b></p>
									<h2><span class="animate-number" data-value="18648" data-duration="3000">0</span></h2>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- End of info box -->

				<div class="row">
					<div class="col-lg-12 portlets">
						<div class="widget">
							<div class="widget-header">
								<h2><i class="icon-chart-pie-1"></i> <strong>Audit</strong> Logs</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									 
								</div>
							</div>
							<div class="widget-content">
								<div class="clearfix"></div>
								<div id="overall-report" class="collapse in hidden-xs">
									<div class="table-responsive">
									<table data-sortable class="table table-striped">
										<thead>
											<tr>
											<th scope="col">Action</th>
            								<th scope="col">Actor</th>
            								<th scope="col">Detail</th>
            								<th class="text-right" scope="col">Timestamp</th>
											</tr>
										</thead>
										<tbody>
										<?php
        									if(!empty($audits)) {
            									foreach ($audits as $audit) {
                						?>
                								<tr class="table-primary">
                    							<td scope="row"><?= $audit['type'] ?></td>
                    							<td scope="row"><?= $audit['email'] ?></td>
                    							<td scope="row"><?= $audit['details'] ?></td>
                    							<td class="text-right" scope="row"><?= $audit['created_at'] ?></td>
               									 </tr>
               							 <?php
            									}
        									} else {
            							?>
            									<tr class="table-primary">
                								<td class="text-center" colspan="4" scope="row">No records found.</td>
            									</tr>
            							<?php
        									}
        								?>
										</tbody>
									</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 portlets">
						<div class="row">
							<div class="col-sm-12">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 portlets">
						
					</div>

					<div class="col-lg-4 col-md-6 portlets">
						
					</div>
					<div class="col-lg-4 col-md-6 portlets">
						
					</div>
				</div>

				<div class="row">
					
					<div class="col-lg-4 col-md-6 portlets">
						
					</div>
				</div>
				<div class="clearfix"></div>
                	<hr class="divider" />
                	<div class="clearfix"></div>
				<div class="clearfix"></div>
                	<hr class="divider" />
                	<div class="clearfix"></div>
				            <!-- Footer Start -->
            <footer>
                AguaLife &copy; 2019
                <div class="footer-links pull-right">
                	<a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
                </div>
            </footer>
            <!-- Footer End -->			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->

	</div>
	<div id="contextMenu" class="dropdown clearfix">
		    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
		        <li><a tabindex="-1" href="javascript:;" data-priority="high"><i class="fa fa-circle-o text-red-1"></i> High Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="medium"><i class="fa fa-circle-o text-orange-3"></i> Medium Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="low"><i class="fa fa-circle-o text-yellow-1"></i> Low Priority</a></li>
		        <li><a tabindex="-1" href="javascript:;" data-priority="none"><i class="fa fa-circle-o text-lightblue-1"></i> None</a></li>
		    </ul>
		</div>
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/libs/jquery-detectmobile/detect.js"></script>
	<script src="assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
	<script src="assets/libs/ios7-switch/ios7.switch.js"></script>
	<script src="assets/libs/fastclick/fastclick.js"></script>
	<script src="assets/libs/jquery-blockui/jquery.blockUI.js"></script>
	<script src="assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
	<script src="assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
	<script src="assets/libs/nifty-modal/js/classie.js"></script>
	<script src="assets/libs/nifty-modal/js/modalEffects.js"></script>
	<script src="assets/libs/sortable/sortable.min.js"></script>
	<script src="assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
	<script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/libs/bootstrap-select2/select2.min.js"></script>
	<script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script> 
	<script src="assets/libs/pace/pace.min.js"></script>
	<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/libs/jquery-icheck/icheck.min.js"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="assets/libs/prettify/prettify.js"></script>

	<script src="assets/js/init.js"></script>
	<!-- Page Specific JS Libraries -->
	<script src="assets/libs/d3/d3.v3.js"></script>
	<script src="assets/libs/rickshaw/rickshaw.min.js"></script>
	<script src="assets/libs/raphael/raphael-min.js"></script>
	<script src="assets/libs/morrischart/morris.min.js"></script>
	<script src="assets/libs/jquery-knob/jquery.knob.js"></script>
	<script src="assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js"></script>
	<script src="assets/libs/jquery-clock/clock.js"></script>
	<script src="assets/libs/jquery-easypiechart/jquery.easypiechart.min.js"></script>
	<script src="assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js"></script>
	<script src="assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js"></script>
	<script src="assets/libs/bootstrap-calendar/js/bic_calendar.min.js"></script>
	<script src="assets/js/apps/calculator.js"></script>
	<script src="assets/js/apps/todo.js"></script>
	<script src="assets/js/apps/notes.js"></script>
	<script src="assets/js/pages/index.js"></script>
	</body>
</html>
