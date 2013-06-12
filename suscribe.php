<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="jeans, jeanstyle, equus jeans, equus">

<title>Equus &#0149; Registro Cliente</title>

<?php include_once("include/scripts.php"); ?>

</head>

<body>

<?php include_once("include/header.php"); ?>

<div class="fluid_container">
<img src="img/banner-cadastro.jpg" width="100%"></div>
    
    
    <div id="container2">
    <h1>Suscríbete a EQUUS</h1>
    <p>Ent&eacute;rate de las nuevas tendencias en moda, promociones y mucho más.</p>
    
    <div class="col1" style="padding-left:15px;">
        <script type="text/javascript">var submitted=false;</script>
        <iframe name="hidden_iframe" id="hidden_iframe"
        style="display:none;" onload="if(submitted)
        {window.location='exit.php';}"></iframe>
        <form action="https://docs.google.com/a/pcnetmedia.com/spreadsheet/formResponse?formkey=dHVISUR2clh3M3dJZjBYR1FxTDlwMUE6MQ&amp;ifq" method="post"
        target="hidden_iframe" onsubmit="submitted=true;">

    <br>
    <label>Nombre:<span>*</span></label>
    <input type="text" name="entry.0.single" placeholder="Nombre" id="entry_0">
    <br> 
    <label class="ss-q-title" for="entry_1">E-mail:<span >*</span></label>
    <input type="text" name="entry.1.single" placeholder="E-mail" id="entry_1">
    <br> 
    <label class="ss-q-title" for="entry_2">Pa&iacute;s:<span>*</span></label>
    <input type="text" name="entry.2.single" placeholder="País" id="entry_2">
    <br>
    <label class="ss-q-title" for="entry_4">Registro<span>*</span></label>
    <label class="ss-q-help" for="entry_4">Suscríbete y ent&eacute;rate de las novedades de EQUUS</label> <br>
    <ul class="ss-choices">
        <li class="ss-choice-item"><label class="ss-choice-label"><input type="radio" name="entry.4.group" value="Suscribir" class="ss-q-radio" id="group_4_1">Suscribir (Recibir boletines de EQUUS)</label></li> 
        <li class="ss-choice-item"><label class="ss-choice-label"><input type="radio" name="entry.4.group" value="Darse de baja" class="ss-q-radio" id="group_4_2">Cancelar Suscripción</label></li>
    </ul>
    <br>
    <input type="hidden" name="pageNumber" value="0">
    <input type="hidden" name="backupCache" value="">


    <div class="ss-item ss-navigate"><div class="ss-form-entry">
    <input type="submit" name="submit" value="Enviar" ontouchstart="this.classList.toggle('submit');"></div></div>
    
    </div>

    <div class="col2">
    <img src="img/banner-cadastro2.jpg" width="580" alt="Equus Cadastro"></div>


    <div class="clear"></div>
       <?php include_once("include/footer.php"); ?>
    
    </div>
    
</body>
</html>
