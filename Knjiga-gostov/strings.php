<?php
/****************************************************************************
 * DRBGuestbook
 * http://www.dbscripts.net/guestbook/
 * 
 * Copyright (c) 2007-2010 Don B
 ****************************************************************************/

// Field names
$NAME_FIELD_NAME = 'Ime';
$EMAIL_FIELD_NAME = 'E-mail';
$COMMENTS_FIELD_NAME = 'Besedilo';
$CHALLENGE_FIELD_NAME = "Prepišite kodo";

// Navigation text
$PREVIOUS_TEXT = "< Nazaj";
$NEXT_TEXT = "Arhiv >";

// Form text
$ADD_FORM_LEGEND = 'Vpišite vašo pohvalo, mnenje ali grajo v našo knjigo gostov';
$ADD_FORM_BUTTON_TEXT = 'Dodaj';

// Displayed after an entry is submitted
$ADDED_TEXT = "Vaše besedilo je bilo poslano";
$PENDING_TEXT = "Vaše besedilo je v čakanju na odobritev";

// Error text
// The %s directive is a placeholder for the field name and length.
// Use argument swapping if you need to change the order; 
// See http://us.php.net/sprintf for more details.
$ERROR_MSG_BAD_WORD = 'Vpisali ste nepravilno besedo.';
$ERROR_MSG_MAX_LENGTH = 'Polje %s ne more sprejeti vrednost več kot %s znakov.';
$ERROR_MSG_MIN_LENGTH = 'Polje %s mora sprejeti več kot %s znakov.';
$ERROR_MSG_REQUIRED = '%s obvezen vnos.';
$ERROR_MSG_EMAIL = '%s vnos ni ustrezen.';
$ERROR_MSG_URL_INVALID = 'Polje %s vnos ni ustrezen.';
$ERROR_MSG_URL_BAD_PROTOCOL = 'Samo HTTP URL naslovi so veljavni.';
$ERROR_MSG_TAGS_NOT_ALLOWED = 'HTML ni dovoljen.';
$ERROR_MSG_BAD_CHALLENGE_STRING = "Koda ni bila pravilna.";
$ERROR_MSG_URLS_NOT_ALLOWED = "URL naslovi niso dovoljeni v komentarjih.";
$ERROR_MSG_FLOOD_DETECTED = "Poskušate objaviti prepogosto.";
$ERROR_MSG_MAX_WORD_LENGTH = "Želeli ste uporabiti predolgo besedo.";
$ERROR_MSG_MIN_DELAY_STRING = "Poskušali ste prehitro objaviti.";
$ERROR_MSG_MAX_DELAY_STRING = "Čakali ste predolgo za objavo.";

?>
