<!DOCTYPE html>
<html>
<head>
	<link rel="SHORTCUT ICON" href="favicon.png" />
    <title>Gematria Matches - GemaCrypt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            padding-bottom: 20px; /* Space for floating scrollbar */
            background-color: #444; /* Same as app1.php */
            color: #ffffff;
        }
        .container {
            max-width: 100%;
            margin: 0;
            background: transparent;
            padding: 5px 10px 10px 10px; /* Reduced top padding from 20px to 5px */
        }
        h1 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 20px;
            display: none; /* Hide the title */
        }
        .loading {
            text-align: center;
            font-size: 18px;
            color: #ccc;
            margin: 10px 0; /* Reduced margin from 20px to 10px */
        }
        
        /* Table styling to match insert.php - but remove borders */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            background-color: transparent;
        }
        
        th, td {
            padding: 3px;
            border: 1px solid #666;
            text-align: center;
            vertical-align: middle;
        }
        
        th {
            font-weight: bold;
            color: #fff;
            position: sticky;
            top: 0;
            z-index: 10;
        }
        
        .small-font {
            font-size: 12px;
        }
        
        a {
            color: #ffffff;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        /* Input fields */
        .input-section {
            margin: 5px 0; /* Reduced margin from 20px to 5px */
            text-align: center;
        }
        
        .input-section input[type="text"] {
            padding: 10px;
            margin: 5px;
            background-color: #555;
            border: 1px solid #666;
            color: #fff;
            font-size: 16px;
            border-radius: 4px;
            width: 300px;
            text-align: center;
        }
        
        .input-section button {
            padding: 10px 20px;
            margin: 5px;
            background-color: #0282b5;
            border: 1px solid #666;
            color: #fff;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .input-section button:hover {
            background-color: #0369a0;
        }
        
        /* Keep scrollbars always visible */
        html, body {
            overflow: auto;
        }
        
        /* Floating horizontal scrollbar at bottom of viewport */
        .horizontal-scroll-wrapper {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            background-color: #444;
            border-top: 1px solid #666;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.3);
        }
        
        .horizontal-scroll-content {
            height: 20px;
            background: transparent;
        }
        
        /* Remove inner scrollbar - let page scroll naturally */
        .table-wrapper {
            width: 100%;
            margin: 0;
            padding: 0;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gematria Matches</h1>
        
        <div class="input-section">
            <input type="text" id="inputText" placeholder="Enter Hebrew text or gematria value..." />
            <button onclick="calculateGematria()">Calculate Matches</button>
        </div>
        
        <div class="loading" id="loadingMessage">Enter text above to see gematria matches.</div>
    </div>
    
    <!-- Sticky horizontal scrollbar -->
    <div class="horizontal-scroll-wrapper" id="horizontalScrollWrapper" style="display: none;">
        <div class="horizontal-scroll-content" id="horizontalScrollContent"></div>
    </div>
    
    <div class="table-wrapper" id="results">
        <!-- Results will be populated here -->
    </div>

    <script>
        // Function to get URL parameters
        function getURLParameter(name) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(name);
        }
        
        // Function to calculate gematria and find matches
        function calculateGematria(wordParam, gematriaParam) {
            let inputText;
            let gematriaValue;
            
            // Use provided parameters or get from input field
            if (wordParam !== undefined && wordParam !== null) {
                inputText = wordParam;
                document.getElementById('inputText').value = inputText;
            } else {
                inputText = document.getElementById('inputText').value.trim();
            }
            
            if (gematriaParam !== undefined && gematriaParam !== null) {
                gematriaValue = gematriaParam;
            } else {
                gematriaValue = inputText;
            }
            
            if (!inputText && !gematriaValue) {
                alert('Please enter some text or a gematria value.');
                return;
            }
            
            document.getElementById('loadingMessage').innerHTML = 'Calculating matches...';
            document.getElementById('results').innerHTML = '';
            
            // Send AJAX request to get gematria matches
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'insert.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    document.getElementById('loadingMessage').style.display = 'none';
                    if (xhr.status === 200) {
                        // Extract just the table content from the response
                        let response = xhr.responseText;
                        
                        // Remove the outer div wrapper that insert.php adds
                        let tempDiv = document.createElement('div');
                        tempDiv.innerHTML = response;
                        
                        // Find the table inside the response
                        let table = tempDiv.querySelector('table');
                        
                        if (table) {
                            // Insert just the table content
                            document.getElementById('results').innerHTML = table.outerHTML;
                            
                            // Setup horizontal scrollbar synchronization
                            setupHorizontalScrollSync();
                        } else {
                            // If no table found, show the raw response
                            document.getElementById('results').innerHTML = response;
                        }
                    } else {
                        document.getElementById('results').innerHTML = '<p style="color: #ff6666;">Error loading gematria matches. Please try again.</p>';
                    }
                }
            };
            
            // For numeric gematria values, use them directly
            let finalGematriaValue = gematriaValue;
            if (isNaN(gematriaValue)) {
                // If it's not a number, we need to calculate the gematria value
                // For now, we'll assume it's already calculated and passed via URL
                if (gematriaParam) {
                    finalGematriaValue = gematriaParam;
                } else {
                    alert('Please enter a numeric gematria value for now. Full Hebrew text calculation will be added soon.');
                    document.getElementById('loadingMessage').innerHTML = 'Enter text above to see gematria matches.';
                    return;
                }
            }
            
            // Send minimal data to trigger the database lookup
            const data = `original=${encodeURIComponent(inputText)}&word1=${encodeURIComponent(inputText)}&gematria1=${finalGematriaValue}&summation=&letterCount=0&wordCount=0&paths=0&gatesTotal=0&skip=&gematriaSkip=0&leap=&gematriaLeap=0&reverse=&gematriaReversed=0&elision=&gematriaElision=0&backexch=&gematriaAvgadBE=0&forexch=&gematriaAvgadFE=0&acronym=&gematriaAcronym=0&sofim=&gematriaSofit=0&gematriaMiluy=0&textAB=&gematriaAB=0&textSaG=&gematriaSaG=0&textMaH=&gematriaMaH=0&textBaN=&gematriaBaN=0&RagilValue=0&KolelValue=0&Kolel1Value=0&HaKlaliValue=0&ReducedlValue=0&IntegralReducedlValue=0&KatanValue=0&OrdinalValue=0&HaKadmiValue=0&HaPeratiValue=0&AYiKBeCheR=&gematria2AYiKBeCheR=0&ATBaSh=&gematria2ATBaSh=0&ALBaM=&gematria2ALBaM=0&AChBI=&gematria2AChBI=0&AChaSBeTA=&gematria2AChaSBeTA=0&ATBaCh=&gematria2ATBaCh=0&ATBaCh999=&gematria2ATBaCh999=0&AiYBaK=&gematria2AiYBaK=0&ATzBaPh=&gematria2ATzBaPh=0&ALBeTh=&gematria2ALBeTh=0&Ofanim=&gematria2Ofanim=0&AltATBaSh=&gematria2AltATBaSh=0&AltAShBaR=&gematria2AltAShBaR=0&AltARBaK=&gematria2AltARBaK=0&AltAQBeTz=&gematria2AltAQBeTz=0&AltEZBePh=&gematria2AltEZBePh=0&AltAPBE=&gematria2AltAPBE=0&AltAEBaS=&gematria2AltAEBaS=0&AltASBeN=&gematria2AltASBeN=0&AltANBaM=&gematria2AltANBaM=0&AltAMBeL=&gematria2AltAMBeL=0&AltELBaCh=&gematria2AltELBaCh=0&AltAChBI=&gematria2AltAChBI=0&AltAIBeT=&gematria2AltAIBeT=0&AltATBaCh=&gematria2AltATBaCh=0&AltAChBaZ=&gematria2AltAChBaZ=0&AltAZBO=&gematria2AltAZBO=0&AltAVBaH=&gematria2AltAVBaH=0&AltAHBaD=&gematria2AltAHBaD=0&AltADBeG=&gematria2AltADBeG=0&AltAGBaB=&gematria2AltAGBaB=0&AltABBA=&gematria2AltABBA=0&AltAAhBaT=&gematria2AltAAhBaT=0&AltABBaG=&gematria2AltABBaG=0&AltAGBaD=&gematria2AltAGBaD=0&AltADBaH=&gematria2AltADBaH=0&AltAHBeV=&gematria2AltAHBeV=0&AltAVBeZ=&gematria2AltAVBeZ=0&AltAZBeCh=&gematria2AltAZBeCh=0&AltAChBeT=&gematria2AltAChBeT=0&AltATBI=&gematria2AltATBI=0&AltAIBech=&gematria2AltAIBech=0&AltAChBeL=&gematria2AltAChBeL=0&AltELBaM=&gematria2AltELBaM=0&AltAMBeN=&gematria2AltAMBeN=0&AltANBeS=&gematria2AltANBeS=0&AltASBA=&gematria2AltASBA=0&AltAABaPh=&gematria2AltAABaPh=0&AltAPhBaTz=&gematria2AltAPhBaTz=0&AltATzBeQ=&gematria2AltATzBeQ=0&AltAKBaR=&gematria2AltAKBaR=0&AltARBeSh=&gematria2AltARBeSh=0&AltAShBeT=&gematria2AltAShBeT=0&AltATBaH=&gematria2AltATBaH=0`;
            
            xhr.send(data);
        }
        
        // Allow Enter key to trigger calculation
        document.getElementById('inputText').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                calculateGematria();
            }
        });
        
        // Function to setup horizontal scroll synchronization
        function setupHorizontalScrollSync() {
            const tableWrapper = document.getElementById('results');
            const horizontalScrollWrapper = document.getElementById('horizontalScrollWrapper');
            const horizontalScrollContent = document.getElementById('horizontalScrollContent');
            const table = tableWrapper.querySelector('table');
            
            if (table) {
                // Set the width of the scroll content to match the table width
                horizontalScrollContent.style.width = table.scrollWidth + 'px';
                
                // Show the horizontal scrollbar if table is wider than viewport
                if (table.scrollWidth > window.innerWidth) {
                    horizontalScrollWrapper.style.display = 'block';
                    
                    // Sync scrolling from top scrollbar to table
                    horizontalScrollWrapper.addEventListener('scroll', function() {
                        tableWrapper.scrollLeft = horizontalScrollWrapper.scrollLeft;
                    });
                    
                    // Sync scrolling from table to top scrollbar
                    tableWrapper.addEventListener('scroll', function() {
                        horizontalScrollWrapper.scrollLeft = tableWrapper.scrollLeft;
                    });
                } else {
                    horizontalScrollWrapper.style.display = 'none';
                }
            }
        }
        
        // Check for URL parameters and auto-run calculation
        document.addEventListener('DOMContentLoaded', function() {
            const wordParam = getURLParameter('word');
            const gematriaParam = getURLParameter('gematria');
            
            if (wordParam || gematriaParam) {
                // Auto-calculate with URL parameters
                calculateGematria(wordParam, gematriaParam);
            } else {
                // Set focus to input field when page loads (if no auto-calculation)
                document.getElementById('inputText').focus();
            }
        });
    </script>
</body>
</html>