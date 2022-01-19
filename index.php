
<?php
require_once("db.php");

$query = mysqli_query($connection, "SELECT * FROM $dbarticles ORDER BY id DESC LIMIT 3"); ?>



<!DOCTYPE html>
  <html lang="ru">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="icon" href="favicon.ico">
      <title>Тестовое задание Demis Group</title>
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
      <main>
        <div class="container">
          <div class="preview-news">
          <?php 
              while($article = mysqli_fetch_assoc($query)){
          ?>
              <div class="news">
                <?php echo ' <a href=page.php?id='.$article['id'].'>'.$article['headline'].'</a>';
                $text = $article['text'];
                  if (mb_strlen($text,'UTF-8')>50){
                  $text= mb_substr($text,0,150,'UTF-8');
                        $text.= "...";}
                        ?>
                <div class="news__content">
                  <p class="news__text"><?php echo $text ?></p>
                  <div class="news__date"><?php echo  $article['date'] ?></div>
                </div>
              </div>
          <?php 
              } 
          ?>
          </div>
          <a href="all_news.php" class="button">Все новости</a>
          <a href="form.html" class="button">Обратная связь</a>
        </div>
      </main>
    </body>
  </html>


