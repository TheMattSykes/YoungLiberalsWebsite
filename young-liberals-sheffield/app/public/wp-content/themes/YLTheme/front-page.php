<?php

wp_head();
get_header();

?>
    <section>
      <img id="mainImage" src="<?php echo get_template_directory_uri() . '/images/mainImage.png'?>" alt="Example Image">
    </section>

    <main>
      <h1 id="mainTitle">Welcome to Sheffield Young Liberals</h1>

      <!-- Social Media Links -->
      <div id="socialLinks">

        <a href="https://www.facebook.com/UoSLiberals/" target="_blank">
          <div class="socialLink">
            <img id="facebook" src="<?php echo get_template_directory_uri() . '/images/flogo-HexRBG-Wht-58.png'?>"
            alt="Facebook Social Logo">
          </div></a>

        <a href="https://twitter.com/UoSLiberals/" target="_blank">
          <div class="socialLink">
            <img id="twitter" src="<?php echo get_template_directory_uri() . '/images/Twitter_Social_Icon_Square_White.png'?>"
            alt="Twitter Social Logo">
          </div></a>

        <a href="https://www.instagram.com/UoSLiberals/" target="_blank">
          <div class="socialLink">
            <img id="instagram" src="<?php echo get_template_directory_uri() . '/images/glyph-logo_May2016White.png'?>"
            alt="Instagram Social Logo">
          </div></a>

      </div>


      <!-- Block Link Icons -->
      <div id="blocks">
        <a href="https://su.sheffield.ac.uk/groups/sheffield-young-liberals/join" class="blockLink">
          <div class="blockIcon">
            <img class="blockImg" id="block1" src="<?php echo get_template_directory_uri() . '/images/block1.png'?>">
            <!-- <div class="centered">Learn More &#9658;</div> -->
            <h2>Join us</h2>
          </div></a>

        <a href="" class="blockLink">
          <div class="blockIcon">
            <img class="blockImg" id="block2" src="<?php echo get_template_directory_uri() . '/images/block2.png'?>">
            <h2>Events</h2>
          </div></a>

        <a href="" class="blockLink">
          <div class="blockIcon">
            <img class="blockImg" id="block3" src="<?php echo get_template_directory_uri() . '/images/block3.png'?>">
            <h2>News</h2>
          </div></a>

        <a href="" class="blockLink">
          <div class="blockIcon">
            <img class="blockImg" id="block4" src="<?php echo get_template_directory_uri() . '/images/block4.png'?>">
            <h2>About us</h2>
          </div></a>
      </div>

      <p id="desc">Home to the Liberal Democrats on campus at The University of Sheffield. We are the only party fighting to keep Britain open,
        tolerant and united.</p>
    </main>

<?php

get_footer();
wp_footer();

?>
