
<?php get_template_part( 'template-part/footer-content'); ?>
    </main>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js" integrity="sha512-Atu8sttM7mNNMon28+GHxLdz4Xo2APm1WVHwiLW9gW4bmHpHc/E2IbXrj98SmefTmbqbUTOztKl5PDPiu0LD/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="<?php bloginfo('stylesheet_directory');?>/assets/script/index.js"></script>
        <script>
              // Swiper Slideshow Home
        $('.main-content .owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoHeight:true,
            navText: [
                '<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/left.png" class="h-[40px]">',
                '<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/right.png" class="h-[40px]">'
            ],
            navContainer: '.main-content .custom-nav',
            responsive:{
                0:{
                    items: 1
                },
                600:{
                    items: 3
                },
                1000:{
                    items: 3
                }
            }
        });
        </script>
        <?php wp_footer();?>
    </body>
</html>