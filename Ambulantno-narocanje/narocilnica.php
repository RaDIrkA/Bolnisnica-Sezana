

<?php
error_reporting(0);
@session_start();



function validatePhone ($phone)
{
   if(!preg_match("/[^0-9\ ]+$/", $phone))
      return true;
   else
      return false;
}
function validateDatum ($datum)
{
   if(!preg_match("/[^0-9\ ]+$/", $datum))
      return true;
   else
      return false;
}
function validateName ($name)
{
   if(!preg_match('~^[:A-Z_a-z\\xC0-\\xD6\\xD8-\\xF6\\xF8-\\x{2FF}\\x{370}-\\x{37D}\\x{37F}-\\x{1FFF}\\x{200C}-\\x{200D}\\x{2070}-\\x{218F}\\x{2C00}-\\x{2FEF}\\x{3001}-\\x{D7FF}\\x{F900}-\\x{FDCF}\\x{FDF0}-\\x{FFFD}\\x{10000}-\\x{EFFFF}][:A-Z_a-z\\xC0-\\xD6\\xD8-\\xF6\\xF8-\\x{2FF}\\x{370}-\\x{37D}\\x{37F}-\\x{1FFF}\\x{200C}-\\x{200D}\\x{2070}-\\x{218F}\\x{2C00}-\\x{2FEF}\\x{3001}-\\x{D7FF}\\x{F900}-\\x{FDCF}\\x{FDF0}-\\x{FFFD}\\x{10000}-\\x{EFFFF}.\\-0-9\\xB7\\x{0300}-\\x{036F}\\x{203F}-\\x{2040}]*$~u', $name))
      return true;
   else
      return false;
}



// Validation

$error='';
if($_POST['izberi']=='')
{
	$error.="<li>Prosimo izberite kam se želite naročiti.</li>";
}

if($_POST['name']=='')
{
	$error.="<li>Prosimo vnesite vaše ime in priimek.</li>";
	}else if(validateName($_POST['name']) == false ) {
	$error.="<li>Vnesili ste nepravilno ime! </li>";
	}

if($_POST['naslov']=='')
{
	$error.="<li>Prosimo vnesite vaš naslov.</li>";
}

if($_POST['datum']=='')
{
	$error.="<li>Prosimo vnesite vaš datum rojstva.</li>";
}else if(validatePhone($_POST['datum']) == false ) {
	$error.="<li>Vnesili ste neveljaven rojstni datum!</li>";
	}

if($_POST['phone']=='')
{
	$error.="<li>Prosimo vnesite vašo telefonsko številko.</li>";
	}else if(validatePhone($_POST['phone']) == false ) {
	$error.="<li>Vnesili ste neveljavno telefonsko številko!</li>";
	}

if($_POST['verify']!=$_SESSION['captcha_total'])
{
	$error.="<li>Napačen odgovor! Poskusite še enkrat.</li>";
}

if($error!='')
{
	echo '<ul id="valid1">';
	echo $error;
	echo '</ul>';	
}else{
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Obrazec-spletna stran\r\n";
$headers .= "From: <".$_POST['email'].">" . "\r\n";


$message_to_send.="Naročam se na : ".$_POST['izberi']. "<br>";
$message_to_send.="Ime in priimek : ".$_POST['name']. "<br>";
$message_to_send.="Naslov : ".$_POST['naslov']. "<br>";
$message_to_send.="Datum rojstva : ".$_POST['datum']. "<br>";
$message_to_send.="Telefon  : ".$_POST['phone']. "<br/>";
$message_to_send.="Elektronski naslov : ".$_POST['email']. "<br>";
$message_to_send.="Vprašanje : ".$_POST['message']. "<br/>";

mail("info@baytfix.com", "Ambulantno naročilo Bolnišnica Sežana  ",$message_to_send,$headers);

/* Prepare autoresponder subject */
$respond_subject = "Zahvaljujemo se vam za oddano naročilo!";

/* Prepare autoresponder message */
$respond_message = "Pozdravljeni!<br>
					

<br>

Hvala, ker ste pravilno oddali naročilo. Vaš oddan obrazec bo obravnan v najkrajšem možnem času.<br>
<br> 

Lep pozdrav!<br>
<br>
Bolnišnica Sežana<br>
<br>

//www.bolnisnica-sezana.si//<br>
Telefon:+386 (0)5 707 40 19/<br>
";

/* Send the message using mail() function */
mail($email, $respond_subject, $respond_message, $headers);


echo '<div class="successmessage1">Hvala! Vaše naročilo je bilo uspešno oddano. <p>Bolnišnica Sežana</p></div>';
	
	
}

?>