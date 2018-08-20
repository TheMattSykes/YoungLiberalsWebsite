<?php

wp_head();
get_header();

?>

    <main id="postsPageMain">

      <!-- Wordpress loop for articles -->
      <?php
      if ( have_posts() ) {

        while ( have_posts() ) {

          the_post();?>

          <article class="pageArticle" id="post-<?php the_ID(); ?>">

            <!-- Post Header -->
            <div class="articleHeader">
              <a class="page-title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
            </div>

            <!-- Post Main -->
            <div class="articleMain">
              <div class="page-content"><a><?php the_content(); ?></a></div>
            </div>

          </article>

     <?php
        }

      }

      ?>

    </main>

<?php

get_footer();
wp_footer();

?>


<!--
?php

wp_head();
get_header();

?>

    <main id="postsPageMain">

      <h1 class="pageTitle">?php wp_title( '', true, 'right' ); ?></h1>

    </main>

?php

get_footer();
wp_footer();

?

-->
