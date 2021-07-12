<?php 
  require_once('functions.php');
  $header = include_template('header.php', []);
  print($header);
?>

    <main>
        <ul style="max-width: 1200px; margin-right: auto; margin-left: auto; padding-top: 50px; padding-bottom: 50px;">
            <li><a href="main.php" style="padding: 10px; color: #000000;">Главная</a></li>
            <li><a style="padding: 10px; color: #000000;" href="page-item.php">Страница продукта</a></li>
            <li><a style="padding: 10px; color: #000000;" href="price-list.php">Прайс-лист</a></li>

            <li><a style="padding: 10px; color: #000000;" href="news.php">Новости/Акции</a></li>

            <li><a style="padding: 10px; color: #000000;" href="news-item.php">Новость</a></li>
            <li><a style="padding: 10px; color: #000000;" href="promo-item.php">Акция</a></li>

            <li><a style="padding: 10px; color: #000000;" href="dilers.php">Как стать дилером</a></li>

            <li><a style="padding: 10px; color: #000000;" href="tires.php">Шины низкого давления</a></li>

            <li><a style="padding: 10px; color: #000000;" href="production.php">Производство</a></li>

            <li><a style="padding: 10px; color: #000000;" href="about.php">О компании </a></li>
            <li><a style="padding: 10px; color: #000000;" href="configurator.php">Конфигуратор</a></li>
            <br>

            <br>

            <br>
            <li>OTHER PAGES</li>
            <br>

            <br>

            <br>

            <li><a href="404.php"style="padding: 10px; color: #000000;">Ошибка 404</a></li>
            <li><a href="support.php"style="padding: 10px; color: #000000;">Клиентская поддержка</a></li>
            <li><a href="spare-parts.php"style="padding: 10px; color: #000000;">Заказ автозапчастей</a></li>
            <li><a href="service-request.php"style="padding: 10px; color: #000000;">Заявка на ТО</a></li>
            <li><a href="modernization-request.php"style="padding: 10px; color: #000000;">Заявка на модернизацию</a></li>
            <li><a href="service.php"style="padding: 10px; color: #000000;">Сервис</a></li>
            <li><a href="guarantee.php"style="padding: 10px; color: #000000;">Гарантия</a></li>
            <li><a href="accessories.php"style="padding: 10px; color: #000000;">Аксессуары</a></li>
            <li><a href="accessories-track-2.php"style="padding: 10px; color: #000000;">Аксессуары модели</a></li>
            <li><a href="become-dealer.php"style="padding: 10px; color: #000000;">Заявка на дилерство</a></li>
            <li><a href="find-dealer.php"style="padding: 10px; color: #000000;">Найти дилера</a></li>

        </ul>
    </main>

    <?php 
      $footer = include_template('footer.php', []);
      print($footer);
    ?> 