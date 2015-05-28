<?php
get_header();
$term = $wp_query->get_queried_object();
?>
<section id="content">
  <main class="main-full">
     <article>
         <h1 class="single-title"><?php echo smamo_lang('Nøgleord: '.$term->name,'Keyword: '.get_tax_meta($term->term_id,'emne_engelsk'));?></h1>

     </article>
      <div class="bottom">

<?php
$types = array('case','page','post','medarbejder','referencer');

foreach($types as $type) :

    $obj = get_post_type_object( $type );

    $posts = get_posts(array(
        'posts_per_page'   => 9,
        'offset'           => 0,
        'orderby'          => 'post_date',
        'order'            => 'DESC',
        'post_type'        => $type,
        'post_mime_type'   => '',
        'post_parent'      => '',
        'post_status'      => 'publish',
        'suppress_filters' => true,
        'tax_query' => array(
            array(
                'taxonomy' => 'emne',
                'field' => 'slug',
                'terms' => $term->slug,
            )
	   )
    ));


    if($posts): ?>
            <h2 class="post-list-heading"><?php echo $obj->labels->name; ?></h2>
            <?php
            $number_posts = 0;
            foreach($posts as $num){
                $number_posts ++;
            }
            $numberclass = ' mod-'.$number_posts % 3;

            if($number_posts == 4){
                $numberclass = ' mod-4';
            }
            ?>

            <ul class="post-list list-type-<?php echo $type.$numberclass ?>">
            <?php foreach($posts as $post):

                $post_link = apply_filters('the_permalink',get_the_permalink($post->ID));

                $video_class='';
                if (get_post_meta($post->ID,'add_video',true) !== ''){$video_class=' has-video';}

                ?>
            <li class="post-list-item" role="article">
                    <a href="<?php echo $post_link ?>" title="<?php echo apply_filters('the_title',get_the_title($post->ID)); ?>">
                        <div class="post-img<?php echo $video_class; ?>">
                            <?php echo get_the_post_thumbnail($post->ID,'postlist'); ?>
                        </div>
                        <div class="post-text">
                            <h6 class="post-title"><?php echo get_the_title($post->ID) ?></h6>
                            <div class="post-desc">
                                <p><?php echo wp_trim_words($post->post_content, $num_words = 40, $more = '');?></p>
                            </div>
                        </div>
                    </a>
                    <div class="post-more">
                        <a href="<?php echo $post_link ?>" title="<?php echo smamo_lang('Læs mere','Read more') ?>">
                            <?php echo smamo_lang('Læs mere','Read more') ?>
                        </a>
                    </div>
                </li>
                <?php endforeach; endif;?>
            </ul>
            <?php endforeach;?>
        </div>
    </main>
</section>
<?php get_footer(); ?>
