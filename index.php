<?php get_header(); ?>

<main class="main-content">
    <div class="main-info-container">



        <div class="main-info-container--2">
            <div class="main-info-container--3">
                <div class="text-container">
                    <picture class="main-absolute__img">
                        <img class="img-absolute" src="<?php echo get_template_directory_uri(); ?>/img/more-cubses.svg" alt="">
                    </picture>

                    <h1 class="main-title main-span__out-title">
                        Cash 365 –
                        Ihre Lösung für Echtzeit-Banking

                    </h1>

                    <p class="main-text">
                     <?php the_field('description'); ?>
                    </p>


                </div>

                <div class="main-cobtainer__two-blocks">

                    <div class="main-img__container">

                            <img class="native-img" src="<?php echo get_template_directory_uri(); ?>/img/new-mackbok.svg" alt="">
                    
                        <div class="white-container">
                            <img class="white-img" src="<?php echo get_template_directory_uri(); ?>/img/clotes.png" alt="">
                            <p class="main-text__white-container">
                                Mit
                                <span class="main-grey-span"> Cash 365 </span> ,
                                erhalten Sie anpassbare Dashboards
                                für Echtzeit-Übersicht der Kontostände, Liquidität
                                und Zahlungsflüsse.
                            </p>
                        </div>

                    </div>

                </div>
                <!-- <div class="main-cobtainer__two-blocks__button--2"> 
                    <button class="button-blue main-button__text buttons2"> Schützen Sie Ihre Zahlungen</button> 
                </div>  -->

            </div>
        </div>
    </div>

    <div class="container-nums-1" id="product">
        <div>
            <div>
                <h1 class="cash-title">Wie funktioniert Cash 365?</h1>
                <div>
                    <img class="medium-line" src="<?php echo get_template_directory_uri(); ?>/img/medium-line.png" alt="">
                </div>
            </div>

            <div class="two-big__container">
                <div class="owner-text">
                    <div class="text-mini-img__container--1">
                        <img class="white-and-blue__img" src="<?php echo get_template_directory_uri(); ?>/img/Group 1410087232.svg" alt="">
                        <h4 class="step-by-step__title--special">
                           
                           Instant Payments
                        </h4>

                    </div>
                    <p class="step-by-step__text"> 
                    <?php the_field('instant_payments'); ?> 
                    </p>
                </div>
                <div>
                    <div class="step-by-step__doble-container">
                        <div class="step-by-step__grey-container">
                            <div class="wallet-container">
                                <picture>
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/wallet-3.svg" media="(min-width: 640px) and (max-width: 960px)">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-wallet.svg" alt="">
                                </picture>

                            </div>
                            <div class="very-big-container">
                                <div class="big-container">
                                    <div class="img-line">
                                        <div><img class="img-line__img" src="<?php echo get_template_directory_uri(); ?>/img/check-circle.svg" alt=""></div>
                                        <div class="green-line">
                                        </div>
                                    </div>
                                    <div class="img-line">
                                        <div><img class="img-line__img" src="<?php echo get_template_directory_uri(); ?>/img/check-circle.svg" alt=""></div>

                                    </div>

                                    <div class="img-line">
                                        <div class="blue-line">
                                        </div>
                                        <div><img class="img-line__img" src="<?php echo get_template_directory_uri(); ?>/img/Group 1410087234.svg" alt=""></div>
                                    </div>


                                </div>
                                <div class="owner-text-div">
                                    <div class="text-div">
                                        <p class="text-div--1">Stufe 1</p>
                                        <p class="text-div--2">4-Augen-Prinzip</p>
                                    </div>
                                    <div class="text-div">
                                        <p class="text-div--1">Stufe 2</p>
                                        <p class="text-div--2">Freigabe über TAN
                                            oder Zertifikat</p>
                                    </div>

                                    <div class="text-div">
                                        <p class="text-div--1">Stufe 3</p>
                                        <p class="text-div--2">Jederzeit volle Transaktionsübersichtg</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class="step-by-step__grey-container--mini">
                                <div class="clock-container">
                                    <div class="mini-blue__container--img">
                                        <picture>

                                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/big-clock.svg" media="(min-width: 1401px) and (max-width: 3840px)">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/for-mini-blue-medium.svg" media="(min-width: 640px) and (max-width: 960px)">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/clock.svg" alt="">
                                        </picture>
                                    </div>


                                </div>
                                <div class="step-by-step__native-container">

                                    <p class="step-by-step__text--3">Kreieren Sie eine komplett neue Kundenerfahrung: in 10 Sekunden ist das Geld auf dem gewünschten Konto.</p>
                                </div>

                                <div class="mini-blue__container">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/picture-for-one-sec.svg" media="(min-width: 1401px) and (max-width: 3840px)">
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/setka-medium.svg" media="(min-width: 960px) and (max-width: 1400px)">
                                        <img class="mini-blue__container--img" src="<?php echo get_template_directory_uri(); ?>/img/for-mini-blue-con.svg" alt="">
                                    </picture>

                                    <div class="mini-blue__container__items">
                                        <p class="one-second">10s</p>
                                        <p class="step-by-step__text--4">Überweisungszeit</p>
                                        <div class="two-line__container">
                                            <div class="grey-line"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <div class="mack-book__container">               
                    <img class="main-img__container-img--2"  src="<?php echo get_template_directory_uri(); ?>/img/image365Stats.png" alt="">
                <div class="owner-text">
                    <div class="text-mini-img__container">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/colo-medium.svg" alt="">
                        <h4 class="step-by-step__title">
                  Echtzeit-Balance
                        </h4>
                    </div>
                    <p class="step-by-step__text">  <?php the_field('echtzeit-balance'); ?> </p>
                </div>
            </div>
            <div class="mack-book__container--2">
                <div class="owner-text">
                    <div class="text-mini-img__container">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/colo-medium.svg" alt="">
                        <h4 class="step-by-step__title">
    Automatisierte Prozesse
                        </h4>
                    </div>

                    <p class="step-by-step__text"><?php the_field('automatisierte_prozesse'); ?> </p>
                </div>
                <picture class="main-img__container-img image365">
                    <img class=" main-img__container-img--2 image2" src="<?php echo get_template_directory_uri(); ?>/img/image365Dynamic.png" alt="">
                </picture>
            </div>
            <div class="mack-book__container">
                <picture class="main-img__container-img">
                    <img class=" main-img__container-img" src="<?php echo get_template_directory_uri(); ?>/img/document-money.png" alt="">
                </picture>
                <div class="owner-text">
                    <div class="text-mini-img__container">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/colo-medium.svg" alt="">
                        <h4 class="step-by-step__title">
SEPA Lastschriften
                        </h4>
                    </div>
                    <p class="step-by-step__text"><?php the_field('sepa_lastschriften'); ?></p>
                </div>
            </div>
            <div class="mack-book__container--2">
                <div class="owner-text">
                    <div class="text-mini-img__container">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/colo-medium.svg" alt="">
                        <h4 class="step-by-step__title">
                      Daueraufträge
                        </h4>
                    </div>

                    <p class="step-by-step__text"><?php the_field('dauerauftrage'); ?> </p>
                </div>
                <picture class="main-img__container-img">
                    <img class=" main-img__container-img"  src="<?php echo get_template_directory_uri(); ?>/img/balance-between-automation-and-control---half-of-t 1.png" alt="">
                </picture>
            </div>
            <div class="mack-book__container">
                <picture class="main-img__container-img">
                    <img class=" main-img__container-img"  src="<?php echo get_template_directory_uri(); ?>/img/image2 1.svg" alt="">
                </picture>
                <div class="owner-text">
                    <div class="text-mini-img__container">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/colo-medium.svg" alt="">
                        <h4 class="step-by-step__title">
                     Virtuelle Konten
                        </h4>
                    </div>
                    <p class="step-by-step__text"><?php the_field('virtuelle_konten'); ?></p>
                </div>
            </div>
        </div>
    </div>



    <div class="blue-container__owner--2" id="Vorteile">
        <div>
            <div class="owner-blue-container__title">
                <h1 class="blue-container__title">
                    Vorteile für Ihr Unternehmen:
                </h1>
            </div>

            <div class="owner__container--blue">
                <div class="vertical-blue__container">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Group 1437255121.svg" alt="">
                    <div class="text-and-title__container">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/clockы.svg" alt="">
                        <p class="title-blue__container">Echtzeit-Transparenz</p>
                        <p class="text-blue__container">Treffen Sie fundierte Entscheidungen mit sofortigem Einblick in Ihre Kontostände und Transaktionen.</p>
                    </div>
                    <div class="owner-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Mask group--2.svg" alt="">
                    </div>
                </div>
                <div class="vertical-blue__container">
                    <img class="img-locked" src="<?php echo get_template_directory_uri(); ?>/img/Group 1437255125.svg" alt="">
                    <div class="text-and-title__container">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/gear.svg" alt="">
                        <p class="title-blue__container--2">Optimierung von Finanzprozessen</p>
                        <p class="text-blue__container--2">Sparen Sie Zeit und reduzieren Sie Fehler durch die Automatisierung wiederkehrender Aufgaben.</p>
                    </div>
                    <div class="owner-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Mask group--3.svg" alt="">
                    </div>
                </div>
                <div class="vertical-blue__container">
                    <img class="big-img-lap" src="<?php echo get_template_directory_uri(); ?>/img/Снимок экрана 2025-01-08 221617.jpg" alt="">
                    <div class="text-and-title__container">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/laptop.svg" alt="">
                        <p class="title-blue__container">Benutzerfreundlichkeit</p>
                        <p class="text-blue__container">Die intuitive Oberfläche erfordert keine umfangreiche Schulung und erleichtert die Nutzung.</p>
                    </div>
                    <div class="owner-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Mask grou--4p.svg" alt="">
                    </div>
                    <div>

                    </div>
                    
                </div>
                
            </div>
            
        </div>

    </div>




    <div class="ownre-tehnologi-container"> 
        <div class="tehnologi-container"> 
            <!-- <div class="mask-container">  -->
                <!-- <picture class="img--1"> 
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/left-maksumu-bigss.svg" media="(min-width: 1401px) and (max-width: 3840px)"> 
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/Mask-group-big-79.svg" media="(min-width: 961px) and (max-width: 1400px)"> 
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/Mask-group-big-left.svg" media="(min-width: 640px) and (max-width: 960px)"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Mask-group-left.svg" alt=""> 
                </picture> 
                <picture class="img--2"> 
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/right-bigest-makss.svg" media="(min-width: 1401px) and (max-width: 3840px)"> 
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/Mask-group-big-78.svg" media="(min-width: 961px) and (max-width: 1400px)"> 
                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/Mask-group-big-right.svg" media="(min-width: 640px) and (max-width: 960px)"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Mask-group-right.svg" alt=""> 
                </picture>  -->
                <!-- <div class="img--1">
                    <object 
                        type="image/svg+xml" 
                        data="<?php echo get_template_directory_uri(); ?>/img/left-maksumu-bigss.svg"
                        class="desktop-img"
                        media="(min-width: 1401px) and (max-width: 3840px)">
                    </object>
                    <object 
                        type="image/svg+xml" 
                        data="<?php echo get_template_directory_uri(); ?>/img/Mask-group-big-79.svg"
                        class="tablet-img"
                        media="(min-width: 961px) and (max-width: 1400px)">
                    </object>
                    <object 
                        type="image/svg+xml" 
                        data="<?php echo get_template_directory_uri(); ?>/img/Mask-group-big-left.svg"
                        class="mobile-img"
                        media="(min-width: 640px) and (max-width: 960px)">
                    </object>
                    <object 
                        type="image/svg+xml" 
                        data="<?php echo get_template_directory_uri(); ?>/img/Mask-group-left.svg"
                        class="default-img">
                    </object>
                </div> -->

                <div class="container__card1">
                    <!-- <object 
                        type="image/svg+xml" 
                        data="<?php echo get_template_directory_uri(); ?>/img/right-bigest-makss.svg"
                        class="desktop-img">
                    </object>
                    <object 
                        type="image/svg+xml" 
                        data="<?php echo get_template_directory_uri(); ?>/img/Mask-group-big-78.svg"
                        class="tablet-img">
                    </object>
                    <object 
                        type="image/svg+xml" 
                        data="<?php echo get_template_directory_uri(); ?>/img/Mask-group-big-right.svg"
                        class="mobile-img">
                    </object> -->
                    <!-- <object 
                        type="image/svg+xml" 
                        data="<?php echo get_template_directory_uri(); ?>/img/Mask-group-right.svg"
                        class="default-img">
                    </object> -->
                    <img class="cardBackground" src="<?php echo get_template_directory_uri(); ?>/img/cardBackground.svg" alt="">
                </div>
                <div class="container__card2">
                    <img class="cardBackground small" src="<?php echo get_template_directory_uri(); ?>/img/cardBackgroundSmall.svg" alt="">
                </div>
            <!-- </div>  -->
            <div class="tehnologi-container__text"> 
                <p class="tehnologi-text">Warum Cash 365?</p> 
                <p class="tehnologi-big__text"> 
                Mit Cash 365 wird Ihr Finanzmanagement smarter, schneller und sicherer. 
                </p> 
                <a href="#footer">
                    <button class="button-white--2 tehnologi-button">Kontaktieren Sie uns <img src="<?php echo get_template_directory_uri(); ?>/img/Arrow 2.svg" alt=""></button> 
                </a>
            </div> 
            <img src="<?php echo get_template_directory_uri(); ?>" alt="">
        </div>
        </div>


    <section class="about-us">
        <h4 class="about-us__title--empty">
            Über Uns
        </h4>

        <div class="about-us__blocks-container">
            <div class="owner-about-us__transparent-container">

                <h4 class="about-us__title">
                    Über Uns
                </h4>

                <div class="about-us__transparent-container">
                    <p class="about-us__transparent-container__text">
                        BANQR ist die digitale Finanzdienstleistungsplattform, die durch innovative, sichere und kundenorientierte Lösungen Finanzprozesse effizienter gestaltet.
                    </p>
                </div>
            </div>

            <div class="about-us__blue-container">
                <picture class="about-us__blue-container-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/whiteShape1big.png" alt="">
                </picture>

                <div class="about-us__text-container">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/big-bullseye.svg" media="(min-width: 1401px) and (max-width: 3840px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/bullseye.svg" alt="">
                    </picture>

                    <p class="about-us__blue-container__title">
                        Mission
                    </p>
                    <p class="about-us__blue-container__text">
                        Unsere Mission ist es, Geschäfts- und Bankprozesse mit innovativen, kosteneffizienten Lösungen zu verbinden, höchste Sicherheit zu bieten und unseren Kunden eine erstklassige Benutzererfahrung zu ermöglichen.
                    </p>
                </div>
            </div>

            <div class="about-us__blue-container2">
                <picture class="about-us__blue-container-img2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/whiteShape2.png" alt="">
                </picture>

                <div class="about-us__text-container2">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/maksimum-big-bolt.svg" media="(min-width: 1401px) and (max-width: 3840px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/bolt2.svg" alt="">
                    </picture>

                    <p class="about-us__blue-container__title2">
                        Vision
                    </p>
                    <p class="about-us__blue-container__text2">
                        Wir wollen die führende Finanzdienstleistungsplattform für mittelständische Unternehmen werden – mit nahtloser Integration in ERP- Systeme, um Finanzmanagement einfach und entscheidungssicher zu gestalten.
                    </p>

                </div>
            </div>

            <div class="owner-about-us__heart-container">
                <div class="about-us__heart-container">
                    <img class="about-us__heart__img" src="<?php echo get_template_directory_uri(); ?>/img/blue-heart.svg" alt="">

                    <p class="about-us__heart-container__title">
                        Kernwerte
                    </p>
                    <p class="about-us__heart-container__text">
                        Innovation, Sicherheit und Kundenzufriedenheit. Wir entwickeln uns kontinuierlich weiter, um unseren Kunden den besten Schutz und die höchste Integrität ihrer Daten zu gewährleisten.
                    </p>
                </div>
            </div>

        </div>
        <div class="owner-two__container">
            <div class="two__container">
                <div class="only-border__container">
                    <div>
                        <p class="only-border__container-title">
                            DB Smart Access
                        </p>
                        <p class="only-border__container-text">
                            Mit DB Smart Access haben Sie Ihr Geschäftskonto der Deutschen Bank, Postbank oder Fyrst Bank direkt in Cash 365 integriert.
                        </p>
                    </div>

                </div>
                <div class="only-blue__container">
                    <div>
                        <p class="only-blue__container-title">Corporate Bank-Connect </p>
                        <p class="only-blue__container-text">Die API-Plattform der Deutschen Bank ermöglicht es Ihnen per
                            API-Aufrufe Ihre internationalen und nationalen Konten in Echtzeit
                            zu sehen, Massenzahlungen oder Massenlastschriften zu initiieren. Ebenfalls ist die virtuelle Kontenlösung über diese Plattform verbunden.</p>
                    </div>

                    <div class="owner-img--6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/whiteShape1big.png" alt="">
                    </div>

                </div>
            </div>

        </div>



    </section>
    <section class="section-map">
    <div class="top1-list">
        <div class="owner-list-country">
            <h2 class="top1-list__title">In diesen Ländern können Sie die Cash 365 Lösung nutzen:</h2>


            <!-- Country lists for each continent -->
            <div class="continent-buttons"></div>
            <div class="continent-container">
                <div class="continent-block" data-map-region="north-america">
                    <h2 style="color: darkblue">Nordamerika</h2>
                    <ul class="list-country">
                        <li class="link-country">USA</li>
                        <li class="link-country">Kanada</li>
                        <li class="link-country">Mexiko</li>
                    </ul>
                </div>
                <div class="continent-block" data-map-region="south-america">
                    <h2 style="color: darkblue">Südamerika</h2>
                    <ul class="list-country">
                        <li class="link-country">Brasilien</li>
                    </ul>
                </div>
                <div class="continent-block" data-map-region="europe">
                    <h2 style="color: darkblue">Europa</h2>
                    <ul class="list-country">
                        <li class="link-country">Deutschland</li>
                        <li class="link-country">Belgien</li>
                        <li class="link-country">Frankreich</li>
                        <li class="link-country">Italien</li>
                        <li class="link-country">Luxemburg</li>
                        <li class="link-country">Österreich</li>
                        <li class="link-country">Niederlande</li>
                        <li class="link-country">Polen</li>
                        <li class="link-country">Portugal</li>
                        <li class="link-country">Rumänien</li>
                        <li class="link-country">Serbien</li>
                        <li class="link-country">Spanien</li>
                        <li class="link-country">Schweden</li>
                        <li class="link-country">Ukraine</li>
                        <li class="link-country">Ungarn</li>
                        <li class="link-country">UK</li>
                        <li class="link-country">Irland</li>
                        <li class="link-country">Schweiz</li>
                        <li class="link-country">Tschechien</li>
                    </ul>
                </div>
                <div class="continent-block" data-map-region="asia">
                    <h2 style="color: darkblue">Asien</h2>
                    <ul class="list-country">
                        <li class="link-country">Indien</li>
                        <li class="link-country">Japan</li>
                        <li class="link-country">Vietnam</li>
                        <li class="link-country">Türkei</li>
                        <li class="link-country">Thailand</li>
                        <li class="link-country">Taiwan</li>
                        <li class="link-country">Singapur</li>
                        <li class="link-country">Saudi-Arabien</li>
                        <li class="link-country">Katar</li>
                        <li class="link-country">Philippinen</li>
                        <li class="link-country">Pakistan</li>
                        <li class="link-country">Malaysia</li>
                        <li class="link-country">Israel</li>
                        <li class="link-country">Kasachstan</li>
                        <li class="link-country">Bahrain</li>
                        <li class="link-country">Bangladesch</li>
                        <li class="link-country">Sri Lanka</li>
                        <li class="link-country">Südkorea</li>
                        <li class="link-country">Hongkong SAR</li>
                    </ul>
                </div>
                <div class="continent-block" data-map-region="africa">
                    <h2 style="color: darkblue">Afrika</h2>
                    <ul class="list-country">
                        <li class="link-country">Ägypten</li>
                        <li class="link-country">Nigeria</li>
                        <li class="link-country">Südafrika</li>
                    </ul>
                </div>
                <div class="continent-block" data-map-region="oceania">
                    <h2 style="color: darkblue">Ozeanien</h2>
                    <ul class="list-country">
                        <li class="link-country">Australien</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map container -->
<div class="map-container">
    <img class="img-map" src="<?php echo get_template_directory_uri(); ?>/img/Maps Illustrator-01 1.png" alt="">
</div>


    </div>
</main>

<style>
/* Основные стили */
.map-container {
    overflow-x: auto;
    overflow-y: hidden;
    white-space: nowrap;
    display: flex;
    justify-content: center;
    touch-action: pan-x;
}

.img-map {
    width: auto;
    height: auto;
    max-width: none;
    max-height: 100vh;
    min-width: 400px;
    cursor: grab;
}

.map-container:active .img-map {
    cursor: grabbing;
}

.continent-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}

.continent-block {
    width: 33.33%;
    margin-bottom: 20px;
    padding: 10px;
    background: rgba(247, 247, 247, 1);
    box-sizing: border-box;
}

.list-country {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
    align-items: start;
}

.link-country {
    cursor: pointer;
}

@media (min-width: 768px) {
    .continent-buttons {
        display: none;
    }
}

/* Стили для адаптивного дизайна */
@media (max-width: 992px) {
    .continent-block {
        width: 50%;
    }
    
    .list-country {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {    
    /* Кнопки категорий */
    .continent-buttons {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-bottom: 10px;
    }
    
    .continent-btn {
        background-color: rgba(247, 247, 247, 1);
        color: rgba(21, 40, 88, 1);
        font-weight: 700;
        margin: 5px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        width: 45%;
        text-align: center;
        padding: 8px;
    }

    /* Активная кнопка */
    .continent-btn.active {
        background-color: rgba(21, 40, 88, 1);
        color: rgba(247, 247, 247, 1);
    }

    /* Континентальные блоки скрыты по умолчанию */
    .continent-block {
        display: none;
        width: 100%;
        padding: 10px;
        background: rgba(247, 247, 247, 1);
        border-radius: 5px;
        justify-content: center;
        display: flex;
        align-items: center;
        box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.1);
        font-size: 14px;
        text-align: left;
    }
    
    .continent-block h2 {
        font-size: 16px;
        margin-bottom: 5px;
        text-align: center;
    }
    
    .list-country {
        list-style: none;
        padding: 0;
        margin-top: 5px;
        padding-top: 5px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 5px;
    }
    
    .list-country li {
        font-size: 12px;
        margin-bottom: 2px;
        text-align: center;
    }

    .map-container {
        overflow-x: auto;
        white-space: nowrap;
        display: none;
    }
    
    .img-map {
        width: 100%;
        height: auto;
        display: block;
    }
}

@media (max-width: 768px) {
    .continent-container {
        display: none; /* Скрываем контейнер континентов */
    }

    .map-container{
        display: flex
    }
}
</style>

<script>

   document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".two-big__container, .mack-book__container, .mack-book__container--2");


   

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target); // Отслеживание можно отключить после появления
        }
      });
    },
    {
      threshold: 0.1, // Элемент должен быть виден на 10% для активации
    }
  );

  elements.forEach((el) => observer.observe(el));
});
document.addEventListener("DOMContentLoaded", () => {
  const containers = document.querySelectorAll(".vertical-blue__container ");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target); // Удаляем отслеживание, чтобы анимация не повторялась
      }
    });
  });

  containers.forEach((container) => observer.observe(container));
});
document.addEventListener("DOMContentLoaded", () => {
  const blocks = document.querySelectorAll(".about-us__block");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target); // Анимация запускается только один раз
      }
    });
  });

  blocks.forEach((block) => observer.observe(block));
});


document.addEventListener('DOMContentLoaded', function () {
    const continentButtonsContainer = document.querySelector('.continent-buttons'); 
    const continentBlocks = document.querySelectorAll('.continent-block'); 
    const mapContainer = document.querySelector('.map-container');
    const continentContainer = document.querySelector('.continent-container');

    // Создание кнопок для каждого континента
    continentBlocks.forEach(block => {
        const continentName = block.querySelector('h2').textContent;
        const button = document.createElement('button');
        button.classList.add('continent-btn');
        button.textContent = continentName;
        button.dataset.region = block.dataset.mapRegion;

        button.addEventListener('click', function () {
            // Скрываем все континенты и удаляем активные кнопки
            continentBlocks.forEach(b => b.style.display = 'none');
            mapContainer.style.display = 'none';

            document.querySelectorAll('.continent-btn').forEach(btn => btn.classList.remove('active'));

            // Показываем выбранный континент и карту
            block.style.display = 'block';
            mapContainer.style.display = 'block';
            continentContainer.style.display = 'flex'; // Показываем контейнер континентов

            // Добавляем активный стиль кнопке
            button.classList.add('active');
        });

        continentButtonsContainer.appendChild(button);
    });

    // Изначально скрываем все континенты и карту на мобильных устройствах
    if (window.innerWidth <= 768) {
        continentBlocks.forEach(block => block.style.display = 'none');
        mapContainer.style.display = 'none';
        continentContainer.style.display = 'none'; // Скрываем контейнер континентов
    }
});


</script>

<?php get_footer(); ?>