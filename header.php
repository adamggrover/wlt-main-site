<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wessex Learning Trust</title>
    <link rel="icon" type="image/x-icon" href="Assets/logos/kings-icon.svg">

    <!-- Google tag (gtag.js) -->
    
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-B0NFPDKC8G');
    </script>



   
   
    <?php
    wp_head();
    ?>


</head>

<body>
    
    <!-- menu -->

    
     

    

   

    <div id="sidebar-nav" class="sidenav">
      <div class="sidebar-container"  >
        <div class="closebtn-box">
          <a href="javascript:void(0)" id = "closebtn" class="closebtn" onclick="closeNav()"><i class="fa-solid fa-xmark"></i> </a>
        </div>



          <div class="primary-menu-container animate__animated" id="primary-menu-container">
          <?php bellows( 'main' , array( 'menu' => 6 ) ); ?>
          </div>

          </div>


              
              <!-- menu links
              <div id="MainMenu">
                <div class="list-group panel">
                  <a href="#" class="list-group-item list-group-item-success" data-parent="#MainMenu">Home</a>
                  <a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Our Academy<i class="fa fa-caret-down nav-arrow"></i></a>
                  <div class="collapse" id="demo3">
                    <a href="#SubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">Subitem 1 <i class="fa fa-caret-down nav-arrow"></i></a>
                    <div class="collapse list-group-submenu" id="SubMenu1">
                      <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 1 a</a>
                      <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 2 b</a>
                      <a href="#SubSubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1">Subitem 3 c <i class="fa fa-caret-down nav-arrow"></i></a>
                      <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu1">
                        <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Sub sub item 1</a>
                        <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Sub sub item 2</a>
                      </div>
                      <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 4 d</a>
                    </div>
                    <a href="javascript:;" class="list-group-item">Subitem 2</a>
                    <a href="javascript:;" class="list-group-item">Subitem 3</a>
                  </div>
                  <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Item 4  <i class="fa fa-caret-down nav-arrow"></i></a>
                  <div class="collapse" id="demo4">
                    <a href="" class="list-group-item">Subitem 1</a>
                    <a href="" class="list-group-item">Subitem 2</a>
                    <a href="" class="list-group-item">Subitem 3</a>
                  </div>
                </div>
              </div>

              -->
            
          
    </div>


    <?php

    if ( is_front_page() ) :
      get_header( 'front' );
    else :
      get_header('default');
    endif;

    
?>

<main>