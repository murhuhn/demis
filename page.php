<?php
require_once("db.php");

$page = $_GET['id'];

$query = mysqli_query($connection, "SELECT * FROM $dbarticles WHERE id='$page' ");
?>


<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico">
		<title>Детальная страница</title>
		<link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<main>
			<div class="container">
				<?php 
				$article = mysqli_fetch_assoc($query);?>
				<div class="news__detail">
                <h3><?php echo $article['headline']?></h3>
                <div class="news__content">
                  <p class="news__text"><?php echo $article['text'] ?></p>
                  <div class="news__date"><?php echo  $article['date'] ?></div>
                </div>
              </div>
				
				<a href="all_news.php" class="button">Все новости</a>
			</div>
		</main>
	</body>
</html>
