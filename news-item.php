<?php 
  require_once('functions.php');
  $header = include_template('header.php', []);
  print($header);
?>

    <main>
        <section class="news-main" style="border-bottom: 1px solid #828282;">
            <div class="breadcrumbs bredcrumbs-third">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li>/</li>
                    <li><a href="#">События</a></li>
                    <li>/</li>
                    <li><a href="#">Новости</a></li>
                    <li>/</li>
                    <li> Возможности снегоболотоходов ENWIX оценили лучшие энергетики России</li>
                </ul>
            </div>
            <div class="news-main__wrapper">

                <div class="news-main__menu">
                    <button></button>
                    <ul>
                        <li class="active news-tab">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.1428 6.00001H18.8571V0.857159C18.8571 0.383755 18.4734 0 18 0H0.857159C0.383755 0 0 0.383755 0 0.857159V20.5714C0 22.465 1.53502 24 3.42859 24H20.5714C22.465 24 24 22.465 24 20.5714V6.85712C24 6.38377 23.6162 6.00001 23.1428 6.00001ZM6.85712 4.28569H12C12.4734 4.28569 12.8571 4.66945 12.8571 5.14285C12.8571 5.61626 12.4734 6.00001 12 6.00001H6.85712C6.38372 6.00001 5.99996 5.61626 5.99996 5.14285C5.99996 4.66945 6.38377 4.28569 6.85712 4.28569ZM14.5714 20.5714H4.28569C3.81229 20.5714 3.42854 20.1877 3.42854 19.7143C3.42854 19.2409 3.81229 18.8571 4.28569 18.8571H14.5714C15.0448 18.8571 15.4286 19.2409 15.4286 19.7143C15.4286 20.1877 15.0448 20.5714 14.5714 20.5714ZM14.5714 17.1428H4.28569C3.81229 17.1428 3.42854 16.7591 3.42854 16.2857C3.42854 15.8123 3.81229 15.4285 4.28569 15.4285H14.5714C15.0448 15.4285 15.4286 15.8123 15.4286 16.2857C15.4286 16.7591 15.0448 17.1428 14.5714 17.1428ZM14.5714 13.7143H4.28569C3.81229 13.7143 3.42854 13.3305 3.42854 12.8571C3.42854 12.3837 3.81229 12 4.28569 12H14.5714C15.0448 12 15.4286 12.3837 15.4286 12.8571C15.4286 13.3305 15.0448 13.7143 14.5714 13.7143ZM14.5714 10.2857H4.28569C3.81229 10.2857 3.42854 9.90195 3.42854 9.42855C3.42854 8.95514 3.81229 8.57139 4.28569 8.57139H14.5714C15.0448 8.57139 15.4286 8.95514 15.4286 9.42855C15.4286 9.90195 15.0448 10.2857 14.5714 10.2857ZM22.2857 20.5714C22.2857 21.5182 21.5182 22.2857 20.5714 22.2857C19.6247 22.2857 18.8571 21.5182 18.8571 20.5714V7.71428H22.2857V20.5714H22.2857Z" fill="black"/>
                            </svg>
                        Новости</li>
                        <li class="promo-tab">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.4648 8.13534L16.1834 6.15816C17.3566 3.1942 15.157 0 12 0C8.83852 0 6.64537 3.19927 7.81659 6.15816L5.53523 8.13534C4.8773 8.70548 4.5 9.5318 4.5 10.4024V21.75C4.5 22.9906 5.50936 24 6.75 24H17.25C18.4906 24 19.5 22.9906 19.5 21.75V10.4024C19.5 9.53184 19.1227 8.70553 18.4648 8.13534ZM12 1.5C13.8873 1.5 15.309 3.22903 14.9429 5.08308L14.4663 4.67006C13.05 3.44255 10.9475 3.4447 9.53363 4.67006L9.05709 5.08308C8.69156 3.23156 10.1104 1.5 12 1.5ZM18 21.75C18 22.1635 17.6635 22.5 17.25 22.5H6.75C6.33647 22.5 6 22.1635 6 21.75V10.4024C6 9.96712 6.18867 9.55397 6.51759 9.26888L8.60836 7.45687C9.29063 8.23763 10.2259 8.76272 11.25 8.93672V9C11.25 9.41419 11.5858 9.75 12 9.75C12.4142 9.75 12.75 9.41419 12.75 9V7.5C12.75 7.08581 12.4142 6.75 12 6.75C11.6178 6.75 11.3031 7.03603 11.2566 7.40555C10.6714 7.25513 10.1418 6.93066 9.74189 6.47452L10.516 5.80359C11.3683 5.06503 12.6333 5.06634 13.484 5.80359C14.2684 6.48347 16.2393 8.19159 17.4824 9.26892C17.8114 9.55402 18 9.96717 18 10.4025V21.75Z" fill="white"/>
                            <path d="M15.0843 12.158C14.7574 11.9037 14.2861 11.9626 14.0318 12.2896L8.78181 19.0396C8.39616 19.5355 8.75738 20.2501 9.37332 20.2501C9.59682 20.2501 9.81802 20.1506 9.96587 19.9605L15.2159 13.2105C15.4702 12.8835 15.4112 12.4123 15.0843 12.158Z" fill="white"/>
                            <path d="M14.625 20.25C15.4534 20.25 16.125 19.5784 16.125 18.75C16.125 17.9216 15.4534 17.25 14.625 17.25C13.7966 17.25 13.125 17.9216 13.125 18.75C13.125 19.5784 13.7966 20.25 14.625 20.25Z" fill="white"/>
                            <path d="M9.375 15C10.2034 15 10.875 14.3284 10.875 13.5C10.875 12.6716 10.2034 12 9.375 12C8.54657 12 7.875 12.6716 7.875 13.5C7.875 14.3284 8.54657 15 9.375 15Z" fill="white"/>
                            </svg>

                            Акции</li>
                    </ul>
                </div>

                <div class="news-main__news-item">
                    <img src="img/new1.jpg" alt="картинка">
                    <h1>Возможности снегоболотоходов enwix оценили лучшие энергетики России</h1>

                    <span>29.07.2019</span>

                    <p>Вездеход TRACK2 был представлен бригадам энергетиков из 15 регионов, которые борются за звание лучших на Всероссийских соревнованиях профмастерства по ремонту и обслуживанию распределительных сетей.</p>

                    <p>Мероприятие проходит под патронажем ПАО «Россети» на полигоне «Ленэнерго».</p> 

                    <p>В ходе соревнований участники проводят осмотр и замену оборудования на электрообъектах, освобождают условно пострадавшего от действия электрического тока и даже тушат пожар на трансформаторной подстанции. </p>

                    <p>Кстати, в прошлом году представитель «МРСК Северо-Запада» на вездеходе Enwix одержал победу в состязаниях вездеходной техники, предназначенной для объезда линий электропередач.</p>

                    <p>Вездеход TRACK2 был представлен бригадам энергетиков из 15 регионов, которые борются за звание лучших на Всероссийских соревнованиях профмастерства по ремонту и обслуживанию распределительных сетей.
                    Мероприятие проходит под патронажем ПАО «Россети» на полигоне «Ленэнерго». </p>

                    <p>В ходе соревнований участники проводят осмотр и замену оборудования на электрообъектах, освобождают условно пострадавшего от действия электрического тока и даже тушат пожар на трансформаторной подстанции. </p>

                    <p>Кстати, в прошлом году представитель «МРСК Северо-Запада» на вездеходе Enwix одержал победу в состязаниях вездеходной техники, предназначенной для объезда линий электропередач.</p>

                    <div class="news-item__tags">
                        <a href="#">#Enwix</a>
                        <a href="#">#снегоболотоход</a>
                        <a href="#">#вездеход</a>
                    </div>

                    <div class="sharing-block">
                        <span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.823 2.66663C14.823 3.86328 13.853 4.83337 12.6564 4.83337C11.4597 4.83337 10.4897 3.86328 10.4897 2.66663C10.4897 1.47009 11.4597 0.5 12.6564 0.5C13.853 0.5 14.823 1.47009 14.823 2.66663Z" fill="black"/>
                        <path d="M12.6564 5.33337C11.1857 5.33337 9.98975 4.13733 9.98975 2.66663C9.98975 1.19604 11.1857 0 12.6564 0C14.1271 0 15.323 1.19604 15.323 2.66663C15.323 4.13733 14.1271 5.33337 12.6564 5.33337ZM12.6564 1C11.7371 1 10.9897 1.74805 10.9897 2.66663C10.9897 3.58533 11.7371 4.33337 12.6564 4.33337C13.5757 4.33337 14.323 3.58533 14.323 2.66663C14.323 1.74805 13.5757 1 12.6564 1Z" fill="black"/>
                        <path d="M14.823 13.3333C14.823 14.5298 13.853 15.4999 12.6564 15.4999C11.4597 15.4999 10.4897 14.5298 10.4897 13.3333C10.4897 12.1366 11.4597 11.1665 12.6564 11.1665C13.853 11.1665 14.823 12.1366 14.823 13.3333Z" fill="black"/>
                        <path d="M12.6564 15.9999C11.1857 15.9999 9.98975 14.8038 9.98975 13.3333C9.98975 11.8625 11.1857 10.6665 12.6564 10.6665C14.1271 10.6665 15.323 11.8625 15.323 13.3333C15.323 14.8038 14.1271 15.9999 12.6564 15.9999ZM12.6564 11.6665C11.7371 11.6665 10.9897 12.4146 10.9897 13.3333C10.9897 14.2518 11.7371 14.9999 12.6564 14.9999C13.5757 14.9999 14.323 14.2518 14.323 13.3333C14.323 12.4146 13.5757 11.6665 12.6564 11.6665Z" fill="black"/>
                        <path d="M5.48962 8.00012C5.48962 9.19678 4.51953 10.1667 3.32288 10.1667C2.12634 10.1667 1.15625 9.19678 1.15625 8.00012C1.15625 6.80347 2.12634 5.8335 3.32288 5.8335C4.51953 5.8335 5.48962 6.80347 5.48962 8.00012Z" fill="black"/>
                        <path d="M3.32288 10.6667C1.85229 10.6667 0.65625 9.47083 0.65625 8.00012C0.65625 6.52942 1.85229 5.3335 3.32288 5.3335C4.79358 5.3335 5.98962 6.52942 5.98962 8.00012C5.98962 9.47083 4.79358 10.6667 3.32288 10.6667ZM3.32288 6.3335C2.40356 6.3335 1.65625 7.08142 1.65625 8.00012C1.65625 8.91882 2.40356 9.66675 3.32288 9.66675C4.24231 9.66675 4.98962 8.91882 4.98962 8.00012C4.98962 7.08142 4.24231 6.3335 3.32288 6.3335Z" fill="black"/>
                        <path d="M4.89682 7.67969C4.66477 7.67969 4.43943 7.55897 4.31675 7.34302C4.13474 7.02369 4.2468 6.61634 4.56614 6.4336L10.752 2.90699C11.0714 2.72364 11.4787 2.8357 11.6615 3.15626C11.8435 3.47559 11.7314 3.88294 11.4121 4.06568L5.22605 7.59229C5.12204 7.65162 5.00876 7.67969 4.89682 7.67969Z" fill="black"/>
                        <path d="M11.0821 13.1801C10.9701 13.1801 10.8568 13.152 10.7528 13.0927L4.56678 9.56604C4.24744 9.38403 4.1355 8.97668 4.31751 8.65662C4.49878 8.33667 4.90674 8.224 5.22681 8.40735L11.4128 11.934C11.7322 12.116 11.8441 12.5233 11.6621 12.8434C11.5388 13.0593 11.3135 13.1801 11.0821 13.1801Z" fill="black"/>
                        </svg>
                        Поделиться:</span>
                        <ul>
                            <li>
                                <a href="#">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14" cy="14" r="13.6" stroke="black" stroke-width="0.8"/>
                                <path d="M17 11.5333H14.616V10.0802C14.616 9.53455 15.0052 9.40733 15.2793 9.40733C15.5528 9.40733 16.9616 9.40733 16.9616 9.40733V7.0084L14.6447 7C12.0727 7 11.4874 8.78919 11.4874 9.93418V11.5333H10V14.0052H11.4874C11.4874 17.1776 11.4874 21 11.4874 21H14.616C14.616 21 14.616 17.1399 14.616 14.0052H16.7271L17 11.5333Z" fill="black"/>
                                </svg>
                                </a>
                            </li>
                            <li><a href="#">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14" cy="14" r="13.6" stroke="black" stroke-width="0.8"/>
                                <path d="M18.8566 15.1348C17.6806 14.0465 17.8308 14.2121 19.257 12.343C20.1077 11.2074 20.458 10.4977 20.3579 10.1901C20.3079 10.0008 19.6323 10.0481 19.6323 10.0481H17.5305C17.5305 10.0481 17.2052 10.0481 17.0801 10.2611C16.8549 10.6633 16.7549 11.1601 16.3045 11.8935C15.3537 13.4787 14.9783 13.5733 14.8282 13.4787C14.4779 13.2421 14.553 12.556 14.553 12.0591C14.553 10.5213 14.7782 9.88254 14.1026 9.69327C13.9525 9.64595 13.8274 9.64595 13.6022 9.62229C13.3269 9.59863 13.0517 9.59863 12.8015 9.59863C12.176 9.59863 11.7006 9.62229 11.3753 9.76424C11.1251 9.88254 10.9499 10.1428 11.075 10.1664C11.2252 10.1901 11.5254 10.2611 11.7006 10.474C11.9258 10.7579 11.9007 11.4204 11.9007 11.4204C11.9007 11.4204 12.0258 13.2421 11.6005 13.455C11.3252 13.6206 10.9249 13.2894 10.0992 11.8462C9.67384 11.1128 9.6238 10.616 9.34856 10.2847C9.17341 10.0718 8.84814 10.0008 8.84814 10.0008H6.84643C6.84643 10.0008 6.49614 9.97717 6.44609 10.0718C6.34601 10.1901 6.44609 10.4267 6.44609 10.4267C6.44609 10.4267 8.02243 14.0938 9.79894 15.9392C11.3753 17.6899 13.2269 17.5953 13.2269 17.5953C13.2269 17.5953 14.3028 17.6426 14.4529 17.3823C14.553 17.2877 14.578 17.0038 14.578 17.0038C14.578 17.0038 14.553 15.8682 15.0784 15.7026C15.6039 15.537 16.2544 16.7909 16.955 17.264C17.4805 17.6426 17.6306 17.5953 17.8808 17.5953C18.3812 17.5953 19.7574 17.5953 19.7574 17.5953C19.7574 17.5953 20.7332 17.5006 20.2829 16.7199C20.2078 16.6726 19.9826 16.1757 18.8566 15.1348Z" fill="black"/>
                                </svg>

                            </a></li>
                            <li><a href="#">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14" cy="14" r="13.6" stroke="black" stroke-width="0.8"/>
                                <g clip-path="url(#clip0)">
                                <path d="M21 9.65913C20.4794 9.8875 19.9246 10.0389 19.3462 10.1124C19.9412 9.75712 20.3954 9.19887 20.6089 8.526C20.0541 8.85675 19.4416 9.09038 18.7889 9.22075C18.2621 8.65988 17.5114 8.3125 16.6924 8.3125C15.1034 8.3125 13.8241 9.60225 13.8241 11.1834C13.8241 11.4109 13.8434 11.6296 13.8906 11.8379C11.5045 11.7215 9.39313 10.5779 7.97475 8.83575C7.72712 9.26538 7.58188 9.75713 7.58188 10.2865C7.58188 11.2805 8.09375 12.1616 8.85675 12.6718C8.39562 12.663 7.94325 12.5291 7.56 12.3183C7.56 12.327 7.56 12.3384 7.56 12.3498C7.56 13.7445 8.55487 14.903 9.8595 15.1699C9.62587 15.2337 9.37125 15.2644 9.107 15.2644C8.92325 15.2644 8.73775 15.2539 8.56362 15.2154C8.9355 16.352 9.99075 17.1876 11.2455 17.2148C10.269 17.9786 9.02912 18.4389 7.68688 18.4389C7.4515 18.4389 7.22575 18.4284 7 18.3995C8.27137 19.2194 9.77813 19.6875 11.403 19.6875C16.6845 19.6875 19.572 15.3125 19.572 11.5202C19.572 11.3934 19.5676 11.2709 19.5615 11.1493C20.1311 10.745 20.6097 10.2401 21 9.65913Z" fill="black"/>
                                </g>
                                <defs>
                                <clipPath id="clip0">
                                <rect width="14" height="14" fill="white" transform="translate(7 7)"/>
                                </clipPath>
                                </defs>
                                </svg>

                            </a></li>
                            <li><a href="#">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14" cy="14" r="13.6" stroke="black" stroke-width="0.8"/>
                                <path d="M14.1904 7C10.3533 7 8.31274 9.45886 8.31274 12.14C8.31274 13.3834 9.00753 14.934 10.1197 15.4258C10.2886 15.5019 10.3805 15.4695 10.4181 15.3129C10.4513 15.1939 10.5975 14.6207 10.6683 14.3503C10.6902 14.2637 10.6789 14.1884 10.6088 14.1071C10.2396 13.68 9.94644 12.9021 9.94644 12.1724C9.94644 10.3024 11.4331 8.48669 13.9629 8.48669C16.1505 8.48669 17.6809 9.90776 17.6809 11.9405C17.6809 14.2375 16.4655 15.8265 14.886 15.8265C14.0119 15.8265 13.3608 15.1405 13.5674 14.2917C13.8167 13.281 14.3059 12.1942 14.3059 11.4653C14.3059 10.8117 13.9366 10.2709 13.1823 10.2709C12.2924 10.2709 11.5705 11.1521 11.5705 12.3351C11.5705 13.0868 11.8365 13.5943 11.8365 13.5943C11.8365 13.5943 10.9562 17.1505 10.7926 17.8146C10.5161 18.939 10.8302 20.76 10.8574 20.9166C10.874 21.0033 10.9711 21.0304 11.0254 20.9595C11.112 20.8457 12.176 19.3276 12.4744 18.2303C12.5829 17.8304 13.0283 16.2089 13.0283 16.2089C13.3215 16.7383 14.1676 17.182 15.0689 17.182C17.75 17.182 19.6874 14.8255 19.6874 11.9011C19.6778 9.09747 17.2784 7 14.1904 7Z" fill="black"/>
                                </svg>

                            </a></li>
                            <li><a href="#">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14" cy="14" r="13.6" stroke="black" stroke-width="0.8"/>
                                <path d="M14.0017 7H13.9983C10.1386 7 7 10.1395 7 14C7 15.5312 7.4935 16.9505 8.33263 18.1029L7.46025 20.7034L10.1509 19.8433C11.2578 20.5765 12.5781 21 14.0017 21C17.8614 21 21 17.8596 21 14C21 10.1404 17.8614 7 14.0017 7ZM18.0749 16.8849C17.906 17.3617 17.2358 17.7572 16.7011 17.8727C16.3354 17.9506 15.8576 18.0128 14.2494 17.346C12.1922 16.4938 10.8675 14.4034 10.7643 14.2677C10.6654 14.1321 9.933 13.1609 9.933 12.1564C9.933 11.1519 10.4431 10.6628 10.6488 10.4528C10.8176 10.2804 11.0967 10.2016 11.3645 10.2016C11.4511 10.2016 11.529 10.206 11.599 10.2095C11.8046 10.2183 11.9079 10.2305 12.0435 10.5551C12.2124 10.962 12.6236 11.9665 12.6726 12.0698C12.7225 12.173 12.7724 12.313 12.7024 12.4486C12.6368 12.5886 12.579 12.6507 12.4757 12.7697C12.3725 12.8888 12.2745 12.9798 12.1712 13.1075C12.0767 13.2186 11.97 13.3376 12.089 13.5433C12.208 13.7445 12.6192 14.4156 13.2248 14.9546C14.0061 15.6502 14.6396 15.8725 14.8663 15.967C15.0351 16.037 15.2364 16.0204 15.3597 15.8891C15.5164 15.7203 15.7098 15.4403 15.9066 15.1646C16.0466 14.9669 16.2234 14.9424 16.4089 15.0124C16.5979 15.078 17.598 15.5724 17.8036 15.6747C18.0092 15.778 18.1449 15.827 18.1947 15.9136C18.2437 16.0002 18.2437 16.4071 18.0749 16.8849Z" fill="black"/>
                                </svg>

                            </a></li>
                            <li><a href="#">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14" cy="14" r="13.6" stroke="black" stroke-width="0.8"/>
                                <g clip-path="url(#clip0)">
                                <path d="M12.4934 15.8571L12.2618 19.1145C12.5931 19.1145 12.7366 18.9721 12.9087 18.8012L14.4621 17.3166L17.6809 19.6739C18.2713 20.0029 18.6872 19.8296 18.8464 19.1308L20.9593 9.23046L20.9599 9.22987C21.1471 8.35721 20.6443 8.01596 20.0691 8.23004L7.64994 12.9848C6.80235 13.3138 6.81519 13.7863 7.50585 14.0004L10.6809 14.988L18.056 10.3732C18.4031 10.1434 18.7187 10.2705 18.4591 10.5004L12.4934 15.8571Z" fill="black"/>
                                </g>
                                <defs>
                                <clipPath id="clip0">
                                <rect width="14" height="14" fill="white" transform="translate(7 7)"/>
                                </clipPath>
                                </defs>
                                </svg>

                            </a></li>
                            <li><a href="#">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14" cy="14" r="13.6" stroke="black" stroke-width="0.8"/>
                                <g clip-path="url(#clip0)">
                                <path d="M9.75439 14.5145C9.39681 15.2175 9.80281 15.5535 10.7291 16.1274C11.5166 16.6139 12.6046 16.7919 13.3034 16.863C13.017 17.1384 14.3295 15.876 10.5495 19.5119C9.74797 20.2802 11.0383 21.5128 11.8392 20.7609L14.0075 18.6696C14.8376 19.4682 15.6332 20.2335 16.1757 20.7638C16.9772 21.5186 18.267 20.2965 17.4742 19.5149C17.4147 19.4583 14.536 16.6968 14.7116 16.8659C15.4191 16.7948 16.4907 16.6064 17.2689 16.1304L17.2683 16.1298C18.1946 15.5529 18.6006 15.2175 18.2483 14.5145C18.0354 14.1155 17.4614 13.7819 16.6972 14.3588C16.6972 14.3588 15.6653 15.1492 14.0011 15.1492C12.3362 15.1492 11.3049 14.3588 11.3049 14.3588C10.5413 13.779 9.96497 14.1155 9.75439 14.5145Z" fill="black"/>
                                <path d="M14.0008 14.0828C16.0296 14.0828 17.6863 12.4973 17.6863 10.5455C17.6863 8.5855 16.0296 7 14.0008 7C11.9714 7 10.3147 8.5855 10.3147 10.5455C10.3147 12.4973 11.9714 14.0828 14.0008 14.0828ZM14.0008 8.79608C14.9977 8.79608 15.8109 9.57833 15.8109 10.5455C15.8109 11.5045 14.9977 12.2868 14.0008 12.2868C13.0039 12.2868 12.1907 11.5045 12.1907 10.5455C12.1901 9.57775 13.0033 8.79608 14.0008 8.79608Z" fill="black"/>
                                </g>
                                <defs>
                                <clipPath id="clip0">
                                <rect width="14" height="14" fill="white" transform="translate(7 7)"/>
                                </clipPath>
                                </defs>
                                </svg>

                            </a></li>
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