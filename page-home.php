<?php
get_header(); ?>
<?php
while ( have_posts() ) : the_post();
	?>
    <div class="pagepiling">
	    <?php
	    $template = \includes\Bootstrap::bootstrap()->helper->getPathTemplate('home/homeSession');
	    echo \includes\Bootstrap::bootstrap()->helper->render($template, array('post_id' => get_the_ID()));
	    ?>
    </div>
	<?php
endwhile; // End of the loop.
?>
<?php get_footer();