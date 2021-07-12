<?php 
  require_once('functions.php');
  $header = include_template('header.php', []);
  print($header);
?>

<main>
    <section class="become-dealer">

        
        <div class="breadcrumbs bredcrumbs-third bredcrumbs-third-back--mobile">
                <svg width="12" height="7" viewBox="0 0 12 8" fill="black" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.29114 0.70874L3.82566 1.24328L1.44707 3.6219H12V4.37786H1.44707L3.82566 6.75646L3.29114 7.291L0 3.99986L3.29114 0.70874Z" fill="black"/>
                    </svg><a onclick="javascript:history.back();return false;">Назад </a>
        </div>

        <div class="breadcrumbs bredcrumbs-third bredcrumbs-third-back--desktop">
            <svg width="24" height="13" viewBox="0 0 12 8" fill="black" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.29114 0.70874L3.82566 1.24328L1.44707 3.6219H12V4.37786H1.44707L3.82566 6.75646L3.29114 7.291L0 3.99986L3.29114 0.70874Z" fill="black"/>
                </svg><a onclick="javascript:history.back();return false;">Назад </a>
    </div>



        <!-- <div class="news-main__wrapper"> -->

            <div class="become-dealer__item">
                <div class="become-dealer__title">стать дилером - 
                    оставить заявку</div>

                    <form action="/" method="post">
                        <div class="become-dealer__block">
                            <div class="become-dealer__block-title">Контактная информация компании заявителя</div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">Юридическое название предприятия и форма собственности</label>
                                        <input type="text" placeholder="ООО «Волна»">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">Адрес фактического местонахождения</label>
                                        <input type="text" placeholder="123456, г. Москва, ул. Подвойского, д. ...">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">Контактное лицо, должность *</label>
                                        <input type="text" placeholder="Иванов Иван, менеджер">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">Телефон *</label>
                                        <input type="tel" placeholder="+7 (978) 382-54-66">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">E-mail</label>
                                        <input type="email" placeholder="info@volna.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group become-dealer__block-form-group--last">
                                        <label for="">Сайт компании</label>
                                        <input type="text" placeholder="www.volna.ru">
                                    </div>
                                </div>

                            
                        </div>

                        <div class="become-dealer__block">
                            <div class="become-dealer__block-title">Данные компании заявителя</div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">Ассортимент основной продукции с указанием брендов</label>
                                        <input type="text" placeholder="Вездеходы Enwix">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">Партнерство в сфере финансовых продуктов: банки, лизинговые компании</label>
                                        <input type="text" placeholder="Банк АО «АБ «Россия»">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">Общее количество сотрудников компании</label>
                                        <input type="text" placeholder="120">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">Количество менеджеров отдела продаж</label>
                                        <input type="text" placeholder="10">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">Количество работников сервиса (механиков, инженер по гарантии, сотрудников склада)</label>
                                        <input type="7" placeholder="info@volna.com">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">Торговый зал (шоу-рум), площадь 
                                            в м²</label>
                                        <input type="text" placeholder="57,5">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">СТО, количество рабочих постов</label>
                                        <input type="text" placeholder="4">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">График работы компании (отдела продаж, сервиса)</label>
                                        <input type="text" placeholder="Пн.-пт. с 10:00 - 19:00">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">Наличие склада запасных частей</label>
                                        <input type="text" placeholder="2">
                                    </div>
                                </div>

                                <div class="become-dealer__block-form">
                                    <div class="become-dealer__block-form-group">
                                        <label for="">Другая важная информация, комментарии</label>
                                        <textarea name="text"></textarea>
                                    </div>
                                </div>

                        </div>
                    </form>

            </div>

            <div class="become-dealer__block-button">
                <button type="submit">СТАТЬ ДИЛЕРОМ</button>
            </div>

            <div class="become-dealer__block__policy-link">
                <p>Отправляя форму, вы соглашаетесь с <a href="#">политикой обработки персональных данных.</a></>
            </div>

            
    </section>

</main>

 <?php 
  $footer = include_template('footer.php', []);
  print($footer);
?> 