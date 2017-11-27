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
                                    <div class="info-title">Về <br/> Chúng tôi</div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="text-display-1">
                                    <?php the_content() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-info">
                                    <div class="title-hr"></div>
                                    <div class="info-title">Đối tác<br/>của<br/>chúng tôi</div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row row-partners">
	                                <?php
	                                $template = \includes\Bootstrap::bootstrap()->helper->getPathTemplate('about-me/itemsParner');
	                                echo includes\Bootstrap::bootstrap()->helper->render($template, array('post_id' => get_the_ID() ));
	                                ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-info">
                                    <div class="title-hr"></div>
                                    <div class="info-title">Đội ngũ <br/> nhân sự</div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row-team row">
	                                <?php
	                                $template = \includes\Bootstrap::bootstrap()->helper->getPathTemplate('about-me/itemsPerson');
	                                echo includes\Bootstrap::bootstrap()->helper->render($template, array('post_id' => get_the_ID() ));
	                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
	<?php
	echo includes\Bootstrap::bootstrap()->helper->minifyHtml( $content );
endwhile; // End of the loop.
?>
<?php get_footer(); ?>