$(document).ready(function() {
  // AOS
  AOS.init({ once : true });

  // Header
  $('.btn-mobile').click(function() {
      $('.btn-mobile span:nth-child(1)').toggleClass('bg-black bg-white');
      $('.btn-mobile span:nth-child(2)').toggleClass('bg-black bg-white');
      $('.btn-mobile span:nth-child(2)').toggleClass('my-1 my-1.5');
      $('.btn-mobile span:nth-child(3)').toggleClass('bg-black bg-white');

      $('.wrap-menu').toggleClass('invisible visible');
      $('.wrap-menu').toggleClass('transition-all transition-all');
      
      $('.outer-menu').toggleClass('opacity-0 opacity-100');
      $('.outer-menu').toggleClass('translate-x-[-100%] translate-x-[0]');
      $('.outer-menu').toggleClass('transition-all transition-all');

      $('.abs-menu').toggleClass('opacity-0 opacity-100');
      $('.abs-menu').toggleClass('transition-all transition-all');
  });



  // Accordion About
  $('.accordion-about').on('change', function() {
      if ($(this).prop('checked')) {
          $('.accordion-about').not(this).prop('checked', false);
      }
  });
});

