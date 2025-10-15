<!DOCTYPE html>
<html>
<head>
    <title>AT-BaCh999 Algorithm Test</title>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f5f5f5; }
        .container { background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); max-width: 1000px; }
        .success { color: #28a745; font-weight: bold; }
        .error { color: #dc3545; font-weight: bold; }
        .info { color: #17a2b8; }
        .warning { color: #ffc107; font-weight: bold; }
        table { border-collapse: collapse; width: 100%; margin: 20px 0; }
        th, td { border: 1px solid #dee2e6; padding: 8px; text-align: left; }
        th { background-color: #f8f9fa; font-weight: bold; }
        .hebrew { font-size: 18px; font-weight: bold; direction: rtl; }
        .status-box { background-color: #e9ecef; padding: 15px; border-radius: 4px; margin: 10px 0; }
        .button { background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; display: inline-block; margin: 10px 5px; }
        .button:hover { background-color: #0056b3; text-decoration: none; color: white; }
        .button.success { background-color: #28a745; }
        .button.warning { background-color: #ffc107; color: black; }
        .code-sample { background-color: #f8f9fa; padding: 10px; border-radius: 4px; font-family: monospace; margin: 10px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>AT-BaCh999 Algorithm Test</h1>
        <p>This script tests the AT-BaCh999 encryption algorithm implementation before running the bulk update.</p>
        <p><strong>Location:</strong> Running from /files/ directory</p>
        
        <?php
        /**
         * Test the AT-BaCh999 algorithm implementation - Files directory version
         */
        
        // AT-BaCh999 function implementation (based on the algorithm from app1.php)
        function applyATBaCh999($hebrew) {
            // Hebrew character mappings for AT-BaCh999
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
        
        // Gematria calculation function
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
        
        echo "<div class='status-box'>";
        echo "<h3>Algorithm Implementation Test</h3>";
        
        // Test cases based on app1.php implementation
        $testCases = array(
            array('word' => 'את', 'expectedATBaCh' => 'טק', 'expectedGematria' => 109),
            array('word' => 'בן', 'expectedATBaCh' => 'חן', 'expectedGematria' => 708),
            array('word' => 'שלום', 'expectedATBaCh' => 'רעדף', 'expectedGematria' => 1074),
            // Test cases with final letters
            array('word' => 'מלך', 'expectedATBaCh' => 'סעץ', 'expectedGematria' => 1030),
            array('word' => 'עם', 'expectedATBaCh' => 'לף', 'expectedGematria' => 830),
        );
        
        echo "<table>";
        echo "<tr><th>Hebrew Word</th><th>Expected AT-BaCh999</th><th>Calculated AT-BaCh999</th><th>Match?</th><th>Expected Gematria</th><th>Calculated Gematria</th><th>Match?</th></tr>";
        
        $allTestsPassed = true;
        
        foreach ($testCases as $test) {
            $calculatedATBaCh = applyATBaCh999($test['word']);
            $calculatedGematria = calculateGematria($calculatedATBaCh);
            
            $atbachMatch = ($calculatedATBaCh === $test['expectedATBaCh']);
            $gematriaMatch = ($calculatedGematria === $test['expectedGematria']);
            
            if (!$atbachMatch || !$gematriaMatch) {
                $allTestsPassed = false;
            }
            
            echo "<tr>";
            echo "<td class='hebrew'>" . htmlspecialchars($test['word']) . "</td>";
            echo "<td class='hebrew'>" . htmlspecialchars($test['expectedATBaCh']) . "</td>";
            echo "<td class='hebrew'>" . htmlspecialchars($calculatedATBaCh) . "</td>";
            echo "<td class='" . ($atbachMatch ? 'success' : 'error') . "'>" . ($atbachMatch ? '✓' : '✗') . "</td>";
            echo "<td>" . $test['expectedGematria'] . "</td>";
            echo "<td>" . $calculatedGematria . "</td>";
            echo "<td class='" . ($gematriaMatch ? 'success' : 'error') . "'>" . ($gematriaMatch ? '✓' : '✗') . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
        
        if ($allTestsPassed) {
            echo "<p class='success'>✓ All algorithm tests passed! The implementation is correct.</p>";
        } else {
            echo "<p class='error'>✗ Some tests failed. Check the algorithm implementation.</p>";
        }
        
        echo "</div>";
        
        // Display the algorithm mapping
        echo "<div class='status-box'>";
        echo "<h3>AT-BaCh999 Character Mapping</h3>";
        echo "<p>The algorithm uses the following Hebrew letter transformations:</p>";
        
        echo "<table style='font-size: 14px;'>";
        echo "<tr><th>Group</th><th>Original → Transformed</th></tr>";
        echo "<tr><td><strong>Group 1 (1-9)</strong></td><td class='hebrew'>א→ט, ב→ח, ג→ז, ד→ו, ה→ה, ו→ד, ז→ג, ח→ב, ט→א</td></tr>";
        echo "<tr><td><strong>Group 2 (10-90)</strong></td><td class='hebrew'>י→צ, כ→פ, ל→ע, מ→ס, נ→נ, ס→מ, ע→ל, פ→כ, צ→י</td></tr>";
        echo "<tr><td><strong>Group 3 (100-400)</strong></td><td class='hebrew'>ק→ת, ר→ש, ש→ר, ת→ק</td></tr>";
        echo "<tr><td><strong>Finals (500-900)</strong></td><td class='hebrew'>ך→ץ, ם→ף, ן→ן, ף→ם, ץ→ך</td></tr>";
        echo "</table>";
        echo "</div>";
        
        // Show a practical example
        echo "<div class='status-box'>";
        echo "<h3>Step-by-Step Examples</h3>";
        echo "<p><strong>Example 1: שלום (shalom - peace):</strong></p>";
        echo "<div class='code-sample'>";
        echo "Original word: שלום<br>";
        echo "Character 1: ש (shin) → ר (resh) [Group 3 mapping: ש→ר]<br>";
        echo "Character 2: ל (lamed) → ע (ayin) [Group 2 mapping: ל→ע]<br>";
        echo "Character 3: ו (vav) → ד (dalet) [Group 1 mapping: ו→ד]<br>";
        echo "Character 4: ם (mem final) → ף (pey final) [Final form mapping: ם→ף]<br>";
        echo "Result: רעדף<br>";
        echo "Gematria: ר(200) + ע(70) + ד(4) + ף(800) = 1074<br>";
        echo "</div>";
        
        echo "<p><strong>Example 2: מלך (melech - king):</strong></p>";
        echo "<div class='code-sample'>";
        echo "Original word: מלך<br>";
        echo "Character 1: מ (mem) → ס (samech) [Group 2 mapping: מ→ס]<br>";
        echo "Character 2: ל (lamed) → ע (ayin) [Group 2 mapping: ל→ע]<br>";
        echo "Character 3: ך (kaf final) → ץ (tzadi final) [Final form mapping: ך→ץ]<br>";
        echo "Result: סעץ<br>";
        echo "Gematria: ס(60) + ע(70) + ץ(900) = 1030<br>";
        echo "</div>";
        
        echo "<p><strong>Example 3: בן (ben - son):</strong></p>";
        echo "<div class='code-sample'>";
        echo "Original word: בן<br>";
        echo "Character 1: ב (bet) → ח (chet) [Group 1 mapping: ב→ח]<br>";
        echo "Character 2: ן (nun final) → ן (nun final) [Final form mapping: ן→ן]<br>";
        echo "Result: חן<br>";
        echo "Gematria: ח(8) + ן(700) = 708<br>";
        echo "</div>";
        
        echo "<p><strong>Example 4: עם (am - people):</strong></p>";
        echo "<div class='code-sample'>";
        echo "Original word: עם<br>";
        echo "Character 1: ע (ayin) → ל (lamed) [Group 2 mapping: ע→ל]<br>";
        echo "Character 2: ם (mem final) → ף (pey final) [Final form mapping: ם→ף]<br>";
        echo "Result: לף<br>";
        echo "Gematria: ל(30) + ף(800) = 830<br>";
        echo "</div>";
        
        // Debug the מלך case
        $debugWord = 'מלך';
        echo "<p><strong>Debug trace for 'מלך':</strong></p>";
        echo "<div class='code-sample'>";
        echo "Word length: " . mb_strlen($debugWord, 'UTF-8') . " characters<br>";
        for ($i = 0; $i < mb_strlen($debugWord, 'UTF-8'); $i++) {
            $char = mb_substr($debugWord, $i, 1, 'UTF-8');
            $unicode = mb_convert_encoding($char, 'UTF-32BE', 'UTF-8');
            $unicodeHex = 'U+' . strtoupper(str_pad(dechex(unpack('N', $unicode)[1]), 4, '0', STR_PAD_LEFT));
            echo "Character $i: '$char' ($unicodeHex)<br>";
        }
        echo "</div>";
        
        echo "</div>";
        
        // Navigation buttons
        echo "<h3>Next Steps:</h3>";
        echo "<a href='DB_test_database_files.php' class='button'>Test Database Connection</a>";
        if ($allTestsPassed) {
            echo "<a href='DB_bulk_atbach999_update_files.php?dry-run=1' class='button warning'>Run Dry-Run Test</a>";
            echo "<a href='DB_bulk_atbach999_update_files.php' class='button success'>Run Full Update</a>";
        } else {
            echo "<span style='color: #dc3545; font-weight: bold;'>Fix algorithm before proceeding</span>";
        }
        echo "<a href='../app1.php' class='button'>Return to Main App</a>";
        ?>
        
        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #dee2e6;">
            <p><small><strong>Note:</strong> This algorithm test verifies that the AT-BaCh999 implementation matches the expected results. 
            The bulk update will use this exact same algorithm to process Hebrew words from dictionary.txt.</small></p>
            <p><small><strong>File Location:</strong> This script is running from the /files/ directory.</small></p>
        </div>
    </div>
</body>
</html>