<?php 
  require_once('functions.php');
  $header = include_template('header.php', []);
  print($header);
?>

<main>

        <section class="modernization-request">
            <div class="breadcrumbs bredcrumbs-third">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li>/</li>
                    <li><a href="#">Владельцам</a></li>
                    <li>/</li>
                    <li>Заявка на модернизацию</li>
                </ul>
            </div>
            <div class="news-main__wrapper">

                <div class="news-main__menu modernization-request-news-main__menu">
                    <button></button>
                    <ul>
                <li class="support-tab" data-name="support">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M12.7031 0C11.152 0 9.84375 1.30823 9.84375 2.85937C9.84375 4.41051 11.152 5.71874 12.7031 5.71874C14.2543 5.71874 15.5156 4.41051 15.5156 2.85937C15.5156 1.30823 14.2543 0 12.7031 0Z" fill="black"/>
                        <path d="M15.8246 5.71875C15.0519 6.57558 13.9451 7.125 12.7031 7.125C11.4611 7.125 10.3075 6.57558 9.53475 5.71875C8.86012 6.46683 8.4375 7.44684 8.4375 8.53125V9.23437C8.4375 9.62301 8.75198 9.93749 9.14062 9.93749H16.2187C16.6074 9.93749 16.9219 9.62301 16.9219 9.23437V8.53125C16.9219 7.44684 16.4992 6.46683 15.8246 5.71875Z" fill="black"/>
                        <path d="M6.79514 21.5814L3.21197 14.3976C2.86599 13.7039 2.02393 13.421 1.32938 13.7651L0.39287 14.229C0.044168 14.402 -0.0977224 14.8257 0.0763242 15.1738L4.29507 23.6113C4.46855 23.9593 4.89056 24.0977 5.23645 23.9272L6.16092 23.4692C6.85819 23.1238 7.14239 22.2777 6.79514 21.5814Z" fill="black"/>
                        <path d="M23.4241 11.611C22.8475 11.1891 22.0459 11.2735 21.5678 11.7938L17.7241 16.5188C17.4569 16.8 16.9506 16.9688 16.6834 16.9688H13.4068C13.013 16.9688 12.7037 16.6594 12.7037 16.2656C12.7037 15.8718 13.013 15.5625 13.4068 15.5625C14.3486 15.5625 15.3912 15.5625 16.2193 15.5625C16.9928 15.5625 17.6256 14.9297 17.6256 14.1563C17.6256 13.3828 16.9928 12.75 16.2193 12.75C12.9172 12.75 16.067 12.75 12.535 12.75C12.1845 12.75 12.0098 12.5278 11.7334 12.2859C10.6455 11.3069 9.01705 10.8353 7.36846 11.2174C6.45309 11.4296 5.83579 11.7994 5.20973 12.2952L5.18887 12.2783L4.17188 13.1733L8.16862 21.1875H9.35212H16.2193C17.5412 21.1875 18.8069 20.5547 19.5944 19.5L23.7193 13.5938C24.1834 12.975 24.0568 12.0751 23.4241 11.611Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    Клиентская поддержка</li>
                <li class="spare-parts-tab" data-name="spare-parts">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0C5.37281 0 0 5.37281 0 12C0 18.6272 5.37281 24 12 24C18.6272 24 24 18.6272 24 12C24 5.37281 18.6272 0 12 0ZM12.0703 21.2578C6.96558 21.2578 2.8125 17.1048 2.8125 12C2.8125 6.89522 6.96558 2.74219 12.0703 2.74219C17.175 2.74219 21.3281 6.89522 21.3281 12C21.3281 17.1048 17.175 21.2578 12.0703 21.2578Z" fill="white"/>
                        <path d="M19.7713 13.5324C19.8698 13.0366 19.9219 12.5243 19.9219 12C19.9219 11.2731 19.8221 10.569 19.6364 9.90041L18.6547 9.65732C14.284 8.57582 9.71602 8.57582 5.3452 9.65732L4.51439 9.8631C4.32192 10.5427 4.21875 11.2596 4.21875 12C4.21875 12.5285 4.27158 13.0448 4.37161 13.5443C7.49213 13.8369 9.948 16.4148 10.049 19.5873C10.6942 19.7594 11.3717 19.8516 12.0703 19.8516C12.7179 19.8516 13.3472 19.7722 13.9496 19.6237C14.0341 16.3861 16.5711 13.7593 19.7713 13.5324ZM12 15.2813C10.7423 15.2813 9.71916 14.2581 9.71916 13.0004C9.71916 11.7428 10.7423 10.7196 12 10.7196C13.2577 10.7196 14.2808 11.7428 14.2808 13.0005C14.2808 14.2581 13.2577 15.2813 12 15.2813Z" fill="black"/>
                        <path d="M11.9996 12.126C11.5173 12.126 11.125 12.5183 11.125 13.0006C11.125 13.4828 11.5173 13.8751 11.9996 13.8751C12.4818 13.8751 12.8741 13.4828 12.8741 13.0005C12.8741 12.5183 12.4818 12.126 11.9996 12.126Z" fill="white"/>
                        </svg>

                    Заказ запчастей</li>
                <li class="service-request-tab" data-name="service-request">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.00519937 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693604 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0865C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6934 24 14.3734 24 12C23.9962 8.81856 22.7307 5.7685 20.4811 3.51888C18.2315 1.26926 15.1814 0.00377125 12 0ZM19.089 10.968C18.5113 11.5609 17.7436 11.9319 16.9201 12.0162C16.0966 12.1006 15.2696 11.8928 14.5838 11.4292L11.445 14.6077C11.903 15.3054 12.1076 16.139 12.0247 16.9694C11.9419 17.7998 11.5765 18.5766 10.9898 19.17C10.4106 19.7604 9.64325 20.1298 8.82051 20.2141C7.99778 20.2985 7.17143 20.0926 6.4845 19.632L8.96475 17.1195L6.93975 15.069L4.46025 17.5807C4.001 16.8834 3.79511 16.0494 3.87702 15.2185C3.95893 14.3875 4.32368 13.6098 4.91025 13.0155C5.49092 12.4255 6.2595 12.0569 7.08311 11.9735C7.90673 11.8901 8.73359 12.0971 9.42075 12.5587L12.5588 9.375C12.1036 8.6767 11.9008 7.84378 11.984 7.01438C12.0672 6.18499 12.4314 5.40896 13.0163 4.815C13.5941 4.22307 14.3611 3.85239 15.184 3.76744C16.0068 3.68248 16.8334 3.88862 17.52 4.35L15.0398 6.8625L17.0648 8.913L19.5458 6.4005C20.002 7.09974 20.2055 7.93396 20.1224 8.76475C20.0393 9.59554 19.6747 10.373 19.089 10.968Z" fill="black"/>
                    </svg>
                        

                    Заявка на ТО</li>
                <li class="active modernization-tab" data-name="modernization-request">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M5.31959 18.8237C6.58879 18.8237 7.61769 17.7948 7.61769 16.5256C7.61769 15.2564 6.58879 14.2275 5.31959 14.2275C4.05038 14.2275 3.02148 15.2564 3.02148 16.5256C3.02148 17.7948 4.05038 18.8237 5.31959 18.8237Z" fill="black"/>
                        <path d="M18.7687 13.0741C18.8958 12.7281 18.9609 12.3624 18.9609 11.9937C18.9603 10.2632 17.557 8.86079 15.8264 8.86133C15.4585 8.86146 15.0935 8.92636 14.748 9.05313V14.934C16.3719 15.5306 18.172 14.698 18.7687 13.0741Z" fill="black"/>
                        <path d="M9.20896 6.05487L6.30409 9.86906C6.23216 9.96285 6.13146 10.0304 6.01743 10.0615L1.1571 11.3888C0.476715 11.575 0.00368715 12.1916 0 12.8969V14.6709C0.00703911 15.534 0.711285 16.2285 1.57435 16.2236H1.96143C2.12179 14.3693 3.75506 12.996 5.60936 13.1565C7.24123 13.2976 8.53535 14.5917 8.67647 16.2236H13.676V5.16211H11.0103C10.3039 5.16439 9.63855 5.49415 9.20896 6.05487Z" fill="black"/>
                        <path d="M22.5844 11.0668C22.3508 11.0448 22.1579 10.8751 22.1061 10.6463C21.9407 9.88176 21.6343 9.15472 21.2026 8.50236C21.0713 8.3052 21.085 8.04522 21.2362 7.86281L22.1358 6.77577L21.0415 5.66761L19.9592 6.56419C19.7792 6.71362 19.5231 6.72911 19.3264 6.60247C18.6701 6.17302 17.9414 5.86585 17.1757 5.6959C16.9479 5.64777 16.7777 5.45745 16.7551 5.22576L16.6196 3.82129H14.7481V7.92991C16.9927 7.33421 19.2952 8.67076 19.8909 10.9154C20.4866 13.1599 19.15 15.4624 16.9054 16.0581C16.1986 16.2458 15.455 16.2458 14.748 16.0581V20.1788H16.6195L16.7553 18.7681C16.7777 18.5356 16.9476 18.344 17.1759 18.2943C17.9405 18.1288 18.6677 17.8224 19.3201 17.3907C19.5173 17.2594 19.7773 17.2731 19.9597 17.4243L21.0446 18.3226L22.1574 17.2097L21.2591 16.1249C21.1101 15.9446 21.0952 15.6886 21.2221 15.4921C21.6525 14.8359 21.9606 14.1073 22.1315 13.3414C22.1819 13.1131 22.3737 12.9433 22.6064 12.9209L23.9995 12.7854V11.2026L22.5844 11.0668Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>

                    Заявка на модернизацию</li>
                <li class="service-tab" data-name="service">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.24262 12.6421C7.99265 12.7329 7.74694 12.8326 7.50586 12.9409V17.5374H16.4971V12.9409C16.256 12.8326 16.0103 12.7329 15.7603 12.6421C14.709 13.4223 13.4084 13.8848 12.0015 13.8848C10.5946 13.8848 9.29404 13.4223 8.24262 12.6421Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.08789 23.2976C1.08789 23.6855 1.4024 24 1.79033 24H3.29275V16.2949C1.90993 18.1159 1.08789 20.3849 1.08789 22.8426V23.2976Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7129 16.2993V24.0002H22.2114C22.5993 24.0002 22.9138 23.6857 22.9138 23.2977V22.8427C22.9138 20.3871 22.0937 18.1195 20.7129 16.2993Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9012 18.24C17.9012 18.6279 17.5867 18.9424 17.1988 18.9424H6.80266C6.41473 18.9424 6.10022 18.6279 6.10022 18.24V13.7012C5.60346 14.0194 5.13456 14.3774 4.69727 14.7699V24H19.308V14.7731C18.8697 14.3793 18.3994 14.0203 17.9012 13.7012V18.24Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.81572 6.58949H18.1825C18.5705 6.58949 18.885 6.27498 18.885 5.88705C18.885 5.49911 18.5705 5.18461 18.1825 5.18461H17.4587C17.0247 3.78207 16.0631 2.60652 14.8089 1.89223V3.24916H13.404V1.32372C13.4037 1.32368 13.4034 1.32358 13.4031 1.32349C13.3845 0.591407 12.7823 0 12.0458 0H11.9525C11.216 0 10.6137 0.591407 10.5952 1.32349C10.5949 1.32358 10.5946 1.32368 10.5943 1.32372V3.24916H9.18939V1.89223C7.93517 2.60652 6.97357 3.78207 6.53956 5.18461H5.81572C5.42779 5.18461 5.11328 5.49911 5.11328 5.88705C5.11328 6.27498 5.42779 6.58949 5.81572 6.58949Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.10352 7.99463C7.32324 10.5021 9.43852 12.4803 12.0014 12.4803C14.5643 12.4803 16.6795 10.5021 16.8993 7.99463H7.10352Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>

                    Сервис</li>
                <li class="gaurantee-tab" data-name="guarantee">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.6641 9.66577C21.6641 4.33594 17.328 0 11.998 0C6.66815 0 2.33203 4.33594 2.33203 9.66577C2.33203 14.9954 6.66815 19.3314 11.998 19.3314C17.328 19.3314 21.6641 14.9954 21.6641 9.66577ZM10.275 13.7889L6.97485 10.4888L7.97516 9.48871L10.275 11.7885L16.021 6.04266L17.0213 7.04279L10.275 13.7889Z" fill="black"/>
                        <path d="M3.06665 16.2129L0.140625 20.4805L4.46667 19.6738L5.27344 24L8.01343 20.0037C6.02417 19.2341 4.31104 17.9062 3.06665 16.2129Z" fill="black"/>
                        <path d="M20.9312 16.2129C19.6868 17.9062 17.9736 19.2341 15.9844 20.0037L18.7244 24L19.5311 19.6738L23.8572 20.4805L20.9312 16.2129Z" fill="black"/>
                    </svg>

                    Гарантия</li>
            </ul>
                </div>
            
                <div class="news-main__content support__item support__item-modernization-request" id="support">
                    <div class="support__title">Клиентская поддержка</div>
                    <div class="support__text">
                        <p>Уважаемые Владельцы!</p>
                        <p>Нам важно знать мнение каждого обладателя техники Enwix.</p>
                    </div>
    
                    <div class="support__form">
                        <form action="/" method="post">
    
                            <div class="support__form-group">
                                <div class="support__form-group-name">
                                    <input type="text" placeholder="ФИО*"></div>
                                <div class="support__form-group-icon-user">
                                    <img src="img/support-icon-user.svg" alt=""></div>
                            </div>
                            
    
    
                            <div class="support__form-group-phone-mail">
                                <div class="support__form-group">
                                    <div class="support__form-group-phone">
                                        <input type="number" placeholder="Номер телефона*"></div>
                                    <div class="support__form-group-icon-phone">
                                        <img src="img/support-icon-phone.svg" alt=""></div>
                                </div>
        
        
                                <div class="support__form-group">
                                    <div class="support__form-group-mail">
                                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="E-mail"></div>
                                    <div class="support__form-group-icon-mail">
                                        <img src="img/support-icon-mail.svg" alt=""></div>
                                </div>
                            </div>
    
    
    
                            <div class="support__form-group">
                                <div class="support__form-group-chat">
                                    <select>
                                        <option value="">Тема</option>
                                        <option value="">Тема</option>
                                        <option value="">Тема</option>
                                        <option value="">Тема</option>
                                        <option value="">Тема</option>
                                    </select>
                                    <div class="service-request__form-group-icon-arrow">
                                        <img src="img/galka2.svg" alt=""></div>
                                </div>
                                <div class="support__form-group-icon-chat">
                                    <img src="img/support-icon-chat.svg" alt=""></div>
                            </div>
    
    
    
                            <div class="support__form-group-question-button">
                                <div class="support__form-group">
                                    <div class="support__form-group-question">
                                        <textarea>Вопрос</textarea>
                                    </div>
                                    <div class="support__form-group-icon-question">
                                        <img src="img/support-icon-question.svg" alt=""></div>
                                </div>
        
                                <div class="support__button">
                                    <button type="submit">ОТПРАВИТЬ ЗАЯВКУ</button>
                                </div>
                            </div>
    
                        </form>
    
                        
    
                    </div>
    
                    <div class="support__footer-text">
                        <p>Задать вопросы, выразить пожелания или замечания вы можете по </p>
                    </div>
                    <div class="support__footer-contact">
                        <img src="img/support-icon-phone.svg" alt="">
                        <a href="tel:+78003502505"> 8 (800) 350-25-05</a>
                        <img src="img/support-icon-mail.svg" alt="">
                        <a href="mailto:help@enwix.ru">help@enwix.ru</a>
                    </div>
                    
                </div>
    
                <div class="news-main__content spare-parts__item spare-parts__item-modernization-request" id="spare-parts">
                    <div class="spare-parts__title">Купить запасные части</div>
                    <div class="spare-parts__text">
                        <p>Уважаемые владельцы,вы можете заказать оригинальные запасные части Enwix с доставкой в ваш город. На все товары распространяется гарантия качества.</p>
                    </div>
    
                    <div class="spare-parts__form">
                        <form action="/" method="post">
    
                            <div class="spare-parts__form-group-select-calendar">
                                <div class="spare-parts__form-group">
                                        <select>
                                            <option value="" disabled selected >Модель вездехода*
                                            </option>
                                            <option value="Armor">Armor</option>
                                            <option value="Scout">Scout</option>
                                            <option value="Track 2">Track 2</option>
                                            <option value="Armor">Armor</option>
                                            <option value="Track 2">Track 2</option>
                                            <option value="Scout">Scout</option>
                                        </select>
                                        <div class="service-request__form-group-icon-arrow">
                                            <img src="img/galka2.svg" alt=""></div>
                                    <div class="spare-parts__form-group-icon-jeep">
                                        <img src="img/support-icon-jeep.svg" alt=""></div>
                                </div>
        
                                <div class="spare-parts__form-group">
                                    <div class="spare-parts__form-group-calendar">
                                        <input type="text" placeholder="Дата выпуска*"></div>
                                    <div class="spare-parts__form-group-icon-user">
                                        <img src="img/support-icon-calendar.svg" alt=""></div>
                                </div>
                            </div>
    
                            <div class="spare-parts__form-group">
                                <div class="spare-parts__form-group-name">
                                    <input type="text" placeholder="ФИО*"></div>
                                <div class="spare-parts__form-group-icon-user">
                                    <img src="img/support-icon-user.svg" alt=""></div>
                            </div>
    
    
                            <div class="spare-parts__form-group-phone-mail">
                                <div class="spare-parts__form-group">
                                    <div class="spare-parts__form-group-phone">
                                        <input type="number" placeholder="Номер телефона*"></div>
                                    <div class="spare-parts__form-group-icon-phone">
                                        <img src="img/support-icon-phone.svg" alt=""></div>
                                </div>
        
        
                                <div class="spare-parts__form-group">
                                    <div class="spare-parts__form-group-mail"><input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="E-mail"></div>
                                    <div class="spare-parts__form-group-icon-mail">
                                        <img src="img/support-icon-mail.svg" alt=""></div>
                                </div>
                            </div>
    
    
                            <div class="spare-parts__form-group-textarea-button">
                                <div class="spare-parts__form-group">
                                    <textarea name="" placeholder="Ваши пожелания" ></textarea>
                                    <div class="spare-parts__form-group-icon-chat">
                                        <img src="img/support-icon-edit.svg" alt=""></div>
                                </div>
        
            
                                    <div class="spare-parts__button">
                                        <button type="submit">ОТПРАВИТЬ ЗАЯВКУ</button>
                                    </div>
                            </div>
                            </div>
    
                        </form>
    
                        <div class="spare-parts__footer">
                            <div class="spare-parts__footer-text">
                                <p>Оставить заявку по: </p>
                            </div>
                            <div class="spare-parts__footer-contact">
                                <img src="img/support-icon-phone.svg" alt="">
                                <a href="tel:+78003502505"> 8 (800) 350-25-05</a>
                                <img src="img/support-icon-mail.svg" alt="">
                                <a href="mailto:help@enwix.ru">help@enwix.ru</a>
                            </div>
                        </div>
    
                </div>
    
                <div class="news-main__content service-request__item service-request__item-modernization-request" id="service-request">
                        <div class="service-request__title">заявка на техническое обслуживание</div>
                        <div class="service-request__text">
                            <p>Уважаемые Владельцы!</p>
                            <p>Предлагаем вам пройти ТО в сервисном центре Производителя.</p>
                        </div>
        
                        <div class="service-request__form">
                            <form action="/" method="post">
        
                                <div class="service-request__form-group-select-calendar">
                                    <div class="service-request__form-group">
                                            <select>
                                                <option value="" disabled selected>Модель вездехода*
                                                </option>
                                                <option value="Armor">Armor</option>
                                                <option value="Scout">Scout</option>
                                                <option value="Track 2">Track 2</option>
                                                <option value="Armor">Armor</option>
                                                <option value="Track 2">Track 2</option>
                                                <option value="Scout">Scout</option>
                                            </select>
                                            <div class="service-request__form-group-icon-arrow">
                                                <img src="img/galka2.svg" alt=""></div>
                                        <div class="service-request__form-group-icon-jeep">
                                            <img src="img/support-icon-jeep.svg" alt=""></div>
                                    </div>
            
                                    <div class="service-request__form-group">
                                        <div class="service-request__form-group-calendar">
                                            <input type="text" placeholder="Пробег (км, мото/ч)"></div>
                                        <div class="service-request__form-group-icon-user">
                                            <img src="img/support-icon-main-menu-speed.svg" alt=""></div>
                                    </div>
                                </div>
        
                                <div class="service-request__form-group">
                                    <div class="service-request__form-group-name">
                                        <input type="text" placeholder="ФИО*"></div>
                                    <div class="service-request__form-group-icon-user">
                                        <img src="img/support-icon-user.svg" alt=""></div>
                                </div>
        
        
                                <div class="service-request__form-group-phone-mail">
                                    <div class="service-request__form-group">
                                        <div class="service-request__form-group-phone">
                                            <input type="number" placeholder="Номер телефона*"></div>
                                        <div class="service-request__form-group-icon-phone">
                                            <img src="img/support-icon-phone.svg" alt=""></div>
                                    </div>
            
            
                                    <div class="service-request__form-group">
                                        <div class="service-request__form-group-mail"><input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="E-mail"></div>
                                        <div class="service-request__form-group-icon-mail">
                                            <img src="img/support-icon-mail.svg" alt=""></div>
                                    </div>
                                </div>
        
        
                                <div class="service-request__form-group-textarea-button">
                                    <div class="service-request__form-group">
                                        <textarea name="" placeholder="Ваши пожелания" ></textarea>
                                        <div class="service-request__form-group-icon-chat">
                                            <img src="img/support-icon-edit.svg" alt=""></div>
                                    </div>
            
                
                                        <div class="service-request__button">
                                            <button type="submit">ОТПРАВИТЬ ЗАЯВКУ</button>
                                        </div>
                                </div>
                                </div>
        
                            </form>
        
                            <div class="service-request__footer">
                                <div class="service-request__footer-text">
                                    <p>Запись на ТО: </p>
                                </div>
                                <div class="service-request__footer-contact">
                                    <img src="img/support-icon-phone.svg" alt="">
                                    <a href="tel:+78003502505"> 8 (800) 350-25-05</a>
                                    <img src="img/support-icon-mail.svg" alt="">
                                    <a href="mailto:help@enwix.ru">help@enwix.ru</a>
                                </div>
                            </div>
        
                    </div>
    
                <div class="news-main__content modernization-request__item modernization-request__item-modernization-request" id="modernization-request">
                            <div class="modernization-request__title">Заявка на модернизацию  </div>
                            <div class="modernization-request__text">
                                <p>Уважаемые Владельцы! Вы можете провести модернизацию или ремонт вездеходов Enwix в сервисном центре Производителя. Кроме того, для вас доступна услуга по квалифицированной замене агрегатов и корпусных деталей.</p>
                            </div>
            
                            <div class="modernization-request__form">
                                <form action="/" method="post">
            
                                    <div class="modernization-request__form-group-select-calendar">
                                        <div class="modernization-request__form-group">
                                                <select>
                                                    <option value="" disabled selected>Модель вездехода*
                                                    </option>
                                                    <option value="Armor">Armor</option>
                                                    <option value="Scout">Scout</option>
                                                    <option value="Track 2">Track 2</option>
                                                    <option value="Armor">Armor</option>
                                                    <option value="Track 2">Track 2</option>
                                                    <option value="Scout">Scout</option>
                                                </select>
                                                <div class="service-request__form-group-icon-arrow">
                                                    <img src="img/galka2.svg" alt=""></div>
                                            <div class="modernization-request__form-group-icon-jeep">
                                                <img src="img/support-icon-jeep.svg" alt=""></div>
                                        </div>
                
                                        <div class="modernization-request__form-group">
                                            <div class="modernization-request__form-group-calendar">
                                                <input type="text" placeholder="Дата выпуска*"></div>
                                            <div class="modernization-request__form-group-icon-user">
                                                <img src="img/support-icon-calendar.svg" alt=""></div>
                                        </div>
                                    </div>
            
                                    <div class="modernization-request__form-group">
                                        <div class="modernization-request__form-group-name">
                                            <input type="text" placeholder="ФИО*" required></div>
                                        <div class="modernization-request__form-group-icon-user">
                                            <img src="img/support-icon-user.svg" alt=""></div>
                                    </div>
            
            
                                    <div class="modernization-request__form-group-phone-mail">
                                        <div class="modernization-request__form-group">
                                            <div class="modernization-request__form-group-phone">
                                                <input type="number" placeholder="Номер телефона*"></div>
                                            <div class="modernization-request__form-group-icon-phone">
                                                <img src="img/support-icon-phone.svg" alt=""></div>
                                        </div>
                
                
                                        <div class="modernization-request__form-group">
                                            <div class="modernization-request__form-group-mail">
                                                <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="E-mail"></div>
                                            <div class="modernization-request__form-group-icon-mail">
                                                <img src="img/support-icon-mail.svg" alt=""></div>
                                        </div>
                                    </div>
            
            
                                    <div class="modernization-request__form-group-textarea-button">
                                        <div class="modernization-request__form-group">
                                            <textarea name="" placeholder="Ваши пожелания" ></textarea>
                                            <div class="modernization-request__form-group-icon-chat">
                                                <img src="img/support-icon-edit.svg" alt=""></div>
                                        </div>
                
                    
                                            <div class="modernization-request__button">
                                                <button type="submit">ОТПРАВИТЬ ЗАЯВКУ</button>
                                            </div>
                                    </div>
                                    </div>
            
                                </form>
            
                                <div class="modernization-request__footer">
                                    <div class="modernization-request__footer-text">
                                        <p>Запись на модернизацию или ремонт </p>
                                    </div>
                                    <div class="modernization-request__footer-contact">
                                        <img src="img/support-icon-phone.svg" alt="">
                                        <a href="tel:+78003502505"> 8 (800) 350-25-05</a>
                                        <img src="img/support-icon-mail.svg" alt="">
                                        <a href="mailto:help@enwix.ru">help@enwix.ru</a>
                                    </div>
                                </div>
            
                </div>
    
                <div class="news-main__content service__item service__item-modernization-request" id="service">
                                <div class="service__title">Сервис</div>
                                <div class="service__text">
                                    <p>Уважаемые Владельцы!</p>
                                    <p>В дилерских центрах Enwix вы можете получить техническое и сервисное обслуживание.</p>
                                    <p>С графиком проведения обслуживания и перечнем выполняемых работ вы можете ознакомиться здесь.</p>
                                </div>
                
                                <div class="service__form">
                                    <form action="/" method="post">
                
                                        <div class="service__form-group-number-location">
                                            <div class="service__form-group">
                                                <div class="service__form-group">
                                                    <div class="service__form-group-serial-number">
                                                        <input type="text" placeholder="Серийный номер*"></div>
                                                    
                                                </div>
                                                <div class="service__form-group-icon-jeep">
                                                    <img src="img/support-icon-jeep.svg" alt=""></div>
                                            </div>
                    
                                            <div class="service__form-group">
                                                <div class="service__form-group-location">
                                                    <input type="text" placeholder="Населенный пункт, где находится вездеход*"></div>
                                                <div class="service__form-group-icon-user">
                                                    <img src="img/support-icon-location.svg" alt=""></div>
                                            </div>
                                        </div>
                
                                        <div class="service__form-group">
                                            <div class="service__form-group-name">
                                                <input type="text" placeholder="ФИО*"></div>
                                            <div class="service__form-group-icon-user">
                                                <img src="img/support-icon-user.svg" alt=""></div>
                                        </div>
                
                
                                        <div class="service__form-group-phone-mail">
                                            <div class="service__form-group">
                                                <div class="service__form-group-phone">
                                                    <input type="tel" placeholder="Номер телефона*"></div>
                                                <div class="service__form-group-icon-phone">
                                                    <img src="img/support-icon-phone.svg" alt=""></div>
                                            </div>
                    
                    
                                            <div class="service__form-group">
                                                <div class="service__form-group-mail"><input type="email" placeholder="E-mail"></div>
                                                <div class="service__form-group-icon-mail">
                                                    <img src="img/support-icon-mail.svg" alt=""></div>
                                            </div>
                                        </div>
                
                
                                        <div class="service__form-group-textarea-button">
                                            <div class="service__form-group">
                                                <textarea name="" placeholder="Ваши пожелания" ></textarea>
                                                <div class="service__form-group-icon-chat">
                                                    <img src="img/support-icon-edit.svg" alt=""></div>
                                            </div>
                    
                        
                                                <div class="service__button">
                                                    <button type="submit">ОТПРАВИТЬ ЗАЯВКУ</button>
                                                </div>
                                        </div>
                                        </div>
                
                                    </form>
                
                                    <div class="service__footer">
                                        <div class="service__footer-text">
                                            <p>Запись на модернизацию или ремонт </p>
                                        </div>
                                        <div class="service__footer-contact">
                                            <img src="img/support-icon-phone.svg" alt="">
                                            <a href="tel:+78003502505"> 8 (800) 350-25-05</a>
                                            <img src="img/support-icon-mail.svg" alt="">
                                            <a href="mailto:help@enwix.ru">help@enwix.ru</a>
                                        </div>
                                    </div>
                
                </div>
    
                <div class="news-main__content guarantee__item guarantee__item-modernization-request" id="guarantee">
                                <div class="guarantee__title">Гарантия</div>
                                <div class="guarantee__subtitle">Гарантия</div>
                                <div class="guarantee__text">
                                    <p>На вездеходы Enwix распространяется гарантия Производителя сроком 12 месяцев с даты продажи либо 200 моточасов эксплуатации в зависимости от того, какое событие наступит раньше.
                
                                    <p>Поставщик/продавец предоставляет покупателю гарантию изготовителя. Все связанные с вездеходом льготы, обеспечиваемые гарантийными обязательствами, вступают в силу с момента передачи техники первому розничному покупателю или его уполномоченному представителю. Если вездеход приобретался посредником, гарантийные обязательства вступают в силу с момента его передачи посреднику.</p>
                                        
                                    <p>Обязательства компании Enwix представляют собой гарантию производителя, не ограничивающую законных прав покупателя подоговору покупки вездехода у официального дилера и прав, которыегарантирует применимое национальное законодательство, регулирующеепродажу потребительских товаров.</p>
                                        
                                    <p>В течение гарантийного срока поставщик/продавец обязуется своими силами или силами своих контрагентов на территории Российской Федерации провести ремонт или замену дефектных узлов и деталей. Гарантийное обслуживание производится при предъявлении сервисной книжки.</p></div>
                                
                                    <div class="guarantee__subtitle">Условия предоставления гарантии</div>
                                        <div class="guarantee__text">
                                            <p>Условием выполнения гарантийного ремонта является доставка вездехода покупателем в сервисный центр авторизованного дилера. На все узлы и детали, установленные в ходе гарантийного ремонта, распространяется гарантия на срок, не превышающий остатка срока первоначальной гарантии.</p>
                    
                                            <p>Все гарантийные обязательства действуют при наличии на вездеходе Enwix серийного номера двигателя и номера рамы, указанных в сервисной книжке.</p>
                                        </div>
                
                                        <div class="guarantee__subtitle">Ответственность владельца</div>
                                           <div class="guarantee__text">
                                                <p>В документации владельца описаны способы правильного ухода и эксплуатации вездехода. Правильное техническое обслуживание и эксплуатация позволят избежать значительных расходов на ремонт, вызванный неправильным использованием, небрежностью или несоответствующим обслуживанием, а также помогут увеличить стоимость вездехода навторичном рынке. Владелец обязан:</p>
                                           </div>
                                                <div class="guarantee__subtitle-list">
                                                    <ul>
                                                    <li>Следить за тем, чтобы выполнялись все требуемые профилактические работы, а используемые материалы соответствовали техническим спецификациям компании Enwix. Примечание: несвоевременное выполнение технического обслуживания и несоблюдение предписанных компанией Enwix интервалов аннулирует гарантийные обязательства в отношении соответствующих элементов вездехода.</li>
                                                    <li>В максимально короткие сроки после обнаружения дефекта предоставить вездеход дилеру для проведения ремонта. Это сводит к минимуму влияние данного дефекта на вездеход и на объем ремонтных работ.</li>
                                                    </ul>
                                            
                                                    </div>
                                            
                                            <div class="guarantee__text">
                                                <p>Примечание: в распоряжении технических специалистов официальных дилеров компании Enwix имеется оборудование, необходимое для обслуживания вездеходов с использованием оригинальных запчастей и поддержания оптимальных эксплуатационных характеристик. Обязательно сохраняйте документы, подтверждающие выполнение ремонтных/профилактических работ, и следите за тем, чтобы записи о проведенном обслуживании вносились в документацию вездехода.</p>
                                            </div>
                                    
                </div>

                
        
            </div>
        </section>
    </main>

 <?php 
  $footer = include_template('footer.php', []);
  print($footer);
?> 