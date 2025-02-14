<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <title> BANQR</title>
</head>

<body>
    <div class="wrapper">
        <header class="main-header">

            <div class="mini-menu" id="menu">
                <div class="line"></div>
                <div class="mini-line"></div>
                <div class="line"></div>
            </div>
            <div class="mobile-menu" id="mobile-menu">

                <div class="logo-and-button">
                     <img  src="<?php echo get_template_directory_uri(); ?>/img/лого-Photoroom1.svg" alt="">
                     <a id="close-menu">
                          <img class="close-button" src="<?php echo get_template_directory_uri(); ?>/img/free-icon-close-151882.png" alt="">
                     </a>
              
                </div>
               
                <ul class="main-header_mobile-menu__list">
                    <li><a class="mobile-menu__link" href="#product">Produkt</a></li>
                    <li><a class="mobile-menu__link" href="#Vorteile" >Vorteile</a></li>
                </ul>           
            </div>
  
               
                <img class="main-header__img" src="<?php echo get_template_directory_uri(); ?>/img/лого-Photoroom1.svg" alt="">
          

           <div class="owner-main-header__list">
               <ul class="main-header__list">
                   <li class="main-header__item"><a href="#product" class="main-header__link--2">Produkt</a></li>
                   <li class="main-header__item"><a href="#Vorteile" class="main-header__link--2">Vorteile</a></li>


              </ul>
         </div> 



 
            <!-- <ul class="list-container">
                <li class="main-header__item">link 1</li>
                <li class="main-header__item">link 2</li>
                <li class="main-header__item">link 3</li>
                <li class="main-header__item">link 4</li>
                <li class="main-header__item">link 5</li>
                <li class="main-header__item">link 6</li>
            </ul> -->
            
        </header>
    </div>
    <script>
        const button = document.getElementById('menu');
        const closeButton = document.getElementById('close-menu');
        const menu = document.getElementById('mobile-menu');
		
        button.addEventListener('click', function() {
            menu.classList.toggle('active');
			console.log('menu is active')
        });
        closeButton.addEventListener('click', function() {
            menu.classList.remove('active');
        });
    </script>
</body>

</html>