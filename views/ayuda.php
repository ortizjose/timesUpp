<?php
include '..\controller\sessionBean.php';
include '..\model\genericDB.php';
include '..\model\grupoDB.php';
include '..\model\actividadDB.php';
$s = new SessionBean();
$g = new GenericDB();
$gr = new grupoDB();
$a = new ActividadDB();


  	$IdUsu = $s -> getIdActualUsuario();

    if ( !isset($_SESSION['Usuario'])){
    	header('Location: ..\views\login.php');  
	}


?>
<!DOCTYPE html>
<html lang="es">

<head>
   <title> TimesUpp </title>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

	<?php require 'templates/GeneralCss.html';?>
   <link rel="stylesheet" href="../assets/plugins/evocalendar/css/evo-calendar.css" />
   <link rel="stylesheet" href="../assets/plugins/evocalendar/css/evo-calendar.midnight-blue.css" />

</head>

<body class="sidebar-mini fixed">

<?php require 'templates/barSidebar.html';?>

<!-- Dashboard Start -->
      <div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>Ayuda</h4>
               </div>
            </div>
            <!-- 2-1 block start -->
            <div class="row">

               <div class="col-xl-9 col-lg-12">
                  <div class="card">
					  <div class="card-header">
						<h4 class="card-header-text">Apartado con dudas frecuentes </h4>
					  </div>
					
					   <div class="CardB1-responsive">
                         <div class="card-block">						 
							 
							<div class="card-block accordion-block">
								<div class="accordion-box" id="single-open">

								   <a class="accordion-msg bg-info b-none">Cambiar foto de perfil o de grupo</a>
								   <div class="accordion-desc">

									</br>                       
									<div class="row">
										
										<div class="col-md-8">									
											<p class="text-muted">								
												Si usted quiere cambiar la foto de perfil o la de un grupo y no encuentra la manera de poder cambiarla debe de seguir estos sencillos pasos:
											</p>	
											</br>
											<p class="text-muted">								
												1. Se dirige a la p??gina de su perfil o la p??gina de su grupo y sit??a el cursor encima de la fotograf??a. Ver?? que aparece un cuadro donde le indicar?? <strong>Cambiar foto</strong>, como se puede obserbar el la ilustraci??n de la derecha.
											</p>
											</br>
											<p class="text-muted">								
												2. Se le abrir?? una ventana con el explorador de su ordenador y ah?? tendr?? que seleccionar una fotograf??a. Recuerde que solo se permiten ilustraciones, por lo que la aplicaci??n solo aceptar?? ficheros de tipo <strong>jpg</strong>, <strong>png</strong> y <strong>jpeg</strong>, con un m??ximo de 8 Mb.
											</p>
											</br>
											<p class="text-muted">								
												3. Una vez seleccionada la fotograf??a y dado a aceptar, se recargar?? la p??gina autom??ticamente mostrando la nueva foto de perfil.
											</p>									
										</div>
										
										<div class="col-md-4" align="center">
												<img src="../assets/images/help/1.png"  class="img-fluid" width="90%">
										</div>
										
									</div>
								   </div>  
								
								   <a class="accordion-msg bg-warning b-none">No se usar el men?? de tareas de una actividad</a>
								   <div class="accordion-desc">

									</br>                       
									<div class="row">
										
										<div class="col-md-12">									
											<p class="text-muted">								
												El men?? de tareas que hay dentro de una actividad tiene la funcionalidad de a??adir, modificar posici??n o contenido y eliminar la tarea.
											</p>
											
											</br>
											<p class="text-muted">								
												1. Si se quiere a??adir una tarea, simplemente pulsamos el bot??n <strong>+ A??adir</strong>, como se puede ver en la ilustraci??n, y se modifica el campo de contenido y prioridad. Tambi??n se puede desplazar la tarea a otra columna si as?? lo desea.
											</p>
											</br>
											<p class="text-muted">								
												2. Si se quiere modificar el contenido de una tarea, se pulsa el bot??n de prioridad para seleccionar la nueva prioridad a establecer y en el caso de querer cambiar el contenido, se situa en el cuadro de texto e introduzce el nuevo texto. En la ilustraci??n el bot??n de prioridad corresponde al bot??n verde de <strong>Prioridad Media</strong>, puediendo ser este valor Prioridad Baja o Alta y el cuadro de texto es el recuadro blanco con <strong>Prueba</strong>.
											</p>
											<div align="center">
												<img src="../assets/images/help/2.png"  class="img-fluid" width="35%">	
					  						</div>
					  
											</br>
											<p class="text-muted">								
												3. Si se quiere modificar la posici??n de la tarea se tiene que coger el recuadro y desplazarlo a otra columna y/o posici??n dentro de la columna, en el caso de la versi??n de escritorio. Si se est?? trabajando con la versi??n movil, damos un toque a la tarea correspondiente y nos aparecer??n tres botones con la columna a querer desplazar la tarea <strong>Por Hacer</strong>, <strong>Haciendo</strong> o <strong>Hecho</strong> y una vez seleccionada la nueva columna, la tarea se actualizar?? de columna, ocupando el ??ltimo lugar.
											</p>
				  							</br>
											<div class="col-md-6" align="center">
												<img src="../assets/images/help/3.png"  class="img-fluid">
												
											</div>
											</br>
											<div class="col-md-6" align="center">
												<img src="../assets/images/help/4.png"  class="img-fluid" width="65%">
				   							</div>
				
											</br>
											<p class="text-muted">								
												4. Si se quiere eliminar la tarea se <strong>clicka dos veces</strong> en el recuadro de la tarea, si estamos en la versi??n de escritorio u ordenar y en el caso de que estemos en la versi??n para dispositivos moviles, se hace una <strong>pulsaci??n larga</strong>. En ambos casos la aplicaci??n deber?? mostrar un cuadro donde se debe confirmar si se quiere eliminar la tarea. 
											</p>				
				  							</br>
											<div class="col-md-6" align="center">
												<img src="../assets/images/help/5.png"  class="img-fluid" width="90%">
												
											</div>
		  									</br>
											<div class="col-md-6" align="center">
												<img src="../assets/images/help/6.png"  class="img-fluid" width="75%">
				   							</div>				
				
										</div>
										
									
										
									</div>
								   </div> 

								   <a class="accordion-msg bg-info b-none">Cambiar email o contrase??a de nuestro perfil</a>
								   <div class="accordion-desc">

									</br>                       
									<div class="row">
										
										<div class="col-md-12">									
											<p class="text-muted">								
												Si usted quiere cambiar el email o la contrase??a se debe de dirigir a la p??gina de su perfil. En el men?? de <strong>Administrar mi perfil</strong>, situado a la derecha, se selecciona la modificaci??n que se quiere realizar. Se introducen los campos que el sistema nos pide, en la ilustraci??n se introducir??a el antiguo email y el nuevo, se selecciona la casilla de <strong>Confirmar</strong> y se pulsa el bot??n de <strong>Cambiar</strong>. Una vez hecho esto, el cambio se aplicar?? a nuestro perfil.
											</p>	
											</br>
											<p class="text-muted">								
												 El proceso es exactamente igual con la contrase??a, a diferencia que se tiene que introducir la antigua contrase??a, y la nueva dos veces para verificar que no se confunde.
											</p>
											</br>
										</div>
										
										<div class="col-md-12" align="center">
											<img src="../assets/images/help/7.png"  class="img-fluid" >
										</div>

									</div>
								   </div>  
								
								   <a class="accordion-msg bg-warning b-none">Diferencia entre salir y borrar un grupo</a>
								   <div class="accordion-desc">

									</br>                       
									<div class="row">
									
									<div class="col-md-12">									
										<p class="text-muted">								
											La diferencia est?? en lo que se quiere hacer con ese grupo. Si su proposito es salirse de ese grupo para no ver m??s las actividades que ten??a relacionadas con ese grupo, usted debe de seleccionar la opci??n de <strong>Salir</strong>.
										</p>	
										</br>
										<p class="text-muted">								
											 En cambio, si usted lo que quiere es eliminar o borrar el grupo lo que conseguir?? es que todos los integrantes de ese grupo junto a usted no pod??is disfrutar de las actividades relacionadas con ese grupo, por lo que es un cambio que afecta a varios usuarios. Si lo que quiere es eliminar ese grupo con toda la informaci??n que conlleva, debe de usar la opci??n de <strong>Borrar</strong>.
										</p>
										</br>
									</div>
										
									<div class="col-md-12" align="center">
						
											<img src="../assets/images/help/8.png"  class="img-fluid" >
									</div>	

										
									</div>
								   </div> 							 
							 

								</div>
							 </div>								 
							 
						 </div>
					  </div>
					  
                  </div>
				</div>


				
               <div class="col-xl-3 col-lg-12">
                  <div class="card">					  
				   <div class="card-header">
					<h5 class="card-header-text">Cont??ctanos</h5>
				   </div>
					   <div class="CardS1">
						 <div class="card-block">
							 
						<div align="center">	 
							<img src="../assets/images/tsicon.png"  class="img-fluid" width="40%">	
						</div>
						</br>	 
                        <h6>Correo de contacto</h6>	 
                        <h5>timesuppSoporte@timesupp.es</h5>
							 

							 
						 </div>
					   </div>
                  </div>
                </div>
				

            <!-- 2-1 block end -->
            </div>

         <!-- Main content ends -->
         <!-- Container-fluid ends -->

      </div>
   </div>

 <?php require 'templates/generalJs.html';?>
 <script type="text/javascript" src="../assets/plugins/evocalendar/js/evo-calendar.js"></script>

	

	
</script>	
</body>

</html>
