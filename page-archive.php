<?php
/*
template name: Nyhedsarkiv
*/
get_header(); ?>
<section id="content">
    <main role="main" class="main-full">
       <h1 class="single-title"><?php the_title(); ?></h1>
        <?php $postlist_query = array(
            'posts_per_page'   => -1,
            'offset'           => 0,
            'orderby'          => 'post_date',
            'order'            => 'DESC',
            'post_type'        => 'post',
            'post_status'      => 'publish',
            'suppress_filters' => true,
            'num_words'        => 20,
        ); ?>
        <div class="bottom">
            <?php include 'libs/includes/post-list.php'; ?>
        </div>
    </main>
</section>
<?php get_footer(); ?>
