<!doctype HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sheffield Young Liberals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>

    <header>
      <div id="logoWrapper" onclick="">
        <a href="<?php echo site_url()?>">
          <img id="icon" src="<?php echo get_template_directory_uri() . '/images/YLLogo.png'?>" alt="YL Icon">
        </a>
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

    <!-- Build Number last changed on: 04/09/2018 -->
    <a id="build">DEV BUILD 0010</a>
