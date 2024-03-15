<?php get_template_part( 'template-part/footer-content'); ?>
    </main>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js"
        integrity="sha512-Atu8sttM7mNNMon28+GHxLdz4Xo2APm1WVHwiLW9gW4bmHpHc/E2IbXrj98SmefTmbqbUTOztKl5PDPiu0LD/A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="<?php bloginfo('stylesheet_directory');?>/assets/script/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var owlCarousel = document.querySelector('.main-content .owl-carousel');
            if (owlCarousel) {
                var owl = new OwlCarousel(owlCarousel, {
                    loop: true,
                    margin: 10,
                    nav: true,
                    autoHeight: true,
                    navText: [
                        '<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/left.png" class="h-[40px]">',
                        '<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/right.png" class="h-[40px]">'
                    ],
                    navContainer: '.main-content .custom-nav',
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            }
        });
    </script>
    <?php wp_footer();?>
    </body>
</html>
