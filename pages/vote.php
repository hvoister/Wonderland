<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <link rel="shortcut icon" href="../images/logo.png" type="image/png">
        <link href = "../style.css" rel = "stylesheet" type = "text/css">
        <title> Wonderland </title>
    </head>

    <body>
        <header>
            <div class="name"><h1>Wonderland</h1></div>
        </header>
<body>
  <nav>
      <div class = "navigation">
        <a href="../index.html">Главная</a>
      </div>

      <div class = "navigation">
        <a href="indi.html">Инди-рок</a>
      </div>

      <div class = "navigation">
        <a href="alt.html">Альт-рок</a>
      </div>

      <div class = "navigation">
        <a href="post.html">Пост-рок</a>
      </div>

      <div class = "navigation">
        <a href="poll.html">Опрос</a>
      </div>
  </nav>
<main style="opacity:0.75">
<?php

$host = 'localhost';
$database = 'poll_vote';
$user = 'root';
$password = 'root';

$link = mysqli_connect($host, $user, $password, $database);


$id =  $_POST['id'];
$votes = $_POST['votes'];
$isp = $_POST['isp'];
$name = $_POST['name'];
$us = $_POST['us'];

$query = "INSERT INTO notes (id, votes, isp, name, us) VALUES ('$id', '$votes', '$isp', '$name', '$us')";
$result = mysqli_query($link, $query);

$query='SELECT * FROM notes';
$result = mysqli_query($link, $query);

$body = '<html>
    <head>
        <meta charset = "utf-8">
        <link rel="shortcut icon" href="images/logo.png" type="image/png">
        <link href = "../style.css" rel = "stylesheet" type = "text/css">
        <title> Wonderland </title>
    </head>
		<body>
		';
echo $body;
echo "<h2>Таблица крутышей и их любимой музыки</h2>";
echo "<center><table border='10' cellpadding ='10px'>";
	echo "<tr>";
		echo "<th bgcolor='#633' align='center'>Индекс</th>";
		echo "<th bgcolor='#633' align='center'>Жанр</th>";
		echo "<th bgcolor='#633' align='center'>Исполнитель</th>";
		echo "<th bgcolor='#633' align='center'>Название</th>";
		echo "<th bgcolor='#633' align='center'>Пользователь</th>";
	echo "</tr>";
while ($note = mysqli_fetch_array($result)){
	echo "<tr>";
		echo "<td bgcolor='#669'>".$note ['id']. "</td>";
		echo "<td>".$note ['votes']. "</td>";
		echo "<td>".$note ['isp']. "</td>";
		echo "<td>".$note ['name']. "</td>";
		echo "<td>".$note ['us']. "</td>";
	echo "</tr>";};
echo "</table></center>";


mysqli_close($link);
?>
</main>
<footer class="footer_other">
    <p class="footert">CBS Interactive © 2022 wonderland.fm <br>Все права защищены</p>
</footer>
</body>
</html>
