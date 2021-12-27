<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */
?>
<main id="primary" class="site-main">
    <?php get_header();
?>

    <!--loading -->
    <div class="loading">
        <div class="circle"></div>
    </div>
    <!--/-->



    <!--mansory-layout-->
    <section class="masonry-layout col2-layout mt-120">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mt--10 ">
                    <!--cards-->
                    <div class="card-columns">
                        <?php 
                    /* Start the Loop */
                    if (have_posts()):
                        while(have_posts()):
                            the_post(); 
                    ?>
                        <!--Post-box-->
                        <?php
                    get_template_part( 'template-parts/content');
                    ?>
                        <!--/-->
                    </div>
                    <?php    endwhile;
            endif; ?>
                </div>

                <!--pagination-->
                <div class="pagination mt-30">
                    <ul class="list-inline">
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="arrow_carrot-2right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/-->
            </div>
            <div class="col-lg-4 max-width">
                <!--widget-latest-posts-->
                <div class="widget ">
                    <div class="section-title">
                        <h5>Latest Posts</h5>
                    </div>
                    <ul class="widget-latest-posts">
                        <li class="last-post">
                            <div class="image">
                                <a href="post-default.html">
                                    <img src="assets/img/latest/1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="nb">1</div>
                            <div class="content">
                                <p>
                                    <a href="post-default.html">5 Things I Wish I Knew Before Traveling to Malaysia</a>
                                </p>
                                <small>
                                    <span class="icon_clock_alt"></span> January 15, 2021</small>
                            </div>
                        </li>
                        <li class="last-post">
                            <div class="image">
                                <a href="post-default.html">
                                    <img src="assets/img/latest/2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="nb">2</div>
                            <div class="content">
                                <p>
                                    <a href="post-default.html">Everything you need to know about visiting the
                                        Amazon.</a>
                                </p>
                                <small>
                                    <span class="icon_clock_alt"></span> January 15, 2021</small>
                            </div>
                        </li>
                        <li class="last-post">
                            <div class="image">
                                <a href="post-default.html">
                                    <img src="assets/img/latest/3.jpg" alt="...">
                                </a>
                            </div>
                            <div class="nb">3</div>
                            <div class="content">
                                <p>
                                    <a href="post-default.html">How to spend interesting vacation after hard work?</a>
                                </p>
                                <small>
                                    <span class="icon_clock_alt"></span> January 15, 2021</small>
                            </div>
                        </li>
                        <li class="last-post">
                            <div class="image">
                                <a href="post-default.html">
                                    <img src="assets/img/latest/4.jpg" alt="...">
                                </a>
                            </div>
                            <div class="nb">4</div>
                            <div class="content">
                                <p>
                                    <a href="post-default.html">10 Best and Most Beautiful Places to Visit in Italy</a>
                                </p>
                                <small>
                                    <span class="icon_clock_alt"></span> January 15, 2021</small>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--/-->

                <!--widget-categories-->
                <div class="widget">
                    <div class="section-title">
                        <h5>Categories</h5>
                    </div>
                    <ul class="widget-categories">
                        <li>
                            <a href="#" class="categorie">Livestyle</a>
                            <span class="ml-auto">22 Posts</span>
                        </li>
                        <li>
                            <a href="#" class="categorie">Travel</a>
                            <span class="ml-auto">18 Posts</span>
                        </li>
                        <li>
                            <a href="#" class="categorie">Food</a>
                            <span class="ml-auto">14 Posts</span>
                        </li>
                        <li>
                            <a href="#" class="categorie">fashion</a>
                            <span class="ml-auto">10 Posts</span>
                        </li>
                    </ul>
                </div>
                <!--/-->

                <!--widget-instagram-->
                <div class="widget">
                    <div class="section-title">
                        <h5>Instagram</h5>
                    </div>
                    <ul class="widget-instagram">
                        <li>
                            <a class="image" href="#">
                                <img src="assets/img/instagram/1.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="#">
                                <img src="assets/img/instagram/2.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="#">
                                <img src="assets/img/instagram/3.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="#">
                                <img src="assets/img/instagram/4.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="#">
                                <img src="assets/img/instagram/5.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="image" href="#">
                                <img src="assets/img/instagram/6.jpg" alt="">
                            </a>
                        </li>
                    </ul>

                </div>
                <!--/-->
                <!--widget-tags-->
                <div class="widget">
                    <div class="section-title">
                        <h5>Tags</h5>
                    </div>
                    <div class="widget-tags">
                        <ul class="list-inline">
                            <li>
                                <a href="blog-grid.html">Travel</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">Nature</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">tips</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">forest</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">beach</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">fashion</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">livestyle</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">healty</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">food</a>
                            </li>
                            <li>
                                <a href="blog-grid.html">breakfast</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!--/-->
            </div>
        </div>
        </div>
    </section>
    <!--/-->





























    <!-- <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
    <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    </header>
    <?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?> -->

</main><!-- #main -->

<?php
get_sidebar();
get_footer();