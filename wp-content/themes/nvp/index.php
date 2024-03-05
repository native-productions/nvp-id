<?php

/**

 * Template Name: Home
 *

 */

get_header();

$header = get_field('header');
$chouse_us = get_field('chouse_us');
?>
<div class="w-full relative bg-gradient-to-b from-[#6A71B5] to-[#41477B] rounded-b-[50px]">
    <header class="delimiter max-w-screen-xl h-[100vh]">
        <div class="flex items-center h-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
                <div>
                    <h1><b>Scale</b> your product. </br><b><i>Accelerate</i></b> Your</br> Software Development</h1>
                    <div class="my-4 w-4/5">
                        <p class="leading-[30px] text-white">Let's be remarkable! join our dream partnership, build extraordinary products, and achieve your marvelous goals!</p>
                    </div>
                    <a href="" class="btn-primary mt-3">Contact us</a>
                </div>
                <div>
                    <div class="relative flex">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/header-img.png" class="w-4/5">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="delimiter max-w-screen-xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center text-white">
            <div>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/img-about.png">
            </div>
            <div>
                <div>
                    <span class="text-[14px] font-bold bg-[#6A71B5] py-2 px-10 rounded-full">About us</span>
                    <h2 class="mt-6 mb-3"><b class="font-bold text-[30px] leading-8 ">Why Choose Native Production?</b></h2>
                    <p class=" w-9/12">We believe that blockchain technology has the power to transform industries and revolutionize the way we interact and transact with one another.</p>
                </div>
                <div class="flex flex-wrap pt-5">
                    <div class="pe-4 py-4">
                        <h2 class="text-[40px] ">44 million</h2>
                        <p class="">Transactions every 24 hours</p>
                    </div>
                    <div class="pe-4 py-4">
                        <h2 class="text-[40px] ">46,000</h2>
                        <p class="">New users annually</p>
                    </div>
                    <div class="pe-4 py-4">
                        <h2 class="text-[40px] ">$119 trillion</h2>
                        <p class="">Assets under holding</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-14 text-white w-11/12 py-[100px]">
            <div class="text-center">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/high-posititons.png" class="mx-auto">
                <h3 class="pb-3 pt-6">High Posititons</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus enim vitae turpis commodo maximus. Vivamus vitae varius enim.</p>
            </div>
            <div class="text-center">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/long-term-effects.png" class="mx-auto">
                <h3 class="pb-3 pt-6">Long Term Effects</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus enim vitae turpis commodo maximus. Vivamus vitae varius enim.</p>
            </div>
            <div class="text-center">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/highly-skilled.png" class="mx-auto">
                <h3 class="pb-3 pt-6">Highly Skilled</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus enim vitae turpis commodo maximus. Vivamus vitae varius enim.</p>
            </div>
        </div>
    </section>
</div>
<section>
    <div class="delimiter py-[100px]">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
            <div>
                <span class="text-[14px] font-bold bg-[#6A71B5] py-2 px-10 rounded-full text-white">Our Services</span>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/service.png">
            </div>
            <div>
                <p>We offer a wide range of software development services, including web application development, mobile app development, custom software development, and software consulting. Our team is well-versed in a variety of programming languages, frameworks, and technologies, which allows us to develop solutions that are tailored to our clients specific needs and requirements. </br></br> We also offer a range of blockchain-based services, including smart contract development, decentralized application (dApp) development, blockchain consulting, and blockchain integration. Our solutions are designed to help businesses increase efficiency, transparency, and security while reducing costs and improving customer satisfaction.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center pt-[100px]">
            <div class="flex items-start gap-10">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/software-development.png" class="object-contain">
                <div>
                    <h3 class="text-[#41477B]">Software Development</h3>
                    <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus enim vitae turpis commodo maximus. Vivamus vitae varius enim.</p>
                </div>
            </div>
            <div class="flex items-start gap-10">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/software-development.png" class="object-contain">
                <div>
                    <h3 class="text-[#41477B]">Software Development</h3>
                    <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus enim vitae turpis commodo maximus. Vivamus vitae varius enim.</p>
                </div>
            </div>
            <div class="flex items-start gap-10">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/software-development.png" class="object-contain">
                <div>
                    <h3 class="text-[#41477B]">Software Development</h3>
                    <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus enim vitae turpis commodo maximus. Vivamus vitae varius enim.</p>
                </div>
            </div>
            <div class="flex items-start gap-10">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/software-development.png" class="object-contain">
                <div>
                    <h3 class="text-[#41477B]">Software Development</h3>
                    <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus enim vitae turpis commodo maximus. Vivamus vitae varius enim.</p>
                </div>
            </div>
        </div>
        <div class="w-2/3 py-[100px] text-center mx-auto">
            <span class="text-[14px] font-bold bg-[#6A71B5] py-2 px-10 rounded-full text-white">Our Services</span>
            <h2 class="mt-6 mb-3"><b class="font-bold text-[30px] leading-8 text-[#41477B]">Our Satisfied Clients</b></h2>
            <p>Some clients that we developed products for expanded into new markets with measurable success. Let's get you on that list.</p>
        </div>
        <div class="main-content">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="text-white text-center bg-gradient-to-b from-[#6A71B5] to-[#646BAC] rounded-[50px] relative p-5 pt-[120px]">
                        <div class="w-[120px] h-[120px] p-3 rounded-full mx-auto bg-white border-[10px] border-[#41477B] top-[-20px] absolute left-[-50%] translate-x-[-50%]">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/duck-places.png" alt="" class="object-contain">
                        </div>
                        <p>Some clients that we developed products for expanded into new markets with measurable success. Let's get you on that list.</p>
                        <b>Indonesia, CEO Duck Goes Places</b>
                    </div>
                </div>
                <div class="item">
                    <div class="text-white text-center bg-gradient-to-b from-[#6A71B5] to-[#646BAC] rounded-[50px] relative p-5 pt-[120px]">
                        <div class="w-[120px] h-[120px] p-3 rounded-full mx-auto bg-white border-[10px] border-[#41477B] top-[-20px] absolute left-[-50%] translate-x-[-50%]">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/maja-labs.png" alt="" class="object-contain">
                        </div>
                        <p>Some clients that we developed products for expanded into new markets with measurable success. Let's get you on that list.</p>
                        <b>Indonesia, CEO Duck Goes Places</b>
                    </div>
                </div>
                <div class="item">
                    <div class="text-white text-center bg-gradient-to-b from-[#6A71B5] to-[#646BAC] rounded-[50px] relative p-5 pt-[120px]">
                        <div class="w-[120px] h-[120px] p-3 rounded-full mx-auto bg-white border-[10px] border-[#41477B] top-[-20px] absolute left-[-50%] translate-x-[-50%]">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/drezzo.png" alt="" class="object-contain">
                        </div>
                        <p>Some clients that we developed products for expanded into new markets with measurable success. Let's get you on that list.</p>
                        <b>Indonesia, CEO Duck Goes Places</b>
                    </div>
                </div>
            </div>
            <div class="owl-theme">
                <div class="owl-controls">
                    <div class="custom-nav owl-nav"></div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php get_footer(); ?>