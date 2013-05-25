<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/simple-php-contact-form.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('contato@equus.com.br,relacionamento@equus.com.br'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("contato-obrigado.php");
   }
}

?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="jeans, jeanstyle, equus jeans, equus">
<title>Equus . Coleção Inverno 2013</title>
<?php include_once("include/scripts.php"); ?>
</head>

<body id="interna-contato">

<?php include_once("include/header.php"); ?>

<div class="fluid_container">
<img src="img/banner-contato.jpg" width="100%" height="100%"></div>
    
    
    <div id="container2">
    <h1>Contato</h1>
    
    <div class="pcol1">
  <h2>Consumidor</h2>
  <p>Tel.: +55 (11) 2797 9999<br/>
  <a href="mailto:contato@equus.com.br">contato@equus.com.br</a></p>

  
  </div>
  
  <div class="pcol2">
  <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' style="display:none" />

<p>* campos obrigatórios</p>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>

    <label for='name' >Nome*: </label>
    <span id='contactus_name_errorloc' class='error'></span>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" />
    
    <label for='email' >Email*:</label>
    <span id='contactus_email_errorloc' class='error'></span>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" />   

    <label for='phone' >Telefone:</label>
    <span id='contactus_email_errorloc' class='error'></span>
    <input type='text' name='phone' id='phone' maxlength="15" />

    <label for='message' >Mensagem:</label>
    <span id='contactus_email_errorloc' class='error'></span>
    <textarea rows="10" cols="50" name='message' id='message'></textarea>
    
    <label>Como conheceu a Equus?</label>
    <select name="como conheceu">
    <option value="">Escolha...</option>
      <option value="Revista">Revista</option>
      <option value="Outdoor">Outdoor</option>
      <option value="Cinema">Cinema</option>
      <option value="Internet">Internet</option>
      <option value="Shopping">Shopping</option>
      <option value="Outros">Outros</option>
      <option value="Indicação de amigos">Indicação de amigos</option>
    </select>
    <br>
    <label><input name="newsletter" type="checkbox" value="Sim" checked> Desejo receber novidades Equus </label>
<br>
    <input type='submit' name='Submit' value='Enviar' />

</fieldset>
</form>

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Digite seu nome");

    frmvalidator.addValidation("email","req","Digite seu email");

    frmvalidator.addValidation("email","email","E-mail inválido");

// ]]>
</script>
  </div>
  
  <div class="pcol3">
  <img src="img/contato.jpg" width="330" height="615" alt="Contato">
  </div>
  
  <div class="clear"></div>
  
<?php include_once("include/footer.php"); ?> 
    
    </div>
    
</body>
</html>
