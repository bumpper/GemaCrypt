<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="SHORTCUT ICON" href="img/tav.png" />
	<meta name="Rating" content="general" />
	<meta name="DESCRIPTION" content="Decode Hebrew words to find hidden meanings using Gematria. With this app you can find the numerical values of words. Words with the same numerical value are said to spiritual synonyms. Also use the different Hebrew encryption algorithms to find hidden meanings such as AL-bam, At-BaSh, ACh-BI, AYiK-BeCheR, AChaS-BeTA, AT-BeCh to decode hebrew words.  Use the different gematriaot to find a words numerical value like Ragil, Katan, HaKlali, Kolel, HaKadmi, HaPerati, Miluy." />
	<meta name="KEYWORDS" content="Absolute, Ordinal, Reduced, Integral Reduced, Spelling, Pictograms, Meaning, Symbols, Miluy, Miluim, Gematriaot, Gematria, Cryptography, Encrypt, Decrypt, Encode, Decode, BibleCode, Bible, Code, ALBaM, ATBaSh, AChBI, AYiKBeCheR, AChaSBeTA, ATBeCh, ATzBaPh, ALBeTh, AL-BaM, AT-BaSh, ACh-BI, AYiK-BeCheR, AChaS-BeTA, AT-BeCh, ATz-BaPh, AL-BeTh, AL BaM, AT BaSh, ACh BI, AYiK BeCheR, AChaS BeTA, AT BeCh, ATz BaPh, ALBeTh, Ofanim, Sofit, Finals, Initials, Greek, Hebrew, Aramaic, Letter, Sequence, Ananagram, Matrix, Mystery, Word, Value, Verse, Calculate, Calculator, Ragil, Katan, HaKlali, Kolel, HaKadmi, HaPerati, Miluy, Spelling, Torah, 1 Chronicles, 1 Kings, 1 Samuel, 2 Chronicles, 2 Kings, 2 Samuel, Amos, Daniel, Deuteronomy, Ecclesiastes, Esther, Exodus, Ezekiel, Ezra, Genesis, Habakkuk, Haggai, Hosea, Isaiah, Jeremiah, Job, Joel, Jonah, Joshua, Judges, Lamentations, Leviticus, Malachi, Micah, Nahum, Nehemiah, Numbers, Obadiah, Proverbs, Psalms, Ruth, Song of Songs, Song of Solomon, Zechariah, Zephaniah, Tanach, Tanakh, Old Testament, New Testament, Bible, Pseudepigrapha, Apocrypha" />
	<meta name="distribution" content="Global" />
	<meta name="robots" content="FOLLOW,INDEX" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>GemaThesaurus - Advanced Hebrew Text Analysis & Gematria Research Tool</title>
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
        z-index:3;
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
		#breakOutLink{
		position: fixed;          /* viewport-relative */
		top: 0;                   /* touch the very top */
		right: 0;                 /* touch the very right */
		z-index: 100000;          /* stay above everything */
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
		    background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNCA4Ij48cG9seWdvbiBwb2ludHM9IjAsMCA3LDggMTQsMCIgZmlsbD0iI2ZmZiIvPjwvc3ZnPg==");
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
		/* Hide the copy button */
		#copyBtn {
		    display: none;
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
        .gematria-match {
            background-color: #00FF00 !important; /* Bright green background */
            /*color: #000000 !important;  Black text for contrast */
            font-weight: bold !important;
            padding: 1px 2px !important;
            border-radius: 2px !important;
        }
        #statusBar {
	        font-family: Arial, sans-serif;
	        font-size: 12px;
	        position: fixed;
			height: auto;
			min-height: 18px;
			bottom: 2px;
			left: 0;
			right: 0;
			display: flex !important;
			align-items: flex-start;
			flex-wrap: nowrap;
			gap: 5px;				/* gap between items */
			box-sizing: border-box;
			z-index: 1;
			overflow: visible;		/* allow content to show when wrapping */
			border-radius: 0px !important;
			transition: height 0.2s ease;	/* smooth height transitions */
		}
	    .statusBar {
		    background-color: #ccc;
		    padding: 2px;
		    height: auto !important;          /* let JS drive the height */
			min-height: 18px;                /* minimum one row height */
			overflow: visible !important;    /* allow content to wrap */
		    position: fixed;
		    bottom: 0;
		    left: 0;
		    right: 0;
		    display: flex !important;
		    justify-content: flex-start;
		    align-items: flex-start;
			width: 100%;
			border-top: 1px solid #ccc;	/* add a border to separate from textArea */
			flex: 0 0 auto;					/* flexible height */
			border-radius: 0px !important;
			flex-wrap: nowrap;				/* will be controlled by JS */
			transition: height 0.2s ease;	/* smooth height transitions */
		}
		.statusBar.hidden {
			height: 0px !important;
			min-height: 0px !important;
			overflow: hidden !important;
			padding: 0 !important;
			border: none !important;
		}
		.statusBar p span {
			line-height: 18px;  
			margin: 0;
		}
		.statusBar .number {
            direction: ltr;
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
			width: calc(80vw - 200px); /* Subtract the minimum width from the full viewport width */
			min-width: 80px;
			font-size: 16px;
			font-weight: bold;
			background-color: #ccc;
			overflow-y: auto;
			overflow-x: hidden; /* Hide horizontal scrollbar */
			word-wrap: break-word;
			max-height: 54px; /* Allow up to 3 rows (18px * 3) */
			height: auto; /* Allow flexible height */
			display: flex;
			flex-direction: row; /* Change to row so label and content are side by side */
			align-items: flex-start; /* Align items to top */
		}		
		/* Mobile layout for encrypted content - force new line at 930px or less */
		@media (max-width: 930px) {
			.encrypted {
				width: 100%; /* Take full width on smaller screens */
				order: 10; /* Force encrypted content to appear on new line */
			}
		}
		.encrypted .encrypted-label {
			flex-shrink: 0; /* Keep label always visible */
			line-height: 18px;
			height: 18px;
			white-space: nowrap; /* Prevent label from wrapping */
			margin-right: 5px; /* Add space between label and content */
		}
		.encrypted .encrypted-content {
			flex: 1;
			overflow-y: auto;
			overflow-x: hidden;
			word-wrap: break-word;
			line-height: 18px;
			max-height: 36px; /* Max 2 additional rows */
			min-height: 18px; /* Ensure at least one row height */
		}		
		/* Custom scrollbar styling for encrypted content */
		.encrypted .encrypted-content::-webkit-scrollbar {
			width: 12px;
		}		
		.encrypted .encrypted-content::-webkit-scrollbar-track {
			background: #ccc;
		}		
		.encrypted .encrypted-content::-webkit-scrollbar-thumb {
			background: #333;
			border-radius: 6px;
		}		
		.encrypted .encrypted-content::-webkit-scrollbar-thumb:hover {
			background: #555;
		}		
		.encrypted .encrypted-content::-webkit-scrollbar-button {
			background: #333;
			height: 12px;
		}		
		.encrypted .encrypted-content::-webkit-scrollbar-button:hover {
			background: #555;
		}		
		.encrypted .encrypted-content::-webkit-scrollbar-corner {
			background: #ccc;
		}
		.encryptedsum {
			margin-right: 5px;
			width: 220px; 
			min-width: 150px; /* Further increased min-width to ensure visibility */
			font-size: 16px;
			font-weight: bold;
			background-color: #ccc;
			overflow-y: auto;
			flex-shrink: 0; /* Prevent shrinking that could hide content */
		}
		.encryptedsum {
			margin-right: 5px;
			width: 220px;
			min-width: 150px; /* Further increased min-width to ensure visibility */
			font-size: 16px;
			font-weight: bold;
			background-color: #ccc;
			overflow-y: auto;
			flex-shrink: 0; /* Prevent shrinking that could hide content */
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
		.verses, .words, .letters, .sum, .encryptedsum {
			-webkit-appearance: none;
			border-radius: 5 !important;
			height: 18px;
			line-height: 18px;
			overflow: hidden;
		}
		/* Override for encrypted class to allow flexible height */
		.encrypted {
			height: auto !important;
			overflow: visible !important;
		}
		.modal {
		display: none;
		position: fixed;
		z-index: 4;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow-y: auto;
		overflow-x: hidden;
		background-color: rgba(0, 0, 0, 0.4);
		/* Enable smooth scrolling */
		scroll-behavior: smooth;
		-webkit-overflow-scrolling: touch; /* iOS momentum scrolling */
		}
		.modal-content {
		background-color: #fefefe;
		margin: 5vh auto;
		padding: 20px;
		border: 1px solid #888;
		width: 80%;
		min-width: 400px;
		max-width: 90vw;
		max-height: 90vh;
		overflow-y: auto;
		overflow-x: auto;
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
		/* Ensure proper box sizing */
		box-sizing: border-box;
		/* Enable smooth scrolling within modal content */
		scroll-behavior: smooth;
		-webkit-overflow-scrolling: touch;
		/* Allow modal to expand as needed */
		resize: both;
		}
		/* Responsive modal sizing */
		@media (max-width: 768px) {
			.modal-content {
				width: 95%;
				margin: 2vh auto;
				max-height: 96vh;
				padding-left: 15px;
				padding-right: 15px;
			}
		}
		@media (max-height: 600px) {
			.modal-content {
				margin: 1vh auto;
				max-height: 98vh;
			}
		}
		
		/* ELS Modal responsive controls */
		#elsModal .els-controls {
			display: flex;
			flex-direction: row;
			align-items: flex-start;
			justify-content: center;
			gap: 10px;
		}
		
		/* When modal is narrow, stack vertically */
		#elsModal.narrow-modal .els-controls {
			flex-direction: column;
			align-items: center;
			gap: 15px;
		}
		
		#elsModal.narrow-modal .els-controls .els-input-group {
			width: 100%;
			max-width: 250px;
		}
		
		#elsModal.narrow-modal .els-controls .els-input-group input {
			width: 100%;
			box-sizing: border-box;
		}
		
		#elsModal.narrow-modal .els-controls #elsSearchBtn {
			margin-top: 0 !important;
			align-self: center;
		}
		
		/* Alt Word radio buttons styling */
		#elsModal .alt-word-controls {
			margin-bottom: 15px;
			text-align: center;
		}
		
		#elsModal .radio-group {
			display: flex;
			justify-content: center;
			align-items: center;
			gap: 20px;
		}
		
		#elsModal .remove-label {
			font-size: 12px;
			font-weight: bold;
			margin-right: 15px;
		}
		
		#elsModal .radio-option {
			display: flex;
			align-items: center;
			gap: 5px;
		}
		
		#elsModal .radio-option input[type="radio"] {
			margin: 0;
		}
		
		#elsModal .radio-option label {
			font-size: 12px;
			margin: 0;
			cursor: pointer;
			font-weight: normal;
		}
		
		#elsModal .radio-option label .asterisk {
			color: red;
		}
		
		#elsModal .radio-option label .flower {
			color: red;
		}
		
		#elsModal .radio-option input[type="radio"]:disabled + label {
			color: #999;
			cursor: not-allowed;
		}
		
		#elsModal .radio-option input[type="radio"]:disabled {
			cursor: not-allowed;
		}
		
		#elsModal.narrow-modal .radio-group {
			flex-direction: column;
			align-items: center;
			gap: 10px;
		}
		
		#elsModal.narrow-modal .remove-label {
			margin-right: 0;
			margin-bottom: 10px;
			display: block;
		}
		
		/* Checkbox container for text cleanup options */
		.cleanup-checkbox-container {
			display: flex;
			align-items: center;
			gap: 8px;
			margin-top: 8px;
			font-size: 11px;
		}
		
		.cleanup-checkbox-container input[type="checkbox"] {
			margin: 0;
			transform: scale(1.1);
		}
		
		.cleanup-checkbox-container label {
			margin: 0;
			cursor: pointer;
			user-select: none;
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
		
		/* Loading Indicator Styles */
		#loadingIndicator {
			display: none;
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			z-index: 10000;
			background: rgba(0, 0, 0, 0.8);
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
		}
		
		#loadingIndicator.show {
			display: flex !important;
			flex-direction: row !important;
			align-items: center !important;
			gap: 25px !important;
		}
		
		.spinner {
			width: 50px;
			height: 50px;
			border: 5px solid rgba(255, 255, 255, 0.3);
			border-top: 5px solid #fff;
			border-radius: 50%;
			animation: spin 1s linear infinite;
		}
		
		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
		
		#loadingIndicator p {
			color: #fff;
			margin: 0 !important; /* Remove all margins that could interfere */
			text-align: center;
			font-size: 12px;
			font-weight: bold;
			font-family: Arial, sans-serif;
		}
		
		#loadingCounter {
			color: #fff;
			margin: 0 !important; /* Remove all margins that could interfere */
			text-align: center;
			font-size: 16px;
			font-weight: bold;
			font-family: 'Courier New', monospace;
			letter-spacing: 2px;
		}
		
		/* Container for loading text elements */
		#loadingIndicator .loading-text {
			display: flex;
			flex-direction: column;
			gap: 5px;
			align-items: center;
		}
		
		/* === MOBILE ONLY (≤ 600 px) === */
		@media (max-width: 650px) {
			/* Loading indicator mobile adjustments */
			#loadingIndicator {
				padding: 20px;
				display: flex;
				flex-direction: row;
				align-items: center;
				justify-content: center;
				gap: 15px; /* Consistent spacing between spinner and text */
			}
			
			#loadingIndicator.show {
				display: flex;
			}
			
			/* Reset margins for horizontal layout */
			#loadingIndicator p {
				margin-top: 0;
				margin-bottom: 0;
			}
			
			#loadingCounter {
				margin-top: 0;
				margin-bottom: 0;
			}
			
			/* Container for text elements to maintain vertical alignment */
			#loadingIndicator .loading-text {
				display: flex;
				flex-direction: column;
				gap: 5px;
			}
			
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
				z-index: 2;
				background: #ccc;
		    }
		    /* 2. Buttons / selects keep their width */
		    .toolbar > button,
		    .toolbar > select {
		        width: auto;
		        min-width: 80px;
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
		        z-index: 3;
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
		/* Status bar responsive behavior - only wrap when absolutely necessary */
		@media (max-width: 1220px) {
			.statusBar {
				flex-wrap: wrap;                 /* Allow wrapping when needed */
				height: auto !important;         /* Allow height to grow */
			}			
			.encryptedsum {
				min-width: 150px !important;    /* Reduce min-width to allow more flexibility */
				flex-shrink: 0 !important;      /* Never allow shrinking */
			}			
			.sum {
				min-width: 120px !important;    /* Allow some flexibility */
				flex-shrink: 0 !important;      /* Never allow shrinking */
			}			
			.verses, .words, .letters {
				flex-shrink: 1;                 /* Allow shrinking if needed */
				min-width: 70px !important;     /* Reduce minimum to allow more on one line */
			}
		}		
		/* Additional protection for very narrow screens */
		@media (max-width: 900px) {
			.statusBar {
				flex-wrap: wrap !important;
				height: auto !important;
				min-height: 44px !important;    /* Ensure space for 2+ rows */
			}			
			.encryptedsum, .sum {
				min-width: 120px !important;    /* Reduce min-width for better fitting */
				flex-basis: auto !important;    /* Allow natural sizing */
			}			
			.verses, .words, .letters {
				min-width: 60px !important;     /* Further reduce for narrow screens */
			}
		}
		</style>

<script>
	// Declair variables initially
	var L01 = 1;L02 = 2;L03 = 3;L04 = 4;L05 = 5;L06 = 6;L07 = 7;L08 = 8;L09 = 9;L10 = 10;L11 = 20;L12 = 30;L13 = 40;L14 = 50;L15 = 60;L16 = 70;L17 = 80;L18 = 90;L19 = 100;L20 = 200;L21 = 300;L22 = 400;L23 = 500;L24 = 600;L25 = 700;L26 = 800;L27 = 900;
	var textTotal=wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=encryptedTotal=encryptedsum=0;
	var letter=textEncrypted=cryptography=input='';
	
	// Language detection variable
	var detectedLanguage = '';
	
	// Variable to store the current book path
	var currentBook = '/gemacrypt/files/books/default.txt';

	// Green flash effect function for buttons
	function greenFlash(buttonElement) {
		if (!buttonElement) return;
		
		// Store original background color and transition
		const originalBgColor = buttonElement.style.backgroundColor || '#3333aa';
		const originalTransition = buttonElement.style.transition;
		
		// Set smooth transition for fade effect
		buttonElement.style.transition = 'background-color 0.3s ease';
		
		// Fade to light blue background (#48bef5)
		buttonElement.style.backgroundColor = '#48bef5';
		
		// After a brief flash, fade back to original color and remove focus
		setTimeout(() => {
			buttonElement.style.backgroundColor = originalBgColor;
			
			// Remove focus to prevent the button from staying in focus state
			buttonElement.blur();
			
			// Restore original transition after fade completes
			setTimeout(() => {
				buttonElement.style.transition = originalTransition;
			}, 300);
		}, 200); // Reduced from 1000ms to 200ms for a quick flash effect
	}

	const colors = ['red', 'purple', 'darkgrey', 'darkblue', 'lightblue', 'brown', 'orange'];
	let availableColors = [...colors];
	
	// Language Detection Function
	function detectLanguage(text) {
		// Count characters by language
		let hebrewCount = 0;
		let greekCount = 0;
		let englishCount = 0;
		let totalLetters = 0;
		
		// Iterate through each character in the text
		for (let i = 0; i < text.length; i++) {
			const char = text[i];
			const code = char.charCodeAt(0);
			
			// Check for Hebrew letters (including finals)
			// Hebrew range: 0x05D0-0x05EA (regular) + 0x05DA-0x05E5 (finals overlap)
			if ((code >= 0x05D0 && code <= 0x05EA) || 
			    char === "\u05DA" || char === "\u05DD" || char === "\u05DF" || 
			    char === "\u05E3" || char === "\u05E5") {
				hebrewCount++;
				totalLetters++;
			}
			// Check for Greek letters (including accented variants)
			else if (code >= 0x0370 && code <= 0x03FF) {
				greekCount++;
				totalLetters++;
			}
			// Check for English/Latin letters
			else if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
				englishCount++;
				totalLetters++;
			}
		}
		
		// Determine primary language based on highest percentage
		// Need at least 10 letters to make a determination
		if (totalLetters < 10) {
			return 'Unknown (insufficient text)';
		}
		
		// Calculate percentages
		const hebrewPercent = (hebrewCount / totalLetters) * 100;
		const greekPercent = (greekCount / totalLetters) * 100;
		const englishPercent = (englishCount / totalLetters) * 100;
		
		// Determine language (require at least 70% to be confident)
		let language = 'Other';
		let maxPercent = 0;
		
		if (hebrewPercent > maxPercent) {
			maxPercent = hebrewPercent;
			language = 'Hebrew';
		}
		if (greekPercent > maxPercent) {
			maxPercent = greekPercent;
			language = 'Greek';
		}
		if (englishPercent > maxPercent) {
			maxPercent = englishPercent;
			language = 'English';
		}
		
		// If no language has at least 70%, mark as mixed/other
		if (maxPercent < 70) {
			language = 'Mixed/Other';
		}
		
		// Return detailed result
		return `${language} (${maxPercent.toFixed(1)}% - H:${hebrewPercent.toFixed(1)}% G:${greekPercent.toFixed(1)}% E:${englishPercent.toFixed(1)}%)`;
	}

	// Function to calculate encrypted total
	function calculateEncryptedTotal() {
		encryptedTotal = 0;
		
		// Handle the case where encryptionSelect is at default "Encryption" value but textEncrypted is empty (page load scenario)
		const encryptionSelect = document.getElementById('encryptionSelect');
		if (encryptionSelect && encryptionSelect.value === 'Encryption' && textEncrypted === '') {
			// Perform AT-BaSh encryption on the input to populate textEncrypted
			let currentTextEncrypted = '';
			
			for (let i = 0; i < input.length; i++) {
				let letter = '';
				switch(input[i]) {
					/*aleph*/	case "\u05D0": letter = "\u05EA"; break;	// tav
					/*bet*/		case "\u05D1": letter = "\u05E9"; break;	// shin
					/*gimel*/	case "\u05D2": letter = "\u05E8"; break;	// resh
					/*dalet*/	case "\u05D3": letter = "\u05E7"; break;	// kuf
					/*hey*/		case "\u05D4": letter = "\u05E6"; break;	// tzadi
					/*vav*/		case "\u05D5": letter = "\u05E4"; break;	// pey
					/*zayin*/	case "\u05D6": letter = "\u05E2"; break;	// ayin
					/*chet*/	case "\u05D7": letter = "\u05E1"; break;	// samech
					/*tet*/		case "\u05D8": letter = "\u05E0"; break;	// nun
					/*yod*/		case "\u05D9": letter = "\u05DE"; break;	// mem
					/*kaf*/		case "\u05DB": letter = "\u05DC"; break;	// lamed
					/*lamed*/	case "\u05DC": letter = "\u05DB"; break;	// kaf
					/*mem*/		case "\u05DE": letter = "\u05D9"; break;	// yod
					/*nun*/		case "\u05E0": letter = "\u05D8"; break;	// tet
					/*samech*/	case "\u05E1": letter = "\u05D7"; break;	// chet
					/*ayin*/	case "\u05E2": letter = "\u05D6"; break;	// zayin
					/*pey*/		case "\u05E4": letter = "\u05D5"; break;	// vav
					/*tzadi*/	case "\u05E6": letter = "\u05D4"; break;	// hey
					/*kuf*/		case "\u05E7": letter = "\u05D3"; break;	// dalet
					/*resh*/	case "\u05E8": letter = "\u05D2"; break;	// gimel
					/*shin*/	case "\u05E9": letter = "\u05D1"; break;	// bet
					/*tav*/		case "\u05EA": letter = "\u05D0"; break;	// aleph
					/*kaf F*/	case "\u05DA": letter = "\u05DC"; break;	// lamed
					/*mem F*/	case "\u05DD": letter = "\u05D9"; break;	// yod
					/*nun F*/	case "\u05DF": letter = "\u05D8"; break;	// tet
					/*pey F*/	case "\u05E3": letter = "\u05D5"; break;	// vav
					/*tzadi F*/	case "\u05E5": letter = "\u05D4"; break;	// hey
					default: letter = input[i]; break; // Keep non-Hebrew characters as-is
				}
				currentTextEncrypted += letter;
			}
			
			// Update the global textEncrypted variable
			textEncrypted = currentTextEncrypted;
		}

		// Calculate encrypted total from textEncrypted
		for (let i = 0; i < textEncrypted.length; i++) {
			const char = textEncrypted[i];
			switch (char) {
				// Hebrew letters
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
				// Greek letters
				case "\u0386": encryptedTotal += L01;	break;	//alpha		Ά
				case "\u0391": encryptedTotal += L01;	break;	//alpha		Α
				case "\u03AC": encryptedTotal += L01;	break;	//alpha		ά
				case "\u03B1": encryptedTotal += L01;	break;	//alpha		α
				case "\u0392": encryptedTotal += L02;	break;	//beta		Β
				case "\u03B2": encryptedTotal += L02;	break;	//beta		β
				case "\u0393": encryptedTotal += L03;	break;	//gamma		Γ
				case "\u03B3": encryptedTotal += L03;	break;	//gamma		γ
				case "\u0394": encryptedTotal += L04;	break;	//delta		Δ
				case "\u03B4": encryptedTotal += L04;	break;	//delta		δ
				case "\u0388": encryptedTotal += L05;	break;	//epsilon	Έ
				case "\u0395": encryptedTotal += L05;	break;	//epsilon	Ε
				case "\u03AD": encryptedTotal += L05;	break;	//epsilon	έ
				case "\u03B5": encryptedTotal += L05;	break;	//epsilon	ε
				case "\u0396": encryptedTotal += L07;	break;	//zeta		Ζ
				case "\u03B6": encryptedTotal += L07;	break;	//zeta		ζ
				case "\u0389": encryptedTotal += L08;	break;	//eta		Ή
				case "\u0397": encryptedTotal += L08;	break;	//eta		Η
				case "\u03AE": encryptedTotal += L08;	break;	//eta		ή
				case "\u03B7": encryptedTotal += L08;	break;	//eta		η
				case "\u0398": encryptedTotal += L09;	break;	//theta		Θ
				case "\u03B8": encryptedTotal += L09;	break;	//theta		θ
				case "\u038A": encryptedTotal += L10;	break;	//iota		Ί
				case "\u0399": encryptedTotal += L10;	break;	//iota		Ι
				case "\u03AF": encryptedTotal += L10;	break;	//iota		ί
				case "\u03B9": encryptedTotal += L10;	break;	//iota		ι
				case "\u039A": encryptedTotal += L11;	break;	//kappa		Κ
				case "\u03BA": encryptedTotal += L11;	break;	//kappa		κ
				case "\u039B": encryptedTotal += L12;	break;	//lambda	Λ
				case "\u03BB": encryptedTotal += L12;	break;	//lambda	λ
				case "\u039C": encryptedTotal += L13;	break;	//mu		Μ
				case "\u03BC": encryptedTotal += L13;	break;	//mu		μ
				case "\u039D": encryptedTotal += L14;	break;	//nu		Ν
				case "\u03BD": encryptedTotal += L14;	break;	//nu		ν
				case "\u039E": encryptedTotal += L15;	break;	//xi		Ξ
				case "\u03BE": encryptedTotal += L15;	break;	//xi		ξ
				case "\u038C": encryptedTotal += L16;	break;	//omicron	Ό
				case "\u039F": encryptedTotal += L16;	break;	//omicron	Ο
				case "\u03CC": encryptedTotal += L16;	break;	//omicron	ό
				case "\u03BF": encryptedTotal += L16;	break;	//omicron	ο
				case "\u03A0": encryptedTotal += L17;	break;	//pi		Π
				case "\u03C0": encryptedTotal += L17;	break;	//pi		π
				case "\u03A1": encryptedTotal += L18;	break;	//rho		Ρ
				case "\u03C1": encryptedTotal += L18;	break;	//rho		ρ
				case "\u03A3": encryptedTotal += L19;	break;	//sigma		Σ
				case "\u03C2": encryptedTotal += L19;	break;	//sigma		ς
				case "\u03C3": encryptedTotal += L19;	break;	//sigma		σ
				case "\u03A4": encryptedTotal += L20;	break;	//tau		Τ
				case "\u03C4": encryptedTotal += L20;	break;	//tau		τ
				case "\u038E": encryptedTotal += L21;	break;	//upsilon	Ύ
				case "\u03A5": encryptedTotal += L21;	break;	//upsilon	Υ
				case "\u03CD": encryptedTotal += L21;	break;	//upsilon	ύ
				case "\u03C5": encryptedTotal += L21;	break;	//upsilon	υ
				case "\u03A6": encryptedTotal += L22;	break;	//phi		Φ
				case "\u03C6": encryptedTotal += L22;	break;	//phi		φ
				case "\u03A7": encryptedTotal += L23;	break;	//chi		Χ
				case "\u03C7": encryptedTotal += L23;	break;	//chi		χ
				case "\u03A8": encryptedTotal += L24;	break;	//psi		Ψ
				case "\u03C8": encryptedTotal += L24;	break;	//psi		ψ
				case "\u038F": encryptedTotal += L25;	break;	//omega		Ώ
				case "\u03A9": encryptedTotal += L25;	break;	//omega		Ω
				case "\u03CE": encryptedTotal += L25;	break;	//omega		ώ
				case "\u03C9": encryptedTotal += L25;	break;	//omega		ω
				// English letters
				case "A": case "a": encryptedTotal += 1; break;
				case "B": case "b": encryptedTotal += 2; break;
				case "C": case "c": encryptedTotal += 3; break;
				case "D": case "d": encryptedTotal += 4; break;
				case "E": case "e": encryptedTotal += 5; break;
				case "F": case "f": encryptedTotal += 6; break;
				case "G": case "g": encryptedTotal += 7; break;
				case "H": case "h": encryptedTotal += 8; break;
				case "I": case "i": encryptedTotal += 9; break;
				case "J": case "j": encryptedTotal += 10; break;
				case "K": case "k": encryptedTotal += 11; break;
				case "L": case "l": encryptedTotal += 12; break;
				case "M": case "m": encryptedTotal += 13; break;
				case "N": case "n": encryptedTotal += 14; break;
				case "O": case "o": encryptedTotal += 15; break;
				case "P": case "p": encryptedTotal += 16; break;
				case "Q": case "q": encryptedTotal += 17; break;
				case "R": case "r": encryptedTotal += 18; break;
				case "S": case "s": encryptedTotal += 19; break;
				case "T": case "t": encryptedTotal += 20; break;
				case "U": case "u": encryptedTotal += 21; break;
				case "V": case "v": encryptedTotal += 22; break;
				case "W": case "w": encryptedTotal += 23; break;
				case "X": case "x": encryptedTotal += 24; break;
				case "Y": case "y": encryptedTotal += 25; break;
				case "Z": case "z": encryptedTotal += 26; break;
				default: break; // Ignore other characters
			}
		}
		
		// Apply gematria modifiers
		var gematriaSelect = document.getElementById('gematriaSelect');
		if(gematriaSelect.value == "HaKlali"){
			encryptedTotal = encryptedTotal * encryptedTotal;
		}
		else if(gematriaSelect.value == "Kolel"){
			encryptedTotal += letterCount;
		}
		else if(gematriaSelect.value == "Kolel+1"){
			encryptedTotal += wordCount;
		}
		else if (gematriaSelect.value == "IntegralReduced"){
			while(encryptedTotal >= 10){
				let product = Math.floor(encryptedTotal / 10);
				let remainder = encryptedTotal % 10;
				encryptedTotal = remainder + product;
			}
		}
		
		// Update encryptedsum for display
		encryptedsum = encryptedTotal;
	}
</script>

</head>
<body>
<div class="hidden-title"><center><h1>GemaThesaurus</h1></center></p></div>
    <div class="toolbar">
        <button id="openBtn" class="textBtn" onclick="greenFlash(this)"><!--<img src="img/open.png" height="13" width="16" border="0" alt="Open">-->&#x1F4C2;<img src="img/invis.gif" width="4" border="0">Open</button>
		
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
			/* dynamically adjust textarea max-height based on toolbar state */
			const ta = document.getElementById('textArea');
			if (ta) {
				ta.style.transition = 'max-height 0s';
				// When collapsed: only 8px for toggler, when expanded: 40px for toolbar + 8px for toggler
				const toolbarHeight = collapsed ? 8 : 48;
				const statusBarHeight = 18;
				ta.style.maxHeight = `calc(100vh - ${toolbarHeight}px - ${statusBarHeight}px)`;
			}
		}
		toggler.addEventListener('mouseup',  toggleToolbar);
		toggler.addEventListener('touchend', toggleToolbar);

        /* 3. start open with UP arrow showing */
        toggler.classList.add('up');
        
        /* 4. initialize textArea max-height on page load */
        document.addEventListener('DOMContentLoaded', () => {
            const ta = document.getElementById('textArea');
            if (ta) {
                // Set initial max-height for expanded toolbar (40px toolbar + 8px toggler + 18px statusBar)
                ta.style.maxHeight = 'calc(100vh - 48px - 18px)';
            }
        });
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
			// Function to highlight asterisks and flower punctuation marks in red
			function highlightSpecialCharacters(text) {
				// Escape HTML to prevent injection, but preserve line breaks
				const div = document.createElement('div');
				div.textContent = text;
				let escapedText = div.innerHTML;
				
				// Replace asterisks (*) with red colored version
				escapedText = escapedText.replace(/\*/g, '<span style="color: #FF0000;">*</span>');
				
				// Replace flower punctuation marks (⁕ U+2055) with red colored version
				escapedText = escapedText.replace(/⁕/g, '<span style="color: #FF0000;">⁕</span>');
				
				return escapedText;
			}
			
			// Function to remove all text formatting (colors, backgrounds, etc.) and apply only red highlighting to asterisks and flower marks
			function removeAllTextFormatting() {
				const textArea = document.getElementById('textArea');
				if (!textArea) return;
				
				// Get plain text content
				const plainText = textArea.textContent || textArea.innerText || '';
				
				// Apply only red highlighting to special characters
				const cleanedContent = highlightSpecialCharacters(plainText);
				
				// Update textArea with cleaned content
				textArea.innerHTML = cleanedContent;
			}
			
			// Function to remove only yellow backgrounds while preserving other formatting
			function removeYellowBackgrounds() {
				const textArea = document.getElementById('textArea');
				if (!textArea) return;
				
				// Find all elements with yellow backgrounds
				const elementsWithYellowBg = textArea.querySelectorAll('*');
				
				elementsWithYellowBg.forEach(element => {
					const style = element.style;
					if (style.backgroundColor === 'yellow' || 
						style.backgroundColor === '#FFFF00' || 
						style.backgroundColor === '#ffff00' ||
						style.backgroundColor === 'rgb(255, 255, 0)' ||
						style.backgroundColor.includes('rgba(255, 255, 0')) {
						
						// Remove yellow background but preserve other styles
						style.removeProperty('background-color');
						
						// If the element has no other styles, remove the style attribute entirely
						if (!style.cssText.trim()) {
							element.removeAttribute('style');
						}
						
						// If the element has no attributes left and is just a span, unwrap it
						if (element.tagName === 'SPAN' && !element.hasAttributes()) {
							const parent = element.parentNode;
							while (element.firstChild) {
								parent.insertBefore(element.firstChild, element);
							}
							parent.removeChild(element);
							parent.normalize();
						}
					}
				});
			}
			
		// Loading Indicator Management
		let loadingTimeout = null;
		let loadingCounterInterval = null;
		let loadingStartTime = 0;
		
		function showLoadingIndicator() {
			const indicator = document.getElementById('loadingIndicator');
			const counter = document.getElementById('loadingCounter');
			
			// Reset counter
			loadingStartTime = Date.now();
			if (counter) {
				counter.textContent = '0.00';
			}
			
			// Set a timeout to show the indicator after 0.2 seconds
			loadingTimeout = setTimeout(() => {
				if (indicator) {
					indicator.classList.add('show');
					
					// Start the counter
					loadingCounterInterval = setInterval(() => {
						if (counter) {
							const elapsed = (Date.now() - loadingStartTime) / 1000; // Convert to seconds
							counter.textContent = elapsed.toFixed(2); // Format as X.XX
						}
					}, 10); // Update every 10ms (hundredths of a second)
				}
			}, 200); // 200ms = 0.2 seconds
		}
		
		function hideLoadingIndicator() {
			// Clear the timeout if loading completes before 0.2 seconds
			if (loadingTimeout) {
				clearTimeout(loadingTimeout);
				loadingTimeout = null;
			}
			
			// Stop the counter
			if (loadingCounterInterval) {
				clearInterval(loadingCounterInterval);
				loadingCounterInterval = null;
			}
			
			// Hide the indicator if it's showing
			const indicator = document.getElementById('loadingIndicator');
			if (indicator) {
				indicator.classList.remove('show');
				
				// Clear any forced CSS styles that might override the class behavior
				indicator.style.display = '';
				indicator.style.opacity = '';
				indicator.style.visibility = '';
			}
		}
		
		// Immediate loading indicator for calculations (no delay)
		function showCalculationLoadingIndicator() {
			console.log('showCalculationLoadingIndicator called'); // Debug timing
			
			const indicator = document.getElementById('loadingIndicator');
			const counter = document.getElementById('loadingCounter');
			
			console.log('Loading indicator element found:', !!indicator); // Debug
			console.log('Loading counter element found:', !!counter); // Debug
			
			// Reset counter
			loadingStartTime = Date.now();
			if (counter) {
				counter.textContent = '0.00';
			}
			
			// Show immediately without delay and force immediate visibility
			if (indicator) {
				console.log('Adding show class to indicator'); // Debug timing
				indicator.classList.add('show');
				
				// Force immediate visibility and bypass any CSS transitions
				indicator.style.display = 'flex';
				indicator.style.opacity = '1';
				indicator.style.visibility = 'visible';
				
				console.log('Show class added and visibility forced'); // Debug timing
				
				// Start the counter
				loadingCounterInterval = setInterval(() => {
					if (counter) {
						const elapsed = (Date.now() - loadingStartTime) / 1000; // Convert to seconds
						counter.textContent = elapsed.toFixed(2); // Format as X.XX
					}
				}, 10); // Update every 10ms (hundredths of a second)
			}
			
			console.log('showCalculationLoadingIndicator completed'); // Debug timing
		}
		
		// Function to progressively process file content for display
		function processFileContentProgressively(textArea, content) {
			console.log(`Loading file content progressively: ${content.length} characters`);
			
			// Apply highlighting to the content
			const highlightedContent = highlightSpecialCharacters(content);
			
			// For smaller files, load immediately
			if (content.length < 50000) { // Less than 50KB
				textArea.innerHTML = highlightedContent;
				hideLoadingIndicator();
				return;
			}
			
			// For larger files, use progressive loading
			const lines = highlightedContent.split(/\r\n|\n|\r/);
			let processedLines = [];
			
			const DISPLAY_CHUNK_SIZE = 200; // Show 200 lines at a time
			let currentLineIndex = 0;
			let firstDisplayShown = false;
			
			function processNextChunk() {
				const chunkEnd = Math.min(currentLineIndex + DISPLAY_CHUNK_SIZE, lines.length);
				
				// Add lines to processed content
				for (let i = currentLineIndex; i < chunkEnd; i++) {
					processedLines.push(lines[i]);
				}
				
				currentLineIndex = chunkEnd;
				
				// Update display
				textArea.innerHTML = processedLines.join('\n');
				
				// Hide loading indicator after first chunk is displayed
				if (!firstDisplayShown) {
					firstDisplayShown = true;
					hideLoadingIndicator();
				}
				
				// Continue processing if there are more lines
				if (currentLineIndex < lines.length) {
					setTimeout(processNextChunk, 1);
				}
			}
			
			// Start processing
			processNextChunk();
		}
		
		// CORS Proxy Server - to allow the opening of txt files
		async function loadFile(url) {
			// Check if it's a valid file path before proceeding
			if (!url || url === 'Book' || url === '---' || url.trim() === '') {
				return;
			}
			
			// Show immediate loading indicator
			showCalculationLoadingIndicator();
			
			// Set currentBook variable when a book is loaded from bookSelect
			currentBook = url;
			
			// Clear any cached file content since we're loading a new book from the menu
			localStorage.removeItem('gemacrypt_cached_file_content');
			
			let corsProxy = `${window.location.protocol}//${window.location.hostname}/`; // grad whatever the current host's domain name and protocol and append a backslash /
			
			// Force browser rendering before starting file load
			requestAnimationFrame(() => {
				requestAnimationFrame(async () => {
					console.log('Starting file load after forced render...');
					
					try {
						const response = await fetch(corsProxy + url);
						if (response.ok) {
							const text = await response.text();
							const textArea = document.getElementById("textArea");
							
							// Use progressive loading for large files
							processFileContentProgressively(textArea, text);
							
							// Detect language and store in global variable
							detectedLanguage = detectLanguage(text);
							console.log('Language detected:', detectedLanguage);
						} else {
							console.error(`Error loading file from primary CORS proxy: ${response.status} - ${response.statusText}`);
							corsProxy = 'http://radius.center/';
							const response = await fetch(corsProxy + url);
							if (response.ok) {
								const text = await response.text();
								const textArea = document.getElementById('textArea');
								
								// Use progressive loading for large files
								processFileContentProgressively(textArea, text);
								
								// Detect language and store in global variable
								detectedLanguage = detectLanguage(text);
								console.log('Language detected:', detectedLanguage);
							} else {
								console.error(`Error loading file from backup CORS proxy: ${response.status} - ${response.statusText}`);
								hideLoadingIndicator();
							}
						}
					} catch (error) {
						console.error(`Error loading file: ${error}`);
						corsProxy = 'http://radius.center/';
						try {
							const response = await fetch(corsProxy + url);
							if (response.ok) {
								const text = await response.text();
								const textArea = document.getElementById('textArea');
								
								// Use progressive loading for large files
								processFileContentProgressively(textArea, text);
								
								// Detect language and store in global variable
								detectedLanguage = detectLanguage(text);
								console.log('Language detected:', detectedLanguage);
							} else {
								console.error(`Error loading file from backup CORS proxy: ${response.status} - ${response.statusText}`);
								hideLoadingIndicator();
							}
						} catch (backupError) {
							console.error(`Error loading file from backup: ${backupError}`);
							hideLoadingIndicator();
						}
					}
				});
			});
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

		<style>
		#removeSelect {  border-radius: 8px; }
		#removeSelect option          { background:#3333aa; color:#fff; border-radius: 5px; }	/*  Fallback color for any option that does not get an override  */
		#removeSelect option          { background:var(--opt-bg,#3333aa); border-radius: 5px; } 
		#removeSelect option[value*="AltWord2"]					{ --opt-bg:#3333aa; }
		#removeSelect option[value*="AltWord1"]					{ --opt-bg:#3333aa; }
		#removeSelect option[value*="Cantillation"]				{ --opt-bg:#48bef5; }
		#removeSelect option[value*="Niqqud"]					{ --opt-bg:#48bef5; }
		#removeSelect option[value*="Maqaf"]					{ --opt-bg:#48bef5; }
		#removeSelect option[value*="Punctuation"]				{ --opt-bg:#4589a8; }
		#removeSelect option[value*="Digits"]					{ --opt-bg:#4589a8; }
		#removeSelect option[value*="Spaces"]					{ --opt-bg:#4589a8; }
		#removeSelect option[value*="CarriageReturns"]			{ --opt-bg:#4589a8; }
		#removeSelect option[value*="LatinLetters"]				{ --opt-bg:#00aeff; }
		#removeSelect option[value*="GreekLetters"]				{ --opt-bg:#00aeff; }
		#removeSelect option[value*="HebrewLetters"]			{ --opt-bg:#00aeff; }
		#removeSelect option[value*="ConvertFinals"]			{ --opt-bg:#546cad; }
		#removeSelect option[value*="SplitHyphen"]				{ --opt-bg:#546cad; }
		</style>

        <select id="removeSelect" tabIndex="" onChange="">
            <option value='Remove' selected="true">&#x1F6AB; Remove:</option>
			<option value='AltWord2'>Alt Word #2 ⁕</option>
			<option value='AltWord1'>Alt Word #1 *</option>
			<option value='Cantillation'>Cantillation (♫ notes)</option>
			<option value='Niqqud'>Niqqud (Vowel Points)</option>
			<option value='Maqaf'>Maqaf (dash, hypenes)</option>
			<option value='Punctuation'>Punctuation</option>
			<option value='Digits'>Digits</option>
			<option value='Spaces'>Spaces</option>
			<option value='CarriageReturns'>Carriage Returns</option>
			<option value='LatinLetters'>Latin/English Letters</option>
			<option value='GreekLetters'>Greek Letters</option>
			<option value='HebrewLetters'>Hebrew Letters</option>
			<option value='ConvertFinals'>Convert Finals</option>
			<option value='SplitHyphen'>Split Hyphenated</option>

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
			<option value='Encryption' selected="true">&#x1F512; Encryption:   </option>
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

		<button id="calcBtn" class="textBtn" onclick="greenFlash(this); toggleCalc();"><img src="img/calculate.png" height="16" width="14" border="0" alt="Calculate"><img src="img/invis.gif" width="4" border="0">Calc</button>
		<button id="findBtn" class="textBtn" onclick="greenFlash(this); toggleFind()"><img src="img/find.png" height="16" width="14" border="0" alt="Find"><img src="img/invis.gif" width="4" border="0">Find</button>
		<button id="elsBtn" class="textBtn" onclick="greenFlash(this); toggleELS()"><img src="img/els.png" height="16" width="14" border="0" alt="Equidistant Letter Sequence"><img src="img/invis.gif" width="4" border="0">ELS</button>
		<button id="swapBtn" class="textBtn" onclick="greenFlash(this); toggleSwap()"><img src="img/swap.png" height="16" width="14" border="0" alt="Swap"><img src="img/invis.gif" width="4" border="0">Swap</button>
		<button id="copyBtn" class="textBtn" onclick="greenFlash(this)"><img src="img/copy.png" height="16" width="16" border="0" alt="Copy">&#x1F4D1;<img src="img/invis.gif" width="4" border="0">Copy</button>
		<button id="directionBtn" class="textBtn" onclick="greenFlash(this); toggleDirection()"><img src="img/direction.png" height="16" width="20" border="0" alt="Text Direction"><img src="img/invis.gif" width="6" border="0">Align</button>
		<button id="wrapBtn" class="textBtn" onclick="greenFlash(this); toggleWrap()"><img src="img/wrap.png" height="16" width="20" border="0" alt="Wrap Text"><img src="img/invis.gif" width="6" border="0">Wrap</button>
		<button id="lightmodeBtn" class="textBtn" onclick="greenFlash(this); toggleLightMode()"><img src="img/moon.png" height="16" width="16" border="0" alt="Light/Dark Mode"><img src="img/invis.gif" width="4" border="0">Mode</button>
        <button id="translateBtn" class="textBtn" onclick="greenFlash(this)"><img src="img/translate.png" height="16" width="16" border="0" alt="Translate"><img src="img/invis.gif" width="4" border="0">Tran</button>
        <button id="printBtn" class="textBtn" onclick="greenFlash(this)"><img src="img/print.png" height="16" width="16" border="0" alt="Print"><img src="img/invis.gif" width="6" border="0">Print</button>
        <button id="exportBtn" class="textBtn" onclick="greenFlash(this)"><img src="img/export.png" height="16" width="16" border="0" alt="Export"><img src="img/invis.gif" width="6" border="0">Export</button>
        <button id="clearBtn" class="textBtn" onclick="greenFlash(this)"><!--<img src="img/clear.png" height="16" width="16" border="0" alt="Clear"><img src="img/invis.gif" width="4" border="0">-->&#x274C; Clear</button>
		<button id="app1Btn" class="textBtn" onclick="greenFlash(this); openApp1WithSelection()"><img src="img/db.png" height="16" width="16" border="0" alt="GemaCrypt DB"><img src="img/invis.gif" width="4" border="0">DB</button>
        <button id="helpBtn" class="textBtn" onclick="greenFlash(this); window.open('help.html', '_blank')"><img src="img/help.png" height="17" width="14" border="0" alt="Help"><img src="img/invis.gif" width="4" border="0">Help</button>
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
			<div class="encryptedsum" id="encryptedsum"><p><span id="encryptedsum"></span></p></div>
			<div class="encrypted" id="encrypted"><p><span id="encrypted" dir="rtl"></span></p></div>
		</div>
		</div>
    
    <input type="file" id="fileInput" multiple style="display: none;">
	
	<!-- Loading Indicator -->
	<div id="loadingIndicator">
		<div class="spinner"></div>
		<div class="loading-text">
			<p>Loading...</p>
			<p id="loadingCounter">0.00</p>
		</div>
	</div>


	<script>
		// Global variable to track if calculation is in progress
		let isCalculating = false;
		let calculationAborted = false;
		
		function toggleCalc(){
			console.log('toggleCalc function called'); // Debug log
			console.log('About to show loading indicator...'); // Debug timing
			
			// If already calculating, abort the current calculation
			if (isCalculating) {
				calculationAborted = true;
				hideLoadingIndicator();
				return;
			}
			
			// Show loading indicator IMMEDIATELY
			showCalculationLoadingIndicator();
			console.log('Loading indicator function called'); // Debug timing
			
			// Force browser to render the loading indicator before starting heavy processing
			// Use multiple requestAnimationFrame calls to ensure rendering completes
			requestAnimationFrame(() => {
				requestAnimationFrame(() => {
					console.log('Starting processing after forced render...'); // Debug timing
					
					// Get the textArea element
					const textArea = document.getElementById('textArea');
					if (!textArea) {
						console.error('textArea element not found');
						hideLoadingIndicator();
						return;
					}
					
					console.log('textArea found, innerHTML length:', textArea.innerHTML.length); // Debug log
					
					// Remove " ׀" (space followed by ׀) from the textArea content before processing
					let currentContent = textArea.textContent;
					if (currentContent.includes(' \u05C0')) {
						currentContent = currentContent.replace(/ \u05C0/g, '');
						textArea.textContent = currentContent;
						console.log('Removed " ׀" characters from textArea content'); // Debug log
					}
					
					// Store the current innerHTML to preserve ELS highlights during processing
					const originalHtml = textArea.innerHTML;
					const hasElsHighlights = textArea.querySelectorAll('.els-highlight').length > 0;
					
					if (hasElsHighlights) {
						console.log('ELS highlights detected - will preserve them during processing');
					}
					
					// Start progressive calculation
					startProgressiveCalculation(textArea, originalHtml, hasElsHighlights);
				});
			});
		}
		
		// Function to abort calculation
		function abortCalculation() {
			calculationAborted = true;
			isCalculating = false;
			hideLoadingIndicator();
		}
		
		// Function to calculate gematria for a word based on current gematria method
		function calculateWordGematria(word) {
			let total = 0;
			let letterCount = 0;
			let wordCount = 1;
			
			// Calculate base gematria value
			for (let char of word) {
				const code = char.charCodeAt(0);
				// Check for Hebrew finals FIRST (before regular Hebrew letters)
				if (char === "\u05DA" || char === "\u05DD" || char === "\u05DF" || char === "\u05E3" || char === "\u05E5") {
					// Hebrew finals
					letterCount++;
					switch(char) {
						case "\u05DA": total += L23; break; // kaf sofit ך = 500
						case "\u05DD": total += L24; break; // mem sofit ם = 600
						case "\u05DF": total += L25; break; // nun sofit ן = 700
						case "\u05E3": total += L26; break; // pey sofit ף = 800
						case "\u05E5": total += L27; break; // tzadi sofit ץ = 900
					}
				} else if (code >= 0x05D0 && code <= 0x05EA) {
					// Regular Hebrew letters (excluding finals)
					letterCount++;
					switch(char) {
						case "\u05D0": total += L01; break; // aleph
						case "\u05D1": total += L02; break; // bet
						case "\u05D2": total += L03; break; // gimel
						case "\u05D3": total += L04; break; // dalet
						case "\u05D4": total += L05; break; // hey
						case "\u05D5": total += L06; break; // vav
						case "\u05D6": total += L07; break; // zayin
						case "\u05D7": total += L08; break; // chet
						case "\u05D8": total += L09; break; // tet
						case "\u05D9": total += L10; break; // yod
						case "\u05DB": total += L11; break; // kaf
						case "\u05DC": total += L12; break; // lamed
						case "\u05DE": total += L13; break; // mem
						case "\u05E0": total += L14; break; // nun
						case "\u05E1": total += L15; break; // samech
						case "\u05E2": total += L16; break; // ayin
						case "\u05E4": total += L17; break; // pey
						case "\u05E6": total += L18; break; // tzadi
						case "\u05E7": total += L19; break; // kuf
						case "\u05E8": total += L20; break; // resh
						case "\u05E9": total += L21; break; // shin
						case "\u05EA": total += L22; break; // tav
					}
				} else if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
					// English letters
					letterCount++;
					const upper = code >= 65 && code <= 90 ? code : code - 32;
					total += upper - 64;
				} else if (code >= 0x0370 && code <= 0x03FF) {
					// Greek letters
					letterCount++;
					switch(char) {
						case "\u0386": case "\u0391": case "\u03AC": case "\u03B1": total += L01; break; // alpha
						case "\u0392": case "\u03B2": total += L02; break; // beta
						case "\u0393": case "\u03B3": total += L03; break; // gamma
						case "\u0394": case "\u03B4": total += L04; break; // delta
						case "\u0388": case "\u0395": case "\u03AD": case "\u03B5": total += L05; break; // epsilon
						case "\u0396": case "\u03B6": total += L07; break; // zeta
						case "\u0389": case "\u0397": case "\u03AE": case "\u03B7": total += L08; break; // eta
						case "\u0398": case "\u03B8": total += L09; break; // theta
						case "\u038A": case "\u0399": case "\u03AF": case "\u03B9": total += L10; break; // iota
						case "\u039A": case "\u03BA": total += L11; break; // kappa
						case "\u039B": case "\u03BB": total += L12; break; // lambda
						case "\u039C": case "\u03BC": total += L13; break; // mu
						case "\u039D": case "\u03BD": total += L14; break; // nu
						case "\u039E": case "\u03BE": total += L15; break; // xi
						case "\u038C": case "\u039F": case "\u03CC": case "\u03BF": total += L16; break; // omicron
						case "\u03A0": case "\u03C0": total += L17; break; // pi
						case "\u03A1": case "\u03C1": total += L18; break; // rho
						case "\u03A3": case "\u03C2": case "\u03C3": total += L19; break; // sigma
						case "\u03A4": case "\u03C4": total += L20; break; // tau
						case "\u038E": case "\u03A5": case "\u03CD": case "\u03C5": total += L21; break; // upsilon
						case "\u03A6": case "\u03C6": total += L22; break; // phi
						case "\u03A7": case "\u03C7": total += L23; break; // chi
						case "\u03A8": case "\u03C8": total += L24; break; // psi
						case "\u038F": case "\u03A9": case "\u03CE": case "\u03C9": total += L25; break; // omega
						default: break;
					}
				}
			}
			
			// Get current gematria method
			const gematriaSelect = document.getElementById('gematriaSelect');
			let gematriaMethod = gematriaSelect ? gematriaSelect.value : 'Ragil';
			
			// Apply gematria modifiers based on selected method
			if(gematriaMethod == "HaKlali"){
				total = total * total;
			}
			else if(gematriaMethod == "Kolel"){
				total += letterCount;
			}
			else if(gematriaMethod == "Kolel+1"){
				total += wordCount;
			}
			else if (gematriaMethod == "IntegralReduced"){
				while(total >= 10){
					let product = Math.floor(total / 10);
					let remainder = total % 10;
					total = remainder + product;
				}
			}
			
			return total;
		}
		
		// Main progressive calculation function
		function startProgressiveCalculation(textArea, originalHtml, hasElsHighlights) {
			isCalculating = true;
			calculationAborted = false;
			
			// Loading indicator is already shown in toggleCalc()
			
			// Process immediately without delay
			try {
				// Process the content based on whether we have ELS highlights
				if (hasElsHighlights) {
					processContentWithElsHighlights(textArea, originalHtml);
				} else {
					processContentWithFormatting(textArea, originalHtml);
				}
			} catch (error) {
				console.error('Error during calculation:', error);
				hideLoadingIndicator();
				isCalculating = false;
				alert('An error occurred during calculation. Please try again.');
			}
		}
		
		// Function to process content and preserve ELS highlights (progressive version)
		function processContentWithElsHighlights(textArea, originalHtml) {
			console.log('Processing content with ELS highlights preservation (progressive)');
			
			// Create a temporary div with the original HTML
			const tempDiv = document.createElement('div');
			tempDiv.innerHTML = originalHtml;
			
			// Get all text nodes and ELS highlights in order
			const elements = [];
			
			function collectElements(node) {
				if (node.nodeType === Node.TEXT_NODE) {
					if (node.textContent.trim()) { // Only collect non-empty text nodes
						// Check if this text node is inside an ELS highlight or swap color
						let currentParent = node.parentNode;
						let isInsideElsHighlight = false;
						let isInsideSwapColor = false;
						let elsHighlightInfo = null;
						let swapColorInfo = null;
						
						// Define swap colors to detect
						const swapColors = ['red', 'purple', 'darkgrey', 'darkblue', 'lightblue', 'brown', 'orange'];
						
						while (currentParent && currentParent !== tempDiv) {
							if (currentParent.classList && currentParent.classList.contains('els-highlight')) {
								isInsideElsHighlight = true;
								elsHighlightInfo = {
									className: currentParent.className,
									style: currentParent.getAttribute('style')
								};
								break; // ELS highlights take priority
							} else if (currentParent.tagName && currentParent.tagName.toLowerCase() === 'span') {
								const style = currentParent.getAttribute('style');
								if (style && style.includes('color:')) {
									// Check if this is a swap color
									for (const swapColor of swapColors) {
										if (style.includes(`color: ${swapColor}`) || style.includes(`color:${swapColor}`)) {
											isInsideSwapColor = true;
											swapColorInfo = {
												style: style
											};
											break;
										}
									}
								}
							}
							currentParent = currentParent.parentNode;
						}
						
						if (isInsideElsHighlight) {
							elements.push({
								type: 'els-highlight',
								content: node.textContent,
								className: elsHighlightInfo.className,
								style: elsHighlightInfo.style
							});
						} else if (isInsideSwapColor) {
							elements.push({
								type: 'swap-color',
								content: node.textContent,
								style: swapColorInfo.style
							});
						} else {
							elements.push({
								type: 'text',
								content: node.textContent
							});
						}
					}
				} else if (node.nodeType === Node.ELEMENT_NODE) {
					// Don't process els-highlight elements directly since we handle them at the text node level
					if (!node.classList || !node.classList.contains('els-highlight')) {
						// Process child nodes for non-els-highlight elements
						for (let child of node.childNodes) {
							collectElements(child);
						}
					} else {
						// For els-highlight elements, still process children to capture text
						for (let child of node.childNodes) {
							collectElements(child);
						}
					}
				}
			}
			
			collectElements(tempDiv);
			
			// Now reconstruct the text with ELS highlights and swap colors preserved
			let reconstructed = '';
			for (const element of elements) {
				if (element.type === 'text') {
					reconstructed += element.content;
				} else if (element.type === 'els-highlight') {
					reconstructed += `<span class="${element.className}" style="${element.style}">${element.content}</span>`;
				} else if (element.type === 'swap-color') {
					reconstructed += `<span style="${element.style}">${element.content}</span>`;
				}
			}
			
			console.log('Reconstructed text with ELS highlights and swap colors preserved, length:', reconstructed.length);
			
			// Process this reconstructed content progressively
			processReconstructedContentProgressively(textArea, reconstructed);
		}
		
		// Function to process content with general formatting (progressive version)
		function processContentWithFormatting(textArea, originalHtml) {
			console.log('Processing content with formatting preservation (progressive)');
			
			const tempDiv = document.createElement('div');
			tempDiv.innerHTML = textArea.innerHTML;
			
			// Get all text nodes and formatting in order
			const elements = [];
			
			function collectAllElements(node) {
				if (node.nodeType === Node.TEXT_NODE) {
					if (node.textContent.trim()) {
						// Check if this text node has any formatting
						let currentParent = node.parentNode;
						let formatInfo = null;
						
						// Define swap colors to detect
						const swapColors = ['red', 'purple', 'darkgrey', 'darkblue', 'lightblue', 'brown', 'orange'];
						
						while (currentParent && currentParent !== tempDiv) {
							if (currentParent.tagName && currentParent.tagName.toLowerCase() === 'span') {
								const style = currentParent.getAttribute('style');
								const className = currentParent.getAttribute('class');
								
								// Check for swap colors
								if (style && style.includes('color:')) {
									for (const swapColor of swapColors) {
										if (style.includes(`color: ${swapColor}`) || style.includes(`color:${swapColor}`)) {
											formatInfo = {
												type: 'swap-color',
												style: style
											};
											break;
										}
									}
								}
								
								// Check for other formatting if not a swap color
								if (!formatInfo && (style || className)) {
									// Skip gematria lines
									if (style && style.includes('color: #00cc00')) {
										break;
									}
									
									formatInfo = {
										type: 'other-format',
										style: style,
										className: className
									};
								}
								
								if (formatInfo) break;
							}
							currentParent = currentParent.parentNode;
						}
						
						if (formatInfo) {
							elements.push({
								type: formatInfo.type,
								content: node.textContent,
								style: formatInfo.style,
								className: formatInfo.className
							});
						} else {
							elements.push({
								type: 'text',
								content: node.textContent
							});
						}
					}
				} else if (node.nodeType === Node.ELEMENT_NODE) {
					// Process child nodes
					for (let child of node.childNodes) {
						collectAllElements(child);
					}
				}
			}
			
			collectAllElements(tempDiv);
			
			// Reconstruct the text with all formatting preserved
			let reconstructed = '';
			for (const element of elements) {
				if (element.type === 'text') {
					reconstructed += element.content;
				} else if (element.type === 'swap-color') {
					reconstructed += `<span style="${element.style}">${element.content}</span>`;
				} else if (element.type === 'other-format') {
					if (element.style) {
						reconstructed += `<span style="${element.style}"${element.className ? ` class="${element.className}"` : ''}>${element.content}</span>`;
					} else if (element.className) {
						reconstructed += `<span class="${element.className}">${element.content}</span>`;
					}
				}
			}
			
			console.log('Reconstructed text with all formatting preserved, length:', reconstructed.length);
			
			// Process this reconstructed content progressively
			processReconstructedContentProgressively(textArea, reconstructed);
		}
		
		// Function to progressively process the reconstructed content
		function processReconstructedContentProgressively(textArea, content) {
			// Insert exactly 2 new lines after each line break
			content = content.replace(/\r\n/g, '\n');
			content = content.replace(/\r/g, '\n');
			content = content.replace(/\n/g, '\n\n');
			
			// Split content into lines
			const lines = content.split(/\r\n|\n|\r/);
			let processedLines = [];
			
			console.log(`Processing ${lines.length} lines with optimized progressive loading`);
			
			// Process lines in larger chunks with less frequent DOM updates
			const PROCESSING_CHUNK_SIZE = 100; // Process more lines at once
			const DISPLAY_CHUNK_SIZE = 500; // Update display less frequently
			let currentLineIndex = 0;
			let lastDisplayUpdate = 0;
			let firstDisplayShown = false; // Track if we've shown the first chunk
			
			function processNextChunk() {
				if (calculationAborted) {
					isCalculating = false;
					hideLoadingIndicator();
					return;
				}
				
				const chunkEnd = Math.min(currentLineIndex + PROCESSING_CHUNK_SIZE, lines.length);
				
				// Process chunk of lines
				for (let i = currentLineIndex; i < chunkEnd; i++) {
					const line = lines[i];
					
					// Replace spaces with tabs, but preserve HTML structure
					let lineWithTabs = '';
					let insideTag = false;
					
					for (let j = 0; j < line.length; j++) {
						const char = line[j];
						if (char === '<') {
							insideTag = true;
							lineWithTabs += char;
						} else if (char === '>') {
							insideTag = false;
							lineWithTabs += char;
						} else if (char === ' ' && !insideTag) {
							lineWithTabs += '\t';
						} else {
							lineWithTabs += char;
						}
					}
					
					processedLines.push(lineWithTabs);
					
					// Check if this line contains letters (not just whitespace or punctuation)
					// Extract plain text from the line for letter detection
					const plainLineText = line.replace(/<[^>]*>/g, '');
					if (/[a-zA-Z\u05D0-\u05EA\u05DA-\u05E5\u0370-\u03FF]/.test(plainLineText)) {
						// Split line into words (preserving HTML tags)
						const words = plainLineText.split(/[\s\t\u00A0\u2000-\u200B\u2028\u2029\u3000]+/).filter(word => word.trim().length > 0);
						let gematriaValuesWithTabs = [];
						
						// Calculate gematria for each word
						for (let word of words) {
							// Remove Niqqud characters and HTML tags for calculation
							const wordWithoutNiqqud = word.replace(/[\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF]/g, '');
							const wordLength = wordWithoutNiqqud.length;
							
							const cleanWord = word.replace(/[.,!?\-;\*\(\)\[\]\u05C3\u05C0⁕]/g, '');
							if (cleanWord.length > 0 && /[a-zA-Z\u05D0-\u05EA\u05DA-\u05E5\u0370-\u03FF]/.test(cleanWord)) {
								const gematriaValue = calculateWordGematria(cleanWord);
								let tabCount = Math.floor(wordLength / 8) + 1;
								
								gematriaValuesWithTabs.push({
									value: gematriaValue,
									tabs: tabCount
								});
							}
						}
						
						// Create the gematria values line
						if (gematriaValuesWithTabs.length > 0) {
							let gematriaLine = '';
							for (let j = 0; j < gematriaValuesWithTabs.length; j++) {
								gematriaLine += gematriaValuesWithTabs[j].value;
								if (j < gematriaValuesWithTabs.length - 1) {
									gematriaLine += '\t'.repeat(gematriaValuesWithTabs[j].tabs);
								}
							}
							
							const tabPrefix = line.includes('\t') ? '\t' : '';
							processedLines.push(`${tabPrefix}<span style="color: #00cc00; font-weight: bold; text-shadow: none;">${gematriaLine}</span>`);
						}
					}
				}
				
				currentLineIndex = chunkEnd;
				
				// Update display only periodically or when finished
				const shouldUpdateDisplay = (currentLineIndex - lastDisplayUpdate >= DISPLAY_CHUNK_SIZE) || 
											(currentLineIndex >= lines.length);
				
				if (shouldUpdateDisplay) {
					// Update the visible content
					let partialContent = processedLines.join('\n');
					
					// Ensure special characters are highlighted in red
					partialContent = partialContent.replace(/\*/g, '<span style="color: #FF0000;">*</span>');
					partialContent = partialContent.replace(/⁕/g, '<span style="color: #FF0000;">⁕</span>');
					
					textArea.innerHTML = partialContent;
					lastDisplayUpdate = currentLineIndex;
					
					// Hide loading indicator after first display update
					if (!firstDisplayShown) {
						firstDisplayShown = true;
						hideLoadingIndicator();
					}
				}
				
				// Continue processing if there are more lines
				if (currentLineIndex < lines.length) {
					// Use setTimeout with minimal delay for better performance than requestAnimationFrame
					setTimeout(processNextChunk, 1);
				} else {
					// Processing complete
					finishCalculation(textArea, processedLines.join('\n'));
				}
			}
			
			// Start processing
			processNextChunk();
		}
		
		// Function to finish the calculation
		function finishCalculation(textArea, finalContent) {
			console.log('Calculation completed - finalizing...');
			
			// Ensure special characters are highlighted in red for final content
			finalContent = finalContent.replace(/\*/g, '<span style="color: #FF0000;">*</span>');
			finalContent = finalContent.replace(/⁕/g, '<span style="color: #FF0000;">⁕</span>');
			
			// Ensure final content is properly set
			textArea.innerHTML = finalContent;
			
			// Hide loading indicator in case it's still showing
			hideLoadingIndicator();
			
			// Reset calculation state
			isCalculating = false;
			calculationAborted = false;
			
			console.log('toggleCalc completed successfully with optimized progressive loading'); // Debug log
		}
	</script>

	<script>
		function toggleFind(){
			const existingModal = document.getElementById('findModal');
			if (existingModal) {
				existingModal.remove();
				return;
			}
			
			const textArea = document.getElementById('textArea');
			const modal = document.createElement('div');
			modal.id = 'findModal';
			modal.className = 'modal';
			modal.innerHTML = `
				<div class="modal-content" style="width: 40%; min-width: 300px; max-width: 80vw; height: auto; min-height: 300px; max-height: 90vh;">
					<span class="close" onclick="document.getElementById('findModal').remove()">&times;</span>
					<h2 style="text-align: center;">Find Gematria Matches</h2>
					<div style="display: flex; flex-direction: column; gap: 5px; margin-top: 20px;">
						<label for="findInput" style="font-size: 11px; text-align: left; margin-left: 2px;">Enter gematria value</label>
						<div style="display: flex; flex-direction: row; align-items: center; gap: 10px;">
							<input type="text" id="findInput" placeholder="Enter gematria value" style="text-align: left; padding: 8px; border: 1px solid #ccc; border-radius: 5px; flex-grow: 1;">
							<button id="findSearchBtn" class="textBtn" style="background-color: #3333aa; color: #fff; border: none; padding: 8px 8px 8px 8px; cursor: pointer; font-size: 12px; font-weight: bold; margin-right: 0px; border-radius: 5px; box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.35); transition: background-color 0.0s;">
								<img src="img/find.png" height="16" width="14" border="0" alt="Search"><img src="img/invis.gif" width="4" border="0">Search
							</button>
						</div>
						<div class="cleanup-checkbox-container">
							<input type="checkbox" id="findCleanupCheckbox" checked>
							<label for="findCleanupCheckbox">Remove ALL previous text mark up / formatting.</label>
						</div>
					</div>
					<div id="findResults" style="margin-top: 20px; white-space: pre-wrap; max-height: 60vh; overflow-y: auto; word-wrap: break-word; overflow-wrap: break-word;"></div>
				</div>
			`;
			document.body.appendChild(modal);
			modal.style.display = 'block';

		// Load saved checkbox preference from localStorage, default to checked
		const findCleanupCheckbox = document.getElementById('findCleanupCheckbox');
		if (findCleanupCheckbox) {
			const savedCleanupPreference = localStorage.getItem('findCleanupCheckbox');
			if (savedCleanupPreference !== null) {
				findCleanupCheckbox.checked = savedCleanupPreference === 'true';
			}
			
			// Add event listener to save checkbox state to localStorage
			findCleanupCheckbox.addEventListener('change', function() {
				localStorage.setItem('findCleanupCheckbox', this.checked.toString());
			});
		}

		// Prepopulate findInput with the sum value
		const findInput = document.getElementById('findInput');
		if (findInput) {
			findInput.value = textTotal === 0 ? '' : textTotal;
			// Set focus to the findInput textbox
			findInput.focus();
			
			// Add Enter key listener to trigger Search button
			findInput.addEventListener('keypress', function(event) {
				if (event.key === 'Enter') {
					event.preventDefault();
					document.getElementById('findSearchBtn').click();
				}
			});
		}

			// Add event listener for findInput to handle letter-to-gematria conversion
			document.getElementById('findInput').addEventListener('input', function() {
				const val = this.value;

				// Check if the input contains both numbers and letters
				const hasNumbers = /\d/.test(val);
				const hasLetters = /[a-zA-Z\u05D0-\u05EA\u05DA-\u05E5\u0370-\u03FF]/.test(val);

				if (hasNumbers && hasLetters) {
					// Extract existing numbers and letters separately
					const numbers = val.match(/\d+/g) || [];
					const letters = val.match(/[a-zA-Z\u05D0-\u05EA\u05DA-\u05E5\u0370-\u03FF]/g) || [];

					// Calculate sum of existing numbers
					let existingSum = numbers.reduce((sum, num) => sum + parseInt(num), 0);

					// Convert letters to gematria and add to existing sum
					let letterSum = 0;
					for (let letter of letters) {
						// Calculate gematria for each individual letter
						let letterValue = 0;
						const code = letter.charCodeAt(0);

					// Hebrew letters
					if (code >= 0x05D0 && code <= 0x05EA) {
						switch(letter) {
							case "\u05D0": letterValue = L01; break; // aleph = 1
							case "\u05D1": letterValue = L02; break; // bet = 2
							case "\u05D2": letterValue = L03; break; // gimel = 3
							case "\u05D3": letterValue = L04; break; // dalet = 4
							case "\u05D4": letterValue = L05; break; // hey = 5
							case "\u05D5": letterValue = L06; break; // vav = 6
							case "\u05D6": letterValue = L07; break; // zayin = 7
							case "\u05D7": letterValue = L08; break; // chet = 8
							case "\u05D8": letterValue = L09; break; // tet = 9
							case "\u05D9": letterValue = L10; break; // yod = 10
							case "\u05DA": letterValue = L23; break; // kaf sofit = 500
							case "\u05DB": letterValue = L11; break; // kaf = 20
							case "\u05DC": letterValue = L12; break; // lamed = 30
							case "\u05DD": letterValue = L24; break; // mem sofit = 600
							case "\u05DE": letterValue = L13; break; // mem = 40
							case "\u05DF": letterValue = L25; break; // nun sofit = 700
							case "\u05E0": letterValue = L14; break; // nun = 50
							case "\u05E1": letterValue = L15; break; // samech = 60
							case "\u05E2": letterValue = L16; break; // ayin = 70
							case "\u05E3": letterValue = L26; break; // pey sofit = 800
							case "\u05E4": letterValue = L17; break; // pey = 80
							case "\u05E5": letterValue = L27; break; // tzadi sofit = 900
							case "\u05E6": letterValue = L18; break; // tzadi = 90
							case "\u05E7": letterValue = L19; break; // kuf = 100
							case "\u05E8": letterValue = L20; break; // resh = 200
							case "\u05E9": letterValue = L21; break; // shin = 300
							case "\u05EA": letterValue = L22; break; // tav = 400
						}
					} else if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
							// English letters - A=1, B=2, etc.
							const upper = code >= 65 && code <= 90 ? code : code - 32;
							letterValue = upper - 64; // A=1, B=2, C=3, etc.
						} else if (code >= 0x0370 && code <= 0x03FF) {
							// Greek letters - basic mapping
							switch(letter) {
								case "\u0386": case "\u0391": case "\u03AC": case "\u03B1": letterValue = 1; break; // alpha
								case "\u0392": case "\u03B2": letterValue = 2; break; // beta
								case "\u0393": case "\u03B3": letterValue = 3; break; // gamma
								case "\u0394": case "\u03B4": letterValue = 4; break; // delta
								case "\u0388": case "\u0395": case "\u03AD": case "\u03B5": letterValue = 5; break; // epsilon
								case "\u0396": case "\u03B6": letterValue = 7; break; // zeta
								case "\u0389": case "\u0397": case "\u03AE": case "\u03B7": letterValue = 8; break; // eta
								case "\u0398": case "\u03B8": letterValue = 9; break; // theta
								case "\u038A": case "\u0399": case "\u03AF": case "\u03B9": letterValue = 10; break; // iota
								case "\u039A": case "\u03BA": letterValue = 20; break; // kappa
								case "\u039B": case "\u03BB": letterValue = 30; break; // lambda
								case "\u039C": case "\u03BC": letterValue = 40; break; // mu
								case "\u039D": case "\u03BD": letterValue = 50; break; // nu
								case "\u039E": case "\u03BE": letterValue = 60; break; // xi
								case "\u038C": case "\u039F": case "\u03CC": case "\u03BF": letterValue = 70; break; // omicron
								case "\u03A0": case "\u03C0": letterValue = 80; break; // pi
								case "\u03A1": case "\u03C1": letterValue = 100; break; // rho
								case "\u03A3": case "\u03C2": case "\u03C3": letterValue = 200; break; // sigma
								case "\u03A4": case "\u03C4": letterValue = 300; break; // tau
								case "\u038E": case "\u03A5": case "\u03CD": case "\u03C5": letterValue = 400; break; // upsilon
								case "\u03A6": case "\u03C6": letterValue = 500; break; // phi
								case "\u03A7": case "\u03C7": letterValue = 600; break; // chi
								case "\u03A8": case "\u03C8": letterValue = 700; break; // psi
								case "\u038F": case "\u03A9": case "\u03CE": case "\u03C9": letterValue = 800; break; // omega
								default: break;
							}
						}

						letterSum += letterValue;
					}

					// Replace field content with the total sum
					this.value = existingSum + letterSum;
				} else if (hasLetters && !hasNumbers) {
					// Only letters, convert to gematria
					let total = 0;
					for (let letter of val) {
						const code = letter.charCodeAt(0);

					// Hebrew letters
					if (code >= 0x05D0 && code <= 0x05EA) {
						switch(letter) {
							case "\u05D0": total += L01; break; // aleph = 1
							case "\u05D1": total += L02; break; // bet = 2
							case "\u05D2": total += L03; break; // gimel = 3
							case "\u05D3": total += L04; break; // dalet = 4
							case "\u05D4": total += L05; break; // hey = 5
							case "\u05D5": total += L06; break; // vav = 6
							case "\u05D6": total += L07; break; // zayin = 7
							case "\u05D7": total += L08; break; // chet = 8
							case "\u05D8": total += L09; break; // tet = 9
							case "\u05D9": total += L10; break; // yod = 10
							case "\u05DA": total += L23; break; // kaf sofit = 500
							case "\u05DB": total += L11; break; // kaf = 20
							case "\u05DC": total += L12; break; // lamed = 30
							case "\u05DD": total += L24; break; // mem sofit = 600
							case "\u05DE": total += L13; break; // mem = 40
							case "\u05DF": total += L25; break; // nun sofit = 700
							case "\u05E0": total += L14; break; // nun = 50
							case "\u05E1": total += L15; break; // samech = 60
							case "\u05E2": total += L16; break; // ayin = 70
							case "\u05E3": total += L26; break; // pey sofit = 800
							case "\u05E4": total += L17; break; // pey = 80
							case "\u05E5": total += L27; break; // tzadi sofit = 900
							case "\u05E6": total += L18; break; // tzadi = 90
							case "\u05E7": total += L19; break; // kuf = 100
							case "\u05E8": total += L20; break; // resh = 200
							case "\u05E9": total += L21; break; // shin = 300
							case "\u05EA": total += L22; break; // tav = 400
						}
					} else if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
							// English letters - A=1, B=2, etc.
							const upper = code >= 65 && code <= 90 ? code : code - 32;
							total += upper - 64; // A=1, B=2, C=3, etc.
						} else if (code >= 0x0370 && code <= 0x03FF) {
							// Greek letters - basic mapping
							switch(letter) {
								case "\u0386": case "\u0391": case "\u03AC": case "\u03B1": total += 1; break; // alpha
								case "\u0392": case "\u03B2": total += 2; break; // beta
								case "\u0393": case "\u03B3": total += 3; break; // gamma
								case "\u0394": case "\u03B4": total += 4; break; // delta
								case "\u0388": case "\u0395": case "\u03AD": case "\u03B5": total += 5; break; // epsilon
								case "\u0396": case "\u03B6": total += 7; break; // zeta
								case "\u0389": case "\u0397": case "\u03AE": case "\u03B7": total += 8; break; // eta
								case "\u0398": case "\u03B8": total += 9; break; // theta
								case "\u038A": case "\u0399": case "\u03AF": case "\u03B9": total += 10; break; // iota
								case "\u039A": case "\u03BA": total += 20; break; // kappa
								case "\u039B": case "\u03BB": total += 30; break; // lambda
								case "\u039C": case "\u03BC": total += 40; break; // mu
								case "\u039D": case "\u03BD": total += 50; break; // nu
								case "\u039E": case "\u03BE": total += 60; break; // xi
								case "\u038C": case "\u039F": case "\u03CC": case "\u03BF": total += 70; break; // omicron
								case "\u03A0": case "\u03C0": total += 80; break; // pi
								case "\u03A1": case "\u03C1": total += 100; break; // rho
								case "\u03A3": case "\u03C2": case "\u03C3": total += 200; break; // sigma
								case "\u03A4": case "\u03C4": total += 300; break; // tau
								case "\u038E": case "\u03A5": case "\u03CD": case "\u03C5": total += 400; break; // upsilon
								case "\u03A6": case "\u03C6": total += 500; break; // phi
								case "\u03A7": case "\u03C7": total += 600; break; // chi
								case "\u03A8": case "\u03C8": total += 700; break; // psi
								case "\u038F": case "\u03A9": case "\u03CE": case "\u03C9": total += 800; break; // omega
								default: break;
							}
						}
					}
					this.value = total;
				}
				// If only numbers, leave as is
			});

			function convertToGematria(str) {
				let total = 0;
				for (let char of str) {
					const code = char.charCodeAt(0);
					if (code >= 0x05D0 && code <= 0x05EA) {
						switch(char) {
							case "\u05D0": total += L01; break;
							case "\u05D1": total += L02; break;
							case "\u05D2": total += L03; break;
							case "\u05D3": total += L04; break;
							case "\u05D4": total += L05; break;
							case "\u05D5": total += L06; break;
							case "\u05D6": total += L07; break;
							case "\u05D7": total += L08; break;
							case "\u05D8": total += L09; break;
							case "\u05D9": total += L10; break;
							case "\u05DB": total += L11; break;
							case "\u05DC": total += L12; break;
							case "\u05DE": total += L13; break;
							case "\u05E0": total += L14; break;
							case "\u05E1": total += L15; break;
							case "\u05E2": total += L16; break;
							case "\u05E4": total += L17; break;
							case "\u05E6": total += L18; break;
							case "\u05E7": total += L19; break;
							case "\u05E8": total += L20; break;
							case "\u05E9": total += L21; break;
							case "\u05EA": total += L22; break;
							case "\u05DA": total += L23; break;
							case "\u05DD": total += L24; break;
							case "\u05DF": total += L25; break;
							case "\u05E3": total += L26; break;
							case "\u05E5": total += L27; break;
						}
					} else if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
						const upper = code >= 65 && code <= 90 ? code : code - 32;
						total += upper - 64;
					}
				}
				return total;
			}

			document.getElementById('findSearchBtn').addEventListener('click', function() {
				greenFlash(this);
				
				// Check if text cleanup checkbox is checked
				const cleanupCheckbox = document.getElementById('findCleanupCheckbox');
				if (cleanupCheckbox && cleanupCheckbox.checked) {
					removeAllTextFormatting();
				}
				
				const findInputValue = document.getElementById('findInput').value.trim();
				if (!findInputValue) {
					document.getElementById('findResults').textContent = 'Please enter a gematria value to find.';
					return;
				}
				
				// Parse the target gematria value
				const targetGematria = parseInt(findInputValue);
				if (isNaN(targetGematria)) {
					document.getElementById('findResults').textContent = 'Please enter a valid number.';
					return;
				}
				
				// Clear any previous highlights while preserving original formatting
				const existingHighlights = textArea.querySelectorAll('.gematria-match');
				existingHighlights.forEach(highlight => {
					const parent = highlight.parentNode;
					
					// Create a span to preserve any original formatting that was there before the highlight
					const preservedSpan = document.createElement('span');
					preservedSpan.textContent = highlight.textContent;
					
					// Check if the highlight has any preserved styling from before it was highlighted
					const originalColor = highlight.getAttribute('data-original-color');
					const originalWeight = highlight.getAttribute('data-original-weight');
					const originalShadow = highlight.getAttribute('data-original-shadow');
					const originalBg = highlight.getAttribute('data-original-bg');
					
					if (originalColor) {
						preservedSpan.style.setProperty('color', originalColor, 'important');
					}
					if (originalWeight) {
						preservedSpan.style.setProperty('font-weight', originalWeight, 'important');
					}
					if (originalShadow) {
						preservedSpan.style.setProperty('text-shadow', originalShadow, 'important');
					}
					if (originalBg) {
						preservedSpan.style.setProperty('background-color', originalBg, 'important');
					}
					
					parent.replaceChild(preservedSpan, highlight);
					parent.normalize();
				});
				
				// Get the current gematria method
				const gematriaSelect = document.getElementById('gematriaSelect');
				let gematriaMethod = gematriaSelect ? gematriaSelect.value : 'Ragil';
				// Display "Ragil" instead of "Value" for consistency
				if (gematriaMethod === 'Value') {
					gematriaMethod = 'Ragil';
				}
				
				// Function to calculate gematria with current method and modifiers
				function calculateWordGematria(word) {
					let total = 0;
					let letterCount = 0;
					let wordCount = 1;

					// Calculate base gematria value
					for (let char of word) {
						const code = char.charCodeAt(0);
						// Check for Hebrew finals FIRST (before regular Hebrew letters)
						// This prevents finals ך (0x05DA), ם (0x05DD), ן (0x05DF) from being caught by the regular Hebrew range
						if (char === "\u05DA" || char === "\u05DD" || char === "\u05DF" || char === "\u05E3" || char === "\u05E5") {
							// Hebrew finals
							letterCount++;
							switch(char) {
								case "\u05DA": total += L23; break; // kaf sofit ך = 500
								case "\u05DD": total += L24; break; // mem sofit ם = 600
								case "\u05DF": total += L25; break; // nun sofit ן = 700
								case "\u05E3": total += L26; break; // pey sofit ף = 800
								case "\u05E5": total += L27; break; // tzadi sofit ץ = 900
							}
						} else if (code >= 0x05D0 && code <= 0x05EA) {
							// Regular Hebrew letters (excluding finals)
							letterCount++;
							switch(char) {
								case "\u05D0": total += L01; break; // aleph
								case "\u05D1": total += L02; break; // bet
								case "\u05D2": total += L03; break; // gimel
								case "\u05D3": total += L04; break; // dalet
								case "\u05D4": total += L05; break; // hey
								case "\u05D5": total += L06; break; // vav
								case "\u05D6": total += L07; break; // zayin
								case "\u05D7": total += L08; break; // chet
								case "\u05D8": total += L09; break; // tet
								case "\u05D9": total += L10; break; // yod
								case "\u05DB": total += L11; break; // kaf
								case "\u05DC": total += L12; break; // lamed
								case "\u05DE": total += L13; break; // mem
								case "\u05E0": total += L14; break; // nun
								case "\u05E1": total += L15; break; // samech
								case "\u05E2": total += L16; break; // ayin
								case "\u05E4": total += L17; break; // pey
								case "\u05E6": total += L18; break; // tzadi
								case "\u05E7": total += L19; break; // kuf
								case "\u05E8": total += L20; break; // resh
								case "\u05E9": total += L21; break; // shin
								case "\u05EA": total += L22; break; // tav
							}
						} else if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
							// English letters
							letterCount++;
							const upper = code >= 65 && code <= 90 ? code : code - 32;
							total += upper - 64;
						} else if (code >= 0x0370 && code <= 0x03FF) {
							// Greek letters
							letterCount++;
							switch(char) {
								case "\u0386": case "\u0391": case "\u03AC": case "\u03B1": total += L01; break; // alpha
								case "\u0392": case "\u03B2": total += L02; break; // beta
								case "\u0393": case "\u03B3": total += L03; break; // gamma
								case "\u0394": case "\u03B4": total += L04; break; // delta
								case "\u0388": case "\u0395": case "\u03AD": case "\u03B5": total += L05; break; // epsilon
								case "\u0396": case "\u03B6": total += L07; break; // zeta
								case "\u0389": case "\u0397": case "\u03AE": case "\u03B7": total += L08; break; // eta
								case "\u0398": case "\u03B8": total += L09; break; // theta
								case "\u038A": case "\u0399": case "\u03AF": case "\u03B9": total += L10; break; // iota
								case "\u039A": case "\u03BA": total += L11; break; // kappa
								case "\u039B": case "\u03BB": total += L12; break; // lambda
								case "\u039C": case "\u03BC": total += L13; break; // mu
								case "\u039D": case "\u03BD": total += L14; break; // nu
								case "\u039E": case "\u03BE": total += L15; break; // xi
								case "\u038C": case "\u039F": case "\u03CC": case "\u03BF": total += L16; break; // omicron
								case "\u03A0": case "\u03C0": total += L17; break; // pi
								case "\u03A1": case "\u03C1": total += L18; break; // rho
								case "\u03A3": case "\u03C2": case "\u03C3": total += L19; break; // sigma
								case "\u03A4": case "\u03C4": total += L20; break; // tau
								case "\u038E": case "\u03A5": case "\u03CD": case "\u03C5": total += L21; break; // upsilon
								case "\u03A6": case "\u03C6": total += L22; break; // phi
								case "\u03A7": case "\u03C7": total += L23; break; // chi
								case "\u03A8": case "\u03C8": total += L24; break; // psi
								case "\u038F": case "\u03A9": case "\u03CE": case "\u03C9": total += L25; break; // omega
								default: break;
							}
						}
					}
					
					// Apply gematria modifiers based on selected method
					if(gematriaMethod == "HaKlali"){
						total = total * total;
					}
					else if(gematriaMethod == "Kolel"){
						total += letterCount;
					}
					else if(gematriaMethod == "Kolel+1"){
						total += wordCount;
					}
					else if (gematriaMethod == "IntegralReduced"){
						while(total >= 10){
							let product = Math.floor(total / 10);
							let remainder = total % 10;
							total = remainder + product;
						}
					}
					
					return total;
				}
				
				// Function to extract verse ID from the line containing a word at a given position
				function extractVerseId(text, wordPosition) {
					const lines = text.split(/\r?\n/);
					
					// Find which line contains the word at the given position
					let wordCount = 0;
					for (let lineIndex = 0; lineIndex < lines.length; lineIndex++) {
						const line = lines[lineIndex];
						const lineWords = line.split(/[\s\t\u00A0\u2000-\u200B\u2028\u2029\u3000]+/).filter(word => word.trim().length > 0);
						
						// Check if the target word position falls within this line
						// wordPosition is 1-based, so we check if it's in the range (wordCount + 1) to (wordCount + lineWords.length)
						if (wordPosition > wordCount && wordPosition <= wordCount + lineWords.length) {
							// Extract verse ID from the beginning of the line
							// Pattern: number(s) followed by : followed by number(s)
							// Handle optional whitespace and Unicode directional marks (like RTL mark U+202B)
							const verseMatch = line.match(/^[\s\u200E\u200F\u202A\u202B\u202C\u202D\u202E]*(\d+:\d+)/);
							if (verseMatch) {
								return verseMatch[1];
							}
							return ''; // No verse ID found on this line
						}
						
						wordCount += lineWords.length;
					}
					
					return ''; // Word position not found
				}

				// Function to apply gematria search highlights while preserving existing formatting
				function applySearchHighlights(textContent, matchingWords) {
					// Create a character map to preserve existing formatting
					let characterMap = [];
					let tempDiv = document.createElement('div');
					tempDiv.innerHTML = textArea.innerHTML;
					
					// Walk through the DOM and build character map
					function walkNode(node, charIndex) {
						if (node.nodeType === 3) { // Text node
							let text = node.textContent;
							for (let i = 0; i < text.length; i++) {
								if (charIndex[0] < textContent.length) {
									// Find formatting from parent elements
									let currentNode = node.parentNode;
									let styles = {};
									let hasYellowBg = false;
									let fontColor = null;
									let fontWeight = null;
									let textShadow = null;
									
									// Check for existing yellow background, font color, font weight, and text shadow
									while (currentNode && currentNode !== tempDiv) {
										if (currentNode.style) {
											if (currentNode.style.backgroundColor === 'yellow' || 
												currentNode.style.backgroundColor === '#FFFF00' ||
												currentNode.style.backgroundColor === 'rgb(255, 255, 0)') {
												hasYellowBg = true;
											}
											if (currentNode.style.color && !fontColor) {
												fontColor = currentNode.style.color;
											}
											if (currentNode.style.fontWeight && !fontWeight) {
												fontWeight = currentNode.style.fontWeight;
											}
											if (currentNode.style.textShadow !== undefined && textShadow === null) {
												textShadow = currentNode.style.textShadow;
											}
										}
										currentNode = currentNode.parentNode;
									}
									
									characterMap[charIndex[0]] = {
										char: text[i],
										hasYellowBg: hasYellowBg,
										fontColor: fontColor,
										fontWeight: fontWeight,
										textShadow: textShadow
									};
									charIndex[0]++;
								}
							}
						} else if (node.nodeType === 1) { // Element node
							for (let child of node.childNodes) {
								walkNode(child, charIndex);
							}
						}
					}
					
					walkNode(tempDiv, [0]);
					
					// Find all positions where search matches should be highlighted
					let searchHighlights = [];
					for (let match of matchingWords) {
						const word = match.word;
						const escapedWord = word.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
						const wordRegex = new RegExp(`(^|[\\s\\p{P}\\p{Z}])(${escapedWord})(?=[\\s\\p{P}\\p{Z}]|$)`, 'gu');
						
						let regexMatch;
						while ((regexMatch = wordRegex.exec(textContent)) !== null) {
							const wordStart = regexMatch.index + regexMatch[1].length;
							const wordEnd = wordStart + word.length;
							
							for (let pos = wordStart; pos < wordEnd; pos++) {
								searchHighlights[pos] = true;
							}
						}
					}
					
					// Build the final HTML with preserved formatting
					let result = '';
					let i = 0;
					
					while (i < characterMap.length) {
						let char = characterMap[i];
						if (!char) {
							i++;
							continue;
						}
						
						// Check if this character needs search highlighting
						let needsSearchHighlight = searchHighlights[i];
						
						if (needsSearchHighlight) {
							// Start search highlight span
							let searchSpanStyle = 'background-color: #00FF00; font-weight: bold; padding: 1px 2px; border-radius: 2px;';
							
							// Preserve font color if it exists, otherwise use black
							if (char.fontColor) {
								searchSpanStyle += ` color: ${char.fontColor};`;
							} else {
								searchSpanStyle += ' color: #000000;';
							}
							
							// Preserve font weight if it exists (e.g., for gematria values)
							if (char.fontWeight) {
								searchSpanStyle += ` font-weight: ${char.fontWeight};`;
							}
							
							// Preserve text shadow if it exists (e.g., for gematria non-glow effect)
							if (char.textShadow !== null) {
								searchSpanStyle += ` text-shadow: ${char.textShadow};`;
							}
							
							// Build data attributes to preserve original formatting
							let dataAttributes = '';
							if (char.fontColor) {
								dataAttributes += ` data-original-color="${char.fontColor}"`;
							}
							if (char.fontWeight) {
								dataAttributes += ` data-original-weight="${char.fontWeight}"`;
							}
							if (char.textShadow !== null) {
								dataAttributes += ` data-original-shadow="${char.textShadow}"`;
							}
							if (char.hasYellowBg) {
								dataAttributes += ` data-original-bg="yellow"`;
							}
							
							result += `<span class="gematria-match" style="${searchSpanStyle}"${dataAttributes}>`;
							
							// Add characters until search highlight ends
							while (i < characterMap.length && searchHighlights[i]) {
								char = characterMap[i];
								if (char) {
									result += char.char;
								}
								i++;
							}
							
							result += '</span>';
						} else {
							// Character doesn't need search highlighting, preserve existing formatting
							if (char.hasYellowBg) {
								// Preserve yellow background
								let yellowSpanStyle = 'background-color: yellow;';
								if (char.fontColor) {
									yellowSpanStyle += ` color: ${char.fontColor};`;
								}
								if (char.fontWeight) {
									yellowSpanStyle += ` font-weight: ${char.fontWeight};`;
								}
								if (char.textShadow !== null) {
									yellowSpanStyle += ` text-shadow: ${char.textShadow};`;
								}
								
								result += `<span style="${yellowSpanStyle}">`;
								
								// Add characters while yellow background continues
								while (i < characterMap.length && characterMap[i] && 
									   characterMap[i].hasYellowBg && !searchHighlights[i]) {
									result += characterMap[i].char;
									i++;
								}
								
								result += '</span>';
							} else {
								// No special formatting, add character as-is
								let charStyle = '';
								if (char.fontColor) {
									charStyle += `color: ${char.fontColor};`;
								}
								if (char.fontWeight) {
									charStyle += ` font-weight: ${char.fontWeight};`;
								}
								if (char.textShadow !== null) {
									charStyle += ` text-shadow: ${char.textShadow};`;
								}
								
								if (charStyle) {
									result += `<span style="${charStyle}">${char.char}</span>`;
								} else {
									result += char.char;
								}
								i++;
							}
						}
					}
					
					return result;
				}

				// Split text into words and process each one
				let textContent = textArea.textContent;
				const words = textContent.split(/[\s\n\r\t\u00A0\u2000-\u200B\u2028\u2029\u3000]+/).filter(word => word.trim().length > 0);
				let matchingWords = [];

				// Process each word from first to last
				for (let i = 0; i < words.length; i++) {
					const word = words[i].trim();
					if (word.length === 0) continue;

					// Calculate gematria for this word
					const wordGematria = calculateWordGematria(word);

					// Check if it matches target gematria
					if (wordGematria === targetGematria) {
						// Extract verse ID for this word
						const verseId = extractVerseId(textContent, i + 1);
						
						matchingWords.push({
							word: word,
							gematria: wordGematria,
							position: i + 1,
							verseId: verseId
						});
					}
				}
				
				// Apply search highlights while preserving existing formatting
				const highlightedContent = applySearchHighlights(textContent, matchingWords);
				
				// Update the textArea with highlighted content
				textArea.innerHTML = highlightedContent;
				
				// Apply red color to asterisks and flower punctuation marks
				let finalContent = textArea.innerHTML;
				finalContent = finalContent.replace(/\*/g, '<span style="color: #FF0000;">*</span>');
				finalContent = finalContent.replace(/⁕/g, '<span style="color: #FF0000;">⁕</span>');
				textArea.innerHTML = finalContent;
				
				// Display results with copy buttons
				const findResultsDiv = document.getElementById('findResults');
				findResultsDiv.innerHTML = ''; // Clear previous results

				// Create header with buttons on the right
				const header = document.createElement('div');
				header.style.cssText = 'margin-bottom: 15px; padding-bottom: 10px; border-bottom: 2px solid #ccc; display: flex; justify-content: space-between; align-items: center;';
				
				// Left side - labels
				const headerLabels = document.createElement('div');
				headerLabels.innerHTML = `<strong>Target Gematria Value:</strong> ${targetGematria}<br><strong>Gematria Method:</strong> ${gematriaMethod}`;
				
				// Right side - buttons
				const headerButtons = document.createElement('div');
				headerButtons.style.cssText = 'display: flex; gap: 10px; align-items: center;';
				headerButtons.innerHTML = `
					<button id="findExportBtn" class="textBtn" style="background-color: #3333aa; color: #fff; border: none; padding: 8px 8px; cursor: pointer; font-size: 12px; font-weight: bold; margin-right: 0px; border-radius: 5px; box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.35); transition: background-color 0.0s; white-space: nowrap;">
						<img src="img/export.png" height="14" width="14" border="0" alt="Export"><img src="img/invis.gif" width="4" border="0">Export
					</button>
					<button id="findCopyAllBtn" class="textBtn" style="background-color: #3333aa; color: #fff; border: none; padding: 8px 8px; cursor: pointer; font-size: 12px; font-weight: bold; margin-right: 0px; border-radius: 5px; box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.35); transition: background-color 0.0s; white-space: nowrap;">
						📋<img src="img/invis.gif" width="4" border="0">Copy All
					</button>
				`;
				
				header.appendChild(headerLabels);
				header.appendChild(headerButtons);
				findResultsDiv.appendChild(header);
				
				if (matchingWords.length === 0) {
					const noResults = document.createElement('p');
					noResults.textContent = 'No matching words found.';
					noResults.style.cssText = 'color: #666; font-style: italic;';
					findResultsDiv.appendChild(noResults);
				} else {
					const resultsHeader = document.createElement('p');
					resultsHeader.innerHTML = `<strong>Found ${matchingWords.length} matching word(s):</strong>`;
					resultsHeader.style.cssText = 'margin-top: 15px; margin-bottom: 10px;';
					findResultsDiv.appendChild(resultsHeader);
					
					matchingWords.forEach((match, index) => {
						const resultItem = document.createElement('div');
						resultItem.style.cssText = 'display: flex; align-items: center; justify-content: space-between; padding: 8px; margin: 5px 0; background-color: #f5f5f5; border-radius: 5px; border: 1px solid #ddd;';
						
						const resultText = document.createElement('span');
						// Build the result text with verse ID if available and Google Translate link
						let resultString = `${index + 1}. `;
						
						// Create Google Translate link for the word
						// Google Translate auto-detects source language and translates to user's OS default language
						const googleTranslateUrl = `https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(match.word)}&op=translate`;
						resultString += `<a href="${googleTranslateUrl}" target="_blank" style="color: #1a73e8; text-decoration: none; font-weight: bold;" title="Translate '${match.word}' with Google Translate">${match.word}</a>`;
						
						resultString += ` (Gematria: ${match.gematria}, Position: ${match.position}`;
						if (match.verseId && match.verseId.trim() !== '') {
							resultString += `, Verse: ${match.verseId}`;
						}
						resultString += ')';
						resultText.innerHTML = resultString; // Use innerHTML instead of textContent to render the link
						resultText.style.cssText = 'flex: 1; margin-right: 10px;';
						
						const copyBtn = document.createElement('button');
						copyBtn.textContent = '📋 Copy';
						copyBtn.style.cssText = 'background-color: #3333aa; color: #fff; border: none; padding: 5px 10px; cursor: pointer; font-size: 11px; font-weight: bold; border-radius: 3px; white-space: nowrap;';
						copyBtn.title = 'Copy this word to clipboard';
						
						copyBtn.addEventListener('click', async () => {
							try {
								await navigator.clipboard.writeText(match.word);
								const originalText = copyBtn.textContent;
								copyBtn.textContent = '✓ Copied!';
								copyBtn.style.backgroundColor = '#28a745';
								setTimeout(() => {
									copyBtn.textContent = originalText;
									copyBtn.style.backgroundColor = '#3333aa';
								}, 2000);
							} catch (err) {
								console.error('Failed to copy:', err);
								copyBtn.textContent = '✗ Failed';
								copyBtn.style.backgroundColor = '#dc3545';
								setTimeout(() => {
									copyBtn.textContent = '📋 Copy';
									copyBtn.style.backgroundColor = '#3333aa';
								}, 2000);
							}
						});
						
						copyBtn.addEventListener('mouseenter', () => {
							if (copyBtn.textContent === '📋 Copy') {
								copyBtn.style.backgroundColor = '#3333ee';
							}
						});
						
						copyBtn.addEventListener('mouseleave', () => {
							if (copyBtn.textContent === '📋 Copy') {
								copyBtn.style.backgroundColor = '#3333aa';
							}
						});
						
						resultItem.appendChild(resultText);
						resultItem.appendChild(copyBtn);
						findResultsDiv.appendChild(resultItem);
					});
				}

				// Attach event listeners to the dynamically created buttons
				// Copy All button functionality
				document.getElementById('findCopyAllBtn').addEventListener('click', async () => {
				const findResultsDiv = document.getElementById('findResults');
				
				// Check if there are any results
				if (!matchingWords || matchingWords.length === 0) {
					alert('No results to copy. Please perform a search first.');
					return;
				}

				// Build the text to copy - all words separated by newlines
				const allWords = matchingWords.map(match => match.word).join('\n');

				try {
					await navigator.clipboard.writeText(allWords);
					const copyAllBtn = document.getElementById('findCopyAllBtn');
					const originalHTML = copyAllBtn.innerHTML;
					copyAllBtn.innerHTML = '✓ Copied All!';
					copyAllBtn.style.backgroundColor = '#28a745';
					setTimeout(() => {
						copyAllBtn.innerHTML = originalHTML;
						copyAllBtn.style.backgroundColor = '#3333aa';
					}, 2000);
				} catch (err) {
					console.error('Failed to copy all:', err);
					const copyAllBtn = document.getElementById('findCopyAllBtn');
					const originalHTML = copyAllBtn.innerHTML;
					copyAllBtn.innerHTML = '✗ Failed';
					copyAllBtn.style.backgroundColor = '#dc3545';
					setTimeout(() => {
						copyAllBtn.innerHTML = originalHTML;
						copyAllBtn.style.backgroundColor = '#3333aa';
					}, 2000);
				}
			});

			// Export button functionality
			document.getElementById('findExportBtn').addEventListener('click', () => {
				// Check if there are any results
				if (!matchingWords || matchingWords.length === 0) {
					alert('No results to export. Please perform a search first.');
					return;
				}

				// Get the target gematria and method for the header
				const findInputValue = document.getElementById('findInput').value.trim();
				const targetGematria = parseInt(findInputValue);
				const gematriaSelect = document.getElementById('gematriaSelect');
				let gematriaMethod = gematriaSelect ? gematriaSelect.value : 'Ragil';
				if (gematriaMethod === 'Value') {
					gematriaMethod = 'Ragil';
				}

				// Build the export content
				let exportContent = `Gematria Search Results\n`;
				exportContent += `Target Gematria Value: ${targetGematria}\n`;
				exportContent += `Gematria Method: ${gematriaMethod}\n`;
				exportContent += `Total Matches: ${matchingWords.length}\n`;
				exportContent += `\n${'='.repeat(60)}\n\n`;

				// Add each result
				matchingWords.forEach((match, index) => {
					let resultString = `${index + 1}. "${match.word}" (Gematria: ${match.gematria}, Position: ${match.position}`;
					if (match.verseId && match.verseId.trim() !== '') {
						resultString += `, Verse: ${match.verseId}`;
					}
					resultString += ')\n';
					exportContent += resultString;
				});

				// Create a blob and download
				const blob = new Blob([exportContent], { type: 'text/plain;charset=utf-8' });
				const url = URL.createObjectURL(blob);
				const a = document.createElement('a');
				a.href = url;
				
				// Generate filename with timestamp
				const timestamp = new Date().toISOString().replace(/[:.]/g, '-').slice(0, -5);
				a.download = `gematria_results_${targetGematria}_${timestamp}.txt`;
				
				document.body.appendChild(a);
				a.click();
				document.body.removeChild(a);
				URL.revokeObjectURL(url);

				// Visual feedback
				const exportBtn = document.getElementById('findExportBtn');
				const originalHTML = exportBtn.innerHTML;
				exportBtn.innerHTML = '✓ Exported!';
				exportBtn.style.backgroundColor = '#28a745';
				setTimeout(() => {
					exportBtn.innerHTML = originalHTML;
					exportBtn.style.backgroundColor = '#3333aa';
				}, 2000);
			});

			// Add hover effects for Copy All button
			document.getElementById('findCopyAllBtn').addEventListener('mouseenter', function() {
				if (this.innerHTML.includes('Copy All')) {
					this.style.backgroundColor = '#3333ee';
				}
			});

			document.getElementById('findCopyAllBtn').addEventListener('mouseleave', function() {
				if (this.innerHTML.includes('Copy All')) {
					this.style.backgroundColor = '#3333aa';
				}
			});

			// Add hover effects for Export button
			document.getElementById('findExportBtn').addEventListener('mouseenter', function() {
				if (this.innerHTML.includes('Export')) {
					this.style.backgroundColor = '#3333ee';
				}
			});

				document.getElementById('findExportBtn').addEventListener('mouseleave', function() {
					if (this.innerHTML.includes('Export')) {
						this.style.backgroundColor = '#3333aa';
					}
				});
			});
		}
	</script>

	<script>
		function toggleELS(){
			console.log('toggleELS triggered');
			const textArea = document.getElementById('textArea');
			const selection = window.getSelection();
			let guessStartPosition = 1;
			
			// Helper function to check if a character belongs to a specific language
			function isLanguageLetter(char, language) {
				const code = char.charCodeAt(0);
				
				// Check for Hebrew letters (including finals)
				if (language.includes('Hebrew')) {
					if ((code >= 0x05D0 && code <= 0x05EA) || 
					    char === "\u05DA" || char === "\u05DD" || char === "\u05DF" || 
					    char === "\u05E3" || char === "\u05E5") {
						return true;
					}
				}
				
				// Check for Greek letters
				if (language.includes('Greek')) {
					if (code >= 0x0370 && code <= 0x03FF) {
						return true;
					}
				}
				
				// Check for English/Latin letters
				if (language.includes('English')) {
					if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
						return true;
					}
				}
				
				return false;
			}
			
			if (selection.rangeCount > 0) {
				const range = selection.getRangeAt(0);
				const selectedText = selection.toString();
				console.log('Selected text:', selectedText);
				if (selectedText.trim()) {
					// Clear any existing highlights first while preserving original formatting
					const existingHighlights = textArea.querySelectorAll('.els-highlight');
					existingHighlights.forEach(highlight => {
						const parent = highlight.parentNode;
						
						// Create a span to preserve any original formatting that was there before the highlight
						const preservedSpan = document.createElement('span');
						preservedSpan.textContent = highlight.textContent;
						
						// Check if the highlight has any preserved styling from before it was highlighted
						const originalColor = highlight.getAttribute('data-original-color');
						const originalWeight = highlight.getAttribute('data-original-weight');
						const originalShadow = highlight.getAttribute('data-original-shadow');
						const hasYellowBg = highlight.getAttribute('data-original-yellow-bg');
						const hasGreenBg = highlight.getAttribute('data-original-green-bg');
						const hasGematria = highlight.getAttribute('data-original-gematria');
						const gematriaStyle = highlight.getAttribute('data-gematria-style');
						
						if (hasGematria && gematriaStyle) {
							// Restore full gematria styling
							preservedSpan.setAttribute('style', gematriaStyle);
						} else {
							// Apply individual preserved styles
							if (originalColor) {
								preservedSpan.style.setProperty('color', originalColor, 'important');
							}
							if (originalWeight) {
								preservedSpan.style.setProperty('font-weight', originalWeight, 'important');
							}
							if (originalShadow) {
								preservedSpan.style.setProperty('text-shadow', originalShadow, 'important');
							}
							if (hasYellowBg) {
								preservedSpan.style.setProperty('background-color', 'yellow', 'important');
							}
							if (hasGreenBg) {
								preservedSpan.style.setProperty('background-color', '#00FF00', 'important');
								preservedSpan.style.setProperty('font-weight', 'bold', 'important');
								preservedSpan.style.setProperty('padding', '1px 2px', 'important');
								preservedSpan.style.setProperty('border-radius', '2px', 'important');
							}
						}
						
						parent.replaceChild(preservedSpan, highlight);
						parent.normalize();
					});

					// Get clean text content without any HTML tags
					const fullText = textArea.textContent;

					// Find the position of the selection end in the clean text
					const selectionEndText = fullText.substring(0, range.endOffset);
					let count = 0;
					for (let i = 0; i < selectionEndText.length; i++) {
						const char = selectionEndText[i];
						if (isLetter(char)) {
							count++;
						}
					}
					guessStartPosition = count;
					if (guessStartPosition === 0) guessStartPosition = 1;
					console.log('guessStartPosition:', guessStartPosition);
				} else {
					// No text selected - find first letter matching detectedLanguage
					console.log('No text selected, finding first letter of detected language');
					const fullText = textArea.textContent;
					let count = 0;
					let foundFirst = false;
					
					for (let i = 0; i < fullText.length; i++) {
						const char = fullText[i];
						if (isLetter(char)) {
							count++;
							// Check if this letter matches the detected language
							if (!foundFirst && detectedLanguage && isLanguageLetter(char, detectedLanguage)) {
								guessStartPosition = count;
								foundFirst = true;
								console.log('Found first letter of detected language at position:', guessStartPosition);
								break;
							}
						}
					}
					
					// If no matching letter found, default to 1
					if (!foundFirst) {
						guessStartPosition = 1;
						console.log('No matching letter found, defaulting to position 1');
					}
				}
			} else {
				// No selection range - find first letter matching detectedLanguage
				console.log('No selection range, finding first letter of detected language');
				const fullText = textArea.textContent;
				let count = 0;
				let foundFirst = false;
				
				for (let i = 0; i < fullText.length; i++) {
					const char = fullText[i];
					if (isLetter(char)) {
						count++;
						// Check if this letter matches the detected language
						if (!foundFirst && detectedLanguage && isLanguageLetter(char, detectedLanguage)) {
							guessStartPosition = count;
							foundFirst = true;
							console.log('Found first letter of detected language at position:', guessStartPosition);
							break;
						}
					}
				}
				
				// If no matching letter found, default to 1
				if (!foundFirst) {
					guessStartPosition = 1;
					console.log('No matching letter found, defaulting to position 1');
				}
			}

			function isLetter(char) {
				const code = char.charCodeAt(0);
				return (code >= 0x05D0 && code <= 0x05EA) || (code >= 0x05DA && code <= 0x05DF) || (code >= 0x0370 && code <= 0x03FF) || (code >= 65 && code <= 90) || (code >= 97 && code <= 122);
			}

			function convertToGematria(str) {
				let total = 0;
				for (let char of str) {
					const code = char.charCodeAt(0);
					// Hebrew letters - map each letter individually to correct L values
					if (code >= 0x05D0 && code <= 0x05EA) {
						switch(char) {
							case "\u05D0": total += L01; break; // aleph א = 1
							case "\u05D1": total += L02; break; // bet ב = 2
							case "\u05D2": total += L03; break; // gimel ג = 3
							case "\u05D3": total += L04; break; // dalet ד = 4
							case "\u05D4": total += L05; break; // hey ה = 5
							case "\u05D5": total += L06; break; // vav ו = 6
							case "\u05D6": total += L07; break; // zayin ז = 7
							case "\u05D7": total += L08; break; // chet ח = 8
							case "\u05D8": total += L09; break; // tet ט = 9
							case "\u05D9": total += L10; break; // yod י = 10
							case "\u05DB": total += L11; break; // kaf כ = 20
							case "\u05DC": total += L12; break; // lamed ל = 30
							case "\u05DE": total += L13; break; // mem מ = 40
							case "\u05E0": total += L14; break; // nun נ = 50
							case "\u05E1": total += L15; break; // samech ס = 60
							case "\u05E2": total += L16; break; // ayin ע = 70
							case "\u05E4": total += L17; break; // pey פ = 80
							case "\u05E6": total += L18; break; // tzadi צ = 90
							case "\u05E7": total += L19; break; // kuf ק = 100
							case "\u05E8": total += L20; break; // resh ר = 200
							case "\u05E9": total += L21; break; // shin ש = 300
							case "\u05EA": total += L22; break; // tav ת = 400
						}
					} else if (char === "\u05DA" || char === "\u05DD" || char === "\u05DF" || char === "\u05E3" || char === "\u05E5") {
						// Hebrew finals - handle each final letter individually
						switch(char) {
							case "\u05DA": total += L23; break; // kaf sofit ך = 500
							case "\u05DD": total += L24; break; // mem sofit ם = 600  
							case "\u05DF": total += L25; break; // nun sofit ן = 700
							case "\u05E3": total += L26; break; // pey sofit ף = 800
							case "\u05E5": total += L27; break; // tzadi sofit ץ = 900
						}
					} else if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
						// English letters - A=1, B=2, etc.
						const upper = code >= 65 && code <= 90 ? code : code - 32;
						total += upper - 64; // A=1, B=2, C=3, etc.
					} else if (code >= 0x0370 && code <= 0x03FF) {
						// Greek letters with isopsephy values
						switch(char) {
							// Alpha variants
							case "\u0386": case "\u0391": case "\u03AC": case "\u03B1": 
							case "\u1F00": case "\u1F01": case "\u1F02": case "\u1F03": case "\u1F04": case "\u1F05": case "\u1F06": case "\u1F07":
							case "\u1F08": case "\u1F09": case "\u1F0A": case "\u1F0B": case "\u1F0C": case "\u1F0D": case "\u1F0E": case "\u1F0F":
							case "\u1F70": case "\u1F71": case "\u1F80": case "\u1F81": case "\u1F82": case "\u1F83": case "\u1F84": case "\u1F85": case "\u1F86": case "\u1F87":
							case "\u1F88": case "\u1F89": case "\u1F8A": case "\u1F8B": case "\u1F8C": case "\u1F8D": case "\u1F8E": case "\u1F8F":
							case "\u1FB0": case "\u1FB1": case "\u1FB2": case "\u1FB3": case "\u1FB4": case "\u1FB6": case "\u1FB7":
							case "\u1FB8": case "\u1FB9": case "\u1FBA": case "\u1FBB": case "\u1FBC":
								total += 1; break;
							// Beta
							case "\u0392": case "\u03B2": case "\u03D0":
								total += 2; break;
							// Gamma
							case "\u0393": case "\u03B3":
								total += 3; break;
							// Delta
							case "\u0394": case "\u03B4":
								total += 4; break;
							// Epsilon variants
							case "\u0388": case "\u0395": case "\u03AD": case "\u03B5": case "\u03F5":
							case "\u1F10": case "\u1F11": case "\u1F12": case "\u1F13": case "\u1F14": case "\u1F15":
							case "\u1F18": case "\u1F19": case "\u1F1A": case "\u1F1B": case "\u1F1C": case "\u1F1D":
							case "\u1F72": case "\u1F73": case "\u1FC8": case "\u1FC9":
								total += 5; break;
							// Digamma/Stigma
							case "\u03DA": case "\u03DB": case "\u03DC": case "\u03DD": case "\u0376": case "\u0377":
								total += 6; break;
							// Zeta
							case "\u0396": case "\u03B6":
								total += 7; break;
							// Eta variants
							case "\u0389": case "\u0397": case "\u03AE": case "\u03B7":
							case "\u1F20": case "\u1F21": case "\u1F22": case "\u1F23": case "\u1F24": case "\u1F25": case "\u1F26": case "\u1F27":
							case "\u1F28": case "\u1F29": case "\u1F2A": case "\u1F2B": case "\u1F2C": case "\u1F2D": case "\u1F2E": case "\u1F2F":
							case "\u1F74": case "\u1F75": case "\u1F90": case "\u1F91": case "\u1F92": case "\u1F93": case "\u1F94": case "\u1F95": case "\u1F96": case "\u1F97":
							case "\u1F98": case "\u1F99": case "\u1F9A": case "\u1F9B": case "\u1F9C": case "\u1F9D": case "\u1F9E": case "\u1F9F":
							case "\u1FC2": case "\u1FC3": case "\u1FC4": case "\u1FC6": case "\u1FC7": case "\u1FCA": case "\u1FCB": case "\u1FCC":
								total += 8; break;
							// Theta
							case "\u0398": case "\u03B8": case "\u03D1": case "\u03F4":
								total += 9; break;
							// Iota variants
							case "\u038A": case "\u0390": case "\u0399": case "\u03AA": case "\u03AF": case "\u03B9": case "\u03CA":
							case "\u1F30": case "\u1F31": case "\u1F32": case "\u1F33": case "\u1F34": case "\u1F35": case "\u1F36": case "\u1F37":
							case "\u1F38": case "\u1F39": case "\u1F3A": case "\u1F3B": case "\u1F3C": case "\u1F3D": case "\u1F3E": case "\u1F3F":
							case "\u1F76": case "\u1F77": case "\u1FBE": case "\u1FD0": case "\u1FD1": case "\u1FD2": case "\u1FD3": case "\u1FD6": case "\u1FD7":
							case "\u1FD8": case "\u1FD9": case "\u1FDA": case "\u1FDB":
								total += 10; break;
							// Kappa
							case "\u039A": case "\u03BA": case "\u03CF": case "\u03D7": case "\u03F0":
								total += 20; break;
							// Lambda
							case "\u039B": case "\u03BB":
								total += 30; break;
							// Mu
							case "\u039C": case "\u03BC":
								total += 40; break;
							// Nu
							case "\u039D": case "\u03BD":
								total += 50; break;
							// Xi
							case "\u039E": case "\u03BE":
								total += 60; break;
							// Omicron variants
							case "\u038C": case "\u039F": case "\u03CC": case "\u03BF":
							case "\u1F40": case "\u1F41": case "\u1F42": case "\u1F43": case "\u1F44": case "\u1F45":
							case "\u1F48": case "\u1F49": case "\u1F4A": case "\u1F4B": case "\u1F4C": case "\u1F4D":
							case "\u1F78": case "\u1F79": case "\u1FF8": case "\u1FF9":
								total += 70; break;
							// Pi
							case "\u03A0": case "\u03C0": case "\u03D6":
								total += 80; break;
							// Koppa
							case "\u03D8": case "\u03D9": case "\u03DE": case "\u03DF":
								total += 90; break;
							// Rho
							case "\u03A1": case "\u03C1": case "\u03F1": case "\u1FE4": case "\u1FE5": case "\u1FEC":
								total += 100; break;
							// Sigma variants
							case "\u03A3": case "\u03C2": case "\u03C3": case "\u03F2": case "\u037B": case "\u037C": case "\u037D":
							case "\u03F9": case "\u03FD": case "\u03FE": case "\u03FF": case "\u03FA": case "\u03FB": case "\u03F7": case "\u03F8":
								total += 200; break;
							// Tau
							case "\u03A4": case "\u03C4":
								total += 300; break;
							// Upsilon variants
							case "\u038E": case "\u03A5": case "\u03AB": case "\u03B0": case "\u03C5": case "\u03CB": case "\u03CD":
							case "\u03D2": case "\u03D3": case "\u03D4":
							case "\u1F50": case "\u1F51": case "\u1F52": case "\u1F53": case "\u1F54": case "\u1F55": case "\u1F56": case "\u1F57":
							case "\u1F59": case "\u1F5B": case "\u1F5D": case "\u1F5F": case "\u1F7A": case "\u1F7B":
							case "\u1FE0": case "\u1FE1": case "\u1FE2": case "\u1FE3": case "\u1FE6": case "\u1FE7":
							case "\u1FE8": case "\u1FE9": case "\u1FEB":
								total += 400; break;
							// Phi
							case "\u03A6": case "\u03C6": case "\u03D5":
								total += 500; break;
							// Chi
							case "\u03A7": case "\u03C7":
								total += 600; break;
							// Psi
							case "\u03A8": case "\u03C8":
								total += 700; break;
							// Omega variants
							case "\u038F": case "\u03A9": case "\u03C9": case "\u03CE": case "\u2126":
							case "\u1F60": case "\u1F61": case "\u1F62": case "\u1F63": case "\u1F64": case "\u1F65": case "\u1F66": case "\u1F67":
							case "\u1F68": case "\u1F69": case "\u1F6A": case "\u1F6B": case "\u1F6C": case "\u1F6D": case "\u1F6E": case "\u1F6F":
							case "\u1F7C": case "\u1F7D": case "\u1FA0": case "\u1FA1": case "\u1FA2": case "\u1FA3": case "\u1FA4": case "\u1FA5": case "\u1FA6": case "\u1FA7":
							case "\u1FA8": case "\u1FA9": case "\u1FAA": case "\u1FAB": case "\u1FAC": case "\u1FAD": case "\u1FAE": case "\u1FAF":
							case "\u1FF2": case "\u1FF3": case "\u1FF4": case "\u1FF6": case "\u1FF7": case "\u1FFA": case "\u1FFB": case "\u1FFC":
								total += 800; break;
							// Sampi
							case "\u0372": case "\u0373": case "\u03E0": case "\u03E1":
								total += 900; break;
							default:
								// For any other Greek character, try to map it to a basic value
								if (code >= 0x0391 && code <= 0x03A9) {
									// Greek uppercase letters
									total += (code - 0x0390);
								} else if (code >= 0x03B1 && code <= 0x03C9) {
									// Greek lowercase letters
									total += (code - 0x03B0);
								}
								break;
						}
					}
				}
				
				// Apply the same gematria modifiers as the main calculation
				const gematriaSelect = document.getElementById('gematriaSelect');
				if (gematriaSelect) {
					if(gematriaSelect.value == "HaKlali"){
						total = total * total;
					}
					else if(gematriaSelect.value == "Kolel"){
						total += str.replace(/\s/g, '').length; // add letter count
					}
					else if(gematriaSelect.value == "Kolel+1"){
						total += str.split(/\s+/).filter(word => word.length > 0).length; // add word count
					}
					else if (gematriaSelect.value == "IntegralReduced"){
						while(total >= 10){
							let product = Math.floor(total / 10);
							let remainder = total % 10;
							total = remainder + product;
						}
					}
				}
				
				return total;
			}

			const modal = document.createElement('div');
			modal.id = 'elsModal';
			modal.className = 'modal';
			modal.innerHTML = `
				<div class="modal-content" style="width: 40%; min-width: 300px; max-width: 80vw; height: auto; min-height: 300px; max-height: 90vh; display: flex; flex-direction: column; overflow: hidden; position: relative;">
					<span class="close" style="position: absolute; top: 10px; right: 20px; font-size: 28px; font-weight: bold; color: #aaa; cursor: pointer; z-index: 10;" onclick="document.getElementById('elsModal').remove()">&times;</span>
					<h2 style="text-align: center; margin-top: 0;">Equidistant Letter Sequence</h2>
					<div style="display: flex; flex-direction: column; gap: 10px; margin-top: 20px;">
						<div class="alt-word-controls" id="altWordControls" style="display: none;">
							<div class="radio-group">
								<span class="remove-label">Remove:</span>
								<div class="radio-option">
									<input type="radio" id="altWord1Radio" name="altWordSelection" value="AltWord1">
									<label for="altWord1Radio">Alt Word 1<span class="asterisk">*</span></label>
								</div>
								<div class="radio-option">
									<input type="radio" id="altWord2Radio" name="altWordSelection" value="AltWord2">
									<label for="altWord2Radio">Alt Word 2<span class="flower">⁕</span></label>
								</div>
							</div>
						</div>
						<div class="els-controls">
							<div class="els-input-group" style="display: flex; flex-direction: column; gap: 5px;">
								<label for="startPosition" style="font-size: 11px; text-align: center;">Start Position</label>
								<input type="text" id="startPosition" value="${guessStartPosition}" placeholder="Start Position" style="text-align: center; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
								<div class="cleanup-checkbox-container">
									<input type="checkbox" id="elsCleanupCheckbox" checked>
									<label for="elsCleanupCheckbox">Remove ALL previous text mark up / formatting.</label>
								</div>
							</div>
							<div class="els-input-group" style="display: flex; flex-direction: column; gap: 5px;">
								<label for="sequenceNum" style="font-size: 11px; text-align: center;">Sequence Number</label>
								<input type="text" id="sequenceNum" placeholder="Sequence Number" style="text-align: center; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
							</div>
							<button id="elsSearchBtn" class="textBtn" style="background-color: #3333aa; color: #fff; border: none; padding: 8px 8px 8px 8px; cursor: pointer; font-size: 12px; font-weight: bold; margin-right: 0px; border-radius: 5px; box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.35); transition: background-color 0.0s; margin-top: 21px;"><img src="img/find.png" height="16" width="14" border="0" alt="Search"><img src="img/invis.gif" width="4" border="0">Search</button>
						</div>
					</div>
					<div id="elsResults" style="margin-top: 20px; text-align: center; overflow-y: auto; overflow-x: hidden; flex: 1 1 auto; min-height: 0;"></div>
				</div>
		`;
		document.body.appendChild(modal);
		modal.style.display = 'block';

		// Load saved checkbox preference from localStorage, default to checked
		const elsCleanupCheckbox = document.getElementById('elsCleanupCheckbox');
		if (elsCleanupCheckbox) {
			const savedCleanupPreference = localStorage.getItem('elsCleanupCheckbox');
			if (savedCleanupPreference !== null) {
				elsCleanupCheckbox.checked = savedCleanupPreference === 'true';
			}
			
			// Add event listener to save checkbox state to localStorage
			elsCleanupCheckbox.addEventListener('change', function() {
				localStorage.setItem('elsCleanupCheckbox', this.checked.toString());
			});
		}

		// Check if textArea contains * and ⁕ characters and show/hide radio buttons accordingly
		function checkAltWordVisibility() {
			const textAreaContent = textArea.textContent || textArea.innerText || '';
			const hasAsterisk = textAreaContent.includes('*');
			const hasFlowerMark = textAreaContent.includes('⁕');
			const altWordControls = document.getElementById('altWordControls');
			
			if (hasAsterisk && hasFlowerMark && altWordControls) {
				altWordControls.style.display = 'block';
				
				// Load saved preference from localStorage, default to Alt Word 2⁕
				const savedSelection = localStorage.getItem('elsAltWordSelection') || 'AltWord2';
				const radioButton = document.querySelector(`input[name="altWordSelection"][value="${savedSelection}"]`);
				if (radioButton) {
					radioButton.checked = true;
				}
				
				// Add event listeners to save selection to localStorage
				const radioButtons = document.querySelectorAll('input[name="altWordSelection"]');
				radioButtons.forEach(radio => {
					radio.addEventListener('change', () => {
						if (radio.checked) {
							localStorage.setItem('elsAltWordSelection', radio.value);
						}
					});
				});
			} else if (altWordControls) {
				altWordControls.style.display = 'none';
			}
		}
		
		// Call the visibility check function
		checkAltWordVisibility();

		// Function to check modal width and apply responsive class
		function checkModalWidth() {
			const modalContent = modal.querySelector('.modal-content');
			if (modalContent) {
				const modalWidth = modalContent.offsetWidth;
				// If modal width is 510px or less, use vertical layout
				if (modalWidth <= 510) {
					modal.classList.add('narrow-modal');
				} else {
					modal.classList.remove('narrow-modal');
				}
			}
		}

		// Check width initially and on window resize
		setTimeout(checkModalWidth, 0); // Use setTimeout to ensure DOM is fully rendered
		window.addEventListener('resize', checkModalWidth);

		// Set focus to the sequenceNum textbox
		const sequenceNumInput = document.getElementById('sequenceNum');
		if (sequenceNumInput) {
			sequenceNumInput.focus();
		}

		// Add Enter key functionality for both input fields
		const startPositionInput = document.getElementById('startPosition');
		const sequenceNumberInput = document.getElementById('sequenceNum');
		
		function triggerSearchIfBothFilled(event) {
			if (event.key === 'Enter') {
				const startValue = startPositionInput.value.trim();
				const seqValue = sequenceNumberInput.value.trim();
				
				// Only trigger search if both fields have values
				if (startValue && seqValue) {
					document.getElementById('elsSearchBtn').click();
				}
			}
		}
		
		if (startPositionInput) {
			startPositionInput.addEventListener('keydown', triggerSearchIfBothFilled);
		}
		
		if (sequenceNumberInput) {
			sequenceNumberInput.addEventListener('keydown', triggerSearchIfBothFilled);
		}

		document.getElementById('startPosition').addEventListener('input', function() {
				const val = this.value;

				// Debug logging for Hebrew Finals
				console.log('startPosition input:', val);
				for (let i = 0; i < val.length; i++) {
					const char = val[i];
					const code = char.charCodeAt(0);
					console.log(`Character ${i}: "${char}" (U+${code.toString(16).toUpperCase().padStart(4, '0')})`);
				}

				// Check if the input contains both numbers and letters
				const hasNumbers = /\d/.test(val);
				const hasLetters = /[a-zA-Z\u05D0-\u05EA\u05DA-\u05E5\u0370-\u03FF]/.test(val);
				
				console.log('hasNumbers:', hasNumbers, 'hasLetters:', hasLetters);
				
				if (hasNumbers && hasLetters) {
					// Extract existing numbers and letters separately
					const numbers = val.match(/\d+/g) || [];
					const letters = val.match(/[a-zA-Z\u05D0-\u05EA\u05DA-\u05E5\u0370-\u03FF]/g) || [];
					
					// Calculate sum of existing numbers
					let existingSum = numbers.reduce((sum, num) => sum + parseInt(num), 0);
					
					// Convert letters to gematria and add to existing sum
					let letterSum = 0;
					for (let letter of letters) {
						// Calculate gematria for each individual letter
						let letterValue = 0;
						const code = letter.charCodeAt(0);
						
						// Hebrew letters
						if (code >= 0x05D0 && code <= 0x05EA) {
							switch(letter) {
								case "\u05D0": letterValue = L01; break; // aleph א = 1
								case "\u05D1": letterValue = L02; break; // bet ב = 2
								case "\u05D2": letterValue = L03; break; // gimel ג = 3
								case "\u05D3": letterValue = L04; break; // dalet ד = 4
								case "\u05D4": letterValue = L05; break; // hey ה = 5
								case "\u05D5": letterValue = L06; break; // vav ו = 6
								case "\u05D6": letterValue = L07; break; // zayin ז = 7
								case "\u05D7": letterValue = L08; break; // chet ח = 8
								case "\u05D8": letterValue = L09; break; // tet ט = 9
								case "\u05D9": letterValue = L10; break; // yod י = 10
								case "\u05DA": letterValue = L23; break; // kaf sofit ך = 500
								case "\u05DB": letterValue = L11; break; // kaf כ = 20
								case "\u05DC": letterValue = L12; break; // lamed ל = 30
								case "\u05DD": letterValue = L24; break; // mem sofit ם = 600
								case "\u05DE": letterValue = L13; break; // mem מ = 40
								case "\u05DF": letterValue = L25; break; // nun sofit ן = 700
								case "\u05E0": letterValue = L14; break; // nun נ = 50
								case "\u05E1": letterValue = L15; break; // samech ס = 60
								case "\u05E2": letterValue = L16; break; // ayin ע = 70
								case "\u05E3": letterValue = L26; break; // pey sofit ף = 800
								case "\u05E4": letterValue = L17; break; // pey פ = 80
								case "\u05E5": letterValue = L27; break; // tzadi sofit ץ = 900
								case "\u05E6": letterValue = L18; break; // tzadi צ = 90
								case "\u05E7": letterValue = L19; break; // kuf ק = 100
								case "\u05E8": letterValue = L20; break; // resh ר = 200
								case "\u05E9": letterValue = L21; break; // shin ש = 300
								case "\u05EA": letterValue = L22; break; // tav ת = 400
							}
						} else if (letter === "\u05DA" || letter === "\u05DD" || letter === "\u05DF" || letter === "\u05E3" || letter === "\u05E5") {
							// Hebrew finals - handle each final letter individually
							switch(letter) {
								case "\u05DA": letterValue = L23; break; // kaf sofit ך = 500
								case "\u05DD": letterValue = L24; break; // mem sofit ם = 600  
								case "\u05DF": letterValue = L25; break; // nun sofit ן = 700
								case "\u05E3": letterValue = L26; break; // pey sofit ף = 800
								case "\u05E5": letterValue = L27; break; // tzadi sofit ץ = 900
							}
						} else if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
							// English letters - A=1, B=2, etc.
							const upper = code >= 65 && code <= 90 ? code : code - 32;
							letterValue = upper - 64; // A=1, B=2, C=3, etc.
						} else if (code >= 0x0370 && code <= 0x03FF) {
							// Greek letters - basic mapping
							switch(letter) {
								case "\u0386": case "\u0391": case "\u03AC": case "\u03B1": letterValue = 1; break; // alpha
								case "\u0392": case "\u03B2": letterValue = 2; break; // beta
								case "\u0393": case "\u03B3": letterValue = 3; break; // gamma
								case "\u0394": case "\u03B4": letterValue = 4; break; // delta
								case "\u0388": case "\u0395": case "\u03AD": case "\u03B5": letterValue = 5; break; // epsilon
								case "\u0396": case "\u03B6": letterValue = 7; break; // zeta
								case "\u0389": case "\u0397": case "\u03AE": case "\u03B7": letterValue = 8; break; // eta
								case "\u0398": case "\u03B8": letterValue = 9; break; // theta
								case "\u038A": case "\u0399": case "\u03AF": case "\u03B9": letterValue = 10; break; // iota
								case "\u039A": case "\u03BA": letterValue = 20; break; // kappa
								case "\u039B": case "\u03BB": letterValue = 30; break; // lambda
								case "\u039C": case "\u03BC": letterValue = 40; break; // mu
								case "\u039D": case "\u03BD": letterValue = 50; break; // nu
								case "\u039E": case "\u03BE": letterValue = 60; break; // xi
								case "\u038C": case "\u039F": case "\u03CC": case "\u03BF": letterValue = 70; break; // omicron
								case "\u03A0": case "\u03C0": letterValue = 80; break; // pi
								case "\u03A1": case "\u03C1": letterValue = 100; break; // rho
								case "\u03A3": case "\u03C2": case "\u03C3": letterValue = 200; break; // sigma
								case "\u03A4": case "\u03C4": letterValue = 300; break; // tau
								case "\u038E": case "\u03A5": case "\u03CD": case "\u03C5": letterValue = 400; break; // upsilon
								case "\u03A6": case "\u03C6": letterValue = 500; break; // phi
								case "\u03A7": case "\u03C7": letterValue = 600; break; // chi
								case "\u03A8": case "\u03C8": letterValue = 700; break; // psi
								case "\u038F": case "\u03A9": case "\u03CE": case "\u03C9": letterValue = 800; break; // omega
								// Hebrew Finals safety net - prevent fallthrough to default case
								case "\u05DA": letterValue = L23; break; // kaf sofit ך = 500
								case "\u05DD": letterValue = L24; break; // mem sofit ם = 600
								case "\u05DF": letterValue = L25; break; // nun sofit ן = 700
								case "\u05E3": letterValue = L26; break; // pey sofit ף = 800
								case "\u05E5": letterValue = L27; break; // tzadi sofit ץ = 900
								default: letterValue = 0; break;
							}
						}
						
						letterSum += letterValue;
					}
					
					// Debug logging for mixed branch
					console.log('existingSum:', existingSum);
					console.log('letterSum:', letterSum);
					console.log('L23 value:', L23);
					console.log('Final result:', existingSum + letterSum);
					
					// Replace field content with the total sum
					this.value = existingSum + letterSum;
				} else if (hasLetters && !hasNumbers) {
					// Only letters, convert to gematria
					let total = 0;
					for (let letter of val) {
						const code = letter.charCodeAt(0);
						
						// Hebrew letters
						if (code >= 0x05D0 && code <= 0x05EA) {
							switch(letter) {
								case "\u05D0": total += L01; break; // aleph א = 1
								case "\u05D1": total += L02; break; // bet ב = 2
								case "\u05D2": total += L03; break; // gimel ג = 3
								case "\u05D3": total += L04; break; // dalet ד = 4
								case "\u05D4": total += L05; break; // hey ה = 5
								case "\u05D5": total += L06; break; // vav ו = 6
								case "\u05D6": total += L07; break; // zayin ז = 7
								case "\u05D7": total += L08; break; // chet ח = 8
								case "\u05D8": total += L09; break; // tet ט = 9
								case "\u05D9": total += L10; break; // yod י = 10
								case "\u05DB": total += L11; break; // kaf כ = 20
								case "\u05DC": total += L12; break; // lamed ל = 30
								case "\u05DE": total += L13; break; // mem מ = 40
								case "\u05E0": total += L14; break; // nun נ = 50
								case "\u05E1": total += L15; break; // samech ס = 60
								case "\u05E2": total += L16; break; // ayin ע = 70
								case "\u05E4": total += L17; break; // pey פ = 80
								case "\u05E6": total += L18; break; // tzadi צ = 90
								case "\u05E7": total += L19; break; // kuf ק = 100
								case "\u05E8": total += L20; break; // resh ר = 200
								case "\u05E9": total += L21; break; // shin ש = 300
								case "\u05EA": total += L22; break; // tav ת = 400
							}
						} else if (letter === "\u05DA" || letter === "\u05DD" || letter === "\u05DF" || letter === "\u05E3" || letter === "\u05E5") {
							// Hebrew finals - handle each final letter individually
							switch(letter) {
								case "\u05DA": total += L23; break; // kaf sofit ך = 500
								case "\u05DD": total += L24; break; // mem sofit ם = 600  
								case "\u05DF": total += L25; break; // nun sofit ן = 700
								case "\u05E3": total += L26; break; // pey sofit ף = 800
								case "\u05E5": total += L27; break; // tzadi sofit ץ = 900
							}
						} else if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
							// English letters - A=1, B=2, etc.
							const upper = code >= 65 && code <= 90 ? code : code - 32;
							total += upper - 64; // A=1, B=2, C=3, etc.
						} else if (code >= 0x0370 && code <= 0x03FF) {
							// Greek letters - basic mapping
							switch(letter) {
								case "\u0386": case "\u0391": case "\u03AC": case "\u03B1": total += 1; break; // alpha
								case "\u0392": case "\u03B2": total += 2; break; // beta
								case "\u0393": case "\u03B3": total += 3; break; // gamma
								case "\u0394": case "\u03B4": total += 4; break; // delta
								case "\u0388": case "\u0395": case "\u03AD": case "\u03B5": total += 5; break; // epsilon
								case "\u0396": case "\u03B6": total += 7; break; // zeta
								case "\u0389": case "\u0397": case "\u03AE": case "\u03B7": total += 8; break; // eta
								case "\u0398": case "\u03B8": total += 9; break; // theta
								case "\u038A": case "\u0399": case "\u03AF": case "\u03B9": total += 10; break; // iota
								case "\u039A": case "\u03BA": total += 20; break; // kappa
								case "\u039B": case "\u03BB": total += 30; break; // lambda
								case "\u039C": case "\u03BC": total += 40; break; // mu
								case "\u039D": case "\u03BD": total += 50; break; // nu
								case "\u039E": case "\u03BE": total += 60; break; // xi
								case "\u038C": case "\u039F": case "\u03CC": case "\u03BF": total += 70; break; // omicron
								case "\u03A0": case "\u03C0": total += 80; break; // pi
								case "\u03A1": case "\u03C1": total += 100; break; // rho
								case "\u03A3": case "\u03C2": case "\u03C3": total += 200; break; // sigma
								case "\u03A4": case "\u03C4": total += 300; break; // tau
								case "\u038E": case "\u03A5": case "\u03CD": case "\u03C5": total += 400; break; // upsilon
								case "\u03A6": case "\u03C6": total += 500; break; // phi
								case "\u03A7": case "\u03C7": total += 600; break; // chi
								case "\u03A8": case "\u03C8": total += 700; break; // psi
								case "\u038F": case "\u03A9": case "\u03CE": case "\u03C9": total += 800; break; // omega
								default: break;
							}
						}
					}
					this.value = total;
				}
				// If only numbers, leave as is
			});

			document.getElementById('sequenceNum').addEventListener('input', function() {
				const val = this.value;
				
				// Check if the input contains both numbers and letters
				const hasNumbers = /\d/.test(val);
				const hasLetters = /[a-zA-Z\u05D0-\u05EA\u05DA-\u05E5\u0370-\u03FF]/.test(val);
				
				if (hasNumbers && hasLetters) {
					// Extract existing numbers and letters separately
					const numbers = val.match(/\d+/g) || [];
					const letters = val.match(/[a-zA-Z\u05D0-\u05EA\u05DA-\u05E5\u0370-\u03FF]/g) || [];
					
					// Calculate sum of existing numbers
					let existingSum = numbers.reduce((sum, num) => sum + parseInt(num), 0);
					
					// Convert letters to gematria and add to existing sum
					let letterSum = 0;
					for (let letter of letters) {
						// Calculate gematria for each individual letter
						let letterValue = 0;
						const code = letter.charCodeAt(0);
						
					// Hebrew letters
					if (code >= 0x05D0 && code <= 0x05EA) {
						switch(letter) {
							case "\u05D0": letterValue = L01; break; // aleph = 1
							case "\u05D1": letterValue = L02; break; // bet = 2
							case "\u05D2": letterValue = L03; break; // gimel = 3
							case "\u05D3": letterValue = L04; break; // dalet = 4
							case "\u05D4": letterValue = L05; break; // hey = 5
							case "\u05D5": letterValue = L06; break; // vav = 6
							case "\u05D6": letterValue = L07; break; // zayin = 7
							case "\u05D7": letterValue = L08; break; // chet = 8
							case "\u05D8": letterValue = L09; break; // tet = 9
							case "\u05D9": letterValue = L10; break; // yod = 10
							case "\u05DA": letterValue = L23; break; // kaf sofit = 500
							case "\u05DB": letterValue = L11; break; // kaf = 20
							case "\u05DC": letterValue = L12; break; // lamed = 30
							case "\u05DD": letterValue = L24; break; // mem sofit = 600
							case "\u05DE": letterValue = L13; break; // mem = 40
							case "\u05DF": letterValue = L25; break; // nun sofit = 700
							case "\u05E0": letterValue = L14; break; // nun = 50
							case "\u05E1": letterValue = L15; break; // samech = 60
							case "\u05E2": letterValue = L16; break; // ayin = 70
							case "\u05E3": letterValue = L26; break; // pey sofit = 800
							case "\u05E4": letterValue = L17; break; // pey = 80
							case "\u05E5": letterValue = L27; break; // tzadi sofit = 900
							case "\u05E6": letterValue = L18; break; // tzadi = 90
							case "\u05E7": letterValue = L19; break; // kuf = 100
							case "\u05E8": letterValue = L20; break; // resh = 200
							case "\u05E9": letterValue = L21; break; // shin = 300
							case "\u05EA": letterValue = L22; break; // tav = 400
						}
					} else if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
							// English letters - A=1, B=2, etc.
							const upper = code >= 65 && code <= 90 ? code : code - 32;
							letterValue = upper - 64; // A=1, B=2, C=3, etc.
						} else if (code >= 0x0370 && code <= 0x03FF) {
							// Greek letters - basic mapping
							switch(letter) {
								case "\u0386": case "\u0391": case "\u03AC": case "\u03B1": letterValue = 1; break; // alpha
								case "\u0392": case "\u03B2": letterValue = 2; break; // beta
								case "\u0393": case "\u03B3": letterValue = 3; break; // gamma
								case "\u0394": case "\u03B4": letterValue = 4; break; // delta
								case "\u0388": case "\u0395": case "\u03AD": case "\u03B5": letterValue = 5; break; // epsilon
								case "\u0396": case "\u03B6": letterValue = 7; break; // zeta
								case "\u0389": case "\u0397": case "\u03AE": case "\u03B7": letterValue = 8; break; // eta
								case "\u0398": case "\u03B8": letterValue = 9; break; // theta
								case "\u038A": case "\u0399": case "\u03AF": case "\u03B9": letterValue = 10; break; // iota
								case "\u039A": case "\u03BA": letterValue = 20; break; // kappa
								case "\u039B": case "\u03BB": letterValue = 30; break; // lambda
								case "\u039C": case "\u03BC": letterValue = 40; break; // mu
								case "\u039D": case "\u03BD": letterValue = 50; break; // nu
								case "\u039E": case "\u03BE": letterValue = 60; break; // xi
								case "\u038C": case "\u039F": case "\u03CC": case "\u03BF": letterValue = 70; break; // omicron
								case "\u03A0": case "\u03C0": letterValue = 80; break; // pi
								case "\u03A1": case "\u03C1": letterValue = 100; break; // rho
								case "\u03A3": case "\u03C2": case "\u03C3": letterValue = 200; break; // sigma
								case "\u03A4": case "\u03C4": letterValue = 300; break; // tau
								case "\u038E": case "\u03A5": case "\u03CD": case "\u03C5": letterValue = 400; break; // upsilon
								case "\u03A6": case "\u03C6": letterValue = 500; break; // phi
								case "\u03A7": case "\u03C7": letterValue = 600; break; // chi
								case "\u03A8": case "\u03C8": letterValue = 700; break; // psi
								case "\u038F": case "\u03A9": case "\u03CE": case "\u03C9": letterValue = 800; break; // omega
								default: break;
							}
						}
						
						letterSum += letterValue;
					}
					
					// Replace field content with the total sum
					this.value = existingSum + letterSum;
				} else if (hasLetters && !hasNumbers) {
					// Only letters, convert to gematria
					let total = 0;
					for (let letter of val) {
						const code = letter.charCodeAt(0);
						
					// Hebrew letters
					if (code >= 0x05D0 && code <= 0x05EA) {
						switch(letter) {
							case "\u05D0": total += L01; break; // aleph = 1
							case "\u05D1": total += L02; break; // bet = 2
							case "\u05D2": total += L03; break; // gimel = 3
							case "\u05D3": total += L04; break; // dalet = 4
							case "\u05D4": total += L05; break; // hey = 5
							case "\u05D5": total += L06; break; // vav = 6
							case "\u05D6": total += L07; break; // zayin = 7
							case "\u05D7": total += L08; break; // chet = 8
							case "\u05D8": total += L09; break; // tet = 9
							case "\u05D9": total += L10; break; // yod = 10
							case "\u05DA": total += L23; break; // kaf sofit = 500
							case "\u05DB": total += L11; break; // kaf = 20
							case "\u05DC": total += L12; break; // lamed = 30
							case "\u05DD": total += L24; break; // mem sofit = 600
							case "\u05DE": total += L13; break; // mem = 40
							case "\u05DF": total += L25; break; // nun sofit = 700
							case "\u05E0": total += L14; break; // nun = 50
							case "\u05E1": total += L15; break; // samech = 60
							case "\u05E2": total += L16; break; // ayin = 70
							case "\u05E3": total += L26; break; // pey sofit = 800
							case "\u05E4": total += L17; break; // pey = 80
							case "\u05E5": total += L27; break; // tzadi sofit = 900
							case "\u05E6": total += L18; break; // tzadi = 90
							case "\u05E7": total += L19; break; // kuf = 100
							case "\u05E8": total += L20; break; // resh = 200
							case "\u05E9": total += L21; break; // shin = 300
							case "\u05EA": total += L22; break; // tav = 400
						}
					} else if ((code >= 65 && code <= 90) || (code >= 97 && code <= 122)) {
							// English letters - A=1, B=2, etc.
							const upper = code >= 65 && code <= 90 ? code : code - 32;
							total += upper - 64; // A=1, B=2, C=3, etc.
						} else if (code >= 0x0370 && code <= 0x03FF) {
							// Greek letters - basic mapping
							switch(letter) {
								case "\u0386": case "\u0391": case "\u03AC": case "\u03B1": total += 1; break; // alpha
								case "\u0392": case "\u03B2": total += 2; break; // beta
								case "\u0393": case "\u03B3": total += 3; break; // gamma
								case "\u0394": case "\u03B4": total += 4; break; // delta
								case "\u0388": case "\u0395": case "\u03AD": case "\u03B5": total += 5; break; // epsilon
								case "\u0396": case "\u03B6": total += 7; break; // zeta
								case "\u0389": case "\u0397": case "\u03AE": case "\u03B7": total += 8; break; // eta
								case "\u0398": case "\u03B8": total += 9; break; // theta
								case "\u038A": case "\u0399": case "\u03AF": case "\u03B9": total += 10; break; // iota
								case "\u039A": case "\u03BA": total += 20; break; // kappa
								case "\u039B": case "\u03BB": total += 30; break; // lambda
								case "\u039C": case "\u03BC": total += 40; break; // mu
								case "\u039D": case "\u03BD": total += 50; break; // nu
								case "\u039E": case "\u03BE": total += 60; break; // xi
								case "\u038C": case "\u039F": case "\u03CC": case "\u03BF": total += 70; break; // omicron
								case "\u03A0": case "\u03C0": total += 80; break; // pi
								case "\u03A1": case "\u03C1": total += 100; break; // rho
								case "\u03A3": case "\u03C2": case "\u03C3": total += 200; break; // sigma
								case "\u03A4": case "\u03C4": total += 300; break; // tau
								case "\u038E": case "\u03A5": case "\u03CD": case "\u03C5": total += 400; break; // upsilon
								case "\u03A6": case "\u03C6": total += 500; break; // phi
								case "\u03A7": case "\u03C7": total += 600; break; // chi
								case "\u03A8": case "\u03C8": total += 700; break; // psi
								case "\u038F": case "\u03A9": case "\u03CE": case "\u03C9": total += 800; break; // omega
								default: break;
							}
						}
					}
					this.value = total;
				}
				// If only numbers, leave as is
			});

			document.getElementById('elsSearchBtn').addEventListener('click', function() {
				greenFlash(this);
				
				// Always remove yellow backgrounds to avoid confusion with previous ELS results
				removeYellowBackgrounds();
				
				// Check if text cleanup checkbox is checked for removing ALL formatting
				const cleanupCheckbox = document.getElementById('elsCleanupCheckbox');
				if (cleanupCheckbox && cleanupCheckbox.checked) {
					removeAllTextFormatting();
				}
				
				// First, check if alt word radio buttons are visible and perform removal if needed
				const altWordControls = document.getElementById('altWordControls');
				if (altWordControls && altWordControls.style.display !== 'none') {
					const selectedRadio = document.querySelector('input[name="altWordSelection"]:checked');
					if (selectedRadio) {
						const selectedValue = selectedRadio.value;
						
						// Preserve formatting while removing alt words by working with HTML content
						let htmlContent = textArea.innerHTML;
						
						if (selectedValue === 'AltWord1') {
							// Remove Alt Word #1 content - match single asterisk followed by non-space characters and optional space
							// Use a more careful regex that works with HTML content
							htmlContent = htmlContent.replace(/\*[^\s\*<>]* ?/g, '');
						} else if (selectedValue === 'AltWord2') {
							// Remove Alt Word #2 content - match flower mark followed by non-space characters and optional space
							// Use a more careful regex that works with HTML content
							htmlContent = htmlContent.replace(/⁕[^\s⁕<>]* ?/g, '');
						}
						
						// Update textArea with the modified HTML content (preserves formatting)
						textArea.innerHTML = htmlContent;
						
						// Ensure special characters are still highlighted properly
						const textContent = textArea.textContent;
						const finalContent = textArea.innerHTML
							.replace(/(?<!<[^>]*>)\*(?![^<]*>)/g, '<span style="color: #FF0000;">*</span>')
							.replace(/(?<!<[^>]*>)⁕(?![^<]*>)/g, '<span style="color: #FF0000;">⁕</span>');
						textArea.innerHTML = finalContent;
					}
					
					// Disable all radio buttons after search is performed
					const radioButtons = document.querySelectorAll('input[name="altWordSelection"]');
					radioButtons.forEach(radio => {
						radio.disabled = true;
					});
				}
				
				const start = parseInt(document.getElementById('startPosition').value) || 1;
				let seq = parseInt(document.getElementById('sequenceNum').value);
				
				// Default sequenceNum to 1 if no value is entered
				if (!seq || seq === 0) {
					seq = 1;
					document.getElementById('sequenceNum').value = 1;
				}
				
				// Clear any existing ELS highlights first while preserving original formatting
				const existingHighlights = textArea.querySelectorAll('.els-highlight');
				existingHighlights.forEach(highlight => {
					const parent = highlight.parentNode;
					
					// Create a span to preserve any original formatting that was there before the highlight
					const preservedSpan = document.createElement('span');
					preservedSpan.textContent = highlight.textContent;
					
					// Check if the highlight has any preserved styling from before it was highlighted
					const originalColor = highlight.getAttribute('data-original-color');
					const originalWeight = highlight.getAttribute('data-original-weight');
					const originalShadow = highlight.getAttribute('data-original-shadow');
					const hasYellowBg = highlight.getAttribute('data-original-yellow-bg');
					const hasGreenBg = highlight.getAttribute('data-original-green-bg');
					const hasGematria = highlight.getAttribute('data-original-gematria');
					const gematriaStyle = highlight.getAttribute('data-gematria-style');
					
					if (hasGematria && gematriaStyle) {
						// Restore full gematria styling
						preservedSpan.setAttribute('style', gematriaStyle);
					} else {
						// Apply individual preserved styles
						if (originalColor) {
							preservedSpan.style.setProperty('color', originalColor, 'important');
						}
						if (originalWeight) {
							preservedSpan.style.setProperty('font-weight', originalWeight, 'important');
						}
						if (originalShadow) {
							preservedSpan.style.setProperty('text-shadow', originalShadow, 'important');
						}
						if (hasYellowBg) {
							preservedSpan.style.setProperty('background-color', 'yellow', 'important');
						}
						if (hasGreenBg) {
							preservedSpan.style.setProperty('background-color', '#00FF00', 'important');
							preservedSpan.style.setProperty('font-weight', 'bold', 'important');
							preservedSpan.style.setProperty('padding', '1px 2px', 'important');
							preservedSpan.style.setProperty('border-radius', '2px', 'important');
						}
					}
					
					parent.replaceChild(preservedSpan, highlight);
					parent.normalize();
				});
				
				// Store original HTML to preserve gematria and other formatting
				const originalHtml = textArea.innerHTML;
				const fullText = textArea.textContent;
				let letters = [];
				let letterPositions = [];
				
				// Build array of letters and their positions in the full text
				for (let i = 0; i < fullText.length; i++) {
					if (isLetter(fullText[i])) {
						letters.push(fullText[i]);
						letterPositions.push(i);
					}
				}
				
				let results = '';
				let highlightPositions = [];
				
				// Collect ELS letters and their positions
				for (let i = start - 1; i < letters.length; i += seq) {
					results += letters[i];
					highlightPositions.push(letterPositions[i]);
				}
				
				// Function to apply ELS highlights while preserving existing formatting
				function applyElsHighlights(htmlContent, positions) {
					// Create a character map to preserve existing formatting
					let characterMap = [];
					let tempDiv = document.createElement('div');
					tempDiv.innerHTML = htmlContent;
					
					// Walk through the DOM and build character map
					function walkNode(node, charIndex) {
						if (node.nodeType === 3) { // Text node
							let text = node.textContent;
							for (let i = 0; i < text.length; i++) {
								if (charIndex[0] < fullText.length) {
									// Find formatting from parent elements
									let currentNode = node.parentNode;
									let hasGematriaFormat = false;
									let gematriaStyle = '';
									let fontColor = null;
									let fontWeight = null;
									let textShadow = null;
									let hasYellowBg = false;
									let hasGreenBg = false;
									
									// Check for existing gematria formatting (green color + bold) and other formatting
									while (currentNode && currentNode !== tempDiv) {
										if (currentNode.style) {
											if (currentNode.style.color && 
												(currentNode.style.color.includes('#00cc00') || 
												 currentNode.style.color.includes('#00CC00') ||
												 currentNode.style.color.includes('rgb(0, 204, 0)')) &&
												currentNode.style.fontWeight && currentNode.style.fontWeight.includes('bold')) {
												hasGematriaFormat = true;
												gematriaStyle = currentNode.getAttribute('style');
											}
											
											// Preserve general font color
											if (currentNode.style.color && !fontColor) {
												fontColor = currentNode.style.color;
											}
											
											// Preserve font weight
											if (currentNode.style.fontWeight && !fontWeight) {
												fontWeight = currentNode.style.fontWeight;
											}
											
											// Preserve text shadow
											if (currentNode.style.textShadow !== undefined && textShadow === null) {
												textShadow = currentNode.style.textShadow;
											}
											
											// Check for yellow background
											if (currentNode.style.backgroundColor === 'yellow' || 
												currentNode.style.backgroundColor === '#FFFF00' ||
												currentNode.style.backgroundColor === 'rgb(255, 255, 0)') {
												hasYellowBg = true;
											}
											
											// Check for green background (gematria-match highlights)
											if (currentNode.style.backgroundColor === '#00FF00' || 
												currentNode.style.backgroundColor === '#00ff00' ||
												currentNode.style.backgroundColor === 'rgb(0, 255, 0)' ||
												(currentNode.classList && currentNode.classList.contains('gematria-match'))) {
												hasGreenBg = true;
											}
										}
										currentNode = currentNode.parentNode;
									}
									
									characterMap[charIndex[0]] = {
										char: text[i],
										hasGematriaFormat: hasGematriaFormat,
										gematriaStyle: gematriaStyle,
										fontColor: fontColor,
										fontWeight: fontWeight,
										textShadow: textShadow,
										hasYellowBg: hasYellowBg,
										hasGreenBg: hasGreenBg
									};
									charIndex[0]++;
								}
							}
						} else if (node.nodeType === 1) { // Element node
							for (let child of node.childNodes) {
								walkNode(child, charIndex);
							}
						}
					}
					
					walkNode(tempDiv, [0]);
					
					// Build the final HTML with ELS highlights and preserved gematria formatting
					let result = '';
					let i = 0;
					
					while (i < characterMap.length) {
						let char = characterMap[i];
						if (!char) {
							i++;
							continue;
						}
						
						// Check if this position needs ELS highlighting
						let needsElsHighlight = positions.includes(i);
						
						if (needsElsHighlight) {
							// Apply ELS highlight while preserving original font color
							let elsSpanStyle = 'background-color: yellow; font-weight: bold;';
							
							// Build data attributes to preserve original formatting
							let dataAttributes = '';
							
							// Preserve font color if it exists, otherwise use black
							if (char.fontColor) {
								elsSpanStyle += ` color: ${char.fontColor};`;
								dataAttributes += ` data-original-color="${char.fontColor}"`;
							} else {
								elsSpanStyle += ' color: black;';
							}
							
							// Preserve other formatting attributes
							if (char.fontWeight) {
								dataAttributes += ` data-original-weight="${char.fontWeight}"`;
							}
							if (char.textShadow !== null) {
								dataAttributes += ` data-original-shadow="${char.textShadow}"`;
							}
							if (char.hasYellowBg) {
								dataAttributes += ` data-original-yellow-bg="true"`;
							}
							if (char.hasGreenBg) {
								dataAttributes += ` data-original-green-bg="true"`;
							}
							if (char.hasGematriaFormat) {
								dataAttributes += ` data-original-gematria="true"`;
								dataAttributes += ` data-gematria-style="${char.gematriaStyle}"`;
							}
							
							result += `<span class="els-highlight" style="${elsSpanStyle}"${dataAttributes}>${char.char}</span>`;
							i++;
						} else if (char.hasGematriaFormat) {
							// Preserve gematria formatting - group consecutive gematria characters
							let gematriaText = '';
							let currentGematriaStyle = char.gematriaStyle;
							
							// Collect all consecutive characters with the same gematria style
							while (i < characterMap.length && 
								   characterMap[i] && 
								   characterMap[i].hasGematriaFormat && 
								   characterMap[i].gematriaStyle === currentGematriaStyle &&
								   !positions.includes(i)) {
								gematriaText += characterMap[i].char;
								i++;
							}
							
							result += `<span style="${currentGematriaStyle}">${gematriaText}</span>`;
						} else {
							// Regular character - preserve any existing formatting and group consecutive similar characters
							let hasAnyFormatting = char.fontColor || char.fontWeight || char.textShadow || char.hasYellowBg || char.hasGreenBg;
							
							if (hasAnyFormatting) {
								// Build style string for preserved formatting
								let preservedStyle = '';
								
								if (char.fontColor) {
									preservedStyle += `color: ${char.fontColor}; `;
								}
								if (char.fontWeight) {
									preservedStyle += `font-weight: ${char.fontWeight}; `;
								}
								if (char.textShadow !== null && char.textShadow !== undefined) {
									preservedStyle += `text-shadow: ${char.textShadow}; `;
								}
								if (char.hasYellowBg) {
									preservedStyle += `background-color: yellow; `;
								}
								if (char.hasGreenBg) {
									preservedStyle += `background-color: #00FF00; font-weight: bold; padding: 1px 2px; border-radius: 2px; `;
								}
								
								preservedStyle = preservedStyle.trim();
								
								// Group consecutive characters with identical formatting
								let groupedText = char.char;
								let j = i + 1;
								
								while (j < characterMap.length && characterMap[j] && !positions.includes(j)) {
									let nextChar = characterMap[j];
									
									// Check if next character has identical formatting
									let nextHasFormatting = nextChar.fontColor || nextChar.fontWeight || nextChar.textShadow || nextChar.hasYellowBg || nextChar.hasGreenBg;
									
									if (nextHasFormatting && !nextChar.hasGematriaFormat) {
										let nextPreservedStyle = '';
										
										if (nextChar.fontColor) {
											nextPreservedStyle += `color: ${nextChar.fontColor}; `;
										}
										if (nextChar.fontWeight) {
											nextPreservedStyle += `font-weight: ${nextChar.fontWeight}; `;
										}
										if (nextChar.textShadow !== null && nextChar.textShadow !== undefined) {
											nextPreservedStyle += `text-shadow: ${nextChar.textShadow}; `;
										}
										if (nextChar.hasYellowBg) {
											nextPreservedStyle += `background-color: yellow; `;
										}
										if (nextChar.hasGreenBg) {
											nextPreservedStyle += `background-color: #00FF00; font-weight: bold; padding: 1px 2px; border-radius: 2px; `;
										}
										
										nextPreservedStyle = nextPreservedStyle.trim();
										
										// If styles match exactly, group them
										if (nextPreservedStyle === preservedStyle) {
											groupedText += nextChar.char;
											j++;
										} else {
											break;
										}
									} else {
										break;
									}
								}
								
								result += `<span style="${preservedStyle}">${groupedText}</span>`;
								i = j;
							} else {
								// Truly plain character with no formatting - group consecutive plain characters
								let plainText = char.char;
								let j = i + 1;
								
								while (j < characterMap.length && characterMap[j] && !positions.includes(j)) {
									let nextChar = characterMap[j];
									let nextHasFormatting = nextChar.fontColor || nextChar.fontWeight || nextChar.textShadow || nextChar.hasYellowBg || nextChar.hasGreenBg || nextChar.hasGematriaFormat;
									
									if (!nextHasFormatting) {
										plainText += nextChar.char;
										j++;
									} else {
										break;
									}
								}
								
								result += plainText;
								i = j;
							}
						}
					}
					
					return result;
				}
				
				// Apply ELS highlights while preserving gematria formatting
				if (highlightPositions.length > 0) {
					const highlightedContent = applyElsHighlights(originalHtml, highlightPositions);
					textArea.innerHTML = highlightedContent;
					
					// Apply red color to asterisks and flower punctuation marks
					let finalContent = textArea.innerHTML;
					finalContent = finalContent.replace(/\*/g, '<span style="color: #FF0000;">*</span>');
					finalContent = finalContent.replace(/⁕/g, '<span style="color: #FF0000;">⁕</span>');
					textArea.innerHTML = finalContent;
				}
				
				// Get text direction from textArea
				const textAreaDirection = textArea.dir || 'rtl';
				const textAlign = textAreaDirection === 'rtl' ? 'right' : 'left';

				// Display results in the modal with copy button
				document.getElementById('elsResults').innerHTML = `
					<div style="padding: 15px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9; word-wrap: break-word; overflow-wrap: break-word;">
						<p style="font-size: 16px; font-weight: bold; color: #000; direction: ${textAreaDirection}; text-align: ${textAlign}; padding: 10px; border-radius: 3px; word-wrap: break-word; overflow-wrap: break-word; white-space: pre-wrap;">${results}</p>
						<p style="font-size: 12px; color: #666; margin-bottom: 10px; direction: ${textAreaDirection}; text-align: ${textAlign};">Start Position: ${start}, Sequence: ${seq}, Letters Found: ${results.length}</p>
						<div style="text-align: center; margin-top: 15px; display: flex; gap: 10px; justify-content: center; align-items: center;">
							${detectedLanguage.includes('Hebrew') ? '<button id="elsConvertFinalsBtn" style="background-color: #3333aa; color: #fff; border: none; padding: 8px 16px; cursor: pointer; font-size: 12px; font-weight: bold; border-radius: 5px; box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.35); transition: background-color 0.0s;">🔄 Convert Finals</button>' : ''}
							<button id="elsCopyBtn" style="background-color: #3333aa; color: #fff; border: none; padding: 8px 16px; cursor: pointer; font-size: 12px; font-weight: bold; border-radius: 5px; box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.35); transition: background-color 0.0s;">📋 Copy Result</button>
						</div>
					</div>
				`;
				
				// Add event listener for the copy button
				const elsCopyBtn = document.getElementById('elsCopyBtn');
				if (elsCopyBtn) {
					elsCopyBtn.addEventListener('click', async () => {
						try {
							await navigator.clipboard.writeText(results);
							const originalText = elsCopyBtn.textContent;
							elsCopyBtn.textContent = '✓ Copied!';
							elsCopyBtn.style.backgroundColor = '#28a745';
							setTimeout(() => {
								elsCopyBtn.textContent = originalText;
								elsCopyBtn.style.backgroundColor = '#3333aa';
							}, 2000);
						} catch (err) {
							console.error('Failed to copy:', err);
							elsCopyBtn.textContent = '✗ Failed';
							elsCopyBtn.style.backgroundColor = '#dc3545';
							setTimeout(() => {
								elsCopyBtn.textContent = '📋 Copy Result';
								elsCopyBtn.style.backgroundColor = '#3333aa';
							}, 2000);
						}
					});

					elsCopyBtn.addEventListener('mouseenter', () => {
						if (elsCopyBtn.textContent === '📋 Copy Result') {
							elsCopyBtn.style.backgroundColor = '#3333ee';
						}
					});

					elsCopyBtn.addEventListener('mouseleave', () => {
						if (elsCopyBtn.textContent === '📋 Copy Result') {
							elsCopyBtn.style.backgroundColor = '#3333aa';
						}
					});
				}

				// Add event listener for the Convert Finals button (only if Hebrew)
				const elsConvertFinalsBtn = document.getElementById('elsConvertFinalsBtn');
				if (elsConvertFinalsBtn) {
					elsConvertFinalsBtn.addEventListener('click', () => {
						// Convert finals to regular forms, except for the last letter
						let convertedResult = '';
						
						for (let i = 0; i < results.length; i++) {
							const char = results[i];
							const isLastChar = (i === results.length - 1);
							
							if (isLastChar) {
								// For the last letter: keep final if already final, or convert to final if it's כ מ נ פ צ
								switch(char) {
									case '\u05DB': convertedResult += '\u05DA'; break; // כ → ך
									case '\u05DE': convertedResult += '\u05DD'; break; // מ → ם
									case '\u05E0': convertedResult += '\u05DF'; break; // נ → ן
									case '\u05E4': convertedResult += '\u05E3'; break; // פ → ף
									case '\u05E6': convertedResult += '\u05E5'; break; // צ → ץ
									default: convertedResult += char; break; // Keep as is (including existing finals)
								}
							} else {
								// For all other letters: convert finals to regular forms
								switch(char) {
									case '\u05DA': convertedResult += '\u05DB'; break; // ך → כ
									case '\u05DD': convertedResult += '\u05DE'; break; // ם → מ
									case '\u05DF': convertedResult += '\u05E0'; break; // ן → נ
									case '\u05E3': convertedResult += '\u05E4'; break; // ף → פ
									case '\u05E5': convertedResult += '\u05E6'; break; // ץ → צ
									default: convertedResult += char; break; // Keep as is
								}
							}
						}
						
						// Update the results display
						const resultParagraph = document.querySelector('#elsResults p');
						if (resultParagraph) {
							resultParagraph.textContent = convertedResult;
						}
						
						// Update the results variable for copying
						results = convertedResult;
						
						// Visual feedback
						const originalText = elsConvertFinalsBtn.textContent;
						elsConvertFinalsBtn.textContent = '✓ Converted!';
						elsConvertFinalsBtn.style.backgroundColor = '#28a745';
						setTimeout(() => {
							elsConvertFinalsBtn.textContent = originalText;
							elsConvertFinalsBtn.style.backgroundColor = '#3333aa';
						}, 2000);
					});

					elsConvertFinalsBtn.addEventListener('mouseenter', () => {
						if (elsConvertFinalsBtn.textContent === '🔄 Convert Finals') {
							elsConvertFinalsBtn.style.backgroundColor = '#3333ee';
						}
					});

					elsConvertFinalsBtn.addEventListener('mouseleave', () => {
						if (elsConvertFinalsBtn.textContent === '🔄 Convert Finals') {
							elsConvertFinalsBtn.style.backgroundColor = '#3333aa';
						}
					});
				}
			});
		}
	</script>

	<script>
		function toggleSwap(){
			console.log('toggleSwap function called'); // Debug log
			
			const textArea = document.getElementById('textArea');
			if (!textArea) {
				console.error('textArea element not found');
				return;
			}
			
			if (availableColors.length === 0) {
				availableColors = [...colors];
			}
			const chosenColor = availableColors.splice(Math.floor(Math.random() * availableColors.length), 1)[0];
			const selection = window.getSelection();
			if (selection.rangeCount === 0) {
				return; // No selection, do nothing
			}
			const selectedText = selection.toString();
			if (!selectedText) {
				return; // Empty selection, do nothing
			}
			
			console.log('Selected text:', selectedText, 'Color:', chosenColor); // Debug log
			
			// Function to encrypt only Hebrew letters while preserving digits and tabs
			function encryptSelectedText(text) {
				const encryptionSelect = document.getElementById('encryptionSelect');
				let selectedOption = encryptionSelect ? encryptionSelect.value : 'Encryption';
				if (selectedOption === 'Encryption') selectedOption = 'AT-BaSh'; // Default
				
				let encryptedText = '';
				
				// Process each character individually
				for (let i = 0; i < text.length; i++) {
					const char = text[i];
					
					// Check if character is a digit or tab - preserve these
					if (/[\d\t]/.test(char)) {
						encryptedText += char;
						continue;
					}
					
					let letter = char;
					
					// Apply encryption based on selected method (only to Hebrew letters)
					switch (selectedOption) {
						case 'AT-BaSh':
						case 'Encryption':
							switch(char){
								/*aleph*/	case "\u05D0":letter = "\u05EA";break;	// tav
								/*bet*/		case "\u05D1":letter = "\u05E9";break;	// shin
								/*gimel*/	case "\u05D2":letter = "\u05E8";break;	// resh
								/*dalet*/	case "\u05D3":letter = "\u05E7";break;	// kuf
								/*hey*/		case "\u05D4":letter = "\u05E6";break;	// tzadi
								/*vav*/		case "\u05D5":letter = "\u05E4";break;	// pey
								/*zayin*/	case "\u05D6":letter = "\u05E2";break;	// ayin
								/*chet*/	case "\u05D7":letter = "\u05E1";break;	// samech
								/*tet*/		case "\u05D8":letter = "\u05E0";break;	// nun
								/*yod*/		case "\u05D9":letter = "\u05DE";break;	// mem
								/*kaf*/		case "\u05DB":letter = "\u05DC";break;	// lamed
								/*lamed*/	case "\u05DC":letter = "\u05DB";break;	// kaf
								/*mem*/		case "\u05DE":letter = "\u05D9";break;	// yod
								/*nun*/		case "\u05E0":letter = "\u05D8";break;	// tet
								/*samech*/	case "\u05E1":letter = "\u05D7";break;	// chet
								/*ayin*/	case "\u05E2":letter = "\u05D6";break;	// zayin
								/*pey*/		case "\u05E4":letter = "\u05D5";break;	// vav
								/*tzadi*/	case "\u05E6":letter = "\u05D4";break;	// hey
								/*kuf*/		case "\u05E7":letter = "\u05D3";break;	// dalet
								/*resh*/	case "\u05E8":letter = "\u05D2";break;	// gimel
								/*shin*/	case "\u05E9":letter = "\u05D1";break;	// bet
								/*tav*/		case "\u05EA":letter = "\u05D0";break;	// aleph
								/*kaf F*/	case "\u05DA":letter = "\u05DC";break;	// lamed
								/*mem F*/	case "\u05DD":letter = "\u05D9";break;	// yod
								/*nun F*/	case "\u05DF":letter = "\u05D8";break;	// tet
								/*pey F*/	case "\u05E3":letter = "\u05D5";break;	// vav
								/*tzadi F*/	case "\u05E5":letter = "\u05D4";break;	// hey
								default:letter = char; break; // Keep original character if not Hebrew
							}
							break;
							
						case 'AYiK-BeCheR':
							switch(char){
								/*aleph*/	case "\u05D0":letter = "\u05D9";break;	// yod
								/*bet*/		case "\u05D1":letter = "\u05DB";break;	// kaf
								/*gimel*/	case "\u05D2":letter = "\u05DC";break;	// lamed
								/*dalet*/	case "\u05D3":letter = "\u05DE";break;	// mem
								/*hey*/		case "\u05D4":letter = "\u05E0";break;	// nun
								/*vav*/		case "\u05D5":letter = "\u05E1";break;	// samech
								/*zayin*/	case "\u05D6":letter = "\u05E2";break;	// ayin
								/*chet*/	case "\u05D7":letter = "\u05E4";break;	// pey
								/*tet*/		case "\u05D8":letter = "\u05E6";break;	// tzadi
								/*yod*/		case "\u05D9":letter = "\u05E7";break;	// kuf
								/*kaf*/		case "\u05DB":letter = "\u05E8";break;	// resh
								/*lamed*/	case "\u05DC":letter = "\u05E9";break;	// shin
								/*mem*/		case "\u05DE":letter = "\u05EA";break;	// tav
								/*nun*/		case "\u05E0":letter = "\u05DB";break;	// kaf
								/*samech*/	case "\u05E1":letter = "\u05DE";break;	// mem
								/*ayin*/	case "\u05E2":letter = "\u05E0";break;	// nun
								/*pey*/		case "\u05E4":letter = "\u05E4";break;	// pey
								/*tzadi*/	case "\u05E6":letter = "\u05E6";break;	// tzadi
								/*kuf*/		case "\u05E7":letter = "\u05D0";break;	// aleph
								/*resh*/	case "\u05E8":letter = "\u05D1";break;	// bet
								/*shin*/	case "\u05E9":letter = "\u05D2";break;	// gimel
								/*tav*/		case "\u05EA":letter = "\u05D3";break;	// dalet
								/*kaf F*/	case "\u05DA":letter = "\u05D4";break;	// hey
								/*mem F*/	case "\u05DD":letter = "\u05D5";break;	// vav
								/*nun F*/	case "\u05DF":letter = "\u05D6";break;	// zayin
								/*pey F*/	case "\u05E3":letter = "\u05D7";break;	// chet
								/*tzadi F*/	case "\u05E5":letter = "\u05D8";break;	// tet
								default:letter = char; break; // Keep original character if not Hebrew
							}
							break;
							
						case 'AL-BaM':
							switch(char){
								/*aleph*/	case "\u05D0":letter = "\u05DC";break;	// lamed
								/*bet*/		case "\u05D1":letter = "\u05DE";break;	// mem
								/*gimel*/	case "\u05D2":letter = "\u05E0";break;	// nun
								/*dalet*/	case "\u05D3":letter = "\u05E1";break;	// samech
								/*hey*/		case "\u05D4":letter = "\u05E2";break;	// ayin
								/*vav*/		case "\u05D5":letter = "\u05E4";break;	// pey
								/*zayin*/	case "\u05D6":letter = "\u05E6";break;	// tzadi
								/*chet*/	case "\u05D7":letter = "\u05E7";break;	// kuf
								/*tet*/		case "\u05D8":letter = "\u05E8";break;	// resh
								/*yod*/		case "\u05D9":letter = "\u05E9";break;	// shin
								/*kaf*/		case "\u05DB":letter = "\u05EA";break;	// tav
								/*lamed*/	case "\u05DC":letter = "\u05D0";break;	// aleph
								/*mem*/		case "\u05DE":letter = "\u05D1";break;	// bet
								/*nun*/		case "\u05E0":letter = "\u05D2";break;	// gimel
								/*samech*/	case "\u05E1":letter = "\u05D3";break;	// dalet
								/*ayin*/	case "\u05E2":letter = "\u05D4";break;	// hey
								/*pey*/		case "\u05E4":letter = "\u05D5";break;	// vav
								/*tzadi*/	case "\u05E6":letter = "\u05D6";break;	// zayin
								/*kuf*/		case "\u05E7":letter = "\u05D7";break;	// chet
								/*resh*/	case "\u05E8":letter = "\u05D8";break;	// tet
								/*shin*/	case "\u05E9":letter = "\u05D9";break;	// yod
								/*tav*/		case "\u05EA":letter = "\u05DB";break;	// kaf
								/*kaf F*/	case "\u05DA":letter = "\u05EA";break;	// tav
								/*mem F*/	case "\u05DD":letter = "\u05D1";break;	// bet
								/*nun F*/	case "\u05DF":letter = "\u05D2";break;	// gimel
								/*pey F*/	case "\u05E3":letter = "\u05D5";break;	// vav
								/*tzadi F*/	case "\u05E5":letter = "\u05D6";break;	// zayin
								default:letter = char; break; // Keep original character if not Hebrew
							}
							break;
							
						case 'ACh-BI':
							switch(char){
								/*aleph*/	case "\u05D0":letter = "\u05DB";break;	// kaf
								/*bet*/		case "\u05D1":letter = "\u05D9";break;	// yod
								/*gimel*/	case "\u05D2":letter = "\u05D8";break;	// tet
								/*dalet*/	case "\u05D3":letter = "\u05D7";break;	// chet
								/*hey*/		case "\u05D4":letter = "\u05D6";break;	// zayin
								/*vav*/		case "\u05D5":letter = "\u05D5";break;	// vav
								/*zayin*/	case "\u05D6":letter = "\u05D4";break;	// hey
								/*chet*/	case "\u05D7":letter = "\u05D3";break;	// dalet
								/*tet*/		case "\u05D8":letter = "\u05D2";break;	// gimel
								/*yod*/		case "\u05D9":letter = "\u05D1";break;	// bet
								/*kaf*/		case "\u05DB":letter = "\u05D0";break;	// aleph
								/*lamed*/	case "\u05DC":letter = "\u05EA";break;	// tav
								/*mem*/		case "\u05DE":letter = "\u05E9";break;	// shin
								/*nun*/		case "\u05E0":letter = "\u05E8";break;	// resh
								/*samech*/	case "\u05E1":letter = "\u05E7";break;	// kuf
								/*ayin*/	case "\u05E2":letter = "\u05E6";break;	// tzadi
								/*pey*/		case "\u05E4":letter = "\u05E4";break;	// pey
								/*tzadi*/	case "\u05E6":letter = "\u05E2";break;	// ayin
								/*kuf*/		case "\u05E7":letter = "\u05E1";break;	// samech
								/*resh*/	case "\u05E8":letter = "\u05E0";break;	// nun
								/*shin*/	case "\u05E9":letter = "\u05DE";break;	// mem
								/*tav*/		case "\u05EA":letter = "\u05DC";break;	// lamed
								/*kaf F*/	case "\u05DA":letter = "\u05D0";break;	// aleph
								/*mem F*/	case "\u05DD":letter = "\u05E9";break;	// shin
								/*nun F*/	case "\u05DF":letter = "\u05E8";break;	// resh
								/*pey F*/	case "\u05E3":letter = "\u05E4";break;	// pey
								/*tzadi F*/	case "\u05E5":letter = "\u05E2";break;	// ayin
								default:letter = char; break; // Keep original character if not Hebrew
							}
							break;
							
						case 'AChaS-BeTA':
							switch(char){
								/*aleph*/	case "\u05D0":letter = "\u05D7";break;	// chet
								/*bet*/		case "\u05D1":letter = "\u05D8";break;	// tet
								/*gimel*/	case "\u05D2":letter = "\u05D9";break;	// yod
								/*dalet*/	case "\u05D3":letter = "\u05DB";break;	// kaf
								/*hey*/		case "\u05D4":letter = "\u05DC";break;	// lamed
								/*vav*/		case "\u05D5":letter = "\u05DE";break;	// mem
								/*zayin*/	case "\u05D6":letter = "\u05E0";break;	// nun
								/*chet*/	case "\u05D7":letter = "\u05E1";break;	// samech
								/*tet*/		case "\u05D8":letter = "\u05E2";break;	// ayin
								/*yod*/		case "\u05D9":letter = "\u05E4";break;	// pey
								/*kaf*/		case "\u05DB":letter = "\u05E6";break;	// tzadi
								/*lamed*/	case "\u05DC":letter = "\u05E7";break;	// kuf
								/*mem*/		case "\u05DE":letter = "\u05E8";break;	// resh
								/*nun*/		case "\u05E0":letter = "\u05E9";break;	// shin
								/*samech*/	case "\u05E1":letter = "\u05D0";break;	// aleph
								/*ayin*/	case "\u05E2":letter = "\u05D1";break;	// bet
								/*pey*/		case "\u05E4":letter = "\u05D2";break;	// gimel
								/*tzadi*/	case "\u05E6":letter = "\u05D3";break;	// dalet
								/*kuf*/		case "\u05E7":letter = "\u05D4";break;	// hey
								/*resh*/	case "\u05E8":letter = "\u05D5";break;	// vav
								/*shin*/	case "\u05E9":letter = "\u05D6";break;	// zayin
								/*tav*/		case "\u05EA":letter = "\u05EA";break;	// tav
								/*kaf F*/	case "\u05DA":letter = "\u05E6";break;	// tzadi
								/*mem F*/	case "\u05DD":letter = "\u05E8";break;	// resh
								/*nun F*/	case "\u05DF":letter = "\u05E9";break;	// shin
								/*pey F*/	case "\u05E3":letter = "\u05D2";break;	// gimel
								/*tzadi F*/	case "\u05E5":letter = "\u05D3";break;	// dalet
								default:letter = char; break; // Keep original character if not Hebrew
							}
							break;
							
						case 'AT-BaCh':
							switch(char){
								/*aleph*/	case "\u05D0":letter = "\u05D8";break;	// tet
								/*bet*/		case "\u05D1":letter = "\u05D7";break;	// chet
								/*gimel*/	case "\u05D2":letter = "\u05D6";break;	// zayin
								/*dalet*/	case "\u05D3":letter = "\u05D5";break;	// vav
								/*hey*/		case "\u05D4":letter = "\u05D4";break;	// hey
								/*vav*/		case "\u05D5":letter = "\u05D3";break;	// dalet
								/*zayin*/	case "\u05D6":letter = "\u05D2";break;	// gimel
								/*chet*/	case "\u05D7":letter = "\u05D1";break;	// bet
								/*tet*/		case "\u05D8":letter = "\u05D0";break;	// aleph
								/*yod*/		case "\u05D9":letter = "\u05E6";break;	// tzadi
								/*kaf*/		case "\u05DB":letter = "\u05E4";break;	// pey
								/*lamed*/	case "\u05DC":letter = "\u05E2";break;	// ayin
								/*mem*/		case "\u05DE":letter = "\u05E1";break;	// samech
								/*nun*/		case "\u05E0":letter = "\u05E0";break;	// nun
								/*samech*/	case "\u05E1":letter = "\u05DE";break;	// mem
								/*ayin*/	case "\u05E2":letter = "\u05DC";break;	// lamed
								/*pey*/		case "\u05E4":letter = "\u05DB";break;	// kaf
								/*tzadi*/	case "\u05E6":letter = "\u05D9";break;	// yod
								/*kuf*/		case "\u05E7":letter = "\u05EA";break;	// tav
								/*resh*/	case "\u05E8":letter = "\u05E9";break;	// shin
								/*shin*/	case "\u05E9":letter = "\u05E8";break;	// resh
								/*tav*/		case "\u05EA":letter = "\u05E7";break;	// kuf
								/*kaf F*/	case "\u05DA":letter = "\u05E4";break;	// pey
								/*mem F*/	case "\u05DD":letter = "\u05E1";break;	// samech
								/*nun F*/	case "\u05DF":letter = "\u05E0";break;	// nun
								/*pey F*/	case "\u05E3":letter = "\u05DB";break;	// kaf
								/*tzadi F*/	case "\u05E5":letter = "\u05D9";break;	// yod
								default:letter = char; break; // Keep original character if not Hebrew
							}
							break;
							
						case 'AT-BaCh999':
							switch(char){
								/*aleph*/	case "\u05D0":letter = "\u05D8";break;	// tet
								/*bet*/		case "\u05D1":letter = "\u05D7";break;	// chet
								/*gimel*/	case "\u05D2":letter = "\u05D6";break;	// zayin
								/*dalet*/	case "\u05D3":letter = "\u05D5";break;	// vav
								/*hey*/		case "\u05D4":letter = "\u05D4";break;	// hey
								/*vav*/		case "\u05D5":letter = "\u05D3";break;	// dalet
								/*zayin*/	case "\u05D6":letter = "\u05D2";break;	// gimel
								/*chet*/	case "\u05D7":letter = "\u05D1";break;	// bet
								/*tet*/		case "\u05D8":letter = "\u05D0";break;	// aleph
								/*yod*/		case "\u05D9":letter = "\u05E6";break;	// tzadi
								/*kaf*/		case "\u05DB":letter = "\u05E4";break;	// pey
								/*lamed*/	case "\u05DC":letter = "\u05E2";break;	// ayin
								/*mem*/		case "\u05DE":letter = "\u05E1";break;	// samech
								/*nun*/		case "\u05E0":letter = "\u05E0";break;	// nun
								/*samech*/	case "\u05E1":letter = "\u05DE";break;	// mem
								/*ayin*/	case "\u05E2":letter = "\u05DC";break;	// lamed
								/*pey*/		case "\u05E4":letter = "\u05DB";break;	// kaf
								/*tzadi*/	case "\u05E6":letter = "\u05D9";break;	// yod
								/*kuf*/		case "\u05E7":letter = "\u05EA";break;	// tav
								/*resh*/	case "\u05E8":letter = "\u05E9";break;	// shin
								/*shin*/	case "\u05E9":letter = "\u05E8";break;	// resh
								/*tav*/		case "\u05EA":letter = "\u05E7";break;	// kuf
								/*kaf F*/	case "\u05DA":letter = "\u05E5";break;	// tzadi F
								/*mem F*/	case "\u05DD":letter = "\u05E3";break;	// pey F
								/*nun F*/	case "\u05DF":letter = "\u05DF";break;	// nun F
								/*pey F*/	case "\u05E3":letter = "\u05DD";break;	// mem F
								/*tzadi F*/	case "\u05E5":letter = "\u05DA";break;	// kaf F
								default:letter = char; break; // Keep original character if not Hebrew
							}
							break;
							
						case 'AiY-BaK':
							switch(char){
								/*aleph*/	case "\u05D0":letter = "\u05D9";break;	// yod
								/*bet*/		case "\u05D1":letter = "\u05DB";break;	// kaf
								/*gimel*/	case "\u05D2":letter = "\u05DC";break;	// lamed
								/*dalet*/	case "\u05D3":letter = "\u05DE";break;	// mem
								/*hey*/		case "\u05D4":letter = "\u05E0";break;	// nun
								/*vav*/		case "\u05D5":letter = "\u05E1";break;	// samech
								/*zayin*/	case "\u05D6":letter = "\u05E2";break;	// ayin
								/*chet*/	case "\u05D7":letter = "\u05E4";break;	// pey
								/*tet*/		case "\u05D8":letter = "\u05E6";break;	// tzadi
								/*yod*/		case "\u05D9":letter = "\u05D0";break; 	// aleph
								/*kaf*/		case "\u05DB":letter = "\u05D1";break;	// bet
								/*lamed*/	case "\u05DC":letter = "\u05D2";break;	// gimel
								/*mem*/		case "\u05DE":letter = "\u05D3";break;	// dalet
								/*nun*/		case "\u05E0":letter = "\u05D4";break;	// hey
								/*samech*/	case "\u05E1":letter = "\u05D5";break;	// vav
								/*ayin*/	case "\u05E2":letter = "\u05D6";break;	// zayin
								/*pey*/		case "\u05E4":letter = "\u05D7";break;	// chet
								/*tzadi*/	case "\u05E6":letter = "\u05D8";break;	// tet
								/*kuf*/		case "\u05E7":letter = "\u05E8";break;	// resh
								/*resh*/	case "\u05E8":letter = "\u05E7";break;	// kuf
								/*shin*/	case "\u05E9":letter = "\u05EA";break;	// tav
								/*tav*/		case "\u05EA":letter = "\u05E9";break;	// shin
								/*kaf F*/	case "\u05DA":letter = "\u05D1";break;	// bet
								/*mem F*/	case "\u05DD":letter = "\u05D3";break;	// dalet
								/*nun F*/	case "\u05DF":letter = "\u05D4";break;	// hey
								/*pey F*/	case "\u05E3":letter = "\u05D7";break;	// chet
								/*tzadi F*/	case "\u05E5":letter = "\u05D8";break;	// tet
								default:letter = char; break; // Keep original character if not Hebrew
							}
							break;
							
						case 'ATz-BaPh':
							switch(char){
								/*aleph*/	case "\u05D0":letter = "\u05E6";break;	// tzadi
								/*bet*/		case "\u05D1":letter = "\u05E4";break;	// pey
								/*gimel*/	case "\u05D2":letter = "\u05E0";break;	// nun
								/*dalet*/	case "\u05D3":letter = "\u05DE";break;	// mem
								/*hey*/		case "\u05D4":letter = "\u05DB";break;	// kaf
								/*vav*/		case "\u05D5":letter = "\u05EA";break;	// tav
								/*zayin*/	case "\u05D6":letter = "\u05E9";break;	// shin
								/*chet*/	case "\u05D7":letter = "\u05E8";break;	// resh
								/*tet*/		case "\u05D8":letter = "\u05E7";break;	// kuf
								/*yod*/		case "\u05D9":letter = "\u05E6";break;	// tzadi
								/*kaf*/		case "\u05DB":letter = "\u05E4";break;	// pey
								/*lamed*/	case "\u05DC":letter = "\u05E2";break;	// ayin
								/*mem*/		case "\u05DE":letter = "\u05E1";break;	// samech
								/*nun*/		case "\u05E0":letter = "\u05E0";break;	// nun
								/*samech*/	case "\u05E1":letter = "\u05DE";break;	// mem
								/*ayin*/	case "\u05E2":letter = "\u05DC";break;	// lamed
								/*pey*/		case "\u05E4":letter = "\u05DB";break;	// kaf
								/*tzadi*/	case "\u05E6":letter = "\u05D9";break;	// yod
								/*kuf*/		case "\u05E7":letter = "\u05D8";break;	// tet
								/*resh*/	case "\u05E8":letter = "\u05D7";break;	// chet
								/*shin*/	case "\u05E9":letter = "\u05D6";break;	// zayin
								/*tav*/		case "\u05EA":letter = "\u05D5";break;	// vav
								/*kaf F*/	case "\u05DA":letter = "\u05D4";break;	// hey
								/*mem F*/	case "\u05DD":letter = "\u05D3";break;	// dalet
								/*nun F*/	case "\u05DF":letter = "\u05D2";break;	// gimel
								/*pey F*/	case "\u05E3":letter = "\u05D1";break;	// bet
								/*tzadi F*/	case "\u05E5":letter = "\u05D0";break;	// aleph
								default:letter = char; break; // Keep original character if not Hebrew
							}
							break;
							
						case 'AL-BeTh':
							switch(char){
								/*aleph*/	case "\u05D0":letter = "\u05DC";break;	// lamed
								/*bet*/		case "\u05D1":letter = "\u05EA";break;	// tav
								/*gimel*/	case "\u05D2":letter = "\u05DE";break;	// mem
								/*dalet*/	case "\u05D3":letter = "\u05E9";break;	// shin
								/*hey*/		case "\u05D4":letter = "\u05E0";break;	// nun
								/*vav*/		case "\u05D5":letter = "\u05E8";break;	// resh
								/*zayin*/	case "\u05D6":letter = "\u05E1";break;	// samech
								/*chet*/	case "\u05D7":letter = "\u05E7";break;	// kuf
								/*tet*/		case "\u05D8":letter = "\u05E2";break;	// ayin
								/*yod*/		case "\u05D9":letter = "\u05E6";break;	// tzadi
								/*kaf*/		case "\u05DB":letter = "\u05E4";break;	// pey
								/*lamed*/	case "\u05DC":letter = "\u05D0";break;	// aleph
								/*mem*/		case "\u05DE":letter = "\u05D2";break;	// gimel
								/*nun*/		case "\u05E0":letter = "\u05D4";break;	// hey
								/*samech*/	case "\u05E1":letter = "\u05D6";break;	// zayin
								/*ayin*/	case "\u05E2":letter = "\u05D8";break;	// tet
								/*pey*/		case "\u05E4":letter = "\u05DB";break;	// kaf
								/*tzadi*/	case "\u05E6":letter = "\u05D9";break;	// yod
								/*kuf*/		case "\u05E7":letter = "\u05D7";break;	// chet
								/*resh*/	case "\u05E8":letter = "\u05D5";break;	// vav
								/*shin*/	case "\u05E9":letter = "\u05D3";break;	// dalet
								/*tav*/		case "\u05EA":letter = "\u05D1";break;	// bet
								/*kaf F*/	case "\u05DA":letter = "\u05E4";break;	// pey
								/*mem F*/	case "\u05DD":letter = "\u05D2";break;	// gimel
								/*nun F*/	case "\u05DF":letter = "\u05D4";break;	// hey
								/*pey F*/	case "\u05E3":letter = "\u05DB";break;	// kaf
								/*tzadi F*/	case "\u05E5":letter = "\u05D9";break;	// yod
								default:letter = char; break; // Keep original character if not Hebrew
							}
							break;
							
						case 'Ofanim':
							switch(char){
								/*aleph*/	case "\u05D0":letter = "\u05E4";break;	// pey
								/*bet*/		case "\u05D1":letter = "\u05EA";break;	// tav
								/*gimel*/	case "\u05D2":letter = "\u05DC";break;	// lamed
								/*dalet*/	case "\u05D3":letter = "\u05EA";break;	// tav
								/*hey*/		case "\u05D4":letter = "\u05D0";break;	// aleph
								/*vav*/		case "\u05D5":letter = "\u05D5";break;	// vav
								/*zayin*/	case "\u05D6":letter = "\u05E0";break;	// nun
								/*chet*/	case "\u05D7":letter = "\u05EA";break;	// tav
								/*tet*/		case "\u05D8":letter = "\u05EA";break;	// tav
								/*yod*/		case "\u05D9":letter = "\u05D3";break;	// dalet
								/*kaf*/		case "\u05DB":letter = "\u05E4";break;	// pey
								/*lamed*/	case "\u05DC":letter = "\u05D3";break;	// dalet
								/*mem*/		case "\u05DE":letter = "\u05DE";break;	// mem
								/*nun*/		case "\u05E0":letter = "\u05E0";break;	// nun
								/*samech*/	case "\u05E1":letter = "\u05DB";break;	// kaf
								/*ayin*/	case "\u05E2":letter = "\u05E0";break;	// nun
								/*pey*/		case "\u05E4":letter = "\u05D0";break;	// aleph
								/*tzadi*/	case "\u05E6":letter = "\u05D9";break;	// yod
								/*kuf*/		case "\u05E7":letter = "\u05E4";break;	// pey
								/*resh*/	case "\u05E8":letter = "\u05E9";break;	// shin
								/*shin*/	case "\u05E9":letter = "\u05E0";break;	// nun
								/*tav*/		case "\u05EA":letter = "\u05D5";break;	// vav
								/*kaf F*/	case "\u05DA":letter = "\u05E4";break;	// pey
								/*mem F*/	case "\u05DD":letter = "\u05DE";break;	// mem
								/*nun F*/	case "\u05DF":letter = "\u05E0";break;	// nun
								/*pey F*/	case "\u05E3":letter = "\u05D0";break;	// aleph
								/*tzadi F*/	case "\u05E5":letter = "\u05D9";break;	// yod
								default:letter = char; break; // Keep original character if not Hebrew
							}
							break;
							
						// Add other encryption methods as needed
						default:
							letter = char; // No encryption
					}
					
					encryptedText += letter;
				}
				
				// Handle final forms for last character if it's Hebrew
				if (encryptedText.length > 0) {
					const lastChar = encryptedText[encryptedText.length - 1];
					let finalChar = lastChar;
					switch(lastChar){
						/*kaf*/		case "\u05DB":finalChar = "\u05DA";break;	// kaf F
						/*mem*/		case "\u05DE":finalChar = "\u05DD";break;	// mem F
						/*nun*/		case "\u05E0":finalChar = "\u05DF";break;	// nun F
						/*pey*/		case "\u05E4":finalChar = "\u05E3";break;	// pey F
						/*tzadi*/	case "\u05E6":finalChar = "\u05E5";break;	// tzadi F
					}
					if (finalChar !== lastChar) {
						encryptedText = encryptedText.substring(0, encryptedText.length - 1) + finalChar;
					}
				}
				
				return encryptedText;
			}
			
			// Function to parse and preserve only yellow highlights and red asterisk/flower marks
			function parseSelectiveFormatting(htmlContent) {
				const tempDiv = document.createElement('div');
				tempDiv.innerHTML = htmlContent;
				
				const formattingMap = new Map();
				let textPosition = 0;
				
				function traverseNode(node) {
					if (node.nodeType === Node.TEXT_NODE) {
						const nodeText = node.textContent;
						const startPos = textPosition;
						textPosition += nodeText.length;
						return nodeText;
					} else if (node.nodeType === Node.ELEMENT_NODE) {
						const tag = node.tagName.toLowerCase();
						const style = node.getAttribute('style');
						const className = node.getAttribute('class');
						
						let childText = '';
						const startPos = textPosition;
						
						for (let child of node.childNodes) {
							childText += traverseNode(child);
						}
						
						const endPos = textPosition;
						
						// Preserve specific formatting:
						// 1. Yellow background highlights
						// 2. Red color for asterisks and flower marks  
						// 3. Gematria values (green color with bold and non-glow)
						// 4. Any font color (including previous swap colors)
						let shouldPreserve = false;
						
						if (style) {
							// Check for yellow background (various yellow shades)
							if (style.includes('background') && (
								style.includes('yellow') || 
								style.includes('#ffff00') || 
								style.includes('#fffacd') || 
								style.includes('rgb(255, 255, 0)') ||
								style.includes('rgba(255, 255, 0')
							)) {
								shouldPreserve = true;
							}
							// Check for red color on asterisks or flower marks
							else if ((childText === '*' || childText === '⁕') && (
								style.includes('color') && (
									style.includes('red') || 
									style.includes('#FF0000') || 
									style.includes('#ff0000') ||
									style.includes('rgb(255, 0, 0)')
								)
							)) {
								shouldPreserve = true;
							}
							// Check for gematria values (green color + bold + non-glow)
							else if (style.includes('color') && (
								style.includes('#00cc00') || 
								style.includes('#00CC00') ||
								style.includes('rgb(0, 204, 0)')
							) && style.includes('font-weight') && style.includes('bold')) {
								shouldPreserve = true;
							}
							// Check for any other font color (including previous swap colors)
							else if (style.includes('color') && childText.length > 0) {
								shouldPreserve = true;
							}
						}
						
						if (childText.length > 0 && shouldPreserve) {
							formattingMap.set(startPos + ':' + endPos, {
								tag: tag,
								style: style,
								className: className,
								text: childText,
								startPos: startPos,
								endPos: endPos
							});
						}
						
						return childText;
					}
					return '';
				}
				
				const plainText = traverseNode(tempDiv);
				return { plainText, formattingMap };
			}
			
			// Function to apply selective formatting to processed text
			function applySelectiveFormatting(plainText, formattingMap, selectedText, encryptedSelectedText, chosenColor) {
				let result = plainText;
				
				// Get the actual selection range from the DOM to properly identify selected characters
				const selection = window.getSelection();
				let selectedCharPositions = new Set();
				
				if (selection.rangeCount > 0) {
					const range = selection.getRangeAt(0);
					const tempDiv = document.createElement('div');
					tempDiv.innerHTML = textArea.innerHTML;
					
					// Walk through the DOM and map character positions to determine which were actually selected
					let globalCharIndex = 0;
					let selectionStartIndex = -1;
					let selectionEndIndex = -1;
					
					function walkForSelection(node) {
						if (node.nodeType === Node.TEXT_NODE) {
							const nodeText = node.textContent;
							const nodeStartIndex = globalCharIndex;
							const nodeEndIndex = globalCharIndex + nodeText.length;
							
							// Check if this text node intersects with the selection
							try {
								// Create a range for this text node
								const nodeRange = document.createRange();
								nodeRange.setStart(node, 0);
								nodeRange.setEnd(node, nodeText.length);
								
								// Check if the selection intersects with this node
								if (selection.getRangeAt(0).intersectsNode && selection.getRangeAt(0).intersectsNode(node)) {
									// This node is part of the selection
									for (let i = 0; i < nodeText.length; i++) {
										selectedCharPositions.add(globalCharIndex + i);
									}
								}
							} catch (e) {
								// Fallback: if we can't determine intersection, use text matching
								// This is less precise but safer
							}
							
							globalCharIndex += nodeText.length;
						} else if (node.nodeType === Node.ELEMENT_NODE) {
							for (let child of node.childNodes) {
								walkForSelection(child);
							}
						}
					}
					
					// Try to map the actual selected characters
					try {
						walkForSelection(tempDiv);
					} catch (e) {
						console.log('DOM walking failed, using text-based fallback');
						// Fallback to text-based approach but be more careful
						const selectedTextStart = plainText.indexOf(selectedText);
						if (selectedTextStart >= 0) {
							for (let i = selectedTextStart; i < selectedTextStart + selectedText.length; i++) {
								selectedCharPositions.add(i);
							}
						}
					}
				}
				
				// If we still have no selected positions, fall back to text matching
				if (selectedCharPositions.size === 0) {
					const selectedTextStart = plainText.indexOf(selectedText);
					if (selectedTextStart >= 0) {
						for (let i = selectedTextStart; i < selectedTextStart + selectedText.length; i++) {
							selectedCharPositions.add(i);
						}
					}
				}
				
				console.log('Selected character positions:', Array.from(selectedCharPositions)); // Debug log
				
				// Build the encrypted text with preserved formatting
				const sortedFormatting = Array.from(formattingMap.values()).sort((a, b) => a.startPos - b.startPos);
				
				// Track which characters have formatting (yellow highlights, red asterisks, etc.)
				let formattingMap2 = new Map(); // position -> format info
				
				// First pass: Map ALL formatting positions, not just selected text
				for (let format of sortedFormatting) {
					const formatStart = format.startPos;
					const formatEnd = format.endPos;
					
					// Preserve ALL yellow highlights and red asterisks/flowers throughout the text
					// But handle green highlights specially for selected text
					if (format.style || format.className) {
						// Check for yellow background highlights
						const isYellowHighlight = format.style && format.style.includes('background') && 
							(format.style.includes('yellow') || format.style.includes('#ffff00') || 
							 format.style.includes('#fffacd') || format.style.includes('rgb(255, 255, 0)') ||
							 format.style.includes('rgba(255, 255, 0'));
						
						// Check for green background highlights (gematria matches)
						const isGreenHighlight = (format.className && format.className.includes('gematria-match')) ||
							(format.style && format.style.includes('background') && 
							 (format.style.includes('#00FF00') || format.style.includes('#00ff00') || 
							  format.style.includes('rgb(0, 255, 0)') || format.style.includes('rgba(0, 255, 0')));
						
						// Check for gematria values (green color + bold + non-glow)
						const isGematriaValue = format.style && format.style.includes('color') && (
							format.style.includes('#00cc00') || 
							format.style.includes('#00CC00') ||
							format.style.includes('rgb(0, 204, 0)')
						) && format.style.includes('font-weight') && format.style.includes('bold');
						
						// Check for red asterisks/flowers
						const isRedSpecialChar = (format.text === '*' || format.text === '⁕') && 
							format.style && format.style.includes('color') && 
							(format.style.includes('red') || format.style.includes('#FF0000') || 
							 format.style.includes('#ff0000') || format.style.includes('rgb(255, 0, 0)'));
						
						// Check for any other font color (including previous swap colors)
						const hasOtherFontColor = format.style && format.style.includes('color') && 
							!isGematriaValue && !isRedSpecialChar && format.text.length > 0;
						
						// Check for multi-character yellow highlights
						const isMultiCharYellow = format.text.length > 1 && isYellowHighlight;
						
						if (isYellowHighlight || isRedSpecialChar || isMultiCharYellow || isGematriaValue || hasOtherFontColor) {
							// Mark these character positions as having formatting (always preserve)
							for (let pos = formatStart; pos < formatEnd; pos++) {
								formattingMap2.set(pos, format);
							}
						} else if (isGreenHighlight) {
							// Mark green highlights but with special handling flag
							for (let pos = formatStart; pos < formatEnd; pos++) {
								formattingMap2.set(pos, { ...format, isGreenHighlight: true });
							}
						}
					}
				}
				
				// Second pass: Build the result with encrypted text and preserved formatting
				let resultChars = plainText.split('');
				
				// Replace the selected characters with encrypted text, character by character
				if (selectedCharPositions.size > 0) {
					const encryptedChars = encryptedSelectedText.split('');
					const selectedPositionsArray = Array.from(selectedCharPositions).sort((a, b) => a - b);
					
					for (let i = 0; i < Math.min(selectedPositionsArray.length, encryptedChars.length); i++) {
						const pos = selectedPositionsArray[i];
						if (pos < resultChars.length) {
							resultChars[pos] = encryptedChars[i];
						}
					}
				}
				
				// Third pass: Apply formatting while preserving structure and grouping consecutive formatting
				result = '';
				let i = 0;
				
				while (i < resultChars.length) {
					const char = resultChars[i];
					let foundFormatting = false;
					
					// Check if this position has any formatting that should be preserved
					if (formattingMap2.has(i)) {
						const format = formattingMap2.get(i);
						
						// Check if it's a green highlight (gematria match)
						if (format.isGreenHighlight) {
							// Green highlights are removed from selected text, preserved elsewhere
							if (selectedCharPositions.has(i)) {
								// This character was in the selected text - remove green, apply swap color
								// Group consecutive selected characters
								let consecutiveText = '';
								while (i < resultChars.length && selectedCharPositions.has(i)) {
									consecutiveText += resultChars[i];
									i++;
								}
								result += `<span style="color: ${chosenColor}; font-weight: bold;">${consecutiveText}</span>`;
							} else {
								// This character was not selected - preserve green highlight
								// Group consecutive characters with same green formatting
								let consecutiveText = '';
								const currentStyle = format.style;
								const currentClassName = format.className;
								
								while (i < resultChars.length && formattingMap2.has(i) && 
									   formattingMap2.get(i).isGreenHighlight && 
									   !selectedCharPositions.has(i)) {
									consecutiveText += resultChars[i];
									i++;
								}
								
								if (currentStyle) {
									result += `<span style="${currentStyle}"${currentClassName ? ` class="${currentClassName}"` : ''}>${consecutiveText}</span>`;
								} else if (currentClassName) {
									result += `<span class="${currentClassName}">${consecutiveText}</span>`;
								}
							}
							foundFormatting = true;
						} else {
							// Check if it's a yellow highlight
							const isYellowHighlight = format.style && format.style.includes('background') && 
								(format.style.includes('yellow') || format.style.includes('#ffff00') || 
								 format.style.includes('#fffacd') || format.style.includes('rgb(255, 255, 0)') ||
								 format.style.includes('rgba(255, 255, 0'));
							
							if (isYellowHighlight) {
								// Group consecutive characters with yellow background
								let consecutiveText = '';
								const currentStyle = format.style;
								
								if (selectedCharPositions.has(i)) {
									// Selected text with yellow background - combine yellow background with swap color
									while (i < resultChars.length && formattingMap2.has(i) && 
										   selectedCharPositions.has(i) && isYellowHighlight) {
										consecutiveText += resultChars[i];
										i++;
									}
									result += `<span style="${currentStyle}; color: ${chosenColor}; font-weight: bold;">${consecutiveText}</span>`;
								} else {
									// Non-selected text - just apply yellow background
									while (i < resultChars.length && formattingMap2.has(i) && 
										   !selectedCharPositions.has(i) && 
										   formattingMap2.get(i).style === currentStyle) {
										consecutiveText += resultChars[i];
										i++;
									}
									result += `<span style="${currentStyle}">${consecutiveText}</span>`;
								}
								foundFormatting = true;
							} else {
								// Other formatting (red asterisks, gematria values, swap colors, etc.)
								// Group consecutive characters with same formatting
								let consecutiveText = '';
								const currentStyle = format.style;
								const currentClassName = format.className;
								
								while (i < resultChars.length && formattingMap2.has(i) && 
									   formattingMap2.get(i).style === currentStyle && 
									   formattingMap2.get(i).className === currentClassName &&
									   !formattingMap2.get(i).isGreenHighlight) {
									consecutiveText += resultChars[i];
									i++;
								}
								
								if (currentStyle) {
									result += `<span style="${currentStyle}">${consecutiveText}</span>`;
								} else if (currentClassName) {
									result += `<span class="${currentClassName}">${consecutiveText}</span>`;
								}
								foundFormatting = true;
							}
						}
					}
					
					if (!foundFormatting) {
						// Check if this character is in the selected text (should get swap color)
						if (selectedCharPositions.has(i)) {
							// Group consecutive selected characters
							let consecutiveText = '';
							while (i < resultChars.length && selectedCharPositions.has(i) && !formattingMap2.has(i)) {
								consecutiveText += resultChars[i];
								i++;
							}
							result += `<span style="color: ${chosenColor}; font-weight: bold;">${consecutiveText}</span>`;
						} else {
							// No special formatting, group consecutive unformatted characters
							let consecutiveText = '';
							while (i < resultChars.length && !formattingMap2.has(i) && !selectedCharPositions.has(i)) {
								consecutiveText += resultChars[i];
								i++;
							}
							result += consecutiveText;
						}
					}
				}
				
				// Finally, ensure special characters (asterisks and flower marks) are highlighted in red
				// This ensures they stay red even if not previously formatted
				result = result.replace(/(?<!<[^>]*>)\*(?![^<]*>)/g, '<span style="color: #FF0000;">*</span>');
				result = result.replace(/(?<!<[^>]*>)⁕(?![^<]*>)/g, '<span style="color: #FF0000;">⁕</span>');
				
				return result;
			}
			
			// Parse existing formatting before processing (only yellow highlights and red asterisk/flowers)
			const { plainText, formattingMap } = parseSelectiveFormatting(textArea.innerHTML);
			console.log('Parsed selective formatting - plainText length:', plainText.length, 'formattingMap size:', formattingMap.size); // Debug log
			
			// Encrypt only the selected text while preserving digits and tabs
			const encryptedSelectedText = encryptSelectedText(selectedText);
			console.log('Encrypted selected text:', encryptedSelectedText); // Debug log
			
			// Apply selective formatting including the new swap color
			const finalContent = applySelectiveFormatting(plainText, formattingMap, selectedText, encryptedSelectedText, chosenColor);
			
			// Update the textArea with the formatted content
			console.log('Setting textArea.innerHTML with selectively formatted content'); // Debug log
			textArea.innerHTML = finalContent;
			
			// Clear selection
			selection.removeAllRanges();
			console.log('toggleSwap completed successfully'); // Debug log
		}
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
				/*kaf F*/	case "\u05DA":gematria1 += L23;letter = "\u05E5";gematria2 += L27;break;	// tzadi F
				/*mem F*/	case "\u05DD":gematria1 += L24;letter = "\u05E3";gematria2 += L26;break;	// pey F
				/*nun F*/	case "\u05DF":gematria1 += L25;letter = "\u05DF";gematria2 += L25;break;	// nun F
				/*pey F*/	case "\u05E3":gematria1 += L26;letter = "\u05DD";gematria2 += L24;break;	// mem F
				/*tzadi F*/	case "\u05E5":gematria1 += L27;letter = "\u05DA";gematria2 += L23;break;	// kaf F
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
        const calcBtn = document.getElementById('calcBtn');
        const copyBtn = document.getElementById('copyBtn');
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
			const defaultPath = baseURL + '/gemacrypt/files/books/';							// Sets the default path when the Open button is clicked to /gemacrypt/files/books/ directory
			fileInput.setAttribute('nwworkingdir', defaultPath);								// Set the default working directory to open to contained in variable defaultPath.
			fileInput.click();
		}
		openBtn.addEventListener('mouseup',  openFiles);
		openBtn.addEventListener('touchend', openFiles);

        // The app1Btn functionality - opens app1.php with selected text
        function openApp1WithSelection() {
            const selection = window.getSelection();
            const selectedText = selection.toString().trim();
            
            if (selectedText) {
                // URL encode the selected text to handle special characters
                const encodedText = encodeURIComponent(selectedText);
                window.open(`app1.php?text=${encodedText}`, '_blank');
            } else {
                // No selection, open normally
                window.open('app1.php', '_blank');
            }
        }

          // File input change event listener.  Allows new text to be appended to the end of current text when using the Open button
        fileInput.addEventListener('change', () => {
            const files = fileInput.files;

            // Show immediate loading indicator
            showCalculationLoadingIndicator();
            
            // Set currentBook to empty.txt when files are loaded via openBtn
            currentBook = '/gemacrypt/files/books/empty.txt';

            // Force browser rendering before starting file processing
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    console.log('Starting file processing after forced render...');
                    
                    let fileText = '';
                    let filesProcessed = 0;
                    for (let file of files) {
                        const reader = new FileReader();
                        reader.onload = () => {
                            fileText += reader.result + '\n\n';
                            filesProcessed++;
                            // After all files are loaded, apply progressive loading
                            if (filesProcessed === files.length) {
                                // Store the loaded file content in localStorage for clearBtn functionality
                                localStorage.setItem('gemacrypt_cached_file_content', fileText);
                                
                                // Use progressive loading for the content
                                processFileContentProgressively(textArea, fileText);
                                
                                // Detect language and store in global variable
                                detectedLanguage = detectLanguage(fileText);
                                console.log('Language detected:', detectedLanguage);
                            }
                        };
                        reader.readAsText(file);
                    }
                });
            });
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
		// Remove functionality if "Alt Word #2" are selected, change event listener.  This is the word having the same meaning, but a slightly different spelling found later in the Dead Sea Scrolls, and therefore a different Gematria value. 
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'AltWord2') {
		        // Get plain text content (strips HTML)
		        const textAreaContent = textArea.textContent;
		        // Remove Alt Word #2 content - match flower mark followed by non-space characters and optional space
		        const noAltWord2Content = textAreaContent.replace(/⁕[^\s⁕]* ?/g, '');	// Replaces ⁕ followed by any non-whitespace/non-flower characters and optional space
		        // Re-apply highlighting to the cleaned content
		        textArea.innerHTML = highlightSpecialCharacters(noAltWord2Content);
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});	
		// Remove functionality if "Alt Word #1" are selected, change event listener.  This is the original word traditionally found in the Old Testament.
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'AltWord1') {
		        // Get plain text content (strips HTML)
		        const textAreaContent = textArea.textContent;
		        // Remove Alt Word #1 content - match single asterisk followed by non-space characters and optional space
				const noAltWord1Content = textAreaContent.replace(/\*[^\s\*]* ?/g, '');	// Removes * followed by any non-whitespace/non-asterisk characters and optional space
		        // Re-apply highlighting to the cleaned content
		        textArea.innerHTML = highlightSpecialCharacters(noAltWord1Content);
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});
		// Remove functionality if "Cantillation" is selected, change event listener
		removeSelect.addEventListener('change', () => {
			const selectedValue = removeSelect.value;
			if (selectedValue === 'Cantillation') {
				const textAreaContent = textArea.textContent;
				const cantillationMarks = /[\u0591-\u05AF]/g; // Hebrew Cantillation marks (te'amim)
				const noCantillationContent = textAreaContent.replace(cantillationMarks, '');
				textArea.innerHTML = highlightSpecialCharacters(noCantillationContent);
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
			}
		});
		// Remove functionality if "Niqqud" is selected, change event listener
		removeSelect.addEventListener('change', () => {
			const selectedValue = removeSelect.value;
			if (selectedValue === 'Niqqud') {
				const textAreaContent = textArea.textContent;
				const hebrewCharacters = /[\u0590\u05B0-\u05BD\u05BF\u05C1-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF]/g; // except for Cantillation, new lines, and ׀ (U+05C0)
				const noNiqqudContent = textAreaContent.replace(hebrewCharacters, '');
				textArea.innerHTML = highlightSpecialCharacters(noNiqqudContent);
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
			}
		});
		// Remove functionality if "Maqaf" is selected, change event listener
		removeSelect.addEventListener('change', () => {
			const selectedValue = removeSelect.value;
			if (selectedValue === 'Maqaf') {
				const textAreaContent = textArea.textContent;
				const maqafDashMinus = /[\u05BE|­|-]/g; // Remove maqaf, soft hyphen, and regular hyphen/dash
				const noMaqafContent = textAreaContent.replace(maqafDashMinus, '');
				textArea.innerHTML = highlightSpecialCharacters(noMaqafContent);
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
			}
		});
		// Remove functionality if "Punctuation" is selected, change event listener
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'Punctuation') {
		        const textAreaContent = textArea.textContent;
		        const noPunctuationContent = textAreaContent.replace(/ \u05C0/g, '').replace(/[.,!?\-;\(\)\[\]\u05C3\u05C0]/g, '');
		        textArea.innerHTML = highlightSpecialCharacters(noPunctuationContent);
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});
		// Remove functionality if "Digits" are selected, change event listener, including colons and tabs for the verse indicators
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'Digits') {
		        const textAreaContent = textArea.textContent;
		        const noDigitsContent = textAreaContent
					.replace(/[\d,\u003A\u05C3\t]/g, '')	// remove Digits, commas, colons, Sof Pasuq (Hebrew colon), tabs & Fleur-De-Lis
					.replace(/\n{2,}/g, '\n') 				// removes a double or repeating New Line
					.replace(/\r{2,}/g, '\r');				// removes a double or repeating Carriage Return
		        textArea.innerHTML = highlightSpecialCharacters(noDigitsContent);
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});
		// Remove functionality if "Spaces" are selected, change event listener
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'Spaces') {
		        const textAreaContent = textArea.textContent;
		        const noSpacesContent = textAreaContent.replace(/[^\S\r\n]+/g, '');
		        textArea.innerHTML = highlightSpecialCharacters(noSpacesContent);
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});
		// Remove functionality if "Spaces" are selected, change event listener
				removeSelect.addEventListener('change', () => {
			const selectedValue = removeSelect.value;
			if (selectedValue === 'CarriageReturns') {
				const textAreaContent = textArea.textContent;
				const noCarriageReturnsContent = textAreaContent.replace(/(\r\n|\n|\r)/gm, '');
				textArea.innerHTML = highlightSpecialCharacters(noCarriageReturnsContent);
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
		        textArea.innerHTML = highlightSpecialCharacters(noLatinLettersContent);
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});
		// Remove functionality if "GreekLetters" are selected, change event listener
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'GreekLetters') {
		        const textAreaContent = textArea.textContent;
		        const noGreekLettersContent = textAreaContent.replace(/[\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF&&[^0-9]]/g, '');
		        textArea.innerHTML = highlightSpecialCharacters(noGreekLettersContent);
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});
		// Remove functionality if "HebrewLetters" are selected, change event listener
		removeSelect.addEventListener('change', () => {
		    const selectedValue = removeSelect.value;
		    if (selectedValue === 'HebrewLetters') {
		        const textAreaContent = textArea.textContent;
		        const noHebrewLettersContent = textAreaContent.replace(/[\u0590-\u05FF]/g, '');
		        textArea.innerHTML = highlightSpecialCharacters(noHebrewLettersContent);
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		    }
		});	
		// Remove functionality if "ConvertFinals" is selected, change event listener
	removeSelect.addEventListener('change', () => {
		const selectedValue = removeSelect.value;
		if (selectedValue === 'ConvertFinals') {
			const textAreaContent = textArea.textContent;
			// Replace Hebrew final forms with their regular forms
			const convertedContent = textAreaContent
				.replace(/ך/g, 'כ')  // Final Kaf → Kaf
				.replace(/ם/g, 'מ')  // Final Mem → Mem
				.replace(/ן/g, 'נ')  // Final Nun → Nun
				.replace(/ף/g, 'פ')  // Final Peh → Peh
				.replace(/ץ/g, 'צ'); // Final Tzadi → Tzadi
			textArea.innerHTML = highlightSpecialCharacters(convertedContent);
			//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
		}
		});
		// Remove functionality if "SplitHyphen" is selected, change event listener
		removeSelect.addEventListener('change', () => {
			const selectedValue = removeSelect.value;
			if (selectedValue === 'SplitHyphen') {
				const textAreaContent = textArea.textContent;
				// Replace Maqaf (U+05BE), soft hyphen (U+00AD), and regular hyphen/dash with a single space
				const splitHyphenContent = textAreaContent.replace(/[\u05BE\u00AD\-]/g, ' ');
				textArea.innerHTML = highlightSpecialCharacters(splitHyphenContent);
				//removeSelect.value = 'Remove'; // set dropdown menu back to 1st option
			}
		});

		//\S\s\r\n\d.:;,!*-|()+
        // Highlight text functionality
		let textHighlight = 'Highlight a phrase from the text below and then click any of the Toolbar buttons: \n\n Encrypt \n Calculate \n Translate.\n';
		textArea.addEventListener('mouseup', () => {
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
		
		// Call adjustStatusBarHeight to show/hide the statusbar after any text selection change
		adjustStatusBarHeight();

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
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { 
						document.getElementById('encrypted').innerHTML = `
							<div class="encrypted-label">Encrypted:</div>
							<div class="encrypted-content">
								<a style="text-decoration: none; direction: rtl;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank">
									<span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span>
								</a>
							</div>`;
					}

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
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

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
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

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
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

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
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

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
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

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
							/*kaf F*/	case "\u05DA":gematria1 += L23;letter = "\u05E5";gematria2 += L27;break;	// tzadik F
							/*mem F*/	case "\u05DD":gematria1 += L24;letter = "\u05E3";gematria2 += L26;break;	// pey F
							/*nun F*/	case "\u05DF":gematria1 += L25;letter = "\u05DF";gematria2 += L25;break;	// nun F
							/*pey F*/	case "\u05E3":gematria1 += L26;letter = "\u05DD";gematria2 += L24;break;	// mem F
							/*tzadi F*/	case "\u05E5":gematria1 += L27;letter = "\u05DA";gematria2 += L23;break;	// kaf F
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
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

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
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

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
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

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
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

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
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else if (encryptionSelect.value == "Encryption") {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
				if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}

				} else {
				wordCount=letterCount=product1=product2=remainder1=remainder2=gematria1=gematria2=0;
				letter=textEncrypted='';
				input = textHighlight.replace(/[a-z\t"’·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, ''); // Remove all English, Niqqud, Greek, carriage returns, but keep numbers and punctuation
					// Add Switch cases for AT-BaSh
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { document.getElementById('encrypted').innerHTML = `<div style="display: flex; align-items: center;"><span style="direction: ltr;">Encrypted:</span><a style="text-decoration: none; direction: rtl; margin-left: 5px;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank"><span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span></a></div>`;}
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
				else {document.getElementById('encryptedsum').innerHTML = `En. Gematria: <span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${encryptedTotal.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;}
			} 
		);
		
		// Set the default encryption method when the page loads.
			document.addEventListener('DOMContentLoaded', () => {
			const sel = document.getElementById('encryptionSelect');
			sel.value = 'Encryption';          // make sure the option is chosen
			sel.dispatchEvent(new Event('change')); // trigger your encryption handler
		});

		// Wait to calculate the Sum of the letters highlighted until the mouse click has been released and all letters are highlighted.
		function handleTextSelection() {
			const selection = window.getSelection();
			if (selection.toString().length > 0) {
				const range = selection.getRangeAt(0);
				const startContainer = range.startContainer;
				const endContainer = range.endContainer;
				const startOffset = range.startOffset;
				const endOffset = range.endOffset;
				const selectedText = selection.toString();
				textHighlight = selectedText;
				
				// Calculate counts
				wordCount = selectedText.split(/\s+/).filter(word => word.length > 0).length;
				
				// Count only actual Hebrew, Greek, and English letters (excluding niqqud, cantillation, etc.)
				letterCount = 0;
				for (let char of selectedText) {
					const code = char.charCodeAt(0);
					// Hebrew letters (0x05D0-0x05EA) or Hebrew finals or English letters or Greek letters
					if ((code >= 0x05D0 && code <= 0x05EA) || 
						char === "\u05DA" || char === "\u05DD" || char === "\u05DF" || char === "\u05E3" || char === "\u05E5" ||
						(code >= 65 && code <= 90) || (code >= 97 && code <= 122) ||
						(code >= 0x0370 && code <= 0x03FF)) {
						letterCount++;
					}
				}
				
				// Calculate gematria total
				textTotal = 0;
				for (let i = 0; i < selectedText.length; i++) {
					const char = selectedText[i];
					switch (char) {
						// Hebrew letters
						case "\u05D0": textTotal += L01; break; // aleph
						case "\u05D1": textTotal += L02; break; // bet
						case "\u05D2": textTotal += L03; break; // gimel
						case "\u05D3": textTotal += L04; break; // dalet
						case "\u05D4": textTotal += L05; break; // hey
						case "\u05D5": textTotal += L06; break; // vav
						case "\u05D6": textTotal += L07; break; // zayin
						case "\u05D7": textTotal += L08; break; // chet
						case "\u05D8": textTotal += L09; break; // tet
						case "\u05D9": textTotal += L10; break; // yod
						case "\u05DB": textTotal += L11; break; // kaf
						case "\u05DC": textTotal += L12; break; // lamed
						case "\u05DE": textTotal += L13; break; // mem
						case "\u05E0": textTotal += L14; break; // nun
						case "\u05E1": textTotal += L15; break; // samech
						case "\u05E2": textTotal += L16; break; // ayin
						case "\u05E4": textTotal += L17; break; // pey
						case "\u05E6": textTotal += L18; break; // tzadi
						case "\u05E7": textTotal += L19; break; // kuf
						case "\u05E8": textTotal += L20; break; // resh
						case "\u05E9": textTotal += L21; break; // shin
						case "\u05EA": textTotal += L22; break; // tav
						case "\u05DA": textTotal += L23; break; // kaf F
						case "\u05DD": textTotal += L24; break; // mem F
						case "\u05DF": textTotal += L25; break; // nun F
						case "\u05E3": textTotal += L26; break; // pey F
						case "\u05E5": textTotal += L27; break; // tzadi F
						// Greek letters
						case "\u0386": textTotal += L01; break; // alpha
						case "\u0391": textTotal += L01; break; // alpha
						case "\u03AC": textTotal += L01; break; // alpha
						case "\u03B1": textTotal += L01; break; // alpha
						case "\u0392": textTotal += L02; break; // beta
						case "\u03B2": textTotal += L02; break; // beta
						case "\u0393": textTotal += L03; break; // gamma
						case "\u03B3": textTotal += L03; break; // gamma
						case "\u0394": textTotal += L04; break; // delta
						case "\u03B4": textTotal += L04; break; // delta
						case "\u0388": textTotal += L05; break; // epsilon
						case "\u0395": textTotal += L05; break; // epsilon
						case "\u03AD": textTotal += L05; break; // epsilon
						case "\u03B5": textTotal += L05; break; // epsilon
						case "\u0396": textTotal += L07; break; // zeta
						case "\u03B6": textTotal += L07; break; // zeta
						case "\u0389": textTotal += L08; break; // eta
						case "\u0397": textTotal += L08; break; // eta
						case "\u03AE": textTotal += L08; break; // eta
						case "\u03B7": textTotal += L08; break; // eta
						case "\u0398": textTotal += L09; break; // theta
						case "\u03B8": textTotal += L09; break; // theta
						case "\u038A": textTotal += L10; break; // iota
						case "\u0399": textTotal += L10; break; // iota
						case "\u03AF": textTotal += L10; break; // iota
						case "\u03B9": textTotal += L10; break; // iota
						case "\u039A": textTotal += L11; break; // kappa
						case "\u03BA": textTotal += L11; break; // kappa
						case "\u039B": textTotal += L12; break; // lambda
						case "\u03BB": textTotal += L12; break; // lambda
						case "\u039C": textTotal += L13; break; // mu
						case "\u03BC": textTotal += L13; break; // mu
						case "\u039D": textTotal += L14; break; // nu
						case "\u03BD": textTotal += L14; break; // nu
						case "\u039E": textTotal += L15; break; // xi
						case "\u03BE": textTotal += L15; break; // xi
						case "\u038C": textTotal += L16; break; // omicron
						case "\u039F": textTotal += L16; break; // omicron
						case "\u03CC": textTotal += L16; break; // omicron
						case "\u03BF": textTotal += L16; break; // omicron
						case "\u03A0": textTotal += L17; break; // pi
						case "\u03C0": textTotal += L17; break; // pi
						case "\u03A1": textTotal += L18; break; // rho
						case "\u03C1": textTotal += L18; break; // rho
						case "\u03A3": textTotal += L19; break; // sigma
						case "\u03C2": textTotal += L19; break; // sigma
						case "\u03C3": textTotal += L19; break; // sigma
						case "\u03A4": textTotal += L20; break; // tau
						case "\u03C4": textTotal += L20; break; // tau
						case "\u038E": textTotal += L21; break; // upsilon
						case "\u03A5": textTotal += L21; break; // upsilon
						case "\u03CD": textTotal += L21; break; // upsilon
						case "\u03C5": textTotal += L21; break; // upsilon
						case "\u03A6": textTotal += L22; break; // phi
						case "\u03C6": textTotal += L22; break; // phi
						case "\u03A7": textTotal += L23; break; // chi
						case "\u03C7": textTotal += L23; break; // chi
						case "\u03A8": textTotal += L24; break; // psi
						case "\u03C8": textTotal += L24; break; // psi
						case "\u038F": textTotal += L25; break; // omega
						case "\u03A9": textTotal += L25; break; // omega
						case "\u03CE": textTotal += L25; break; // omega
						case "\u03C9": textTotal += L25; break; // omega
						// English letters
						case "A": case "a": textTotal += 1; break;
						case "B": case "b": textTotal += 2; break;
						case "C": case "c": textTotal += 3; break;
						case "D": case "d": textTotal += 4; break;
						case "E": case "e": textTotal += 5; break;
						case "F": case "f": textTotal += 6; break;
						case "G": case "g": textTotal += 7; break;
						case "H": case "h": textTotal += 8; break;
						case "I": case "i": textTotal += 9; break;
						case "J": case "j": textTotal += 10; break;
						case "K": case "k": textTotal += 11; break;
						case "L": case "l": textTotal += 12; break;
						case "M": case "m": textTotal += 13; break;
						case "N": case "n": textTotal += 14; break;
						case "O": case "o": textTotal += 15; break;
						case "P": case "p": textTotal += 16; break;
						case "Q": case "q": textTotal += 17; break;
						case "R": case "r": textTotal += 18; break;
						case "S": case "s": textTotal += 19; break;
						case "T": case "t": textTotal += 20; break;
						case "U": case "u": textTotal += 21; break;
						case "V": case "v": textTotal += 22; break;
						case "W": case "w": textTotal += 23; break;
						case "X": case "x": textTotal += 24; break;
						case "Y": case "y": textTotal += 25; break;
						case "Z": case "z": textTotal += 26; break;
						default: break; // Ignore other characters
					}
				}
				
				// Apply gematria modifiers
				var gematriaSelect = document.getElementById('gematriaSelect');
				if(gematriaSelect.value == "HaKlali"){
					textTotal = textTotal * textTotal;
				}
				else if(gematriaSelect.value == "Kolel"){
					textTotal += letterCount;
				}
				else if(gematriaSelect.value == "Kolel+1"){
					textTotal += wordCount;
				}
				else if (gematriaSelect.value == "IntegralReduced"){
					while(textTotal >= 10){
						let product = Math.floor(textTotal / 10);
						let remainder = textTotal % 10;
						textTotal = remainder + product;
					}
				}
				
				// Calculate verse count, word count, and letter count for status bar
				var verses = (textHighlight.match(/\d+:\d+/g) || ['1']).length;
				let words = textHighlight.trim().split(/\s+/).filter(word => word.length > 0).length;
				let letters = textHighlight.replace(/[.,&!$%#~*|><}^{/)(-=:;\d\s\r\n_'"`\]\[\+\\\u05C3?\u05BE\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF]/g, '').length;

				// Calculate encryption based on selected encryption method for statusBar display
				input = textHighlight.replace(/[a-z\t"'·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140—\u1018F\u1D200—\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, '');
				textEncrypted = '';

				// Get the currently selected encryption method
				const encryptionSelect = document.getElementById('encryptionSelect');
				let selectedEncryption = encryptionSelect ? encryptionSelect.value : 'Encryption';

				// Perform encryption based on selected method (default to AT-BaSh if "Encryption" is selected)
				if (selectedEncryption === 'Encryption' || selectedEncryption === 'AT-BaSh') {
					// AT-BaSh encryption
					for (var i = 0; i < input.length; i++) {
						var letter = '';
						switch(input[i]) {
							/*aleph*/	case "\u05D0": letter = "\u05EA"; break;	// tav
							/*bet*/		case "\u05D1": letter = "\u05E9"; break;	// shin
							/*gimel*/	case "\u05D2": letter = "\u05E8"; break;	// resh
							/*dalet*/	case "\u05D3": letter = "\u05E7"; break;	// kuf
							/*hey*/		case "\u05D4": letter = "\u05E6"; break;	// tzadi
							/*vav*/		case "\u05D5": letter = "\u05E4"; break;	// pey
							/*zayin*/	case "\u05D6": letter = "\u05E2"; break;	// ayin
							/*chet*/	case "\u05D7": letter = "\u05E1"; break;	// samech
							/*tet*/		case "\u05D8": letter = "\u05E0"; break;	// nun
							/*yod*/		case "\u05D9": letter = "\u05DE"; break;	// mem
							/*kaf*/		case "\u05DB": letter = "\u05DC"; break;	// lamed
							/*lamed*/	case "\u05DC": letter = "\u05DB"; break;	// kaf
							/*mem*/		case "\u05DE": letter = "\u05D9"; break;	// yod
							/*nun*/		case "\u05E0": letter = "\u05D8"; break;	// tet
							/*samech*/	case "\u05E1": letter = "\u05D7"; break;	// chet
							/*ayin*/	case "\u05E2": letter = "\u05D6"; break;	// zayin
							/*pey*/		case "\u05E4": letter = "\u05D5"; break;	// vav
							/*tzadi*/	case "\u05E6": letter = "\u05D4"; break;	// hey
							/*kuf*/		case "\u05E7": letter = "\u05D3"; break;	// dalet
							/*resh*/	case "\u05E8": letter = "\u05D2"; break;	// gimel
							/*shin*/	case "\u05E9": letter = "\u05D1"; break;	// bet
							/*tav*/		case "\u05EA": letter = "\u05D0"; break;	// aleph
							/*kaf F*/	case "\u05DA": letter = "\u05DC"; break;	// lamed
							/*mem F*/	case "\u05DD": letter = "\u05D9"; break;	// yod
							/*nun F*/	case "\u05DF": letter = "\u05D8"; break;	// tet
							/*pey F*/	case "\u05E3": letter = "\u05D5"; break;	// vav
							/*tzadi F*/	case "\u05E5": letter = "\u05D4"; break;	// hey
							default: letter = input[i]; break; // Keep non-Hebrew characters as-is
						}
						textEncrypted += letter;

						// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
						if(i+1 == input.length) {
							switch(letter) {
								/*kaf*/		case "\u05DB": letter = "\u05DA"; textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1); break;	// kaf F
								/*mem*/		case "\u05DE": letter = "\u05DD"; textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1); break;	// mem F
								/*nun*/		case "\u05E0": letter = "\u05DF"; textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1); break;	// nun F
								/*pey*/		case "\u05E4": letter = "\u05E3"; textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1); break;	// pey F
								/*tzadi*/	case "\u05E6": letter = "\u05E5"; textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1); break;	// tzadi F
								default: letter = ""; break;
							}
							textEncrypted += letter;
						}
					}
				} else {
					// For other encryption methods, call the existing encryption handler
					// Store original values
					const originalTextHighlight = textHighlight;
					
					// Call the encryption handler which will populate textEncrypted
					if (encryptionSelect && encryptionSelect.onchange) {
						encryptionSelect.onchange();
					}
					
					// Restore textHighlight in case it was modified
					textHighlight = originalTextHighlight;
				}
				
				// Calculate encrypted total and display encrypted text and sum
				calculateEncryptedTotal();
				
				// Update status bar with calculated values
				if (letters == 0) { words = 0; verses = 0; encryptedTotal = ""; }
				document.getElementById('verses').innerHTML = `Verses: ~<span style="color: #35ab47; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${verses.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;
				document.getElementById('words').innerHTML = `Words: <span style="color: #025be0; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${words.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;
				document.getElementById('letters').innerHTML = `Letters: <span style="color: #7a489c; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${letters.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;
				document.getElementById('sum').innerHTML = `Gematria: <span style="color: #FF0000; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textTotal.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;
				
				// Show 'Not Applicable' if no Hebrew letters were selected; otherwise show encrypted text and numeric sum
				const hasHebrew = /[\u05D0-\u05EA]/.test(textHighlight) || /[\u05D0-\u05EA]/.test(textEncrypted);
				if (!hasHebrew) {
					document.getElementById('encrypted').innerHTML = `
						<div class="encrypted-label">Encrypted:</div>
						<div class="encrypted-content">
							<span style="color: #f2f542; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">—</span>
						</div>`;
					document.getElementById('encryptedsum').innerHTML = `En. Gematria: <span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">—</span>`;
				} else {
					if (/[\u05D0-\u05E5]/.test(textEncrypted)) { 
						document.getElementById('encrypted').innerHTML = `
							<div class="encrypted-label">Encrypted:</div>
							<div class="encrypted-content">
								<a style="text-decoration: none; direction: rtl;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank">
									<span style="color: #f2f542; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span>
								</a>
							</div>`;
					} else {
						document.getElementById('encrypted').innerHTML = `
							<div class="encrypted-label">Encrypted:</div>
							<div class="encrypted-content">
								<span style="color: #f2f542; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span>
							</div>`;
					}
					document.getElementById('encryptedsum').innerHTML = `En. Gematria: <span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${encryptedTotal.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;
				}
				
				// Call adjustStatusBarHeight to show the statusbar after content is populated
				adjustStatusBarHeight();
			}
		}

		// Add event listeners for both mouseup and touchend events
		textArea.addEventListener('mouseup', handleTextSelection);
		textArea.addEventListener('touchend', handleTextSelection);

		// Add event listener to handle when text selection is cleared
		document.addEventListener('selectionchange', () => {
			const selection = window.getSelection();
			if (selection.toString().length === 0) {
				// Clear all statusbar content when no text is selected
				textHighlight = '';
				document.getElementById('verses').innerHTML = '';
				document.getElementById('words').innerHTML = '';
				document.getElementById('letters').innerHTML = '';
				document.getElementById('sum').innerHTML = '';
				document.getElementById('encrypted').innerHTML = `
					<div class="encrypted-label">Encrypted:</div>
					<div class="encrypted-content">
						<span style="color: #f2f542; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">—</span>
					</div>`;
				document.getElementById('encryptedsum').innerHTML = `En. Gematria: <span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">—</span>`;
				
				// Force statusbar to hide
				const statusBar = document.getElementById('statusBar');
				if (statusBar) {
					statusBar.classList.add('hidden');
				}
				
				// Update textArea max-height when statusbar is hidden
				const textArea = document.getElementById('textArea');
				if (textArea) {
					const toolbar = document.querySelector('.toolbar');
					const toolbarHeight = toolbar && !toolbar.classList.contains('collapsed') ? 48 : 8;
					textArea.style.maxHeight = `calc(100vh - ${toolbarHeight}px)`;
				}
			}
		});

		/* ----------------------------------------------------------
		GLOBAL STATUS-BAR ADJUSTMENT FUNCTION
		---------------------------------------------------------- */
		function adjustStatusBarHeight() {
			const bar = document.getElementById('statusBar');
			if (!bar) return;
			
			// Force a reflow to get accurate measurements
			bar.style.flexWrap = 'nowrap';
			bar.style.height = 'auto';
			
			// Small delay to ensure layout is updated
			setTimeout(() => {
				const boxes = Array.from(bar.querySelectorAll('.verses, .words, .letters, .sum, .encrypted, .encryptedsum'));
				const gap = 5; // CSS gap value
				const barW = bar.clientWidth;
				let usedW = 0;

				// Calculate total width needed - use scrollWidth for accurate measurement
				boxes.forEach(b => {
					if (b.offsetWidth > 0) { // Only count visible elements
						usedW += b.scrollWidth + gap;
					}
				});
				usedW -= gap; // Remove last extra gap

				// Determine number of rows needed with some buffer
				let rows = (usedW > (barW - 10)) ? 2 : 1; // 10px buffer for safety
				
				// If encrypted content is empty, force rows to 1 to avoid extra height
				const encryptedContent = bar.querySelector('.encrypted .encrypted-content');
				if (encryptedContent && encryptedContent.textContent.trim() === '') {
					rows = 1;
				}
				
				// Hide the status bar until text is highlighted
				const hasAnyContent = boxes.some(box => {
					// Get the actual text content from the span elements inside each box
					const span = box.querySelector('span');
					const content = span ? span.textContent || span.innerHTML : '';
					
					// Check if there's actual meaningful content (numbers/values) after the labels
					if (!content || content.trim() === '') return false;
					
					// Look for actual numeric values or encrypted text content
					const hasNumbers = /\d/.test(content);
					const hasHebrewText = /[\u05D0-\u05EA]/.test(content);
					const hasGreekText = /[\u0370-\u03FF]/.test(content);
					
					// Only show statusbar if there are actual values, not just labels
					return hasNumbers || hasHebrewText || hasGreekText;
				});
				
				if (!hasAnyContent) {
					bar.classList.add('hidden');
					return; // Exit early since we're hiding the bar
				} else {
					bar.classList.remove('hidden');
				}
				
				// Apply height and flex-wrap
				bar.style.height = `${rows * 22}px`;
				bar.style.flexWrap = (rows === 2) ? 'wrap' : 'nowrap';
				
				// Update textArea max-height to account for statusbar height changes
				const textArea = document.getElementById('textArea');
				if (textArea) {
					const toolbar = document.querySelector('.toolbar');
					const toolbarHeight = toolbar && !toolbar.classList.contains('collapsed') ? 48 : 8;
					const statusBarHeight = rows * 22;
					textArea.style.maxHeight = `calc(100vh - ${toolbarHeight}px - ${statusBarHeight}px)`;
				}
			}, 10); // Small delay to ensure accurate measurements
		}

		// Add resize event listener for statusbar adjustment
		window.addEventListener('resize', adjustStatusBarHeight);
		
		// Add orientation change listener for mobile devices
		window.addEventListener('orientationchange', () => {
			setTimeout(adjustStatusBarHeight, 100); // Small delay to ensure layout is updated
		});

		// Initial statusbar adjustment on page load - start hidden
		document.addEventListener('DOMContentLoaded', () => {
			const statusBar = document.getElementById('statusBar');
			if (statusBar) {
				statusBar.classList.add('hidden');
			}
			adjustStatusBarHeight();
		});
		
		// Also listen for touchend events for mobile devices
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

				if (letters == 0) { words = 0; verses = 0; encryptedTotal = ""; document.getElementById('encryptedsum').innerHTML = `En. Gematria: <span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">Not Applicable</span>`; }
				document.getElementById('verses').innerHTML = `Verses: ~<span style="color: #35ab47; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${verses.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;
				document.getElementById('words').innerHTML = `Words: <span style="color: #025be0; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${words.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;
				document.getElementById('letters').innerHTML = `Letters: <span style="color: #7a489c; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${letters.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;
				document.getElementById('sum').innerHTML = `Gematria: <span style="color: #FF0000; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textTotal.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;
				
				// Calculate encryption by default (AT-BaSh) for statusBar display
				input = textHighlight.replace(/[a-z\t"'·—\r\n\u0590-\u05BD\u05BF-\u05C5\u05C7-\u05CF\u05EB-\u05EF\u05F3-\u05FF\u0370-\u03FF\u10140–\u1018F\u1D200–\u1D24F\u101A0\uAB65\u2126\u1DBF\u1F00-\u1FFF\u2C80-\u2CFF\u1F70-\u1FFF&&[^0-9]/gi, '');
				textEncrypted = '';
				
				// Perform AT-BaSh encryption by default
				for (var i = 0; i < input.length; i++) {
					var letter = '';
					switch(input[i]) {
						/*aleph*/	case "\u05D0": letter = "\u05EA"; break;	// tav
						/*bet*/		case "\u05D1": letter = "\u05E9"; break;	// shin
						/*gimel*/	case "\u05D2": letter = "\u05E8"; break;	// resh
						/*dalet*/	case "\u05D3": letter = "\u05E7"; break;	// kuf
						/*hey*/		case "\u05D4": letter = "\u05E6"; break;	// tzadi
						/*vav*/		case "\u05D5": letter = "\u05E4"; break;	// pey
						/*zayin*/	case "\u05D6": letter = "\u05E2"; break;	// ayin
						/*chet*/	case "\u05D7": letter = "\u05E1"; break;	// samech
						/*tet*/		case "\u05D8": letter = "\u05E0"; break;	// nun
						/*yod*/		case "\u05D9": letter = "\u05DE"; break;	// mem
						/*kaf*/		case "\u05DB": letter = "\u05DC"; break;	// lamed
						/*lamed*/	case "\u05DC": letter = "\u05DB"; break;	// kaf
						/*mem*/		case "\u05DE": letter = "\u05D9"; break;	// yod
						/*nun*/		case "\u05E0": letter = "\u05D8"; break;	// tet
						/*samech*/	case "\u05E1": letter = "\u05D7"; break;	// chet
						/*ayin*/	case "\u05E2": letter = "\u05D6"; break;	// zayin
						/*pey*/		case "\u05E4": letter = "\u05D5"; break;	// vav
						/*tzadi*/	case "\u05E6": letter = "\u05D4"; break;	// hey
						/*kuf*/		case "\u05E7": letter = "\u05D3"; break;	// dalet
						/*resh*/	case "\u05E8": letter = "\u05D2"; break;	// gimel
						/*shin*/	case "\u05E9": letter = "\u05D1"; break;	// bet
						/*tav*/		case "\u05EA": letter = "\u05D0"; break;	// aleph
						/*kaf F*/	case "\u05DA": letter = "\u05DC"; break;	// lamed
						/*mem F*/	case "\u05DD": letter = "\u05D9"; break;	// yod
						/*nun F*/	case "\u05DF": letter = "\u05D8"; break;	// tet
						/*pey F*/	case "\u05E3": letter = "\u05D5"; break;	// vav
						/*tzadi F*/	case "\u05E5": letter = "\u05D4"; break;	// hey
						default: letter = input[i]; break; // Keep non-Hebrew characters as-is
					}
					textEncrypted += letter;
					
					// If the last letter in the converted string is a kaf, mem, nun, pey, or tzadi it will be converted to its final form
					if(i+1 == input.length) {
						switch(letter) {
							/*kaf*/		case "\u05DB": letter = "\u05DA"; textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1); break;	// kaf F
							/*mem*/		case "\u05DE": letter = "\u05DD"; textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1); break;	// mem F
							/*nun*/		case "\u05E0": letter = "\u05DF"; textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1); break;	// nun F
							/*pey*/		case "\u05E4": letter = "\u05E3"; textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1); break;	// pey F
							/*tzadi*/	case "\u05E6": letter = "\u05E5"; textEncrypted = textEncrypted.substring(0, textEncrypted.length - 1); break;	// tzadi F
							default: letter = ""; break;
						}
						textEncrypted += letter;
					}
				}
				
				// Calculate encrypted total and display encrypted text and sum
				calculateEncryptedTotal();
				
				// Display encrypted text
				if (/[\u05D0-\u05E5]/.test(textEncrypted)) { 
					document.getElementById('encrypted').innerHTML = `
						<div class="encrypted-label">Encrypted:</div>
						<div class="encrypted-content">
							<a style="text-decoration: none; direction: rtl;" href="https://translate.google.com/?sl=auto&tl=auto&text=${encodeURIComponent(textEncrypted)}&op=translate" target="_blank">
								<span style="color: #f2f542; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span>
							</a>
						</div>`;
				} else {
					document.getElementById('encrypted').innerHTML = `
						<div class="encrypted-label">Encrypted:</div>
						<div class="encrypted-content">
							<span style="color: #f2f542; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${textEncrypted}</span>
						</div>`;
				}
				
				// Display encrypted sum
				document.getElementById('encryptedsum').innerHTML = `En. Gematria: <span style="color: #FF8800; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 100);">${encryptedTotal.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>`;

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
						document.getElementById('verses').innerHTML = `Verses: ~<span style="color:#35ab47;font-weight:bold;text-shadow:1px 1px 2px rgba(0,0,0,1);">${verses.toLocaleString('en-US')}</span>`;
						document.getElementById('words').innerHTML = `Words: <span style="color:#025be0;font-weight:bold;text-shadow:1px 1px 2px rgba(0,0,0,1);">${words.toLocaleString('en-US')}</span>`;
						document.getElementById('letters').innerHTML = `Letters: <span style="color:#7a489c;font-weight:bold;text-shadow:1px 1px 2px rgba(0,0,0,1);">${letters.toLocaleString('en-US')}</span>`;
						document.getElementById('sum').innerHTML = `Gematria: <span style="color:#FF0000;font-weight:bold;text-shadow:1px 1px 2px rgba(0,0,0,1);">${textTotal.toLocaleString('en-US')}</span>`;
					}

					/* ---- 2.  decide how many rows we really need ---- */
					function adjustHeight() {
						const bar   = document.getElementById('statusBar');
						const boxes = Array.from(bar.querySelectorAll('.verses, .words, .letters, .sum, .encryptedsum'));
						const gap   = 5;                                              // CSS gap value
						const barW  = bar.clientWidth;
						let usedW   = 0;

						bar.classList.remove('hidden');								// make statusbar visible
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

		// Copy functionality
		copyBtn.addEventListener('click', () => {
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
		});

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

        // Variables for clear button double-click tracking
        let clearBtnLastClickTime = 0;
        const clearBtnDoubleClickDelay = 5000; // 5 seconds

        // The Clear button's functionality
		clearBtn.addEventListener('click', async () => {
			const currentTime = Date.now();
			const timeSinceLastClick = currentTime - clearBtnLastClickTime;
			
			// If clicked within 5 seconds of previous click, clear the text area completely
			if (timeSinceLastClick < clearBtnDoubleClickDelay && clearBtnLastClickTime > 0) {
				textArea.textContent = '';
				clearBtn.textHighlight = '';
				document.getElementById('verses').innerHTML = ``;
				document.getElementById('words').innerHTML = ``;
				document.getElementById('letters').innerHTML = ``;
				document.getElementById('sum').innerHTML = ``;
				document.getElementById('encrypted').innerHTML = ``;
				document.getElementById('encryptedsum').innerHTML = ``;
				availableColors = [...colors];
				
				// Clear cached file content when completely clearing the text area
				localStorage.removeItem('gemacrypt_cached_file_content');
				
				// Clear ELS modal inputs and results if modal is open
				const elsModal = document.getElementById('elsModal');
				if (elsModal) {
					const startInput = elsModal.querySelector('#startPosition');
					const seqInput = elsModal.querySelector('#sequenceNum');
					const resultsDiv = elsModal.querySelector('#elsResults');
					if (startInput) startInput.value = '';
					if (seqInput) seqInput.value = '';
					if (resultsDiv) resultsDiv.innerHTML = '';
				}
				clearBtnLastClickTime = 0; // Reset the timer
			} else {
				// First click within 5-second window - load the book file
				clearBtnLastClickTime = currentTime;
				
				// Check if currentBook is empty.txt and we have cached content
				if (currentBook === '/gemacrypt/files/books/empty.txt') {
					const cachedContent = localStorage.getItem('gemacrypt_cached_file_content');
					if (cachedContent) {
						// Load from cache instead of empty.txt
						showLoadingIndicator();
						try {
							// Apply highlighting to the cached text
							textArea.innerHTML = highlightSpecialCharacters(cachedContent);
							
							// Detect language and store in global variable
							detectedLanguage = detectLanguage(cachedContent);
							console.log('Language detected from cached content:', detectedLanguage);
						} finally {
							hideLoadingIndicator();
						}
						return; // Exit early since we used cached content
					}
				}
				
				// Load the book file from currentBook path
				try {
					showLoadingIndicator();
					let corsProxy = `${window.location.protocol}//${window.location.hostname}/`;
					let response;
					
					try {
						response = await fetch(corsProxy + currentBook);
					} catch (error) {
						console.error('Primary CORS proxy failed, trying backup:', error);
						corsProxy = 'http://radius.center/';
						response = await fetch(corsProxy + currentBook);
					}
					
					if (response.ok) {
						const text = await response.text();
						// Apply highlighting to the loaded text
						textArea.innerHTML = highlightSpecialCharacters(text);
						
						// Detect language and store in global variable
						detectedLanguage = detectLanguage(text);
						console.log('Language detected:', detectedLanguage);
					} else {
						console.error(`Error loading book file: ${response.status} - ${response.statusText}`);
					}
				} catch (error) {
					console.error('Error loading book file:', error);
				} finally {
					hideLoadingIndicator();
				}
			}
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

	    // Font size controls - commented out as .up-arrow and .down-arrow elements don't exist
	    // const upArrow = document.querySelector('.up-arrow img');
	    // ['mouseup', 'touchend'].forEach(evt =>
		// upArrow.addEventListener(evt, increaseFontSize, { passive: true })
		// );

	    // const downArrow = document.querySelector('.down-arrow img');
		// ['mouseup', 'touchend'].forEach(evt =>
		// downArrow.addEventListener(evt, decreaseFontSize, { passive: true })
		// );
	});
	</script>

<script>
// ========== localStorage for Settings ==========
(function() {
    // Save settings to localStorage
    function saveSettings() {
        const settings = {
            lightMode: document.getElementById('textArea')?.classList.contains('light-mode') || false,
            wrap: document.getElementById('textArea')?.classList.contains('horizontalScroll') === false,
            encryption: document.getElementById('encryptionSelect')?.value || 'Encryption',
            gematria: document.getElementById('gematriaSelect')?.value || 'Value',
            book: document.getElementById('bookSelect')?.value || 'Book'
        };
        localStorage.setItem('gemacryptSettings', JSON.stringify(settings));
    }
    
    // Load settings from localStorage
    function loadSettings() {
        const savedSettings = localStorage.getItem('gemacryptSettings');
        if (savedSettings) {
            try {
                const settings = JSON.parse(savedSettings);
                
                // Restore light mode
                if (settings.lightMode !== undefined) {
                    const textArea = document.getElementById('textArea');
                    if (textArea && settings.lightMode) {
                        textArea.classList.add('light-mode');
                    }
                }
                
                // Restore wrap setting
                if (settings.wrap !== undefined) {
                    const textArea = document.getElementById('textArea');
                    if (textArea && !settings.wrap) {
                        textArea.classList.add('horizontalScroll');
                    }
                }
                
                // Restore encryption selection
                if (settings.encryption && settings.encryption !== 'Encryption') {
                    const encryptionSelect = document.getElementById('encryptionSelect');
                    if (encryptionSelect) {
                        encryptionSelect.value = settings.encryption;
                    }
                }
                
                // Restore gematria selection
                if (settings.gematria && settings.gematria !== 'Value') {
                    const gematriaSelect = document.getElementById('gematriaSelect');
                    if (gematriaSelect) {
                        gematriaSelect.value = settings.gematria;
                    }
                }
                
                // Restore book selection
                if (settings.book && settings.book !== 'Book') {
                    const bookSelect = document.getElementById('bookSelect');
                    if (bookSelect) {
                        bookSelect.value = settings.book;
                    }
                }
            } catch (error) {
                console.error('Error loading settings:', error);
            }
        }
    }
    
    // Override toggleLightMode to save settings
    const originalToggleLightMode = window.toggleLightMode;
    window.toggleLightMode = function() {
        if (originalToggleLightMode) {
            originalToggleLightMode();
        }
        saveSettings();
    };
    
    // Override toggleWrap to save settings
    const originalToggleWrap = window.toggleWrap;
    window.toggleWrap = function() {
        if (originalToggleWrap) {
            originalToggleWrap();
        }
        saveSettings();
    };
    
    // Add change listeners to dropdowns
    const encryptionSelect = document.getElementById('encryptionSelect');
    if (encryptionSelect) {
        encryptionSelect.addEventListener('change', saveSettings);
    }
    
    const gematriaSelect = document.getElementById('gematriaSelect');
    if (gematriaSelect) {
        gematriaSelect.addEventListener('change', saveSettings);
    }
    
    const bookSelect = document.getElementById('bookSelect');
    if (bookSelect) {
        bookSelect.addEventListener('change', saveSettings);
    }
    
    // Load settings when page loads
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', loadSettings);
    } else {
        loadSettings();
    }
})();
</script>

<script>
// ============================================
// DRAGGABLE MODAL FUNCTIONALITY
// ============================================
// Makes modals movable by clicking and dragging on the modal header area

function makeModalDraggable(modalElement) {
    const modalContent = modalElement.querySelector('.modal-content');
    if (!modalContent) return;

    let isDragging = false;
    let startX, startY;

    // Create invisible drag handle at the top of modal (top 50px)
    // Excludes the upper right corner (60px from right) for the close button
    const dragHandle = document.createElement('div');
    dragHandle.style.cssText = `
        position: absolute;
        top: 0;
        left: 0;
        right: 60px;
        height: 50px;
        cursor: move;
        z-index: 10;
        user-select: none;
    `;
    
    // Ensure modal-content has position set
    if (getComputedStyle(modalContent).position === 'static') {
        modalContent.style.position = 'relative';
    }
    
    modalContent.insertBefore(dragHandle, modalContent.firstChild);

    // Mouse events
    dragHandle.addEventListener('mousedown', startDrag);
    document.addEventListener('mousemove', drag);
    document.addEventListener('mouseup', stopDrag);

    // Touch events for mobile
    dragHandle.addEventListener('touchstart', startDrag, { passive: false });
    document.addEventListener('touchmove', drag, { passive: false });
    document.addEventListener('touchend', stopDrag);

    function startDrag(e) {
        // Don't drag if clicking on close button or its parent elements
        if (e.target.classList.contains('close') || e.target.closest('.close')) return;
        
        isDragging = true;
        
        const clientX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
        const clientY = e.type.includes('touch') ? e.touches[0].clientY : e.clientY;
        
        const rect = modalContent.getBoundingClientRect();
        startX = clientX - rect.left;
        startY = clientY - rect.top;
        
        modalContent.style.margin = '0';
        modalContent.style.position = 'fixed';
        
        e.preventDefault();
    }

    function drag(e) {
        if (!isDragging) return;
        
        e.preventDefault();
        
        const clientX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
        const clientY = e.type.includes('touch') ? e.touches[0].clientY : e.clientY;
        
        let newLeft = clientX - startX;
        let newTop = clientY - startY;
        
        // Keep modal within viewport bounds
        const rect = modalContent.getBoundingClientRect();
        const maxLeft = window.innerWidth - rect.width;
        const maxTop = window.innerHeight - rect.height;
        
        newLeft = Math.max(0, Math.min(newLeft, maxLeft));
        newTop = Math.max(0, Math.min(newTop, maxTop));
        
        modalContent.style.left = newLeft + 'px';
        modalContent.style.top = newTop + 'px';
    }

    function stopDrag() {
        isDragging = false;
    }
}

// Auto-initialize: Make all existing modals draggable
document.addEventListener('DOMContentLoaded', function() {
    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => makeModalDraggable(modal));
    if (modals.length > 0) {
        console.log('✅ Made ' + modals.length + ' modal(s) draggable');
    }
});

// Watch for dynamically created modals (like findModal and elsModal)
const observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
        mutation.addedNodes.forEach(function(node) {
            if (node.nodeType === 1) { // Element node
                // Check if the added node is a modal
                if (node.classList && node.classList.contains('modal')) {
                    makeModalDraggable(node);
                    console.log('✅ Made dynamically created modal draggable:', node.id || 'unnamed');
                }
                // Check if any child nodes are modals
                const childModals = node.querySelectorAll && node.querySelectorAll('.modal');
                if (childModals) {
                    childModals.forEach(modal => {
                        makeModalDraggable(modal);
                        console.log('✅ Made dynamically created modal draggable:', modal.id || 'unnamed');
                    });
                }
            }
        });
    });
});

// Start observing the document body for modal additions
observer.observe(document.body, {
    childList: true,
    subtree: true
});

// Add Escape key event listener to close modals
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        // Check for findModal first
        const findModal = document.getElementById('findModal');
        if (findModal) {
            findModal.remove();
            console.log('✅ Closed findModal with Escape key');
            return;
        }
        
        // Check for elsModal
        const elsModal = document.getElementById('elsModal');
        if (elsModal) {
            elsModal.remove();
            console.log('✅ Closed elsModal with Escape key');
            return;
        }
    }
});

console.log('🎯 Draggable modal system initialized - modals can be moved by dragging the top area');
console.log('⌨️ Escape key handler initialized - press Escape to close modals');
</script>
</body>
</html>
