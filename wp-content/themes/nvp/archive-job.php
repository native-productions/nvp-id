<?php

/**
 * 
 * Template Name: archive job
 */

get_header(); ?>
<section class="pt-48 pb-48 bg-white w-full">
    <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <h2 class="font-semibold text-3xl md:text-4xl text-orange text-center">Current Job Openings</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-14">
            <?php
            $the_query = new WP_Query(
                array(
                    'posts_per_page' => 1,
                    'post_type' => 'job',
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                )
            );
            ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
                $header = get_field('header', $post->ID) ?>
                <a href="<?php the_permalink();?>">
                    <div class="list-blog group w-full border-b border-low-gray py-10 border">
                        <div class="h-auto md:h-[15rem] w-full rounded-2xl overflow-hidden transition-all">
                            <img src="<?= get_the_post_thumbnail_url() ?>" class="w-full h-full object-cover group-hover:scale-110 transition-all">
                        </div>
                        <div class="w-full">
                            <h3 class="text-lg md:text-xl text-[#41477B] font-bold py-4 text-center"><?php the_title() ?></h3>
                            <div class="text-[14px] uppercase text-black font-semibold md:flex items-center justify-center gap-2">
                                <span><?= $header['department'] ?></span>
                                <span class="mx-[2px]">·</span>
                                <span><?= $header['locations'] ?></span>
                                <span class="mx-[2px]">·</span>
                                <span class="inline-flex items-center gap-x-2">
                                    <?= $header['remote_status'] ?>
                                    <svg class="svg-inline--fa fa-wifi w-4 h-5 text-xs" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wifi" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M54.2 202.9C123.2 136.7 216.8 96 320 96s196.8 40.7 265.8 106.9c12.8 12.2 33 11.8 45.2-.9s11.8-33-.9-45.2C549.7 79.5 440.4 32 320 32S90.3 79.5 9.8 156.7C-2.9 169-3.3 189.2 8.9 202s32.5 13.2 45.2 .9zM320 256c56.8 0 108.6 21.1 148.2 56c13.3 11.7 33.5 10.4 45.2-2.8s10.4-33.5-2.8-45.2C459.8 219.2 393 192 320 192s-139.8 27.2-190.5 72c-13.3 11.7-14.5 31.9-2.8 45.2s31.9 14.5 45.2 2.8c39.5-34.9 91.3-56 148.2-56zm64 160a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
            endwhile; ?>
            <div class="w-full flex justify-center items-center mt-10">
                <ul class="flex justify-center items-center flex-wrap">
                    <?php
                    $big = 999999999; // need an unlikely integer
                    $pagination_args = array(
                        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $the_query->max_num_pages,
                        'prev_next' => false // Remove the default previous and next links
                    );
                    $pagination_links = paginate_links($pagination_args);
                    if ($pagination_links) {
                        // Check if the current link contains 'current' and add 'active' class
                        $pagination_links = str_replace('page-numbers', 'btn-pagination m-2', $pagination_links);
                        $pagination_links = str_replace('current', 'active', $pagination_links);
                        echo $pagination_links;
                    }
                    ?>
                </ul>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>
</section>
<?php get_footer(); ?>