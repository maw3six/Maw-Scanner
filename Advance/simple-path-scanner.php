<?php
function listFiles($dir, &$results = []) {
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file === "." || $file === "..") {
            continue;
        }
        
        $fullPath = realpath($dir . DIRECTORY_SEPARATOR . $file);
        $results[] = $fullPath;

        if (is_dir($fullPath)) {
            listFiles($fullPath, $results);
        }
    }
    return $results;
}

if (isset($_GET['download'])) {
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="path_list.txt"');

    $rootDir = $_SERVER['DOCUMENT_ROOT'];
    $allPaths = listFiles($rootDir);

    echo implode("\n", $allPaths);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin: 10px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Website Path Scanner</h2>
    <button onclick="downloadFile()">Download</button>

    <script>
        function downloadFile() {
            window.location.href = '?download=1';
        }
    </script>
</body>
</html>
