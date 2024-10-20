<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Likes Coin Booster - WEDOHACKS</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('https://images.pexels.com/photos/3827414/pexels-photo-3827414.jpeg'); /* Add your image URL here */
            background-size: cover;
            background-position: center;
            color: #262626;
            margin: 0;
            padding: 0;
            height: 100vh; /* Full height */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            max-width: 400px;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent white */
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px; /* Optional: rounded corners */
        }
        h1 {
            color: #262626;
            font-size: 24px;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="text"], select {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
            background: rgba(255, 255, 255, 0.7); /* Semi-transparent inputs */
        }
        input[type="submit"] {
            background-color: #3897f0;
            color: white;
            border: none;
            padding: 10px;
            font-weight: 500;
            cursor: pointer;
            border-radius: 3px;
            margin-top: 5px;
        }
        input[type="submit"]:hover {
            background-color: #307ecc;
        }
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
        }
        a {
            color: #3897f0;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .hr-19 {
            border: none;
            height: 2px;
            background-color: #dbdbdb;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <body>
    <div class="container">
        <h1>GET LIKES - COIN BOOSTER</h1>
    <center>

<?php

error_reporting(0);

function spin($url,$header, $post){
        $ch= curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_ENCODING, "gzip");
        return curl_exec($ch);
        curl_close($ch);
        }
        
if(isset($_GET['submit'])){

$myid=$_GET['uid'];

$url="https://freelikesandfollowers.com/api/purchasecoin";

$headers=['Host: freelikesandfollowers.com',
'Content-Type: application/json; charset=utf-8',
'Accept-Encoding: gzip, deflate',
'User-Agent: okhttp/3.14.9'];

$data='{"user_id":"'.$myid.'","from_ad":"true"}';
$run=spin($url,$headers,$data);

$result = json_decode($run, true); // Decode the JSON into an associative array
    
if (isset($result['success']) && $result['success']) {
    echo "<div class='output'>";
    echo "<h2>Result Summary</h2>"; // Add a header to summarize the content
    echo "<p><strong>User ID:</strong> " . $result['data']['user_id'] . "</p>";
    echo "<p><strong>Total Coins:</strong> " . $result['data']['total_coins'] . "</p>";
    echo "<p><strong>Message:</strong> " . $result['message'] . "</p>";
    echo "</div>";
} else {
    echo "<div class='output'><p><strong>Failed to retrieve data or data not found.</strong></p></div>";
}
echo '<meta http-equiv="refresh" content="0">';
	    }
	
	if(!isset($_GET['submit'])){
echo"<form action='' method='get'>
    <input type='text' name='uid'  class='text' placeholder='Enter Your user-id' required><br>";
echo "<input type='submit' class='submit' name='submit' value='submit'>";
}
?>

<div class="footer">
    <a href="https://www.youtubre.com/@wedohacks" target="_blank">CONNECT WITH US</a>
</div>
</div>
</body>
</html>