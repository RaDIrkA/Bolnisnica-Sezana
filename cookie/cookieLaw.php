var bgColor = "696969"  
var bgButtonColor = "568F61"  
var color = "FFFFFF"  
var lng = "slo"
var t = ""
var fb = ""
var yt = "true"
var vimeo = "true"
var gm = "true"
var skype = ""
var gplus = ""

if(bgColor == '' || (bgColor.length != 3 && bgColor.length != 6)){
	bgColor = "A90000";
}
if(bgButtonColor == '' || (bgColor.length != 3 && bgColor.length != 6)){
	bgButtonColor = "A90000";
}
if(color == ''){
	color = "FFFFFF";
}
if(lng == ''){
	lng = 'slo';
}
/*
d=document;

while((el=d.getElementsByTagName('div')).length){
//alert(el[0].innerText);
el[0].innerHTML = 'hello';
alert(el[0].innerHtml);
el[0].parentNode.removeChild(el[0]);
};
onerror=function(){};
d.close();
*/



var divText = '';
if(lng == 'slo'){
	divText = '<span style="line-height: 32px;; font-size: 16px; margin-right: 40px;">Naša spletna stran uporablja tehnologijo “piškotkov” (cookies). Omogočite piškotke, da vam lahko zagotovimo popolno uporabniško izkušnjo ob obisku naše spletne strani.</span>';
	divText += ' <a href="javascript:ok()" style="background-color: #'+bgButtonColor+';color: #'+color+';border: 1px solid #'+color+';padding: 2px 6px 2px 6px;text-decoration: none; -moz-border-radius: 7px; -webkit-border-radius: 7px; -khtml-border-radius: 7px; border-radius: 7px; font-size: 16px; white-space: nowrap;">Dovoli piškotke</a>';
	<!--divText += ' / <a href="javascript:not()" style="background-color: #'+bgButtonColor+';color: #'+color+';border: 1px solid #'+color+';padding: 2px 6px 2px 6px;text-decoration: none;">NE</a>';-->
	divText += '<br /><br /><a href="#" onclick="return false" id="showCookieDetail" style="background-color: #'+bgButtonColor+';color: #'+color+';border: 1px solid #'+color+';padding: 2px 6px 2px 6px;text-decoration: none; -moz-border-radius: 7px; -webkit-border-radius: 7px; -khtml-border-radius: 7px; border-radius: 7px; font-size: 16px;">Več o tem</a>';
	divText += '<br />';
	divText += '<div id="cookieDetail" style="display:none; text-align:left;">';
	divText += '<br />Naša spletna stran uporablja tehnologijo “piškotkov” (cookies), da lahko razločujemo med obiskovalci in izvajamo statistiko uporabe spletne strani. To nam omogoča sprotno izboljševanje delovanja strani. Uporabniki, ki ne dovolijo zapisa "piškotka" naše strani v svoj računalnik, bodo ob pregledu spletne strani prikrajšani za nekatere od njenih funkcionalnosti (ogled videa, komentiranje preko Facebooka, ipd).';
	divText += 'Piškotki so majhne datoteke, ki jih sistem obiskane spletne strani zapiše na vaš računalnik. Tako vas sistem ob naslednjem obisku strani lahko prepozna. <br /><br />Na naših spletnih straneh uporabljamo naslednje vrste piškotkov:<br />';
	divText += '<ul style="list-style:disc;padding-left:15px; margin-left:30px;">';
	divText += '<li><strong>BALANCEID:</strong> uporablja se za identifikacijo strežnika, ki je aktiven na vašo zahtevo. Namen je izboljšanje delovanja spletne strani. Piškotek ne shranjuje nobenih osebnih podatkov.</li>';
	divText += '<li><strong>Sejni piškotki:</strong> služijo za shranjevanje posamezne seje za avtentikacijo na straneh, ki imajo zaščitene sklope.<br /><br /></li>';
	divText += '<li><strong>Google Analytics</strong> (__utma, __utmb, __utmc, __utmz, __utmv): služijo za anonimno zbiranje podatkov in poročanje o gibanju na spletnih mestih brez prepoznavanja posameznih obiskovalcev.</li>';
	if(fb == 'true'){
		divText += '<li><strong>Facebook</strong> (reg_fb_gate, reg_fb_ref, datr): služijo za slednje učinkovitosti registracije, ugotavljanju kako je uporabnik prišel na Facebook prvotno, ko si je ustvaril račun.</li>';
	}
	if(t == 'true'){
		divText += '<li><strong>Twitter</strong>(_twitter_sess, guest_id, k, pid, external_referer, js, original_referer):  služi za prikaz Twitter vsebine na spletni strani ter za deljenje strani na omrežju Twitter.</li>';
	}
	if(gplus == 'true'){
		divText += '<li><strong>Google+</strong> (GMAIL_RTT, NID, S, SNID, PREF): omogočijo uporabnikom, da delijo naše vsebine na Google Plus družbenem omrežju.</li>';
	}
	if(yt == 'true'){
		divText += '<li><strong>YouTube</strong> (PREF, VISITOR_INFO1_LIVE, YSC,..): služjo za beleženje stastisike ogledov, za sledenje preferenc uporabnikov in za razvrščanje povezanih reklam znotraj posnetka na omrežju YouTube.</li>';
	}
	if(vimeo == 'true'){
		divText += '<li><strong>Vimeo</strong> (__utma, __utmb, __utmc, __utmz, __utmv): služijo za anonimno zbiranje podatkov in poročanje o ogledu posnetkov na omrežju Vimeo.</li>';
	}
	if(gm == 'true'){
		divText += '<li><strong>Google Map</strong> (SID, SAPISID, APISID, SSID, HSID, NID, PREF): služijo za merjenje števila in za sledenje obnašanja uporabnikov Google Maps.</li>';
	}
	if(skype == 'true'){
		divText += '<li><strong>Skype</strong> (gpv_p23, s_nr, s_cc, s_ria, s_sq): služi za sledenje, ali ima spletni obiskovalec na voljo Skype, da mu lahko omogočimo dostop do naših storitev preko Skype komunikacije.</li>';
	}

	//divText += '<li>ostali piškotki - služi za shranjevanje nastavitev, ki jih je uporabnik določil</li>';
	divText += '</ul>';
	divText += '<br /><a href="#" onclick="return false" id="hideCookieDetail" style="background-color: #'+bgButtonColor+';color: #'+color+';border: 1px solid #'+color+';padding: 2px 6px 2px 6px;text-decoration: none; -moz-border-radius: 7px; -webkit-border-radius: 7px; -khtml-border-radius: 7px; border-radius: 7px; margin-left: 30px;">Skrij podrobnosti</a>';
	divText += '</div>';
}else if (lng != 'slo'){
	divText = '<span style="line-height: 32px;; font-size: 16px; margin-right: 40px; ">Our website uses “cookies”. Your experience on this site will be improved by allowing cookies.</span>';
	divText += ' <a href="javascript:ok()" style="background-color: #'+bgButtonColor+';color: #'+color+';border: 1px solid #'+color+';padding: 2px 6px 2px 6px;text-decoration: none; -moz-border-radius: 7px; -webkit-border-radius: 7px; -khtml-border-radius: 7px; border-radius: 7px; font-size: 16px; white-space: nowrap;">Allow cookies</a>';
	<!--divText += ' / <a href="javascript:not()" style="background-color: #'+bgButtonColor+';color: #'+color+';border: 1px solid #'+color+';padding: 2px 6px 2px 6px;text-decoration: none;">NE</a>';-->
	divText += '<br /><br /><a href="#" onclick="return false" id="showCookieDetail" style="background-color: #'+bgButtonColor+';color: #'+color+';border: 1px solid #'+color+';padding: 2px 6px 2px 6px;text-decoration: none; -moz-border-radius: 7px; -webkit-border-radius: 7px; -khtml-border-radius: 7px; border-radius: 7px; font-size: 16px;">More information</a>';
	divText += '<br />';
	divText += '<div id="cookieDetail" style="display:none;text-align:left;">';
	divText += '<br />Our website uses “cookies” to distinguish between visitors and to perform website use statistics. This allows us to improve the page constantly. Users who do not allow our website "cookies" to be recorded on their computer, will not be able to use all the functionalities of the website (video, comment on Facebook, etc.).';
	divText += 'Cookies are small files that a website that you visited records on your computer. The next time you are visiting the same site, the system can recognise you. <br /><br />Our website uses the following types of cookies:<br />';
	divText += '<ul style="list-style:disc;padding-left:15px; margin-left:30px;">';
	divText += '<li><strong>BALANCEID:</strong> it is used to identify the server that is active on your request. The aim is to improve the functioning of the website. The cookie does not store any personal information.</li>';
	divText += '<li><strong>Session cookies:</strong> are used to store information of the each ongoing session, and to authenticate users on websites that have protected sections.<br /><br /></li>';
	divText += '<li><strong>Google Analytics</strong> (__utma, __utmb, __utmc, __utmz, __utmv): are used for anonymous data collection and reporting of the navigation trough the site without identifying individual visitors.</li>';
	if(fb == 'true'){
		divText += '<li><strong>Facebook</strong> (reg_fb_gate, reg_fb_ref, datr): are used for tracking the effectiveness of the registration, and to determine how the user originally came on Facebook to create the account.</li>';
	}
	if(t == 'true'){
		divText += '<li><strong>Twitter</strong>(_twitter_sess, guest_id, k, pid, external_referer, js, original_referer):  is used to display Twitter content on the website and to share the site on the Twitter.</li>';
	}
	if(gplus == 'true'){
		divText += '<li><strong>Google+</strong> (GMAIL_RTT, NID, S, SNID, PREF): allow visitors to share our contents on Google Plus social network.</li>';
	}
	if(yt == 'true'){
		divText += '<li><strong>YouTube</strong> (PREF, VISITOR_INFO1_LIVE, YSC,..): are used to record the statistics of views, to track the preferences of users, and for the distribution of commercials on YouTube.</li>';
	}
	if(vimeo == 'true'){
		divText += '<li><strong>Vimeo</strong> (__utma, __utmb, __utmc, __utmz, __utmv): are used for anonymous data collection and reporting on viewing videos on Vimeo network</li>';
	}
	if(gm == 'true'){
		divText += '<li><strong>Google Map</strong> (SID, SAPISID, APISID, SSID, HSID, NID, PREF): are used to follow the number of users and to track their behavior on Google Maps.</li>';
	}
	if(skype == 'true'){
		divText += '<li><strong>Skype</strong> (gpv_p23, s_nr, s_cc, s_ria, s_sq): we use Skype’s services to detect if a website visitor has Skype available so we can provide access to our client services via Skype communications.</li>';
	}

	//divText += '<li>ostali piškotki - služi za shranjevanje nastavitev, ki jih je uporabnik določil</li>';
	divText += '</ul>';
	divText += '<br /><a href="#" onclick="return false" id="hideCookieDetail" style="background-color: #'+bgButtonColor+';color: #'+color+';border: 1px solid #'+color+';padding: 2px 6px 2px 6px;text-decoration: none; -moz-border-radius: 7px; -webkit-border-radius: 7px; -khtml-border-radius: 7px; border-radius: 7px; margin-left: 30px;">Hide details</a>';
	divText += '</div>';
}


jQuery(document).ready(function() {
	var readCookie = getCookie('readCookie');
	if(readCookie != 1){
		//deleteSpecificCookies();
		var div = document.createElement("div");
		div.style.width = "98%";
		div.style.minHeight = "30px";
		div.style.background = '#'+bgColor;
		div.style.position = "fixed";
		div.style.bottom = "0px";
		div.style.color = '#'+color;
		div.style.fontSize = '12px';
		div.style.padding = '20px';
		div.style.zIndex = "1000";
		div.setAttribute("id", "cookieDiv");
		div.innerHTML = divText;
		document.body.appendChild(div);
	}
	jQuery('#showCookieDetail').click(function(){
		jQuery('#cookieDetail').show();	
	})
	
	jQuery('#hideCookieDetail').click(function(){
		jQuery('#cookieDetail').hide();	
	})
	
});

function ok(){
	setCookie('readCookie',1,7300);
	jQuery('#cookieDiv').remove();
}

function not(){
	setCookie('readCookie',null);
	jQuery('#cookieDiv').remove();
}

function setCookie(c_name,value,exdays){
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value + ";path=/";
	
	
}
function getCookie(c_name){ 
	var i,x,y,ARRcookies = document.cookie.split(";");
	for (i=0;i < ARRcookies.length;i++){
		x = ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		y = ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
		x = x.replace(/^\s+|\s+$/g,"");
		if (x==c_name){
			return unescape(y);
		}
	}
}

function deleteSpecificCookies() {

	/*
	document.__defineGetter__("cookie", function() { return '';} );
	document.__defineSetter__("cookie", function() {} );
	
	var cookies = document.cookie.split(";");
	
	var all_cookies = '';
	
	    for (var i = 0; i < cookies.length; i++) {
	
	        var cookie_name  = cookies[i].split("=")[0];
	        
	        var cookie_value = cookies[i].split("=")[1];
	        //alert(cookie_name);
	        if( cookie_name.trim() == 'arctur' ) { 
	        	all_cookies = all_cookies + cookies[i] + ";"; 
	        }
	
	
	    }
	if(!document.__defineGetter__) {
	
	    Object.defineProperty(document, 'cookie', {
	        get: function(){return all_cookies; },
	        set: function(){return true},
	    });
	
	} else {
	
	    document.__defineGetter__("cookie", function() { return all_cookies; } );
	    document.__defineSetter__("cookie", function() { return true; } );
	
	}
	*/
}
