<?php
  $client = get_field('client');
?>

<section>
  <div id="testimonials" class="delimiter py-[100px]">
    <div class="md:w-2/3 pb-[50px] md:py-[100px] text-center mx-auto" data-aos="fade-up" data-aos-duration="1000">
      <span class="text-[14px] font-bold bg-[#6A71B5] py-2 px-10 rounded-full text-white">Client</span>
      <h2 class="my-4">
        <b class="font-bold text-[30px] leading-8 text-[#41477B]">
          <?= $client['title'] ?>
        </b>
      </h2>
      <p>
        <?= $client['description'] ?>
      </p>
    </div>
    <div class="main-content">
      <div class="owl-carousel owl-theme">
        <?php
          if ($client['list_client']) :
              $c=1;
              foreach ($client['list_client'] as $client) : ?>
        <div class="item" data-aos="fade-up" data-aos-duration="1<?= $c++; ?>00">
          <div
            class="text-white text-center bg-gradient-to-b from-[#6A71B5]
            to-[#646BAC] rounded-[50px] relative px-5 pb-[40px]
            pt-[120px]">
            <div
              class="w-[120px] h-[120px] p-3 rounded-full mx-auto
                bg-white border-[10px] border-[#41477B] top-[-20px]
                absolute left-[50%] translate-x-[-50%]">
              <div class="flex items-center h-full">
                <div>
                  <img src="<?= $client['logo']['url'] ?>" alt="" class="object-contain">
                </div>
              </div>
            </div>
            <p class="pb-5">
              <?= $client['description'] ?></b>
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
