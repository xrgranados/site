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
    
    
    <div id="container">
  <div class="col1">
        <a href="campanha.php"><h1>Preview Invierno 2013</h1>
          <div class="destaque1"  ></div></a>
            
          
            
      </div>
        
        <div class="col1">
        <a href="lookbook-verano.php"><h1>Lookbook</h1>
          <div class="destaque2" ></div>
            </a>
            
            
            <a href="http://instagram.com/equus_gt" target="_blank"><h3 class="grey">Insta<span class="grey2">Gram</span></h3></a>
            <div class="instagram"></div>
        </div>
        
        <div class="col2">
          <a href="especial-jeans.php"><h1>Especial Jeans</h1><div class="destaque3"></div>
            </a>
            
            
            <a href="revista.php" target="_blank"><h3 class="grey">Re<span class="grey2" >vista</span></h3></a>
            <span class="url"><a href="revista.php" target="_blank"></a></span>

            <a href="revista.php"> <img src="img/portada_revista.png" height="485" width="318"></a>
            
            <!--<div id="fb-root" style="margin:17px 0 0 0;"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=169361536467128";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-href="http://www.facebook.com/Equus.guatemala" data-width="318" data-height="485" data-show-faces="true" data-stream="false" data-border-color="#FFF" data-header="true"></div>-->
        </div>
        
        <div class="clear"></div>
        
        <div class="col1">
        <span class="mais"><a href="http://www.equus.com.br/blog" target="_blank">ver mas posts</a></span>
        </div>
        
        <div class="col1">
        <span class="mais"><a href="http://www.instagram.com/equus_gt" target="_blank">ver mas fotos</a></span>
        </div>
        
        <div class="col2">
        <span class="mais"><a href="revista.php">ver revista digital</a></span>
        </div>


        
        <div class="clear"></div>
  
        
<?php include_once("include/footer.php"); ?>        
    
</div>
    
</body>
</html>
