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
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/header-img.png" 
            alt="nvp header"
            class="w-4/5">
        </div>
      </div>
    </div>
  </div>
</header>
