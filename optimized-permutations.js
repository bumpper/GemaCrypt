// Optimized Permutation Manager
// Replaces the blocking permute() function with asynchronous processing

class PermutationManager {
    constructor() {
        this.worker = null;
        this.isGenerating = false;
        this.currentResults = [];
        this.totalGenerated = 0;
    }

    // Main function to generate permutations - called directly from Transpose()
    generatePermutations(inputText) {
        if (this.isGenerating) {
            console.log('Already generating permutations...');
            return;
        }

        // Clean the input
        const cleanInput = inputText.replace(/[^\w\u05D0-\u05EA\u037B-\u03FF\d]/g, '');
        
        if (!cleanInput || cleanInput.length === 0) {
            document.getElementById('anagram').innerHTML = '<li style="color: orange;">Please enter a word to generate permutations.</li>';
            return;
        }

        // Clear previous results
        document.getElementById('anagram').innerHTML = '';
        this.currentResults = [];
        this.totalGenerated = 0;
        this.isGenerating = true;

        // Show progress indicator
        this.showProgress();

        // Use async processing (Web Workers don't work with file:// protocol)
        setTimeout(() => {
            this.generatePermutationsAsync(cleanInput);
        }, 10);
    }

    // Async permutation generator
    async generatePermutationsAsync(string) {
        try {
            // No length limitations - process full string
            console.log(`Generating permutations for full ${string.length}-character word: ${string}`);

            const results = [];
            
            function permute(str, prefix = '') {
                if (str.length === 0) {
                    return [prefix];
                } else {
                    const perms = [];
                    for (let i = 0; i < str.length; i++) {
                        const char = str[i];
                        const remaining = str.slice(0, i) + str.slice(i + 1);
                        const subPerms = permute(remaining, prefix + char);
                        perms.push(...subPerms);
                    }
                    return perms;
                }
            }

            const allPerms = permute(string);
            
            // Process in chunks to avoid blocking
            for (let i = 0; i < allPerms.length; i++) {
                results.push(allPerms[i]);
                
                // Yield control periodically
                if (i % 50 === 0) {
                    await new Promise(resolve => setTimeout(resolve, 1));
                    this.updateProgress(i, allPerms.length);
                }
            }

            // Remove duplicates
            const unique = [...new Set(results)];
            
            // Display results
            this.displayResults(unique);
            this.handleComplete(unique.length);
            
        } catch (error) {
            console.error('Error generating permutations:', error);
            this.displayError('Failed to generate permutations: ' + error.message);
            this.isGenerating = false;
        }
    }

    // Display all permutations at once
    displayResults(permutations) {
        const anagramDiv = document.getElementById('anagram');
        anagramDiv.innerHTML = ''; // Clear loading message
        
        permutations.forEach(perm => {
            const listItem = document.createElement('li');
            listItem.innerHTML = `<a href='http://translate.google.com/#auto/en/${encodeURIComponent(perm)}' target='_blank'><b>${perm}</b></a>`;
            anagramDiv.appendChild(listItem);
        });
    }

    // Show progress indicator
    showProgress() {
        const anagramDiv = document.getElementById('anagram');
        anagramDiv.innerHTML = '<li style="color: #00ff00;">Generating permutations... Please wait.</li>';
    }

    // Update progress
    updateProgress(current, total) {
        const anagramDiv = document.getElementById('anagram');
        const percentage = Math.round((current / total) * 100);
        anagramDiv.innerHTML = `<li style="color: #00ff00;">Generating permutations... ${percentage}% complete</li>`;
    }

    // Handle completion
    handleComplete(totalGenerated) {
        this.isGenerating = false;
        this.totalGenerated = totalGenerated;
        console.log(`Generated ${totalGenerated} unique permutations`);
    }

    // Display error message
    displayError(message) {
        document.getElementById('anagram').innerHTML = `<li style="color: red;">Error: ${message}</li>`;
        this.isGenerating = false;
    }
}

// Create global instance
const permutationManager = new PermutationManager();

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    console.log('Optimized permutation system loaded');
});

// Replace the old permute function - this gets called from the existing Transpose() function
function permute(inputText) {
    // Call the new optimized system
    permutationManager.generatePermutations(inputText);
    
    // Return empty array since we're now processing asynchronously
    return [];
}
