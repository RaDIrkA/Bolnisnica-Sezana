<?php  
@session_start();
      $num1=rand(5,9);
      $num2=rand(5,9);	  
	  $_SESSION['captcha_total']=$num1+$num2;
    echo "document.getElementById('captcha-holder').innerHTML = ' ".$num1." + ".$num2." = ';";  
      
?>  