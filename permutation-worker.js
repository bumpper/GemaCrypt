// Web Worker for generating permutations asynchronously
// This prevents the main UI thread from freezing

self.onmessage = function(e) {
    const { inputText, batchSize = 100 } = e.data;
    
    // Safety check - limit to reasonable length
    let processText = inputText;
    if (processText.length > 6) {
        processText = processText.substring(0, 5);
    }
    
    const results = [];
    let batchCount = 0;
    
    // Optimized permutation generator with batching
    function* generatePermutations(string) {
        if (string.length <= 1) {
            yield string;
            return;
        }
        
        for (let i = 0; i < string.length; i++) {
            const char = string[i];
            const remaining = string.slice(0, i) + string.slice(i + 1);
            
            for (const perm of generatePermutations(remaining)) {
                yield char + perm;
                
                // Send batch when we reach the batch size
                if (++batchCount >= batchSize) {
                    self.postMessage({
                        type: 'batch',
                        permutations: results.splice(0, results.length),
                        isComplete: false
                    });
                    batchCount = 0;
                }
            }
        }
    }
    
    try {
        // Generate all permutations
        const permutations = [];
        const seen = new Set(); // Remove duplicates
        
        for (const perm of generatePermutations(processText)) {
            if (!seen.has(perm)) {
                seen.add(perm);
                permutations.push(perm);
                
                // Send batch periodically
                if (permutations.length >= batchSize) {
                    self.postMessage({
                        type: 'batch',
                        permutations: permutations.splice(0, permutations.length),
                        isComplete: false
                    });
                }
            }
        }
        
        // Send final batch
        if (permutations.length > 0) {
            self.postMessage({
                type: 'batch',
                permutations: permutations,
                isComplete: false
            });
        }
        
        // Send completion message
        self.postMessage({
            type: 'complete',
            totalGenerated: seen.size,
            isComplete: true
        });
        
    } catch (error) {
        self.postMessage({
            type: 'error',
            error: error.message
        });
    }
};
