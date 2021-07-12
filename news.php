<?php 
  require_once('functions.php');
  $header = include_template('header.php', []);
  print($header);
?>

    <main>
        <section class="news-main">
            <div class="breadcrumbs bredcrumbs-third">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li>/</li>
                    <li>События</li>
                    
                </ul>
            </div>
            <div class="news-main__wrapper">

                <div class="news-main__menu">
                    <button></button>
                    <ul>
                        <li class="active news-tab" data-name="news">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.1428 6.00001H18.8571V0.857159C18.8571 0.383755 18.4734 0 18 0H0.857159C0.383755 0 0 0.383755 0 0.857159V20.5714C0 22.465 1.53502 24 3.42859 24H20.5714C22.465 24 24 22.465 24 20.5714V6.85712C24 6.38377 23.6162 6.00001 23.1428 6.00001ZM6.85712 4.28569H12C12.4734 4.28569 12.8571 4.66945 12.8571 5.14285C12.8571 5.61626 12.4734 6.00001 12 6.00001H6.85712C6.38372 6.00001 5.99996 5.61626 5.99996 5.14285C5.99996 4.66945 6.38377 4.28569 6.85712 4.28569ZM14.5714 20.5714H4.28569C3.81229 20.5714 3.42854 20.1877 3.42854 19.7143C3.42854 19.2409 3.81229 18.8571 4.28569 18.8571H14.5714C15.0448 18.8571 15.4286 19.2409 15.4286 19.7143C15.4286 20.1877 15.0448 20.5714 14.5714 20.5714ZM14.5714 17.1428H4.28569C3.81229 17.1428 3.42854 16.7591 3.42854 16.2857C3.42854 15.8123 3.81229 15.4285 4.28569 15.4285H14.5714C15.0448 15.4285 15.4286 15.8123 15.4286 16.2857C15.4286 16.7591 15.0448 17.1428 14.5714 17.1428ZM14.5714 13.7143H4.28569C3.81229 13.7143 3.42854 13.3305 3.42854 12.8571C3.42854 12.3837 3.81229 12 4.28569 12H14.5714C15.0448 12 15.4286 12.3837 15.4286 12.8571C15.4286 13.3305 15.0448 13.7143 14.5714 13.7143ZM14.5714 10.2857H4.28569C3.81229 10.2857 3.42854 9.90195 3.42854 9.42855C3.42854 8.95514 3.81229 8.57139 4.28569 8.57139H14.5714C15.0448 8.57139 15.4286 8.95514 15.4286 9.42855C15.4286 9.90195 15.0448 10.2857 14.5714 10.2857ZM22.2857 20.5714C22.2857 21.5182 21.5182 22.2857 20.5714 22.2857C19.6247 22.2857 18.8571 21.5182 18.8571 20.5714V7.71428H22.2857V20.5714H22.2857Z" fill="black"/>
                            </svg>
                        Новости</li>
                        <li class="promo-tab" data-name="promo">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.4648 8.13534L16.1834 6.15816C17.3566 3.1942 15.157 0 12 0C8.83852 0 6.64537 3.19927 7.81659 6.15816L5.53523 8.13534C4.8773 8.70548 4.5 9.5318 4.5 10.4024V21.75C4.5 22.9906 5.50936 24 6.75 24H17.25C18.4906 24 19.5 22.9906 19.5 21.75V10.4024C19.5 9.53184 19.1227 8.70553 18.4648 8.13534ZM12 1.5C13.8873 1.5 15.309 3.22903 14.9429 5.08308L14.4663 4.67006C13.05 3.44255 10.9475 3.4447 9.53363 4.67006L9.05709 5.08308C8.69156 3.23156 10.1104 1.5 12 1.5ZM18 21.75C18 22.1635 17.6635 22.5 17.25 22.5H6.75C6.33647 22.5 6 22.1635 6 21.75V10.4024C6 9.96712 6.18867 9.55397 6.51759 9.26888L8.60836 7.45687C9.29063 8.23763 10.2259 8.76272 11.25 8.93672V9C11.25 9.41419 11.5858 9.75 12 9.75C12.4142 9.75 12.75 9.41419 12.75 9V7.5C12.75 7.08581 12.4142 6.75 12 6.75C11.6178 6.75 11.3031 7.03603 11.2566 7.40555C10.6714 7.25513 10.1418 6.93066 9.74189 6.47452L10.516 5.80359C11.3683 5.06503 12.6333 5.06634 13.484 5.80359C14.2684 6.48347 16.2393 8.19159 17.4824 9.26892C17.8114 9.55402 18 9.96717 18 10.4025V21.75Z" fill="white"/>
                            <path d="M15.0843 12.158C14.7574 11.9037 14.2861 11.9626 14.0318 12.2896L8.78181 19.0396C8.39616 19.5355 8.75738 20.2501 9.37332 20.2501C9.59682 20.2501 9.81802 20.1506 9.96587 19.9605L15.2159 13.2105C15.4702 12.8835 15.4112 12.4123 15.0843 12.158Z" fill="white"/>
                            <path d="M14.625 20.25C15.4534 20.25 16.125 19.5784 16.125 18.75C16.125 17.9216 15.4534 17.25 14.625 17.25C13.7966 17.25 13.125 17.9216 13.125 18.75C13.125 19.5784 13.7966 20.25 14.625 20.25Z" fill="white"/>
                            <path d="M9.375 15C10.2034 15 10.875 14.3284 10.875 13.5C10.875 12.6716 10.2034 12 9.375 12C8.54657 12 7.875 12.6716 7.875 13.5C7.875 14.3284 8.54657 15 9.375 15Z" fill="white"/>
                            </svg>

                            Акции</li>
                    </ul>
                </div>

                <div class="news-main__content" id="news">
                    <div class="news-main__content-title">
                        <h1>Новости</h1>
                        <a href="#" data-value="popup-call-mailing" class="btn-click__popup">Подписка на новости</a>
                    </div>


                    <div class="tags-container">
                        <a href="#">#Enwix</a>
                        <a href="#">#снегоболотоход</a>
                        <a href="#">#вездеход</a>
                        <a href="#">#снегоболотоход</a>
                        <a href="#">#Enwix</a>
                        <a href="#">#Enwix</a>
                        <a href="#">#снегоболотоход</a>
                        <a href="#">#вездеход</a>
                        <a href="#">#снегоболотоход</a>
                        <a href="#">#Enwix</a>
                        <a href="#">#Enwix</a>
                        <a href="#">#снегоболотоход</a>
                        <a href="#">#вездеход</a>
                        <a href="#">#снегоболотоход</a>
                        <a href="#">#Enwix</a>
                        <a href="#">#Enwix</a>
                        <a href="#">#снегоболотоход</a>
                        <a href="#">#вездеход</a>
                    </div>


                    <div class="tags-container__search">
                        <span>Результаты поиска по тегу:</span>
                        <a href="#" class="tags-container__search--tag">#снегоболотоход</a>
                        <a href="#" class="tags-container__search--close"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 0.589189L9.41081 0L5 4.41081L0.589189 0L0 0.589189L4.41081 5L0 9.41081L0.589189 10L5 5.58919L9.41081 10L10 9.41081L5.58919 5L10 0.589189Z" fill="black"/></svg></a>
                    </div>


                    <div class="news-main__text">
                        <div class="news-item">
                            <a href="#">
                                <img src="img/new1.jpg" alt="картинка">
                                <span>29.07.2019</span>
                                <h3>Возможности снегоболотоходов ENWIX оценили лучшие энергетики России</h3>
                            </a>
                            <div class="news-item__tags">
                                <a href="#">#Enwix</a>
                                <a href="#">#снегоболотоход</a>
                                <a href="#">#вездеход</a>
                            </div>
                        </div>
                        <div class="news-item">
                            <a href="#">
                                <img src="img/new3.jpg" alt="картинка">
                                <span>29.07.2019</span>
                                <h3>Новая партия вездеходов ENWIX на днях покинула завод-производитель и отправилась в Японию</h3>
                            </a>
                            <div class="news-item__tags">
                                <a href="#">#Enwix</a>
                                <a href="#">#снегоболотоход</a>
                                <a href="#">#вездеход</a>
                                <a href="#">#Enwix</a>
                                <a href="#">#снегоболотоход</a>
                                <a href="#">#вездеход</a>
                            </div>
                        </div>
                        <div class="news-item">
                            <a href="#">
                                <img src="img/new-item1.jpg" alt="картинка">
                                <span>29.07.2019</span>
                                <h3>ENWIX на службе охраны природы</h3>
                            </a>
                            <div class="news-item__tags">
                                <a href="#">#Enwix</a>
                                <a href="#">#снегоболотоход</a>
                                <a href="#">#вездеход</a>
                            </div>
                        </div>
                        <div class="news-item">
                            <a href="#">
                                <img src="img/new-item2.jpg" alt="картинка">
                                <span>29.07.2019</span>
                                <h3>Возможности снегоболотоходов ENWIX оценили лучшие энергетики России</h3>
                            </a>
                            <div class="news-item__tags">
                                <a href="#">#Enwix</a>
                                <a href="#">#снегоболотоход</a>
                                <a href="#">#вездеход</a>
                            </div>
                        </div>
                        <div class="news-item">
                            <a href="#">
                                <img src="img/new-item1.jpg" alt="картинка">
                                <span>29.07.2019</span>
                                <h3>Возможности снегоболотоходов ENWIX оценили лучшие энергетики России</h3>
                            </a>
                            <div class="news-item__tags">
                                <a href="#">#Enwix</a>
                                <a href="#">#снегоболотоход</a>
                                <a href="#">#вездеход</a>
                            </div>
                        </div>
                        <div class="news-item">
                            <a href="#">
                                <img src="img/new-item2.jpg" alt="картинка">
                                <span>29.07.2019</span>
                                <h3>Возможности снегоболотоходов ENWIX оценили лучшие энергетики России</h3>
                            </a>
                            <div class="news-item__tags">
                                <a href="#">#Enwix</a>
                                <a href="#">#снегоболотоход</a>
                                <a href="#">#вездеход</a>
                            </div>
                        </div>
                        <div class="news-item">
                            <a href="#">
                                <img src="img/new1.jpg" alt="картинка">
                                <span>29.07.2019</span>
                                <h3>Возможности снегоболотоходов ENWIX оценили лучшие энергетики России</h3>
                            </a>
                            <div class="news-item__tags">
                                <a href="#">#Enwix</a>
                                <a href="#">#снегоболотоход</a>
                                <a href="#">#вездеход</a>
                            </div>
                        </div>
                        <div class="news-item">
                            <a href="#">
                                <img src="img/new2.jpg" alt="картинка">
                                <span>29.07.2019</span>
                                <h3>Возможности снегоболотоходов ENWIX оценили лучшие энергетики России</h3>
                            </a>
                            <div class="news-item__tags">
                                <a href="#">#Enwix</a>
                                <a href="#">#снегоболотоход</a>
                                <a href="#">#вездеход</a>
                            </div>
                        </div>
                        <div class="news-item">
                            <a href="#">
                                <img src="img/new1.jpg" alt="картинка">
                                <span>29.07.2019</span>
                                <h3>Возможности снегоболотоходов ENWIX оценили лучшие энергетики России</h3>
                            </a>
                            <div class="news-item__tags">
                                <a href="#">#Enwix</a>
                                <a href="#">#снегоболотоход</a>
                                <a href="#">#вездеход</a>
                            </div>
                        </div>
                        <div class="news-item">
                            <a href="#">
                                <img src="img/new2.jpg" alt="картинка">
                                <span>29.07.2019</span>
                                <h3>Возможности снегоболотоходов ENWIX оценили лучшие энергетики России</h3>
                            </a>
                            <div class="news-item__tags">
                                <a href="#">#Enwix</a>
                                <a href="#">#снегоболотоход</a>
                                <a href="#">#вездеход</a>
                            </div>
                        </div>
                    </div>



                    <div class="pagination-wrapper">
                        <ul class="pagination-list">
                            <li><a href="#"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M3.87093 7.56099L11.2591 0.172821C11.5037 -0.0633983 11.8934 -0.0566162 12.1297 0.187973C12.3601 0.426573 12.3601 0.80482 12.1297 1.04338L5.17677 7.99627L12.1297 14.9492C12.37 15.1896 12.37 15.5793 12.1297 15.8197C11.8892 16.0601 11.4995 16.0601 11.2591 15.8197L3.87093 8.43155C3.63056 8.19111 3.63056 7.80139 3.87093 7.56099Z" fill="black"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="16" height="16" fill="white" transform="matrix(-1 0 0 1 16 0)"/>
                            </clipPath>
                            </defs>
                            </svg></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.43901 7.56099L1.05084 0.172821C0.80625 -0.0633983 0.416495 -0.0566162 0.180276 0.187973C-0.0501714 0.426573 -0.0501714 0.80482 0.180276 1.04338L7.13316 7.99627L0.180276 14.9492C-0.060092 15.1896 -0.060092 15.5793 0.180276 15.8197C0.420716 16.0601 0.810435 16.0601 1.05084 15.8197L8.43901 8.43155C8.67938 8.19111 8.67938 7.80139 8.43901 7.56099Z" fill="black"/>
                            </svg></a></li>
                        </ul>
                    </div>

                </div>

                <div class="news-main__content promo-main__content" id="promo">
                    <div class="news-main__content-title">
                        <h2>Акции</h2>
                        <a href="#" data-value="popup-call-mailing" class="btn-click__popup">Подписка на акции</a>
                    </div>


            
                    <div class="news-main__text promo-main__text">

                        <div class="news-item promo-item">
                            <a href="#">
                                <img src="img/new1.jpg" alt="картинка">
                                <span>Действует до: 29.07.2019 18:00 МСК</span>
                                <h3>Доп. оборудование в подарок!</h3>
                                <p>Ваша выгода составит до 50 000 рублей!</p>
                            </a>
                        </div>

                        <div class="news-item promo-item">
                            <a href="#">
                                <img src="img/promo-item.jpg" alt="картинка">
                                <span>Действует до: 29.07.2019 18:00 МСК</span>
                                <h3>Плавающий прицеп в подарок.</h3>
                                <p>Приглашаем Вас на завод — производитель снегоболотоходов Enwix.</p>
                            </a>
                        </div>

                        <div class="news-item promo-item">
                            <a href="#">
                                <img src="img/new1.jpg" alt="картинка">
                                <span>Действует до: 29.07.2019 18:00 МСК</span>
                                <h3>Доп. оборудование в подарок!</h3>
                                <p>Ваша выгода составит до 50 000 рублей!</p>
                            </a>
                        </div>

                        <div class="news-item promo-item">
                            <a href="#">
                                <img src="img/promo-item.jpg" alt="картинка">
                                <span>Действует до: 29.07.2019 18:00 МСК</span>
                                <h3>Плавающий прицеп в подарок.</h3>
                                <p>Приглашаем Вас на завод — производитель снегоболотоходов Enwix.</p>
                            </a>
                        </div>

                        <div class="news-item promo-item">
                            <a href="#">
                                <img src="img/new1.jpg" alt="картинка">
                                <span>Действует до: 29.07.2019 18:00 МСК</span>
                                <h3>Доп. оборудование в подарок!</h3>
                                <p>Ваша выгода составит до 50 000 рублей!</p>
                            </a>
                        </div>

                        <div class="news-item promo-item">
                            <a href="#">
                                <img src="img/promo-item.jpg" alt="картинка">
                                <span>Действует до: 29.07.2019 18:00 МСК</span>
                                <h3>Плавающий прицеп в подарок.</h3>
                                <p>Приглашаем Вас на завод — производитель снегоболотоходов Enwix.</p>
                            </a>
                        </div>


                        <div class="news-item promo-item">
                            <a href="#">
                                <img src="img/new1.jpg" alt="картинка">
                                <span>Действует до: 29.07.2019 18:00 МСК</span>
                                <h3>Доп. оборудование в подарок!</h3>
                                <p>Ваша выгода составит до 50 000 рублей!</p>
                            </a>
                        </div>

                        <div class="news-item promo-item">
                            <a href="#">
                                <img src="img/promo-item.jpg" alt="картинка">
                                <span>Действует до: 29.07.2019 18:00 МСК</span>
                                <h3>Плавающий прицеп в подарок.</h3>
                                <p>Приглашаем Вас на завод — производитель снегоболотоходов Enwix.</p>
                            </a>
                        </div>


                        <div class="news-item promo-item">
                            <a href="#">
                                <img src="img/new1.jpg" alt="картинка">
                                <span>Действует до: 29.07.2019 18:00 МСК</span>
                                <h3>Доп. оборудование в подарок!</h3>
                                <p>Ваша выгода составит до 50 000 рублей!</p>
                            </a>
                        </div>

                        <div class="news-item promo-item">
                            <a href="#">
                                <img src="img/promo-item.jpg" alt="картинка">
                                <span>Действует до: 29.07.2019 18:00 МСК</span>
                                <h3>Плавающий прицеп в подарок.</h3>
                                <p>Приглашаем Вас на завод — производитель снегоболотоходов Enwix.</p>
                            </a>
                        </div>

                        
                    </div>

                    

                    <div class="pagination-wrapper">
                        <ul class="pagination-list">
                            <li><a href="#"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path d="M3.87093 7.56099L11.2591 0.172821C11.5037 -0.0633983 11.8934 -0.0566162 12.1297 0.187973C12.3601 0.426573 12.3601 0.80482 12.1297 1.04338L5.17677 7.99627L12.1297 14.9492C12.37 15.1896 12.37 15.5793 12.1297 15.8197C11.8892 16.0601 11.4995 16.0601 11.2591 15.8197L3.87093 8.43155C3.63056 8.19111 3.63056 7.80139 3.87093 7.56099Z" fill="black"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="16" height="16" fill="white" transform="matrix(-1 0 0 1 16 0)"/>
                            </clipPath>
                            </defs>
                            </svg></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.43901 7.56099L1.05084 0.172821C0.80625 -0.0633983 0.416495 -0.0566162 0.180276 0.187973C-0.0501714 0.426573 -0.0501714 0.80482 0.180276 1.04338L7.13316 7.99627L0.180276 14.9492C-0.060092 15.1896 -0.060092 15.5793 0.180276 15.8197C0.420716 16.0601 0.810435 16.0601 1.05084 15.8197L8.43901 8.43155C8.67938 8.19111 8.67938 7.80139 8.43901 7.56099Z" fill="black"/>
                            </svg></a></li>
                        </ul>
                    </div>

                </div>


            </div>
        </section>
       

       
    </main>

    <?php 
      $footer = include_template('footer.php', []);
      print($footer);
    ?> 