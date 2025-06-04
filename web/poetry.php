<?php include('header.php');?>
<body class="min-h-screen antialiased">
    <div class="my-container">
        <header class="header-section">
            <h1 class="main-title">E.A. Poe-Inspired Node Stack Variations</h1>
            <p class="subtitle">Explore how a consistent node stack generates diverse poetic outputs by changing themes and perspectives.</p>
        </header>

        <div class="main-content">
            <aside class="control-panel">
                <h2 class="panel-title">Controls</h2>
                <div class="form-group-space">
                    <div>
                        <label for="basePoemSelect" class="form-label">Select Base Theme:</label>
                        <select id="basePoemSelect" class="form-select">
                            <option value="garden">The Garden's Requiem</option>
                            <option value="steel">Steel Symphony</option>
                            <option value="celestial">Celestial Reverie</option>
                        </select>
                    </div>
                    <div>
                        <label for="perspectiveModifierSelect" class="form-label">Perspective Modifier:</label>
                        <select id="perspectiveModifierSelect" class="form-select">
                            <option value="none">None (Above)</option>
                            <option value="below">Below</option>
                            <option value="amidst">Amidst</option>
                            <option value="near">Near</option>
                        </select>
                    </div>
                    <div>
                        <label for="timeModifierSelect" class="form-label">Time-Spatial Modifier:</label>
                        <select id="timeModifierSelect" class="form-select">
                            <option value="none">None</option>
                            <option value="yesterday">In the Depths of Yesterday</option>
                            <option value="future">In the Distant Future</option>
                        </select>
                    </div>
                </div>
                 <div class="instructions-box">
                    <p><strong>Instructions:</strong> Select a base theme. Then, apply perspective or time-spatial modifiers to see how the poem transforms. The "Observations" section will update to reflect the impact of your choices.</p>
                </div>
            </aside>

            <main class="main-display">
                <article id="poemDisplay" class="poem-display-section">
                    <h3 id="poemTitle" class="poem-title"></h3>
                    <div id="poemContent" class="poem-content"></div>
                </article>
                <section id="observationsDisplay" class="observations-section">
                    <h4 class="observations-title">Observations</h4>
                    <div id="observationContent" class="observation-content"></div>
                </section>
            </main>
        </div>

        <footer class="footer-section">
            <p class="footer-text">&copy; 2025 Universal Node Framework Explorer. All rights reserved.</p>
        </footer>
    </div>

    <script>
        const poemTitleEl = document.getElementById('poemTitle');
        const poemContentEl = document.getElementById('poemContent');
        const observationContentEl = document.getElementById('observationContent');

        const basePoemSelect = document.getElementById('basePoemSelect');
        const perspectiveModifierSelect = document.getElementById('perspectiveModifierSelect');
        const timeModifierSelect = document.getElementById('timeModifierSelect');

        function updateDisplay() {
            const selectedBaseKey = basePoemSelect.value;
            const selectedPerspective = perspectiveModifierSelect.value;
            const selectedTime = timeModifierSelect.value;

            // Construct the URL for the PHP script with URI-encoded parameters
            const url = `case_poetry.php?base=${encodeURIComponent(selectedBaseKey)}&perspective=${encodeURIComponent(selectedPerspective)}&time=${encodeURIComponent(selectedTime)}`;

            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json(); // Expecting JSON response from PHP
                })
                .then(data => {
                    // Update the DOM with data from PHP
                    poemTitleEl.textContent = data.title;
                    poemContentEl.innerHTML = data.content;
                    observationContentEl.innerHTML = data.observation;
                })
                .catch(error => {
                    console.error('Error fetching poem data:', error);
                    poemTitleEl.textContent = 'Error Loading Poem';
                    poemContentEl.innerHTML = '<p>Could not retrieve poem data. Please try again later.</p>';
                    observationContentEl.innerHTML = '<p>Error loading observations.</p>';
                });
        }

        // Event listeners to trigger updates
        basePoemSelect.addEventListener('change', () => {
            // Reset modifiers when base poem changes
            perspectiveModifierSelect.value = 'none';
            timeModifierSelect.value = 'none';
            updateDisplay();
        });

        perspectiveModifierSelect.addEventListener('change', () => {
            // If a perspective modifier is chosen, reset time modifier for clarity
            if (perspectiveModifierSelect.value !== 'none') {
                timeModifierSelect.value = 'none';
            }
            updateDisplay();
        });

        timeModifierSelect.addEventListener('change', () => {
            // If a time modifier is chosen, reset perspective modifier for clarity
            if (timeModifierSelect.value !== 'none') {
                perspectiveModifierSelect.value = 'none';
            }
            updateDisplay();
        });

        // Initial display when the page loads
        updateDisplay();
    </script>
</body>
</html>