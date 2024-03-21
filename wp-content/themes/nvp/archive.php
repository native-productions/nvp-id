<?php

/**
 * 
 * Template Name: archive knowledge update
 */

get_header(); ?>
<section class="pt-48 pb-48 bg-white w-full">
    <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <h2 class="font-semibold text-3xl md:text-4xl text-orange text-center">Current Job Openings</h2>
        <div class="grid-rows-1 md:grid-rows-3 mt-10">
            <?php
            $the_query = new WP_Query(
                array(
                    'posts_per_page' => 1,
                    'post_type' => 'post',
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                )
            );
            ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div>
                    <div class="list-blog group flex items-start md:items-center justify-start flex-col md:flex-row w-full border-b border-low-gray py-10">
                        <div class="h-auto md:h-[20rem] w-full md:max-w-[20rem] rounded-2xl overflow-hidden transition-all">
                            <img src="<?= get_the_post_thumbnail_url() ?>" class="w-full h-full object-cover group-hover:scale-110 transition-all">
                        </div>
                        <div class="w-full mt-10 md:mt-0 md:ml-10">
                            <h3 class="font-semibold text-xl md:text-2xl uppercase"><?php the_title() ?></h3>
                            <span class="my-4 text-orange inline-flex"><?php the_date() ?></span>
                            <div class="mb-6"><?php the_excerpt()?></div>
                            <a href="<?php the_permalink();?>" class="btn-primary px-10 py-2 mt-3">Read more</a>
                        </div>
                    </div>
                </div>
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