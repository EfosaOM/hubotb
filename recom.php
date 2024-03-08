<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Touchdown @ Super Bowl LVIII</title>
  <style>
    .header {
      background-color: #f0f0f0;
      padding: 20px;
      text-align: center;}

    .logo {
      max-width: 100px;
      max-height: 100px;}

    .content {
      text-align: center;
      margin: 20px;}

    .game-image {
      max-width: 400px;
      max-height: 300px;
      margin-bottom: 20px;}

    .video-container {
      display: flex;
      align-items: center;
      margin-top: 20px;
      flex-direction: column;}

    iframe {
      width: 400px;
      height: 225px;}
  </style>
</head>

<body>
  <div class="header">
    <img src="nfl-logo.png" alt="NFL Logo" class="logo">
    <a href="home.html"><h1>Home</h1></a> 
  </div>

  <div class="content">
    <h1>Touchdown @ Super Bowl LVIII</h1>
    <video width="640" height="360" controls>
        <source src="game.mp4" type="video/mp4">
    </video>    

    <form action="#" method="post">
    <label for="textbox">Type your question:</label>
    <input type="text" id="textbox" name="textbox" placeholder="Type something...">
    <input type="submit" name="submit" value="Submit">
    </form>

<?php
$servername = "localhost";
$username = "root";
$password = "2@0]JtYHE]gxuV_X";
$dbname = "hubotb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {die("Connection failed: " . mysqli_connect_error());}

if (array_key_exists('submit', $_POST)) {
    if (isset($_POST['textbox'])) {
        $questiontext = mysqli_real_escape_string($conn, $_POST['textbox']);

        $sql = "SELECT a.AnswerText FROM Questions q JOIN Answers a ON q.QuestionID = a.QuestionID WHERE q.QuestionText = '".$questiontext."'";

        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Answer: " . $row['AnswerText'];}} 
        else {echo "No answer found for the question.";}
    }}
?>

<p>
        <br><br>Touchdown Buddy thinks you would enjoy<br><br>
      <strong>Top 5 BIGGEST Plays in Eagles Victory vs. Commanders</strong>
    </p>

    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/8R8-RVP049k?si=UE0D5DrQtJV8COUx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    
    <p>
    <br><br>
        <strong>Eagles vs. Commanders | 2023 Week 8 Highlights</strong>
    </p>
    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/pQRKkt-_gD4?si=_rD_IX2Tf5HWSv6L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</body>
</html>