<?php
// Template name: Fuld bredde
get_header(); ?>
<section id="content">
   <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <main role="main" class="main-full">
        <?php include 'libs/includes/main-single.php'; ?>
        <?php include 'libs/includes/single-kontaktperson.php'; ?>
    </main>
    <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
