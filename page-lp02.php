<?php
//Template Name: Landing Page 02

get_header();
?>

<?php require_once 'template-parts/lp-02/section-header.php'; ?>

<?php require_once 'template-parts/lp-02/section-system.php'; ?>

<?php require_once 'template-parts/lp-02/section-features.php'; ?>

<?php require_once 'template-parts/lp-02/section-video.php'; ?>

<?php require_once 'template-parts/components/blog.php'; ?>

<?php require_once 'template-parts/components/magazine.php'; ?>

<?php get_template_part('template-parts/components/modal-video') ?>

<?php
get_footer();
?>
