document.addEventListener('DOMContentLoaded', function() {
    // AOS
    AOS.init();

    // Header
    document.querySelector('.btn-mobile').addEventListener('click', function() {
        document.querySelector('.btn-mobile span:nth-child(1)').classList.toggle('bg-black');
        document.querySelector('.btn-mobile span:nth-child(1)').classList.toggle('bg-white');
        document.querySelector('.btn-mobile span:nth-child(2)').classList.toggle('bg-black');
        document.querySelector('.btn-mobile span:nth-child(2)').classList.toggle('bg-white');
        document.querySelector('.btn-mobile span:nth-child(2)').classList.toggle('my-1');
        document.querySelector('.btn-mobile span:nth-child(2)').classList.toggle('my-1.5');
        document.querySelector('.btn-mobile span:nth-child(3)').classList.toggle('bg-black');
        document.querySelector('.btn-mobile span:nth-child(3)').classList.toggle('bg-white');

        document.querySelector('.wrap-menu').classList.toggle('invisible');
        document.querySelector('.wrap-menu').classList.toggle('visible');
        document.querySelector('.wrap-menu').classList.toggle('transition-all');
        
        document.querySelector('.outer-menu').classList.toggle('opacity-0');
        document.querySelector('.outer-menu').classList.toggle('opacity-100');
        document.querySelector('.outer-menu').classList.toggle('translate-x-[-100%]');
        document.querySelector('.outer-menu').classList.toggle('translate-x-[0]');
        document.querySelector('.outer-menu').classList.toggle('transition-all');

        document.querySelector('.abs-menu').classList.toggle('opacity-0');
        document.querySelector('.abs-menu').classList.toggle('opacity-100');
        document.querySelector('.abs-menu').classList.toggle('transition-all');
    });

    // Accordion About
    var accordionAbout = document.querySelectorAll('.accordion-about');
    for (var i = 0; i < accordionAbout.length; i++) {
        accordionAbout[i].addEventListener('change', function() {
            if (this.checked) {
                var otherAccordions = document.querySelectorAll('.accordion-about:not(:checked)');
                for (var j = 0; j < otherAccordions.length; j++) {
                    otherAccordions[j].checked = false;
                }
            }
        });
    }
});

