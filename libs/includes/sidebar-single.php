<?php ?>
<ul class="post-list">
    <li class="<?php post_class('post-list-item'); ?>" role="article">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <div class="post-img">
                <img src="http://192.168.1.4/groenbech/wp-content/uploads/2015/08/DRA-Case-560x315.png" class="attachment-postlist wp-post-image" alt="Annoncer">
            </div>
            <div class="post-text">
                <h6 class="post-title"><?php the_title(); ?></h6>
                <div class="post-desc">
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
        </a>
        <div class="post-more">
            <a href="<?php the_permalink(); ?>" title="Læs mere"> Læs mere </a>
        </div>
    </li>
</ul>




