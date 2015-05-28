<?php get_header(); ?>
<section id="content">
   <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <main role="main" class="main-medarbejder">
        <?php $image_size = 'mb-single'; ?>
        <?php include 'libs/includes/main-single.php'; ?>
        <?php include 'libs/includes/list-kontaktperson.php'; ?>
    </main>
    <aside role="complementary">
        <?php include 'libs/includes/sidemenu-medarbejder.php'; ?>
    </aside>
    <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
