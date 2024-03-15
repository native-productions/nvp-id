<?php
  $about = get_field('about');
?>
<section id="about" class="delimiter max-w-screen-xl" id="about">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-14 items-center text-white">
    <div class="order-last md:order-first" data-aos="fade-right" data-aos-duration="1000">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/img-about.png" alt="about">
    </div>
    <div data-aos="fade-left" data-aos-duration="1000">
      <div>
        <span class="text-[14px] font-bold bg-[#6A71B5] py-2 px-10 rounded-full">About us</span>
        <h2 class="mt-6 mb-3"><b class="font-bold text-[30px] leading-8 ">
            <?= $about['title'] ?>
          </b></h2>
        <div class="md:w-9/12">
          <?= $about['description'] ?>
        </div>
      </div>
      <div class="flex flex-wrap pt-5">
        <?php if ($about['list_number']) :
                $count;
                foreach ($about['list_number'] as $aboutnumber) : ?>
                  <div class="pe-4 py-4" data-aos="fade-up" data-aos-duration="1<?php echo $count++; ?>00">
                    <h2 class="text-[40px] ">
                      <?= $aboutnumber['text'] ?>
                    </h2>
                    <div>
                      <p>
                        <?= $aboutnumber['description'] ?>
                      </p>
                    </div>
                  </div>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-14 text-white md:w-11/12 pb-[50px] pt-[10px] md:py-[100px]">
    <?php
      if ($about['list_benefit']) :
        $count;
        foreach ($about['list_benefit'] as $benefit) : ?>
          <div class="text-center" data-aos="fade-up" data-aos-duration="1<?php echo $count++; ?>00">
            <img src="<?= $benefit['icon']['url'] ?>" class="flex justify-center" alt="<?= $benefit['title'] ?>">
            <h3 class="pb-3 pt-6">
              <?= $benefit['title'] ?>
            </h3>
            <p>
              <?= $benefit['description'] ?>
            </p>
          </div>
    <?php endforeach; endif; ?>
  </div>
</section>
