<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="wrapper">
        <?php
        $block_title = '<h1 class="display-2 text-blue"><span class="text-red">We Do Great Design For </span><br/> Creative Folks </h1>';
        $template = \includes\Bootstrap::bootstrap()->helper->getPathTemplate('banner');
        echo includes\Bootstrap::bootstrap()->helper->render($template, array('post_id' => get_the_ID(), 'block_title' => $block_title));
        ?>
        <div class="content boxed boxed-inner">
            <div class="boxed page-inner">
                <section class="">
                    <div id="map" class="map"></div>
                </section>
                <?php
                $template = \includes\Bootstrap::bootstrap()->helper->getPathTemplate('contact/contactMe');
                echo includes\Bootstrap::bootstrap()->helper->render($template);
                ?>

                <?php
                $template = \includes\Bootstrap::bootstrap()->helper->getPathTemplate('contact/formContact');
                echo includes\Bootstrap::bootstrap()->helper->render($template);
                ?>

            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>