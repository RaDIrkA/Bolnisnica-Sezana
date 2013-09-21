

<?php
error_reporting(0);
@session_start();

function validateEmail($email)
{
   if(preg_match('^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z]{2,4}(\.[a-zA-Z]{2,3})?(\.[a-zA-Z]{2,3})?^', $email))
      return true;
   else
      return false;
}
// Validation
$error='';
if($_POST['name']=='')
{
	$error.="<li>Prosimo vnesite ime.</li>";
}

if($_POST['email']=='')
{
	$error.="<li>Prosimo vnesite email naslov.</li>";
}else if(validateEmail($_POST['email']) == false ) {
	$error.="<li>Vnesili ste neveljaven email naslov.</li>";
	}


if($_POST['message']=='')
{
	$error.="<li>Prosimo vnesite besedilo, ki nam ga želite poslati.</li>";
}

if($_POST['verify']!=$_SESSION['captcha_total'])
{
	$error.="<li>Napačen odgovor! Poskusite še enkrat..</li>";
}

if($error!='')
{
	echo '<div id="valid">';
	echo $error;
	echo '</div>';	
}else{
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Kontaktni obrazec\r\n";
$headers .= "From: <".$_POST['email'].">" . "\r\n";





$message_to_send.="Ime Pošiljatelja : ".$_POST['name']. "<br>";
$message_to_send.="Elektronski naslov : ".$_POST['email']. "<br>";
$message_to_send.="Telefon  : ".$_POST['phone']. "<br/>";
$message_to_send.="Sporočilo : ".$_POST['message']. "<br/>";

mail("info@baytfix.com", "Informacije Bolnišnica Sežana  ",$message_to_send,$headers);

/* Prepare autoresponder subject */
$respond_subject = "Zahvaljujemo se vam za poslano sporočilo!";

/* Prepare autoresponder message */
$respond_message = "Pozdravljeni!<br>
					

<br>

Hvala, ker ste nas kontaktirali. Odgovorili vam bomo v najkrajšem možnem času.<br>
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


echo '<div class="successmessage">Vaše sporočilo je bilo uspešno poslano.</div>';
	
	
}

?>