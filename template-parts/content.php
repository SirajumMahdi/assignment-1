<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */

?>


<div class="card">
    <div class="post-card">
        <div class="post-card-image">
            <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
            <?php endif; ?>
        </div>
        <div class="post-card-content">
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
            <h5>
                <a href="<?php the_permalink() ?>"> <?php the_title() ?> </a>
            </h5>

            <?php
                if ( ! has_excerpt() ) {
                        the_excerpt();
                } else { 
                    echo 'There is no excerpt';
                }
            ?>

            <div class="post-card-info">
                <ul class="list-inline">
                    <li><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ))); ?>">
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

                </ul>
            </div>
        </div>
    </div>