<?php
  /**
  * Template Name: Home
  *
  */

  get_header();
  
  $services = get_field('service');
?>
<div class="w-full relative bg-gradient-to-b from-[#6A71B5] to-[#41477B] rounded-b-[50px]">
  <?php get_template_part('template-part/landing/header.php'); ?>
  <?php get_template_part('template-part/landing/about.php'); ?>
</div>
<?php get_template_part('template-part/landing/service.php'); ?>
<?php get_template_part('template-part/landing/testimonial.php'); ?>
<?php get_template_part('template-part/landing/pricing.php'); ?>
<?php get_footer(); ?>
