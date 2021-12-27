<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package NoonPost
 */

get_header();
?>

<main id="primary" class="site-main">

    <!--post-default-->
    <section class="section pt-55 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mb-20">
                    <!--Post-single-->
                    <div class="post-single">
                        <?php 
                        if (have_posts()):
                            while(have_posts()):
                                the_post(); 
                        ?>
                        ?>
                        <div class="post-single-image">
                            <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="post-single-content">
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $cat) {
                                $category_link = get_category_link($cat->cat_ID);                                
                            }
                            foreach (get_the_category() as $category){
                                $category_name = $category -> cat_name;
                            }
                            ?>
                            <a href="<?php echo $category_link ?>" class="categorie">
                                <?php echo $category_name; ?>
                            </a>

                            <h4><span> <?php the_title() ?> </span></h4>
                            <div class="post-single-info">
                                <ul class="list-inline">
                                    <li><a
                                            href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ))); ?>">
                                            <?php if($avatar = get_avatar(get_the_author_meta('ID'))): ?>
                                            <?php echo $avatar; ?>
                                            <?php else: ?>
                                            <img src="/images/no-image-default.jpg">
                                            <?php endif; ?>
                                    </li>
                                    <li>
                                        <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ))); ?>"
                                            title="<?php echo esc_attr(get_the_author()); ?>"><?php the_author(); ?></a>
                                    </li>
                                    <li class="dot"></li>
                                    <li><?php the_time('F j, Y');?></li>
                                    <li class="dot"></li>
                                    <li>3 comments</li>
                                </ul>
                            </div>
                        </div>

                        <div class="post-single-body">
                            <?php the_content() ?>
                        </div>

                        <div class="post-single-footer">
                            <div class="tags">
                                <?php
                                $tags = get_tags();
                                $html = '<ul class="list-inline">';
                                foreach ( $tags as $tag ) {
                                    $tag_link = get_tag_link( $tag->term_id );
                                
                                    $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                                    $html .= "{$tag->name}</a></li>";
                                }
                                $html .= '</ul>';
                                echo $html;
                                ?>

                            </div>
                            <div class="social-media">
                                <?php my_share_buttons(); ?>
                            </div>
                        </div>
                        <?php    endwhile;
                                    endif; ?>
                    </div>
                    <!--/-->

                    <!--next & previous-posts-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-next-post">
                                    <div class="small-post">
                                        <div class="image">
                                            <?php 
                                                $prevPost = get_previous_post();
                                                $prevThumbnail = get_the_post_thumbnail( $prevPost->ID );
                                                    previous_post_link( '%link', $prevThumbnail );
                                            ?>
                                        </div>
                                        <div class="content">
                                            <div>
                                                <?php $prev_post = get_adjacent_post(false, '', true); ?>
                                                <a class="link" href="<?php echo get_permalink($prev_post->ID) ?>">
                                                    <i class="arrow_left"></i>Preview post
                                                </a>

                                            </div>
                                            <?php previous_post_link('%link'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-previous-post">
                                    <div class="small-post">
                                        <div class="image">
                                            <?php 
                                                $nextPost = get_next_post();
                                                $nextThumbnail = get_the_post_thumbnail( $nextPost->ID );
                                                    next_post_link( '%link', $nextThumbnail );
                                            ?>
                                        </div>
                                        <div class="content">
                                            <div>
                                                <?php $next_post = get_adjacent_post(false, '', false); ?>
                                                <a class="link" href="<?php echo get_permalink($next_post->ID) ?>">
                                                    <span> Next post</span>
                                                    <span class="arrow_right"></span>
                                                </a>
                                            </div>
                                            <?php next_post_link('%link'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/-->

                    <!--widget-comments-->
                    <div class=" widget mb-50">
                        <div class="title">
                            <h5>3 Comments</h5>
                        </div>
                        <ul class="widget-comments">
                            <?php 
                                comment_form();
                            ?>
                            <li class="comment-item">
                                <img src="assets/img/user/1.jpg" alt="">
                                <div class="content">
                                    <ul class="info list-inline">
                                        <li>Mohammed Ali</li>
                                        <li class="dot"></li>
                                        <li> January 15, 2021</li>
                                    </ul>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit. Repellendus at
                                        doloremque adipisci eum placeat
                                        quod non fugiat aliquid sit similique!
                                    </p>
                                    <div><a href="#" class="link"> <i class="arrow_back"></i> Reply</a></div>
                                </div>
                            </li>
                            <li class="comment-item">
                                <img src="assets/img/author/1.jpg" alt="">
                                <div class="content">
                                    <ul class="info list-inline">
                                        <li>Simon Albert</li>
                                        <li class="dot"></li>
                                        <li> January 15, 2021</li>
                                    </ul>

                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit. Repellendus at
                                        doloremque adipisci eum placeat quod non
                                        fugiat aliquid sit similique!
                                    </p>
                                    <div>
                                        <a href="#" class="link">
                                            <i class="arrow_back"></i> Reply</a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment-item">
                                <img src="assets/img/user/2.jpg" alt="">
                                <div class="content">

                                    <ul class="info list-inline">
                                        <li>Adam bobly</li>
                                        <li class="dot"></li>
                                        <li> January 15, 2021</li>
                                    </ul>

                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit. Repellendus at
                                        doloremque adipisci eum placeat
                                        quod non fugiat aliquid sit similique!
                                    </p>

                                    <div>
                                        <a href="#" class="link">
                                            <i class="arrow_back"></i> Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!--Leave-comments-->
                        <div class="title">
                            <h5>Leave a Reply</h5>
                        </div>
                        <form class="widget-form" action="#" method="POST" id="main_contact_form">
                            <p>Your email adress will not be published ,Requied fileds are
                                marked*.</p>
                            <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                                            placeholder="Message*" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Name*" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email*" required="required">
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <div class="form-group">
                                        <input type="text" name="website" id="website" class="form-control"
                                            placeholder="website">
                                    </div>
                                    <label>
                                        <input name="name" type="checkbox" value="1" required="required">
                                        <span>save my name , email and website in this
                                            browser for the next time I
                                            comment.</span>
                                    </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn-custom">
                                        Post Comment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 max-width">
                    <!--widget-author-->
                    <div class="widget">
                        <div class="widget-author">
                            <a href="author.html" class="image">
                                <img src="assets/img/author/1.jpg" alt="">
                            </a>
                            <h6>
                                <span>Hi, I'm David Smith</span>
                            </h6>
                            <p>

                                I'm David Smith, husband and father ,
                                I love Photography,travel and nature. I'm working as a writer
                                and blogger with
                                experience
                                of 5 years until now.
                            </p>


                            <div class="social-media">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-pinterest">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/-->

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
                                    <p><a href="post-default.html">5 Things I Wish I Knew Before
                                            Traveling to
                                            Malaysia</a></p>
                                    <small><span class="icon_clock_alt"></span> January 15,
                                        2021</small>
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
                                        <a href="post-default.html">Everything you need to know
                                            about visiting the
                                            Amazon.</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15,
                                        2021</small>
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
                                        <a href="post-default.html">How to spend interesting
                                            vacation after hard
                                            work?</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15,
                                        2021</small>
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
                                        <a href="post-default.html">10 Best and Most Beautiful
                                            Places to Visit in
                                            Italy</a>
                                    </p>
                                    <small>
                                        <span class="icon_clock_alt"></span> January 15,
                                        2021</small>
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

</main><!-- #main -->

<?php
get_sidebar();
get_footer();