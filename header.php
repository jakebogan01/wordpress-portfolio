<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth h-full overflow-x-hidden">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jake Bogan personal portfolio. View my skills, projects, and contact me.">
    <meta property="og:description" content="Jake Bogan personal portfolio. View my skills, projects, and contact me.">
    <?php wp_head(); ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_theme_file_uri('/images/light-icon.svg') ?>" id="faviconTag">
    <script>
        const faviconTag = document.getElementById("faviconTag");
        const isDark = window.matchMedia("(prefers-color-scheme: dark)");
        const changeFavicon = () => {
            if (isDark.matches) faviconTag.href = "/images/dark-icon.svg";
            else faviconTag.href = "/images/light-icon.svg";
        };
        isDark.addEventListener('change', (e) => changeFavicon());
        isDark.addListener((e) => changeFavicon());
        changeFavicon();
    </script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    screens: {
                        '570': '570px',
                        '700': '700px',
                        '1600': '1600px',
                        '2090': '2090px',
                    },
                    transitionDelay: {
                        '50': '50ms',
                        '250': '250ms',
                        '350': '350ms',
                        '600': '600ms',
                        '750': '750ms',
                        '800': '800ms',
                        '900': '900ms',
                        '1100': '1100ms',
                        '1200': '1200ms',
                        '1300': '1300ms',
                        '1400': '1400ms',
                    }
                },
            },
        };
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "My Portfolio",
            "description": "Jake Bogan personal portfolio showcasing my porjects, skills, and contact information."
        }
    </script>
    <style>
        [x-cloak] {
            display: none !important;
        }
        *, *::before, *::after {
            scrollbar-width: none;
            scrollbar-width: 0;
            scrollbar-color: #000000 #252238;
        }
        ::-webkit-scrollbar {
            width: 0;
            background-color: #252238;
        }
        ::-webkit-scrollbar-thumb {
            background: #000000;
        }
        .project-carousel {
            -ms-overflow-style: none; /* Edge, Internet Explorer */
            scrollbar-width: none; /* Firefox */
            overflow-y: scroll;
        }
        .project-carousel::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="smooth-scroll antialiased bg-[#0F1119] h-full" x-data="{ showWarning: true }">
<main class="max-w-7xl mx-auto h-full">
    <div class="template_one flex font-lato" x-data="{ menuStatus: false, showBar: false }">
        <nav :class="{ 'w-[3.625rem]': menuStatus, 'w-0': !menuStatus }" x-cloak="menuStatus" class="mt-10 transition-all duration-300 delay-500 overflow-hidden">
            <div class="relative flex flex-col items-center justify-center">
                <div :class="{ 'visible': menuStatus, 'invisible': !menuStatus }" class="fixed top-12 space-y-8 invisible">
                    <a href="#home" class="block opacity-50 sm:hover:opacity-100 transition-opacity" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-700': menuStatus, 'translate-y-10 opacity-0 delay-350': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M17.5,0A17.5,17.5,0,1,0,35,17.5,17.5,17.5,0,0,0,17.5,0Zm0,8.065,8.545,6.641v12.23H20.166V19.553H14.834v7.383H8.955V14.706Z" fill="#fff"/></svg>
                    </a>
                    <a href="#skills" class="block opacity-50 sm:hover:opacity-100 transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-800': menuStatus, 'translate-y-10 opacity-0 delay-300': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M22.25,15.25h-3.5v-3.5h3.5m0,17.5h-3.5V18.75h3.5M20.5,3A17.5,17.5,0,1,0,38,20.5,17.5,17.5,0,0,0,20.5,3Z" transform="translate(-3 -3)" fill="#fff"/></svg>
                    </a>
                    <a href="#experience" class="block opacity-50 sm:hover:opacity-100 transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-900': menuStatus, 'translate-y-10 opacity-0 delay-250': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M18.512,29.673a11.258,11.258,0,0,1-7.937-3.247l7.937-7.84V7.5a11.087,11.087,0,1,1,0,22.173Z" transform="translate(-1.039 -1.087)" fill="#fff"/><path d="M36.5,19A17.5,17.5,0,1,1,19,1.5,17.5,17.5,0,0,1,36.5,19Zm-3.182,0A14.318,14.318,0,1,1,19,4.682,14.318,14.318,0,0,1,33.318,19Z" transform="translate(-1.5 -1.5)" fill="#fff" fill-rule="evenodd"/></svg>
                    </a>
                    <a href="#projects" class="block opacity-50 sm:hover:opacity-100 transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1000': menuStatus, 'translate-y-10 opacity-0 delay-200': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M17.5,0A17.5,17.5,0,1,0,35,17.5,17.5,17.5,0,0,0,17.5,0Zm5.888,5.467a1.965,1.965,0,0,1,1.387.57l2.912,2.911a2.151,2.151,0,0,1-.121,3.034,2.151,2.151,0,0,1-3.034.122L21.621,9.192a2.151,2.151,0,0,1,.122-3.034,2.308,2.308,0,0,1,1.644-.691Zm-4.8,3.846,5.824,5.823L14.949,24.6,9.125,18.774l9.464-9.461ZM7.614,19.876l6.142,6.143L6.076,27.557l1.538-7.681Z" fill="#fff"/></svg>
                    </a>
                    <a href="#testimonials" class="block opacity-50 sm:hover:opacity-100 transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1100': menuStatus, 'translate-y-10 opacity-0 delay-150': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M17.5,0A17.5,17.5,0,1,0,35,17.5,17.5,17.5,0,0,0,17.5,0ZM16.16,8.238l.752,3.463c-2.2.488-4.229,1.122-4.065,3.583h2.589V24.5h-7.8V15.885c0-6.845,5.028-7.4,8.523-7.648Zm10.448,0,.754,3.463c-2.2.488-4.229,1.122-4.065,3.583h2.589V24.5h-7.8V15.885c0-6.845,5.026-7.4,8.522-7.648Z" fill="#fff"/></svg>
                    </a>
                    <a href="#contact" class="block opacity-50 sm:hover:opacity-100 transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1200': menuStatus, 'translate-y-10 opacity-0 delay-100': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M20.875,3.375a17.5,17.5,0,1,0,17.5,17.5A17.551,17.551,0,0,0,20.875,3.375Zm0,5.251a5.251,5.251,0,1,1-5.251,5.251,5.268,5.268,0,0,1,5.251-5.251Zm0,25.274a12.747,12.747,0,0,1-10.5-5.6c.084-3.5,7-5.426,10.5-5.426S31.291,24.8,31.375,28.3A12.771,12.771,0,0,1,20.875,33.9Z" transform="translate(-3.375 -3.375)" fill="#fff"/></svg>
                    </a>
                    <a href="/wp-admin" class="block opacity-50 sm:hover:opacity-100 transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1300': menuStatus, 'translate-y-10 opacity-0 delay-50': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><g transform="translate(-126 -1019.068)"><circle cx="17.5" cy="17.5" r="17.5" transform="translate(126 1019.068)" fill="#fff"/><path d="M5.621,15.71h6.726a1.121,1.121,0,0,0,1.121-1.121V5.621A1.121,1.121,0,0,0,12.347,4.5H5.621A1.121,1.121,0,0,0,4.5,5.621v8.968A1.121,1.121,0,0,0,5.621,15.71ZM4.5,23.558a1.121,1.121,0,0,0,1.121,1.121h6.726a1.121,1.121,0,0,0,1.121-1.121V19.074a1.121,1.121,0,0,0-1.121-1.121H5.621A1.121,1.121,0,0,0,4.5,19.074Zm11.21,0a1.121,1.121,0,0,0,1.121,1.121h6.726a1.121,1.121,0,0,0,1.121-1.121V15.71a1.121,1.121,0,0,0-1.121-1.121H16.831A1.121,1.121,0,0,0,15.71,15.71Zm1.121-11.21h6.726a1.121,1.121,0,0,0,1.121-1.121V5.621A1.121,1.121,0,0,0,23.558,4.5H16.831A1.121,1.121,0,0,0,15.71,5.621v5.605A1.121,1.121,0,0,0,16.831,12.347Z" transform="translate(128.91 1021.979)" fill="#0f1119"/></g></svg>
                    </a>
                    <span @click="menuStatus = false" class="block opacity-50 sm:hover:opacity-100 transition-opacity cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="transition-all duration-300" :class="{ 'translate-y-0 opacity-100 delay-1400': menuStatus, 'translate-y-10 opacity-0': !menuStatus }" width="35" height="35" viewBox="0 0 35 35"><path d="M20.875,3.375a17.5,17.5,0,1,0,17.5,17.5A17.5,17.5,0,0,0,20.875,3.375Zm4.433,23.836-4.433-4.435L16.442,27.21a1.345,1.345,0,1,1-1.9-1.9l4.433-4.433L14.54,16.44a1.345,1.345,0,1,1,1.9-1.9l4.433,4.433,4.433-4.433a1.344,1.344,0,0,1,1.9,1.9l-4.433,4.436,4.433,4.433a1.351,1.351,0,0,1,0,1.9,1.335,1.335,0,0,1-1.9,0Z" transform="translate(-3.375 -3.375)" fill="#fff"/></svg>
                    </span>
                </div>
            </div>
        </nav>
        <div class="flex-1">
            <section id="home" class="anchor relative flex flex-col-reverse lg:flex-row relative bg-[#1C1F2D] p-[25px] sm:px-[5.3125rem] sm:pt-[5.1875rem] sm:pb-[7.375rem] overflow-hidden bg-no-repeat bg-left-top lg:bg-right-top bg-auto transition-all group" style="background-image: url(<?php echo get_theme_file_uri('/images/background-pattern.svg') ?>);">
                <div class="flex-1">
                    <div class="absolute top-16" role="menu">
                        <button @click="menuStatus = !menuStatus" type="button" aria-label="open menu" class="w-[2.8125rem] cursor-pointer">
                            <span class="sr-only">
                                Open main menu
                            </span>
                            <span class="block" data-aos="fade-right">
                                <div class="bg-white h-[0.1875rem]"></div>
                            </span>
                            <span class="block" data-aos="fade-right" data-aos-delay="50">
                                <div class="bg-white h-[0.1875rem] mt-1.5 w-9 transition-transform duration-300" :class="{ 'translate-x-[9px] delay-200': menuStatus, 'delay-800': !menuStatus }"></div>
                            </span>
                            <span class="block" data-aos="fade-right" data-aos-delay="100">
                                <div class="bg-white h-[0.1875rem] mt-1.5 w-[1.6875rem] transition-transform duration-300" :class="{ 'translate-x-[18px] delay-100': menuStatus, 'delay-700': !menuStatus }"></div>
                            </span>
                            <span class="block" data-aos="fade-right" data-aos-delay="150">
                                <div class="bg-white h-[0.1875rem] mt-1.5 w-4 transition-transform duration-300" :class="{ 'translate-x-[29px]': menuStatus, 'delay-600': !menuStatus }"></div>
                            </span>
                        </button>
                    </div>