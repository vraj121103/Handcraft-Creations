<?php
$obj=new mysqli("localhost","root","","handcraft");
session_start();

if (isset($_POST['submit']))
 {
	$email =$_POST['email'];
	$password =$_POST['password'];

	$e =$obj->query("select * from admin where email='$email' and password='$password'");

 $row = $e->num_rows;

 if ($row == 1)
  {
 	$i =$e->fetch_object();
    $id =$i->id;
    $_SESSION["userid"]=$id;
     	header('location:dashboard-saas.php');
 }
 else{
 	echo "<script>alert('wrong Email Or Passwoed')</script>";
 	 }

}

?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/pages-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Sign In | Handcraft Creations Store</title>

	<link rel="canonical" href="pages-sign-in.html" />
	<link rel="shortcut icon" href="img/logoicon.png">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<link href="css/light.css" rel="stylesheet">
	<!-- <link href="css/dark.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link class="js-stylesheet" href="css/light.css" rel="stylesheet">
	  
	<!-- END SETTINGS -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2120269,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script><script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q3ZYEKLQ68');
</script></head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="main d-flex justify-content-center w-100">
		<main class="content d-flex p-0">
			<div class="container d-flex flex-column">
				<div class="row h-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">

							<div class="text-center mt-4">
								<h1 class="h2">Welcome back</h1>
								<p class="lead">
									Sign in to your account to continue
								</p>
							</div>

							<div class="card">
								<div class="card-body">
									<div class="m-sm-4">
										<div class="text-center">
											<img src="img/avatars/p.png" alt="Chris Wood" class="img-fluid rounded-circle" width="132" height="132" />
										</div>
										<form method="post">
											<div class="mb-3">
												<label class="form-label">Email</label>
				                                <input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="Enter your email" />
											</div>
											<div class="mb-3">
												<label class="form-label">Password</label>
			                                   <input class="form-control form-control-lg" type="password" name="password" id="password" placeholder="Enter your password" />
												<small>
            
                                                </small>
											</div>
											<div>
												<div class="form-check align-items-center">
													<input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me" name="remember-me" checked>
													<label class="form-check-label text-small" for="customControlInline">Remember me next time</label>
												</div>
											</div>
											<div class="text-center mt-3">
												<input type="submit" name="submit" id="submit" value="Sign in" class="btn btn-lg btn-primary">
												
												<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
											</div>
										
									</div>
								</div>
							</div>
                          </form>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

	<script src="js/app.js"></script>

</body>


<!-- Mirrored from appstack.bootlab.io/pages-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:26 GMT -->
</html>