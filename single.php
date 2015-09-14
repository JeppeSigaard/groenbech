<?php get_header(); ?>
<section id="content">
   <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <main role="main">
        <?php include 'libs/includes/main-single.php'; ?>
        <?php include 'libs/includes/single-kontaktperson.php'; ?>
    </main>
    <aside role="complementary">
        <?php include 'libs/includes/sidebar-form.php'; ?>
        <?php include 'libs/includes/sidebar-single.php'; ?>
    </aside>
    <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
