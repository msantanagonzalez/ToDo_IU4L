<!DOCTYPE HTML>
<?php 
require "php/clases/FuncionesGenerales.php";
require 'php/Nav.php';
session_start();
Validar_Sesion();
$nav = new Nav;
?>

<html>

	<head>
		<title>> To-Do (IU4L)</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/Validaciones.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
	</head>
	
	<body class="left-sidebar">
		<div id="wrapper"><!--WRAPPER-->
			<div id="content"><!--CONTENIDO-->
				<div class="inner">
               	  <h1 id="header"><a>- RESULTADOS BUSQUEDA -</a></h1> <!--SECCIÓN-->
                	<!--INICIO TABLA-->
            		<br><br><font size="+6"><div align="center">| |<br><br><br>^</div></font>
             		<br><br><font size="+2"><div align="center">LAMENTAMOS COMUNICARLE QUE NO SE HAN ENCONTRADO RESULTADOS
                  	CON SU B&Uacute;SQUEDA. <br> <br> ¡INT&Eacute;NTALO DE NUEVO! <br> </div></font>
                	<!-- FIN TABLA -->
                    
				</div>
			</div>
		</div>
		
        <div id="sidebar"> <!--BARRA LATERAL-->
			<?php
       			$nav->NavUser($_SESSION["ID_Usuario"]);
			?>
		</div>
		<!-- FIN BARRA LATERAL -->
	</body>
</html>