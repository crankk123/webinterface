<?php
if (isset($_POST['betreff']) AND isset($_POST['email']) AND isset($_POST['priorität']) AND isset($_POST['kategorie']) AND isset($_POST['text'])) {
        $Betreff = $_POST['betreff'];
        $Email = $_POST['email'];
        $Priorität = $_POST['priorität'];
        $Kategorie = $_POST['kategorie'];
		$Text = $_POST['text'];



//connect to db
                $connect = mysql_connect("127.0.0.1", "root", "alka");
                mysql_select_db("webinterface");
                $sql = mysql_query("SELECT * FROM ticket");
                $row = mysql_fetch_row($sql);




echo"Eingetragen";}




?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin Panel</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	<!-- Ticket CSS-->
	<link rel="stylesheet" href="../css/ticket/font-awesome.css">
    <link rel="stylesheet" href="../css/ticket/select2.css">
	<link href="../css/ticket/custom.css" rel="stylesheet">
	<!-- Ticket JS-->
		<script src="../js/ticket/jquery-1.8.3.min.js"></script>
        <script src="../js/ticket/bootstrap.js"></script>
        <script src="../js/ticket/select2.js"></script> 
        <script src="../js/ticket/jquery-bootalert.js"></script>
        <script src="../js/ticket/custom.js"></script>
        <!-- Tablesorter: required for bootstrap -->
        <link rel="stylesheet" href="../css/ticket/theme.bootstrap.css">
        <script src="../js/ticket/jquery.tablesorter.js"></script>
        <script src="../js/ticket/jquery.tablesorter.widgets.js"></script>
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="../css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="../css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="/index.html"><span>Admin Panel</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Dennis Ji
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="login.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="../index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	

						<li>
							<a class="dropmenu" href="#"><i class="icon-th-list"></i><span class="hidden-tablet"> Support</span></a>
							<ul>
								<li><a class="submenu" href="ticket/openticket.php"><i class="icon-th-list"></i><span class="hidden-tablet"> Neues Ticket</span></a></li>
								<li><a class="submenu" href="ticket.html"><i class="icon-th-list"></i><span class="hidden-tablet"> Übersicht</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-th-list"></i><span class="hidden-tablet">#</span></a></li>
							</ul>	
						</li>
                        <li>
							<a class="dropmenu" href="#"><i class="icon-th-list"></i><span class="hidden-tablet"> Server</span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-th-list"></i><span class="hidden-tablet"> Neuen Server</span></a></li>
								<li><a class="submenu" href="server.html"><i class="icon-th-list"></i><span class="hidden-tablet"> Übersicht</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-th-list"></i><span class="hidden-tablet"> #</span></a></li>
							</ul>	
						</li>
						
						<li><a href="user.html"><i class="icon-user"></i><span class="hidden-tablet"> User</span></a></li>
							
							<li>
							<a class="dropmenu" href="#"><i class="icon-th-list"></i><span class="hidden-tablet">Einstellungen</span></a>
							<ul>
								<li><a class="submenu" href="settings.html"><i class="icon-th-list"></i><span class="hidden-tablet"> Seiten Einstellungen</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-th-list"></i><span class="hidden-tablet"> Übersicht</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-th-list"></i><span class="hidden-tablet"> #</span></a></li>
							</ul>	
						</li>
						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Ticket Eröffnen</a></li>
			</ul>

			<div class="row-fluid">
				
			<div class="page-header">
  <h1>Ticket Eröffnen</h1>
</div>
				
			</div>	

			<div class="container">
<div class="span12">
	<div class="well-white">
		<div class="page-header">
			<h1>Welcome to Support Desk</h1>
		</div>
		<div class="body">
		<p>Welcome to our Support Desk. Our Support Desk will help you to contact us for all your questions and get instant answers to it.</p> 	
		<p>In order to open a support ticket, please select a department below.</p>
		<fieldset>
		<legend>Neues Ticket</legend>
		<form action="#" method="post">
		Betreff:<br /><input type="text" name="betreff" /><br /><br />
		Email:<br /><input type="text" name="email" /><br /><br />
		Priorität:<br /><input type="text" name="priorität" /><br /><br />
		Kategorie:<br><br>
		<select name="kategorie" form="katform">
				  <option value="srvp">Server Problem</option>
				  <option value="buchaltung">Buchhaltung</option>
				  <option value="techp">Technisches Problem</option>
				  <option value="#">#</option>
		</select><br><br>
		Anliegen:<br><br>
		<textarea name="text" cols="50" rows="5">
	
	</textarea><br>

<button type="submit" onclick="javascript:openNewWin()" class="btn btn-default">Erstellen<a href="create_ticket.php"></a></button> 
</form>
</fieldset>
 
		</div>

	</div>

</div>
<!--
<script>
	$(function(){
		$("#select").click(function(){
			deptid = $("#dept").val();
			if(deptid)
			{
				window.location = 'new_ticket.php' + deptid ;
			}
			else
			{
				$.bootalert('Error', 'Please select a department');
			}
		})
	})
</script>
-->

</div>
	
	
			
			
			
			</div>
			
			
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="#" alt="Bootstrap_Metro_Dashboard">Niclas</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
