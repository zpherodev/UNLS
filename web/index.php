<?php include('header.php');?>
<a href="https://doi.org/10.5281/zenodo.14667952"><img src="https://zenodo.org/badge/DOI/10.5281/zenodo.14667952.svg" alt="DOI"></a>
<img src="UNLS_Map.png" width="400" style="float:right;"></img>
        <div class="search">
            <h2>Word Lookup</h2>
            <label for="searchInput">Enter a word:<br></label>
            <input type="text" id="searchInput" onkeyup="performSearch()" placeholder="Search..." maxlength="256">
            <div id="dictionaryResults" class="results">
                </div>
        </div>

        <div class="sentence">
            <h2>Sentence Analysis</h2>
            <label for="searchSentence">Enter a sentence:<br></label>
            <input type="text" id="searchSentence" placeholder="Input Sentence..." maxlength="2000">
<button id="analyzeButton" onclick="performSentence()">Analyze</button>

            <div id="sentenceNodes" class="sentence-display">
                </div>
        </div>

        <div class="node-stack">
            <h2>Context Matrix Coming Soon!</h2>
            Please note, this is being actively developed. The Context master matrix in csv form can be found here: <a href="MasterContextMatrix.csv" target="blank" class="note">Download the master matrix.</a>
      <br><label for="searchMatrix" style="color:#FFF;">Enter a word/phrase for context:<br></label>
            <input type="text" id="searchMatrix" placeholder="2 Words">
            <button id="analyzeContext" onclick="performMatrixSearch()">Get Context</button>
            <div id="contextMatrixResults" class="node-stack-display">
            </div>
              
        </div>
    </div>

    <script>

        const dictionaryResultsDiv = document.getElementById('dictionaryResults');
        const sentenceNodesDiv = document.getElementById('sentenceNodes');
        const contextMatrixResultsDiv = document.getElementById('contextMatrixResults');



        function performSearch() {
            const searchQuery = document.getElementById('searchInput').value;
            fetch('dictionary_lookup.php?word=' + encodeURIComponent(searchQuery))
                .then(response => response.text())
                .then(data => {
                    dictionaryResultsDiv.innerHTML = data;
                })
                .catch(error => {
                    dictionaryResultsDiv.innerHTML = '<div class="error">Error loading dictionary results.</div>';
                    console.error('Error fetching dictionary:', error);
                });
        }

        function performSentence() {
            const searchQuery2 = document.getElementById('searchSentence').value;
            fetch('build_sentence.php?sentence=' + encodeURIComponent(searchQuery2))
                .then(response => response.text())
                .then(data => {
                    sentenceNodesDiv.innerHTML = data;
                })
                .catch(error => {
                    sentenceNodesDiv.innerHTML = '<div class="error">Error loading sentence analysis.</div>';
                    console.error('Error fetching sentence analysis:', error);
                });
        }

        function performMatrixSearch() {
            const searchQuery3 = document.getElementById('searchMatrix').value;
            fetch('context_matrix.php?query=' + encodeURIComponent(searchQuery3))
                .then(response => response.text())
                .then(data => {
                    contextMatrixResultsDiv.innerHTML = data;
                })
                .catch(error => {
                    contextMatrixResultsDiv.innerHTML = '<div class="error">Error loading context matrix.</div>';
                    console.error('Error fetching context matrix:', error);
                });
        }
    </script>
</body>
</html>