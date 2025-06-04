<?php
header('Content-Type: text/plain; charset=UTF-8');

$dictionaryFile = 'UniversalNodeLinguisticsSystemDictionary.csv';
$definitionsFile = 'NLS-node_definitions.csv';

if (!isset($_GET['word'])) {
    echo json_encode(['error' => 'No word provided.']);
    exit;
}

$word = trim($_GET['word']);

// Function to read node definitions from the CSV
function loadNodeDefinitions($definitionsFile) {
    $definitions = [];
    if (($handle = fopen($definitionsFile, "r")) !== FALSE) {
        while (($row = fgetcsv($handle)) !== FALSE) {
            if (isset($row[0]) && isset($row[1])) {
                // Corrected: Node name is $row[0], Definition is $row[1]
                // Also, trimming definitions for potential leading/trailing hyphens as discussed
                $nodeName = trim($row[0]);
                $definition = trim($row[1], " \t\n\r\0\x0B-"); // Added '-' to characters to trim

                $definitions[$nodeName] = $definition;
            }
        }
        fclose($handle);
    }
    return $definitions;
}

// Load node definitions into the array
$nodeDefinitions = loadNodeDefinitions($definitionsFile);

// Function to lookup the node path for a given word
function lookupWord($word, $dictionaryFile) {
    if (($handle = fopen($dictionaryFile, "r")) !== FALSE) {
        while (($row = fgetcsv($handle)) !== FALSE) {
            if (isset($row[0]) && trim($row[0]) === $word) {
                fclose($handle);
                return isset($row[1]) ? trim($row[1]) : '';
            }
        }
        fclose($handle);
    }
    return '';
}

$nodePath = lookupWord($word, $dictionaryFile);

if ($nodePath) {
    // --- NEW: Two-stage splitting process ---

    // 1. Split the entire path into segments using ' || '
    $pathSegments = explode(' || ', $nodePath);

    $allEnhancedSegments = [];

    foreach ($pathSegments as $segment) {
        // 2. For each segment, split it into individual nodes using ' -> '
        $nodesRaw = explode(' -> ', $segment);
        $enhancedNodesInSegment = [];

        foreach ($nodesRaw as $part) {
            $trimmedPart = trim($part); // Still important for any stray spaces
            if (isset($nodeDefinitions[$trimmedPart])) {
                $enhancedNodesInSegment[] = $trimmedPart . " (" . $nodeDefinitions[$trimmedPart] . ")";
            } else {
                $enhancedNodesInSegment[] = $trimmedPart; // If no definition, just include the node name
            }
        }
        // Join the enhanced nodes within this segment with ' -> '
        $allEnhancedSegments[] = implode(' -> ', $enhancedNodesInSegment);
    }

    // Join the complete enhanced segments with ' || '
    echo implode(' || ', $allEnhancedSegments);

} else {
    echo '[not found]';
}

?>