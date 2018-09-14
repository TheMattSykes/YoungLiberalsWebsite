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
              <a class="post-title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
              <div class="post-author"><a>Written by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></a></div>
            </div>
            
            <!-- Post Main -->
            <div class="articleMain">
              <div class="post-content"><a><?php the_content(); ?></a></div>
            </div>
            
            <!-- Post Footer -->
            <div class="articleFooter">
              <time class="time"><?php the_time( 'd M Y' ); ?></time>
              <?php
                if ( has_category() ){ ?>
                  <div class="category">Category: <?php the_category( ',' ); ?></div>
              <?php 
                } 
              ?>
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