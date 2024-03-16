<?php get_header(); 
$header = get_field('header');
$contact = get_field('contact');

?>
<div class="w-full relative bg-center bg-no-repeat bg-cover bg-[url('<?= $header['image_header']['url']?>')]">
    <div class="absolute bg-[#000] opacity-50 w-full h-full z-0"></div>
    <header id="header" class="delimiter max-w-screen-xl h-[60vh] md:h-[100vh] py-[100px] md:py-[0px] relative z-1">
        <div class="h-full flex items-center justify-center">
            <div>
                <div class="text-[14px] uppercase text-white font-semibold md:flex items-center justify-center gap-2">
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
                <h1 class="text-[25px] md:text-[60px] pt-[15px] md:pt-[40px] pb-[25px] md:pb-[50px] text-center"><?= get_the_title() ?></h1>
                <div class="text-center">
                    <a href="" class="btn-blue">Apply For This Job</a>
                </div>
            </div>
        </div>
    </header>
</div>
<section>
    <div class="py-[100px] content">
        <div class="delimiter mx-auto max-w-[750px]">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</section>
<section class="pb-20 block-px content delimiter">
    <div class="px-8 mx-auto max-w-[856px] w-full bg-[#f7f7f7] bg-opacity-3 rounded py-12">
        <div class="md:max-w-[70%] mx-auto text-md">
            <div class="gap-y-0 md:gap-y-5 flex flex-wrap md:flex">
                <div class="w-full font-semibold md:w-[50%]">Department</div>
                <div class="w-full mb-8 md:mb-0 md:w-[50%] md:ltr:pl-16 md:rtl:pr-16">
                    <?= $header['department'] ?>
                </div>
            </div>
            <div class="gap-y-0 md:gap-y-5 flex flex-wrap md:flex">
                <div class="w-full font-semibold md:w-[50%]">Locations</div>
                <div class="w-full mb-8 md:mb-0 md:w-[50%] md:ltr:pl-16 md:rtl:pr-16">
                <?= $header['locations'] ?>
                </div>
            </div>
            <div class="gap-y-0 md:gap-y-5 flex flex-wrap md:flex">
                <div class="w-full font-semibold md:w-[50%]">Remote status</div>
                <div class="w-full mb-8 md:mb-0 md:w-[50%] md:ltr:pl-16 md:rtl:pr-16">
                <?= $header['remote_status'] ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-[100px] block-px delimiter">
    <div class="flex flex-col items-center justify-center mx-auto sm:flex-row block-max-w--md content">
        <div>
            <div class="mb-8 md:mb-0 group-hover:ring-2 group-hover:ring-company-link group-hover:ring-offset-2 group-focus-visible:ring-2 group-focus-visible:ring-company-link group-focus-visible:ring-offset-2 bg-gray-300 relative h-[170px] w-[170px] rounded-full">
                <figure class="w-full h-full">
                    <picture>
                        <img src="<?= $contact['image']['url']?>" class="w-full h-full object-cover rounded-full" width="170" height="170">
                    </picture>
                </figure>
            </div>
        </div>
        <div class="flex flex-col justify-center md:ml-8 md:relative md:top-[-6px] text-center md:text-left">
            <span class="mb-1 text-sm font-bold tracking-widest uppercase">Contact</span>
            <span class="text-lg md:text-xl text-[#41477B] font-bold py-2">Aldo Winata</span>
            <span class="leading-tight md:text-md">
                Senior Talent Acquisition and Employer Branding
                –
                People &amp; Culture
            </span>
        </div>
    </div>
</section>
<section class="bg-[#43497E] py-[100px]">
    <div class="delimiter mx-auto max-w-[750px]">
        <div class="text-[14px] uppercase text-white font-semibold md:flex items-center justify-center gap-2">
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
        <h2 class="text-[25px] md:text-[60px] text-white text-center pt-[50px] pb-[100px]"><?= get_the_title() ?></h2>
        <h3 class="my-6 text-3xl text-center text-white"> Personal information </h3>
        <div>
            <?php echo do_shortcode('[contact-form-7 id="c811d5d" title="contact form job"]')?>
        </div>
    </div>
</section>
<?php get_footer(); ?>