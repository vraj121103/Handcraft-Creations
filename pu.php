<?php
$obj  =new mysqli("localhost","root","","handcraft");
session_start();
if (!isset($_SESSION['userid']))
 {
	header('location:index.php');
}
$id = $_GET['updid'];

$r = $obj->query("select * from category");

$rs = $obj->query("select * from subcategory");
$p =$obj->query("select * from product where id='$id'");
$product=$p->fetch_object();


if (isset($_POST['submit']))
 {
	$pname =$_POST['pname'];
	$description=$_POST['description'];
	$size = $_POST['size'];
	$price =$_POST['price'];
	$company=$_POST['company'];
	$cat =$_POST['category'];
	$subcat =$_POST['subcategory'];
   
	 $filename = $_FILES["f"]["name"];
	$f=explode(".", $filename);
	$exe=end($f);

    $tmp = $_FILES["f"]["tmp_name"];

    $path ="img/Product/$filename";
    if ($exe == 'jpg' || $exe == 'png') 
    {
     
$eee=$obj->query("update product set pname='$pname',description='$description',size='$size',price='$price',company='$company',cat='$cat',subcat='$subcat',img='$filename' where id='$id' ");
      move_uploaded_file($tmp, $path);
        	echo "<script>alert(' sucess') </script>";
    	if ($eee)
    	 {
    		header('location:viewproduct.php');
    	}
        else
        {
    	echo "<script>alert('upload error') </script>";
       }	
    	
    	
    }
   
}



?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/pages-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Handcraft Creations Store</title>

	<link rel="canonical" href="pages-settings.html" />
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
	<div class="wrapper">
		<?php include'common/sidebar.php';?>
		<div class="main">
			<?php include'common/header.php';?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Product Update</h1>

					<div class="row">
						
							</div>
						</div>

						<div class="col-md-12 ">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="account" role="tabpanel">

									<div class="card">
										<div class="card-header">
											<div class="card-actions float-end">
												<div class="dropdown show">
											</div>
											</div>
											<h5 class="card-title mb-0">Fill Product info</h5>
										</div>
										<div class="card-body">
											<form method="post" enctype="multipart/form-data">
												<div class="row">
													<div class="col-md-8">
														<div class="mb-3">
															<label for="name" class="form-label">Product Name</label>
        													<input type="text" class="form-control" id="pname" name="pname" placeholder="Product name" value="<?php echo $product->pname;?>"></td>
														</div>
														<div class="mb-3">
															<label for="inputUsername" class="form-label">Description</label>
	    													<textarea rows="2" cols="50" class="form-control" id="description" name="description" placeholder="Tell something about Product">
															 <?php echo $product->description;?>
															</textarea>
																
														</div>
														<div class="mb-3">
															<label for="size" class="form-label">Size</label>
															<input type="text" class="form-control" id="size" name="size" placeholder="Size" value="<?php echo $product->size;?>"></td>
														</div>
														<div class="mb-3">
															<label for="inputUsername" class="form-label">Price</label>
															<input type="text" class="form-control" id="price" name="price" placeholder="Price" value="<?php echo $product->price;?>"></td>
														</div>
														<div class="mb-3">
															<label for="inputUsername" class="form-label">Company</label>
															<input type="text" class="form-control" id="company" name="company" placeholder="company"value="<?php echo $product->company;?>"></td>
														</div>
														<div class="mb-3">
															<label for="inputUsername" class="form-label">Category</label>
															&nbsp &nbsp	&nbsp&nbsp &nbsp&nbsp &nbsp	&nbsp &nbsp&nbsp &nbsp	&nbsp &nbsp	&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp	&nbsp &nbsp							                            <label for="inputUsername" class="form-label">Sub-Category</label>
														<br><select id="category" name="category">
															<option value="">- - -Select Category- - -</option>
			                             			  <?php 
	                                                 		   while($res=$r->fetch_object())
	                                                    {
	                                                    	
	                                               		?>

	                        								<option value="<?php echo $res->id ;?>"<?php if($product->cat=="$res->id"){echo "selected";}?>><?php echo $res->cname ;?></option>
	                                            	  <?php
                                                	   }
	                                             	    ?>

															</select>

														&nbsp &nbsp
														<select id="subcategory" name="subcategory">
															<option value="">- - -Select Sub-Category- - -</option>
			                                      <?php 
	                                                    while($result=$rs->fetch_object())
	                                                    {
	                                                    	
	                                               ?>

	                     							<option value="<?php echo $result->id ;?>"<?php if($product->subcat=="$result->id"){echo "selected";}?>><?php echo $result->sc ;?></option>
	                                              <?php
                                                   }
	                                                 ?>
												</select>
														</div>
														<div class="mb-3">
													<label for="inputUsername" class="form-label">Product Image</label>
													<br><img src="../AdminPanel/img/Product/<?php echo "$product->img" ?>"  height="120" width="150"><input type="file" name="f" id="f">
														</div>
													</div>
													<div class="col-md-4">
														<div class="text-center">
	                                                     </div>
													</div>
												</div>

													<input type="submit" name="submit" id="submit" value="submit" class="btn btn-lg btn-primary">
											</form>

										</div>
									</div>

									
									</div>

								</div>
								
							</div>
						</div>
					</div>

				</div>
			</main>

			<?php include'common/footer.php';?>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>


<!-- Mirrored from appstack.bootlab.io/pages-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:26 GMT -->
</html>