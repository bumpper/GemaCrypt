<!DOCTYPE html>
<html>
<head>
    <title>AT-BaCh999 Bulk Update - Files Directory</title>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f5f5f5; }
        .container { background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); max-width: 1000px; }
        .success { color: #28a745; font-weight: bold; }
        .error { color: #dc3545; font-weight: bold; }
        .info { color: #17a2b8; }
        .warning { color: #ffc107; font-weight: bold; }
        .status-box { background-color: #e9ecef; padding: 15px; border-radius: 4px; margin: 10px 0; }
        .progress-container { background-color: #f8f9fa; border: 1px solid #dee2e6; border-radius: 4px; padding: 20px; margin: 20px 0; }
        .progress-bar { background-color: #e9ecef; height: 20px; border-radius: 10px; overflow: hidden; margin: 10px 0; }
        .progress-fill { background-color: #28a745; height: 100%; transition: width 0.5s ease; }
        .button { background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; display: inline-block; margin: 10px 5px; border: none; cursor: pointer; }
        .button:hover { background-color: #0056b3; }
        .button.danger { background-color: #dc3545; }
        .button.success { background-color: #28a745; }
        .button.warning { background-color: #ffc107; color: black; }
        .button:disabled { background-color: #6c757d; cursor: not-allowed; }
        .log-output { background-color: #f8f9fa; border: 1px solid #dee2e6; border-radius: 4px; padding: 10px; max-height: 400px; overflow-y: auto; font-family: monospace; font-size: 12px; }
        .confirmation-box { background-color: #fff3cd; border: 1px solid #ffeaa7; border-radius: 4px; padding: 15px; margin: 20px 0; }
        #real-time-log { white-space: pre-wrap; }
    </style>
    <script>
        let updateRunning = false;
        let logDiv = null;
        
        function startUpdate(isDryRun = false) {
            if (updateRunning) {
                alert('Update is already running!');
                return;
            }
            
            const confirmation = isDryRun ? 
                'Start dry-run test? This will scan the dictionary without making database changes.' :
                'Are you sure you want to start the full database update? This will modify records in the gematriaTable.';
                
            if (!confirm(confirmation)) {
                return;
            }
            
            updateRunning = true;
            logDiv = document.getElementById('real-time-log');
            logDiv.innerHTML = '';
            
            document.getElementById('progress-container').style.display = 'block';
            document.getElementById('start-button').disabled = true;
            document.getElementById('dry-run-button').disabled = true;
            
            // Start the update via AJAX
            const xhr = new XMLHttpRequest();
            const mode = isDryRun ? 'dry-run' : 'update';
            xhr.open('POST', 'DB_bulk_atbach999_update_files.php?ajax=1&mode=' + mode, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            
            let lastPosition = 0;
            
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 3 || xhr.readyState === 4) {
                    // Process new data
                    const newData = xhr.responseText.substr(lastPosition);
                    lastPosition = xhr.responseText.length;
                    
                    if (newData) {
                        processUpdateResponse(newData);
                    }
                    
                    if (xhr.readyState === 4) {
                        updateRunning = false;
                        document.getElementById('start-button').disabled = false;
                        document.getElementById('dry-run-button').disabled = false;
                        logDiv.innerHTML += '\n=== Update completed ===\n';
                    }
                }
            };
            
            xhr.send();
        }
        
        function processUpdateResponse(data) {
            // Look for progress updates and log messages
            const lines = data.split('\n');
            for (let line of lines) {
                if (line.trim()) {
                    if (line.includes('PROGRESS:')) {
                        const match = line.match(/PROGRESS:(\d+):(\d+):(.+)/);
                        if (match) {
                            const [, current, total, message] = match;
                            updateProgress(parseInt(current), parseInt(total), message);
                        }
                    } else if (line.includes('LOG:')) {
                        const logMessage = line.replace('LOG:', '');
                        logDiv.innerHTML += logMessage + '\n';
                        logDiv.scrollTop = logDiv.scrollHeight;
                    }
                }
            }
        }
        
        function updateProgress(current, total, message) {
            const percentage = (current / total) * 100;
            document.getElementById('progress-fill').style.width = percentage + '%';
            document.getElementById('progress-text').textContent = `${current}/${total} (${percentage.toFixed(1)}%) - ${message}`;
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>AT-BaCh999 Bulk Database Update</h1>
        <p>This script will process Hebrew words from dictionary.txt and update their AT-BaCh999 encryption values in the gematriaDB database.</p>
        <p><strong>Location:</strong> Running from /files/ directory</p>
        
        <?php
        /**
         * Bulk AT-BaCh999 update script with web interface - Files directory version
         */
        
        // Check if this is an AJAX request for real-time updates
        if (isset($_GET['ajax']) && $_GET['ajax'] == '1') {
            ob_end_clean();
            header('Content-Type: text/plain');
            ob_implicit_flush(true);
            ob_start();
            
            $mode = $_GET['mode'] ?? 'dry-run';
            runBulkUpdate($mode === 'update');
            exit;
        }
        
        function applyATBaCh999($hebrew) {
            $atbachMap = array(
                // First group (9 letters): א-ט ↔ ט-א
                'א' => 'ט', 'ב' => 'ח', 'ג' => 'ז', 'ד' => 'ו', 'ה' => 'ה',
                'ו' => 'ד', 'ז' => 'ג', 'ח' => 'ב', 'ט' => 'א',
                
                // Second group (9 letters): י-צ ↔ צ-י  
                'י' => 'צ', 'כ' => 'פ', 'ל' => 'ע', 'מ' => 'ס', 'נ' => 'נ',
                'ס' => 'מ', 'ע' => 'ל', 'פ' => 'כ', 'צ' => 'י',
                
                // Third group (9 letters): ק-ת ↔ ת-ק
                'ק' => 'ת', 'ר' => 'ש', 'ש' => 'ר', 'ת' => 'ק',
                
                // Final forms (based on app1.php lines 4425-4429)
                'ך' => 'ץ', 'ם' => 'ף', 'ן' => 'ן', 'ף' => 'ם', 'ץ' => 'ך'
            );
            
            $result = '';
            for ($i = 0; $i < mb_strlen($hebrew, 'UTF-8'); $i++) {
                $char = mb_substr($hebrew, $i, 1, 'UTF-8');
                if (isset($atbachMap[$char])) {
                    $result .= $atbachMap[$char];
                } else {
                    $result .= $char; // Keep non-Hebrew characters as-is
                }
            }
            
            return $result;
        }
        
        function calculateGematria($hebrew) {
            $gematriaMap = array(
                'א' => 1, 'ב' => 2, 'ג' => 3, 'ד' => 4, 'ה' => 5, 'ו' => 6, 'ז' => 7, 'ח' => 8, 'ט' => 9,
                'י' => 10, 'כ' => 20, 'ל' => 30, 'מ' => 40, 'נ' => 50, 'ס' => 60, 'ע' => 70, 'פ' => 80, 'צ' => 90,
                'ק' => 100, 'ר' => 200, 'ש' => 300, 'ת' => 400,
                'ך' => 500, 'ם' => 600, 'ן' => 700, 'ף' => 800, 'ץ' => 900
            );
            
            $total = 0;
            for ($i = 0; $i < mb_strlen($hebrew, 'UTF-8'); $i++) {
                $char = mb_substr($hebrew, $i, 1, 'UTF-8');
                if (isset($gematriaMap[$char])) {
                    $total += $gematriaMap[$char];
                }
            }
            
            return $total;
        }
        
        function isHebrew($text) {
            // Remove common Unicode control characters and spaces
            $cleanText = preg_replace('/[\x{200E}\x{200F}\x{202A}-\x{202E}\s]/u', '', $text);
            
            if (empty($cleanText)) {
                return false;
            }
            
            // Check if the text contains Hebrew characters (U+05D0 to U+05EA)
            return preg_match('/[\x{05D0}-\x{05EA}]/u', $cleanText);
        }
        
        function cleanHebrewText($text) {
            // Remove RTL/LTR marks and other control characters, but keep Hebrew letters
            return preg_replace('/[\x{200E}\x{200F}\x{202A}-\x{202E}]/u', '', trim($text));
        }
        
        function sendProgress($current, $total, $message) {
            echo "PROGRESS:$current:$total:$message\n";
            flush();
        }
        
        function sendLog($message) {
            echo "LOG:$message\n";
            flush();
        }
        
        function runBulkUpdate($actualUpdate = false) {
            $mode = $actualUpdate ? 'UPDATE' : 'DRY-RUN';
            sendLog("=== Starting $mode Mode ===");
            
            // Database connection
            $servername = "localhost";
            $dbname = "gematriaDB";
            $username = "DBuser";
            $password = "NYJQZZxTbeTjwVI7";
            
            try {
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    throw new Exception("Connection failed: " . $conn->connect_error);
                }
                sendLog("✓ Connected to database successfully");
                
                // Read dictionary file from same directory
                $dictionaryFile = 'dictionary.txt';
                if (!file_exists($dictionaryFile)) {
                    throw new Exception("Dictionary file not found: $dictionaryFile");
                }
                
                sendLog("✓ Dictionary file found: $dictionaryFile");
                
                // Get file info
                $fileSize = filesize($dictionaryFile);
                $totalLines = count(file($dictionaryFile));
                sendLog("📄 File size: " . number_format($fileSize) . " bytes, Total lines: " . number_format($totalLines));
                
                // Open file for reading
                $handle = fopen($dictionaryFile, 'r');
                if (!$handle) {
                    throw new Exception("Could not open dictionary file");
                }
                
                $lineNumber = 0;
                $hebrewWordsFound = 0;
                $wordsUpdated = 0;
                $wordsSkipped = 0;
                $errors = 0;
                $batchSize = 100; // Process in batches
                $batchCount = 0;
                
                sendLog("🔍 Scanning for Hebrew words...");
                
                while (($line = fgets($handle)) !== false) {
                    $lineNumber++;
                    
                    // Send progress every 1000 lines
                    if ($lineNumber % 1000 == 0) {
                        sendProgress($lineNumber, $totalLines, "Scanning line $lineNumber");
                    }
                    
                    $word = trim($line);
                    if (empty($word)) {
                        continue;
                    }
                    
                    // Check if this line contains Hebrew text
                    if (isHebrew($word)) {
                        $hebrewWordsFound++;
                        
                        // Clean the Hebrew text
                        $cleanWord = cleanHebrewText($word);
                        
                        if (empty($cleanWord)) {
                            sendLog("⚠ Empty word after cleaning on line $lineNumber: '$word'");
                            $wordsSkipped++;
                            continue;
                        }
                        
                        // Calculate AT-BaCh999 values
                        $atbachResult = applyATBaCh999($cleanWord);
                        $gematriaValue = calculateGematria($atbachResult);
                        
                        // Log first few Hebrew words for verification
                        if ($hebrewWordsFound <= 5) {
                            sendLog("📝 Hebrew word #$hebrewWordsFound: '$cleanWord' → '$atbachResult' (gematria: $gematriaValue)");
                        }
                        
                        if ($actualUpdate) {
                            // Check if record exists and update it
                            $stmt = $conn->prepare("UPDATE gematriaTable SET ATBaCh999 = ?, gematria2ATBaCh999 = ? WHERE word1 = ? OR original = ?");
                            $stmt->bind_param("siss", $atbachResult, $gematriaValue, $cleanWord, $cleanWord);
                            
                            if ($stmt->execute()) {
                                if ($stmt->affected_rows > 0) {
                                    $wordsUpdated++;
                                } else {
                                    $wordsSkipped++;
                                    if ($hebrewWordsFound <= 10) {
                                        sendLog("ℹ No existing record found for: '$cleanWord'");
                                    }
                                }
                            } else {
                                $errors++;
                                sendLog("❌ Error updating '$cleanWord': " . $stmt->error);
                            }
                            
                            $stmt->close();
                        }
                        
                        // Process in batches to avoid timeout
                        $batchCount++;
                        if ($batchCount >= $batchSize) {
                            if ($actualUpdate) {
                                sendLog("💾 Processed batch of $batchSize words. Total updated: $wordsUpdated, skipped: $wordsSkipped");
                            }
                            $batchCount = 0;
                            usleep(10000); // Brief pause to prevent timeout
                        }
                    }
                }
                
                fclose($handle);
                $conn->close();
                
                // Final results
                sendProgress($totalLines, $totalLines, "Scan completed");
                sendLog("=== FINAL RESULTS ===");
                sendLog("📊 Total lines processed: " . number_format($lineNumber));
                sendLog("🔤 Hebrew words found: " . number_format($hebrewWordsFound));
                
                if ($actualUpdate) {
                    sendLog("✅ Records updated: " . number_format($wordsUpdated));
                    sendLog("⏭ Records skipped (not found in DB): " . number_format($wordsSkipped));
                    sendLog("❌ Errors: " . number_format($errors));
                } else {
                    sendLog("ℹ This was a dry-run - no database changes were made");
                    sendLog("📈 Estimated updates if run in update mode: ~" . number_format($hebrewWordsFound * 0.8) . " (assuming 80% match rate)");
                }
                
                sendLog("=== Update completed successfully ===");
                
            } catch (Exception $e) {
                sendLog("❌ ERROR: " . $e->getMessage());
            }
        }
        
        // Show the interface
        echo "<div class='status-box'>";
        echo "<h3>Bulk Update Configuration</h3>";
        echo "<p><strong>Database:</strong> gematriaDB.gematriaTable</p>";
        echo "<p><strong>Dictionary file:</strong> /files/dictionary.txt</p>";
        echo "<p><strong>Columns to update:</strong> ATBaCh999, gematria2ATBaCh999</p>";
        echo "<p><strong>Algorithm:</strong> AT-BaCh999 encryption with corrected implementation</p>";
        echo "</div>";
        
        // Check if dry-run mode was requested via URL
        $isDryRun = isset($_GET['dry-run']) && $_GET['dry-run'] == '1';
        
        if ($isDryRun) {
            echo "<div class='confirmation-box'>";
            echo "<h3>🧪 Dry-Run Mode Selected</h3>";
            echo "<p>This will scan the dictionary file and show what would be updated without making any database changes.</p>";
            echo "<p>This is recommended before running the full update.</p>";
            echo "</div>";
        } else {
            echo "<div class='confirmation-box'>";
            echo "<h3>⚠️ WARNING: Full Database Update Mode</h3>";
            echo "<p><strong>This will modify records in your database!</strong></p>";
            echo "<p>Make sure you have a database backup before proceeding.</p>";
            echo "<p>Consider running the dry-run test first to preview what will be changed.</p>";
            echo "</div>";
        }
        
        echo "<div id='progress-container' class='progress-container' style='display: none;'>";
        echo "<h3>Update Progress</h3>";
        echo "<div class='progress-bar'>";
        echo "<div id='progress-fill' class='progress-fill' style='width: 0%;'></div>";
        echo "</div>";
        echo "<p id='progress-text'>Waiting to start...</p>";
        echo "<div class='log-output'>";
        echo "<div id='real-time-log'></div>";
        echo "</div>";
        echo "</div>";
        
        // Control buttons
        echo "<h3>Actions:</h3>";
        echo "<button id='dry-run-button' class='button warning' onclick='startUpdate(true)'>🧪 Start Dry-Run Test</button>";
        echo "<button id='start-button' class='button " . ($isDryRun ? 'warning' : 'danger') . "' onclick='startUpdate(" . ($isDryRun ? 'true' : 'false') . ")'>";
        echo $isDryRun ? "🧪 Start Dry-Run" : "🚀 Start Full Update";
        echo "</button>";
        
        echo "<h3>Navigation:</h3>";
        echo "<a href='DB_test_database_files.php' class='button'>Test Database</a>";
        echo "<a href='DB_test_atbach999_files.php' class='button'>Test Algorithm</a>";
        echo "<a href='DB_bulk_atbach999_update_files.php?dry-run=1' class='button warning'>Dry-Run Mode</a>";
        echo "<a href='DB_bulk_atbach999_update_files.php' class='button success'>Full Update Mode</a>";
        echo "<a href='../app1.php' class='button'>Return to Main App</a>";
        ?>
        
        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #dee2e6;">
            <p><small><strong>Note:</strong> This script reads dictionary.txt from the same /files/ directory and updates the gematriaDB database. 
            The process includes real-time progress tracking and can handle large files safely.</small></p>
            <p><small><strong>Estimated time:</strong> 5-15 minutes for ~100,000 words, depending on server performance.</small></p>
            <p><small><strong>Safety features:</strong> Dry-run mode, batch processing, error handling, and progress tracking.</small></p>
        </div>
    </div>
</body>
</html>