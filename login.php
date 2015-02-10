<!--<!DOCTYPE html>
 <head>
  <title>Login</title>
  <link href="" rel="stylesheet" media="screen">
  <link href="../css/login.css" rel="stylesheet" type="text/css">
 </head>
 <body>
  <div id="loginform">
  <h1>Admin Login</h1>
  <form action="login.php" method="post">   
    <p>Kundennummer: <input type="text" name="user"></p>
    <p>Kundenpasswort: <input type="password" name="pass"></p>
   <input type="submit" value="Anmelden"> <input type="reset" name="reset" value="Reset"> <a href = 'register.php'><b>Registration?</b></a>
  <a class="button" href="">Passwort vergessen?</a>
  </form>
   </div>
   <div id="footer">&raquo; <a href="http://teampenner.de">Homepage</a> | Admin Panel</div>
		</div>
 </body>
</html> -->
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="#DESCRIPTION#">
  <meta name="author" content="#AUTHOR#">
  <link rel="shortcut icon" href="css/favicon.ico">

  <title>Server Panel | Login</title>

  <link rel="shortcut icon" type="image/x-icon" href="css/favicon.ico" />
  
  <!-- Bootstrap core CSS -->
  <link href="http://localhost/kp/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="http://localhost/kp/css/jumbotron-narrow.css" rel="stylesheet">
  
  <link rel="stylesheet" href="http://localhost/kp/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://localhost/kp/css/bootstrap-switch.min.css" type="text/css" />
   
  <!-- JavaScript -->
  <script src="http://localhost/kp/js/jquery-1.10.2.min.js"></script>
  <script src="http://localhost/kp/js/bootstrap.js"></script>
  <script src="http://localhost/kp/js/userfrosting.js"></script>
  <script src="http://localhost/kp/js/date.min.js"></script>
  <script src="http://localhost/kp/js/handlebars-v1.2.0.js"></script> 

</head>

  <body>
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills navbar pull-right">
        </ul>
        <h3 class="text-muted">Server Panel</h3>
      </div>
      <div class="jumbotron">
        <h1></h1>
        <p class="lead"></p>
		<small>Please sign in here:</small>
		<form class='form-horizontal' role='form' name='login' action='api/process_login.php' method='post'>
		  <div class="row">
			<div id='display-alerts' class="col-lg-12">
  
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-md-offset-3 col-md-6">
			  <input type="text" class="form-control" id="inputUserName" placeholder="Username or Email" name = 'benutzer' value=''>
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-md-offset-3 col-md-6">
			  <input type="password" class="form-control" id="inputPassword" placeholder="Password" name='password'>
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-md-12">
			  <button type="submit" class="btn btn-success submit" value='Login'>Login</button>
			</div>
		  </div>
		  <div class="jumbotron-links">
		  </div>		  
		</form>
      </div>	
      <div class="footer">
  <p>&copy; <a href='#'>RBK</a>, 2014</p>
</div>
    </div> <!-- /container -->

	<script>
        $(document).ready(function() {          
		  // Load navigation bar
		  $(".navbar").load("header-loggedout.php", function() {
			  $(".navbar .navitem-login").addClass('active');
		  });
		  // Load jumbotron links
		  $(".jumbotron-links").load("jumbotron_links.php");
	  
		  alertWidget('display-alerts');
			  
		  $("form[name='login']").submit(function(e){
			var form = $(this);
			var url = 'api/process_login.php';
			$.ajax({  
			  type: "POST",  
			  url: url,  
			  data: {
				username:	form.find('input[name="username"]').val(),
				password:	form.find('input[name="password"]').val(),
				ajaxMode:	"true"
			  },		  
			  success: function(result) {
				var resultJSON = processJSONResult(result);
				if (resultJSON['errors'] && resultJSON['errors'] > 0){
				  alertWidget('display-alerts');
				} else {
				  window.location.replace("account");
				}
			  }
			});
			// Prevent form from submitting twice
			e.preventDefault();
		  });
		  
		});
	</script>
  </body>
</html>