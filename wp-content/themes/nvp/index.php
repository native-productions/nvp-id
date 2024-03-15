<?php

/**

 * Template Name: Home
 *

 */

get_header();

$header = get_field('header');
$about = get_field('about');
$services = get_field('service');
$client = get_field('client');
$price = get_field('price');
?>
<div class="w-full relative bg-gradient-to-b from-[#6A71B5] to-[#41477B] rounded-b-[50px]">
    <header id="header" class="delimiter max-w-screen-xl md:h-[100vh] py-[100px] md:py-[0px]">
        <div class="flex items-center h-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <div><?= $header['title'] ?></div>
                    <div class="my-4 md:w-4/5">
                        <div class="leading-[30px] text-white"><?= $header['description'] ?></div>
                    </div>
                    <a href="" class="btn-primary mt-3">Contact us</a>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000">
                    <div class="relative flex">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/header-img.png" class="w-4/5">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about" class="delimiter max-w-screen-xl" id="about">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center text-white">
            <div class="order-last md:order-first" data-aos="fade-right" data-aos-duration="1000">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/img-about.png">
            </div>
            <div data-aos="fade-left" data-aos-duration="1000">
                <div>
                    <span class="text-[14px] font-bold bg-[#6A71B5] py-2 px-10 rounded-full">About us</span>
                    <h2 class="mt-6 mb-3"><b class="font-bold text-[30px] leading-8 "><?= $about['title'] ?></b></h2>
                    <div class="md:w-9/12"><?= $about['description'] ?></div>
                </div>
                <div class="flex flex-wrap pt-5">
                    <?php
                    if ($about['list_number']) :
                        $count;
                        foreach ($about['list_number'] as $aboutnumber) : ?>
                            <div class="pe-4 py-4" data-aos="fade-up" data-aos-duration="1<?php echo $count++; ?>00">
                                <h2 class="text-[40px] "><?= $aboutnumber['text'] ?></h2>
                                <div>
                                    <p><?= $aboutnumber['description'] ?></p>
                                </div>
                            </div>
                    <?php endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-14 text-white md:w-11/12 pb-[50px] pt-[10px] md:py-[100px]">
            <?php
            if ($about['list_benefit']) :
                $count;
                foreach ($about['list_benefit'] as $benefit) : ?>
                    <div class="text-center" data-aos="fade-up" data-aos-duration="1<?php echo $count++; ?>00">
                        <img src="<?= $benefit['icon']['url'] ?>" class="mx-auto">
                        <h3 class="pb-3 pt-6"><?= $benefit['title'] ?></h3>
                        <p><?= $benefit['description'] ?></p>
                    </div>
            <?php endforeach;
            endif;
            ?>
        </div>
    </section>
</div>
<section>
    <div id="services" class="delimiter pt-[100px]">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
            <div data-aos="fade-right" data-aos-duration="1000">
                <span class="text-[14px] font-bold bg-[#6A71B5] py-2 px-10 rounded-full text-white">Our Services</span>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/service.png">
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <p><?= $services['description'] ?></p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center pt-[100px]">
            <?php
            if ($services['list_service']) :
                $c;
                foreach ($services['list_service'] as $service) : ?>
                    <div class="flex items-start gap-10" data-aos="fade-up" data-aos-duration="<?= $c++; ?>000">
                        <img src="<?= $service['icon']['url'] ?>" class="object-contain">
                        <div>
                            <h3 class="text-[#41477B]"><?= $service['title'] ?></h3>
                            <p class="mt-4"><?= $service['description'] ?></p>
                        </div>
                    </div>
            <?php endforeach;
            endif;
            ?>
        </div>
    </div>
</section>
<section>
    <div id="testimonials" class="delimiter py-[100px]">
        <div class="md:w-2/3 pb-[50px] md:py-[100px] text-center mx-auto" data-aos="fade-up" data-aos-duration="1000">
            <span class="text-[14px] font-bold bg-[#6A71B5] py-2 px-10 rounded-full text-white">Client</span>
            <h2 class="my-4"><b class="font-bold text-[30px] leading-8 text-[#41477B]"><?= $client['title'] ?></b></h2>
            <p><?= $client['description'] ?></p>
        </div>
        <div class="main-content">
            <div class="owl-carousel owl-theme">
                <?php
                if ($client['list_client']) :
                    $c=1;
                    foreach ($client['list_client'] as $client) : ?>
                        <div class="item" data-aos="fade-up" data-aos-duration="1<?= $c++; ?>00">
                            <div class="text-white text-center bg-gradient-to-b from-[#6A71B5] to-[#646BAC] rounded-[50px] relative px-5 pb-[40px] pt-[120px]">
                                <div class="w-[120px] h-[120px] p-3 rounded-full mx-auto bg-white border-[10px] border-[#41477B] top-[-20px] absolute left-[50%] translate-x-[-50%]">
                                    <div class="flex items-center h-full">
                                        <div>
                                            <img src="<?= $client['logo']['url'] ?>" alt="" class="object-contain">
                                        </div>
                                    </div>
                                </div>
                                <p class="pb-5"><?= $client['description'] ?></b>
                            </div>
                        </div>
                <?php endforeach;
                endif;
                ?>
            </div>
            <div class="owl-theme">
                <div class="owl-controls">
                    <div class="custom-nav owl-nav"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="pricing" class="bg-[#DEE1FF]">
    <div class="delimiter pt-[100px] pb-[100px] md:pb-[150px]">
        <div class="text-center">
            <span class="text-[14px] font-bold bg-[#6A71B5] py-2 px-10 rounded-full text-white">Pricing</span>
            <h2 class="mt-6 mb-3"><b class="font-bold text-[#41477B] text-[40px] leading-8 "><?= $price['title'] ?></b></h2>
            <div class="md:w-3/5 mx-auto">
                <p><?= $price['description'] ?></p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-14 items-start pt-[100px]">
            <?php
            $list_paket = $price['list_paket'];
            if ($list_paket) :
                $c=1;
                foreach ($list_paket as $list) : ?>
                    <div class="bg-white shadow rounded-[50px] py-[50px]" data-aos="fade-up" data-aos-duration="1<?= $c++; ?>00">
                        <div class="text-center border-b border-1 pb-5">
                            <h3 class="text-[24px] font-bold text-[#41477B]"><?= $list['title'] ?></h3>
                            <div class="flex gap-4 justify-center items-center py-4">
                                <s><?= $list['price_discount'] ?></s>
                                <span class="text-[14px] font-bold bg-[#DEE1FF] px-2 py-1 rounded-full text-[#6A71B5]"><?= $list['discount'] ?></span>
                            </div>
                            <div class="flex gap-2 justify-center text-[#41477B]">
                                <span class="leading-[1px]">Rp</span>
                                <h4 class="text-[50px] font-semibold">20 jt</h4>
                            </div>
                            <a href="" class="mt-8 btn-blue">Order Now</a>
                            <p class="pt-4"><?= $list['description'] ?></p>
                        </div>
                        <div class="px-5 pt-3">
                            <b class="text-[18px] text-[#41477B] font-bold">Featured Features :</b>
                            <ul>
                                <?php
                                $fitur = $list['fitur'];
                                if ($fitur) :
                                    foreach ($fitur as $f) : ?>
                                        <li class="flex items-center justify-between">
                                            <div>
                                                <?php if ($f['exclude']) : ?>
                                                    <span class="inline-block">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14 2L2 14M2 2L14 14" stroke="#6A71B5" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                <?php else : ?>
                                                    <span class="inline-block">
                                                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M18 2L7 13L2 8" stroke="#6A71B5" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </span>
                                                <?php endif; ?>
                                                <span><?= $f['title']; ?></span>
                                            </div>
                                            <div>
                                                <div class="relative flex items-center text-gray-500 cursor-pointer hover:text-gray-600" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                                                    <div class="relative">
                                                        <div class="absolute bottom-0 inline-block w-64 px-4 py-3 mb-10 right-0 text-white bg-purple-600 rounded-lg" x-show="hover" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-cloak>
                                                            <span class="inline-block text-sm leading-tight"><?= $f['description']; ?></span>
                                                            <span class="absolute bottom-0 right-0 w-5 h-5 -mb-1 transform rotate-45 bg-purple-600 right-[5px]"></span>
                                                        </div>
                                                        <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.9506 11.4118V7.29412M13.9506 15.5294H13.9624M13.9506 22C19.5007 22 24 17.5228 24 12C24 6.47715 19.5007 2 13.9506 2C8.40043 2 3.90114 6.47715 3.90114 12C3.90114 13.1176 4.0854 14.1925 4.42533 15.196C4.55326 15.5737 4.61722 15.7625 4.62875 15.9076C4.64015 16.0508 4.63154 16.1513 4.59592 16.2905C4.55985 16.4316 4.48022 16.5782 4.32096 16.8715L2.38715 20.4334C2.11131 20.9414 1.97339 21.1954 2.00426 21.3915C2.03114 21.5623 2.13214 21.7126 2.28044 21.8026C2.45069 21.906 2.73931 21.8763 3.31655 21.8169L9.37106 21.1941C9.55441 21.1753 9.64609 21.1658 9.72965 21.169C9.81183 21.1722 9.86985 21.1798 9.94999 21.1982C10.0315 21.2169 10.1339 21.2562 10.3389 21.3347C11.4597 21.7644 12.6775 22 13.9506 22Z" stroke="#6A71B5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                <?php endforeach;
                                endif;
                                ?>
                            </ul>
                            <div class="divide-y divide-slate-200">
                                <!-- Accordion item -->
                                <div x-data="{ expanded: false }" class="pt-2">
                                    <h2>
                                        <button id="faqs-title-01" type="button" class="flex items-center justify-center gap-3 text-[#6A71B5] text-[16px] w-full text-left font-semibold" @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-01">
                                            <span>See More Details</span>
                                            <svg class="" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.999999 1L7 7L13 1" stroke="#6A71B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transform origin-center transition duration-200 ease-out" :class="{'!rotate-180': expanded}" />
                                                <!-- <path d="M13.855 7.27406L8.13861 1.00327L1.86783 6.71967" stroke="#6A71B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}"/> -->
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01" class="grid text-sm text-slate-600 transition-all duration-300 ease-in-out" :class="expanded ? 'grid-rows-[1fr] opacity-100 block' : 'grid-rows-[0fr] opacity-0 hidden'">
                                        <div>
                                            <ul>
                                                <?php
                                                $fiture = $list['fitur_expand'];
                                                if ($fiture) :
                                                    foreach ($fiture as $fe) : ?>
                                                        <li class="flex items-center justify-between">
                                                            <div>
                                                                <?php if ($fe['exclude']) : ?>
                                                                    <span class="inline-block">
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M14 2L2 14M2 2L14 14" stroke="#6A71B5" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
                                                                    </span>
                                                                <?php else : ?>
                                                                    <span class="inline-block">
                                                                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M18 2L7 13L2 8" stroke="#6A71B5" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
                                                                    </span>
                                                                <?php endif; ?>
                                                                <span><?= $fe['title']; ?></span>
                                                            </div>
                                                            <div>
                                                                <div class="relative flex items-center text-gray-500 cursor-pointer hover:text-gray-600" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                                                                    <div class="relative">
                                                                        <div class="absolute bottom-0 inline-block w-64 px-4 py-3 mb-10 right-0 text-white bg-purple-600 rounded-lg" x-show="hover" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-cloak>
                                                                            <span class="inline-block text-sm leading-tight"><?= $fe['description']; ?></span>
                                                                            <span class="absolute bottom-0 right-0 w-5 h-5 -mb-1 transform rotate-45 bg-purple-600 right-[5px]"></span>
                                                                        </div>
                                                                        <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.9506 11.4118V7.29412M13.9506 15.5294H13.9624M13.9506 22C19.5007 22 24 17.5228 24 12C24 6.47715 19.5007 2 13.9506 2C8.40043 2 3.90114 6.47715 3.90114 12C3.90114 13.1176 4.0854 14.1925 4.42533 15.196C4.55326 15.5737 4.61722 15.7625 4.62875 15.9076C4.64015 16.0508 4.63154 16.1513 4.59592 16.2905C4.55985 16.4316 4.48022 16.5782 4.32096 16.8715L2.38715 20.4334C2.11131 20.9414 1.97339 21.1954 2.00426 21.3915C2.03114 21.5623 2.13214 21.7126 2.28044 21.8026C2.45069 21.906 2.73931 21.8763 3.31655 21.8169L9.37106 21.1941C9.55441 21.1753 9.64609 21.1658 9.72965 21.169C9.81183 21.1722 9.86985 21.1798 9.94999 21.1982C10.0315 21.2169 10.1339 21.2562 10.3389 21.3347C11.4597 21.7644 12.6775 22 13.9506 22Z" stroke="#6A71B5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                <?php endforeach;
                                                endif;
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endforeach;
            endif;
            ?>
        </div>
</section>
<section id="contact" class="relative">
    <div class="bg-[#43497E] absolute w-full md:w-[50%] h-full md:h-[110%] top-0 md:top-[-50px] left-0 z-[1] md:rounded-tr-[50px]"></div>
    <div class="delimiter py-[100px] relative z-[2]">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-start">
            <div data-aos="fade-up" data-aos-duration="1000">
                <div class="text-white">
                    <span class="text-[14px] font-bold bg-[#6A71B5] py-2 px-10 rounded-full text-white">Contact Us</span>
                    <h2 class="mt-6 mb-3"><b class="font-bold text-white text-[40px] leading-8 ">Get in touch with NVP Dev</b></h2>
                    <p>Here at our company, we value our customers and believe in providing excellent customer service. Our contact page is designed to make it easy for you to reach out to us and get the help you need.</p>
                    <div class="flex items-center gap-4 pt-4">
                        <span class="py-[14px] px-[16px] bg-[#6A71B5] inline-block rounded-[50px] w-[50px] h-[50px]"><svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12C10.6569 12 12 10.6569 12 9C12 7.34315 10.6569 6 9 6C7.34315 6 6 7.34315 6 9C6 10.6569 7.34315 12 9 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9 21C13 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 5 17 9 21Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span>Sunset road, Seminyak</span>
                    </div>
                    <div class="flex items-center gap-4 pt-4">
                        <span class="py-[14px] px-[16px] bg-[#6A71B5] inline-block rounded-[50px] w-[50px] h-[50px]"><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.45059 7.29866C7.14659 8.74828 8.09537 10.1069 9.29695 11.3085C10.4985 12.5101 11.8572 13.4589 13.3068 14.1549C13.4315 14.2147 13.4938 14.2447 13.5727 14.2677C13.8531 14.3494 14.1973 14.2907 14.4348 14.1207C14.5016 14.0728 14.5587 14.0157 14.673 13.9014C15.0226 13.5518 15.1975 13.377 15.3732 13.2627C16.0361 12.8317 16.8907 12.8317 17.5536 13.2627C17.7294 13.377 17.9042 13.5518 18.2538 13.9014L18.4486 14.0962C18.9801 14.6277 19.2458 14.8934 19.3902 15.1788C19.6772 15.7463 19.6772 16.4166 19.3902 16.9842C19.2458 17.2695 18.9801 17.5353 18.4486 18.0667L18.291 18.2243C17.7614 18.754 17.4966 19.0188 17.1365 19.221C16.737 19.4455 16.1165 19.6068 15.6583 19.6054C15.2454 19.6042 14.9632 19.5241 14.3987 19.3639C11.3653 18.5029 8.50295 16.8785 6.11497 14.4905C3.72699 12.1025 2.10252 9.24014 1.24155 6.20675C1.08134 5.6423 1.00124 5.36008 1.00001 4.94713C0.998645 4.48891 1.16001 3.86842 1.38443 3.46891C1.58668 3.10888 1.85149 2.84407 2.38111 2.31445L2.53874 2.15681C3.07019 1.62537 3.33591 1.35965 3.62129 1.2153C4.18885 0.928232 4.85912 0.928232 5.42668 1.2153C5.71206 1.35965 5.97778 1.62537 6.50922 2.15681L6.70409 2.35168C7.0537 2.70129 7.2285 2.87609 7.34279 3.05187C7.77378 3.71476 7.77378 4.56934 7.34278 5.23223C7.2285 5.40801 7.0537 5.58281 6.70409 5.93242C6.58978 6.04673 6.53262 6.10388 6.48478 6.1707C6.31477 6.40813 6.25607 6.75239 6.33779 7.03274C6.36079 7.11163 6.39072 7.17397 6.45059 7.29866Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span>+62 8123 5504 4603</span>
                    </div>
                    <div class="flex items-center gap-4 pt-4">
                        <span class="py-[14px] px-[16px] bg-[#6A71B5] inline-block rounded-[50px] w-[50px] h-[50px]"><svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 4L9.16492 9.71544C9.82609 10.1783 10.1567 10.4097 10.5163 10.4993C10.8339 10.5785 11.1661 10.5785 11.4837 10.4993C11.8433 10.4097 12.1739 10.1783 12.8351 9.71544L21 4M5.8 17H16.2C17.8802 17 18.7202 17 19.362 16.673C19.9265 16.3854 20.3854 15.9265 20.673 15.362C21 14.7202 21 13.8802 21 12.2V5.8C21 4.11984 21 3.27976 20.673 2.63803C20.3854 2.07354 19.9265 1.6146 19.362 1.32698C18.7202 1 17.8802 1 16.2 1H5.8C4.11984 1 3.27976 1 2.63803 1.32698C2.07354 1.6146 1.6146 2.07354 1.32698 2.63803C1 3.27976 1 4.11984 1 5.8V12.2C1 13.8802 1 14.7202 1.32698 15.362C1.6146 15.9265 2.07354 16.3854 2.63803 16.673C3.27976 17 4.11984 17 5.8 17Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </span>
                        <span>Sunset road, Seminyak</span>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <div>
                    <h3 class="font-bold text-white md:text-[#41477B] text-[40px] leading-8">Schedule Meeting</h3>
                    <div>
                        <?php echo do_shortcode('[contact-form-7 id="32a6446" title="contact"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>