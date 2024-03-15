<?php
  $price = get_field('price');
?>
<section id="pricing" class="bg-[#DEE1FF]">
  <div class="delimiter pt-[100px] pb-[100px] md:pb-[150px]">
    <div class="text-center">
      <span class="text-[14px] font-bold bg-[#6A71B5] py-2 px-10 rounded-full text-white">Pricing</span>
      <h2 class="mt-6 mb-3"><b class="font-bold text-[#41477B] text-[40px] leading-8 ">
          <?= $price['title'] ?>
        </b></h2>
      <div class="md:w-3/5 mx-auto">
        <p>
          <?= $price['description'] ?>
        </p>
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
          <h3 class="text-[24px] font-bold text-[#41477B]">
            <?= $list['title'] ?>
          </h3>
          <div class="flex gap-4 justify-center items-center py-4">
            <s>
              <?= $list['price_discount'] ?>
            </s>
            <span class="text-[14px] font-bold bg-[#DEE1FF] px-2 py-1 rounded-full text-[#6A71B5]">
              <?= $list['discount'] ?>
            </span>
          </div>
          <div class="flex gap-2 justify-center text-[#41477B]">
            <span class="leading-[1px]">Rp</span>
            <h4 class="text-[50px] font-semibold">20 jt</h4>
          </div>
          <a href="" class="mt-8 btn-blue">Order Now</a>
          <p class="pt-4">
            <?= $list['description'] ?>
          </p>
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
                    <path d="M14 2L2 14M2 2L14 14" stroke="#6A71B5" stroke-width="4" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
                <?php else : ?>
                <span class="inline-block">
                  <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 2L7 13L2 8" stroke="#6A71B5" stroke-width="4" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
                <?php endif; ?>
                <span>
                  <?= $f['title']; ?>
                </span>
              </div>
              <div>
                <div class="relative flex items-center text-gray-500 cursor-pointer hover:text-gray-600"
                  x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                  <div class="relative">
                    <div
                      class="absolute bottom-0 inline-block w-64 px-4 py-3 mb-10 right-0 text-white bg-purple-600 rounded-lg"
                      x-show="hover" x-transition:enter="transition ease-out duration-300"
                      x-transition:enter-start="opacity-0 transform scale-90"
                      x-transition:enter-end="opacity-100 transform scale-100"
                      x-transition:leave="transition ease-in duration-300"
                      x-transition:leave-start="opacity-100 transform scale-100"
                      x-transition:leave-end="opacity-0 transform scale-90" x-cloak>
                      <span class="inline-block text-sm leading-tight">
                        <?= $f['description']; ?>
                      </span>
                      <span
                        class="absolute bottom-0 right-0 w-5 h-5 -mb-1 transform rotate-45
                        bg-purple-600 right-[5px]"></span>
                    </div>
                    <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M13.9506 11.4118V7.29412M13.9506 15.5294H13.9624M13.9506 22C19.5007 22 24 17.5228 24 12C24 6.47715 19.5007 2 13.9506 2C8.40043 2 3.90114 6.47715 3.90114 12C3.90114 13.1176 4.0854 14.1925 4.42533 15.196C4.55326 15.5737 4.61722 15.7625 4.62875 15.9076C4.64015 16.0508 4.63154 16.1513 4.59592 16.2905C4.55985 16.4316 4.48022 16.5782 4.32096 16.8715L2.38715 20.4334C2.11131 20.9414 1.97339 21.1954 2.00426 21.3915C2.03114 21.5623 2.13214 21.7126 2.28044 21.8026C2.45069 21.906 2.73931 21.8763 3.31655 21.8169L9.37106 21.1941C9.55441 21.1753 9.64609 21.1658 9.72965 21.169C9.81183 21.1722 9.86985 21.1798 9.94999 21.1982C10.0315 21.2169 10.1339 21.2562 10.3389 21.3347C11.4597 21.7644 12.6775 22 13.9506 22Z"
                        stroke="#6A71B5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                </div>
              </div>
            </li>
            <?php endforeach; endif; ?>
          </ul>
          <div class="divide-y divide-slate-200">
            <!-- Accordion item -->
            <div x-data="{ expanded: false }" class="pt-2">
              <h2>
                <button id="faqs-title-01" type="button"
                  class="flex items-center justify-center gap-3 text-[#6A71B5] text-[16px] w-full text-left font-semibold"
                  @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-01">
                  <span>See More Details</span>
                  <svg class="" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.999999 1L7 7L13 1" stroke="#6A71B5" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" class="transform origin-center transition duration-200 ease-out"
                      :class="{'!rotate-180': expanded}" />
                    <!-- <path d="M13.855 7.27406L8.13861 1.00327L1.86783 6.71967" stroke="#6A71B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transform origin-center rotate-90 transition duration-200 ease-out" :class="{'!rotate-180': expanded}"/> -->
                  </svg>
                </button>
              </h2>
              <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01"
                class="grid text-sm text-slate-600 transition-all duration-300 ease-in-out"
                :class="expanded ? 'grid-rows-[1fr] opacity-100 block' : 'grid-rows-[0fr] opacity-0 hidden'">
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
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 2L2 14M2 2L14 14" stroke="#6A71B5" stroke-width="4" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>
                        </span>
                        <?php else : ?>
                        <span class="inline-block">
                          <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 2L7 13L2 8" stroke="#6A71B5" stroke-width="4" stroke-linecap="round"
                              stroke-linejoin="round" />
                          </svg>
                        </span>
                        <?php endif; ?>
                        <span>
                          <?= $fe['title']; ?>
                        </span>
                      </div>
                      <div>
                        <div class="relative flex items-center text-gray-500 cursor-pointer hover:text-gray-600"
                          x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                          <div class="relative">
                            <div
                              class="absolute bottom-0 inline-block w-64 px-4 py-3 mb-10 right-0 text-white bg-purple-600 rounded-lg"
                              x-show="hover" x-transition:enter="transition ease-out duration-300"
                              x-transition:enter-start="opacity-0 transform scale-90"
                              x-transition:enter-end="opacity-100 transform scale-100"
                              x-transition:leave="transition ease-in duration-300"
                              x-transition:leave-start="opacity-100 transform scale-100"
                              x-transition:leave-end="opacity-0 transform scale-90" x-cloak>
                              <span class="inline-block text-sm leading-tight">
                                <?= $fe['description']; ?>
                              </span>
                              <span
                                class="absolute bottom-0 right-0 w-5 h-5 -mb-1 transform rotate-45 bg-purple-600 right-[5px]"></span>
                            </div>
                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M13.9506 11.4118V7.29412M13.9506 15.5294H13.9624M13.9506 22C19.5007 22 24 17.5228 24 12C24 6.47715 19.5007 2 13.9506 2C8.40043 2 3.90114 6.47715 3.90114 12C3.90114 13.1176 4.0854 14.1925 4.42533 15.196C4.55326 15.5737 4.61722 15.7625 4.62875 15.9076C4.64015 16.0508 4.63154 16.1513 4.59592 16.2905C4.55985 16.4316 4.48022 16.5782 4.32096 16.8715L2.38715 20.4334C2.11131 20.9414 1.97339 21.1954 2.00426 21.3915C2.03114 21.5623 2.13214 21.7126 2.28044 21.8026C2.45069 21.906 2.73931 21.8763 3.31655 21.8169L9.37106 21.1941C9.55441 21.1753 9.64609 21.1658 9.72965 21.169C9.81183 21.1722 9.86985 21.1798 9.94999 21.1982C10.0315 21.2169 10.1339 21.2562 10.3389 21.3347C11.4597 21.7644 12.6775 22 13.9506 22Z"
                                stroke="#6A71B5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; endif; ?>
    </div>
</section>
