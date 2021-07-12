<?php 
  require_once('functions.php');
  $header = include_template('header.php', []);
  print($header);
?>

<main>
    <section class="error">

        <div class="error__item">
            <div class="error__block-images">
                <div class="error__images">
                    <img src="img/page-404-4.png" alt="">
                </div>
               <!--  <div class="error__images error__images-ellipse">
                    <img src="img/page-404-ellipse.png" alt="">
                </div> -->

                <div class="error__images error__images-car">
                    <img src="img/page-404-img.png" alt="">
                </div>

                <div class="error__images">
                    <img src="img/page-404-4.png" alt="">
                </div>


            </div>

            <div class="error__title">Страница не найдена</div>
            <div class="error__text">
                <p>Запрашиваемая вами страница не существует. Она была удалена, или не создана,<br> или вы ввели ошибочный адрес. Перейдите, пожалуйста на главную страницу.</p>


            </div>

            <div class="error__button">
                <a href="#">НА ГЛАВНУЮ</a>
            </div>
        </div>

    </section>
</main>

 <?php 
  $footer = include_template('footer.php', []);
  print($footer);
?> 