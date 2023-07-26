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
<main style="opacity:0.75; height: 445px;"><h2>
  <section>
    <?php
    if (@$_POST['lover']) {
        $file = $_POST['lover'].".txt";
        $f = @fopen($file, "r");
        $votes = fread($f,100);
        fclose($f);
        $votes++;
        $f=@fopen($file, "w");
        fwrite($f,$votes);
        fclose($f);
    }

    echo "<h2 style='text-align:center; margin-left: -60px'> Результаты голосования: </h2> <br>";
    $max=0;
    for ($i=2; $i<=5; $i++) {
        $f = @fopen($i.".txt","r");
        $v[$i - 2] = fread($f,100);
        fclose($f);
        if (empty ($v[$i-2])) $v[$i-2]=0;
        if ($v[$i-2] > $max) $max = $v[$i-2];
    }

    echo "<table style='font-size: 23px; font weight: bold';";

    for ($i=3; $i>=0; $i--) {

        echo "<tr><td>" . ($i+2) . " - " . $v[$i] . " (чел.) </td>";

        $w=floor($v[$i]/$max*100);
        ?>
        <td>

        <hr style="border-radius: 5px; height: 20px;   background:white; border:none" align="left" color="brown" size="20" width="<?=$w?>">

    </td>

    </tr>

    <?}?>
  </table>

  <hr align="left" width="700" style="height:5px; color: white; background-color: white;">

  <h2 style="font-size: 25px; color:white; font-family: Bold; text-align: left;"> Максимум = <?=$max?> </h2>
</h2></main>
<footer class="footer_other">
    <p class="footert">CBS Interactive © 2022 wonderland.fm <br>Все права защищены</p>
</footer>
</body>
</html>
