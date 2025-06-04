<?php include('header.php');?>
    <div class="app">
        <header>
            <h1>Ancient Egyptian Hieroglyphs Case Study</h1>
        </header>

        <section class="section-intro">
            <p>This page demonstrates how the universal node-based framework is perfectly suited for handling ancient Egyptian hieroglyphs, excelling in contextual analysis and universal adaptability.</p>
        </section>

        <section class="section-content">
            <h2>Why the Framework Fits Ancient Egyptian Hieroglyphs</h2>
            <ol>
                <li>
                    <h3>Hierarchical Nature of Hieroglyphs:</h3>
                    <p>Hieroglyphs often encode layers of meaning—phonetic, symbolic, and ideographic—all at once. The node-based framework's hierarchical structure maps perfectly to these layers:</p>
                    <ul>
                        <li><strong>Focus (1):</strong> The central subject or theme (e.g., a pharaoh or deity).</li>
                        <li><strong>Action (3):</strong> What is being depicted (e.g., ruling, offering).</li>
                        <li><strong>Spatial (2):</strong> Temporal or locational context (e.g., "in eternity" or "at the temple").</li>
                        <li><strong>Identity (4):</strong> The entities involved (e.g., gods, humans, animals).</li>
                        <li><strong>Quantitative (5):</strong> Multiplicative symbols or determinatives indicating magnitude.</li>
                    </ul>
                </li>
                <li>
                    <h3>Finite Symbol Set:</h3>
                    <p>Ancient Egyptian hieroglyphs consist of a finite set of glyphs (~1,000 commonly used symbols). This aligns with the finite and combinatorial nature of the framework.</p>
                </li>
                <li>
                    <h3>Contextual Ambiguity:</h3>
                    <p>Many hieroglyphs have multiple interpretations depending on context (e.g., "ankh" for life or as part of a name). The framework resolves ambiguity by stacking nodes in context, ensuring clarity.</p>
                </li>
            </ol>
        </section>

        <section class="section-content">
            <h2>How the Framework Works for Hieroglyphs (Interactive Demo)</h2>
            <p>Select a hieroglyph sequence below to see how it's mapped to nodes and interpreted contextually.</p>

            <div class="control-group">
                <label for="hieroglyphSelect">Select Hieroglyph Sequence:</label>
                <select id="hieroglyphSelect">
                    <option value="ra_rules_sky_eternally">Ra rules the sky eternally</option>
                    <option value="ankh_eternal_life">"ankh" in "eternal life"</option>
                    <option value="ankh_user_ankh">"ankh" in "User-Ankh"</option>
                </select>
            </div>

            <div class="display-box">
                <h3>Selected Hieroglyph Sequence:</h3>
                <p id="selectedHieroglyphText" class="example-heading"></p>
                <h3>Mapped Node Sequence:</h3>
                <div id="mappedNodesDisplay" class="node-path-visual"></div>
                <h3>Interpretation:</h3>
                <p id="interpretationDisplay" class="context-interpretation"></p>
            </div>
        </section>

        <section class="section-content">
            <h2>Applications for Ancient Egyptian</h2>
            <ol>
                <li>
                    <h3>Deciphering Complex Texts:</h3>
                    <p>Break down hieroglyphic inscriptions into node stacks to decode their structure and meaning.</p>
                    <p class="note">Example: The Rosetta Stone: Focus &rarr; Deity: Ptah. Action &rarr; "Grants." Identity &rarr; Pharaoh. Quantitative &rarr; Eternal blessings.</p>
                </li>
                <li>
                    <h3>Translation into Modern Languages:</h3>
                    <p>Translate hieroglyphic node stacks directly into modern equivalents:</p>
                    <p class="note">Example: Hieroglyphs: [1.1 (Ra), 3.1 (rules), 2.2 (sky), 2.1.3 (eternity)]. English: "Ra rules the sky eternally." French: "Râ règne éternellement sur le ciel."</p>
                </li>
                <li>
                    <h3>Preservation of Cultural Heritage:</h3>
                    <p>Encode hieroglyphic meanings into immutable node-based records for global access. Store node stacks on blockchain for long-term preservation.</p>
                </li>
                <li>
                    <h3>Teaching and Education:</h3>
                    <p>Use node-based parsing to teach hieroglyphic structure: Focus on understanding the relationship between glyphs rather than memorizing symbols.</p>
                </li>
            </ol>
        </section>

        <section class="section-content">
            <h2>Potential Workflow</h2>
            <ol>
                <li>
                    <h3>Create a Node Dictionary:</h3>
                    <p>Map each hieroglyph to its possible nodes:</p>
                    <p class="note">Example: Glyph "ankh" &rarr; [1.2 (Positive Life), 4.2 (Name)]. Glyph "Ra" &rarr; [1.1 (Deity)].</p>
                </li>
                <li>
                    <h3>Parse Hieroglyph Sequences:</h3>
                    <p>Convert hieroglyph sequences into node stacks. Use contextual rules to resolve ambiguities.</p>
                </li>
                <li>
                    <h3>Automate Translation:</h3>
                    <p>Develop scripts to translate node stacks into meaningful sentences.</p>
                </li>
            </ol>
            <p>Integrating the context matrix with ancient Egyptian hieroglyphs is an ideal solution for handling the layered meanings and complex interactions of these symbols. The context matrix can define how each glyph interacts with others based on its role and position, automating interpretation while preserving meaning.</p>
        </section>

        <section class="section-content">
            <h2>Context Matrix for Ancient Egyptian Hieroglyphs</h2>
            <p>The Master Matrix (Node × Node) can be adapted to hieroglyphic scripts by mapping:</p>
            <ol>
                <li><strong>Nodes:</strong> Each glyph to a node in the hierarchy (Focus, Spatial, Action, Identity, Quantitative).</li>
                <li><strong>Interactions:</strong> Define how glyphs interact within the same row, column, or larger inscription.</li>
            </ol>
            <p class="note">Example: Hieroglyphic Phrase "Ra rules the sky eternally." Ra (Identity). Rules (Action&rarr;Current/Occuring). The (Focus). Sky (Spatial &rarr;Space &rarr; Location. Eternally (Spatial &rarr; Time)</p>

            <h3>Step 1: Node stacking</h3>
            <p>In this case the nodes when stacked in the order they appear provide the focus or attention, actions that are being performed and when they are being performed, who is performing them, and where. The context matrix defines valid interactions between hieroglyphic glyphs.</p>
            <p class="note">Example: The [Focus:Placing a particular focus on a subject.] × Sky [Spatial &rarr;Space&rarr;Location:Denoting a location being focused on.]</p>

            <h3>Step 2: Pairing nodes</h3>
            <ol>
                <li>
                    <h4>Identify the Node Pairs:</h4>
                    <p>Glyphs are mapped to their nodes based on the dictionary, then paired for context.</p>
                    <p class="note">Example: "Ra" &rarr; [Identity: An Identity], "Rules" [Action&rarr;Current/Occurring: Performing an action that is current or occuring.].</p>
                </li>
                <li>
                    <h4>Analyze Relationships:</h4>
                    <p>Context matrix defines interactions by selecting the first node as the column and the second node as the row to find the combined context:</p>
                    <p class="note">Example: Column: Indentity X Row: Action&rarr;Current/Occuring = Context Cell</p>
                </li>
                <li>
                    <h4>Output Context:</h4>
                    <p>The cell reveals the context of each pair of nodes:</p>
                    <p class="note">Matrix Interpretation: "An Identity performing an action that is current or occuring."</p>
                </li>
            </ol>

            <h3 style="float:left;">Step 3: Automating Hieroglyphic Context</h3>
            <p class="note">Input: Hieroglyphic Text:</p>
            <ol>
                <li>
                    <h4>Node Mapping:</h4>
                    <p>Identify the glyphs and their corresponding nodes.</p>
                    <p class="note">Example: Glyphs: Ra &rarr; Rules &rarr.The&rarr; Sky &rarr;. Eternally. Nodes: [Focus_1.1, Action_3.1, Spatial_2.2, Spatial_2.1.3].</p>
                </li>
                <li>
                    <h4>Apply Context Matrix:</h4>
                    <p>Use the matrix to interpret node interactions:</p>
                    <p class="note">Example: Identity X Action &rarr; Current/Occurring. "Ra rules." Focus X Spatial &rarr;Space &rarr; Location "the sky." Spatial&rarr;Time "eternally." (remaining node interacts with the sentence as a whole)</p>
                </li>
                <li>
                    <h4>Generate Conext Output with given cells:</h4>
                    <p class="note">An identity performing an action that is currently occuring with a particular focus in time and space in a space that is a location during a time.</p>
                </li>
            </ol>

            <h3 style="float:left;">Matrix Refinement</h3>
            <p style="float:left;clear:both;">The matrix can be used for further analysis and refinement by further pairing of nodes within the sentence using a sub-matrix.</p>
            <p class="note">Sub Matrix: Node X Node Analysis</p>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Glyph A \ Glyph B</th>
                            <th>Ra (Identity)</th>
                            <th>Rules (Action&rarr;Current/Occuring)</th>
                            <th>The (Focus)</th>
                            <th>Sky (Spatial&rarr;Space&rarr;Location)</th>
                            <th>Eternity (Spatial&rarr;Time)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ra (Identity)</td>
                            <td>Ra(A Particular Identity)</td>
                            <td>"Ra Rules"(An Identity Performing and Action)</td>
                            <td>"Ra The"(An Identity with a focus)</td>
                            <td>"Ra Sky" (An identity in a space that is a location)</td>
                            <td>"Ra Eternally"(An identity in a time or space that is a time)</td>
                        </tr>
                        <tr>
                            <td>Rules (Action&rarr;Current/Occuring)</td>
                            <td>"Ra Rules"(An Identity Performing and Action)</td>
                            <td>"Rules Rules"(A Particular action that is currently occuring)</td>
                            <td>"Rules The"(An action with a focus)</td>
                            <td>"Rules Sky"(An action currently occuring in a time or space that is a space that is a location)</td>
                            <td>"Rules Eternally"(An action that is currently occuring in a time or space that is a time)</td>
                        </tr>
                        <tr>
                            <td>The (Focus)</td>
                            <td>"Ra The"(An identity with a focus)</td>
                            <td>"Rules The"(An action that is currently occuring with a focus)</td>
                            <td>"The The" (A particular or specific focus)</td>
                            <td>"The Sky" (A specific focus on a location)</td>
                            <td>"The Eternally" (A particular focus on a time)</td>
                        </tr>
                        <tr>
                            <td>Sky (Spatial&rarr;Space&rarr;Location)</td>
                            <td>"Ra Sky"(An Identity in a time or space that is a space that is a location)</td>
                            <td>"Rules Sky"(An action currently occuring in a location)</td>
                            <td>"The Sky"(A specific focus on a location)</td>
                            <td>"Sky Sky"(A Particular space in space and time that is a location)</td>
                            <td>"Sky Eternally"(A location in a time or space that is a time)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="section-content">
            <h2>Applications for Hieroglyphs</h2>
            <ol>
                <li>
                    <h3>Translation:</h3>
                    <p>Translate hieroglyphs into modern languages using node-based matrices. Ensure translations preserve cultural and contextual accuracy.</p>
                </li>
                <li>
                    <h3>Deciphering Incomplete Inscriptions:</h3>
                    <p>Fill in missing hieroglyphs by analyzing surrounding nodes. Example: If Spatial (Sky) + Action (Rules) &rarr; likely Focus (Ra).</p>
                </li>
                <li>
                    <h3>Education:</h3>
                    <p>Teach hieroglyphic grammar and context using the matrix.</p>
                </li>
                <li>
                    <h3>Preservation:</h3>
                    <p>Encode hieroglyphic meanings into a universal, immutable framework for future generations.</p>
                </li>
            </ol>
        </section>

    </div>

    <script>
        // Data for the interactive demo
        const hieroglyphExamples = {
            ra_rules_sky_eternally: {
                text: "Ra rules the sky eternally.",
                nodes: [
                    { id: "1.1", name: "Focus (Deity)", type: "focus" },
                    { id: "3.1", name: "Action (Current)", type: "action" },
                    { id: "2.2", name: "Spatial (Above)", type: "spatial" },
                    { id: "2.1.3", name: "Spatial (Infinite Time)", type: "spatial" }
                ],
                interpretation: "Ra performs an action (rules) in a specific location (sky) eternally."
            },
            ankh_eternal_life: {
                text: '"ankh" in "eternal life"',
                nodes: [
                    { id: "1.2", name: "Focus (Subjective)", type: "focus" },
                    { id: "5.1", name: "Quantitative (Positive)", type: "quantitative" } // Assuming Positive maps to Quantitative
                ],
                interpretation: "The 'ankh' glyph, in this context, signifies a positive, subjective focus related to eternal life."
            },
            ankh_user_ankh: {
                text: '"ankh" in "User-Ankh"',
                nodes: [
                    { id: "4.2", name: "Identity (Proper Name)", type: "identity" }
                ],
                interpretation: "The 'ankh' glyph, in this context, signifies a proper name or identity."
            }
        };

        const hieroglyphSelect = document.getElementById('hieroglyphSelect');
        const selectedHieroglyphTextEl = document.getElementById('selectedHieroglyphText');
        const mappedNodesDisplayEl = document.getElementById('mappedNodesDisplay');
        const interpretationDisplayEl = document.getElementById('interpretationDisplay');

        function updateHieroglyphDisplay() {
            const selectedExampleKey = hieroglyphSelect.value;
            const exampleData = hieroglyphExamples[selectedExampleKey];

            if (exampleData) {
                selectedHieroglyphTextEl.textContent = exampleData.text;

                // Clear previous nodes
                mappedNodesDisplayEl.innerHTML = '';
                exampleData.nodes.forEach((node, index) => {
                    const capsule = document.createElement('span');
                    capsule.className = `node-capsule ${node.type}`;
                    capsule.innerHTML = `<span class="node-name">${node.name}</span>`;
                    mappedNodesDisplayEl.appendChild(capsule);

                    if (index < exampleData.nodes.length - 1) {
                        const arrow = document.createElement('span');
                        arrow.className = 'node-arrow';
                        arrow.textContent = '→';
                        mappedNodesDisplayEl.appendChild(arrow);
                    }
                });

                interpretationDisplayEl.textContent = exampleData.interpretation;
            } else {
                selectedHieroglyphTextEl.textContent = 'Select an example';
                mappedNodesDisplayEl.innerHTML = '<p class="empty-state">Node sequence will appear here.</p>';
                interpretationDisplayEl.textContent = 'Interpretation will appear here.';
            }
        }

        hieroglyphSelect.addEventListener('change', updateHieroglyphDisplay);

        // Initial display
        updateHieroglyphDisplay();
    </script>
</body>
</html>
