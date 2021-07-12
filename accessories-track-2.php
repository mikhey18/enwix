<?php 
  require_once('functions.php');
  $header = include_template('header.php', []);
  print($header);
?>

<main>
        <section class="accessories-track-2">
            <div class="breadcrumbs bredcrumbs-third">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li>/</li>
                    <li><a href="#">Владельцам</a></li>
                    <li>/</li>
                    <li>Аксессуары для вездехода enwix track 2</li>
                </ul>
            </div>
            
            <div class="news-main__wrapper news-main__wrapper-item">

                <div class="news-main__menu accessories-track-2-main__menu">
                    <button></button>
                    <ul>
                        <li class="active accessories-tab" data-name="accessories-track-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9992 21.8571C11.9146 21.8571 11.8318 21.832 11.7614 21.7851L10.4757 20.928L10.9511 20.2148L12.1289 21H14.0284C13.822 20.3407 13.6415 19.6214 13.4888 18.8571H11.142C11.0575 18.8571 10.9746 18.832 10.9043 18.7851L9.61856 17.928L10.094 17.2148L11.2718 18H13.3326C13.217 17.309 13.1221 16.5911 13.0484 15.8571H10.7134C10.6289 15.8571 10.546 15.832 10.4757 15.7851L9.18998 14.928L9.66543 14.2148L10.8432 15H12.9718C12.9172 14.2917 12.8825 13.5741 12.8668 12.8571H10.7134C10.6289 12.8571 10.546 12.832 10.4757 12.7851L9.18998 11.928L9.66543 11.2148L10.8432 12H12.8563C12.8563 11.2872 12.8769 10.5696 12.9159 9.85714H10.7134C10.6289 9.85714 10.546 9.83202 10.4757 9.78514L9.18998 8.928L9.66543 8.2148L10.8432 9H12.9718C13.0279 8.27164 13.1043 7.55357 13.2009 6.85714H11.142C11.0575 6.85714 10.9746 6.83202 10.9043 6.78514L9.61856 5.928L10.094 5.2148L11.2718 6H13.3326C13.4585 5.24754 13.6088 4.52823 13.7835 3.85714H11.5706C11.4861 3.85714 11.4032 3.83202 11.3328 3.78514L10.0471 2.928L10.5226 2.2148L11.7003 3H14.0284C14.428 1.72393 14.9264 0.678268 15.5206 0H8.14202C7.36159 0 6.26986 1.09982 5.33348 3H7.15513L8.33284 2.21486L8.80829 2.92805L7.52257 3.7852C7.45229 3.83202 7.36941 3.85714 7.28488 3.85714H4.94606C4.67691 4.50386 4.42856 5.2207 4.21384 6H6.29804L7.47575 5.21486L7.9512 5.92805L6.66548 6.7852C6.59514 6.83202 6.51227 6.85714 6.42773 6.85714H3.99838C3.84307 7.53332 3.71364 8.24866 3.61775 9H5.44084L6.61856 8.21486L7.094 8.92805L5.80829 9.7852C5.738 9.83202 5.65513 9.85714 5.57059 9.85714H3.52507C3.46304 10.5467 3.42773 11.261 3.42773 12H5.44084L6.61856 11.2149L7.094 11.9281L5.80829 12.7852C5.738 12.832 5.65513 12.8571 5.57059 12.8571H3.44472C3.47102 13.5984 3.53022 14.3139 3.61775 15H5.86941L7.04713 14.2149L7.52257 14.9281L6.23686 15.7852C6.16657 15.832 6.0837 15.8571 5.99916 15.8571H3.7437C3.88577 16.7088 4.07006 17.5085 4.28488 18.2498V18H6.72656L7.90427 17.2149L8.37972 17.9281L7.094 18.7852C7.02372 18.832 6.94084 18.8571 6.85631 18.8571H4.47061C4.72984 19.6523 5.02304 20.3701 5.33343 21H7.58364L8.76136 20.2149L9.23681 20.9281L7.95109 21.7852C7.88086 21.832 7.79798 21.8571 7.71345 21.8571H5.79881C6.6155 23.2255 7.48797 24 8.14202 24H15.5206C15.0656 23.4807 14.6671 22.7454 14.3257 21.8571H11.9992Z" fill="black"/>
                                <path d="M17.1431 17.5716C17.8532 17.5716 18.4289 15.0772 18.4289 12.0001C18.4289 8.92312 17.8532 6.42871 17.1431 6.42871C16.4331 6.42871 15.8574 8.92312 15.8574 12.0001C15.8574 15.0772 16.4331 17.5716 17.1431 17.5716Z" fill="black"/>
                                <path d="M17.1434 0C15.5216 0 13.7148 4.92814 13.7148 12C13.7148 19.0719 15.5216 24 17.1434 24C18.7652 24 20.572 19.0719 20.572 12C20.572 4.92814 18.7652 0 17.1434 0ZM17.1434 18.4286C15.6711 18.4286 15.0006 15.0963 15.0006 12C15.0006 8.90373 15.6711 5.57143 17.1434 5.57143C18.6158 5.57143 19.2863 8.90373 19.2863 12C19.2863 15.0963 18.6158 18.4286 17.1434 18.4286Z" fill="black"/>
                                </svg>
                            Аксессуары</li>
                        <li class="tires-tab" data-name="tires">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.2254 1.16113H10.4512V1.93533H11.2254V1.16113Z" fill="white"/>
                                <path d="M13.5476 1.16113H12.7734V1.93533H13.5476V1.16113Z" fill="white"/>
                                <path d="M17.032 1.16113H16.2578V1.93533H17.032V1.16113Z" fill="white"/>
                                <path d="M19.3543 1.16113H18.5801V1.93533H19.3543V1.16113Z" fill="white"/>
                                <path d="M24 0.774194V0H22.8387H22.4516H18.9677H16.6452H13.1613H12.7742H10.8387C10.6142 0 10.4021 0.0503226 10.2093 0.136645C9.32516 0.269032 8.45458 0.502452 7.61806 0.83071C7.40826 0.852387 7.19961 0.91471 7.00568 1.02697L4.99471 2.18826C4.8031 2.29897 4.64323 2.448 4.51742 2.62219C3.81794 3.17923 3.18077 3.81639 2.62103 4.51819C2.45032 4.64206 2.3009 4.80039 2.18865 4.99432L1.02735 7.00568C0.916645 7.19729 0.853161 7.40632 0.83071 7.62C0.503613 8.45148 0.270581 9.32168 0.136645 10.2097C0.0503226 10.4021 0 10.6142 0 10.8387V13.1613C0 13.3858 0.0503226 13.5975 0.136258 13.7903C0.268645 14.6737 0.502065 15.5443 0.830323 16.3812C0.852387 16.5945 0.916258 16.8031 1.02697 16.9943L2.18826 19.0057C2.30129 19.2012 2.45148 19.361 2.62374 19.4853C3.18 20.1832 3.81639 20.82 4.51781 21.379C4.644 21.5528 4.8031 21.7014 4.99471 21.8117L7.00568 22.973C7.20116 23.0857 7.41135 23.1488 7.62232 23.1701C8.45381 23.4972 9.32361 23.7302 10.2101 23.8637C10.4025 23.9497 10.6146 24 10.8387 24H12.7742H13.1613H16.6452H18.9677H22.4516H22.8387H24V23.2258H22.8387H22.4516C22.0246 23.2258 21.6774 22.8786 21.6774 22.4516C21.6774 22.0246 22.0246 21.6774 22.4516 21.6774H22.8387H24V20.9032H22.8387H22.4516H18.9677H16.6452H13.1613H12.7742H10.8387C10.5105 20.9032 10.2066 21.0074 9.95574 21.1827L9.19858 21.0279C9.07161 20.729 8.856 20.4654 8.55368 20.2912L6.54271 19.1299C6.26516 18.9697 5.95161 18.9035 5.63845 18.9306L5.06013 18.4177C5.09961 18.0956 5.04464 17.7596 4.87045 17.4577L3.70916 15.4463C3.54465 15.1622 3.30271 14.9516 3.02555 14.8219L2.7809 14.0884C2.97677 13.8286 3.09677 13.5101 3.09677 13.1613V10.8387C3.09677 10.5105 2.99265 10.207 2.81768 9.95613L2.97174 9.20361C3.27135 9.07703 3.53419 8.85677 3.70916 8.55406L4.87045 6.54271C5.03458 6.25858 5.09613 5.94348 5.06981 5.63884L5.57806 5.06555C5.64232 5.07368 5.70697 5.07832 5.77123 5.07832C6.03948 5.07832 6.30465 5.00787 6.5431 4.87006L8.55406 3.70877C8.83819 3.54465 9.04916 3.30271 9.17884 3.02555L9.91239 2.7809C10.1714 2.97677 10.4899 3.09677 10.8387 3.09677H12.7742H13.1613H16.6452H18.9677H22.4516H22.8387H24V2.32258H22.8387H22.4516C22.0246 2.32258 21.6774 1.97535 21.6774 1.54839C21.6774 1.12142 22.0246 0.774194 22.4516 0.774194H22.8387H24ZM20.3009 21.6774H21.1188C20.9853 21.9062 20.9032 22.1683 20.9032 22.4516C20.9032 22.735 20.9853 22.997 21.1185 23.2258H20.3005C20.4341 22.997 20.5161 22.735 20.5161 22.4516C20.5161 22.1683 20.4341 21.9062 20.3009 21.6774ZM16.6452 21.6774H18.9677C19.3947 21.6774 19.7419 22.0246 19.7419 22.4516C19.7419 22.8786 19.3947 23.2258 18.9677 23.2258H16.6452C16.2182 23.2258 15.871 22.8786 15.871 22.4516C15.871 22.0246 16.2182 21.6774 16.6452 21.6774ZM14.4945 21.6774H15.3124C15.1788 21.9062 15.0968 22.1683 15.0968 22.4516C15.0968 22.735 15.1788 22.997 15.312 23.2258H14.4945C14.6276 22.997 14.7097 22.735 14.7097 22.4516C14.7097 22.1683 14.6276 21.9062 14.4945 21.6774ZM10.8387 21.6774H12.7742H13.1613C13.5883 21.6774 13.9355 22.0246 13.9355 22.4516C13.9355 22.8786 13.5883 23.2258 13.1613 23.2258H12.7742H10.8387C10.4117 23.2258 10.0645 22.8786 10.0645 22.4516C10.0645 22.0246 10.4117 21.6774 10.8387 21.6774ZM9.12077 22.4063C9.22452 22.2267 9.28606 22.0347 9.31239 21.8412L9.40839 21.8609C9.3329 22.0428 9.29032 22.2422 9.29032 22.4516C9.29032 22.6115 9.32168 22.7625 9.36658 22.9076C9.18736 22.8643 9.00929 22.8166 8.83239 22.7648C8.9431 22.6622 9.04181 22.5434 9.12077 22.4063ZM5.09768 20.0837C5.20103 19.9045 5.36787 19.7764 5.56761 19.723C5.63458 19.7052 5.70232 19.6963 5.76929 19.6963C5.904 19.6963 6.03639 19.7315 6.15561 19.8004L8.16658 20.9617C8.53626 21.175 8.66361 21.6495 8.44993 22.0192C8.23626 22.3889 7.76206 22.5163 7.39239 22.3026L5.38142 21.1413C5.20219 21.0379 5.07406 20.8711 5.02026 20.6714C4.96684 20.4716 4.99432 20.263 5.09768 20.0837ZM1.23677 8.82735C1.3409 8.93961 1.45703 9.04181 1.59368 9.12077C1.77329 9.22452 1.9649 9.28723 2.15884 9.31316L2.13948 9.40839C1.95716 9.3329 1.75781 9.29032 1.54839 9.29032C1.38852 9.29032 1.23755 9.32168 1.09239 9.36658C1.13613 9.18542 1.18413 9.00581 1.23677 8.82735ZM0.774194 13.1613V10.8387C0.774194 10.4117 1.12142 10.0645 1.54839 10.0645C1.97535 10.0645 2.32258 10.4117 2.32258 10.8387V13.1613C2.32258 13.5883 1.97535 13.9355 1.54839 13.9355C1.12142 13.9355 0.774194 13.5883 0.774194 13.1613ZM1.23677 15.1726C1.18413 14.9938 1.13574 14.8142 1.09239 14.6334C1.23755 14.6783 1.38852 14.7097 1.54839 14.7097C1.75587 14.7097 1.9529 14.6671 2.13406 14.5932L2.16503 14.6865C1.96916 14.712 1.77523 14.7747 1.59368 14.8796C1.45703 14.9582 1.3409 15.06 1.23677 15.1726ZM4.752 19.1787L4.824 19.2426C4.66529 19.3645 4.53019 19.5178 4.42723 19.6966C4.34826 19.8333 4.2991 19.9796 4.26503 20.129C4.13148 20.0021 4.00103 19.872 3.87406 19.7385C4.02116 19.7048 4.16594 19.6517 4.30335 19.5724C4.48297 19.4686 4.63277 19.3332 4.752 19.1787ZM3.03871 15.833L4.2 17.8444C4.41368 18.2141 4.28632 18.6886 3.91665 18.9019C3.73819 19.0057 3.52994 19.0335 3.32903 18.9794C3.12929 18.9259 2.96245 18.7978 2.8591 18.6186L1.69781 16.6068C1.59406 16.428 1.56658 16.2194 1.62039 16.0196C1.67381 15.8199 1.80194 15.653 1.98116 15.5497C2.10271 15.4792 2.23548 15.4459 2.36671 15.4459C2.63458 15.4459 2.89548 15.5849 3.03871 15.833ZM4.2 6.15561L3.03871 8.16697C2.82542 8.53664 2.35161 8.664 1.98116 8.45071C1.80194 8.34697 1.67381 8.18013 1.62039 7.98039C1.56658 7.78064 1.59445 7.572 1.69781 7.39277L2.8591 5.38142C2.96245 5.20258 3.12929 5.07445 3.32903 5.02065C3.396 5.00284 3.46374 4.99394 3.53071 4.99394C3.66503 4.99394 3.79703 5.02877 3.91626 5.09768C4.28594 5.31135 4.41329 5.78594 4.2 6.15561ZM4.75626 4.82555C4.63587 4.66877 4.4849 4.53213 4.30335 4.42761C4.16516 4.34787 4.01845 4.2991 3.87019 4.26581C3.99871 4.13071 4.12994 3.99948 4.26503 3.87097C4.2991 4.02039 4.34864 4.1671 4.42761 4.30335C4.52981 4.48026 4.66335 4.632 4.82013 4.75355L4.75626 4.82555ZM8.16697 3.03832L6.156 4.19961C5.97677 4.30335 5.7689 4.33045 5.568 4.27703C5.36826 4.22361 5.20142 4.09548 5.09806 3.91626C4.99432 3.73742 4.96723 3.52877 5.02065 3.32864C5.07445 3.1289 5.20258 2.96206 5.38181 2.85871L7.39277 1.69742C7.51432 1.62735 7.6471 1.59368 7.77871 1.59368C8.04619 1.59368 8.3071 1.73265 8.45032 1.98077C8.664 2.35045 8.53664 2.82503 8.16697 3.03832ZM9.31355 2.16465C9.288 1.96877 9.22529 1.77484 9.12077 1.59368C9.04103 1.45548 8.93806 1.34013 8.82658 1.23677C9.00542 1.18413 9.18542 1.13574 9.36697 1.092C9.32168 1.23755 9.29032 1.38852 9.29032 1.54839C9.29032 1.75548 9.3329 1.9529 9.40684 2.13368L9.31355 2.16465ZM13.1613 2.32258H12.7742H10.8387C10.4117 2.32258 10.0645 1.97535 10.0645 1.54839C10.0645 1.12142 10.4117 0.774194 10.8387 0.774194H12.7742H13.1613C13.5883 0.774194 13.9355 1.12142 13.9355 1.54839C13.9355 1.97535 13.5883 2.32258 13.1613 2.32258ZM15.312 2.32258H14.4941C14.6276 2.09381 14.7097 1.83174 14.7097 1.54839C14.7097 1.26503 14.6276 1.00297 14.4945 0.774194H15.312C15.1788 1.00297 15.0968 1.26503 15.0968 1.54839C15.0968 1.83174 15.1788 2.09381 15.312 2.32258ZM18.9677 2.32258H16.6452C16.2182 2.32258 15.871 1.97535 15.871 1.54839C15.871 1.12142 16.2182 0.774194 16.6452 0.774194H18.9677C19.3947 0.774194 19.7419 1.12142 19.7419 1.54839C19.7419 1.97535 19.3947 2.32258 18.9677 2.32258ZM21.1185 2.32258H20.3005C20.4341 2.09381 20.5161 1.83174 20.5161 1.54839C20.5161 1.26503 20.4341 1.00297 20.3009 0.774194H21.1188C20.9853 1.00297 20.9032 1.26503 20.9032 1.54839C20.9032 1.83174 20.9853 2.09381 21.1185 2.32258Z" fill="white"/>
                                <path d="M22.8386 1.16113H22.0645V1.93533H22.8386V1.16113Z" fill="white"/>
                                <path d="M5.24 3.38705L5.62695 4.05713L6.29702 3.67017L5.91007 3.0001L5.24 3.38705Z" fill="white"/>
                                <path d="M7.25367 2.22592L7.64062 2.896L8.3107 2.50904L7.92374 1.83896L7.25367 2.22592Z" fill="white"/>
                                <path d="M1.83924 7.92206L2.50977 8.30908L2.89678 7.63855L2.22626 7.25152L1.83924 7.92206Z" fill="white"/>
                                <path d="M3.00134 5.91034L3.67188 6.29736L4.05889 5.62684L3.38836 5.23982L3.00134 5.91034Z" fill="white"/>
                                <path d="M1.9363 12.7744H1.16211V13.5486H1.9363V12.7744Z" fill="white"/>
                                <path d="M1.9363 10.4517H1.16211V11.2259H1.9363V10.4517Z" fill="white"/>
                                <path d="M4.05694 18.3746L3.66992 17.7041L2.99939 18.0911L3.38641 18.7617L4.05694 18.3746Z" fill="white"/>
                                <path d="M2.22603 16.7489L2.89648 16.3618L2.50939 15.6914L1.83894 16.0785L2.22603 16.7489Z" fill="white"/>
                                <path d="M8.30874 21.4905L7.63867 21.1035L7.25172 21.7736L7.92179 22.1605L8.30874 21.4905Z" fill="white"/>
                                <path d="M6.29702 20.3298L5.62695 19.9429L5.24 20.613L5.91007 20.9999L6.29702 20.3298Z" fill="white"/>
                                <path d="M13.5476 22.0645H12.7734V22.8386H13.5476V22.0645Z" fill="white"/>
                                <path d="M11.2254 22.0645H10.4512V22.8386H11.2254V22.0645Z" fill="white"/>
                                <path d="M17.032 22.0645H16.2578V22.8386H17.032V22.0645Z" fill="white"/>
                                <path d="M19.3543 22.0645H18.5801V22.8386H19.3543V22.0645Z" fill="white"/>
                                <path d="M22.8386 22.0645H22.0645V22.8386H22.8386V22.0645Z" fill="white"/>
                                <path d="M20.1292 12.6663V11.3343L19.2919 11.0552C19.2086 10.4123 19.0391 9.78206 18.7855 9.17587L19.3732 8.51316L18.707 7.35922L17.8383 7.5369C17.4427 7.01974 16.9813 6.55871 16.4637 6.16232L16.6414 5.29367L15.4879 4.62748L14.8252 5.21548C14.2186 4.96193 13.5884 4.792 12.9454 4.70877L12.6663 3.87109H11.3343L11.0552 4.70838C10.4123 4.79161 9.78206 4.96155 9.17548 5.21509L8.51277 4.62709L7.35922 5.29329L7.5369 6.16193C7.01935 6.55793 6.55832 7.01896 6.16232 7.53651L5.29367 7.35884L4.62748 8.51277L5.21509 9.17548C4.96193 9.78206 4.792 10.4123 4.70877 11.0548L3.87109 11.3339V12.6659L4.70838 12.945C4.79161 13.588 4.96116 14.2182 5.21471 14.8244L4.62709 15.4871L5.29329 16.641L6.16193 16.4634C6.55755 16.9805 7.01896 17.4415 7.53651 17.8379L7.35884 18.7066L8.51238 19.3728L9.17509 18.7848C9.78167 19.0383 10.4119 19.2083 11.0548 19.2915L11.3339 20.1292H12.6659L12.945 19.2919C13.588 19.2086 14.2182 19.0387 14.8248 18.7852L15.4875 19.3732L16.641 18.707L16.4634 17.8383C16.9809 17.4423 17.4419 16.9813 17.8379 16.4637L18.7066 16.6414L19.3728 15.4875L18.7852 14.8248C19.0383 14.2182 19.2083 13.588 19.2915 12.9454L20.1292 12.6663ZM18.5726 12.369L18.5486 12.6203C18.4809 13.3468 18.2893 14.0583 17.9792 14.735L17.8743 14.9641L18.4232 15.5835L18.3152 15.7708L17.5046 15.6048L17.3583 15.8099C16.931 16.4095 16.4103 16.9306 15.8103 17.3583L15.6052 17.5043L15.7712 18.3148L15.5839 18.4228L14.9645 17.8739L14.735 17.9788C14.0587 18.2889 13.3468 18.4805 12.6203 18.5486L12.369 18.5723L12.1081 19.355H11.8917L11.6308 18.5726L11.3796 18.549C10.653 18.4809 9.94116 18.2893 9.2649 17.9792L9.03535 17.8743L8.416 18.4232L8.22864 18.3152L8.39471 17.5046L8.18955 17.3587C7.58955 16.9314 7.06851 16.4103 6.64155 15.8103L6.49522 15.6052L5.68464 15.7712L5.57664 15.5839L6.12555 14.9645L6.02064 14.7354C5.71058 14.0587 5.51896 13.3472 5.45122 12.6206L5.42722 12.3694L4.64529 12.1081V11.8917L5.42761 11.6308L5.45161 11.3796C5.51935 10.653 5.71096 9.94155 6.02103 9.2649L6.12593 9.03574L5.57703 8.41638L5.68503 8.22903L6.49561 8.39509L6.64193 8.18993C7.06929 7.59032 7.58993 7.06929 8.18993 6.64155L8.39509 6.49561L8.22903 5.68503L8.41638 5.57703L9.03574 6.12593L9.26529 6.02103C9.94155 5.71096 10.6534 5.51935 11.38 5.45122L11.6312 5.42761L11.8921 4.64529H12.1085L12.3694 5.42761L12.6206 5.45122C13.3472 5.51935 14.0591 5.71096 14.7354 6.02103L14.9649 6.12593L15.5843 5.57703L15.7716 5.68503L15.6055 6.49561L15.8107 6.64155C16.4107 7.0689 16.9317 7.58993 17.3587 8.18993L17.505 8.39509L18.3156 8.22903L18.4236 8.41638L17.8747 9.03574L17.9796 9.2649C18.2897 9.94155 18.4813 10.653 18.549 11.3796L18.573 11.6308L19.355 11.8921V12.1085L18.5726 12.369Z" fill="white"/>
                                <path d="M11.9995 8.51611C10.0783 8.51611 8.51562 10.0792 8.51562 12C8.51562 13.9208 10.0783 15.4839 11.9995 15.4839C12.7892 15.4839 13.5626 15.2125 14.1773 14.7193L13.6927 14.1151C13.208 14.5041 12.6223 14.7097 11.9995 14.7097C10.5057 14.7097 9.28982 13.4942 9.28982 12C9.28982 10.5058 10.5057 9.29031 11.9995 9.29031C13.4933 9.29031 14.7092 10.5058 14.7092 12C14.7092 12.6228 14.5036 13.2085 14.115 13.6935L14.7192 14.1778C15.212 13.5627 15.4834 12.7893 15.4834 12C15.4834 10.0792 13.9207 8.51611 11.9995 8.51611Z" fill="white"/>
                                </svg>
                                

                            Шины низкого давления</li>
                    </ul>
                </div>

                <div class="news-main__content accessories-track-2__item accessories-track-2__item-accessories-track-2" id="accessories-track-2">
                    <div class="accessories-track-2__title">аксессуары для вездехода enwix track 2</div>
                        
                    <div class="swiper-container swiper-container-accessories-track-2">

                        <div class="swiper-wrapper swiper-wrapper-accessories-track-2">

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_1.png" alt="">
                                    </a>
                                </div>
                                    <p>Запасная покрышка АТ 25х12-9</p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="http://placehold.it/1328x889">
                                        <img src="img/accessories-desktop-img_2.png" alt="">
                                    </a>
                                </div>
                                    <p>Гусеница резиновая</p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/">
                                        <img src="img/accessories-desktop-img_3.png" alt="">
                                    </a>
                                </div>
                                    <p>Ремни безопасности
                                    </p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_4.png" alt="">
                                    </a>
                                </div>
                                    <p>Внутреннее освещение</p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_5.png" alt="">
                                    </a>
                                </div>
                                    <p>Набор инструментов</p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_6.png" alt="">
                                    </a>
                                </div>
                                    <p>Крюк для зацепления в лед</p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_7.png" alt="">
                                    </a>
                                </div>
                                    <p>Стояночный чехол
                                    </p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_8.png" alt="">
                                    </a>
                                </div>
                                    <p>Ручки для пассажиров сзади</p>
                            </div>

                            

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_9.png" alt="">
                                    </a>
                                </div>
                                    <p>Розетка 12 В</p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_10.png" alt="">
                                    </a>
                                </div>
                                    <p>Сетки-карманы в салоне</p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_11.png" alt="">
                                    </a>
                                </div>
                                    <p>Фаркоп (с задним кронштейном)
                                    </p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_12.png" alt="">
                                    </a>
                                </div>
                                    <p>Боковые зеркала заднего вида
                                    </p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_13.png" alt="">
                                    </a>
                                </div>
                                    <p>Фара искатель</p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_14.png" alt="">
                                    </a>
                                </div>
                                    <p>Стеклоочиститель
                                    </p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_15.png" alt="">
                                    </a>
                                </div>
                                    <p>Отвал для снега</p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_16.png" alt="">
                                    </a>
                                </div>
                                    <p>Отопитель салона
                                    </p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_17.png" alt="">
                                    </a>
                                </div>
                                    <p>Дополнительные источники света
                                    </p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_18.png" alt="">
                                    </a>
                                </div>
                                    <p>Электрическая лебедка</p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_19.png" alt="">
                                    </a>
                                </div>
                                    <p>Защита днища</p>
                            </div>

                            <div class="swiper-slide swiper-slide-accessories-track-2">
                                <div class="swiper-slide swiper-slide-accessories-track-2-image">
                                    <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                        <img src="img/accessories-desktop-img_20.png" alt="">
                                    </a>
                                </div>
                                    <p>Трюмная помпа</p>
                            </div>
                            

                        </div>

                        <!-- <div class="swiper-button-prev"></div> -->
                        <!-- <div class="swiper-button-next"></div> -->

                        <div class="swiper-pagination"></div>

                    </div>

                    <div class="accessories-track-2__blocks">
                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_1.png" alt="">
                                </a>
                                <p>Запасная покрышка АТ 25х12-9</p>
                            </div>
                        </div>
    
                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_2.png" alt="">
                                </a>
                                <p>Гусеница резиновая</p>
                                </div>
                        </div>
    
                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image accessories-track-2__block-image--right">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_3.png" alt="">
                                </a>
                            <p>Ремни безопасности
                            </p>
                            </div>
                        </div>
    
                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_4.png" alt="">
                                </a>
                            <p>Внутреннее освещение</p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_5.png" alt="">
                                </a>
                            <p>Набор инструментов</p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image accessories-track-2__block-image--right">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_6.png" alt="">
                                </a>
                            <p>Крюк для зацепления в лед
                            </p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_8.png" alt="">
                                </a>
                            <p>Стояночный чехол
                            </p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_9.png" alt="">
                                </a>
                            <p>Ручки для пассажиров сзади</p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image accessories-track-2__block-image--right">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_10.png" alt="">
                                </a>
                            <p>Розетка 12 В</p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_11.png" alt="">
                                </a>
                            <p>Сетки-карманы в салоне</p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_12.png" alt="">
                                </a>
                            <p>Фаркоп (с задним кронштейном)
                            </p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image accessories-track-2__block-image--right">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_13.png" alt="">
                                </a>
                            <p>Боковые зеркала заднего вида
                            </p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_14.png" alt="">
                                </a>
                            <p>Фара искатель</p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_14.png" alt="">
                                </a>
                            <p>Стеклоочиститель
                            </p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image accessories-track-2__block-image--right">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_15.png" alt="">
                                </a>
                            <p>Отвал для снега</p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_16.png" alt="">
                                </a>
                            <p>Отопитель салона
                            </p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_17.png" alt="">
                                </a>
                            <p>Дополнительные источники света
                            </p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image accessories-track-2__block-image--right">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_18.png" alt="">
                                </a>
                            <p>Электрическая лебедка</p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_19.png" alt="">
                                </a>
                            <p>Защита днища</p>
                            </div>
                        </div>

                        <div class="accessories-track-2__block">
                            <div class="accessories-track-2__block-image">
                                <a data-fancybox="gallery-mobile" href="img/accessories-slider-img-large_1.png">
                                    <img src="img/accessories-desktop-img_20.png" alt="">
                                </a>
                            <p>Трюмная помпа</p>
                            </div>
                        </div>




                    </div>

            </div>

            <div class="news-main__content page-item__wrapper tires__item tires__item-accessories-track-2" id="tires">
                <section class="first-screen">
                    
                    <div class="first-screen__wrapper">
                        <div class="swiper-container first-screen__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image: url(img/tires-main.jpg)">
                                    <div class="first-screen__slider--cover"></div>
                                    <div class="first-screen__slider-wrap">
                                        <h2>шины низкого давления</h2>
                                        <p>Одна из ведущих компаний по производству вездеходов в России.</p>
                                        
                                        <a href="#" class="btn btn-second">ЗАКАЗАТЬ шины низкого давления</a>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="background-image: url(img/tires-main.jpg)">
                                    <div class="first-screen__slider--cover"></div>
                                    <div class="first-screen__slider-wrap">
                                        <h2>шины низкого давления</h2>
                                        <p>Одна из ведущих компаний по производству вездеходов в России.</p>
                                        
                                        <a href="#" class="btn btn btn-second">ЗАКАЗАТЬ шины низкого давления</a>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="background-image: url(img/tires-main.jpg)">
                                    <div class="first-screen__slider--cover"></div>
                                    <div class="first-screen__slider-wrap">
                                        <h2>шины низкого давления</h2>
                                        <p>Одна из ведущих компаний по производству вездеходов в России.</p>
                                    
                                        <a href="#" class="btn btn btn-second">ЗАКАЗАТЬ шины низкого давления</a>
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
                          <div class="swiper-slide" style="background-image: url(img/tires-main.jpg)">
                                    <div class="first-screen__slider--cover"></div>
                                    <div class="first-screen__slider-wrap">
                                        <h2>шины низкого давления</h2>
                                        <p>Одна из ведущих компаний по производству вездеходов в России.</p>
                                        <a href="#" class="btn btn btn-second">ЗАКАЗАТЬ шины низкого давления</a>
                                    </div>
                                </div>
                          <div class="swiper-slide" style="background-image: url(img/tires-main.jpg)">
                                    <div class="first-screen__slider--cover"></div>
                                    <div class="first-screen__slider-wrap">
                                        <h2>шины низкого давления</h2>
                                        <p>Одна из ведущих компаний по производству вездеходов в России.</p>
                                        <a href="#" class="btn btn btn-second">ЗАКАЗАТЬ шины низкого давления</a>
                                    </div>
                                </div>
                          <div class="swiper-slide" style="background-image: url(img/tires-main.jpg)">
                                    <div class="first-screen__slider--cover"></div>
                                    <div class="first-screen__slider-wrap">
                                        <h2>шины низкого давления</h2>
                                        <p>Одна из ведущих компаний по производству вездеходов в России.</p>
                                        <a href="#" class="btn btn btn-second">ЗАКАЗАТЬ шины низкого давления</a>
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
                    
                    <div class="model-desk__container">
                        <h3>УСТАНАВЛИВАЕТСЯ НА ВСЕ ВИДЫ КОЛЕСНЫХ ВЕЗДЕХОДОВ</h3>
    
                        <div class="tires-desk">
    
                            <div>
                                <img src="img/car-tires.png" alt="">
                                <p>универсальные шины низкого давления</p>
                            </div>
    
                            <div>
                                <ul>
                                    <li>
                                        <img src="img/tires-enwix.jpg" alt="">
                                        <span>Enwix</span>
                                    </li>
                                    <li>
                                        <img src="img/argo-enwix.jpg" alt="">
                                        <span>Argo</span>
                                    </li>
                                    <li>
                                        <img src="img/max-tires.jpg" alt="">
                                        <span>max</span>
                                    </li>
                                    <li>
                                        <img src="img/xbh-tires.jpg" alt="">
                                        <span>xbh</span>
                                    </li>
                                    <li>
                                        <img src="img/mudd-tires.jpg" alt="">
                                        <span>mudd-ox</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
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
    
                <section class="page-item__images">
                    <h3>Галерея</h3>
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
    
                <section class="features-model features-tires">
                    <div class="features-model__wrapper">
                        <h3>ФУНКЦИОНАЛЬНЫЕ ПРЕИМУЩЕСТВА<br> шин низкого давления</h3>
    
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
            
        </section>
       

       
    </main>

 <?php 
  $footer = include_template('footer.php', []);
  print($footer);
?> 