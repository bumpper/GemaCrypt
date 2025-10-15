<!DOCTYPE html>
<html>
<head>
    <title>AT-BaCh999 Bulk Update - Database Test</title>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f5f5f5; }
        .container { background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); max-width: 800px; }
        .success { color: #28a745; font-weight: bold; }
        .error { color: #dc3545; font-weight: bold; }
        .info { color: #17a2b8; }
        .warning { color: #ffc107; font-weight: bold; }
        pre { background-color: #f8f9fa; padding: 10px; border-radius: 4px; overflow-x: auto; }
        .status-box { background-color: #e9ecef; padding: 15px; border-radius: 4px; margin: 10px 0; }
        .button { background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; display: inline-block; margin: 10px 5px; }
        .button:hover { background-color: #0056b3; text-decoration: none; color: white; }
        .button.success { background-color: #28a745; }
        .button.warning { background-color: #ffc107; color: black; }
    </style>
</head>
<body>
    <div class="container">
        <h1>gematriaDB Database Connectivity Test</h1>
        <p>This script tests the database connection and verifies the table structure before running the bulk update.</p>
        <p><strong>Location:</strong> Running from /files/ directory</p>
        
        <?php
        /**
         * Web-friendly database connectivity test - Files directory version
         */
        
        echo "<div class='status-box'>";
        echo "<h3>Testing Database Connection...</h3>";
        
        // Database connection settings
        $servername = "localhost";
        $dbname = "gematriaDB";
        $username = "DBuser";
        $password = "NYJQZZxTbeTjwVI7";
        
        try {
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                throw new Exception("Connection failed: " . $conn->connect_error);
            }
            
            echo "<p class='success'>✓ Connected to database successfully!</p>";
            echo "<p><strong>Database:</strong> $dbname</p>";
            echo "<p><strong>Server:</strong> $servername</p>";
            
            // Test the table structure
            $result = $conn->query("DESCRIBE gematriaTable");
            if ($result) {
                echo "<p class='success'>✓ Table structure verified.</p>";
                
                $atbach999Found = false;
                $gematria2Found = false;
                
                while ($row = $result->fetch_assoc()) {
                    if ($row['Field'] == 'ATBaCh999') {
                        $atbach999Found = true;
                    }
                    if ($row['Field'] == 'gematria2ATBaCh999') {
                        $gematria2Found = true;
                    }
                }
                
                if ($atbach999Found && $gematria2Found) {
                    echo "<p class='success'>✓ Required columns found: ATBaCh999, gematria2ATBaCh999</p>";
                } else {
                    echo "<p class='error'>✗ ERROR: Required columns not found!</p>";
                    echo "<p>Looking for: ATBaCh999, gematria2ATBaCh999</p>";
                    exit(1);
                }
            } else {
                throw new Exception("Error checking table structure: " . $conn->error);
            }
            
            // Check if there are any existing records
            $result = $conn->query("SELECT COUNT(*) as count FROM gematriaTable");
            if ($result) {
                $row = $result->fetch_assoc();
                echo "<p class='info'><strong>Total records in gematriaTable:</strong> " . number_format($row['count']) . "</p>";
                
                if ($row['count'] > 0) {
                    echo "<p class='success'>✓ Database contains existing records - ready for updates</p>";
                } else {
                    echo "<p class='warning'>⚠ Database is empty - no records to update</p>";
                }
            } else {
                throw new Exception("Error counting records: " . $conn->error);
            }
            
            // Test a sample record lookup
            echo "<h4>Sample Record Test:</h4>";
            $testWord = "את";
            $testEncrypted = "טקק";
            $testGematria = 109;
            
            $stmt = $conn->prepare("SELECT word1, ATBaCh999, gematria2ATBaCh999 FROM gematriaTable WHERE word1 = ? OR original = ? LIMIT 1");
            $stmt->bind_param("ss", $testWord, $testWord);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<div style='background-color: #f8f9fa; padding: 10px; border-radius: 4px;'>";
                echo "<p><strong>Found existing record for Hebrew word '$testWord':</strong></p>";
                echo "<p><strong>Current ATBaCh999:</strong> '" . htmlspecialchars($row['ATBaCh999']) . "'</p>";
                echo "<p><strong>Current gematria2ATBaCh999:</strong> " . $row['gematria2ATBaCh999'] . "</p>";
                echo "<p><strong>Corrected ATBaCh999:</strong> '$testEncrypted'</p>";
                echo "<p><strong>Corrected gematria2ATBaCh999:</strong> $testGematria</p>";
                
                if ($row['ATBaCh999'] != $testEncrypted || $row['gematria2ATBaCh999'] != $testGematria) {
                    echo "<p class='warning'>⚠ UPDATE NEEDED: Values differ from corrected calculation.</p>";
                    $updateNeeded = true;
                } else {
                    echo "<p class='success'>✓ NO UPDATE NEEDED: Values already correct.</p>";
                    $updateNeeded = false;
                }
                echo "</div>";
            } else {
                echo "<p class='info'>ℹ No existing record found for test word '$testWord' in database.</p>";
                $updateNeeded = true;
            }
            
            $stmt->close();
            $conn->close();
            
            echo "</div>"; // Close status-box
            
            // Results and next steps
            echo "<div class='status-box'>";
            echo "<h3>Test Results Summary:</h3>";
            echo "<p class='success'>✓ Database connectivity test completed successfully!</p>";
            echo "<p>The bulk update script is ready to run.</p>";
            
            if (isset($updateNeeded) && $updateNeeded) {
                echo "<p class='info'>Updates are needed for values in the database.</p>";
            }
            
            echo "</div>";
            
            // Navigation buttons
            echo "<h3>Next Steps:</h3>";
            echo "<a href='DB_test_all_algorithms.php' class='button'>Test All Algorithms</a>";
            echo "<a href='DB_comprehensive_gematria_bulk_update.php?dry-run=1' class='button warning'>Run Dry-Run Test</a>";
            echo "<a href='DB_comprehensive_gematria_bulk_update.php' class='button success'>Run Full Update</a>";
            echo "<a href='../app1.php' class='button'>Return to Main App</a>";
            
        } catch (Exception $e) {
            echo "<p class='error'>✗ Database Error: " . htmlspecialchars($e->getMessage()) . "</p>";
            echo "</div>"; // Close status-box
            
            echo "<div class='status-box'>";
            echo "<h3>Troubleshooting:</h3>";
            echo "<ul>";
            echo "<li>Check that MySQL/MariaDB is running</li>";
            echo "<li>Verify database credentials are correct</li>";
            echo "<li>Ensure the gematriaDB database exists</li>";
            echo "<li>Check that the gematriaTable table exists</li>";
            echo "</ul>";
            echo "</div>";
        }
        ?>
        
        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #dee2e6;">
            <p><small><strong>Note:</strong> This test connects to the database using the same credentials as the main application. 
            If this test passes, the bulk update script should work correctly.</small></p>
            <p><small><strong>File Location:</strong> This script is running from the /files/ directory and will read dictionary.txt from the same location.</small></p>
        </div>
    </div>
</body>
</html>