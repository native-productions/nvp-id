<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
<?php if(is_front_page() || is_home()){
    echo get_bloginfo('name'); echo " - "; bloginfo('description');
    } else{
        echo wp_title(''); echo " - "; bloginfo('description');
    }?>
</title>

<meta name="description" content="<?php if ( is_single() ) {
    single_post_title('', true);
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory');?>/assets/img/n-logo.png">
<link href="<?php bloginfo('stylesheet_directory') ;?>/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.tailwindcss.com"></script>
<style type="text/tailwindcss">

@layer base{
    body{
        @apply font-poppins text-[#888888] text-[18px] leading-8 overflow-hidden;
    }
    .content h1 {
        @apply text-2xl;
    }
    .content h2 {
        @apply text-xl;
    }
    .content h3 {
        @apply text-lg;
    }
    .content h1, .content h2, .content h3{
        @apply font-semibold;
    }
    .content ul {
        @apply list-outside list-disc my-5 pl-6;
    }
    span, p, b, strong, i, u, input, label, select, textarea, ul, li{
        @apply leading-8;
    }
    a{
        @apply cursor-pointer no-underline;
    }

    @media screen and (max-width: 768px) {
        h1{
            @apply text-5xl;
        }
        h2{
            @apply text-3xl;
        }
        h3, span, p, b, strong, i, u, a{
            @apply leading-8;
        }
    }
    
}

@layer components{
    
    .delimiter { 
        /* @apply w-full max-w-[1180px] px-10 mx-auto; */
        @apply w-full max-w-screen-xl px-10 mx-auto;
    }
    .btn-primary{
        @apply bg-white inline-flex items-center justify-center py-3 px-6 rounded-full font-normal text-sm text-black whitespace-nowrap transition-all hover:opacity-80 border-[10px] border-[#6A71B5];
    }
    .input-datetime{
        @apply rounded-[50px] px-6 py-1 text-white md:text-[#6A71B5] border-[#6A71B5] border-[1px] w-full bg-transparent;
    }
    .input-primary{
        @apply w-full py-[10px] border-b-[1px] border-[#6A71B5] bg-transparent text-white md:text-[#888888];
    }
    .input-textarea{
        @apply w-full border-b-[1px] border-[#6A71B5] py-2 bg-transparent text-white md:text-[#888888];
    }
    .btn-blue{
        @apply bg-[#6A71B5] text-white inline-flex items-center justify-center py-2 px-10 rounded-full font-bold whitespace-nowrap transition-all hover:opacity-80;
    }
    .menu{
        @apply lg:text-black whitespace-nowrap flex justify-start lg:justify-center py-3 lg:py-0 w-full lg:w-auto transition-all text-black hover:text-orange;
    }
    .list-blog:last-child{
        @apply border-none;
    }
    .btn-pagination{
        @apply h-[3rem] w-[3rem] flex items-center justify-center text-sm text-black rounded-lg bg-white border border-low-gray hover:opacity-80 transition-all;
    }
    .btn-pagination.active{
        @apply bg-orange border-orange text-white transition-all;
    }
    header h1{
        @apply text-[20px] font-semibold text-white
    }
    header h1 strong{
        @apply text-[40px] md:text-[84px] font-semibold text-white
    }
    header h1 strong i{
        @apply text-[40px] md:text-[84px] italic leading-[6rem] font-semibold text-white
    }
    .content{
        @apply text-[#000]
    }
}

@layer utilities{
    #toggle:checked ~ label div.toggle-circle{
        @apply translate-x-4;
    }
    
}


.swiper {
    width: 100%;
    height: 100%;
}
.swiper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
  </style>
<script>
  tailwind.config = {
    theme: {
        fontFamily: {
            poppins: ['Poppins'],
        },
        extend: {
            colors: {
                'black': '#000000',
                'orange': '#F37B22',
                'gray': '#F4F5F6',
                'low-gray': '#F0F0F0',
                'white': '#FFFFFF',
                'transparent': 'transparent'
            },
        }
    },
  }
</script>

<?php wp_head();?>
</head>

<body>
  <div x-data="{ showBar: false }">
<div class="left-0 right-0 z-[999] bg-opacity-100 fixed py-6 <?php if ( is_page( array( 'jobs' ) ) || is_single() && 'post' == get_post_type() ) { echo 'bg-[#6A71B3]'; }  ?>"
    :class="{ 'bg-[#6A71B5] shadow transition duration-100 py-2' : showBar }"
       @scroll.window="showBar = (window.pageYOffset > 20) ? true : false">
     <nav class="delimiter max-w-screen-xl flex justify-between items-center flex-col lg:flex-row">
        <div class="flex items-center justify-between w-full lg:w-fit min-w-[175px] h-[45px]">
            <a href="/" class="flex items-center">
                <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="logo" class="w-[50px]">
                <span class="ms-[20px] text-white">Native Productions</span>
            </a>
            <div class="flex lg:hidden">
                <button type="button" class="btn-mobile transition-all flex items-end justify-end flex-col h-auto py-1.5">
                    <span class="h-[3px] w-[28px] bg-black rounded-full transition-all"></span>
                    <span class="h-[3px] w-[28px] bg-black rounded-full transition-all my-1.5"></span>
                    <span class="h-[3px] w-[28px] bg-black rounded-full transition-all"></span>
                </button>
            </div>
        </div>
        <div class="wrap-menu invisible lg:visible absolute transition-all md:transition-none lg:relative flex lg:flex w-full lg:w-auto h-[100vh] lg:h-auto top-[100%] lg:top-0">
            <div class="outer-menu translate-x-[-100%] opacity-0 transition-all md:transition-none lg:opacity-100 lg:transform-none absolute lg:relative bg-white lg:bg-transparent flex lg:flex lg:justify-center items-center lg:items-center flex-col lg:flex-row w-full max-w-fit lg:max-w-full h-[100vh] lg:h-auto left-0 z-10 lg:-z-0 px-10 lg:px-0 py-10 lg:py-0">
                <ul class="flex flex-col w-full lg:flex-row lg:justify-center lg:items-center md:text-white">
                    <li class="m-4 lg:mx-3"><a href="<?= bloginfo('url')?>/#header">Home</a></li>
                    <li class="m-4 lg:mx-3"><a href="<?= bloginfo('url')?>/#about">About Us</a></li>
                    <li class="m-4 lg:mx-3"><a href="<?= bloginfo('url')?>/#services">Services</a></li>
                    <li class="m-4 lg:mx-3"><a href="<?= bloginfo('url')?>/#testimonials">Testimonials</a></li>
                    <li class="m-4 lg:mx-3"><a href="<?= bloginfo('url')?>/#pricing">Pricing</a></li>
                    <li class="m-4 lg:mx-3"><a href="<?= bloginfo('url')?>/#contact">Contact</a></li>
                </ul>
            </div>
            <div class="abs-menu btn-mobile opacity-0 transition-all md:transition-none bg-black bg-opacity-50 left-0 right-0 bottom-0 h-[100vh] w-full -z-0 lg:hidden"></div>
        </div>
    </nav>
    </div>
  </div>
<main>
