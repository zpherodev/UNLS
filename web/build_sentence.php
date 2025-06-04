<?php
header('Content-Type: text/html; charset=UTF-8');
function logNotFoundWord($originalWord) {
    $logFile = 'unls_not_found.log';

    if (!empty(trim($originalWord))) {
        static $logged = [];
        if (!in_array($originalWord, $logged)) {
            file_put_contents($logFile, trim($originalWord) . "\n", FILE_APPEND | LOCK_EX);
            $logged[] = $originalWord;
        }
    }
}


$dictionaryFile = 'UniversalNodeLinguisticsSystemDictionary.csv';

if (!isset($_GET['sentence'])) {
    echo json_encode(['error' => 'No sentence provided.']);
    exit;
}

$sentenceWords = explode(' ', strtolower(trim($_GET['sentence'])));
$wordNodes = [];

function lookupWord($word, $dictionaryFile) {
   
    if (($handle = fopen($dictionaryFile, "r")) !== FALSE) {
        while (($row = fgetcsv($handle)) !== FALSE) {
            if (strtolower(trim($row[0])) === $word) {
                fclose($handle);
                return isset($row[1]) ? trim($row[1]) : '';
            }
        }
        fclose($handle);
    }
    return '';
}

$suffixes = ['s', 'es', 'ed', 'ing', ',', '.','!','?',';',':','...'];

foreach ($sentenceWords as $word) {
    $originalWord = $word;
 // Check if the first character of the word is numeric
    if (!empty($word) && is_numeric($word[0])) {
        // Check if the third character is a colon
        if (isset($word[2]) && $word[2] === ':') {
            $wordNodes[$originalWord] = 'Spatial->Time';
        } else {
            $wordNodes[$originalWord] = 'Quantitative';
        }
        continue; // Skip dictionary lookup for this word
    }

    $node = lookupWord($word, $dictionaryFile);

    if ($node) {
        
        $wordNodes[$originalWord] = $node;
    } else {
        $foundRoot = false;
        foreach ($suffixes as $suffix) {
            if (substr($word, -strlen($suffix)) === $suffix) {
                
                $rootWord = substr($word, 0, -strlen($suffix));
                
                $node = lookupWord($rootWord, $dictionaryFile);
                if ($node) {
                    $wordNodes[$originalWord] = $node . ' (' . $suffix . ')';
                    $foundRoot = true;
                    break;
                }
            }
        }
        if (!$foundRoot) {
            $wordNodes[$originalWord] = '[not found]';
            logNotFoundWord($originalWord);
        }
    }
}

echo '<div>'; // Container for the single-line capsule view
foreach ($sentenceWords as $i => $word) {
    echo '<strong>' . htmlspecialchars($word) . ':</strong> ';
    if (isset($wordNodes[$word]) && $wordNodes[$word] !== '[not found]') {
        $fullNodeString = $wordNodes[$word];
        // First, handle suffixes by removing them from the node string for display
        $suffixMatch = preg_match('/ \((s|es|ed|ing|[\,\.\?\!\;\:\...])\)$/', $fullNodeString, $matches);
        $suffix = $suffixMatch ? $matches[0] : '';
        $fullNodeString = $suffixMatch ? substr($fullNodeString, 0, -strlen($suffix)) : $fullNodeString;

        // Explode at || to handle multiple node paths
        $nodePaths = explode('||', $fullNodeString);
        foreach ($nodePaths as $path) {
            $path = trim($path);
            if (empty($path)) continue;

            $nodes = explode('->', $path);
            $mainNode = trim($nodes[0]);
            $nodes1 = trim($nodes[1]);
            $nodeClass = strtolower(str_replace(['/', '\\', ' '], '-', $mainNode));

            echo '<span class="node-capsule ' . htmlspecialchars($nodeClass) . '">';
            foreach ($nodes as $j => $node) {
                echo '<span class="node-inline" style="margin-left:' . ($j * 2) . 'px;">';
                echo htmlspecialchars(trim($node));
                echo '</span>';
                if ($j < count($nodes) - 1) {
                    echo ' → ';
                }
            }
            echo '</span> ';
        }
        if ($suffix) {
            echo htmlspecialchars($suffix);
        }
    } else {
        echo '<span class="node-capsule not-found">[not found]</span> ';
    }
}
echo '</div>';
?>