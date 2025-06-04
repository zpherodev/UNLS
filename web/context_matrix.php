<?php
header('Content-Type: text/plain; charset=UTF-8');

// Define file paths (adjust these if they are in a different directory)
$dictionaryFile = 'UniversalNodeLinguisticsSystemDictionary.csv'; // Needed for word lookup
$masterContextMatrixFile = 'MasterContextMatrix.csv';

// --- Functions (copy these from your main script) ---

// Function to lookup the node path for a given word
// (Identical to the one in your main script)
function lookupWord($word, $dictionaryFile) {
    if (($handle = fopen($dictionaryFile, "r")) !== FALSE) {
        while (($row = fgetcsv($handle)) !== FALSE) {
            // Assume format: word,node_path
            if (isset($row[0]) && trim(strtolower($row[0])) === strtolower($word)) {
                fclose($handle);
                // Ensure the path is also trimmed
                return isset($row[1]) ? trim($row[1]) : '';
            }
        }
        fclose($handle);
    }
    return '';
}

// Function to load the Master Context Matrix using Node Names
// (Identical to the one from our last correct version)
function loadMasterContextMatrix($matrixFile) {
    $matrix = [];
    if (($handle = fopen($matrixFile, "r")) !== FALSE) {
        fgetcsv($handle); // Skip first row

        $columnHeadersRaw = fgetcsv($handle);
        if ($columnHeadersRaw === FALSE) { fclose($handle); return $matrix; }

        $columnNodeNames = [];
        for ($i = 2; $i < count($columnHeadersRaw); $i++) {
            // Trim whitespace, then convert to lowercase for consistency
            $columnNodeNames[] = trim(strtolower($columnHeadersRaw[$i]));
        }

        while (($row = fgetcsv($handle)) !== FALSE) {
            // Row header node name is in the second column (index 1)
            // Trim whitespace, then convert to lowercase for consistency
            $rowNodeName = trim(strtolower($row[1]));

            if (empty($rowNodeName)) { continue; }

            for ($i = 2; $i < count($row) && ($i - 2) < count($columnNodeNames); $i++) {
                $currentColumnNodeName = $columnNodeNames[$i - 2];
                $cellValue = trim($row[$i]);

                if (!empty($cellValue)) {
                    $matrix[$rowNodeName][$currentColumnNodeName] = $cellValue;
                }
            }
        }
        fclose($handle);
    }
    return $matrix;
}

// Function to extract the last node from a path string
// Handles both ' -> ' and ' || ' (though '||' is less common for a single word's path)
function getLastNodeFromPath($pathString) {
    if (empty($pathString)) {
        return '';
    }
    $segments = explode(' || ', $pathString);
    $lastSegment = trim(end($segments));

    $nodes = explode(' -> ', $lastSegment);
    // Convert to lowercase here before returning
    return strtolower(trim(end($nodes)));
}


// --- Main Logic for context_matrix.php ---

if (!isset($_GET['query']) || empty($_GET['query'])) {
    echo "Please provide two words for context search (e.g., 'brown fence').";
    exit;
}

$searchQuery = trim($_GET['query']);

// Split the query into individual words
$queryWords = preg_split('/\s+/', $searchQuery, -1, PREG_SPLIT_NO_EMPTY);

if (count($queryWords) < 2) {
    echo "Please enter exactly two words for context search (e.g., 'brown fence').";
    exit;
} elseif (count($queryWords) > 2) {
    // If more than two words, clarify if you want the first two, last two, or specific indices
    // For now, let's assume we still use the first two for the pair.
    // If you want last two, change these lines similar to previous version.
    // Given 'brown fence', we'll take 'brown' and 'fence'.
    $word1 = $queryWords[0];
    $word2 = $queryWords[1];
    echo "Warning: Only using the first two words for context lookup: '{$word1}' and '{$word2}'.\n";
} else {
    $word1 = $queryWords[0];
    $word2 = $queryWords[1];
}


// --- Step 1: Look up node paths for each word ---
$path1 = lookupWord($word1, $dictionaryFile);
$path2 = lookupWord($word2, $dictionaryFile);

if (empty($path1)) {
    echo "Error: Word '{$word1}' not found in the dictionary.";
    exit;
}
if (empty($path2)) {
    echo "Error: Word '{$word2}' not found in the dictionary.";
    exit;
}

// --- Step 2: Extract the last node from each path ---
$node1 = getLastNodeFromPath($path1);
$node2 = getLastNodeFromPath($path2);

if (empty($node1)) {
    echo "Error: Could not determine a primary node for word '{$word1}' from its dictionary path.";
    exit;
}
if (empty($node2)) {
    echo "Error: Could not determine a primary node for word '{$word2}' from its dictionary path.";
    exit;
}

// Convert extracted nodes to lowercase for matrix lookup consistency
$node1 = strtolower($node1);
$node2 = strtolower($node2);


// --- DEBUGGING OUTPUT ---
echo "--- Debugging Context Matrix Lookup ---\n";
echo "Word 1: '{$word1}' maps to path: '{$path1}', extracted node: '{$node1}'\n";
echo "Word 2: '{$word2}' maps to path: '{$path2}', extracted node: '{$node2}'\n";
echo "Attempting to find context for node pair: '{$node1} -> {$node2}'\n";
echo "--------------------------------------\n";
// --- END DEBUGGING OUTPUT ---


// --- Step 3: Load the Master Context Matrix ---
$masterContextMatrix = loadMasterContextMatrix($masterContextMatrixFile);

$result = '';

// --- Step 4: Perform the lookup ---
if (isset($masterContextMatrix[$node1][$node2])) {
    $contextualMeaning = $masterContextMatrix[$node1][$node2];
    $result = "Context for '{$word1} ({$node1}) -> {$word2} ({$node2})': {$contextualMeaning}";
} else {
    $result = "No specific context defined for the node pair '{$node1} -> {$node2}' derived from words '{$word1}' and '{$word2}'.";
    // Optional: More specific feedback
    if (!isset($masterContextMatrix[$node1])) {
        $result .= " (Note: '{$node1}' might not be a recognized starting node in the matrix.)";
    } elseif (!isset($masterContextMatrix[$node1][$node2])) {
        $result .= " (Note: '{$node2}' might not be a recognized following node for '{$node1}'.)";
    }
}

echo $result;

?>