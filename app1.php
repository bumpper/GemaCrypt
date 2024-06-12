<!DOCTYPE html>
<html>
<head>
<title>GemaCrypt</title>
<link href="files/resources/lib/theme/jqm/jqm.css" rel="stylesheet" />
<link href="files/resources/lib/jquerymobile/1.2.0/jquery.mobile.structure-1.2.0.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="SHORTCUT ICON" href="img/bet.png" />
<meta name="Rating" content="general" />
<meta name="DESCRIPTION" content="Decode Hebrew words to find hidden meanings.  With this app you can find the numerical value of a word or letter.  Words with the same numerical value are said to relate to each other.  Use different algorathims like AL-BaM, AT-BaSh, ACh-BI, Ayik-becher, AChaS-BeTA, At-bech to decode hebrew words.  Use the different gematriaot to find a words numerical value like Ragil, Katan, HaKlali, Kolel, HaKadmi, HaPerati, Miluy." />
<meta name="KEYWORDS" content="Absolute, Ordinal, Reduced, Integral Reduced, Spelling, Pictograms, Meaning, Symbols, Miluy, Miluim, Gematriaot, Gematria, Cryptography, Encrypt, Decrypt, Encode, Decode, BibleCode, Bible, Code, ALBaM, ATBaSh, AChBI, AYiKBeCheR, AChaSBeTA, ATBeCh, ATzBaPh, ALBeTh, AL-BaM, AT-BaSh, ACh-BI, AYiK-BeCheR, AChaS-BeTA, AT-BeCh, ATz-BaPh, AL-BeTh, AL BaM, AT BaSh, ACh BI, AYiK BeCheR, AChaS BeTA, AT BeCh, ATz BaPh, ALBeTh, Ofanim, Sofit, Finals, Initials, Greek, Hebrew, Aramaic, Letter, Sequence, Ananagram, Matrix, Mystery, Word, Value, Verse, Calculate, Calculator, Ragil, Katan, HaKlali, Kolel, HaKadmi, HaPerati, Miluy, Spelling, Torah, Skip, Leap, Elision, A''B, AB, SaG, MaH, BaN, Cantillation, Niqqud, Vowels, Knit, AV-GaD, AVGaD, Forward Exchange, AT-BA, ATBA, Backward Exchange, Acronym, Paths, Gates, Sum, ThShRQ, Reversed />
<meta name="distribution" content="Global" />
<meta name="robots" content="FOLLOW,INDEX" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="initial-scale=1" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

<noscript><span class="span-red">Warning! JavaScript is disabled, the functionality is unavailable.</span><br>
You will need to enable JavaScript in your web browser: see the <a class="ext" href="https://www.enable-javascript.com/" target="_blank">instructions</a>.<br><br></noscript>

<!--<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"> <!-- jQuery library to make inputText resizable -->
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery library to make inputText resizable -->
<!--<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script> <!-- jQuery library to make inputText resizable -->
<script>
	// Create a separate instance of jQuery for the older version (1.8.2)
	var jq182 = jQuery.noConflict(true);
	
	// Use the newer version (3.6.0) for the resizable functionality
	$(function() {
	  $( "#inputText" ).resizable();
	  $( "#inputText2" ).resizable();
	});
	
	// Use the older version (1.8.2) for everything else
	jQuery = jq182;
</script>

<script>
  // Hide the Niqqud and Cantillation keys on page load
  document.addEventListener("DOMContentLoaded", function() {
    let niqqudElements = document.querySelectorAll('.Niqqud');
    let cantillationElements = document.querySelectorAll('.Cantillation');
    niqqudElements.forEach(function(element) {
      element.style.display = 'none';
    });
    cantillationElements.forEach(function(element) {
      element.style.display = 'none';
    });
  });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
      // declare variables upon page load
	  var L01 = 1;
      var L02 = 2;
      var L03 = 3;
      var L04 = 4;
      var L05 = 5;
      var L06 = 6;
      var L07 = 7;
      var L08 = 8;
      var L09 = 9;
      var L10 = 10;
      var L11 = 20;
      var L12 = 30;
      var L13 = 40;
      var L14 = 50;
      var L15 = 60;
      var L16 = 70;
      var L17 = 80;
      var L18 = 90;
      var L19 = 100;
      var L20 = 200;
      var L21 = 300;
      var L22 = 400;
      var L23 = 500;
      var L24 = 600;
      var L25 = 700;
      var L26 = 800;
      var L27 = 900;
	  var N01=N02=N03=N04=N05=N06=N07=N08=N09=N10=N11=N12=N13=N14=N15=N16=N17=N18=N19=N20=N21=C01=C02=C03=C04=C05=C06=C07=C08=C09=C10=C11=C12=C13=C14=C15=C16=C17=C18=C19=C20=C21=C22=C23=C24=C25=C26=C27=C28=C29=C30=C31=C32=C33='<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N01Text").innerHTML = N01;
	  document.getElementById("N02Text").innerHTML = N02;
	  document.getElementById("N03Text").innerHTML = N03;
	  document.getElementById("N04Text").innerHTML = N04;
	  document.getElementById("N05Text").innerHTML = N05;
	  document.getElementById("N06Text").innerHTML = N06;
	  document.getElementById("N07Text").innerHTML = N07;
	  document.getElementById("N08Text").innerHTML = N08;
	  document.getElementById("N09Text").innerHTML = N09;
	  document.getElementById("N10Text").innerHTML = N10;
	  document.getElementById("N11Text").innerHTML = N11;
	  document.getElementById("N12Text").innerHTML = N12;
	  document.getElementById("N13Text").innerHTML = N13;
	  document.getElementById("N14Text").innerHTML = N14;
	  document.getElementById("N15Text").innerHTML = N15;
	  document.getElementById("N16Text").innerHTML = N16;
	  document.getElementById("N17Text").innerHTML = N17;
	  document.getElementById("N18Text").innerHTML = N18;
	  document.getElementById("N19Text").innerHTML = N19;
	  document.getElementById("N20Text").innerHTML = N20;
	  document.getElementById("N21Text").innerHTML = N21;
	  document.getElementById("C01Text").innerHTML = C01;
	  document.getElementById("C02Text").innerHTML = C02;
	  document.getElementById("C03Text").innerHTML = C03;
	  document.getElementById("C04Text").innerHTML = C04;
	  document.getElementById("C05Text").innerHTML = C05;
	  document.getElementById("C06Text").innerHTML = C06;
	  document.getElementById("C07Text").innerHTML = C07;
	  document.getElementById("C08Text").innerHTML = C08;
	  document.getElementById("C09Text").innerHTML = C09;
	  document.getElementById("C10Text").innerHTML = C10;
	  document.getElementById("C11Text").innerHTML = C11;
	  document.getElementById("C12Text").innerHTML = C12;
	  document.getElementById("C13Text").innerHTML = C13;
	  document.getElementById("C14Text").innerHTML = C14;
	  document.getElementById("C15Text").innerHTML = C15;
	  document.getElementById("C16Text").innerHTML = C16;
	  document.getElementById("C17Text").innerHTML = C17;
	  document.getElementById("C18Text").innerHTML = C18;
	  document.getElementById("C19Text").innerHTML = C19;
	  document.getElementById("C20Text").innerHTML = C20;
	  document.getElementById("C21Text").innerHTML = C21;
	  document.getElementById("C22Text").innerHTML = C22;
	  document.getElementById("C23Text").innerHTML = C23;
	  document.getElementById("C24Text").innerHTML = C24;
	  document.getElementById("C25Text").innerHTML = C25;
	  document.getElementById("C26Text").innerHTML = C26;
	  document.getElementById("C27Text").innerHTML = C27;
	  document.getElementById("C28Text").innerHTML = C28;
	  document.getElementById("C29Text").innerHTML = C29;
	  document.getElementById("C30Text").innerHTML = C30;
	  document.getElementById("C31Text").innerHTML = C31;
	  document.getElementById("C32Text").innerHTML = C32;
	  document.getElementById("C33Text").innerHTML = C33;
    });
  </script>

<!-- the line below is required for access to the appMobi JS library -->
<script type="text/javascript" charset="utf-8" src="appmobi.js"></script>
<script type="text/javascript" language="javascript">
        // This event handler is fired once the AppMobi libraries are ready
        function onDeviceReady() {
            //use AppMobi viewport to handle device resolution differences if you want
            // AppMobi.display.useViewport(768,1024);

            // hide splash screen now that our app is ready to run
            AppMobi.device.hideSplashScreen();
        }

        // initial event handler to detect when appMobi is ready to roll
        document.addEventListener("appMobi.device.ready",onDeviceReady,false);
</script>
<script type="text/javascript" src="files/resources/lib/store/json2.js"></script>
<script type="text/javascript" src="files/resources/lib/jquery/jquery-1.8.2.js"></script>
<script type="text/javascript">
            $(document).bind("mobileinit", function()
    {
        if (navigator.userAgent.indexOf("Android") != -1)
        {
            $.mobile.defaultPageTransition = 'none';
            $.mobile.defaultDialogTransition = 'none';
        }
    });
</script>
<script type="text/javascript" src="files/resources/lib/jquerymobile/1.2.0/jquery.mobile-1.2.0.js"></script>
<script type="text/javascript" src="files/resources/lib/mobilebase.js"></script>
<script type="text/javascript" src="files/resources/lib/event/customEventHandler.js"></script>
<script type="text/javascript" src="files/resources/lib/base/sha1.js"></script>
<script type="text/javascript" src="files/resources/lib/base/oauth.js"></script>
<script type="text/javascript" src="files/resources/lib/base/contexts.js"></script>
<script type="text/javascript" src="files/resources/lib/base/jsonpath.js"></script>
<script type="text/javascript" src="files/resources/lib/base/jquery.xml2json.min.js"></script>
<script type="text/javascript" src="files/resources/lib/base/tiggzi.js"></script>
<link href="files/resources/css/mobilebase.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="files/views/assets/js/Copy.js"></script>
<script type="text/javascript" src="files/views/assets/js/transpose.js"></script>
<link href="startScreen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="startScreen.js"></script>

<script language="JavaScript">
function stopError() {
      return true;
}
window.onerror = stopError;
</script>

</head>

<body OnLoad="" style="background-color : #fff;
background-image:url('img/bg3.png');
background-attachment: fixed;
background-repeat: no-repeat;
background-position: center center;
margin : 0;
padding : 0;">

<style>
a:link { color: #fff; text-decoration: none;}
a:visited { color: #fff; text-decoration: none;}
a:hover { color: #fff; text-decoration: underline; cursor:default;}
a:active { color: #fff; text-decoration: underline;}
body { background-color: #000;}
.hidden { display: none;}
.KeyCell { min-width: 50px;  min-height: 50px;  position: relative;}
.Letters { position: absolute;  top: 0;  left: 0;  width: 90%;  height: 90%;}
.Niqqud { position: absolute;  top: 0;  left: 0;  width: 90%;  height: 90%;}
.Cantillation { position: absolute;  top: 0;  left: 0;  width: 90%;  height: 90%;}
.small-font { font-size: small; /* or font-size: 10px; */ text-decoration: none;}
.result { width: 100%; overflow-x: auto;} /* Allows the ability to scroll horizontally when display Gematria results (and keyboard if needed) by assigning class="result" */
#copyIcon { cursor: pointer;  vertical-align: middle;}
.loading { font-family: sans-serif;}
.loading:after { display: inline-block; animation: dotty steps(1,end) 1s infinite; content: '';}
@keyframes dotty {
  0%   { content: ''; }
  25%  { content: '.'; }
  50%  { content: '..'; }
  75%  { content: '...'; }
  100% { content: ''; }
}
</style>

<script language="JavaScript" type="text/javascript">
        if (navigator.userAgent.match(/iP/i))
{
    $(window).bind('orientationchange', function(event)
    {
        $('meta[name="viewport"]').attr('content', 'initial-scale=1.0,maximum-scale=1.0, ' + ((window.orientation == 90 || window.orientation == -90 || window.orientation == 270) ? "height=device-width,width=device-height" : "height=device-height,width=device-width"));
    }).trigger('orientationchange');
}
</script>

<script>
// Adds the copy icon and functionality to the form elements inputText & inputText2 in order to copy their contents.  
async function copyText() {
  try {
    const inputField = document.getElementById('inputText');
    await navigator.clipboard.writeText(inputField.value);
    console.log('Content copied to clipboard');
  } catch (err) {
    console.error('Failed to copy: ', err);
  }
}

async function copyText2() {
  try {
    const inputField = document.getElementById('inputText2');
    await navigator.clipboard.writeText(inputField.value);
    console.log('Content copied to clipboard');
  } catch (err) {
    console.error('Failed to copy: ', err);
  }
}
</script>

<div data-role="page" style="min-height:480px;" dsid="startScreen" id="j_0" class="type-interior" data-theme="a" data-add-back-btn="false" data-back-btn-text="Back">
<div id="header" data-role="header" data-position="" data-theme="d" name="mobileheader1" id="j_2" class='mobileHeader mobileheader1'><h1 dsid="mobileheader1">
<a href="#" style="text-decoration: none; float: left;" onclick="toggleKeyboard()"><img src="img/invis.gif" width="10" border="0"><img src="img/kboard.png" alt="Hebrew Keyboard" height="16" width="30" border="0" style="filter: drop-shadow(0 0 5px #FFFFFF);"><img src="img/invis.gif" width="10" border="0"><style>a:hover img[src="img/kboard.png"] {filter: drop-shadow(0 0 25px #FFFFFF); box-shadow: 0 0 10px #FFFFFF; }</style></a>
<a href="#" style="text-decoration: none; float: left;" onclick="toggleNiqqud()"><img src="img/niqqud.png" alt="Niqqud" height="16" border="0" style="filter: drop-shadow(0 0 5px #FFFFFF);"><img src="img/invis.gif" width="10" border="0"><style>a:hover img[src="img/kboard.png"] {filter: drop-shadow(0 0 25px #FFFFFF); box-shadow: 0 0 10px #FFFFFF; }</style></a>
<a href="#" style="text-decoration: none; float: left;" onclick="toggleCantillation()"><img src="img/music.png" alt="Cantillation" height="16" border="0" style="filter: drop-shadow(0 0 5px #FFFFFF);"><img src="img/invis.gif" width="10" border="0"><style>a:hover img[src="img/kboard.png"] {filter: drop-shadow(0 0 25px #FFFFFF); box-shadow: 0 0 10px #FFFFFF; }</style></a>
<a href="help.html" style="color: #555; font-size: 18px; text-decoration: none;" target="_blank">GemaCrypt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
<a href="help.html" style="color: #555; font-size: 14px; text-decoration: none; float: right;" target="_blank"><img src="img/helpblack.png" alt="Help" height="15" width="15" border="0" style="filter: drop-shadow(0 0 5px #FFFFFF);"><style>a:hover img[src="img/kboard.png"] {filter: drop-shadow(0 0 25px #FFFFFF); box-shadow: 0 0 10px #FFFFFF; }</style><img src="img/invis.gif" width="16" border="0"></a>
<a href="http://forevernode.pro/app1/app2.html" style="color: #555; font-size: 14px; text-decoration: none; float: right;" target="_blank"><img src="img/book.png" alt="App2" height="18" width="24" border="0" style="filter: drop-shadow(0 0 5px #FFFFFF);"><style>a:hover img[src="img/kboard.png"] {filter: drop-shadow(0 0 25px #FFFFFF); box-shadow: 0 0 10px #FFFFFF; }</style><img src="img/invis.gif" width="10" border="0"></a></h1>

<!--Hebrew letters if no keyboard is installed-->
<div id="keyboard" class="result">
<table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="direction: ltr;"><tr style="text-align: center;">
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C01Amount" title="Etnahta"><a data-role="button" name="Etnahta" dsid="" class='' id='Etnahta' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֑')"/><font size="+4">֑</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C01Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C02Amount" title="Segol"><a data-role="button" name="Segol" dsid="" class='' id='Segol' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֒')"/><font size="+4">֒</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C02Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C03Amount" title="Shalshelet"><a data-role="button" name="Shalshelet" dsid="" class='' id='Shalshelet' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֓')"/><font size="+4">֓</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C03Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C04Amount" title="Zaqef Qatan"><a data-role="button" name="Zaqef Qatan" dsid="" class='' id='Zaqef Qatan' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֔')"/><font size="+4">֔</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C04Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C05Amount" title="Zaqef Gadol"><a data-role="button" name="Zaqef Gadol" dsid="" class='' id='Zaqef Gadol' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֕')"/><font size="+4">֕</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C05Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N01Amount" title="Geresh"><a data-role="button" name="Geresh" dsid="" class='' id='Geresh' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '׃')"/><font size="+4">׃</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N01Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N02Amount" title="Gershayim"><a data-role="button" name="Gershayim" dsid="" class='' id='Gershayim' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '׀')"/><font size="+4">׀</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N02Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N03Amount" title="Hataf Patah"><a data-role="button" name="Hataf Patah" dsid="" class='' id='Hataf Patah' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05BE')"/><font size="+4">&#x05BE;</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N03Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N04Amount" title="Segol"><a data-role="button" name="Segol" dsid="" class='' id='Segol' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05B7')"/><font size="+4">&#x05B7;</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N04Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L01Amount" title="Aleph (1)"><a data-role="button" name="aleph" dsid="alephButton" class='' id='aleph' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05D0')"/>&#x05D0;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L01Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L02Amount" title="Bet (2)"><a data-role="button" name="bet" dsid="betButton" class='' id='bet' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05D1')"/>&#x05D1;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L02Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L03Amount" title="Gimel (3)"><a data-role="button" name="gimel" dsid="gimelButton" class='' id='gimel' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05D2')"/>&#x05D2;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L03Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L04Amount" title="Dalet (4)"><a data-role="button" name="dalet" dsid="daletButton" class='' id='dalet' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05D3')"/>&#x05D3;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L04Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L05Amount" title="Hey (5)"><a data-role="button" name="hey" dsid="heyButton" class='' id='hey' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05D4')"/>&#x05D4;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L05Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L06Amount" title="Vav (6)"><a data-role="button" name="vav" dsid="vavButton" class='' id='vav' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05D5')"/>&#x05D5;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L06Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L07Amount" title="Zayin (7)"><a data-role="button" name="zayin" dsid="zayinButton" class='' id='zayin' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05D6')"/>&#x05D6;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L07Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L08Amount" title="Chet (8)"><a data-role="button" name="chet" dsid="chetButton" class='' id='chet' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05D7')"/>&#x05D7;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L08Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L09Amount" title="Tet (9)"><a data-role="button" name="tet" dsid="tetButton" class='' id='tet' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05D8')"/>&#x05D8;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L09Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N05Amount" title="Kamats"><a data-role="button" name="Kamats" dsid="" class='' id='Kamats' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05B1')"/><font size="+4">&#x05B1;</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N05Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N06Amount" title="Hataf Kamats"><a data-role="button" name="Hataf Kamats" dsid="" class='' id='Hataf Kamats' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05B2')"/><font size="+4">&#x05B2;</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N06Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N07Amount" title="Hiriq"><a data-role="button" name="Hiriq" dsid="" class='' id='Hiriq' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05B3')"/><font size="+4">&#x05B3;</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N07Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C06Amount" title="Tipeha"><a data-role="button" name="Tipeha" dsid="" class='' id='Tipeha' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֖')"/><font size="+4">֖</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C06Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C07Amount" title="Revia"><a data-role="button" name="Revia" dsid="" class='' id='Revia' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֗')"/><font size="+4">֗</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C07Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C08Amount" title="Zarqa"><a data-role="button" name="Zarqa" dsid="" class='' id='Zarqa' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֘')"/><font size="+4">֘</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C08Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C09Amount" title="Pashta"><a data-role="button" name="Pashta" dsid="" class='' id='Pashta' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֙')"/><font size="+4">֙</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C09Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C10Amount" title="Yetiv"><a data-role="button" name="Yetiv" dsid="" class='' id='Yetiv' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֚')"/><font size="+4">֚</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C10Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C11Amount" title="Tevir"><a data-role="button" name="Tevir" dsid="" class='' id='Tevir' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֛')"/><font size="+4">֛</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C11Text"></p></span></div></div></td>
</tr></table>
<table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="direction: ltr;"><tr style="text-align: center;">
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C12Amount" title="Geresh"><a data-role="button" name="Geresh" dsid="" class='' id='Geresh' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֜')"/><font size="+4">֜</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C12Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C13Amount" title="Geresh Muqdam"><a data-role="button" name="Geresh Muqdam" dsid="" class='' id='Geresh Muqdam' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֝')"/><font size="+4">֝</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C13Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C14Amount" title="Gershayim"><a data-role="button" name="Gershayim" dsid="" class='' id='Gershayim' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֞')"/><font size="+4">֞</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C14Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C15Amount" title="Qarney Para"><a data-role="button" name="Qarney Para" dsid="" class='' id='Qarney Para' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֟')"/><font size="+4">֟</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C15Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C16Amount" title="Telisha Gedola"><a data-role="button" name="Telisha Gedola" dsid="" class='' id='Telisha Gedola' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֠')"/><font size="+4">֠</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C16Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N08Amount" title="Maqaf"><a data-role="button" name="Maqaf" dsid="" class='' id='Maqaf' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '־')"/><font size="+4">־</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N08Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N09Amount" title="Siluq"><a data-role="button" name="Siluq" dsid="" class='' id='Siluq' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '״')"/><font size="+4">״</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N09Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N10Amount" title="Hataf Hiriq"><a data-role="button" name="Hataf Hiriq" dsid="" class='' id='Hataf Hiriq' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05B4')"/><font size="+4">&#x05B4;</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N10Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N11Amount" title="Tsere"><a data-role="button" name="Tsere" dsid="" class='' id='Tsere' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05B5')"/><font size="+4">&#x05B5;</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N11Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L10Amount" title="Yod (10)"><a data-role="button" name="yod" dsid="yodButton" class='' id='yod' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05D9')"/>&#x05D9;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L10Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L11Amount" title="Chaf (20)"><a data-role="button" name="kaf" dsid="kafButton" class='' id='kaf' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05DB')"/>&#x05DB;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L11Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L12Amount" title="Lamed (30)"><a data-role="button" name="lamed" dsid="lamedButton" class='' id='lamed' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05DC')"/>&#x05DC;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L12Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L13Amount" title="Mem (40)"><a data-role="button" name="mem" dsid="memButton" class='' id='mem' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05DE')"/>&#x05DE;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L13Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L14Amount" title="Nun (50)"><a data-role="button" name="nun" dsid="nunButton" class='' id='nun' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05E0')"/>&#x05E0;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L14Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L15Amount" title="Samech (60)"><a data-role="button" name="samech" dsid="samechButton" class='' id='samech' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05E1')"/>&#x05E1;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L15Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L16Amount" title="Ayin (70)"><a data-role="button" name="ayin" dsid="ayinButton" class='' id='ayin' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05E2')"/>&#x05E2;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L16Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L17Amount" title="Pey (80)"><a data-role="button" name="pey" dsid="peyButton" class='' id='pey' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05E4')"/>&#x05E4;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L17Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L18Amount" title="Tzadi (90)"><a data-role="button" name="tzadi" dsid="tzadiButton" class='' id='tzadi' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05E6')"/>&#x05E6;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L18Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N12Amount" title="Hataf Tsere"><a data-role="button" name="Hataf Tsere" dsid="" class='' id='Hataf Tsere' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05B6')"/><font size="+4">&#x05B6;</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N12Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N13Amount" title="Qamats"><a data-role="button" name="Qamats" dsid="" class='' id='Qamats' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05B7')"/><font size="+4">&#x05B7;</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N13Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N14Amount" title="Hataf Qamats"><a data-role="button" name="Hataf Qamats" dsid="" class='' id='Hataf Qamats' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05B9')"/><font size="+4">&#x05B9;</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N14Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C17Amount" title="Cercle Masora"><a data-role="button" name="Cercle Masora" dsid="" class='' id='Cercle Masora' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֯')"/><font size="+4">֯</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C17Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C18Amount" title="Pazer"><a data-role="button" name="Pazer" dsid="" class='' id='Pazer' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֡')"/><font size="+4">֡</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C18Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C19Amount" title="Atnah Hafukh"><a data-role="button" name="Atnah Hafukh" dsid="" class='' id='Atnah Hafukh' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֢')"/><font size="+4">֢</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C19Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C20Amount" title="Munah"><a data-role="button" name="Munah" dsid="" class='' id='Munah' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֣')"/><font size="+4">֣</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C20Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C21Amount" title="Mahapakh"><a data-role="button" name="Mahapakh" dsid="" class='' id='Mahapakh' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֤')"/><font size="+4">֤</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C21Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C22Amount" title="Merkha"><a data-role="button" name="Merkha" dsid="" class='' id='Merkha' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֥')"/><font size="+4">֥</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C22Text"></p></span></div></div></td>
</tr></table>
<table width="100%" cellpadding="5" cellspacing="0" border="0" align="center" style="direction: ltr;"><tr style="text-align: center;">
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C23Amount" title=""><!--<a data-role="button" name="" dsid="" class='' id='' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֦')"/>--><font size="+4"></font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C23Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C24Amount" title="Darga"><a data-role="button" name="Darga" dsid="" class='' id='Darga' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֧')"/><font size="+4">֧</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C24Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C25Amount" title="Qadma"><a data-role="button" name="Qadma" dsid="" class='' id='Qadma' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֨')"/><font size="+4">֨</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C25Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C26Amount" title="Telisha Qetana"><a data-role="button" name="Telisha Qetana" dsid="" class='' id='Telisha Qetana' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֩')"/><font size="+4">֩</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C26Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C27Amount" title="Yerah Ben Yomo"><a data-role="button" name="Yerah Ben Yomo" dsid="" class='' id='Yerah Ben Yomo' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֪')"/><font size="+4">֪</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C27Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N15Amount" title="Hataf Segol"><a data-role="button" name="Hataf Segol" dsid="" class='' id='Hataf Segol' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '׳')"/><font size="+4">׳</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N15Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N16Amount" title="Shekel"><a data-role="button" name="Shekel" dsid="" class='' id='Shekel' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '')"/>₪<font size="12"></font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N16Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N17Amount" title="Hataf Holem"><a data-role="button" name="Hataf Holem" dsid="" class='' id='Hataf Holem' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05B8')"/><font size="+4">&#x05B8;</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N17Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N18Amount" title="Shin Dot"><a data-role="button" name="Shin Dot" dsid="" class='' id='Shin Dot' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05BC')"/><font size="+4">&#x05BC;</font></a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N18Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L19Amount" title="Kuf (100)"><a data-role="button" name="kuf" dsid="kufButton" class='' id='kuf' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05E7')"/>&#x05E7;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L19Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L20Amount" title="Resh (200)"><a data-role="button" name="resh" dsid="reshButton" class='' id='resh' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05E8')"/>&#x05E8;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L20Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L21Amount" title="Shin (300)"><a data-role="button" name="shin" dsid="shinButton" class='' id='shin' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05E9')"/>&#x05E9;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L21Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L22Amount" title="Tav (400)"><a data-role="button" name="tav" dsid="tavButton" class='' id='tav' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05EA')"/>&#x05EA;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L22Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L23Amount" title="Chaf Sofit (500)"><a data-role="button" name="kafF" dsid="kafFButton" class='' id='kafF' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05DA')"/>&#x05DA;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L23Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L24Amount" title="Mem Sofit (600)"><a data-role="button" name="memF" dsid="memFButton" class='' id='memF' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05DD')"/>&#x05DD;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L24Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L25Amount" title="Nun Sofit (700)"><a data-role="button" name="nunF" dsid="nunFButton" class='' id='nunF' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05DF')"/>&#x05DF;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L25Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L26Amount" title="Pey Sofit (800)"><a data-role="button" name="peyF" dsid="peyFButton" class='' id='peyF' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05E3')"/>&#x05E3;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L26Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><span id="L27Amount" title="Tzadi Sofit (900)"><a data-role="button" name="tzadiF" dsid="tzadiFButton" class='' id='tzadiF' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '\u05E5')"/>&#x05E5;</a></span><span style="font-size: 10px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="L27Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N19Amount" title="Vav Hahipuch"><a data-role="button" name="Vav Hahipuch" dsid="" class='' id='Vav Hahipuch' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', 'וֹ')"/><font size="+4">וֹ</font></a></span><span style="font-size: 28px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N198Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N20Amount" title="Vav Point"><a data-role="button" name="Vav Point" dsid="" class='' id='Vav Point' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', 'וּ')"/><font size="+4">וּ</font></a></span><span style="font-size: 28px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N20Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Niqqud"><span id="N21Amount" title="Holem"><a data-role="button" name="Holem" dsid="" class='' id='Holem' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', 'ּ')"/><font size="+4">ּ</font></a></span><span style="font-size: 28px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="N21Text"></p></span></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C28Amount" title="Ole"><a data-role="button" name="Ole" dsid="" class='' id='Ole' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֫')"/><font size="+4">֫</font></a></span><span style="font-size: 28px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C28Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C29Amount" title="Iluy"><a data-role="button" name="Iluy" dsid="" class='' id='Iluy' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֬')"/><font size="+4">֬</font></a></span><span style="font-size: 28px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C29Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C30Amount" title="Dehi"><a data-role="button" name="Dehi" dsid="" class='' id='Dehi' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֭')"/><font size="+4">֭</font></a></span><span style="font-size: 28px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C30Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C31Amount" title="Zinor"><a data-role="button" name="Zinor" dsid="" class='' id='Zinor' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '֮')"/><font size="+4">֮</font></a></span><span style="font-size: 28px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C31Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C32Amount" title="Merkha Kefula"><a data-role="button" name="Merkha Kefula" dsid="" class='' id='Merkha Kefula' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '')"/><font size="+4">֦</font></a></span><span style="font-size: 28px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C32Text"></p></span></div></div></td>
	<td width="3.7%" class="KeyCell" valign="bottom"><div class="Cantillation"><span id="C33Amount" title=""><!--<a data-role="button" name="" dsid="" class='' id='' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick="appendToInputField('inputText', '₪')"/>--><font size="+4"></font></a></span><span style="font-size: 28px; display: inline-block; margin: 0 auto; vertical-align: top;"><p id="C33Text"></p></span></div></td>
</tr></table>
<table><tr><td></td></tr></table><!-- Empty Row for aesthetic purposes -->
</div>
</div>

<!-- mobilecontainer1 -->
<div data-role="content" id="j_3" name="mobilecontainer1" class="mobileContent mobilecontainer1" dsid="mobilecontainer1" data-theme=''>

<!-- Input Phrase -->
<script>document.getElementById("inputText").value = "";</script> <!-- set the default value \u05D9\u05D4\u05D5\u05D4 -->
<div data-role="fieldcontain" class="mobiletextinput1">
<table width="100%" cellpadding="5" cellspacing="5" border="0" align="center">
<tr><td><div style="position: relative;"><input type="text" list='listid1' placeholder="Type your word here" TABINDEX="2" value="" dsid="input" id="inputText" data-theme="a" data-mini='false' class='input mobiletextinput1' style="background-color: #222222; color:#FFFFFF; text-align:right; text-shadow: 0 0 5px #FFFFFF; font-family: Arial; font-size: 18px; width: 100%; display: inline-block; resize: both; overflow: hidden;" onchange="inputText = this.value;"><img src="img/copy-icon.png" alt="Copy Text" border="0" id="copyIcon" onclick="copyText()" style="position: absolute; top: 10px; left: 0px; width: 32px; height: 21px; cursor: pointer;"></div>
	<datalist id='listid1'>
	<option label='Ehyeh' value='&#x05D0;&#x05D4;&#x05D5;&#x05D4;'>
	<option label='YHVH' value='&#x05D9;&#x05D4;&#x05D5;&#x05D4;'>
	<option label='Elohim' value='&#x05D0;&#x05DC;&#x05D5;&#x05D4;&#x05D9;&#x05DE;'>
	<option label='El' value='&#x05D0;&#x05DC;'>
	<option label='Yah' value='&#x05D9;&#x05D4;'>
	<option label='YHVH-Elohim' value='&#x05D9;&#x05D4;&#x05D5;&#x05D4; &#x05D0;&#x05DC;&#x05D5;&#x05D4;&#x05D9;&#x05DE;'>
	<option label='Jehovah-Tzevaot' value='&#x05D9;&#x05D4;&#x05D5;&#x05D4; &#x05E6;&#x05D1;&#x05D0;&#x05D5;&#x05EA;'>
	<option label='Elohim-Tzevaot' value='&#x05D0;&#x05DC;&#x05D5;&#x05D4;&#x05D9;&#x05DE; &#x05E6;&#x05D1;&#x05D0;&#x05D5;&#x05EA;'>
	<option label='El-Shaddai' value='&#x05D0;&#x05DC; &#x05E9;&#x05D3;&#x05D9;'>
	<option label='Adoni' value='&#x05D0;&#x05D3;&#x05D5;&#x05E0;&#x05D9;'>
</datalist>
<!--Likely will not need if you can use the Transpose button instead</td><td width="20px"><a data-role="button" name="samech" dsid="samechButton" class='' id='samech' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='a' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF;" onclick=""/><span title="Add this word to the Database.">&#10133;</span></a>
</td><td width="20px"><a data-role="button" name="samech" dsid="samechButton" class='' id='samech' data-corners='true' data-icon='' data-iconpos='' data-mini='false' data-theme='b' tabIndex='' style="background-color: #EEFFFF; color:#FFFFFF width: 20px;"  background-image: url('https://bumpper.com/app1/files/resources/lib/jquerymobile/images/icon-search-black.png'); background-size: 20px 20px; background-repeat: no-repeat; background-position: center;" onclick=""/><span title="Search for this word in the Database.">&#128269;</span></a>-->
</td></tr></table></div>

<!-- 2 Word to be Knit -->
<table width="100%" cellpadding="5" cellspacing="5" border="0" align="center">
<tr><td><div style="position: relative;"><input type='text' list='listid' placeholder="Optional word to be Knit with above word" TABINDEX="" value="" dsid="input2" id="inputText2" data-theme="a" data-mini='false' class='input mobiletextinput1' onChange="inputText2 = this.value" style="background-color: #222222; color:#FFFFFF; text-align:right; text-shadow: 0 0 5px #FFFFFF; font-family: Arial; font-size: 18px; width: 100%; display: inline-block; resize: both; overflow: hidden;"><img src="img/copy-icon.png" alt="Copy Text" border="0" id="copyIcon2" onclick="copyText2()" style="position: absolute; top: 19px; left: 0px; width: 32px; height: 21px; cursor: pointer;"></div>
	<datalist id='listid'>
	<option label='Ehyeh' value='&#x05D0;&#x05D4;&#x05D5;&#x05D4;'>
	<option label='YHVH' value='&#x05D9;&#x05D4;&#x05D5;&#x05D4;'>
	<option label='Elohim' value='&#x05D0;&#x05DC;&#x05D5;&#x05D4;&#x05D9;&#x05DE;'>
	<option label='El' value='&#x05D0;&#x05DC;'>
	<option label='Yah' value='&#x05D9;&#x05D4;'>
	<option label='YHVH-Elohim' value='&#x05D9;&#x05D4;&#x05D5;&#x05D4; &#x05D0;&#x05DC;&#x05D5;&#x05D4;&#x05D9;&#x05DE;'>
	<option label='Jehovah-Tzevaot' value='&#x05D9;&#x05D4;&#x05D5;&#x05D4; &#x05E6;&#x05D1;&#x05D0;&#x05D5;&#x05EA;'>
	<option label='Elohim-Tzevaot' value='&#x05D0;&#x05DC;&#x05D5;&#x05D4;&#x05D9;&#x05DE; &#x05E6;&#x05D1;&#x05D0;&#x05D5;&#x05EA;'>
	<option label='El-Shaddai' value='&#x05D0;&#x05DC; &#x05E9;&#x05D3;&#x05D9;'>
	<option label='Adoni' value='&#x05D0;&#x05D3;&#x05D5;&#x05E0;&#x05D9;'>
</datalist></td></tr></table>


<table width="100%" cellpadding="10" cellspacing="10" border="0" align="center"><tr style="text-align: center;">
	<td width="25%">
	<!-- cryptographyMenu --><span title="Select the algorithm you wish to use to encrypt the original word."><center>Encryption Algorithm</center>
	<div data-role="fieldcontain" class="mobileselectmenu2">
	<select name="cryptographyMenu" id="cryptmenu" dsid="cryptographyMenu" data-theme="b" data-inline='false' data-mini='false' data-icon='arrow-d' data-iconpos='right' data-native-menu="true" tabIndex="2" tiggzi-class="mobileselectmenu2" onChange="cryptography = this.value" style="background-color: #222222; color:#FFFFFF; text-shadow: 0 0 5px #FFFFFF;">
	<option value='AYiK-BeCheR' reRender='cryptographyMenu' dsid='cryptographyMenu-3'>AYiK-BeCheR</option><!--Arich Anpin-->
	<option value='AL-BaM' reRender='cryptographyMenu' dsid='cryptographyMenu-0'>AL-BaM</option><!--Chochma-->
	<option value='AT-BaSh' reRender='cryptographyMenu' dsid='cryptographyMenu-1' selected>AT-BaSh</option><!--Binah-->
	<option value='ACh-BI' reRender='cryptographyMenu' dsid='cryptographyMenu-2'>ACh-BI</option><!--Da'at-->
	<option value='AChaS-BeTA' reRender='cryptographyMenu' dsid='cryptographyMenu-4'>AChaS-BeTA</option><!--Ze'ir Anpin-->
	<option value='AT-BaCh' reRender='cryptographyMenu' dsid='cryptographyMenu-5'>AT-BaCh</option><!--Malchut-->
	<option value='AT-BaCh-finals' reRender='cryptographyMenu' dsid='cryptographyMenu-6'>AT-BaCh (with Finals)</option><!--Malchut-->
	<option value='AiY-BaK' reRender='cryptographyMenu' dsid='cryptographyMenu-7'>AiY-BaK</option>
	<option value='ATz-BaPh' reRender='cryptographyMenu' dsid='cryptographyMenu-8'>ATz-BaPh</option>
	<option value='AL-BeTh' reRender='cryptographyMenu' dsid='cryptographyMenu-9'>AL-BeTh</option>
	<option value='Ofanim' reRender='cryptographyMenu' dsid='cryptographyMenu-10'>Ofanim</option>
	</select></div></span></td>
	
    <td width="25%">
  <!-- gematriaMenu --><span title="Select the system you wish to use for assigning numerical values to each letter."><center>Gematria System</center>
  <div data-role="fieldcontain" class="mobileselectmenu2">
    <select name="gematriaMenu" id="gemmenu" dsid="gematriaMenu" data-theme="b" data-inline='false' data-mini='false' data-icon='arrow-d' data-iconpos='right' data-native-menu="true" tabIndex="3" tiggzi-class="mobileselectmenu2" onChange="gematria = this.value; gematriaMenu();" style="background-color: #222222; color:#FFFFFF; text-shadow: 0 0 5px #FFFFFF;">
	<!--<select name="gematriaMenu" id="gemmenu" dsid="gematriaMenu" data-theme="b" data-inline='false' data-mini='false' data-icon='arrow-d' data-iconpos='right' data-native-menu="true" tabIndex="3" tiggzi-class="mobileselectmenu2" onchange="gematriaMenu(this.value);" style="background-color: #222222; color:#FFFFFF; text-shadow: 0 0 5px #FFFFFF;">-->
      <option value='Ragil' reRender='gematriaMenu' dsid='gematriaMenu-0' selected>Ragil</option>
      <option value='Kolel' reRender='gematriaMenu' dsid='gematriaMenu-3'>Kolel +letters</option>
      <option value='Kolel +1' reRender='gematriaMenu' dsid='gematriaMenu-6'>Kolel +word(s)</option>
      <option value='HaKlali' reRender='gematriaMenu' dsid='gematriaMenu-2'>HaKlali</option>
	  <option value='Reduced' reRender='gematriaMenu' dsid='gematriaMenu-9'>Reduced</option>
      <option value='IntegralReduced' reRender='gematriaMenu' dsid='gematriaMenu-8'>Integral Reduced</option>
      <option value='Katan' reRender='gematriaMenu' dsid='gematriaMenu-1'>Katan</option> 
	  <option value='Ordinal' reRender='gematriaMenu' dsid='gematriaMenu-7'>Ordinal</option>
      <option value='HaKadmi' reRender='gematriaMenu' dsid='gematriaMenu-4'>HaKadmi</option>
      <option value='HaPerati' reRender='gematriaMenu' dsid='gematriaMenu-5'>HaPerati</option>
	  <option value='Miluy' reRender='gematriaMenu' dsid='gematriaMenu-10'>Miluy</option>
    </select></div></span></td>

	<td width="25%">
	<!-- spellingMenu --><span title="Select the system of spelling for letter names."><center>Spelling</center>
	<div data-role="fieldcontain" class="mobileselectmenu2">
	<select name="spellingMenu" id="spellmenu" dsid="spellingMenu" data-theme="b" data-inline='false' data-mini='false' data-icon='arrow-d' data-iconpos='right' data-native-menu="true" tabIndex="4" tiggzi-class="mobileselectmenu2" onChange="spelling = this.value" style="background-color: #222222; color:#FFFFFF; text-shadow: 0 0 5px #FFFFFF;">
	<option value='AB' reRender='spellingMenu' dsid='spellingMenu-0' selected>A"B</option><!--Chochma-->
	<option value='SaG' reRender='spellingMenu' dsid='spellingMenu-1'>SaG</option><!--Binah-->
	<option value='MaH' reRender='spellingMenu' dsid='spellingMenu-2'>MaH</option><!--ZA-->
	<option value='BaN' reRender='spellingMenu' dsid='spellingMenu-3'>BaN</option><!--Malchut-->
	</select></div></span></td>
		
	<td width="25%">
	<!-- transposeButton --><span title="Begin the process."><center>Calculate</center>
	<a data-role="button" name="transposeButton" dsid="transposeButton" class='transposeButton mobilebutton1' id='transpose' data-corners='true' data-icon='search' data-iconpos='right' data-mini='false' data-theme='a' tabIndex='1' style="background-color: #EEFFFF; color:#FFFFFF" onclick="Transpose(); randomString(6, 'A');"/><span title="Begin the process.">Transpose</span></a>
	</span></td></tr></table><p></div>

<div id="Results" class="hidden">
<table width="100%" cellpadding="10" cellspacing="10" border="0" align="center">
<!-- Input Phrase Gematria -->
<tr><td width="33%" valign="top"><p align='left' valign='top'><b><u><span title="The numerical value of all the letters from the original word."><a href="/app1/help.html#Gematria" target="_blank" style="text-decoration: none; color: white;">Input Phrase Gematria:</a></span></b></u></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="gem1"></div></p></td>
<!-- Encrypted Pharse -->
<td width="33%" valign="top"><p align='center' valign='top'><b><u><a href="" border="0" style="text-decoration: none; color: white;" onclick="SendCryptography2()"><span title="The new word once it has been transposed used the methods below.">Encrypted Phrase:</span></a></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="crypt2"></div></p></td>
<!-- Encrypted Phrase Gematria -->
<td width="33%" valign="top"><p align='right' valign='top'><b><u><span title="The numerical value of the transposed new word."><a href="/app1/help.html#Cyphers" target="_blank" style="text-decoration: none; color: white;">Encrypted Phrase Gematria:</a></span></b></u></p>
<div align="right" data-role="fieldcontain" class="mobiletextinput4" id="gem2"></div></p></td></tr>

<!-- Original Word -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><span title="The original word entered in the first text box."><a href="/app1/help.html#Hebrew" target="_blank" style="text-decoration: none; color: white;">Original Input Phrase:</a></span></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="originalWord"></div></td>
<!-- Leap -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><a href="/app1/help.html#Leap" target="_blank" border="0" style="text-decoration: none; color: white;" onclick="SendLeap()"><span title="Also called a Jump, where the first letter of the original word is removed of leaped over, to see if it reveals a root word.">Leap</span><!-- (Jump)-->:</a></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="leap"></div></td>
<!-- Skip -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><a href="/app1/help.html#Skip" target="_blank" border="0" style="text-decoration: none; color: white;" onclick="SendSkip()"><span title="Also called a Dilug, where the second letter of the original word is removed or skipped over, to see if it reveals a root word.">Skip:</span></a></u></b></p>
<div align="right" data-role="fieldcontain" class="mobiletextinput4" id="skip"></div></td></tr>

<!-- Acronym -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><a href="/app1/help.html#Acronym" target="_blank" border="0" style="text-decoration: none; color: white;" onclick="SendAcronym()"><span title="Takes the first letter of each word and combines them to see if they reveal a hidden word.">Acronym:</span></a></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="acronym"></div></td>
<!-- Elision -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title="Removing the first and last letter."><a href="/app1/help.html#Elision" target="_blank" style="text-decoration: none; color: white;">Elision:</a></span></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="elision"></div></td>
<!-- Acronym with Finals -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><span title="A reverse acronym, where the last letter of each of the original words is combined to see if they reveal a hidden word."><a href="/app1/help.html#Acronym" target="_blank" style="text-decoration: none; color: white;">Finals:</a></span><!--Sofim--></u></b></p>
<div align="right" data-role="fieldcontain" class="mobiletextinput4" id="sofim"></div></td></tr>

<!-- Forward Exchange -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><span title="Replacing each letter of the original word, by rolling forward one letter to what comes next in the alphabet."><a href="/app1/help.html#ABaG_BeGeD" target="_blank" style="text-decoration: none; color: white;">Av-Gad (Forward Exchange):</a></span></u></b></p><!--Keter-->
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="forexch"></div></td>
<!-- Knit Word -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title="Weaving the letters of two words together into one new word, by alternativing between each word, letter by letter.">Knit Word:</span></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="knit"></div></td>
<!-- Backward Exchange -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><span title="Replacing each letter of the original word, by rolling backwards one letter to what came before it in the alphabet."><a href="/app1/help.html#ABaG_BeGeD" target="_blank" style="text-decoration: none; color: white;">At-Ba (Backward Exchange):</a></span></u></b></p>
<div align="right" data-role="fieldcontain" class="mobiletextinput4" id="backexch"></div></td></tr>

<!-- Pictogram & Meaning -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><a href="img/pictographs/Pictograms.pdf" border="0" style="text-decoration: none; color: white;"><span title="The pictograms for each letter of the original word and their meanings."><a href="/app1/help.html#Four_Major_Writing_Styles" target="_blank" style="text-decoration: none; color: white;">Pictogram & Meaning:</a></span></u></b> <a href="#" style="text-decoration: none;" onclick="togglePictograms()"><img src="img/expand.png" id="PictogramsExpandCollapseImg" alt="Expand/Collapse" heigth="16" width="20" border="0" style="filter: drop-shadow(0 0 5px #FFFFFF);"><style>a:hover img[src="img/kboard.png"] {filter: drop-shadow(0 0 25px #FFFFFF); box-shadow: 0 0 10px #FFFFFF; }</style></a></p>
<div id="Pictograms"><div align="left" data-role="fieldcontain" class="mobiletextinput4" id="pictogram"></div></div></td>
<!-- Miluy (Spelling) -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title="The full spelling of each letter written out beginning with the first letter at the top and ending with the last letter at the bottom."><a href="/app1/help.html#ABaG_BeGeD" target="_blank" style="text-decoration: none; color: white;">Miluy (Spelling):</a></span></u></b> <a href="#" style="text-decoration: none;" onclick="toggleMiluy()"><img src="img/expand.png" id="MiluyExpandCollapseImg" alt="Expand/Collapse" heigth="16" width="20" border="0" style="filter: drop-shadow(0 0 5px #FFFFFF);"><style>a:hover img[src="img/kboard.png"] {filter: drop-shadow(0 0 25px #FFFFFF); box-shadow: 0 0 10px #FFFFFF; }</style></p>
<div id="Miluy"><div align="center" data-role="fieldcontain" class="mobiletextinput4" id="spelling"></div></div></td>
<!-- Morphs -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><a href="#" style="text-decoration: none;" onclick="toggleMorphs()"><img src="img/expand.png" id="MorphsExpandCollapseImg" alt="Expand/Collapse" heigth="16" width="20" border="0" style="filter: drop-shadow(0 0 5px #FFFFFF);"><style>a:hover img[src="img/kboard.png"] {filter: drop-shadow(0 0 25px #FFFFFF); box-shadow: 0 0 10px #FFFFFF; }</style></a>   <span title="The assumption that a letter is made up of 2 or more similar letters based on their appearance, where these new/additional letter could be substituted for that letter.">Morphs:</span></u></b></p>
<div id="Morphs"><div align="right" data-role="fieldcontain" class="mobiletextinput4" id="morph"></div></ol></div></td></tr>

<!-- Summation -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><span title="The letter combination that normally represents the numerical value of the original word.">Summation:</span></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="summation"></div></td>
<!-- Paths -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title="The number of paths on the Tree of Life, found by the number of unique letters in the original word."><a href="img/paths.jpg" target="_blank" border="0" style="text-decoration: none; color: white;"># of Paths:</a></span></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="paths"></div></td>
<!-- Divisions -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><a href="#" style="text-decoration: none;" onclick="togglePossibleDivisions()"><img src="img/expand.png" id="PossibleDivisionsExpandCollapseImg" alt="Expand/Collapse" heigth="16" width="20" border="0" style="filter: drop-shadow(0 0 5px #FFFFFF);"><style>a:hover img[src="img/kboard.png"] {filter: drop-shadow(0 0 25px #FFFFFF); box-shadow: 0 0 10px #FFFFFF; }</style></a>   <span title="The different letter combinations with make words of the same numerical value.">Possible Divisions:</span></u></b></p>
<div id="PossibleDivisions"><div align="right" data-role="fieldcontain" class="mobiletextinput4" id="div"></div></div></td></tr>

<!-- Reversed -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><a href="" border="0" style="text-decoration: none; color: white;" onclick="SendReverse()"><span title="This will generate a random word based on the number of letters in the original word."><a href="/app1/help.html#ThShRQ" target="_blank" style="text-decoration: none; color: white;">ThShRQ (Reversed):</a></span></a></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="reverseText"></div></td>
<!-- Gates -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title="The number of possible combinations from each letter of the original word to every other letter of the original word."><a href="img/gates.jpg" target="_blank" style="text-decoration: none; color: white;"># of Gates:</a></span></a></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="gates"></div></td>
<!--  -->
<td width="33%" valign="top" rowspan="*"><p align="right" valign="top"><b><u><a href="#" style="text-decoration: none;"><span title=""><a href='' target='_blank' style='color: white; font-weight: bold;'></span></a></u></b></p>
<div id=""><div align="right" data-role="fieldcontain" class="mobiletextinput4" id=""></div></div></td></tr>







<!-- Words -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><span title=""><a href="Total number of words originally entered." target="_blank" style="text-decoration: none; color: white;"># of Words:</a></span></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="Words"></div></td>
<!-- Letters -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title="Total number of letters in the word or phrase."><a href="" style="text-decoration: none; color: white;"># of Letters:</a></span></a></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="Letters"></div></td>
<!-- Ofanim -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><span title="Using this method replaces each letter by the last letter of its fully spelled out name."><a href="" style="text-decoration: none; color: white;">Ofanim:</a></span></u></b></p>
<div id=""><div align="right" data-role="fieldcontain" class="mobiletextinput4" id="Ofanim"></div></div></td></tr>

<!-- AYiK-BeCheR -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><span title="This is also known as the Kabbalah of Nine Chambers, because of its 9 equal rows."><a href="" target="_blank" style="text-decoration: none; color: white;">AYiK-BeCheR:</a></span></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="AYiK-BeCheR"></div></td>
<!-- AL-BaM -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title="The basic direct transformation pattern, wherein the alef-beit is divided into two equal groups of eleven letters which are then paired (first to first, second to second, etc.…) to transform one into the other."><a href="" target="_blank" style="text-decoration: none; color: white;">AL-BaM:</a></span></a></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="AL-BaM"></div></td>
<!-- AT-BaSh -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><span title="This is a basic reflective transformation pattern, wherein the first and last letters of the alef-beit transform into one another, as do the second and second-to-last, and so on."><a href="" style="text-decoration: none; color: white;">AT-BaSh:</a></span></u></b></p>
<div id=""><div align="right" data-role="fieldcontain" class="mobiletextinput4" id="AT-BaSh"></div></div></td></tr>

<!-- ACh-BI -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><span title="This is a method of alphabetic transformation wherein the alef-beit is divided into two equal groups of eleven letters. Within each group, the letters pair reflectively --the first with the last, the second with the second-to-last, etc."><a href="" target="_blank" style="text-decoration: none; color: white;">ACh-BI:</a></span></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="ACh-BI"></div></td>
<!-- AChaS-BeTA -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title="This is a method of alphabetic transformation wherein the first 21 letters of the alef-beit are initially divided into three equal groups of seven letters, which are then tripled together in direct order."><a href="" target="_blank" style="text-decoration: none; color: white;">AChaS-BeTA:</a></span></a></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="AChaS-BeTA"></div></td>
<!-- AiY-BaK -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><span title="Used for purposes of reincarnation to find the correction one must make.  The first 9 letters are paired with the second 9 letters based on a one for one method.  But the last four letters then make up two pairs."><a href="" style="text-decoration: none; color: white;">AiY-BaK:</a></span></u></b></p>
<div id=""><div align="right" data-role="fieldcontain" class="mobiletextinput4" id="AiY-BaK"></div></div></td></tr>

<!-- AT-BaCh -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><span title="This is a method of alphabetic transformation that is initially divided into three groups (9, 9, 4)"><a href="" target="_blank" style="text-decoration: none; color: white;">AT-BaCh:</a></span></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="AT-BaCh"></div></td>
<!-- AT-BaCh (with Finals) -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title="This is a method of alphabetic transformation that is initially divided into three groups (9, 9, 9)"><a href="" target="_blank" style="text-decoration: none; color: white;">AT-BaCh (with Finals):</a></span></a></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="AT-BaCh999"></div></td>
<!-- ATz-BaPh -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><span title="Similar to AT-BaSh, but also including the 5 final form letters."><a href="" style="text-decoration: none; color: white;">ATz-BaPh:</a></span></u></b></p>
<div id=""><div align="right" data-role="fieldcontain" class="mobiletextinput4" id="ATz-BaPh"></div></div></td></tr>

<!-- AL-BeTh -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><span title="Based on At-BaSh, but the letters of the 2nd column are reversed and alternated."><a href="" target="_blank" style="text-decoration: none; color: white;">AL-BeTh:</a></span></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="AL-BeTh"></div></td>
<!-- Ragil -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title="The standard and most commonly used form of gematria."><a href="" target="_blank" style="text-decoration: none; color: white;">Ragil:</a></span></a></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="Ragil"></div></td>
<!-- HaKlali -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><span title="The Ragil value of the word squared."><a href="" style="text-decoration: none; color: white;">HaKlali:</a></span></u></b></p>
<div id=""><div align="right" data-role="fieldcontain" class="mobiletextinput4" id="HaKlali"></div></div></td></tr>

<!-- Kolel+letters -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><span title="The Ragil value of the word + the numbers of the letters."><a href="" target="_blank" style="text-decoration: none; color: white;">Kolel +letters:</a></span></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="Kolel"></div></td>
<!-- Kolel+word(s) -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title="The Ragil value of the word + the word itself, or the number of words."><a href="" target="_blank" style="text-decoration: none; color: white;">Kolel +word(s):</a></span></a></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="Kolel+1"></div></td>
<!-- Reduced -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><span title="The letters positional value by column when the alphabet is ordered in a 3x9 grid (1-9, 1-9, 1-9)."><a href="" style="text-decoration: none; color: white;">Reduced:</a></span></u></b></p>
<div id=""><div align="right" data-role="fieldcontain" class="mobiletextinput4" id="Reduced"></div></div></td></tr>

<!-- Integral-Reduced -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><span title="Sum of digits of a word until only one digit is left."><a href="" target="_blank" style="text-decoration: none; color: white;">Integral Reduced:</a></span></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="Integral-Reduced"></div></td>
<!-- Katan -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title="Made by truncating all the trailing zeros."><a href="" target="_blank" style="text-decoration: none; color: white;">Katan:</a></span></a></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="Katan"></div></td>
<!-- Ordinal -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><span title="Value is calculated by the letters place within the alphabet, 1-27."><a href="" style="text-decoration: none; color: white;">Ordinal:</a></span></u></b></p>
<div id=""><div align="right" data-role="fieldcontain" class="mobiletextinput4" id="Ordinal"></div></div></td></tr>

<!-- HaKadmi -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><a href="" border="0" style="text-decoration: none; color: white;"><span title="Ragil value plus the value of the preceding letters (triangular value), which uses each letter as the sum of all the standard gematria letter values preceding it."><a href="" target="_blank" style="text-decoration: none; color: white;">HaKadmi:</a></span></a></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="HaKadmi"></div></td>
<!-- HaPerati -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title="Each letter squared and added together."><a href="" target="_blank" style="text-decoration: none; color: white;">HaPerati:</a></span></a></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="HaPerati"></div></td>
<!-- Miluy -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><span title=""><a href="" style="text-decoration: none; color: white;">Miluy:</a></span></u></b></p>
<div id=""><div align="right" data-role="fieldcontain" class="mobiletextinput4" id="Miluy"></div></div></td></tr>

<!-- A"B -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><span title=""><a href="" target="_blank" style="text-decoration: none; color: white;">A"B:</a></span></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="AB"></div></td>
<!-- SaG -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title=""><a href="" target="_blank" style="text-decoration: none; color: white;">SaG:</a></span></a></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id="SaG"></div></td>
<!-- MaH -->
<td width="33%" valign="top"><p align="right" valign="top"><b><u><span title="Value is calculated by the letters place within the alphabet, 1-27."><a href="" style="text-decoration: none; color: white;">MaH:</a></span></u></b></p>
<div id=""><div align="right" data-role="fieldcontain" class="mobiletextinput4" id="MaH"></div></div></td></tr>

<!-- BaN -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><span title=""><a href="" target="_blank" style="text-decoration: none; color: white;">BaN:</a></span></u></b></p>
<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="BaN"></div></td>
<!--  -->
<td width="33%" valign="top"><p align="center" valign="top"><b><u><span title=""><a href="" target="_blank" style="text-decoration: none; color: white;"></a></span></a></u></b></p>
<div align="center" data-role="fieldcontain" class="mobiletextinput4" id=""></div></td>
<!-- Ananagrams -->
<td width="33%" valign="top" rowspan="*"><p align="right" valign="top"><b><u><a href="#" style="text-decoration: none;" onclick="toggleAnagramResults()"><img src="img/expand.png" id="AnagramResultsExpandCollapseImg" alt="Expand/Collapse" heigth="16" width="20" border="0" style="filter: drop-shadow(0 0 5px #FFFFFF);"><style>a:hover img[src="img/kboard.png"] {filter: drop-shadow(0 0 25px #FFFFFF); box-shadow: 0 0 10px #FFFFFF; }</style></a>    <a onclick="selectText('anagram')" border="0" style="text-decoration: none; color: white;"><span title="A list of all the possible varations of spellings by permutating the original word.  Also called Tserufim.  &#10;&#10;If the original word is more than 7 characters it may crash the app.  "><a href='startScreenOptimized.html' target='_blank' style='color: white; font-weight: bold;'>Ananagrams</span><!-- (Tserufim)-->:</a></u></b></p>
<div id="anagramResults"><ol type="1" style="text-align:right; float:right; clear:both;"><div align="right" data-role="fieldcontain" class="mobiletextinput4" id="anagram"></div></div></td></tr>

<!-- Random Word -->
<tr><td width="33%" valign="top"><p align="left" valign="top"><b><u><a href="javascript:location.reload();" border="0" style="text-decoration: none; color: white;" onclick="randomString(6, 'A')"><span title=""><!--Angel:--></span><!--/Random Word--></a></u></b></p>
<!--<div align="left" data-role="fieldcontain" class="mobiletextinput4" id="randword"></div>--></td>
<!-- Google Input Tools -->
<tr><td width="33%" valign="top"><p align="center" valign="baseline"><b><u><!--<a href="http://www.google.com/inputtools/"><img src="../img/inputtools.jpg" border="0" alt="Google Input Tools"></a>--></u></b></p>
<!--<div align="center" data-role="fieldcontain" class="mobiletextinput4" id=""></div>--></td>
<!--  -->
<td width="33%" valign="top"><!--<p align="right" valign="top"><b><u><a onclick="" border="0" style="text-decoration: none; color: white;"><a href="#" style="text-decoration: none;" onclick=""><img src="img/expand.png" id="GematriaMatchesExpandCollapseImg" alt="Expand/Collapse" heigth="16" width="20" border="0" style="filter: drop-shadow(0 0 5px #FFFFFF);"><style>a:hover img[src="img/kboard.png"] {filter: drop-shadow(0 0 25px #FFFFFF); box-shadow: 0 0 10px #FFFFFF; }</style></a>    <span title="List of all other words from the database having the same Gematria value."><a href='' target='_blank' style='color: white; font-weight: bold;'>Matches</span>:</a></u></b></p>-->
<div id=""><div align="right" data-role="fieldcontain" class="mobiletextinput4" id=""></div></div></td>
</table>

<!-- Gematria Matches -->
<table width="100%" cellpadding="10" cellspacing="10" border="0" align="center"><tr><td>
<p align="left" valign="top"><b><u><a herf="" border="0" style="text-decoration: none; color: white;"><span title="List of all other words from the database having the same Gematria value."><a href="files/gematriaDB.xlsx" target="_blank" style="text-decoration: none; color: white;">Gematria Matches:</a></span></u></b>    
<a href="#bottom" style="text-decoration: none;" onclick="toggleGematriaMatches(); scrollToBottom()"><img src="img/expand.png" id="GematriaMatchesExpandCollapseImg" alt="Expand/Collapse" heigth="16" width="20" border="0" style="filter: drop-shadow(0 0 5px #FFFFFF);"><style>a:hover img[src="img/kboard.png"] {filter: drop-shadow(0 0 25px #FFFFFF); box-shadow: 0 0 10px #FFFFFF; }</style></a></p>
</td></tr></table><div id="gematriaMatches"><div id="result" class="result"><table width="100%" cellpadding="10" cellspacing="10" border="0" align="center"><tr><td width="33%" valign="top"><div class="loading">Loading</div></td></tr></div></div>
</div>

<script>
  // Hide-Unhide the Niqqud keys on the keyboard
  let niqqudIsVisible = false;
  function toggleNiqqud() {
    let niqqudElements = document.querySelectorAll('.Niqqud');
    niqqudElements.forEach(function(element) {
      if (niqqudIsVisible) {
        element.style.display = 'none';
      } else {
        element.style.display = 'block';
      }
    });
    niqqudIsVisible =!niqqudIsVisible;
  }
</script>
<script>
  // Hide-Unhide the Cantillation keys on the keyboard
  let cantillationIsVisible = false;
  function toggleCantillation() {
    let cantillationElements = document.querySelectorAll('.Cantillation');
    cantillationElements.forEach(function(element) {
      if (cantillationIsVisible) {
        element.style.display = 'none';
      } else {
        element.style.display = 'block';
      }
    });
    cantillationIsVisible =!cantillationIsVisible;
  }
</script>

<script type="text/javascript">
// On-screen Hebrew keys
function appendToInputField(inputId, char) {
  const inputElement = document.getElementById(inputId);
  if (inputElement) {
    inputElement.value += char;
  }
}
// Send numerical values to the inputText field to be processed
function replaceInputField(inputId, value) {
  const inputElement = document.getElementById(inputId);
  if (inputElement) {
    inputElement.value = value;
  }
}
// Hide-Unhide keyboard
let keyboardIsVisible = true;
function toggleKeyboard() {
  let tables = document.querySelectorAll(`#keyboard table`);
  tables.forEach(function(table) {
    let cells = table.querySelectorAll('td');
    
    cells.forEach(function(cell) {
      if (keyboardIsVisible) {
        cell.style.display = 'none';
      } else {
        cell.style.display = 'table-cell';
      }
    });
  });
  keyboardIsVisible = !keyboardIsVisible;
}
// Hide-Unhide Pictograms
let PictogramsAreVisible = true;
let PictogramsExpandCollapseImg = document.getElementById('PictogramsExpandCollapseImg');
function togglePictograms() {
  let PictogramsDiv = document.getElementById('Pictograms');
  if (PictogramsAreVisible) {
    PictogramsDiv.style.display = 'none';
	PictogramsExpandCollapseImg.src = "img/collapse.png";
  } else {
    PictogramsDiv.style.display = 'block';
	PictogramsExpandCollapseImg.src = "img/expand.png";
  }
  PictogramsAreVisible = !PictogramsAreVisible;
}
PictogramsExpandCollapseImg.src = "img/expand.png"; // Initialize the image source to "img/expand.png"
// Hide-Unhide Miluy
let MiluyAreVisible = true;
let MiluyExpandCollapseImg = document.getElementById('MiluyExpandCollapseImg');
function toggleMiluy() {
  let MiluyDiv = document.getElementById('Miluy');
  if (MiluyAreVisible) {
    MiluyDiv.style.display = 'none';
	MiluyExpandCollapseImg.src = "img/collapse.png";
  } else {
    MiluyDiv.style.display = 'block';
	MiluyExpandCollapseImg.src = "img/expand.png";
  }
  MiluyAreVisible = !MiluyAreVisible;
}
MiluyExpandCollapseImg.src = "img/expand.png"; // Initialize the image source to "img/expand.png"
// Hide-Unhide Morphs
let MorphsAreVisible = true;
let MorphsExpandCollapseImg = document.getElementById('MorphsExpandCollapseImg');
function toggleMorphs() {
  let MorphsDiv = document.getElementById('Morphs');
  if (MorphsAreVisible) {
    MorphsDiv.style.display = 'none';
	MorphsExpandCollapseImg.src = "img/collapse.png";
  } else {
    MorphsDiv.style.display = 'block';
	MorphsExpandCollapseImg.src = "img/expand.png";
  }
  MorphsAreVisible = !MorphsAreVisible;
}
MorphsExpandCollapseImg.src = "img/expand.png"; // Initialize the image source to "img/expand.png"
// Hide-Unhide Possible Divisions
let PossibleDivisionsAreVisible = true;
let PossibleDivisionsExpandCollapseImg = document.getElementById('PossibleDivisionsExpandCollapseImg');
function togglePossibleDivisions() {
  let PossibleDivisionsDiv = document.getElementById('PossibleDivisions');
  if (PossibleDivisionsAreVisible) {
    PossibleDivisionsDiv.style.display = 'none';
	PossibleDivisionsExpandCollapseImg.src = "img/collapse.png";
  } else {
    PossibleDivisionsDiv.style.display = 'block';
	PossibleDivisionsExpandCollapseImg.src = "img/expand.png";
  }
  PossibleDivisionsAreVisible = !PossibleDivisionsAreVisible;
}
PossibleDivisionsExpandCollapseImg.src = "img/expand.png"; // Initialize the image source to "img/expand.png"
// Hide-Unhide Anagram Results
let AnagramResultsAreVisible = true;
let AnagramResultsExpandCollapseImg = document.getElementById('AnagramResultsExpandCollapseImg');
function toggleAnagramResults() {
  let AnagramResultsDiv = document.getElementById('anagramResults');
  if (AnagramResultsAreVisible) {
    AnagramResultsDiv.style.display = 'none';
	AnagramResultsExpandCollapseImg.src = "img/collapse.png";
  } else {
    AnagramResultsDiv.style.display = 'block';
	AnagramResultsExpandCollapseImg.src = "img/expand.png";
  }
  AnagramResultsAreVisible = !AnagramResultsAreVisible;
}
AnagramResultsExpandCollapseImg.src = "img/expand.png"; // Initialize the image source to "img/expand.png"
// Hide-Unhide Gematria Matches
let GematriaMatchesAreVisible = true;
let GematriaMatchesExpandCollapseImg = document.getElementById('GematriaMatchesExpandCollapseImg');
function toggleGematriaMatches() {
  let GematriaMatchesDiv = document.getElementById('gematriaMatches');
  if (GematriaMatchesAreVisible) {
    GematriaMatchesDiv.style.display = 'none';
    GematriaMatchesExpandCollapseImg.src = "img/collapse.png";
  } else {
    GematriaMatchesDiv.style.display = 'block';
    GematriaMatchesExpandCollapseImg.src = "img/expand.png";
  }
  GematriaMatchesAreVisible = !GematriaMatchesAreVisible;
}
GematriaMatchesExpandCollapseImg.src = "img/expand.png"; // Initialize the image source to "img/expand.png"
</script>

<script>
function gematriaMenu(gematria) {
var gematria = document.getElementById('gemmenu').value;
  if (gematria == 'Ragil' || gematria == 'Kolel' || gematria == 'Kolel +1' || gematria == 'HaKlali'){
    var L01 = 1;var L02 = 2;var L03 = 3;var L04 = 4;var L05 = 5;var L06 = 6;var L07 = 7;var L08 = 8;var L09 = 9;var L10 = 10;var L11 = 20;var L12 = 30;var L13 = 40;var L14 = 50;var L15 = 60;var L16 = 70;var L17 = 80;var L18 = 90;var L19 = 100;var L20 = 200;var L21 = 300;var L22 = 400;var L23 = 500;var L24 = 600;var L25 = 700;var L26 = 800;var L27 = 900;
  } else if(gematria == 'Reduced' || gematria == 'IntegralReduced' || gematria == 'Katan'){
    var L01 = 1;var L02 = 2;var L03 = 3;var L04 = 4;var L05 = 5;var L06 = 6;var L07 = 7;var L08 = 8;var L09 = 9;var L10 = 1;var L11 = 2;var L12 = 3;var L13 = 4;var L14 = 5;var L15 = 6;var L16 = 7;var L17 = 8;var L18 = 9;var L19 = 1;var L20 = 2;var L21 = 3;var L22 = 4;var L23 = 5;var L24 = 6;var L25 = 7;var L26 = 8;var L27 = 9;
  } else if(gematria == 'Ordinal'){
    var L01 = 1;var L02 = 2;var L03 = 3;var L04 = 4;var L05 = 5;var L06 = 6;var L07 = 7;var L08 = 8;var L09 = 9;var L10 = 10;var L11 = 11;var L12 = 12;var L13 = 13;var L14 = 14;var L15 = 15;var L16 = 16;var L17 = 17;var L18 = 18;var L19 = 19;var L20 = 20;var L21 = 21;var L22 = 22;var L23 = 23;var L24 = 24;var L25 = 25;var L26 = 26;var L27 = 27;
  } else if(gematria == 'HaKadmi'){
    var L01 = 1;var L02 = 3;var L03 = 6;var L04 = 10;var L05 = 15;var L06 = 21;var L07 = 28;var L08 = 36;var L09 = 45;var L10 = 55;var L11 = 75;var L12 = 105;var L13 = 145;var L14 = 195;var L15 = 255;var L16 = 325;var L17 = 405;var L18 = 495;var L19 = 595;var L20 = 795;var L21 = 1095;var L22 = 1495;var L23 = 1995;var L24 = 2595;var L25 = 3295;var L26 = 4095;var L27= 4995;
  } else if(gematria == 'HaPerati'){
    var L01 = 1;var L02 = 4;var L03 = 9;var L04 = 16;var L05 = 25;var L06 = 36;var L07 = 49;var L08 = 64;var L09 = 81;var L10 = 100;var L11 = 400;var L12 = 900;var L13 = 1600;var L14 = 2500;var L15 = 3600;var L16 = 4900;var L17 = 6400;var L18 = 8100;var L19 = 10000;var L20 = 40000;var L21 = 90000;var L22 = 160000;var L23 = 250000;var L24 = 360000;var L25 = 490000;var L26 = 640000;var L27 = 810000;
  } else if(gematria == 'Miluy'){
    var L01 = 813;var L02 = 412;var L03 = 83;var L04 = 434;var L05 = 6;var L06 = 12;var L07 = 717;var L08 = 418;var L09 = 419;var L10 = 20;var L11 = 820;var L12 = 74;var L13 = 640;var L14 = 756;var L15 = 600;var L16 = 780;var L17 = 81;var L18 = 104;var L19 = 906;var L20 = 510;var L21 = 1010;var L22 = 406;var L23 = 820;var L24 = 640;var L25 = 756;var L26 = 81;var L27 = 104;
    } else{
    var L01 = 1;var L02 = 2;var L03 = 3;var L04 = 4;var L05 = 5;var L06 = 6;var L07 = 7;var L08 = 8;var L09 = 9;var L10 = 10;var L11 = 20;var L12 = 30;var L13 = 40;var L14 = 50;var L15 = 60;var L16 = 70;var L17 = 80;var L18 = 90;var L19 = 100;var L020 = 200;var L021 = 300;var L22 = 400;var L23 = 500;var L24 = 600;var L25 = 700;var L26 = 800;var L27 = 900;
  }
      document.getElementById("L01Text").innerHTML = L01;
      document.getElementById("L02Text").innerHTML = L02;
      document.getElementById("L03Text").innerHTML = L03;
      document.getElementById("L04Text").innerHTML = L04;
      document.getElementById("L05Text").innerHTML = L05;
      document.getElementById("L06Text").innerHTML = L06;
      document.getElementById("L07Text").innerHTML = L07;
      document.getElementById("L08Text").innerHTML = L08;
      document.getElementById("L09Text").innerHTML = L09;
      document.getElementById("L10Text").innerHTML = L10;
      document.getElementById("L11Text").innerHTML = L11;
      document.getElementById("L12Text").innerHTML = L12;
      document.getElementById("L13Text").innerHTML = L13;
      document.getElementById("L14Text").innerHTML = L14;
      document.getElementById("L15Text").innerHTML = L15;
      document.getElementById("L16Text").innerHTML = L16;
      document.getElementById("L17Text").innerHTML = L17;
      document.getElementById("L18Text").innerHTML = L18;
      document.getElementById("L19Text").innerHTML = L19;
      document.getElementById("L20Text").innerHTML = L20;
      document.getElementById("L21Text").innerHTML = L21;
      document.getElementById("L22Text").innerHTML = L22;
      document.getElementById("L23Text").innerHTML = L23;
      document.getElementById("L24Text").innerHTML = L24;
      document.getElementById("L25Text").innerHTML = L25;
      document.getElementById("L26Text").innerHTML = L26;
      document.getElementById("L27Text").innerHTML = L27;
	  document.getElementById("N01Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N02Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N03Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N04Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N05Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N06Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N07Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N08Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N09Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N10Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N11Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N12Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N13Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N14Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N15Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N16Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N17Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N18Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N19Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N20Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("N21Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C01Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C02Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C03Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C04Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C05Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C06Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C07Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C08Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C09Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C10Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C11Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C12Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C13Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C14Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C15Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C16Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C17Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C18Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C19Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C20Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C21Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C22Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C23Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C24Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C25Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C26Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C27Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C28Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C29Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C30Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C31Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C32Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
	  document.getElementById("C33Text").innerHTML = '<img scr="img/invis.gif" border="0" width="0" height="16">';
    }

	// Send the javascript variables to be assigned to php variables
	var data = '';
	for (var i = 1; i <= 9; i++) {
	data += 'L0' + i + '=' + encodeURIComponent(window['L0' + i]) + '&';
	}
	for (var i = 10; i <= 27; i++) {
	data += 'L' + i + '=' + encodeURIComponent(window['L' + i]) + '&';
	}
	data = data.slice(0, -1); // remove the last '&' character
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'update_variables.php', true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.send(data);
</script>

<script type="text/javascript">
function Transpose(){

// Reset variables
var alphas=array=array2=backexch=BE=cryptography2=div=FE=forexch=letter=morph=word=pictogram=word1=word2=zeros="";
var space = "  ";
var gematria1=gematria2=gematriaMiluy=gematriaAvgadBE=gematriaAvgadFE=gematriaReversed=gematriaAcronym=gematriaSofit=gematriaElision=gematriaLeap=gematriaSkip=gematriaSum=gematriaKnit=gematriaWord2=remainder1=product1=remainder2=product2=i=letterCount=letterCount2=wordCount=L01=L02=L03=L04=L05=L06=L07=L08=L09=L10=L11=L12=L13=L14=L15=L16=L17=L18=L19=L20=L21=L22=L23=L24=L25=L26=L27=0;
var RagilValue=KolelValue=Kolel1Value=HaKlaliValue=KatanValue=ReducedlValue=IntegralReducedlValue=OrdinalValue=HaKadmiValue=HaPeratiValue=MiluyValue= 0;

var wordAB=textAB=wordSaG=textSaG=wordMaH=textMaH=wordBaN=textBaN="";
var gematriaAB=gematriaSaG=gematriaMaH=gematriaBaN=0;

var AYiKBeCheR=ATBaSh=ALBaM=AChBI=AChaSBeTA=ATBaCh=ATBaCh999=AiYBaK=ATzBaPh=ALBeTh=Ofanim='';
var gematria2AYiKBeCheR=gematria2ATBaSh=gematria2ALBaM=gematria2AChBI=gematria2AChaSBeTA=gematria2ATBaCh=gematria2ATBaCh999=gematria2AiYBaK=gematria2ATzBaPh=gematria2ALBeTh=gematria2Ofanim=0;

var AltATBaSh=AltAShBaR=AltARBaK=AltAQBeTz=AltEZBePh=AltAPBE=AltAEBaS=AltASBeN=AltANBaM=AltAMBeL=AltELBaCh=AltAChBI=AltAIBeT=AltATBaCh=AltAChBaZ=AltAZBO=AltAVBaH=AltAHBaD=AltADBeG=AltAGBaB=AltABBA=AltAAhBaT=AltABBaG=AltAGBaD=AltADBaH=AltAHBeV=AltAVBeZ=AltAZBeCh=AltAChBeT=AltATBI=AltAIBech=AltAChBeL=AltELBaM=AltAMBeN=AltANBeS=AltASBA=AltAABaPh=AltAPhBaTz=AltATzBeQ=AltAKBaR=AltARBeSh=AltAShBeT=AltATBaH='';
var gematria2AltATBaSh=gematria2AltAShBaR=gematria2AltARBaK=gematria2AltAQBeTz=gematria2AltEZBePh=gematria2AltAPBE=gematria2AltAEBaS=gematria2AltASBeN=gematria2AltANBaM=gematria2AltAMBeL=gematria2AltELBaCh=gematria2AltAChBI=gematria2AltAIBeT=gematria2AltATBaCh=gematria2AltAChBaZ=gematria2AltAZBO=gematria2AltAVBaH=gematria2AltAHBaD=gematria2AltADBeG=gematria2AltAGBaB=gematria2AltABBA=gematria2AltAAhBaT=gematria2AltABBaG=gematria2AltAGBaD=gematria2AltADBaH=gematria2AltAHBeV=gematria2AltAVBeZ=gematria2AltAZBeCh=gematria2AltAChBeT=gematria2AltATBI=gematria2AltAIBech=gematria2AltAChBeL=gematria2AltELBaM=gematria2AltAMBeN=gematria2AltANBeS=gematria2AltASBA=gematria2AltAABaPh=gematria2AltAPhBaTz=gematria2AltATzBeQ=gematria2AltAKBaR=gematria2AltARBeSh=gematria2AltAShBeT=gematria2AltATBaH=0;

const userLanguage = navigator.language || navigator.userLanguage;	// Get the user's default language
const languageCode = userLanguage.split('-')[0];					// Extract the language code (e.g., "en" from "en-US")
const targetLanguage = languageCode; 								// Set the target language to the user's preferred language

var inputText = document.getElementById('inputText').value;
var inputText2 = document.getElementById('inputText2').value;
var cryptography = document.getElementById('cryptmenu').value;
var gematria = document.getElementById('gemmenu').value;
var spelling = document.getElementById('spellmenu').value;

// Count the number of words within inputText to be add to the Gematria method of Kolel+1
var inputText = document.getElementById('inputText').value;
inputText = inputText.replace(/&#x([\da-fA-F]+);/g, (match, code) => String.fromCodePoint(parseInt(code, 16)));	// Convert HTML entities to Unicode characters
var unicodeString = [...inputText].map(c => c.codePointAt(0)).map(cp => String.fromCodePoint(cp)).join("");		// Convert Unicode string to non-Unicode string
var wordCount = unicodeString.split(/[\u0020\u2000]+/).length;	// Count the number of words

// If the users only enters a word in input2 and not inputText by mistake, this will flip them.
if (!inputText.trim()) {
inputText = inputText2;
inputText2 = '';
}

// IF statement will decide which system of Gematria to use for the aleph-bet
if (gematria == 'Ragil' || gematria == 'Kolel' || gematria == 'Kolel +1' || gematria == 'HaKlali'){
    var L01 = 1;var L02 = 2;var L03 = 3;var L04 = 4;var L05 = 5;var L06 = 6;var L07 = 7;var L08 = 8;var L09 = 9;var L10 = 10;var L11 = 20;var L12 = 30;var L13 = 40;var L14 = 50;var L15 = 60;var L16 = 70;var L17 = 80;var L18 = 90;var L19 = 100;var L20 = 200;var L21 = 300;var L22 = 400;var L23 = 500;var L24 = 600;var L25 = 700;var L26 = 800;var L27 = 900;
  } else if(gematria == 'Reduced' || gematria == 'IntegralReduced' || gematria == 'Katan'){
    var L01 = 1;var L02 = 2;var L03 = 3;var L04 = 4;var L05 = 5;var L06 = 6;var L07 = 7;var L08 = 8;var L09 = 9;var L10 = 1;var L11 = 2;var L12 = 3;var L13 = 4;var L14 = 5;var L15 = 6;var L16 = 7;var L17 = 8;var L18 = 9;var L19 = 1;var L20 = 2;var L21 = 3;var L22 = 4;var L23 = 5;var L24 = 6;var L25 = 7;var L26 = 8;var L27 = 9;
  } else if(gematria == 'Ordinal'){
    var L01 = 1;var L02 = 2;var L03 = 3;var L04 = 4;var L05 = 5;var L06 = 6;var L07 = 7;var L08 = 8;var L09 = 9;var L10 = 10;var L11 = 11;var L12 = 12;var L13 = 13;var L14 = 14;var L15 = 15;var L16 = 16;var L17 = 17;var L18 = 18;var L19 = 19;var L20 = 20;var L21 = 21;var L22 = 22;var L23 = 23;var L24 = 24;var L25 = 25;var L26 = 26;var L27 = 27;
  } else if(gematria == 'HaKadmi'){
    var L01 = 1;var L02 = 3;var L03 = 6;var L04 = 10;var L05 = 15;var L06 = 21;var L07 = 28;var L08 = 36;var L09 = 45;var L10 = 55;var L11 = 75;var L12 = 105;var L13 = 145;var L14 = 195;var L15 = 255;var L16 = 325;var L17 = 405;var L18 = 495;var L19 = 595;var L20 = 795;var L21 = 1095;var L22 = 1495;var L23 = 1995;var L24 = 2595;var L25 = 3295;var L26 = 4095;var L27= 4995;
  } else if(gematria == 'HaPerati'){
    var L01 = 1;var L02 = 4;var L03 = 9;var L04 = 16;var L05 = 25;var L06 = 36;var L07 = 49;var L08 = 64;var L09 = 81;var L10 = 100;var L11 = 400;var L12 = 900;var L13 = 1600;var L14 = 2500;var L15 = 3600;var L16 = 4900;var L17 = 6400;var L18 = 8100;var L19 = 10000;var L20 = 40000;var L21 = 90000;var L22 = 160000;var L23 = 250000;var L24 = 360000;var L25 = 490000;var L26 = 640000;var L27 = 810000;
  } else if(gematria == 'Miluy'){
    var L01 = 813;var L02 = 412;var L03 = 83;var L04 = 434;var L05 = 6;var L06 = 12;var L07 = 717;var L08 = 418;var L09 = 419;var L10 = 20;var L11 = 820;var L12 = 74;var L13 = 640;var L14 = 756;var L15 = 600;var L16 = 780;var L17 = 81;var L18 = 104;var L19 = 906;var L20 = 510;var L21 = 1010;var L22 = 406;var L23 = 820;var L24 = 640;var L25 = 756;var L26 = 81;var L27 = 104;
  } else{
    var L01 = 1;var L02 = 2;var L03 = 3;var L04 = 4;var L05 = 5;var L06 = 6;var L07 = 7;var L08 = 8;var L09 = 9;var L10 = 10;var L11 = 20;var L12 = 30;var L13 = 40;var L14 = 50;var L15 = 60;var L16 = 70;var L17 = 80;var L18 = 90;var L19 = 100;var L020 = 200;var L021 = 300;var L22 = 400;var L23 = 500;var L24 = 600;var L25 = 700;var L26 = 800;var L27 = 900;
  }

// Used to calculate the values of the other non-selected Gematria systems
var ragL01=1;var ragL02=2;var ragL03=3;var ragL04=4;var ragL05=5;var ragL06=6;var ragL07=7;var ragL08=8;var ragL09=9;var ragL10=10;var ragL11=20;var ragL12=30;var ragL13=40;var ragL14=50;var ragL15=60;var ragL16=70;var ragL17=80;var ragL18=90;var ragL19=100;var ragL20=200;var ragL21=300;var ragL22=400;var ragL23=500;var ragL24=600;var ragL25=700;var ragL26=800;var ragL27=900;
var redL01=1;var redL02=2;var redL03=3;var redL04=4;var redL05=5;var redL06=6;var redL07=7;var redL08=8;var redL09=9;var redL10=1;var redL11=2;var redL12=3;var redL13=4;var redL14=5;var redL15=6;var redL16=7;var redL17=8;var redL18=9;var redL19=1;var redL20=2;var redL21=3;var redL22=4;var redL23=5;var redL24=6;var redL25=7;var redL26=8;var redL27=9;
var ordL01=1;var ordL02=2;var ordL03=3;var ordL04=4;var ordL05=5;var ordL06=6;var ordL07=7;var ordL08=8;var ordL09=9;var ordL10=10;var ordL11=11;var ordL12=12;var ordL13=13;var ordL14=14;var ordL15=15;var ordL16=16;var ordL17=17;var ordL18=18;var ordL19=19;var ordL20=20;var ordL21=21;var ordL22=22;var ordL23=23;var ordL24=24;var ordL25=25;var ordL26=26;var ordL27=27;
var hakL01=1;var hakL02=3;var hakL03=6;var hakL04=10;var hakL05=15;var hakL06=21;var hakL07=28;var hakL08=36;var hakL09=45;var hakL10=55;var hakL11=75;var hakL12=105;var hakL13=145;var hakL14=195;var hakL15=255;var hakL16=325;var hakL17=405;var hakL18=495;var hakL19=595;var hakL20=795;var hakL21=1095;var hakL22=1495;var hakL23=1995;var hakL24=2595;var hakL25=3295;var hakL26=4095;var hakL27=4995;
var hapL01=1;var hapL02=4;var hapL03=9;var hapL04=16;var hapL05=25;var hapL06=36;var hapL07=49;var hapL08=64;var hapL09=81;var hapL10=100;var hapL11=400;var hapL12=900;var hapL13=1600;var hapL14=2500;var hapL15=3600;var hapL16=4900;var hapL17=6400;var hapL18=8100;var hapL19=10000;var hapL20=40000;var hapL21=9000;var hapL22=160000;var hapL23=250000;var hapL24=360000;var hapL25=490000;var hapL26=640000;var hapL27=810000;
var milL01=813;var milL02=412;var milL03=83;var milL04=434;var milL05=6;var milL06=12;var milL07=717;var milL08=418;var milL09=419;var milL10=20;var milL11=820;var milL12=74;var milL13=640;var milL14=756;var milL15=600;var milL16=780;var milL17=81;var milL18=104;var milL19=906;var milL20=510;var milL21=1010;var milL22=406;var milL23=820;var milL24=640;var milL25=756;var milL26=81;var milL27=104;

// Remove EVERYTHING but Hebrew, Greek, and Digits or Numbers
inputText = inputText.replace(/[^\w\u05D0-\u05EA\u037B-\u03FF\d]/g, '');  // English letters \u0041-\u007A, Greek letters \u037B-\u03FF, Hebrew letters \u05D0-\u05EA
inputText2 = inputText2.replace(/[^\w\u05D0-\u05EA\u037B-\u03FF\d]/g, '');  // English letters \u0041-\u007A, Greek letters \u037B-\u03FF, Hebrew letters \u05D0-\u05EA

// Interweave between the 2 words to knit them into one
var word1 = inputText;
var word2 = inputText2;
var knit = "";
var start = 0;
var end = 1;

if (word1.length < word2.length){ // Word1 will have a greater or equal number of characters in it so start with word1
word1 = inputText2;
word2 = inputText;
}
var letterCount = word1.length;
var letterCount2 = word2.length;

for (start = 0; start < letterCount; start++) { 
knit += word1.substring(start,end);
knit += word2.substring(start,end);
end++;
}
document.getElementById("knit").innerHTML = "<a href='http://translate.google.com/#auto/en/"+knit+"' target='_blank'><b>" + knit + "</b></a><br />";

// inputText will be split up by character or letter
var array = inputText.split("");
var array2 = inputText2.split("");

// English Gematria & Numerials
for (var i=0; i < inputText.length; i++){
	switch(array[i]){
	case "a":gematria1 += 1;	break;
	case "A":gematria1 += 1;	break;
	case "1":gematria1 += 1;	break;
	case "b":gematria1 += 2;	break;
	case "B":gematria1 += 2;	break;
	case "2":gematria1 += 2;	break;
	case "c":gematria1 += 3;	break;
	case "C":gematria1 += 3;	break;
	case "3":gematria1 += 3;	break;
	case "d":gematria1 += 4;	break;
	case "D":gematria1 += 4;	break;
	case "4":gematria1 += 4;	break;
	case "e":gematria1 += 5;	break;
	case "E":gematria1 += 5;	break;
	case "5":gematria1 += 5;	break;
	case "f":gematria1 += 6;	break;
	case "F":gematria1 += 6;	break;
	case "6":gematria1 += 6;	break;
	case "g":gematria1 += 7;	break;
	case "G":gematria1 += 7;	break;
	case "7":gematria1 += 7;	break;
	case "h":gematria1 += 8;	break;
	case "H":gematria1 += 8;	break;
	case "8":gematria1 += 8;	break;
	case "i":gematria1 += 9;	break;
	case "I":gematria1 += 9;	break;
	case "9":gematria1 += 9;	break;
	case "j":gematria1 += 10;	break;
	case "J":gematria1 += 10;	break;
	case "k":gematria1 += 11;	break;
	case "K":gematria1 += 11;	break;
	case "l":gematria1 += 12;	break;
	case "L":gematria1 += 12;	break;
	case "m":gematria1 += 13;	break;
	case "M":gematria1 += 13;	break;
	case "n":gematria1 += 14;	break;
	case "N":gematria1 += 14;	break;
	case "o":gematria1 += 15;	break;
	case "O":gematria1 += 15;	break;
	case "p":gematria1 += 16;	break;
	case "P":gematria1 += 16;	break;
	case "q":gematria1 += 17;	break;
	case "Q":gematria1 += 17;	break;
	case "r":gematria1 += 18;	break;
	case "R":gematria1 += 18;	break;
	case "s":gematria1 += 19;	break;
	case "S":gematria1 += 19;	break;
	case "t":gematria1 += 20;	break;
	case "T":gematria1 += 20;	break;
	case "u":gematria1 += 21;	break;
	case "U":gematria1 += 21;	break;
	case "v":gematria1 += 22;	break;
	case "V":gematria1 += 22;	break;
	case "w":gematria1 += 23;	break;
	case "W":gematria1 += 23;	break;
	case "x":gematria1 += 24;	break;
	case "X":gematria1 += 24;	break;
	case "y":gematria1 += 25;	break;
	case "Y":gematria1 += 25;	break;
	case "z":gematria1 += 26;	break;
	case "Z":gematria1 += 26;	break;
	case "0":gematria1 += 0;	break;
	default: letter = "";		break;
	}
}

// Greek Isopsephy
for (var i=0; i < inputText.length; i++){
		switch(array[i]){
						case "\u0386":	gematria1 += 1;		break;	// alpha		Ά
						case "\u0391":	gematria1 += 1;		break;	// alpha		Α
						case "\u03AC":	gematria1 += 1;		break;	// alpha		ά
						case "\u03B1":	gematria1 += 1;		break;	// alpha		α
						case "\u1D6A8":	gematria1 += 1;		break;	// alpha		𝚨
						case "\u1D6C2":	gematria1 += 1;		break;	// alpha		𝛂
						case "\u1D6E2":	gematria1 += 1;		break;	// alpha		𝛢
						case "\u1D6FC":	gematria1 += 1;		break;	// alpha		𝛼
						case "\u1D71C":	gematria1 += 1;		break;	// alpha		𝜜
						case "\u1D736":	gematria1 += 1;		break;	// alpha		𝜶
						case "\u1D756":	gematria1 += 1;		break;	// alpha		𝝖
						case "\u1D770":	gematria1 += 1;		break;	// alpha		𝝰
						case "\u1D790":	gematria1 += 1;		break;	// alpha		𝞐
						case "\u1D7AA":	gematria1 += 1;		break;	// alpha		𝞪
						case "\u1F00":	gematria1 += 1;		break;	// alpha		ἀ
						case "\u1F01":	gematria1 += 1;		break;	// alpha		ἁ
						case "\u1F02":	gematria1 += 1;		break;	// alpha		ἂ
						case "\u1F03":	gematria1 += 1;		break;	// alpha		ἃ
						case "\u1F04":	gematria1 += 1;		break;	// alpha		ἄ
						case "\u1F05":	gematria1 += 1;		break;	// alpha		ἅ
						case "\u1F06":	gematria1 += 1;		break;	// alpha		ἆ
						case "\u1F07":	gematria1 += 1;		break;	// alpha		ἇ
						case "\u1F08":	gematria1 += 1;		break;	// alpha		Ἀ
						case "\u1F09":	gematria1 += 1;		break;	// alpha		Ἁ
						case "\u1F0A":	gematria1 += 1;		break;	// alpha		Ἂ
						case "\u1F0B":	gematria1 += 1;		break;	// alpha		Ἃ
						case "\u1F0C":	gematria1 += 1;		break;	// alpha		Ἄ
						case "\u1F0D":	gematria1 += 1;		break;	// alpha		Ἅ
						case "\u1F0E":	gematria1 += 1;		break;	// alpha		Ἆ
						case "\u1F0F":	gematria1 += 1;		break;	// alpha		Ἇ
						case "\u1F70":	gematria1 += 1;		break;	// alpha		ὰ
						case "\u1F71":	gematria1 += 1;		break;	// alpha		ά
						case "\u1F80":	gematria1 += 1;		break;	// alpha		ᾀ
						case "\u1F81":	gematria1 += 1;		break;	// alpha		ᾁ
						case "\u1F82":	gematria1 += 1;		break;	// alpha		ᾂ
						case "\u1F83":	gematria1 += 1;		break;	// alpha		ᾃ
						case "\u1F84":	gematria1 += 1;		break;	// alpha		ᾄ
						case "\u1F85":	gematria1 += 1;		break;	// alpha		ᾅ
						case "\u1F86":	gematria1 += 1;		break;	// alpha		ᾆ
						case "\u1F87":	gematria1 += 1;		break;	// alpha		ᾇ
						case "\u1F88":	gematria1 += 1;		break;	// alpha		ᾈ
						case "\u1F89":	gematria1 += 1;		break;	// alpha		ᾉ
						case "\u1F8A":	gematria1 += 1;		break;	// alpha		ᾊ
						case "\u1F8B":	gematria1 += 1;		break;	// alpha		ᾋ
						case "\u1F8C":	gematria1 += 1;		break;	// alpha		ᾌ
						case "\u1F8D":	gematria1 += 1;		break;	// alpha		ᾍ
						case "\u1F8E":	gematria1 += 1;		break;	// alpha		ᾎ
						case "\u1F8F":	gematria1 += 1;		break;	// alpha		ᾏ
						case "\u1FB0":	gematria1 += 1;		break;	// alpha		ᾰ
						case "\u1FB1":	gematria1 += 1;		break;	// alpha		ᾱ
						case "\u1FB2":	gematria1 += 1;		break;	// alpha		ᾲ
						case "\u1FB3":	gematria1 += 1;		break;	// alpha		ᾳ
						case "\u1FB4":	gematria1 += 1;		break;	// alpha		ᾴ
						case "\u1FB6":	gematria1 += 1;		break;	// alpha		ᾶ
						case "\u1FB7":	gematria1 += 1;		break;	// alpha		ᾷ
						case "\u1FB8":	gematria1 += 1;		break;	// alpha		Ᾰ
						case "\u1FB9":	gematria1 += 1;		break;	// alpha		Ᾱ
						case "\u1FBA":	gematria1 += 1;		break;	// alpha		Ὰ
						case "\u1FBB":	gematria1 += 1;		break;	// alpha		Ά
						case "\u1FBC":	gematria1 += 1;		break;	// alpha		ᾼ
						case "\u0392":	gematria1 += 2;		break;	// beta			Β
						case "\u03B2":	gematria1 += 2;		break;	// beta			β
						case "\u03D0":	gematria1 += 2;		break;	// beta			ϐ
						case "\u1D5D":	gematria1 += 2;		break;	// beta			ᵝ
						case "\u1D66":	gematria1 += 2;		break;	// beta			ᵦ
						case "\u1D6A9":	gematria1 += 2;		break;	// beta			𝚩
						case "\u1D6C3":	gematria1 += 2;		break;	// beta			𝛃
						case "\u1D6E3":	gematria1 += 2;		break;	// beta			𝛣
						case "\u1D6FD":	gematria1 += 2;		break;	// beta			𝛽
						case "\u1D71D":	gematria1 += 2;		break;	// beta			𝜝
						case "\u1D737":	gematria1 += 2;		break;	// beta			𝜷
						case "\u1D757":	gematria1 += 2;		break;	// beta			𝝗
						case "\u1D771":	gematria1 += 2;		break;	// beta			𝝱
						case "\u1D791":	gematria1 += 2;		break;	// beta			𝞑
						case "\u1D7AB":	gematria1 += 2;		break;	// beta			𝞫
						case "\u0393":	gematria1 += 3;		break;	// gamma		Γ
						case "\u03B3":	gematria1 += 3;		break;	// gamma		γ
						case "\u213D":	gematria1 += 3;		break;	// gamma		ℽ
						case "\u213E":	gematria1 += 3;		break;	// gamma		ℾ
						case "\u1D26":	gematria1 += 3;		break;	// gamma		ᴦ
						case "\u1D5E":	gematria1 += 3;		break;	// gamma		ᵞ
						case "\u1D67":	gematria1 += 3;		break;	// gamma		ᵧ
						case "\u1D6AA":	gematria1 += 3;		break;	// gamma		𝚪
						case "\u1D6C4":	gematria1 += 3;		break;	// gamma		𝛄
						case "\u1D6E4":	gematria1 += 3;		break;	// gamma		𝛤
						case "\u1D6FE":	gematria1 += 3;		break;	// gamma		𝛾
						case "\u1D71E":	gematria1 += 3;		break;	// gamma		𝜞
						case "\u1D738":	gematria1 += 3;		break;	// gamma		𝜸
						case "\u1D758":	gematria1 += 3;		break;	// gamma		𝝘
						case "\u1D772":	gematria1 += 3;		break;	// gamma		𝝲
						case "\u1D792":	gematria1 += 3;		break;	// gamma		𝞒
						case "\u1D7AC":	gematria1 += 3;		break;	// gamma		𝞬
						case "\u0394":	gematria1 += 4;		break;	// delta		Δ
						case "\u03B4":	gematria1 += 4;		break;	// delta		δ
						case "\u1D5F":	gematria1 += 4;		break;	// delta		ᵟ
						case "\u1D6AB":	gematria1 += 4;		break;	// delta		𝚫
						case "\u1D6C5":	gematria1 += 4;		break;	// delta		𝛅
						case "\u1D6E5":	gematria1 += 4;		break;	// delta		𝛥
						case "\u1D6FF":	gematria1 += 4;		break;	// delta		𝛿
						case "\u1D71F":	gematria1 += 4;		break;	// delta		𝜟
						case "\u1D739":	gematria1 += 4;		break;	// delta		𝜹
						case "\u1D759":	gematria1 += 4;		break;	// delta		𝝙
						case "\u1D773":	gematria1 += 4;		break;	// delta		𝝳
						case "\u1D793":	gematria1 += 4;		break;	// delta		𝞓
						case "\u1D7AD":	gematria1 += 4;		break;	// delta		𝞭
						case "\u03AD":	gematria1 += 5;		break;	// epsilon		έ
						case "\u03B5":	gematria1 += 5;		break;	// epsilon		ε
						case "\u03F5":	gematria1 += 5;		break;	// epsilon		ϵ
						case "\u0395":	gematria1 += 5;		break;	// epsilon		Ε
						case "\u0388":	gematria1 += 5;		break;	// epsilon		Έ
						case "\u1D6AC":	gematria1 += 5;		break;	// epsilon		𝚬
						case "\u1D6C6":	gematria1 += 5;		break;	// epsilon		𝛆
						case "\u1D6DC":	gematria1 += 5;		break;	// epsilon		𝛜
						case "\u1D6E6":	gematria1 += 5;		break;	// epsilon		𝛦
						case "\u1D700":	gematria1 += 5;		break;	// epsilon		𝜀
						case "\u1D716":	gematria1 += 5;		break;	// epsilon		𝜖
						case "\u1D720":	gematria1 += 5;		break;	// epsilon		𝜠
						case "\u1D73A":	gematria1 += 5;		break;	// epsilon		𝜺
						case "\u1D750":	gematria1 += 5;		break;	// epsilon		𝝐
						case "\u1D75A":	gematria1 += 5;		break;	// epsilon		𝝚
						case "\u1D774":	gematria1 += 5;		break;	// epsilon		𝝴
						case "\u1D78A":	gematria1 += 5;		break;	// epsilon		𝞊
						case "\u1D794":	gematria1 += 5;		break;	// epsilon		𝞔
						case "\u1D7AE":	gematria1 += 5;		break;	// epsilon		𝞮
						case "\u1D7C4":	gematria1 += 5;		break;	// epsilon		𝟄
						case "\u1F10":	gematria1 += 5;		break;	// epsilon		ἐ
						case "\u1F11":	gematria1 += 5;		break;	// epsilon		ἑ
						case "\u1F12":	gematria1 += 5;		break;	// epsilon		ἒ
						case "\u1F13":	gematria1 += 5;		break;	// epsilon		ἓ
						case "\u1F14":	gematria1 += 5;		break;	// epsilon		ἔ
						case "\u1F15":	gematria1 += 5;		break;	// epsilon		ἕ
						case "\u1F18":	gematria1 += 5;		break;	// epsilon		Ἐ
						case "\u1F19":	gematria1 += 5;		break;	// epsilon		Ἑ
						case "\u1F1A":	gematria1 += 5;		break;	// epsilon		Ἒ
						case "\u1F1B":	gematria1 += 5;		break;	// epsilon		Ἓ
						case "\u1F1C":	gematria1 += 5;		break;	// epsilon		Ἔ
						case "\u1F1D":	gematria1 += 5;		break;	// epsilon		Ἕ
						case "\u1F72":	gematria1 += 5;		break;	// epsilon		ὲ
						case "\u1F73":	gematria1 += 5;		break;	// epsilon		έ
						case "\u1FC8":	gematria1 += 5;		break;	// epsilon		Ὲ
						case "\u1FC9":	gematria1 += 5;		break;	// epsilon		Έ
						case "\u03DA":	gematria1 += 6;		break;	// stigma		Ϛ
						case "\u03DB":	gematria1 += 6;		break;	// stigma		ϛ
						case "\u03DC":	gematria1 += 6;		break;	// stigma		Ϝ
						case "\u03DD":	gematria1 += 6;		break;	// stigma		ϝ
						case "\u1D7CA":	gematria1 += 6;		break;	// stigma		𝟊
						case "\u1D7CB":	gematria1 += 6;		break;	// stigma		𝟋
						case "\u0376":	gematria1 += 6;		break;	// digamma		Ͷ
						case "\u0377":	gematria1 += 6;		break;	// digamma		ͷ
						case "\u0396":	gematria1 += 7;		break;	// zeta			Ζ
						case "\u03B6":	gematria1 += 7;		break;	// zeta			ζ
						case "\u1D6AD":	gematria1 += 7;		break;	// zeta			𝚭
						case "\u1D6C7":	gematria1 += 7;		break;	// zeta			𝛇
						case "\u1D6E7":	gematria1 += 7;		break;	// zeta			𝛧
						case "\u1D701":	gematria1 += 7;		break;	// zeta			𝜁
						case "\u1D721":	gematria1 += 7;		break;	// zeta			𝜡
						case "\u1D73B":	gematria1 += 7;		break;	// zeta			𝜻
						case "\u1D75B":	gematria1 += 7;		break;	// zeta			𝝛
						case "\u1D775":	gematria1 += 7;		break;	// zeta			𝝵
						case "\u1D795":	gematria1 += 7;		break;	// zeta			𝞕
						case "\u1D7AF":	gematria1 += 7;		break;	// zeta			𝞯
						case "\u03AE":	gematria1 += 8;		break;	// heta			ή
						case "\u0370":	gematria1 += 8;		break;	// heta			Ͱ
						case "\u0371":	gematria1 += 8;		break;	// heta			ͱ
						case "\u0389":	gematria1 += 8;		break;	// heta			Ή
						case "\u0397":	gematria1 += 8;		break;	// heta			Η
						case "\u03B7":	gematria1 += 8;		break;	// heta			η
						case "\u1D6AE":	gematria1 += 8;		break;	// heta			𝚮
						case "\u1D6C8":	gematria1 += 8;		break;	// heta			𝛈
						case "\u1D6E8":	gematria1 += 8;		break;	// heta			𝛨
						case "\u1D702":	gematria1 += 8;		break;	// heta			𝜂
						case "\u1D722":	gematria1 += 8;		break;	// heta			𝜢
						case "\u1D73C":	gematria1 += 8;		break;	// heta			𝜼
						case "\u1D75C":	gematria1 += 8;		break;	// heta			𝝜
						case "\u1D776":	gematria1 += 8;		break;	// heta			𝝶
						case "\u1D796":	gematria1 += 8;		break;	// heta			𝞖
						case "\u1D7B0":	gematria1 += 8;		break;	// heta			𝞰
						case "\u1F20":	gematria1 += 8;		break;	// heta			ἠ
						case "\u1F21":	gematria1 += 8;		break;	// heta			ἡ
						case "\u1F22":	gematria1 += 8;		break;	// heta			ἢ
						case "\u1F23":	gematria1 += 8;		break;	// heta			ἣ
						case "\u1F24":	gematria1 += 8;		break;	// heta			ἤ
						case "\u1F25":	gematria1 += 8;		break;	// heta			ἥ
						case "\u1F26":	gematria1 += 8;		break;	// heta			ἦ
						case "\u1F27":	gematria1 += 8;		break;	// heta			ἧ
						case "\u1F28":	gematria1 += 8;		break;	// heta			Ἠ
						case "\u1F29":	gematria1 += 8;		break;	// heta			Ἡ
						case "\u1F2A":	gematria1 += 8;		break;	// heta			Ἢ
						case "\u1F2B":	gematria1 += 8;		break;	// heta			Ἣ
						case "\u1F2C":	gematria1 += 8;		break;	// heta			Ἤ
						case "\u1F2D":	gematria1 += 8;		break;	// heta			Ἥ
						case "\u1F2E":	gematria1 += 8;		break;	// heta			Ἦ
						case "\u1F2F":	gematria1 += 8;		break;	// heta			Ἧ
						case "\u1F74":	gematria1 += 8;		break;	// heta			ὴ
						case "\u1F75":	gematria1 += 8;		break;	// heta			ή
						case "\u1F90":	gematria1 += 8;		break;	// heta			ᾐ
						case "\u1F91":	gematria1 += 8;		break;	// heta			ᾑ
						case "\u1F92":	gematria1 += 8;		break;	// heta			ᾒ
						case "\u1F93":	gematria1 += 8;		break;	// heta			ᾓ
						case "\u1F94":	gematria1 += 8;		break;	// heta			ᾔ
						case "\u1F95":	gematria1 += 8;		break;	// heta			ᾕ
						case "\u1F96":	gematria1 += 8;		break;	// heta			ᾖ
						case "\u1F97":	gematria1 += 8;		break;	// heta			ᾗ
						case "\u1F98":	gematria1 += 8;		break;	// heta			ᾘ
						case "\u1F99":	gematria1 += 8;		break;	// heta			ᾙ
						case "\u1F9A":	gematria1 += 8;		break;	// heta			ᾚ
						case "\u1F9B":	gematria1 += 8;		break;	// heta			ᾛ
						case "\u1F9C":	gematria1 += 8;		break;	// heta			ᾜ
						case "\u1F9D":	gematria1 += 8;		break;	// heta			ᾝ
						case "\u1F9E":	gematria1 += 8;		break;	// heta			ᾞ
						case "\u1F9F":	gematria1 += 8;		break;	// heta			ᾟ
						case "\u1FC2":	gematria1 += 8;		break;	// heta			ῂ
						case "\u1FC3":	gematria1 += 8;		break;	// heta			ῃ
						case "\u1FC4":	gematria1 += 8;		break;	// heta			ῄ
						case "\u1FC6":	gematria1 += 8;		break;	// heta			ῆ
						case "\u1FC7":	gematria1 += 8;		break;	// heta			ῇ
						case "\u1FCA":	gematria1 += 8;		break;	// heta			Ὴ
						case "\u1FCB":	gematria1 += 8;		break;	// heta			Ή
						case "\u1FCC":	gematria1 += 8;		break;	// heta			ῌ
						case "\u0398":	gematria1 += 9;		break;	// theta		Θ
						case "\u03B8":	gematria1 += 9;		break;	// theta		θ
						case "\u03D1":	gematria1 += 9;		break;	// theta		ϑ
						case "\u03F4":	gematria1 += 9;		break;	// theta		ϴ
						case "\u1D6AF":	gematria1 += 9;		break;	// theta		𝚯
						case "\u1D6B9":	gematria1 += 9;		break;	// theta		𝚹
						case "\u1D6C9":	gematria1 += 9;		break;	// theta		𝛉
						case "\u1D6DD":	gematria1 += 9;		break;	// theta		𝛝
						case "\u1D6E9":	gematria1 += 9;		break;	// theta		𝛩
						case "\u1D6F3":	gematria1 += 9;		break;	// theta		𝛳
						case "\u1D703":	gematria1 += 9;		break;	// theta		𝜃
						case "\u1D717":	gematria1 += 9;		break;	// theta		𝜗
						case "\u1D723":	gematria1 += 9;		break;	// theta		𝜣
						case "\u1D72D":	gematria1 += 9;		break;	// theta		𝜭
						case "\u1D73D":	gematria1 += 9;		break;	// theta		𝜽
						case "\u1D751":	gematria1 += 9;		break;	// theta		𝝑
						case "\u1D75D":	gematria1 += 9;		break;	// theta		𝝝
						case "\u1D767":	gematria1 += 9;		break;	// theta		𝝧
						case "\u1D777":	gematria1 += 9;		break;	// theta		𝝷
						case "\u1D78B":	gematria1 += 9;		break;	// theta		𝞋
						case "\u1D797":	gematria1 += 9;		break;	// theta		𝞗
						case "\u1D7A1":	gematria1 += 9;		break;	// theta		𝞡
						case "\u1D7B1":	gematria1 += 9;		break;	// theta		𝞱
						case "\u1D7C5":	gematria1 += 9;		break;	// theta		𝟅
						case "\u1DBF":	gematria1 += 9;		break;	// theta		ᶿ
						case "\u037A":	gematria1 += 10;	break;	// iota			ͺ
						case "\u038A":	gematria1 += 10;	break;	// iota			Ί
						case "\u0390":	gematria1 += 10;	break;	// iota			ΐ
						case "\u0399":	gematria1 += 10;	break;	// iota			Ι
						case "\u03AA":	gematria1 += 10;	break;	// iota			Ϊ
						case "\u03AF":	gematria1 += 10;	break;	// iota			ί
						case "\u03B9":	gematria1 += 10;	break;	// iota			ι
						case "\u03CA":	gematria1 += 10;	break;	// iota			ϊ
						case "\u1D6B0":	gematria1 += 10;	break;	// iota			𝚰
						case "\u1D6CA":	gematria1 += 10;	break;	// iota			𝛊
						case "\u1D6EA":	gematria1 += 10;	break;	// iota			𝛪
						case "\u1D704":	gematria1 += 10;	break;	// iota			𝜄
						case "\u1D724":	gematria1 += 10;	break;	// iota			𝜤
						case "\u1D73E":	gematria1 += 10;	break;	// iota			𝜾
						case "\u1D75E":	gematria1 += 10;	break;	// iota			𝝞
						case "\u1D778":	gematria1 += 10;	break;	// iota			𝝸
						case "\u1D798":	gematria1 += 10;	break;	// iota			𝞘
						case "\u1D7B2":	gematria1 += 10;	break;	// iota			𝞲
						case "\u1F30":	gematria1 += 10;	break;	// iota			ἰ
						case "\u1F31":	gematria1 += 10;	break;	// iota			ἱ
						case "\u1F32":	gematria1 += 10;	break;	// iota			ἲ
						case "\u1F33":	gematria1 += 10;	break;	// iota			ἳ
						case "\u1F34":	gematria1 += 10;	break;	// iota			ἴ
						case "\u1F35":	gematria1 += 10;	break;	// iota			ἵ
						case "\u1F36":	gematria1 += 10;	break;	// iota			ἶ
						case "\u1F37":	gematria1 += 10;	break;	// iota			ἷ
						case "\u1F38":	gematria1 += 10;	break;	// iota			Ἰ
						case "\u1F39":	gematria1 += 10;	break;	// iota			Ἱ
						case "\u1F3A":	gematria1 += 10;	break;	// iota			Ἲ
						case "\u1F3B":	gematria1 += 10;	break;	// iota			Ἳ
						case "\u1F3C":	gematria1 += 10;	break;	// iota			Ἴ
						case "\u1F3D":	gematria1 += 10;	break;	// iota			Ἵ
						case "\u1F3E":	gematria1 += 10;	break;	// iota			Ἶ
						case "\u1F3F":	gematria1 += 10;	break;	// iota			Ἷ
						case "\u1F76":	gematria1 += 10;	break;	// iota			ὶ
						case "\u1F77":	gematria1 += 10;	break;	// iota			ί
						case "\u1FBE":	gematria1 += 10;	break;	// iota			ι
						case "\u1FD0":	gematria1 += 10;	break;	// iota			ῐ
						case "\u1FD1":	gematria1 += 10;	break;	// iota			ῑ
						case "\u1FD2":	gematria1 += 10;	break;	// iota			ῒ
						case "\u1FD3":	gematria1 += 10;	break;	// iota			ΐ
						case "\u1FD6":	gematria1 += 10;	break;	// iota			ῖ
						case "\u1FD7":	gematria1 += 10;	break;	// iota			ῗ
						case "\u1FD8":	gematria1 += 10;	break;	// iota			Ῐ
						case "\u1FD9":	gematria1 += 10;	break;	// iota			Ῑ
						case "\u1FDA":	gematria1 += 10;	break;	// iota			Ὶ
						case "\u1FDB":	gematria1 += 10;	break;	// iota			Ί
						case "\u037F":	gematria1 += 10;	break;	// yot			Ϳ
						case "\u03F3":	gematria1 += 10;	break;	// yot			ϳ
						case "\u039A":	gematria1 += 200;	break;	// kappa		Κ
						case "\u03BA":	gematria1 += 200;	break;	// kappa		κ
						case "\u03CF":	gematria1 += 200;	break;	// kappa		Ϗ
						case "\u03D7":	gematria1 += 200;	break;	// kappa		ϗ
						case "\u03F0":	gematria1 += 200;	break;	// kappa		ϰ
						case "\u1D6B1":	gematria1 += 200;	break;	// kappa		𝚱
						case "\u1D6CB":	gematria1 += 200;	break;	// kappa		𝛋
						case "\u1D6DE":	gematria1 += 200;	break;	// kappa		𝛞
						case "\u1D6EB":	gematria1 += 200;	break;	// kappa		𝛫
						case "\u1D705":	gematria1 += 200;	break;	// kappa		𝜅
						case "\u1D718":	gematria1 += 200;	break;	// kappa		𝜘
						case "\u1D725":	gematria1 += 200;	break;	// kappa		𝜥
						case "\u1D73F":	gematria1 += 200;	break;	// kappa		𝜿
						case "\u1D752":	gematria1 += 200;	break;	// kappa		𝝒
						case "\u1D75F":	gematria1 += 200;	break;	// kappa		𝝟
						case "\u1D779":	gematria1 += 200;	break;	// kappa		𝝹
						case "\u1D78C":	gematria1 += 200;	break;	// kappa		𝞌
						case "\u1D799":	gematria1 += 200;	break;	// kappa		𝞙
						case "\u1D7B3":	gematria1 += 200;	break;	// kappa		𝞳
						case "\u1D7C6":	gematria1 += 200;	break;	// kappa		𝟆
						case "\u039B":	gematria1 += 30;	break;	// lambda		Λ
						case "\u03BB":	gematria1 += 30;	break;	// lambda		λ
						case "\u1D27":	gematria1 += 30;	break;	// lambda		ᴧ
						case "\u1D6B2":	gematria1 += 30;	break;	// lambda		𝚲
						case "\u1D6CC":	gematria1 += 30;	break;	// lambda		𝛌
						case "\u1D6EC":	gematria1 += 30;	break;	// lambda		𝛬
						case "\u1D706":	gematria1 += 30;	break;	// lambda		𝜆
						case "\u1D726":	gematria1 += 30;	break;	// lambda		𝜦
						case "\u1D740":	gematria1 += 30;	break;	// lambda		𝝀
						case "\u1D760":	gematria1 += 30;	break;	// lambda		𝝠
						case "\u1D77A":	gematria1 += 30;	break;	// lambda		𝝺
						case "\u1D79A":	gematria1 += 30;	break;	// lambda		𝞚
						case "\u1D7B4":	gematria1 += 30;	break;	// lambda		𝞴
						case "\u00B5":	gematria1 += 40;	break;	// mu			µ
						case "\u039C":	gematria1 += 40;	break;	// mu			Μ
						case "\u03BC":	gematria1 += 40;	break;	// mu			μ
						case "\u3382":	gematria1 += 40;	break;	// mu			㎂
						case "\u338C":	gematria1 += 40;	break;	// mu			㎌
						case "\u338D":	gematria1 += 40;	break;	// mu			㎍
						case "\u3395":	gematria1 += 40;	break;	// mu			㎕
						case "\u339B":	gematria1 += 40;	break;	// mu			㎛
						case "\u33B2":	gematria1 += 40;	break;	// mu			㎲
						case "\u33B6":	gematria1 += 40;	break;	// mu			㎶
						case "\u33BC":	gematria1 += 40;	break;	// mu			㎼
						case "\u1D6B3":	gematria1 += 40;	break;	// mu			𝚳
						case "\u1D6CD":	gematria1 += 40;	break;	// mu			𝛍
						case "\u1D6ED":	gematria1 += 40;	break;	// mu			𝛭
						case "\u1D707":	gematria1 += 40;	break;	// mu			𝜇
						case "\u1D727":	gematria1 += 40;	break;	// mu			𝜧
						case "\u1D741":	gematria1 += 40;	break;	// mu			𝝁
						case "\u1D761":	gematria1 += 40;	break;	// mu			𝝡
						case "\u1D77B":	gematria1 += 40;	break;	// mu			𝝻
						case "\u1D7B5":	gematria1 += 40;	break;	// mu			𝞵
						case "\u039D":	gematria1 += 50;	break;	// nu			Ν
						case "\u03BD":	gematria1 += 50;	break;	// nu			ν
						case "\u1D6B4":	gematria1 += 50;	break;	// nu			𝚴
						case "\u1D6CE":	gematria1 += 50;	break;	// nu			𝛎
						case "\u1D6EE":	gematria1 += 50;	break;	// nu			𝛮
						case "\u1D708":	gematria1 += 50;	break;	// nu			𝜈
						case "\u1D728":	gematria1 += 50;	break;	// nu			𝜨
						case "\u1D742":	gematria1 += 50;	break;	// nu			𝝂
						case "\u1D762":	gematria1 += 50;	break;	// nu			𝝢
						case "\u1D77C":	gematria1 += 50;	break;	// nu			𝝼
						case "\u1D79C":	gematria1 += 50;	break;	// nu			𝞜
						case "\u1D7B6":	gematria1 += 50;	break;	// nu			𝞶
						case "\u039E":	gematria1 += 60;	break;	// xi			Ξ
						case "\u03BE":	gematria1 += 60;	break;	// xi			ξ
						case "\u1D6B5":	gematria1 += 60;	break;	// xi			𝚵
						case "\u1D6CF":	gematria1 += 60;	break;	// xi			𝛏
						case "\u1D6EF":	gematria1 += 60;	break;	// xi			𝛯
						case "\u1D709":	gematria1 += 60;	break;	// xi			𝜉
						case "\u1D729":	gematria1 += 60;	break;	// xi			𝜩
						case "\u1D743":	gematria1 += 60;	break;	// xi			𝝃
						case "\u1D763":	gematria1 += 60;	break;	// xi			𝝣
						case "\u1D77D":	gematria1 += 60;	break;	// xi			𝝽
						case "\u1D79D":	gematria1 += 60;	break;	// xi			𝞝
						case "\u1D7B6":	gematria1 += 60;	break;	// xi			𝞶
						case "\u038C":	gematria1 += 70;	break;	// omicron		Ό
						case "\u039F":	gematria1 += 70;	break;	// omicron		Ο
						case "\u03CC":	gematria1 += 70;	break;	// omicron		ό
						case "\u03BF":	gematria1 += 70;	break;	// omicron		ο
						case "\u1D6B6":	gematria1 += 70;	break;	// omicron		𝚶
						case "\u1D6D0":	gematria1 += 70;	break;	// omicron		𝛐
						case "\u1D6F0":	gematria1 += 70;	break;	// omicron		𝛰
						case "\u1D70A":	gematria1 += 70;	break;	// omicron		𝜊
						case "\u1D72A":	gematria1 += 70;	break;	// omicron		𝜪
						case "\u1D744":	gematria1 += 70;	break;	// omicron		𝝄
						case "\u1D764":	gematria1 += 70;	break;	// omicron		𝝤
						case "\u1D77E":	gematria1 += 70;	break;	// omicron		𝝾
						case "\u1D79E":	gematria1 += 70;	break;	// omicron		𝞞
						case "\u1D7B8":	gematria1 += 70;	break;	// omicron		𝞸
						case "\u1F40":	gematria1 += 70;	break;	// omicron		ὀ
						case "\u1F41":	gematria1 += 70;	break;	// omicron		ὁ
						case "\u1F42":	gematria1 += 70;	break;	// omicron		ὂ
						case "\u1F43":	gematria1 += 70;	break;	// omicron		ὃ
						case "\u1F44":	gematria1 += 70;	break;	// omicron		ὄ
						case "\u1F45":	gematria1 += 70;	break;	// omicron		ὅ
						case "\u1F48":	gematria1 += 70;	break;	// omicron		Ὀ
						case "\u1F49":	gematria1 += 70;	break;	// omicron		Ὁ
						case "\u1F4A":	gematria1 += 70;	break;	// omicron		Ὂ
						case "\u1F4B":	gematria1 += 70;	break;	// omicron		Ὃ
						case "\u1F4C":	gematria1 += 70;	break;	// omicron		Ὄ
						case "\u1F4D":	gematria1 += 70;	break;	// omicron		Ὅ
						case "\u1F78":	gematria1 += 70;	break;	// omicron		ὸ
						case "\u1F79":	gematria1 += 70;	break;	// omicron		ό
						case "\u1FF8":	gematria1 += 70;	break;	// omicron		Ὸ
						case "\u1FF9":	gematria1 += 70;	break;	// omicron		Ό
						case "\u03A0":	gematria1 += 80;	break;	// pi			Π
						case "\u03C0":	gematria1 += 80;	break;	// pi			π
						case "\u03D6":	gematria1 += 80;	break;	// pi			ϖ
						case "\u213C":	gematria1 += 80;	break;	// pi			ℼ
						case "\u213F":	gematria1 += 80;	break;	// pi			ℿ
						case "\u1D28":	gematria1 += 80;	break;	// pi			ᴨ
						case "\u1D6B7":	gematria1 += 80;	break;	// pi			𝚷
						case "\u1D6D1":	gematria1 += 80;	break;	// pi			𝛑
						case "\u1D6E1":	gematria1 += 80;	break;	// pi			𝛡
						case "\u1D6F1":	gematria1 += 80;	break;	// pi			𝛱
						case "\u1D70B":	gematria1 += 80;	break;	// pi			𝜋
						case "\u1D71B":	gematria1 += 80;	break;	// pi			𝜛
						case "\u1D72B":	gematria1 += 80;	break;	// pi			𝜫
						case "\u1D745":	gematria1 += 80;	break;	// pi			𝝅
						case "\u1D755":	gematria1 += 80;	break;	// pi			𝝕
						case "\u1D765":	gematria1 += 80;	break;	// pi			𝝥
						case "\u1D77F":	gematria1 += 80;	break;	// pi			𝝿
						case "\u1D78F":	gematria1 += 80;	break;	// pi			𝞏
						case "\u1D79F":	gematria1 += 80;	break;	// pi			𝞟
						case "\u1D7B9":	gematria1 += 80;	break;	// pi			𝞹
						case "\u1D7C9":	gematria1 += 80;	break;	// pi			𝟉
						case "\u03D8":	gematria1 += 90;	break;	// koppa		Ϙ
						case "\u03D9":	gematria1 += 90;	break;	// koppa		ϙ
						case "\u03DE":	gematria1 += 90;	break;	// koppa		Ϟ
						case "\u03DF":	gematria1 += 90;	break;	// koppa		ϟ
						case "\u03A1":	gematria1 += 100;	break;	// rho			Ρ
						case "\u03C1":	gematria1 += 100;	break;	// rho			ρ
						case "\u03F1":	gematria1 += 100;	break;	// rho			ϱ
						case "\u03FC":	gematria1 += 100;	break;	// rho			ϼ
						case "\u1D29":	gematria1 += 100;	break;	// rho			ᴩ
						case "\u1D68":	gematria1 += 100;	break;	// rho			ᵨ
						case "\u1FE4":	gematria1 += 100;	break;	// rho			ῤ
						case "\u1FE5":	gematria1 += 100;	break;	// rho			ῥ
						case "\u1FEC":	gematria1 += 100;	break;	// rho			Ῥ
						case "\u1D6B8":	gematria1 += 100;	break;	// rho			𝚸
						case "\u1D6D2":	gematria1 += 100;	break;	// rho			𝛒
						case "\u1D6E0":	gematria1 += 100;	break;	// rho			𝛠
						case "\u1D6F2":	gematria1 += 100;	break;	// rho			𝛲
						case "\u1D70C":	gematria1 += 100;	break;	// rho			𝜌
						case "\u1D71A":	gematria1 += 100;	break;	// rho			𝜚
						case "\u1D72C":	gematria1 += 100;	break;	// rho			𝜬
						case "\u1D746":	gematria1 += 100;	break;	// rho			𝝆
						case "\u1D754":	gematria1 += 100;	break;	// rho			𝝔
						case "\u1D766":	gematria1 += 100;	break;	// rho			𝝦
						case "\u1D780":	gematria1 += 100;	break;	// rho			𝞀
						case "\u1D78E":	gematria1 += 100;	break;	// rho			𝞎
						case "\u1D7A0":	gematria1 += 100;	break;	// rho			𝞠
						case "\u1D7BA":	gematria1 += 100;	break;	// rho			𝞺
						case "\u1D7C8":	gematria1 += 100;	break;	// rho			𝟈
						case "\u03C2":	gematria1 += 200;	break;	// sigma		ς
						case "\u03C3":	gematria1 += 200;	break;	// sigma		σ
						case "\u03F2":	gematria1 += 200;	break;	// sigma		ϲ
						case "\u037B":	gematria1 += 200;	break;	// sigma		ͻ
						case "\u037C":	gematria1 += 200;	break;	// sigma		ͼ
						case "\u037D":	gematria1 += 200;	break;	// sigma		ͽ
						case "\u03A3":	gematria1 += 200;	break;	// sigma		Σ
						case "\u03F9":	gematria1 += 200;	break;	// sigma		Ϲ
						case "\u03FD":	gematria1 += 200;	break;	// sigma		Ͻ
						case "\u03FE":	gematria1 += 200;	break;	// sigma		Ͼ
						case "\u03FF":	gematria1 += 200;	break;	// sigma		Ͽ
						case "\u1D6BA":	gematria1 += 200;	break;	// sigma		𝚺
						case "\u1D6D3":	gematria1 += 200;	break;	// sigma		𝛓
						case "\u1D6D4":	gematria1 += 200;	break;	// sigma		𝛔
						case "\u1D6F4":	gematria1 += 200;	break;	// sigma		𝛴
						case "\u1D70D":	gematria1 += 200;	break;	// sigma		𝜍
						case "\u1D70E":	gematria1 += 200;	break;	// sigma		𝜎
						case "\u1D72E":	gematria1 += 200;	break;	// sigma		𝜮
						case "\u1D747":	gematria1 += 200;	break;	// sigma		𝝇
						case "\u1D748":	gematria1 += 200;	break;	// sigma		𝝈
						case "\u1D768":	gematria1 += 200;	break;	// sigma		𝝨
						case "\u1D781":	gematria1 += 200;	break;	// sigma		𝞁
						case "\u1D782":	gematria1 += 200;	break;	// sigma		𝞂
						case "\u1D7A2":	gematria1 += 200;	break;	// sigma		𝞢
						case "\u1D7BB":	gematria1 += 200;	break;	// sigma		𝞻
						case "\u1D7BC":	gematria1 += 200;	break;	// sigma		𝞼
						case "\u03FA":	gematria1 += 200;	break;	// san			Ϻ
						case "\u03FB":	gematria1 += 200;	break;	// san			ϻ
						case "\u03F7":	gematria1 += 200;	break;	// sho			Ϸ
						case "\u03F8":	gematria1 += 200;	break;	// sho			ϸ
						case "\u03A4":	gematria1 += 300;	break;	// tau			Τ
						case "\u03C4":	gematria1 += 300;	break;	// tau			τ
						case "\u1D6BB":	gematria1 += 300;	break;	// tau			𝚻
						case "\u1D6D5":	gematria1 += 300;	break;	// tau			𝛕
						case "\u1D6F5":	gematria1 += 300;	break;	// tau			𝛵
						case "\u1D72F":	gematria1 += 300;	break;	// tau			𝜯
						case "\u1D749":	gematria1 += 300;	break;	// tau			𝝉
						case "\u1D769":	gematria1 += 300;	break;	// tau			𝝩
						case "\u1D783":	gematria1 += 300;	break;	// tau			𝞃
						case "\u1D7A3":	gematria1 += 300;	break;	// tau			𝞣
						case "\u1D7BD":	gematria1 += 300;	break;	// tau			𝞽
						case "\u038E":	gematria1 += 400;	break;	// upsilon		Ύ
						case "\u03A5":	gematria1 += 400;	break;	// upsilon		Υ
						case "\u03AB":	gematria1 += 400;	break;	// upsilon		Ϋ
						case "\u03B0":	gematria1 += 400;	break;	// upsilon		ΰ
						case "\u03C5":	gematria1 += 400;	break;	// upsilon	 	υ
						case "\u03CB":	gematria1 += 400;	break;	// upsilon	 	ϋ
						case "\u03CD":	gematria1 += 400;	break;	// upsilon		ύ
						case "\u03D2":	gematria1 += 400;	break;	// upsilon		ϒ
						case "\u03D3":	gematria1 += 400;	break;	// upsilon		ϓ
						case "\u03D4":	gematria1 += 400;	break;	// upsilon		ϔ
						case "\u1D6BC":	gematria1 += 400;	break;	// upsilon		𝚼
						case "\u1D6D6":	gematria1 += 400;	break;	// upsilon		𝛖
						case "\u1D6F6":	gematria1 += 400;	break;	// upsilon		𝛶
						case "\u1D710":	gematria1 += 400;	break;	// upsilon		𝜐
						case "\u1D730":	gematria1 += 400;	break;	// upsilon		𝜰
						case "\u1D74A":	gematria1 += 400;	break;	// upsilon		𝝊
						case "\u1D76A":	gematria1 += 400;	break;	// upsilon		𝝪
						case "\u1D784":	gematria1 += 400;	break;	// upsilon		𝞄
						case "\u1D7A4":	gematria1 += 400;	break;	// upsilon		𝞤
						case "\u1D7BE":	gematria1 += 400;	break;	// upsilon		𝞾
						case "\u1F50":	gematria1 += 400;	break;	// upsilon		ὐ
						case "\u1F51":	gematria1 += 400;	break;	// upsilon		ὑ
						case "\u1F52":	gematria1 += 400;	break;	// upsilon		ὒ
						case "\u1F53":	gematria1 += 400;	break;	// upsilon		ὓ
						case "\u1F54":	gematria1 += 400;	break;	// upsilon		ὔ
						case "\u1F55":	gematria1 += 400;	break;	// upsilon		ὕ
						case "\u1F56":	gematria1 += 400;	break;	// upsilon		ὖ
						case "\u1F57":	gematria1 += 400;	break;	// upsilon		ὗ
						case "\u1F59":	gematria1 += 400;	break;	// upsilon		Ὑ
						case "\u1F5B":	gematria1 += 400;	break;	// upsilon		Ὓ
						case "\u1F5D":	gematria1 += 400;	break;	// upsilon		Ὕ
						case "\u1F5F":	gematria1 += 400;	break;	// upsilon		Ὗ
						case "\u1F7A":	gematria1 += 400;	break;	// upsilon		ὺ
						case "\u1F7B":	gematria1 += 400;	break;	// upsilon		ύ
						case "\u1FE0":	gematria1 += 400;	break;	// upsilon		ῠ
						case "\u1FE1":	gematria1 += 400;	break;	// upsilon		ῡ
						case "\u1FE2":	gematria1 += 400;	break;	// upsilon		ῢ
						case "\u1FE3":	gematria1 += 400;	break;	// upsilon		ΰ
						case "\u1FE6":	gematria1 += 400;	break;	// upsilon		ῦ
						case "\u1FE7":	gematria1 += 400;	break;	// upsilon		ῧ
						case "\u1FE8":	gematria1 += 400;	break;	// upsilon		Ῠ
						case "\u1FE9":	gematria1 += 400;	break;	// upsilon		Ῡ
						case "\u1FEB":	gematria1 += 400;	break;	// upsilon		Ύ
						case "\u03A6":	gematria1 += 500;	break;	// phi			Φ
						case "\u03C6":	gematria1 += 500;	break;	// phi			φ
						case "\u03C8":	gematria1 += 500;	break;	// phi			ψ
						case "\u03D5":	gematria1 += 500;	break;	// phi			ϕ
						case "\u1D60":	gematria1 += 500;	break;	// phi			ᵠ
						case "\u1D69":	gematria1 += 500;	break;	// phi			ᵩ
						case "\u1D6BD":	gematria1 += 500;	break;	// phi			𝚽
						case "\u1D6D7":	gematria1 += 500;	break;	// phi			𝛗
						case "\u1D6DF":	gematria1 += 500;	break;	// phi			𝛟
						case "\u1D6F7":	gematria1 += 500;	break;	// phi			𝛷
						case "\u1D711":	gematria1 += 500;	break;	// phi			𝜑
						case "\u1D719":	gematria1 += 500;	break;	// phi			𝜙
						case "\u1D731":	gematria1 += 500;	break;	// phi			𝜱
						case "\u1D74B":	gematria1 += 500;	break;	// phi			𝝋
						case "\u1D753":	gematria1 += 500;	break;	// phi			𝝓
						case "\u1D76B":	gematria1 += 500;	break;	// phi			𝝫
						case "\u1D785":	gematria1 += 500;	break;	// phi			𝞅
						case "\u1D78D":	gematria1 += 500;	break;	// phi			𝞍
						case "\u1D7A5":	gematria1 += 500;	break;	// phi			𝞥
						case "\u1D7BF":	gematria1 += 500;	break;	// phi			𝞿
						case "\u1D7C7":	gematria1 += 500;	break;	// phi			𝟇
						case "\u03A7":	gematria1 += 600;	break;	// chi			Χ
						case "\u03C7":	gematria1 += 600;	break;	// chi			χ
						case "\u1D61":	gematria1 += 600;	break;	// chi			ᵡ
						case "\u1D6A":	gematria1 += 600;	break;	// chi			ᵪ
						case "\u1D6BE":	gematria1 += 600;	break;	// chi			𝚾
						case "\u1D6D8":	gematria1 += 600;	break;	// chi			𝛘
						case "\u1D6F8":	gematria1 += 600;	break;	// chi			𝛸
						case "\u1D712":	gematria1 += 600;	break;	// chi			𝜒
						case "\u1D732":	gematria1 += 600;	break;	// chi			𝜲
						case "\u1D74C":	gematria1 += 600;	break;	// chi			𝝌
						case "\u1D76C":	gematria1 += 600;	break;	// chi			𝝬
						case "\u1D786":	gematria1 += 600;	break;	// chi			𝞆
						case "\u1D7A6":	gematria1 += 600;	break;	// chi			𝞦
						case "\u1D7C0":	gematria1 += 600;	break;	// chi			𝟀
						case "\u03A8":	gematria1 += 700;	break;	// psi			Ψ
						case "\u03C8":	gematria1 += 700;	break;	// psi			ψ
						case "\u1D2A":	gematria1 += 700;	break;	// psi			ᴪ
						case "\u1D6BF":	gematria1 += 700;	break;	// psi			𝚿
						case "\u1D6D9":	gematria1 += 700;	break;	// psi			𝛙
						case "\u1D6F9":	gematria1 += 700;	break;	// psi			𝛹
						case "\u1D713":	gematria1 += 700;	break;	// psi			𝜓
						case "\u1D733":	gematria1 += 700;	break;	// psi			𝜳
						case "\u1D74D":	gematria1 += 700;	break;	// psi			𝝍
						case "\u1D76D":	gematria1 += 700;	break;	// psi			𝝭
						case "\u1D787":	gematria1 += 700;	break;	// psi			𝞇
						case "\u1D7A7":	gematria1 += 700;	break;	// psi			𝞧
						case "\u1D7C1":	gematria1 += 700;	break;	// psi			𝟁
						case "\u038F":	gematria1 += 800;	break;	// omega		Ώ
						case "\u03A9":	gematria1 += 800;	break;	// omega		Ω
						case "\u03C9":	gematria1 += 800;	break;	// omega		ω
						case "\u03CE":	gematria1 += 800;	break;	// omega		ώ
						case "\u1D6C0":	gematria1 += 800;	break;	// omega		𝛀
						case "\u1D6DA":	gematria1 += 800;	break;	// omega		𝛚
						case "\u1D6FA":	gematria1 += 800;	break;	// omega		𝛺
						case "\u1D714":	gematria1 += 800;	break;	// omega		𝜔
						case "\u1D734":	gematria1 += 800;	break;	// omega		𝜴
						case "\u1D74E":	gematria1 += 800;	break;	// omega		𝝎
						case "\u1D788":	gematria1 += 800;	break;	// omega		𝞈
						case "\u1D7C2":	gematria1 += 800;	break;	// omega		𝟂
						case "\u1D76E":	gematria1 += 800;	break;	// omega		𝝮
						case "\u1D7A8":	gematria1 += 800;	break;	// omega		𝞨
						case "\u1F60":	gematria1 += 800;	break;	// omega		ὠ
						case "\u1F61":	gematria1 += 800;	break;	// omega		ὡ
						case "\u1F62":	gematria1 += 800;	break;	// omega		ὢ
						case "\u1F63":	gematria1 += 800;	break;	// omega		ὣ
						case "\u1F64":	gematria1 += 800;	break;	// omega		ὤ
						case "\u1F65":	gematria1 += 800;	break;	// omega		ὥ
						case "\u1F66":	gematria1 += 800;	break;	// omega		ὦ
						case "\u1F67":	gematria1 += 800;	break;	// omega		ὧ
						case "\u1F68":	gematria1 += 800;	break;	// omega		Ὠ
						case "\u1F69":	gematria1 += 800;	break;	// omega		Ὡ
						case "\u1F6A":	gematria1 += 800;	break;	// omega		Ὢ
						case "\u1F6B":	gematria1 += 800;	break;	// omega		Ὣ
						case "\u1F6C":	gematria1 += 800;	break;	// omega		Ὤ
						case "\u1F6D":	gematria1 += 800;	break;	// omega		Ὥ
						case "\u1F6E":	gematria1 += 800;	break;	// omega		Ὦ
						case "\u1F6F":	gematria1 += 800;	break;	// omega		Ὧ
						case "\u1F7C":	gematria1 += 800;	break;	// omega		ὼ
						case "\u1F7D":	gematria1 += 800;	break;	// omega		ώ
						case "\u1FA0":	gematria1 += 800;	break;	// omega		ᾠ
						case "\u1FA1":	gematria1 += 800;	break;	// omega		ᾡ
						case "\u1FA2":	gematria1 += 800;	break;	// omega		ᾢ
						case "\u1FA3":	gematria1 += 800;	break;	// omega		ᾣ
						case "\u1FA4":	gematria1 += 800;	break;	// omega		ᾤ
						case "\u1FA5":	gematria1 += 800;	break;	// omega		ᾥ
						case "\u1FA6":	gematria1 += 800;	break;	// omega		ᾦ
						case "\u1FA7":	gematria1 += 800;	break;	// omega		ᾧ
						case "\u1FA8":	gematria1 += 800;	break;	// omega		ᾨ
						case "\u1FA9":	gematria1 += 800;	break;	// omega		ᾩ
						case "\u1FAA":	gematria1 += 800;	break;	// omega		ᾪ
						case "\u1FAB":	gematria1 += 800;	break;	// omega		ᾫ
						case "\u1FAC":	gematria1 += 800;	break;	// omega		ᾬ
						case "\u1FAD":	gematria1 += 800;	break;	// omega		ᾭ
						case "\u1FAE":	gematria1 += 800;	break;	// omega		ᾮ
						case "\u1FAF":	gematria1 += 800;	break;	// omega		ᾯ
						case "\u1FF2":	gematria1 += 800;	break;	// omega		ῲ
						case "\u1FF3":	gematria1 += 800;	break;	// omega		ῳ
						case "\u1FF4":	gematria1 += 800;	break;	// omega		ῴ
						case "\u1FF6":	gematria1 += 800;	break;	// omega		ῶ
						case "\u1FF7":	gematria1 += 800;	break;	// omega		ῷ
						case "\u1FFA":	gematria1 += 800;	break;	// omega		Ὼ
						case "\u1FFB":	gematria1 += 800;	break;	// omega		Ώ
						case "\u1FFC":	gematria1 += 800;	break;	// omega		ῼ
						case "\u2126":	gematria1 += 800;	break;	// omega		Ω
						case "\uAB65":	gematria1 += 800;	break;	// omega		ꭥ
						case "\u0372":	gematria1 += 900;	break;	// sampi		Ͳ
						case "\u0373":	gematria1 += 900;	break;	// sampi		ͳ
						case "\u03E0":	gematria1 += 900;	break;	// sampi		Ϡ
						case "\u03E1":	gematria1 += 900;	break;	// sampi		ϡ
			default:letter = "";break;
		}
	}
// Avgad: Roll every letter of the word one place forward and one place backward in exchage for what it was before.
for (var i=0; i < inputText.length; i++){
	switch(array[i]){
	/*aleph*/	case "\u05D0":BE = "\u05EA";	gematriaAvgadBE += L22;	FE = "\u05D1";	gematriaAvgadFE += L02;	break;	// tav & bet
	/*bet*/		case "\u05D1":BE = "\u05D0";	gematriaAvgadBE += L01;	FE = "\u05D2";	gematriaAvgadFE += L03;	break;	// aleph & gimel
	/*gimel*/	case "\u05D2":BE = "\u05D1";	gematriaAvgadBE += L02;	FE = "\u05D3";	gematriaAvgadFE += L04;	break;	// bet & dalet
	/*dalet*/	case "\u05D3":BE = "\u05D2";	gematriaAvgadBE += L03;	FE = "\u05D4";	gematriaAvgadFE += L05;	break;	// gimel & hey
	/*hey*/		case "\u05D4":BE = "\u05D3";	gematriaAvgadBE += L04;	FE = "\u05D5";	gematriaAvgadFE += L06;	break;	// dalet & vav
	/*vav*/		case "\u05D5":BE = "\u05D4";	gematriaAvgadBE += L05;	FE = "\u05D6";	gematriaAvgadFE += L07;	break;	// hey & zayin
	/*zayin*/	case "\u05D6":BE = "\u05D5";	gematriaAvgadBE += L06;	FE = "\u05D7";	gematriaAvgadFE += L08;	break;	// vav & chet
	/*chet*/	case "\u05D7":BE = "\u05D6";	gematriaAvgadBE += L07;	FE = "\u05D8";	gematriaAvgadFE += L09;	break;	// zayin & tet
	/*tet*/		case "\u05D8":BE = "\u05D7";	gematriaAvgadBE += L08;	FE = "\u05D9";	gematriaAvgadFE += L10;	break;	// chet & yod
	/*yod*/		case "\u05D9":BE = "\u05D8";	gematriaAvgadBE += L09;	FE = "\u05DB";	gematriaAvgadFE += L11;	break;	// tet & kaf
	/*kaf*/		case "\u05DB":BE = "\u05D9";	gematriaAvgadBE += L10;	FE = "\u05DC";	gematriaAvgadFE += L12;	break;	// yod & lamed
	/*lamed*/	case "\u05DC":BE = "\u05DB";	gematriaAvgadBE += L11;	FE = "\u05DE";	gematriaAvgadFE += L13;	break;	// kaf & mem
	/*mem*/		case "\u05DE":BE = "\u05DC";	gematriaAvgadBE += L12;	FE = "\u05E0";	gematriaAvgadFE += L14;	break;	// lamed & num
	/*nun*/		case "\u05E0":BE = "\u05DE";	gematriaAvgadBE += L13;	FE = "\u05E1";	gematriaAvgadFE += L15;	break;	// mem & samech
	/*samech*/	case "\u05E1":BE = "\u05E0";	gematriaAvgadBE += L14;	FE = "\u05E2";	gematriaAvgadFE += L16;	break;	// nun & ayin
	/*ayin*/	case "\u05E2":BE = "\u05E1";	gematriaAvgadBE += L15;	FE = "\u05E4";	gematriaAvgadFE += L17;	break;	// samech & pey
	/*pey*/		case "\u05E4":BE = "\u05E2";	gematriaAvgadBE += L16;	FE = "\u05E6";	gematriaAvgadFE += L18;	break;	// ayin & tzadi
	/*tzadi*/	case "\u05E6":BE = "\u05E4";	gematriaAvgadBE += L17;	FE = "\u05E7";	gematriaAvgadFE += L19;	break;	// pey & kuf
	/*kuf*/		case "\u05E7":BE = "\u05E6";	gematriaAvgadBE += L18;	FE = "\u05E8";	gematriaAvgadFE += L20;	break;	// tzadi & resh
	/*resh*/	case "\u05E8":BE = "\u05E7";	gematriaAvgadBE += L19;	FE = "\u05E9";	gematriaAvgadFE += L21;	break;	// kuf & shin
	/*shin*/	case "\u05E9":BE = "\u05E8";	gematriaAvgadBE += L20;	FE = "\u05EA";	gematriaAvgadFE += L22;	break;	// resh & tav
	/*tav*/		case "\u05EA":BE = "\u05E9";	gematriaAvgadBE += L21;	FE = "\u05D0";	gematriaAvgadFE += L01;	break;	// shin & aleph
	/*kaf F*/	case "\u05DA":BE = "\u05D9";	gematriaAvgadBE += L10;	FE = "\u05DC";	gematriaAvgadFE += L12;	break;	// yod & lamed
	/*mem F*/	case "\u05DD":BE = "\u05DC";	gematriaAvgadBE += L12;	FE = "\u05E0";	gematriaAvgadFE += L14;	break;	// lamed & nun
	/*nun F*/	case "\u05DF":BE = "\u05DE";	gematriaAvgadBE += L13;	FE = "\u05E1";	gematriaAvgadFE += L15;	break;	// mem & samech
	/*pey F*/	case "\u05E3":BE = "\u05E2";	gematriaAvgadBE += L16;	FE = "\u05E6";	gematriaAvgadFE += L18;	break;	// ayin & tzadi
	/*tzadi F*/	case "\u05E5":BE = "\u05E4";	gematriaAvgadBE += L17;	FE = "\u05E7";	gematriaAvgadFE += L19;	break;	// pey & kuf
	default:break;
	}
	backexch +=BE;
	forexch +=FE;
	}
// If the last letter is is caf, mem, nun, pey, or tzadi it will be removed and the final form added in its place
if (forexch.substr(forexch.length - 1, 1) == "\u05DB") {
  forexch = forexch.substr(0, forexch.length - 1) + "\u05DA";
}if (forexch.substr(forexch.length - 1, 1) == "\u05DE") {
  forexch = forexch.substr(0, forexch.length - 1) + "\u05DD";
}if (forexch.substr(forexch.length - 1, 1) == "\u05E0") {
  forexch = forexch.substr(0, forexch.length - 1) + "\u05DF";
}if (forexch.substr(forexch.length - 1, 1) == "\u05E4") {
  forexch = forexch.substr(0, forexch.length - 1) + "\u05E3";
}if (forexch.substr(forexch.length - 1, 1) == "\u05E6") {
  forexch = forexch.substr(0, forexch.length - 1) + "\u05E5";
}if (backexch.substr(backexch.length - 1, 1) == "\u05DB") {
  backexch = backexch.substr(0, backexch.length - 1) + "\u05DA";
}if (backexch.substr(backexch.length - 1, 1) == "\u05DE") {
  backexch = backexch.substr(0, backexch.length - 1) + "\u05DD";
}if (backexch.substr(backexch.length - 1, 1) == "\u05E0") {
  backexch = backexch.substr(0, backexch.length - 1) + "\u05DF";
}if (backexch.substr(backexch.length - 1, 1) == "\u05E4") {
  backexch = backexch.substr(0, backexch.length - 1) + "\u05E3";
}if (backexch.substr(backexch.length - 1, 1) == "\u05E6") {
  backexch = backexch.substr(0, backexch.length - 1) + "\u05E5";
}
document.getElementById("backexch").innerHTML = "<a href='http://translate.google.com/#auto/en/"+backexch+"' target='_blank' style='color: white; font-weight: 400;'><b>" + backexch + "</b></a><br />";
document.getElementById("forexch").innerHTML = "<a href='http://translate.google.com/#auto/en/"+forexch+"' target='_blank' style='color: white; font-weight: 400;'><b>" + forexch + "</b></a><br />";

// Number of Paths (the 32 paths of Wisdom are the 10 Sephirot 0-9 and the 22 Hebrew letters)
// Number of Gates 
var noDups = inputText.replace(/(.)(?=.*\1)/gi, "")// Remove duplicated letters for original word
var gates=noDups.length;
var gatesTotal=noDups.length;
var paths=noDups.length;
for (gates-1;gates>0;gates--) { // Loop to find the number of connections between each unique letter and every other unique letter the the word.
gatesTotal+=(gates-1);
}
document.getElementById("paths").innerHTML = `<a href='#' onclick="replaceInputField('inputText', ${paths}); Transpose(); return false;" target='_blank'><b>${paths}</b></a>`;
document.getElementById("gates").innerHTML = `<a href='#' onclick="replaceInputField('inputText', ${gatesTotal}); Transpose(); return false;" target='_blank'><b>${gatesTotal}</b></a>`;

alphas = inputText.replace(/0/gi, ""); 
alphas = alphas.replace(/1/gi, "\u05D0");
alphas = alphas.replace(/2/gi, "\u05D1");
alphas = alphas.replace(/3/gi, "\u05D2");
alphas = alphas.replace(/4/gi, "\u05D3");
alphas = alphas.replace(/5/gi, "\u05D4");
alphas = alphas.replace(/6/gi, "\u05D5");
alphas = alphas.replace(/7/gi, "\u05D6");
alphas = alphas.replace(/8/gi, "\u05D7");
alphas = alphas.replace(/9/gi, "\u05D8");

// Pictograms
for (var i=0; i < alphas.length; i++){
	switch(array[i]){
		/*aleph*/	case "\u05D0":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/aleph.png' alt='Ox, First, Leader, Strength' border='0'><span style='vertical-align:bottom'>&#9;Ox, First, Leader, Strength</span></a><br />";break;
		/*bet*/		case "\u05D1":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/bet.png' alt='Tent, Household, In, Family' border='0'><span style='vertical-align:middle'>&#9;Tent, Household, In, Family</span></a><br />";break;
		/*gimel*/	case "\u05D2":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/gimmel.png' alt='Camel, Animal, Traveler, Lift-up' border='0'><span style='vertical-align:middle'>&#9;Camel, Animal, Traveler, Lift-up</span></a><br />";break;
		/*dalet*/	case "\u05D3":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/dalet.png' alt='Door, Gateway' border='0'><span style='vertical-align:middle'>&#9;Door, Gateway</span></a><br />";break;
		/*zayin*/	case "\u05D6":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/zayin.png' alt='Weapon, Cut-off' border='0'><span style='vertical-align:top'>&#9;Weapon, Cut-off</span></a><br />";break;
		/*chet*/	case "\u05D7":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/chet.png' alt='Fence, Inner-room, Private, Separate' border='0'><span style='vertical-align:middle'>&#9;Fence, Inner-room, Private, Separate</span></a><br />";break;
		/*tet*/		case "\u05D8":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/tet.png' alt='Snake, Surround' border='0'><span style='vertical-align:middle'>&#9;Snake, Surround</span></a><br />";break;
		/*yod*/		case "\u05D9":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/yod.png' alt='Hand, Work, Make, Arm, Deeds' border='0'><span style='vertical-align:middle'>&#9;Hand, Work, Make, Arm, Deeds</span></a><br />";break;
		/*kaf*/		case "\u05DB":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/kaf.png' alt='Palm, Allow, Open' border='0'><span style='vertical-align:middle'>&#9;Palm, Allow, Open</span></a><br />";break;
		/*lamed*/	case "\u05DC":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/lamed.png' alt='Staff, Authority, Teach, Learn, Tongue' border='0'><span style='vertical-align:middle'>&#9;Staff, Authority, Teach, Learn, Tongue</span></a><br />";break;
		/*mem*/		case "\u05DE":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/mem.png' alt='Water, Masses, Chaos, Wisdom' border='0'><span style='vertical-align:middle'>&#9;Water, Masses, Chaos, Wisdom</span></a><br />";break;
		/*nun*/		case "\u05E0":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/nun.png' alt='Fish, Activity, Life' border='0'><span style='vertical-align:middle'>&#9; Fish, Activity, Life</span></a><br />";break;
		/*samech*/	case "\u05E1":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/samech.png' alt='Support, Prop, Turn, Twist' border='0'><span style='vertical-align:middle'>&#9; Support, Prop, Turn, Twist</span></a><br />";break;
		/*ayin*/	case "\u05E2":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/ayin.png' alt='Eye, See, Know, Experience' border='0'><span style='vertical-align:middle'>&#9; Eye, See, Know, Experience</span></a><br />";break;
		/*kuf*/		case "\u05E7":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/koph.png' alt='Back of Head, Behind, Last, Least' border='0'><span style='vertical-align:middle'>&#9; Back of Head, Behind, Last, Least</span></a><br />";break;
		/*resh*/	case "\u05E8":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/resh.png' alt='Head, Highest, Person' border='0'><span style='vertical-align:middle'>&#9; Head, Highest, Person</span></a><br />";break;
		/*shin*/	case "\u05E9":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/shin.png' alt='Teeth, Fire, Consume, Destroy' border='0'><span style='vertical-align:middle'>&#9; Teeth, Fire, Consume, Destroy</span></a><br />";break;
		/*kaf F*/	case "\u05DA":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/kaf.png' alt='Palm, Allow, Open' border='0'><span style='vertical-align:middle'>&#9; Palm, Allow, Open</span></a><br />";break;
		/*mem F*/	case "\u05DD":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/mem.png' alt='Water, Masses, Chaos, Wisdom' border='0'><span style='vertical-align:middle'>&#9; Water, Masses, Chaos, Wisdom</span></a><br />";break;
		/*nun F*/	case "\u05DF":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/nun.png' alt='Fish, Activity, Life' border='0'><span style='vertical-align:middle'>&#9; Fish, Activity, Life</span></a><br />";break;
		/*hey*/		case "\u05D4":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/hay.png' alt='Reveal, Window, The' border='0'><span style='vertical-align:middle'>&#9; Reveal, Window, The</span></a><br />";break;
		/*vav*/		case "\u05D5":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/vav.png' alt='Nail, Peg, Hook, Man, Add, Secure' border='0'><span style='vertical-align:middle'>&#9; Nail, Peg, Hook, Man, Add, Secure</span></a><br />";break;
		/*pey*/		case "\u05E4":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/pey.png' alt='Mouth, Speak, Word, Open' border='0'><span style='vertical-align:middle'>&#9; Mouth, Speak, Word, Open</span></a><br />";break;
		/*pey F*/	case "\u05E3":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/pey.png' alt='Mouth, Speak, Word, Open' border='0'><span style='vertical-align:middle'>&#9; Mouth, Speak, Word, Open</span></a><br />";break;
		/*tzadi*/	case "\u05E6":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/tsade.png' alt='Fish-hook, Desire, Righteous, Catch' border='0'><span style='vertical-align:middle'>&#9; Fish-hook, Desire, Righteous, Catch</span></a><br />";break;
		/*tzadi F*/	case "\u05E5":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/tsade.png' alt='Fish-hook, Desire, Righteous, Catch' border='0'><span style='vertical-align:middle'>&#9; Fish-hook, Desire, Righteous, Catch</span></a><br />";break;
		/*tav*/		case "\u05EA":pictogram += "<a href='#' style='text-decoration: none; color: white;'><img src='img/pictographs/tav.png' alt='Sign, Cross, Seal, Covenant' border='0'><span style='vertical-align:middle'>&#9; Sign, Cross, Seal, Covenant</span></a><br />";break;
		default:letter = "";break;
	}
}

// Letter Morphs
for (var i=0; i < alphas.length; i++){
	switch(array[i]){
		/*aleph*/	case "\u05E7":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05E7 = </font>\u05D9\u05D0\u05D9</b></a><br /><br />";break;
		/*bet*/		case "\u05D1":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05D1 = </font>\u05E8\u05D5   ,\u05DB\u05D9   ,\u05D9\u05D7</b></a><br /><br />";break;
		/*gimel*/	case "\u05D2":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05D2 = </font>\u05D5\u05D9</b></a><br /><br />";break;
		/*dalet*/	case "\u05D3":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05D3 = </font>\u05D5\u05D5   ,\u05E8\u05D9</b></a><br /><br />";break;
		/*hey*/		case "\u05D4":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05D4 = </font>\u05E8\u05D5</b></a><br /><br />";break;
		/*vav*/		case "\u05D5":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05D5 = </font>\u05D5</b></a><br /><br />";break;
		/*zayin*/	case "\u05D6":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05D6 = </font>\u05D9\u05D5</b></a><br /><br />";break;
		/*chet*/	case "\u05D7":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05D7 = </font>\u05E8\u05D5   ,\u05D8   ,\u05D9\u05D4</b></a><br /><br />";break;
		/*tet*/		case "\u05D8":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05D8 = </font>\u05D8</b></a><br /><br />";break;
		/*yod*/		case "\u05D9":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05D9 = </font>\u05D9</b></a><br /><br />";break;
		/*kaf*/		case "\u05DB":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05DB = </font>\u05E8\u05D5   ,\u05D9\u05D4   ,\u05D7</b></a><br /><br />";break;
		/*lamed*/	case "\u05DC":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05DC = </font>\u05E7</b></a><br /><br />";break;
		/*mem*/		case "\u05DE":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05DE = </font>\u05DD   ,\u05D4\u05D9</b></a><br /><br />";break;
		/*nun*/		case "\u05E0":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05E0 = </font>\u05D6\u05D9   ,\u05D9\u05D5\u05D9</b></a><br /><br />";break;
		/*samech*/	case "\u05E1":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05E1 = </font>\u05E1</b></a><br /><br />";break;
		/*ayin*/	case "\u05E2":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05E2 = </font>\u05D5\u05DF</b></a><br /><br />";break;		
		/*pey*/		case "\u05E4":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05E4 = </font>\u05DB\u05D9   ,\u05D7\u05D9   ,\u05D9\u05D4\u05D9</b></a><br /><br />";break;
		/*tzadi*/	case "\u05E6":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05E6 = </font>\u05E0\u05D9</b></a><br /><br />";break;
		/*kuf*/		case "\u05E7":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05E7 = </font>\u05DC</b></a><br /><br />";break;
		/*resh*/	case "\u05E8":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05E8 = </font>\u05E8</b></a><br /><br />";break;
		/*shin*/	case "\u05E9":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05E9 = </font>\u05DB\u05D5   ,\u05D7\u05D5</b></a><br /><br />";break;
		/*tav*/		case "\u05EA":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05EA = </font>\u05E8\u05D5\u05D9   ,\u05D7\u05D9\u05D9   ,\u05DB\u05D9\u05D9</b></a><br /><br />";break;
		/*kaf F*/	case "\u05DA":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05DA = </font>\u05D7   ,\u05D4</b></a><br /><br />";break;
		/*mem F*/	case "\u05DD":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05DD = </font>\u05DE   ,\u05D7\u05D5   ,\u05DB\u05D5</b></a><br /><br />";break;
		/*nun F*/	case "\u05DF":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05DF = </font>\u05DF</b></a><br /><br />";break;
		/*pey F*/	case "\u05E3":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05E3 = </font>\u05DA\u05D9   ,\u05D4\u05D9</b></a><br /><br />";break;
		/*tzadi F*/	case "\u05E5":morph += "<a href='#' style='text-decoration: none;'><b><font color=red>\u05E5 = </font>\u05DF\u05D9</b></a><br /><br />";break;
	}
document.getElementById('morph').innerHTML = morph;
}

// Possible Divisions
for (var i=0; i < alphas.length; i++){
	switch(array[i]){
		/*bet*/		case "\u05D1":div += "<font color=green><b>\u05D1 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L02+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D0\u05D0</a></b><br /><br />";break;
		/*gimel*/	case "\u05D2":div += "<font color=green><b>\u05D2 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L03+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D0\u05D0\u05D0  ,\u05D0\u05D1</a></b><br /><br />";break;
		/*dalet*/	case "\u05D3":div += "<font color=green><b>\u05D3 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L04+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D1\u05D1  ,\u05D0\u05D0\u05D1  ,\u05D0\u05D2</a></b><br /><br />";break;
		/*hey*/		case "\u05D4":div += "<font color=green><b>\u05D4 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L05+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D0\u05D0\u05D0\u05D1  ,\u05D0\u05D1\u05D1  ,\u05D0\u05D0\u05D2  ,\u05D1\u05D2  ,\u05D0\u05D3</a></b><br /><br />";break;
		/*vav*/		case "\u05D5":div += "<font color=green><b>\u05D5 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L06+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D0\u05D0\u05D1\u05D1  ,\u05D1\u05D1\u05D1  ,\u05D0\u05D0\u05D0\u05D2  ,\u05D0\u05D1\u05D2  ,\u05D2\u05D2  ,\u05D0\u05D0\u05D3  ,\u05D1\u05D3  ,\u05D0\u05D4</a></b><br /><br />";break;
		/*zayin*/	case "\u05D6":div += "<font color=green><b>\u05D6 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L07+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D0\u05D0\u05D0\u05D1\u05D1  ,\u05D0\u05D1\u05D1\u05D1  ,\u05D1\u05D1\u05D2  ,\u05D0\u05D0\u05D1\u05D2  ,\u05D0\u05D2\u05D2  ,\u05D0\u05D0\u05D0\u05D3  ,\u05D2\u05D3  ,\u05D0\u05D1\u05D3  ,\u05D1\u05D4  ,\u05D0\u05D0\u05D1  ,\u05D0\u05D5</a></b><br /><br />";break;
		/*chet*/	case "\u05D7":div += "<font color=green><b>\u05D7 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L08+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D0\u05D0\u05D1\u05D3  ,\u05D1\u05D1\u05D3  ,\u05D0\u05D2\u05D3  ,\u05D3\u05D3  ,\u05D0\u05D0\u05D0\u05D4  ,\u05D0\u05D1\u05D4  ,\u05D2\u05D4  ,\u05D0\u05D0\u05D5  ,\u05D1\u05D5  ,\u05D0\u05D6  ,\u05D0\u05D0\u05D1\u05D1\u05D1  ,\u05D0\u05D0\u05D2\u05D2  ,\u05D1\u05D2\u05D2  ,\u05D0\u05D0\u05D0\u05D1\u05D2  ,\u05D0\u05D1\u05D1\u05D2</a></b><br /><br />";break;
		/*tet*/		case "\u05D8":div += "<font color=green><b>\u05D8 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L09+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D1\u05D1\u05D4  ,\u05D0\u05D2\u05D3  ,\u05D3\u05D4  ,\u05D0\u05D0\u05D0\u05D5  ,\u05D0\u05D1\u05D5  ,\u05D2\u05D5  ,\u05D0\u05D0\u05D6  ,\u05D1\u05D6  ,\u05D0\u05D7  ,\u05D0\u05D0\u05D0\u05D2\u05D2  ,\u05D0\u05D1\u05D2\u05D2  ,\u05D2\u05D2\u05D2  ,\u05D0\u05D0\u05D0\u05D1\u05D3  ,\u05D0\u05D3\u05D3  ,\u05D0\u05D0\u05D2\u05D3  ,\u05D1\u05D2\u05D3  ,\u05D0\u05D1\u05D1\u05D3  ,\u05D0\u05D0\u05D1\u05D5  ,\u05D0\u05D0\u05D0\u05D1\u05D1\u05D1  ,\u05D0\u05D0\u05D1\u05D1\u05D2  ,\u05D1\u05D1\u05D1\u05D2</a></b><br /><br />";break;
		/*yod*/		case "\u05D9":div += "<font color=green><b>\u05D9 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L10+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D0\u05D2\u05D5  ,\u05D3\u05D5  ,\u05D0\u05D0\u05D0\u05D6  ,\u05D2\u05D6  ,\u05D0\u05D0\u05D7  ,\u05D1\u05D7  ,\u05D0\u05D8  ,\u05D0\u05D0\u05D0\u05D1\u05D4  ,\u05D0\u05D1\u05D1\u05D4  ,\u05D0\u05D0\u05D2\u05D4  ,\u05D1\u05D2\u05D4  ,\u05D0\u05D3\u05D4  ,\u05D4\u05D4  ,\u05D0\u05D0\u05D1\u05D5  ,\u05D1\u05D1\u05D5  ,\u05D0\u05D2\u05D2\u05D2  ,\u05D0\u05D0\u05D1\u05D1\u05D3  ,\u05D1\u05D1\u05D1\u05D3   ,\u05D0\u05D0\u05D0\u05D2\u05D3  ,\u05D0\u05D1\u05D2\u05D3  ,\u05D2\u05D2\u05D3  ,\u05D0\u05D0\u05D3\u05D3  ,\u05D1\u05D3\u05D3  ,\u05D0\u05D0\u05D0\u05D1\u05D1\u05D2  ,\u05D0\u05D1\u05D1\u05D1\u05D2  ,\u05D0\u05D0\u05D1\u05D2\u05D2  ,\u05D1\u05D1\u05D2\u05D2</a></b><br /><br />";break;
		/*kaf*/		case "\u05DB":div += "<font color=green><b>\u05DB = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L11+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D9\u05D9</a></b><br /><br />";break;
		/*lamed*/	case "\u05DC":div += "<font color=green><b>\u05DC = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L12+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D9\u05D9\u05D9  ,\u05D9\u05DB</a></b><br /><br />";break;
		/*mem*/		case "\u05DE":div += "<font color=green><b>\u05DE = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L13+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05DB\u05DB  ,\u05D9\u05D9\u05DB  ,\u05D9\u05DC</a></b><br /><br />";break;
		/*nun*/		case "\u05E0":div += "<font color=green><b>\u05E0 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L14+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D9\u05D9\u05D9\u05DB  ,\u05D9\u05DB\u05DB  ,\u05D9\u05D9\u05DC  ,\u05DB\u05DC  ,\u05D9\u05DE</a></b><br /><br />";break;
		/*samech*/	case "\u05E1":div += "<font color=green><b>\u05E1 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L15+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D9\u05D9\u05DB\u05DB  ,\u05DB\u05DB\u05DB  ,\u05D9\u05D9\u05D9\u05DC  ,\u05D9\u05DB\u05DC  ,\u05DC\u05DC  ,\u05D9\u05D9\u05DE  ,\u05DB\u05DE  ,\u05D9\u05E0</a></b><br /><br />";break;
		/*ayin*/	case "\u05E2":div += "<font color=green><b>\u05E2 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L16+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D9\u05D9\u05D9\u05DB\u05DB  ,\u05D9\u05DB\u05DB\u05DB  ,\u05DB\u05DB\u05DC  ,\u05D9\u05D9\u05DB\u05DC  ,\u05D9\u05DC\u05DC  ,\u05D9\u05D9\u05D9\u05DE  ,\u05DC\u05DE  ,\u05D9\u05DB\u05DE  ,\u05DB\u05E0 ,\u05D9\u05D9\u05DB  ,\u05D9\u05E1</a></b><br /><br />";break;
		/*pey*/		case "\u05E4":div += "<font color=green><b>\u05E4 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L17+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D9\u05D9\u05DB\u05DE  ,\u05DB\u05DB\u05DE  ,\u05D9\u05DC\u05DE  ,\u05DE\u05DE  ,\u05D9\u05D9\u05D9\u05E0  ,\u05D9\u05DB\u05E0  ,\u05DC\u05E0  ,\u05D9\u05D9\u05E1  ,\u05DB\u05E1  ,\u05D9\u05E2  ,\u05D9\u05D9\u05DB\u05DB\u05DB  ,\u05D9\u05D9\u05DC\u05DC  ,\u05DB\u05DC\u05DC  ,\u05D9\u05D9\u05D9\u05DB\u05DC  ,\u05D9\u05DB\u05DB\u05DC</a></b><br /><br />";break;
		/*tzadi*/	case "\u05E6":div += "<font color=green><b>\u05E6 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L18+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05DB\u05DB\u05E0  ,\u05D9\u05DC\u05DE  ,\u05DE\u05E0  ,\u05D9\u05D9\u05D9\u05E1  ,\u05D9\u05DB\u05E1  ,\u05DC\u05E1  ,\u05D9\u05D9\u05E2  ,\u05DB\u05E2  ,\u05D9\u05E4  ,\u05D9\u05D9\u05D9\u05DC\u05DC  ,\u05D9\u05DB\u05DC\u05DC  ,\u05DC\u05DC\u05DC  ,\u05D9\u05D9\u05D9\u05DB\u05DE  ,\u05D9\u05DE\u05DE  ,\u05D9\u05D9\u05DC\u05DE  ,\u05DB\u05DC\u05DE  ,\u05D9\u05DB\u05DB\u05DE  ,\u05D9\u05D9\u05DB\u05E1  ,\u05D9\u05D9\u05D9\u05DB\u05DB\u05DB  ,\u05D9\u05D9\u05DB\u05DB\u05DC  ,\u05DB\u05DB\u05DB\u05DC</a></b><br /><br />";break;
		/*kuf*/		case "\u05E7":div += "<font color=green><b>\u05E7 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L19+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05D9\u05DC\u05E1  ,\u05DE\u05E1  ,\u05D9\u05D9\u05D9\u05E2  ,\u05DC\u05E2  ,\u05D9\u05D9\u05E4  ,\u05DB\u05E4  ,\u05D9\u05E6  ,\u05D9\u05D9\u05D9\u05DB\u05E0  ,\u05D9\u05DB\u05DB\u05E0  ,\u05D9\u05D9\u05DC\u05E0  ,\u05DB\u05DC\u05E0  ,\u05D9\u05DE\u05E0  ,\u05E0\u05E0  ,\u05D9\u05D9\u05DB\u05E1  ,\u05DB\u05DB\u05E1  ,\u05D9\u05DC\u05DC\u05DC  ,\u05D9\u05D9\u05DB\u05DB\u05DE  ,\u05DB\u05DB\u05DB\u05DE   ,\u05D9\u05D9\u05D9\u05DC\u05DE  ,\u05D9\u05DB\u05DC\u05DE  ,\u05DC\u05DC\u05DE  ,\u05D9\u05D9\u05DE\u05DE  ,\u05DB\u05DE\u05DE  ,\u05D9\u05D9\u05D9\u05DB\u05DB\u05DC  ,\u05D9\u05DB\u05DB\u05DB\u05DC  ,\u05D9\u05D9\u05DB\u05DC\u05DC  ,\u05DB\u05DB\u05DC\u05DC</a></b><br /><br />";break;
		/*resh*/	case "\u05E8":div += "<font color=green><b>\u05E8 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L20+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05E7\u05E7</a></b><br /><br />";break;
		/*shin*/	case "\u05E9":div += "<font color=green><b>\u05E9 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L21+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05E7\u05E7\u05E7  ,\u05E7\u05E8</a></b><br /><br />";break;
		/*tav*/		case "\u05EA":div += "<font color=green><b>\u05EA = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L22+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05E8\u05E8  ,\u05E7\u05E7\u05E8  ,\u05E7\u05E9</a></b><br /><br />";break;
		/*kaf F*/	case "\u05DA":div += "<font color=green><b>\u05DA = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L23+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05E7\u05E7\u05E7\u05E8  ,\u05E7\u05E8\u05E8  ,\u05E7\u05E7\u05E9  ,\u05E8\u05E9  ,\u05E7\u05EA</a></b><br /><br />";break;
		/*mem F*/	case "\u05DD":div += "<font color=green><b>\u05DD = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L24+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05E7\u05E7\u05E8\u05E8  ,\u05E8\u05E8\u05E8  ,\u05E7\u05E7\u05E7\u05E9  ,\u05E7\u05E8\u05E9  ,\u05E9\u05E9  ,\u05E7\u05E7\u05EA  ,\u05E8\u05EA  ,\u05E7\u05DA</a></b><br /><br />";break;
		/*nun F*/	case "\u05DF":div += "<font color=green><b>\u05DF = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L25+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05E7\u05E7\u05E7\u05E8\u05E8  ,\u05E7\u05E8\u05E8\u05E8  ,\u05E8\u05E8\u05E9  ,\u05E7\u05E7\u05E8\u05E9  ,\u05E7\u05E9\u05E9  ,\u05E7\u05E7\u05E7\u05EA  ,\u05E9\u05EA  ,\u05E7\u05E8\u05EA  ,\u05E8\u05DA  ,\u05E7\u05E7\u05E8  ,\u05E7\u05DD</a></b><br /><br />";break;
		/*pey F*/	case "\u05E3":div += "<font color=green><b>\u05E3 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L26+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05E7\u05E7\u05E8\u05EA  ,\u05E8\u05E8\u05EA  ,\u05E7\u05E9\u05EA  ,\u05EA\u05EA  ,\u05E7\u05E7\u05E7\u05DA  ,\u05E7\u05E8\u05DA  ,\u05E9\u05DA  ,\u05E7\u05E7\u05DD  ,\u05E8\u05DD  ,\u05E7\u05DF  ,\u05E7\u05E7\u05E8\u05E8\u05E8  ,\u05E7\u05E7\u05E9\u05E9  ,\u05E8\u05E9\u05E9  ,\u05E7\u05E7\u05E7\u05E8\u05E9  ,\u05E7\u05E8\u05E8\u05E9</a></b><br /><br />";break;
		/*tzadi F*/	case "\u05E5":div += "<font color=green><b>\u05E5 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L27+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05E8\u05E8\u05DA  ,\u05E7\u05E9\u05EA  ,\u05EA\u05DA  ,\u05E7\u05E7\u05E7\u05DD  ,\u05E7\u05E8\u05DD  ,\u05E9\u05DD  ,\u05E7\u05E7\u05DF  ,\u05E8\u05DF  ,\u05E7\u05E3  ,\u05E7\u05E7\u05E7\u05E9\u05E9  ,\u05E7\u05E8\u05E9\u05E9  ,\u05E9\u05E9\u05E9  ,\u05E7\u05E7\u05E7\u05E8\u05EA  ,\u05E7\u05EA\u05EA  ,\u05E7\u05E7\u05E9\u05EA  ,\u05E8\u05E9\u05EA  ,\u05E7\u05E8\u05E8\u05EA  ,\u05E7\u05E7\u05E8\u05DD  ,\u05E7\u05E7\u05E7\u05E8\u05E8\u05E8  ,\u05E7\u05E7\u05E8\u05E8\u05E9  ,\u05E8\u05E8\u05E8\u05E9</a></b><br /><br />";break;
		/*aleph*/	case "\u05E7":div += "<font color=green><b>\u05E7 = </b></font><a href='http://www.biblewheel.com/GR/GR_Database.php?SearchBy_Gematria="+L01+"&SearchByNum=Go' style='text-decoration: none; color: white;' target='_blank'><b>\u05E7\u05E9\u05DD  ,\u05EA\u05DD  ,\u05E7\u05E7\u05E7\u05DF  ,\u05E9\u05DF  ,\u05E7\u05E7\u05E3  ,\u05E8\u05E3  ,\u05E7\u05E5  ,\u05E7\u05E7\u05E7\u05E8\u05DA  ,\u05E7\u05E8\u05E8\u05DA  ,\u05E7\u05E7\u05E9\u05DA  ,\u05E8\u05E9\u05DA  ,\u05E7\u05EA\u05DA  ,\u05DA\u05DA  ,\u05E7\u05E7\u05E8\u05DD  ,\u05E8\u05E8\u05DD  ,\u05E7\u05E9\u05E9\u05E9  ,\u05E7\u05E7\u05E8\u05E8\u05EA  ,\u05E8\u05E8\u05E8\u05EA   ,\u05E7\u05E7\u05E7\u05E9\u05EA  ,\u05E7\u05E8\u05E9\u05EA  ,\u05E9\u05E9\u05EA  ,\u05E7\u05E7\u05EA\u05EA  ,\u05E8\u05EA\u05EA  ,\u05E7\u05E7\u05E7\u05E8\u05E8\u05E9  ,\u05E7\u05E8\u05E8\u05E8\u05E9  ,\u05E7\u05E7\u05E8\u05E9\u05E9  ,\u05E8\u05E8\u05E9\u05E9</a></b><br /><br />";break;
	}
document.getElementById('div').innerHTML = div;
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//																																													//
//																																													//
//																																													//
//																			SPELLING METHODS OF HEBREW LETTERS																		//
//																																													//
//																																													//
//																																													//
//																																													//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// AB Method
for (var i=0; i < alphas.length; i++){
	switch(array[i]){
		/*aleph*/	case "\u05D0":wordAB += "<font color='#FFFFFF'>&#x05D0&#x05DC&#x05E3 </font><br />";			textAB += "אלף ";		gematriaAB += L01+L12+L26;		break;		
		/*bet*/		case "\u05D1":wordAB += "<font color='#FFFFFF'>&#x05D1&#x05D9&#x05EA </font><br />";			textAB += "בית ";		gematriaAB += L02+L10+L22;		break;		
		/*gimel*/	case "\u05D2":wordAB += "<font color='#FFFFFF'>&#x05D2&#x05D9&#x05DE&#x05DC </font><br />";		textAB += "גימל ";		gematriaAB += L03+L10+L13+L12;	break;	
		/*dalet*/	case "\u05D3":wordAB += "<font color='#FFFFFF'>&#x05D3&#x05DC&#x05EA </font><br />";			textAB += "דלת ";		gematriaAB += L04+L12+L22;		break;		
		/*hey*/		case "\u05D4":wordAB += "<font color='#FFFFFF'>&#x05D4&#x05D9 </font><br />";					textAB += "הי ";		gematriaAB += L05+L10;			break;			
		/*vav*/		case "\u05D5":wordAB += "<font color='#FFFFFF'>&#x05D5&#x05D9&#x05D5 </font><br />";			textAB += "ויו ";		gematriaAB += L06+L10+L06;		break;		
		/*zayin*/	case "\u05D6":wordAB += "<font color='#FFFFFF'>&#x05D6&#x05D9&#x05DF </font><br />";			textAB += "זין ";		gematriaAB += L07+L10+L25;		break;		
		/*chet*/	case "\u05D7":wordAB += "<font color='#FFFFFF'>&#x05D7&#x05D9&#x05EA </font><br />";			textAB += "חית ";		gematriaAB += L08+L10+L22;		break;		
		/*tet*/		case "\u05D8":wordAB += "<font color='#FFFFFF'>&#x05D8&#x05D9&#x05EA </font><br />";			textAB += "טית ";		gematriaAB += L09+L10+L22;		break;		
		/*yod*/		case "\u05D9":wordAB += "<font color='#FFFFFF'>&#x05D9&#x05D5&#x05D3 </font><br />";			textAB += "יוד ";		gematriaAB += L10+L06+L04;		break;		
		/*kaf*/		case "\u05DB":wordAB += "<font color='#FFFFFF'>&#x05DB&#x05E3 </font><br />";					textAB += "כף ";		gematriaAB += L11+L26;			break;			
		/*lamed*/	case "\u05DC":wordAB += "<font color='#FFFFFF'>&#x05DC&#x05DE&#x05D3 </font><br />";			textAB += "למד ";		gematriaAB += L12+L13+L04;		break;		
		/*mem*/		case "\u05DE":wordAB += "<font color='#FFFFFF'>&#x05DD&#x05DE </font><br />";					textAB += "מם ";		gematriaAB += L13+L24;			break;			
		/*nun*/		case "\u05E0":wordAB += "<font color='#FFFFFF'>&#x05E0&#x05D5&#x05DF </font><br />";			textAB += "נון ";		gematriaAB += L14+L06+L25;		break;		
		/*samech*/	case "\u05E1":wordAB += "<font color='#FFFFFF'>&#x05E1&#x05DE&#x05DA </font><br />";			textAB += "סמך ";		gematriaAB += L15+L13+L23;		break;		
		/*ayin*/	case "\u05E2":wordAB += "<font color='#FFFFFF'>&#x05E2&#x05D9&#x05DF </font><br />";			textAB += "עין ";		gematriaAB += L16+L10+L25;		break;		
		/*pey*/		case "\u05E4":wordAB += "<font color='#FFFFFF'>&#x05E4&#x05D0 </font><br />";					textAB += "פא ";		gematriaAB += L17+L01;			break;			
		/*tzadi*/	case "\u05E6":wordAB += "<font color='#FFFFFF'>&#x05E6&#x05D3&#x05D9 </font><br />";			textAB += "צדי ";		gematriaAB += L18+L04+L10;		break;		
		/*kuf*/		case "\u05E7":wordAB += "<font color='#FFFFFF'>&#x05E7&#x05D5&#x05E3 </font><br />";			textAB += "קוף ";		gematriaAB += L19+L06+L26;		break;		
		/*resh*/	case "\u05E8":wordAB += "<font color='#FFFFFF'>&#x05E8&#x05D9&#x05E9 </font><br />";			textAB += "ריש ";		gematriaAB += L20+L10+L21;		break;		
		/*shin*/	case "\u05E9":wordAB += "<font color='#FFFFFF'>&#x05E9&#x05D9&#x05DF </font><br />";			textAB += "שין ";		gematriaAB += L21+L10+L25;		break;		
		/*tav*/		case "\u05EA":wordAB += "<font color='#FFFFFF'>&#x05EA&#x05D9&#x05D5 </font><br />";			textAB += "תיו ";		gematriaAB += L22+L10+L06;		break;		
		/*kaf F*/	case "\u05DA":wordAB += "<font color='#FFFFFF'>&#x05DB&#x05E3 </font><br />";					textAB += "כף ";		gematriaAB += L11+L26;			break;			
		/*mem F*/	case "\u05DD":wordAB += "<font color='#FFFFFF'>&#x05DD&#x05DE </font><br />";					textAB += "מם ";		gematriaAB += L13+L24;			break;			
		/*nun F*/	case "\u05DF":wordAB += "<font color='#FFFFFF'>&#x05E0&#x05D5&#x05DF </font><br />";			textAB += "נון ";		gematriaAB += L14+L06+L25;		break;		
		/*pey F*/	case "\u05E3":wordAB += "<font color='#FFFFFF'>&#x05E4&#x05D0 </font><br />";					textAB += "פא ";		gematriaAB += L17+L01;			break;			
		/*tzadi F*/	case "\u05E5":wordAB += "<font color='#FFFFFF'>&#x05E6&#x05D3&#x05D9 </font><br />";			textAB += "צדי ";		gematriaAB += L18+L04+L10;		break;		
		default:letter = "";break;
	}
}
// SaG Method
for (var i=0; i < alphas.length; i++){
	switch(array[i]){
		/*aleph*/	case "\u05D0":wordSaG += "<font color='#FFFFFF'>&#x05D0&#x05DC&#x05E3 </font><br />";			textSaG += "אלף ";		gematriaSaG += L01+L12+L26;		break;		
		/*bet*/		case "\u05D1":wordSaG += "<font color='#FFFFFF'>&#x05D1&#x05D9&#x05EA </font><br />";			textSaG += "בית ";		gematriaSaG += L02+L10+L22;		break;		
		/*gimel*/	case "\u05D2":wordSaG += "<font color='#FFFFFF'>&#x05D2&#x05D9&#x05DE&#x05DC </font><br />";	textSaG += "גימל ";		gematriaSaG += L03+L10+L13+L12;	break;	
		/*dalet*/	case "\u05D3":wordSaG += "<font color='#FFFFFF'>&#x05D3&#x05DC&#x05EA </font><br />";			textSaG += "דלת ";		gematriaSaG += L04+L12+L22;		break;		
		/*hey*/		case "\u05D4":wordSaG += "<font color='#FFFFFF'>&#x05D4&#x05D9 </font><br />";					textSaG += "הי ";		gematriaSaG += L05+L10;			break;			
		/*vav*/		case "\u05D5":wordSaG += "<font color='#FFFFFF'>&#x05D5&#x05D0&#x05D5 </font><br />";			textSaG += "ואו ";		gematriaSaG += L06+L01+L06;		break;		
		/*zayin*/	case "\u05D6":wordSaG += "<font color='#FFFFFF'>&#x05D6&#x05D9&#x05DF </font><br />";			textSaG += "זין ";		gematriaSaG += L07+L10+L25;		break;		
		/*chet*/	case "\u05D7":wordSaG += "<font color='#FFFFFF'>&#x05D7&#x05D9&#x05EA </font><br />";			textSaG += "חית ";		gematriaSaG += L08+L10+L22;		break;		
		/*tet*/		case "\u05D8":wordSaG += "<font color='#FFFFFF'>&#x05D8&#x05D9&#x05EA </font><br />";			textSaG += "טית ";		gematriaSaG += L09+L10+L22;		break;		
		/*yod*/		case "\u05D9":wordSaG += "<font color='#FFFFFF'>&#x05D9&#x05D5&#x05D3 </font><br />";			textSaG += "יוד ";		gematriaSaG += L10+L06+L04;		break;		
		/*kaf*/		case "\u05DB":wordSaG += "<font color='#FFFFFF'>&#x05DB&#x05E3 </font><br />";					textSaG += "כף ";		gematriaSaG += L11+L26;			break;			
		/*lamed*/	case "\u05DC":wordSaG += "<font color='#FFFFFF'>&#x05DC&#x05DE&#x05D3 </font><br />";			textSaG += "למד ";		gematriaSaG += L12+L13+L04;		break;		
		/*mem*/		case "\u05DE":wordSaG += "<font color='#FFFFFF'>&#x05DD&#x05DE </font><br />";					textSaG += "מם";		gematriaSaG += L13+L24;			break;			
		/*nun*/		case "\u05E0":wordSaG += "<font color='#FFFFFF'>&#x05E0&#x05D5&#x05DF </font><br />";			textSaG += "נון ";		gematriaSaG += L14+L06+L25;		break;		
		/*samech*/	case "\u05E1":wordSaG += "<font color='#FFFFFF'>&#x05E1&#x05DE&#x05DA </font><br />";			textSaG += "סמך ";		gematriaSaG += L15+L13+L23;		break;		
		/*ayin*/	case "\u05E2":wordSaG += "<font color='#FFFFFF'>&#x05E2&#x05D9&#x05DF </font><br />";			textSaG += "עין ";		gematriaSaG += L16+L10+L25;		break;		
		/*pey*/		case "\u05E4":wordSaG += "<font color='#FFFFFF'>&#x05E4&#x05D0 </font><br />";					textSaG += "פא ";		gematriaSaG += L17+L01;			break;			
		/*tzadi*/	case "\u05E6":wordSaG += "<font color='#FFFFFF'>&#x05E6&#x05D3&#x05D9 </font><br />";			textSaG += "צדי ";		gematriaSaG += L18+L04+L10;		break;		
		/*kuf*/		case "\u05E7":wordSaG += "<font color='#FFFFFF'>&#x05E7&#x05D5&#x05E3 </font><br />";			textSaG += "קוף ";		gematriaSaG += L19+L06+L26;		break;		
		/*resh*/	case "\u05E8":wordSaG += "<font color='#FFFFFF'>&#x05E8&#x05D9&#x05E9 </font><br />";			textSaG += "ריש ";		gematriaSaG += L20+L10+L21;		break;		
		/*shin*/	case "\u05E9":wordSaG += "<font color='#FFFFFF'>&#x05E9&#x05D9&#x05DF </font><br />";			textSaG += "שין ";		gematriaSaG += L21+L10+L25;		break;		
		/*tav*/		case "\u05EA":wordSaG += "<font color='#FFFFFF'>&#x05EA&#x05D9&#x05D5 </font><br />";			textSaG += "תיו ";		gematriaSaG += L22+L10+L06;		break;		
		/*kaf F*/	case "\u05DA":wordSaG += "<font color='#FFFFFF'>&#x05DB&#x05E3 </font><br />";					textSaG += "כף ";		gematriaSaG += L11+L26;			break;			
		/*mem F*/	case "\u05DD":wordSaG += "<font color='#FFFFFF'>&#x05DD&#x05DE </font><br />";					textSaG += "מם ";		gematriaSaG += L13+L24;			break;			
		/*nun F*/	case "\u05DF":wordSaG += "<font color='#FFFFFF'>&#x05E0&#x05D5&#x05DF </font><br />";			textSaG += "נון ";		gematriaSaG += L14+L06+L25;		break;		
		/*pey F*/	case "\u05E3":wordSaG += "<font color='#FFFFFF'>&#x05E4&#x05D0 </font><br />";					textSaG += "פא ";		gematriaSaG += L17+L01;			break;			
		/*tzadi F*/	case "\u05E5":wordSaG += "<font color='#FFFFFF'>&#x05E6&#x05D3&#x05D9 </font><br />";			textSaG += "צדי ";		gematriaSaG += L18+L04+L10;		break;		
		default:letter = "";break;
	}
}
// MaH Method
for (var i=0; i < alphas.length; i++){
	switch(array[i]){
		/*aleph*/	case "\u05D0":wordMaH += "<font color='#FFFFFF'>&#x05D0&#x05DC&#x05E3 </font><br />";			textMaH += "אלף ";		gematriaMaH += L01+L12+L26;		break;		
		/*bet*/		case "\u05D1":wordMaH += "<font color='#FFFFFF'>&#x05D1&#x05D9&#x05EA </font><br />";			textMaH += "בית ";		gematriaMaH += L02+L10+L22;		break;		
		/*gimel*/	case "\u05D2":wordMaH += "<font color='#FFFFFF'>&#x05D2&#x05D9&#x05DE&#x05DC </font><br />";	textMaH += "גימל ";		gematriaMaH += L03+L10+L13+L12;	break;	
		/*dalet*/	case "\u05D3":wordMaH += "<font color='#FFFFFF'>&#x05D3&#x05DC&#x05EA </font><br />";			textMaH += "דלת ";		gematriaMaH += L04+L12+L22;		break;		
		/*hey*/		case "\u05D4":wordMaH += "<font color='#FFFFFF'>&#x05D4&#x05D0 </font><br />";					textMaH += "הא ";		gematriaMaH += L05+L01;			break;			
		/*vav*/		case "\u05D5":wordMaH += "<font color='#FFFFFF'>&#x05D5&#x05D0&#x05D5 </font><br />";			textMaH += "ואו ";		gematriaMaH += L06+L01+L06;		break;		
		/*zayin*/	case "\u05D6":wordMaH += "<font color='#FFFFFF'>&#x05D6&#x05D9&#x05DF </font><br />";			textMaH += "זין ";		gematriaMaH += L07+L10+L25;		break;		
		/*chet*/	case "\u05D7":wordMaH += "<font color='#FFFFFF'>&#x05D7&#x05D9&#x05EA </font><br />";			textMaH += "חית ";		gematriaMaH += L08+L10+L22;		break;		
		/*tet*/		case "\u05D8":wordMaH += "<font color='#FFFFFF'>&#x05D8&#x05D9&#x05EA </font><br />";			textMaH += "טית ";		gematriaMaH += L09+L10+L22;		break;		
		/*yod*/		case "\u05D9":wordMaH += "<font color='#FFFFFF'>&#x05D9&#x05D5&#x05D3 </font><br />";			textMaH += "יוד ";		gematriaMaH += L10+L06+L04;		break;		
		/*kaf*/		case "\u05DB":wordMaH += "<font color='#FFFFFF'>&#x05DB&#x05E3 </font><br />";					textMaH += "כף ";		gematriaMaH += L11+L26;			break;			
		/*lamed*/	case "\u05DC":wordMaH += "<font color='#FFFFFF'>&#x05DC&#x05DE&#x05D3 </font><br />";			textMaH += "למד ";		gematriaMaH += L12+L13+L04;		break;		
		/*mem*/		case "\u05DE":wordMaH += "<font color='#FFFFFF'>&#x05DD&#x05DE </font><br />";					textMaH += "מם ";		gematriaMaH += L13+L24;			break;			
		/*nun*/		case "\u05E0":wordMaH += "<font color='#FFFFFF'>&#x05E0&#x05D5&#x05DF </font><br />";			textMaH += "נון ";		gematriaMaH += L14+L06+L25;		break;		
		/*samech*/	case "\u05E1":wordMaH += "<font color='#FFFFFF'>&#x05E1&#x05DE&#x05DA </font><br />";			textMaH += "סמך ";		gematriaMaH += L15+L13+L23;		break;		
		/*ayin*/	case "\u05E2":wordMaH += "<font color='#FFFFFF'>&#x05E2&#x05D9&#x05DF </font><br />";			textMaH += "עין ";		gematriaMaH += L16+L10+L25;		break;		
		/*pey*/		case "\u05E4":wordMaH += "<font color='#FFFFFF'>&#x05E4&#x05D0 </font><br />";					textMaH += "פא ";		gematriaMaH += L17+L01;			break;			
		/*tzadi*/	case "\u05E6":wordMaH += "<font color='#FFFFFF'>&#x05E6&#x05D3&#x05D9 </font><br />";			textMaH += "צדי ";		gematriaMaH += L18+L04+L10;		break;		
		/*kuf*/		case "\u05E7":wordMaH += "<font color='#FFFFFF'>&#x05E7&#x05D5&#x05E3 </font><br />";			textMaH += "קוף ";		gematriaMaH += L19+L06+L26;		break;		
		/*resh*/	case "\u05E8":wordMaH += "<font color='#FFFFFF'>&#x05E8&#x05D9&#x05E9 </font><br />";			textMaH += "ריש ";		gematriaMaH += L20+L10+L21;		break;		
		/*shin*/	case "\u05E9":wordMaH += "<font color='#FFFFFF'>&#x05E9&#x05D9&#x05DF </font><br />";			textMaH += "שין ";		gematriaMaH += L21+L10+L25;		break;		
		/*tav*/		case "\u05EA":wordMaH += "<font color='#FFFFFF'>&#x05EA&#x05D5 </font><br />";					textMaH += "תו ";		gematriaMaH += L22+L06;			break;			
		/*kaf F*/	case "\u05DA":wordMaH += "<font color='#FFFFFF'>&#x05DB&#x05E3 </font><br />";					textMaH += "כף ";		gematriaMaH += L11+L26;			break;			
		/*mem F*/	case "\u05DD":wordMaH += "<font color='#FFFFFF'>&#x05DD&#x05DE </font><br />";					textMaH += "מם ";		gematriaMaH += L13+L24;			break;			
		/*nun F*/	case "\u05DF":wordMaH += "<font color='#FFFFFF'>&#x05E0&#x05D5&#x05DF </font><br />";			textMaH += "נון ";		gematriaMaH += L14+L06+L25;		break;		
		/*pey F*/	case "\u05E3":wordMaH += "<font color='#FFFFFF'>&#x05E4&#x05D0 </font><br />";					textMaH += "פא ";		gematriaMaH += L17+L01;			break;			
		/*tzadi F*/	case "\u05E5":wordMaH += "<font color='#FFFFFF'>&#x05E6&#x05D3&#x05D9 </font><br />";			textMaH += "צדי ";		gematriaMaH += L18+L04+L10;		break;		
		default:letter = "";break;
	}
}
// BaN Method
for (var i=0; i < alphas.length; i++){
	switch(array[i]){
		/*aleph*/	case "\u05D0":wordBaN += "<font color='#FFFFFF'>&#x05D0&#x05DC&#x05E3 </font><br />";			textBaN += "אלף ";		gematriaBaN += L01+L12+L26;		break;		
		/*bet*/		case "\u05D1":wordBaN += "<font color='#FFFFFF'>&#x05D1&#x05D9&#x05EA </font><br />";			textBaN += "בית ";		gematriaBaN += L02+L10+L22;		break;		
		/*gimel*/	case "\u05D2":wordBaN += "<font color='#FFFFFF'>&#x05D2&#x05D9&#x05DE&#x05DC </font><br />";	textBaN += "גימל ";		gematriaBaN += L03+L10+L13+L12;	break;	
		/*dalet*/	case "\u05D3":wordBaN += "<font color='#FFFFFF'>&#x05D3&#x05DC&#x05EA </font><br />";			textBaN += "דלת ";		gematriaBaN += L04+L12+L22;		break;		
		/*zayin*/	case "\u05D6":wordBaN += "<font color='#FFFFFF'>&#x05D6&#x05D9&#x05DF </font><br />";			textBaN += "זין ";		gematriaBaN += L07+L10+L25;		break;		
		/*hey*/		case "\u05D4":wordBaN += "<font color='#FFFFFF'>&#x05D4&#x05D4 </font><br />";					textBaN += "הה ";		gematriaBaN += L05+L05;			break;			
		/*vav*/		case "\u05D5":wordBaN += "<font color='#FFFFFF'>&#x05D5&#x05D5 </font><br />";					textBaN += "וו ";		gematriaBaN += L06+L06;			break;			
		/*chet*/	case "\u05D7":wordBaN += "<font color='#FFFFFF'>&#x05D7&#x05D9&#x05EA </font><br />";			textBaN += "חית ";		gematriaBaN += L08+L10+L22;		break;		
		/*tet*/		case "\u05D8":wordBaN += "<font color='#FFFFFF'>&#x05D8&#x05D9&#x05EA </font><br />";			textBaN += "טית ";		gematriaBaN += L09+L10+L22;		break;		
		/*yod*/		case "\u05D9":wordBaN += "<font color='#FFFFFF'>&#x05D9&#x05D5&#x05D3 </font><br />";			textBaN += "יוד ";		gematriaBaN += L10+L06+L04;		break;		
		/*kaf*/		case "\u05DB":wordBaN += "<font color='#FFFFFF'>&#x05DB&#x05E3 </font><br />";					textBaN += "כף ";		gematriaBaN += L11+L26;			break;			
		/*lamed*/	case "\u05DC":wordBaN += "<font color='#FFFFFF'>&#x05DC&#x05DE&#x05D3 </font><br />";			textBaN += "למד ";		gematriaBaN += L12+L13+L04;		break;		
		/*mem*/		case "\u05DE":wordBaN += "<font color='#FFFFFF'>&#x05DD&#x05DE </font><br />";					textBaN += "מם ";		gematriaBaN += L13+L24;			break;			
		/*nun*/		case "\u05E0":wordBaN += "<font color='#FFFFFF'>&#x05E0&#x05D5&#x05DF </font><br />";			textBaN += "נון ";		gematriaBaN += L14+L06+L25;		break;		
		/*samech*/	case "\u05E1":wordBaN += "<font color='#FFFFFF'>&#x05E1&#x05DE&#x05DA </font><br />";			textBaN += "סמך ";		gematriaBaN += L15+L13+L23;		break;		
		/*ayin*/	case "\u05E2":wordBaN += "<font color='#FFFFFF'>&#x05E2&#x05D9&#x05DF </font><br />";			textBaN += "עין ";		gematriaBaN += L16+L10+L25;		break;		
		/*pey*/		case "\u05E4":wordBaN += "<font color='#FFFFFF'>&#x05E4&#x05D4 </font><br />";					textBaN += "פה ";		gematriaBaN += L17+L05;			break;			
		/*tzadi*/	case "\u05E6":wordBaN += "<font color='#FFFFFF'>&#x05E6&#x05D3&#x05D9 </font><br />";			textBaN += "צדי ";		gematriaBaN += L18+L04+L10;		break;		
		/*kuf*/		case "\u05E7":wordBaN += "<font color='#FFFFFF'>&#x05E7&#x05D5&#x05E3 </font><br />";			textBaN += "קוף ";		gematriaBaN += L19+L06+L26;		break;		
		/*resh*/	case "\u05E8":wordBaN += "<font color='#FFFFFF'>&#x05E8&#x05D9&#x05E9 </font><br />";			textBaN += "ריש ";		gematriaBaN += L20+L10+L21;		break;		
		/*shin*/	case "\u05E9":wordBaN += "<font color='#FFFFFF'>&#x05E9&#x05D9&#x05DF </font><br />";			textBaN += "שין ";		gematriaBaN += L21+L10+L25;		break;		
		/*tav*/		case "\u05EA":wordBaN += "<font color='#FFFFFF'>&#x05EA&#x05D5 </font><br />";					textBaN += "תו ";		gematriaBaN += L22+L06;			break;			
		/*kaf F*/	case "\u05DA":wordBaN += "<font color='#FFFFFF'>&#x05DB&#x05E3 </font><br />";					textBaN += "כף ";		gematriaBaN += L11+L26;			break;			
		/*mem F*/	case "\u05DD":wordBaN += "<font color='#FFFFFF'>&#x05DD&#x05DE </font><br />";					textBaN += "מם ";		gematriaBaN += L13+L24;			break;			
		/*nun F*/	case "\u05DF":wordBaN += "<font color='#FFFFFF'>&#x05E0&#x05D5&#x05DF </font><br />";			textBaN += "נון ";		gematriaBaN += L14+L06+L25;		break;		
		/*pey F*/	case "\u05E3":wordBaN += "<font color='#FFFFFF'>&#x05E4&#x05D4 </font><br />";					textBaN += "פה ";		gematriaBaN += L17+L05;			break;			
		/*tzadi F*/	case "\u05E5":wordBaN += "<font color='#FFFFFF'>&#x05E6&#x05D3&#x05D9 </font><br />";			textBaN += "צדי ";		gematriaBaN += L18+L04+L10;		break;		
		default:letter = "";break;
	}
}

// Use the spelling method that the user has selected from the dropdown menu
if (spelling == "AB"){
word = wordAB;
gematriaMiluy = gematriaAB;
}
else if (spelling == "SaG"){
word = wordSaG;
gematriaMiluy = gematriaSaG;
}
else if (spelling == "MaH"){
word = wordMaH;
gematriaMiluy = gematriaMaH;
}
else if (spelling == "BaN"){
word = wordBaN;
gematriaMiluy = gematriaBaN;
}

// IF statement will decide which type of algorithm to use base of the encryption selected.
if( cryptography == "AL-BaM" ){
	for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":gematria1 += L01;letter = "\u05DC";gematria2 += L12;break;	// lamed
			/*bet*/		case "\u05D1":gematria1 += L02;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*gimel*/	case "\u05D2":gematria1 += L03;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*dalet*/	case "\u05D3":gematria1 += L04;letter = "\u05E1";gematria2 += L15;break;	// samech
			/*hey*/		case "\u05D4":gematria1 += L05;letter = "\u05E2";gematria2 += L16;break;	// ayin
			/*vav*/		case "\u05D5":gematria1 += L06;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*zayin*/	case "\u05D6":gematria1 += L07;letter = "\u05E6";gematria2 += L18;break;	// tzadi
			/*chet*/	case "\u05D7":gematria1 += L08;letter = "\u05E7";gematria2 += L19;break;	// kuf
			/*tet*/		case "\u05D8":gematria1 += L09;letter = "\u05E8";gematria2 += L20;break;	// resh
			/*yod*/		case "\u05D9":gematria1 += L10;letter = "\u05E9";gematria2 += L21;break;	// shin
			/*kaf*/		case "\u05DB":gematria1 += L11;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*lamed*/	case "\u05DC":gematria1 += L12;letter = "\u05D0";gematria2 += L01;break;	// aleph
			/*mem*/		case "\u05DE":gematria1 += L13;letter = "\u05D1";gematria2 += L02;break;	// bet
			/*nun*/		case "\u05E0":gematria1 += L14;letter = "\u05D2";gematria2 += L03;break;	// gimel
			/*samech*/	case "\u05E1":gematria1 += L15;letter = "\u05D3";gematria2 += L04;break;	// dalet
			/*ayin*/	case "\u05E2":gematria1 += L16;letter = "\u05D4";gematria2 += L05;break;	// hey
			/*pey*/		case "\u05E4":gematria1 += L17;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*tzadi*/	case "\u05E6":gematria1 += L18;letter = "\u05D6";gematria2 += L07;break;	// zayin
			/*kuf*/		case "\u05E7":gematria1 += L19;letter = "\u05D7";gematria2 += L08;break;	// chet
			/*resh*/	case "\u05E8":gematria1 += L20;letter = "\u05D8";gematria2 += L09;break;	// tet
			/*shin*/	case "\u05E9":gematria1 += L21;letter = "\u05D9";gematria2 += L10;break;	// yod
			/*tav*/		case "\u05EA":gematria1 += L22;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*kaf F*/	case "\u05DA":gematria1 += L23;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*mem F*/	case "\u05DD":gematria1 += L24;letter = "\u05D1";gematria2 += L02;break;	// bet
			/*nun F*/	case "\u05DF":gematria1 += L25;letter = "\u05D2";gematria2 += L03;break;	// gimel
			/*pey F*/	case "\u05E3":gematria1 += L26;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*tzadi F*/	case "\u05E5":gematria1 += L27;letter = "\u05D6";gematria2 += L07;break;	// zayin
			default:letter = "";break;
		}
		cryptography2 += letter;
		
		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
				default:letter = "";break;
			}
			cryptography2 += letter;
		}
	}
	if(gematria == "HaKlali"){
	gematria1 = gematria1*gematria1;
	gematria2 = gematria2*gematria2;
	}
	else if(gematria == "Kolel"){
	gematria1 += letterCount;
	gematria2 += letterCount;
	}
	else if(gematria == "Kolel +1"){
	gematria1 += wordCount;
	gematria2 += wordCount;
	}
	else if (gematria == "IntegralReduced"){
	while(gematria1 >= 10){
	product1 = Math.floor(gematria1 / 10);
	remainder1 = gematria1 % 10;
	gematria1 = remainder1 + product1;}
	while(gematria2 >= 10){
	product2 = Math.floor(gematria2 / 10);
	remainder2 = gematria2 % 10;
	gematria2 = remainder2 + product2;}
	}
}
else if( cryptography == "AT-BaSh" ){
	for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":gematria1 += L01;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*bet*/		case "\u05D1":gematria1 += L02;letter = "\u05E9";gematria2 += L21;break;	// shin
			/*gimel*/	case "\u05D2":gematria1 += L03;letter = "\u05E8";gematria2 += L20;break;	// resh
			/*dalet*/	case "\u05D3":gematria1 += L04;letter = "\u05E7";gematria2 += L19;break;	// kuf
			/*hey*/		case "\u05D4":gematria1 += L05;letter = "\u05E6";gematria2 += L18;break;	// tzadi
			/*vav*/		case "\u05D5":gematria1 += L06;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*zayin*/	case "\u05D6":gematria1 += L07;letter = "\u05E2";gematria2 += L16;break;	// ayin
			/*chet*/	case "\u05D7":gematria1 += L08;letter = "\u05E1";gematria2 += L15;break;	// samech
			/*tet*/		case "\u05D8":gematria1 += L09;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*yod*/		case "\u05D9":gematria1 += L10;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*kaf*/		case "\u05DB":gematria1 += L11;letter = "\u05DC";gematria2 += L12;break;	// lamed
			/*lamed*/	case "\u05DC":gematria1 += L12;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*mem*/		case "\u05DE":gematria1 += L13;letter = "\u05D9";gematria2 += L10;break;	// yod
			/*nun*/		case "\u05E0":gematria1 += L14;letter = "\u05D8";gematria2 += L09;break;	// tet
			/*samech*/	case "\u05E1":gematria1 += L15;letter = "\u05D7";gematria2 += L08;break;	// chet
			/*ayin*/	case "\u05E2":gematria1 += L16;letter = "\u05D6";gematria2 += L07;break;	// zayin
			/*pey*/		case "\u05E4":gematria1 += L17;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*tzadi*/	case "\u05E6":gematria1 += L18;letter = "\u05D4";gematria2 += L05;break;	// hey
			/*kuf*/		case "\u05E7":gematria1 += L19;letter = "\u05D3";gematria2 += L04;break;	// dalet
			/*resh*/	case "\u05E8":gematria1 += L20;letter = "\u05D2";gematria2 += L03;break;	// gimel
			/*shin*/	case "\u05E9":gematria1 += L21;letter = "\u05D1";gematria2 += L02;break;	// bet
			/*tav*/		case "\u05EA":gematria1 += L22;letter = "\u05D0";gematria2 += L01;break;	// aleph
			/*kaf F*/	case "\u05DA":gematria1 += L23;letter = "\u05DC";gematria2 += L12;break;	// lamed
			/*mem F*/	case "\u05DD":gematria1 += L24;letter = "\u05D9";gematria2 += L10;break;	// yod
			/*nun F*/	case "\u05DF":gematria1 += L25;letter = "\u05D8";gematria2 += L09;break;	// tet
			/*pey F*/	case "\u05E3":gematria1 += L26;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*tzadi F*/	case "\u05E5":gematria1 += L27;letter = "\u05D4";gematria2 += L05;break;	// hey
			default:letter = "";break;
		}
		cryptography2 += letter;
// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
if(i+1 == alphas.length){
	switch(letter){
		/*kaf*/		case "\u05DB":letter = "\u05DA";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
		/*mem*/		case "\u05DE":letter = "\u05DD";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
		/*nun*/		case "\u05E0":letter = "\u05DF";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
		/*pey*/		case "\u05E4":letter = "\u05E3";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
		/*tzadi*/	case "\u05E6":letter = "\u05E5";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
		default:letter = "";break;
	}
	cryptography2 += letter;
}
}
	if(gematria == "HaKlali"){
	gematria1 = gematria1*gematria1;
	gematria2 = gematria2*gematria2;
	}
	else if(gematria == "Kolel"){
	gematria1 += letterCount;
	gematria2 += letterCount;
	}
	else if(gematria == "Kolel +1"){
	gematria1 += wordCount;
	gematria2 += wordCount;
	}
	else if (gematria == "IntegralReduced"){
	while(gematria1 >= 10){
	product1 = Math.floor(gematria1 / 10);
	remainder1 = gematria1 % 10;
	gematria1 = remainder1 + product1;}
	while(gematria2 >= 10){
	product2 = Math.floor(gematria2 / 10);
	remainder2 = gematria2 % 10;
	gematria2 = remainder2 + product2;}
	}
}
else if( cryptography == "ACh-BI" ){
	for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":gematria1 += L01;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*bet*/		case "\u05D1":gematria1 += L02;letter = "\u05D9";gematria2 += L10;break;	// yod
			/*gimel*/	case "\u05D2":gematria1 += L03;letter = "\u05D8";gematria2 += L09;break;	// tet
			/*dalet*/	case "\u05D3":gematria1 += L04;letter = "\u05D7";gematria2 += L08;break;	// chet
			/*hey*/		case "\u05D4":gematria1 += L05;letter = "\u05D6";gematria2 += L07;break;	// zayin
			/*vav*/		case "\u05D5":gematria1 += L06;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*zayin*/	case "\u05D6":gematria1 += L07;letter = "\u05D4";gematria2 += L05;break;	// hey
			/*chet*/	case "\u05D7":gematria1 += L08;letter = "\u05D3";gematria2 += L04;break;	// dalet
			/*tet*/		case "\u05D8":gematria1 += L09;letter = "\u05D2";gematria2 += L03;break;	// gimel
			/*yod*/		case "\u05D9":gematria1 += L10;letter = "\u05D1";gematria2 += L02;break;	// bet
			/*kaf*/		case "\u05DB":gematria1 += L11;letter = "\u05D0";gematria2 += L01;break;	// aleph
			/*lamed*/	case "\u05DC":gematria1 += L12;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*mem*/		case "\u05DE":gematria1 += L13;letter = "\u05E9";gematria2 += L21;break;	// shin
			/*nun*/		case "\u05E0":gematria1 += L14;letter = "\u05E8";gematria2 += L20;break;	// resh
			/*samech*/	case "\u05E1":gematria1 += L15;letter = "\u05E7";gematria2 += L19;break;	// kuf
			/*ayin*/	case "\u05E2":gematria1 += L16;letter = "\u05E6";gematria2 += L18;break;	// tzadi
			/*pey*/		case "\u05E4":gematria1 += L17;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*tzadi*/	case "\u05E6":gematria1 += L18;letter = "\u05E2";gematria2 += L16;break;	// ayin
			/*kuf*/		case "\u05E7":gematria1 += L19;letter = "\u05E1";gematria2 += L15;break;	// samech
			/*resh*/	case "\u05E8":gematria1 += L20;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*shin*/	case "\u05E9":gematria1 += L21;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*tav*/		case "\u05EA":gematria1 += L22;letter = "\u05DC";gematria2 += L12;break;	// lamed
			/*kaf F*/	case "\u05DA":gematria1 += L23;letter = "\u05D0";gematria2 += L01;break;	// aleph
			/*mem F*/	case "\u05DD":gematria1 += L24;letter = "\u05E9";gematria2 += L21;break;	// shin
			/*nun F*/	case "\u05DF":gematria1 += L25;letter = "\u05E8";gematria2 += L20;break;	// resh
			/*pey F*/	case "\u05E3":gematria1 += L26;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*tzadi F*/	case "\u05E5":gematria1 += L27;letter = "\u05E2";gematria2 += L16;break;	// ayin
			default:letter = "";break;
		}
		cryptography2 += letter;
		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
			/*kaf*/		case "\u05DB":letter = "\u05DA";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
			/*mem*/		case "\u05DE":letter = "\u05DD";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
			/*nun*/		case "\u05E0":letter = "\u05DF";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
			/*pey*/		case "\u05E4":letter = "\u05E3";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
			/*tzadi*/	case "\u05E6":letter = "\u05E5";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
			default:letter = "";break;
			}
			cryptography2 += letter;
		}
	}
	if(gematria == "HaKlali"){
	gematria1 = gematria1*gematria1;
	gematria2 = gematria2*gematria2;
	}
	else if(gematria == "Kolel"){
	gematria1 += letterCount;
	gematria2 += letterCount;
	}
	else if(gematria == "Kolel +1"){
	gematria1 += wordCount;
	gematria2 += wordCount;
	}
	else if (gematria == "IntegralReduced"){
	while(gematria1 >= 10){
	product1 = Math.floor(gematria1 / 10);
	remainder1 = gematria1 % 10;
	gematria1 = remainder1 + product1;}
	while(gematria2 >= 10){
	product2 = Math.floor(gematria2 / 10);
	remainder2 = gematria2 % 10;
	gematria2 = remainder2 + product2;}
	}
}
else if( cryptography == "AYiK-BeCheR" ){
	for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":gematria1 += L01;letter = "\u05D9";gematria2 += L10;break;	// yod
			/*bet*/		case "\u05D1":gematria1 += L02;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*gimel*/	case "\u05D2":gematria1 += L03;letter = "\u05DC";gematria2 += L12;break;	// lamed
			/*dalet*/	case "\u05D3":gematria1 += L04;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*hey*/		case "\u05D4":gematria1 += L05;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*vav*/		case "\u05D5":gematria1 += L06;letter = "\u05E1";gematria2 += L15;break;	// samech
			/*zayin*/	case "\u05D6":gematria1 += L07;letter = "\u05E2";gematria2 += L16;break;	// ayin
			/*chet*/	case "\u05D7":gematria1 += L08;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*tet*/		case "\u05D8":gematria1 += L09;letter = "\u05E6";gematria2 += L18;break;	// tzadi
			/*yod*/		case "\u05D9":gematria1 += L10;letter = "\u05E7";gematria2 += L19;break;	// kuf
			/*kaf*/		case "\u05DB":gematria1 += L11;letter = "\u05E8";gematria2 += L20;break;	// resh
			/*lamed*/	case "\u05DC":gematria1 += L12;letter = "\u05E9";gematria2 += L21;break;	// shin
			/*mem*/		case "\u05DE":gematria1 += L13;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*nun*/		case "\u05E0":gematria1 += L14;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*samech*/	case "\u05E1":gematria1 += L15;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*ayin*/	case "\u05E2":gematria1 += L16;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*pey*/		case "\u05E4":gematria1 += L17;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*tzadi*/	case "\u05E6":gematria1 += L18;letter = "\u05E6";gematria2 += L18;break;	// tzadi
			/*kuf*/		case "\u05E7":gematria1 += L19;letter = "\u05D0";gematria2 += L01;break;	// aleph
			/*resh*/	case "\u05E8":gematria1 += L20;letter = "\u05D1";gematria2 += L02;break;	// bet
			/*shin*/	case "\u05E9":gematria1 += L21;letter = "\u05D2";gematria2 += L03;break;	// gimel
			/*tav*/		case "\u05EA":gematria1 += L22;letter = "\u05D3";gematria2 += L04;break;	// dalet
			/*kaf F*/	case "\u05DA":gematria1 += L23;letter = "\u05D4";gematria2 += L05;break;	// hey
			/*mem F*/	case "\u05DD":gematria1 += L24;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*nun F*/	case "\u05DF":gematria1 += L25;letter = "\u05D6";gematria2 += L07;break;	// zayin
			/*pey F*/	case "\u05E3":gematria1 += L26;letter = "\u05D7";gematria2 += L08;break;	// chet
			/*tzadi F*/	case "\u05E5":gematria1 += L27;letter = "\u05D8";gematria2 += L09;break;	// tet
			default:letter = "";break;
		}
		cryptography2 += letter;
			
		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
				default:letter = "";break;
			}
			cryptography2 += letter;
		}
	}
	if(gematria == "HaKlali"){
	gematria1 = gematria1*gematria1;
	gematria2 = gematria2*gematria2;
	}
	else if(gematria == "Kolel"){
	gematria1 += letterCount;
	gematria2 += letterCount;
	}
	else if(gematria == "Kolel +1"){
	gematria1 += wordCount;
	gematria2 += wordCount;
	}
	else if (gematria == "IntegralReduced"){
	while(gematria1 >= 10){
	product1 = Math.floor(gematria1 / 10);
	remainder1 = gematria1 % 10;
	gematria1 = remainder1 + product1;}
	while(gematria2 >= 10){
	product2 = Math.floor(gematria2 / 10);
	remainder2 = gematria2 % 10;
	gematria2 = remainder2 + product2;}
	}
}
else if( cryptography == "AChaS-BeTA" ){
	for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":gematria1 += L01;letter = "\u05D7";gematria2 += L08;break;	// chet
			/*bet*/		case "\u05D1":gematria1 += L02;letter = "\u05D8";gematria2 += L09;break;	// tet
			/*gimel*/	case "\u05D2":gematria1 += L03;letter = "\u05D9";gematria2 += L10;break;	// yod
			/*dalet*/	case "\u05D3":gematria1 += L04;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*hey*/		case "\u05D4":gematria1 += L05;letter = "\u05DC";gematria2 += L12;break;	// lamed
			/*vav*/		case "\u05D5":gematria1 += L06;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*zayin*/	case "\u05D6":gematria1 += L07;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*chet*/	case "\u05D7":gematria1 += L08;letter = "\u05E1";gematria2 += L15;break;	// samech
			/*tet*/		case "\u05D8":gematria1 += L09;letter = "\u05E2";gematria2 += L16;break;	// ayin
			/*yod*/		case "\u05D9":gematria1 += L10;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*kaf*/		case "\u05DB":gematria1 += L11;letter = "\u05E6";gematria2 += L18;break;	// tzadi
			/*lamed*/	case "\u05DC":gematria1 += L12;letter = "\u05E7";gematria2 += L19;break;	// kuf
			/*mem*/		case "\u05DE":gematria1 += L13;letter = "\u05E8";gematria2 += L20;break;	// resh
			/*nun*/		case "\u05E0":gematria1 += L14;letter = "\u05E9";gematria2 += L21;break;	// shin
			/*samech*/	case "\u05E1":gematria1 += L15;letter = "\u05D0";gematria2 += L01;break;	// aleph
			/*ayin*/	case "\u05E2":gematria1 += L16;letter = "\u05D1";gematria2 += L02;break;	// bet
			/*pey*/		case "\u05E4":gematria1 += L17;letter = "\u05D2";gematria2 += L03;break;	// gimel
			/*tzadi*/	case "\u05E6":gematria1 += L18;letter = "\u05D3";gematria2 += L04;break;	// dalet
			/*kuf*/		case "\u05E7":gematria1 += L19;letter = "\u05D4";gematria2 += L05;break;	// hey
			/*resh*/	case "\u05E8":gematria1 += L20;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*shin*/	case "\u05E9":gematria1 += L21;letter = "\u05D6";gematria2 += L07;break;	// zayin
			/*tav*/		case "\u05EA":gematria1 += L22;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*kaf F*/	case "\u05DA":gematria1 += L23;letter = "\u05E6";gematria2 += L18;break;	// tzadi
			/*mem F*/	case "\u05DD":gematria1 += L24;letter = "\u05E8";gematria2 += L20;break;	// resh
			/*nun F*/	case "\u05DF":gematria1 += L25;letter = "\u05E9";gematria2 += L21;break;	// shin
			/*pey F*/	case "\u05E3":gematria1 += L26;letter = "\u05D2";gematria2 += L03;break;	// gimel
			/*tzadi F*/	case "\u05E5":gematria1 += L27;letter = "\u05D3";gematria2 += L04;break;	// dalet
			default:letter = "";break;
		}
		cryptography2 += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
				default:letter = "";break;
			}
			cryptography2 += letter;
		}
	}
	if(gematria == "HaKlali"){
	gematria1 = gematria1*gematria1;
	gematria2 = gematria2*gematria2;
	}
	else if(gematria == "Kolel"){
	gematria1 += letterCount;
	gematria2 += letterCount;
	}
	else if(gematria == "Kolel +1"){
	gematria1 += wordCount;
	gematria2 += wordCount;
	}
	else if (gematria == "IntegralReduced"){
	while(gematria1 >= 10){
	product1 = Math.floor(gematria1 / 10);
	remainder1 = gematria1 % 10;
	gematria1 = remainder1 + product1;}
	while(gematria2 >= 10){
	product2 = Math.floor(gematria2 / 10);
	remainder2 = gematria2 % 10;
	gematria2 = remainder2 + product2;}
	}
}
else if( cryptography == "AT-BaCh" ){
	for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":gematria1 += L01;letter = "\u05D8";gematria2 += L09;break;	// tet
			/*bet*/		case "\u05D1":gematria1 += L02;letter = "\u05D7";gematria2 += L08;break;	// chet
			/*gimel*/	case "\u05D2":gematria1 += L03;letter = "\u05D6";gematria2 += L07;break;	// zayin
			/*dalet*/	case "\u05D3":gematria1 += L04;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*hey*/		case "\u05D4":gematria1 += L05;letter = "\u05D4";gematria2 += L05;break;	// hey
			/*vav*/		case "\u05D5":gematria1 += L06;letter = "\u05D3";gematria2 += L04;break;	// dalet
			/*zayin*/	case "\u05D6":gematria1 += L07;letter = "\u05D2";gematria2 += L03;break;	// gimel
			/*chet*/	case "\u05D7":gematria1 += L08;letter = "\u05D1";gematria2 += L02;break;	// bet
			/*tet*/		case "\u05D8":gematria1 += L09;letter = "\u05D0";gematria2 += L01;break;	// aleph
			/*yod*/		case "\u05D9":gematria1 += L10;letter = "\u05E6";gematria2 += L18;break;	// tzadi
			/*kaf*/		case "\u05DB":gematria1 += L11;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*lamed*/	case "\u05DC":gematria1 += L12;letter = "\u05E2";gematria2 += L16;break;	// ayin
			/*mem*/		case "\u05DE":gematria1 += L13;letter = "\u05E1";gematria2 += L15;break;	// samech
			/*nun*/		case "\u05E0":gematria1 += L14;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*samech*/	case "\u05E1":gematria1 += L15;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*ayin*/	case "\u05E2":gematria1 += L16;letter = "\u05DC";gematria2 += L12;break;	// lamed
			/*pey*/		case "\u05E4":gematria1 += L17;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*tzadi*/	case "\u05E6":gematria1 += L18;letter = "\u05D9";gematria2 += L10;break;	// yod
			/*kuf*/		case "\u05E7":gematria1 += L19;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*resh*/	case "\u05E8":gematria1 += L20;letter = "\u05E9";gematria2 += L21;break;	// shin
			/*shin*/	case "\u05E9":gematria1 += L21;letter = "\u05E8";gematria2 += L20;break;	// resh
			/*tav*/		case "\u05EA":gematria1 += L22;letter = "\u05E7";gematria2 += L19;break;	// kuf
			/*kaf F*/	case "\u05DA":gematria1 += L23;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*mem F*/	case "\u05DD":gematria1 += L24;letter = "\u05E1";gematria2 += L15;break;	// samech
			/*nun F*/	case "\u05DF":gematria1 += L25;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*pey F*/	case "\u05E3":gematria1 += L26;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*tzadi F*/	case "\u05E5":gematria1 += L27;letter = "\u05D9";gematria2 += L10;break;	// yod
			default:letter = "";break;
		}
		cryptography2 += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
				default:letter = "";break;
			}
			cryptography2 += letter;
		}
	}
	if(gematria == "HaKlali"){
	gematria1 = gematria1*gematria1;
	gematria2 = gematria2*gematria2;
	}
	else if(gematria == "Kolel"){
	gematria1 += letterCount;
	gematria2 += letterCount;
	}
	else if(gematria == "Kolel +1"){
	gematria1 += wordCount;
	gematria2 += wordCount;
	}
	else if (gematria == "IntegralReduced"){
	while(gematria1 >= 10){
	product1 = Math.floor(gematria1 / 10);
	remainder1 = gematria1 % 10;
	gematria1 = remainder1 + product1;}
	while(gematria2 >= 10){
	product2 = Math.floor(gematria2 / 10);
	remainder2 = gematria2 % 10;
	gematria2 = remainder2 + product2;}
	}
}
else if( cryptography == "AT-BaCh-finals" ){
	for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":gematria1 += L01;letter = "\u05D8";gematria2 += L09;break;	// tet
			/*bet*/		case "\u05D1":gematria1 += L02;letter = "\u05D7";gematria2 += L08;break;	// chet
			/*gimel*/	case "\u05D2":gematria1 += L03;letter = "\u05D6";gematria2 += L07;break;	// zayin
			/*dalet*/	case "\u05D3":gematria1 += L04;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*hey*/		case "\u05D4":gematria1 += L05;letter = "\u05D4";gematria2 += L05;break;	// hey
			/*vav*/		case "\u05D5":gematria1 += L06;letter = "\u05D3";gematria2 += L04;break;	// dalet
			/*zayin*/	case "\u05D6":gematria1 += L07;letter = "\u05D2";gematria2 += L03;break;	// gimel
			/*chet*/	case "\u05D7":gematria1 += L08;letter = "\u05D1";gematria2 += L02;break;	// bet
			/*tet*/		case "\u05D8":gematria1 += L09;letter = "\u05D0";gematria2 += L01;break;	// aleph
			/*yod*/		case "\u05D9":gematria1 += L10;letter = "\u05E6";gematria2 += L18;break;	// tzadi
			/*kaf*/		case "\u05DB":gematria1 += L11;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*lamed*/	case "\u05DC":gematria1 += L12;letter = "\u05E2";gematria2 += L16;break;	// ayin
			/*mem*/		case "\u05DE":gematria1 += L13;letter = "\u05E1";gematria2 += L15;break;	// samech
			/*nun*/		case "\u05E0":gematria1 += L14;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*samech*/	case "\u05E1":gematria1 += L15;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*ayin*/	case "\u05E2":gematria1 += L16;letter = "\u05DC";gematria2 += L12;break;	// lamed
			/*pey*/		case "\u05E4":gematria1 += L17;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*tzadi*/	case "\u05E6":gematria1 += L18;letter = "\u05D9";gematria2 += L10;break;	// yod
			/*kuf*/		case "\u05E7":gematria1 += L19;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*resh*/	case "\u05E8":gematria1 += L20;letter = "\u05E9";gematria2 += L21;break;	// shin
			/*shin*/	case "\u05E9":gematria1 += L21;letter = "\u05E8";gematria2 += L20;break;	// resh
			/*tav*/		case "\u05EA":gematria1 += L22;letter = "\u05E7";gematria2 += L19;break;	// kuf
			/*kaf F*/	case "\u05DA":gematria1 += L23;letter = "\u05DD";gematria2 += L24;break;	// mem F
			/*mem F*/	case "\u05DD":gematria1 += L24;letter = "\u05DA";gematria2 += L23;break;	// kaf F
			/*nun F*/	case "\u05DF":gematria1 += L25;letter = "\u05DF";gematria2 += L25;break;	// nun F
			/*pey F*/	case "\u05E3":gematria1 += L26;letter = "\u05E5";gematria2 += L27;break;	// tzadi F
			/*tzadi F*/	case "\u05E5":gematria1 += L27;letter = "\u05E3";gematria2 += L26;break;	// pey F
			default:letter = "";break;
		}
		cryptography2 += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
				default:letter = "";break;
			}
			cryptography2 += letter;
		}
	}
	if(gematria == "HaKlali"){
	gematria1 = gematria1*gematria1;
	gematria2 = gematria2*gematria2;
	}
	else if(gematria == "Kolel"){
	gematria1 += letterCount;
	gematria2 += letterCount;
	}
	else if(gematria == "Kolel +1"){
	gematria1 += wordCount;
	gematria2 += wordCount;
	}
	else if (gematria == "IntegralReduced"){
	while(gematria1 >= 10){
	product1 = Math.floor(gematria1 / 10);
	remainder1 = gematria1 % 10;
	gematria1 = remainder1 + product1;}
	while(gematria2 >= 10){
	product2 = Math.floor(gematria2 / 10);
	remainder2 = gematria2 % 10;
	gematria2 = remainder2 + product2;}
	}
}
else if( cryptography == "AiY-BaK" ){
	for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":gematria1 += L01;letter = "\u05D9";gematria2 += L10;break;	// yod
			/*bet*/		case "\u05D1":gematria1 += L02;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*gimel*/	case "\u05D2":gematria1 += L03;letter = "\u05DC";gematria2 += L12;break;	// lamed
			/*dalet*/	case "\u05D3":gematria1 += L04;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*hey*/		case "\u05D4":gematria1 += L05;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*vav*/		case "\u05D5":gematria1 += L06;letter = "\u05E1";gematria2 += L15;break;	// samech
			/*zayin*/	case "\u05D6":gematria1 += L07;letter = "\u05E2";gematria2 += L16;break;	// ayin
			/*chet*/	case "\u05D7":gematria1 += L08;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*tet*/		case "\u05D8":gematria1 += L09;letter = "\u05E6";gematria2 += L18;break;	// tzadi
			/*yod*/		case "\u05D9":gematria1 += L10;letter = "\u05D0";gematria2 += L01;break; 	// aleph
			/*kaf*/		case "\u05DB":gematria1 += L11;letter = "\u05D1";gematria2 += L02;break;	// bet
			/*lamed*/	case "\u05DC":gematria1 += L12;letter = "\u05D2";gematria2 += L03;break;	// gimel
			/*mem*/		case "\u05DE":gematria1 += L13;letter = "\u05D3";gematria2 += L04;break;	// dalet
			/*nun*/		case "\u05E0":gematria1 += L14;letter = "\u05D4";gematria2 += L05;break;	// hey
			/*samech*/	case "\u05E1":gematria1 += L15;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*ayin*/	case "\u05E2":gematria1 += L16;letter = "\u05D6";gematria2 += L07;break;	// zayin
			/*pey*/		case "\u05E4":gematria1 += L17;letter = "\u05D7";gematria2 += L08;break;	// chet
			/*tzadi*/	case "\u05E6":gematria1 += L18;letter = "\u05D8";gematria2 += L09;break;	// tet
			/*kuf*/		case "\u05E7":gematria1 += L19;letter = "\u05E8";gematria2 += L20;break;	// resh
			/*resh*/	case "\u05E8":gematria1 += L20;letter = "\u05E7";gematria2 += L19;break;	// kuf
			/*shin*/	case "\u05E9":gematria1 += L21;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*tav*/		case "\u05EA":gematria1 += L22;letter = "\u05E9";gematria2 += L21;break;	// shin
			/*kaf F*/	case "\u05DA":gematria1 += L23;letter = "\u05D1";gematria2 += L02;break;	// bet
			/*mem F*/	case "\u05DD":gematria1 += L24;letter = "\u05D3";gematria2 += L04;break;	// dalet
			/*nun F*/	case "\u05DF":gematria1 += L25;letter = "\u05D4";gematria2 += L05;break;	// hey
			/*pey F*/	case "\u05E3":gematria1 += L26;letter = "\u05D7";gematria2 += L08;break;	// chet
			/*tzadi F*/	case "\u05E5":gematria1 += L27;letter = "\u05D8";gematria2 += L09;break;	// tet
			default:letter = input[i]; break; // Keep original character if not found
		}
		cryptography2 += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
				default:letter = "";break;
			}
			cryptography2 += letter;
		}
	}
	if(gematria == "HaKlali"){
	gematria1 = gematria1*gematria1;
	gematria2 = gematria2*gematria2;
	}
	else if(gematria == "Kolel"){
	gematria1 += letterCount;
	gematria2 += letterCount;
	}
	else if(gematria == "Kolel +1"){
	gematria1 += wordCount;
	gematria2 += wordCount;
	}
	else if (gematria == "IntegralReduced"){
	while(gematria1 >= 10){
	product1 = Math.floor(gematria1 / 10);
	remainder1 = gematria1 % 10;
	gematria1 = remainder1 + product1;}
	while(gematria2 >= 10){
	product2 = Math.floor(gematria2 / 10);
	remainder2 = gematria2 % 10;
	gematria2 = remainder2 + product2;}
	}
}
else if( cryptography == "ATz-BaPh" ){
	for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":gematria1 += L01;letter = "\u05E6";gematria2 += L18;break;	// tzadi
			/*bet*/		case "\u05D1":gematria1 += L02;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*gimel*/	case "\u05D2":gematria1 += L03;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*dalet*/	case "\u05D3":gematria1 += L04;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*hey*/		case "\u05D4":gematria1 += L05;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*vav*/		case "\u05D5":gematria1 += L06;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*zayin*/	case "\u05D6":gematria1 += L07;letter = "\u05E9";gematria2 += L21;break;	// shin
			/*chet*/	case "\u05D7":gematria1 += L08;letter = "\u05E8";gematria2 += L20;break;	// resh
			/*tet*/		case "\u05D8":gematria1 += L09;letter = "\u05E7";gematria2 += L19;break;	// kuf
			/*yod*/		case "\u05D9":gematria1 += L10;letter = "\u05E6";gematria2 += L18;break;	// tzadi
			/*kaf*/		case "\u05DB":gematria1 += L11;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*lamed*/	case "\u05DC":gematria1 += L12;letter = "\u05E2";gematria2 += L16;break;	// ayin
			/*mem*/		case "\u05DE":gematria1 += L13;letter = "\u05E1";gematria2 += L15;break;	// samech
			/*nun*/		case "\u05E0":gematria1 += L14;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*samech*/	case "\u05E1":gematria1 += L15;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*ayin*/	case "\u05E2":gematria1 += L16;letter = "\u05DC";gematria2 += L12;break;	// lamed
			/*pey*/		case "\u05E4":gematria1 += L17;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*tzadi*/	case "\u05E6":gematria1 += L18;letter = "\u05D9";gematria2 += L10;break;	// yod
			/*kuf*/		case "\u05E7":gematria1 += L19;letter = "\u05D8";gematria2 += L09;break;	// tet
			/*resh*/	case "\u05E8":gematria1 += L20;letter = "\u05D7";gematria2 += L08;break;	// chet
			/*shin*/	case "\u05E9":gematria1 += L21;letter = "\u05D6";gematria2 += L07;break;	// zayin
			/*tav*/		case "\u05EA":gematria1 += L22;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*kaf F*/	case "\u05DA":gematria1 += L23;letter = "\u05D4";gematria2 += L05;break;	// hey
			/*mem F*/	case "\u05DD":gematria1 += L24;letter = "\u05D3";gematria2 += L04;break;	// dalet
			/*nun F*/	case "\u05DF":gematria1 += L25;letter = "\u05D2";gematria2 += L03;break;	// gimel
			/*pey F*/	case "\u05E3":gematria1 += L26;letter = "\u05D1";gematria2 += L02;break;	// bet
			/*tzadi F*/	case "\u05E5":gematria1 += L27;letter = "\u05D0";gematria2 += L01;break;	// aleph
			default:letter = input[i]; break; // Keep original character if not found
		}
		cryptography2 += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
				default:letter = "";break;
			}
			cryptography2 += letter;
		}
	}
	if(gematria == "HaKlali"){
	gematria1 = gematria1*gematria1;
	gematria2 = gematria2*gematria2;
	}
	else if(gematria == "Kolel"){
	gematria1 += letterCount;
	gematria2 += letterCount;
	}
	else if(gematria == "Kolel +1"){
	gematria1 += wordCount;
	gematria2 += wordCount;
	}
	else if (gematria == "IntegralReduced"){
	while(gematria1 >= 10){
	product1 = Math.floor(gematria1 / 10);
	remainder1 = gematria1 % 10;
	gematria1 = remainder1 + product1;}
	while(gematria2 >= 10){
	product2 = Math.floor(gematria2 / 10);
	remainder2 = gematria2 % 10;
	gematria2 = remainder2 + product2;}
	}
}
else if( cryptography == "AL-BeTh" ){
	for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":gematria1 += L01;letter = "\u05DC";gematria2 += L12;break;	// lamed
			/*bet*/		case "\u05D1":gematria1 += L02;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*gimel*/	case "\u05D2":gematria1 += L03;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*dalet*/	case "\u05D3":gematria1 += L04;letter = "\u05E9";gematria2 += L21;break;	// shin
			/*hey*/		case "\u05D4":gematria1 += L05;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*vav*/		case "\u05D5":gematria1 += L06;letter = "\u05E8";gematria2 += L20;break;	// resh
			/*zayin*/	case "\u05D6":gematria1 += L07;letter = "\u05E1";gematria2 += L15;break;	// samech
			/*chet*/	case "\u05D7":gematria1 += L08;letter = "\u05E7";gematria2 += L19;break;	// kuf
			/*tet*/		case "\u05D8":gematria1 += L09;letter = "\u05E2";gematria2 += L16;break;	// ayin
			/*yod*/		case "\u05D9":gematria1 += L10;letter = "\u05E6";gematria2 += L18;break;	// tzadi
			/*kaf*/		case "\u05DB":gematria1 += L11;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*lamed*/	case "\u05DC":gematria1 += L12;letter = "\u05D0";gematria2 += L01;break;	// aleph
			/*mem*/		case "\u05DE":gematria1 += L13;letter = "\u05D2";gematria2 += L03;break;	// gimel
			/*nun*/		case "\u05E0":gematria1 += L14;letter = "\u05D4";gematria2 += L05;break;	// hey
			/*samech*/	case "\u05E1":gematria1 += L15;letter = "\u05D6";gematria2 += L07;break;	// zayin
			/*ayin*/	case "\u05E2":gematria1 += L16;letter = "\u05D8";gematria2 += L09;break;	// tet
			/*pey*/		case "\u05E4":gematria1 += L17;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*tzadi*/	case "\u05E6":gematria1 += L18;letter = "\u05D9";gematria2 += L10;break;	// yod
			/*kuf*/		case "\u05E7":gematria1 += L19;letter = "\u05D7";gematria2 += L08;break;	// chet
			/*resh*/	case "\u05E8":gematria1 += L20;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*shin*/	case "\u05E9":gematria1 += L21;letter = "\u05D3";gematria2 += L04;break;	// dalet
			/*tav*/		case "\u05EA":gematria1 += L22;letter = "\u05D1";gematria2 += L02;break;	// bet
			/*kaf F*/	case "\u05DA":gematria1 += L23;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*mem F*/	case "\u05DD":gematria1 += L24;letter = "\u05D2";gematria2 += L03;break;	// gimel
			/*nun F*/	case "\u05DF":gematria1 += L25;letter = "\u05D4";gematria2 += L05;break;	// hey
			/*pey F*/	case "\u05E3":gematria1 += L26;letter = "\u05D8";gematria2 += L11;break;	// kaf
			/*tzadi F*/	case "\u05E5":gematria1 += L27;letter = "\u05D9";gematria2 += L10;break;	// yod
			default:letter = input[i]; break; // Keep original character if not found
		}
		cryptography2 += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
				default:letter = "";break;
			}
			cryptography2 += letter;
		}
	}
	if(gematria == "HaKlali"){
	gematria1 = gematria1*gematria1;
	gematria2 = gematria2*gematria2;
	}
	else if(gematria == "Kolel"){
	gematria1 += letterCount;
	gematria2 += letterCount;
	}
	else if(gematria == "Kolel +1"){
	gematria1 += wordCount;
	gematria2 += wordCount;
	}
	else if (gematria == "IntegralReduced"){
	while(gematria1 >= 10){
	product1 = Math.floor(gematria1 / 10);
	remainder1 = gematria1 % 10;
	gematria1 = remainder1 + product1;}
	while(gematria2 >= 10){
	product2 = Math.floor(gematria2 / 10);
	remainder2 = gematria2 % 10;
	gematria2 = remainder2 + product2;}
	}
}
else if( cryptography == "Ofanim" ){
	for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":gematria1 += L01;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*bet*/		case "\u05D1":gematria1 += L02;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*gimel*/	case "\u05D2":gematria1 += L03;letter = "\u05DC";gematria2 += L12;break;	// lamed
			/*dalet*/	case "\u05D3":gematria1 += L04;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*hey*/		case "\u05D4":gematria1 += L05;letter = "\u05D0";gematria2 += L01;break;	// aleph
			/*vav*/		case "\u05D5":gematria1 += L06;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*zayin*/	case "\u05D6":gematria1 += L07;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*chet*/	case "\u05D7":gematria1 += L08;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*tet*/		case "\u05D8":gematria1 += L09;letter = "\u05EA";gematria2 += L22;break;	// tav
			/*yod*/		case "\u05D9":gematria1 += L10;letter = "\u05D3";gematria2 += L04;break;	// dalet
			/*kaf*/		case "\u05DB":gematria1 += L11;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*lamed*/	case "\u05DC":gematria1 += L12;letter = "\u05D3";gematria2 += L04;break;	// delet
			/*mem*/		case "\u05DE":gematria1 += L13;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*nun*/		case "\u05E0":gematria1 += L14;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*samech*/	case "\u05E1":gematria1 += L15;letter = "\u05DB";gematria2 += L11;break;	// kaf
			/*ayin*/	case "\u05E2":gematria1 += L16;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*pey*/		case "\u05E4":gematria1 += L17;letter = "\u05D0";gematria2 += L01;break;	// aleph
			/*tzadi*/	case "\u05E6":gematria1 += L18;letter = "\u05D9";gematria2 += L10;break;	// yod
			/*kuf*/		case "\u05E7":gematria1 += L19;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*resh*/	case "\u05E8":gematria1 += L20;letter = "\u05E9";gematria2 += L21;break;	// shin
			/*shin*/	case "\u05E9":gematria1 += L21;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*tav*/		case "\u05EA":gematria1 += L22;letter = "\u05D5";gematria2 += L06;break;	// vav
			/*kaf F*/	case "\u05DA":gematria1 += L23;letter = "\u05E4";gematria2 += L17;break;	// pey
			/*mem F*/	case "\u05DD":gematria1 += L24;letter = "\u05DE";gematria2 += L13;break;	// mem
			/*nun F*/	case "\u05DF":gematria1 += L25;letter = "\u05E0";gematria2 += L14;break;	// nun
			/*pey F*/	case "\u05E3":gematria1 += L26;letter = "\u05D0";gematria2 += L01;break;	// aleph
			/*tzadi F*/	case "\u05E5":gematria1 += L27;letter = "\u05D9";gematria2 += L10;break;	// yod
			default:letter = input[i]; break; // Keep original character if not found
		}
		cryptography2 += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";cryptography2 = cryptography2.substring(0, cryptography2.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
				default:letter = "";break;
			}
			cryptography2 += letter;
		}
	}
	if(gematria == "HaKlali"){
	gematria1 = gematria1*gematria1;
	gematria2 = gematria2*gematria2;
	}
	else if(gematria == "Kolel"){
	gematria1 += letterCount;
	gematria2 += letterCount;
	}
	else if(gematria == "Kolel +1"){
	gematria1 += wordCount;
	gematria2 += wordCount;
	}
	else if (gematria == "IntegralReduced"){
	while(gematria1 >= 10){
	product1 = Math.floor(gematria1 / 10);
	remainder1 = gematria1 % 10;
	gematria1 = remainder1 + product1;}
	while(gematria2 >= 10){
	product2 = Math.floor(gematria2 / 10);
	remainder2 = gematria2 % 10;
	gematria2 = remainder2 + product2;}
	}
}

// Send final variables to displays
document.getElementById("gem1").innerHTML = `<a href='#' onclick="replaceInputField('inputText', ${gematria1}); Transpose(); return false;" target='_blank'><b>${gematria1}</b></a><br />`;
document.getElementById('crypt2').innerHTML = "<a href='http://translate.google.com/#auto/en/"+cryptography2+"' target='_blank'><b>" + cryptography2 + "</b></a><br />";
document.getElementById("gem2").innerHTML = `<a href='#' onclick="replaceInputField('inputText', ${gematria2}); Transpose(); return false;" target='_blank'><b>${gematria2}</b></a><br />`;
document.getElementById("pictogram").innerHTML = pictogram;
document.getElementById("spelling").innerHTML = word + `<br /><font color='#FFFFFF'>Total = <a href='#' onclick="replaceInputField('inputText', ${gematriaMiluy}); Transpose(); return false;" target='_blank'>${gematriaMiluy}</a></font>`;
document.getElementById("originalWord").innerHTML = "<a href='http://translate.google.com/#auto/en/"+inputText+"' target='_blank'><b>" + inputText + "</b></a><br />";

// Summation
var denom = "";
var temp = "";
var temp2 = ""
var temp3 = "";
var temp4 = "";
var gematriaSummation = "";
var l = 0;
var zerocount = gematria1.toString().length;
for (i = zerocount; i > 0; i--) {
	zeros += "0";}
var one = "1";
zeros = one.concat(zeros);
var zeros = zeros.slice(0, -1);
var denominator = gematria1;
var numerator = zeros;
var summation = "";
for (i = zerocount; i > 0; i = zerocount) {
temp = denominator / numerator;
temp2 = temp | 0;
temp3 = temp2*numerator;
temp4 = temp3.toString();
		switch(temp4){// Now obtain letters
			/*aleph*/	case "1":			gematriaSummation += L01;temp5 = "\u05D0";break;
			/*bet*/		case "2":			gematriaSummation += L02;temp5 = "\u05D1";break;
			/*gimel*/	case "3":			gematriaSummation += L03;temp5 = "\u05D2";break;
			/*dalet*/	case "4":			gematriaSummation += L04;temp5 = "\u05D3";break;
			/*hey*/		case "5":			gematriaSummation += L05;temp5 = "\u05D4";break;
			/*vav*/		case "6":			gematriaSummation += L06;temp5 = "\u05D5";break;
			/*zayin*/	case "7":			gematriaSummation += L07;temp5 = "\u05D6";break;
			/*chet*/	case "8":			gematriaSummation += L08;temp5 = "\u05D7";break;
			/*tet*/		case "9":			gematriaSummation += L09;temp5 = "\u05D8";break;
			/*yod*/		case "10":			gematriaSummation += L10;temp5 = "\u05D9";break;
			/*kaf*/		case "20":			gematriaSummation += L11;temp5 = "\u05DB";break;
			/*lamed*/	case "30":			gematriaSummation += L12;temp5 = "\u05DC";break;
			/*mem*/		case "40":			gematriaSummation += L13;temp5 = "\u05DE";break;
			/*nun*/		case "50":			gematriaSummation += L14;temp5 = "\u05E0";break;
			/*samech*/	case "60":			gematriaSummation += L15;temp5 = "\u05E1";break;
			/*ayin*/	case "70":			gematriaSummation += L16;temp5 = "\u05E2";break;
			/*pey*/		case "80":			gematriaSummation += L17;temp5 = "\u05E4";break;
			/*tzadi*/	case "90":			gematriaSummation += L18;temp5 = "\u05E6";break;
			/*kuf*/		case "100":			gematriaSummation += L19;temp5 = "\u05E7";break;
			/*resh*/	case "200":			gematriaSummation += L20;temp5 = "\u05E8";break;
			/*shin*/	case "300":			gematriaSummation += L21;temp5 = "\u05E9";break;
			/*tav*/		case "400":			gematriaSummation += L22;temp5 = "\u05EA";break;
			/*kaf F*/	case "500":			gematriaSummation += L23;temp5 = "\u05DA";break;
			/*mem F*/	case "600":			gematriaSummation += L24;temp5 = "\u05DD";break;
			/*nun F*/	case "700":			gematriaSummation += L25;temp5 = "\u05DF";break;
			/*pey F*/	case "800":			gematriaSummation += L26;temp5 = "\u05E3";break;
			/*tzadi F*/	case "900":			gematriaSummation += L27;temp5 = "\u05E5";break;
			/*aleph*/	case "1000":		gematriaSummation += L01;temp5 = "\u05D0";break;
			/*bet*/		case "2000":		gematriaSummation += L02;temp5 = "\u05D1";break;
			/*gimel*/	case "3000":		gematriaSummation += L03;temp5 = "\u05D2";break;
			/*dalet*/	case "4000":		gematriaSummation += L04;temp5 = "\u05D3";break;
			/*hey*/		case "5000":		gematriaSummation += L05;temp5 = "\u05D4";break;
			/*vav*/		case "6000":		gematriaSummation += L06;temp5 = "\u05D5";break;
			/*zayin*/	case "7000":		gematriaSummation += L07;temp5 = "\u05D6";break;
			/*chet*/	case "8000":		gematriaSummation += L08;temp5 = "\u05D7";break;
			/*tet*/		case "9000":		gematriaSummation += L09;temp5 = "\u05D8";break;
			/*yod*/		case "10000":		gematriaSummation += L10;temp5 = "\u05D9";break;
			/*kaf*/		case "20000":		gematriaSummation += L11;temp5 = "\u05DB";break;
			/*lamed*/	case "30000":		gematriaSummation += L12;temp5 = "\u05DC";break;
			/*mem*/		case "40000":		gematriaSummation += L13;temp5 = "\u05DE";break;
			/*nun*/		case "50000":		gematriaSummation += L14;temp5 = "\u05E0";break;
			/*samech*/	case "60000":		gematriaSummation += L15;temp5 = "\u05E1";break;
			/*ayin*/	case "70000":		gematriaSummation += L16;temp5 = "\u05E2";break;
			/*pey*/		case "80000":		gematriaSummation += L17;temp5 = "\u05E4";break;
			/*tzadi*/	case "90000":		gematriaSummation += L18;temp5 = "\u05E6";break;
			/*kuf*/		case "100000":		gematriaSummation += L19;temp5 = "\u05E7";break;
			/*resh*/	case "200000":		gematriaSummation += L20;temp5 = "\u05E8";break;
			/*shin*/	case "300000":		gematriaSummation += L21;temp5 = "\u05E9";break;
			/*tav*/		case "400000":		gematriaSummation += L22;temp5 = "\u05EA";break;
			/*kaf F*/	case "500000":		gematriaSummation += L23;temp5 = "\u05DA";break;
			/*mem F*/	case "600000":		gematriaSummation += L24;temp5 = "\u05DD";break;
			/*nun F*/	case "700000":		gematriaSummation += L25;temp5 = "\u05DF";break;
			/*pey F*/	case "800000":		gematriaSummation += L26;temp5 = "\u05E3";break;
			/*tzadi F*/	case "900000":		gematriaSummation += L27;temp5 = "\u05E5";break;
			/*aleph*/	case "1000000":		gematriaSummation += L01;temp5 = "\u05D0";break;
			/*bet*/		case "2000000":		gematriaSummation += L02;temp5 = "\u05D1";break;
			/*gimel*/	case "3000000":		gematriaSummation += L03;temp5 = "\u05D2";break;
			/*dalet*/	case "4000000":		gematriaSummation += L04;temp5 = "\u05D3";break;
			/*hey*/		case "5000000":		gematriaSummation += L05;temp5 = "\u05D4";break;
			/*vav*/		case "6000000":		gematriaSummation += L06;temp5 = "\u05D5";break;
			/*zayin*/	case "7000000":		gematriaSummation += L07;temp5 = "\u05D6";break;
			/*chet*/	case "8000000":		gematriaSummation += L08;temp5 = "\u05D7";break;
			/*tet*/		case "9000000":		gematriaSummation += L09;temp5 = "\u05D8";break;
			/*yod*/		case "10000000":	gematriaSummation += L10;temp5 = "\u05D9";break;
			/*kaf*/		case "20000000":	gematriaSummation += L11;temp5 = "\u05DB";break;
			/*lamed*/	case "30000000":	gematriaSummation += L12;temp5 = "\u05DC";break;
			/*mem*/		case "40000000":	gematriaSummation += L13;temp5 = "\u05DE";break;
			/*nun*/		case "50000000":	gematriaSummation += L14;temp5 = "\u05E0";break;
			/*samech*/	case "60000000":	gematriaSummation += L15;temp5 = "\u05E1";break;
			/*ayin*/	case "70000000":	gematriaSummation += L16;temp5 = "\u05E2";break;
			/*pey*/		case "80000000":	gematriaSummation += L17;temp5 = "\u05E4";break;
			/*tzadi*/	case "90000000":	gematriaSummation += L18;temp5 = "\u05E6";break;
			/*kuf*/		case "100000000":	gematriaSummation += L19;temp5 = "\u05E7";break;
			/*resh*/	case "200000000":	gematriaSummation += L20;temp5 = "\u05E8";break;
			/*shin*/	case "300000000":	gematriaSummation += L21;temp5 = "\u05E9";break;
			/*tav*/		case "400000000":	gematriaSummation += L22;temp5 = "\u05EA";break;
			/*kaf F*/	case "500000000":	gematriaSummation += L23;temp5 = "\u05DA";break;
			/*mem F*/	case "600000000":	gematriaSummation += L24;temp5 = "\u05DD";break;
			/*nun F*/	case "700000000":	gematriaSummation += L25;temp5 = "\u05DF";break;
			/*pey F*/	case "800000000":	gematriaSummation += L26;temp5 = "\u05E3";break;
			/*tzadi F*/	case "900000000":	gematriaSummation += L27;temp5 = "\u05E5";break;
			default:temp5 = "";break;
		}
		summation += temp5;
denominator = denominator % numerator;
numerator = numerator.slice(0, -1);
zerocount = zerocount-1;
}
for (var i=0; i < summation.length; i++){
	switch(summation[i]){
	/*aleph*/	case "\u05D0":gematriaSum += L01;	break;
	/*bet*/		case "\u05D1":gematriaSum += L02;	break;
	/*gimel*/	case "\u05D2":gematriaSum += L03;	break;
	/*dalet*/	case "\u05D3":gematriaSum += L04;	break;
	/*hey*/		case "\u05D4":gematriaSum += L05;	break;
	/*vav*/		case "\u05D5":gematriaSum += L06;	break;
	/*zayin*/	case "\u05D6":gematriaSum += L07;	break;
	/*chet*/	case "\u05D7":gematriaSum += L08;	break;
	/*tet*/		case "\u05D8":gematriaSum += L09;	break;
	/*yod*/		case "\u05D9":gematriaSum += L10;	break;
	/*kaf*/		case "\u05DB":gematriaSum += L11;	break;
	/*lamed*/	case "\u05DC":gematriaSum += L12;	break;
	/*mem*/		case "\u05DE":gematriaSum += L13;	break;
	/*nun*/		case "\u05E0":gematriaSum += L14;	break;
	/*samech*/	case "\u05E1":gematriaSum += L15;	break;
	/*ayin*/	case "\u05E2":gematriaSum += L16;	break;
	/*pey*/		case "\u05E4":gematriaSum += L17;	break;
	/*tzadi*/	case "\u05E6":gematriaSum += L18;	break;
	/*kuf*/		case "\u05E7":gematriaSum += L19;	break;
	/*resh*/	case "\u05E8":gematriaSum += L20;	break;
	/*shin*/	case "\u05E9":gematriaSum += L21;	break;
	/*tav*/		case "\u05EA":gematriaSum += L22;	break;
	/*kaf F*/	case "\u05DA":gematriaSum += L23;	break;
	/*mem F*/	case "\u05DD":gematriaSum += L24;	break;
	/*nun F*/	case "\u05DF":gematriaSum += L25;	break;
	/*pey F*/	case "\u05E3":gematriaSum += L26;	break;
	/*tzadi F*/	case "\u05E5":gematriaSum += L27;	break;
	default:break;
	}
}
document.getElementById("summation").innerHTML = `<a href='#' onclick="replaceInputField('inputText', ${gematria1}); Transpose(); return false;" target='_blank'><b>${summation}</b></a><br />`;

// Permutation of the original word written by Jared Miller
document.getElementById('anagram').innerHTML = '';	// Clear any old string value
permute(inputText).forEach(function(result) {})
var anagram = document.getElementById("anagram")
permute(inputText).forEach(function(result) {
anagram.innerHTML += "<li><a href='http://translate.google.com/#auto/en/"+result+"' target='_blank'><b>" + result + "</b></a></li>"
})

function permute(string) {
// Builds our array of all permutations
function recurse(string, prefix) {
var pre, post, a, out, distinct;
if (!string.length) {
        return [prefix]
}
out = []
if (string.length > 6) {  string = string.substring(0, 5);} // Don't calculate anagrams if word is greater than 7 letters.  If 7 or less only calculate anagrams out to 5 characters to prevent app from crashing the browser.  
for (a = 0; a < string.length; a++) {
	pre = string.substring(0, a)
	post = string.substring(a + 1)
	out = out.concat(recurse(pre + post, string[a] + prefix))
}
	return out
}
// Remove duplicates by storing each permutation in an Object (as a key).
distinct = {}
recurse(string, "").forEach(function(result) {
distinct[result] = true
});
return Object.keys(distinct)
}

// Get the first letter of each word and combine into an Acronym 
var acronym = '';
var arr = inputText.split(' ');
for(i=0;i<arr.length;i++) {
acronym += arr[i].substr(0,1)
}
document.getElementById('acronym').innerHTML = "<a href='http://translate.google.com/#auto/en/"+acronym+"' target='_blank'><b>" + acronym + "</b></a><br />";
for (var i=0; i < acronym.length; i++){
	switch(acronym[i]){
	/*aleph*/	case "\u05D0":gematriaAcronym += L01;	break;
	/*bet*/		case "\u05D1":gematriaAcronym += L02;	break;
	/*gimel*/	case "\u05D2":gematriaAcronym += L03;	break;
	/*dalet*/	case "\u05D3":gematriaAcronym += L04;	break;
	/*hey*/		case "\u05D4":gematriaAcronym += L05;	break;
	/*vav*/		case "\u05D5":gematriaAcronym += L06;	break;
	/*zayin*/	case "\u05D6":gematriaAcronym += L07;	break;
	/*chet*/	case "\u05D7":gematriaAcronym += L08;	break;
	/*tet*/		case "\u05D8":gematriaAcronym += L09;	break;
	/*yod*/		case "\u05D9":gematriaAcronym += L10;	break;
	/*kaf*/		case "\u05DB":gematriaAcronym += L11;	break;
	/*lamed*/	case "\u05DC":gematriaAcronym += L12;	break;
	/*mem*/		case "\u05DE":gematriaAcronym += L13;	break;
	/*nun*/		case "\u05E0":gematriaAcronym += L14;	break;
	/*samech*/	case "\u05E1":gematriaAcronym += L15;	break;
	/*ayin*/	case "\u05E2":gematriaAcronym += L16;	break;
	/*pey*/		case "\u05E4":gematriaAcronym += L17;	break;
	/*tzadi*/	case "\u05E6":gematriaAcronym += L18;	break;
	/*kuf*/		case "\u05E7":gematriaAcronym += L19;	break;
	/*resh*/	case "\u05E8":gematriaAcronym += L20;	break;
	/*shin*/	case "\u05E9":gematriaAcronym += L21;	break;
	/*tav*/		case "\u05EA":gematriaAcronym += L22;	break;
	/*kaf F*/	case "\u05DA":gematriaAcronym += L23;	break;
	/*mem F*/	case "\u05DD":gematriaAcronym += L24;	break;
	/*nun F*/	case "\u05DF":gematriaAcronym += L25;	break;
	/*pey F*/	case "\u05E3":gematriaAcronym += L26;	break;
	/*tzadi F*/	case "\u05E5":gematriaAcronym += L27;	break;
	default:break;
	}
}

// Get the last letter of each word and combine into a Reverse Acronym
var sofim = '';
var arrev = inputText.split('').reverse().join('')// new line to reverse
var arrev = arrev.split(' ');
for(i=0;i<arrev.length;i++) {
sofim += arrev[i].substr(0,1)
}
document.getElementById('sofim').innerHTML = "<a href='http://translate.google.com/#auto/en/"+sofim+"' target='_blank'><b>" + sofim + "</b></a><br />";
for (var i=0; i < sofim.length; i++){
	switch(sofim[i]){
	/*aleph*/	case "\u05D0":gematriaSofit += L01;	break;
	/*bet*/		case "\u05D1":gematriaSofit += L02;	break;
	/*gimel*/	case "\u05D2":gematriaSofit += L03;	break;
	/*dalet*/	case "\u05D3":gematriaSofit += L04;	break;
	/*hey*/		case "\u05D4":gematriaSofit += L05;	break;
	/*vav*/		case "\u05D5":gematriaSofit += L06;	break;
	/*zayin*/	case "\u05D6":gematriaSofit += L07;	break;
	/*chet*/	case "\u05D7":gematriaSofit += L08;	break;
	/*tet*/		case "\u05D8":gematriaSofit += L09;	break;
	/*yod*/		case "\u05D9":gematriaSofit += L10;	break;
	/*kaf*/		case "\u05DB":gematriaSofit += L11;	break;
	/*lamed*/	case "\u05DC":gematriaSofit += L12;	break;
	/*mem*/		case "\u05DE":gematriaSofit += L13;	break;
	/*nun*/		case "\u05E0":gematriaSofit += L14;	break;
	/*samech*/	case "\u05E1":gematriaSofit += L15;	break;
	/*ayin*/	case "\u05E2":gematriaSofit += L16;	break;
	/*pey*/		case "\u05E4":gematriaSofit += L17;	break;
	/*tzadi*/	case "\u05E6":gematriaSofit += L18;	break;
	/*kuf*/		case "\u05E7":gematriaSofit += L19;	break;
	/*resh*/	case "\u05E8":gematriaSofit += L20;	break;
	/*shin*/	case "\u05E9":gematriaSofit += L21;	break;
	/*tav*/		case "\u05EA":gematriaSofit += L22;	break;
	/*kaf F*/	case "\u05DA":gematriaSofit += L23;	break;
	/*mem F*/	case "\u05DD":gematriaSofit += L24;	break;
	/*nun F*/	case "\u05DF":gematriaSofit += L25;	break;
	/*pey F*/	case "\u05E3":gematriaSofit += L26;	break;
	/*tzadi F*/	case "\u05E5":gematriaSofit += L27;	break;
	default:break;
	}
}

// Terminal Elision or removing both the first and last character of the string
document.getElementById('elision').innerHTML = '';		// clear any old string value
var elision = inputText.substr(1, inputText.length-2);
var elision2 = inputText2.substr(1, inputText2.length-2);
document.getElementById('elision').innerHTML = "<a href='http://translate.google.com/#auto/en/"+elision+"' target='_blank'><b>" + elision + "</b></a><br />";
for (var i=0; i < elision.length; i++){
	switch(elision[i]){
	/*aleph*/	case "\u05D0":gematriaElision += L01;	break;
	/*bet*/		case "\u05D1":gematriaElision += L02;	break;
	/*gimel*/	case "\u05D2":gematriaElision += L03;	break;
	/*dalet*/	case "\u05D3":gematriaElision += L04;	break;
	/*hey*/		case "\u05D4":gematriaElision += L05;	break;
	/*vav*/		case "\u05D5":gematriaElision += L06;	break;
	/*zayin*/	case "\u05D6":gematriaElision += L07;	break;
	/*chet*/	case "\u05D7":gematriaElision += L08;	break;
	/*tet*/		case "\u05D8":gematriaElision += L09;	break;
	/*yod*/		case "\u05D9":gematriaElision += L10;	break;
	/*kaf*/		case "\u05DB":gematriaElision += L11;	break;
	/*lamed*/	case "\u05DC":gematriaElision += L12;	break;
	/*mem*/		case "\u05DE":gematriaElision += L13;	break;
	/*nun*/		case "\u05E0":gematriaElision += L14;	break;
	/*samech*/	case "\u05E1":gematriaElision += L15;	break;
	/*ayin*/	case "\u05E2":gematriaElision += L16;	break;
	/*pey*/		case "\u05E4":gematriaElision += L17;	break;
	/*tzadi*/	case "\u05E6":gematriaElision += L18;	break;
	/*kuf*/		case "\u05E7":gematriaElision += L19;	break;
	/*resh*/	case "\u05E8":gematriaElision += L20;	break;
	/*shin*/	case "\u05E9":gematriaElision += L21;	break;
	/*tav*/		case "\u05EA":gematriaElision += L22;	break;
	/*kaf F*/	case "\u05DA":gematriaElision += L23;	break;
	/*mem F*/	case "\u05DD":gematriaElision += L24;	break;
	/*nun F*/	case "\u05DF":gematriaElision += L25;	break;
	/*pey F*/	case "\u05E3":gematriaElision += L26;	break;
	/*tzadi F*/	case "\u05E5":gematriaElision += L27;	break;
	default:break;
	}
}

// ThShRQ Reversing or spelling the word backwards
var reverse = inputText.split('').reverse().join('');
document.getElementById('reverseText').innerHTML = "<a href='http://translate.google.com/#auto/en/"+reverse+"' target='_blank'><b>" + reverse + "</b></a><br />";
var gematriaReversed = gematria1;

// Remove the first letter of the string to find the "Leap" word
document.getElementById('leap').innerHTML = '';		// clear any old string value
var leap = inputText.substr(1);
document.getElementById('leap').innerHTML = "<a href='http://translate.google.com/#auto/en/"+leap+"' target='_blank'><b>" + leap + "</b></a><br />";
for (var i=0; i < leap.length; i++){
	switch(leap[i]){
	/*aleph*/	case "\u05D0":gematriaLeap += L01;	break;
	/*bet*/		case "\u05D1":gematriaLeap += L02;	break;
	/*gimel*/	case "\u05D2":gematriaLeap += L03;	break;
	/*dalet*/	case "\u05D3":gematriaLeap += L04;	break;
	/*hey*/		case "\u05D4":gematriaLeap += L05;	break;
	/*vav*/		case "\u05D5":gematriaLeap += L06;	break;
	/*zayin*/	case "\u05D6":gematriaLeap += L07;	break;
	/*chet*/	case "\u05D7":gematriaLeap += L08;	break;
	/*tet*/		case "\u05D8":gematriaLeap += L09;	break;
	/*yod*/		case "\u05D9":gematriaLeap += L10;	break;
	/*kaf*/		case "\u05DB":gematriaLeap += L11;	break;
	/*lamed*/	case "\u05DC":gematriaLeap += L12;	break;
	/*mem*/		case "\u05DE":gematriaLeap += L13;	break;
	/*nun*/		case "\u05E0":gematriaLeap += L14;	break;
	/*samech*/	case "\u05E1":gematriaLeap += L15;	break;
	/*ayin*/	case "\u05E2":gematriaLeap += L16;	break;
	/*pey*/		case "\u05E4":gematriaLeap += L17;	break;
	/*tzadi*/	case "\u05E6":gematriaLeap += L18;	break;
	/*kuf*/		case "\u05E7":gematriaLeap += L19;	break;
	/*resh*/	case "\u05E8":gematriaLeap += L20;	break;
	/*shin*/	case "\u05E9":gematriaLeap += L21;	break;
	/*tav*/		case "\u05EA":gematriaLeap += L22;	break;
	/*kaf F*/	case "\u05DA":gematriaLeap += L23;	break;
	/*mem F*/	case "\u05DD":gematriaLeap += L24;	break;
	/*nun F*/	case "\u05DF":gematriaLeap += L25;	break;
	/*pey F*/	case "\u05E3":gematriaLeap += L26;	break;
	/*tzadi F*/	case "\u05E5":gematriaLeap += L27;	break;
	default:break;
	}
}

// Remove the second letter of the sting to find the "Skip" word
document.getElementById('skip').innerHTML = '';		// clear any old string value
var skip = inputText.charAt(0) + inputText.substr(2);
document.getElementById('skip').innerHTML = skip;
document.getElementById('skip').innerHTML = "<a href='http://translate.google.com/#auto/en/"+skip+"' target='_blank'><b>" + skip + "</b></a><br />";
for (var i=0; i < skip.length; i++){
	switch(skip[i]){
	/*aleph*/	case "\u05D0":gematriaSkip += L01;	break;
	/*bet*/		case "\u05D1":gematriaSkip += L02;	break;
	/*gimel*/	case "\u05D2":gematriaSkip += L03;	break;
	/*dalet*/	case "\u05D3":gematriaSkip += L04;	break;
	/*hey*/		case "\u05D4":gematriaSkip += L05;	break;
	/*vav*/		case "\u05D5":gematriaSkip += L06;	break;
	/*zayin*/	case "\u05D6":gematriaSkip += L07;	break;
	/*chet*/	case "\u05D7":gematriaSkip += L08;	break;
	/*tet*/		case "\u05D8":gematriaSkip += L09;	break;
	/*yod*/		case "\u05D9":gematriaSkip += L10;	break;
	/*kaf*/		case "\u05DB":gematriaSkip += L11;	break;
	/*lamed*/	case "\u05DC":gematriaSkip += L12;	break;
	/*mem*/		case "\u05DE":gematriaSkip += L13;	break;
	/*nun*/		case "\u05E0":gematriaSkip += L14;	break;
	/*samech*/	case "\u05E1":gematriaSkip += L15;	break;
	/*ayin*/	case "\u05E2":gematriaSkip += L16;	break;
	/*pey*/		case "\u05E4":gematriaSkip += L17;	break;
	/*tzadi*/	case "\u05E6":gematriaSkip += L18;	break;
	/*kuf*/		case "\u05E7":gematriaSkip += L19;	break;
	/*resh*/	case "\u05E8":gematriaSkip += L20;	break;
	/*shin*/	case "\u05E9":gematriaSkip += L21;	break;
	/*tav*/		case "\u05EA":gematriaSkip += L22;	break;
	/*kaf F*/	case "\u05DA":gematriaSkip += L23;	break;
	/*mem F*/	case "\u05DD":gematriaSkip += L24;	break;
	/*nun F*/	case "\u05DF":gematriaSkip += L25;	break;
	/*pey F*/	case "\u05E3":gematriaSkip += L26;	break;
	/*tzadi F*/	case "\u05E5":gematriaSkip += L27;	break;
	default:break;
	}
}

// Gematria of Word 2.
for (var i=0; i < word2.length; i++){
	switch(word2[i]){
	/*aleph*/	case "\u05D0":gematriaWord2 += L01;	break;
	/*bet*/		case "\u05D1":gematriaWord2 += L02;	break;
	/*gimel*/	case "\u05D2":gematriaWord2 += L03;	break;
	/*dalet*/	case "\u05D3":gematriaWord2 += L04;	break;
	/*hey*/		case "\u05D4":gematriaWord2 += L05;	break;
	/*vav*/		case "\u05D5":gematriaWord2 += L06;	break;
	/*zayin*/	case "\u05D6":gematriaWord2 += L07;	break;
	/*chet*/	case "\u05D7":gematriaWord2 += L08;	break;
	/*tet*/		case "\u05D8":gematriaWord2 += L09;	break;
	/*yod*/		case "\u05D9":gematriaWord2 += L10;	break;
	/*kaf*/		case "\u05DB":gematriaWord2 += L11;	break;
	/*lamed*/	case "\u05DC":gematriaWord2 += L12;	break;
	/*mem*/		case "\u05DE":gematriaWord2 += L13;	break;
	/*nun*/		case "\u05E0":gematriaWord2 += L14;	break;
	/*samech*/	case "\u05E1":gematriaWord2 += L15;	break;
	/*ayin*/	case "\u05E2":gematriaWord2 += L16;	break;
	/*pey*/		case "\u05E4":gematriaWord2 += L17;	break;
	/*tzadi*/	case "\u05E6":gematriaWord2 += L18;	break;
	/*kuf*/		case "\u05E7":gematriaWord2 += L19;	break;
	/*resh*/	case "\u05E8":gematriaWord2 += L20;	break;
	/*shin*/	case "\u05E9":gematriaWord2 += L21;	break;
	/*tav*/		case "\u05EA":gematriaWord2 += L22;	break;
	/*kaf F*/	case "\u05DA":gematriaWord2 += L23;	break;
	/*mem F*/	case "\u05DD":gematriaWord2 += L24;	break;
	/*nun F*/	case "\u05DF":gematriaWord2 += L25;	break;
	/*pey F*/	case "\u05E3":gematriaWord2 += L26;	break;
	/*tzadi F*/	case "\u05E5":gematriaWord2 += L27;	break;
	default:break;
	}
}

// Gematria of Knit word.
for (var i=0; i < knit.length; i++){
	switch(knit[i]){
	/*aleph*/	case "\u05D0":gematriaKnit += L01;	break;
	/*bet*/		case "\u05D1":gematriaKnit += L02;	break;
	/*gimel*/	case "\u05D2":gematriaKnit += L03;	break;
	/*dalet*/	case "\u05D3":gematriaKnit += L04;	break;
	/*hey*/		case "\u05D4":gematriaKnit += L05;	break;
	/*vav*/		case "\u05D5":gematriaKnit += L06;	break;
	/*zayin*/	case "\u05D6":gematriaKnit += L07;	break;
	/*chet*/	case "\u05D7":gematriaKnit += L08;	break;
	/*tet*/		case "\u05D8":gematriaKnit += L09;	break;
	/*yod*/		case "\u05D9":gematriaKnit += L10;	break;
	/*kaf*/		case "\u05DB":gematriaKnit += L11;	break;
	/*lamed*/	case "\u05DC":gematriaKnit += L12;	break;
	/*mem*/		case "\u05DE":gematriaKnit += L13;	break;
	/*nun*/		case "\u05E0":gematriaKnit += L14;	break;
	/*samech*/	case "\u05E1":gematriaKnit += L15;	break;
	/*ayin*/	case "\u05E2":gematriaKnit += L16;	break;
	/*pey*/		case "\u05E4":gematriaKnit += L17;	break;
	/*tzadi*/	case "\u05E6":gematriaKnit += L18;	break;
	/*kuf*/		case "\u05E7":gematriaKnit += L19;	break;
	/*resh*/	case "\u05E8":gematriaKnit += L20;	break;
	/*shin*/	case "\u05E9":gematriaKnit += L21;	break;
	/*tav*/		case "\u05EA":gematriaKnit += L22;	break;
	/*kaf F*/	case "\u05DA":gematriaKnit += L23;	break;
	/*mem F*/	case "\u05DD":gematriaKnit += L24;	break;
	/*nun F*/	case "\u05DF":gematriaKnit += L25;	break;
	/*pey F*/	case "\u05E3":gematriaKnit += L26;	break;
	/*tzadi F*/	case "\u05E5":gematriaKnit += L27;	break;
	default:break;
	}
}

// Gematria systems for Word 1 of Ragil, Kolel, Kolel+1, HaKlali, Reduced, Integral Reduced, Katan, Ordinal, HaKadmi, HaPerati, and Miluy values.
var RagilValue = KolelValue = Kolel1Value = HaKlaliValue = ReducedlValue = IntegralReducedlValue = KatanValue = OrdinalValue = HaKadmiValue = HaPeratiValue = MiluyValue = 0;
for (var i=0; i < inputText.length; i++){
	switch(inputText[i]){
	/*aleph*/	case "\u05D0":RagilValue += ragL01;	KolelValue += ragL01;	Kolel1Value += ragL01;	HaKlaliValue += ragL01;	ReducedlValue += redL01;	IntegralReducedlValue += redL01;	KatanValue += redL01;	OrdinalValue += ordL01;	HaKadmiValue += hakL01;	HaPeratiValue += hapL01;	MiluyValue += milL01;	break;
	/*bet*/		case "\u05D1":RagilValue += ragL02;	KolelValue += ragL02;	Kolel1Value += ragL02;	HaKlaliValue += ragL02;	ReducedlValue += redL02;	IntegralReducedlValue += redL02;	KatanValue += redL02;	OrdinalValue += ordL02;	HaKadmiValue += hakL02;	HaPeratiValue += hapL02;	MiluyValue += milL02;	break;
	/*gimel*/	case "\u05D2":RagilValue += ragL03;	KolelValue += ragL03;	Kolel1Value += ragL03;	HaKlaliValue += ragL03;	ReducedlValue += redL03;	IntegralReducedlValue += redL03;	KatanValue += redL03;	OrdinalValue += ordL03;	HaKadmiValue += hakL03;	HaPeratiValue += hapL03;	MiluyValue += milL03;	break;
	/*dalet*/	case "\u05D3":RagilValue += ragL04;	KolelValue += ragL04;	Kolel1Value += ragL04;	HaKlaliValue += ragL04;	ReducedlValue += redL04;	IntegralReducedlValue += redL04;	KatanValue += redL04;	OrdinalValue += ordL04;	HaKadmiValue += hakL04;	HaPeratiValue += hapL04;	MiluyValue += milL04;	break;
	/*hey*/		case "\u05D4":RagilValue += ragL05;	KolelValue += ragL05;	Kolel1Value += ragL05;	HaKlaliValue += ragL05;	ReducedlValue += redL05;	IntegralReducedlValue += redL05;	KatanValue += redL05;	OrdinalValue += ordL05;	HaKadmiValue += hakL05;	HaPeratiValue += hapL05;	MiluyValue += milL05;	break;
	/*vav*/		case "\u05D5":RagilValue += ragL06;	KolelValue += ragL06;	Kolel1Value += ragL06;	HaKlaliValue += ragL06;	ReducedlValue += redL06;	IntegralReducedlValue += redL06;	KatanValue += redL06;	OrdinalValue += ordL06;	HaKadmiValue += hakL06;	HaPeratiValue += hapL06;	MiluyValue += milL06;	break;
	/*zayin*/	case "\u05D6":RagilValue += ragL07;	KolelValue += ragL07;	Kolel1Value += ragL07;	HaKlaliValue += ragL07;	ReducedlValue += redL07;	IntegralReducedlValue += redL07;	KatanValue += redL07;	OrdinalValue += ordL07;	HaKadmiValue += hakL07;	HaPeratiValue += hapL07;	MiluyValue += milL07;	break;
	/*chet*/	case "\u05D7":RagilValue += ragL08;	KolelValue += ragL08;	Kolel1Value += ragL08;	HaKlaliValue += ragL08;	ReducedlValue += redL08;	IntegralReducedlValue += redL08;	KatanValue += redL08;	OrdinalValue += ordL08;	HaKadmiValue += hakL08;	HaPeratiValue += hapL08;	MiluyValue += milL08;	break;
	/*tet*/		case "\u05D8":RagilValue += ragL09;	KolelValue += ragL09;	Kolel1Value += ragL09;	HaKlaliValue += ragL09;	ReducedlValue += redL09;	IntegralReducedlValue += redL09;	KatanValue += redL09;	OrdinalValue += ordL09;	HaKadmiValue += hakL09;	HaPeratiValue += hapL09;	MiluyValue += milL09;	break;
	/*yod*/		case "\u05D9":RagilValue += ragL10;	KolelValue += ragL10;	Kolel1Value += ragL10;	HaKlaliValue += ragL10;	ReducedlValue += redL10;	IntegralReducedlValue += redL10;	KatanValue += redL10;	OrdinalValue += ordL10;	HaKadmiValue += hakL10;	HaPeratiValue += hapL10;	MiluyValue += milL10;	break;
	/*kaf*/		case "\u05DB":RagilValue += ragL11;	KolelValue += ragL11;	Kolel1Value += ragL11;	HaKlaliValue += ragL11;	ReducedlValue += redL11;	IntegralReducedlValue += redL11;	KatanValue += redL11;	OrdinalValue += ordL11;	HaKadmiValue += hakL11;	HaPeratiValue += hapL11;	MiluyValue += milL11;	break;
	/*lamed*/	case "\u05DC":RagilValue += ragL12;	KolelValue += ragL12;	Kolel1Value += ragL12;	HaKlaliValue += ragL12;	ReducedlValue += redL12;	IntegralReducedlValue += redL12;	KatanValue += redL12;	OrdinalValue += ordL12;	HaKadmiValue += hakL12;	HaPeratiValue += hapL12;	MiluyValue += milL12;	break;
	/*mem*/		case "\u05DE":RagilValue += ragL13;	KolelValue += ragL13;	Kolel1Value += ragL13;	HaKlaliValue += ragL13;	ReducedlValue += redL13;	IntegralReducedlValue += redL13;	KatanValue += redL13;	OrdinalValue += ordL13;	HaKadmiValue += hakL13;	HaPeratiValue += hapL13;	MiluyValue += milL13;	break;
	/*nun*/		case "\u05E0":RagilValue += ragL14;	KolelValue += ragL14;	Kolel1Value += ragL14;	HaKlaliValue += ragL14;	ReducedlValue += redL14;	IntegralReducedlValue += redL14;	KatanValue += redL14;	OrdinalValue += ordL14;	HaKadmiValue += hakL14;	HaPeratiValue += hapL14;	MiluyValue += milL14;	break;
	/*samech*/	case "\u05E1":RagilValue += ragL15;	KolelValue += ragL15;	Kolel1Value += ragL15;	HaKlaliValue += ragL15;	ReducedlValue += redL15;	IntegralReducedlValue += redL15;	KatanValue += redL15;	OrdinalValue += ordL15;	HaKadmiValue += hakL15;	HaPeratiValue += hapL15;	MiluyValue += milL15;	break;
	/*ayin*/	case "\u05E2":RagilValue += ragL16;	KolelValue += ragL16;	Kolel1Value += ragL16;	HaKlaliValue += ragL16;	ReducedlValue += redL16;	IntegralReducedlValue += redL16;	KatanValue += redL16;	OrdinalValue += ordL16;	HaKadmiValue += hakL16;	HaPeratiValue += hapL16;	MiluyValue += milL16;	break;
	/*pey*/		case "\u05E4":RagilValue += ragL17;	KolelValue += ragL17;	Kolel1Value += ragL17;	HaKlaliValue += ragL17;	ReducedlValue += redL17;	IntegralReducedlValue += redL17;	KatanValue += redL17;	OrdinalValue += ordL17;	HaKadmiValue += hakL17;	HaPeratiValue += hapL17;	MiluyValue += milL17;	break;
	/*tzadi*/	case "\u05E6":RagilValue += ragL18;	KolelValue += ragL18;	Kolel1Value += ragL18;	HaKlaliValue += ragL18;	ReducedlValue += redL18;	IntegralReducedlValue += redL18;	KatanValue += redL18;	OrdinalValue += ordL18;	HaKadmiValue += hakL18;	HaPeratiValue += hapL18;	MiluyValue += milL18;	break;
	/*kuf*/		case "\u05E7":RagilValue += ragL19;	KolelValue += ragL19;	Kolel1Value += ragL19;	HaKlaliValue += ragL19;	ReducedlValue += redL19;	IntegralReducedlValue += redL19;	KatanValue += redL19;	OrdinalValue += ordL19;	HaKadmiValue += hakL19;	HaPeratiValue += hapL19;	MiluyValue += milL19;	break;
	/*resh*/	case "\u05E8":RagilValue += ragL20;	KolelValue += ragL20;	Kolel1Value += ragL20;	HaKlaliValue += ragL20;	ReducedlValue += redL20;	IntegralReducedlValue += redL20;	KatanValue += redL20;	OrdinalValue += ordL20;	HaKadmiValue += hakL20;	HaPeratiValue += hapL20;	MiluyValue += milL20;	break;
	/*shin*/	case "\u05E9":RagilValue += ragL21;	KolelValue += ragL21;	Kolel1Value += ragL21;	HaKlaliValue += ragL21;	ReducedlValue += redL21;	IntegralReducedlValue += redL21;	KatanValue += redL21;	OrdinalValue += ordL21;	HaKadmiValue += hakL21;	HaPeratiValue += hapL21;	MiluyValue += milL21;	break;
	/*tav*/		case "\u05EA":RagilValue += ragL22;	KolelValue += ragL22;	Kolel1Value += ragL22;	HaKlaliValue += ragL22;	ReducedlValue += redL22;	IntegralReducedlValue += redL22;	KatanValue += redL22;	OrdinalValue += ordL22;	HaKadmiValue += hakL22;	HaPeratiValue += hapL22;	MiluyValue += milL22;	break;
	/*kaf F*/	case "\u05DA":RagilValue += ragL23;	KolelValue += ragL23;	Kolel1Value += ragL23;	HaKlaliValue += ragL23;	ReducedlValue += redL23;	IntegralReducedlValue += redL23;	KatanValue += redL23;	OrdinalValue += ordL23;	HaKadmiValue += hakL23;	HaPeratiValue += hapL23;	MiluyValue += milL23;	break;
	/*mem F*/	case "\u05DD":RagilValue += ragL24;	KolelValue += ragL24;	Kolel1Value += ragL24;	HaKlaliValue += ragL24;	ReducedlValue += redL24;	IntegralReducedlValue += redL24;	KatanValue += redL24;	OrdinalValue += ordL24;	HaKadmiValue += hakL24;	HaPeratiValue += hapL24;	MiluyValue += milL24;	break;
	/*nun F*/	case "\u05DF":RagilValue += ragL25;	KolelValue += ragL25;	Kolel1Value += ragL25;	HaKlaliValue += ragL25;	ReducedlValue += redL25;	IntegralReducedlValue += redL25;	KatanValue += redL25;	OrdinalValue += ordL25;	HaKadmiValue += hakL25;	HaPeratiValue += hapL25;	MiluyValue += milL25;	break;
	/*pey F*/	case "\u05E3":RagilValue += ragL26;	KolelValue += ragL26;	Kolel1Value += ragL26;	HaKlaliValue += ragL26;	ReducedlValue += redL26;	IntegralReducedlValue += redL26;	KatanValue += redL26;	OrdinalValue += ordL26;	HaKadmiValue += hakL26;	HaPeratiValue += hapL26;	MiluyValue += milL26;	break;
	/*tzadi F*/	case "\u05E5":RagilValue += ragL27;	KolelValue += ragL27;	Kolel1Value += ragL27;	HaKlaliValue += ragL27;	ReducedlValue += redL27;	IntegralReducedlValue += redL27;	KatanValue += redL27;	OrdinalValue += ordL27;	HaKadmiValue += hakL27;	HaPeratiValue += hapL27;	MiluyValue += milL27;	break;
	default:break;
	}
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//																																													//
//																																													//
//																																													//
//																				METHODS OF HEBREW ENCRYPTION																		//
//																																													//
//																																													//
//																																													//
//																																													//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Get all other forms of encryption for word 1 (regardless of which method is selected) to be stored in the database.
// AL-BaM
letter = '';
for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":letter = "\u05DC";gematria2ALBaM += L12;break;	// lamed
			/*bet*/		case "\u05D1":letter = "\u05DE";gematria2ALBaM += L13;break;	// mem
			/*gimel*/	case "\u05D2":letter = "\u05E0";gematria2ALBaM += L14;break;	// nun
			/*dalet*/	case "\u05D3":letter = "\u05E1";gematria2ALBaM += L15;break;	// samech
			/*hey*/		case "\u05D4":letter = "\u05E2";gematria2ALBaM += L16;break;	// ayin
			/*vav*/		case "\u05D5":letter = "\u05E4";gematria2ALBaM += L17;break;	// pey
			/*zayin*/	case "\u05D6":letter = "\u05E6";gematria2ALBaM += L18;break;	// tzadi
			/*chet*/	case "\u05D7":letter = "\u05E7";gematria2ALBaM += L19;break;	// kuf
			/*tet*/		case "\u05D8":letter = "\u05E8";gematria2ALBaM += L20;break;	// resh
			/*yod*/		case "\u05D9":letter = "\u05E9";gematria2ALBaM += L21;break;	// shin
			/*kaf*/		case "\u05DB":letter = "\u05EA";gematria2ALBaM += L22;break;	// tav
			/*lamed*/	case "\u05DC":letter = "\u05D0";gematria2ALBaM += L01;break;	// aleph
			/*mem*/		case "\u05DE":letter = "\u05D1";gematria2ALBaM += L02;break;	// bet
			/*nun*/		case "\u05E0":letter = "\u05D2";gematria2ALBaM += L03;break;	// gimel
			/*samech*/	case "\u05E1":letter = "\u05D3";gematria2ALBaM += L04;break;	// dalet
			/*ayin*/	case "\u05E2":letter = "\u05D4";gematria2ALBaM += L05;break;	// hey
			/*pey*/		case "\u05E4":letter = "\u05D5";gematria2ALBaM += L06;break;	// vav
			/*tzadi*/	case "\u05E6":letter = "\u05D6";gematria2ALBaM += L07;break;	// zayin
			/*kuf*/		case "\u05E7":letter = "\u05D7";gematria2ALBaM += L08;break;	// chet
			/*resh*/	case "\u05E8":letter = "\u05D8";gematria2ALBaM += L09;break;	// tet
			/*shin*/	case "\u05E9":letter = "\u05D9";gematria2ALBaM += L10;break;	// yod
			/*tav*/		case "\u05EA":letter = "\u05DB";gematria2ALBaM += L11;break;	// kaf
			/*kaf F*/	case "\u05DA":letter = "\u05EA";gematria2ALBaM += L22;break;	// tav
			/*mem F*/	case "\u05DD":letter = "\u05D1";gematria2ALBaM += L02;break;	// bet
			/*nun F*/	case "\u05DF":letter = "\u05D2";gematria2ALBaM += L03;break;	// gimel
			/*pey F*/	case "\u05E3":letter = "\u05D5";gematria2ALBaM += L06;break;	// vav
			/*tzadi F*/	case "\u05E5":letter = "\u05D6";gematria2ALBaM += L07;break;	// zayin
			default:letter = "";break;
		}
		ALBaM += letter;
		
		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";ALBaM = ALBaM.substring(0, ALBaM.length - 1);gematria2ALBaM -= L11;gematria2ALBaM += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";ALBaM = ALBaM.substring(0, ALBaM.length - 1);gematria2ALBaM -= L13;gematria2ALBaM += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";ALBaM = ALBaM.substring(0, ALBaM.length - 1);gematria2ALBaM -= L14;gematria2ALBaM += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";ALBaM = ALBaM.substring(0, ALBaM.length - 1);gematria2ALBaM -= L17;gematria2ALBaM += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";ALBaM = ALBaM.substring(0, ALBaM.length - 1);gematria2ALBaM -= L18;gematria2ALBaM += L27;break;	// tzadi F
				default:letter = "";break;
			}
			ALBaM += letter;
		}
	}

	// AT-BaSh
	letter = '';
	for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":letter = "\u05EA";gematria2ATBaSh += L22;break;	// tav
			/*bet*/		case "\u05D1":letter = "\u05E9";gematria2ATBaSh += L21;break;	// shin
			/*gimel*/	case "\u05D2":letter = "\u05E8";gematria2ATBaSh += L20;break;	// resh
			/*dalet*/	case "\u05D3":letter = "\u05E7";gematria2ATBaSh += L19;break;	// kuf
			/*hey*/		case "\u05D4":letter = "\u05E6";gematria2ATBaSh += L18;break;	// tzadi
			/*vav*/		case "\u05D5":letter = "\u05E4";gematria2ATBaSh += L17;break;	// pey
			/*zayin*/	case "\u05D6":letter = "\u05E2";gematria2ATBaSh += L16;break;	// ayin
			/*chet*/	case "\u05D7":letter = "\u05E1";gematria2ATBaSh += L15;break;	// samech
			/*tet*/		case "\u05D8":letter = "\u05E0";gematria2ATBaSh += L14;break;	// nun
			/*yod*/		case "\u05D9":letter = "\u05DE";gematria2ATBaSh += L13;break;	// mem
			/*kaf*/		case "\u05DB":letter = "\u05DC";gematria2ATBaSh += L12;break;	// lamed
			/*lamed*/	case "\u05DC":letter = "\u05DB";gematria2ATBaSh += L11;break;	// kaf
			/*mem*/		case "\u05DE":letter = "\u05D9";gematria2ATBaSh += L10;break;	// yod
			/*nun*/		case "\u05E0":letter = "\u05D8";gematria2ATBaSh += L09;break;	// tet
			/*samech*/	case "\u05E1":letter = "\u05D7";gematria2ATBaSh += L08;break;	// chet
			/*ayin*/	case "\u05E2":letter = "\u05D6";gematria2ATBaSh += L07;break;	// zayin
			/*pey*/		case "\u05E4":letter = "\u05D5";gematria2ATBaSh += L06;break;	// vav
			/*tzadi*/	case "\u05E6":letter = "\u05D4";gematria2ATBaSh += L05;break;	// hey
			/*kuf*/		case "\u05E7":letter = "\u05D3";gematria2ATBaSh += L04;break;	// dalet
			/*resh*/	case "\u05E8":letter = "\u05D2";gematria2ATBaSh += L03;break;	// gimel
			/*shin*/	case "\u05E9":letter = "\u05D1";gematria2ATBaSh += L02;break;	// bet
			/*tav*/		case "\u05EA":letter = "\u05D0";gematria2ATBaSh += L01;break;	// aleph
			/*kaf F*/	case "\u05DA":letter = "\u05DC";gematria2ATBaSh += L12;break;	// lamed
			/*mem F*/	case "\u05DD":letter = "\u05D9";gematria2ATBaSh += L10;break;	// yod
			/*nun F*/	case "\u05DF":letter = "\u05D8";gematria2ATBaSh += L09;break;	// tet
			/*pey F*/	case "\u05E3":letter = "\u05D5";gematria2ATBaSh += L06;break;	// vav
			/*tzadi F*/	case "\u05E5":letter = "\u05D4";gematria2ATBaSh += L05;break;	// hey
			default:letter = "";break;
		}
		ATBaSh += letter;
// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
if(i+1 == alphas.length){
	switch(letter){
		/*kaf*/		case "\u05DB":letter = "\u05DA";ATBaSh = ATBaSh.substring(0, ATBaSh.length - 1);gematria2ATBaSh -= L11;gematria2ATBaSh += L23;break;	// kaf F
		/*mem*/		case "\u05DE":letter = "\u05DD";ATBaSh = ATBaSh.substring(0, ATBaSh.length - 1);gematria2ATBaSh -= L13;gematria2ATBaSh += L24;break;	// mem F
		/*nun*/		case "\u05E0":letter = "\u05DF";ATBaSh = ATBaSh.substring(0, ATBaSh.length - 1);gematria2ATBaSh -= L14;gematria2ATBaSh += L25;break;	// nun F
		/*pey*/		case "\u05E4":letter = "\u05E3";ATBaSh = ATBaSh.substring(0, ATBaSh.length - 1);gematria2ATBaSh -= L17;gematria2ATBaSh += L26;break;	// pey F
		/*tzadi*/	case "\u05E6":letter = "\u05E5";ATBaSh = ATBaSh.substring(0, ATBaSh.length - 1);gematria2ATBaSh -= L18;gematria2ATBaSh += L27;break;	// tzadi F
		default:letter = "";break;
	}
	ATBaSh += letter;
}
}

// ACh-BI
letter = '';
for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":letter = "\u05DB";gematria2AChBI += L11;break;	// kaf
			/*bet*/		case "\u05D1":letter = "\u05D9";gematria2AChBI += L10;break;	// yod
			/*gimel*/	case "\u05D2":letter = "\u05D8";gematria2AChBI += L09;break;	// tet
			/*dalet*/	case "\u05D3":letter = "\u05D7";gematria2AChBI += L08;break;	// chet
			/*hey*/		case "\u05D4":letter = "\u05D6";gematria2AChBI += L07;break;	// zayin
			/*vav*/		case "\u05D5":letter = "\u05D5";gematria2AChBI += L06;break;	// vav
			/*zayin*/	case "\u05D6":letter = "\u05D4";gematria2AChBI += L05;break;	// hey
			/*chet*/	case "\u05D7":letter = "\u05D3";gematria2AChBI += L04;break;	// dalet
			/*tet*/		case "\u05D8":letter = "\u05D2";gematria2AChBI += L03;break;	// gimel
			/*yod*/		case "\u05D9":letter = "\u05D1";gematria2AChBI += L02;break;	// bet
			/*kaf*/		case "\u05DB":letter = "\u05D0";gematria2AChBI += L01;break;	// aleph
			/*lamed*/	case "\u05DC":letter = "\u05EA";gematria2AChBI += L22;break;	// tav
			/*mem*/		case "\u05DE":letter = "\u05E9";gematria2AChBI += L21;break;	// shin
			/*nun*/		case "\u05E0":letter = "\u05E8";gematria2AChBI += L20;break;	// resh
			/*samech*/	case "\u05E1":letter = "\u05E7";gematria2AChBI += L19;break;	// kuf
			/*ayin*/	case "\u05E2":letter = "\u05E6";gematria2AChBI += L18;break;	// tzadi
			/*pey*/		case "\u05E4":letter = "\u05E4";gematria2AChBI += L17;break;	// pey
			/*tzadi*/	case "\u05E6":letter = "\u05E2";gematria2AChBI += L16;break;	// ayin
			/*kuf*/		case "\u05E7":letter = "\u05E1";gematria2AChBI += L15;break;	// samech
			/*resh*/	case "\u05E8":letter = "\u05E0";gematria2AChBI += L14;break;	// nun
			/*shin*/	case "\u05E9":letter = "\u05DE";gematria2AChBI += L13;break;	// mem
			/*tav*/		case "\u05EA":letter = "\u05DC";gematria2AChBI += L12;break;	// lamed
			/*kaf F*/	case "\u05DA":letter = "\u05D0";gematria2AChBI += L01;break;	// aleph
			/*mem F*/	case "\u05DD":letter = "\u05E9";gematria2AChBI += L21;break;	// shin
			/*nun F*/	case "\u05DF":letter = "\u05E8";gematria2AChBI += L20;break;	// resh
			/*pey F*/	case "\u05E3":letter = "\u05E4";gematria2AChBI += L17;break;	// pey
			/*tzadi F*/	case "\u05E5":letter = "\u05E2";gematria2AChBI += L16;break;	// ayin
			default:letter = "";break;
		}
		AChBI += letter;
		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
			/*kaf*/		case "\u05DB":letter = "\u05DA";AChBI = AChBI.substring(0, AChBI.length - 1);gematria2AChBI -= L11;gematria2AChBI += L23;break;	// kaf F
			/*mem*/		case "\u05DE":letter = "\u05DD";AChBI = AChBI.substring(0, AChBI.length - 1);gematria2AChBI -= L13;gematria2AChBI += L24;break;	// mem F
			/*nun*/		case "\u05E0":letter = "\u05DF";AChBI = AChBI.substring(0, AChBI.length - 1);gematria2AChBI -= L14;gematria2AChBI += L25;break;	// nun F
			/*pey*/		case "\u05E4":letter = "\u05E3";AChBI = AChBI.substring(0, AChBI.length - 1);gematria2AChBI -= L17;gematria2AChBI += L26;break;	// pey F
			/*tzadi*/	case "\u05E6":letter = "\u05E5";AChBI = AChBI.substring(0, AChBI.length - 1);gematria2AChBI -= L18;gematria2AChBI += L27;break;	// tzadi F
			default:letter = "";break;
			}
			AChBI += letter;
		}
	}

// AYiK-BeCheR
letter = '';
for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D9";gematria2AYiKBeCheR += L10;break;	// yod
			/*bet*/		case "\u05D1":letter = "\u05DB";gematria2AYiKBeCheR += L11;break;	// kaf
			/*gimel*/	case "\u05D2":letter = "\u05DC";gematria2AYiKBeCheR += L12;break;	// lamed
			/*dalet*/	case "\u05D3":letter = "\u05DE";gematria2AYiKBeCheR += L13;break;	// mem
			/*hey*/		case "\u05D4":letter = "\u05E0";gematria2AYiKBeCheR += L14;break;	// nun
			/*vav*/		case "\u05D5":letter = "\u05E1";gematria2AYiKBeCheR += L15;break;	// samech
			/*zayin*/	case "\u05D6":letter = "\u05E2";gematria2AYiKBeCheR += L16;break;	// ayin
			/*chet*/	case "\u05D7":letter = "\u05E4";gematria2AYiKBeCheR += L17;break;	// pey
			/*tet*/		case "\u05D8":letter = "\u05E6";gematria2AYiKBeCheR += L18;break;	// tzadi
			/*yod*/		case "\u05D9":letter = "\u05E7";gematria2AYiKBeCheR += L19;break;	// kuf
			/*kaf*/		case "\u05DB":letter = "\u05E8";gematria2AYiKBeCheR += L20;break;	// resh
			/*lamed*/	case "\u05DC":letter = "\u05E9";gematria2AYiKBeCheR += L21;break;	// shin
			/*mem*/		case "\u05DE":letter = "\u05EA";gematria2AYiKBeCheR += L22;break;	// tav
			/*nun*/		case "\u05E0":letter = "\u05DB";gematria2AYiKBeCheR += L11;break;	// kaf
			/*samech*/	case "\u05E1":letter = "\u05DE";gematria2AYiKBeCheR += L13;break;	// mem
			/*ayin*/	case "\u05E2":letter = "\u05E0";gematria2AYiKBeCheR += L14;break;	// nun
			/*pey*/		case "\u05E4":letter = "\u05E4";gematria2AYiKBeCheR += L17;break;	// pey
			/*tzadi*/	case "\u05E6":letter = "\u05E6";gematria2AYiKBeCheR += L18;break;	// tzadi
			/*kuf*/		case "\u05E7":letter = "\u05D0";gematria2AYiKBeCheR += L01;break;	// aleph
			/*resh*/	case "\u05E8":letter = "\u05D1";gematria2AYiKBeCheR += L02;break;	// bet
			/*shin*/	case "\u05E9":letter = "\u05D2";gematria2AYiKBeCheR += L03;break;	// gimel
			/*tav*/		case "\u05EA":letter = "\u05D3";gematria2AYiKBeCheR += L04;break;	// dalet
			/*kaf F*/	case "\u05DA":letter = "\u05D4";gematria2AYiKBeCheR += L05;break;	// hey
			/*mem F*/	case "\u05DD":letter = "\u05D5";gematria2AYiKBeCheR += L06;break;	// vav
			/*nun F*/	case "\u05DF":letter = "\u05D6";gematria2AYiKBeCheR += L07;break;	// zayin
			/*pey F*/	case "\u05E3":letter = "\u05D7";gematria2AYiKBeCheR += L08;break;	// chet
			/*tzadi F*/	case "\u05E5":letter = "\u05D8";gematria2AYiKBeCheR += L09;break;	// tet
			default:letter = "";break;
		}
		AYiKBeCheR += letter;
			
		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AYiKBeCheR = AYiKBeCheR.substring(0, AYiKBeCheR.length - 1);gematria2AYiKBeCheR -= L11;gematria2AYiKBeCheR += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AYiKBeCheR = AYiKBeCheR.substring(0, AYiKBeCheR.length - 1);gematria2AYiKBeCheR -= L13;gematria2AYiKBeCheR += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AYiKBeCheR = AYiKBeCheR.substring(0, AYiKBeCheR.length - 1);gematria2AYiKBeCheR -= L14;gematria2AYiKBeCheR += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AYiKBeCheR = AYiKBeCheR.substring(0, AYiKBeCheR.length - 1);gematria2AYiKBeCheR -= L17;gematria2AYiKBeCheR += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AYiKBeCheR = AYiKBeCheR.substring(0, AYiKBeCheR.length - 1);gematria2AYiKBeCheR -= L18;gematria2AYiKBeCheR += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AYiKBeCheR += letter;
		}
	}

// AChaS-BeTA
letter = '';
for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D7";gematria2AChaSBeTA += L08;break;	// chet
			/*bet*/		case "\u05D1":letter = "\u05D8";gematria2AChaSBeTA += L09;break;	// tet
			/*gimel*/	case "\u05D2":letter = "\u05D9";gematria2AChaSBeTA += L10;break;	// yod
			/*dalet*/	case "\u05D3":letter = "\u05DB";gematria2AChaSBeTA += L11;break;	// kaf
			/*hey*/		case "\u05D4":letter = "\u05DC";gematria2AChaSBeTA += L12;break;	// lamed
			/*vav*/		case "\u05D5":letter = "\u05DE";gematria2AChaSBeTA += L13;break;	// mem
			/*zayin*/	case "\u05D6":letter = "\u05E0";gematria2AChaSBeTA += L14;break;	// nun
			/*chet*/	case "\u05D7":letter = "\u05E1";gematria2AChaSBeTA += L15;break;	// samech
			/*tet*/		case "\u05D8":letter = "\u05E2";gematria2AChaSBeTA += L16;break;	// ayin
			/*yod*/		case "\u05D9":letter = "\u05E4";gematria2AChaSBeTA += L17;break;	// pey
			/*kaf*/		case "\u05DB":letter = "\u05E6";gematria2AChaSBeTA += L18;break;	// tzadi
			/*lamed*/	case "\u05DC":letter = "\u05E7";gematria2AChaSBeTA += L19;break;	// kuf
			/*mem*/		case "\u05DE":letter = "\u05E8";gematria2AChaSBeTA += L20;break;	// resh
			/*nun*/		case "\u05E0":letter = "\u05E9";gematria2AChaSBeTA += L21;break;	// shin
			/*samech*/	case "\u05E1":letter = "\u05D0";gematria2AChaSBeTA += L01;break;	// aleph
			/*ayin*/	case "\u05E2":letter = "\u05D1";gematria2AChaSBeTA += L02;break;	// bet
			/*pey*/		case "\u05E4":letter = "\u05D2";gematria2AChaSBeTA += L03;break;	// gimel
			/*tzadi*/	case "\u05E6":letter = "\u05D3";gematria2AChaSBeTA += L04;break;	// dalet
			/*kuf*/		case "\u05E7":letter = "\u05D4";gematria2AChaSBeTA += L05;break;	// hey
			/*resh*/	case "\u05E8":letter = "\u05D5";gematria2AChaSBeTA += L06;break;	// vav
			/*shin*/	case "\u05E9":letter = "\u05D6";gematria2AChaSBeTA += L07;break;	// zayin
			/*tav*/		case "\u05EA":letter = "\u05EA";gematria2AChaSBeTA += L22;break;	// tav
			/*kaf F*/	case "\u05DA":letter = "\u05E6";gematria2AChaSBeTA += L18;break;	// tzadi
			/*mem F*/	case "\u05DD":letter = "\u05E8";gematria2AChaSBeTA += L20;break;	// resh
			/*nun F*/	case "\u05DF":letter = "\u05E9";gematria2AChaSBeTA += L21;break;	// shin
			/*pey F*/	case "\u05E3":letter = "\u05D2";gematria2AChaSBeTA += L03;break;	// gimel
			/*tzadi F*/	case "\u05E5":letter = "\u05D3";gematria2AChaSBeTA += L04;break;	// dalet
			default:letter = "";break;
		}
		AChaSBeTA += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AChaSBeTA = AChaSBeTA.substring(0, AChaSBeTA.length - 1);gematria2AChaSBeTA -= L11;gematria2AChaSBeTA += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AChaSBeTA = AChaSBeTA.substring(0, AChaSBeTA.length - 1);gematria2AChaSBeTA -= L13;gematria2AChaSBeTA += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AChaSBeTA = AChaSBeTA.substring(0, AChaSBeTA.length - 1);gematria2AChaSBeTA -= L14;gematria2AChaSBeTA += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AChaSBeTA = AChaSBeTA.substring(0, AChaSBeTA.length - 1);gematria2AChaSBeTA -= L17;gematria2AChaSBeTA += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AChaSBeTA = AChaSBeTA.substring(0, AChaSBeTA.length - 1);gematria2AChaSBeTA -= L18;gematria2AChaSBeTA += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AChaSBeTA += letter;
		}
	}

// AT-BaCh
letter = '';
for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D8";gematria2ATBaCh += L09;break;	// tet
			/*bet*/		case "\u05D1":letter = "\u05D7";gematria2ATBaCh += L08;break;	// chet
			/*gimel*/	case "\u05D2":letter = "\u05D6";gematria2ATBaCh += L07;break;	// zayin
			/*dalet*/	case "\u05D3":letter = "\u05D5";gematria2ATBaCh += L06;break;	// vav
			/*hey*/		case "\u05D4":letter = "\u05D4";gematria2ATBaCh += L05;break;	// hey
			/*vav*/		case "\u05D5":letter = "\u05D3";gematria2ATBaCh += L04;break;	// dalet
			/*zayin*/	case "\u05D6":letter = "\u05D2";gematria2ATBaCh += L03;break;	// gimel
			/*chet*/	case "\u05D7":letter = "\u05D1";gematria2ATBaCh += L02;break;	// bet
			/*tet*/		case "\u05D8":letter = "\u05D0";gematria2ATBaCh += L01;break;	// aleph
			/*yod*/		case "\u05D9":letter = "\u05E6";gematria2ATBaCh += L18;break;	// tzadi
			/*kaf*/		case "\u05DB":letter = "\u05E4";gematria2ATBaCh += L17;break;	// pey
			/*lamed*/	case "\u05DC":letter = "\u05E2";gematria2ATBaCh += L16;break;	// ayin
			/*mem*/		case "\u05DE":letter = "\u05E1";gematria2ATBaCh += L15;break;	// samech
			/*nun*/		case "\u05E0":letter = "\u05E0";gematria2ATBaCh += L14;break;	// nun
			/*samech*/	case "\u05E1":letter = "\u05DE";gematria2ATBaCh += L13;break;	// mem
			/*ayin*/	case "\u05E2":letter = "\u05DC";gematria2ATBaCh += L12;break;	// lamed
			/*pey*/		case "\u05E4":letter = "\u05DB";gematria2ATBaCh += L11;break;	// kaf
			/*tzadi*/	case "\u05E6":letter = "\u05D9";gematria2ATBaCh += L10;break;	// yod
			/*kuf*/		case "\u05E7":letter = "\u05EA";gematria2ATBaCh += L22;break;	// tav
			/*resh*/	case "\u05E8":letter = "\u05E9";gematria2ATBaCh += L21;break;	// shin
			/*shin*/	case "\u05E9":letter = "\u05E8";gematria2ATBaCh += L20;break;	// resh
			/*tav*/		case "\u05EA":letter = "\u05E7";gematria2ATBaCh += L19;break;	// kuf
			/*kaf F*/	case "\u05DA":letter = "\u05E4";gematria2ATBaCh += L17;break;	// pey
			/*mem F*/	case "\u05DD":letter = "\u05E1";gematria2ATBaCh += L15;break;	// samech
			/*nun F*/	case "\u05DF":letter = "\u05E0";gematria2ATBaCh += L14;break;	// nun
			/*pey F*/	case "\u05E3":letter = "\u05DB";gematria2ATBaCh += L11;break;	// kaf
			/*tzadi F*/	case "\u05E5":letter = "\u05D9";gematria2ATBaCh += L10;break;	// yod
			default:letter = "";break;
		}
		ATBaCh += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";ATBaCh = ATBaCh.substring(0, ATBaCh.length - 1);gematria2ATBaCh -= L11;gematria2ATBaCh += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";ATBaCh = ATBaCh.substring(0, ATBaCh.length - 1);gematria2ATBaCh -= L13;gematria2ATBaCh += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";ATBaCh = ATBaCh.substring(0, ATBaCh.length - 1);gematria2ATBaCh -= L14;gematria2ATBaCh += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";ATBaCh = ATBaCh.substring(0, ATBaCh.length - 1);gematria2ATBaCh -= L17;gematria2ATBaCh += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";ATBaCh = ATBaCh.substring(0, ATBaCh.length - 1);gematria2ATBaCh -= L18;gematria2ATBaCh += L27;break;	// tzadi F
				default:letter = "";break;
			}
			ATBaCh += letter;
		}
	}

	// AT-BaCh w/ Finals
	letter = '';
	for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D8";gematria2ATBaCh999 += L09;break;	// tet
			/*bet*/		case "\u05D1":letter = "\u05D7";gematria2ATBaCh999 += L08;break;	// chet
			/*gimel*/	case "\u05D2":letter = "\u05D6";gematria2ATBaCh999 += L07;break;	// zayin
			/*dalet*/	case "\u05D3":letter = "\u05D5";gematria2ATBaCh999 += L06;break;	// vav
			/*hey*/		case "\u05D4":letter = "\u05D4";gematria2ATBaCh999 += L05;break;	// hey
			/*vav*/		case "\u05D5":letter = "\u05D3";gematria2ATBaCh999 += L04;break;	// dalet
			/*zayin*/	case "\u05D6":letter = "\u05D2";gematria2ATBaCh999 += L03;break;	// gimel
			/*chet*/	case "\u05D7":letter = "\u05D1";gematria2ATBaCh999 += L02;break;	// bet
			/*tet*/		case "\u05D8":letter = "\u05D0";gematria2ATBaCh999 += L01;break;	// aleph
			/*yod*/		case "\u05D9":letter = "\u05E6";gematria2ATBaCh999 += L18;break;	// tzadi
			/*kaf*/		case "\u05DB":letter = "\u05E4";gematria2ATBaCh999 += L17;break;	// pey
			/*lamed*/	case "\u05DC":letter = "\u05E2";gematria2ATBaCh999 += L16;break;	// ayin
			/*mem*/		case "\u05DE":letter = "\u05E1";gematria2ATBaCh999 += L15;break;	// samech
			/*nun*/		case "\u05E0":letter = "\u05E0";gematria2ATBaCh999 += L14;break;	// nun
			/*samech*/	case "\u05E1":letter = "\u05DE";gematria2ATBaCh999 += L13;break;	// mem
			/*ayin*/	case "\u05E2":letter = "\u05DC";gematria2ATBaCh999 += L12;break;	// lamed
			/*pey*/		case "\u05E4":letter = "\u05DB";gematria2ATBaCh999 += L11;break;	// kaf
			/*tzadi*/	case "\u05E6":letter = "\u05D9";gematria2ATBaCh999 += L10;break;	// yod
			/*kuf*/		case "\u05E7":letter = "\u05EA";gematria2ATBaCh999 += L22;break;	// tav
			/*resh*/	case "\u05E8":letter = "\u05E9";gematria2ATBaCh999 += L21;break;	// shin
			/*shin*/	case "\u05E9":letter = "\u05E8";gematria2ATBaCh999 += L20;break;	// resh
			/*tav*/		case "\u05EA":letter = "\u05E7";gematria2ATBaCh999 += L19;break;	// kuf
			/*kaf F*/	case "\u05DA":letter = "\u05DD";gematria2ATBaCh999 += L24;break;	// mem F
			/*mem F*/	case "\u05DD":letter = "\u05DA";gematria2ATBaCh999 += L23;break;	// kaf F
			/*nun F*/	case "\u05DF":letter = "\u05DF";gematria2ATBaCh999 += L25;break;	// nun F
			/*pey F*/	case "\u05E3":letter = "\u05E5";gematria2ATBaCh999 += L27;break;	// tzadi F
			/*tzadi F*/	case "\u05E5":letter = "\u05E3";gematria2ATBaCh999 += L26;break;	// pey F
			default:letter = "";break;
		}
		ATBaCh999 += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";ATBaCh999 = ATBaCh999.substring(0, ATBaCh999.length - 1);gematria2ATBaCh999 -= L11;gematria2ATBaCh999 += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";ATBaCh999 = ATBaCh999.substring(0, ATBaCh999.length - 1);gematria2ATBaCh999 -= L13;gematria2ATBaCh999 += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";ATBaCh999 = ATBaCh999.substring(0, ATBaCh999.length - 1);gematria2ATBaCh999 -= L14;gematria2ATBaCh999 += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";ATBaCh999 = ATBaCh999.substring(0, ATBaCh999.length - 1);gematria2ATBaCh999 -= L17;gematria2ATBaCh999 += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";ATBaCh999 = ATBaCh999.substring(0, ATBaCh999.length - 1);gematria2ATBaCh999 -= L18;gematria2ATBaCh999 += L27;break;	// tzadi F
				default:letter = "";break;
			}
			ATBaCh999 += letter;
		}
	}

// AiY-BaK
letter = '';
for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D9";gematria2AiYBaK += L10;break;	// yod
			/*bet*/		case "\u05D1":letter = "\u05DB";gematria2AiYBaK += L11;break;	// kaf
			/*gimel*/	case "\u05D2":letter = "\u05DC";gematria2AiYBaK += L12;break;	// lamed
			/*dalet*/	case "\u05D3":letter = "\u05DE";gematria2AiYBaK += L13;break;	// mem
			/*hey*/		case "\u05D4":letter = "\u05E0";gematria2AiYBaK += L14;break;	// nun
			/*vav*/		case "\u05D5":letter = "\u05E1";gematria2AiYBaK += L15;break;	// samech
			/*zayin*/	case "\u05D6":letter = "\u05E2";gematria2AiYBaK += L16;break;	// ayin
			/*chet*/	case "\u05D7":letter = "\u05E4";gematria2AiYBaK += L17;break;	// pey
			/*tet*/		case "\u05D8":letter = "\u05E6";gematria2AiYBaK += L18;break;	// tzadi
			/*yod*/		case "\u05D9":letter = "\u05D0";gematria2AiYBaK += L01;break; 	// aleph
			/*kaf*/		case "\u05DB":letter = "\u05D1";gematria2AiYBaK += L02;break;	// bet
			/*lamed*/	case "\u05DC":letter = "\u05D2";gematria2AiYBaK += L03;break;	// gimel
			/*mem*/		case "\u05DE":letter = "\u05D3";gematria2AiYBaK += L04;break;	// dalet
			/*nun*/		case "\u05E0":letter = "\u05D4";gematria2AiYBaK += L05;break;	// hey
			/*samech*/	case "\u05E1":letter = "\u05D5";gematria2AiYBaK += L06;break;	// vav
			/*ayin*/	case "\u05E2":letter = "\u05D6";gematria2AiYBaK += L07;break;	// zayin
			/*pey*/		case "\u05E4":letter = "\u05D7";gematria2AiYBaK += L08;break;	// chet
			/*tzadi*/	case "\u05E6":letter = "\u05D8";gematria2AiYBaK += L09;break;	// tet
			/*kuf*/		case "\u05E7":letter = "\u05E8";gematria2AiYBaK += L20;break;	// resh
			/*resh*/	case "\u05E8":letter = "\u05E7";gematria2AiYBaK += L19;break;	// kuf
			/*shin*/	case "\u05E9":letter = "\u05EA";gematria2AiYBaK += L22;break;	// tav
			/*tav*/		case "\u05EA":letter = "\u05E9";gematria2AiYBaK += L21;break;	// shin
			/*kaf F*/	case "\u05DA":letter = "\u05D1";gematria2AiYBaK += L02;break;	// bet
			/*mem F*/	case "\u05DD":letter = "\u05D3";gematria2AiYBaK += L04;break;	// dalet
			/*nun F*/	case "\u05DF":letter = "\u05D4";gematria2AiYBaK += L05;break;	// hey
			/*pey F*/	case "\u05E3":letter = "\u05D7";gematria2AiYBaK += L08;break;	// chet
			/*tzadi F*/	case "\u05E5":letter = "\u05D8";gematria2AiYBaK += L09;break;	// tet
			default:letter = input[i]; break; // Keep original character if not found
		}
		AiYBaK += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AiYBaK = AiYBaK.substring(0, AiYBaK.length - 1);gematria2AiYBaK -= L11;gematria2AiYBaK += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AiYBaK = AiYBaK.substring(0, AiYBaK.length - 1);gematria2AiYBaK -= L13;gematria2AiYBaK += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AiYBaK = AiYBaK.substring(0, AiYBaK.length - 1);gematria2AiYBaK -= L14;gematria2AiYBaK += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AiYBaK = AiYBaK.substring(0, AiYBaK.length - 1);gematria2AiYBaK -= L17;gematria2AiYBaK += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AiYBaK = AiYBaK.substring(0, AiYBaK.length - 1);gematria2AiYBaK -= L18;gematria2AiYBaK += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AiYBaK += letter;
		}
	}

// ATz-BaPh
letter = '';
for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E6";gematria2ATzBaPh += L18;break;	// tzadi
			/*bet*/		case "\u05D1":letter = "\u05E4";gematria2ATzBaPh += L17;break;	// pey
			/*gimel*/	case "\u05D2":letter = "\u05E0";gematria2ATzBaPh += L14;break;	// nun
			/*dalet*/	case "\u05D3":letter = "\u05DE";gematria2ATzBaPh += L13;break;	// mem
			/*hey*/		case "\u05D4":letter = "\u05DB";gematria2ATzBaPh += L11;break;	// kaf
			/*vav*/		case "\u05D5":letter = "\u05EA";gematria2ATzBaPh += L22;break;	// tav
			/*zayin*/	case "\u05D6":letter = "\u05E9";gematria2ATzBaPh += L21;break;	// shin
			/*chet*/	case "\u05D7":letter = "\u05E8";gematria2ATzBaPh += L20;break;	// resh
			/*tet*/		case "\u05D8":letter = "\u05E7";gematria2ATzBaPh += L19;break;	// kuf
			/*yod*/		case "\u05D9":letter = "\u05E6";gematria2ATzBaPh += L18;break;	// tzadi
			/*kaf*/		case "\u05DB":letter = "\u05E4";gematria2ATzBaPh += L17;break;	// pey
			/*lamed*/	case "\u05DC":letter = "\u05E2";gematria2ATzBaPh += L16;break;	// ayin
			/*mem*/		case "\u05DE":letter = "\u05E1";gematria2ATzBaPh += L15;break;	// samech
			/*nun*/		case "\u05E0":letter = "\u05E0";gematria2ATzBaPh += L14;break;	// nun
			/*samech*/	case "\u05E1":letter = "\u05DE";gematria2ATzBaPh += L13;break;	// mem
			/*ayin*/	case "\u05E2":letter = "\u05DC";gematria2ATzBaPh += L12;break;	// lamed
			/*pey*/		case "\u05E4":letter = "\u05DB";gematria2ATzBaPh += L11;break;	// kaf
			/*tzadi*/	case "\u05E6":letter = "\u05D9";gematria2ATzBaPh += L10;break;	// yod
			/*kuf*/		case "\u05E7":letter = "\u05D8";gematria2ATzBaPh += L09;break;	// tet
			/*resh*/	case "\u05E8":letter = "\u05D7";gematria2ATzBaPh += L08;break;	// chet
			/*shin*/	case "\u05E9":letter = "\u05D6";gematria2ATzBaPh += L07;break;	// zayin
			/*tav*/		case "\u05EA":letter = "\u05D5";gematria2ATzBaPh += L06;break;	// vav
			/*kaf F*/	case "\u05DA":letter = "\u05D4";gematria2ATzBaPh += L05;break;	// hey
			/*mem F*/	case "\u05DD":letter = "\u05D3";gematria2ATzBaPh += L04;break;	// dalet
			/*nun F*/	case "\u05DF":letter = "\u05D2";gematria2ATzBaPh += L03;break;	// gimel
			/*pey F*/	case "\u05E3":letter = "\u05D1";gematria2ATzBaPh += L02;break;	// bet
			/*tzadi F*/	case "\u05E5":letter = "\u05D0";gematria2ATzBaPh += L01;break;	// aleph
			default:letter = input[i]; break; // Keep original character if not found
		}
		ATzBaPh += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";ATzBaPh = ATzBaPh.substring(0, ATzBaPh.length - 1);gematria2ATzBaPh -= L11;gematria2ATzBaPh += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";ATzBaPh = ATzBaPh.substring(0, ATzBaPh.length - 1);gematria2ATzBaPh -= L13;gematria2ATzBaPh += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";ATzBaPh = ATzBaPh.substring(0, ATzBaPh.length - 1);gematria2ATzBaPh -= L14;gematria2ATzBaPh += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";ATzBaPh = ATzBaPh.substring(0, ATzBaPh.length - 1);gematria2ATzBaPh -= L17;gematria2ATzBaPh += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";ATzBaPh = ATzBaPh.substring(0, ATzBaPh.length - 1);gematria2ATzBaPh -= L18;gematria2ATzBaPh += L27;break;	// tzadi F
				default:letter = "";break;
			}
			ATzBaPh += letter;
		}
	}

// AL-BeTh
letter = '';
for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":letter = "\u05DC";gematria2ALBeTh += L12;break;	// lamed
			/*bet*/		case "\u05D1":letter = "\u05EA";gematria2ALBeTh += L22;break;	// tav
			/*gimel*/	case "\u05D2":letter = "\u05DE";gematria2ALBeTh += L13;break;	// mem
			/*dalet*/	case "\u05D3":letter = "\u05E9";gematria2ALBeTh += L21;break;	// shin
			/*hey*/		case "\u05D4":letter = "\u05E0";gematria2ALBeTh += L14;break;	// nun
			/*vav*/		case "\u05D5":letter = "\u05E8";gematria2ALBeTh += L20;break;	// resh
			/*zayin*/	case "\u05D6":letter = "\u05E1";gematria2ALBeTh += L15;break;	// samech
			/*chet*/	case "\u05D7":letter = "\u05E7";gematria2ALBeTh += L19;break;	// kuf
			/*tet*/		case "\u05D8":letter = "\u05E2";gematria2ALBeTh += L16;break;	// ayin
			/*yod*/		case "\u05D9":letter = "\u05E6";gematria2ALBeTh += L18;break;	// tzadi
			/*kaf*/		case "\u05DB":letter = "\u05E4";gematria2ALBeTh += L17;break;	// pey
			/*lamed*/	case "\u05DC":letter = "\u05D0";gematria2ALBeTh += L01;break;	// aleph
			/*mem*/		case "\u05DE":letter = "\u05D2";gematria2ALBeTh += L03;break;	// gimel
			/*nun*/		case "\u05E0":letter = "\u05D4";gematria2ALBeTh += L05;break;	// hey
			/*samech*/	case "\u05E1":letter = "\u05D6";gematria2ALBeTh += L07;break;	// zayin
			/*ayin*/	case "\u05E2":letter = "\u05D8";gematria2ALBeTh += L09;break;	// tet
			/*pey*/		case "\u05E4":letter = "\u05DB";gematria2ALBeTh += L11;break;	// kaf
			/*tzadi*/	case "\u05E6":letter = "\u05D9";gematria2ALBeTh += L10;break;	// yod
			/*kuf*/		case "\u05E7":letter = "\u05D7";gematria2ALBeTh += L08;break;	// chet
			/*resh*/	case "\u05E8":letter = "\u05D5";gematria2ALBeTh += L06;break;	// vav
			/*shin*/	case "\u05E9":letter = "\u05D3";gematria2ALBeTh += L04;break;	// dalet
			/*tav*/		case "\u05EA":letter = "\u05D1";gematria2ALBeTh += L02;break;	// bet
			/*kaf F*/	case "\u05DA":letter = "\u05E4";gematria2ALBeTh += L17;break;	// pey
			/*mem F*/	case "\u05DD":letter = "\u05D2";gematria2ALBeTh += L03;break;	// gimel
			/*nun F*/	case "\u05DF":letter = "\u05D4";gematria2ALBeTh += L05;break;	// hey
			/*pey F*/	case "\u05E3":letter = "\u05D8";gematria2ALBeTh += L11;break;	// kaf
			/*tzadi F*/	case "\u05E5":letter = "\u05D9";gematria2ALBeTh += L10;break;	// yod
			default:letter = input[i]; break; // Keep original character if not found
		}
		ALBeTh += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";ALBeTh = ALBeTh.substring(0, ALBeTh.length - 1);gematria2ALBeTh -= L11;gematria2ALBeTh += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";ALBeTh = ALBeTh.substring(0, ALBeTh.length - 1);gematria2ALBeTh -= L13;gematria2ALBeTh += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";ALBeTh = ALBeTh.substring(0, ALBeTh.length - 1);gematria2ALBeTh -= L14;gematria2ALBeTh += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";ALBeTh = ALBeTh.substring(0, ALBeTh.length - 1);gematria2ALBeTh -= L17;gematria2ALBeTh += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";ALBeTh = ALBeTh.substring(0, ALBeTh.length - 1);gematria2ALBeTh -= L18;gematria2ALBeTh += L27;break;	// tzadi F
				default:letter = "";break;
			}
			ALBeTh += letter;
		}
	}

// Ofanim
letter = '';
for (var i=0; i < alphas.length; i++){
		switch(array[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E4";gematria2Ofanim += L17;break;	// pey
			/*bet*/		case "\u05D1":letter = "\u05EA";gematria2Ofanim += L22;break;	// tav
			/*gimel*/	case "\u05D2":letter = "\u05DC";gematria2Ofanim += L12;break;	// lamed
			/*dalet*/	case "\u05D3":letter = "\u05EA";gematria2Ofanim += L22;break;	// tav
			/*hey*/		case "\u05D4":letter = "\u05D0";gematria2Ofanim += L01;break;	// aleph
			/*vav*/		case "\u05D5":letter = "\u05D5";gematria2Ofanim += L06;break;	// vav
			/*zayin*/	case "\u05D6":letter = "\u05E0";gematria2Ofanim += L14;break;	// nun
			/*chet*/	case "\u05D7":letter = "\u05EA";gematria2Ofanim += L22;break;	// tav
			/*tet*/		case "\u05D8":letter = "\u05EA";gematria2Ofanim += L22;break;	// tav
			/*yod*/		case "\u05D9":letter = "\u05D3";gematria2Ofanim += L04;break;	// dalet
			/*kaf*/		case "\u05DB":letter = "\u05E4";gematria2Ofanim += L17;break;	// pey
			/*lamed*/	case "\u05DC":letter = "\u05D3";gematria2Ofanim += L04;break;	// delet
			/*mem*/		case "\u05DE":letter = "\u05DE";gematria2Ofanim += L13;break;	// mem
			/*nun*/		case "\u05E0":letter = "\u05E0";gematria2Ofanim += L14;break;	// nun
			/*samech*/	case "\u05E1":letter = "\u05DB";gematria2Ofanim += L11;break;	// kaf
			/*ayin*/	case "\u05E2":letter = "\u05E0";gematria2Ofanim += L14;break;	// nun
			/*pey*/		case "\u05E4":letter = "\u05D0";gematria2Ofanim += L01;break;	// aleph
			/*tzadi*/	case "\u05E6":letter = "\u05D9";gematria2Ofanim += L10;break;	// yod
			/*kuf*/		case "\u05E7":letter = "\u05E4";gematria2Ofanim += L17;break;	// pey
			/*resh*/	case "\u05E8":letter = "\u05E9";gematria2Ofanim += L21;break;	// shin
			/*shin*/	case "\u05E9":letter = "\u05E0";gematria2Ofanim += L14;break;	// nun
			/*tav*/		case "\u05EA":letter = "\u05D5";gematria2Ofanim += L06;break;	// vav
			/*kaf F*/	case "\u05DA":letter = "\u05E4";gematria2Ofanim += L17;break;	// pey
			/*mem F*/	case "\u05DD":letter = "\u05DE";gematria2Ofanim += L13;break;	// mem
			/*nun F*/	case "\u05DF":letter = "\u05E0";gematria2Ofanim += L14;break;	// nun
			/*pey F*/	case "\u05E3":letter = "\u05D0";gematria2Ofanim += L01;break;	// aleph
			/*tzadi F*/	case "\u05E5":letter = "\u05D9";gematria2Ofanim += L10;break;	// yod
			default:letter = input[i]; break; // Keep original character if not found
		}
		Ofanim += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == alphas.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";Ofanim = Ofanim.substring(0, Ofanim.length - 1);gematria2Ofanim -= L11;gematria2Ofanim += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";Ofanim = Ofanim.substring(0, Ofanim.length - 1);gematria2Ofanim -= L13;gematria2Ofanim += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";Ofanim = Ofanim.substring(0, Ofanim.length - 1);gematria2Ofanim -= L14;gematria2Ofanim += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";Ofanim = Ofanim.substring(0, Ofanim.length - 1);gematria2Ofanim -= L17;gematria2Ofanim += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";Ofanim = Ofanim.substring(0, Ofanim.length - 1);gematria2Ofanim -= L18;gematria2Ofanim += L27;break;	// tzadi F
				default:letter = "";break;
			}
			Ofanim += letter;
		}
	}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//																																													//
//																																													//
//																																													//
//																	ADDITIONAL METHODS NOT TRADITIONALLY USED																		//
//																																													//
//																																													//
//																																													//
//																																													//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// AltATBaSh
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05EA";gematria2AltATBaSh += L22;break;	// tav
			/*bet*/		case "\u05D1":letter = "\u05E9";gematria2AltATBaSh += L21;break;	// shin
			/*gimel*/	case "\u05D2":letter = "\u05E8";gematria2AltATBaSh += L20;break;	// resh
			/*dalet*/	case "\u05D3":letter = "\u05E7";gematria2AltATBaSh += L19;break;	// kuf
			/*hey*/		case "\u05D4":letter = "\u05E6";gematria2AltATBaSh += L18;break;	// tzadi
			/*vav*/		case "\u05D5":letter = "\u05E4";gematria2AltATBaSh += L17;break;	// pey
			/*zayin*/	case "\u05D6":letter = "\u05E2";gematria2AltATBaSh += L16;break;	// ayin
			/*chet*/	case "\u05D7":letter = "\u05E1";gematria2AltATBaSh += L15;break;	// samech
			/*tet*/		case "\u05D8":letter = "\u05E0";gematria2AltATBaSh += L14;break;	// nun
			/*yod*/		case "\u05D9":letter = "\u05DE";gematria2AltATBaSh += L13;break;	// mem
			/*kaf*/		case "\u05DB":letter = "\u05DC";gematria2AltATBaSh += L12;break;	// lamed
			/*lamed*/	case "\u05DC":letter = "\u05DB";gematria2AltATBaSh += L11;break;	// kaf
			/*mem*/		case "\u05DE":letter = "\u05D9";gematria2AltATBaSh += L10;break;	// yod
			/*nun*/		case "\u05E0":letter = "\u05D8";gematria2AltATBaSh += L09;break;	// tet
			/*samech*/	case "\u05E1":letter = "\u05D7";gematria2AltATBaSh += L08;break;	// chet
			/*ayin*/	case "\u05E2":letter = "\u05D6";gematria2AltATBaSh += L07;break;	// zayin
			/*pey*/		case "\u05E4":letter = "\u05D5";gematria2AltATBaSh += L06;break;	// vav
			/*tzadi*/	case "\u05E6":letter = "\u05D4";gematria2AltATBaSh += L05;break;	// hey
			/*kuf*/		case "\u05E7":letter = "\u05D3";gematria2AltATBaSh += L04;break;	// dalet
			/*resh*/	case "\u05E8":letter = "\u05D2";gematria2AltATBaSh += L03;break;	// gimel
			/*shin*/	case "\u05E9":letter = "\u05D1";gematria2AltATBaSh += L02;break;	// bet
			/*tav*/		case "\u05EA":letter = "\u05D0";gematria2AltATBaSh += L01;break;	// aleph
			/*kaf F*/	case "\u05DA":letter = "\u05DC";gematria2AltATBaSh += L12;break;	// lamed
			/*mem F*/	case "\u05DD":letter = "\u05D9";gematria2AltATBaSh += L10;break;	// yod
			/*nun F*/	case "\u05DF":letter = "\u05D8";gematria2AltATBaSh += L09;break;	// tet
			/*pey F*/	case "\u05E3":letter = "\u05D5";gematria2AltATBaSh += L06;break;	// vav
			/*tzadi F*/	case "\u05E5":letter = "\u05D4";gematria2AltATBaSh += L05;break;	// hey
			default:letter = "";break;
		}
		AltATBaSh += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltATBaSh = AltATBaSh.substring(0, AltATBaSh.length - 1);gematria2AltATBaSh -= L11;gematria2AltATBaSh += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltATBaSh = AltATBaSh.substring(0, AltATBaSh.length - 1);gematria2AltATBaSh -= L13;gematria2AltATBaSh += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltATBaSh = AltATBaSh.substring(0, AltATBaSh.length - 1);gematria2AltATBaSh -= L14;gematria2AltATBaSh += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltATBaSh = AltATBaSh.substring(0, AltATBaSh.length - 1);gematria2AltATBaSh -= L17;gematria2AltATBaSh += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltATBaSh = AltATBaSh.substring(0, AltATBaSh.length - 1);gematria2AltATBaSh -= L18;gematria2AltATBaSh += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltATBaSh += letter;
		}
	}

// AltAShBaR
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E9";gematria2AltAShBaR += L21;break;	// shin
			/*bet*/		case "\u05D1":letter = "\u05E8";gematria2AltAShBaR += L20;break;	// resh
			/*gimel*/	case "\u05D2":letter = "\u05E7";gematria2AltAShBaR += L19;break;	// kuf
			/*dalet*/	case "\u05D3":letter = "\u05E6";gematria2AltAShBaR += L18;break;	// tzadi
			/*hey*/		case "\u05D4":letter = "\u05E4";gematria2AltAShBaR += L17;break;	// pey
			/*vav*/		case "\u05D5":letter = "\u05E2";gematria2AltAShBaR += L16;break;	// ayin
			/*zayin*/	case "\u05D6":letter = "\u05E1";gematria2AltAShBaR += L15;break;	// samech
			/*chet*/	case "\u05D7":letter = "\u05E0";gematria2AltAShBaR += L14;break;	// nun
			/*tet*/		case "\u05D8":letter = "\u05DE";gematria2AltAShBaR += L13;break;	// mem
			/*yod*/		case "\u05D9":letter = "\u05DC";gematria2AltAShBaR += L12;break;	// lamed
			/*kaf*/		case "\u05DB":letter = "\u05DB";gematria2AltAShBaR += L11;break;	// kaf
			/*lamed*/	case "\u05DC":letter = "\u05D9";gematria2AltAShBaR += L10;break;	// yod
			/*mem*/		case "\u05DE":letter = "\u05D8";gematria2AltAShBaR += L09;break;	// tet
			/*nun*/		case "\u05E0":letter = "\u05D7";gematria2AltAShBaR += L08;break;	// chet
			/*samech*/	case "\u05E1":letter = "\u05D6";gematria2AltAShBaR += L07;break;	// zayin
			/*ayin*/	case "\u05E2":letter = "\u05D5";gematria2AltAShBaR += L06;break;	// vav
			/*pey*/		case "\u05E4":letter = "\u05D4";gematria2AltAShBaR += L05;break;	// hey
			/*tzadi*/	case "\u05E6":letter = "\u05D3";gematria2AltAShBaR += L04;break;	// dalet
			/*kuf*/		case "\u05E7":letter = "\u05D2";gematria2AltAShBaR += L03;break;	// gimel
			/*resh*/	case "\u05E8":letter = "\u05D1";gematria2AltAShBaR += L02;break;	// bet
			/*shin*/	case "\u05E9":letter = "\u05D0";gematria2AltAShBaR += L01;break;	// aleph
			/*tav*/		case "\u05EA":letter = "\u05EA";gematria2AltAShBaR += L22;break;	// tav
			/*kaf F*/	case "\u05DA":letter = "\u05DB";gematria2AltAShBaR += L11;break;	// kaf
			/*mem F*/	case "\u05DD":letter = "\u05D8";gematria2AltAShBaR += L09;break;	// tet
			/*nun F*/	case "\u05DF":letter = "\u05D7";gematria2AltAShBaR += L08;break;	// chet
			/*pey F*/	case "\u05E3":letter = "\u05D4";gematria2AltAShBaR += L05;break;	// hey
			/*tzadi F*/	case "\u05E5":letter = "\u05D3";gematria2AltAShBaR += L04;break;	// dalet
			default:letter = "";break;
		}
		AltAShBaR += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAShBaR = AltAShBaR.substring(0, AltAShBaR.length - 1);gematria2AltAShBaR -= L11;gematria2AltAShBaR += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAShBaR = AltAShBaR.substring(0, AltAShBaR.length - 1);gematria2AltAShBaR -= L13;gematria2AltAShBaR += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAShBaR = AltAShBaR.substring(0, AltAShBaR.length - 1);gematria2AltAShBaR -= L14;gematria2AltAShBaR += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAShBaR = AltAShBaR.substring(0, AltAShBaR.length - 1);gematria2AltAShBaR -= L17;gematria2AltAShBaR += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAShBaR = AltAShBaR.substring(0, AltAShBaR.length - 1);gematria2AltAShBaR -= L18;gematria2AltAShBaR += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAShBaR += letter;
		}
	}

	// AltARBaK
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E8";gematria2AltARBaK += L20;break;	// resh
			/*bet*/		case "\u05D1":letter = "\u05E7";gematria2AltARBaK += L19;break;	// kuf
			/*gimel*/	case "\u05D2":letter = "\u05E6";gematria2AltARBaK += L18;break;	// tzadi
			/*dalet*/	case "\u05D3":letter = "\u05E4";gematria2AltARBaK += L17;break;	// pey
			/*hey*/		case "\u05D4":letter = "\u05E2";gematria2AltARBaK += L16;break;	// ayin
			/*vav*/		case "\u05D5":letter = "\u05E1";gematria2AltARBaK += L15;break;	// samech
			/*zayin*/	case "\u05D6":letter = "\u05E0";gematria2AltARBaK += L14;break;	// nun
			/*chet*/	case "\u05D7":letter = "\u05DE";gematria2AltARBaK += L13;break;	// mem
			/*tet*/		case "\u05D8":letter = "\u05DC";gematria2AltARBaK += L12;break;	// lamed
			/*yod*/		case "\u05D9":letter = "\u05DB";gematria2AltARBaK += L11;break;	// kaf
			/*kaf*/		case "\u05DB":letter = "\u05D9";gematria2AltARBaK += L10;break;	// yod
			/*lamed*/	case "\u05DC":letter = "\u05D8";gematria2AltARBaK += L09;break;	// tet
			/*mem*/		case "\u05DE":letter = "\u05D7";gematria2AltARBaK += L08;break;	// chet
			/*nun*/		case "\u05E0":letter = "\u05D6";gematria2AltARBaK += L07;break;	// zayin
			/*samech*/	case "\u05E1":letter = "\u05D5";gematria2AltARBaK += L06;break;	// vav
			/*ayin*/	case "\u05E2":letter = "\u05D4";gematria2AltARBaK += L05;break;	// hey
			/*pey*/		case "\u05E4":letter = "\u05D3";gematria2AltARBaK += L04;break;	// dalet
			/*tzadi*/	case "\u05E6":letter = "\u05D2";gematria2AltARBaK += L03;break;	// gimel
			/*kuf*/		case "\u05E7":letter = "\u05D1";gematria2AltARBaK += L02;break;	// bet
			/*resh*/	case "\u05E8":letter = "\u05D0";gematria2AltARBaK += L01;break;	// aleph
			/*shin*/	case "\u05E9":letter = "\u05EA";gematria2AltARBaK += L22;break;	// tav
			/*tav*/		case "\u05EA":letter = "\u05E9";gematria2AltARBaK += L21;break;	// shin
			/*kaf F*/	case "\u05DA":letter = "\u05D9";gematria2AltARBaK += L10;break;	// yod
			/*mem F*/	case "\u05DD":letter = "\u05D7";gematria2AltARBaK += L08;break;	// chet
			/*nun F*/	case "\u05DF":letter = "\u05D6";gematria2AltARBaK += L07;break;	// zayin
			/*pey F*/	case "\u05E3":letter = "\u05D3";gematria2AltARBaK += L04;break;	// dalet
			/*tzadi F*/	case "\u05E5":letter = "\u05D2";gematria2AltARBaK += L03;break;	// gimel
			default:letter = "";break;
		}
		AltARBaK += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltARBaK = AltARBaK.substring(0, AltARBaK.length - 1);gematria2AltARBaK -= L11;gematria2AltARBaK += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltARBaK = AltARBaK.substring(0, AltARBaK.length - 1);gematria2AltARBaK -= L13;gematria2AltARBaK += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltARBaK = AltARBaK.substring(0, AltARBaK.length - 1);gematria2AltARBaK -= L14;gematria2AltARBaK += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltARBaK = AltARBaK.substring(0, AltARBaK.length - 1);gematria2AltARBaK -= L17;gematria2AltARBaK += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltARBaK = AltARBaK.substring(0, AltARBaK.length - 1);gematria2AltARBaK -= L18;gematria2AltARBaK += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltARBaK += letter;
		}
	}

// AltAQBeTz
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E7";gematria2AltAQBeTz += L19;break;	// kuf
			/*bet*/		case "\u05D1":letter = "\u05E6";gematria2AltAQBeTz += L18;break;	// tzadi
			/*gimel*/	case "\u05D2":letter = "\u05E4";gematria2AltAQBeTz += L17;break;	// pey
			/*dalet*/	case "\u05D3":letter = "\u05E2";gematria2AltAQBeTz += L16;break;	// ayin
			/*hey*/		case "\u05D4":letter = "\u05E1";gematria2AltAQBeTz += L15;break;	// samech
			/*vav*/		case "\u05D5":letter = "\u05E0";gematria2AltAQBeTz += L14;break;	// nun
			/*zayin*/	case "\u05D6":letter = "\u05DE";gematria2AltAQBeTz += L13;break;	// mem
			/*chet*/	case "\u05D7":letter = "\u05DC";gematria2AltAQBeTz += L12;break;	// lamed
			/*tet*/		case "\u05D8":letter = "\u05DB";gematria2AltAQBeTz += L11;break;	// kaf
			/*yod*/		case "\u05D9":letter = "\u05D9";gematria2AltAQBeTz += L10;break;	// yod
			/*kaf*/		case "\u05DB":letter = "\u05D8";gematria2AltAQBeTz += L09;break;	// tet
			/*lamed*/	case "\u05DC":letter = "\u05D7";gematria2AltAQBeTz += L08;break;	// chet
			/*mem*/		case "\u05DE":letter = "\u05D6";gematria2AltAQBeTz += L07;break;	// zayin
			/*nun*/		case "\u05E0":letter = "\u05D5";gematria2AltAQBeTz += L06;break;	// vav
			/*samech*/	case "\u05E1":letter = "\u05D4";gematria2AltAQBeTz += L05;break;	// hey
			/*ayin*/	case "\u05E2":letter = "\u05D3";gematria2AltAQBeTz += L04;break;	// dalet
			/*pey*/		case "\u05E4":letter = "\u05D2";gematria2AltAQBeTz += L03;break;	// gimel
			/*tzadi*/	case "\u05E6":letter = "\u05D1";gematria2AltAQBeTz += L02;break;	// bet
			/*kuf*/		case "\u05E7":letter = "\u05D0";gematria2AltAQBeTz += L01;break;	// aleph
			/*resh*/	case "\u05E8":letter = "\u05EA";gematria2AltAQBeTz += L22;break;	// tav
			/*shin*/	case "\u05E9":letter = "\u05E9";gematria2AltAQBeTz += L21;break;	// shin
			/*tav*/		case "\u05EA":letter = "\u05E8";gematria2AltAQBeTz += L20;break;	// resh
			/*kaf F*/	case "\u05DA":letter = "\u05D8";gematria2AltAQBeTz += L09;break;	// tet
			/*mem F*/	case "\u05DD":letter = "\u05D6";gematria2AltAQBeTz += L07;break;	// zayin
			/*nun F*/	case "\u05DF":letter = "\u05D5";gematria2AltAQBeTz += L06;break;	// vav
			/*pey F*/	case "\u05E3":letter = "\u05D2";gematria2AltAQBeTz += L03;break;	// gimel
			/*tzadi F*/	case "\u05E5":letter = "\u05D1";gematria2AltAQBeTz += L02;break;	// bet
			default:letter = "";break;
		}
		AltAQBeTz += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAQBeTz = AltAQBeTz.substring(0, AltAQBeTz.length - 1);gematria2AltAQBeTz -= L11;gematria2AltAQBeTz += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAQBeTz = AltAQBeTz.substring(0, AltAQBeTz.length - 1);gematria2AltAQBeTz -= L13;gematria2AltAQBeTz += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAQBeTz = AltAQBeTz.substring(0, AltAQBeTz.length - 1);gematria2AltAQBeTz -= L14;gematria2AltAQBeTz += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAQBeTz = AltAQBeTz.substring(0, AltAQBeTz.length - 1);gematria2AltAQBeTz -= L17;gematria2AltAQBeTz += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAQBeTz = AltAQBeTz.substring(0, AltAQBeTz.length - 1);gematria2AltAQBeTz -= L18;gematria2AltAQBeTz += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAQBeTz += letter;
		}
	}

// AltEZBePh
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E6";gematria2AltEZBePh += L18;break;	// tzadi
			/*bet*/		case "\u05D1":letter = "\u05E4";gematria2AltEZBePh += L17;break;	// pey
			/*gimel*/	case "\u05D2":letter = "\u05E2";gematria2AltEZBePh += L16;break;	// ayin
			/*dalet*/	case "\u05D3":letter = "\u05E1";gematria2AltEZBePh += L15;break;	// samech
			/*hey*/		case "\u05D4":letter = "\u05E0";gematria2AltEZBePh += L14;break;	// nun
			/*vav*/		case "\u05D5":letter = "\u05DE";gematria2AltEZBePh += L13;break;	// mem
			/*zayin*/	case "\u05D6":letter = "\u05DC";gematria2AltEZBePh += L12;break;	// lamed
			/*chet*/	case "\u05D7":letter = "\u05DB";gematria2AltEZBePh += L11;break;	// kaf
			/*tet*/		case "\u05D8":letter = "\u05D9";gematria2AltEZBePh += L10;break;	// yod
			/*yod*/		case "\u05D9":letter = "\u05D8";gematria2AltEZBePh += L09;break;	// tet
			/*kaf*/		case "\u05DB":letter = "\u05D7";gematria2AltEZBePh += L08;break;	// chet
			/*lamed*/	case "\u05DC":letter = "\u05D6";gematria2AltEZBePh += L07;break;	// zayin
			/*mem*/		case "\u05DE":letter = "\u05D5";gematria2AltEZBePh += L06;break;	// vav
			/*nun*/		case "\u05E0":letter = "\u05D4";gematria2AltEZBePh += L05;break;	// hey
			/*samech*/	case "\u05E1":letter = "\u05D3";gematria2AltEZBePh += L04;break;	// dalet
			/*ayin*/	case "\u05E2":letter = "\u05D2";gematria2AltEZBePh += L03;break;	// gimel
			/*pey*/		case "\u05E4":letter = "\u05D1";gematria2AltEZBePh += L02;break;	// bet
			/*tzadi*/	case "\u05E6":letter = "\u05D0";gematria2AltEZBePh += L01;break;	// aleph
			/*kuf*/		case "\u05E7":letter = "\u05EA";gematria2AltEZBePh += L22;break;	// tav
			/*resh*/	case "\u05E8":letter = "\u05E9";gematria2AltEZBePh += L21;break;	// shin
			/*shin*/	case "\u05E9":letter = "\u05E8";gematria2AltEZBePh += L20;break;	// resh
			/*tav*/		case "\u05EA":letter = "\u05E7";gematria2AltEZBePh += L19;break;	// kuf
			/*kaf F*/	case "\u05DA":letter = "\u05D7";gematria2AltEZBePh += L08;break;	// chet
			/*mem F*/	case "\u05DD":letter = "\u05D5";gematria2AltEZBePh += L06;break;	// vav
			/*nun F*/	case "\u05DF":letter = "\u05D4";gematria2AltEZBePh += L05;break;	// hey
			/*pey F*/	case "\u05E3":letter = "\u05D1";gematria2AltEZBePh += L02;break;	// bet
			/*tzadi F*/	case "\u05E5":letter = "\u05D0";gematria2AltEZBePh += L01;break;	// aleph
			default:letter = "";break;
		}
		AltEZBePh += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltEZBePh = AltEZBePh.substring(0, AltEZBePh.length - 1);gematria2AltEZBePh -= L11;gematria2AltEZBePh += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltEZBePh = AltEZBePh.substring(0, AltEZBePh.length - 1);gematria2AltEZBePh -= L13;gematria2AltEZBePh += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltEZBePh = AltEZBePh.substring(0, AltEZBePh.length - 1);gematria2AltEZBePh -= L14;gematria2AltEZBePh += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltEZBePh = AltEZBePh.substring(0, AltEZBePh.length - 1);gematria2AltEZBePh -= L17;gematria2AltEZBePh += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltEZBePh = AltEZBePh.substring(0, AltEZBePh.length - 1);gematria2AltEZBePh -= L18;gematria2AltEZBePh += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltEZBePh += letter;
		}
	}

// AltAPBE
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E4";gematria2AltAPBE += L17;break;	// pey
			/*bet*/		case "\u05D1":letter = "\u05E2";gematria2AltAPBE += L16;break;	// ayin
			/*gimel*/	case "\u05D2":letter = "\u05E1";gematria2AltAPBE += L15;break;	// samech
			/*dalet*/	case "\u05D3":letter = "\u05E0";gematria2AltAPBE += L14;break;	// nun
			/*hey*/		case "\u05D4":letter = "\u05DE";gematria2AltAPBE += L13;break;	// mem
			/*vav*/		case "\u05D5":letter = "\u05DC";gematria2AltAPBE += L12;break;	// lamed
			/*zayin*/	case "\u05D6":letter = "\u05DB";gematria2AltAPBE += L11;break;	// kaf
			/*chet*/	case "\u05D7":letter = "\u05D9";gematria2AltAPBE += L10;break;	// yod
			/*tet*/		case "\u05D8":letter = "\u05D8";gematria2AltAPBE += L09;break;	// tet
			/*yod*/		case "\u05D9":letter = "\u05D7";gematria2AltAPBE += L08;break;	// chet
			/*kaf*/		case "\u05DB":letter = "\u05D6";gematria2AltAPBE += L07;break;	// zayin
			/*lamed*/	case "\u05DC":letter = "\u05D5";gematria2AltAPBE += L06;break;	// vav
			/*mem*/		case "\u05DE":letter = "\u05D4";gematria2AltAPBE += L05;break;	// hey
			/*nun*/		case "\u05E0":letter = "\u05D3";gematria2AltAPBE += L04;break;	// dalet
			/*samech*/	case "\u05E1":letter = "\u05D2";gematria2AltAPBE += L03;break;	// gimel
			/*ayin*/	case "\u05E2":letter = "\u05D1";gematria2AltAPBE += L02;break;	// bet
			/*pey*/		case "\u05E4":letter = "\u05D0";gematria2AltAPBE += L01;break;	// aleph
			/*tzadi*/	case "\u05E6":letter = "\u05EA";gematria2AltAPBE += L22;break;	// tav
			/*kuf*/		case "\u05E7":letter = "\u05E9";gematria2AltAPBE += L21;break;	// shin
			/*resh*/	case "\u05E8":letter = "\u05E8";gematria2AltAPBE += L20;break;	// resh
			/*shin*/	case "\u05E9":letter = "\u05E7";gematria2AltAPBE += L19;break;	// kuf
			/*tav*/		case "\u05EA":letter = "\u05E6";gematria2AltAPBE += L18;break;	// tzadi
			/*kaf F*/	case "\u05DA":letter = "\u05D6";gematria2AltAPBE += L07;break;	// zayin
			/*mem F*/	case "\u05DD":letter = "\u05D4";gematria2AltAPBE += L05;break;	// hey
			/*nun F*/	case "\u05DF":letter = "\u05D3";gematria2AltAPBE += L04;break;	// dalet
			/*pey F*/	case "\u05E3":letter = "\u05D0";gematria2AltAPBE += L01;break;	// aleph
			/*tzadi F*/	case "\u05E5":letter = "\u05EA";gematria2AltAPBE += L22;break;	// tav
			default:letter = "";break;
		}
		AltAPBE += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAPBE = AltAPBE.substring(0, AltAPBE.length - 1);gematria2AltAPBE -= L11;gematria2AltAPBE += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAPBE = AltAPBE.substring(0, AltAPBE.length - 1);gematria2AltAPBE -= L13;gematria2AltAPBE += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAPBE = AltAPBE.substring(0, AltAPBE.length - 1);gematria2AltAPBE -= L14;gematria2AltAPBE += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAPBE = AltAPBE.substring(0, AltAPBE.length - 1);gematria2AltAPBE -= L17;gematria2AltAPBE += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAPBE = AltAPBE.substring(0, AltAPBE.length - 1);gematria2AltAPBE -= L18;gematria2AltAPBE += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAPBE += letter;
		}
	}

// AltAEBaS
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E2";gematria2AltAEBaS += L16;break;	// ayin
			/*bet*/		case "\u05D1":letter = "\u05E1";gematria2AltAEBaS += L15;break;	// samech
			/*gimel*/	case "\u05D2":letter = "\u05E0";gematria2AltAEBaS += L14;break;	// nun
			/*dalet*/	case "\u05D3":letter = "\u05DE";gematria2AltAEBaS += L13;break;	// mem
			/*hey*/		case "\u05D4":letter = "\u05DC";gematria2AltAEBaS += L12;break;	// lamed
			/*vav*/		case "\u05D5":letter = "\u05DB";gematria2AltAEBaS += L11;break;	// kaf
			/*zayin*/	case "\u05D6":letter = "\u05D9";gematria2AltAEBaS += L10;break;	// yod
			/*chet*/	case "\u05D7":letter = "\u05D8";gematria2AltAEBaS += L09;break;	// tet
			/*tet*/		case "\u05D8":letter = "\u05D7";gematria2AltAEBaS += L08;break;	// chet
			/*yod*/		case "\u05D9":letter = "\u05D6";gematria2AltAEBaS += L07;break;	// zayin
			/*kaf*/		case "\u05DB":letter = "\u05D5";gematria2AltAEBaS += L06;break;	// vav
			/*lamed*/	case "\u05DC":letter = "\u05D4";gematria2AltAEBaS += L05;break;	// hey
			/*mem*/		case "\u05DE":letter = "\u05D3";gematria2AltAEBaS += L04;break;	// dalet
			/*nun*/		case "\u05E0":letter = "\u05D2";gematria2AltAEBaS += L03;break;	// gimel
			/*samech*/	case "\u05E1":letter = "\u05D1";gematria2AltAEBaS += L02;break;	// bet
			/*ayin*/	case "\u05E2":letter = "\u05D0";gematria2AltAEBaS += L01;break;	// aleph
			/*pey*/		case "\u05E4":letter = "\u05EA";gematria2AltAEBaS += L22;break;	// tav
			/*tzadi*/	case "\u05E6":letter = "\u05E9";gematria2AltAEBaS += L21;break;	// shin
			/*kuf*/		case "\u05E7":letter = "\u05E8";gematria2AltAEBaS += L20;break;	// resh
			/*resh*/	case "\u05E8":letter = "\u05E7";gematria2AltAEBaS += L19;break;	// kuf
			/*shin*/	case "\u05E9":letter = "\u05E6";gematria2AltAEBaS += L18;break;	// tzadi
			/*tav*/		case "\u05EA":letter = "\u05E4";gematria2AltAEBaS += L17;break;	// pey
			/*kaf F*/	case "\u05DA":letter = "\u05D5";gematria2AltAEBaS += L06;break;	// vav
			/*mem F*/	case "\u05DD":letter = "\u05D3";gematria2AltAEBaS += L04;break;	// dalet
			/*nun F*/	case "\u05DF":letter = "\u05D2";gematria2AltAEBaS += L03;break;	// gimel
			/*pey F*/	case "\u05E3":letter = "\u05EA";gematria2AltAEBaS += L22;break;	// tav
			/*tzadi F*/	case "\u05E5":letter = "\u05E9";gematria2AltAEBaS += L21;break;	// shin
			default:letter = "";break;
		}
		AltAEBaS += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAEBaS = AltAEBaS.substring(0, AltAEBaS.length - 1);gematria2AltAEBaS -= L11;gematria2AltAEBaS += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAEBaS = AltAEBaS.substring(0, AltAEBaS.length - 1);gematria2AltAEBaS -= L13;gematria2AltAEBaS += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAEBaS = AltAEBaS.substring(0, AltAEBaS.length - 1);gematria2AltAEBaS -= L14;gematria2AltAEBaS += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAEBaS = AltAEBaS.substring(0, AltAEBaS.length - 1);gematria2AltAEBaS -= L17;gematria2AltAEBaS += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAEBaS = AltAEBaS.substring(0, AltAEBaS.length - 1);gematria2AltAEBaS -= L18;gematria2AltAEBaS += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAEBaS += letter;
		}
	}

// AltASBeN
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E1";gematria2AltASBeN += L15;break;	// samech
			/*bet*/		case "\u05D1":letter = "\u05E0";gematria2AltASBeN += L14;break;	// nun
			/*gimel*/	case "\u05D2":letter = "\u05DE";gematria2AltASBeN += L13;break;	// mem
			/*dalet*/	case "\u05D3":letter = "\u05DC";gematria2AltASBeN += L12;break;	// lamed
			/*hey*/		case "\u05D4":letter = "\u05DB";gematria2AltASBeN += L11;break;	// kaf
			/*vav*/		case "\u05D5":letter = "\u05D9";gematria2AltASBeN += L10;break;	// yod
			/*zayin*/	case "\u05D6":letter = "\u05D8";gematria2AltASBeN += L09;break;	// tet
			/*chet*/	case "\u05D7":letter = "\u05D7";gematria2AltASBeN += L08;break;	// chet
			/*tet*/		case "\u05D8":letter = "\u05D6";gematria2AltASBeN += L07;break;	// zayin
			/*yod*/		case "\u05D9":letter = "\u05D5";gematria2AltASBeN += L06;break;	// vav
			/*kaf*/		case "\u05DB":letter = "\u05D4";gematria2AltASBeN += L05;break;	// hey
			/*lamed*/	case "\u05DC":letter = "\u05D3";gematria2AltASBeN += L04;break;	// dalet
			/*mem*/		case "\u05DE":letter = "\u05D2";gematria2AltASBeN += L03;break;	// gimel
			/*nun*/		case "\u05E0":letter = "\u05D1";gematria2AltASBeN += L02;break;	// bet
			/*samech*/	case "\u05E1":letter = "\u05D0";gematria2AltASBeN += L01;break;	// aleph
			/*ayin*/	case "\u05E2":letter = "\u05EA";gematria2AltASBeN += L22;break;	// tav
			/*pey*/		case "\u05E4":letter = "\u05E9";gematria2AltASBeN += L21;break;	// shin
			/*tzadi*/	case "\u05E6":letter = "\u05E8";gematria2AltASBeN += L20;break;	// resh
			/*kuf*/		case "\u05E7":letter = "\u05E7";gematria2AltASBeN += L19;break;	// kuf
			/*resh*/	case "\u05E8":letter = "\u05E6";gematria2AltASBeN += L18;break;	// tzadi
			/*shin*/	case "\u05E9":letter = "\u05E4";gematria2AltASBeN += L17;break;	// pey
			/*tav*/		case "\u05EA":letter = "\u05E2";gematria2AltASBeN += L16;break;	// ayin
			/*kaf F*/	case "\u05DA":letter = "\u05D4";gematria2AltASBeN += L05;break;	// hey
			/*mem F*/	case "\u05DD":letter = "\u05D2";gematria2AltASBeN += L03;break;	// gimel
			/*nun F*/	case "\u05DF":letter = "\u05D1";gematria2AltASBeN += L02;break;	// bet
			/*pey F*/	case "\u05E3":letter = "\u05E9";gematria2AltASBeN += L21;break;	// shin
			/*tzadi F*/	case "\u05E5":letter = "\u05E8";gematria2AltASBeN += L20;break;	// resh
			default:letter = "";break;
		}
		AltASBeN += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltASBeN = AltASBeN.substring(0, AltASBeN.length - 1);gematria2AltASBeN -= L11;gematria2AltASBeN += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltASBeN = AltASBeN.substring(0, AltASBeN.length - 1);gematria2AltASBeN -= L13;gematria2AltASBeN += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltASBeN = AltASBeN.substring(0, AltASBeN.length - 1);gematria2AltASBeN -= L14;gematria2AltASBeN += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltASBeN = AltASBeN.substring(0, AltASBeN.length - 1);gematria2AltASBeN -= L17;gematria2AltASBeN += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltASBeN = AltASBeN.substring(0, AltASBeN.length - 1);gematria2AltASBeN -= L18;gematria2AltASBeN += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltASBeN += letter;
		}
	}

// AltANBaM
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E0";gematria2AltANBaM += L14;break;	// nun
			/*bet*/		case "\u05D1":letter = "\u05DE";gematria2AltANBaM += L13;break;	// mem
			/*gimel*/	case "\u05D2":letter = "\u05DC";gematria2AltANBaM += L12;break;	// lamed
			/*dalet*/	case "\u05D3":letter = "\u05DB";gematria2AltANBaM += L11;break;	// kaf
			/*hey*/		case "\u05D4":letter = "\u05D9";gematria2AltANBaM += L10;break;	// yod
			/*vav*/		case "\u05D5":letter = "\u05D8";gematria2AltANBaM += L09;break;	// tet
			/*zayin*/	case "\u05D6":letter = "\u05D7";gematria2AltANBaM += L08;break;	// chet
			/*chet*/	case "\u05D7":letter = "\u05D6";gematria2AltANBaM += L07;break;	// zayin
			/*tet*/		case "\u05D8":letter = "\u05D5";gematria2AltANBaM += L06;break;	// vav
			/*yod*/		case "\u05D9":letter = "\u05D4";gematria2AltANBaM += L05;break;	// hey
			/*kaf*/		case "\u05DB":letter = "\u05D3";gematria2AltANBaM += L04;break;	// dalet
			/*lamed*/	case "\u05DC":letter = "\u05D2";gematria2AltANBaM += L03;break;	// gimel
			/*mem*/		case "\u05DE":letter = "\u05D1";gematria2AltANBaM += L02;break;	// bet
			/*nun*/		case "\u05E0":letter = "\u05D0";gematria2AltANBaM += L01;break;	// aleph
			/*samech*/	case "\u05E1":letter = "\u05EA";gematria2AltANBaM += L22;break;	// tav
			/*ayin*/	case "\u05E2":letter = "\u05E9";gematria2AltANBaM += L21;break;	// shin
			/*pey*/		case "\u05E4":letter = "\u05E8";gematria2AltANBaM += L20;break;	// resh
			/*tzadi*/	case "\u05E6":letter = "\u05E7";gematria2AltANBaM += L19;break;	// kuf
			/*kuf*/		case "\u05E7":letter = "\u05E6";gematria2AltANBaM += L18;break;	// tzadi
			/*resh*/	case "\u05E8":letter = "\u05E4";gematria2AltANBaM += L17;break;	// pey
			/*shin*/	case "\u05E9":letter = "\u05E2";gematria2AltANBaM += L16;break;	// ayin
			/*tav*/		case "\u05EA":letter = "\u05E1";gematria2AltANBaM += L15;break;	// samech
			/*kaf F*/	case "\u05DA":letter = "\u05D3";gematria2AltANBaM += L04;break;	// dalet
			/*mem F*/	case "\u05DD":letter = "\u05D1";gematria2AltANBaM += L02;break;	// bet
			/*nun F*/	case "\u05DF":letter = "\u05D0";gematria2AltANBaM += L01;break;	// aleph
			/*pey F*/	case "\u05E3":letter = "\u05E8";gematria2AltANBaM += L20;break;	// resh
			/*tzadi F*/	case "\u05E5":letter = "\u05E7";gematria2AltANBaM += L19;break;	// kuf
			default:letter = "";break;
		}
		AltANBaM += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltANBaM = AltANBaM.substring(0, AltANBaM.length - 1);gematria2AltANBaM -= L11;gematria2AltANBaM += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltANBaM = AltANBaM.substring(0, AltANBaM.length - 1);gematria2AltANBaM -= L13;gematria2AltANBaM += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltANBaM = AltANBaM.substring(0, AltANBaM.length - 1);gematria2AltANBaM -= L14;gematria2AltANBaM += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltANBaM = AltANBaM.substring(0, AltANBaM.length - 1);gematria2AltANBaM -= L17;gematria2AltANBaM += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltANBaM = AltANBaM.substring(0, AltANBaM.length - 1);gematria2AltANBaM -= L18;gematria2AltANBaM += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltANBaM += letter;
		}
	}

// AltAMBeL
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05DE";gematria2AltAMBeL += L13;break;	// mem
			/*bet*/		case "\u05D1":letter = "\u05DC";gematria2AltAMBeL += L12;break;	// lamed
			/*gimel*/	case "\u05D2":letter = "\u05DB";gematria2AltAMBeL += L11;break;	// kaf
			/*dalet*/	case "\u05D3":letter = "\u05D9";gematria2AltAMBeL += L10;break;	// yod
			/*hey*/		case "\u05D4":letter = "\u05D8";gematria2AltAMBeL += L09;break;	// tet
			/*vav*/		case "\u05D5":letter = "\u05D7";gematria2AltAMBeL += L08;break;	// chet
			/*zayin*/	case "\u05D6":letter = "\u05D6";gematria2AltAMBeL += L07;break;	// zayin
			/*chet*/	case "\u05D7":letter = "\u05D5";gematria2AltAMBeL += L06;break;	// vav
			/*tet*/		case "\u05D8":letter = "\u05D4";gematria2AltAMBeL += L05;break;	// hey
			/*yod*/		case "\u05D9":letter = "\u05D3";gematria2AltAMBeL += L04;break;	// dalet
			/*kaf*/		case "\u05DB":letter = "\u05D2";gematria2AltAMBeL += L03;break;	// gimel
			/*lamed*/	case "\u05DC":letter = "\u05D1";gematria2AltAMBeL += L02;break;	// bet
			/*mem*/		case "\u05DE":letter = "\u05D0";gematria2AltAMBeL += L01;break;	// aleph
			/*nun*/		case "\u05E0":letter = "\u05EA";gematria2AltAMBeL += L22;break;	// tav
			/*samech*/	case "\u05E1":letter = "\u05E9";gematria2AltAMBeL += L21;break;	// shin
			/*ayin*/	case "\u05E2":letter = "\u05E8";gematria2AltAMBeL += L20;break;	// resh
			/*pey*/		case "\u05E4":letter = "\u05E7";gematria2AltAMBeL += L19;break;	// kuf
			/*tzadi*/	case "\u05E6":letter = "\u05E6";gematria2AltAMBeL += L18;break;	// tzadi
			/*kuf*/		case "\u05E7":letter = "\u05E4";gematria2AltAMBeL += L17;break;	// pey
			/*resh*/	case "\u05E8":letter = "\u05E2";gematria2AltAMBeL += L16;break;	// ayin
			/*shin*/	case "\u05E9":letter = "\u05E1";gematria2AltAMBeL += L15;break;	// samech
			/*tav*/		case "\u05EA":letter = "\u05E0";gematria2AltAMBeL += L14;break;	// nun
			/*kaf F*/	case "\u05DA":letter = "\u05D2";gematria2AltAMBeL += L03;break;	// gimel
			/*mem F*/	case "\u05DD":letter = "\u05D0";gematria2AltAMBeL += L01;break;	// aleph
			/*nun F*/	case "\u05DF":letter = "\u05EA";gematria2AltAMBeL += L22;break;	// tav
			/*pey F*/	case "\u05E3":letter = "\u05E8";gematria2AltAMBeL += L19;break;	// resh
			/*tzadi F*/	case "\u05E5":letter = "\u05E7";gematria2AltAMBeL += L18;break;	// kuf
			default:letter = "";break;
		}
		AltAMBeL += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAMBeL = AltAMBeL.substring(0, AltAMBeL.length - 1);gematria2AltAMBeL -= L11;gematria2AltAMBeL += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAMBeL = AltAMBeL.substring(0, AltAMBeL.length - 1);gematria2AltAMBeL -= L13;gematria2AltAMBeL += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAMBeL = AltAMBeL.substring(0, AltAMBeL.length - 1);gematria2AltAMBeL -= L14;gematria2AltAMBeL += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAMBeL = AltAMBeL.substring(0, AltAMBeL.length - 1);gematria2AltAMBeL -= L17;gematria2AltAMBeL += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAMBeL = AltAMBeL.substring(0, AltAMBeL.length - 1);gematria2AltAMBeL -= L18;gematria2AltAMBeL += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAMBeL += letter;
		}
	}

// AltELBaCh
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05DC";gematria2AltELBaCh += L12;break;	// lamed
			/*bet*/		case "\u05D1":letter = "\u05DB";gematria2AltELBaCh += L11;break;	// kaf
			/*gimel*/	case "\u05D2":letter = "\u05D9";gematria2AltELBaCh += L10;break;	// yod
			/*dalet*/	case "\u05D3":letter = "\u05D8";gematria2AltELBaCh += L09;break;	// tet
			/*hey*/		case "\u05D4":letter = "\u05D7";gematria2AltELBaCh += L08;break;	// chet
			/*vav*/		case "\u05D5":letter = "\u05D6";gematria2AltELBaCh += L07;break;	// zayin
			/*zayin*/	case "\u05D6":letter = "\u05D5";gematria2AltELBaCh += L06;break;	// vav
			/*chet*/	case "\u05D7":letter = "\u05D4";gematria2AltELBaCh += L05;break;	// hey
			/*tet*/		case "\u05D8":letter = "\u05D3";gematria2AltELBaCh += L04;break;	// dalet
			/*yod*/		case "\u05D9":letter = "\u05D2";gematria2AltELBaCh += L03;break;	// gimel
			/*kaf*/		case "\u05DB":letter = "\u05D1";gematria2AltELBaCh += L02;break;	// bet
			/*lamed*/	case "\u05DC":letter = "\u05D0";gematria2AltELBaCh += L01;break;	// aleph
			/*mem*/		case "\u05DE":letter = "\u05EA";gematria2AltELBaCh += L22;break;	// tav
			/*nun*/		case "\u05E0":letter = "\u05E9";gematria2AltELBaCh += L21;break;	// shin
			/*samech*/	case "\u05E1":letter = "\u05E8";gematria2AltELBaCh += L20;break;	// resh
			/*ayin*/	case "\u05E2":letter = "\u05E7";gematria2AltELBaCh += L19;break;	// kuf
			/*pey*/		case "\u05E4":letter = "\u05E6";gematria2AltELBaCh += L18;break;	// tzadi
			/*tzadi*/	case "\u05E6":letter = "\u05E4";gematria2AltELBaCh += L17;break;	// pey
			/*kuf*/		case "\u05E7":letter = "\u05E2";gematria2AltELBaCh += L16;break;	// ayin
			/*resh*/	case "\u05E8":letter = "\u05E1";gematria2AltELBaCh += L15;break;	// samech
			/*shin*/	case "\u05E9":letter = "\u05E0";gematria2AltELBaCh += L14;break;	// nun
			/*tav*/		case "\u05EA":letter = "\u05DE";gematria2AltELBaCh += L13;break;	// mem
			/*kaf F*/	case "\u05DA":letter = "\u05D1";gematria2AltELBaCh += L02;break;	// bet
			/*mem F*/	case "\u05DD":letter = "\u05EA";gematria2AltELBaCh += L22;break;	// tav
			/*nun F*/	case "\u05DF":letter = "\u05E9";gematria2AltELBaCh += L21;break;	// shin
			/*pey F*/	case "\u05E3":letter = "\u05E6";gematria2AltELBaCh += L18;break;	// tzadi
			/*tzadi F*/	case "\u05E5":letter = "\u05E4";gematria2AltELBaCh += L17;break;	// pey
			default:letter = "";break;
		}
		AltELBaCh += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltELBaCh = AltELBaCh.substring(0, AltELBaCh.length - 1);gematria2AltELBaCh -= L11;gematria2AltELBaCh += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltELBaCh = AltELBaCh.substring(0, AltELBaCh.length - 1);gematria2AltELBaCh -= L13;gematria2AltELBaCh += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltELBaCh = AltELBaCh.substring(0, AltELBaCh.length - 1);gematria2AltELBaCh -= L14;gematria2AltELBaCh += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltELBaCh = AltELBaCh.substring(0, AltELBaCh.length - 1);gematria2AltELBaCh -= L17;gematria2AltELBaCh += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltELBaCh = AltELBaCh.substring(0, AltELBaCh.length - 1);gematria2AltELBaCh -= L18;gematria2AltELBaCh += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltELBaCh += letter;
		}
	}

// AltAChBI
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05DB";gematria2AltAChBI += L11;break;	// kaf
			/*bet*/		case "\u05D1":letter = "\u05D9";gematria2AltAChBI += L10;break;	// yod
			/*gimel*/	case "\u05D2":letter = "\u05D8";gematria2AltAChBI += L09;break;	// tet
			/*dalet*/	case "\u05D3":letter = "\u05D7";gematria2AltAChBI += L08;break;	// chet
			/*hey*/		case "\u05D4":letter = "\u05D6";gematria2AltAChBI += L07;break;	// zayin
			/*vav*/		case "\u05D5":letter = "\u05D5";gematria2AltAChBI += L06;break;	// vav
			/*zayin*/	case "\u05D6":letter = "\u05D4";gematria2AltAChBI += L05;break;	// hey
			/*chet*/	case "\u05D7":letter = "\u05D3";gematria2AltAChBI += L04;break;	// dalet
			/*tet*/		case "\u05D8":letter = "\u05D2";gematria2AltAChBI += L03;break;	// gimel
			/*yod*/		case "\u05D9":letter = "\u05D1";gematria2AltAChBI += L02;break;	// bet
			/*kaf*/		case "\u05DB":letter = "\u05D0";gematria2AltAChBI += L01;break;	// aleph
			/*lamed*/	case "\u05DC":letter = "\u05EA";gematria2AltAChBI += L22;break;	// tav
			/*mem*/		case "\u05DE":letter = "\u05E9";gematria2AltAChBI += L21;break;	// shin
			/*nun*/		case "\u05E0":letter = "\u05E8";gematria2AltAChBI += L20;break;	// resh
			/*samech*/	case "\u05E1":letter = "\u05E7";gematria2AltAChBI += L19;break;	// kuf
			/*ayin*/	case "\u05E2":letter = "\u05E6";gematria2AltAChBI += L18;break;	// tzadi
			/*pey*/		case "\u05E4":letter = "\u05E4";gematria2AltAChBI += L17;break;	// pey
			/*tzadi*/	case "\u05E6":letter = "\u05E2";gematria2AltAChBI += L16;break;	// ayin
			/*kuf*/		case "\u05E7":letter = "\u05E1";gematria2AltAChBI += L15;break;	// samech
			/*resh*/	case "\u05E8":letter = "\u05E0";gematria2AltAChBI += L14;break;	// nun
			/*shin*/	case "\u05E9":letter = "\u05DE";gematria2AltAChBI += L13;break;	// mem
			/*tav*/		case "\u05EA":letter = "\u05DC";gematria2AltAChBI += L12;break;	// lamed
			/*kaf F*/	case "\u05DA":letter = "\u05D0";gematria2AltAChBI += L01;break;	// aleph
			/*mem F*/	case "\u05DD":letter = "\u05E9";gematria2AltAChBI += L21;break;	// shin
			/*nun F*/	case "\u05DF":letter = "\u05E8";gematria2AltAChBI += L20;break;	// resh
			/*pey F*/	case "\u05E3":letter = "\u05E4";gematria2AltAChBI += L17;break;	// pey
			/*tzadi F*/	case "\u05E5":letter = "\u05E2";gematria2AltAChBI += L16;break;	// ayin
			default:letter = "";break;
		}
		AltAChBI += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAChBI = AltAChBI.substring(0, AltAChBI.length - 1);gematria2AltAChBI -= L11;gematria2AltAChBI += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAChBI = AltAChBI.substring(0, AltAChBI.length - 1);gematria2AltAChBI -= L13;gematria2AltAChBI += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAChBI = AltAChBI.substring(0, AltAChBI.length - 1);gematria2AltAChBI -= L14;gematria2AltAChBI += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAChBI = AltAChBI.substring(0, AltAChBI.length - 1);gematria2AltAChBI -= L17;gematria2AltAChBI += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAChBI = AltAChBI.substring(0, AltAChBI.length - 1);gematria2AltAChBI -= L18;gematria2AltAChBI += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAChBI += letter;
		}
	}

// AltAIBeT
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D9";gematria2AltAIBeT += L10;break;	// yod
			/*bet*/		case "\u05D1":letter = "\u05D8";gematria2AltAIBeT += L09;break;	// tet
			/*gimel*/	case "\u05D2":letter = "\u05D7";gematria2AltAIBeT += L08;break;	// chet
			/*dalet*/	case "\u05D3":letter = "\u05D6";gematria2AltAIBeT += L07;break;	// zayin
			/*hey*/		case "\u05D4":letter = "\u05D5";gematria2AltAIBeT += L06;break;	// vav
			/*vav*/		case "\u05D5":letter = "\u05D4";gematria2AltAIBeT += L05;break;	// hey
			/*zayin*/	case "\u05D6":letter = "\u05D3";gematria2AltAIBeT += L04;break;	// dalet
			/*chet*/	case "\u05D7":letter = "\u05D2";gematria2AltAIBeT += L03;break;	// gimel
			/*tet*/		case "\u05D8":letter = "\u05D1";gematria2AltAIBeT += L02;break;	// bet
			/*yod*/		case "\u05D9":letter = "\u05D0";gematria2AltAIBeT += L01;break;	// aleph
			/*kaf*/		case "\u05DB":letter = "\u05EA";gematria2AltAIBeT += L22;break;	// tav
			/*lamed*/	case "\u05DC":letter = "\u05E9";gematria2AltAIBeT += L21;break;	// shin
			/*mem*/		case "\u05DE":letter = "\u05E8";gematria2AltAIBeT += L20;break;	// resh
			/*nun*/		case "\u05E0":letter = "\u05E7";gematria2AltAIBeT += L19;break;	// kuf
			/*samech*/	case "\u05E1":letter = "\u05E6";gematria2AltAIBeT += L18;break;	// tzadi
			/*ayin*/	case "\u05E2":letter = "\u05E4";gematria2AltAIBeT += L17;break;	// pey
			/*pey*/		case "\u05E4":letter = "\u05E2";gematria2AltAIBeT += L16;break;	// ayin
			/*tzadi*/	case "\u05E6":letter = "\u05E1";gematria2AltAIBeT += L15;break;	// samech
			/*kuf*/		case "\u05E7":letter = "\u05E0";gematria2AltAIBeT += L14;break;	// nun
			/*resh*/	case "\u05E8":letter = "\u05DE";gematria2AltAIBeT += L13;break;	// mem
			/*shin*/	case "\u05E9":letter = "\u05DC";gematria2AltAIBeT += L12;break;	// lamed
			/*tav*/		case "\u05EA":letter = "\u05DB";gematria2AltAIBeT += L11;break;	// kaf
			/*kaf F*/	case "\u05DA":letter = "\u05EA";gematria2AltAIBeT += L22;break;	// tav
			/*mem F*/	case "\u05DD":letter = "\u05E8";gematria2AltAIBeT += L20;break;	// resh
			/*nun F*/	case "\u05DF":letter = "\u05E7";gematria2AltAIBeT += L19;break;	// kuf
			/*pey F*/	case "\u05E3":letter = "\u05E2";gematria2AltAIBeT += L16;break;	// ayin
			/*tzadi F*/	case "\u05E5":letter = "\u05E1";gematria2AltAIBeT += L15;break;	// samech
			default:letter = "";break;
		}
		AltAIBeT += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAIBeT = AltAIBeT.substring(0, AltAIBeT.length - 1);gematria2AltAIBeT -= L11;gematria2AltAIBeT += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAIBeT = AltAIBeT.substring(0, AltAIBeT.length - 1);gematria2AltAIBeT -= L13;gematria2AltAIBeT += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAIBeT = AltAIBeT.substring(0, AltAIBeT.length - 1);gematria2AltAIBeT -= L14;gematria2AltAIBeT += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAIBeT = AltAIBeT.substring(0, AltAIBeT.length - 1);gematria2AltAIBeT -= L17;gematria2AltAIBeT += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAIBeT = AltAIBeT.substring(0, AltAIBeT.length - 1);gematria2AltAIBeT -= L18;gematria2AltAIBeT += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAIBeT += letter;
		}
	}

// AltATBaCh
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D8";gematria2AltATBaCh += L09;break;	// tet
			/*bet*/		case "\u05D1":letter = "\u05D7";gematria2AltATBaCh += L08;break;	// chet
			/*gimel*/	case "\u05D2":letter = "\u05D6";gematria2AltATBaCh += L07;break;	// zayin
			/*dalet*/	case "\u05D3":letter = "\u05D5";gematria2AltATBaCh += L06;break;	// vav
			/*hey*/		case "\u05D4":letter = "\u05D4";gematria2AltATBaCh += L05;break;	// hey
			/*vav*/		case "\u05D5":letter = "\u05D3";gematria2AltATBaCh += L04;break;	// dalet
			/*zayin*/	case "\u05D6":letter = "\u05D2";gematria2AltATBaCh += L03;break;	// gimel
			/*chet*/	case "\u05D7":letter = "\u05D1";gematria2AltATBaCh += L02;break;	// bet
			/*tet*/		case "\u05D8":letter = "\u05D0";gematria2AltATBaCh += L01;break;	// aleph
			/*yod*/		case "\u05D9":letter = "\u05EA";gematria2AltATBaCh += L22;break;	// tav
			/*kaf*/		case "\u05DB":letter = "\u05E9";gematria2AltATBaCh += L21;break;	// shin
			/*lamed*/	case "\u05DC":letter = "\u05E8";gematria2AltATBaCh += L20;break;	// resh
			/*mem*/		case "\u05DE":letter = "\u05E7";gematria2AltATBaCh += L19;break;	// kuf
			/*nun*/		case "\u05E0":letter = "\u05E6";gematria2AltATBaCh += L18;break;	// tzadi
			/*samech*/	case "\u05E1":letter = "\u05E4";gematria2AltATBaCh += L17;break;	// pey
			/*ayin*/	case "\u05E2":letter = "\u05E2";gematria2AltATBaCh += L16;break;	// ayin
			/*pey*/		case "\u05E4":letter = "\u05E1";gematria2AltATBaCh += L15;break;	// samech
			/*tzadi*/	case "\u05E6":letter = "\u05E0";gematria2AltATBaCh += L14;break;	// nun
			/*kuf*/		case "\u05E7":letter = "\u05DE";gematria2AltATBaCh += L13;break;	// mem
			/*resh*/	case "\u05E8":letter = "\u05DC";gematria2AltATBaCh += L12;break;	// lamed
			/*shin*/	case "\u05E9":letter = "\u05DB";gematria2AltATBaCh += L11;break;	// kaf
			/*tav*/		case "\u05EA":letter = "\u05D9";gematria2AltATBaCh += L10;break;	// yod
			/*kaf F*/	case "\u05DA":letter = "\u05E9";gematria2AltATBaCh += L21;break;	// shin
			/*mem F*/	case "\u05DD":letter = "\u05E7";gematria2AltATBaCh += L19;break;	// kuf
			/*nun F*/	case "\u05DF":letter = "\u05E6";gematria2AltATBaCh += L18;break;	// tzadi
			/*pey F*/	case "\u05E3":letter = "\u05E1";gematria2AltATBaCh += L15;break;	// samech
			/*tzadi F*/	case "\u05E5":letter = "\u05E0";gematria2AltATBaCh += L14;break;	// nun
			default:letter = "";break;
		}
		AltATBaCh += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltATBaCh = AltATBaCh.substring(0, AltATBaCh.length - 1);gematria2AltATBaCh -= L11;gematria2AltATBaCh += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltATBaCh = AltATBaCh.substring(0, AltATBaCh.length - 1);gematria2AltATBaCh -= L13;gematria2AltATBaCh += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltATBaCh = AltATBaCh.substring(0, AltATBaCh.length - 1);gematria2AltATBaCh -= L14;gematria2AltATBaCh += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltATBaCh = AltATBaCh.substring(0, AltATBaCh.length - 1);gematria2AltATBaCh -= L17;gematria2AltATBaCh += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltATBaCh = AltATBaCh.substring(0, AltATBaCh.length - 1);gematria2AltATBaCh -= L18;gematria2AltATBaCh += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltATBaCh += letter;
		}
	}

// AltAChBaZ
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D7";gematria2AltAChBaZ += L08;break;	// chet
			/*bet*/		case "\u05D1":letter = "\u05D6";gematria2AltAChBaZ += L07;break;	// zayin
			/*gimel*/	case "\u05D2":letter = "\u05D5";gematria2AltAChBaZ += L06;break;	// vav
			/*dalet*/	case "\u05D3":letter = "\u05D4";gematria2AltAChBaZ += L05;break;	// hey
			/*hey*/		case "\u05D4":letter = "\u05D3";gematria2AltAChBaZ += L04;break;	// dalet
			/*vav*/		case "\u05D5":letter = "\u05D2";gematria2AltAChBaZ += L03;break;	// gimel
			/*zayin*/	case "\u05D6":letter = "\u05D1";gematria2AltAChBaZ += L02;break;	// bet
			/*chet*/	case "\u05D7":letter = "\u05D0";gematria2AltAChBaZ += L01;break;	// aleph
			/*tet*/		case "\u05D8":letter = "\u05EA";gematria2AltAChBaZ += L22;break;	// tav
			/*yod*/		case "\u05D9":letter = "\u05E9";gematria2AltAChBaZ += L21;break;	// shin
			/*kaf*/		case "\u05DB":letter = "\u05E8";gematria2AltAChBaZ += L20;break;	// resh
			/*lamed*/	case "\u05DC":letter = "\u05E7";gematria2AltAChBaZ += L19;break;	// kuf
			/*mem*/		case "\u05DE":letter = "\u05E6";gematria2AltAChBaZ += L18;break;	// tzadi
			/*nun*/		case "\u05E0":letter = "\u05E4";gematria2AltAChBaZ += L17;break;	// pey
			/*samech*/	case "\u05E1":letter = "\u05E2";gematria2AltAChBaZ += L16;break;	// ayin
			/*ayin*/	case "\u05E2":letter = "\u05E1";gematria2AltAChBaZ += L15;break;	// samech
			/*pey*/		case "\u05E4":letter = "\u05E0";gematria2AltAChBaZ += L14;break;	// nun
			/*tzadi*/	case "\u05E6":letter = "\u05DE";gematria2AltAChBaZ += L13;break;	// mem
			/*kuf*/		case "\u05E7":letter = "\u05DC";gematria2AltAChBaZ += L12;break;	// lamed
			/*resh*/	case "\u05E8":letter = "\u05DB";gematria2AltAChBaZ += L11;break;	// kaf
			/*shin*/	case "\u05E9":letter = "\u05D9";gematria2AltAChBaZ += L10;break;	// yod
			/*tav*/		case "\u05EA":letter = "\u05D8";gematria2AltAChBaZ += L09;break;	// tet
			/*kaf F*/	case "\u05DA":letter = "\u05E8";gematria2AltAChBaZ += L20;break;	// resh
			/*mem F*/	case "\u05DD":letter = "\u05E6";gematria2AltAChBaZ += L18;break;	// tzadi
			/*nun F*/	case "\u05DF":letter = "\u05E4";gematria2AltAChBaZ += L17;break;	// pey
			/*pey F*/	case "\u05E3":letter = "\u05E0";gematria2AltAChBaZ += L14;break;	// nun
			/*tzadi F*/	case "\u05E5":letter = "\u05DE";gematria2AltAChBaZ += L13;break;	// mem
			default:letter = "";break;
		}
		AltAChBaZ += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAChBaZ = AltAChBaZ.substring(0, AltAChBaZ.length - 1);gematria2AltAChBaZ -= L11;gematria2AltAChBaZ += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAChBaZ = AltAChBaZ.substring(0, AltAChBaZ.length - 1);gematria2AltAChBaZ -= L13;gematria2AltAChBaZ += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAChBaZ = AltAChBaZ.substring(0, AltAChBaZ.length - 1);gematria2AltAChBaZ -= L14;gematria2AltAChBaZ += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAChBaZ = AltAChBaZ.substring(0, AltAChBaZ.length - 1);gematria2AltAChBaZ -= L17;gematria2AltAChBaZ += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAChBaZ = AltAChBaZ.substring(0, AltAChBaZ.length - 1);gematria2AltAChBaZ -= L18;gematria2AltAChBaZ += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAChBaZ += letter;
		}
	}

// AltAZBO
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D6";gematria2AltAZBO += L07;break;	// zayin
			/*bet*/		case "\u05D1":letter = "\u05D5";gematria2AltAZBO += L06;break;	// vav
			/*gimel*/	case "\u05D2":letter = "\u05D4";gematria2AltAZBO += L05;break;	// hey
			/*dalet*/	case "\u05D3":letter = "\u05D3";gematria2AltAZBO += L04;break;	// dalet
			/*hey*/		case "\u05D4":letter = "\u05D2";gematria2AltAZBO += L03;break;	// gimel
			/*vav*/		case "\u05D5":letter = "\u05D1";gematria2AltAZBO += L02;break;	// bet
			/*zayin*/	case "\u05D6":letter = "\u05D0";gematria2AltAZBO += L01;break;	// aleph
			/*chet*/	case "\u05D7":letter = "\u05EA";gematria2AltAZBO += L22;break;	// tav
			/*tet*/		case "\u05D8":letter = "\u05E9";gematria2AltAZBO += L21;break;	// shin
			/*yod*/		case "\u05D9":letter = "\u05E8";gematria2AltAZBO += L20;break;	// resh
			/*kaf*/		case "\u05DB":letter = "\u05E7";gematria2AltAZBO += L19;break;	// kuf
			/*lamed*/	case "\u05DC":letter = "\u05E6";gematria2AltAZBO += L18;break;	// tzadi
			/*mem*/		case "\u05DE":letter = "\u05E4";gematria2AltAZBO += L17;break;	// pey
			/*nun*/		case "\u05E0":letter = "\u05E2";gematria2AltAZBO += L16;break;	// ayin
			/*samech*/	case "\u05E1":letter = "\u05E1";gematria2AltAZBO += L15;break;	// samech
			/*ayin*/	case "\u05E2":letter = "\u05E0";gematria2AltAZBO += L14;break;	// nun
			/*pey*/		case "\u05E4":letter = "\u05DE";gematria2AltAZBO += L13;break;	// mem
			/*tzadi*/	case "\u05E6":letter = "\u05DC";gematria2AltAZBO += L12;break;	// lamed
			/*kuf*/		case "\u05E7":letter = "\u05DB";gematria2AltAZBO += L11;break;	// kaf
			/*resh*/	case "\u05E8":letter = "\u05D9";gematria2AltAZBO += L10;break;	// yod
			/*shin*/	case "\u05E9":letter = "\u05D8";gematria2AltAZBO += L09;break;	// tet
			/*tav*/		case "\u05EA":letter = "\u05D7";gematria2AltAZBO += L08;break;	// chet
			/*kaf F*/	case "\u05DA":letter = "\u05E7";gematria2AltAZBO += L19;break;	// kuf
			/*mem F*/	case "\u05DD":letter = "\u05E4";gematria2AltAZBO += L17;break;	// pey
			/*nun F*/	case "\u05DF":letter = "\u05E2";gematria2AltAZBO += L16;break;	// ayin
			/*pey F*/	case "\u05E3":letter = "\u05DE";gematria2AltAZBO += L13;break;	// mem
			/*tzadi F*/	case "\u05E5":letter = "\u05DC";gematria2AltAZBO += L12;break;	// lamed
			default:letter = "";break;
		}
		AltAZBO += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAZBO = AltAZBO.substring(0, AltAZBO.length - 1);gematria2AltAZBO -= L11;gematria2AltAZBO += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAZBO = AltAZBO.substring(0, AltAZBO.length - 1);gematria2AltAZBO -= L13;gematria2AltAZBO += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAZBO = AltAZBO.substring(0, AltAZBO.length - 1);gematria2AltAZBO -= L14;gematria2AltAZBO += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAZBO = AltAZBO.substring(0, AltAZBO.length - 1);gematria2AltAZBO -= L17;gematria2AltAZBO += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAZBO = AltAZBO.substring(0, AltAZBO.length - 1);gematria2AltAZBO -= L18;gematria2AltAZBO += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAZBO += letter;
		}
	}

// AltAVBaH
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D5";gematria2AltAVBaH += L06;break;	// vav
			/*bet*/		case "\u05D1":letter = "\u05D4";gematria2AltAVBaH += L05;break;	// hey
			/*gimel*/	case "\u05D2":letter = "\u05D3";gematria2AltAVBaH += L04;break;	// dalet
			/*dalet*/	case "\u05D3":letter = "\u05D2";gematria2AltAVBaH += L03;break;	// gimel
			/*hey*/		case "\u05D4":letter = "\u05D1";gematria2AltAVBaH += L02;break;	// bet
			/*vav*/		case "\u05D5":letter = "\u05D0";gematria2AltAVBaH += L01;break;	// aleph
			/*zayin*/	case "\u05D6":letter = "\u05EA";gematria2AltAVBaH += L22;break;	// tav
			/*chet*/	case "\u05D7":letter = "\u05E9";gematria2AltAVBaH += L21;break;	// shin
			/*tet*/		case "\u05D8":letter = "\u05E8";gematria2AltAVBaH += L20;break;	// resh
			/*yod*/		case "\u05D9":letter = "\u05E7";gematria2AltAVBaH += L19;break;	// kuf
			/*kaf*/		case "\u05DB":letter = "\u05E6";gematria2AltAVBaH += L18;break;	// tzadi
			/*lamed*/	case "\u05DC":letter = "\u05E4";gematria2AltAVBaH += L17;break;	// pey
			/*mem*/		case "\u05DE":letter = "\u05E2";gematria2AltAVBaH += L16;break;	// ayin
			/*nun*/		case "\u05E0":letter = "\u05E1";gematria2AltAVBaH += L15;break;	// samech
			/*samech*/	case "\u05E1":letter = "\u05E0";gematria2AltAVBaH += L14;break;	// nun
			/*ayin*/	case "\u05E2":letter = "\u05DE";gematria2AltAVBaH += L13;break;	// mem
			/*pey*/		case "\u05E4":letter = "\u05DC";gematria2AltAVBaH += L12;break;	// lamed
			/*tzadi*/	case "\u05E6":letter = "\u05DB";gematria2AltAVBaH += L11;break;	// kaf
			/*kuf*/		case "\u05E7":letter = "\u05D9";gematria2AltAVBaH += L10;break;	// yod
			/*resh*/	case "\u05E8":letter = "\u05D8";gematria2AltAVBaH += L09;break;	// tet
			/*shin*/	case "\u05E9":letter = "\u05D7";gematria2AltAVBaH += L08;break;	// chet
			/*tav*/		case "\u05EA":letter = "\u05D6";gematria2AltAVBaH += L07;break;	// zayin
			/*kaf F*/	case "\u05DA":letter = "\u05E6";gematria2AltAVBaH += L18;break;	// tzadi
			/*mem F*/	case "\u05DD":letter = "\u05E2";gematria2AltAVBaH += L16;break;	// ayin
			/*nun F*/	case "\u05DF":letter = "\u05E1";gematria2AltAVBaH += L15;break;	// samech
			/*pey F*/	case "\u05E3":letter = "\u05DC";gematria2AltAVBaH += L12;break;	// lamed
			/*tzadi F*/	case "\u05E5":letter = "\u05DB";gematria2AltAVBaH += L11;break;	// kaf
			default:letter = "";break;
		}
		AltAVBaH += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAVBaH = AltAVBaH.substring(0, AltAVBaH.length - 1);gematria2AltAVBaH -= L11;gematria2AltAVBaH += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAVBaH = AltAVBaH.substring(0, AltAVBaH.length - 1);gematria2AltAVBaH -= L13;gematria2AltAVBaH += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAVBaH = AltAVBaH.substring(0, AltAVBaH.length - 1);gematria2AltAVBaH -= L14;gematria2AltAVBaH += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAVBaH = AltAVBaH.substring(0, AltAVBaH.length - 1);gematria2AltAVBaH -= L17;gematria2AltAVBaH += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAVBaH = AltAVBaH.substring(0, AltAVBaH.length - 1);gematria2AltAVBaH -= L18;gematria2AltAVBaH += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAVBaH += letter;
		}
	}

// AltAHBaD
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D4";gematria2AltAHBaD += L05;break;	// hey
			/*bet*/		case "\u05D1":letter = "\u05D3";gematria2AltAHBaD += L04;break;	// dalet
			/*gimel*/	case "\u05D2":letter = "\u05D2";gematria2AltAHBaD += L03;break;	// gimel
			/*dalet*/	case "\u05D3":letter = "\u05D1";gematria2AltAHBaD += L02;break;	// bet
			/*hey*/		case "\u05D4":letter = "\u05D0";gematria2AltAHBaD += L01;break;	// aleph
			/*vav*/		case "\u05D5":letter = "\u05EA";gematria2AltAHBaD += L22;break;	// tav
			/*zayin*/	case "\u05D6":letter = "\u05E9";gematria2AltAHBaD += L21;break;	// shin
			/*chet*/	case "\u05D7":letter = "\u05E8";gematria2AltAHBaD += L20;break;	// resh
			/*tet*/		case "\u05D8":letter = "\u05E7";gematria2AltAHBaD += L19;break;	// kuf
			/*yod*/		case "\u05D9":letter = "\u05E6";gematria2AltAHBaD += L18;break;	// tzadi
			/*kaf*/		case "\u05DB":letter = "\u05E4";gematria2AltAHBaD += L17;break;	// pey
			/*lamed*/	case "\u05DC":letter = "\u05E2";gematria2AltAHBaD += L16;break;	// ayin
			/*mem*/		case "\u05DE":letter = "\u05E1";gematria2AltAHBaD += L15;break;	// samech
			/*nun*/		case "\u05E0":letter = "\u05E0";gematria2AltAHBaD += L14;break;	// nun
			/*samech*/	case "\u05E1":letter = "\u05DE";gematria2AltAHBaD += L13;break;	// mem
			/*ayin*/	case "\u05E2":letter = "\u05DC";gematria2AltAHBaD += L12;break;	// lamed
			/*pey*/		case "\u05E4":letter = "\u05DB";gematria2AltAHBaD += L11;break;	// kaf
			/*tzadi*/	case "\u05E6":letter = "\u05D9";gematria2AltAHBaD += L10;break;	// yod
			/*kuf*/		case "\u05E7":letter = "\u05D8";gematria2AltAHBaD += L09;break;	// tet
			/*resh*/	case "\u05E8":letter = "\u05D7";gematria2AltAHBaD += L08;break;	// chet
			/*shin*/	case "\u05E9":letter = "\u05D6";gematria2AltAHBaD += L07;break;	// zayin
			/*tav*/		case "\u05EA":letter = "\u05D5";gematria2AltAHBaD += L06;break;	// vav
			/*kaf F*/	case "\u05DA":letter = "\u05E4";gematria2AltAHBaD += L17;break;	// pey
			/*mem F*/	case "\u05DD":letter = "\u05E1";gematria2AltAHBaD += L15;break;	// samech
			/*nun F*/	case "\u05DF":letter = "\u05E0";gematria2AltAHBaD += L14;break;	// nun
			/*pey F*/	case "\u05E3":letter = "\u05DB";gematria2AltAHBaD += L11;break;	// kaf
			/*tzadi F*/	case "\u05E5":letter = "\u05D9";gematria2AltAHBaD += L10;break;	// yod
			default:letter = "";break;
		}
		AltAHBaD += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAHBaD = AltAHBaD.substring(0, AltAHBaD.length - 1);gematria2AltAHBaD -= L11;gematria2AltAHBaD += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAHBaD = AltAHBaD.substring(0, AltAHBaD.length - 1);gematria2AltAHBaD -= L13;gematria2AltAHBaD += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAHBaD = AltAHBaD.substring(0, AltAHBaD.length - 1);gematria2AltAHBaD -= L14;gematria2AltAHBaD += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAHBaD = AltAHBaD.substring(0, AltAHBaD.length - 1);gematria2AltAHBaD -= L17;gematria2AltAHBaD += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAHBaD = AltAHBaD.substring(0, AltAHBaD.length - 1);gematria2AltAHBaD -= L18;gematria2AltAHBaD += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAHBaD += letter;
		}
	}

// AltADBeG
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D3";gematria2AltADBeG += L04;break;	// dalet
			/*bet*/		case "\u05D1":letter = "\u05D2";gematria2AltADBeG += L03;break;	// gimel
			/*gimel*/	case "\u05D2":letter = "\u05D1";gematria2AltADBeG += L02;break;	// bet
			/*dalet*/	case "\u05D3":letter = "\u05D0";gematria2AltADBeG += L01;break;	// aleph
			/*hey*/		case "\u05D4":letter = "\u05EA";gematria2AltADBeG += L22;break;	// tav
			/*vav*/		case "\u05D5":letter = "\u05E9";gematria2AltADBeG += L21;break;	// shin
			/*zayin*/	case "\u05D6":letter = "\u05E8";gematria2AltADBeG += L20;break;	// resh
			/*chet*/	case "\u05D7":letter = "\u05E7";gematria2AltADBeG += L19;break;	// kuf
			/*tet*/		case "\u05D8":letter = "\u05E6";gematria2AltADBeG += L18;break;	// tzadi
			/*yod*/		case "\u05D9":letter = "\u05E4";gematria2AltADBeG += L17;break;	// pey
			/*kaf*/		case "\u05DB":letter = "\u05E2";gematria2AltADBeG += L16;break;	// ayin
			/*lamed*/	case "\u05DC":letter = "\u05E1";gematria2AltADBeG += L15;break;	// samech
			/*mem*/		case "\u05DE":letter = "\u05E0";gematria2AltADBeG += L14;break;	// nun
			/*nun*/		case "\u05E0":letter = "\u05DE";gematria2AltADBeG += L13;break;	// mem
			/*samech*/	case "\u05E1":letter = "\u05DC";gematria2AltADBeG += L12;break;	// lamed
			/*ayin*/	case "\u05E2":letter = "\u05DB";gematria2AltADBeG += L11;break;	// kaf
			/*pey*/		case "\u05E4":letter = "\u05D9";gematria2AltADBeG += L10;break;	// yod
			/*tzadi*/	case "\u05E6":letter = "\u05D8";gematria2AltADBeG += L09;break;	// tet
			/*kuf*/		case "\u05E7":letter = "\u05D7";gematria2AltADBeG += L08;break;	// chet
			/*resh*/	case "\u05E8":letter = "\u05D6";gematria2AltADBeG += L07;break;	// zayin
			/*shin*/	case "\u05E9":letter = "\u05D5";gematria2AltADBeG += L06;break;	// vav
			/*tav*/		case "\u05EA":letter = "\u05D4";gematria2AltADBeG += L05;break;	// hey
			/*kaf F*/	case "\u05DA":letter = "\u05E2";gematria2AltADBeG += L16;break;	// ayin
			/*mem F*/	case "\u05DD":letter = "\u05E0";gematria2AltADBeG += L14;break;	// nun
			/*nun F*/	case "\u05DF":letter = "\u05DE";gematria2AltADBeG += L13;break;	// mem
			/*pey F*/	case "\u05E3":letter = "\u05D9";gematria2AltADBeG += L10;break;	// yod
			/*tzadi F*/	case "\u05E5":letter = "\u05D8";gematria2AltADBeG += L09;break;	// tet
			default:letter = "";break;
		}
		AltADBeG += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltADBeG = AltADBeG.substring(0, AltADBeG.length - 1);gematria2AltADBeG -= L11;gematria2AltADBeG += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltADBeG = AltADBeG.substring(0, AltADBeG.length - 1);gematria2AltADBeG -= L13;gematria2AltADBeG += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltADBeG = AltADBeG.substring(0, AltADBeG.length - 1);gematria2AltADBeG -= L14;gematria2AltADBeG += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltADBeG = AltADBeG.substring(0, AltADBeG.length - 1);gematria2AltADBeG -= L17;gematria2AltADBeG += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltADBeG = AltADBeG.substring(0, AltADBeG.length - 1);gematria2AltADBeG -= L18;gematria2AltADBeG += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltADBeG += letter;
		}
	}

// AltAGBaB
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D2";gematria2AltAGBaB += L03;break;	// gimel
			/*bet*/		case "\u05D1":letter = "\u05D1";gematria2AltAGBaB += L02;break;	// bet
			/*gimel*/	case "\u05D2":letter = "\u05D0";gematria2AltAGBaB += L01;break;	// aleph
			/*dalet*/	case "\u05D3":letter = "\u05EA";gematria2AltAGBaB += L22;break;	// tav
			/*hey*/		case "\u05D4":letter = "\u05E9";gematria2AltAGBaB += L21;break;	// shin
			/*vav*/		case "\u05D5":letter = "\u05E8";gematria2AltAGBaB += L20;break;	// resh
			/*zayin*/	case "\u05D6":letter = "\u05E7";gematria2AltAGBaB += L19;break;	// kuf
			/*chet*/	case "\u05D7":letter = "\u05E6";gematria2AltAGBaB += L18;break;	// tzadi
			/*tet*/		case "\u05D8":letter = "\u05E4";gematria2AltAGBaB += L17;break;	// pey
			/*yod*/		case "\u05D9":letter = "\u05E2";gematria2AltAGBaB += L16;break;	// ayin
			/*kaf*/		case "\u05DB":letter = "\u05E1";gematria2AltAGBaB += L15;break;	// samech
			/*lamed*/	case "\u05DC":letter = "\u05E0";gematria2AltAGBaB += L14;break;	// nun
			/*mem*/		case "\u05DE":letter = "\u05DE";gematria2AltAGBaB += L13;break;	// mem
			/*nun*/		case "\u05E0":letter = "\u05DC";gematria2AltAGBaB += L12;break;	// lamed
			/*samech*/	case "\u05E1":letter = "\u05DB";gematria2AltAGBaB += L11;break;	// kaf
			/*ayin*/	case "\u05E2":letter = "\u05D9";gematria2AltAGBaB += L10;break;	// yod
			/*pey*/		case "\u05E4":letter = "\u05D8";gematria2AltAGBaB += L09;break;	// tet
			/*tzadi*/	case "\u05E6":letter = "\u05D7";gematria2AltAGBaB += L08;break;	// chet
			/*kuf*/		case "\u05E7":letter = "\u05D6";gematria2AltAGBaB += L07;break;	// zayin
			/*resh*/	case "\u05E8":letter = "\u05D5";gematria2AltAGBaB += L06;break;	// vav
			/*shin*/	case "\u05E9":letter = "\u05D4";gematria2AltAGBaB += L05;break;	// hey
			/*tav*/		case "\u05EA":letter = "\u05D3";gematria2AltAGBaB += L04;break;	// dalet
			/*kaf F*/	case "\u05DA":letter = "\u05E1";gematria2AltAGBaB += L15;break;	// samech
			/*mem F*/	case "\u05DD":letter = "\u05DE";gematria2AltAGBaB += L13;break;	// mem
			/*nun F*/	case "\u05DF":letter = "\u05DC";gematria2AltAGBaB += L12;break;	// lamed
			/*pey F*/	case "\u05E3":letter = "\u05D8";gematria2AltAGBaB += L09;break;	// tet
			/*tzadi F*/	case "\u05E5":letter = "\u05D7";gematria2AltAGBaB += L08;break;	// chet
			default:letter = "";break;
		}
		AltAGBaB += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAGBaB = AltAGBaB.substring(0, AltAGBaB.length - 1);gematria2AltAGBaB -= L11;gematria2AltAGBaB += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAGBaB = AltAGBaB.substring(0, AltAGBaB.length - 1);gematria2AltAGBaB -= L13;gematria2AltAGBaB += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAGBaB = AltAGBaB.substring(0, AltAGBaB.length - 1);gematria2AltAGBaB -= L14;gematria2AltAGBaB += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAGBaB = AltAGBaB.substring(0, AltAGBaB.length - 1);gematria2AltAGBaB -= L17;gematria2AltAGBaB += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAGBaB = AltAGBaB.substring(0, AltAGBaB.length - 1);gematria2AltAGBaB -= L18;gematria2AltAGBaB += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAGBaB += letter;
		}
	}

// AltABBA
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D1";gematria2AltABBA += L02;break;	// bet
			/*bet*/		case "\u05D1":letter = "\u05D0";gematria2AltABBA += L01;break;	// aleph
			/*gimel*/	case "\u05D2":letter = "\u05EA";gematria2AltABBA += L22;break;	// tav
			/*dalet*/	case "\u05D3":letter = "\u05E9";gematria2AltABBA += L21;break;	// shin
			/*hey*/		case "\u05D4":letter = "\u05E8";gematria2AltABBA += L20;break;	// resh
			/*vav*/		case "\u05D5":letter = "\u05E7";gematria2AltABBA += L19;break;	// kuf
			/*zayin*/	case "\u05D6":letter = "\u05E6";gematria2AltABBA += L18;break;	// tzadi
			/*chet*/	case "\u05D7":letter = "\u05E4";gematria2AltABBA += L17;break;	// pey
			/*tet*/		case "\u05D8":letter = "\u05E2";gematria2AltABBA += L16;break;	// ayin
			/*yod*/		case "\u05D9":letter = "\u05E1";gematria2AltABBA += L15;break;	// samech
			/*kaf*/		case "\u05DB":letter = "\u05E0";gematria2AltABBA += L14;break;	// nun
			/*lamed*/	case "\u05DC":letter = "\u05DE";gematria2AltABBA += L13;break;	// mem
			/*mem*/		case "\u05DE":letter = "\u05DC";gematria2AltABBA += L12;break;	// lamed
			/*nun*/		case "\u05E0":letter = "\u05DB";gematria2AltABBA += L11;break;	// kaf
			/*samech*/	case "\u05E1":letter = "\u05D9";gematria2AltABBA += L10;break;	// yod
			/*ayin*/	case "\u05E2":letter = "\u05D8";gematria2AltABBA += L09;break;	// tet
			/*pey*/		case "\u05E4":letter = "\u05D7";gematria2AltABBA += L08;break;	// chet
			/*tzadi*/	case "\u05E6":letter = "\u05D6";gematria2AltABBA += L07;break;	// zayin
			/*kuf*/		case "\u05E7":letter = "\u05D5";gematria2AltABBA += L06;break;	// vav
			/*resh*/	case "\u05E8":letter = "\u05D4";gematria2AltABBA += L05;break;	// hey
			/*shin*/	case "\u05E9":letter = "\u05D3";gematria2AltABBA += L04;break;	// dalet
			/*tav*/		case "\u05EA":letter = "\u05D2";gematria2AltABBA += L03;break;	// gimel
			/*kaf F*/	case "\u05DA":letter = "\u05E0";gematria2AltABBA += L14;break;	// nun
			/*mem F*/	case "\u05DD":letter = "\u05DC";gematria2AltABBA += L12;break;	// lamed
			/*nun F*/	case "\u05DF":letter = "\u05DB";gematria2AltABBA += L11;break;	// kaf
			/*pey F*/	case "\u05E3":letter = "\u05D7";gematria2AltABBA += L08;break;	// chet
			/*tzadi F*/	case "\u05E5":letter = "\u05D6";gematria2AltABBA += L07;break;	// zayin
			default:letter = "";break;
		}
		AltABBA += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltABBA = AltABBA.substring(0, AltABBA.length - 1);gematria2AltABBA -= L11;gematria2AltABBA += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltABBA = AltABBA.substring(0, AltABBA.length - 1);gematria2AltABBA -= L13;gematria2AltABBA += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltABBA = AltABBA.substring(0, AltABBA.length - 1);gematria2AltABBA -= L14;gematria2AltABBA += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltABBA = AltABBA.substring(0, AltABBA.length - 1);gematria2AltABBA -= L17;gematria2AltABBA += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltABBA = AltABBA.substring(0, AltABBA.length - 1);gematria2AltABBA -= L18;gematria2AltABBA += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltABBA += letter;
		}
	}

// AltAAhBaT
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D0";gematria2AltAAhBaT += L01;break;	// aleph
			/*bet*/		case "\u05D1":letter = "\u05EA";gematria2AltAAhBaT += L22;break;	// tav
			/*gimel*/	case "\u05D2":letter = "\u05E9";gematria2AltAAhBaT += L21;break;	// shin
			/*dalet*/	case "\u05D3":letter = "\u05E8";gematria2AltAAhBaT += L20;break;	// resh
			/*hey*/		case "\u05D4":letter = "\u05E7";gematria2AltAAhBaT += L19;break;	// kuf
			/*vav*/		case "\u05D5":letter = "\u05E6";gematria2AltAAhBaT += L18;break;	// tzadi
			/*zayin*/	case "\u05D6":letter = "\u05E4";gematria2AltAAhBaT += L17;break;	// pey
			/*chet*/	case "\u05D7":letter = "\u05E2";gematria2AltAAhBaT += L16;break;	// ayin
			/*tet*/		case "\u05D8":letter = "\u05E1";gematria2AltAAhBaT += L15;break;	// samech
			/*yod*/		case "\u05D9":letter = "\u05E0";gematria2AltAAhBaT += L14;break;	// nun
			/*kaf*/		case "\u05DB":letter = "\u05DE";gematria2AltAAhBaT += L13;break;	// mem
			/*lamed*/	case "\u05DC":letter = "\u05DC";gematria2AltAAhBaT += L12;break;	// lamed
			/*mem*/		case "\u05DE":letter = "\u05DB";gematria2AltAAhBaT += L11;break;	// kaf
			/*nun*/		case "\u05E0":letter = "\u05D9";gematria2AltAAhBaT += L10;break;	// yod
			/*samech*/	case "\u05E1":letter = "\u05D8";gematria2AltAAhBaT += L09;break;	// tet
			/*ayin*/	case "\u05E2":letter = "\u05D7";gematria2AltAAhBaT += L08;break;	// chet
			/*pey*/		case "\u05E4":letter = "\u05D6";gematria2AltAAhBaT += L07;break;	// zayin
			/*tzadi*/	case "\u05E6":letter = "\u05D5";gematria2AltAAhBaT += L06;break;	// vav
			/*kuf*/		case "\u05E7":letter = "\u05D4";gematria2AltAAhBaT += L05;break;	// hey
			/*resh*/	case "\u05E8":letter = "\u05D3";gematria2AltAAhBaT += L04;break;	// dalet
			/*shin*/	case "\u05E9":letter = "\u05D2";gematria2AltAAhBaT += L03;break;	// gimel
			/*tav*/		case "\u05EA":letter = "\u05D1";gematria2AltAAhBaT += L02;break;	// bet
			/*kaf F*/	case "\u05DA":letter = "\u05DE";gematria2AltAAhBaT += L13;break;	// mem
			/*mem F*/	case "\u05DD":letter = "\u05DB";gematria2AltAAhBaT += L11;break;	// kaf
			/*nun F*/	case "\u05DF":letter = "\u05D9";gematria2AltAAhBaT += L10;break;	// yod
			/*pey F*/	case "\u05E3":letter = "\u05D6";gematria2AltAAhBaT += L07;break;	// zayin
			/*tzadi F*/	case "\u05E5":letter = "\u05D5";gematria2AltAAhBaT += L06;break;	// vav
			default:letter = "";break;
		}
		AltAAhBaT += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAAhBaT = AltAAhBaT.substring(0, AltAAhBaT.length - 1);gematria2AltAAhBaT -= L11;gematria2AltAAhBaT += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAAhBaT = AltAAhBaT.substring(0, AltAAhBaT.length - 1);gematria2AltAAhBaT -= L13;gematria2AltAAhBaT += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAAhBaT = AltAAhBaT.substring(0, AltAAhBaT.length - 1);gematria2AltAAhBaT -= L14;gematria2AltAAhBaT += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAAhBaT = AltAAhBaT.substring(0, AltAAhBaT.length - 1);gematria2AltAAhBaT -= L17;gematria2AltAAhBaT += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAAhBaT = AltAAhBaT.substring(0, AltAAhBaT.length - 1);gematria2AltAAhBaT -= L18;gematria2AltAAhBaT += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAAhBaT += letter;
		}
	}

// AltABBaG
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D1";gematria2AltABBaG += L02;break;	// bet
			/*bet*/		case "\u05D1":letter = "\u05D2";gematria2AltABBaG += L03;break;	// gimel
			/*gimel*/	case "\u05D2":letter = "\u05D3";gematria2AltABBaG += L04;break;	// dalet
			/*dalet*/	case "\u05D3":letter = "\u05D4";gematria2AltABBaG += L05;break;	// hey
			/*hey*/		case "\u05D4":letter = "\u05D5";gematria2AltABBaG += L06;break;	// vav
			/*vav*/		case "\u05D5":letter = "\u05D6";gematria2AltABBaG += L07;break;	// zayin
			/*zayin*/	case "\u05D6":letter = "\u05D7";gematria2AltABBaG += L08;break;	// chet
			/*chet*/	case "\u05D7":letter = "\u05D8";gematria2AltABBaG += L09;break;	// tet
			/*tet*/		case "\u05D8":letter = "\u05D9";gematria2AltABBaG += L10;break;	// yod
			/*yod*/		case "\u05D9":letter = "\u05DB";gematria2AltABBaG += L11;break;	// kaf
			/*kaf*/		case "\u05DB":letter = "\u05DC";gematria2AltABBaG += L12;break;	// lamed
			/*lamed*/	case "\u05DC":letter = "\u05DE";gematria2AltABBaG += L13;break;	// mem
			/*mem*/		case "\u05DE":letter = "\u05E0";gematria2AltABBaG += L14;break;	// nun
			/*nun*/		case "\u05E0":letter = "\u05E1";gematria2AltABBaG += L15;break;	// samech
			/*samech*/	case "\u05E1":letter = "\u05E2";gematria2AltABBaG += L16;break;	// ayin
			/*ayin*/	case "\u05E2":letter = "\u05E4";gematria2AltABBaG += L17;break;	// pey
			/*pey*/		case "\u05E4":letter = "\u05E6";gematria2AltABBaG += L18;break;	// tzadi
			/*tzadi*/	case "\u05E6":letter = "\u05E7";gematria2AltABBaG += L19;break;	// kuf
			/*kuf*/		case "\u05E7":letter = "\u05E8";gematria2AltABBaG += L20;break;	// resh
			/*resh*/	case "\u05E8":letter = "\u05E9";gematria2AltABBaG += L21;break;	// shin
			/*shin*/	case "\u05E9":letter = "\u05EA";gematria2AltABBaG += L22;break;	// tav
			/*tav*/		case "\u05EA":letter = "\u05D0";gematria2AltABBaG += L01;break;	// aleph
			/*kaf F*/	case "\u05DA":letter = "\u05DC";gematria2AltABBaG += L12;break;	// lamed
			/*mem F*/	case "\u05DD":letter = "\u05E0";gematria2AltABBaG += L14;break;	// nun
			/*nun F*/	case "\u05DF":letter = "\u05E1";gematria2AltABBaG += L15;break;	// samech
			/*pey F*/	case "\u05E3":letter = "\u05E6";gematria2AltABBaG += L18;break;	// tzadi
			/*tzadi F*/	case "\u05E5":letter = "\u05E7";gematria2AltABBaG += L19;break;	// kuf
			default:letter = "";break;
		}
		AltABBaG += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltABBaG = AltABBaG.substring(0, AltABBaG.length - 1);gematria2AltABBaG -= L11;gematria2AltABBaG += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltABBaG = AltABBaG.substring(0, AltABBaG.length - 1);gematria2AltABBaG -= L13;gematria2AltABBaG += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltABBaG = AltABBaG.substring(0, AltABBaG.length - 1);gematria2AltABBaG -= L14;gematria2AltABBaG += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltABBaG = AltABBaG.substring(0, AltABBaG.length - 1);gematria2AltABBaG -= L17;gematria2AltABBaG += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltABBaG = AltABBaG.substring(0, AltABBaG.length - 1);gematria2AltABBaG -= L18;gematria2AltABBaG += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltABBaG += letter;
		}
	}

// AltAGBaD
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D2";gematria2AltAGBaD += L03;break;	// gimel
			/*bet*/		case "\u05D1":letter = "\u05D3";gematria2AltAGBaD += L04;break;	// dalet
			/*gimel*/	case "\u05D2":letter = "\u05D4";gematria2AltAGBaD += L05;break;	// hey
			/*dalet*/	case "\u05D3":letter = "\u05D5";gematria2AltAGBaD += L06;break;	// vav
			/*hey*/		case "\u05D4":letter = "\u05D6";gematria2AltAGBaD += L07;break;	// zayin
			/*vav*/		case "\u05D5":letter = "\u05D7";gematria2AltAGBaD += L08;break;	// chet
			/*zayin*/	case "\u05D6":letter = "\u05D8";gematria2AltAGBaD += L09;break;	// tet
			/*chet*/	case "\u05D7":letter = "\u05D9";gematria2AltAGBaD += L10;break;	// yod
			/*tet*/		case "\u05D8":letter = "\u05DB";gematria2AltAGBaD += L11;break;	// kaf
			/*yod*/		case "\u05D9":letter = "\u05DC";gematria2AltAGBaD += L12;break;	// lamed
			/*kaf*/		case "\u05DB":letter = "\u05DE";gematria2AltAGBaD += L13;break;	// mem
			/*lamed*/	case "\u05DC":letter = "\u05E0";gematria2AltAGBaD += L14;break;	// nun
			/*mem*/		case "\u05DE":letter = "\u05E1";gematria2AltAGBaD += L15;break;	// samech
			/*nun*/		case "\u05E0":letter = "\u05E2";gematria2AltAGBaD += L16;break;	// ayin
			/*samech*/	case "\u05E1":letter = "\u05E4";gematria2AltAGBaD += L17;break;	// pey
			/*ayin*/	case "\u05E2":letter = "\u05E6";gematria2AltAGBaD += L18;break;	// tzadi
			/*pey*/		case "\u05E4":letter = "\u05E7";gematria2AltAGBaD += L19;break;	// kuf
			/*tzadi*/	case "\u05E6":letter = "\u05E8";gematria2AltAGBaD += L20;break;	// resh
			/*kuf*/		case "\u05E7":letter = "\u05E9";gematria2AltAGBaD += L21;break;	// shin
			/*resh*/	case "\u05E8":letter = "\u05EA";gematria2AltAGBaD += L22;break;	// tav
			/*shin*/	case "\u05E9":letter = "\u05D0";gematria2AltAGBaD += L01;break;	// aleph
			/*tav*/		case "\u05EA":letter = "\u05D1";gematria2AltAGBaD += L02;break;	// bet
			/*kaf F*/	case "\u05DA":letter = "\u05DE";gematria2AltAGBaD += L13;break;	// mem
			/*mem F*/	case "\u05DD":letter = "\u05E1";gematria2AltAGBaD += L15;break;	// samech
			/*nun F*/	case "\u05DF":letter = "\u05E2";gematria2AltAGBaD += L16;break;	// ayin
			/*pey F*/	case "\u05E3":letter = "\u05E7";gematria2AltAGBaD += L19;break;	// kuf
			/*tzadi F*/	case "\u05E5":letter = "\u05E8";gematria2AltAGBaD += L20;break;	// resh
			default:letter = "";break;
		}
		AltAGBaD += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAGBaD = AltAGBaD.substring(0, AltAGBaD.length - 1);gematria2AltAGBaD -= L11;gematria2AltAGBaD += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAGBaD = AltAGBaD.substring(0, AltAGBaD.length - 1);gematria2AltAGBaD -= L13;gematria2AltAGBaD += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAGBaD = AltAGBaD.substring(0, AltAGBaD.length - 1);gematria2AltAGBaD -= L14;gematria2AltAGBaD += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAGBaD = AltAGBaD.substring(0, AltAGBaD.length - 1);gematria2AltAGBaD -= L17;gematria2AltAGBaD += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAGBaD = AltAGBaD.substring(0, AltAGBaD.length - 1);gematria2AltAGBaD -= L18;gematria2AltAGBaD += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAGBaD += letter;
		}
	}

// AltADBaH
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D3";gematria2AltADBaH += L04;break;	// dalet
			/*bet*/		case "\u05D1":letter = "\u05D4";gematria2AltADBaH += L05;break;	// hey
			/*gimel*/	case "\u05D2":letter = "\u05D5";gematria2AltADBaH += L06;break;	// vav
			/*dalet*/	case "\u05D3":letter = "\u05D6";gematria2AltADBaH += L07;break;	// zayin
			/*hey*/		case "\u05D4":letter = "\u05D7";gematria2AltADBaH += L08;break;	// chet
			/*vav*/		case "\u05D5":letter = "\u05D8";gematria2AltADBaH += L09;break;	// tet
			/*zayin*/	case "\u05D6":letter = "\u05D9";gematria2AltADBaH += L10;break;	// yod
			/*chet*/	case "\u05D7":letter = "\u05DB";gematria2AltADBaH += L11;break;	// kaf
			/*tet*/		case "\u05D8":letter = "\u05DC";gematria2AltADBaH += L12;break;	// lamed
			/*yod*/		case "\u05D9":letter = "\u05DE";gematria2AltADBaH += L13;break;	// mem
			/*kaf*/		case "\u05DB":letter = "\u05E0";gematria2AltADBaH += L14;break;	// nun
			/*lamed*/	case "\u05DC":letter = "\u05E1";gematria2AltADBaH += L15;break;	// samech
			/*mem*/		case "\u05DE":letter = "\u05E2";gematria2AltADBaH += L16;break;	// ayin
			/*nun*/		case "\u05E0":letter = "\u05E4";gematria2AltADBaH += L17;break;	// pey
			/*samech*/	case "\u05E1":letter = "\u05E6";gematria2AltADBaH += L18;break;	// tzadi
			/*ayin*/	case "\u05E2":letter = "\u05E7";gematria2AltADBaH += L19;break;	// kuf
			/*pey*/		case "\u05E4":letter = "\u05E8";gematria2AltADBaH += L20;break;	// resh
			/*tzadi*/	case "\u05E6":letter = "\u05E9";gematria2AltADBaH += L21;break;	// shin
			/*kuf*/		case "\u05E7":letter = "\u05EA";gematria2AltADBaH += L22;break;	// tav
			/*resh*/	case "\u05E8":letter = "\u05D0";gematria2AltADBaH += L01;break;	// aleph
			/*shin*/	case "\u05E9":letter = "\u05D1";gematria2AltADBaH += L02;break;	// bet
			/*tav*/		case "\u05EA":letter = "\u05D2";gematria2AltADBaH += L03;break;	// gimel
			/*kaf F*/	case "\u05DA":letter = "\u05E0";gematria2AltADBaH += L14;break;	// nun
			/*mem F*/	case "\u05DD":letter = "\u05E2";gematria2AltADBaH += L16;break;	// ayin
			/*nun F*/	case "\u05DF":letter = "\u05E4";gematria2AltADBaH += L17;break;	// pey
			/*pey F*/	case "\u05E3":letter = "\u05E8";gematria2AltADBaH += L20;break;	// resh
			/*tzadi F*/	case "\u05E5":letter = "\u05E9";gematria2AltADBaH += L21;break;	// shin
			default:letter = "";break;
		}
		AltADBaH += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltADBaH = AltADBaH.substring(0, AltADBaH.length - 1);gematria2AltADBaH -= L11;gematria2AltADBaH += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltADBaH = AltADBaH.substring(0, AltADBaH.length - 1);gematria2AltADBaH -= L13;gematria2AltADBaH += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltADBaH = AltADBaH.substring(0, AltADBaH.length - 1);gematria2AltADBaH -= L14;gematria2AltADBaH += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltADBaH = AltADBaH.substring(0, AltADBaH.length - 1);gematria2AltADBaH -= L17;gematria2AltADBaH += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltADBaH = AltADBaH.substring(0, AltADBaH.length - 1);gematria2AltADBaH -= L18;gematria2AltADBaH += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltADBaH += letter;
		}
	}

// AltAHBeV
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D4";gematria2AltAHBeV += L05;break;	// hey
			/*bet*/		case "\u05D1":letter = "\u05D5";gematria2AltAHBeV += L06;break;	// vav
			/*gimel*/	case "\u05D2":letter = "\u05D6";gematria2AltAHBeV += L07;break;	// zayin
			/*dalet*/	case "\u05D3":letter = "\u05D7";gematria2AltAHBeV += L08;break;	// chet
			/*hey*/		case "\u05D4":letter = "\u05D8";gematria2AltAHBeV += L09;break;	// tet
			/*vav*/		case "\u05D5":letter = "\u05D9";gematria2AltAHBeV += L10;break;	// yod
			/*zayin*/	case "\u05D6":letter = "\u05DB";gematria2AltAHBeV += L11;break;	// kaf
			/*chet*/	case "\u05D7":letter = "\u05DC";gematria2AltAHBeV += L12;break;	// lamed
			/*tet*/		case "\u05D8":letter = "\u05DE";gematria2AltAHBeV += L13;break;	// mem
			/*yod*/		case "\u05D9":letter = "\u05E0";gematria2AltAHBeV += L14;break;	// nun
			/*kaf*/		case "\u05DB":letter = "\u05E1";gematria2AltAHBeV += L15;break;	// samech
			/*lamed*/	case "\u05DC":letter = "\u05E2";gematria2AltAHBeV += L16;break;	// ayin
			/*mem*/		case "\u05DE":letter = "\u05E4";gematria2AltAHBeV += L17;break;	// pey
			/*nun*/		case "\u05E0":letter = "\u05E6";gematria2AltAHBeV += L18;break;	// tzadi
			/*samech*/	case "\u05E1":letter = "\u05E7";gematria2AltAHBeV += L19;break;	// kuf
			/*ayin*/	case "\u05E2":letter = "\u05E8";gematria2AltAHBeV += L20;break;	// resh
			/*pey*/		case "\u05E4":letter = "\u05E9";gematria2AltAHBeV += L21;break;	// shin
			/*tzadi*/	case "\u05E6":letter = "\u05EA";gematria2AltAHBeV += L22;break;	// tav
			/*kuf*/		case "\u05E7":letter = "\u05D0";gematria2AltAHBeV += L01;break;	// aleph
			/*resh*/	case "\u05E8":letter = "\u05D1";gematria2AltAHBeV += L02;break;	// bet
			/*shin*/	case "\u05E9":letter = "\u05D2";gematria2AltAHBeV += L03;break;	// gimel
			/*tav*/		case "\u05EA":letter = "\u05D3";gematria2AltAHBeV += L04;break;	// dalet
			/*kaf F*/	case "\u05DA":letter = "\u05E1";gematria2AltAHBeV += L15;break;	// samech
			/*mem F*/	case "\u05DD":letter = "\u05E4";gematria2AltAHBeV += L17;break;	// pey
			/*nun F*/	case "\u05DF":letter = "\u05E6";gematria2AltAHBeV += L18;break;	// tzadi
			/*pey F*/	case "\u05E3":letter = "\u05E9";gematria2AltAHBeV += L21;break;	// shin
			/*tzadi F*/	case "\u05E5":letter = "\u05EA";gematria2AltAHBeV += L22;break;	// tav
			default:letter = "";break;
		}
		AltAHBeV += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAHBeV = AltAHBeV.substring(0, AltAHBeV.length - 1);gematria2AltAHBeV -= L11;gematria2AltAHBeV += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAHBeV = AltAHBeV.substring(0, AltAHBeV.length - 1);gematria2AltAHBeV -= L13;gematria2AltAHBeV += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAHBeV = AltAHBeV.substring(0, AltAHBeV.length - 1);gematria2AltAHBeV -= L14;gematria2AltAHBeV += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAHBeV = AltAHBeV.substring(0, AltAHBeV.length - 1);gematria2AltAHBeV -= L17;gematria2AltAHBeV += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAHBeV = AltAHBeV.substring(0, AltAHBeV.length - 1);gematria2AltAHBeV -= L18;gematria2AltAHBeV += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAHBeV += letter;
		}
	}

// AltAVBeZ
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D5";gematria2AltAVBeZ += L06;break;	// vav
			/*bet*/		case "\u05D1":letter = "\u05D6";gematria2AltAVBeZ += L07;break;	// zayin
			/*gimel*/	case "\u05D2":letter = "\u05D7";gematria2AltAVBeZ += L08;break;	// chet
			/*dalet*/	case "\u05D3":letter = "\u05D8";gematria2AltAVBeZ += L09;break;	// tet
			/*hey*/		case "\u05D4":letter = "\u05D9";gematria2AltAVBeZ += L10;break;	// yod
			/*vav*/		case "\u05D5":letter = "\u05DB";gematria2AltAVBeZ += L11;break;	// kaf
			/*zayin*/	case "\u05D6":letter = "\u05DC";gematria2AltAVBeZ += L12;break;	// lamed
			/*chet*/	case "\u05D7":letter = "\u05DE";gematria2AltAVBeZ += L13;break;	// mem
			/*tet*/		case "\u05D8":letter = "\u05E0";gematria2AltAVBeZ += L14;break;	// nun
			/*yod*/		case "\u05D9":letter = "\u05E1";gematria2AltAVBeZ += L15;break;	// samech
			/*kaf*/		case "\u05DB":letter = "\u05E2";gematria2AltAVBeZ += L16;break;	// ayin
			/*lamed*/	case "\u05DC":letter = "\u05E4";gematria2AltAVBeZ += L17;break;	// pey
			/*mem*/		case "\u05DE":letter = "\u05E6";gematria2AltAVBeZ += L18;break;	// tzadi
			/*nun*/		case "\u05E0":letter = "\u05E7";gematria2AltAVBeZ += L19;break;	// kuf
			/*samech*/	case "\u05E1":letter = "\u05E8";gematria2AltAVBeZ += L20;break;	// resh
			/*ayin*/	case "\u05E2":letter = "\u05E9";gematria2AltAVBeZ += L21;break;	// shin
			/*pey*/		case "\u05E4":letter = "\u05EA";gematria2AltAVBeZ += L22;break;	// tav
			/*tzadi*/	case "\u05E6":letter = "\u05D0";gematria2AltAVBeZ += L01;break;	// aleph
			/*kuf*/		case "\u05E7":letter = "\u05D1";gematria2AltAVBeZ += L02;break;	// bet
			/*resh*/	case "\u05E8":letter = "\u05D2";gematria2AltAVBeZ += L03;break;	// gimel
			/*shin*/	case "\u05E9":letter = "\u05D3";gematria2AltAVBeZ += L04;break;	// dalet
			/*tav*/		case "\u05EA":letter = "\u05D4";gematria2AltAVBeZ += L05;break;	// hey
			/*kaf F*/	case "\u05DA":letter = "\u05E2";gematria2AltAVBeZ += L16;break;	// ayin
			/*mem F*/	case "\u05DD":letter = "\u05E6";gematria2AltAVBeZ += L18;break;	// tzadi
			/*nun F*/	case "\u05DF":letter = "\u05E7";gematria2AltAVBeZ += L19;break;	// kuf
			/*pey F*/	case "\u05E3":letter = "\u05EA";gematria2AltAVBeZ += L22;break;	// tav
			/*tzadi F*/	case "\u05E5":letter = "\u05D0";gematria2AltAVBeZ += L01;break;	// aleph
			default:letter = "";break;
		}
		AltAVBeZ += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAVBeZ = AltAVBeZ.substring(0, AltAVBeZ.length - 1);gematria2AltAVBeZ -= L11;gematria2AltAVBeZ += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAVBeZ = AltAVBeZ.substring(0, AltAVBeZ.length - 1);gematria2AltAVBeZ -= L13;gematria2AltAVBeZ += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAVBeZ = AltAVBeZ.substring(0, AltAVBeZ.length - 1);gematria2AltAVBeZ -= L14;gematria2AltAVBeZ += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAVBeZ = AltAVBeZ.substring(0, AltAVBeZ.length - 1);gematria2AltAVBeZ -= L17;gematria2AltAVBeZ += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAVBeZ = AltAVBeZ.substring(0, AltAVBeZ.length - 1);gematria2AltAVBeZ -= L18;gematria2AltAVBeZ += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAVBeZ += letter;
		}
	}

// AltAZBeCh
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D6";gematria2AltAZBeCh += L07;break;	// zayin
			/*bet*/		case "\u05D1":letter = "\u05D7";gematria2AltAZBeCh += L08;break;	// chet
			/*gimel*/	case "\u05D2":letter = "\u05D8";gematria2AltAZBeCh += L09;break;	// tet
			/*dalet*/	case "\u05D3":letter = "\u05D9";gematria2AltAZBeCh += L10;break;	// yod
			/*hey*/		case "\u05D4":letter = "\u05DC";gematria2AltAZBeCh += L11;break;	// lamed
			/*vav*/		case "\u05D5":letter = "\u05DB";gematria2AltAZBeCh += L12;break;	// kaf
			/*zayin*/	case "\u05D6":letter = "\u05DE";gematria2AltAZBeCh += L13;break;	// mem
			/*chet*/	case "\u05D7":letter = "\u05E0";gematria2AltAZBeCh += L14;break;	// nun
			/*tet*/		case "\u05D8":letter = "\u05E1";gematria2AltAZBeCh += L15;break;	// samech
			/*yod*/		case "\u05D9":letter = "\u05E2";gematria2AltAZBeCh += L16;break;	// ayin
			/*kaf*/		case "\u05DB":letter = "\u05E4";gematria2AltAZBeCh += L17;break;	// pey
			/*lamed*/	case "\u05DC":letter = "\u05E6";gematria2AltAZBeCh += L18;break;	// tzadi
			/*mem*/		case "\u05DE":letter = "\u05E7";gematria2AltAZBeCh += L19;break;	// kuf
			/*nun*/		case "\u05E0":letter = "\u05E8";gematria2AltAZBeCh += L20;break;	// resh
			/*samech*/	case "\u05E1":letter = "\u05E9";gematria2AltAZBeCh += L21;break;	// shin
			/*ayin*/	case "\u05E2":letter = "\u05EA";gematria2AltAZBeCh += L22;break;	// tav
			/*pey*/		case "\u05E4":letter = "\u05D0";gematria2AltAZBeCh += L01;break;	// aleph
			/*tzadi*/	case "\u05E6":letter = "\u05D1";gematria2AltAZBeCh += L02;break;	// bet
			/*kuf*/		case "\u05E7":letter = "\u05D2";gematria2AltAZBeCh += L03;break;	// gimel
			/*resh*/	case "\u05E8":letter = "\u05D3";gematria2AltAZBeCh += L04;break;	// dalet
			/*shin*/	case "\u05E9":letter = "\u05D4";gematria2AltAZBeCh += L05;break;	// hey
			/*tav*/		case "\u05EA":letter = "\u05D5";gematria2AltAZBeCh += L06;break;	// vav
			/*kaf F*/	case "\u05DA":letter = "\u05E4";gematria2AltAZBeCh += L17;break;	// pey
			/*mem F*/	case "\u05DD":letter = "\u05E7";gematria2AltAZBeCh += L19;break;	// kuf
			/*nun F*/	case "\u05DF":letter = "\u05E8";gematria2AltAZBeCh += L20;break;	// resh
			/*pey F*/	case "\u05E3":letter = "\u05D0";gematria2AltAZBeCh += L01;break;	// aleph
			/*tzadi F*/	case "\u05E5":letter = "\u05D1";gematria2AltAZBeCh += L02;break;	// bet
			default:letter = "";break;
		}
		AltAZBeCh += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAZBeCh = AltAZBeCh.substring(0, AltAZBeCh.length - 1);gematria2AltAZBeCh -= L11;gematria2AltAZBeCh += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAZBeCh = AltAZBeCh.substring(0, AltAZBeCh.length - 1);gematria2AltAZBeCh -= L13;gematria2AltAZBeCh += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAZBeCh = AltAZBeCh.substring(0, AltAZBeCh.length - 1);gematria2AltAZBeCh -= L14;gematria2AltAZBeCh += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAZBeCh = AltAZBeCh.substring(0, AltAZBeCh.length - 1);gematria2AltAZBeCh -= L17;gematria2AltAZBeCh += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAZBeCh = AltAZBeCh.substring(0, AltAZBeCh.length - 1);gematria2AltAZBeCh -= L18;gematria2AltAZBeCh += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAZBeCh += letter;
		}
	}

// AltAChBeT
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D7";gematria2AltAChBeT += L08;break;	// chet
			/*bet*/		case "\u05D1":letter = "\u05D8";gematria2AltAChBeT += L09;break;	// tet
			/*gimel*/	case "\u05D2":letter = "\u05D9";gematria2AltAChBeT += L10;break;	// yod
			/*dalet*/	case "\u05D3":letter = "\u05DB";gematria2AltAChBeT += L11;break;	// kaf
			/*hey*/		case "\u05D4":letter = "\u05DC";gematria2AltAChBeT += L12;break;	// lamed
			/*vav*/		case "\u05D5":letter = "\u05DE";gematria2AltAChBeT += L13;break;	// mem
			/*zayin*/	case "\u05D6":letter = "\u05E0";gematria2AltAChBeT += L14;break;	// nun
			/*chet*/	case "\u05D7":letter = "\u05E1";gematria2AltAChBeT += L15;break;	// samech
			/*tet*/		case "\u05D8":letter = "\u05E2";gematria2AltAChBeT += L16;break;	// ayin
			/*yod*/		case "\u05D9":letter = "\u05E4";gematria2AltAChBeT += L17;break;	// pey
			/*kaf*/		case "\u05DB":letter = "\u05E6";gematria2AltAChBeT += L18;break;	// tzadi
			/*lamed*/	case "\u05DC":letter = "\u05E7";gematria2AltAChBeT += L19;break;	// kuf
			/*mem*/		case "\u05DE":letter = "\u05E8";gematria2AltAChBeT += L20;break;	// resh
			/*nun*/		case "\u05E0":letter = "\u05E9";gematria2AltAChBeT += L21;break;	// shin
			/*samech*/	case "\u05E1":letter = "\u05EA";gematria2AltAChBeT += L22;break;	// tav
			/*ayin*/	case "\u05E2":letter = "\u05D0";gematria2AltAChBeT += L01;break;	// aleph
			/*pey*/		case "\u05E4":letter = "\u05D1";gematria2AltAChBeT += L02;break;	// bet
			/*tzadi*/	case "\u05E6":letter = "\u05D2";gematria2AltAChBeT += L03;break;	// gimel
			/*kuf*/		case "\u05E7":letter = "\u05D3";gematria2AltAChBeT += L04;break;	// dalet
			/*resh*/	case "\u05E8":letter = "\u05D4";gematria2AltAChBeT += L05;break;	// hey
			/*shin*/	case "\u05E9":letter = "\u05D5";gematria2AltAChBeT += L06;break;	// vav
			/*tav*/		case "\u05EA":letter = "\u05D6";gematria2AltAChBeT += L07;break;	// zayin
			/*kaf F*/	case "\u05DA":letter = "\u05E6";gematria2AltAChBeT += L18;break;	// tzadi
			/*mem F*/	case "\u05DD":letter = "\u05E8";gematria2AltAChBeT += L20;break;	// resh
			/*nun F*/	case "\u05DF":letter = "\u05E9";gematria2AltAChBeT += L21;break;	// shin
			/*pey F*/	case "\u05E3":letter = "\u05D1";gematria2AltAChBeT += L02;break;	// bet
			/*tzadi F*/	case "\u05E5":letter = "\u05D2";gematria2AltAChBeT += L03;break;	// gimel
			default:letter = "";break;
		}
		AltAChBeT += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAChBeT = AltAChBeT.substring(0, AltAChBeT.length - 1);gematria2AltAChBeT -= L11;gematria2AltAChBeT += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAChBeT = AltAChBeT.substring(0, AltAChBeT.length - 1);gematria2AltAChBeT -= L13;gematria2AltAChBeT += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAChBeT = AltAChBeT.substring(0, AltAChBeT.length - 1);gematria2AltAChBeT -= L14;gematria2AltAChBeT += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAChBeT = AltAChBeT.substring(0, AltAChBeT.length - 1);gematria2AltAChBeT -= L17;gematria2AltAChBeT += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAChBeT = AltAChBeT.substring(0, AltAChBeT.length - 1);gematria2AltAChBeT -= L18;gematria2AltAChBeT += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAChBeT += letter;
		}
	}

// AltATBI
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D8";gematria2AltATBI += L09;break;	// tet
			/*bet*/		case "\u05D1":letter = "\u05D9";gematria2AltATBI += L10;break;	// yod
			/*gimel*/	case "\u05D2":letter = "\u05DB";gematria2AltATBI += L11;break;	// kaf
			/*dalet*/	case "\u05D3":letter = "\u05DC";gematria2AltATBI += L12;break;	// lamed
			/*hey*/		case "\u05D4":letter = "\u05DE";gematria2AltATBI += L13;break;	// mem
			/*vav*/		case "\u05D5":letter = "\u05E0";gematria2AltATBI += L14;break;	// nun
			/*zayin*/	case "\u05D6":letter = "\u05E1";gematria2AltATBI += L15;break;	// samech
			/*chet*/	case "\u05D7":letter = "\u05E2";gematria2AltATBI += L16;break;	// ayin
			/*tet*/		case "\u05D8":letter = "\u05E4";gematria2AltATBI += L17;break;	// pey
			/*yod*/		case "\u05D9":letter = "\u05E6";gematria2AltATBI += L18;break;	// tzadi
			/*kaf*/		case "\u05DB":letter = "\u05E7";gematria2AltATBI += L19;break;	// kuf
			/*lamed*/	case "\u05DC":letter = "\u05E8";gematria2AltATBI += L20;break;	// resh
			/*mem*/		case "\u05DE":letter = "\u05E9";gematria2AltATBI += L21;break;	// shin
			/*nun*/		case "\u05E0":letter = "\u05EA";gematria2AltATBI += L22;break;	// tav
			/*samech*/	case "\u05E1":letter = "\u05D0";gematria2AltATBI += L01;break;	// aleph
			/*ayin*/	case "\u05E2":letter = "\u05D1";gematria2AltATBI += L02;break;	// bet
			/*pey*/		case "\u05E4":letter = "\u05D2";gematria2AltATBI += L03;break;	// gimel
			/*tzadi*/	case "\u05E6":letter = "\u05D3";gematria2AltATBI += L04;break;	// dalet
			/*kuf*/		case "\u05E7":letter = "\u05D4";gematria2AltATBI += L05;break;	// hey
			/*resh*/	case "\u05E8":letter = "\u05D5";gematria2AltATBI += L06;break;	// vav
			/*shin*/	case "\u05E9":letter = "\u05D6";gematria2AltATBI += L07;break;	// zayin
			/*tav*/		case "\u05EA":letter = "\u05D7";gematria2AltATBI += L08;break;	// chet
			/*kaf F*/	case "\u05DA":letter = "\u05E7";gematria2AltATBI += L19;break;	// kuf
			/*mem F*/	case "\u05DD":letter = "\u05E9";gematria2AltATBI += L21;break;	// shin
			/*nun F*/	case "\u05DF":letter = "\u05EA";gematria2AltATBI += L22;break;	// tav
			/*pey F*/	case "\u05E3":letter = "\u05D2";gematria2AltATBI += L03;break;	// gimel
			/*tzadi F*/	case "\u05E5":letter = "\u05D3";gematria2AltATBI += L04;break;	// dalet
			default:letter = "";break;
		}
		AltATBI += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltATBI = AltATBI.substring(0, AltATBI.length - 1);gematria2AltATBI -= L11;gematria2AltATBI += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltATBI = AltATBI.substring(0, AltATBI.length - 1);gematria2AltATBI -= L13;gematria2AltATBI += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltATBI = AltATBI.substring(0, AltATBI.length - 1);gematria2AltATBI -= L14;gematria2AltATBI += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltATBI = AltATBI.substring(0, AltATBI.length - 1);gematria2AltATBI -= L17;gematria2AltATBI += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltATBI = AltATBI.substring(0, AltATBI.length - 1);gematria2AltATBI -= L18;gematria2AltATBI += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltATBI += letter;
		}
	}

// AltAIBech
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05D9";gematria2AltAIBech += L10;break;	// yod
			/*bet*/		case "\u05D1":letter = "\u05DB";gematria2AltAIBech += L11;break;	// kaf
			/*gimel*/	case "\u05D2":letter = "\u05DC";gematria2AltAIBech += L12;break;	// lamed
			/*dalet*/	case "\u05D3":letter = "\u05DE";gematria2AltAIBech += L13;break;	// mem
			/*hey*/		case "\u05D4":letter = "\u05E0";gematria2AltAIBech += L14;break;	// nun
			/*vav*/		case "\u05D5":letter = "\u05E1";gematria2AltAIBech += L15;break;	// samech
			/*zayin*/	case "\u05D6":letter = "\u05E2";gematria2AltAIBech += L16;break;	// ayin
			/*chet*/	case "\u05D7":letter = "\u05E4";gematria2AltAIBech += L17;break;	// pey
			/*tet*/		case "\u05D8":letter = "\u05E6";gematria2AltAIBech += L18;break;	// tzadi
			/*yod*/		case "\u05D9":letter = "\u05E7";gematria2AltAIBech += L19;break;	// kuf
			/*kaf*/		case "\u05DB":letter = "\u05E8";gematria2AltAIBech += L20;break;	// resh
			/*lamed*/	case "\u05DC":letter = "\u05E9";gematria2AltAIBech += L21;break;	// shin
			/*mem*/		case "\u05DE":letter = "\u05EA";gematria2AltAIBech += L22;break;	// tav
			/*nun*/		case "\u05E0":letter = "\u05D0";gematria2AltAIBech += L01;break;	// aleph
			/*samech*/	case "\u05E1":letter = "\u05D1";gematria2AltAIBech += L02;break;	// bet
			/*ayin*/	case "\u05E2":letter = "\u05D2";gematria2AltAIBech += L03;break;	// gimel
			/*pey*/		case "\u05E4":letter = "\u05D3";gematria2AltAIBech += L04;break;	// dalet
			/*tzadi*/	case "\u05E6":letter = "\u05D4";gematria2AltAIBech += L05;break;	// hey
			/*kuf*/		case "\u05E7":letter = "\u05D5";gematria2AltAIBech += L06;break;	// vav
			/*resh*/	case "\u05E8":letter = "\u05D6";gematria2AltAIBech += L07;break;	// zayin
			/*shin*/	case "\u05E9":letter = "\u05D7";gematria2AltAIBech += L08;break;	// chet
			/*tav*/		case "\u05EA":letter = "\u05D8";gematria2AltAIBech += L09;break;	// tet
			/*kaf F*/	case "\u05DA":letter = "\u05E8";gematria2AltAIBech += L20;break;	// resh
			/*mem F*/	case "\u05DD":letter = "\u05EA";gematria2AltAIBech += L22;break;	// tav
			/*nun F*/	case "\u05DF":letter = "\u05D0";gematria2AltAIBech += L01;break;	// aleph
			/*pey F*/	case "\u05E3":letter = "\u05D3";gematria2AltAIBech += L04;break;	// dalet
			/*tzadi F*/	case "\u05E5":letter = "\u05D4";gematria2AltAIBech += L05;break;	// hey
			default:letter = "";break;
		}
		AltAIBech += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAIBech = AltAIBech.substring(0, AltAIBech.length - 1);gematria2AltAIBech -= L11;gematria2AltAIBech += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAIBech = AltAIBech.substring(0, AltAIBech.length - 1);gematria2AltAIBech -= L13;gematria2AltAIBech += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAIBech = AltAIBech.substring(0, AltAIBech.length - 1);gematria2AltAIBech -= L14;gematria2AltAIBech += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAIBech = AltAIBech.substring(0, AltAIBech.length - 1);gematria2AltAIBech -= L17;gematria2AltAIBech += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAIBech = AltAIBech.substring(0, AltAIBech.length - 1);gematria2AltAIBech -= L18;gematria2AltAIBech += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAIBech += letter;
		}
	}

// AltAChBeL
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05DB";gematria2AltAChBeL += L11;break;	// kaf
			/*bet*/		case "\u05D1":letter = "\u05DC";gematria2AltAChBeL += L12;break;	// lamed
			/*gimel*/	case "\u05D2":letter = "\u05DE";gematria2AltAChBeL += L13;break;	// mem
			/*dalet*/	case "\u05D3":letter = "\u05E0";gematria2AltAChBeL += L14;break;	// nun
			/*hey*/		case "\u05D4":letter = "\u05E1";gematria2AltAChBeL += L15;break;	// samech
			/*vav*/		case "\u05D5":letter = "\u05E2";gematria2AltAChBeL += L16;break;	// ayin
			/*zayin*/	case "\u05D6":letter = "\u05E4";gematria2AltAChBeL += L17;break;	// pey
			/*chet*/	case "\u05D7":letter = "\u05E6";gematria2AltAChBeL += L18;break;	// tzadi
			/*tet*/		case "\u05D8":letter = "\u05E7";gematria2AltAChBeL += L19;break;	// kuf
			/*yod*/		case "\u05D9":letter = "\u05E8";gematria2AltAChBeL += L20;break;	// resh
			/*kaf*/		case "\u05DB":letter = "\u05E9";gematria2AltAChBeL += L21;break;	// shin
			/*lamed*/	case "\u05DC":letter = "\u05EA";gematria2AltAChBeL += L22;break;	// tav
			/*mem*/		case "\u05DE":letter = "\u05D0";gematria2AltAChBeL += L01;break;	// aleph
			/*nun*/		case "\u05E0":letter = "\u05D1";gematria2AltAChBeL += L02;break;	// bet
			/*samech*/	case "\u05E1":letter = "\u05D2";gematria2AltAChBeL += L03;break;	// gimel
			/*ayin*/	case "\u05E2":letter = "\u05D3";gematria2AltAChBeL += L04;break;	// dalet
			/*pey*/		case "\u05E4":letter = "\u05D4";gematria2AltAChBeL += L05;break;	// hey
			/*tzadi*/	case "\u05E6":letter = "\u05D5";gematria2AltAChBeL += L06;break;	// vav
			/*kuf*/		case "\u05E7":letter = "\u05D6";gematria2AltAChBeL += L07;break;	// zayin
			/*resh*/	case "\u05E8":letter = "\u05D7";gematria2AltAChBeL += L08;break;	// chet
			/*shin*/	case "\u05E9":letter = "\u05D8";gematria2AltAChBeL += L09;break;	// tet
			/*tav*/		case "\u05EA":letter = "\u05D9";gematria2AltAChBeL += L10;break;	// yod
			/*kaf F*/	case "\u05DA":letter = "\u05E9";gematria2AltAChBeL += L21;break;	// shin
			/*mem F*/	case "\u05DD":letter = "\u05D0";gematria2AltAChBeL += L01;break;	// aleph
			/*nun F*/	case "\u05DF":letter = "\u05D1";gematria2AltAChBeL += L02;break;	// bet
			/*pey F*/	case "\u05E3":letter = "\u05D4";gematria2AltAChBeL += L05;break;	// hey
			/*tzadi F*/	case "\u05E5":letter = "\u05D5";gematria2AltAChBeL += L06;break;	// vav
			default:letter = "";break;
		}
		AltAChBeL += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAChBeL = AltAChBeL.substring(0, AltAChBeL.length - 1);gematria2AltAChBeL -= L11;gematria2AltAChBeL += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAChBeL = AltAChBeL.substring(0, AltAChBeL.length - 1);gematria2AltAChBeL -= L13;gematria2AltAChBeL += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAChBeL = AltAChBeL.substring(0, AltAChBeL.length - 1);gematria2AltAChBeL -= L14;gematria2AltAChBeL += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAChBeL = AltAChBeL.substring(0, AltAChBeL.length - 1);gematria2AltAChBeL -= L17;gematria2AltAChBeL += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAChBeL = AltAChBeL.substring(0, AltAChBeL.length - 1);gematria2AltAChBeL -= L18;gematria2AltAChBeL += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAChBeL += letter;
		}
	}

// AltELBaM
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05DC";gematria2AltELBaM += L12;break;	// lamed
			/*bet*/		case "\u05D1":letter = "\u05DE";gematria2AltELBaM += L13;break;	// mem
			/*gimel*/	case "\u05D2":letter = "\u05E0";gematria2AltELBaM += L14;break;	// nun
			/*dalet*/	case "\u05D3":letter = "\u05E1";gematria2AltELBaM += L15;break;	// samech
			/*hey*/		case "\u05D4":letter = "\u05E2";gematria2AltELBaM += L16;break;	// ayin
			/*vav*/		case "\u05D5":letter = "\u05E4";gematria2AltELBaM += L17;break;	// pey
			/*zayin*/	case "\u05D6":letter = "\u05E6";gematria2AltELBaM += L18;break;	// tzadi
			/*chet*/	case "\u05D7":letter = "\u05E7";gematria2AltELBaM += L19;break;	// kuf
			/*tet*/		case "\u05D8":letter = "\u05E8";gematria2AltELBaM += L20;break;	// resh
			/*yod*/		case "\u05D9":letter = "\u05E9";gematria2AltELBaM += L21;break;	// shin
			/*kaf*/		case "\u05DB":letter = "\u05EA";gematria2AltELBaM += L22;break;	// tav
			/*lamed*/	case "\u05DC":letter = "\u05D0";gematria2AltELBaM += L01;break;	// aleph
			/*mem*/		case "\u05DE":letter = "\u05D1";gematria2AltELBaM += L02;break;	// bet
			/*nun*/		case "\u05E0":letter = "\u05D2";gematria2AltELBaM += L03;break;	// gimel
			/*samech*/	case "\u05E1":letter = "\u05D3";gematria2AltELBaM += L04;break;	// dalet
			/*ayin*/	case "\u05E2":letter = "\u05D4";gematria2AltELBaM += L05;break;	// hey
			/*pey*/		case "\u05E4":letter = "\u05D5";gematria2AltELBaM += L06;break;	// vav
			/*tzadi*/	case "\u05E6":letter = "\u05D6";gematria2AltELBaM += L07;break;	// zayin
			/*kuf*/		case "\u05E7":letter = "\u05D7";gematria2AltELBaM += L08;break;	// chet
			/*resh*/	case "\u05E8":letter = "\u05D8";gematria2AltELBaM += L09;break;	// tet
			/*shin*/	case "\u05E9":letter = "\u05D9";gematria2AltELBaM += L10;break;	// yod
			/*tav*/		case "\u05EA":letter = "\u05DB";gematria2AltELBaM += L11;break;	// kaf
			/*kaf F*/	case "\u05DA":letter = "\u05EA";gematria2AltELBaM += L22;break;	// tav
			/*mem F*/	case "\u05DD":letter = "\u05D1";gematria2AltELBaM += L02;break;	// bet
			/*nun F*/	case "\u05DF":letter = "\u05D2";gematria2AltELBaM += L03;break;	// gimel
			/*pey F*/	case "\u05E3":letter = "\u05D5";gematria2AltELBaM += L06;break;	// vav
			/*tzadi F*/	case "\u05E5":letter = "\u05D6";gematria2AltELBaM += L07;break;	// zayin
			default:letter = "";break;
		}
		AltELBaM += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltELBaM = AltELBaM.substring(0, AltELBaM.length - 1);gematria2AltELBaM -= L11;gematria2AltELBaM += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltELBaM = AltELBaM.substring(0, AltELBaM.length - 1);gematria2AltELBaM -= L13;gematria2AltELBaM += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltELBaM = AltELBaM.substring(0, AltELBaM.length - 1);gematria2AltELBaM -= L14;gematria2AltELBaM += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltELBaM = AltELBaM.substring(0, AltELBaM.length - 1);gematria2AltELBaM -= L17;gematria2AltELBaM += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltELBaM = AltELBaM.substring(0, AltELBaM.length - 1);gematria2AltELBaM -= L18;gematria2AltELBaM += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltELBaM += letter;
		}
	}

// AltAMBeN
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05DE";gematria2AltAMBeN += L13;break;	// mem
			/*bet*/		case "\u05D1":letter = "\u05E0";gematria2AltAMBeN += L14;break;	// nun
			/*gimel*/	case "\u05D2":letter = "\u05E1";gematria2AltAMBeN += L15;break;	// samech
			/*dalet*/	case "\u05D3":letter = "\u05E2";gematria2AltAMBeN += L16;break;	// ayin
			/*hey*/		case "\u05D4":letter = "\u05E4";gematria2AltAMBeN += L17;break;	// pey
			/*vav*/		case "\u05D5":letter = "\u05E6";gematria2AltAMBeN += L18;break;	// tzadi
			/*zayin*/	case "\u05D6":letter = "\u05E7";gematria2AltAMBeN += L19;break;	// kuf
			/*chet*/	case "\u05D7":letter = "\u05E8";gematria2AltAMBeN += L20;break;	// resh
			/*tet*/		case "\u05D8":letter = "\u05E9";gematria2AltAMBeN += L21;break;	// shin
			/*yod*/		case "\u05D9":letter = "\u05EA";gematria2AltAMBeN += L22;break;	// tav
			/*kaf*/		case "\u05DB":letter = "\u05D0";gematria2AltAMBeN += L01;break;	// aleph
			/*lamed*/	case "\u05DC":letter = "\u05D1";gematria2AltAMBeN += L02;break;	// bet
			/*mem*/		case "\u05DE":letter = "\u05D2";gematria2AltAMBeN += L03;break;	// gimel
			/*nun*/		case "\u05E0":letter = "\u05D3";gematria2AltAMBeN += L04;break;	// dalet
			/*samech*/	case "\u05E1":letter = "\u05D4";gematria2AltAMBeN += L05;break;	// hey
			/*ayin*/	case "\u05E2":letter = "\u05D5";gematria2AltAMBeN += L06;break;	// vav
			/*pey*/		case "\u05E4":letter = "\u05D6";gematria2AltAMBeN += L07;break;	// zayin
			/*tzadi*/	case "\u05E6":letter = "\u05D7";gematria2AltAMBeN += L08;break;	// chet
			/*kuf*/		case "\u05E7":letter = "\u05D8";gematria2AltAMBeN += L09;break;	// tet
			/*resh*/	case "\u05E8":letter = "\u05D9";gematria2AltAMBeN += L10;break;	// yod
			/*shin*/	case "\u05E9":letter = "\u05DB";gematria2AltAMBeN += L11;break;	// kaf
			/*tav*/		case "\u05EA":letter = "\u05DC";gematria2AltAMBeN += L12;break;	// lamed
			/*kaf F*/	case "\u05DA":letter = "\u05D0";gematria2AltAMBeN += L01;break;	// aleph
			/*mem F*/	case "\u05DD":letter = "\u05D2";gematria2AltAMBeN += L03;break;	// gimel
			/*nun F*/	case "\u05DF":letter = "\u05D3";gematria2AltAMBeN += L04;break;	// dalet
			/*pey F*/	case "\u05E3":letter = "\u05D6";gematria2AltAMBeN += L07;break;	// zayin
			/*tzadi F*/	case "\u05E5":letter = "\u05D7";gematria2AltAMBeN += L08;break;	// chet
			default:letter = "";break;
		}
		AltAMBeN += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAMBeN = AltAMBeN.substring(0, AltAMBeN.length - 1);gematria2AltAMBeN -= L11;gematria2AltAMBeN += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAMBeN = AltAMBeN.substring(0, AltAMBeN.length - 1);gematria2AltAMBeN -= L13;gematria2AltAMBeN += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAMBeN = AltAMBeN.substring(0, AltAMBeN.length - 1);gematria2AltAMBeN -= L14;gematria2AltAMBeN += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAMBeN = AltAMBeN.substring(0, AltAMBeN.length - 1);gematria2AltAMBeN -= L17;gematria2AltAMBeN += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAMBeN = AltAMBeN.substring(0, AltAMBeN.length - 1);gematria2AltAMBeN -= L18;gematria2AltAMBeN += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAMBeN += letter;
		}
	}

// AltANBeS
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E0";gematria2AltANBeS += L14;break;	// nun
			/*bet*/		case "\u05D1":letter = "\u05E1";gematria2AltANBeS += L15;break;	// samech
			/*gimel*/	case "\u05D2":letter = "\u05E2";gematria2AltANBeS += L16;break;	// ayin
			/*dalet*/	case "\u05D3":letter = "\u05E4";gematria2AltANBeS += L17;break;	// pey
			/*hey*/		case "\u05D4":letter = "\u05E6";gematria2AltANBeS += L18;break;	// tzadi
			/*vav*/		case "\u05D5":letter = "\u05E7";gematria2AltANBeS += L19;break;	// kuf
			/*zayin*/	case "\u05D6":letter = "\u05E8";gematria2AltANBeS += L20;break;	// resh
			/*chet*/	case "\u05D7":letter = "\u05E9";gematria2AltANBeS += L21;break;	// shin
			/*tet*/		case "\u05D8":letter = "\u05EA";gematria2AltANBeS += L22;break;	// tav
			/*yod*/		case "\u05D9":letter = "\u05D0";gematria2AltANBeS += L01;break;	// aleph
			/*kaf*/		case "\u05DB":letter = "\u05D1";gematria2AltANBeS += L02;break;	// bet
			/*lamed*/	case "\u05DC":letter = "\u05D2";gematria2AltANBeS += L03;break;	// gimel
			/*mem*/		case "\u05DE":letter = "\u05D3";gematria2AltANBeS += L04;break;	// dalet
			/*nun*/		case "\u05E0":letter = "\u05D4";gematria2AltANBeS += L05;break;	// hey
			/*samech*/	case "\u05E1":letter = "\u05D5";gematria2AltANBeS += L06;break;	// vav
			/*ayin*/	case "\u05E2":letter = "\u05D6";gematria2AltANBeS += L07;break;	// zayin
			/*pey*/		case "\u05E4":letter = "\u05D7";gematria2AltANBeS += L08;break;	// chet
			/*tzadi*/	case "\u05E6":letter = "\u05D8";gematria2AltANBeS += L09;break;	// tet
			/*kuf*/		case "\u05E7":letter = "\u05D9";gematria2AltANBeS += L10;break;	// yod
			/*resh*/	case "\u05E8":letter = "\u05DB";gematria2AltANBeS += L11;break;	// kaf
			/*shin*/	case "\u05E9":letter = "\u05DC";gematria2AltANBeS += L12;break;	// lamed
			/*tav*/		case "\u05EA":letter = "\u05DE";gematria2AltANBeS += L13;break;	// mem
			/*kaf F*/	case "\u05DA":letter = "\u05D1";gematria2AltANBeS += L02;break;	// bet
			/*mem F*/	case "\u05DD":letter = "\u05D3";gematria2AltANBeS += L04;break;	// dalet
			/*nun F*/	case "\u05DF":letter = "\u05D4";gematria2AltANBeS += L05;break;	// hey
			/*pey F*/	case "\u05E3":letter = "\u05D7";gematria2AltANBeS += L08;break;	// chet
			/*tzadi F*/	case "\u05E5":letter = "\u05D8";gematria2AltANBeS += L09;break;	// tet
			default:letter = "";break;
		}
		AltANBeS += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltANBeS = AltANBeS.substring(0, AltANBeS.length - 1);gematria2AltANBeS -= L11;gematria2AltANBeS += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltANBeS = AltANBeS.substring(0, AltANBeS.length - 1);gematria2AltANBeS -= L13;gematria2AltANBeS += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltANBeS = AltANBeS.substring(0, AltANBeS.length - 1);gematria2AltANBeS -= L14;gematria2AltANBeS += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltANBeS = AltANBeS.substring(0, AltANBeS.length - 1);gematria2AltANBeS -= L17;gematria2AltANBeS += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltANBeS = AltANBeS.substring(0, AltANBeS.length - 1);gematria2AltANBeS -= L18;gematria2AltANBeS += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltANBeS += letter;
		}
	}

// AltASBA
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E1";gematria2AltASBA += L15;break;	// samech
			/*bet*/		case "\u05D1":letter = "\u05E2";gematria2AltASBA += L16;break;	// ayin
			/*gimel*/	case "\u05D2":letter = "\u05E4";gematria2AltASBA += L17;break;	// pey
			/*dalet*/	case "\u05D3":letter = "\u05E6";gematria2AltASBA += L18;break;	// tzadi
			/*hey*/		case "\u05D4":letter = "\u05E7";gematria2AltASBA += L19;break;	// kuf
			/*vav*/		case "\u05D5":letter = "\u05E8";gematria2AltASBA += L20;break;	// resh
			/*zayin*/	case "\u05D6":letter = "\u05E9";gematria2AltASBA += L21;break;	// shin
			/*chet*/	case "\u05D7":letter = "\u05EA";gematria2AltASBA += L22;break;	// tav
			/*tet*/		case "\u05D8":letter = "\u05D0";gematria2AltASBA += L01;break;	// aleph
			/*yod*/		case "\u05D9":letter = "\u05D1";gematria2AltASBA += L02;break;	// bet
			/*kaf*/		case "\u05DB":letter = "\u05D2";gematria2AltASBA += L03;break;	// gimel
			/*lamed*/	case "\u05DC":letter = "\u05D3";gematria2AltASBA += L04;break;	// dalet
			/*mem*/		case "\u05DE":letter = "\u05D4";gematria2AltASBA += L05;break;	// hey
			/*nun*/		case "\u05E0":letter = "\u05D5";gematria2AltASBA += L06;break;	// vav
			/*samech*/	case "\u05E1":letter = "\u05D6";gematria2AltASBA += L07;break;	// zayin
			/*ayin*/	case "\u05E2":letter = "\u05D7";gematria2AltASBA += L08;break;	// chet
			/*pey*/		case "\u05E4":letter = "\u05D8";gematria2AltASBA += L09;break;	// tet
			/*tzadi*/	case "\u05E6":letter = "\u05D9";gematria2AltASBA += L10;break;	// yod
			/*kuf*/		case "\u05E7":letter = "\u05DB";gematria2AltASBA += L11;break;	// kaf
			/*resh*/	case "\u05E8":letter = "\u05DC";gematria2AltASBA += L12;break;	// lamed
			/*shin*/	case "\u05E9":letter = "\u05DE";gematria2AltASBA += L13;break;	// mem
			/*tav*/		case "\u05EA":letter = "\u05E0";gematria2AltASBA += L14;break;	// nun
			/*kaf F*/	case "\u05DA":letter = "\u05D2";gematria2AltASBA += L03;break;	// gimel
			/*mem F*/	case "\u05DD":letter = "\u05D4";gematria2AltASBA += L05;break;	// hey
			/*nun F*/	case "\u05DF":letter = "\u05D5";gematria2AltASBA += L06;break;	// vav
			/*pey F*/	case "\u05E3":letter = "\u05D8";gematria2AltASBA += L09;break;	// tet
			/*tzadi F*/	case "\u05E5":letter = "\u05D9";gematria2AltASBA += L10;break;	// yod
			default:letter = "";break;
		}
		AltASBA += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltASBA = AltASBA.substring(0, AltASBA.length - 1);gematria2AltASBA -= L11;gematria2AltASBA += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltASBA = AltASBA.substring(0, AltASBA.length - 1);gematria2AltASBA -= L13;gematria2AltASBA += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltASBA = AltASBA.substring(0, AltASBA.length - 1);gematria2AltASBA -= L14;gematria2AltASBA += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltASBA = AltASBA.substring(0, AltASBA.length - 1);gematria2AltASBA -= L17;gematria2AltASBA += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltASBA = AltASBA.substring(0, AltASBA.length - 1);gematria2AltASBA -= L18;gematria2AltASBA += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltASBA += letter;
		}
	}

// AltAABaPh
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E2";gematria2AltAABaPh += L16;break;	// ayin
			/*bet*/		case "\u05D1":letter = "\u05E4";gematria2AltAABaPh += L17;break;	// pey
			/*gimel*/	case "\u05D2":letter = "\u05E6";gematria2AltAABaPh += L18;break;	// tzadi
			/*dalet*/	case "\u05D3":letter = "\u05E7";gematria2AltAABaPh += L19;break;	// kuf
			/*hey*/		case "\u05D4":letter = "\u05E8";gematria2AltAABaPh += L20;break;	// resh
			/*vav*/		case "\u05D5":letter = "\u05E9";gematria2AltAABaPh += L21;break;	// shin
			/*zayin*/	case "\u05D6":letter = "\u05EA";gematria2AltAABaPh += L22;break;	// tav
			/*chet*/	case "\u05D7":letter = "\u05D0";gematria2AltAABaPh += L01;break;	// aleph
			/*tet*/		case "\u05D8":letter = "\u05D1";gematria2AltAABaPh += L02;break;	// bet
			/*yod*/		case "\u05D9":letter = "\u05D2";gematria2AltAABaPh += L03;break;	// gimel
			/*kaf*/		case "\u05DB":letter = "\u05D3";gematria2AltAABaPh += L04;break;	// dalet
			/*lamed*/	case "\u05DC":letter = "\u05D4";gematria2AltAABaPh += L05;break;	// hey
			/*mem*/		case "\u05DE":letter = "\u05D5";gematria2AltAABaPh += L06;break;	// vav
			/*nun*/		case "\u05E0":letter = "\u05D6";gematria2AltAABaPh += L07;break;	// zayin
			/*samech*/	case "\u05E1":letter = "\u05D7";gematria2AltAABaPh += L08;break;	// chet
			/*ayin*/	case "\u05E2":letter = "\u05D8";gematria2AltAABaPh += L09;break;	// tet
			/*pey*/		case "\u05E4":letter = "\u05D9";gematria2AltAABaPh += L10;break;	// yod
			/*tzadi*/	case "\u05E6":letter = "\u05DB";gematria2AltAABaPh += L11;break;	// kaf
			/*kuf*/		case "\u05E7":letter = "\u05DC";gematria2AltAABaPh += L12;break;	// lamed
			/*resh*/	case "\u05E8":letter = "\u05DE";gematria2AltAABaPh += L13;break;	// mem
			/*shin*/	case "\u05E9":letter = "\u05E0";gematria2AltAABaPh += L14;break;	// nun
			/*tav*/		case "\u05EA":letter = "\u05E1";gematria2AltAABaPh += L15;break;	// samech
			/*kaf F*/	case "\u05DA":letter = "\u05D3";gematria2AltAABaPh += L04;break;	// dalet
			/*mem F*/	case "\u05DD":letter = "\u05D5";gematria2AltAABaPh += L06;break;	// vav
			/*nun F*/	case "\u05DF":letter = "\u05D6";gematria2AltAABaPh += L07;break;	// zayin
			/*pey F*/	case "\u05E3":letter = "\u05D9";gematria2AltAABaPh += L10;break;	// yod
			/*tzadi F*/	case "\u05E5":letter = "\u05DB";gematria2AltAABaPh += L11;break;	// kaf
			default:letter = "";break;
		}
		AltAABaPh += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAABaPh = AltAABaPh.substring(0, AltAABaPh.length - 1);gematria2AltAABaPh -= L11;gematria2AltAABaPh += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAABaPh = AltAABaPh.substring(0, AltAABaPh.length - 1);gematria2AltAABaPh -= L13;gematria2AltAABaPh += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAABaPh = AltAABaPh.substring(0, AltAABaPh.length - 1);gematria2AltAABaPh -= L14;gematria2AltAABaPh += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAABaPh = AltAABaPh.substring(0, AltAABaPh.length - 1);gematria2AltAABaPh -= L17;gematria2AltAABaPh += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAABaPh = AltAABaPh.substring(0, AltAABaPh.length - 1);gematria2AltAABaPh -= L18;gematria2AltAABaPh += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAABaPh += letter;
		}
	}

// AltAPhBaTz
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E4";gematria2AltAPhBaTz += L17;break;	// pey
			/*bet*/		case "\u05D1":letter = "\u05E6";gematria2AltAPhBaTz += L18;break;	// tzadi
			/*gimel*/	case "\u05D2":letter = "\u05E7";gematria2AltAPhBaTz += L19;break;	// kuf
			/*dalet*/	case "\u05D3":letter = "\u05E8";gematria2AltAPhBaTz += L20;break;	// resh
			/*hey*/		case "\u05D4":letter = "\u05E9";gematria2AltAPhBaTz += L21;break;	// shin
			/*vav*/		case "\u05D5":letter = "\u05EA";gematria2AltAPhBaTz += L22;break;	// tav
			/*zayin*/	case "\u05D6":letter = "\u05D0";gematria2AltAPhBaTz += L01;break;	// aleph
			/*chet*/	case "\u05D7":letter = "\u05D1";gematria2AltAPhBaTz += L02;break;	// bet
			/*tet*/		case "\u05D8":letter = "\u05D2";gematria2AltAPhBaTz += L03;break;	// gimel
			/*yod*/		case "\u05D9":letter = "\u05D3";gematria2AltAPhBaTz += L04;break;	// dalet
			/*kaf*/		case "\u05DB":letter = "\u05D4";gematria2AltAPhBaTz += L05;break;	// hey
			/*lamed*/	case "\u05DC":letter = "\u05D5";gematria2AltAPhBaTz += L06;break;	// vav
			/*mem*/		case "\u05DE":letter = "\u05D6";gematria2AltAPhBaTz += L07;break;	// zayin
			/*nun*/		case "\u05E0":letter = "\u05D7";gematria2AltAPhBaTz += L08;break;	// chet
			/*samech*/	case "\u05E1":letter = "\u05D8";gematria2AltAPhBaTz += L09;break;	// tet
			/*ayin*/	case "\u05E2":letter = "\u05D9";gematria2AltAPhBaTz += L10;break;	// yod
			/*pey*/		case "\u05E4":letter = "\u05DB";gematria2AltAPhBaTz += L11;break;	// kaf
			/*tzadi*/	case "\u05E6":letter = "\u05DC";gematria2AltAPhBaTz += L12;break;	// lamed
			/*kuf*/		case "\u05E7":letter = "\u05DE";gematria2AltAPhBaTz += L13;break;	// mem
			/*resh*/	case "\u05E8":letter = "\u05E0";gematria2AltAPhBaTz += L14;break;	// nun
			/*shin*/	case "\u05E9":letter = "\u05E1";gematria2AltAPhBaTz += L15;break;	// samech
			/*tav*/		case "\u05EA":letter = "\u05E2";gematria2AltAPhBaTz += L16;break;	// ayin
			/*kaf F*/	case "\u05DA":letter = "\u05D4";gematria2AltAPhBaTz += L05;break;	// hey
			/*mem F*/	case "\u05DD":letter = "\u05D6";gematria2AltAPhBaTz += L07;break;	// zayin
			/*nun F*/	case "\u05DF":letter = "\u05D7";gematria2AltAPhBaTz += L08;break;	// chet
			/*pey F*/	case "\u05E3":letter = "\u05DB";gematria2AltAPhBaTz += L11;break;	// kaf
			/*tzadi F*/	case "\u05E5":letter = "\u05DC";gematria2AltAPhBaTz += L12;break;	// lamed
			default:letter = "";break;
		}
		AltAPhBaTz += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAPhBaTz = AltAPhBaTz.substring(0, AltAPhBaTz.length - 1);gematria2AltAPhBaTz -= L11;gematria2AltAPhBaTz += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAPhBaTz = AltAPhBaTz.substring(0, AltAPhBaTz.length - 1);gematria2AltAPhBaTz -= L13;gematria2AltAPhBaTz += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAPhBaTz = AltAPhBaTz.substring(0, AltAPhBaTz.length - 1);gematria2AltAPhBaTz -= L14;gematria2AltAPhBaTz += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAPhBaTz = AltAPhBaTz.substring(0, AltAPhBaTz.length - 1);gematria2AltAPhBaTz -= L17;gematria2AltAPhBaTz += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAPhBaTz = AltAPhBaTz.substring(0, AltAPhBaTz.length - 1);gematria2AltAPhBaTz -= L18;gematria2AltAPhBaTz += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAPhBaTz += letter;
		}
	}

// AltATzBeQ
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E6";gematria2AltATzBeQ += L18;break;	// tzadi
			/*bet*/		case "\u05D1":letter = "\u05E7";gematria2AltATzBeQ += L19;break;	// kuf
			/*gimel*/	case "\u05D2":letter = "\u05E8";gematria2AltATzBeQ += L20;break;	// resh
			/*dalet*/	case "\u05D3":letter = "\u05E9";gematria2AltATzBeQ += L21;break;	// shin
			/*hey*/		case "\u05D4":letter = "\u05EA";gematria2AltATzBeQ += L22;break;	// tav
			/*vav*/		case "\u05D5":letter = "\u05D0";gematria2AltATzBeQ += L01;break;	// aleph
			/*zayin*/	case "\u05D6":letter = "\u05D1";gematria2AltATzBeQ += L02;break;	// bet
			/*chet*/	case "\u05D7":letter = "\u05D2";gematria2AltATzBeQ += L03;break;	// gimel
			/*tet*/		case "\u05D8":letter = "\u05D3";gematria2AltATzBeQ += L04;break;	// dalet
			/*yod*/		case "\u05D9":letter = "\u05D4";gematria2AltATzBeQ += L05;break;	// hey
			/*kaf*/		case "\u05DB":letter = "\u05D5";gematria2AltATzBeQ += L06;break;	// vav
			/*lamed*/	case "\u05DC":letter = "\u05D6";gematria2AltATzBeQ += L07;break;	// zayin
			/*mem*/		case "\u05DE":letter = "\u05D7";gematria2AltATzBeQ += L08;break;	// chet
			/*nun*/		case "\u05E0":letter = "\u05D8";gematria2AltATzBeQ += L09;break;	// tet
			/*samech*/	case "\u05E1":letter = "\u05D9";gematria2AltATzBeQ += L10;break;	// yod
			/*ayin*/	case "\u05E2":letter = "\u05DB";gematria2AltATzBeQ += L11;break;	// kaf
			/*pey*/		case "\u05E4":letter = "\u05DC";gematria2AltATzBeQ += L12;break;	// lamed
			/*tzadi*/	case "\u05E6":letter = "\u05DE";gematria2AltATzBeQ += L13;break;	// mem
			/*kuf*/		case "\u05E7":letter = "\u05E0";gematria2AltATzBeQ += L14;break;	// nun
			/*resh*/	case "\u05E8":letter = "\u05E1";gematria2AltATzBeQ += L15;break;	// samech
			/*shin*/	case "\u05E9":letter = "\u05E2";gematria2AltATzBeQ += L16;break;	// ayin
			/*tav*/		case "\u05EA":letter = "\u05E4";gematria2AltATzBeQ += L17;break;	// pey
			/*kaf F*/	case "\u05DA":letter = "\u05D5";gematria2AltATzBeQ += L06;break;	// vav
			/*mem F*/	case "\u05DD":letter = "\u05D7";gematria2AltATzBeQ += L08;break;	// chet
			/*nun F*/	case "\u05DF":letter = "\u05D8";gematria2AltATzBeQ += L09;break;	// tet
			/*pey F*/	case "\u05E3":letter = "\u05DC";gematria2AltATzBeQ += L12;break;	// lamed
			/*tzadi F*/	case "\u05E5":letter = "\u05DE";gematria2AltATzBeQ += L13;break;	// mem
			default:letter = "";break;
		}
		AltATzBeQ += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltATzBeQ = AltATzBeQ.substring(0, AltATzBeQ.length - 1);gematria2AltATzBeQ -= L11;gematria2AltATzBeQ += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltATzBeQ = AltATzBeQ.substring(0, AltATzBeQ.length - 1);gematria2AltATzBeQ -= L13;gematria2AltATzBeQ += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltATzBeQ = AltATzBeQ.substring(0, AltATzBeQ.length - 1);gematria2AltATzBeQ -= L14;gematria2AltATzBeQ += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltATzBeQ = AltATzBeQ.substring(0, AltATzBeQ.length - 1);gematria2AltATzBeQ -= L17;gematria2AltATzBeQ += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltATzBeQ = AltATzBeQ.substring(0, AltATzBeQ.length - 1);gematria2AltATzBeQ -= L18;gematria2AltATzBeQ += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltATzBeQ += letter;
		}
	}

// AltAKBaR
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E7";gematria2AltAKBaR += L19;break;	// kuf
			/*bet*/		case "\u05D1":letter = "\u05E8";gematria2AltAKBaR += L20;break;	// resh
			/*gimel*/	case "\u05D2":letter = "\u05E9";gematria2AltAKBaR += L21;break;	// shin
			/*dalet*/	case "\u05D3":letter = "\u05EA";gematria2AltAKBaR += L22;break;	// tav
			/*hey*/		case "\u05D4":letter = "\u05D0";gematria2AltAKBaR += L01;break;	// aleph
			/*vav*/		case "\u05D5":letter = "\u05D1";gematria2AltAKBaR += L02;break;	// bet
			/*zayin*/	case "\u05D6":letter = "\u05D2";gematria2AltAKBaR += L03;break;	// gimel
			/*chet*/	case "\u05D7":letter = "\u05D3";gematria2AltAKBaR += L04;break;	// dalet
			/*tet*/		case "\u05D8":letter = "\u05D4";gematria2AltAKBaR += L05;break;	// hey
			/*yod*/		case "\u05D9":letter = "\u05D5";gematria2AltAKBaR += L06;break;	// vav
			/*kaf*/		case "\u05DB":letter = "\u05D6";gematria2AltAKBaR += L07;break;	// zayin
			/*lamed*/	case "\u05DC":letter = "\u05D7";gematria2AltAKBaR += L08;break;	// chet
			/*mem*/		case "\u05DE":letter = "\u05D8";gematria2AltAKBaR += L09;break;	// tet
			/*nun*/		case "\u05E0":letter = "\u05D9";gematria2AltAKBaR += L10;break;	// yod
			/*samech*/	case "\u05E1":letter = "\u05DB";gematria2AltAKBaR += L11;break;	// kaf
			/*ayin*/	case "\u05E2":letter = "\u05DC";gematria2AltAKBaR += L12;break;	// lamed
			/*pey*/		case "\u05E4":letter = "\u05DE";gematria2AltAKBaR += L13;break;	// mem
			/*tzadi*/	case "\u05E6":letter = "\u05E0";gematria2AltAKBaR += L14;break;	// nun
			/*kuf*/		case "\u05E7":letter = "\u05E1";gematria2AltAKBaR += L15;break;	// samech
			/*resh*/	case "\u05E8":letter = "\u05E2";gematria2AltAKBaR += L16;break;	// ayin
			/*shin*/	case "\u05E9":letter = "\u05E4";gematria2AltAKBaR += L17;break;	// pey
			/*tav*/		case "\u05EA":letter = "\u05E6";gematria2AltAKBaR += L18;break;	// tzadi
			/*kaf F*/	case "\u05DA":letter = "\u05D6";gematria2AltAKBaR += L07;break;	// zayin
			/*mem F*/	case "\u05DD":letter = "\u05D8";gematria2AltAKBaR += L09;break;	// tet
			/*nun F*/	case "\u05DF":letter = "\u05D9";gematria2AltAKBaR += L10;break;	// yod
			/*pey F*/	case "\u05E3":letter = "\u05DE";gematria2AltAKBaR += L13;break;	// mem
			/*tzadi F*/	case "\u05E5":letter = "\u05E0";gematria2AltAKBaR += L14;break;	// nun
			default:letter = "";break;
		}
		AltAKBaR += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAKBaR = AltAKBaR.substring(0, AltAKBaR.length - 1);gematria2AltAKBaR -= L11;gematria2AltAKBaR += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAKBaR = AltAKBaR.substring(0, AltAKBaR.length - 1);gematria2AltAKBaR -= L13;gematria2AltAKBaR += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAKBaR = AltAKBaR.substring(0, AltAKBaR.length - 1);gematria2AltAKBaR -= L14;gematria2AltAKBaR += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAKBaR = AltAKBaR.substring(0, AltAKBaR.length - 1);gematria2AltAKBaR -= L17;gematria2AltAKBaR += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAKBaR = AltAKBaR.substring(0, AltAKBaR.length - 1);gematria2AltAKBaR -= L18;gematria2AltAKBaR += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAKBaR += letter;
		}
	}

// AltARBeSh
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E8";gematria2AltARBeSh += L20;break;	// resh
			/*bet*/		case "\u05D1":letter = "\u05E9";gematria2AltARBeSh += L21;break;	// shin
			/*gimel*/	case "\u05D2":letter = "\u05EA";gematria2AltARBeSh += L22;break;	// tav
			/*dalet*/	case "\u05D3":letter = "\u05D0";gematria2AltARBeSh += L01;break;	// aleph
			/*hey*/		case "\u05D4":letter = "\u05D1";gematria2AltARBeSh += L02;break;	// bet
			/*vav*/		case "\u05D5":letter = "\u05D2";gematria2AltARBeSh += L03;break;	// gimel
			/*zayin*/	case "\u05D6":letter = "\u05D3";gematria2AltARBeSh += L04;break;	// dalet
			/*chet*/	case "\u05D7":letter = "\u05D4";gematria2AltARBeSh += L05;break;	// hey
			/*tet*/		case "\u05D8":letter = "\u05D5";gematria2AltARBeSh += L06;break;	// vav
			/*yod*/		case "\u05D9":letter = "\u05D6";gematria2AltARBeSh += L07;break;	// zayin
			/*kaf*/		case "\u05DB":letter = "\u05D7";gematria2AltARBeSh += L08;break;	// chet
			/*lamed*/	case "\u05DC":letter = "\u05D8";gematria2AltARBeSh += L09;break;	// tet
			/*mem*/		case "\u05DE":letter = "\u05D9";gematria2AltARBeSh += L10;break;	// yod
			/*nun*/		case "\u05E0":letter = "\u05DB";gematria2AltARBeSh += L11;break;	// kaf
			/*samech*/	case "\u05E1":letter = "\u05DC";gematria2AltARBeSh += L12;break;	// lamed
			/*ayin*/	case "\u05E2":letter = "\u05DE";gematria2AltARBeSh += L13;break;	// mem
			/*pey*/		case "\u05E4":letter = "\u05E0";gematria2AltARBeSh += L14;break;	// nun
			/*tzadi*/	case "\u05E6":letter = "\u05E1";gematria2AltARBeSh += L15;break;	// samech
			/*kuf*/		case "\u05E7":letter = "\u05E2";gematria2AltARBeSh += L16;break;	// ayin
			/*resh*/	case "\u05E8":letter = "\u05E4";gematria2AltARBeSh += L17;break;	// pey
			/*shin*/	case "\u05E9":letter = "\u05E6";gematria2AltARBeSh += L18;break;	// tzadi
			/*tav*/		case "\u05EA":letter = "\u05E7";gematria2AltARBeSh += L19;break;	// kuf
			/*kaf F*/	case "\u05DA":letter = "\u05D7";gematria2AltARBeSh += L08;break;	// chet
			/*mem F*/	case "\u05DD":letter = "\u05D9";gematria2AltARBeSh += L10;break;	// yod
			/*nun F*/	case "\u05DF":letter = "\u05DB";gematria2AltARBeSh += L11;break;	// kaf
			/*pey F*/	case "\u05E3":letter = "\u05E0";gematria2AltARBeSh += L14;break;	// nun
			/*tzadi F*/	case "\u05E5":letter = "\u05E1";gematria2AltARBeSh += L15;break;	// samech
			default:letter = "";break;
		}
		AltARBeSh += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltARBeSh = AltARBeSh.substring(0, AltARBeSh.length - 1);gematria2AltARBeSh -= L11;gematria2AltARBeSh += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltARBeSh = AltARBeSh.substring(0, AltARBeSh.length - 1);gematria2AltARBeSh -= L13;gematria2AltARBeSh += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltARBeSh = AltARBeSh.substring(0, AltARBeSh.length - 1);gematria2AltARBeSh -= L14;gematria2AltARBeSh += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltARBeSh = AltARBeSh.substring(0, AltARBeSh.length - 1);gematria2AltARBeSh -= L17;gematria2AltARBeSh += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltARBeSh = AltARBeSh.substring(0, AltARBeSh.length - 1);gematria2AltARBeSh -= L18;gematria2AltARBeSh += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltARBeSh += letter;
		}
	}

// AltAShBeT
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05E9";gematria2AltAShBeT += L21;break;	// shin
			/*bet*/		case "\u05D1":letter = "\u05EA";gematria2AltAShBeT += L22;break;	// tav
			/*gimel*/	case "\u05D2":letter = "\u05D0";gematria2AltAShBeT += L01;break;	// aleph
			/*dalet*/	case "\u05D3":letter = "\u05D1";gematria2AltAShBeT += L02;break;	// bet
			/*hey*/		case "\u05D4":letter = "\u05D2";gematria2AltAShBeT += L03;break;	// gimel
			/*vav*/		case "\u05D5":letter = "\u05D3";gematria2AltAShBeT += L04;break;	// dalet
			/*zayin*/	case "\u05D6":letter = "\u05D4";gematria2AltAShBeT += L05;break;	// hey
			/*chet*/	case "\u05D7":letter = "\u05D5";gematria2AltAShBeT += L06;break;	// vav
			/*tet*/		case "\u05D8":letter = "\u05D6";gematria2AltAShBeT += L07;break;	// zayin
			/*yod*/		case "\u05D9":letter = "\u05D7";gematria2AltAShBeT += L08;break;	// chet
			/*kaf*/		case "\u05DB":letter = "\u05D8";gematria2AltAShBeT += L09;break;	// tet
			/*lamed*/	case "\u05DC":letter = "\u05D9";gematria2AltAShBeT += L10;break;	// yod
			/*mem*/		case "\u05DE":letter = "\u05DB";gematria2AltAShBeT += L11;break;	// kaf
			/*nun*/		case "\u05E0":letter = "\u05DC";gematria2AltAShBeT += L12;break;	// lamed
			/*samech*/	case "\u05E1":letter = "\u05DE";gematria2AltAShBeT += L13;break;	// mem
			/*ayin*/	case "\u05E2":letter = "\u05E0";gematria2AltAShBeT += L14;break;	// nun
			/*pey*/		case "\u05E4":letter = "\u05E1";gematria2AltAShBeT += L15;break;	// samech
			/*tzadi*/	case "\u05E6":letter = "\u05E2";gematria2AltAShBeT += L16;break;	// ayin
			/*kuf*/		case "\u05E7":letter = "\u05E4";gematria2AltAShBeT += L17;break;	// pey
			/*resh*/	case "\u05E8":letter = "\u05E6";gematria2AltAShBeT += L18;break;	// tzadi
			/*shin*/	case "\u05E9":letter = "\u05E7";gematria2AltAShBeT += L19;break;	// kuf
			/*tav*/		case "\u05EA":letter = "\u05E8";gematria2AltAShBeT += L20;break;	// resh
			/*kaf F*/	case "\u05DA":letter = "\u05D8";gematria2AltAShBeT += L09;break;	// tet
			/*mem F*/	case "\u05DD":letter = "\u05DB";gematria2AltAShBeT += L11;break;	// kaf
			/*nun F*/	case "\u05DF":letter = "\u05DC";gematria2AltAShBeT += L12;break;	// lamed
			/*pey F*/	case "\u05E3":letter = "\u05E1";gematria2AltAShBeT += L15;break;	// samech
			/*tzadi F*/	case "\u05E5":letter = "\u05E2";gematria2AltAShBeT += L16;break;	// ayin
			default:letter = "";break;
		}
		AltAShBeT += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltAShBeT = AltAShBeT.substring(0, AltAShBeT.length - 1);gematria2AltAShBeT -= L11;gematria2AltAShBeT += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltAShBeT = AltAShBeT.substring(0, AltAShBeT.length - 1);gematria2AltAShBeT -= L13;gematria2AltAShBeT += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltAShBeT = AltAShBeT.substring(0, AltAShBeT.length - 1);gematria2AltAShBeT -= L14;gematria2AltAShBeT += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltAShBeT = AltAShBeT.substring(0, AltAShBeT.length - 1);gematria2AltAShBeT -= L17;gematria2AltAShBeT += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltAShBeT = AltAShBeT.substring(0, AltAShBeT.length - 1);gematria2AltAShBeT -= L18;gematria2AltAShBeT += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltAShBeT += letter;
		}
	}

// AltATBaH
letter = '';
for (var i=0; i < inputText.length; i++){
		switch(inputText[i]){
			/*aleph*/	case "\u05D0":letter = "\u05EA";gematria2AltATBaH += L22;break;	// tav
			/*bet*/		case "\u05D1":letter = "\u05D0";gematria2AltATBaH += L01;break;	// aleph
			/*gimel*/	case "\u05D2":letter = "\u05D1";gematria2AltATBaH += L02;break;	// bet
			/*dalet*/	case "\u05D3":letter = "\u05D2";gematria2AltATBaH += L03;break;	// gimel
			/*hey*/		case "\u05D4":letter = "\u05D3";gematria2AltATBaH += L04;break;	// dalet
			/*vav*/		case "\u05D5":letter = "\u05D4";gematria2AltATBaH += L05;break;	// hey
			/*zayin*/	case "\u05D6":letter = "\u05D5";gematria2AltATBaH += L06;break;	// vav
			/*chet*/	case "\u05D7":letter = "\u05D6";gematria2AltATBaH += L07;break;	// zayin
			/*tet*/		case "\u05D8":letter = "\u05D7";gematria2AltATBaH += L08;break;	// chet
			/*yod*/		case "\u05D9":letter = "\u05D8";gematria2AltATBaH += L09;break;	// tet
			/*kaf*/		case "\u05DB":letter = "\u05D9";gematria2AltATBaH += L10;break;	// yod
			/*lamed*/	case "\u05DC":letter = "\u05DB";gematria2AltATBaH += L11;break;	// kaf
			/*mem*/		case "\u05DE":letter = "\u05DC";gematria2AltATBaH += L12;break;	// lamed
			/*nun*/		case "\u05E0":letter = "\u05DE";gematria2AltATBaH += L13;break;	// mem
			/*samech*/	case "\u05E1":letter = "\u05E0";gematria2AltATBaH += L14;break;	// nun
			/*ayin*/	case "\u05E2":letter = "\u05E1";gematria2AltATBaH += L15;break;	// samech
			/*pey*/		case "\u05E4":letter = "\u05E2";gematria2AltATBaH += L16;break;	// ayin
			/*tzadi*/	case "\u05E6":letter = "\u05E4";gematria2AltATBaH += L17;break;	// pey
			/*kuf*/		case "\u05E7":letter = "\u05E6";gematria2AltATBaH += L18;break;	// tzadi
			/*resh*/	case "\u05E8":letter = "\u05E7";gematria2AltATBaH += L19;break;	// kuf
			/*shin*/	case "\u05E9":letter = "\u05E8";gematria2AltATBaH += L20;break;	// resh
			/*tav*/		case "\u05EA":letter = "\u05E9";gematria2AltATBaH += L21;break;	// shin
			/*kaf F*/	case "\u05DA":letter = "\u05D9";gematria2AltATBaH += L10;break;	// yod
			/*mem F*/	case "\u05DD":letter = "\u05DC";gematria2AltATBaH += L12;break;	// lamed
			/*nun F*/	case "\u05DF":letter = "\u05DE";gematria2AltATBaH += L13;break;	// mem
			/*pey F*/	case "\u05E3":letter = "\u05E2";gematria2AltATBaH += L16;break;	// ayin
			/*tzadi F*/	case "\u05E5":letter = "\u05E4";gematria2AltATBaH += L17;break;	// pey
			default:letter = "";break;
		}
		AltATBaH += letter;

		// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
		if(i+1 == inputText.length){
			switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";AltATBaH = AltATBaH.substring(0, AltATBaH.length - 1);gematria2AltATBaH -= L11;gematria2AltATBaH += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";AltATBaH = AltATBaH.substring(0, AltATBaH.length - 1);gematria2AltATBaH -= L13;gematria2AltATBaH += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";AltATBaH = AltATBaH.substring(0, AltATBaH.length - 1);gematria2AltATBaH -= L14;gematria2AltATBaH += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";AltATBaH = AltATBaH.substring(0, AltATBaH.length - 1);gematria2AltATBaH -= L17;gematria2AltATBaH += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";AltATBaH = AltATBaH.substring(0, AltATBaH.length - 1);gematria2AltATBaH -= L18;gematria2AltATBaH += L27;break;	// tzadi F
				default:letter = "";break;
			}
			AltATBaH += letter;
		}
	}

/*alert(
"\nU+05D0\t\t\u05D0"+"\t\t\tL01\t\t"+L01+ // aleph
"\nU+05D1\t\t\u05D1"+"\t\t\tL02\t\t"+L02+ // bet
"\nU+05D2\t\t\u05D2"+"\t\t\tL03\t\t"+L03+ // gimel
"\nU+05D3\t\t\u05D3"+"\t\t\tL04\t\t"+L04+ // dalet
"\nU+05D4\t\t\u05D4"+"\t\t\tL05\t\t"+L05+ // hey
"\nU+05D5\t\t\u05D5"+"\t\t\tL06\t\t"+L06+ // vav
"\nU+05D6\t\t\u05D6"+"\t\t\tL07\t\t"+L07+ // zayin
"\nU+05D7\t\t\u05D7"+"\t\t\tL08\t\t"+L08+ // chet
"\nU+05D8\t\t\u05D8"+"\t\t\tL09\t\t"+L09+ // tet
"\nU+05D9\t\t\u05D9"+"\t\t\tL10\t\t"+L10+ // yod
"\nU+05DB\t\t\u05DB"+"\t\t\tL11\t\t"+L11+ // chaf
"\nU+05DC\t\t\u05DC"+"\t\t\tL12\t\t"+L12+ // lamed
"\nU+05DE\t\t\u05DE"+"\t\t\tL13\t\t"+L13+ // mem
"\nU+05E0\t\t\u05E0"+"\t\t\tL14\t\t"+L14+ // nun
"\nU+05E1\t\t\u05E1"+"\t\t\tL15\t\t"+L15+ // samech
"\nU+05E2\t\t\u05E2"+"\t\t\tL16\t\t"+L16+ // ayin
"\nU+05E4\t\t\u05E4"+"\t\t\tL17\t\t"+L17+ // pey
"\nU+05E4\t\t\u05E6"+"\t\t\tL18\t\t"+L18+ // tzadi
"\nU+05E4\t\t\u05E7"+"\t\t\tL19\t\t"+L19+ // kuf
"\nU+05E4\t\t\u05E8"+"\t\t\tL20\t\t"+L20+ // resh
"\nU+05E4\t\t\u05E9"+"\t\t\tL21\t\t"+L21+ // shin
"\nU+05E4\t\t\u05EA"+"\t\t\tL22\t\t"+L22+ // tav
"\n\t\t\t\t\t\t\t\t"+
"\nU+05DA\t\t\u05DA"+"\t\t\tL23\t\t"+L23+ // chaf F
"\nU+05DD\t\t\u05DD"+"\t\t\tL24\t\t"+L24+ // mem F
"\nU+05DF\t\t\u05DF"+"\t\t\tL25\t\t"+L25+ // nun F
"\nU+05E3\t\t\u05E3"+"\t\t\tL26\t\t"+L26+ // pey F
"\nU+05E5\t\t\u05E5"+"\t\t\tL27\t\t"+L27+ // tzadi F
"\n\t\t\t\t\t\t\t\t"+
//"Word 1:\t\t\t\t\t\t\t"+inputText+
//"\ninputText.length:\t\t\t\t\t"+inputText.length+
//"\nalphas:\t\t\t\t\t\t\t"+alphas+
//"\nalphas.length:\t\t\t\t\t"+alphas.length+
"\nWord 1:\t\t\t\t\t\t\t"+word1+
"\nWord 1 Gematria:\t\t\t\t\t"+gematria1+
"\nWord 1 total letters:\t\t\t\t"+letterCount+
"\nWords in Word 1:\t\t\t\t\t"+wordCount+
"\nPaths (Unique letters):\t\t\t\t"+paths+
"\nGates (letter permutations):\t\t"+gatesTotal+
"\nSkip:\t\t\t\t\t\t\t"+skip+
"\nSkip Gematria\t\t\t\t\t"+gematriaSkip+
"\nLeap:\t\t\t\t\t\t\t"+leap+
"\nLeap Gematria\t\t\t\t\t"+gematriaLeap+
"\nReversed:\t\t\t\t\t\t"+reverse+
"\nReversed Word 1 Gematria:\t\t"+gematriaReversed+
"\nElision:\t\t\t\t\t\t\t"+elision+
"\nElision Gematria:\t\t\t\t\t"+gematriaElision+
"\nSummation:\t\t\t\t\t\t"+summation+
"\nSummation Gematria:\t\t\t\t"+gematriaSum+
"\nBackwards Exchange roll:\t\t\t"+backexch+
"\nForward Ex Gematria:\t\t\t\t"+gematriaAvgadBE+
"\nForeward Exchange roll:\t\t\t"+forexch+
"\nForward Ex Gematria:\t\t\t\t"+gematriaAvgadFE+
"\nAcronym:\t\t\t\t\t\t"+acronym+
"\nAcronym Gematria:\t\t\t\t"+gematriaAcronym+
//"\nAcronym Length:\t\t\t\t\t"+acronym.length+
"\nFinals:\t\t\t\t\t\t\t"+sofim+
"\nFinals Gematria:\t\t\t\t\t"+gematriaSofit+
//"\nAcronym Length:\t\t\t\t\t"+acronym.length+
//"\nMuliy Method:\t\t\t\t\t"+spelling+
"\nMuliy Total:\t\t\t\t\t\t"+gematriaMiluy+
"\nAB Spelling:\t\t\t\t\t\t"+textAB+
"\nAB Gematria:\t\t\t\t\t\t"+gematriaAB+
"\nSaG Spelling:\t\t\t\t\t\t"+textSaG+
"\nSaG Gematria:\t\t\t\t\t"+gematriaSaG+
"\nMaH Spelling:\t\t\t\t\t"+textMaH+
"\nMaH Gematria:\t\t\t\t\t"+gematriaMaH+
"\nBaN Spelling:\t\t\t\t\t"+textBaN+
"\nBaN Gematria:\t\t\t\t\t"+gematriaBaN+
"\n\t\t\t\t\t\t\t\t"+
"\nWord 2:\t\t\t\t\t\t\t"+word2+
"\nWord 2 Gematria:\t\t\t\t\t"+gematriaWord2+
"\nKnit:\t\t\t\t\t\t\t"+knit+
"\nKnit Gematria:\t\t\t\t\t"+gematriaKnit+
"\n\t\t\t\t\t\t\t\t"+
"\nRagil:\t\t\t\t\t\t\t"+RagilValue+
"\nKolel:\t\t\t\t\t\t\t"+KolelValue+
"\nKolel1:\t\t\t\t\t\t\t"+Kolel1Value+
"\nHaKlali:\t\t\t\t\t\t\t"+HaKlaliValue+
"\nReduced:\t\t\t\t\t\t"+ReducedlValue+
"\nIntegralReduced:\t\t\t\t\t"+IntegralReducedlValue+
"\nKatan:\t\t\t\t\t\t\t"+KatanValue+
"\nOrdinal:\t\t\t\t\t\t\t"+OrdinalValue+
"\nHaKadmi:\t\t\t\t\t\t"+HaKadmiValue+
"\nHaPerati:\t\t\t\t\t\t"+HaPeratiValue+
"\nMiluy:\t\t\t\t\t\t\t"+MiluyValue+
"\n\t\t\t\t\t\t\t\t"+
"\nAYik-BeCheR:\t\t\t\t\t"+AYiKBeCheR+
"\nAYik-BeCheR Encrypted Gematria:\t"+gematria2AYiKBeCheR+
"\nAT-BaSh:\t\t\t\t\t\t"+ATBaSh+
"\nAT-BaSh Encrypted Gematria:\t\t"+gematria2ATBaSh+
"\nAL-BaM:\t\t\t\t\t\t"+ALBaM+
"\nAL-BaM Encrypted Gematria:\t\t"+gematria2ALBaM+
"\nACh-BI:\t\t\t\t\t\t\t"+AChBI+
"\nACh-BI Encrypted Gematria:\t\t"+gematria2AChBI+
"\nAChaS-BeTA:\t\t\t\t\t\t"+AChaSBeTA+
"\nAChaS-BeTA Encrypted Gematria:\t"+gematria2AChaSBeTA+
"\nAT-BaCh:\t\t\t\t\t\t"+ATBaCh+
"\nAT-BaCh Encrypted Gematria:\t\t"+gematria2ATBaCh+
"\nAT-BaCh F:\t\t\t\t\t\t"+ATBaCh999+
"\nAT-BaCh F Encrypted Gematria:\t\t"+gematria2ATBaCh999+
"\nAiY-BaK:\t\t\t\t\t\t"+AiYBaK+
"\nAiY-BaK Encrypted Gematria:\t\t"+gematria2AiYBaK+
"\nATz-BaPh:\t\t\t\t\t\t"+ATzBaPh+
"\nATz-BaPh Encrypted Gematria:\t\t"+gematria2ATzBaPh+
"\nAL-BeTh:\t\t\t\t\t\t"+ALBeTh+
"\nAL-BeTh Encrypted Gematria:\t\t"+gematria2ALBeTh+
"\nOfanim:\t\t\t\t\t\t\t"+Ofanim+
"\nOfanim Encrypted Gematria:\t\t"+gematria2Ofanim+
"\n\t\t\t\t\t\t\t\t"+
"\n\t\t\t\t\t\t\t\t"+
"\n\t\t\t\t\t\t\t\t"+
"\nAltATBaSh:\t\t\t\t\t\t"+AltATBaSh+
"\nAltATBaSh Encrypted Gematria:\t\t"+gematria2AltATBaSh+
"\nAltAShBaR:\t\t\t\t\t\t"+AltAShBaR+
"\nAltAShBaR Encrypted Gematria:\t"+gematria2AltAShBaR+
"\nAltARBaK:\t\t\t\t\t\t"+AltARBaK+
"\nAltARBaK Encrypted Gematria:\t\t"+gematria2AltARBaK+
"\nAltAQBeTz:\t\t\t\t\t\t"+AltAQBeTz+
"\nAltAQBeTz Encrypted Gematria:\t\t"+gematria2AltAQBeTz+
"\nAltEZBePh:\t\t\t\t\t\t"+AltEZBePh+
"\nAltEZBePh Encrypted Gematria:\t\t"+gematria2AltEZBePh+
"\nAltAPBE:\t\t\t\t\t\t"+AltAPBE+
"\nAltAPBE Encrypted Gematria:\t\t"+gematria2AltAPBE+
"\nAltAEBaS:\t\t\t\t\t\t"+AltAEBaS+
"\nAltAEBaS Encrypted Gematria:\t\t"+gematria2AltAEBaS+
"\nAltASBeN:\t\t\t\t\t\t"+AltASBeN+
"\nAltASBeN Encrypted Gematria:\t\t"+gematria2AltASBeN+
"\nAltANBaM:\t\t\t\t\t\t"+AltANBaM+
"\nAltANBaM Encrypted Gematria:\t"+gematria2AltANBaM+
"\nAltAMBeL:\t\t\t\t\t\t"+AltAMBeL+
"\nAltAMBeL Encrypted Gematria:\t\t"+gematria2AltAMBeL+
"\nAltELBaCh:\t\t\t\t\t\t"+AltELBaCh+
"\nAltELBaCh Encrypted Gematria:\t\t"+gematria2AltELBaCh+
"\nAltAChBI:\t\t\t\t\t\t"+AltAChBI+
"\nAltAChBI Encrypted Gematria:\t\t"+gematria2AltAChBI+
"\nAltAIBeT:\t\t\t\t\t\t"+AltAIBeT+
"\nAltAIBeT Encrypted Gematria:\t\t"+gematria2AltAIBeT+
"\nAltATBaCh:\t\t\t\t\t\t"+AltATBaCh+
"\nAltATBaCh Encrypted Gematria:\t"+gematria2AltATBaCh+
"\nAltAChBaZ:\t\t\t\t\t\t"+AltAChBaZ+
"\nAltAChBaZ Encrypted Gematria:\t"+gematria2AltAChBaZ+
"\nAltAZBO:\t\t\t\t\t\t"+AltAZBO+
"\nAltAZBO Encrypted Gematria:\t\t"+gematria2AltAZBO+
"\nAltAVBaH:\t\t\t\t\t\t"+AltAVBaH+
"\nAltAVBaH Encrypted Gematria:\t\t"+gematria2AltAVBaH+
"\nAltAHBaD:\t\t\t\t\t\t"+AltAHBaD+
"\nAltAHBaD Encrypted Gematria:\t\t"+gematria2AltAHBaD+
"\nAltADBeG:\t\t\t\t\t\t"+AltADBeG+
"\nAltADBeG Encrypted Gematria:\t\t"+gematria2AltADBeG+
"\nAltAGBaB:\t\t\t\t\t\t"+AltAGBaB+
"\nAltAGBaB Encrypted Gematria:\t\t"+gematria2AltAGBaB+
"\nAltABBA:\t\t\t\t\t\t"+AltABBA+
"\nAltABBA Encrypted Gematria:\t\t"+gematria2AltABBA+
"\nAltAAhBaT:\t\t\t\t\t\t"+AltAAhBaT+
"\nAltAAhBaT Encrypted Gematria:\t"+gematria2AltAAhBaT+
"\nAltABBaG:\t\t\t\t\t\t"+AltABBaG+
"\nAltABBaG Encrypted Gematria:\t\t"+gematria2AltABBaG+
"\nAltAGBaD:\t\t\t\t\t\t"+AltAGBaD+
"\nAltAGBaD Encrypted Gematria:\t\t"+gematria2AltAGBaD+
"\nAltADBaH:\t\t\t\t\t\t"+AltADBaH+
"\nAltADBaH Encrypted Gematria:\t\t"+gematria2AltADBaH+
"\nAltAHBeV:\t\t\t\t\t\t"+AltAHBeV+
"\nAltAHBeV Encrypted Gematria:\t\t"+gematria2AltAHBeV+
"\nAltAVBeZ:\t\t\t\t\t\t"+AltAVBeZ+
"\nAltAVBeZ Encrypted Gematria:\t\t"+gematria2AltAVBeZ+
"\nAltAZBeCh:\t\t\t\t\t\t"+AltAZBeCh+
"\nAltAZBeCh Encrypted Gematria:\t"+gematria2AltAZBeCh+
"\nAltAChBeT:\t\t\t\t\t\t"+AltAChBeT+
"\nAltAChBeT Encrypted Gematria:\t"+gematria2AltAChBeT+
"\nAltATBI:\t\t\t\t\t\t\t"+AltATBI+
"\nAltATBI Encrypted Gematria:\t\t"+gematria2AltATBI+
"\nAltAIBech:\t\t\t\t\t\t"+AltAIBech+
"\nAltAIBech Encrypted Gematria:\t\t"+gematria2AltAIBech+
"\nAltAChBeL:\t\t\t\t\t\t"+AltAChBeL+
"\nAltAChBeL Encrypted Gematria:\t"+gematria2AltAChBeL+
"\nAltELBaM:\t\t\t\t\t\t"+AltELBaM+
"\nAltELBaM Encrypted Gematria:\t\t"+gematria2AltELBaM+
"\nAltAMBeN:\t\t\t\t\t\t"+AltAMBeN+
"\nAltAMBeN Encrypted Gematria:\t"+gematria2AltAMBeN+
"\nAltANBeS:\t\t\t\t\t\t"+AltANBeS+
"\nAltANBeS Encrypted Gematria:\t\t"+gematria2AltANBeS+
"\nAltASBA:\t\t\t\t\t\t"+AltASBA+
"\nAltASBA Encrypted Gematria:\t\t"+gematria2AltASBA+
"\nAltAABaPh:\t\t\t\t\t\t"+AltAABaPh+
"\nAltAABaPh Encrypted Gematria:\t"+gematria2AltAABaPh+
"\nAltAPhBaTz:\t\t\t\t\t\t"+AltAPhBaTz+
"\nAltAPhBaTz Encrypted Gematria:\t"+gematria2AltAPhBaTz+
"\nAltATzBeQ:\t\t\t\t\t\t"+AltATzBeQ+
"\nAltATzBeQ Encrypted Gematria:\t\t"+gematria2AltATzBeQ+
"\nAltAKBaR:\t\t\t\t\t\t"+AltAKBaR+
"\nAltAKBaR Encrypted Gematria:\t\t"+gematria2AltAKBaR+
"\nAltARBeSh:\t\t\t\t\t\t"+AltARBeSh+
"\nAltARBeSh Encrypted Gematria:\t"+gematria2AltARBeSh+
"\nAltAShBeT:\t\t\t\t\t\t"+AltAShBeT+
"\nAltAShBeT Encrypted Gematria:\t\t"+gematria2AltAShBeT+
"\nAltATBaH:\t\t\t\t\t\t"+AltATBaH+
"\nAltATBaH Encrypted Gematria:\t\t"+gematria2AltATBaH+
"\n\t\t\t\t\t\t\t\t"+
//"\nEncryption Method:\t\t\t\t"+cryptography+
"\nEncrypted:\t\t\t\t\t\t"+cryptography2+
//"\nEncrypted # of letters:\t\t\t\t"+cryptography2.length+
"\nEncrypted Gematria:\t\t\t\t"+gematria2+
//"\nPictogram:\t\t\t\t\t\t"+pictogram+
//"\nmorph:\t\t\t\t\t\t\t"+morph+
//"\n\t\t\t\t\t\t\t\t"+
//
//"\nTzadi Sofit:\t\t\t\t\t\t"+L27+
//"\nTzadi Sofit name:\t\t\t\t\t"+L27+
//"\nTzadi Sofit numeric value:\t\t\t"+L27+
//
//"\ngematriaSummation:\t\t\t\t\t\t"+gematriaSummation+
//"\ncryptography.length:\t\t\t"\t+cryptography.length+
//
//"\nArray:\t\t\t\t\t\t\t"+array+
//"\nArray Reversed:\t\t\t\t\t"+arrev+
//
//"\nDenominator:\t\t\t\t\t"+denominator+
//"\nDenom:\t\t\t\t\t\t"+denom+
//"\nNumerator:\t\t\t\t\t\t"+numerator+
//"\nOne:\t\t\t\t\t\t\t"+one+
//"\nZeros:\t\t\t\t\t\t\t"+zeros+
//"\nTemp:\t\t\t\t\t\t\t"+temp+
//"\nTemp2:\t\t\t\t\t\t\t"+temp2+
//"\nTemp3:\t\t\t\t\t\t\t"+temp3+
//"\nTemp4:\t\t\t\t\t\t\t"+temp4+
//"\nTemp5:\t\t\t\t\t\t\t"+temp5+
"\n");*/

// Send an AJAX request to the server to execute the insert.php script
$.ajax({
    url: 'insert.php',
    type: 'POST',
    data: { word1: word1, gematria1: gematria1, summation: summation, letterCount: letterCount, wordCount: wordCount, paths: paths, gatesTotal: gatesTotal, skip: skip, gematriaSkip: gematriaSkip, leap: leap, gematriaLeap: gematriaLeap, reverse: reverse, gematriaReversed: gematriaReversed, elision: elision, gematriaElision: gematriaElision, backexch: backexch, gematriaAvgadBE: gematriaAvgadBE, forexch: forexch, gematriaAvgadFE: gematriaAvgadFE, acronym: acronym, gematriaAcronym: gematriaAcronym, sofim: sofim, gematriaSofit: gematriaSofit, gematriaMiluy: gematriaMiluy, textAB: textAB, gematriaAB: gematriaAB, textSaG: textSaG, gematriaSaG: gematriaSaG, textMaH: textMaH, gematriaMaH: gematriaMaH, textBaN: textBaN, gematriaBaN: gematriaBaN, RagilValue: RagilValue, KolelValue: KolelValue, Kolel1Value: Kolel1Value, HaKlaliValue: HaKlaliValue, ReducedlValue: ReducedlValue, IntegralReducedlValue: IntegralReducedlValue, KatanValue: KatanValue, OrdinalValue: OrdinalValue, HaKadmiValue: HaKadmiValue, HaPeratiValue: HaPeratiValue, MiluyValue: MiluyValue, AYiKBeCheR: AYiKBeCheR, gematria2AYiKBeCheR: gematria2AYiKBeCheR, ATBaSh: ATBaSh, gematria2ATBaSh: gematria2ATBaSh, ALBaM: ALBaM, gematria2ALBaM: gematria2ALBaM, AChBI: AChBI, gematria2AChBI: gematria2AChBI, AChaSBeTA: AChaSBeTA, gematria2AChaSBeTA: gematria2AChaSBeTA, ATBaCh: ATBaCh, gematria2ATBaCh: gematria2ATBaCh, ATBaCh999: ATBaCh999, gematria2ATBaCh999: gematria2ATBaCh999, AiYBaK: AiYBaK, gematria2AiYBaK: gematria2AiYBaK, ATzBaPh: ATzBaPh, gematria2ATzBaPh: gematria2ATzBaPh, ALBeTh: ALBeTh, gematria2ALBeTh: gematria2ALBeTh, Ofanim: Ofanim, gematria2Ofanim: gematria2Ofanim, AltATBaSh: AltATBaSh, gematria2AltATBaSh: gematria2AltATBaSh, AltAShBaR: AltAShBaR, gematria2AltAShBaR: gematria2AltAShBaR, AltARBaK: AltARBaK, gematria2AltARBaK: gematria2AltARBaK, AltAQBeTz: AltAQBeTz, gematria2AltAQBeTz: gematria2AltAQBeTz, AltEZBePh: AltEZBePh, gematria2AltEZBePh: gematria2AltEZBePh, AltAPBE: AltAPBE, gematria2AltAPBE: gematria2AltAPBE, AltAEBaS: AltAEBaS, gematria2AltAEBaS: gematria2AltAEBaS, AltASBeN: AltASBeN, gematria2AltASBeN: gematria2AltASBeN, AltANBaM: AltANBaM, gematria2AltANBaM: gematria2AltANBaM, AltAMBeL: AltAMBeL, gematria2AltAMBeL: gematria2AltAMBeL, AltELBaCh: AltELBaCh, gematria2AltELBaCh: gematria2AltELBaCh, AltAChBI: AltAChBI, gematria2AltAChBI: gematria2AltAChBI, AltAIBeT: AltAIBeT, gematria2AltAIBeT: gematria2AltAIBeT, AltATBaCh: AltATBaCh, gematria2AltATBaCh: gematria2AltATBaCh, AltAChBaZ: AltAChBaZ, gematria2AltAChBaZ: gematria2AltAChBaZ, AltAZBO: AltAZBO, gematria2AltAZBO: gematria2AltAZBO, AltAVBaH: AltAVBaH, gematria2AltAVBaH: gematria2AltAVBaH, AltAHBaD: AltAHBaD, gematria2AltAHBaD: gematria2AltAHBaD, AltADBeG: AltADBeG, gematria2AltADBeG: gematria2AltADBeG, AltAGBaB: AltAGBaB, gematria2AltAGBaB: gematria2AltAGBaB, AltABBA: AltABBA, gematria2AltABBA: gematria2AltABBA, AltAAhBaT: AltAAhBaT, gematria2AltAAhBaT: gematria2AltAAhBaT, AltABBaG: AltABBaG, gematria2AltABBaG: gematria2AltABBaG, AltAGBaD: AltAGBaD, gematria2AltAGBaD: gematria2AltAGBaD, AltADBaH: AltADBaH, gematria2AltADBaH: gematria2AltADBaH, AltAHBeV: AltAHBeV, gematria2AltAHBeV: gematria2AltAHBeV, AltAVBeZ: AltAVBeZ, gematria2AltAVBeZ: gematria2AltAVBeZ, AltAZBeCh: AltAZBeCh, gematria2AltAZBeCh: gematria2AltAZBeCh, AltAChBeT: AltAChBeT, gematria2AltAChBeT: gematria2AltAChBeT, AltATBI: AltATBI, gematria2AltATBI: gematria2AltATBI, AltAIBech: AltAIBech, gematria2AltAIBech: gematria2AltAIBech, AltAChBeL: AltAChBeL, gematria2AltAChBeL: gematria2AltAChBeL, AltELBaM: AltELBaM, gematria2AltELBaM: gematria2AltELBaM, AltAMBeN: AltAMBeN, gematria2AltAMBeN: gematria2AltAMBeN, AltANBeS: AltANBeS, gematria2AltANBeS: gematria2AltANBeS, AltASBA: AltASBA, gematria2AltASBA: gematria2AltASBA, AltAABaPh: AltAABaPh, gematria2AltAABaPh: gematria2AltAABaPh, AltAPhBaTz: AltAPhBaTz, gematria2AltAPhBaTz: gematria2AltAPhBaTz, AltATzBeQ: AltATzBeQ, gematria2AltATzBeQ: gematria2AltATzBeQ, AltAKBaR: AltAKBaR, gematria2AltAKBaR: gematria2AltAKBaR, AltARBeSh: AltARBeSh, gematria2AltARBeSh: gematria2AltARBeSh, AltAShBeT: AltAShBeT, gematria2AltAShBeT: gematria2AltAShBeT, AltATBaH: AltATBaH, gematria2AltATBaH: gematria2AltATBaH },
    success: function(response) {
        console.log(response);
        // Display the HTML table structure returned from the server
        $("#result").html(response);
    },
    error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
    }
});

// Display the results
document.getElementById("Results").classList.remove("hidden");

// Clear both text input fields for convience of entering in a new word.
document.getElementById("inputText").value = "";
document.getElementById("inputText2").value = "";

// Sets the focus back on the Transpose button
document.getElementById("transpose").focus();
}
</script>

<script type="text/javascript">
function randomString(length, chars) {
	var ranum = Math.floor(Math.random() * ((7-2)+1) + 2);	// Make ranum a random number of characters between 2 through 7 to create a typical Hebrew word
		var inputText = document.getElementById('inputText').value;
		inputText = inputText.replace(/[^\w\u05D0-\u05EA\u037B-\u03FF]/g, '');
		if((inputText.length > 1) && (inputText.length < 8)) {
		var ranum = inputText.length;	// Make ranum the same number of characters as the input word(s)
		}
	var mask = '';
	if (chars.indexOf('A') > -1) mask += '\u05D0\u05D1\u05D2\u05D3\u05D4\u05D5\u05D6\u05D7\u05D8\u05D9\u05DB\u05DC\u05DE\u05E0\u05E1\u05E2\u05E4\u05E6\u05E7\u05E8\u05E9\u05EA';
	var randword = '';
	for (var i = ranum; i > 0; --i) randword += mask[Math.round(Math.random() * (mask.length - 1))];
	// If i = 1 exec Switch for final letters here
	return randword;
}
rand = randomString(6, 'A');
document.getElementById("randword").innerHTML = "<a href='http://translate.google.com/#auto/en/"+rand+"' target='_blank' style='color: white; font-weight: 400;'>" + rand + "</a><br />";
</script>

<script type="text/javascript">
function SendCryptography2(){
document.getElementById("inputText2").value = cryptography2;
}
document.addEventListener('DOMContentLoaded', function() { // Sets the focus to the first text input field upon page load.
document.getElementById('inputText').focus();
});
document.getElementById('inputText').addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
        document.getElementById('transpose').click();
    }
});
</script>

<script>
function selectText(anagram) // divID contains actual id of ‘div’ element
{
var textC=document.getElementById(anagram);
if (document.selection)
{
// Highlight for IE
var div = document.body.createTextRange();
div.moveToElementText(textC);
div.select();
}
else{
// Highlight for FF
var div = document.createRange();
div.setStartBefore(textC);
div.setEndAfter(textC);
window.getSelection().addRange(div);
}
}
</script>

<a name="bottom" id="bottom"></a>
<script>
function scrollToBottom() {
	window.scrollTo(0, document.body.scrollHeight);
}
</script>

</body>
</html>