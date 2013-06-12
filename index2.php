<!DOCTYPE HTML>
<html lang="es-gt">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>EQUUS &#0149; Guatemala</title>
<meta property="og:title" content="EQUUS • Guatemala" />
<meta property="og:image" content="http://www.equus.gt/img/isotipo.png" />
<meta property="og:description" content="EQUUS Jeanstiyle es una empresa brasileña, originaria de Sao Paulo, con estilo propio de confección, creatividad y alta calidad. Moda exclusiva brasileña para la mujer dinamica, moderna y glamorosa!">

<?php include_once("include/scripts.php"); ?>
<!--SLIDESHOW CAMERA-->
<script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: false,
				pagination:false,
        width: '1366px',
				height: '600px',
				fx: 'scrollBottom',
				time: 2000
			});

		});
</script>
<!--SLIDESHOW CAMERA-->
<!--INSTAGRAM-->
<script type="text/javascript">
$(document).ready(function() {
	$(".instagram").instagram({
    hash: 'equusjeanstyle',
	 show: '6',
    clientId: 'c0876d4dbea74bc5b72260915bfa3a80'
    });
   
	});
	
	$(window).load(function () {
 	$('div.instagram-placeholder').each( function(i) {
  	if( i % 4 != 3 )
    return
 	$(this).addClass('last')
	})
});
</script>
<!--INSTAGRAM-->
</head>

<body id="home">

<?php include_once("include/header.php"); ?>

<div class="fluid_container_portada">
        <div class="camera_wrap camera_coffee_skin" id="camera_wrap_1">
            <div data-src="img/banner_01.jpg" data-link="campanha.php">
            </div>
             <div data-src="img/banner_02.jpg">
            </div>
             <div data-src="img/banner_03.jpg">
            </div>
        </div>
</div>
    
    
    <div id="containertest row">
  <div class="col1">
        <a href="campanha.php"><h1>Preview Invierno 2013</h1>
          <div class="destaque1" ontouchstart="this.classList.toggle('hover');" ></div></a>
            
                       
            
      </div>
        
        
        <div class="col1">
          <a href="especial-jeans.php"><h1>Otros</h1><div class="destaque3"></div>
            </a>

           </div>
            <div class="col1">
          <a href="especial-jeans.php"><h1>Lookbook</h1><div class="destaque2"></div>
            </a>

           </div>

             <div class="col1">
          <a href="especial-jeans.php"><h1>Especial Jeans</h1><div class="destaque3"></div>
            </a>

            
          </div>
          <div class="clear"></div>
          
  
        
<?php include_once("include/footer.php"); ?>        
    
    </div>
    
</body>
</html>
