<?php
/** @var  $post WP_Post */
$maxPost = \includes\classes\Constants::MAX_POST;
$posts   = get_posts( array(
	'post_type'   => 'post',
	'post_status' => 'publish',
	'numberposts' => $maxPost
) );
?>
<?php get_header(); ?>
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
                <section class="project-list">
                    <div class="container">
                        <div class="section-info">
                            <h1 class="info-title"><?php echo esc_html__('Tin tức', 'dm') ?></h1>
                            <div class="title-hr"></div>
                        </div>
                        <?php
                            $template = includes\Bootstrap::bootstrap()->helper->getPathTemplate('itemsNew');
                            echo includes\Bootstrap::bootstrap()->helper->render($template, array('posts' => $posts));
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php get_footer();