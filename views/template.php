<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://github.hubspot.com/tether/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/f22f712e94.css">
    <link rel="stylesheet" type="text/css" href="views/css/estilos.css">
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/fonts.css">
    <link rel="stylesheet" href="views/css/cssFancybox/jquery.fancybox.css">

    <script type="text/javascript" src = "views/js/email.js"></script>
    <script src="views/js/jquery-2.2.0.min.js"></script>
    <script src="views/js/bootstrap.min.js"></script>
    <script src="views/js/jquery.fancybox.js"></script>
    <script src="views/js/animatescroll.js"></script>
    <script src="views/js/jquery.scrollUp.js"></script>


    <title>HTEC</title> 
    </head>
    <body data-spy="scroll" data-target="#navbar" data-offset="50">
     <!-- BARRA DE NAVEGACIÓN -->
       
       <?php include 'views/modules/header.php';  ?> 

     <!-- FIN DE LA BARRA DE NAVEGACIÓN -->

   <!-- INICIO DE JUMBOTRON -->
 
   <?php include 'views/modules/jumbotron.php'; ?>

    <!-- FIN DE JUMBOTRON -->

    <!-- INICIO DE LAS TARJETAS -->
     <?php include 'views/modules/tarjetas.php'; ?>
         <!-- FIN DE LAS TARJETAS -->
<header>
   
</header>
       
                   <!-- INICIO DE LA DIRECCIÒN -->
         <?php include 'views/modules/direccion.php'; ?>

      <!-- FIN DE LA DIRECCIÒN  -->

      <!-- INICIO DE FOOTER ZF15A-46ZD5-481ZZ-N6QZV-M72Z6-->
   <?php include 'views/modules/footer.php'; ?>

         <!-- FIN DE FOOTER -->
         
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#content img").hover(
            function(){
                $(this).animate({opacity:.5});
              },function(){
                $(this).animate({opacity:1});
            });
 
    });

    </script>
    <script src= "jquery-3.0.0.min.js">
        
    </script>
    
  </body>
</html>