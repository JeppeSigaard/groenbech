<?php 

$related = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page'    => 3,
    'post__not_in' => array(get_the_ID()),
    'orderby'   => 'post_date',
    'order' => 'DESC',
));

if($related->have_posts()) :

?>
<ul class="post-list">
   <?php while ($related->have_posts()) : $related->the_post(); ?>
    <li class="<?php post_class('post-list-item'); ?>" role="article">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php if(has_post_thumbnail()) :?>
            <div class="post-img">
                <?php the_post_thumbnail('postlist') ?>
            </div>
            <?php endif; ?>
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
    <?php endwhile; ?>
</ul>

<?php endif; ?>




