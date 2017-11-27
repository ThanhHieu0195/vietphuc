<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vietphuc
 */

$maxPost = \includes\classes\Constants::MAX_PROJECT;
$posts = get_posts(array(
	'post_type' => 'project',
	'post_status' => 'publish',
	'numberposts' => $maxPost
));

get_header(); ?>
    <div class="wrapper">
        <div class="text-white section-1">
            <div class="scroll-wrap">
                <div class="section-bg" style="background-image:url(<?php echo get_template_directory_uri()  ?>/assets/images/bg/service-backbground.jpg);"></div>
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <!--<div class="vertical-title hidden-xs hidden-sm"><span>Introduce</span></div>-->
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <h1 class="display-2 text-blue"><span class="text-red">We Do Great Design For </span><br /> Creative Folks</h1>
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
                            <h1 class="info-title"><?php echo esc_html__('Dự án của chúng tôi', 'dm') ?></h1>
                            <div class="title-hr"></div>
                        </div>

                        <div class="grid-items row">
                            <?php
                            $template = includes\Bootstrap::bootstrap()->helper->getPathTemplate('itemsProject');
                            echo includes\Bootstrap::bootstrap()->helper->render($template, array('projects' => $posts));
                            ?>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
<?php
get_footer();
