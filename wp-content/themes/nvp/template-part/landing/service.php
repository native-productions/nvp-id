<section>
  <div id="services" class="delimiter pt-[100px]">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center">
      <div data-aos="fade-right" data-aos-duration="1000">
        <span class="text-[14px] font-bold bg-[#6A71B5] py-2 px-10 rounded-full text-white">Our Services</span>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/service.png" alt="service">
      </div>
      <div data-aos="fade-up" data-aos-duration="1000">
        <p>
          <?= $services['description'] ?>
        </p>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center pt-[100px]">
      <?php
            if ($services['list_service']) :
                $c;
                foreach ($services['list_service'] as $service) : ?>
      <div class="flex items-start gap-10" data-aos="fade-up" data-aos-duration="<?= $c++; ?>000">
        <img src="<?= $service['icon']['url'] ?>" class="object-contain" alt="service icon">
        <div>
          <h3 class="text-[#41477B]">
            <?= $service['title'] ?>
          </h3>
          <p class="mt-4">
            <?= $service['description'] ?>
          </p>
        </div>
      </div>
      <?php endforeach;
            endif;
            ?>
    </div>
  </div>
</section>