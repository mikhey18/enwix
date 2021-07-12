<?php 
  require_once('functions.php');
  $header = include_template('header.php', []);
  print($header);
?>

    <main>
        <section class="price-list">
            <div class="breadcrumbs bredcrumbs-third">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li>/</li>
                    <li><a href="#">О компании</a></li>
                    <li>/</li>
                    <li>Прайс-лист</li>
                </ul>
            </div>
            <div class="price-list__wrapper">
                <div class="price-list__main">
                    <div class="price-list__main-item">
                        <img src="img/ar8_red.png" alt="">
                        <h3>Scout</h3>
                        <p>Гусеничный мини-вездеход</p>
                        <div class="price-list__download">
                            <a href="#" target="_blank">прайс-лист</a>
                            <a href="#" target="_blank">презентация</a>
                        </div>
                        <a href="configurator.php" class="price-list__link">КОНФИГУРАТОР</a>
                    </div>

                    <div class="price-list__main-item">
                        <img src="img/ar8_black.png" alt="">
                        <h3>track 2</h3>
                        <p>Гусеничный мини-вездеход</p>
                        <div class="price-list__download">
                            <a href="#" target="_blank">прайс-лист</a>
                            <a href="#" target="_blank">презентация</a>
                        </div>
                        <a href="configurator.php" class="price-list__link">КОНФИГУРАТОР</a>
                    </div>


                    <div class="price-list__main-item">
                        <img src="img/ar8_green.png" alt="">
                        <h3>armor</h3>
                        <p>Гусеничный мини-вездеход</p>
                        <div class="price-list__download">
                            <a href="#" target="_blank">прайс-лист</a>
                            <a href="#" target="_blank">презентация</a>
                        </div>
                        <a href="configurator.php" class="price-list__link">КОНФИГУРАТОР</a>
                    </div>

                    <div class="price-list__main-item">
                        <img src="img/ar8_blue.png" alt="">
                        <h3>track 2</h3>
                        <p>Гусеничный мини-вездеход</p>
                        <div class="price-list__download">
                            <a href="#" target="_blank">прайс-лист</a>
                            <a href="#" target="_blank">презентация</a>
                        </div>
                        <a href="configurator.php" class="price-list__link">КОНФИГУРАТОР</a>
                    </div>

                    <div class="price-list__main-item">
                        <img src="img/ar8_orange.png" alt="">
                        <h3>armor</h3>
                        <p>Гусеничный мини-вездеход</p>
                        <div class="price-list__download">
                            <a href="#" target="_blank">прайс-лист</a>
                            <a href="#" target="_blank">презентация</a>
                        </div>
                        <a href="configurator.php" class="price-list__link">КОНФИГУРАТОР</a>
                    </div>
                </div>
            </div>
        </section>
       

       
    </main>
    <?php 
      $footer = include_template('footer.php', []);
      print($footer);
    ?> 