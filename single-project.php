<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vietphuc
 */

get_header(); ?>
<?php
while ( have_posts() ) : the_post();
	?>
    <div class="wrapper">
        <div class="text-white section-1">
            <div class="scroll-wrap">
                <div class="section-bg" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/bg/service-backbground.jpg);"></div>
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <h1 class="display-2 text-blue"><span
                                                    class="text-red"><?php echo esc_html__('We Do Great Design For', 'dm') ?> </span><br/> <?php echo esc_html__('Creative Folks', 'dm') ?>
                                        </h1>
                                        <div class="hr-bottom"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content boxed boxed-inner">
            <div class="boxed page-inner">
                <section class="project-item">
                    <div class="container">
						<?php
						$content = get_the_content();
						echo includes\Bootstrap::bootstrap()->helper->minifyHtml( $content );
						?>

                        <?php
						$template = includes\Bootstrap::bootstrap()->helper->getPathTemplate('relatedProject');
						echo includes\Bootstrap::bootstrap()->helper->render($template, array('post_id' => get_the_ID()));
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
	<?
endwhile; // End of the loop.
?>
<?php
get_footer();
