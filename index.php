<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login Sistem Informasi Nilai">
    <meta name="author" content="">
    <meta name="keyword" content="">

    <title>SiNiS | Sistem Informasi Nilai Siswa</title>

    <!-- pemanggilan direktory file bootstrap.css -->
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet">
    <!-- pemanggilan direktory file css font-->
    <link href="admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- pemanggilan direktori file css custom template -->
    <link href="admin/assets/css/style.css" rel="stylesheet">
    <link href="admin/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
    		  <form class="form-login" method="post" action="proseslogin.php">
		        <h2 class="form-login-heading"> <span class="glyphicon glyphicon-lock"></span> LOGIN ADMIN</h2>
                <center><h5> <span class="glyphicon glyphicon-qrcode"></span> Sistem Informasi Nilai Siswa (SiNiS) <span class="glyphicon glyphicon-qrcode"></span></h5></center>
		        <div class="login-wrap">
		            <input name="username" id="username" type="input" class="form-control" autocomplete="off" placeholder="Username" required  autofocus>
                    <br />
                    <input name="password" id="password" type="password" class="form-control" autocomplete="off" placeholder="Password" required>
                    <br />
                    <button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
		           
          	  	
                         <hr>
		            <div class="login-social-link centered">
		            <p>atau login sebagai </p>
		                <a href="login.html" class="btn btn-success" type="submit"><i class="fa fa-user"></i> Siswa</a>
		                <a href="login-guru.php" class="btn btn-warning" type="submit"><i class="fa fa-user"></i> Guru</a>
		            </div>
		            <div class="registration">
		                <a class="" href="http://www.hakkoblogs.com">
		                    Copyright &copy; hakko blog's 2015
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Modal -->
		        <!--  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="admin/assets/js/jquery.js"></script>
    <script src="admin/assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="admin/assets/js/jquery.backstretch.min.js"></script>
    <!-- Pemanggilan Background Login Form-->
    <script>
        $.backstretch("foto/2.jpg", {speed: 500});
    </script>


  </body>
</html>
