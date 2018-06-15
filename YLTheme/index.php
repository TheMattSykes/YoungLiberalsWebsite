<?php

wp_head();
get_header();

?>

    <main id="postsPageMain">

      <h1 class="pageTitle"><?php wp_title( '', true, 'right' ); ?></h1>

      <div class="articlesDisplay">
        <!-- Wordpress loop for articles -->
        <?php
        if ( have_posts() ) {

          while ( have_posts() ) {

            the_post();?>

            <article class="articleWrapper">
              <!-- Post Thumbnails -->
              <?php if ( has_post_thumbnail() ) { ?>

              <div class="articleThumbnail">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php the_post_thumbnail_url( array(100,100) ); ?>">
                </a>
              </div>
              <?php } ?>

              <div class="pageArticle" id="post-<?php the_ID(); ?>">

                <!-- Post Header -->
                <div class="articleHeader">
                  <a class="post-title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                  <time class="time"><?php the_time( 'd M Y' ); ?></time>
                  <a class="breaker">|</a>
                  <div class="post-author"><a>Written by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a></a></div>
                </div>

                <!-- Post Main -->
                <div class="articleMain">
                  <div class="post-excerpt"><a>
                    <?php
                    $len = 300;
                    $excerpt= get_the_excerpt();
                    echo substr($excerpt, 0, $len);

                    if (strlen($excerpt) > $len) {
                      echo " [...]";
                    }
                    ?>
                  </a></div>
                  <a class="read-more" type="button" href="<?php the_permalink(); ?>">Read More</a>
                </div>

                <!-- Post Footer -->
                <div class="articleFooter">
                  <?php
                    if ( has_category() ){ ?>
                      <div class="category">Category: <?php the_category( ',' ); ?></div>
                  <?php
                    }
                  ?>
                </div>

              </div>
            </article>

       <?php
          }

        }

        ?>
      </div>

      <!-- Pagination -->
      <ul class="pagination">
        <li class="prev-posts">
          <?php previous_posts_link( '<i class="prev-posts-i"></i>' ); ?>
        </li>

        <li class="next-posts">
          <?php next_posts_link( '<i class="next-posts-i"></i>' ); ?>
        </li>
      </ul>

    </main>

<?php

get_footer();
wp_footer();

?>
