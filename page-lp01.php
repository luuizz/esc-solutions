<?php 
//Template Name: Landing Page 01
get_header();

?>

<?php require_once 'template-parts/lp-01/section-hero.php'; ?>

<?php require_once 'template-parts/lp-01/section-how-work.php'; ?>

<?php require_once 'template-parts/lp-01/section-solutions.php'; ?>

<?php require_once 'template-parts/lp-01/section-video.php'; ?>
<?php require_once 'template-parts/lp-01/section-plans.php'; ?>


<?php require_once 'template-parts/components/blog.php'; ?>

<?php require_once 'template-parts/components/magazine.php'; ?>

<?php get_template_part('template-parts/components/modal-video-01') ?>

<?php get_footer(); ?>