<?php get_header();?>
<section>
    <div class="pt-[200px] pb-[100px] content">
        <div class="delimiter mx-auto max-w-[750px]">
            <h1><?php the_title(); ?></h1>
            <img src="<?= get_the_post_thumbnail_url()?>" alt="" class="py-5">
            <div class="text-justify">
            <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<section class="h-auto w-full relative bg-[#F9F9F9] py-[100px]">
    <div class="delimiter mx-auto max-w-[750px]" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <h2 class="font-semibold text-2xl md:text-3xl text-black text-center">Related News</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-14">
            <?php
            $the_query = new WP_Query(
                array(
                    'posts_per_page' => 4,
                    'post_type' => 'post',
                    'post__not_in' => array(get_the_ID()),
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                )
            );
            ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
                $thumbnail = get_the_post_thumbnail_url($the_query->ID);
            ?>
                <a href="<?php the_permalink(); ?>" class="group text-center">
                    <div class="h-[20rem] w-full rounded-2xl overflow-hidden transition-all group-hover:shadow-[0_15px_20px_rgba(0,0,0,0.3)]">
                        <img src="<?php echo $thumbnail; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-all">
                    </div>
                    <h3 class="font-semibold text-[#41477B] mt-6 "><?php echo get_the_title(); ?></h3>
                </a>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php get_footer();?>