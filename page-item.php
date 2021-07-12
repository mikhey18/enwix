<?php 
  require_once('functions.php');
  $header = include_template('header.php', []);
  print($header);
?>

    <main>

        <div class="page-item__wrapper">
            <section class="first-screen">
                <div class="bredcrumbs">
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li>/</li>
                        <li><a href="#">Модели</a></li>
                        <li>/</li>
                        <li>Scout</li>
                    </ul>
                 </div>
                <div class="first-screen__wrapper">
                    <div class="swiper-container first-screen__slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image: url(img/e-scout.jpg)">
                                <div class="first-screen__slider--cover"></div>
                                <div class="first-screen__slider-wrap">
                                    <h2>Enwix scout</h2>
                                    <p>Одна из ведущих компаний по производству вездеходов в России.</p>
                                    <a href="#" class="btn parameter-btn" data-value="parameter">Характеристики</a>
                                    <a href="#" class="btn btn-second kviz-click">ЗАПИСАТЬСЯ НА ТЕСТ-ДРАЙВ</a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-image: url(img/fs.jpg)">
                                <div class="first-screen__slider--cover"></div>
                                <div class="first-screen__slider-wrap">
                                    <h2>Enwix scout</h2>
                                    <p>Одна из ведущих компаний по производству вездеходов в России.</p>
                                    <a href="#" class="btn parameter-btn" data-value="parameter">Характеристики</a>
                                    <a href="#" class="btn btn btn-second kviz-click">ЗАПИСАТЬСЯ НА ТЕСТ-ДРАЙВ</a>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-image: url(img/fs.jpg)">
                                <div class="first-screen__slider--cover"></div>
                                <div class="first-screen__slider-wrap">
                                    <h2>Enwix scout</h2>
                                    <p>Одна из ведущих компаний по производству вездеходов в России.</p>
                                    <a href="#" class="btn parameter-btn" data-value="parameter">Характеристики</a>
                                    <a href="#" class="btn btn btn-second kviz-click">ЗАПИСАТЬСЯ НА ТЕСТ-ДРАЙВ</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                    
                </div>
            </section>

            <section class="first-screen__desktop swiper-container">
                    
                    <div class="swiper-wrapper">
                      <div class="swiper-slide" style="background-image: url(img/e-scout.jpg)">
                                <div class="first-screen__slider--cover"></div>
                                <div class="first-screen__slider-wrap">
                                    <h2>Enwix scout</h2>
                                    <p>Одна из ведущих компаний по производству вездеходов в России.</p>
                                    <a href="#" class="btn parameter-btn" data-value="parameter">Характеристики</a>
                                    <a href="#" class="btn btn btn-second kviz-click">ЗАПИСАТЬСЯ НА ТЕСТ-ДРАЙВ</a>
                                </div>
                            </div>
                      <div class="swiper-slide" style="background-image: url(img/fs.jpg)">
                                <div class="first-screen__slider--cover"></div>
                                <div class="first-screen__slider-wrap">
                                    <h2>Enwix scout</h2>
                                    <p>Одна из ведущих компаний по производству вездеходов в России.</p>
                                    <a href="#" class="btn parameter-btn" data-value="parameter">Характеристики</a>
                                    <a href="#" class="btn btn btn-second kviz-click">ЗАПИСАТЬСЯ НА ТЕСТ-ДРАЙВ</a>
                                </div>
                            </div>
                      <div class="swiper-slide" style="background-image: url(img/fs.jpg)">
                                <div class="first-screen__slider--cover"></div>
                                <div class="first-screen__slider-wrap">
                                    <h2>Enwix scout</h2>
                                    <p>Одна из ведущих компаний по производству вездеходов в России.</p>
                                    <a href="#" class="btn parameter-btn" data-value="parameter">Характеристики</a>
                                    <a href="#" class="btn btn btn-second kviz-click">ЗАПИСАТЬСЯ НА ТЕСТ-ДРАЙВ</a>
                                </div>
                            </div>
                     
                    </div>
                    
                        <!-- Add Scrollbar -->
                        <div class="swiper-scrollbar"></div>
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>

                        <div class="pagination-background"></div>
            </section>

            <section class="model-desk">
                <div class="bredcrumbs-second">
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li>/</li>
                        <li><a href="#">Модели</a></li>
                        <li>/</li>
                        <li>Scout</li>
                    </ul>
                </div>
                <div class="model-desk__container">
                    <h3>Универсальный вездеход Enwix scout</h3>
                    <div class="model-desk__container">
                        <div class="model-desk__img">

                            <div class="model-desk__img--wrap">
                                <div class="poz_vezd" id="green"></div>
                                <div class="poz_vezd" id="red" style="display: none;"></div>
                                <div class="poz_vezd" id="orange" style="display: none;"></div>
                                <div class="poz_vezd" id="yellow" style="display: none;"></div>
                                <div class="poz_vezd" id="black" style="display: none;"></div>
                                <div class="poz_vezd" id="blue" style="display: none;"></div>
                                


                            </div>


                            <div class="model_color">
                                <div class="model_color_krug active" data-color="green">
                                    <div class="active-m"></div>
                                </div>
                                <div class="model_color_krug" data-color="red">
                                    <div class="active-m"></div>
                                </div>
                                <div class="model_color_krug" data-color="blue">
                                    <div class="active-m"></div>
                                </div>
                                <div class="model_color_krug" data-color="orange">
                                    <div class="active-m"></div>
                                </div>
                                <div class="model_color_krug" data-color="yellow">
                                    <div class="active-m"></div>
                                </div>
                                <div class="model_color_krug" data-color="black">
                                    <div class="active-m"></div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="model-desk__opis">
                            <span>Заменит 5 моделей спецтехники</span>
                            <div class="model-desk__opis-list">
                                <div class="model-desk__opis-list--item">
                                   <img src="img/svg1.svg" alt=""> 
                                   <div>
                                       <span>Снегоход</span>
                                       <p>Для беспрепятственного хода по заснеженным местам</p>
                                   </div>
                                </div>
                                <div class="model-desk__opis-list--item">
                                    <img src="img/svg2.svg" alt=""> 
                                   <div>
                                       <span>Трактор</span>
                                       <p>Для уборки снега, работ на даче и в саду</p>
                                   </div>
                                </div>
                                <div class="model-desk__opis-list--item">
                                    <img src="img/svg3.svg" alt=""> 
                                   <div>
                                       <span>Амфибия</span>
                                       <p>Для передвижения по воде</p>
                                   </div>
                                </div>
                                <div class="model-desk__opis-list--item">
                                    <img src="img/svg4.svg" alt=""> 
                                   <div>
                                       <span>Квадроцикл</span>
                                       <p>Практически для любого бездорожья</p>
                                   </div>
                                </div>
                                <div class="model-desk__opis-list--item">
                                    <img src="img/svg5.svg" alt=""> 
                                   <div>
                                       <span>Болотоход</span>
                                       <p>Для преодоления сложных заболоченных участков</p>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="model-desk__link--wrap"><a class="model-desk__link btn-click__popup" href="#" data-value="popup-call-item">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</a></div>
                </div>
            
            </section>

            <section class="create-vehicles">
                <div class="create-vehicles__wrapper">
                    <div class="create-vehicles__wrapper-second">
                        <a href="https://youtu.be/C39-Q4iDzIQ" data-fancybox="video" style="background-image: url(img/adv.jpg);">
                        </a>
                        <div class="page-item__video-title"><span>видеообзор вездехода enwix scout</span></div>
                    </div>
                    
                </div>
            </section>

            <section class="possibilities-model">
                <div class="possibilities-model__wrapper">
                    <h3>возможности вездехода enwix scout</h3>
                    <div class="possibilities-model__list">
                        <ul>
                            <li class="active" data-name="engine">Двигатель</li>
                            <li data-name="corpus">Корпус</li>
                            <li data-name="rama">Рама</li>
                            <li data-name="osi">Полуоси</li>
                            <li data-name="trans">Трансмиссия</li>
                            <li data-name="chain">Цепи</li>
                            <li data-name="tracks">Гусеницы</li>
                        </ul>
                    </div>
                    <div class="possibilities-model__content-wrap-background">
                        <div class="possibilities-model__content-wrap">

                            <div class="possibilities-model__item" id="engine" data-role="engine">
                                <div class="possibilities-model__item-wrap">
                                    <div class="possibilities-model__img">
                                        <img src="img/engine1.jpg" alt="">
                                    </div>
                                    <div class="possibilities-model__text">
                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>

                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-second kviz-click btn-third">ЗАПИСАТЬСЯ НА ТЕСТ-ДРАЙВ</a>
                            </div>

                            <div class="possibilities-model__item" id="corpus" data-role="corpus">
                                <div class="possibilities-model__item-wrap">
                                    <div class="possibilities-model__img">
                                        <img src="img/engine1.jpg" alt="">
                                    </div>
                                    <div class="possibilities-model__text">
                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>

                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="possibilities-model__item" id="rama" data-role="rama">
                                <div class="possibilities-model__item-wrap">
                                    <div class="possibilities-model__img">
                                        <img src="img/engine1.jpg" alt="">
                                    </div>
                                    <div class="possibilities-model__text">
                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>

                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="possibilities-model__item" id="osi" data-role="osi">
                                <div class="possibilities-model__item-wrap">
                                    <div class="possibilities-model__img">
                                        <img src="img/engine1.jpg" alt="">
                                    </div>
                                    <div class="possibilities-model__text">
                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>

                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="possibilities-model__item" id="trans" data-role="trans">
                                <div class="possibilities-model__item-wrap">
                                    <div class="possibilities-model__img">
                                        <img src="img/engine1.jpg" alt="">
                                    </div>
                                    <div class="possibilities-model__text">
                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>

                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="possibilities-model__item" id="chain" data-role="chain">
                                <div class="possibilities-model__item-wrap">
                                    <div class="possibilities-model__img">
                                        <img src="img/engine1.jpg" alt="">
                                    </div>
                                    <div class="possibilities-model__text">
                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>

                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="possibilities-model__item" id="tracks" data-role="tracks">
                                <div class="possibilities-model__item-wrap">
                                    <div class="possibilities-model__img">
                                        <img src="img/engine1.jpg" alt="">
                                    </div>
                                    <div class="possibilities-model__text">
                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>

                                        <h4>Сравнение с конкурентами</h4>
                                        <p>Двигатель, устанавливаемый на вездеходах TINGER, почти в 2 раза превосходит по мощности своих одноклассников. К примеру, максимальная мощность двигателей снегоболотоходов TINGER на 26 л. с. больше, чем у всемирно известных вездеходов Аrgo. Это позволяет TINGER без потери скорости и тяги преодолевать сложные дорожные условия. К примеру,по болотистой местности Аrgo движется с максимальной скоростью 15 км/ч, в то время как TINGER способен развивать скорость до 25 км/ч.</p>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>

                </div>
            </section>


            <section class="page-item__images">
                <div class="page-item__images-wrapper">

                    <div class="page-item__images-container">

                        <div class="page-item__images-item">
                            <img src="img/picture1.jpg" alt="">
                        </div>

                        <div class="page-item__images-item">
                            <img src="img/picture2.jpg" alt="">
                        </div>

                        <div class="page-item__images-item">
                            <img src="img/picture3.jpg" alt="">
                        </div>

                    </div>

                    <div class="page-item__images-container">

                        <div class="page-item__images-item">
                            <img src="img/picture4.jpg" alt="">
                        </div>

                        <div class="page-item__images-item">
                            <img src="img/picture5.jpg" alt="">
                        </div>

                        <div class="page-item__images-item">
                            <img src="img/picture6.jpg" alt="">
                        </div>

                    </div>


                    <div class="page-item__images-container">

                        <div class="page-item__images-item">
                            <img src="img/picture7.jpg" alt="">
                        </div>

                        <div class="page-item__images-item">
                            <img src="img/picture8.jpg" alt="">
                        </div>

                        <div class="page-item__images-item">
                            <img src="img/picture9.jpg" alt="">
                        </div>

                    </div>

                </div>
            </section>

            <section class="technical-desk" id="parameter">
                <div class="technical-desk__wrapper">
                    <h3>Технические характеристики enwix scout</h3>
                    <div class="technical-desk__container">

                        <div>
                            <div class="technical-desk__img">
                                <img src="img/tech.jpg" alt="картинка">
                            </div>

                            <div class="technical-desk__add">
                                <div class="technical-desk__main-title"><p>Дополнительно</p></div>
                                <div>
                                    <span>Гарантия</span>
                                    <span></span>
                                    <span>2 года</span>
                                </div>
                                <div>
                                    <span>Год</span>
                                    <span></span>
                                    <span>2021</span>
                                </div>
                            </div>

                        </div>

                        <div class="technical-desk__main">
                            <div class="technical-desk__main-title"><p>Основные</p></div>
                            <div>
                                <span>Двигатель</span>
                                <span></span>
                                <span>2-х цилиндр. V:690 LIFAN 24 л.с.</span>
                            </div>

                            <div>
                                <span>Максимальная скорость</span>
                                <span></span>
                                <span style="margin-right: 228px;">35 км/ч</span>
                            </div>


                            <div>
                                <span>Вес</span>
                                <span></span>
                                <span style="margin-right: 237px;">580 кг</span>
                            </div>

                            <div>
                                <span>Габариты д/ш/в (мм)</span>
                                <span></span>
                                <span style="margin-right: 148px;">2400х1340х1900</span>
                            </div>

                            <div>
                                <span>Клиренс</span>
                                <span></span>
                                <span style="margin-right: 227px;">300 мм</span>
                            </div>

                            <div>
                                <span>Тяговое усилие</span>
                                <span></span>
                                <span style="margin-right: 238px;">250 кг</span>
                            </div>

                            <div>
                                <span>Корпус</span>
                                <span></span>
                                <span style="margin-right: 239px;">HDPE</span>
                            </div>

                            <div>
                                <span>Тормозная система</span>
                                <span></span>
                                <span style="margin-right: 139px;">Гидравлическая</span>
                            </div>

                            <div>
                                <span>Давление на грунт</span>
                                <span></span>
                                <span style="margin-right: 180px;">0,045 кг/см2</span>
                            </div>

                            <div>
                                <span>Топливо / объем бака</span>
                                <span></span>
                                <span style="margin-right: 130px;">АИ 92 / 28 литров</span>
                            </div>

                            <div>
                                <span>Количество пассажиров</span>
                                <span></span>
                                <span style="margin-right: 16px;">2 чел. на суше / 2 чел. на воде</span>
                            </div>

                            <div>
                                <span>Система охлаждения</span>
                                <span></span>
                                <span style="margin-right: 186px;">Воздушная</span>
                            </div>

                            <div>
                                <span>Трансмиссия</span>
                                <span></span>
                                <span style="margin-right: 44px;">Бесступенчатый вариатор</span>
                            </div>

                            <div>
                                <span>Рулевое управление</span>
                                <span></span>
                                <span style="max-width: 212px; margin-right: 80px;">Эргономичное, одним рулевым рычагом</span>
                            </div>

                            <div>
                                <span>Нагрузка на сцепной шар</span>
                                <span></span>
                                <span style="margin-right: 245px;">90 кг</span>
                            </div>

                            <div>
                                <span>Рабочие температуры</span>
                                <span></span>
                                <span style="margin-right: 181px;">-30С°...+30С°</span>
                            </div>
                        </div>

                        <div class="technical-desk__price">
                            <span>цена:</span>
                            <span>585 000 ₽</span>
                        </div>

                    </div>
                    <div class="technical-desk__wrapper-buttons">
                        <a href="#" class="btn btn-click__popup" data-value="popup-call-purchase">РАССРОЧКА И КРЕДИТ</a>
                        <a href="#" class="btn btn-second btn-click__popup" data-value="popup-call-item">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</a>
                        <a href="configurator.php" class="btn">КОНФИГУРАТОР</a>
                    </div>
                </div>
            </section>

            <section class="features-model">
                <div class="features-model__wrapper">
                    <h3>ПРЕИМУЩЕСТВА МОДЕЛИ ENWIX SCOUT</h3>

                    <div class="features-model__mobile">
                        <div class="features-model__mobile-item">
                            <img src="img/seats.jpg" alt="">
                            <span>Эргономичные и комфортные сиденья</span>
                        </div>
                        <div class="features-model__mobile-item">
                            <img src="img/drive.jpg" alt="">
                            <span>Удобное рулевое управление</span>
                        </div>
                        <div class="features-model__mobile-item">
                            <img src="img/engine.jpg" alt="">
                            <span>Надежный и экономичный двигатель</span>
                        </div>
                        <div class="features-model__mobile-item">
                            <img src="img/chain.jpg" alt="">
                            <span>Простые и надежные элементы трансмиссии</span>
                        </div>
                        <div class="features-model__mobile-item">
                            <img src="img/chain.jpg" alt="">
                            <span>Легкий и прочный корпус</span>
                        </div>
                        <div class="features-model__mobile-item">
                            <img src="img/chain.jpg" alt="">
                            <span>Особопрочные гусеницы</span>
                        </div>
                    </div>

                    <div class="features-model__desktop">
                        <img src="img/g2.png" alt="картинка">
                    </div>

                </div>
            </section>
        </div>

       
    </main>
    <?php 
      $footer = include_template('footer.php', []);
      print($footer);
    ?> 