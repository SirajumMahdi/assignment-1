<div class="social-media">
    <ul class="share-buttons list-inline">
        <li>
            <a class="color-facebook share-facebook"
                href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" title="Share on Facebook"
                target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
        </li>
        <li>
            <a href="#" class="color-instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </li>
        <li>
            <a class="color-twitter share-twitter"
                href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>"
                title="Tweet this" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li>

            <a class="color-pinterest share-pinterest" href="#" target="_blank" title="Pin it">
                <i class="fab fa-pinterest"></i>
            </a>
        </li>
    </ul>
</div>



<!-- Share button HTML, CSS & PHP code by www.jonakyblog.com -->