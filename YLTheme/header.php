<!doctype HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sheffield Young Liberals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  
  <body>
    
    <header>
      <div id="logoWrapper" onclick="location.href='./index.html';">
        <img id="icon" src="http://young-liberals-sheffield.local/wp-content/themes/YLTheme/images/YLIcon100.png" alt="YL Icon" size="70">
        <h1 id="titleLogo">Young Liberals</h1>
        <!--<img id="mainLogo" src="./images/mainLogo.jpg" alt="Sheffield Young Liberals Logo">-->
      </div>
      
      <a id="navIcon" class="menuItem" onclick="navMenu()">&#9776;</a>
      
      <nav id="mainNav" class="navClosed">
		
		<?php wp_nav_menu( 
            array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav',
            ) 
        ); ?>
      </nav>
    </header>
    
    <a id="build">DEV BUILD 0003</a>