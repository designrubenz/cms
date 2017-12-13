<?php get_header(); ?>

    <section id='hero'>
        <h1><span>Webdesign mit Sinn und &nbsp;Zweck und XYZ</span></h1>
    </section>

    <section id='services'>
        <article id='design'>
            <h1>Design</h1>
            <img src='<?php echo get_template_directory_uri(); ?>/images/icons/design.svg' alt='Stiftehalter'>
        </article>
        <article id='strategy'>
            <h1>Strategie</h1>
            <img src='<?php echo get_template_directory_uri(); ?>/images/icons/strategy.svg' alt='Dartboard'>
        </article>
        <article id='consulting'>
            <h1>Consulting</h1>
            <img src='<?php echo get_template_directory_uri(); ?>/images/icons/consulting.svg' alt='Glühbirne'>
        </article>
    </section>


<?php 

// the news query
$news_query = new WP_Query(  array( 'category_name' => 'news'  ) ); ?>
<?php if ( $news_query->have_posts() ) : ?>

    <section id='news'>
    <!-- the loop -->
    <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                <article>
                  <h1>
                      <a href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                      </a>
                  </h1>
                  <?php the_content(); ?>
                </article>
    <?php endwhile; ?>
    <!-- end of the loop -->
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Bald kommt News!' ); ?></p>
<?php endif; ?>
    </section>

<?php 

// the referenzen query 
$referenzen_query = new WP_Query(  array( 'category_name' => 'referenzen'  ) ); ?>
<?php if ( $referenzen_query->have_posts() ) : ?>

    <section id='referenzen'>
    <!-- the loop -->
    <?php while ( $referenzen_query->have_posts() ) : $referenzen_query->the_post(); ?>
                <article>
                  <h1>
                      <a href="<?php the_permalink(); ?>">
                          <?php the_title(); ?>
                      </a>
                  </h1>
                  <img src='<?php echo get_template_directory_uri(); ?>/images/avatar-2.png' alt='avatar'>

                  <?php the_content(); ?>
                </article>
    <?php endwhile; ?>
    <!-- end of the loop -->
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( "Bald gibt's Referenzen!" ); ?></p>
<?php endif; ?>
    </section>

<?php get_footer(); ?>

