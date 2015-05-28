<?php get_header(); ?>
<?php include 'libs/includes/slider.php'; ?>
<section id="content" role="main">
    <main class="main-full">

        <?php $postlist_query = array(
            'posts_per_page'   => 6,
            'offset'           => 0,
            'orderby'          => 'post_date',
            'order'            => 'DESC',
            'meta_key'         => 'show_featured',
            'meta_value'       => 1,
            'post_type'        => array('page','medarbejder','referencer','case'),
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
