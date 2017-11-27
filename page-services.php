<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="wrapper">
		<?php
		$block_title = '<h1 class="display-2 text-blue"><span class="text-red">We Do Great Design For </span><br/> Creative Folks </h1>';
		$template = \includes\Bootstrap::bootstrap()->helper->getPathTemplate('banner');
		echo includes\Bootstrap::bootstrap()->helper->render($template, array(
			'post_id' => get_the_ID(),
			'block_title' => $block_title
		));
		?>

        <div class="content boxed boxed-inner">
            <div class="boxed page-inner">
                <section class="section about-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-info">
                                    <div class="title-hr"></div>
                                    <div class="info-title">Dịch vụ
                                        của chúng tôi
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
	                            <?php
	                            $template = \includes\Bootstrap::bootstrap()->helper->getPathTemplate('services/itemsService');
	                            echo includes\Bootstrap::bootstrap()->helper->render($template, array('post_id' => get_the_ID() ));
	                            ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>