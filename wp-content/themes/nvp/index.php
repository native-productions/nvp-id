<?php 

/**

 * Template Name: Home
 *

 */

get_header();

$header = get_field('header');
$chouse_us = get_field('chouse_us');
?>
<section class="h-[100vh] w-full relative bg-gradient-to-b from-[#6A71B5] to-[#41477B]">
        <header class="delimiter max-w-screen-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
                <div>
                    <h1><b>Scale</b> your product. </br><b><i>Accelerate</i></b> Your</br> Software Development</h1>
                    <div class="my-4 w-[21rem]"><p class="leading-[30px] text-white">Let's be remarkable! join our dream partnership, build extraordinary products, and achieve your marvelous goals!</p></div>
                    <a href="" class="btn-primary mt-3">Contact us</a>
                </div>
                <div>
                    <div class="relative flex">
                        <div class="img-border2">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/header2-1.png" alt="" class=" relative">
                        </div>
                        <div class="img-border">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/header1.png" alt="" class=" relative">
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>

    <section class="py-32 bg-white w-full">
        <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <h2 class="font-semibold text-3xl md:text-4xl text-orange text-center">Expertise</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-20">
            <?php
                $id = 11;
                $args = array(
                    'post_type'      => 'page', //write slug of post type
                    'posts_per_page' => -1,
                    'post_parent'    => $id, //place here id of your parent page
                    'order'          => 'ASC',
                    'orderby'        => 'ASC'
                );

                $childrens = new WP_Query($args);

                if ($childrens->have_posts()) :
                $bil = 1;
                while ($childrens->have_posts()) : $childrens->the_post();
                $thumbnails = get_the_post_thumbnail_url($childrens->ID);
                $title = get_the_title($childrens->ID);
                $deskripsi = get_the_excerpt($childrens->ID);
                $permalink = get_the_permalink($childrens->ID);
            ?>
                <a href="<?= $permalink ?>" class="group text-center">
                    <div
                        class="h-[22rem] w-full rounded-2xl overflow-hidden transition-all group-hover:shadow-[0_10px_15px_rgba(0,0,0,0.3)]">
                        <img src="<?= $thumbnails ?>"
                            class="w-full h-full object-cover group-hover:scale-110 transition-all">
                    </div>
                    <h3 class="font-semibold text-lg mt-6"><?= $title ?></h3>
                </a>
            <?php 
                endwhile; // <- I had to move that, it was in wrong place so you were closing more divs than you were opening in that loop
                endif;
                // wp_reset_query();  <- there is no point in resetting query - you haven't changed it
                wp_reset_postdata(); // on the other hand you should reset postdata
            ?>
            </div>
            <div class="flex justify-center mt-16">
                <a href="<?php echo bloginfo('url'); ?>/expertise" class="btn-primary">More About Us</a>
            </div>
        </div>
    </section>

    <section class="pt-24 pb-48 bg-white w-full overflow-hidden">
        <div class="delimiter">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
                <div class="relative w-full" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <svg class="absolute -top-16 -left-24 h-[10rem]" width="228" height="228" viewBox="0 0 228 228" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="114" cy="114" r="111.5" stroke="url(#paint0_linear_72_3116)" stroke-width="5" />
                        <defs>
                            <linearGradient id="paint0_linear_72_3116" x1="114" y1="0" x2="114" y2="228"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#1B75BB" />
                                <stop offset="1" stop-color="#1B75BB" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <div class="relative z-10 h-auto md:h-[50rem] w-full rounded-3xl overflow-hidden">
                        <img src="<?= $chouse_us['image']['url'] ?>" class="w-full h-full object-cover">
                    </div>
                    <svg class="absolute -bottom-16 -right-16 h-[8rem]" width="152" height="152" viewBox="0 0 152 152" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.49999 76C2.49999 35.4071 35.4071 2.50001 76 2.50001C116.593 2.50001 149.5 35.4071 149.5 76C149.5 116.593 116.593 149.5 76 149.5C35.4071 149.5 2.49999 116.593 2.49999 76Z"
                            stroke="url(#paint0_linear_72_3117)" stroke-width="5" />
                        <defs>
                            <linearGradient id="paint0_linear_72_3117" x1="76" y1="152" x2="76" y2="8.61466e-06"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F37B22" />
                                <stop offset="1" stop-color="#F37B22" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="w-full md:py-14" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    <h2 class="font-semibold text-3xl md:text-3xl text-orange"><?= $chouse_us['title_chouse_us'] ?></h2>
                    <?php 
                    foreach ($chouse_us['list_chouse_us'] as $list) :
                    ?>
                    <div class="mt-2 py-8 border-b border-low-gray group">
                        <h3 class="font-semibold text-lg group-hover:translate-x-6 transition-all"><?= $list['title']?></h3>
                        <p class="mt-2 group-hover:translate-x-6 transition-all"><?= $list['deskripsi']?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>

