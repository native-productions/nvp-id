<?php
  /**
  * Template Name: Home
  *
  */

  get_header();
?>
<div class="w-full relative bg-gradient-to-b from-[#6A71B5] to-[#41477B] rounded-b-[50px]">
  <?php get_template_part('template-part/landing/header'); ?>
  <?php get_template_part('template-part/landing/about'); ?>
</div>
<?php get_template_part('template-part/landing/service'); ?>
<?php get_template_part('template-part/landing/testimonial'); ?>
<?php get_template_part('template-part/landing/pricing'); ?>
<?php get_footer(); ?>
