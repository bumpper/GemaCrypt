<?php
/* app2m.php – desktop-only redirect (User Agent-based) */
$ua = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
$mobileKeys = ['android','iphone','ipod','ipad','windows phone','mobile','iemobile'];
$isMobile = false;
foreach ($mobileKeys as $k) {
    if (strpos($ua, $k) !== false) { $isMobile = true; break; }
}
if (!$isMobile) {           // we are on desktop
    header('Location: app2.php', true, 302);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="SHORTCUT ICON" href="img/bet.png" />
	<meta name="Rating" content="general" />
	<meta name="DESCRIPTION" content="Decode Hebrew words to find hidden meanings using Gematria. With this app you can find the numerical values of words. Words with the same numerical value are said to spiritual synonyms. Also use the different Hebrew encryption algorithms to find hidden meanings such as AL-bam, At-BaSh, ACh-BI, AYiK-BeCheR, AChaS-BeTA, AT-BeCh to decode hebrew words.  Use the different gematriaot to find a words numerical value like Ragil, Katan, HaKlali, Kolel, HaKadmi, HaPerati, Miluy." />
	<meta name="KEYWORDS" content="Absolute, Ordinal, Reduced, Integral Reduced, Spelling, Pictograms, Meaning, Symbols, Miluy, Miluim, Gematriaot, Gematria, Cryptography, Encrypt, Decrypt, Encode, Decode, BibleCode, Bible, Code, ALBaM, ATBaSh, AChBI, AYiKBeCheR, AChaSBeTA, ATBeCh, ATzBaPh, ALBeTh, AL-BaM, AT-BaSh, ACh-BI, AYiK-BeCheR, AChaS-BeTA, AT-BeCh, ATz-BaPh, AL-BeTh, AL BaM, AT BaSh, ACh BI, AYiK BeCheR, AChaS BeTA, AT BeCh, ATz BaPh, ALBeTh, Ofanim, Sofit, Finals, Initials, Greek, Hebrew, Aramaic, Letter, Sequence, Ananagram, Matrix, Mystery, Word, Value, Verse, Calculate, Calculator, Ragil, Katan, HaKlali, Kolel, HaKadmi, HaPerati, Miluy, Spelling, Torah, 1 Chronicles, 1 Kings, 1 Samuel, 2 Chronicles, 2 Kings, 2 Samuel, Amos, Daniel, Deuteronomy, Ecclesiastes, Esther, Exodus, Ezekiel, Ezra, Genesis, Habakkuk, Haggai, Hosea, Isaiah, Jeremiah, Job, Joel, Jonah, Joshua, Judges, Lamentations, Leviticus, Malachi, Micah, Nahum, Nehemiah, Numbers, Obadiah, Proverbs, Psalms, Ruth, Song of Songs, Song of Solomon, Zechariah, Zephaniah, Tanach, Tanakh, Old Testament, New Testament, Bible, Pseudepigrapha, Apocrypha" />
	<meta name="distribution" content="Global" />
	<meta name="robots" content="FOLLOW,INDEX" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="initial-scale=1" />
    <title>GemaCrypt2</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap" rel="stylesheet">
    <style>
        
		html, body {
			height: 100%;          /* keep everything strictly inside the window */
			overflow: hidden;      /* kill the viewport scrollbar */
			margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
			background: #ccc;
        }
		body {
			display: flex;
			flex-direction: column;
		}
        .hidden-title {
		    display: none;
		}
		#textArea   { 
			z-index: 0; 
			overflow-y: auto;          /* native scroll when needed */
			-webkit-overflow-scrolling: touch;   /* smooth iOS scroll */
			/* never grow taller than “100 % of the viewport minus the space that the toolbar + status bar need” */
			max-height: calc(100vh - 40px - 18px);   /* 40 px toolbar, 18 px status */
			flex: 1 1 auto;           /* take all available space */
			overflow-y: auto;         /* own vertical scrollbar when needed */
			overflow-x: auto;
			padding: 0;               /* 0 gap on every side */
			margin: 0;
			border: none;             /* remove any 1-px borders if present */
		}
		#toolbar    { 
			z-index: 2; 
		}
        #toolbarToggler{        /* --- collapsible toolbar --- */
        position:fixed;
        top:0; left:0; right:0;
        height:8px;                /* thin handle */
        background:#ccc;
        cursor:pointer;
        z-index:9999;
        display:flex;
        align-items:center;
        justify-content:center;
        transition:height .25s;
        }
        #toolbarToggler::after{     /* white triangle arrows */
        content:"";
        width:0; height:0;
        border-left:6px solid transparent;
        border-right:6px solid transparent;
        border-bottom:8px solid #fff; /* up arrow by default */
        }
        #toolbarToggler.down::after{
        border-bottom:none;
        border-top:8px solid #fff;    /* down arrow when collapsed */
        }
        .toolbar.collapsed{
        height:0 !important;
        padding:0 !important;
        overflow:hidden;
		padding-top: 0;
    	padding-bottom: 0;
        }
        #toolbarToggler::after{   /* add a slight shadow for the up/down arrows */
        filter: drop-shadow(0 1px 1px rgba(0,0,0,.45));
        }
		/* keep it pinned to the true viewport corner, above everything */
		#breakOutLink{
		position: fixed;          /* viewport-relative */
		top: 0;                   /* touch the very top */
		right: 0;                 /* touch the very right */
		z-index: 100000;          /* stay above toolbar, toggler, etc. */
		line-height: 0;           /* kill inline gap */
		}
		#breakOutLink img{
		display: block;           /* remove descender space */
		width: 10px;              /* adjust to taste */
		height: 10px;
		cursor: pointer;
		border: none;
		}
		.toolbar {
    	margin-top: 2px;   /* So that the collapsible toolbar does not cover part of the toolbar buttons */
		flex: 0 0 auto;            /* fixed height */
		}
        .toolbar {
		background-color: #3333aa;
		display: flex;
		justify-content: space-between;
		padding: 5px;
		}
        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ccc;
            padding: 5px;
            height: 40px;
			overflow:hidden;
        }
        /* Style the Toolbar Buttons */
		.toolbar button {
		    background-color: #3333aa;
		    color: #fff;
		    border: none;
		    padding: 8px 8px 8px 8px;	/* Top, Right, Bottom, & Left */
		    cursor: pointer;
		    font-size: 12px;
		    font-weight: bold;
		    margin-right: 0px;
		    border-radius: 5px;
		    box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.35); /* ➜ right 2 px, down 3 px, blur 6 px */
		    transition: background-color 0.0s;
		}
		.toolbar button, {
				-webkit-appearance: none;
				border-radius: 5px !important;
				border:none  !important;
		}
		.toolbar select {
			border-radius: 0 !important;
			border: none  !important;   /* optional – kills the 1 px inset edge too */
		}
		/* Raise the button text to be more inline with the button image */
		.textBtn img {
		vertical-align: top;
		}
		/* Toolbar Button color when mouse is over it */
		.toolbar button:hover {
		    background-color: #3333ee;
		}
		/* Toolbar Button clicked color */
		.toolbar button:active, .toolbar button:focus {
		    background-color: #3333ee;
		    box-shadow: none;
		}
		/* Toolbar Button color when mouse is release so it reverts back to original color */
		.toolbar button:active:not(:hover), .toolbar button:focus:not(:hover) {
		    background-color: #3333aa;
		}
		/* Dropdown Menus styling */
		.toolbar select {
		    background-color: #3333aa;
		    border: 0px solid #3333aa;
		    border-color: #3333aa;
		    color: #fff;
		    padding: 8px 8px 8px 8px;	/* Top, Right, Bottom, & Left */
		    cursor: pointer;
		    font-size: 12px;
		    font-weight: bold;
		    margin-right: 0px;
		    border-radius: 5px !important;
		    appearance: none;
		    -webkit-appearance: none;
		    -moz-appearance: none;
		    background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 14 8'><polygon points='0,0 7,8 14,0'/></svg>");
		    background-position: right 10px center;
		    background-repeat: no-repeat;
		    background-size: 12px;
		    box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.35); /* ➜ right 2 px, down 3 px, blur 6 px */
		    transition: background-color 0.0s;
		}
		/* Dropdown Menu color when mouse is over it */
		.toolbar select:hover {
		    background-color: #3333ee;
		}
		/* Dropdown Menu clicked color */
		.toolbar select:active, .toolbar select:focus {
		    background-color: #3333ee;
		    box-shadow: none;
		}
		/* Dropdown Menu color when mouse is release so it reverts back to original color */
		.toolbar select:active:not(:hover), .toolbar select:focus:not(:hover) {
		    background-color: #3333aa;
		}
		/* Dropdown Menu Items styling */
		.toolbar select option {
		    background-color: #3333aa;
		    border: 0px solid #3333aa;
		    border-color: #3333aa;
		    color: #fff;
		    padding: 10px 10px;
		    font-size: 12px;
		    font-weight: bold;
		    border-radius: 5px;
		    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.0);
		    transition: background-color 0.0s;
		}
		/* Dropdown Menu Items color when mouse is over it */
		.toolbar select option:hover{
		    background-color: #3333ee;
		}
		/* Dropdown Menu Items clicked color */
		.toolbar select option:active, .toolbar select option:focus{
		    background-color: #3333ee;
		    box-shadow: none;
		}
		/* Dropdown Menu Items color when mouse is release so it reverts back to original color */
		.toolbar select:active:not(:hover), .toolbar select:focus:not(:hover) {
		    background-color: #3333aa;
		}
		.container {
			flex: 1 1 auto;           /* fill remaining height */
			display: flex;
			flex-direction: column;
			height: 200vh; /* adjust to your desired height */
			min-height: 0;            /* Firefox: allow real shrinking */
		}
		.textArea {
            flex: 1;
            overflow-x: auto;
            padding: 5px 5px 20px 5px;	/* Top, Right, Bottom, & Left.  Additional padding against the bottom edge so that the Status bar does not cover the last line of the textArea. */
            resize: vertical;
            white-space: pre-wrap;
            /*direction: rtl;*/
            font-family: 'Fira Code', 'Courier New', 'Cascadia Mono', Courier, monospace, 'Times New Roman';
			font-size: 18px;
			/*font-weight: bold;*/
			text-shadow: 0 0 5px #FFF; 
			word-wrap: break-word;
			background-color: #333;	/* dark grey background for Dark Mode*/
			color: #FFF;			/* white text for Dark Mode */
			text-shadow: none;			 /* remove text shadow for Dark Mode*/
        }
		.light-mode {
			background-color: #FFF;
			color: #000;
			text-shadow: 0 0 5px #FFF;
		}
		.horizontalScroll {
			overflow-x: auto;
		}
        .highlight {
		    background-color: yellow;
            color: #FF0000 !important;
			font-size: 14px !important;
			font-weight: bold !important; 
  			box-shadow: 1 1 2px rgba(0, 0, 0, 100) !important; 
        }
        #statusBar {
			font-family: Arial, sans-serif;
			font-size: 12px;
			position: fixed;
			bottom: 2px;          /* was 0 */
			left: 0;
			right: 0;
			z-index: 1;
			display: flex;
			flex-wrap: wrap;
			align-items: left;
			gap: 5px;				/* vertical gap between rows */
			height: 22px;			/* fixed single-row height */
			overflow: hidden;		/* use javascript to change if something really overflows */
			box-sizing: border-box;
			border-radius: 0px !important;
			/*overflow-x: auto; 		 horizontal scroll when needed */
			/*overflow-y: hidden;		 never a vertical bar */
			/*white-space: nowrap;	 	 keep everything on one line */
		}
	    .statusBar {
		    background-color: #ccc;
		    padding: 2px;
		    height: auto !important;          /* let JS drive the height */
			min-height: 22px;                 /* but never smaller than one row */
			overflow: visible !important;   /* let JS drive the overflow */
		    position: fixed;
		    bottom: 0;
		    left: 0;
		    right: 0;
		    display: flex;
		    justify-content: flex-start;
		    align-items: center;
			width: 100%;
			display: flex;
			border-top: 1px solid #ccc;	/* add a border to separate from textArea */
			flex: 0 0 auto;					/* fixed height */
			border-radius: 0px !important;
		}
		.statusBar .number {
            direction: ltr;
			height: 22px;
        }
        .verses, .words, .letters {
			margin-right: 5px;
			width: 150px;
			min-width: 100px;
			font-size: 16px;
			font-weight: bold; 
			background-color: #ccc;
			overflow-y: auto;
		}
		.sum {
			margin-right: 5px;
			width: 200px;
			min-width: 100px;
			font-size: 16px;
			font-weight: bold; 
			background-color: #ccc;
			overflow-y: auto;
		}
		.encrypted {
			margin-right: 5px;
			width: calc(80vw - 200px); /* Subtract the minimum width from the full viewport width 
			width: 600px; */
			min-width: 80px;
			font-size: 16px;
			font-weight: bold;
			background-color: #ccc;
			overflow-y: auto;
			overflow-x: hidden; /* Hide horizontal scrollbar */
			word-wrap: break-word;
		}
		.encryptedsum {
			margin-right: 5px;
			width: 220px; 
			min-width: 80px;
			font-size: 16px;
			font-weight: bold;
			background-color: #ccc;
			overflow-y: auto;
		}
		.number {
        	font-family: Arial, sans-serif;
	    }
		.arrow-container {
		    width: 100%;
		    position: absolute;
		    right: 5px;
		    bottom: 5px;
		    display: flex;
		    justify-content: right;
		    align-items: center;
		    height: 14px;
		}
		.arrow {
		    font-size: 20px;
		    margin: 2px 0;
		    cursor: pointer;
		}
		.up-arrow:hover, .down-arrow:hover, .left-arrow:hover, .right-arrow:hover {
		    color: #555;
		}
		.verses, .words, .letters, .sum, .encrypted, .encryptedsum {
			-webkit-appearance: none;   /* <- add this */
			border-radius: 5 !important;
		}
		/* A popup message that appears when the Calculate button is clicked. */
		.modal {
		display: none;
		position: fixed;
		z-index: 1;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto;
		background-color: rgba(0, 0, 0, 0.4);
		}
		.modal-content {
		background-color: #fefefe;
		margin: 15% auto;
		padding: 20px;
		border: 1px solid #888;
		width: 80%;
		font-family: Arial, sans-serif;
		background-image: url("");
		background-repeat: repeat;
		background-position: top left;
		padding-top: 10px;
		padding-left: 30px;
		padding-right: 30px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		border-radius: 10px;
		outline: 2px solid black;
		}
		.close {
		color: #aaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
		cursor: pointer;
		}
		.close:hover,
		.close:focus {
		color: black;
		text-decoration: none;
		cursor: pointer;
		}
		/* ---------- DARK-MODE SCROLL-BAR THEME ---------- */
		/* Works in Chromium / Edge / Safari (WebKit) and Firefox (with fallback) */
		/* 1. WebKit-based browsers (Chrome, Edge, Safari, Opera) */
		::-webkit-scrollbar                 { width: 14px; height: 14px; }
		::-webkit-scrollbar-track           { background: #333; }          /* same as textArea bg */
		::-webkit-scrollbar-thumb           { background: #555; border-radius: 0px;
											box-shadow: inset 0 0 4px rgba(255,255,255,.15); }
		::-webkit-scrollbar-thumb:hover     { background: #777; }
		::-webkit-scrollbar-thumb:active    { background: #999; }
		/* 2. Firefox (since v64) */
		*                                   { scrollbar-width: thin; scrollbar-color: #555 #333; }
		/* 3. Optional: colourise the little corner square between scrollbars */
		::-webkit-scrollbar-corner          { background: #333; }
		/* ---------- LIGHT-MODE OVERRIDE ---------- */
		/* When the user toggles light-mode we simply flip the palette */
		.light-mode ::-webkit-scrollbar-track           { background: #fff; }
		.light-mode ::-webkit-scrollbar-thumb           { background: #bbb; box-shadow: inset 0 0 4px rgba(0,0,0,.15); }
		.light-mode ::-webkit-scrollbar-thumb:hover     { background: #999; }
		.light-mode ::-webkit-scrollbar-thumb:active    { background: #777; }
		.light-mode *                                   { scrollbar-width: thin; scrollbar-color: #bbb #fff; }
		.light-mode ::-webkit-scrollbar-corner          { background: #fff; 
		}
		/* === MOBILE ONLY (≤ 600 px) === */
		@media (max-width: 650px) {
		    /* 1. Vertical toolbar that can scroll */
		    .toolbar {
		        height: auto;
		        /*overflow-y: auto;*/
				/*max-height: 45vh;          /* keep as first fallback */
				/*max-height: -webkit-fill-available; /* Safari, iOS Chrome fallback */
				/*overflow-y: scroll;        /* always force a scroll bar */
				/*-webkit-overflow-scrolling: touch; /* momentum scroll on iOS */
		        align-items: center;
		        padding: 0 0 3px 0;   /* no top padding – handle will sit there */
				position: relative;
				z-index: 10001;   /* above everything else */
				background: #ccc;
		    }
		    /* 2. Buttons / selects keep their width */
		    .toolbar > button,
		    .toolbar > select {
		        width: auto;
		        /* min-width: 80px; */
		        margin: 2px 0;
		    }
		    /* 3. Triangle handle sits inside the toolbar, sticky top & centered */
		    #toolbarToggler {
		        position: sticky;
		        top: 0;
		        left: 0;
		        right: 0;
		        height: 10px;
		        background: #ddd;
		        cursor: pointer;
		        z-index: 10000;
		        display: flex !important;     /* make sure it renders */
		        align-items: center;
		        justify-content: center;
		    }
			.toolbar.collapsed {
				height: 0 !important;
				max-height: 0 !important;
				overflow: hidden;
				padding-top: 0;
				padding-bottom: 0;
			}
    		#statusBar { gap: 2px; }   /* smaller gap → more room */
			}
		    /* arrow shape */
		    #toolbarToggler::after {
		        content: "";
		        width: 0;
		        height: 0;
		        border-left: 6px solid transparent;
		        border-right: 6px solid transparent;
		        border-bottom: 8px solid #fff;
				filter: drop-shadow(0 1px 1px rgba(0, 0, 0, 0.45));
		    }
		    #toolbarToggler.down::after {
		        border-bottom: none;
		        border-top: 8px solid #fff;
				filter: drop-shadow(0 1px 1px rgba(0, 0, 0, 0.45));
		    }
		/* SMART WRAP: 2-row toolbar on narrow screens */
		@media (max-width: 1330px) {              /* ← tweak to taste */
			.toolbar {
				flex-wrap: wrap;                 /* allow buttons to wrap */
				height: auto;                    /* grow when needed */
				min-height: 0px;
				padding: 5px 3px;                /* tiny side-padding so buttons almost touch the edge */
			}
			/* kill the right-hand margin on every button once we start wrapping */
			.toolbar button,
			.toolbar select {
				margin: 2px 1px;                 /* 1 px keeps them visually separate but lets many more fit before the wrap happens */
			}
		}
		</style>

<script>
	// Declair variables initially
	var L01 = 1;L02 = 2;L03 = 3;L04 = 4;L05 = 5;L06 = 6;L07 = 7;L08 = 8;L09 = 9;L10 = 10;L11 = 20;L12 = 30;L13 = 40;L14 = 50;L15 = 60;L16 = 70;L17 = 80;L18 = 90;L19 = 100;L20 = 200;L21 = 300;L22 = 400;L23 = 500;L24 = 600;L25 = 700;L26 = 800;L27 = 900;
	var textTotal=wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
	var letter=textEncrypted=cryptography=input='';
</script>

</head>
<body>
<div class="hidden-title"><center><h1>GemaThesaurus</h1></center></p></div>
    <div class="toolbar">
        <button id="openBtn" class="textBtn"><!--<img src="img/open.png" height="13" width="16" border="0" alt="Open">-->&#x1F4C2;<img src="img/invis.gif" width="4" border="0">Open</button>
		
        <script>
        // Collapsible Toolbar
        (function () {
        const tb   = document.querySelector('.toolbar');
        if (!tb) return;

        /* 1. create toggler */
        const toggler = document.createElement('div');
        toggler.id = 'toolbarToggler';
        toggler.title = 'Toggle toolbar';
        document.body.appendChild(toggler);

        /* 2. click / tap handler */
		function toggleToolbar() {
			const collapsed = tb.classList.toggle('collapsed');
			toggler.classList.toggle('up',  !collapsed);
			toggler.classList.toggle('down', collapsed);
			/* let textarea use the space */
			const ta = document.getElementById('textArea');
			if (ta) {
				ta.style.transition = 'padding-top .25s';
				ta.style.paddingTop = collapsed ? '8px' : '';
			}
		}
		toggler.addEventListener('mouseup',  toggleToolbar);
		toggler.addEventListener('touchend', toggleToolbar);

        /* 3. start open with UP arrow showing */
        toggler.classList.add('up');
        })();
        </script>

		<style>
		#bookSelect {  border-radius: 8px; }
		#bookSelect option          { background:#3333aa; color:#fff; border-radius: 5px; }	/*  Fallback color for any option that does not get an override  */
		#bookSelect option          { background:var(--opt-bg,#3333aa); border-radius: 5px; }   /*  Apply the custom color (if it exists)  */
		/*--------OT Hebrew--------*/
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/genesis/genesis.txt"]												{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/exodus/exodus.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/leviticus/leviticus.txt"]											{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/numbers/numbers.txt"]												{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/deuteronomy/deuteronomy.txt"]										{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/joshua/joshua.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/judges/judges.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/ruth/ruth.txt"]														{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/1samuel/1samuel.txt"]												{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/2samuel/2samuel.txt"]												{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/1kings/1kings.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/2kings/2kings.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/1chronicles/1chronicles.txt"]										{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/2chronicles/2chronicles.txt"]										{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/ezra/ezra.txt"]														{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/nehemiah/nehemiah.txt"]												{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/esther/esther.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/job/job.txt"]														{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/psalms/psalms.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/proverbs/proverbs.txt"]												{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/ecclesiastes/ecclesiastes.txt"]										{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/songs/songs.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/isaiah/isaiah.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/jeremiah/jeremiah.txt"]												{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/lamentations/lamentations.txt"]										{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/ezekiel/ezekiel.txt"]												{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/daniel/daniel.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/hosea/hosea.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/joel/joel.txt"]														{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/amos/amos.txt"]														{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/obadiah/obadiah.txt"]												{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/jonah/jonah.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/micah/micah.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/nahum/nahum.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/habakkuk/habakkuk.txt"]												{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/zephaniah/zephaniah.txt"]											{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/haggai/haggai.txt"]													{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/zechariah/zechariah.txt"]											{ --opt-bg:#3333aa; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Hebrew/malachi/malachi.txt"]												{ --opt-bg:#3333aa; }
		/*--------NT Hebrew----------E. Magoliouth-Trans--*/
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/matthew/matthew.txt"]					{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/mark/mark.txt"]						{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/luke/luke.txt"]						{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/john/john.txt"]						{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/acts/acts.txt"]						{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/romans/romans.txt"]					{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1corinthians/1corinthians.txt"]		{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2corinthians/2corinthians.txt"]		{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/galatians/galatians.txt"]				{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/ephesians/ephesians.txt"]				{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/philippians/philippians.txt"]			{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/colossians/colossians.txt"]			{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1thessalonians/1thessalonians.txt"]	{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2thessalonians/2thessalonians.txt"]	{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1timothy/1timothy.txt"]				{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2timothy/2timothy.txt"]				{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/titus/titus.txt"]						{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/philemon/philemon.txt"]				{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/hebrews/hebrews.txt"]					{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/james/james.txt"]						{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1peter/1peter.txt"]					{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2peter/2peter.txt"]					{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1john/1john.txt"]						{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2john/2john.txt"]						{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/3john/3john.txt"]						{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/jude/jude.txt"]						{ --opt-bg:#546cad; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/revelation/revelation.txt"]			{ --opt-bg:#546cad; }
		/*--------NT Hebrew---------Delitzsch-Translation-*/
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/matthew/matthew.txt"]							{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/mark/mark.txt"]								{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/luke/luke.txt"]								{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/john/john.txt"]								{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/acts/acts.txt"]								{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/romans/romans.txt"]							{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1corinthians/1corinthians.txt"]				{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2corinthians/2corinthians.txt"]				{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/galatians/galatians.txt"]						{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/ephesians/ephesians.txt"]						{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/philippians/philippians.txt"]					{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/colossians/colossians.txt"]					{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1thessalonians/1thessalonians.txt"]			{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2thessalonians/2thessalonians.txt"]			{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1timothy/1timothy.txt"]						{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2timothy/2timothy.txt"]						{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/titus/titus.txt"]								{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/philemon/philemon.txt"]						{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/hebrews/hebrews.txt"]							{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/james/james.txt"]								{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1peter/1peter.txt"]							{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2peter/2peter.txt"]							{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1john/1john.txt"]								{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2john/2john.txt"]								{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/3john/3john.txt"]								{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/jude/jude.txt"]								{ --opt-bg:#4589a8; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/revelation/revelation.txt"]					{ --opt-bg:#4589a8; }
		/*--------NT Hebrew---------Salkinson-Translation-*/
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/matthew/matthew.txt"]							{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/mark/mark.txt"]								{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/luke/luke.txt"]								{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/john/john.txt"]								{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/acts/acts.txt"]								{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/romans/romans.txt"]							{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1corinthians/1corinthians.txt"]				{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2corinthians/2corinthians.txt"]				{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/galatians/galatians.txt"]						{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/ephesians/ephesians.txt"]						{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/philippians/philippians.txt"]					{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/colossians/colossians.txt"]					{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1thessalonians/1thessalonians.txt"]			{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2thessalonians/2thessalonians.txt"]			{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1timothy/1timothy.txt"]						{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2timothy/2timothy.txt"]						{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/titus/titus.txt"]								{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/philemon/philemon.txt"]						{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/hebrews/hebrews.txt"]							{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/james/james.txt"]								{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1peter/1peter.txt"]							{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2peter/2peter.txt"]							{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1john/1john.txt"]								{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2john/2john.txt"]								{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/3john/3john.txt"]								{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/jude/jude.txt"]								{ --opt-bg:#00aeff; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/revelation/revelation.txt"]					{ --opt-bg:#00aeff; }
		/*--------NT Hebrew---------Richmond-Translation--*/
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/matthew/matthew.txt"]							{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/mark/mark.txt"]									{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/luke/luke.txt"]									{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/john/john.txt"]									{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/acts/acts.txt"]									{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/romans/romans.txt"]								{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1corinthians/1corinthians.txt"]					{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2corinthians/2corinthians.txt"]					{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/galatians/galatians.txt"]						{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/ephesians/ephesians.txt"]						{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/philippians/philippians.txt"]					{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/colossians/colossians.txt"]						{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1thessalonians/1thessalonians.txt"]				{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2thessalonians/2thessalonians.txt"]				{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1timothy/1timothy.txt"]							{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2timothy/2timothy.txt"]							{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/titus/titus.txt"]								{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/philemon/philemon.txt"]							{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/hebrews/hebrews.txt"]							{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/james/james.txt"]								{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1peter/1peter.txt"]								{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2peter/2peter.txt"]								{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1john/1john.txt"]								{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2john/2john.txt"]								{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/3john/3john.txt"]								{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/jude/jude.txt"]									{ --opt-bg:#48bef5; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/revelation/revelation.txt"]						{ --opt-bg:#48bef5; }
		/*--------OT Greek--------*/
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/genesis/genesis.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/exodus/exodus.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/leviticus/leviticus.txt"]												{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/numbers/numbers.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/deuteronomy/deuteronomy.txt"]											{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/joshua/joshua.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/judges/judges.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/ruth/ruth.txt"]														{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/1samuel/1samuel.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/2samuel/2samuel.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/1kings/1kings.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/2kings/2kings.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/1chronicles/1chronicles.txt"]											{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/2chronicles/2chronicles.txt"]											{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/ezra/ezra.txt"]														{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/nehemiah/nehemiah.txt"]												{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/esther/esther.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/job/job.txt"]															{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/psalms/psalms.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/proverbs/proverbs.txt"]												{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/ecclesiastes/ecclesiastes.txt"]										{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/songs/songs.txt"]														{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/isaiah/isaiah.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/jeremiah/jeremiah.txt"]												{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/lamentations/lamentations.txt"]										{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/ezekiel/ezekiel.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/daniel/daniel.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/hosea/hosea.txt"]														{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/joel/joel.txt"]														{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/amos/amos.txt"]														{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/obadiah/obadiah.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/jonah/jonah.txt"]														{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/micah/micah.txt"]														{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/nahum/nahum.txt"]														{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/habakkuk/habakkuk.txt"]												{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/zephaniah/zephaniah.txt"]												{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/haggai/haggai.txt"]													{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/zechariah/zechariah.txt"]												{ --opt-bg:#007700; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/Greek/malachi/malachi.txt"]													{ --opt-bg:#007700; }
		/*--------NT Greek--------*/
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/matthew/matthew.txt"]													{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/mark/mark.txt"]														{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/luke/luke.txt"]														{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/john/john.txt"]														{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/acts/acts.txt"]														{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/romans/romans.txt"]													{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/1corinthians/1corinthians.txt"]										{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/2corinthians/2corinthians.txt"]										{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/galatians/galatians.txt"]												{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/ephesians/ephesians.txt"]												{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/philippians/philippians.txt"]											{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/colossians/colossians.txt"]											{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/1thessalonians/1thessalonians.txt"]									{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/2thessalonians/2thessalonians.txt"]									{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/1timothy/1timothy.txt"]												{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/2timothy/2timothy.txt"]												{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/titus/titus.txt"]														{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/philemon/philemon.txt"]												{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/hebrews/hebrews.txt"]													{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/james/james.txt"]														{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/1peter/1peter.txt"]													{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/2peter/2peter.txt"]													{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/1john/1john.txt"]														{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/2john/2john.txt"]														{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/3john/3john.txt"]														{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/jude/jude.txt"]														{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/Greek/revelation/revelation.txt"]											{ --opt-bg:#009900; }
		/*--------OT English--------*/
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/genesis/genesis.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/exodus/exodus.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/leviticus/leviticus.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/numbers/numbers.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/deuteronomy/deuteronomy.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/joshua/joshua.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/judges/judges.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/ruth/ruth.txt"]														{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/1samuel/1samuel.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/2samuel/2samuel.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/1kings/1kings.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/2kings/2kings.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/1chronicles/1chronicles.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/2chronicles/2chronicles.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/ezra/ezra.txt"]														{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/nehemiah/nehemiah.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/esther/esther.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/job/job.txt"]														{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/psalms/psalms.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/proverbs/proverbs.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/ecclesiastes/ecclesiastes.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/songs/songs.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/isaiah/isaiah.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/jeremiah/jeremiah.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/lamentations/lamentations.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/ezekiel/ezekiel.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/daniel/daniel.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/hosea/hosea.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/joel/joel.txt"]														{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/amos/amos.txt"]														{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/obadiah/obadiah.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/jonah/jonah.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/micah/micah.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/nahum/nahum.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/habakkuk/habakkuk.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/zephaniah/zephaniah.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/haggai/haggai.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/zechariah/zechariah.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/OT/English/malachi/malachi.txt"]												{ --opt-bg:#cc8000; }
		/*--------NT English--------*/
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/matthew/matthew.txt"]												{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/mark/mark.txt"]														{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/luke/luke.txt"]														{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/john/john.txt"]														{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/acts/acts.txt"]														{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/romans/romans.txt"]													{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/1corinthians/1corinthians.txt"]										{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/2corinthians/2corinthians.txt"]										{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/galatians/galatians.txt"]											{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/ephesians/ephesians.txt"]											{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/philippians/philippians.txt"]										{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/colossians/colossians.txt"]											{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/1thessalonians/1thessalonians.txt"]									{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/2thessalonians/2thessalonians.txt"]									{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/1timothy/1timothy.txt"]												{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/2timothy/2timothy.txt"]												{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/titus/titus.txt"]													{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/philemon/philemon.txt"]												{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/hebrews/hebrews.txt"]												{ --opt-bg:#cc5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/james/james.txt"]													{ --opt-bg:#CC5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/1peter/1peter.txt"]													{ --opt-bg:#CC5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/2peter/2peter.txt"]													{ --opt-bg:#CC5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/1john/1john.txt"]													{ --opt-bg:#CC5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/2john/2john.txt"]													{ --opt-bg:#CC5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/3john/3john.txt"]													{ --opt-bg:#CC5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/jude/jude.txt"]														{ --opt-bg:#CC5000; }
		#bookSelect option[value*="/gemacrypt/files/books/NT/English/revelation/revelation.txt"]											{ --opt-bg:#CC5000; }
		/*--------Additions in Hebrew--------*/
		#bookSelect option[value*="/gemacrypt/files/books/Additions/Hebrew/Apocalypse of Adam.txt"]										{ --opt-bg:#546cad; }
		/*--------Additions in Greek--------*/
		#bookSelect option[value*="/gemacrypt/files/books/Additions/Greek/Apocalypse of Peter.txt"]										{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/Greek/Gospel of Harmony.txt"]										{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/Greek/Gospel of Peter.txt"]											{ --opt-bg:#009900; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/Greek/Psalms of Solomon.txt"]										{ --opt-bg:#009900; }
		/*--------Additions in Latin--------*/
		#bookSelect option[value*="/gemacrypt/files/books/Additions/Latin/Apocalypse of Golias.txt"]										{ --opt-bg:#7b1fa2; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/Latin/Epistle to the Laodiceans.txt"]								{ --opt-bg:#7b1fa2; }
		/*--------Additions in English--------*/
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/1 Adam and Eve.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/1 Apocalypse of James.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/2 Apocalypse of James.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/1 Clement.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/2 Clement.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/1 Enoch.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/2 Enoch.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/3 Enoch.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/1 Esdras.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/2 Esdras.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/1 Maccabees.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/2 Maccabees.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/3 Maccabees.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/4 Maccabees.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Acts of Andrew.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Acts of Paul.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Acts of Apollonius.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Acts of John.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Acts of Perpetua and Felicitas.txt"]							{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Acts of Peter.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Acts of Peter and the Twelve.txt"]							{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Acts of Pilate.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Acts of Thomas.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Adam.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Adam and Eve.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Additions to Esther.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Abraham.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Adam.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Bartholomew.txt"]								{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Baruch 2.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Baruch 3.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Daniel.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Elijah.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Esdras.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Ezra.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Golias.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Lamech.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Moses.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Paul.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Peter.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Pseduo-Methodius.txt"]							{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Sedrach.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Stephen.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of the Virgin.txt"]								{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Thomas.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Zephaniah.txt"]								{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocalypse of Zerubbabel.txt"]								{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apocryphon of John.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Apology of Aristides.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Ascension of Isaiah.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Baruch.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Bel and the Dragon.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Dialogue of the Savior.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Didache.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Diognetus.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Dionysius of Corinth.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Epiphanes.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Epistle of Apostolorum.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Epistle of Aristeas.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Epistle of Barnabas.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Epistle of Enoch.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Epistle of Jeremiah.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Epistle of Peter to Philip.txt"]								{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Epistle of Polycarp.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Epistle of Ptolemy.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Epistle of Vienna and Lyons.txt"]							{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Epistle to the Laodiceans.txt"]								{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Eugnostos the Blessed.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gnostic Antithesis.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gnostic Basilides.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gnostic Naassene.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of Ebionites.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of Egerton.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of Egyptians.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of Harmony.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of the Hebrews.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of James.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of Judas.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of the Marcion.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of Mary.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of Nazoreans.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of Nicodemus.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of Oxyrhynchus 840.txt"]								{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of Oxyrhynchus 1224.txt"]								{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of Peter.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of the Lord.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of Thomas.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Gospel of Truth.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Heracleon.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Ignatius to Polycarp.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Jasher.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Jubilees.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Judith.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Life of Apollonius of Tyana.txt"]							{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Martyrdom of Isaiah.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Martydom of Polycarp.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Melchizedek.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Odes of Solomon.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Ophite Diagrams.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Passion Narrative.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Prayer of Azariah.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Prayer of Manassas.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Prayer of Paul.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Preaching of Peter.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Psalms of Solomon.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Secret Book of James.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Secret Book of Mark.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Shem.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Shepherd of Hermas.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Sophia of Jesus.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Susanna.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Testament of Abraham.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Testament of Moses.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Testament of Solomon.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Testament of the 12 Patriarchs.txt"]							{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Testimony of Truth.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Theodotus.txt"]												{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Theophilus of Antioch.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Thomas the Contender.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Thunder, Perfect Mind.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Tobit.txt"]													{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Traditions of Matthias.txt"]									{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Vision of Ezra.txt"]											{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Wisdom of Sirach.txt"]										{ --opt-bg:#cc8000; }
		#bookSelect option[value*="/gemacrypt/files/books/Additions/English/Wisdom of Solomon.txt"]										{ --opt-bg:#cc8000; }
		</style>
		
		<select id="bookSelect" onchange="loadFile(this.value)">
			<option value='Book' selected="true">&#x1F4D6; Book:</option>
			<option value='---'>--------OT Hebrew--------</option><!-- OT in Hebrew -->
			<option value='/gemacrypt/files/books/OT/Hebrew/genesis/genesis.txt'>Genesis</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/exodus/exodus.txt'>Exodus</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/leviticus/leviticus.txt'>Leviticus</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/numbers/numbers.txt'>Numbers</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/deuteronomy/deuteronomy.txt'>Deuteronomy</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/joshua/joshua.txt'>Joshua</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/judges/judges.txt'>Judges</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/ruth/ruth.txt'>Ruth</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/1samuel/1samuel.txt'>1 Samuel</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/2samuel/2samuel.txt'>2 Samuel</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/1kings/1kings.txt'>1 Kings</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/2kings/2kings.txt'>2 Kings</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/1chronicles/1chronicles.txt'>1 Chronicles</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/2chronicles/2chronicles.txt'>2 Chronicles</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/ezra/ezra.txt'>Ezra</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/nehemiah/nehemiah.txt'>Nehemiah</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/esther/esther.txt'>Esther</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/job/job.txt'>Job</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/psalms/psalms.txt'>Psalms</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/proverbs/proverbs.txt'>Proverbs</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/ecclesiastes/ecclesiastes.txt'>Ecclesiastes</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/songs/songs.txt'>Song of Songs</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/isaiah/isaiah.txt'>Isaiah</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/jeremiah/jeremiah.txt'>Jeremiah</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/lamentations/lamentations.txt'>Lamentations</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/ezekiel/ezekiel.txt'>Ezekiel</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/daniel/daniel.txt'>Daniel</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/hosea/hosea.txt'>Hosea</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/joel/joel.txt'>Joel</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/amos/amos.txt'>Amos</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/obadiah/obadiah.txt'>Obadiah</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/jonah/jonah.txt'>Jonah</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/micah/micah.txt'>Micah</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/nahum/nahum.txt'>Nahum</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/habakkuk/habakkuk.txt'>Habakkuk</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/zephaniah/zephaniah.txt'>Zephaniah</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/haggai/haggai.txt'>Haggai</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/zechariah/zechariah.txt'>Zechariah</option>
			<option value='/gemacrypt/files/books/OT/Hebrew/malachi/malachi.txt'>Malachi</option>
			<option value='---'> </option>
			<option value='---'>--------NT Hebrew--------</option><!-- NT in Hebrew -->
			<option value='---'>--(E. Magoliouth-Trans)--</option><!-- Ezekiel Magoliouth's Translation of the Greek NT to Hebrew -->
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/matthew/matthew.txt'>Matthew</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/mark/mark.txt'>Mark</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/luke/luke.txt'>Luke</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/john/john.txt'>John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/acts/acts.txt'>Acts</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/romans/romans.txt'>Romans</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1corinthians/1corinthians.txt'>1 Corinthians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2corinthians/2corinthians.txt'>2 Corinthians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/galatians/galatians.txt'>Galatians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/ephesians/ephesians.txt'>Ephesians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/philippians/philippians.txt'>Philippians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/colossians/colossians.txt'>Colossians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1thessalonians/1thessalonians.txt'>1 Thessalonians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2thessalonians/2thessalonians.txt'>2 Thessalonians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1timothy/1timothy.txt'>1 Timothy</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2timothy/2timothy.txt'>2 Timothy</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/titus/titus.txt'>Titus</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/philemon/philemon.txt'>Philemon</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/hebrews/hebrews.txt'>Hebrews</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/james/james.txt'>James</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1peter/1peter.txt'>1 Peter</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2peter/2peter.txt'>2 Peter</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1john/1john.txt'>1 John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2john/2john.txt'>2 John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/3john/3john.txt'>3 John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/jude/jude.txt'>Jude</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/revelation/revelation.txt'>Revelation</option>
			<option value='---'> </option>
			<option value='---'>--------NT Hebrew--------</option><!-- NT in Hebrew -->
			<option value='---'>-(Delitzsch Translation)-</option><!-- Delitzsch's Translation of the Greek NT to Hebrew -->
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/matthew/matthew.txt'>Matthew</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/mark/mark.txt'>Mark</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/luke/luke.txt'>Luke</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/john/john.txt'>John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/acts/acts.txt'>Acts</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/romans/romans.txt'>Romans</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1corinthians/1corinthians.txt'>1 Corinthians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2corinthians/2corinthians.txt'>2 Corinthians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/galatians/galatians.txt'>Galatians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/ephesians/ephesians.txt'>Ephesians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/philippians/philippians.txt'>Philippians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/colossians/colossians.txt'>Colossians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1thessalonians/1thessalonians.txt'>1 Thessalonians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2thessalonians/2thessalonians.txt'>2 Thessalonians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1timothy/1timothy.txt'>1 Timothy</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2timothy/2timothy.txt'>2 Timothy</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/titus/titus.txt'>Titus</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/philemon/philemon.txt'>Philemon</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/hebrews/hebrews.txt'>Hebrews</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/james/james.txt'>James</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1peter/1peter.txt'>1 Peter</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2peter/2peter.txt'>2 Peter</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1john/1john.txt'>1 John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2john/2john.txt'>2 John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/3john/3john.txt'>3 John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/jude/jude.txt'>Jude</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/revelation/revelation.txt'>Revelation</option>
			<option value='---'> </option>
			<option value='---'>--------NT Hebrew--------</option><!-- NT in Hebrew -->
			<option value='---'>-(Salkinson-Translation)-</option><!-- Salkinson's Translation of the Greek NT to Hebrew -->
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/matthew/matthew.txt'>Matthew</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/mark/mark.txt'>Mark</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/luke/luke.txt'>Luke</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/john/john.txt'>John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/acts/acts.txt'>Acts</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/romans/romans.txt'>Romans</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1corinthians/1corinthians.txt'>1 Corinthians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2corinthians/2corinthians.txt'>2 Corinthians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/galatians/galatians.txt'>Galatians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/ephesians/ephesians.txt'>Ephesians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/philippians/philippians.txt'>Philippians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/colossians/colossians.txt'>Colossians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1thessalonians/1thessalonians.txt'>1 Thessalonians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2thessalonians/2thessalonians.txt'>2 Thessalonians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1timothy/1timothy.txt'>1 Timothy</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2timothy/2timothy.txt'>2 Timothy</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/titus/titus.txt'>Titus</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/philemon/philemon.txt'>Philemon</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/hebrews/hebrews.txt'>Hebrews</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/james/james.txt'>James</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1peter/1peter.txt'>1 Peter</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2peter/2peter.txt'>2 Peter</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1john/1john.txt'>1 John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2john/2john.txt'>2 John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/3john/3john.txt'>3 John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/jude/jude.txt'>Jude</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/revelation/revelation.txt'>Revelation</option>
			<option value='---'> </option>
			<option value='---'>--------NT Hebrew--------</option><!-- NT in Hebrew -->
			<option value='---'>-(Richmond Translation)--</option><!-- Richmond's Translation of the Greek NT to Hebrew -->
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/matthew/matthew.txt'>Matthew</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/mark/mark.txt'>Mark</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/luke/luke.txt'>Luke</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/john/john.txt'>John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/acts/acts.txt'>Acts</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/romans/romans.txt'>Romans</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1corinthians/1corinthians.txt'>1 Corinthians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2corinthians/2corinthians.txt'>2 Corinthians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/galatians/galatians.txt'>Galatians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/ephesians/ephesians.txt'>Ephesians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/philippians/philippians.txt'>Philippians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/colossians/colossians.txt'>Colossians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1thessalonians/1thessalonians.txt'>1 Thessalonians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2thessalonians/2thessalonians.txt'>2 Thessalonians</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1timothy/1timothy.txt'>1 Timothy</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2timothy/2timothy.txt'>2 Timothy</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/titus/titus.txt'>Titus</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/philemon/philemon.txt'>Philemon</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/hebrews/hebrews.txt'>Hebrews</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/james/james.txt'>James</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1peter/1peter.txt'>1 Peter</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2peter/2peter.txt'>2 Peter</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1john/1john.txt'>1 John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2john/2john.txt'>2 John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/3john/3john.txt'>3 John</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/jude/jude.txt'>Jude</option>
			<option value='/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/revelation/revelation.txt'>Revelation</option>
			<option value='---'> </option>
			<option value='---'>--------OT Greek--------</option><!-- OT in Greek -->
			<option value='/gemacrypt/files/books/OT/Greek/genesis/genesis.txt'>Genesis</option>
			<option value='/gemacrypt/files/books/OT/Greek/exodus/exodus.txt'>Exodus</option>
			<option value='/gemacrypt/files/books/OT/Greek/leviticus/leviticus.txt'>Leviticus</option>
			<option value='/gemacrypt/files/books/OT/Greek/numbers/numbers.txt'>Numbers</option>
			<option value='/gemacrypt/files/books/OT/Greek/deuteronomy/deuteronomy.txt'>Deuteronomy</option>
			<option value='/gemacrypt/files/books/OT/Greek/joshua/joshua.txt'>Joshua</option>
			<option value='/gemacrypt/files/books/OT/Greek/judges/judges.txt'>Judges</option>
			<option value='/gemacrypt/files/books/OT/Greek/ruth/ruth.txt'>Ruth</option>
			<option value='/gemacrypt/files/books/OT/Greek/1samuel/1samuel.txt'>1 Samuel</option>
			<option value='/gemacrypt/files/books/OT/Greek/2samuel/2samuel.txt'>2 Samuel</option>
			<option value='/gemacrypt/files/books/OT/Greek/1kings/1kings.txt'>1 Kings</option>
			<option value='/gemacrypt/files/books/OT/Greek/2kings/2kings.txt'>2 Kings</option>
			<option value='/gemacrypt/files/books/OT/Greek/1chronicles/1chronicles.txt'>1 Chronicles</option>
			<option value='/gemacrypt/files/books/OT/Greek/2chronicles/2chronicles.txt'>2 Chronicles</option>
			<option value='/gemacrypt/files/books/OT/Greek/ezra/ezra.txt'>Ezra</option>
			<option value='/gemacrypt/files/books/OT/Greek/nehemiah/nehemiah.txt'>Nehemiah</option>
			<option value='/gemacrypt/files/books/OT/Greek/esther/esther.txt'>Esther</option>
			<option value='/gemacrypt/files/books/OT/Greek/job/job.txt'>Job</option>
			<option value='/gemacrypt/files/books/OT/Greek/psalms/psalms.txt'>Psalms</option>
			<option value='/gemacrypt/files/books/OT/Greek/proverbs/proverbs.txt'>Proverbs</option>
			<option value='/gemacrypt/files/books/OT/Greek/ecclesiastes/ecclesiastes.txt'>Ecclesiastes</option>
			<option value='/gemacrypt/files/books/OT/Greek/songs/songs.txt'>Song of Songs</option>
			<option value='/gemacrypt/files/books/OT/Greek/isaiah/isaiah.txt'>Isaiah</option>
			<option value='/gemacrypt/files/books/OT/Greek/jeremiah/jeremiah.txt'>Jeremiah</option>
			<option value='/gemacrypt/files/books/OT/Greek/lamentations/lamentations.txt'>Lamentations</option>
			<option value='/gemacrypt/files/books/OT/Greek/ezekiel/ezekiel.txt'>Ezekiel</option>
			<option value='/gemacrypt/files/books/OT/Greek/daniel/daniel.txt'>Daniel</option>
			<option value='/gemacrypt/files/books/OT/Greek/hosea/hosea.txt'>Hosea</option>
			<option value='/gemacrypt/files/books/OT/Greek/joel/joel.txt'>Joel</option>
			<option value='/gemacrypt/files/books/OT/Greek/amos/amos.txt'>Amos</option>
			<option value='/gemacrypt/files/books/OT/Greek/obadiah/obadiah.txt'>Obadiah</option>
			<option value='/gemacrypt/files/books/OT/Greek/jonah/jonah.txt'>Jonah</option>
			<option value='/gemacrypt/files/books/OT/Greek/micah/micah.txt'>Micah</option>
			<option value='/gemacrypt/files/books/OT/Greek/nahum/nahum.txt'>Nahum</option>
			<option value='/gemacrypt/files/books/OT/Greek/habakkuk/habakkuk.txt'>Habakkuk</option>
			<option value='/gemacrypt/files/books/OT/Greek/zephaniah/zephaniah.txt'>Zephaniah</option>
			<option value='/gemacrypt/files/books/OT/Greek/haggai/haggai.txt'>Haggai</option>
			<option value='/gemacrypt/files/books/OT/Greek/zechariah/zechariah.txt'>Zechariah</option>
			<option value='/gemacrypt/files/books/OT/Greek/malachi/malachi.txt'>Malachi</option>
			<option value='---'> </option>
			<option value='---'>--------NT Greek--------</option><!-- NT in Greek -->
			<option value='/gemacrypt/files/books/NT/Greek/matthew/matthew.txt'>Matthew</option>
			<option value='/gemacrypt/files/books/NT/Greek/mark/mark.txt'>Mark</option>
			<option value='/gemacrypt/files/books/NT/Greek/luke/luke.txt'>Luke</option>
			<option value='/gemacrypt/files/books/NT/Greek/john/john.txt'>John</option>
			<option value='/gemacrypt/files/books/NT/Greek/acts/acts.txt'>Acts</option>
			<option value='/gemacrypt/files/books/NT/Greek/romans/romans.txt'>Romans</option>
			<option value='/gemacrypt/files/books/NT/Greek/1corinthians/1corinthians.txt'>1 Corinthians</option>
			<option value='/gemacrypt/files/books/NT/Greek/2corinthians/2corinthians.txt'>2 Corinthians</option>
			<option value='/gemacrypt/files/books/NT/Greek/galatians/galatians.txt'>Galatians</option>
			<option value='/gemacrypt/files/books/NT/Greek/ephesians/ephesians.txt'>Ephesians</option>
			<option value='/gemacrypt/files/books/NT/Greek/philippians/philippians.txt'>Philippians</option>
			<option value='/gemacrypt/files/books/NT/Greek/colossians/colossians.txt'>Colossians</option>
			<option value='/gemacrypt/files/books/NT/Greek/1thessalonians/1thessalonians.txt'>1 Thessalonians</option>
			<option value='/gemacrypt/files/books/NT/Greek/2thessalonians/2thessalonians.txt'>2 Thessalonians</option>
			<option value='/gemacrypt/files/books/NT/Greek/1timothy/1timothy.txt'>1 Timothy</option>
			<option value='/gemacrypt/files/books/NT/Greek/2timothy/2timothy.txt'>2 Timothy</option>
			<option value='/gemacrypt/files/books/NT/Greek/titus/titus.txt'>Titus</option>
			<option value='/gemacrypt/files/books/NT/Greek/philemon/philemon.txt'>Philemon</option>
			<option value='/gemacrypt/files/books/NT/Greek/hebrews/hebrews.txt'>Hebrews</option>
			<option value='/gemacrypt/files/books/NT/Greek/james/james.txt'>James</option>
			<option value='/gemacrypt/files/books/NT/Greek/1peter/1peter.txt'>1 Peter</option>
			<option value='/gemacrypt/files/books/NT/Greek/2peter/2peter.txt'>2 Peter</option>
			<option value='/gemacrypt/files/books/NT/Greek/1john/1john.txt'>1 John</option>
			<option value='/gemacrypt/files/books/NT/Greek/2john/2john.txt'>2 John</option>
			<option value='/gemacrypt/files/books/NT/Greek/3john/3john.txt'>3 John</option>
			<option value='/gemacrypt/files/books/NT/Greek/jude/jude.txt'>Jude</option>
			<option value='/gemacrypt/files/books/NT/Greek/revelation/revelation.txt'>Revelation</option>
			<option value='---'> </option>
			<option value='---'>--------OT English--------</option>
			<option value='/gemacrypt/files/books/OT/English/genesis/genesis.txt'>Genesis</option>
			<option value='/gemacrypt/files/books/OT/English/exodus/exodus.txt'>Exodus</option>
			<option value='/gemacrypt/files/books/OT/English/leviticus/leviticus.txt'>Leviticus</option>
			<option value='/gemacrypt/files/books/OT/English/numbers/numbers.txt'>Numbers</option>
			<option value='/gemacrypt/files/books/OT/English/deuteronomy/deuteronomy.txt'>Deuteronomy</option>
			<option value='/gemacrypt/files/books/OT/English/joshua/joshua.txt'>Joshua</option>
			<option value='/gemacrypt/files/books/OT/English/judges/judges.txt'>Judges</option>
			<option value='/gemacrypt/files/books/OT/English/ruth/ruth.txt'>Ruth</option>
			<option value='/gemacrypt/files/books/OT/English/1samuel/1samuel.txt'>1 Samuel</option>
			<option value='/gemacrypt/files/books/OT/English/2samuel/2samuel.txt'>2 Samuel</option>
			<option value='/gemacrypt/files/books/OT/English/1kings/1kings.txt'>1 Kings</option>
			<option value='/gemacrypt/files/books/OT/English/2kings/2kings.txt'>2 Kings</option>
			<option value='/gemacrypt/files/books/OT/English/1chronicles/1chronicles.txt'>1 Chronicles</option>
			<option value='/gemacrypt/files/books/OT/English/2chronicles/2chronicles.txt'>2 Chronicles</option>
			<option value='/gemacrypt/files/books/OT/English/ezra/ezra.txt'>Ezra</option>
			<option value='/gemacrypt/files/books/OT/English/nehemiah/nehemiah.txt'>Nehemiah</option>
			<option value='/gemacrypt/files/books/OT/English/esther/esther.txt'>Esther</option>
			<option value='/gemacrypt/files/books/OT/English/job/job.txt'>Job</option>
			<option value='/gemacrypt/files/books/OT/English/psalms/psalms.txt'>Psalms</option>
			<option value='/gemacrypt/files/books/OT/English/proverbs/proverbs.txt'>Proverbs</option>
			<option value='/gemacrypt/files/books/OT/English/ecclesiastes/ecclesiastes.txt'>Ecclesiastes</option>
			<option value='/gemacrypt/files/books/OT/English/songs/songs.txt'>Song of Songs</option>
			<option value='/gemacrypt/files/books/OT/English/isaiah/isaiah.txt'>Isaiah</option>
			<option value='/gemacrypt/files/books/OT/English/jeremiah/jeremiah.txt'>Jeremiah</option>
			<option value='/gemacrypt/files/books/OT/English/lamentations/lamentations.txt'>Lamentations</option>
			<option value='/gemacrypt/files/books/OT/English/ezekiel/ezekiel.txt'>Ezekiel</option>
			<option value='/gemacrypt/files/books/OT/English/daniel/daniel.txt'>Daniel</option>
			<option value='/gemacrypt/files/books/OT/English/hosea/hosea.txt'>Hosea</option>
			<option value='/gemacrypt/files/books/OT/English/joel/joel.txt'>Joel</option>
			<option value='/gemacrypt/files/books/OT/English/amos/amos.txt'>Amos</option>
			<option value='/gemacrypt/files/books/OT/English/obadiah/obadiah.txt'>Obadiah</option>
			<option value='/gemacrypt/files/books/OT/English/jonah/jonah.txt'>Jonah</option>
			<option value='/gemacrypt/files/books/OT/English/micah/micah.txt'>Micah</option>
			<option value='/gemacrypt/files/books/OT/English/nahum/nahum.txt'>Nahum</option>
			<option value='/gemacrypt/files/books/OT/English/habakkuk/habakkuk.txt'>Habakkuk</option>
			<option value='/gemacrypt/files/books/OT/English/zephaniah/zephaniah.txt'>Zephaniah</option>
			<option value='/gemacrypt/files/books/OT/English/haggai/haggai.txt'>Haggai</option>
			<option value='/gemacrypt/files/books/OT/English/zechariah/zechariah.txt'>Zechariah</option>
			<option value='/gemacrypt/files/books/OT/English/malachi/malachi.txt'>Malachi</option>
			<option value='---'> </option>
			<option value='---'>--------NT English--------</option>
			<option value='/gemacrypt/files/books/NT/English/matthew/matthew.txt'>Matthew</option>
			<option value='/gemacrypt/files/books/NT/English/mark/mark.txt'>Mark</option>
			<option value='/gemacrypt/files/books/NT/English/luke/luke.txt'>Luke</option>
			<option value='/gemacrypt/files/books/NT/English/john/john.txt'>John</option>
			<option value='/gemacrypt/files/books/NT/English/acts/acts.txt'>Acts</option>
			<option value='/gemacrypt/files/books/NT/English/romans/romans.txt'>Romans</option>
			<option value='/gemacrypt/files/books/NT/English/1corinthians/1corinthians.txt'>1 Corinthians</option>
			<option value='/gemacrypt/files/books/NT/English/2corinthians/2corinthians.txt'>2 Corinthians</option>
			<option value='/gemacrypt/files/books/NT/English/galatians/galatians.txt'>Galatians</option>
			<option value='/gemacrypt/files/books/NT/English/ephesians/ephesians.txt'>Ephesians</option>
			<option value='/gemacrypt/files/books/NT/English/philippians/philippians.txt'>Philippians</option>
			<option value='/gemacrypt/files/books/NT/English/colossians/colossians.txt'>Colossians</option>
			<option value='/gemacrypt/files/books/NT/English/1thessalonians/1thessalonians.txt'>1 Thessalonians</option>
			<option value='/gemacrypt/files/books/NT/English/2thessalonians/2thessalonians.txt'>2 Thessalonians</option>
			<option value='/gemacrypt/files/books/NT/English/1timothy/1timothy.txt'>1 Timothy</option>
			<option value='/gemacrypt/files/books/NT/English/2timothy/2timothy.txt'>2 Timothy</option>
			<option value='/gemacrypt/files/books/NT/English/titus/titus.txt'>Titus</option>
			<option value='/gemacrypt/files/books/NT/English/philemon/philemon.txt'>Philemon</option>
			<option value='/gemacrypt/files/books/NT/English/hebrews/hebrews.txt'>Hebrews</option>
			<option value='/gemacrypt/files/books/NT/English/james/james.txt'>James</option>
			<option value='/gemacrypt/files/books/NT/English/1peter/1peter.txt'>1 Peter</option>
			<option value='/gemacrypt/files/books/NT/English/2peter/2peter.txt'>2 Peter</option>
			<option value='/gemacrypt/files/books/NT/English/1john/1john.txt'>1 John</option>
			<option value='/gemacrypt/files/books/NT/English/2john/2john.txt'>2 John</option>
			<option value='/gemacrypt/files/books/NT/English/3john/3john.txt'>3 John</option>
			<option value='/gemacrypt/files/books/NT/English/jude/jude.txt'>Jude</option>
			<option value='/gemacrypt/files/books/NT/English/revelation/revelation.txt'>Revelation</option>
			<option value='---'> </option>
			<option value='---'>--------Additions Hebrew--------</option>
			<option value='/gemacrypt/files/books/Additions/Hebrew/Apocalypse of Adam.txt'>Apocalypse of Adam</option>
			<option value='---'> </option>
			<option value='---'>--------Additions Greek--------</option>
			<option value='/gemacrypt/files/books/Additions/Greek/Apocalypse of Peter.txt'>Apocalypse of Peter</option>
			<option value='/gemacrypt/files/books/Additions/Greek/Gospel of Harmony.txt'>Gospel of Harmony</option>
			<option value='/gemacrypt/files/books/Additions/Greek/Gospel of Peter.txt'>Gospel of Peter</option>
			<option value='/gemacrypt/files/books/Additions/Greek/Psalms of Solomon.txt'>Psalms of Solomon</option>
			<option value='---'> </option>
			<option value='---'>--------Additions Latin--------</option>
			<option value='/gemacrypt/files/books/Additions/Latin/Apocalypse of Golias.txt'>Apocalypse of Golias</option>
			<option value='/gemacrypt/files/books/Additions/Latin/Epistle to the Laodiceans.txt'>Epistle to the Laodiceans</option>
			<option value='---'> </option>
			<option value='---'>--------Additions English--------</option>
			<option value='/gemacrypt/files/books/Additions/English/1 Adam and Eve.txt'>1 Adam and Eve</option>
			<option value='/gemacrypt/files/books/Additions/English/1 Apocalypse of James.txt'>1 Apocalypse of James</option>
			<option value='/gemacrypt/files/books/Additions/English/2 Apocalypse of James.txt'>2 Apocalypse of James</option>
			<option value='/gemacrypt/files/books/Additions/English/1 Clement.txt'>1 Clement</option>
			<option value='/gemacrypt/files/books/Additions/English/2 Clement.txt'>2 Clement</option>
			<option value='/gemacrypt/files/books/Additions/English/1 Enoch.txt'>1 Enoch</option>
			<option value='/gemacrypt/files/books/Additions/English/2 Enoch.txt'>2 Enoch</option>
			<option value='/gemacrypt/files/books/Additions/English/3 Enoch.txt'>3 Enoch</option>
			<option value='/gemacrypt/files/books/Additions/English/1 Esdras.txt'>1 Esdras</option>
			<option value='/gemacrypt/files/books/Additions/English/2 Esdras.txt'>2 Esdras</option>
			<option value='/gemacrypt/files/books/Additions/English/1 Maccabees.txt'>1 Maccabess</option>
			<option value='/gemacrypt/files/books/Additions/English/2 Maccabees.txt'>2 Maccabess</option>
			<option value='/gemacrypt/files/books/Additions/English/3 Maccabees.txt'>3 Maccabess</option>
			<option value='/gemacrypt/files/books/Additions/English/4 Maccabees.txt'>4 Maccabess</option>
			<option value='/gemacrypt/files/books/Additions/English/Acts of Andrew.txt'>Acts of Andrew</option>
			<option value='/gemacrypt/files/books/Additions/English/Acts of Paul.txt'>Acts of Paul</option>
			<option value='/gemacrypt/files/books/Additions/English/Acts of Apollonius.txt'>Acts of Apollonius</option>
			<option value='/gemacrypt/files/books/Additions/English/Acts of John.txt'>Acts of John</option>
			<option value='/gemacrypt/files/books/Additions/English/Acts of Perpetua and Felicitas.txt'>Acts of Perpetua and Felicitas</option>
			<option value='/gemacrypt/files/books/Additions/English/Acts of Peter.txt'>Acts of Peter</option>
			<option value='/gemacrypt/files/books/Additions/English/Acts of Peter and the Twelve.txt'>Acts of Peter and the Twelve</option>
			<option value='/gemacrypt/files/books/Additions/English/Acts of Pilate.txt'>Acts of Pilate</option>
			<option value='/gemacrypt/files/books/Additions/English/Acts of Thomas.txt'>Acts of Thomas</option>
			<option value='/gemacrypt/files/books/Additions/English/Adam.txt'>Adam</option>
			<option value='/gemacrypt/files/books/Additions/English/Adam and Eve.txt'>Adam and Eve</option>
			<option value='/gemacrypt/files/books/Additions/English/Additions to Esther.txt'>Additions to Esther</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Abraham.txt'>Apocalypse of Abraham</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Adam.txt'>Apocalypse of Adam</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Bartholomew.txt'>Apocalypse of Bartholomew</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Baruch 2.txt'>Apocalypse of Baruch 2</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Baruch 3.txt'>Apocalypse of Baruch 3</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Daniel.txt'>Apocalypse of Daniel</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Elijah.txt'>Apocalypse of Elijah</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Esdras.txt'>Apocalypse of Esdras</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Ezra.txt'>Apocalypse of Ezra</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Golias.txt'>Apocalypse of Golias</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Lamech.txt'>Apocalypse of Lamech</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Moses.txt'>Apocalypse of Moses</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Paul.txt'>Apocalypse of Paul</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Peter.txt'>Apocalypse of Peter</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Pseduo-Methodius.txt'>Apocalypse of Pseduo-Methodius</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Sedrach.txt'>Apocalypse of Sedrach</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Stephen.txt'>Apocalypse of Stephen</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of the Virgin.txt'>Apocalypse of the Virgin</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Thomas.txt'>Apocalypse of Thomas</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Zephaniah.txt'>Apocalypse of Zephaniah</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocalypse of Zerubbabel.txt'>Apocalypse of Zerubbabel</option>
			<option value='/gemacrypt/files/books/Additions/English/Apocryphon of John.txt'>Apocryphon of John</option>
			<option value='/gemacrypt/files/books/Additions/English/Apology of Aristides.txt'>Apology of Aristides</option>
			<option value='/gemacrypt/files/books/Additions/English/Ascension of Isaiah.txt'>Ascension of Isaiah</option>
			<option value='/gemacrypt/files/books/Additions/English/Baruch.txt'>Baruch</option>
			<option value='/gemacrypt/files/books/Additions/English/Bel and the Dragon.txt'>Bel and the Dragon</option>
			<option value='/gemacrypt/files/books/Additions/English/Dialogue of the Savior.txt'>Dialogue of the Savior</option>
			<option value='/gemacrypt/files/books/Additions/English/Didache.txt'>Didache</option>
			<option value='/gemacrypt/files/books/Additions/English/Diognetus.txt'>Diognetus</option>
			<option value='/gemacrypt/files/books/Additions/English/Dionysius of Corinth.txt'>Dionysius of Corinth</option>
			<option value='/gemacrypt/files/books/Additions/English/Epiphanes.txt'>Epiphanes</option>
			<option value='/gemacrypt/files/books/Additions/English/Epistle of Apostolorum.txt'>Epistle of Apostolorum</option>
			<option value='/gemacrypt/files/books/Additions/English/Epistle of Aristeas.txt'>Epistle of Aristeas</option>
			<option value='/gemacrypt/files/books/Additions/English/Epistle of Barnabas.txt'>Epistle of Barnabas</option>
			<option value='/gemacrypt/files/books/Additions/English/Epistle of Enoch.txt'>Epistle of Enoch</option>
			<option value='/gemacrypt/files/books/Additions/English/Epistle of Jeremiah.txt'>Epistle of Jeremiah</option>
			<option value='/gemacrypt/files/books/Additions/English/Epistle of Peter to Philip.txt'>Epistle of Peter to Philip</option>
			<option value='/gemacrypt/files/books/Additions/English/Epistle of Polycarp.txt'>Epistle of Polycarp</option>
			<option value='/gemacrypt/files/books/Additions/English/Epistle of Ptolemy.txt'>Epistle of Ptolemy</option>
			<option value='/gemacrypt/files/books/Additions/English/Epistle of Vienna and Lyons.txt'>Epistle of Vienna and Lyons</option>
			<option value='/gemacrypt/files/books/Additions/English/Epistle to the Laodiceans.txt'>Epistle to the Laodiceans</option>
			<option value='/gemacrypt/files/books/Additions/English/Eugnostos the Blessed.txt'>Eugnostos the Blessed</option>
			<option value='/gemacrypt/files/books/Additions/English/Gnostic Antithesis.txt'>Gnostic Antithesis</option>
			<option value='/gemacrypt/files/books/Additions/English/Gnostic Basilides.txt'>Gnostic Basilides</option>
			<option value='/gemacrypt/files/books/Additions/English/Gnostic Naassene.txt'>Gnostic Naassene</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of Ebionites.txt'>Gospel of Ebionites</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of Egerton.txt'>Gospel of Egerton</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of Egyptians.txt'>Gospel of Egyptians</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of Harmony.txt'>Gospel of Harmony</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of the Hebrews.txt'>Gospel of the Hebrews</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of James.txt'>Gospel of James</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of Judas.txt'>Gospel of Judas</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of the Marcion.txt'>Gospel of the Marcion</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of Mary.txt'>Gospel of Mary</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of Nazoreans.txt'>Gospel of Nazoreans</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of Nicodemus.txt'>Gospel of Nicodemus</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of Oxyrhynchus 840.txt'>Gospel of Oxyrhynchus 840</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of Oxyrhynchus 1224.txt'>Gospel of Oxyrhynchus 1224</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of Peter.txt'>Gospel of Peter</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of the Lord.txt'>Gospel of the Lord</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of Thomas.txt'>Gospel of Thomas</option>
			<option value='/gemacrypt/files/books/Additions/English/Gospel of Truth.txt'>Gospel of Truth</option>
			<option value='/gemacrypt/files/books/Additions/English/Heracleon.txt'>Heracleon</option>
			<option value='/gemacrypt/files/books/Additions/English/Ignatius to Polycarp.txt'>Ignatius to Polycarp</option>
			<option value='/gemacrypt/files/books/Additions/English/Jasher.txt'>Jasher</option>
			<option value='/gemacrypt/files/books/Additions/English/Jubilees.txt'>Jubilees</option>
			<option value='/gemacrypt/files/books/Additions/English/Judith.txt'>Judith</option>
			<option value='/gemacrypt/files/books/Additions/English/Life of Apollonius of Tyana.txt'>Life of Apollonius of Tyana</option>
			<option value='/gemacrypt/files/books/Additions/English/Martyrdom of Isaiah.txt'>Martyrdom of Isaiah</option>
			<option value='/gemacrypt/files/books/Additions/English/Martydom of Polycarp.txt'>Martydom of Polycarp</option>
			<option value='/gemacrypt/files/books/Additions/English/Melchizedek.txt'>Melchizedek</option>
			<option value='/gemacrypt/files/books/Additions/English/Odes of Solomon.txt'>Odes of Solomon</option>
			<option value='/gemacrypt/files/books/Additions/English/Ophite Diagrams.txt'>Ophite Diagrams</option>
			<option value='/gemacrypt/files/books/Additions/English/Passion Narrative.txt'>Passion Narrative</option>
			<option value='/gemacrypt/files/books/Additions/English/Prayer of Azariah.txt'>Prayer of Azariah</option>
			<option value='/gemacrypt/files/books/Additions/English/Prayer of Manassas.txt'>Prayer of Manassas</option>
			<option value='/gemacrypt/files/books/Additions/English/Prayer of Paul.txt'>Prayer of Paul</option>
			<option value='/gemacrypt/files/books/Additions/English/Preaching of Peter.txt'>Preaching of Peter</option>
			<option value='/gemacrypt/files/books/Additions/English/Psalms of Solomon.txt'>Psalms of Solomon</option>
			<option value='/gemacrypt/files/books/Additions/English/Secret Book of James.txt'>Secret Book of James</option>
			<option value='/gemacrypt/files/books/Additions/English/Secret Book of Mark.txt'>Secret Book of Mark</option>
			<option value='/gemacrypt/files/books/Additions/English/Shem.txt'>Shem</option>
			<option value='/gemacrypt/files/books/Additions/English/Shepherd of Hermas.txt'>Shepherd of Hermas</option>
			<option value='/gemacrypt/files/books/Additions/English/Sophia of Jesus.txt'>Sophia of Jesus</option>
			<option value='/gemacrypt/files/books/Additions/English/Susanna.txt'>Susanna</option>
			<option value='/gemacrypt/files/books/Additions/English/Testament of Abraham.txt'>Testament of Abraham</option>
			<option value='/gemacrypt/files/books/Additions/English/Testament of Moses.txt'>Testament of Moses</option>
			<option value='/gemacrypt/files/books/Additions/English/Testament of Solomon.txt'>Testament of Solomon</option>
			<option value='/gemacrypt/files/books/Additions/English/Testament of the 12 Patriarchs.txt'>Testament of the 12 Patriarchs</option>
			<option value='/gemacrypt/files/books/Additions/English/Testimony of Truth.txt'>Testimony of Truth</option>
			<option value='/gemacrypt/files/books/Additions/English/Theodotus.txt'>Theodotus</option>
			<option value='/gemacrypt/files/books/Additions/English/Theophilus of Antioch.txt'>Theophilus of Antioch</option>
			<option value='/gemacrypt/files/books/Additions/English/Thomas the Contender.txt'>Thomas the Contender</option>
			<option value='/gemacrypt/files/books/Additions/English/Thunder, Perfect Mind.txt'>Thunder, Perfect Mind</option>
			<option value='/gemacrypt/files/books/Additions/English/Tobit.txt'>Tobit</option>
			<option value='/gemacrypt/files/books/Additions/English/Traditions of Matthias.txt'>Traditions of Matthias</option>
			<option value='/gemacrypt/files/books/Additions/English/Vision of Ezra.txt'>Vision of Ezra</option>
			<option value='/gemacrypt/files/books/Additions/English/Wisdom of Sirach.txt'>Wisdom of Sirach</option>
			<option value='/gemacrypt/files/books/Additions/English/Wisdom of Solomon.txt'>Wisdom of Solomon</option>
        </select>
    
		<script>
			// Change the direction of the text based on the file selected Right-to-Left or Left-to-Right
			document.getElementById('bookSelect').addEventListener('change', function() {
			  var textarea = document.getElementById('textArea');
			  switch (this.value) {
				/*--------OT Hebrew--------*/
				case '/gemacrypt/files/books/OT/Hebrew/genesis/genesis.txt':													textarea.dir = 'rtl';	break;
				case '/gemacrypt/files/books/OT/Hebrew/exodus/exodus.txt':													textarea.dir = 'rtl';	break;
				case '/gemacrypt/files/books/OT/Hebrew/leviticus/leviticus.txt':												textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/genesis/genesis.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/exodus/exodus.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/leviticus/leviticus.txt":												textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/numbers/numbers.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/deuteronomy/deuteronomy.txt":											textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/joshua/joshua.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/judges/judges.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/1samuel/1samuel.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/2samuel/2samuel.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/1kings/1kings.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/2kings/2kings.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/isaiah/isaiah.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/jeremiah/jeremiah.txt":												textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/ezekiel/ezekiel.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/hosea/hosea.txt":														textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/joel/joel.txt":														textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/amos/amos.txt":														textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/obadiah/obadiah.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/jonah/jonah.txt":														textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/micah/micah.txt":														textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/nahum/nahum.txt":														textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/habakkuk/habakkuk.txt":												textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/zephaniah/zephaniah.txt":												textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/haggai/haggai.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/zechariah/zechariah.txt":												textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/malachi/malachi.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/psalms/psalms.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/proverbs/proverbs.txt":												textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/job/job.txt":															textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/songs/songs.txt":														textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/ruth/ruth.txt":														textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/lamentations/lamentations.txt":										textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/ecclesiastes/ecclesiastes.txt":										textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/esther/esther.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/daniel/daniel.txt":													textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/ezra/ezra.txt":														textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/nehemiah/nehemiah.txt":												textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/1chronicles/1chronicles.txt":											textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/OT/Hebrew/2chronicles/2chronicles.txt":											textarea.dir = 'rtl';	break;
				/*--------NT Hebrew---------E.Magoliouth-Trans--*/
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/matthew/matthew.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/mark/mark.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/luke/luke.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/john/john.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/acts/acts.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/romans/romans.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1corinthians/1corinthians.txt":		textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2corinthians/2corinthians.txt":		textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/galatians/galatians.txt":				textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/ephesians/ephesians.txt":				textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/philippians/philippians.txt":			textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/colossians/colossians.txt":			textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1thessalonians/1thessalonians.txt":	textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2thessalonians/2thessalonians.txt":	textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1timothy/1timothy.txt":				textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2timothy/2timothy.txt":				textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/titus/titus.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/philemon/philemon.txt":				textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/hebrews/hebrews.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/james/james.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1peter/1peter.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2peter/2peter.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/1john/1john.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/2john/2john.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/3john/3john.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/jude/jude.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Ezekiel-Magoliouth-Translation/revelation/revelation.txt":			textarea.dir = 'rtl';	break;
				/*--------NT Hebrew---------Delitzsch-Translation--*/
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/matthew/matthew.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/mark/mark.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/luke/luke.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/john/john.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/acts/acts.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/romans/romans.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1corinthians/1corinthians.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2corinthians/2corinthians.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/galatians/galatians.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/ephesians/ephesians.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/philippians/philippians.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/colossians/colossians.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1thessalonians/1thessalonians.txt":				textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2thessalonians/2thessalonians.txt":				textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1timothy/1timothy.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2timothy/2timothy.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/titus/titus.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/philemon/philemon.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/hebrews/hebrews.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/james/james.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1peter/1peter.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2peter/2peter.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/1john/1john.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/2john/2john.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/3john/3john.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/jude/jude.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Delitzsch-Translation/revelation/revelation.txt":						textarea.dir = 'rtl';	break;
				/*--------NT Hebrew---------Salkinson-Translation--*/
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/matthew/matthew.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/mark/mark.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/luke/luke.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/john/john.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/acts/acts.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/romans/romans.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1corinthians/1corinthians.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2corinthians/2corinthians.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/galatians/galatians.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/ephesians/ephesians.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/philippians/philippians.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/colossians/colossians.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1thessalonians/1thessalonians.txt":				textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2thessalonians/2thessalonians.txt":				textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1timothy/1timothy.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2timothy/2timothy.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/titus/titus.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/philemon/philemon.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/hebrews/hebrews.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/james/james.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1peter/1peter.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2peter/2peter.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/1john/1john.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/2john/2john.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/3john/3john.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/jude/jude.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Salkinson-Translation/revelation/revelation.txt":						textarea.dir = 'rtl';	break;
				/*--------NT Hebrew---------Richmond-Translation--*/
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/matthew/matthew.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/mark/mark.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/luke/luke.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/john/john.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/acts/acts.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/romans/romans.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1corinthians/1corinthians.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2corinthians/2corinthians.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/galatians/galatians.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/ephesians/ephesians.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/philippians/philippians.txt":					textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/colossians/colossians.txt":						textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1thessalonians/1thessalonians.txt":				textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2thessalonians/2thessalonians.txt":				textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1timothy/1timothy.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2timothy/2timothy.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/titus/titus.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/philemon/philemon.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/hebrews/hebrews.txt":							textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/james/james.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1peter/1peter.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2peter/2peter.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/1john/1john.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/2john/2john.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/3john/3john.txt":								textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/jude/jude.txt":									textarea.dir = 'rtl';	break;
				case "/gemacrypt/files/books/NT/Hebrew/Richmond-Translation/revelation/revelation.txt":						textarea.dir = 'rtl';	break;
				/*--------OT Greek--------*/
				case '/gemacrypt/files/books/OT/Greek/genesis/genesis.txt':													textarea.dir = 'ltr';	break;
				case '/gemacrypt/files/books/OT/Greek/exodus/exodus.txt':													textarea.dir = 'ltr';	break;
				case '/gemacrypt/files/books/OT/Greek/leviticus/leviticus.txt':												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/genesis/genesis.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/exodus/exodus.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/leviticus/leviticus.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/numbers/numbers.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/deuteronomy/deuteronomy.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/joshua/joshua.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/judges/judges.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/1samuel/1samuel.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/2samuel/2samuel.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/1kings/1kings.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/2kings/2kings.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/isaiah/isaiah.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/jeremiah/jeremiah.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/ezekiel/ezekiel.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/hosea/hosea.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/joel/joel.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/amos/amos.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/obadiah/obadiah.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/jonah/jonah.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/micah/micah.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/nahum/nahum.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/habakkuk/habakkuk.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/zephaniah/zephaniah.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/haggai/haggai.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/zechariah/zechariah.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/malachi/malachi.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/psalms/psalms.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/proverbs/proverbs.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/job/job.txt":															textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/songs/songs.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/ruth/ruth.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/lamentations/lamentations.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/ecclesiastes/ecclesiastes.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/esther/esther.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/daniel/daniel.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/ezra/ezra.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/nehemiah/nehemiah.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/1chronicles/1chronicles.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/Greek/2chronicles/2chronicles.txt":											textarea.dir = 'ltr';	break;
				/*--------NT Greek--------*/
				case "/gemacrypt/files/books/NT/Greek/matthew/matthew.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/mark/mark.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/luke/luke.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/john/john.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/acts/acts.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/romans/romans.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/1corinthians/1corinthians.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/2corinthians/2corinthians.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/galatians/galatians.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/ephesians/ephesians.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/philippians/philippians.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/colossians/colossians.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/1thessalonians/1thessalonians.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/2thessalonians/2thessalonians.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/1timothy/1timothy.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/2timothy/2timothy.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/titus/titus.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/philemon/philemon.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/hebrews/hebrews.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/james/james.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/1peter/1peter.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/2peter/2peter.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/1john/1john.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/2john/2john.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/3john/3john.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/jude/jude.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/Greek/revelation/revelation.txt":											textarea.dir = 'ltr';	break;
				/*--------OT English--------*/
				case '/gemacrypt/files/books/OT/English/genesis/genesis.txt':												textarea.dir = 'ltr';	break;
				case '/gemacrypt/files/books/OT/English/exodus/exodus.txt':													textarea.dir = 'ltr';	break;
				case '/gemacrypt/files/books/OT/English/leviticus/leviticus.txt':											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/genesis/genesis.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/exodus/exodus.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/leviticus/leviticus.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/numbers/numbers.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/deuteronomy/deuteronomy.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/joshua/joshua.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/judges/judges.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/1samuel/1samuel.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/2samuel/2samuel.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/1kings/1kings.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/2kings/2kings.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/isaiah/isaiah.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/jeremiah/jeremiah.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/ezekiel/ezekiel.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/hosea/hosea.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/joel/joel.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/amos/amos.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/obadiah/obadiah.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/jonah/jonah.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/micah/micah.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/nahum/nahum.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/habakkuk/habakkuk.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/zephaniah/zephaniah.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/haggai/haggai.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/zechariah/zechariah.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/malachi/malachi.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/psalms/psalms.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/proverbs/proverbs.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/job/job.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/songs/songs.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/ruth/ruth.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/lamentations/lamentations.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/ecclesiastes/ecclesiastes.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/esther/esther.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/daniel/daniel.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/ezra/ezra.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/nehemiah/nehemiah.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/1chronicles/1chronicles.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/OT/English/2chronicles/2chronicles.txt":										textarea.dir = 'ltr';	break;
				/*--------NT English--------*/
				case "/gemacrypt/files/books/NT/English/matthew/matthew.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/mark/mark.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/luke/luke.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/john/john.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/acts/acts.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/romans/romans.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/1corinthians/1corinthians.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/2corinthians/2corinthians.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/galatians/galatians.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/ephesians/ephesians.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/philippians/philippians.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/colossians/colossians.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/1thessalonians/1thessalonians.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/2thessalonians/2thessalonians.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/1timothy/1timothy.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/2timothy/2timothy.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/titus/titus.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/philemon/philemon.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/hebrews/hebrews.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/james/james.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/1peter/1peter.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/2peter/2peter.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/1john/1john.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/2john/2john.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/3john/3john.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/jude/jude.txt":														textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/NT/English/revelation/revelation.txt":											textarea.dir = 'ltr';	break;
				/*--------Additions in Hebrew--------*/
				case "/gemacrypt/files/books/Additions/Hebrew/Apocalypse of Adam.txt":										textarea.dir = 'rtl';	break;
				/*--------Additions in Greek---------*/
				case "/gemacrypt/files/books/Additions/Greek/Apocalypse of Peter.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/Greek/Gospel of Harmony.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/Greek/Gospel of Peter.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/Greek/Psalms of Solomon.txt":											textarea.dir = 'ltr';	break;
				/*--------Additions in Latin---------*/
				case "/gemacrypt/files/books/Additions/Latin/Apocalypse of Golias.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/Latin/Epistle to the Laodiceans.txt":									textarea.dir = 'ltr';	break;
				/*--------Additions in English-------*/
				case "/gemacrypt/files/books/Additions/English/1 Adam and Eve.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/1 Apocalypse of James.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/2 Apocalypse of James.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/1 Clement.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/2 Clement.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/1 Enoch.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/2 Enoch.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/3 Enoch.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/1 Esdras.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/2 Esdras.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/1 Maccabees.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/2 Maccabees.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/3 Maccabees.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/4 Maccabees.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Acts of Andrew.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Acts of Paul.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Acts of Apollonius.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Acts of John.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Acts of Perpetua and Felicitas.txt":							textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Acts of Peter.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Acts of Peter and the Twelve.txt":							textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Acts of Pilate.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Acts of Thomas.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Adam.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Adam and Eve.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Additions to Esther.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Abraham.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Adam.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Bartholomew.txt":								textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Baruch 2.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Baruch 3.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Daniel.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Elijah.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Esdras.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Ezra.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Golias.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Lamech.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Moses.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Paul.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Peter.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Pseduo-Methodius.txt":							textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Sedrach.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Stephen.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of the Virgin.txt":								textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Thomas.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Zephaniah.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocalypse of Zerubbabel.txt":								textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apocryphon of John.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Apology of Aristides.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Ascension of Isaiah.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Baruch.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Bel and the Dragon.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Dialogue of the Savior.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Didache.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Diognetus.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Dionysius of Corinth.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Epiphanes.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Epistle of Apostolorum.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Epistle of Aristeas.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Epistle of Barnabas.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Epistle of Enoch.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Epistle of Jeremiah.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Epistle of Peter to Philip.txt":								textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Epistle of Polycarp.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Epistle of Ptolemy.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Epistle of Vienna and Lyons.txt":								textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Epistle to the Laodiceans.txt":								textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Eugnostos the Blessed.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gnostic Antithesis.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gnostic Basilides.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gnostic Naassene.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of Ebionites.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of Egerton.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of Egyptians.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of Harmony.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of the Hebrews.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of James.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of Judas.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of the Marcion.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of Mary.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of Nazoreans.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of Nicodemus.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of Oxyrhynchus 840.txt":								textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of Oxyrhynchus 1224.txt":								textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of Peter.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of the Lord.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of Thomas.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Gospel of Truth.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Heracleon.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Ignatius to Polycarp.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Jasher.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Jubilees.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Judith.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Life of Apollonius of Tyana.txt":								textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Martyrdom of Isaiah.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Martydom of Polycarp.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Melchizedek.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Odes of Solomon.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Ophite Diagrams.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Passion Narrative.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Prayer of Azariah.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Prayer of Manassas.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Prayer of Paul.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Preaching of Peter.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Psalms of Solomon.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Secret Book of James.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Secret Book of Mark.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Shem.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Shepherd of Hermas.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Sophia of Jesus.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Susanna.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Testament of Abraham.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Testament of Moses.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Testament of Solomon.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Testament of the 12 Patriarchs.txt":							textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Testimony of Truth.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Theodotus.txt":												textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Theophilus of Antioch.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Thomas the Contender.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Thunder, Perfect Mind.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Tobit.txt":													textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Traditions of Matthias.txt":									textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Vision of Ezra.txt":											textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Wisdom of Sirach.txt":										textarea.dir = 'ltr';	break;
				case "/gemacrypt/files/books/Additions/English/Wisdom of Solomon.txt":										textarea.dir = 'ltr';	break;
				default:
				  textarea.dir = 'rtl'; // default direction
			  }
			});
			function toggleDirection() {
			var textarea = document.getElementById('textarea');
			textarea.dir = textarea.dir === 'rtl'? 'ltr' : 'rtl';
			var encryptedSpan = document.getElementById('encrypted');
			encryptedSpan.dir = encryptedSpan.dir === 'rtl'? 'ltr' : 'rtl';
			}
			</script>
		
		<!-- CORS Proxy has to be setup on the server.  See instruction command in ../files/_server setup.txt -->
		<script>
			// CORS Proxy Server - to allow the opening of txt files
			async function loadFile(url) {
				let corsProxy = `${window.location.protocol}//${window.location.hostname}/`; // grad whatever the current host's domain name and protocol and append a backslash /
				try {
					const response = await fetch(corsProxy + url);
					if (response.ok) {
						const text = await response.text();
						const textArea = document.getElementById("textArea");
						textArea.textContent = text;
					} else {
						console.error(`Error loading file from primary CORS proxy: ${response.status} - ${response.statusText}`);
						corsProxy = 'http://radius.center/';
						const response = await fetch(corsProxy + url);
						if (response.ok) {
							const text = await response.text();
							const textArea = document.getElementById('textArea');
							textArea.textContent = text;
						} else {
							console.error(`Error loading file from backup CORS proxy: ${response.status} - ${response.statusText}`);
						}
					}
				} catch (error) {
					console.error(`Error loading file: ${error}`);
					corsProxy = 'http://radius.center/';
					const response = await fetch(corsProxy + url);
					if (response.ok) {
						const text = await response.text();
						const textArea = document.getElementById('textArea');
						textArea.textContent = text;
					} else {
						console.error(`Error loading file from backup CORS proxy: ${response.status} - ${response.statusText}`);
					}
				}
			}
			
			//Load a default file upon page load
			window.onload = function () {
				loadFile('gemacrypt/files/books/default.txt');
			};

			// When the page is about to be unloaded (e.g., when the refresh button is clicked), set the menus back to their default option
			window.onbeforeunload = function() {
			document.getElementById('bookSelect').value = 'Book';
			document.getElementById('gematriaSelect').value = 'Value';
			document.getElementById('encryptionSelect').value = 'Encryption';
			document.getElementById('removeSelect').value = 'Remove';
		}
		</script>

        <select id="removeSelect" tabIndex="" onChange="">
            <option value='Remove' selected="true">&#x1F6AB; Remove:</option>
			<option value='AltWord2'>Alt Word #2 ⁕</option>
			<option value='AltWord1'>Alt Word #1 *</option>
			<option value='Niqqud'>Niqqud (Vowel Points)</option>
			<option value='Punctuation'>Punctuation</option>
			<option value='Digits'>Digits</option>
			<option value='Spaces'>Spaces</option>
			<option value='CarriageReturns'>Carriage Returns</option>
			<option value='LatinLetters'>Latin/English Letters</option>
			<option value='GreekLetters'>Greek Letters</option>
			<option value='HebrewLetters'>Hebrew Letters</option>

        </select>

		<select id="gematriaSelect" tabIndex="3" onChange="gematria = this.value">
            <option value='Value' selected="true">&#x0023; Gematria:</option>
            <option value='Ragil'>Ragil</option>
			<option value='Katan'>Katan</option>
			<option value='HaKlali'>HaKlali</option>
			<option value='Kolel'>Kolel</option>
			<option value='Kolel+1'>Kolel+word</option>
			<option value='Ordinal'>Ordinal</option>
			<option value='Reduced'>Reduced</option>
			<option value='IntegralReduced'>Integral Reduced</option>
			<option value='HaKadmi'>HaKadmi</option>
			<option value='HaPerati'>HaPerati</option>
			<option value='Miluy'>Miluy</option>
        </select>

		<select id="encryptionSelect" tabIndex="2" onchange="encryption = this.value" onclick="encryption = this.value">
			<option value='Encryption' selected="true">&#x1F512; Encryption:</option>
			<option value='AYiK-BeCheR'>AYiK-BeCheR</option>
			<option value='AL-BaM'>AL-BaM</option>
			<option value='AT-BaSh'>AT-BaSh</option>
			<option value='ACh-BI'>ACh-BI</option>
			<option value='AChaS-BeTA'>AChaS-BeTA</option>
			<option value='AT-BaCh'>AT-BaCh</option>
			<option value='AT-BaCh999'>AT-BaCh (with Finals)</option>
			<option value='AiY-BaK'>AiY-BaK</option>
			<option value='ATz-BaPh'>ATz-BaPh</option>
			<option value='AL-BeTh'>AL-BeTh</option>
			<option value='Ofanim'>Ofanim</option>
		  </select>
		  <script>
			encryptionSelect.onchange = function() {
			  document.getElementById("input").value = this.options[this.selectedIndex].text;
			}
		  	encryptionSelect.onclick = function() {
			  document.getElementById("input").value = this.options[this.selectedIndex].text;
			}
		  </script>

		<button id="calculateBtn" class="textBtn" onclick="createModal(); openModal(textHighlight, textTotal, textEncrypted);"><img src="img/calculate.png" height="16" width="14" border="0" alt="Calculate"><!--<img src="img/invis.gif" width="4" border="0">Calculate--></button>
		<!--<button id="copyBtn" class="textBtn" onclick=""><img src="img/copy.png" height="16" width="16" border="0" alt="Copy">&#x1F4D1;<img src="img/invis.gif" width="4" border="0">Copy</button>-->
		<button id="directionBtn" class="textBtn" onclick="toggleDirection()"><img src="img/direction.png" height="16" width="20" border="0" alt="Text Direction"><img src="img/invis.gif" width="6" border="0">Align</button>
		<button id="wrapBtn" class="textBtn" onclick="toggleWrap()"><img src="img/wrap.png" height="16" width="20" border="0" alt="Wrap Text"><img src="img/invis.gif" width="6" border="0">Wrap</button>
		<button id="lightmodeBtn" class="textBtn" onclick="toggleLightMode()"><img src="img/moon.png" height="16" width="16" border="0" alt="Light/Dark Mode"><img src="img/invis.gif" width="4" border="0">Mode</button>
        <button id="translateBtn" class="textBtn" onclick=""><img src="img/translate.png" height="16" width="16" border="0" alt="Translate"><img src="img/invis.gif" width="4" border="0">Tran</button>
        <button id="printBtn" class="textBtn" onclick=""><img src="img/print.png" height="16" width="16" border="0" alt="Print"><img src="img/invis.gif" width="6" border="0">Print</button>
        <button id="exportBtn" class="textBtn" onclick=""><img src="img/export.png" height="16" width="16" border="0" alt="Export"><img src="img/invis.gif" width="6" border="0">Export</button>
        <button id="clearBtn" class="textBtn" onclick=""><!--<img src="img/clear.png" height="16" width="16" border="0" alt="Clear"><img src="img/invis.gif" width="4" border="0">-->&#x274C; Clear</button>
		<button id="app1Btn" class="textBtn" onclick="window.open('app1.php', '_blank')"><img src="img/db.png" height="16" width="16" border="0" alt="GemaCrypt DB"><img src="img/invis.gif" width="4" border="0">DB</button>
        <button id="helpBtn" class="textBtn" onclick="window.open('help.html', '_blank')"><img src="img/help.png" height="17" width="14" border="0" alt="Help"><img src="img/invis.gif" width="4" border="0">Help</button>
    </div>
	
		<a id="breakOutLink" href="javascript:void(0)" title="Frame Break Out"><img src="img/breakout.png" alt="Frame Break Out"></a>
		<script>
		/* === Click/tap handler: break out of frames === */
		function breakOut() {
			if (window.top !== window.self) {          // inside frame
				window.top.location = window.self.location.href; // jump to full tab
			}
		}
		const breakLink = document.getElementById('breakOutLink');
		breakLink.addEventListener('mouseup',  breakOut);
		breakLink.addEventListener('touchend', breakOut);
		</script>

    <div class="container">
		<div class="textArea" id="textArea" dir="rtl" contenteditable="true" style="font-family: 'Fira Code', 'Courier New', 'Cascadia Mono', Courier, monospace, 'Times New Roman'; text-shadow: 0 0 5px #FFF;"></div>
		<div class="statusBar" id="statusBar">
			<div class="verses" id="verses"><p><span id="verses"></span></p></div>
			<div class="words" id="words"><p><span id="words"></span></p></div>
			<div class="letters" id="letters"><p><span id="letters"></span></p></div>
			<div class="sum" id="sum"><p><span id="sum"></span></p></div>
			<div class="encrypted" id="encrypted"><p><span id="encrypted" dir="rtl"></span></p></div>
			<div class="encryptedsum" id="encryptedsum"><p><span id="encryptedsum"></span></p></div>
		</div>
		</div>
    
    <input type="file" id="fileInput" multiple style="display: none;">

	<script>
		// Replace * with a red colored *, but this does not work in an editable text field
		const textarea = document.getElementById("textArea");
		const text = textarea.textContent;
		const newText = text.replace(/\*/g, "<font color='#FF0000'>*</font>");
		textarea.innerHTML = newText;
	  </script>

	<script>
		// Text Direction listener
		function toggleDirection() {
		var textarea = document.getElementById('textArea');
		textarea.dir = textarea.dir === 'rtl'? 'ltr' : 'rtl';
		var encryptedSpan = document.getElementById('encrypted');
		encryptedSpan.dir = encryptedSpan.dir === 'rtl'? 'ltr' : 'rtl';
		}
		</script>
	
	<script>
		/**
		 * toggleWrap – toggles the *soft-wrap* of long lines while
		 * keeping every original newline intact.
		 */
		function toggleWrap() {
		const ta  = document.getElementById('textArea');
		const btn = document.getElementById('wrapBtn');

		const isWrapped = ta.style.whiteSpace !== 'pre';   // wrapped = pre-wrap by default

		if (isWrapped) {
			/* -----  un-wrapped mode  ----- */
			ta.style.whiteSpace = 'pre';      // honour CR/LF, no soft-wrap
			ta.style.overflowX  = 'auto';     // show scrollbar for wide lines
			ta.classList.add('horizontalScroll');
			btn.title = 'Turn soft-wrap back on';
		} else {
			/* -----  soft-wrap mode  ----- */
			ta.style.whiteSpace = 'pre-wrap'; // honour CR/LF + wrap long lines
			ta.style.overflowX  = 'hidden';
			ta.classList.remove('horizontalScroll');
			btn.title = 'Allow horizontal scrolling';
		}
		}
	</script>

	<script>
		// Light Mode functionality
		function toggleLightMode() {
		// Get the textArea element and the button element
		const textArea = document.getElementById('textArea');
		const button = document.getElementById('lightmodeBtn');

		// Toggle the light mode class on the textArea element
		textArea.classList.toggle('light-mode');

		// Change the image on the button depending on the current mode
		if (textArea.classList.contains('light-mode')) {
			button.querySelector('img').src = 'img/sun.png';
		} else {
			button.querySelector('img').src = 'img/moon.png';
		}
		}
	</script>

	<script>
		// When an option from the gematriaSelect menu is chosen it will update that values of variables L01 through L27 accordingly
		document.getElementById('gematriaSelect').addEventListener('change', function() {
		var gematriaSelect = this.value;
		if (gematriaSelect == "Value" || gematriaSelect == "Ragil" || gematriaSelect == "Kolel" || gematriaSelect == "Kolel+1" || gematriaSelect == "HaKlali") {
			L01 = 1;L02 = 2;L03 = 3;L04 = 4;L05 = 5;L06 = 6;L07 = 7;L08 = 8;L09 = 9;L10 = 10;L11 = 20;L12 = 30;L13 = 40;L14 = 50;L15 = 60;L16 = 70;L17 = 80;L18 = 90;L19 = 100;L20 = 200;L21 = 300;L22 = 400;L23 = 500;L24 = 600;L25 = 700;L26 = 800;L27 = 900;
		} else if (gematriaSelect == "Katan" || gematriaSelect == "Reduced" || gematriaSelect == "IntegralReduced") {
			L01 = 1;L02 = 2;L03 = 3;L04 = 4;L05 = 5;L06 = 6;L07 = 7;L08 = 8;L09 = 9;L10 = 1;L11 = 2;L12 = 3;L13 = 4;L14 = 5;L15 = 6;L16 = 7;L17 = 8;L18 = 9;L19 = 1;L20 = 2;L21 = 3;L22 = 4;L23 = 5;L24 = 6;L25 = 7;L26 = 8;L27 = 9;
		} else if (gematriaSelect == "Ordinal") {
			L01 = 1;L02 = 2;L03 = 3;L04 = 4;L05 = 5;L06 = 6;L07 = 7;L08 = 8;L09 = 9;L10 = 10;L11 = 11;L12 = 12;L13 = 13;L14 = 14;L15 = 15;L16 = 16;L17 = 17;L18 = 18;L19 = 19;L20 = 20;L21 = 21;L22 = 22;L23 = 23;L24 = 24;L25 = 25;L26 = 26;L27 = 27;
		} else if (gematriaSelect == "HaKadmi") {
			L01 = 1;L02 = 3;L03 = 6;L04 = 10;L05 = 15;L06 = 21;L07 = 28;L08 = 36;L09 = 45;L10 = 55;L11 = 75;L12 = 105;L13 = 145;L14 = 195;L15 = 255;L16 = 325;L17 = 405;L18 = 495;L19 = 595;L20 = 795;L21 = 1095;L22 = 1495;L23 = 1995;L24 = 2595;L25 = 3295;L26 = 4095;L27 = 4995;
		} else if (gematriaSelect == "HaPerati") {
			L01 = 1;L02 = 4;L03 = 9;L04 = 16;L05 = 25;L06 = 36;L07 = 49;L08 = 64;L09 = 81;L10 = 100;L11 = 400;L12 = 900;L13 = 1600;L14 = 2500;L15 = 3600;L16 = 4900;L17 = 6400;L18 = 8100;L19 = 10000;L20 = 40000;L21 = 90000;L22 = 160000;L23 = 250000;L24 = 360000;L25 = 490000;L26 = 640000;L27 = 810000;
		} else if (gematriaSelect == "Miluy") {
			L01 = 813;L02 = 412;L03 = 83;L04 = 434;L05 = 6;L06 = 12;L07 = 717;L08 = 418;L09 = 419;L10 = 20;L11 = 820;L12 = 74;L13 = 640;L14 = 756;L15 = 600;L16 = 780;L17 = 81;L18 = 104;L19 = 906;L20 = 510;L21 = 1010;L22 = 406;L23 = 820;L24 = 640;L25 = 756;L26 = 81;L27 = 104;
		} else {
		L01 = 1;L02 = 2;L03 = 3;L04 = 4;L05 = 5;L06 = 6;L07 = 7;L08 = 8;L09 = 9;L10 = 10;L11 = 20;L12 = 30;L13 = 40;L14 = 50;L15 = 60;L16 = 70;L17 = 80;L18 = 90;L19 = 100;L20 = 200;L21 = 300;L22 = 400;L23 = 500;L24 = 600;L25 = 700;L26 = 800;L27 = 900;
		}
		});
	</script>

<script>
encryptionSelect.onchange = encryptionSelect.onclick = function() {	
    input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
    wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
	letter=textEncrypted='';
    let selectedOption = encryptionSelect.value; // Get the selected option

// Preform the encryption method based on which option was chosen from the encryptionSelect dropdown menu
  switch (selectedOption) {
	    case 'Encryption': // If nothing is selected default to AT-BaSh
		for (var i=0; i < input.length; i++){
			switch(input[i]){
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
				default:letter = input[i]; break; // Keep original character if not found
			}
			textEncrypted += letter;
	// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
	if(i+1 == input.length){
		switch(letter){
			/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
			/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
			/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
			/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
			/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
			default:letter = "";break;
		}
		textEncrypted += letter;
	}
	}
		if(gematriaSelect.value == "HaKlali"){
		gematria1 = gematria1*gematria1;
		gematria2 = gematria2*gematria2;
		}
		else if(gematriaSelect.value == "Kolel"){
		gematria1 += letterCount;
		gematria2 += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
		gematria1 += wordCount;
		gematria2 += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
		while(gematria1 >= 10){
		product1 = Math.floor(gematria1 / 10);
		remainder1 = gematria1 % 10;
		gematria1 = remainder1 + product1;}
		while(gematria2 >= 10){
		product2 = Math.floor(gematria2 / 10);
		remainder2 = gematria2 % 10;
		gematria2 = remainder2 + product2;}
		}
      break;
    case 'AYiK-BeCheR':
		for (var i=0; i < input.length; i++){
			switch(input[i]){
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
				default:letter = input[i]; break; // Keep original character if not found
			}
			textEncrypted += letter;
			// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
			if(i+1 == input.length){
				switch(letter){
					/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
					/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
					/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
					/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
					/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
					default:letter = "";break;
				}
				textEncrypted += letter;
			}
		}
		if(gematriaSelect.value == "HaKlali"){
		gematria1 = gematria1*gematria1;
		gematria2 = gematria2*gematria2;
		}
		else if(gematriaSelect.value == "Kolel"){
		gematria1 += letterCount;
		gematria2 += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
		gematria1 += wordCount;
		gematria2 += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
		while(gematria1 >= 10){
		product1 = Math.floor(gematria1 / 10);
		remainder1 = gematria1 % 10;
		gematria1 = remainder1 + product1;}
		while(gematria2 >= 10){
		product2 = Math.floor(gematria2 / 10);
		remainder2 = gematria2 % 10;
		gematria2 = remainder2 + product2;}
		}
      break;
    case 'AL-BaM':
		for (var i=0; i < input.length; i++){
			switch(input[i]){
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
				default:letter = input[i]; break; // Keep original character if not found
			}
			textEncrypted += letter;
			// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
			if(i+1 == input.length){
				switch(letter){
					/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
					/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
					/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
					/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
					/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
					default:letter = "";break;
				}
				textEncrypted += letter;
			}
		}
		if(gematriaSelect.value == "HaKlali"){
		gematria1 = gematria1*gematria1;
		gematria2 = gematria2*gematria2;
		}
		else if(gematriaSelect.value == "Kolel"){
		gematria1 += letterCount;
		gematria2 += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
		gematria1 += wordCount;
		gematria2 += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
		while(gematria1 >= 10){
		product1 = Math.floor(gematria1 / 10);
		remainder1 = gematria1 % 10;
		gematria1 = remainder1 + product1;}
		while(gematria2 >= 10){
		product2 = Math.floor(gematria2 / 10);
		remainder2 = gematria2 % 10;
		gematria2 = remainder2 + product2;}
		}
      break;
    case 'AT-BaSh':
		for (var i=0; i < input.length; i++){
			switch(input[i]){
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
				default:letter = input[i]; break; // Keep original character if not found
			}
			textEncrypted += letter;
	// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
	if(i+1 == input.length){
		switch(letter){
			/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
			/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
			/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
			/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
			/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
			default:letter = "";break;
		}
		textEncrypted += letter;
	}
	}
		if(gematriaSelect.value == "HaKlali"){
		gematria1 = gematria1*gematria1;
		gematria2 = gematria2*gematria2;
		}
		else if(gematriaSelect.value == "Kolel"){
		gematria1 += letterCount;
		gematria2 += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
		gematria1 += wordCount;
		gematria2 += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
		while(gematria1 >= 10){
		product1 = Math.floor(gematria1 / 10);
		remainder1 = gematria1 % 10;
		gematria1 = remainder1 + product1;}
		while(gematria2 >= 10){
		product2 = Math.floor(gematria2 / 10);
		remainder2 = gematria2 % 10;
		gematria2 = remainder2 + product2;}
		}
      break;
	case 'ACh-BI':
		for (var i=0; i < input.length; i++){
			switch(input[i]){
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
				default:letter = input[i]; break; // Keep original character if not found
			}
			textEncrypted += letter;
			// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
			if(i+1 == input.length){
				switch(letter){
				/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
				/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
				/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
				/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
				/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
				default:letter = "";break;
				}
				textEncrypted += letter;
			}
		}
		if(gematriaSelect.value == "HaKlali"){
		gematria1 = gematria1*gematria1;
		gematria2 = gematria2*gematria2;
		}
		else if(gematriaSelect.value == "Kolel"){
		gematria1 += letterCount;
		gematria2 += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
		gematria1 += wordCount;
		gematria2 += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
		while(gematria1 >= 10){
		product1 = Math.floor(gematria1 / 10);
		remainder1 = gematria1 % 10;
		gematria1 = remainder1 + product1;}
		while(gematria2 >= 10){
		product2 = Math.floor(gematria2 / 10);
		remainder2 = gematria2 % 10;
		gematria2 = remainder2 + product2;}
		}
      break;
    case 'AChaS-BeTA':
		for (var i=0; i < input.length; i++){
			switch(input[i]){
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
				default:letter = input[i]; break; // Keep original character if not found
			}
			textEncrypted += letter;
			// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
			if(i+1 == input.length){
				switch(letter){
					/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
					/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
					/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
					/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
					/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
					default:letter = "";break;
				}
				textEncrypted += letter;
			}
		}
		if(gematriaSelect.value == "HaKlali"){
		gematria1 = gematria1*gematria1;
		gematria2 = gematria2*gematria2;
		}
		else if(gematriaSelect.value == "Kolel"){
		gematria1 += letterCount;
		gematria2 += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
		gematria1 += wordCount;
		gematria2 += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
		while(gematria1 >= 10){
		product1 = Math.floor(gematria1 / 10);
		remainder1 = gematria1 % 10;
		gematria1 = remainder1 + product1;}
		while(gematria2 >= 10){
		product2 = Math.floor(gematria2 / 10);
		remainder2 = gematria2 % 10;
		gematria2 = remainder2 + product2;}
		}
      break;
    case 'AT-BaCh':
		for (var i=0; i < input.length; i++){
			switch(input[i]){
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
				default:letter = input[i]; break; // Keep original character if not found
			}
			textEncrypted += letter;
			// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
			if(i+1 == input.length){
				switch(letter){
					/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
					/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
					/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
					/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
					/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
					default:letter = "";break;
				}
				textEncrypted += letter;
			}
		}
		if(gematriaSelect.value == "HaKlali"){
		gematria1 = gematria1*gematria1;
		gematria2 = gematria2*gematria2;
		}
		else if(gematriaSelect.value == "Kolel"){
		gematria1 += letterCount;
		gematria2 += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
		gematria1 += wordCount;
		gematria2 += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
		while(gematria1 >= 10){
		product1 = Math.floor(gematria1 / 10);
		remainder1 = gematria1 % 10;
		gematria1 = remainder1 + product1;}
		while(gematria2 >= 10){
		product2 = Math.floor(gematria2 / 10);
		remainder2 = gematria2 % 10;
		gematria2 = remainder2 + product2;}
		}
      break;
	case 'AT-BaCh999':
		for (var i=0; i < input.length; i++){
			switch(input[i]){
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
				default:letter = input[i]; break; // Keep original character if not found
			}
			textEncrypted += letter;
			// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
			if(i+1 == input.length){
				switch(letter){
					/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
					/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
					/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
					/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
					/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
					default:letter = "";break;
				}
				textEncrypted += letter;
			}
		}
		if(gematriaSelect.value == "HaKlali"){
		gematria1 = gematria1*gematria1;
		gematria2 = gematria2*gematria2;
		}
		else if(gematriaSelect.value == "Kolel"){
		gematria1 += letterCount;
		gematria2 += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
		gematria1 += wordCount;
		gematria2 += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
		while(gematria1 >= 10){
		product1 = Math.floor(gematria1 / 10);
		remainder1 = gematria1 % 10;
		gematria1 = remainder1 + product1;}
		while(gematria2 >= 10){
		product2 = Math.floor(gematria2 / 10);
		remainder2 = gematria2 % 10;
		gematria2 = remainder2 + product2;}
		}
      break;
	case 'AiY-BaK':
		for (var i=0; i < input.length; i++){
			switch(input[i]){
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
			textEncrypted += letter;
			// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
			if(i+1 == input.length){
				switch(letter){
					/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
					/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
					/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
					/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
					/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
					default:letter = "";break;
				}
				textEncrypted += letter;
			}
		}
		if(gematriaSelect.value == "HaKlali"){
		gematria1 = gematria1*gematria1;
		gematria2 = gematria2*gematria2;
		}
		else if(gematriaSelect.value == "Kolel"){
		gematria1 += letterCount;
		gematria2 += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
		gematria1 += wordCount;
		gematria2 += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
		while(gematria1 >= 10){
		product1 = Math.floor(gematria1 / 10);
		remainder1 = gematria1 % 10;
		gematria1 = remainder1 + product1;}
		while(gematria2 >= 10){
		product2 = Math.floor(gematria2 / 10);
		remainder2 = gematria2 % 10;
		gematria2 = remainder2 + product2;}
		}
      break;
    case 'ATz-BaPh':
		for (var i=0; i < input.length; i++){
			switch(input[i]){
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
			textEncrypted += letter;
			// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
			if(i+1 == input.length){
				switch(letter){
					/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
					/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
					/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
					/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
					/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
					default:letter = "";break;
				}
				textEncrypted += letter;
			}
		}
		if(gematriaSelect.value == "HaKlali"){
		gematria1 = gematria1*gematria1;
		gematria2 = gematria2*gematria2;
		}
		else if(gematriaSelect.value == "Kolel"){
		gematria1 += letterCount;
		gematria2 += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
		gematria1 += wordCount;
		gematria2 += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
		while(gematria1 >= 10){
		product1 = Math.floor(gematria1 / 10);
		remainder1 = gematria1 % 10;
		gematria1 = remainder1 + product1;}
		while(gematria2 >= 10){
		product2 = Math.floor(gematria2 / 10);
		remainder2 = gematria2 % 10;
		gematria2 = remainder2 + product2;}
		}
      break;
    case 'AL-BeTh':
	for (var i=0; i < input.length; i++){
			switch(input[i]){
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
			textEncrypted += letter;
			// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
			if(i+1 == input.length){
				switch(letter){
					/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
					/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
					/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
					/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
					/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
					default:letter = "";break;
				}
				textEncrypted += letter;
			}
		}
		if(gematriaSelect.value == "HaKlali"){
		gematria1 = gematria1*gematria1;
		gematria2 = gematria2*gematria2;
		}
		else if(gematriaSelect.value == "Kolel"){
		gematria1 += letterCount;
		gematria2 += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
		gematria1 += wordCount;
		gematria2 += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
		while(gematria1 >= 10){
		product1 = Math.floor(gematria1 / 10);
		remainder1 = gematria1 % 10;
		gematria1 = remainder1 + product1;}
		while(gematria2 >= 10){
		product2 = Math.floor(gematria2 / 10);
		remainder2 = gematria2 % 10;
		gematria2 = remainder2 + product2;}
		}
      break;
    case 'Ofanim':
		for (var i=0; i < input.length; i++){
			switch(input[i]){
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
			textEncrypted += letter;
			// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
			if(i+1 == input.length){
				switch(letter){
					/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
					/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
					/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
					/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
					/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
					default:letter = "";break;
				}
				textEncrypted += letter;
			}
		}
		if(gematriaSelect.value == "HaKlali"){
		gematria1 = gematria1*gematria1;
		gematria2 = gematria2*gematria2;
		}
		else if(gematriaSelect.value == "Kolel"){
		gematria1 += letterCount;
		gematria2 += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
		gematria1 += wordCount;
		gematria2 += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
		while(gematria1 >= 10){
		product1 = Math.floor(gematria1 / 10);
		remainder1 = gematria1 % 10;
		gematria1 = remainder1 + product1;}
		while(gematria2 >= 10){
		product2 = Math.floor(gematria2 / 10);
		remainder2 = gematria2 % 10;
		gematria2 = remainder2 + product2;}
		}
	break;
	default: // Default to AT-BaSh
		for (var i=0; i < input.length; i++){
			switch(input[i]){
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
				default:letter = input[i]; break; // Keep original character if not found
			}
			textEncrypted += letter;
			// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
			if(i+1 == input.length){
				switch(letter){
					/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
					/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
					/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
					/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
					/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
					default:letter = "";break;
				}
				textEncrypted += letter;
			}
		}
		if(gematriaSelect.value == "HaKlali"){
		gematria1 = gematria1*gematria1;
		gematria2 = gematria2*gematria2;
		}
		else if(gematriaSelect.value == "Kolel"){
		gematria1 += letterCount;
		gematria2 += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
		gematria1 += wordCount;
		gematria2 += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
		while(gematria1 >= 10){
		product1 = Math.floor(gematria1 / 10);
		remainder1 = gematria1 % 10;
		gematria1 = remainder1 + product1;}
		while(gematria2 >= 10){
		product2 = Math.floor(gematria2 / 10);
		remainder2 = gematria2 % 10;
		gematria2 = remainder2 + product2;}
		}
	break;
  }
}
</script>

    <script>
        // Declair variables
        const openBtn = document.getElementById('openBtn');
        const fileInput = document.getElementById('fileInput');
        const fileSelect = document.getElementById('bookSelect');
        const gematriaSelect = document.getElementById('gematriaSelect');
        const encryptionSelect = document.getElementById('encryptionSelect');
        const removeSelect = document.getElementById('removeSelect');
        const calculateBtn = document.getElementById('calculateBtn');
        //const copyBtn = document.getElementById('copyBtn');
		const directionBtn = document.getElementById('directionBtn');
		const wrapBtn = document.getElementById('wrapBtn');
		const lightmodeBtn = document.getElementById('lightmodeBtn');
        const matchBtn = document.getElementById('matchBtn');
        const translateBtn = document.getElementById('translateBtn');
        const printBtn = document.getElementById('printBtn');
        const exportBtn = document.getElementById('exportBtn');
        const clearBtn = document.getElementById('clearBtn');
		const app1Btn = document.getElementById('app1Btn');
        const helpBtn = document.getElementById('helpBtn');
        const textArea = document.getElementById('textArea');
        const statusBar = document.getElementById('statusBar');

        // The Open button's functionality
			function openFiles() {
			let baseURL = '';
			const protocol = window.location.protocol === 'https:' ? 'https://' : 'http://';	// Check if the protocol is HTTPS or HTTP
			baseURL += protocol;																// Add the protocol to the baseURL variable
			baseURL += window.location.hostname;												// Add the domain name to the baseURL variable
			//baseURL += window.location.pathname;												// Add the current path to the baseURL variable
			const defaultPath = baseURL + '/gemacrypt/files/books/';									// Sets the default path when the Open button is clicked to /gemacrypt/files/books/ directory
			fileInput.setAttribute('nwworkingdir', defaultPath);								// Set the default working directory to open to contained in variable defaultPath.
			fileInput.click();
		}
		openBtn.addEventListener('mouseup',  openFiles);
		openBtn.addEventListener('touchend', openFiles);

        // File input change event listener.  Allows new text to be appended to the end of current text when using the Open button
        fileInput.addEventListener('change', () => {
            const files = fileInput.files;
            let fileText = '';
            for (let file of files) {
                const reader = new FileReader();
                reader.onload = () => {
                    fileText += reader.result + '\n\n';
                    textArea.textContent += reader.result;
                };
                reader.readAsText(file);
            }
        });

        // Select change event listener.  
        fileSelect.addEventListener('change', () => {
            const files2 = Array.from(fileSelect.selectedOptions).map(option => option.value);
            const fileText2 = files2.map(file => {
                const reader2 = new FileReader2();
                return new Promise((resolve, reject) => {
                    reader2.onload = () => resolve(reader2.result);
                    reader2.onerror = reject;
                    reader2.readAsText(`./files2/${file}.txt`);
                });
            });
            Promise.all(fileText2).then(texts => {
                const resultText = texts.join('\n\n');
                textArea.textContent += '\n\n' + resultText;
            });
        });

		// Remove functionality if "Niqqud" is selected, change event listener
		removeSelect.addEventListener('change', () => {
			const selectedValue = removeSelect.value;
			if (selectedValue === 'Niqqud') {
				const textAreaContent = textArea.textContent;
				const maqafDashMinus = /[\u05BE|­|-]/g; // if the maqaf dash or hyphen is used it is replaced with a space
				const noMaqafDashMinus = textAreaContent.replace(maqafDashMinus, ' ');
				const hebrewCharacters = /[\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF]/g; // except for new lines &&[^\u000A-\u000D\u0085\u2028\u2029\r\n]
				const noNiqqudContent = noMaqafDashMinus.replace(hebrewCharacters, '');
				textArea.textContent = noNiqqudContent;
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
			}
		});
		// Remove functionality if "Punctuation" is selected, change event listener
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'Punctuation') {
		        const textAreaContent = textArea.textContent;
		        const noPunctuationContent = textAreaContent.replace(/[.,!?\-;\*\(\)\[\]\u05C3]/g, '');
		        textArea.textContent = noPunctuationContent;
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});
		// Remove functionality if "Digits" are selected, change event listener, including colons and tabs for the verse indicators
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'Digits') {
		        const textAreaContent = textArea.textContent;
		        const noDigitsContent = textAreaContent
					.replace(/[\d,\u003A\u05C3\t]/g, '')	// remove Digits, commas, colons, Sof Pasuq (Hebrew colon) & tabs
					.replace(/\n{2,}/g, '\n') 				// removes a double or repeating New Line
					.replace(/\r{2,}/g, '\r');				// removes a double or repeating Carriage Return
		        textArea.textContent = noDigitsContent;
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});
		// Remove functionality if "Spaces" are selected, change event listener
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'Spaces') {
		        const textAreaContent = textArea.textContent;
		        const noSpacesContent = textAreaContent.replace(/[^\S\r\n]+/g, '');
		        textArea.textContent = noSpacesContent;
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});
		// Remove functionality if "Spaces" are selected, change event listener
				removeSelect.addEventListener('change', () => {
			const selectedValue = removeSelect.value;
			if (selectedValue === 'CarriageReturns') {
				const textAreaContent = textArea.textContent;
				const noCarriageReturnsContent = textAreaContent.replace(/(\r\n|\n|\r)/gm, '');
				textArea.textContent = noCarriageReturnsContent;
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option

					textArea.classList.add('horizontalScroll'); // add the class to show horizontal scrollbar for browsers that do not wrap text to the text field.
			} else {
					textArea.classList.remove('horizontalScroll'); // remove the class when another option is selected
			}
		});
		// Remove functionality if "LatinLetters" are selected, change event listener
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'LatinLetters') {
		        const textAreaContent = textArea.textContent;
		        const noLatinLettersContent = textAreaContent.replace(/[a-zA-Z\uAB30–\uAB6F\uAB65)(]/g, '');
		        textArea.textContent = noLatinLettersContent;
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});
		// Remove functionality if "GreekLetters" are selected, change event listener
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'GreekLetters') {
		        const textAreaContent = textArea.textContent;
		        const noGreekLettersContent = textAreaContent.replace(/[\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF&&[^0-9]]/g, '');
		        textArea.textContent = noGreekLettersContent;
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});
		// Remove functionality if "HebrewLetters" are selected, change event listener
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'HebrewLetters') {
		        const textAreaContent = textArea.textContent;
		        const noHebrewLettersContent = textAreaContent.replace(/[\u0590-\u05FF]/g, '');
		        textArea.textContent = noHebrewLettersContent;
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});	
		// Remove functionality if "Alt Word #1" are selected, change event listener.  This is the original word traditionally found in the Old Testament.
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'AltWord1') {
		        const textAreaContent = textArea.textContent;
				const noAltWord1Content = textAreaContent.replace(new RegExp(`(?<!\\u002A)\\u002A(?!\\u002A)[^ ]* ?`, 'g'), '');	// Removes any single * and any characters that follow it until the first space it reaches, and also removes the space, then stops. 
		        textArea.textContent = noAltWord1Content;
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});	
		// Remove functionality if "Alt Word #2" are selected, change event listener.  This is the word having the same meaning, but a slightly different spelling found later in the Dead Sea Scrolls, and therefore a different Gematria value. 
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'AltWord2') {
		        const textAreaContent = textArea.textContent;
		        const noAltWord2Content = textAreaContent.replace(new RegExp(`(?<!\\u2055)\\u2055(?!\\u2055)[^ ]* ?`, 'g'), '');	// Replaces anything inbetween a 'flower punctuation mark ⁕' and the next following space.
				//const noAltWord2Content = textAreaContent.replace(/\u002A\u002A[^ ]* ?/g, '\u002A\u002A').replace(/\u002A\u002A/g,'');	// Replaces anything inbetween a double ** and the next following space. 
		        textArea.textContent = noAltWord2Content;
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});	

		//\S\s\r\n\d.:;,!*-|()+
        // Highlight text functionality
		let textHighlight = 'Highlight a phrase from the text below and then click any of the Toolbar buttons: \n\n Encrypt \n Calculate \n Translate.\n';
		textArea.addEventListener('touchend', () => {
		//function handleTextSelection() {
			const selection = window.getSelection();
			if (selection.toString().length > 0) {
				textHighlight = selection.toString();

				textTotal = 0;
				for (let i = 0; i < textHighlight.length; i++) {
					const char = textHighlight[i];
					switch (char) {
						case "\u05D0": textTotal += L01;	break;	//aleph		א
						case "\u05D1": textTotal += L02;	break;	//bet		ב
						case "\u05D2": textTotal += L03;	break;	//gimel		ג
						case "\u05D3": textTotal += L04;	break;	//dalet		ד
						case "\u05D4": textTotal += L05;	break;	//hey		ה
						case "\u05D5": textTotal += L06;	break;	//vav		ו
						case "\u05D6": textTotal += L07;	break;	//zayin		ז
						case "\u05D7": textTotal += L08;	break;	//chet		ח
						case "\u05D8": textTotal += L09;	break;	//tet		ט
						case "\u05D9": textTotal += L10;	break;	//yod		י
						case "\u05DB": textTotal += L11;	break;	//kaf		כ
						case "\u05DC": textTotal += L12;	break;	//lamed		ל
						case "\u05DE": textTotal += L13;	break;	//mem		מ
						case "\u05E0": textTotal += L14;	break;	//nun		נ
						case "\u05E1": textTotal += L15;	break;	//samech	ס
						case "\u05E2": textTotal += L16;	break;	//ayin		ע
						case "\u05E4": textTotal += L17;	break;	//pey		פ
						case "\u05E6": textTotal += L18;	break;	//tzadi		צ
						case "\u05E7": textTotal += L19;	break;	//kuf		ק
						case "\u05E8": textTotal += L20;	break;	//resh		ר
						case "\u05E9": textTotal += L21;	break;	//shin		ש
						case "\u05EA": textTotal += L22;	break;	//tav		ת
						case "\u05DA": textTotal += L23;	break;	//kaf F		ך
						case "\u05DD": textTotal += L24;	break;	//mem F		ם
						case "\u05DF": textTotal += L25;	break;	//nun F		ן
						case "\u05E3": textTotal += L26;	break;	//pey F		ף
						case "\u05E5": textTotal += L27;	break;	//tzadi F	ץ
						case "\u0386": textTotal += L01;	break;	//alpha		Ά
						case "\u0391": textTotal += L01;	break;	//alpha		Α
						case "\u03AC": textTotal += L01;	break;	//alpha		ά
						case "\u03B1": textTotal += L01;	break;	//alpha		α
						case "\u1D6A8":textTotal += L01;	break;	//alpha		𝚨
						case "\u1D6C2":textTotal += L01;	break;	//alpha		𝛂
						case "\u1D6E2":textTotal += L01;	break;	//alpha		𝛢
						case "\u1D6FC":textTotal += L01;	break;	//alpha		𝛼
						case "\u1D71C":textTotal += L01;	break;	//alpha		𝜜
						case "\u1D736":textTotal += L01;	break;	//alpha		𝜶
						case "\u1D756":textTotal += L01;	break;	//alpha		𝝖
						case "\u1D770":textTotal += L01;	break;	//alpha		𝝰
						case "\u1D790":textTotal += L01;	break;	//alpha		𝞐
						case "\u1D7AA":textTotal += L01;	break;	//alpha		𝞪
						case "\u1F00": textTotal += L01;	break;	//alpha		ἀ
						case "\u1F01": textTotal += L01;	break;	//alpha		ἁ
						case "\u1F02": textTotal += L01;	break;	//alpha		ἂ
						case "\u1F03": textTotal += L01;	break;	//alpha		ἃ
						case "\u1F04": textTotal += L01;	break;	//alpha		ἄ
						case "\u1F05": textTotal += L01;	break;	//alpha		ἅ
						case "\u1F06": textTotal += L01;	break;	//alpha		ἆ
						case "\u1F07": textTotal += L01;	break;	//alpha		ἇ
						case "\u1F08": textTotal += L01;	break;	//alpha		Ἀ
						case "\u1F09": textTotal += L01;	break;	//alpha		Ἁ
						case "\u1F0A": textTotal += L01;	break;	//alpha		Ἂ
						case "\u1F0B": textTotal += L01;	break;	//alpha		Ἃ
						case "\u1F0C": textTotal += L01;	break;	//alpha		Ἄ
						case "\u1F0D": textTotal += L01;	break;	//alpha		Ἅ
						case "\u1F0E": textTotal += L01;	break;	//alpha		Ἆ
						case "\u1F0F": textTotal += L01;	break;	//alpha		Ἇ
						case "\u1F70": textTotal += L01;	break;	//alpha		ὰ
						case "\u1F71": textTotal += L01;	break;	//alpha		ά
						case "\u1F80": textTotal += L01;	break;	//alpha		ᾀ
						case "\u1F81": textTotal += L01;	break;	//alpha		ᾁ
						case "\u1F82": textTotal += L01;	break;	//alpha		ᾂ
						case "\u1F83": textTotal += L01;	break;	//alpha		ᾃ
						case "\u1F84": textTotal += L01;	break;	//alpha		ᾄ
						case "\u1F85": textTotal += L01;	break;	//alpha		ᾅ
						case "\u1F86": textTotal += L01;	break;	//alpha		ᾆ
						case "\u1F87": textTotal += L01;	break;	//alpha		ᾇ
						case "\u1F88": textTotal += L01;	break;	//alpha		ᾈ
						case "\u1F89": textTotal += L01;	break;	//alpha		ᾉ
						case "\u1F8A": textTotal += L01;	break;	//alpha		ᾊ
						case "\u1F8B": textTotal += L01;	break;	//alpha		ᾋ
						case "\u1F8C": textTotal += L01;	break;	//alpha		ᾌ
						case "\u1F8D": textTotal += L01;	break;	//alpha		ᾍ
						case "\u1F8E": textTotal += L01;	break;	//alpha		ᾎ
						case "\u1F8F": textTotal += L01;	break;	//alpha		ᾏ
						case "\u1FB0": textTotal += L01;	break;	//alpha		ᾰ
						case "\u1FB1": textTotal += L01;	break;	//alpha		ᾱ
						case "\u1FB2": textTotal += L01;	break;	//alpha		ᾲ
						case "\u1FB3": textTotal += L01;	break;	//alpha		ᾳ
						case "\u1FB4": textTotal += L01;	break;	//alpha		ᾴ
						case "\u1FB6": textTotal += L01;	break;	//alpha		ᾶ
						case "\u1FB7": textTotal += L01;	break;	//alpha		ᾷ
						case "\u1FB8": textTotal += L01;	break;	//alpha		Ᾰ
						case "\u1FB9": textTotal += L01;	break;	//alpha		Ᾱ
						case "\u1FBA": textTotal += L01;	break;	//alpha		Ὰ
						case "\u1FBB": textTotal += L01;	break;	//alpha		Ά
						case "\u1FBC": textTotal += L01;	break;	//alpha		ᾼ
						case "\u0392": textTotal += L02;	break;	//beta		Β
						case "\u03B2": textTotal += L02;	break;	//beta		β
						case "\u03D0": textTotal += L02;	break;	//beta		ϐ
						case "\u1D5D": textTotal += L02;	break;	//beta		ᵝ
						case "\u1D66": textTotal += L02;	break;	//beta		ᵦ
						case "\u1D6A9":textTotal += L02;	break;	//beta		𝚩
						case "\u1D6C3":textTotal += L02;	break;	//beta		𝛃
						case "\u1D6E3":textTotal += L02;	break;	//beta		𝛣
						case "\u1D6FD":textTotal += L02;	break;	//beta		𝛽
						case "\u1D71D":textTotal += L02;	break;	//beta		𝜝
						case "\u1D737":textTotal += L02;	break;	//beta		𝜷
						case "\u1D757":textTotal += L02;	break;	//beta		𝝗
						case "\u1D771":textTotal += L02;	break;	//beta		𝝱
						case "\u1D791":textTotal += L02;	break;	//beta		𝞑
						case "\u1D7AB":textTotal += L02;	break;	//beta		𝞫
						case "\u0393": textTotal += L03;	break;	//gamma		Γ
						case "\u03B3": textTotal += L03;	break;	//gamma		γ
						case "\u213D": textTotal += L03;	break;	//gamma		ℽ
						case "\u213E": textTotal += L03;	break;	//gamma		ℾ
						case "\u1D26": textTotal += L03;	break;	//gamma		ᴦ
						case "\u1D5E": textTotal += L03;	break;	//gamma		ᵞ
						case "\u1D67": textTotal += L03;	break;	//gamma		ᵧ
						case "\u1D6AA":textTotal += L03;	break;	//gamma		𝚪
						case "\u1D6C4":textTotal += L03;	break;	//gamma		𝛄
						case "\u1D6E4":textTotal += L03;	break;	//gamma		𝛤
						case "\u1D6FE":textTotal += L03;	break;	//gamma		𝛾
						case "\u1D71E":textTotal += L03;	break;	//gamma		𝜞
						case "\u1D738":textTotal += L03;	break;	//gamma		𝜸
						case "\u1D758":textTotal += L03;	break;	//gamma		𝝘
						case "\u1D772":textTotal += L03;	break;	//gamma		𝝲
						case "\u1D792":textTotal += L03;	break;	//gamma		𝞒
						case "\u1D7AC":textTotal += L03;	break;	//gamma		𝞬
						case "\u0394": textTotal += L04;	break;	//delta		Δ
						case "\u03B4": textTotal += L04;	break;	//delta		δ
						case "\u1D5F": textTotal += L04;	break;	//delta		ᵟ
						case "\u1D6AB":textTotal += L04;	break;	//delta		𝚫
						case "\u1D6C5":textTotal += L04;	break;	//delta		𝛅
						case "\u1D6E5":textTotal += L04;	break;	//delta		𝛥
						case "\u1D6FF":textTotal += L04;	break;	//delta		𝛿
						case "\u1D71F":textTotal += L04;	break;	//delta		𝜟
						case "\u1D739":textTotal += L04;	break;	//delta		𝜹
						case "\u1D759":textTotal += L04;	break;	//delta		𝝙
						case "\u1D773":textTotal += L04;	break;	//delta		𝝳
						case "\u1D793":textTotal += L04;	break;	//delta		𝞓
						case "\u1D7AD":textTotal += L04;	break;	//delta		𝞭
						case "\u03AD": textTotal += L05;	break;	//epsilon	έ
						case "\u03B5": textTotal += L05;	break;	//epsilon	ε
						case "\u03F5": textTotal += L05;	break;	//epsilon	ϵ
						case "\u0395": textTotal += L05;	break;	//epsilon	Ε
						case "\u0388": textTotal += L05;	break;	//epsilon	Έ
						case "\u1D6AC":textTotal += L05;	break;	//epsilon	𝚬
						case "\u1D6C6":textTotal += L05;	break;	//epsilon	𝛆
						case "\u1D6DC":textTotal += L05;	break;	//epsilon	𝛜
						case "\u1D6E6":textTotal += L05;	break;	//epsilon	𝛦
						case "\u1D700":textTotal += L05;	break;	//epsilon	𝜀
						case "\u1D716":textTotal += L05;	break;	//epsilon	𝜖
						case "\u1D720":textTotal += L05;	break;	//epsilon	𝜠
						case "\u1D73A":textTotal += L05;	break;	//epsilon	𝜺
						case "\u1D750":textTotal += L05;	break;	//epsilon	𝝐
						case "\u1D75A":textTotal += L05;	break;	//epsilon	𝝚
						case "\u1D774":textTotal += L05;	break;	//epsilon	𝝴
						case "\u1D78A":textTotal += L05;	break;	//epsilon	𝞊
						case "\u1D794":textTotal += L05;	break;	//epsilon	𝞔
						case "\u1D7AE":textTotal += L05;	break;	//epsilon	𝞮
						case "\u1D7C4":textTotal += L05;	break;	//epsilon	𝟄
						case "\u1F10": textTotal += L05;	break;	//epsilon	ἐ
						case "\u1F11": textTotal += L05;	break;	//epsilon	ἑ
						case "\u1F12": textTotal += L05;	break;	//epsilon	ἒ
						case "\u1F13": textTotal += L05;	break;	//epsilon	ἓ
						case "\u1F14": textTotal += L05;	break;	//epsilon	ἔ
						case "\u1F15": textTotal += L05;	break;	//epsilon	ἕ
						case "\u1F18": textTotal += L05;	break;	//epsilon	Ἐ
						case "\u1F19": textTotal += L05;	break;	//epsilon	Ἑ
						case "\u1F1A": textTotal += L05;	break;	//epsilon	Ἒ
						case "\u1F1B": textTotal += L05;	break;	//epsilon	Ἓ
						case "\u1F1C": textTotal += L05;	break;	//epsilon	Ἔ
						case "\u1F1D": textTotal += L05;	break;	//epsilon	Ἕ
						case "\u1F72": textTotal += L05;	break;	//epsilon	ὲ
						case "\u1F73": textTotal += L05;	break;	//epsilon	έ
						case "\u1FC8": textTotal += L05;	break;	//epsilon	Ὲ
						case "\u1FC9": textTotal += L05;	break;	//epsilon	Έ
						case "\u03DA": textTotal += L06;	break;	//stigma	Ϛ
						case "\u03DB": textTotal += L06;	break;	//stigma	ϛ
						case "\u03DC": textTotal += L06;	break;	//stigma	Ϝ
						case "\u03DD": textTotal += L06;	break;	//stigma	ϝ
						case "\u1D7CA":textTotal += L06;	break;	//stigma	𝟊
						case "\u1D7CB":textTotal += L06;	break;	//stigma	𝟋
						case "\u0376": textTotal += L06;	break;	//digamma	Ͷ
						case "\u0377": textTotal += L06;	break;	//digamma	ͷ
						case "\u0396": textTotal += L07;	break;	//zeta		Ζ
						case "\u03B6": textTotal += L07;	break;	//zeta		ζ
						case "\u1D6AD":textTotal += L07;	break;	//zeta		𝚭
						case "\u1D6C7":textTotal += L07;	break;	//zeta		𝛇
						case "\u1D6E7":textTotal += L07;	break;	//zeta		𝛧
						case "\u1D701":textTotal += L07;	break;	//zeta		𝜁
						case "\u1D721":textTotal += L07;	break;	//zeta		𝜡
						case "\u1D73B":textTotal += L07;	break;	//zeta		𝜻
						case "\u1D75B":textTotal += L07;	break;	//zeta		𝝛
						case "\u1D775":textTotal += L07;	break;	//zeta		𝝵
						case "\u1D795":textTotal += L07;	break;	//zeta		𝞕
						case "\u1D7AF":textTotal += L07;	break;	//zeta		𝞯
						case "\u03AE": textTotal += L08;	break;	//heta		ή
						case "\u0370": textTotal += L08;	break;	//heta		Ͱ
						case "\u0371": textTotal += L08;	break;	//heta		ͱ
						case "\u0389": textTotal += L08;	break;	//heta		Ή
						case "\u0397": textTotal += L08;	break;	//heta		Η
						case "\u03B7": textTotal += L08;	break;	//heta		η
						case "\u1D6AE":textTotal += L08;	break;	//heta		𝚮
						case "\u1D6C8":textTotal += L08;	break;	//heta		𝛈
						case "\u1D6E8":textTotal += L08;	break;	//heta		𝛨
						case "\u1D702":textTotal += L08;	break;	//heta		𝜂
						case "\u1D722":textTotal += L08;	break;	//heta		𝜢
						case "\u1D73C":textTotal += L08;	break;	//heta		𝜼
						case "\u1D75C":textTotal += L08;	break;	//heta		𝝜
						case "\u1D776":textTotal += L08;	break;	//heta		𝝶
						case "\u1D796":textTotal += L08;	break;	//heta		𝞖
						case "\u1D7B0":textTotal += L08;	break;	//heta		𝞰
						case "\u1F20": textTotal += L08;	break;	//heta		ἠ
						case "\u1F21": textTotal += L08;	break;	//heta		ἡ
						case "\u1F22": textTotal += L08;	break;	//heta		ἢ
						case "\u1F23": textTotal += L08;	break;	//heta		ἣ
						case "\u1F24": textTotal += L08;	break;	//heta		ἤ
						case "\u1F25": textTotal += L08;	break;	//heta		ἥ
						case "\u1F26": textTotal += L08;	break;	//heta		ἦ
						case "\u1F27": textTotal += L08;	break;	//heta		ἧ
						case "\u1F28": textTotal += L08;	break;	//heta		Ἠ
						case "\u1F29": textTotal += L08;	break;	//heta		Ἡ
						case "\u1F2A": textTotal += L08;	break;	//heta		Ἢ
						case "\u1F2B": textTotal += L08;	break;	//heta		Ἣ
						case "\u1F2C": textTotal += L08;	break;	//heta		Ἤ
						case "\u1F2D": textTotal += L08;	break;	//heta		Ἥ
						case "\u1F2E": textTotal += L08;	break;	//heta		Ἦ
						case "\u1F2F": textTotal += L08;	break;	//heta		Ἧ
						case "\u1F74": textTotal += L08;	break;	//heta		ὴ
						case "\u1F75": textTotal += L08;	break;	//heta		ή
						case "\u1F90": textTotal += L08;	break;	//heta		ᾐ
						case "\u1F91": textTotal += L08;	break;	//heta		ᾑ
						case "\u1F92": textTotal += L08;	break;	//heta		ᾒ
						case "\u1F93": textTotal += L08;	break;	//heta		ᾓ
						case "\u1F94": textTotal += L08;	break;	//heta		ᾔ
						case "\u1F95": textTotal += L08;	break;	//heta		ᾕ
						case "\u1F96": textTotal += L08;	break;	//heta		ᾖ
						case "\u1F97": textTotal += L08;	break;	//heta		ᾗ
						case "\u1F98": textTotal += L08;	break;	//heta		ᾘ
						case "\u1F99": textTotal += L08;	break;	//heta		ᾙ
						case "\u1F9A": textTotal += L08;	break;	//heta		ᾚ
						case "\u1F9B": textTotal += L08;	break;	//heta		ᾛ
						case "\u1F9C": textTotal += L08;	break;	//heta		ᾜ
						case "\u1F9D": textTotal += L08;	break;	//heta		ᾝ
						case "\u1F9E": textTotal += L08;	break;	//heta		ᾞ
						case "\u1F9F": textTotal += L08;	break;	//heta		ᾟ
						case "\u1FC2": textTotal += L08;	break;	//heta		ῂ
						case "\u1FC3": textTotal += L08;	break;	//heta		ῃ
						case "\u1FC4": textTotal += L08;	break;	//heta		ῄ
						case "\u1FC6": textTotal += L08;	break;	//heta		ῆ
						case "\u1FC7": textTotal += L08;	break;	//heta		ῇ
						case "\u1FCA": textTotal += L08;	break;	//heta		Ὴ
						case "\u1FCB": textTotal += L08;	break;	//heta		Ή
						case "\u1FCC": textTotal += L08;	break;	//heta		ῌ
						case "\u0398": textTotal += L09;	break;	//theta		Θ
						case "\u03B8": textTotal += L09;	break;	//theta		θ
						case "\u03D1": textTotal += L09;	break;	//theta		ϑ
						case "\u03F4": textTotal += L09;	break;	//theta		ϴ
						case "\u1D6AF":textTotal += L09;	break;	//theta		𝚯
						case "\u1D6B9":textTotal += L09;	break;	//theta		𝚹
						case "\u1D6C9":textTotal += L09;	break;	//theta		𝛉
						case "\u1D6DD":textTotal += L09;	break;	//theta		𝛝
						case "\u1D6E9":textTotal += L09;	break;	//theta		𝛩
						case "\u1D6F3":textTotal += L09;	break;	//theta		𝛳
						case "\u1D703":textTotal += L09;	break;	//theta		𝜃
						case "\u1D717":textTotal += L09;	break;	//theta		𝜗
						case "\u1D723":textTotal += L09;	break;	//theta		𝜣
						case "\u1D72D":textTotal += L09;	break;	//theta		𝜭
						case "\u1D73D":textTotal += L09;	break;	//theta		𝜽
						case "\u1D751":textTotal += L09;	break;	//theta		𝝑
						case "\u1D75D":textTotal += L09;	break;	//theta		𝝝
						case "\u1D767":textTotal += L09;	break;	//theta		𝝧
						case "\u1D777":textTotal += L09;	break;	//theta		𝝷
						case "\u1D78B":textTotal += L09;	break;	//theta		𝞋
						case "\u1D797":textTotal += L09;	break;	//theta		𝞗
						case "\u1D7A1":textTotal += L09;	break;	//theta		𝞡
						case "\u1D7B1":textTotal += L09;	break;	//theta		𝞱
						case "\u1D7C5":textTotal += L09;	break;	//theta		𝟅
						case "\u1DBF": textTotal += L09;	break;	//theta		ᶿ
						case "\u037A": textTotal += L10;	break;	//iota		ͺ
						case "\u038A": textTotal += L10;	break;	//iota		Ί
						case "\u0390": textTotal += L10;	break;	//iota		ΐ
						case "\u0399": textTotal += L10;	break;	//iota		Ι
						case "\u03AA": textTotal += L10;	break;	//iota		Ϊ
						case "\u03AF": textTotal += L10;	break;	//iota		ί
						case "\u03B9": textTotal += L10;	break;	//iota		ι
						case "\u03CA": textTotal += L10;	break;	//iota		ϊ
						case "\u1D6B0":textTotal += L10;	break;	//iota		𝚰
						case "\u1D6CA":textTotal += L10;	break;	//iota		𝛊
						case "\u1D6EA":textTotal += L10;	break;	//iota		𝛪
						case "\u1D704":textTotal += L10;	break;	//iota		𝜄
						case "\u1D724":textTotal += L10;	break;	//iota		𝜤
						case "\u1D73E":textTotal += L10;	break;	//iota		𝜾
						case "\u1D75E":textTotal += L10;	break;	//iota		𝝞
						case "\u1D778":textTotal += L10;	break;	//iota		𝝸
						case "\u1D798":textTotal += L10;	break;	//iota		𝞘
						case "\u1D7B2":textTotal += L10;	break;	//iota		𝞲
						case "\u1F30": textTotal += L10;	break;	//iota		ἰ
						case "\u1F31": textTotal += L10;	break;	//iota		ἱ
						case "\u1F32": textTotal += L10;	break;	//iota		ἲ
						case "\u1F33": textTotal += L10;	break;	//iota		ἳ
						case "\u1F34": textTotal += L10;	break;	//iota		ἴ
						case "\u1F35": textTotal += L10;	break;	//iota		ἵ
						case "\u1F36": textTotal += L10;	break;	//iota		ἶ
						case "\u1F37": textTotal += L10;	break;	//iota		ἷ
						case "\u1F38": textTotal += L10;	break;	//iota		Ἰ
						case "\u1F39": textTotal += L10;	break;	//iota		Ἱ
						case "\u1F3A": textTotal += L10;	break;	//iota		Ἲ
						case "\u1F3B": textTotal += L10;	break;	//iota		Ἳ
						case "\u1F3C": textTotal += L10;	break;	//iota		Ἴ
						case "\u1F3D": textTotal += L10;	break;	//iota		Ἵ
						case "\u1F3E": textTotal += L10;	break;	//iota		Ἶ
						case "\u1F3F": textTotal += L10;	break;	//iota		Ἷ
						case "\u1F76": textTotal += L10;	break;	//iota		ὶ
						case "\u1F77": textTotal += L10;	break;	//iota		ί
						case "\u1FBE": textTotal += L10;	break;	//iota		ι
						case "\u1FD0": textTotal += L10;	break;	//iota		ῐ
						case "\u1FD1": textTotal += L10;	break;	//iota		ῑ
						case "\u1FD2": textTotal += L10;	break;	//iota		ῒ
						case "\u1FD3": textTotal += L10;	break;	//iota		ΐ
						case "\u1FD6": textTotal += L10;	break;	//iota		ῖ
						case "\u1FD7": textTotal += L10;	break;	//iota		ῗ
						case "\u1FD8": textTotal += L10;	break;	//iota		Ῐ
						case "\u1FD9": textTotal += L10;	break;	//iota		Ῑ
						case "\u1FDA": textTotal += L10;	break;	//iota		Ὶ
						case "\u1FDB": textTotal += L10;	break;	//iota		Ί
						case "\u037F": textTotal += L10;	break;	//yot		Ϳ
						case "\u03F3": textTotal += L10;	break;	//yot		ϳ
						case "\u039A": textTotal += L11;	break;	//kappa		Κ
						case "\u03BA": textTotal += L11;	break;	//kappa		κ
						case "\u03CF": textTotal += L11;	break;	//kappa		Ϗ
						case "\u03D7": textTotal += L11;	break;	//kappa		ϗ
						case "\u03F0": textTotal += L11;	break;	//kappa		ϰ
						case "\u1D6B1":textTotal += L11;	break;	//kappa		𝚱
						case "\u1D6CB":textTotal += L11;	break;	//kappa		𝛋
						case "\u1D6DE":textTotal += L11;	break;	//kappa		𝛞
						case "\u1D6EB":textTotal += L11;	break;	//kappa		𝛫
						case "\u1D705":textTotal += L11;	break;	//kappa		𝜅
						case "\u1D718":textTotal += L11;	break;	//kappa		𝜘
						case "\u1D725":textTotal += L11;	break;	//kappa		𝜥
						case "\u1D73F":textTotal += L11;	break;	//kappa		𝜿
						case "\u1D752":textTotal += L11;	break;	//kappa		𝝒
						case "\u1D75F":textTotal += L11;	break;	//kappa		𝝟
						case "\u1D779":textTotal += L11;	break;	//kappa		𝝹
						case "\u1D78C":textTotal += L11;	break;	//kappa		𝞌
						case "\u1D799":textTotal += L11;	break;	//kappa		𝞙
						case "\u1D7B3":textTotal += L11;	break;	//kappa		𝞳
						case "\u1D7C6":textTotal += L11;	break;	//kappa		𝟆
						case "\u039B": textTotal += L12;	break;	//lambda	Λ
						case "\u03BB": textTotal += L12;	break;	//lambda	λ
						case "\u1D27": textTotal += L12;	break;	//lambda	ᴧ
						case "\u1D6B2":textTotal += L12;	break;	//lambda	𝚲
						case "\u1D6CC":textTotal += L12;	break;	//lambda	𝛌
						case "\u1D6EC":textTotal += L12;	break;	//lambda	𝛬
						case "\u1D706":textTotal += L12;	break;	//lambda	𝜆
						case "\u1D726":textTotal += L12;	break;	//lambda	𝜦
						case "\u1D740":textTotal += L12;	break;	//lambda	𝝀
						case "\u1D760":textTotal += L12;	break;	//lambda	𝝠
						case "\u1D77A":textTotal += L12;	break;	//lambda	𝝺
						case "\u1D79A":textTotal += L12;	break;	//lambda	𝞚
						case "\u1D7B4":textTotal += L12;	break;	//lambda	𝞴
						case "\u00B5": textTotal += L13;	break;	//mu		µ
						case "\u039C": textTotal += L13;	break;	//mu		Μ
						case "\u03BC": textTotal += L13;	break;	//mu		μ
						case "\u3382": textTotal += L13;	break;	//mu		㎂
						case "\u338C": textTotal += L13;	break;	//mu		㎌
						case "\u338D": textTotal += L13;	break;	//mu		㎍
						case "\u3395": textTotal += L13;	break;	//mu		㎕
						case "\u339B": textTotal += L13;	break;	//mu		㎛
						case "\u33B2": textTotal += L13;	break;	//mu		㎲
						case "\u33B6": textTotal += L13;	break;	//mu		㎶
						case "\u33BC": textTotal += L13;	break;	//mu		㎼
						case "\u1D6B3":textTotal += L13;	break;	//mu		𝚳
						case "\u1D6CD":textTotal += L13;	break;	//mu		𝛍
						case "\u1D6ED":textTotal += L13;	break;	//mu		𝛭
						case "\u1D707":textTotal += L13;	break;	//mu		𝜇
						case "\u1D727":textTotal += L13;	break;	//mu		𝜧
						case "\u1D741":textTotal += L13;	break;	//mu		𝝁
						case "\u1D761":textTotal += L13;	break;	//mu		𝝡
						case "\u1D77B":textTotal += L13;	break;	//mu		𝝻
						case "\u1D7B5":textTotal += L13;	break;	//mu		𝞵
						case "\u039D": textTotal += L14;	break;	//nu		Ν
						case "\u03BD": textTotal += L14;	break;	//nu		ν
						case "\u1D6B4":textTotal += L14;	break;	//nu		𝚴
						case "\u1D6CE":textTotal += L14;	break;	//nu		𝛎
						case "\u1D6EE":textTotal += L14;	break;	//nu		𝛮
						case "\u1D708":textTotal += L14;	break;	//nu		𝜈
						case "\u1D728":textTotal += L14;	break;	//nu		𝜨
						case "\u1D742":textTotal += L14;	break;	//nu		𝝂
						case "\u1D762":textTotal += L14;	break;	//nu		𝝢
						case "\u1D77C":textTotal += L14;	break;	//nu		𝝼
						case "\u1D79C":textTotal += L14;	break;	//nu		𝞜
						case "\u1D7B6":textTotal += L14;	break;	//nu		𝞶
						case "\u039E": textTotal += L15;	break;	//xi		Ξ
						case "\u03BE": textTotal += L15;	break;	//xi		ξ
						case "\u1D6B5":textTotal += L15;	break;	//xi		𝚵
						case "\u1D6CF":textTotal += L15;	break;	//xi		𝛏
						case "\u1D6EF":textTotal += L15;	break;	//xi		𝛯
						case "\u1D709":textTotal += L15;	break;	//xi		𝜉
						case "\u1D729":textTotal += L15;	break;	//xi		𝜩
						case "\u1D743":textTotal += L15;	break;	//xi		𝝃
						case "\u1D763":textTotal += L15;	break;	//xi		𝝣
						case "\u1D77D":textTotal += L15;	break;	//xi		𝝽
						case "\u1D79D":textTotal += L15;	break;	//xi		𝞝
						case "\u1D7B6":textTotal += L15;	break;	//xi		𝞶
						case "\u038C": textTotal += L16;	break;	//omicron	Ό
						case "\u039F": textTotal += L16;	break;	//omicron	Ο
						case "\u03CC": textTotal += L16;	break;	//omicron	ό
						case "\u03BF": textTotal += L16;	break;	//omicron	ο
						case "\u1D6B6":textTotal += L16;	break;	//omicron	𝚶
						case "\u1D6D0":textTotal += L16;	break;	//omicron	𝛐
						case "\u1D6F0":textTotal += L16;	break;	//omicron	𝛰
						case "\u1D70A":textTotal += L16;	break;	//omicron	𝜊
						case "\u1D72A":textTotal += L16;	break;	//omicron	𝜪
						case "\u1D744":textTotal += L16;	break;	//omicron	𝝄
						case "\u1D764":textTotal += L16;	break;	//omicron	𝝤
						case "\u1D77E":textTotal += L16;	break;	//omicron	𝝾
						case "\u1D79E":textTotal += L16;	break;	//omicron	𝞞
						case "\u1D7B8":textTotal += L16;	break;	//omicron	𝞸
						case "\u1F40": textTotal += L16;	break;	//omicron	ὀ
						case "\u1F41": textTotal += L16;	break;	//omicron	ὁ
						case "\u1F42": textTotal += L16;	break;	//omicron	ὂ
						case "\u1F43": textTotal += L16;	break;	//omicron	ὃ
						case "\u1F44": textTotal += L16;	break;	//omicron	ὄ
						case "\u1F45": textTotal += L16;	break;	//omicron	ὅ
						case "\u1F48": textTotal += L16;	break;	//omicron	Ὀ
						case "\u1F49": textTotal += L16;	break;	//omicron	Ὁ
						case "\u1F4A": textTotal += L16;	break;	//omicron	Ὂ
						case "\u1F4B": textTotal += L16;	break;	//omicron	Ὃ
						case "\u1F4C": textTotal += L16;	break;	//omicron	Ὄ
						case "\u1F4D": textTotal += L16;	break;	//omicron	Ὅ
						case "\u1F78": textTotal += L16;	break;	//omicron	ὸ
						case "\u1F79": textTotal += L16;	break;	//omicron	ό
						case "\u1FF8": textTotal += L16;	break;	//omicron	Ὸ
						case "\u1FF9": textTotal += L16;	break;	//omicron	Ό
						case "\u03A0": textTotal += L17;	break;	//pi		Π
						case "\u03C0": textTotal += L17;	break;	//pi		π
						case "\u03D6": textTotal += L17;	break;	//pi		ϖ
						case "\u213C": textTotal += L17;	break;	//pi		ℼ
						case "\u213F": textTotal += L17;	break;	//pi		ℿ
						case "\u1D28": textTotal += L17;	break;	//pi		ᴨ
						case "\u1D6B7":textTotal += L17;	break;	//pi		𝚷
						case "\u1D6D1":textTotal += L17;	break;	//pi		𝛑
						case "\u1D6E1":textTotal += L17;	break;	//pi		𝛡
						case "\u1D6F1":textTotal += L17;	break;	//pi		𝛱
						case "\u1D70B":textTotal += L17;	break;	//pi		𝜋
						case "\u1D71B":textTotal += L17;	break;	//pi		𝜛
						case "\u1D72B":textTotal += L17;	break;	//pi		𝜫
						case "\u1D745":textTotal += L17;	break;	//pi		𝝅
						case "\u1D755":textTotal += L17;	break;	//pi		𝝕
						case "\u1D765":textTotal += L17;	break;	//pi		𝝥
						case "\u1D77F":textTotal += L17;	break;	//pi		𝝿
						case "\u1D78F":textTotal += L17;	break;	//pi		𝞏
						case "\u1D79F":textTotal += L17;	break;	//pi		𝞟
						case "\u1D7B9":textTotal += L17;	break;	//pi		𝞹
						case "\u1D7C9":textTotal += L17;	break;	//pi		𝟉
						case "\u03D8": textTotal += L18;	break;	//koppa		Ϙ
						case "\u03D9": textTotal += L18;	break;	//koppa		ϙ
						case "\u03DE": textTotal += L18;	break;	//koppa		Ϟ
						case "\u03DF": textTotal += L18;	break;	//koppa		ϟ
						case "\u03A1": textTotal += L19;	break;	//rho		Ρ
						case "\u03C1": textTotal += L19;	break;	//rho		ρ
						case "\u03F1": textTotal += L19;	break;	//rho		ϱ
						case "\u03FC": textTotal += L19;	break;	//rho		ϼ
						case "\u1D29": textTotal += L19;	break;	//rho		ᴩ
						case "\u1D68": textTotal += L19;	break;	//rho		ᵨ
						case "\u1FE4": textTotal += L19;	break;	//rho		ῤ
						case "\u1FE5": textTotal += L19;	break;	//rho		ῥ
						case "\u1FEC": textTotal += L19;	break;	//rho		Ῥ
						case "\u1D6B8":textTotal += L19;	break;	//rho		𝚸
						case "\u1D6D2":textTotal += L19;	break;	//rho		𝛒
						case "\u1D6E0":textTotal += L19;	break;	//rho		𝛠
						case "\u1D6F2":textTotal += L19;	break;	//rho		𝛲
						case "\u1D70C":textTotal += L19;	break;	//rho		𝜌
						case "\u1D71A":textTotal += L19;	break;	//rho		𝜚
						case "\u1D72C":textTotal += L19;	break;	//rho		𝜬
						case "\u1D746":textTotal += L19;	break;	//rho		𝝆
						case "\u1D754":textTotal += L19;	break;	//rho		𝝔
						case "\u1D766":textTotal += L19;	break;	//rho		𝝦
						case "\u1D780":textTotal += L19;	break;	//rho		𝞀
						case "\u1D78E":textTotal += L19;	break;	//rho		𝞎
						case "\u1D7A0":textTotal += L19;	break;	//rho		𝞠
						case "\u1D7BA":textTotal += L19;	break;	//rho		𝞺
						case "\u1D7C8":textTotal += L19;	break;	//rho		𝟈
						case "\u03C2": textTotal += L20;	break;	//sigma		ς
						case "\u03C3": textTotal += L20;	break;	//sigma		σ
						case "\u03F2": textTotal += L20;	break;	//sigma		ϲ
						case "\u037B": textTotal += L20;	break;	//sigma		ͻ
						case "\u037C": textTotal += L20;	break;	//sigma		ͼ
						case "\u037D": textTotal += L20;	break;	//sigma		ͽ
						case "\u03A3": textTotal += L20;	break;	//sigma		Σ
						case "\u03F9": textTotal += L20;	break;	//sigma		Ϲ
						case "\u03FD": textTotal += L20;	break;	//sigma		Ͻ
						case "\u03FE": textTotal += L20;	break;	//sigma		Ͼ
						case "\u03FF": textTotal += L20;	break;	//sigma		Ͽ
						case "\u1D6BA":textTotal += L20;	break;	//sigma		𝚺
						case "\u1D6D3":textTotal += L20;	break;	//sigma		𝛓
						case "\u1D6D4":textTotal += L20;	break;	//sigma		𝛔
						case "\u1D6F4":textTotal += L20;	break;	//sigma		𝛴
						case "\u1D70D":textTotal += L20;	break;	//sigma		𝜍
						case "\u1D70E":textTotal += L20;	break;	//sigma		𝜎
						case "\u1D72E":textTotal += L20;	break;	//sigma		𝜮
						case "\u1D747":textTotal += L20;	break;	//sigma		𝝇
						case "\u1D748":textTotal += L20;	break;	//sigma		𝝈
						case "\u1D768":textTotal += L20;	break;	//sigma		𝝨
						case "\u1D781":textTotal += L20;	break;	//sigma		𝞁
						case "\u1D782":textTotal += L20;	break;	//sigma		𝞂
						case "\u1D7A2":textTotal += L20;	break;	//sigma		𝞢
						case "\u1D7BB":textTotal += L20;	break;	//sigma		𝞻
						case "\u1D7BC":textTotal += L20;	break;	//sigma		𝞼
						case "\u03FA": textTotal += L20;	break;	//san		Ϻ
						case "\u03FB": textTotal += L20;	break;	//san		ϻ
						case "\u03F7": textTotal += L20;	break;	//sho		Ϸ
						case "\u03F8": textTotal += L20;	break;	//sho		ϸ
						case "\u03A4": textTotal += L21;	break;	//tau		Τ
						case "\u03C4": textTotal += L21;	break;	//tau		τ
						case "\u1D6BB":textTotal += L21;	break;	//tau		𝚻
						case "\u1D6D5":textTotal += L21;	break;	//tau		𝛕
						case "\u1D6F5":textTotal += L21;	break;	//tau		𝛵
						case "\u1D72F":textTotal += L21;	break;	//tau		𝜯
						case "\u1D749":textTotal += L21;	break;	//tau		𝝉
						case "\u1D769":textTotal += L21;	break;	//tau		𝝩
						case "\u1D783":textTotal += L21;	break;	//tau		𝞃
						case "\u1D7A3":textTotal += L21;	break;	//tau		𝞣
						case "\u1D7BD":textTotal += L21;	break;	//tau		𝞽
						case "\u038E": textTotal += L22;	break;	//upsilon	Ύ
						case "\u03A5": textTotal += L22;	break;	//upsilon	Υ
						case "\u03AB": textTotal += L22;	break;	//upsilon	Ϋ
						case "\u03B0": textTotal += L22;	break;	//upsilon	ΰ
						case "\u03C5": textTotal += L22;	break;	//upsilon 	υ
						case "\u03CB": textTotal += L22;	break;	//upsilon 	ϋ
						case "\u03CD": textTotal += L22;	break;	//upsilon	ύ
						case "\u03D2": textTotal += L22;	break;	//upsilon	ϒ
						case "\u03D3": textTotal += L22;	break;	//upsilon	ϓ
						case "\u03D4": textTotal += L22;	break;	//upsilon	ϔ
						case "\u1D6BC":textTotal += L22;	break;	//upsilon	𝚼
						case "\u1D6D6":textTotal += L22;	break;	//upsilon	𝛖
						case "\u1D6F6":textTotal += L22;	break;	//upsilon	𝛶
						case "\u1D710":textTotal += L22;	break;	//upsilon	𝜐
						case "\u1D730":textTotal += L22;	break;	//upsilon	𝜰
						case "\u1D74A":textTotal += L22;	break;	//upsilon	𝝊
						case "\u1D76A":textTotal += L22;	break;	//upsilon	𝝪
						case "\u1D784":textTotal += L22;	break;	//upsilon	𝞄
						case "\u1D7A4":textTotal += L22;	break;	//upsilon	𝞤
						case "\u1D7BE":textTotal += L22;	break;	//upsilon	𝞾
						case "\u1F50": textTotal += L22;	break;	//upsilon	ὐ
						case "\u1F51": textTotal += L22;	break;	//upsilon	ὑ
						case "\u1F52": textTotal += L22;	break;	//upsilon	ὒ
						case "\u1F53": textTotal += L22;	break;	//upsilon	ὓ
						case "\u1F54": textTotal += L22;	break;	//upsilon	ὔ
						case "\u1F55": textTotal += L22;	break;	//upsilon	ὕ
						case "\u1F56": textTotal += L22;	break;	//upsilon	ὖ
						case "\u1F57": textTotal += L22;	break;	//upsilon	ὗ
						case "\u1F59": textTotal += L22;	break;	//upsilon	Ὑ
						case "\u1F5B": textTotal += L22;	break;	//upsilon	Ὓ
						case "\u1F5D": textTotal += L22;	break;	//upsilon	Ὕ
						case "\u1F5F": textTotal += L22;	break;	//upsilon	Ὗ
						case "\u1F7A": textTotal += L22;	break;	//upsilon	ὺ
						case "\u1F7B": textTotal += L22;	break;	//upsilon	ύ
						case "\u1FE0": textTotal += L22;	break;	//upsilon	ῠ
						case "\u1FE1": textTotal += L22;	break;	//upsilon	ῡ
						case "\u1FE2": textTotal += L22;	break;	//upsilon	ῢ
						case "\u1FE3": textTotal += L22;	break;	//upsilon	ΰ
						case "\u1FE6": textTotal += L22;	break;	//upsilon	ῦ
						case "\u1FE7": textTotal += L22;	break;	//upsilon	ῧ
						case "\u1FE8": textTotal += L22;	break;	//upsilon	Ῠ
						case "\u1FE9": textTotal += L22;	break;	//upsilon	Ῡ
						case "\u1FEB": textTotal += L22;	break;	//upsilon	Ύ
						case "\u03A6": textTotal += L23;	break;	//phi		Φ
						case "\u03C6": textTotal += L23;	break;	//phi		φ
						case "\u03C8": textTotal += L23;	break;	//phi		ψ
						case "\u03D5": textTotal += L23;	break;	//phi		ϕ
						case "\u1D60": textTotal += L23;	break;	//phi		ᵠ
						case "\u1D69": textTotal += L23;	break;	//phi		ᵩ
						case "\u1D6BD":textTotal += L23;	break;	//phi		𝚽
						case "\u1D6D7":textTotal += L23;	break;	//phi		𝛗
						case "\u1D6DF":textTotal += L23;	break;	//phi		𝛟
						case "\u1D6F7":textTotal += L23;	break;	//phi		𝛷
						case "\u1D711":textTotal += L23;	break;	//phi		𝜑
						case "\u1D719":textTotal += L23;	break;	//phi		𝜙
						case "\u1D731":textTotal += L23;	break;	//phi		𝜱
						case "\u1D74B":textTotal += L23;	break;	//phi		𝝋
						case "\u1D753":textTotal += L23;	break;	//phi		𝝓
						case "\u1D76B":textTotal += L23;	break;	//phi		𝝫
						case "\u1D785":textTotal += L23;	break;	//phi		𝞅
						case "\u1D78D":textTotal += L23;	break;	//phi		𝞍
						case "\u1D7A5":textTotal += L23;	break;	//phi		𝞥
						case "\u1D7BF":textTotal += L23;	break;	//phi		𝞿
						case "\u1D7C7":textTotal += L23;	break;	//phi		𝟇
						case "\u03A7": textTotal += L24;	break;	//chi		Χ
						case "\u03C7": textTotal += L24;	break;	//chi		χ
						case "\u1D61": textTotal += L24;	break;	//chi		ᵡ
						case "\u1D6A": textTotal += L24;	break;	//chi		ᵪ
						case "\u1D6BE":textTotal += L24;	break;	//chi		𝚾
						case "\u1D6D8":textTotal += L24;	break;	//chi		𝛘
						case "\u1D6F8":textTotal += L24;	break;	//chi		𝛸
						case "\u1D712":textTotal += L24;	break;	//chi		𝜒
						case "\u1D732":textTotal += L24;	break;	//chi		𝜲
						case "\u1D74C":textTotal += L24;	break;	//chi		𝝌
						case "\u1D76C":textTotal += L24;	break;	//chi		𝝬
						case "\u1D786":textTotal += L24;	break;	//chi		𝞆
						case "\u1D7A6":textTotal += L24;	break;	//chi		𝞦
						case "\u1D7C0":textTotal += L24;	break;	//chi		𝟀
						case "\u03A8": textTotal += L25;	break;	//psi		Ψ
						case "\u03C8": textTotal += L25;	break;	//psi		ψ
						case "\u1D2A": textTotal += L25;	break;	//psi		ᴪ
						case "\u1D6BF":textTotal += L25;	break;	//psi		𝚿
						case "\u1D6D9":textTotal += L25;	break;	//psi		𝛙
						case "\u1D6F9":textTotal += L25;	break;	//psi		𝛹
						case "\u1D713":textTotal += L25;	break;	//psi		𝜓
						case "\u1D733":textTotal += L25;	break;	//psi		𝜳
						case "\u1D74D":textTotal += L25;	break;	//psi		𝝍
						case "\u1D76D":textTotal += L25;	break;	//psi		𝝭
						case "\u1D787":textTotal += L25;	break;	//psi		𝞇
						case "\u1D7A7":textTotal += L25;	break;	//psi		𝞧
						case "\u1D7C1":textTotal += L25;	break;	//psi		𝟁
						case "\u038F": textTotal += L26;	break;	//omega		Ώ
						case "\u03A9": textTotal += L26;	break;	//omega		Ω
						case "\u03C9": textTotal += L26;	break;	//omega		ω
						case "\u03CE": textTotal += L26;	break;	//omega		ώ
						case "\u1D6C0":textTotal += L26;	break;	//omega		𝛀
						case "\u1D6DA":textTotal += L26;	break;	//omega		𝛚
						case "\u1D6FA":textTotal += L26;	break;	//omega		𝛺
						case "\u1D714":textTotal += L26;	break;	//omega		𝜔
						case "\u1D734":textTotal += L26;	break;	//omega		𝜴
						case "\u1D74E":textTotal += L26;	break;	//omega		𝝎
						case "\u1D788":textTotal += L26;	break;	//omega		𝞈
						case "\u1D7C2":textTotal += L26;	break;	//omega		𝟂
						case "\u1D76E":textTotal += L26;	break;	//omega		𝝮
						case "\u1D7A8":textTotal += L26;	break;	//omega		𝞨
						case "\u1F60": textTotal += L26;	break;	//omega		ὠ
						case "\u1F61": textTotal += L26;	break;	//omega		ὡ
						case "\u1F62": textTotal += L26;	break;	//omega		ὢ
						case "\u1F63": textTotal += L26;	break;	//omega		ὣ
						case "\u1F64": textTotal += L26;	break;	//omega		ὤ
						case "\u1F65": textTotal += L26;	break;	//omega		ὥ
						case "\u1F66": textTotal += L26;	break;	//omega		ὦ
						case "\u1F67": textTotal += L26;	break;	//omega		ὧ
						case "\u1F68": textTotal += L26;	break;	//omega		Ὠ
						case "\u1F69": textTotal += L26;	break;	//omega		Ὡ
						case "\u1F6A": textTotal += L26;	break;	//omega		Ὢ
						case "\u1F6B": textTotal += L26;	break;	//omega		Ὣ
						case "\u1F6C": textTotal += L26;	break;	//omega		Ὤ
						case "\u1F6D": textTotal += L26;	break;	//omega		Ὥ
						case "\u1F6E": textTotal += L26;	break;	//omega		Ὦ
						case "\u1F6F": textTotal += L26;	break;	//omega		Ὧ
						case "\u1F7C": textTotal += L26;	break;	//omega		ὼ
						case "\u1F7D": textTotal += L26;	break;	//omega		ώ
						case "\u1FA0": textTotal += L26;	break;	//omega		ᾠ
						case "\u1FA1": textTotal += L26;	break;	//omega		ᾡ
						case "\u1FA2": textTotal += L26;	break;	//omega		ᾢ
						case "\u1FA3": textTotal += L26;	break;	//omega		ᾣ
						case "\u1FA4": textTotal += L26;	break;	//omega		ᾤ
						case "\u1FA5": textTotal += L26;	break;	//omega		ᾥ
						case "\u1FA6": textTotal += L26;	break;	//omega		ᾦ
						case "\u1FA7": textTotal += L26;	break;	//omega		ᾧ
						case "\u1FA8": textTotal += L26;	break;	//omega		ᾨ
						case "\u1FA9": textTotal += L26;	break;	//omega		ᾩ
						case "\u1FAA": textTotal += L26;	break;	//omega		ᾪ
						case "\u1FAB": textTotal += L26;	break;	//omega		ᾫ
						case "\u1FAC": textTotal += L26;	break;	//omega		ᾬ
						case "\u1FAD": textTotal += L26;	break;	//omega		ᾭ
						case "\u1FAE": textTotal += L26;	break;	//omega		ᾮ
						case "\u1FAF": textTotal += L26;	break;	//omega		ᾯ
						case "\u1FF2": textTotal += L26;	break;	//omega		ῲ
						case "\u1FF3": textTotal += L26;	break;	//omega		ῳ
						case "\u1FF4": textTotal += L26;	break;	//omega		ῴ
						case "\u1FF6": textTotal += L26;	break;	//omega		ῶ
						case "\u1FF7": textTotal += L26;	break;	//omega		ῷ
						case "\u1FFA": textTotal += L26;	break;	//omega		Ὼ
						case "\u1FFB": textTotal += L26;	break;	//omega		Ώ
						case "\u1FFC": textTotal += L26;	break;	//omega		ῼ
						case "\u2126": textTotal += L26;	break;	//omega		Ω
						case "\uAB65": textTotal += L26;	break;	//omega		ꭥ
						case "\u0372": textTotal += L27;	break;	//sampi		Ͳ
						case "\u0373": textTotal += L27;	break;	//sampi		ͳ
						case "\u03E0": textTotal += L27;	break;	//sampi		Ϡ
						case "\u03E1": textTotal += L27;	break;	//sampi		ϡ
						case "\u0041": textTotal += L01;	break;	//			A
						case "\u0061": textTotal += L01;	break;	//			a
						case "\u0042": textTotal += L02;	break;	//			B
						case "\u0062": textTotal += L02;	break;	//			b
						case "\u0043": textTotal += L03;	break;	//			C
						case "\u0063": textTotal += L03;	break;	//			c
						case "\u0044": textTotal += L04;	break;	//			D
						case "\u0064": textTotal += L04;	break;	//			d
						case "\u0045": textTotal += L05;	break;	//			E
						case "\u0065": textTotal += L05;	break;	//			e
						case "\u0046": textTotal += L06;	break;	//			F
						case "\u0066": textTotal += L06;	break;	//			f
						case "\u0047": textTotal += L07;	break;	//			G
						case "\u0067": textTotal += L07;	break;	//			g
						case "\u0048": textTotal += L08;	break;	//			H
						case "\u0068": textTotal += L08;	break;	//			h
						case "\u0049": textTotal += L09;	break;	//			I
						case "\u0069": textTotal += L09;	break;	//			i
						case "\u004A": textTotal += L10;	break;	//			J
						case "\u006A": textTotal += L10;	break;	//			j
						case "\u004B": textTotal += L11;	break;	//			K
						case "\u006B": textTotal += L11;	break;	//			k
						case "\u004C": textTotal += L12;	break;	//			L
						case "\u006C": textTotal += L12;	break;	//			l
						case "\u004D": textTotal += L13;	break;	//			M
						case "\u006D": textTotal += L13;	break;	//			m
						case "\u004E": textTotal += L14;	break;	//			N
						case "\u006E": textTotal += L14;	break;	//			n
						case "\u004F": textTotal += L15;	break;	//			O
						case "\u006F": textTotal += L15;	break;	//			o
						case "\u0050": textTotal += L16;	break;	//			P
						case "\u0070": textTotal += L16;	break;	//			p
						case "\u0051": textTotal += L17;	break;	//			Q
						case "\u0071": textTotal += L17;	break;	//			q
						case "\u0052": textTotal += L18;	break;	//			R
						case "\u0072": textTotal += L18;	break;	//			r
						case "\u0053": textTotal += L19;	break;	//			S
						case "\u0073": textTotal += L19;	break;	//			s
						case "\u0054": textTotal += L20;	break;	//			T
						case "\u0074": textTotal += L20;	break;	//			t
						case "\u0055": textTotal += L21;	break;	//			U
						case "\u0075": textTotal += L21;	break;	//			u
						case "\u0056": textTotal += L22;	break;	//			V
						case "\u0076": textTotal += L22;	break;	//			v
						case "\u0057": textTotal += L23;	break;	//			W
						case "\u0077": textTotal += L23;	break;	//			w
						case "\u0058": textTotal += L24;	break;	//			X
						case "\u0078": textTotal += L24;	break;	//			x
						case "\u0059": textTotal += L25;	break;	//			Y
						case "\u0079": textTotal += L25;	break;	//			y
						case "\u005A": textTotal += L26;	break;	//			Z
						case "\u007A": textTotal += L26;	break;	//			z
						default: break;
					}
				}
		    } else {
		        textHighlight = '';
		}

				if (encryptionSelect.value == "AYiK-BeCheR") {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
					for (var i=0; i < input.length; i++){
						switch(input[i]){
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
							default:letter = input[i]; break; // Keep original character if not found
						}
						textEncrypted += letter;
						// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
						if(i+1 == input.length){
							switch(letter){
								/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
								/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
								/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
								/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
								/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
								default:letter = "";break;
							}
							textEncrypted += letter;
						}
					}
					if(gematriaSelect.value == "HaKlali"){
					gematria1 = gematria1*gematria1;
					gematria2 = gematria2*gematria2;
					}
					else if(gematriaSelect.value == "Kolel"){
					gematria1 += letterCount;
					gematria2 += letterCount;
					}
					else if(gematriaSelect.value == "Kolel+1"){
					gematria1 += wordCount;
					gematria2 += wordCount;
					}
					else if (gematriaSelect.value == "IntegralReduced"){
					while(gematria1 >= 10){
					product1 = Math.floor(gematria1 / 10);
					remainder1 = gematria1 % 10;
					gematria1 = remainder1 + product1;}
					while(gematria2 >= 10){
					product2 = Math.floor(gematria2 / 10);
					remainder2 = gematria2 % 10;
					gematria2 = remainder2 + product2;}
					}
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="http://translate.google.com/#auto/en/${textEncrypted}" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else if (encryptionSelect.value == "AL-BaM") {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
					for (var i=0; i < input.length; i++){
						switch(input[i]){
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
							default:letter = input[i]; break; // Keep original character if not found
						}
						textEncrypted += letter;
						// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
						if(i+1 == input.length){
							switch(letter){
								/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
								/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
								/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
								/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
								/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
								default:letter = "";break;
							}
							textEncrypted += letter;
						}
					}
					if(gematriaSelect.value == "HaKlali"){
					gematria1 = gematria1*gematria1;
					gematria2 = gematria2*gematria2;
					}
					else if(gematriaSelect.value == "Kolel"){
					gematria1 += letterCount;
					gematria2 += letterCount;
					}
					else if(gematriaSelect.value == "Kolel+1"){
					gematria1 += wordCount;
					gematria2 += wordCount;
					}
					else if (gematriaSelect.value == "IntegralReduced"){
					while(gematria1 >= 10){
					product1 = Math.floor(gematria1 / 10);
					remainder1 = gematria1 % 10;
					gematria1 = remainder1 + product1;}
					while(gematria2 >= 10){
					product2 = Math.floor(gematria2 / 10);
					remainder2 = gematria2 % 10;
					gematria2 = remainder2 + product2;}
					}
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="http://translate.google.com/#auto/en/${textEncrypted}" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else if (encryptionSelect.value == "AT-BaSh") {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
					for (var i=0; i < input.length; i++){
						switch(input[i]){
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
							default:letter = input[i]; break; // Keep original character if not found
						}
						textEncrypted += letter;
				// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
				if(i+1 == input.length){
					switch(letter){
						/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
						/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
						/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
						/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
						/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
						default:letter = "";break;
					}
					textEncrypted += letter;
				}
				}
					if(gematriaSelect.value == "HaKlali"){
					gematria1 = gematria1*gematria1;
					gematria2 = gematria2*gematria2;
					}
					else if(gematriaSelect.value == "Kolel"){
					gematria1 += letterCount;
					gematria2 += letterCount;
					}
					else if(gematriaSelect.value == "Kolel+1"){
					gematria1 += wordCount;
					gematria2 += wordCount;
					}
					else if (gematriaSelect.value == "IntegralReduced"){
					while(gematria1 >= 10){
					product1 = Math.floor(gematria1 / 10);
					remainder1 = gematria1 % 10;
					gematria1 = remainder1 + product1;}
					while(gematria2 >= 10){
					product2 = Math.floor(gematria2 / 10);
					remainder2 = gematria2 % 10;
					gematria2 = remainder2 + product2;}
					}
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="http://translate.google.com/#auto/en/${textEncrypted}" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else if (encryptionSelect.value == "ACh-BI") {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
					for (var i=0; i < input.length; i++){
						switch(input[i]){
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
							default:letter = input[i]; break; // Keep original character if not found
						}
						textEncrypted += letter;
						// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
						if(i+1 == input.length){
							switch(letter){
							/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
							/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
							/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
							/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
							/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
							default:letter = "";break;
							}
							textEncrypted += letter;
						}
					}
					if(gematriaSelect.value == "HaKlali"){
					gematria1 = gematria1*gematria1;
					gematria2 = gematria2*gematria2;
					}
					else if(gematriaSelect.value == "Kolel"){
					gematria1 += letterCount;
					gematria2 += letterCount;
					}
					else if(gematriaSelect.value == "Kolel+1"){
					gematria1 += wordCount;
					gematria2 += wordCount;
					}
					else if (gematriaSelect.value == "IntegralReduced"){
					while(gematria1 >= 10){
					product1 = Math.floor(gematria1 / 10);
					remainder1 = gematria1 % 10;
					gematria1 = remainder1 + product1;}
					while(gematria2 >= 10){
					product2 = Math.floor(gematria2 / 10);
					remainder2 = gematria2 % 10;
					gematria2 = remainder2 + product2;}
					}
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="http://translate.google.com/#auto/en/${textEncrypted}" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else if (encryptionSelect.value == "AChaS-BeTA") {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
					for (var i=0; i < input.length; i++){
						switch(input[i]){
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
							default:letter = input[i]; break; // Keep original character if not found
						}
						textEncrypted += letter;
						// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
						if(i+1 == input.length){
							switch(letter){
								/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
								/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
								/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
								/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
								/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
								default:letter = "";break;
							}
							textEncrypted += letter;
						}
					}
					if(gematriaSelect.value == "HaKlali"){
					gematria1 = gematria1*gematria1;
					gematria2 = gematria2*gematria2;
					}
					else if(gematriaSelect.value == "Kolel"){
					gematria1 += letterCount;
					gematria2 += letterCount;
					}
					else if(gematriaSelect.value == "Kolel+1"){
					gematria1 += wordCount;
					gematria2 += wordCount;
					}
					else if (gematriaSelect.value == "IntegralReduced"){
					while(gematria1 >= 10){
					product1 = Math.floor(gematria1 / 10);
					remainder1 = gematria1 % 10;
					gematria1 = remainder1 + product1;}
					while(gematria2 >= 10){
					product2 = Math.floor(gematria2 / 10);
					remainder2 = gematria2 % 10;
					gematria2 = remainder2 + product2;}
					}
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="http://translate.google.com/#auto/en/${textEncrypted}" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else if (encryptionSelect.value == "AT-BaCh") {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
					for (var i=0; i < input.length; i++){
						switch(input[i]){
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
							default:letter = input[i]; break; // Keep original character if not found
						}
						textEncrypted += letter;
						// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
						if(i+1 == input.length){
							switch(letter){
								/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
								/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
								/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
								/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
								/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
								default:letter = "";break;
							}
							textEncrypted += letter;
						}
					}
					if(gematriaSelect.value == "HaKlali"){
					gematria1 = gematria1*gematria1;
					gematria2 = gematria2*gematria2;
					}
					else if(gematriaSelect.value == "Kolel"){
					gematria1 += letterCount;
					gematria2 += letterCount;
					}
					else if(gematriaSelect.value == "Kolel+1"){
					gematria1 += wordCount;
					gematria2 += wordCount;
					}
					else if (gematriaSelect.value == "IntegralReduced"){
					while(gematria1 >= 10){
					product1 = Math.floor(gematria1 / 10);
					remainder1 = gematria1 % 10;
					gematria1 = remainder1 + product1;}
					while(gematria2 >= 10){
					product2 = Math.floor(gematria2 / 10);
					remainder2 = gematria2 % 10;
					gematria2 = remainder2 + product2;}
					}
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="http://translate.google.com/#auto/en/${textEncrypted}" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else if (encryptionSelect.value == "AT-BaCh999") {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
					for (var i=0; i < input.length; i++){
						switch(input[i]){
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
							default:letter = input[i]; break; // Keep original character if not found
						}
						textEncrypted += letter;
						// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
						if(i+1 == input.length){
							switch(letter){
								/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
								/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
								/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
								/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
								/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
								default:letter = "";break;
							}
							textEncrypted += letter;
						}
					}
					if(gematriaSelect.value == "HaKlali"){
					gematria1 = gematria1*gematria1;
					gematria2 = gematria2*gematria2;
					}
					else if(gematriaSelect.value == "Kolel"){
					gematria1 += letterCount;
					gematria2 += letterCount;
					}
					else if(gematriaSelect.value == "Kolel+1"){
					gematria1 += wordCount;
					gematria2 += wordCount;
					}
					else if (gematriaSelect.value == "IntegralReduced"){
					while(gematria1 >= 10){
					product1 = Math.floor(gematria1 / 10);
					remainder1 = gematria1 % 10;
					gematria1 = remainder1 + product1;}
					while(gematria2 >= 10){
					product2 = Math.floor(gematria2 / 10);
					remainder2 = gematria2 % 10;
					gematria2 = remainder2 + product2;}
					}
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="http://translate.google.com/#auto/en/${textEncrypted}" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else if (encryptionSelect.value == "AiY-BaK") {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
					for (var i=0; i < input.length; i++){
						switch(input[i]){
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
						textEncrypted += letter;
						// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
						if(i+1 == input.length){
							switch(letter){
								/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
								/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
								/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
								/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
								/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
								default:letter = "";break;
							}
							textEncrypted += letter;
						}
					}
					if(gematriaSelect.value == "HaKlali"){
					gematria1 = gematria1*gematria1;
					gematria2 = gematria2*gematria2;
					}
					else if(gematriaSelect.value == "Kolel"){
					gematria1 += letterCount;
					gematria2 += letterCount;
					}
					else if(gematriaSelect.value == "Kolel+1"){
					gematria1 += wordCount;
					gematria2 += wordCount;
					}
					else if (gematriaSelect.value == "IntegralReduced"){
					while(gematria1 >= 10){
					product1 = Math.floor(gematria1 / 10);
					remainder1 = gematria1 % 10;
					gematria1 = remainder1 + product1;}
					while(gematria2 >= 10){
					product2 = Math.floor(gematria2 / 10);
					remainder2 = gematria2 % 10;
					gematria2 = remainder2 + product2;}
					}
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="http://translate.google.com/#auto/en/${textEncrypted}" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else if (encryptionSelect.value == "ATz-BaPh") {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
					for (var i=0; i < input.length; i++){
						switch(input[i]){
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
						textEncrypted += letter;
						// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
						if(i+1 == input.length){
							switch(letter){
								/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
								/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
								/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
								/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
								/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
								default:letter = "";break;
							}
							textEncrypted += letter;
						}
					}
					if(gematriaSelect.value == "HaKlali"){
					gematria1 = gematria1*gematria1;
					gematria2 = gematria2*gematria2;
					}
					else if(gematriaSelect.value == "Kolel"){
					gematria1 += letterCount;
					gematria2 += letterCount;
					}
					else if(gematriaSelect.value == "Kolel+1"){
					gematria1 += wordCount;
					gematria2 += wordCount;
					}
					else if (gematriaSelect.value == "IntegralReduced"){
					while(gematria1 >= 10){
					product1 = Math.floor(gematria1 / 10);
					remainder1 = gematria1 % 10;
					gematria1 = remainder1 + product1;}
					while(gematria2 >= 10){
					product2 = Math.floor(gematria2 / 10);
					remainder2 = gematria2 % 10;
					gematria2 = remainder2 + product2;}
					}
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="http://translate.google.com/#auto/en/${textEncrypted}" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else if (encryptionSelect.value == "AL-BeTh") {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
					for (var i=0; i < input.length; i++){
						switch(input[i]){
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
						textEncrypted += letter;
						// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
						if(i+1 == input.length){
							switch(letter){
								/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
								/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
								/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
								/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
								/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
								default:letter = "";break;
							}
							textEncrypted += letter;
						}
					}
					if(gematriaSelect.value == "HaKlali"){
					gematria1 = gematria1*gematria1;
					gematria2 = gematria2*gematria2;
					}
					else if(gematriaSelect.value == "Kolel"){
					gematria1 += letterCount;
					gematria2 += letterCount;
					}
					else if(gematriaSelect.value == "Kolel+1"){
					gematria1 += wordCount;
					gematria2 += wordCount;
					}
					else if (gematriaSelect.value == "IntegralReduced"){
					while(gematria1 >= 10){
					product1 = Math.floor(gematria1 / 10);
					remainder1 = gematria1 % 10;
					gematria1 = remainder1 + product1;}
					while(gematria2 >= 10){
					product2 = Math.floor(gematria2 / 10);
					remainder2 = gematria2 % 10;
					gematria2 = remainder2 + product2;}
					}
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="http://translate.google.com/#auto/en/${textEncrypted}" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else if (encryptionSelect.value == "Ofanim") {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
					for (var i=0; i < input.length; i++){
						switch(input[i]){
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
						textEncrypted += letter;
						// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
						if(i+1 == input.length){
							switch(letter){
								/*kaf*/		case "\u05DB":letter = "\u05DA";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L11;gematria2 += L23;break;	// kaf F
								/*mem*/		case "\u05DE":letter = "\u05DD";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L13;gematria2 += L24;break;	// mem F
								/*nun*/		case "\u05E0":letter = "\u05DF";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L14;gematria2 += L25;break;	// nun F
								/*pey*/		case "\u05E4":letter = "\u05E3";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L17;gematria2 += L26;break;	// pey F
								/*tzadi*/	case "\u05E6":letter = "\u05E5";textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1);gematria2 -= L18;gematria2 += L27;break;	// tzadi F
								default:letter = "";break;
							}
							textEncrypted += letter;
						}
					}
					if(gematriaSelect.value == "HaKlali"){
					gematria1 = gematria1*gematria1;
					gematria2 = gematria2*gematria2;
					}
					else if(gematriaSelect.value == "Kolel"){
					gematria1 += letterCount;
					gematria2 += letterCount;
					}
					else if(gematriaSelect.value == "Kolel+1"){
					gematria1 += wordCount;
					gematria2 += wordCount;
					}
					else if (gematriaSelect.value == "IntegralReduced"){
					while(gematria1 >= 10){
					product1 = Math.floor(gematria1 / 10);
					remainder1 = gematria1 % 10;
					gematria1 = remainder1 + product1;}
					while(gematria2 >= 10){
					product2 = Math.floor(gematria2 / 10);
					remainder2 = gematria2 % 10;
					gematria2 = remainder2 + product2;}
					}
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="http://translate.google.com/#auto/en/${textEncrypted}" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else if (encryptionSelect.value == "Encryption") {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
				if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="http://translate.google.com/#auto/en/${textEncrypted}" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
					// Add Switch cases for AT-BaSh
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="http://translate.google.com/#auto/en/${textEncrypted}" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}
				}

				var encryptedTotal = 0;
				for (let i = 0; i < textEncrypted.length; i++) {
					const char = textEncrypted[i];
					switch (char) {
						case "\u05D0": encryptedTotal += L01;	break;	//aleph		א
						case "\u05D1": encryptedTotal += L02;	break;	//bet		ב
						case "\u05D2": encryptedTotal += L03;	break;	//gimel		ג
						case "\u05D3": encryptedTotal += L04;	break;	//dalet		ד
						case "\u05D4": encryptedTotal += L05;	break;	//hey		ה
						case "\u05D5": encryptedTotal += L06;	break;	//vav		ו
						case "\u05D6": encryptedTotal += L07;	break;	//zayin		ז
						case "\u05D7": encryptedTotal += L08;	break;	//chet		ח
						case "\u05D8": encryptedTotal += L09;	break;	//tet		ט
						case "\u05D9": encryptedTotal += L10;	break;	//yod		י
						case "\u05DB": encryptedTotal += L11;	break;	//kaf		כ
						case "\u05DC": encryptedTotal += L12;	break;	//lamed		ל
						case "\u05DE": encryptedTotal += L13;	break;	//mem		מ
						case "\u05E0": encryptedTotal += L14;	break;	//nun		נ
						case "\u05E1": encryptedTotal += L15;	break;	//samech	ס
						case "\u05E2": encryptedTotal += L16;	break;	//ayin		ע
						case "\u05E4": encryptedTotal += L17;	break;	//pey		פ
						case "\u05E6": encryptedTotal += L18;	break;	//tzadi		צ
						case "\u05E7": encryptedTotal += L19;	break;	//kuf		ק
						case "\u05E8": encryptedTotal += L20;	break;	//resh		ר
						case "\u05E9": encryptedTotal += L21;	break;	//shin		ש
						case "\u05EA": encryptedTotal += L22;	break;	//tav		ת
						case "\u05DA": encryptedTotal += L23;	break;	//kaf F		ך
						case "\u05DD": encryptedTotal += L24;	break;	//mem F		ם
						case "\u05DF": encryptedTotal += L25;	break;	//nun F		ן
						case "\u05E3": encryptedTotal += L26;	break;	//pey F		ף
						case "\u05E5": encryptedTotal += L27;	break;	//tzadi F	ץ
						case "\u0386": encryptedTotal += L01;	break;	//alpha		Ά
						case "\u0391": encryptedTotal += L01;	break;	//alpha		Α
						case "\u03AC": encryptedTotal += L01;	break;	//alpha		ά
						case "\u03B1": encryptedTotal += L01;	break;	//alpha		α
						case "\u1D6A8":encryptedTotal += L01;	break;	//alpha		𝚨
						case "\u1D6C2":encryptedTotal += L01;	break;	//alpha		𝛂
						case "\u1D6E2":encryptedTotal += L01;	break;	//alpha		𝛢
						case "\u1D6FC":encryptedTotal += L01;	break;	//alpha		𝛼
						case "\u1D71C":encryptedTotal += L01;	break;	//alpha		𝜜
						case "\u1D736":encryptedTotal += L01;	break;	//alpha		𝜶
						case "\u1D756":encryptedTotal += L01;	break;	//alpha		𝝖
						case "\u1D770":encryptedTotal += L01;	break;	//alpha		𝝰
						case "\u1D790":encryptedTotal += L01;	break;	//alpha		𝞐
						case "\u1D7AA":encryptedTotal += L01;	break;	//alpha		𝞪
						case "\u1F00": encryptedTotal += L01;	break;	//alpha		ἀ
						case "\u1F01": encryptedTotal += L01;	break;	//alpha		ἁ
						case "\u1F02": encryptedTotal += L01;	break;	//alpha		ἂ
						case "\u1F03": encryptedTotal += L01;	break;	//alpha		ἃ
						case "\u1F04": encryptedTotal += L01;	break;	//alpha		ἄ
						case "\u1F05": encryptedTotal += L01;	break;	//alpha		ἅ
						case "\u1F06": encryptedTotal += L01;	break;	//alpha		ἆ
						case "\u1F07": encryptedTotal += L01;	break;	//alpha		ἇ
						case "\u1F08": encryptedTotal += L01;	break;	//alpha		Ἀ
						case "\u1F09": encryptedTotal += L01;	break;	//alpha		Ἁ
						case "\u1F0A": encryptedTotal += L01;	break;	//alpha		Ἂ
						case "\u1F0B": encryptedTotal += L01;	break;	//alpha		Ἃ
						case "\u1F0C": encryptedTotal += L01;	break;	//alpha		Ἄ
						case "\u1F0D": encryptedTotal += L01;	break;	//alpha		Ἅ
						case "\u1F0E": encryptedTotal += L01;	break;	//alpha		Ἆ
						case "\u1F0F": encryptedTotal += L01;	break;	//alpha		Ἇ
						case "\u1F70": encryptedTotal += L01;	break;	//alpha		ὰ
						case "\u1F71": encryptedTotal += L01;	break;	//alpha		ά
						case "\u1F80": encryptedTotal += L01;	break;	//alpha		ᾀ
						case "\u1F81": encryptedTotal += L01;	break;	//alpha		ᾁ
						case "\u1F82": encryptedTotal += L01;	break;	//alpha		ᾂ
						case "\u1F83": encryptedTotal += L01;	break;	//alpha		ᾃ
						case "\u1F84": encryptedTotal += L01;	break;	//alpha		ᾄ
						case "\u1F85": encryptedTotal += L01;	break;	//alpha		ᾅ
						case "\u1F86": encryptedTotal += L01;	break;	//alpha		ᾆ
						case "\u1F87": encryptedTotal += L01;	break;	//alpha		ᾇ
						case "\u1F88": encryptedTotal += L01;	break;	//alpha		ᾈ
						case "\u1F89": encryptedTotal += L01;	break;	//alpha		ᾉ
						case "\u1F8A": encryptedTotal += L01;	break;	//alpha		ᾊ
						case "\u1F8B": encryptedTotal += L01;	break;	//alpha		ᾋ
						case "\u1F8C": encryptedTotal += L01;	break;	//alpha		ᾌ
						case "\u1F8D": encryptedTotal += L01;	break;	//alpha		ᾍ
						case "\u1F8E": encryptedTotal += L01;	break;	//alpha		ᾎ
						case "\u1F8F": encryptedTotal += L01;	break;	//alpha		ᾏ
						case "\u1FB0": encryptedTotal += L01;	break;	//alpha		ᾰ
						case "\u1FB1": encryptedTotal += L01;	break;	//alpha		ᾱ
						case "\u1FB2": encryptedTotal += L01;	break;	//alpha		ᾲ
						case "\u1FB3": encryptedTotal += L01;	break;	//alpha		ᾳ
						case "\u1FB4": encryptedTotal += L01;	break;	//alpha		ᾴ
						case "\u1FB6": encryptedTotal += L01;	break;	//alpha		ᾶ
						case "\u1FB7": encryptedTotal += L01;	break;	//alpha		ᾷ
						case "\u1FB8": encryptedTotal += L01;	break;	//alpha		Ᾰ
						case "\u1FB9": encryptedTotal += L01;	break;	//alpha		Ᾱ
						case "\u1FBA": encryptedTotal += L01;	break;	//alpha		Ὰ
						case "\u1FBB": encryptedTotal += L01;	break;	//alpha		Ά
						case "\u1FBC": encryptedTotal += L01;	break;	//alpha		ᾼ
						case "\u0392": encryptedTotal += L02;	break;	//beta		Β
						case "\u03B2": encryptedTotal += L02;	break;	//beta		β
						case "\u03D0": encryptedTotal += L02;	break;	//beta		ϐ
						case "\u1D5D": encryptedTotal += L02;	break;	//beta		ᵝ
						case "\u1D66": encryptedTotal += L02;	break;	//beta		ᵦ
						case "\u1D6A9":encryptedTotal += L02;	break;	//beta		𝚩
						case "\u1D6C3":encryptedTotal += L02;	break;	//beta		𝛃
						case "\u1D6E3":encryptedTotal += L02;	break;	//beta		𝛣
						case "\u1D6FD":encryptedTotal += L02;	break;	//beta		𝛽
						case "\u1D71D":encryptedTotal += L02;	break;	//beta		𝜝
						case "\u1D737":encryptedTotal += L02;	break;	//beta		𝜷
						case "\u1D757":encryptedTotal += L02;	break;	//beta		𝝗
						case "\u1D771":encryptedTotal += L02;	break;	//beta		𝝱
						case "\u1D791":encryptedTotal += L02;	break;	//beta		𝞑
						case "\u1D7AB":encryptedTotal += L02;	break;	//beta		𝞫
						case "\u0393": encryptedTotal += L03;	break;	//gamma		Γ
						case "\u03B3": encryptedTotal += L03;	break;	//gamma		γ
						case "\u213D": encryptedTotal += L03;	break;	//gamma		ℽ
						case "\u213E": encryptedTotal += L03;	break;	//gamma		ℾ
						case "\u1D26": encryptedTotal += L03;	break;	//gamma		ᴦ
						case "\u1D5E": encryptedTotal += L03;	break;	//gamma		ᵞ
						case "\u1D67": encryptedTotal += L03;	break;	//gamma		ᵧ
						case "\u1D6AA":encryptedTotal += L03;	break;	//gamma		𝚪
						case "\u1D6C4":encryptedTotal += L03;	break;	//gamma		𝛄
						case "\u1D6E4":encryptedTotal += L03;	break;	//gamma		𝛤
						case "\u1D6FE":encryptedTotal += L03;	break;	//gamma		𝛾
						case "\u1D71E":encryptedTotal += L03;	break;	//gamma		𝜞
						case "\u1D738":encryptedTotal += L03;	break;	//gamma		𝜸
						case "\u1D758":encryptedTotal += L03;	break;	//gamma		𝝘
						case "\u1D772":encryptedTotal += L03;	break;	//gamma		𝝲
						case "\u1D792":encryptedTotal += L03;	break;	//gamma		𝞒
						case "\u1D7AC":encryptedTotal += L03;	break;	//gamma		𝞬
						case "\u0394": encryptedTotal += L04;	break;	//delta		Δ
						case "\u03B4": encryptedTotal += L04;	break;	//delta		δ
						case "\u1D5F": encryptedTotal += L04;	break;	//delta		ᵟ
						case "\u1D6AB":encryptedTotal += L04;	break;	//delta		𝚫
						case "\u1D6C5":encryptedTotal += L04;	break;	//delta		𝛅
						case "\u1D6E5":encryptedTotal += L04;	break;	//delta		𝛥
						case "\u1D6FF":encryptedTotal += L04;	break;	//delta		𝛿
						case "\u1D71F":encryptedTotal += L04;	break;	//delta		𝜟
						case "\u1D739":encryptedTotal += L04;	break;	//delta		𝜹
						case "\u1D759":encryptedTotal += L04;	break;	//delta		𝝙
						case "\u1D773":encryptedTotal += L04;	break;	//delta		𝝳
						case "\u1D793":encryptedTotal += L04;	break;	//delta		𝞓
						case "\u1D7AD":encryptedTotal += L04;	break;	//delta		𝞭
						case "\u03AD": encryptedTotal += L05;	break;	//epsilon	έ
						case "\u03B5": encryptedTotal += L05;	break;	//epsilon	ε
						case "\u03F5": encryptedTotal += L05;	break;	//epsilon	ϵ
						case "\u0395": encryptedTotal += L05;	break;	//epsilon	Ε
						case "\u0388": encryptedTotal += L05;	break;	//epsilon	Έ
						case "\u1D6AC":encryptedTotal += L05;	break;	//epsilon	𝚬
						case "\u1D6C6":encryptedTotal += L05;	break;	//epsilon	𝛆
						case "\u1D6DC":encryptedTotal += L05;	break;	//epsilon	𝛜
						case "\u1D6E6":encryptedTotal += L05;	break;	//epsilon	𝛦
						case "\u1D700":encryptedTotal += L05;	break;	//epsilon	𝜀
						case "\u1D716":encryptedTotal += L05;	break;	//epsilon	𝜖
						case "\u1D720":encryptedTotal += L05;	break;	//epsilon	𝜠
						case "\u1D73A":encryptedTotal += L05;	break;	//epsilon	𝜺
						case "\u1D750":encryptedTotal += L05;	break;	//epsilon	𝝐
						case "\u1D75A":encryptedTotal += L05;	break;	//epsilon	𝝚
						case "\u1D774":encryptedTotal += L05;	break;	//epsilon	𝝴
						case "\u1D78A":encryptedTotal += L05;	break;	//epsilon	𝞊
						case "\u1D794":encryptedTotal += L05;	break;	//epsilon	𝞔
						case "\u1D7AE":encryptedTotal += L05;	break;	//epsilon	𝞮
						case "\u1D7C4":encryptedTotal += L05;	break;	//epsilon	𝟄
						case "\u1F10": encryptedTotal += L05;	break;	//epsilon	ἐ
						case "\u1F11": encryptedTotal += L05;	break;	//epsilon	ἑ
						case "\u1F12": encryptedTotal += L05;	break;	//epsilon	ἒ
						case "\u1F13": encryptedTotal += L05;	break;	//epsilon	ἓ
						case "\u1F14": encryptedTotal += L05;	break;	//epsilon	ἔ
						case "\u1F15": encryptedTotal += L05;	break;	//epsilon	ἕ
						case "\u1F18": encryptedTotal += L05;	break;	//epsilon	Ἐ
						case "\u1F19": encryptedTotal += L05;	break;	//epsilon	Ἑ
						case "\u1F1A": encryptedTotal += L05;	break;	//epsilon	Ἒ
						case "\u1F1B": encryptedTotal += L05;	break;	//epsilon	Ἓ
						case "\u1F1C": encryptedTotal += L05;	break;	//epsilon	Ἔ
						case "\u1F1D": encryptedTotal += L05;	break;	//epsilon	Ἕ
						case "\u1F72": encryptedTotal += L05;	break;	//epsilon	ὲ
						case "\u1F73": encryptedTotal += L05;	break;	//epsilon	έ
						case "\u1FC8": encryptedTotal += L05;	break;	//epsilon	Ὲ
						case "\u1FC9": encryptedTotal += L05;	break;	//epsilon	Έ
						case "\u03DA": encryptedTotal += L06;	break;	//stigma	Ϛ
						case "\u03DB": encryptedTotal += L06;	break;	//stigma	ϛ
						case "\u03DC": encryptedTotal += L06;	break;	//stigma	Ϝ
						case "\u03DD": encryptedTotal += L06;	break;	//stigma	ϝ
						case "\u1D7CA":encryptedTotal += L06;	break;	//stigma	𝟊
						case "\u1D7CB":encryptedTotal += L06;	break;	//stigma	𝟋
						case "\u0376": encryptedTotal += L06;	break;	//digamma	Ͷ
						case "\u0377": encryptedTotal += L06;	break;	//digamma	ͷ
						case "\u0396": encryptedTotal += L07;	break;	//zeta		Ζ
						case "\u03B6": encryptedTotal += L07;	break;	//zeta		ζ
						case "\u1D6AD":encryptedTotal += L07;	break;	//zeta		𝚭
						case "\u1D6C7":encryptedTotal += L07;	break;	//zeta		𝛇
						case "\u1D6E7":encryptedTotal += L07;	break;	//zeta		𝛧
						case "\u1D701":encryptedTotal += L07;	break;	//zeta		𝜁
						case "\u1D721":encryptedTotal += L07;	break;	//zeta		𝜡
						case "\u1D73B":encryptedTotal += L07;	break;	//zeta		𝜻
						case "\u1D75B":encryptedTotal += L07;	break;	//zeta		𝝛
						case "\u1D775":encryptedTotal += L07;	break;	//zeta		𝝵
						case "\u1D795":encryptedTotal += L07;	break;	//zeta		𝞕
						case "\u1D7AF":encryptedTotal += L07;	break;	//zeta		𝞯
						case "\u03AE": encryptedTotal += L08;	break;	//heta		ή
						case "\u0370": encryptedTotal += L08;	break;	//heta		Ͱ
						case "\u0371": encryptedTotal += L08;	break;	//heta		ͱ
						case "\u0389": encryptedTotal += L08;	break;	//heta		Ή
						case "\u0397": encryptedTotal += L08;	break;	//heta		Η
						case "\u03B7": encryptedTotal += L08;	break;	//heta		η
						case "\u1D6AE":encryptedTotal += L08;	break;	//heta		𝚮
						case "\u1D6C8":encryptedTotal += L08;	break;	//heta		𝛈
						case "\u1D6E8":encryptedTotal += L08;	break;	//heta		𝛨
						case "\u1D702":encryptedTotal += L08;	break;	//heta		𝜂
						case "\u1D722":encryptedTotal += L08;	break;	//heta		𝜢
						case "\u1D73C":encryptedTotal += L08;	break;	//heta		𝜼
						case "\u1D75C":encryptedTotal += L08;	break;	//heta		𝝜
						case "\u1D776":encryptedTotal += L08;	break;	//heta		𝝶
						case "\u1D796":encryptedTotal += L08;	break;	//heta		𝞖
						case "\u1D7B0":encryptedTotal += L08;	break;	//heta		𝞰
						case "\u1F20": encryptedTotal += L08;	break;	//heta		ἠ
						case "\u1F21": encryptedTotal += L08;	break;	//heta		ἡ
						case "\u1F22": encryptedTotal += L08;	break;	//heta		ἢ
						case "\u1F23": encryptedTotal += L08;	break;	//heta		ἣ
						case "\u1F24": encryptedTotal += L08;	break;	//heta		ἤ
						case "\u1F25": encryptedTotal += L08;	break;	//heta		ἥ
						case "\u1F26": encryptedTotal += L08;	break;	//heta		ἦ
						case "\u1F27": encryptedTotal += L08;	break;	//heta		ἧ
						case "\u1F28": encryptedTotal += L08;	break;	//heta		Ἠ
						case "\u1F29": encryptedTotal += L08;	break;	//heta		Ἡ
						case "\u1F2A": encryptedTotal += L08;	break;	//heta		Ἢ
						case "\u1F2B": encryptedTotal += L08;	break;	//heta		Ἣ
						case "\u1F2C": encryptedTotal += L08;	break;	//heta		Ἤ
						case "\u1F2D": encryptedTotal += L08;	break;	//heta		Ἥ
						case "\u1F2E": encryptedTotal += L08;	break;	//heta		Ἦ
						case "\u1F2F": encryptedTotal += L08;	break;	//heta		Ἧ
						case "\u1F74": encryptedTotal += L08;	break;	//heta		ὴ
						case "\u1F75": encryptedTotal += L08;	break;	//heta		ή
						case "\u1F90": encryptedTotal += L08;	break;	//heta		ᾐ
						case "\u1F91": encryptedTotal += L08;	break;	//heta		ᾑ
						case "\u1F92": encryptedTotal += L08;	break;	//heta		ᾒ
						case "\u1F93": encryptedTotal += L08;	break;	//heta		ᾓ
						case "\u1F94": encryptedTotal += L08;	break;	//heta		ᾔ
						case "\u1F95": encryptedTotal += L08;	break;	//heta		ᾕ
						case "\u1F96": encryptedTotal += L08;	break;	//heta		ᾖ
						case "\u1F97": encryptedTotal += L08;	break;	//heta		ᾗ
						case "\u1F98": encryptedTotal += L08;	break;	//heta		ᾘ
						case "\u1F99": encryptedTotal += L08;	break;	//heta		ᾙ
						case "\u1F9A": encryptedTotal += L08;	break;	//heta		ᾚ
						case "\u1F9B": encryptedTotal += L08;	break;	//heta		ᾛ
						case "\u1F9C": encryptedTotal += L08;	break;	//heta		ᾜ
						case "\u1F9D": encryptedTotal += L08;	break;	//heta		ᾝ
						case "\u1F9E": encryptedTotal += L08;	break;	//heta		ᾞ
						case "\u1F9F": encryptedTotal += L08;	break;	//heta		ᾟ
						case "\u1FC2": encryptedTotal += L08;	break;	//heta		ῂ
						case "\u1FC3": encryptedTotal += L08;	break;	//heta		ῃ
						case "\u1FC4": encryptedTotal += L08;	break;	//heta		ῄ
						case "\u1FC6": encryptedTotal += L08;	break;	//heta		ῆ
						case "\u1FC7": encryptedTotal += L08;	break;	//heta		ῇ
						case "\u1FCA": encryptedTotal += L08;	break;	//heta		Ὴ
						case "\u1FCB": encryptedTotal += L08;	break;	//heta		Ή
						case "\u1FCC": encryptedTotal += L08;	break;	//heta		ῌ
						case "\u0398": encryptedTotal += L09;	break;	//theta		Θ
						case "\u03B8": encryptedTotal += L09;	break;	//theta		θ
						case "\u03D1": encryptedTotal += L09;	break;	//theta		ϑ
						case "\u03F4": encryptedTotal += L09;	break;	//theta		ϴ
						case "\u1D6AF":encryptedTotal += L09;	break;	//theta		𝚯
						case "\u1D6B9":encryptedTotal += L09;	break;	//theta		𝚹
						case "\u1D6C9":encryptedTotal += L09;	break;	//theta		𝛉
						case "\u1D6DD":encryptedTotal += L09;	break;	//theta		𝛝
						case "\u1D6E9":encryptedTotal += L09;	break;	//theta		𝛩
						case "\u1D6F3":encryptedTotal += L09;	break;	//theta		𝛳
						case "\u1D703":encryptedTotal += L09;	break;	//theta		𝜃
						case "\u1D717":encryptedTotal += L09;	break;	//theta		𝜗
						case "\u1D723":encryptedTotal += L09;	break;	//theta		𝜣
						case "\u1D72D":encryptedTotal += L09;	break;	//theta		𝜭
						case "\u1D73D":encryptedTotal += L09;	break;	//theta		𝜽
						case "\u1D751":encryptedTotal += L09;	break;	//theta		𝝑
						case "\u1D75D":encryptedTotal += L09;	break;	//theta		𝝝
						case "\u1D767":encryptedTotal += L09;	break;	//theta		𝝧
						case "\u1D777":encryptedTotal += L09;	break;	//theta		𝝷
						case "\u1D78B":encryptedTotal += L09;	break;	//theta		𝞋
						case "\u1D797":encryptedTotal += L09;	break;	//theta		𝞗
						case "\u1D7A1":encryptedTotal += L09;	break;	//theta		𝞡
						case "\u1D7B1":encryptedTotal += L09;	break;	//theta		𝞱
						case "\u1D7C5":encryptedTotal += L09;	break;	//theta		𝟅
						case "\u1DBF": encryptedTotal += L09;	break;	//theta		ᶿ
						case "\u037A": encryptedTotal += L10;	break;	//iota		ͺ
						case "\u038A": encryptedTotal += L10;	break;	//iota		Ί
						case "\u0390": encryptedTotal += L10;	break;	//iota		ΐ
						case "\u0399": encryptedTotal += L10;	break;	//iota		Ι
						case "\u03AA": encryptedTotal += L10;	break;	//iota		Ϊ
						case "\u03AF": encryptedTotal += L10;	break;	//iota		ί
						case "\u03B9": encryptedTotal += L10;	break;	//iota		ι
						case "\u03CA": encryptedTotal += L10;	break;	//iota		ϊ
						case "\u1D6B0":encryptedTotal += L10;	break;	//iota		𝚰
						case "\u1D6CA":encryptedTotal += L10;	break;	//iota		𝛊
						case "\u1D6EA":encryptedTotal += L10;	break;	//iota		𝛪
						case "\u1D704":encryptedTotal += L10;	break;	//iota		𝜄
						case "\u1D724":encryptedTotal += L10;	break;	//iota		𝜤
						case "\u1D73E":encryptedTotal += L10;	break;	//iota		𝜾
						case "\u1D75E":encryptedTotal += L10;	break;	//iota		𝝞
						case "\u1D778":encryptedTotal += L10;	break;	//iota		𝝸
						case "\u1D798":encryptedTotal += L10;	break;	//iota		𝞘
						case "\u1D7B2":encryptedTotal += L10;	break;	//iota		𝞲
						case "\u1F30": encryptedTotal += L10;	break;	//iota		ἰ
						case "\u1F31": encryptedTotal += L10;	break;	//iota		ἱ
						case "\u1F32": encryptedTotal += L10;	break;	//iota		ἲ
						case "\u1F33": encryptedTotal += L10;	break;	//iota		ἳ
						case "\u1F34": encryptedTotal += L10;	break;	//iota		ἴ
						case "\u1F35": encryptedTotal += L10;	break;	//iota		ἵ
						case "\u1F36": encryptedTotal += L10;	break;	//iota		ἶ
						case "\u1F37": encryptedTotal += L10;	break;	//iota		ἷ
						case "\u1F38": encryptedTotal += L10;	break;	//iota		Ἰ
						case "\u1F39": encryptedTotal += L10;	break;	//iota		Ἱ
						case "\u1F3A": encryptedTotal += L10;	break;	//iota		Ἲ
						case "\u1F3B": encryptedTotal += L10;	break;	//iota		Ἳ
						case "\u1F3C": encryptedTotal += L10;	break;	//iota		Ἴ
						case "\u1F3D": encryptedTotal += L10;	break;	//iota		Ἵ
						case "\u1F3E": encryptedTotal += L10;	break;	//iota		Ἶ
						case "\u1F3F": encryptedTotal += L10;	break;	//iota		Ἷ
						case "\u1F76": encryptedTotal += L10;	break;	//iota		ὶ
						case "\u1F77": encryptedTotal += L10;	break;	//iota		ί
						case "\u1FBE": encryptedTotal += L10;	break;	//iota		ι
						case "\u1FD0": encryptedTotal += L10;	break;	//iota		ῐ
						case "\u1FD1": encryptedTotal += L10;	break;	//iota		ῑ
						case "\u1FD2": encryptedTotal += L10;	break;	//iota		ῒ
						case "\u1FD3": encryptedTotal += L10;	break;	//iota		ΐ
						case "\u1FD6": encryptedTotal += L10;	break;	//iota		ῖ
						case "\u1FD7": encryptedTotal += L10;	break;	//iota		ῗ
						case "\u1FD8": encryptedTotal += L10;	break;	//iota		Ῐ
						case "\u1FD9": encryptedTotal += L10;	break;	//iota		Ῑ
						case "\u1FDA": encryptedTotal += L10;	break;	//iota		Ὶ
						case "\u1FDB": encryptedTotal += L10;	break;	//iota		Ί
						case "\u037F": encryptedTotal += L10;	break;	//yot		Ϳ
						case "\u03F3": encryptedTotal += L10;	break;	//yot		ϳ
						case "\u039A": encryptedTotal += L11;	break;	//kappa		Κ
						case "\u03BA": encryptedTotal += L11;	break;	//kappa		κ
						case "\u03CF": encryptedTotal += L11;	break;	//kappa		Ϗ
						case "\u03D7": encryptedTotal += L11;	break;	//kappa		ϗ
						case "\u03F0": encryptedTotal += L11;	break;	//kappa		ϰ
						case "\u1D6B1":encryptedTotal += L11;	break;	//kappa		𝚱
						case "\u1D6CB":encryptedTotal += L11;	break;	//kappa		𝛋
						case "\u1D6DE":encryptedTotal += L11;	break;	//kappa		𝛞
						case "\u1D6EB":encryptedTotal += L11;	break;	//kappa		𝛫
						case "\u1D705":encryptedTotal += L11;	break;	//kappa		𝜅
						case "\u1D718":encryptedTotal += L11;	break;	//kappa		𝜘
						case "\u1D725":encryptedTotal += L11;	break;	//kappa		𝜥
						case "\u1D73F":encryptedTotal += L11;	break;	//kappa		𝜿
						case "\u1D752":encryptedTotal += L11;	break;	//kappa		𝝒
						case "\u1D75F":encryptedTotal += L11;	break;	//kappa		𝝟
						case "\u1D779":encryptedTotal += L11;	break;	//kappa		𝝹
						case "\u1D78C":encryptedTotal += L11;	break;	//kappa		𝞌
						case "\u1D799":encryptedTotal += L11;	break;	//kappa		𝞙
						case "\u1D7B3":encryptedTotal += L11;	break;	//kappa		𝞳
						case "\u1D7C6":encryptedTotal += L11;	break;	//kappa		𝟆
						case "\u039B": encryptedTotal += L12;	break;	//lambda	Λ
						case "\u03BB": encryptedTotal += L12;	break;	//lambda	λ
						case "\u1D27": encryptedTotal += L12;	break;	//lambda	ᴧ
						case "\u1D6B2":encryptedTotal += L12;	break;	//lambda	𝚲
						case "\u1D6CC":encryptedTotal += L12;	break;	//lambda	𝛌
						case "\u1D6EC":encryptedTotal += L12;	break;	//lambda	𝛬
						case "\u1D706":encryptedTotal += L12;	break;	//lambda	𝜆
						case "\u1D726":encryptedTotal += L12;	break;	//lambda	𝜦
						case "\u1D740":encryptedTotal += L12;	break;	//lambda	𝝀
						case "\u1D760":encryptedTotal += L12;	break;	//lambda	𝝠
						case "\u1D77A":encryptedTotal += L12;	break;	//lambda	𝝺
						case "\u1D79A":encryptedTotal += L12;	break;	//lambda	𝞚
						case "\u1D7B4":encryptedTotal += L12;	break;	//lambda	𝞴
						case "\u00B5": encryptedTotal += L13;	break;	//mu		µ
						case "\u039C": encryptedTotal += L13;	break;	//mu		Μ
						case "\u03BC": encryptedTotal += L13;	break;	//mu		μ
						case "\u3382": encryptedTotal += L13;	break;	//mu		㎂
						case "\u338C": encryptedTotal += L13;	break;	//mu		㎌
						case "\u338D": encryptedTotal += L13;	break;	//mu		㎍
						case "\u3395": encryptedTotal += L13;	break;	//mu		㎕
						case "\u339B": encryptedTotal += L13;	break;	//mu		㎛
						case "\u33B2": encryptedTotal += L13;	break;	//mu		㎲
						case "\u33B6": encryptedTotal += L13;	break;	//mu		㎶
						case "\u33BC": encryptedTotal += L13;	break;	//mu		㎼
						case "\u1D6B3":encryptedTotal += L13;	break;	//mu		𝚳
						case "\u1D6CD":encryptedTotal += L13;	break;	//mu		𝛍
						case "\u1D6ED":encryptedTotal += L13;	break;	//mu		𝛭
						case "\u1D707":encryptedTotal += L13;	break;	//mu		𝜇
						case "\u1D727":encryptedTotal += L13;	break;	//mu		𝜧
						case "\u1D741":encryptedTotal += L13;	break;	//mu		𝝁
						case "\u1D761":encryptedTotal += L13;	break;	//mu		𝝡
						case "\u1D77B":encryptedTotal += L13;	break;	//mu		𝝻
						case "\u1D7B5":encryptedTotal += L13;	break;	//mu		𝞵
						case "\u039D": encryptedTotal += L14;	break;	//nu		Ν
						case "\u03BD": encryptedTotal += L14;	break;	//nu		ν
						case "\u1D6B4":encryptedTotal += L14;	break;	//nu		𝚴
						case "\u1D6CE":encryptedTotal += L14;	break;	//nu		𝛎
						case "\u1D6EE":encryptedTotal += L14;	break;	//nu		𝛮
						case "\u1D708":encryptedTotal += L14;	break;	//nu		𝜈
						case "\u1D728":encryptedTotal += L14;	break;	//nu		𝜨
						case "\u1D742":encryptedTotal += L14;	break;	//nu		𝝂
						case "\u1D762":encryptedTotal += L14;	break;	//nu		𝝢
						case "\u1D77C":encryptedTotal += L14;	break;	//nu		𝝼
						case "\u1D79C":encryptedTotal += L14;	break;	//nu		𝞜
						case "\u1D7B6":encryptedTotal += L14;	break;	//nu		𝞶
						case "\u039E": encryptedTotal += L15;	break;	//xi		Ξ
						case "\u03BE": encryptedTotal += L15;	break;	//xi		ξ
						case "\u1D6B5":encryptedTotal += L15;	break;	//xi		𝚵
						case "\u1D6CF":encryptedTotal += L15;	break;	//xi		𝛏
						case "\u1D6EF":encryptedTotal += L15;	break;	//xi		𝛯
						case "\u1D709":encryptedTotal += L15;	break;	//xi		𝜉
						case "\u1D729":encryptedTotal += L15;	break;	//xi		𝜩
						case "\u1D743":encryptedTotal += L15;	break;	//xi		𝝃
						case "\u1D763":encryptedTotal += L15;	break;	//xi		𝝣
						case "\u1D77D":encryptedTotal += L15;	break;	//xi		𝝽
						case "\u1D79D":encryptedTotal += L15;	break;	//xi		𝞝
						case "\u1D7B6":encryptedTotal += L15;	break;	//xi		𝞶
						case "\u038C": encryptedTotal += L16;	break;	//omicron	Ό
						case "\u039F": encryptedTotal += L16;	break;	//omicron	Ο
						case "\u03CC": encryptedTotal += L16;	break;	//omicron	ό
						case "\u03BF": encryptedTotal += L16;	break;	//omicron	ο
						case "\u1D6B6":encryptedTotal += L16;	break;	//omicron	𝚶
						case "\u1D6D0":encryptedTotal += L16;	break;	//omicron	𝛐
						case "\u1D6F0":encryptedTotal += L16;	break;	//omicron	𝛰
						case "\u1D70A":encryptedTotal += L16;	break;	//omicron	𝜊
						case "\u1D72A":encryptedTotal += L16;	break;	//omicron	𝜪
						case "\u1D744":encryptedTotal += L16;	break;	//omicron	𝝄
						case "\u1D764":encryptedTotal += L16;	break;	//omicron	𝝤
						case "\u1D77E":encryptedTotal += L16;	break;	//omicron	𝝾
						case "\u1D79E":encryptedTotal += L16;	break;	//omicron	𝞞
						case "\u1D7B8":encryptedTotal += L16;	break;	//omicron	𝞸
						case "\u1F40": encryptedTotal += L16;	break;	//omicron	ὀ
						case "\u1F41": encryptedTotal += L16;	break;	//omicron	ὁ
						case "\u1F42": encryptedTotal += L16;	break;	//omicron	ὂ
						case "\u1F43": encryptedTotal += L16;	break;	//omicron	ὃ
						case "\u1F44": encryptedTotal += L16;	break;	//omicron	ὄ
						case "\u1F45": encryptedTotal += L16;	break;	//omicron	ὅ
						case "\u1F48": encryptedTotal += L16;	break;	//omicron	Ὀ
						case "\u1F49": encryptedTotal += L16;	break;	//omicron	Ὁ
						case "\u1F4A": encryptedTotal += L16;	break;	//omicron	Ὂ
						case "\u1F4B": encryptedTotal += L16;	break;	//omicron	Ὃ
						case "\u1F4C": encryptedTotal += L16;	break;	//omicron	Ὄ
						case "\u1F4D": encryptedTotal += L16;	break;	//omicron	Ὅ
						case "\u1F78": encryptedTotal += L16;	break;	//omicron	ὸ
						case "\u1F79": encryptedTotal += L16;	break;	//omicron	ό
						case "\u1FF8": encryptedTotal += L16;	break;	//omicron	Ὸ
						case "\u1FF9": encryptedTotal += L16;	break;	//omicron	Ό
						case "\u03A0": encryptedTotal += L17;	break;	//pi		Π
						case "\u03C0": encryptedTotal += L17;	break;	//pi		π
						case "\u03D6": encryptedTotal += L17;	break;	//pi		ϖ
						case "\u213C": encryptedTotal += L17;	break;	//pi		ℼ
						case "\u213F": encryptedTotal += L17;	break;	//pi		ℿ
						case "\u1D28": encryptedTotal += L17;	break;	//pi		ᴨ
						case "\u1D6B7":encryptedTotal += L17;	break;	//pi		𝚷
						case "\u1D6D1":encryptedTotal += L17;	break;	//pi		𝛑
						case "\u1D6E1":encryptedTotal += L17;	break;	//pi		𝛡
						case "\u1D6F1":encryptedTotal += L17;	break;	//pi		𝛱
						case "\u1D70B":encryptedTotal += L17;	break;	//pi		𝜋
						case "\u1D71B":encryptedTotal += L17;	break;	//pi		𝜛
						case "\u1D72B":encryptedTotal += L17;	break;	//pi		𝜫
						case "\u1D745":encryptedTotal += L17;	break;	//pi		𝝅
						case "\u1D755":encryptedTotal += L17;	break;	//pi		𝝕
						case "\u1D765":encryptedTotal += L17;	break;	//pi		𝝥
						case "\u1D77F":encryptedTotal += L17;	break;	//pi		𝝿
						case "\u1D78F":encryptedTotal += L17;	break;	//pi		𝞏
						case "\u1D79F":encryptedTotal += L17;	break;	//pi		𝞟
						case "\u1D7B9":encryptedTotal += L17;	break;	//pi		𝞹
						case "\u1D7C9":encryptedTotal += L17;	break;	//pi		𝟉
						case "\u03D8": encryptedTotal += L18;	break;	//koppa		Ϙ
						case "\u03D9": encryptedTotal += L18;	break;	//koppa		ϙ
						case "\u03DE": encryptedTotal += L18;	break;	//koppa		Ϟ
						case "\u03DF": encryptedTotal += L18;	break;	//koppa		ϟ
						case "\u03A1": encryptedTotal += L19;	break;	//rho		Ρ
						case "\u03C1": encryptedTotal += L19;	break;	//rho		ρ
						case "\u03F1": encryptedTotal += L19;	break;	//rho		ϱ
						case "\u03FC": encryptedTotal += L19;	break;	//rho		ϼ
						case "\u1D29": encryptedTotal += L19;	break;	//rho		ᴩ
						case "\u1D68": encryptedTotal += L19;	break;	//rho		ᵨ
						case "\u1FE4": encryptedTotal += L19;	break;	//rho		ῤ
						case "\u1FE5": encryptedTotal += L19;	break;	//rho		ῥ
						case "\u1FEC": encryptedTotal += L19;	break;	//rho		Ῥ
						case "\u1D6B8":encryptedTotal += L19;	break;	//rho		𝚸
						case "\u1D6D2":encryptedTotal += L19;	break;	//rho		𝛒
						case "\u1D6E0":encryptedTotal += L19;	break;	//rho		𝛠
						case "\u1D6F2":encryptedTotal += L19;	break;	//rho		𝛲
						case "\u1D70C":encryptedTotal += L19;	break;	//rho		𝜌
						case "\u1D71A":encryptedTotal += L19;	break;	//rho		𝜚
						case "\u1D72C":encryptedTotal += L19;	break;	//rho		𝜬
						case "\u1D746":encryptedTotal += L19;	break;	//rho		𝝆
						case "\u1D754":encryptedTotal += L19;	break;	//rho		𝝔
						case "\u1D766":encryptedTotal += L19;	break;	//rho		𝝦
						case "\u1D780":encryptedTotal += L19;	break;	//rho		𝞀
						case "\u1D78E":encryptedTotal += L19;	break;	//rho		𝞎
						case "\u1D7A0":encryptedTotal += L19;	break;	//rho		𝞠
						case "\u1D7BA":encryptedTotal += L19;	break;	//rho		𝞺
						case "\u1D7C8":encryptedTotal += L19;	break;	//rho		𝟈
						case "\u03C2": encryptedTotal += L20;	break;	//sigma		ς
						case "\u03C3": encryptedTotal += L20;	break;	//sigma		σ
						case "\u03F2": encryptedTotal += L20;	break;	//sigma		ϲ
						case "\u037B": encryptedTotal += L20;	break;	//sigma		ͻ
						case "\u037C": encryptedTotal += L20;	break;	//sigma		ͼ
						case "\u037D": encryptedTotal += L20;	break;	//sigma		ͽ
						case "\u03A3": encryptedTotal += L20;	break;	//sigma		Σ
						case "\u03F9": encryptedTotal += L20;	break;	//sigma		Ϲ
						case "\u03FD": encryptedTotal += L20;	break;	//sigma		Ͻ
						case "\u03FE": encryptedTotal += L20;	break;	//sigma		Ͼ
						case "\u03FF": encryptedTotal += L20;	break;	//sigma		Ͽ
						case "\u1D6BA":encryptedTotal += L20;	break;	//sigma		𝚺
						case "\u1D6D3":encryptedTotal += L20;	break;	//sigma		𝛓
						case "\u1D6D4":encryptedTotal += L20;	break;	//sigma		𝛔
						case "\u1D6F4":encryptedTotal += L20;	break;	//sigma		𝛴
						case "\u1D70D":encryptedTotal += L20;	break;	//sigma		𝜍
						case "\u1D70E":encryptedTotal += L20;	break;	//sigma		𝜎
						case "\u1D72E":encryptedTotal += L20;	break;	//sigma		𝜮
						case "\u1D747":encryptedTotal += L20;	break;	//sigma		𝝇
						case "\u1D748":encryptedTotal += L20;	break;	//sigma		𝝈
						case "\u1D768":encryptedTotal += L20;	break;	//sigma		𝝨
						case "\u1D781":encryptedTotal += L20;	break;	//sigma		𝞁
						case "\u1D782":encryptedTotal += L20;	break;	//sigma		𝞂
						case "\u1D7A2":encryptedTotal += L20;	break;	//sigma		𝞢
						case "\u1D7BB":encryptedTotal += L20;	break;	//sigma		𝞻
						case "\u1D7BC":encryptedTotal += L20;	break;	//sigma		𝞼
						case "\u03FA": encryptedTotal += L20;	break;	//san		Ϻ
						case "\u03FB": encryptedTotal += L20;	break;	//san		ϻ
						case "\u03F7": encryptedTotal += L20;	break;	//sho		Ϸ
						case "\u03F8": encryptedTotal += L20;	break;	//sho		ϸ
						case "\u03A4": encryptedTotal += L21;	break;	//tau		Τ
						case "\u03C4": encryptedTotal += L21;	break;	//tau		τ
						case "\u1D6BB":encryptedTotal += L21;	break;	//tau		𝚻
						case "\u1D6D5":encryptedTotal += L21;	break;	//tau		𝛕
						case "\u1D6F5":encryptedTotal += L21;	break;	//tau		𝛵
						case "\u1D72F":encryptedTotal += L21;	break;	//tau		𝜯
						case "\u1D749":encryptedTotal += L21;	break;	//tau		𝝉
						case "\u1D769":encryptedTotal += L21;	break;	//tau		𝝩
						case "\u1D783":encryptedTotal += L21;	break;	//tau		𝞃
						case "\u1D7A3":encryptedTotal += L21;	break;	//tau		𝞣
						case "\u1D7BD":encryptedTotal += L21;	break;	//tau		𝞽
						case "\u038E": encryptedTotal += L22;	break;	//upsilon	Ύ
						case "\u03A5": encryptedTotal += L22;	break;	//upsilon	Υ
						case "\u03AB": encryptedTotal += L22;	break;	//upsilon	Ϋ
						case "\u03B0": encryptedTotal += L22;	break;	//upsilon	ΰ
						case "\u03C5": encryptedTotal += L22;	break;	//upsilon 	υ
						case "\u03CB": encryptedTotal += L22;	break;	//upsilon 	ϋ
						case "\u03CD": encryptedTotal += L22;	break;	//upsilon	ύ
						case "\u03D2": encryptedTotal += L22;	break;	//upsilon	ϒ
						case "\u03D3": encryptedTotal += L22;	break;	//upsilon	ϓ
						case "\u03D4": encryptedTotal += L22;	break;	//upsilon	ϔ
						case "\u1D6BC":encryptedTotal += L22;	break;	//upsilon	𝚼
						case "\u1D6D6":encryptedTotal += L22;	break;	//upsilon	𝛖
						case "\u1D6F6":encryptedTotal += L22;	break;	//upsilon	𝛶
						case "\u1D710":encryptedTotal += L22;	break;	//upsilon	𝜐
						case "\u1D730":encryptedTotal += L22;	break;	//upsilon	𝜰
						case "\u1D74A":encryptedTotal += L22;	break;	//upsilon	𝝊
						case "\u1D76A":encryptedTotal += L22;	break;	//upsilon	𝝪
						case "\u1D784":encryptedTotal += L22;	break;	//upsilon	𝞄
						case "\u1D7A4":encryptedTotal += L22;	break;	//upsilon	𝞤
						case "\u1D7BE":encryptedTotal += L22;	break;	//upsilon	𝞾
						case "\u1F50": encryptedTotal += L22;	break;	//upsilon	ὐ
						case "\u1F51": encryptedTotal += L22;	break;	//upsilon	ὑ
						case "\u1F52": encryptedTotal += L22;	break;	//upsilon	ὒ
						case "\u1F53": encryptedTotal += L22;	break;	//upsilon	ὓ
						case "\u1F54": encryptedTotal += L22;	break;	//upsilon	ὔ
						case "\u1F55": encryptedTotal += L22;	break;	//upsilon	ὕ
						case "\u1F56": encryptedTotal += L22;	break;	//upsilon	ὖ
						case "\u1F57": encryptedTotal += L22;	break;	//upsilon	ὗ
						case "\u1F59": encryptedTotal += L22;	break;	//upsilon	Ὑ
						case "\u1F5B": encryptedTotal += L22;	break;	//upsilon	Ὓ
						case "\u1F5D": encryptedTotal += L22;	break;	//upsilon	Ὕ
						case "\u1F5F": encryptedTotal += L22;	break;	//upsilon	Ὗ
						case "\u1F7A": encryptedTotal += L22;	break;	//upsilon	ὺ
						case "\u1F7B": encryptedTotal += L22;	break;	//upsilon	ύ
						case "\u1FE0": encryptedTotal += L22;	break;	//upsilon	ῠ
						case "\u1FE1": encryptedTotal += L22;	break;	//upsilon	ῡ
						case "\u1FE2": encryptedTotal += L22;	break;	//upsilon	ῢ
						case "\u1FE3": encryptedTotal += L22;	break;	//upsilon	ΰ
						case "\u1FE6": encryptedTotal += L22;	break;	//upsilon	ῦ
						case "\u1FE7": encryptedTotal += L22;	break;	//upsilon	ῧ
						case "\u1FE8": encryptedTotal += L22;	break;	//upsilon	Ῠ
						case "\u1FE9": encryptedTotal += L22;	break;	//upsilon	Ῡ
						case "\u1FEB": encryptedTotal += L22;	break;	//upsilon	Ύ
						case "\u03A6": encryptedTotal += L23;	break;	//phi		Φ
						case "\u03C6": encryptedTotal += L23;	break;	//phi		φ
						case "\u03C8": encryptedTotal += L23;	break;	//phi		ψ
						case "\u03D5": encryptedTotal += L23;	break;	//phi		ϕ
						case "\u1D60": encryptedTotal += L23;	break;	//phi		ᵠ
						case "\u1D69": encryptedTotal += L23;	break;	//phi		ᵩ
						case "\u1D6BD":encryptedTotal += L23;	break;	//phi		𝚽
						case "\u1D6D7":encryptedTotal += L23;	break;	//phi		𝛗
						case "\u1D6DF":encryptedTotal += L23;	break;	//phi		𝛟
						case "\u1D6F7":encryptedTotal += L23;	break;	//phi		𝛷
						case "\u1D711":encryptedTotal += L23;	break;	//phi		𝜑
						case "\u1D719":encryptedTotal += L23;	break;	//phi		𝜙
						case "\u1D731":encryptedTotal += L23;	break;	//phi		𝜱
						case "\u1D74B":encryptedTotal += L23;	break;	//phi		𝝋
						case "\u1D753":encryptedTotal += L23;	break;	//phi		𝝓
						case "\u1D76B":encryptedTotal += L23;	break;	//phi		𝝫
						case "\u1D785":encryptedTotal += L23;	break;	//phi		𝞅
						case "\u1D78D":encryptedTotal += L23;	break;	//phi		𝞍
						case "\u1D7A5":encryptedTotal += L23;	break;	//phi		𝞥
						case "\u1D7BF":encryptedTotal += L23;	break;	//phi		𝞿
						case "\u1D7C7":encryptedTotal += L23;	break;	//phi		𝟇
						case "\u03A7": encryptedTotal += L24;	break;	//chi		Χ
						case "\u03C7": encryptedTotal += L24;	break;	//chi		χ
						case "\u1D61": encryptedTotal += L24;	break;	//chi		ᵡ
						case "\u1D6A": encryptedTotal += L24;	break;	//chi		ᵪ
						case "\u1D6BE":encryptedTotal += L24;	break;	//chi		𝚾
						case "\u1D6D8":encryptedTotal += L24;	break;	//chi		𝛘
						case "\u1D6F8":encryptedTotal += L24;	break;	//chi		𝛸
						case "\u1D712":encryptedTotal += L24;	break;	//chi		𝜒
						case "\u1D732":encryptedTotal += L24;	break;	//chi		𝜲
						case "\u1D74C":encryptedTotal += L24;	break;	//chi		𝝌
						case "\u1D76C":encryptedTotal += L24;	break;	//chi		𝝬
						case "\u1D786":encryptedTotal += L24;	break;	//chi		𝞆
						case "\u1D7A6":encryptedTotal += L24;	break;	//chi		𝞦
						case "\u1D7C0":encryptedTotal += L24;	break;	//chi		𝟀
						case "\u03A8": encryptedTotal += L25;	break;	//psi		Ψ
						case "\u03C8": encryptedTotal += L25;	break;	//psi		ψ
						case "\u1D2A": encryptedTotal += L25;	break;	//psi		ᴪ
						case "\u1D6BF":encryptedTotal += L25;	break;	//psi		𝚿
						case "\u1D6D9":encryptedTotal += L25;	break;	//psi		𝛙
						case "\u1D6F9":encryptedTotal += L25;	break;	//psi		𝛹
						case "\u1D713":encryptedTotal += L25;	break;	//psi		𝜓
						case "\u1D733":encryptedTotal += L25;	break;	//psi		𝜳
						case "\u1D74D":encryptedTotal += L25;	break;	//psi		𝝍
						case "\u1D76D":encryptedTotal += L25;	break;	//psi		𝝭
						case "\u1D787":encryptedTotal += L25;	break;	//psi		𝞇
						case "\u1D7A7":encryptedTotal += L25;	break;	//psi		𝞧
						case "\u1D7C1":encryptedTotal += L25;	break;	//psi		𝟁
						case "\u038F": encryptedTotal += L26;	break;	//omega		Ώ
						case "\u03A9": encryptedTotal += L26;	break;	//omega		Ω
						case "\u03C9": encryptedTotal += L26;	break;	//omega		ω
						case "\u03CE": encryptedTotal += L26;	break;	//omega		ώ
						case "\u1D6C0":encryptedTotal += L26;	break;	//omega		𝛀
						case "\u1D6DA":encryptedTotal += L26;	break;	//omega		𝛚
						case "\u1D6FA":encryptedTotal += L26;	break;	//omega		𝛺
						case "\u1D714":encryptedTotal += L26;	break;	//omega		𝜔
						case "\u1D734":encryptedTotal += L26;	break;	//omega		𝜴
						case "\u1D74E":encryptedTotal += L26;	break;	//omega		𝝎
						case "\u1D788":encryptedTotal += L26;	break;	//omega		𝞈
						case "\u1D7C2":encryptedTotal += L26;	break;	//omega		𝟂
						case "\u1D76E":encryptedTotal += L26;	break;	//omega		𝝮
						case "\u1D7A8":encryptedTotal += L26;	break;	//omega		𝞨
						case "\u1F60": encryptedTotal += L26;	break;	//omega		ὠ
						case "\u1F61": encryptedTotal += L26;	break;	//omega		ὡ
						case "\u1F62": encryptedTotal += L26;	break;	//omega		ὢ
						case "\u1F63": encryptedTotal += L26;	break;	//omega		ὣ
						case "\u1F64": encryptedTotal += L26;	break;	//omega		ὤ
						case "\u1F65": encryptedTotal += L26;	break;	//omega		ὥ
						case "\u1F66": encryptedTotal += L26;	break;	//omega		ὦ
						case "\u1F67": encryptedTotal += L26;	break;	//omega		ὧ
						case "\u1F68": encryptedTotal += L26;	break;	//omega		Ὠ
						case "\u1F69": encryptedTotal += L26;	break;	//omega		Ὡ
						case "\u1F6A": encryptedTotal += L26;	break;	//omega		Ὢ
						case "\u1F6B": encryptedTotal += L26;	break;	//omega		Ὣ
						case "\u1F6C": encryptedTotal += L26;	break;	//omega		Ὤ
						case "\u1F6D": encryptedTotal += L26;	break;	//omega		Ὥ
						case "\u1F6E": encryptedTotal += L26;	break;	//omega		Ὦ
						case "\u1F6F": encryptedTotal += L26;	break;	//omega		Ὧ
						case "\u1F7C": encryptedTotal += L26;	break;	//omega		ὼ
						case "\u1F7D": encryptedTotal += L26;	break;	//omega		ώ
						case "\u1FA0": encryptedTotal += L26;	break;	//omega		ᾠ
						case "\u1FA1": encryptedTotal += L26;	break;	//omega		ᾡ
						case "\u1FA2": encryptedTotal += L26;	break;	//omega		ᾢ
						case "\u1FA3": encryptedTotal += L26;	break;	//omega		ᾣ
						case "\u1FA4": encryptedTotal += L26;	break;	//omega		ᾤ
						case "\u1FA5": encryptedTotal += L26;	break;	//omega		ᾥ
						case "\u1FA6": encryptedTotal += L26;	break;	//omega		ᾦ
						case "\u1FA7": encryptedTotal += L26;	break;	//omega		ᾧ
						case "\u1FA8": encryptedTotal += L26;	break;	//omega		ᾨ
						case "\u1FA9": encryptedTotal += L26;	break;	//omega		ᾩ
						case "\u1FAA": encryptedTotal += L26;	break;	//omega		ᾪ
						case "\u1FAB": encryptedTotal += L26;	break;	//omega		ᾫ
						case "\u1FAC": encryptedTotal += L26;	break;	//omega		ᾬ
						case "\u1FAD": encryptedTotal += L26;	break;	//omega		ᾭ
						case "\u1FAE": encryptedTotal += L26;	break;	//omega		ᾮ
						case "\u1FAF": encryptedTotal += L26;	break;	//omega		ᾯ
						case "\u1FF2": encryptedTotal += L26;	break;	//omega		ῲ
						case "\u1FF3": encryptedTotal += L26;	break;	//omega		ῳ
						case "\u1FF4": encryptedTotal += L26;	break;	//omega		ῴ
						case "\u1FF6": encryptedTotal += L26;	break;	//omega		ῶ
						case "\u1FF7": encryptedTotal += L26;	break;	//omega		ῷ
						case "\u1FFA": encryptedTotal += L26;	break;	//omega		Ὼ
						case "\u1FFB": encryptedTotal += L26;	break;	//omega		Ώ
						case "\u1FFC": encryptedTotal += L26;	break;	//omega		ῼ
						case "\u2126": encryptedTotal += L26;	break;	//omega		Ω
						case "\uAB65": encryptedTotal += L26;	break;	//omega		ꭥ
						case "\u0372": encryptedTotal += L27;	break;	//sampi		Ͳ
						case "\u0373": encryptedTotal += L27;	break;	//sampi		ͳ
						case "\u03E0": encryptedTotal += L27;	break;	//sampi		Ϡ
						case "\u03E1": encryptedTotal += L27;	break;	//sampi		ϡ
						case "\u0041": encryptedTotal += L01;	break;	//			A
						case "\u0061": encryptedTotal += L01;	break;	//			a
						case "\u0042": encryptedTotal += L02;	break;	//			B
						case "\u0062": encryptedTotal += L02;	break;	//			b
						case "\u0043": encryptedTotal += L03;	break;	//			C
						case "\u0063": encryptedTotal += L03;	break;	//			c
						case "\u0044": encryptedTotal += L04;	break;	//			D
						case "\u0064": encryptedTotal += L04;	break;	//			d
						case "\u0045": encryptedTotal += L05;	break;	//			E
						case "\u0065": encryptedTotal += L05;	break;	//			e
						case "\u0046": encryptedTotal += L06;	break;	//			F
						case "\u0066": encryptedTotal += L06;	break;	//			f
						case "\u0047": encryptedTotal += L07;	break;	//			G
						case "\u0067": encryptedTotal += L07;	break;	//			g
						case "\u0048": encryptedTotal += L08;	break;	//			H
						case "\u0068": encryptedTotal += L08;	break;	//			h
						case "\u0049": encryptedTotal += L09;	break;	//			I
						case "\u0069": encryptedTotal += L09;	break;	//			i
						case "\u004A": encryptedTotal += L10;	break;	//			J
						case "\u006A": encryptedTotal += L10;	break;	//			j
						case "\u004B": encryptedTotal += L11;	break;	//			K
						case "\u006B": encryptedTotal += L11;	break;	//			k
						case "\u004C": encryptedTotal += L12;	break;	//			L
						case "\u006C": encryptedTotal += L12;	break;	//			l
						case "\u004D": encryptedTotal += L13;	break;	//			M
						case "\u006D": encryptedTotal += L13;	break;	//			m
						case "\u004E": encryptedTotal += L14;	break;	//			N
						case "\u006E": encryptedTotal += L14;	break;	//			n
						case "\u004F": encryptedTotal += L15;	break;	//			O
						case "\u006F": encryptedTotal += L15;	break;	//			o
						case "\u0050": encryptedTotal += L16;	break;	//			P
						case "\u0070": encryptedTotal += L16;	break;	//			p
						case "\u0051": encryptedTotal += L17;	break;	//			Q
						case "\u0071": encryptedTotal += L17;	break;	//			q
						case "\u0052": encryptedTotal += L18;	break;	//			R
						case "\u0072": encryptedTotal += L18;	break;	//			r
						case "\u0053": encryptedTotal += L19;	break;	//			S
						case "\u0073": encryptedTotal += L19;	break;	//			s
						case "\u0054": encryptedTotal += L20;	break;	//			T
						case "\u0074": encryptedTotal += L20;	break;	//			t
						case "\u0055": encryptedTotal += L21;	break;	//			U
						case "\u0075": encryptedTotal += L21;	break;	//			u
						case "\u0056": encryptedTotal += L22;	break;	//			V
						case "\u0076": encryptedTotal += L22;	break;	//			v
						case "\u0057": encryptedTotal += L23;	break;	//			W
						case "\u0077": encryptedTotal += L23;	break;	//			w
						case "\u0058": encryptedTotal += L24;	break;	//			X
						case "\u0078": encryptedTotal += L24;	break;	//			x
						case "\u0059": encryptedTotal += L25;	break;	//			Y
						case "\u0079": encryptedTotal += L25;	break;	//			y
						case "\u005A": encryptedTotal += L26;	break;	//			Z
						case "\u007A": encryptedTotal += L26;	break;	//			z
						default: break;
					}
				}
				if (encryptedTotal == 0) {encryptedTotal = ""; }
				else {document.getElementById('encryptedsum').innerHTML = `En. Gematria: <span style="color: #f2f542; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${encryptedTotal.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;}
//				else {document.getElementById('encryptedsum').innerHTML = `En. Gematria: <a id="app1Link" href="app1.php" style="text-decoration: none;" target="_blank"><span style="color: #f2f542; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${encryptedTotal.toLocaleString('en-US', {maximumFractionDigits: 0})}</span></a>`;}
			} 
		);
		
		// Wait to calculate the Sum of the letters highlighted until the mouse click has been released and all letters are highlighted.
		textArea.addEventListener('touchend', () => {
			const selection = window.getSelection();
			if (selection.toString().length > 0) {
				const range = selection.getRangeAt(0);
				const startContainer = range.startContainer;
				const endContainer = range.endContainer;
				const startOffset = range.startOffset;
				const endOffset = range.endOffset;
				const selectedText = selection.toString();
				const sum = Array.from(selectedText).reduce((sum, char) => {
					if (/[a-z0-9]/.test(char)) {
						sum += char.charCodeAt(0) - (isNaN(parseInt(char)) ? 96 : 48);
					}
					return sum;
				}, 0);

				var verses = (textHighlight.match(/\d+:\d+/g) || ['1']).length;
				let words = textHighlight.trim().split(/\s+/).length;
				let letters = textHighlight.replace(/[.,&!$%#~*|><}^{/)(-=:;\d\s\r\n_'"`\]\[\+\\\u05C3?\u05BE\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF]/g, '').length;

				if (letters == 0) { words = 0; verses = 0; encryptedTotal = ""; document.getElementById('encryptedsum').innerHTML = `En. Gematria: <span style="color: #f2f542; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${encryptedTotal.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`; }
				document.getElementById('verses').innerHTML = `Verses: ~<span style="color: #35ab47; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${verses.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;
				document.getElementById('words').innerHTML = `Words: <span style="color: #025be0; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${words.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;
				document.getElementById('letters').innerHTML = `Letters: <span style="color: #7a489c; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${letters.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;
				document.getElementById('sum').innerHTML = `Gematria: <span style="color: #FF0000; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textTotal.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;

				/* ----------------------------------------------------------
				SMART STATUS-BAR  –  grows & wraps only when needed
				---------------------------------------------------------- */
				(function buildSmartStatusBar() {

					/* ---- 1.  the old “print values” code, untouched ---- */
					function writeValues() {
						if (letters === 0) {
							words = verses = 0;
							encryptedTotal = "";
							document.getElementById('encryptedsum').innerHTML =
								`En. Gematria: <span style="color:#f2f542;font-weight:bold;text-shadow:1px 1px 2px rgba(0,0,0,1);">${encryptedTotal}</span>`;
						}
						document.getElementById('verses').innerHTML =
							`Verses: ~<span style="color:#35ab47;font-weight:bold;text-shadow:1px 1px 2px rgba(0,0,0,1);">${verses.toLocaleString('en-US')}</span>`;
						document.getElementById('words').innerHTML =
							`Words: <span style="color:#025be0;font-weight:bold;text-shadow:1px 1px 2px rgba(0,0,0,1);">${words.toLocaleString('en-US')}</span>`;
						document.getElementById('letters').innerHTML =
							`Letters: <span style="color:#7a489c;font-weight:bold;text-shadow:1px 1px 2px rgba(0,0,0,1);">${letters.toLocaleString('en-US')}</span>`;
						document.getElementById('sum').innerHTML =
							`Gematria: <span style="color:#FF0000;font-weight:bold;text-shadow:1px 1px 2px rgba(0,0,0,1);">${textTotal.toLocaleString('en-US')}</span>`;
					}

					/* ---- 2.  decide how many rows we really need ---- */
					function adjustHeight() {
						const bar   = document.getElementById('statusBar');
						const boxes = Array.from(bar.querySelectorAll('.verses, .words, .letters, .sum')); // only these 4
						const gap   = 5;                                              // CSS gap value
						const barW  = bar.clientWidth;
						let usedW   = 0;

						boxes.forEach(b => usedW += b.scrollWidth + gap);             // add up real widths
						usedW -= gap;                                                 // remove last extra gap

						const rows = (usedW > barW) ? 2 : 1;                          // 2 rows only if overflow
						bar.style.height = `${rows * 22}px`;                          // 22 px per row
						bar.style.flexWrap = (rows === 2) ? 'wrap' : 'nowrap';
					}

					/* ---- 3.  run both steps ---- */
					writeValues();
					adjustHeight();

					/* ---- 4.  keep it correct on resize/orientation change ---- */
					window.addEventListener('resize', () => { writeValues(); adjustHeight(); });
				})();

				if (startContainer.nodeType === Node.TEXT_NODE && endContainer.nodeType === Node.TEXT_NODE) {
					const startNode = startContainer.parentNode;
					const endNode = endContainer.parentNode;
					if (startNode === endNode) {
						const textNodes = Array.from(startNode.childNodes).filter(node => node.nodeType === Node.TEXT_NODE);
						const startIndex = textNodes.findIndex(node => node === startContainer);
						const endIndex = textNodes.findIndex(node => node === endContainer);
						for (let i = startIndex; i <= endIndex; i++) {
							const textNode = textNodes[i];
							const startOffsetInNode = startOffset + textNode.textContent.substring(0, startOffset).length;
							const endOffsetInNode = endOffset + textNode.textContent.substring(0, endOffset).length;
							const startNodeRange = document.createRange();
							const endNodeRange = document.createRange();
							startNodeRange.setStart(textNode, startOffsetInNode);
							startNodeRange.setEnd(textNode, startOffsetInNode);
							endNodeRange.setStart(textNode, endOffsetInNode);
							endNodeRange.setEnd(textNode, endOffsetInNode);
							const startNodeSpan = document.createElement('span');
							const endNodeSpan = document.createElement('span');
							startNodeSpan.classList.add('highlight');
							endNodeSpan.classList.add('highlight');
							startNode.replaceChild(startNodeSpan, startNodeRange.extractContents());
							endNode.replaceChild(endNodeSpan, endNodeRange.extractContents());
							startNodeSpan.appendChild(startNodeRange.cloneContents());
							endNodeSpan.appendChild(endNodeRange.cloneContents());
						}
					} else {
						const startNodeRange = document.createRange();
						const endNodeRange = document.createRange();
						startNodeRange.setStart(startContainer, startOffset);
						startNodeRange.setEnd(startContainer, startOffset);
						endNodeRange.setStart(endContainer, endOffset);
						endNodeRange.setEnd(endContainer, endOffset);
						const startNodeSpan = document.createElement('span');
						const endNodeSpan = document.createElement('span');
						startNodeSpan.classList.add('highlight');
						endNodeSpan.classList.add('highlight');
						startNode.replaceChild(startNodeSpan, startNodeRange.extractContents());
						endNode.replaceChild(endNodeSpan, endNodeRange.extractContents());
						startNodeSpan.appendChild(startNodeRange.cloneContents());
						endNodeSpan.appendChild(endNodeRange.cloneContents());
					}
				}
			}
		});

		// Calculate Button's function
		//function calculateBtn() {		}   

		// Create a Modal dialog window
		function createModal() {
		var modal = `
			<div id="myModal" class="modal">
			<div class="modal-content">
				<span class="close" onclick="closeModal()">&times;</span>
				<p id="modal-message"></p>
			</div>
			</div>
		`;

		document.body.insertAdjacentHTML('beforeend', modal);
		}

		// Modal dialog for Calculate button
		function openModal(textHighlight, textTotal, encrypted, input, encryptedTotal, encryptedsum) {
		var message =  `Highlighted Text = ${textHighlight}<br><br>
						Gematria Value = ${textTotal}<br><br>
						Encrypt to = ${encrypted}<br><br>
						Encrypted Gematria = ${encryptedTotal}<br><br>
						`;
						/*`Input Text = ${input}<br><br>
						Word Count = ${words}<br>
						Letter Count = ${letters}<br>
						sum:\t\t\t\t${sum}<br>
						removeSelect:\t\t${removeSelect}<br>
						gematriaSelect:\t\t${gematriaSelect}<br>
						Highlight: ${highlight}<br>
						Total: ${total}<br>
						match:\t\t\t\t${match}<br>
						range:\t\t\t\t${range}<br>
						number:\t\t\t${number}<br>
						selection:\t\t\t${selection}<br>
						match:\t\t\t\t${match}<br>
						languageCode:\t\t${languageCode}<br>
						char:\t\t\t\t${char}<br>
						i:\t\t\t\t${i}<br>
						currentFontSize:\t\t${currentFontSize}<br>
						selectedValue:\t\t${selectedValue}<br>
						corsPorxy:\t\t\t${corsPorxy}<br>
						response:\t\t\t${response}<br>
						files:\t\t\t\t${files}<br>
						fileText:\t\t\t${fileText}<br>
						files2:\t\t\t\t${files2}<br>
						fileText2:\t\t\t${fileText2}<br>
						reader2:\t\t\t\t${reader2}<br>
						resultText:\t\t\t${resultText}<br>
						gematriaSelect:\t\t${gematriaSelect}<br>
						textAreaContent:\t\t${textAreaContent}<br>
						maqafDashMinus:\t\t${maqafDashMinus}<br>
						noMaqafDashMinus:\t\t${noMaqafDashMinus}<br>
						hebrewCharacters:\t\t${hebrewCharacters}<br>
						noNiqqudContent:\t\t${noNiqqudContent}<br>
						noPunctuationContent:\t${noPunctuationContent}<br>
						noDigitsContent:\t\t${noDigitsContent}<br>
						noSpacesContent:\t\t${noSpacesContent}<br>
						noCarriageReturnsContent:\t${noCarriageReturnsContent}<br>
						noLatinLettersContent:\t${noLatinLettersContent}<br>
						noGreekLettersContent:\t${noGreekLettersContent}<br>
						noHebrewLettersContent:\t${noHebrewLettersContent}<br>`;*/
		document.getElementById("modal-message").innerHTML = message;
		document.getElementById("myModal").style.display = "block";
		}
		function closeModal() {
		document.getElementById("myModal").style.display = "none";
		}
		window.onclick = function(event) {
		if (event.target == document.getElementById("myModal")) {
			document.getElementById("myModal").style.display = "none";
		}
		}

		// Copy functionality
		/*copyBtn.addEventListener('click', () => {
		    if (textHighlight) {
		        // Copy the highlighted text to the clipboard
		        navigator.clipboard.writeText(textHighlight).then(function() {
		            console.log('Text copied to clipboard successfully');
		        }, function(err) {
		            console.error('Could not copy text: ', err);
		        });
		    }
			
		});
		
		// Copy listener
		copyBtn.addEventListener('click', () => {
		    if (textHighlight) {
		        // Copy the highlighted text to the clipboard
		        navigator.clipboard.writeText(textHighlight).then(function() {
		            console.log('Text copied to clipboard successfully');
		        }, function(err) {
		            console.error('Could not copy text: ', err);
		        });

		        // Open the browser's find dialog window
		        const key = window.navigator.platform === 'MacIntel' ? 'f' : 'F';
		        const simulatedEvent = new KeyboardEvent('keydown', { key: key, ctrlKey: window.navigator.platform !== 'MacIntel', metaKey: window.navigator.platform === 'MacIntel' });
		        window.dispatchEvent(simulatedEvent);
		    }
		});*/

		// The Translate button's functionality
		translateBtn.addEventListener('click', () => {
		    // Extract the language code from the navigator.language string
		    const languageCode = navigator.language.split('-')[0];
		    const url = `https://translate.google.com/#view=home&op=translate&sl=auto&tl=${languageCode}&text=${encodeURIComponent(textHighlight)}`;
		    window.open(url, '_blank');
		});

        // The Print button's functionality
        printBtn.addEventListener('click', () => {
            const printContent = textArea.textContent;
            const printWindow = window.open('', '', 'height=600,width=800');
            printWindow.document.write(`<html><head><title>Print</title></head><body>${printContent}</body></html>`);
            printWindow.document.close();
            printWindow.focus();
            printWindow.print();
            printWindow.close();
        });

        // The Export button's functionality
        exportBtn.addEventListener('click', () => {
            const blob = new Blob([textArea.textContent], { type: 'text/plain' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'text.txt';
            a.click();
        });

        // The Clear button's functionality
        clearBtn.addEventListener('click', () => {
            textArea.textContent = '';
			clearBtn.textHighlight = '';
			document.getElementById('verses').innerHTML = ``;
			document.getElementById('words').innerHTML = ``;
			document.getElementById('letters').innerHTML = ``;
			document.getElementById('sum').innerHTML = ``;
			document.getElementById('encrypted').innerHTML = ``;
			document.getElementById('encryptedsum').innerHTML = ``;
        });

		// The App1 button's functionality
	    app1Btn.addEventListener('click', () => {
        const url = 'app1.php';
        window.open(url, '_blank');
	    });

		// The Help button's functionality
	    helpBtn.addEventListener('click', () => {
        const url = 'help.html';
        window.open(url, '_blank');
	    });
    </script>
    
    <script>
    //Increase the font size within the textArea
	  document.addEventListener('DOMContentLoaded', () => {
	    function increaseFontSize() {
	      const textArea = document.querySelector('#textArea');
	      const currentFontSize = parseFloat(textArea.style.fontSize);
	      if (currentFontSize < 50) {
	        textArea.style.setProperty('font-size', `${currentFontSize + 1}px`, 'important');
	      }
	    }

	    //Decrease the font size within the textArea
	    function decreaseFontSize() {
	      const textArea = document.querySelector('#textArea');
	      const currentFontSize = parseFloat(textArea.style.fontSize);
	      if (currentFontSize > 12) {
	        textArea.style.setProperty('font-size', `${currentFontSize - 1}px`, 'important');
	      }
	    }

	    const upArrow = document.querySelector('.up-arrow img');
	    ['mouseup', 'touchend'].forEach(evt =>
		upArrow.addEventListener(evt, increaseFontSize, { passive: true })
		);

	    const downArrow = document.querySelector('.down-arrow img');
		['mouseup', 'touchend'].forEach(evt =>
		downArrow.addEventListener(evt, decreaseFontSize, { passive: true })
		);
	</script>

	<script>
	/*alert(
				"\nmatch:\t\t\t\t"+match+
				"\nrange:\t\t\t\t"+range+
				"\nnumber:\t\t\t"+number+
				"\nselection:\t\t\t"+selection+
				"\nlanguageCode:\t\t"+languageCode+
				"\nchar:\t\t\t\t"+char+
				"\ni:\t\t\t\t"+i+
				"\ncurrentFontSize:\t\t"+currentFontSize+
				"\nselectedValue:\t\t"+selectedValue+
				"\ncorsPorxy:\t\t\t"+corsPorxy+
				"\nresponse:\t\t\t"+response+
				"\nfiles:\t\t\t\t"+files+
				"\nfileText:\t\t\t"+fileText+
				"\nfiles2:\t\t\t\t"+files2+
				"\n\nfileText2:\t\t\t"+fileText2+
				"\nreader2:\t\t\t\t"+reader2+
				"\nresultText:\t\t\t"+resultText+
				"\ngematriaSelect:\t\t"+gematriaSelect+
				"\ntextAreaContent:\t\t"+textAreaContent+
				"\nmaqafDashMinus:\t\t"+maqafDashMinus+
				"\nnoMaqafDashMinus:\t\t"+noMaqafDashMinus+
				"\nhebrewCharacters:\t\t"+hebrewCharacters+
				"\nnoNiqqudContent:\t\t"+noNiqqudContent+
				"\nnoPunctuationContent:\t"+noPunctuationContent+
				"\nnoDigitsContent:\t\t"+noDigitsContent+
				"\nnoSpacesContent:\t\t"+noSpacesContent+
				"\nnoCarriageReturnsContent:\t"+noCarriageReturnsContent+
				"\nnoLatinLettersContent:\t"+noLatinLettersContent+
				"\nnoGreekLettersContent:\t"+noGreekLettersContent+
				"\nnoHebrewLettersContent:\t"+noHebrewLettersContent+
				"\n\t\t\t\t\t\t\t\t"+
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
				"\n");*/
</script>
</body>
</html>