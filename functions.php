<?php

add_action('wp_enqueue_scripts', 'portfolio_files');
add_action('after_setup_theme', 'portfolio_features');

function portfolio_files(): void
{
    wp_enqueue_style('googleapis', '//fonts.googleapis.com');
    wp_enqueue_style('gstatic', '//fonts.gstatic.com');
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap');
    wp_enqueue_style('aos@2.3.1', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_script('smoothscroll', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.js');
    wp_enqueue_script('alpinejs@3.x.x', 'https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js');
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com');
    wp_enqueue_script('tailwindcss-plugin', 'https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp');
    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
}

function portfolio_features(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}