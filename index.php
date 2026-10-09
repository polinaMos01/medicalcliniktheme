<?php
/**
 * Main Template File (Fallback)
 */
get_header();
?>
<main id="primary" class="site-main" style="padding: 80px 0;">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_title('<h1 class="h2" style="margin-bottom: 24px;">', '</h1>');
                the_content();
            endwhile;
        else :
            echo '<p>Контент не найден.</p>';
        endif;
        ?>
    </div>
</main>
<?php
get_footer();
