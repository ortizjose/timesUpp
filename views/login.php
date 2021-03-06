 <?php
include '..\controller\sessionBean.php';
$s = new SessionBean(); 

// Si se quiere volver al login se tendrá que Cerrar Sesión. El closeSession lo podria poner como else de es

    if ( isset($_SESSION['Usuario'])){
		//echo "| Usuario : {$_SESSION['Usuario']} | Id :{$_SESSION['Id']} | Foto:{$_SESSION['Foto']}";
    	header('Location: index.php');  
	}
	

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title> Iniciar Sesión - TimesUpp </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="codedthemes">
	<meta name="keywords"
		  content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="codedthemes">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="../assets/images/tsicon2.png" type="image/x-icon">
	

	<!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- waves css -->
	<link rel="stylesheet" type="text/css" href="../assets/plugins/Waves/waves.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

	<!--color css-->
	<link rel="stylesheet" type="text/css" href="../assets/css/color/color-1.min.css" id="color"/>

</head>
<body>
<section class="login p-fixed d-flex text-center bg-dark">


	<!-- Video-background -->
	<video class="special-video" autoplay="autoplay" loop="loop" id="video_background" preload="auto" muted>
  		<source src="../assets/images/Index.mp4" type="video/mp4" />
	</video>
	<!-- end of video-background -->

	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
					<form class="md-float-material" action="../controller/loginController.php" method="post">
						<div class="text-center">
							<img src="../assets/images/tslogo-black.png"  width="55%"> 
						</div>
						<h3 class="text-center txt-primary">
							Iniciar sesión en su cuenta
						</h3>
						
						<div class="text-center">
							<br />	
						
						<?php if( !empty($_GET['login'])):
							switch ($_GET['login']):
							case -1:?>  

								<h6 class="text-center text-danger">
									No se ha encontrado ninguna cuenta con este usuario. Vuelve a intentarlo.
								</h6>
							
						<?php break;
							case -2:?>
							
								<h6 class="text-center text-warning">
									La contraseña que has introducido es incorrecta.
								</h6>
							
						<?php break;
							endswitch;
							endif; ?>
							
							<br />
						</div>
							

						<div class="row">
							<div class="col-md-12">
								<div class="md-input-wrapper">
									<input type="text" name="Usuario" class="md-form-control" required="required"/>
									<label>Usuario</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="md-input-wrapper">
									<input type="password" name="Contrasena" class="md-form-control" required="required"/>
									<label>Contraseña</label>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
							<div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
								<label class="input-checkbox checkbox-primary">
									<input type="checkbox" id="checkbox" name="guardarSesion">
									<span class="checkbox"></span>
								</label>
								<div class="captions">Recuérdame</div>

							</div>
								</div>
							<div class="col-sm-6 col-xs-12 forgot-phone text-right">
								<a href="forgot-password.html" class="text-right f-w-600"> ¿Contraseña olvidada?</a>
								</div>
						</div>

						<div class="row">
							<div class="col-xs-10 offset-xs-1">
								<button type="submit" name="submitted" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Acceso</button>
							</div>
						</div>

						<!-- <div class="card-footer"> -->
						<div class="col-sm-12 col-xs-12 text-center">
							<span class="text-muted">¿No tienes una cuenta?</span>
							<a href="register.php" class="f-w-600 p-l-5">Regístrate ahora</a>
						</div>

						<!-- </div> -->
					</form>
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>




</body>
</html>
