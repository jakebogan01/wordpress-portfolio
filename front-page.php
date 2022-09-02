<?php get_header(); ?>
<div class="text-[36px] 570:text-[46px] xl:text-[3.375rem] font-black text-white sm:text-gray-400 mr-0 mt-[100px] transition-all"
     data-aos="fade-right" data-aos-delay="300">
    <?php
    while(have_posts()) {
        the_post(); ?>
        <?php
            if('' !== get_post()->post_content) {
                the_content();
            } else {
                echo '<h1 class="leading-[1.1] tracking-wider max-w-[550px] sm:group-hover:text-white transition-colors">HELLO, I’M<br>USER NAME,<br>WEB DEVELOPER</h1>';
            }
        ?>
    <?php }
    ?>
</div>
<div class="flex font-black my-[3.125rem]">
    <dl class="mt-5 grid grid-cols-3 gap-20">
        <?php
            $fieldDelay = 1;
            $fieldResults = array(
                'tools' => array(
                    'Projects' => get_field('projects'),
                    'Clients' => get_field('clients'),
                    'Tools' => get_field('tools'),
                ),
                'skills' => array(
                    'fact_one' => get_field('skill_fact_one'),
                    'fact_two' => get_field('skill_fact_two'),
                    'fact_three' => get_field('skill_fact_three'),
                ),
            );

            foreach($fieldResults['tools'] as $key => $field) {
                $fieldDelay++;
                if($field) {
        ?>
                    <div data-aos="fade-right" data-aos-delay="<?php echo $fieldDelay; ?>00">
                        <dt class="text-[2.125rem] text-[#FFCF7B] tracking-widest">
                            <?php echo $field; ?>
                        </dt>
                        <dd class="mt-1 text-[#B1B7D6] text-[0.8125rem]">
                            <?php echo $key; ?>
                        </dd>
                    </div>
        <?php
                }
            }
        ?>
    </dl>
</div>
<div data-aos="zoom-in-right" data-aos-delay="400">
    <a href="#contact">
        <button type="button" aria-label="call out" class="inline-flex justify-between items-center px-6 py-2 border border-transparent shadow-sm text-base font-black text-white bg-[#4046FF] sm:hover:bg-[#575cff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 max-w-[200px] w-full tracking-widest transition-colors">
            LETS TALK
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </button>
    </a>
</div>
</div>
<aside class="flex-1 flex justify-center sm:justify-start lg:justify-end mt-28 lg:mt-10" data-aos="zoom-in" data-aos-duration="700">
    <div class="relative rounded-full  bg-red-300 w-[255px] h-[255px] 570:w-[351px] 570:h-[351px] lg:w-[440px] lg:h-[440px] xl:w-[481px] xl:h-[481px] transition-all" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659); box-shadow: 0 0 4.125rem #FFE26B;">
        <?php
            if(has_post_thumbnail( get_the_ID() )) {
        ?>
                <img class="inline-block absolute -left-3 -top-5 570:-left-4 570:-top-7 lg:-top-8 lg:-left-5 xl:-top-9 xl:-left-6" src="<?php the_post_thumbnail_url(); ?>" alt="Default Avatar Image" loading="eager" data-aos="zoom-in" data-aos-delay="150">
        <?php
            } else {
        ?>
                <img style="border-radius: 50%;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);" src="<?php echo get_theme_file_uri('/images/missing-image.jpg') ?>" alt="Default Avatar Image" loading="eager" data-aos="zoom-in" data-aos-delay="150">
        <?php
            }
        ?>
    </div>
</aside>
</section>
<section id="skills" class="anchor flex flex-col relative bg-[#1C1F2D] pt-12 group">
    <div class="pb-0 relative mx-auto py-12 max-w-7xl sm:px-[85px] lg:pt-40 z-20">
        <div class="space-y-12 flex flex-col-reverse lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
            <div class="lg:col-span-2 mt-10 sm:mt-24">
                <ul role="list" class="sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:gap-x-8">
                    <?php
                        $homepageSkills = new WP_Query(array(
                            'posts_per_page' => 4,
                            'post_type' => 'skill',
                            'order' => 'ASC',
                        ));

                        while($homepageSkills->have_posts()) {
                            $homepageSkills->the_post();
                            if($homepageSkills->current_post % 2 == 0) {
                    ?>
                                <li class="bg-[#4046FF] sm:bg-[#555C7E] mt-0 sm:mt-12 card relative sm:hover:bg-[#4046FF] h-[300px] p-[30px] sm:transition-all" data-aos="zoom-in-right" data-aos-delay="100">
                                    <div class="flex justify-center pb-4">
                                        <div class="sm:absolute top-0 sm:left-3/4 sm:-translate-x-1/2 sm:-translate-y-1/2 flex items-center justify-center text-[#4046FF] w-[65px] h-[65px] rounded-full sm:transition-all" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
                                            <?php echo get_field('icon'); ?>
                                        </div>
                                    </div>
                                    <div class="space-y-4 text-base font-bold leading-loose text-white text-center sm:text-left">
                                        <div class="text-white text-base font-bold leading-loose space-y-1">
                                            <h3 class="text-2xl">
                                                <?php the_title(); ?>
                                            </h3>
                                        </div>
                                        <div class="max-w-[382px] sm:max-w-none mx-auto text-[#B1B7D6] text-base font-bold leading-loose overflow-hidden">
                                            <p>
                                                <?php the_content(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                    <?php
                            } else {
                    ?>
                                <li class="bg-[#555C7E] card relative sm:hover:bg-[#4046FF] h-[300px] p-[30px] sm:transition-all" data-aos="zoom-in-left" data-aos-delay="">
                                    <div class="flex justify-center pb-4">
                                        <div class="sm:absolute top-0 sm:left-3/4 sm:-translate-x-1/2 sm:-translate-y-1/2 flex items-center justify-center text-[#4046FF] w-[65px] h-[65px] rounded-full sm:transition-all" style="background-image: linear-gradient(to bottom right, #FFD279, #FFF659);">
                                            <?php echo get_field('icon'); ?>
                                        </div>
                                    </div>
                                    <div class="space-y-4 text-base font-bold leading-loose text-white text-center sm:text-left">
                                        <div class="text-white text-base font-bold leading-loose space-y-1">
                                            <h3 class="text-2xl">
                                                <?php the_title(); ?>
                                            </h3>
                                        </div>
                                        <div class="max-w-[382px] sm:max-w-none mx-auto text-[#B1B7D6] text-base font-bold leading-loose overflow-hidden">
                                            <p>
                                                <?php the_content(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                    <?php
                            }
                        } wp_reset_postdata();
                    ?>
                </ul>
            </div>
            <aside class="space-y-5 sm:space-y-4 px-[25px] pb-[65px] sm:pb-0 sm:px-0 text-[#B1B7D6] font-bold text-base leading-loose">
                <div data-aos="fade-left" data-aos-delay="200" data-aos-anchor-placement="bottom-bottom">
                    <h2 class="text-white sm:text-gray-400 text-[30px] sm:text-[2.8rem] pb-4 font-black tracking-wider leading-none sm:transition-all sm:group-hover:text-white">
                        TOP SKILLS
                    </h2>
                    <p class="text-[#B1B7D6] text-base font-bold leading-loose overflow-hidden">
                        <?php echo get_field('skill_intro'); ?>
                    </p>
                </div>
                <ul role="list" class="pt-8 space-y-7">
                    <?php
                        $skillDelay = 1;

                        foreach($fieldResults['skills'] as $field) {
                            $skillDelay++;
                    ?>
                            <li class="flex items-center">
                                <span data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-delay="<?php echo $skillDelay; ?>00">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="min-w-[1.3125rem] w-[1.3125rem] h-[1.3125rem] mr-5" viewBox="0 0 21 21"><circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b"/><circle cx="4.5" cy="4.5" r="4.5" fill="#1c1f2d" transform="translate(6 6)"/></svg>
                                </span>
                                <span data-aos="fade-left" data-aos-anchor-placement="bottom-bottom" data-aos-delay="100">
                                    <?php echo $field; ?>
                                </span>
                            </li>
                    <?php
                        }
                    ?>
                </ul>
            </aside>
        </div>
    </div>
</section>
<?php
    if('' !== get_post()->post_content) {
?>
        <section id="experience" class="anchor relative bg-[#1C1F2D] px-[25px] sm:px-[5.3125rem] pb-40 pt-12 sm:py-40 text-[#B1B7D6] text-base leading-loose overflow-hidden bg-no-repeat bg-bottom lg:bg-right-bottom bg-auto group" style="background-image: url(<?php echo get_theme_file_uri('/images/background-pattern-2.svg') ?>);">
            <h2 class="mb-8 text-white sm:text-gray-400 text-[30px] sm:text-[2.8rem] font-black tracking-wider leading-none mb-16 sm:transition-all sm:group-hover:text-white" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom">
                EXPERIENCES
            </h2>
            <div class="hidden lg:block absolute left-[49.85%] border-2 border-[#363A4D] h-full mt-12" data-aos="fade-up"></div>

                <?php
                    $today = date('Ymd');
                    $tally = 0;

                    $homepageEvents = new WP_Query(array(
                        'posts_per_page' => 10,
                        'post_type' => 'event',
                        'meta_key' => 'event_date',
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => 'event_date',
                                'compare' => '<=',
                                'value' => $today,
                                'type' => 'numeric'
                            )
                        )
                    ));

                    while($homepageEvents->have_posts()) {
                        $homepageEvents->the_post();
                        $eventDate = new DateTime(get_field('event_date'));
                        $tally++;

                        if($homepageEvents->current_post % 2 == 0 && $tally === 1) {
                ?>
                            <div class="pb-12 sm:pb-8 lg:pb-0 lg:mb-8 ml-[10px] sm:ml-0 flex justify-between lg:flex-row-reverse items-center w-full left-timeline border-l-4 border-[#363A4D] lg:border-none">
                                <div class="hidden lg:block order-1 w-5/12"></div>
                                <div class="z-20 flex items-center order-1 shadow-xl w-8 h-8 rounded-full">
                                    <div data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" data-aos-delay="100">
                                        <div class="-ml-[13px] lg:mx-auto -translate-y-[88px] sm:-translate-y-[28px] lg:translate-x-[5px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="69" viewBox="0 0 21 69">
                                                <g transform="translate(0 48)">
                                                    <rect width="10" height="50" transform="translate(5 -48)"
                                                          class="fill-current text-[#1c1f2d]"/>
                                                    <circle cx="10.5" cy="10.5" r="10.5" fill="#ffcf7b"/>
                                                    <circle cx="4.5" cy="4.5" r="4.5" transform="translate(6 6)" fill="#1c1f2d"/>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-1 w-full lg:w-5/12 sm:transition-all">
                                    <div class="hidden sm:flex flex-row-reverse lg:flex-row">
                                        <div class="flex-1" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="175">
                                            <h4 class="mt-2 text-2xl text-white font-bold lg:text-right sm:transition-all">
                                                <?php the_title(); ?>
                                            </h4>
                                        </div>
                                        <div class="min-w-[152px]"></div>
                                    </div>
                                    <div class="flex flex-col-reverse sm:flex-row-reverse lg:flex-row sm:transition-all">
                                        <div class="flex-1 pt-4" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="175">
                                            <h4 class="sm:hidden mt-2 text-2xl text-white font-bold lg:text-right">
                                                <?php the_title(); ?>
                                            </h4>
                                            <?php the_content(); ?>
                                        </div>
                                        <div class="flex" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="100">
                                            <div class="pr-[3.125rem] lg:pr-0 w-[152px] -mt-1.5 lg:text-right sm:transition-all">
                                                <span class="block font-black text-[2.75rem] text-[#FFCF7B] leading-none">
                                                    <?php echo $eventDate->format('Y') ?>
                                                </span>
                                                <span class="block text-sm font-bold text-base">
                                                    <?php echo $eventDate->format('F') ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                        } else if($homepageEvents->current_post % 2 == 1 && $tally !== 1) {
                            get_template_part('template-parts/content-even', 'event');
                        } else {
                            get_template_part('template-parts/content-odd', 'event');
                        }
                    } wp_reset_postdata();
                ?>
        </section>
<?php
    }
?>
<section id="projects" class="template_one_projects anchor flex relative bg-[#1C1F2D] overflow-hidden group">
    <div x-data="{
            skip: 1,
            atBeginning: false,
            atEnd: false,
            next() {
                this.to((current, offset) => current + (offset * this.skip))
            },
            prev() {
                this.to((current, offset) => current - (offset * this.skip))
            },
            to(strategy) {
                let slider = this.$refs.slider
                let current = slider.scrollLeft
                let offset = slider.firstElementChild.getBoundingClientRect().width
                slider.scrollTo({ left: strategy(current, offset), behavior: 'smooth' })
            },
            focusableWhenVisible: {
                'x-intersect:enter'() {
                    this.$el.removeAttribute('tabindex')
                },
                'x-intersect:leave'() {
                    this.$el.setAttribute('tabindex', '-1')
                },
            },
            disableNextAndPreviousButtons: {
                'x-intersect:enter.threshold.05'() {
                    let slideEls = this.$el.parentElement.children

                    // If this is the first slide.
                    if (slideEls[0] === this.$el) {
                        this.atBeginning = true
                    // If this is the last slide.
                    } else if (slideEls[slideEls.length-1] === this.$el) {
                        this.atEnd = true
                    }
                },
                'x-intersect:leave.threshold.05'() {
                    let slideEls = this.$el.parentElement.children

                    // If this is the first slide.
                    if (slideEls[0] === this.$el) {
                        this.atBeginning = false
                    // If this is the last slide.
                    } else if (slideEls[slideEls.length-1] === this.$el) {
                        this.atEnd = false
                    }
                },
            },
        }"
         class="flex flex-col w-full">
        <div x-on:keydown.right="next" x-on:keydown.left="prev" tabindex="0" role="region" aria-labelledby="carousel-label" class="relative">
            <h2 id="carousel-label" class="sr-only" hidden>
                Projects
            </h2>
            <span id="carousel-content-label tracking-wider" class="sr-only" hidden>
                My Projects
            </span>
            <h2 data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" class="absolute pl-[25px] sm:pl-16 mb-8 mt-12 text-white sm:text-gray-400 text-[30px] sm:text-[2.8rem] font-black tracking-wider z-20 sm:group-hover:text-white sm:Ztransition-all">
                MY WORK
            </h2>
            <ul x-ref="slider" tabindex="0" role="listbox" aria-labelledby="carousel-content-label" class="project-carousel flex w-full overflow-x-scroll snap-x snap-mandatory max-h-[550px] min-h-[550px] h-full">

                <?php
                    $homepageProjects = new WP_Query(array(
                        'posts_per_page' => 6,
                        'post_type' => 'project',
                        'order' => 'ASC',
                    ));

                    while($homepageProjects->have_posts()) {
                        $homepageProjects->the_post();
                ?>
                        <li x-bind="disableNextAndPreviousButtons" class="relative snap-start w-full shrink-0 flex flex-col items-center justify-center bg-no-repeat bg-center bg-cover" role="option" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                            <div class="absolute top-0 left-0 right-0 bottom-0 text-white leading-loose pt-32 px-[25px] sm:pl-16" style="background-color: rgba(0,0,0,0.5)">
                                <h3 class="flex items-center font-bold text-[23px] mb-6 opacity-70" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="50">
                                    <?php the_title(); ?>
                                </h3>
                                <p class="font-bold text-base sm:max-w-[300px] leading-loose mb-6" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="100">
                                    <?php
                                        if (has_excerpt()) {
                                            echo get_the_excerpt();
                                        } else {
                                            echo wp_trim_words(get_the_content(), 18);
                                        }
                                    ?>
                                </p>
                                <?php
                                    if(get_field('project_app_url')) {
                                ?>
                                        <a href="<?php echo get_field('project_app_url'); ?>" class="block" target="_blank">
                                            <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="150">
                                                VIEW PROJECT
                                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                                            </button>
                                        </a>
                                <?php
                                    }
                                ?>
                                <a href="<?php echo get_field('project_code_url'); ?>" class="block" target="_blank">
                                    <button type="button" class="inline-flex justify-between items-center text-base font-bold text-white" data-aos="fade-right" data-aos-anchor-placement="bottom-bottom" data-aos-delay="200">
                                        VIEW CODE
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-3 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                                    </button>
                                </a>
                            </div>
                        </li>
                <?php
                    } wp_reset_postdata();
                ?>
            </ul>
            <div class="flex justify-between">
                <div x-on:click="prev" :aria-disabled="atBeginning" :tabindex="atEnd ? -1 : 0" :class="{ 'opacity-50 cursor-not-allowed': atBeginning }" class="flex-1 flex items-center bg-[#2B3046] py-[35px] pl-[82px] group cursor-pointer" data-aos="fade-right" data-aos-delay="250" data-aos-anchor-placement="top-bottom">
                    <button aria-label="back" :class="{ 'opacity-50 cursor-not-allowed': atBeginning }" class="flex justify-center items-center bg-[#4046FF] w-[48px] h-[48px] sm:group-hover:bg-[#575cff]" type="button">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                        </span>
                        <span class="sr-only">
                            Skip to previous slide page
                        </span>
                    </button>
                    <span class="hidden md:block ml-16 text-[#656A84] text-base font-black sm:group-hover:text-[#B1B7D6]">
                        PREVIOUS
                    </span>
                </div>
                <div x-on:click="next" :aria-disabled="atEnd" :tabindex="atEnd ? -1 : 0" :class="{ 'opacity-50 cursor-not-allowed': atEnd }" class="flex-1 flex justify-end items-center bg-[#272C41] py-[35px] pr-[82px] group cursor-pointer" data-aos="fade-left" data-aos-delay="250" data-aos-anchor-placement="top-bottom">
                    <span class="hidden md:block mr-16 text-[#656A84] text-base font-black sm:group-hover:text-[#B1B7D6]">
                        NEXT
                    </span>
                    <button aria-label="next" :class="{ 'opacity-50 cursor-not-allowed': atEnd }" class="flex justify-center items-center bg-[#4046FF] w-[48px] h-[48px] sm:group-hover:bg-[#575cff]" type="button">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </span>
                        <span class="sr-only">
                            Skip to next slide page
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="testimonials" class="testimonials anchor flex flex-col relative py-28 bg-[#1C1F2D] group">
    <img class="absolute bottom-24 left-0 z-10" src="<?php echo get_theme_file_uri('/images/background-pattern.svg') ?>" role="presentation" alt="decoration" loading="eager">
    <div class="relative mx-auto py-12 px-[25px] max-w-7xl sm:px-[85px] lg:py-32 z-20">
        <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
            <aside data-aos="fade-right" class="space-y-5 sm:space-y-4">
                <h2 class="text-white sm:text-gray-400 text-[30px] sm:text-[2.8rem] font-black tracking-wider leading-none sm:transition-all sm:group-hover:text-white">
                    TRIBUTES
                </h2>
                <p class="text-[#B1B7D6] text-base font-bold leading-loose">
                    <?php echo get_field('testimonial_intro'); ?>
                </p>
            </aside>
            <div class="lg:col-span-2">
                <ul role="list" class="sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:gap-x-8">

                    <?php
                        $homepageTestimonials = new WP_Query(array(
                            'posts_per_page' => 4,
                            'post_type' => 'testimonial',
                            'order' => 'ASC',
                        ));

                        while($homepageTestimonials->have_posts()) {
                            $homepageTestimonials->the_post();
                            if($homepageTestimonials->current_post % 2 == 0) {
                    ?>
                                <li data-aos="fade-up" data-aos-delay="100" class="card">
                                    <div class="space-y-4">
                                        <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                                            <img class="card_image object-cover shadow-lg rounded-lg transform sm:transition duration-300" src="<?php the_post_thumbnail_url(); ?>" alt="" loading="eager">
                                        </div>
                                        <div class="text-white text-base font-bold leading-loose space-y-1">
                                            <h3 class="text-xl block flex flex-row">
                                                <?php the_title(); ?>
                                                <ul role="list" class="flex items-center pl-3 space-x-1.5">
                                                    <li>
                                                        <a href="<?php echo get_field('linkedin_url'); ?>" class="text-yellow-200 sm:hover:text-yellow-300" target="_blank">
                                                    <span class="sr-only">
                                                        LinkedIn
                                                    </span>
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"/></svg>
                                                        </a>
                                                    </li>
                                                    <?php
                                                    if(get_field('facebook_url')) {
                                                        ?>
                                                        <li>
                                                            <a href="<?php echo get_field('facebook_url'); ?>" class="text-yellow-200 sm:hover:text-yellow-300" target="_blank">
                                                            <span class="sr-only">
                                                                Facebook
                                                            </span>
                                                                <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M18.893 0a1.065 1.065 0 0 1 .781.326 1.065 1.065 0 0 1 .326.781v17.786A1.112 1.112 0 0 1 18.893 20H13.8v-7.747h2.591l.391-3.021H13.8V7.3a1.668 1.668 0 0 1 .306-1.094 1.52 1.52 0 0 1 1.194-.36l1.588-.013v-2.7a17.453 17.453 0 0 0-2.318-.117 3.868 3.868 0 0 0-2.832 1.042 3.937 3.937 0 0 0-1.061 2.943v2.231h-2.6v3.021h2.6V20h-9.57a1.065 1.065 0 0 1-.781-.326A1.065 1.065 0 0 1 0 18.893V1.107A1.065 1.065 0 0 1 .326.326 1.065 1.065 0 0 1 1.107 0Z"/></svg>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </h3>
                                        </div>
                                        <div class="text-[#B1B7D6] text-base font-bold leading-loose">
                                            <p>
                                                <?php the_content(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                    <?php
                            } else {
                    ?>
                                <li data-aos="fade-up" data-aos-delay="200" class="card mt-12 sm:mt-[100px] sm:transition-all">
                                    <div class="space-y-4">
                                        <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                                            <img class="card_image object-cover shadow-lg rounded-lg transform sm:transition duration-300" src="<?php the_post_thumbnail_url(); ?>" alt="" loading="eager">
                                        </div>
                                        <div class="text-white text-base font-bold leading-loose space-y-1">
                                            <h3 class="text-xl block flex flex-row">
                                                <?php the_title(); ?>
                                                <ul role="list" class="flex items-center pl-3 space-x-1.5">
                                                    <li>
                                                        <a href="<?php echo get_field('linkedin_url'); ?>" class="text-yellow-200 sm:hover:text-yellow-300" target="_blank">
                                                    <span class="sr-only">
                                                        LinkedIn
                                                    </span>
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"/></svg>
                                                        </a>
                                                    </li>
                                                    <?php
                                                    if(get_field('facebook_url')) {
                                                        ?>
                                                        <li>
                                                            <a href="<?php echo get_field('facebook_url'); ?>" class="text-yellow-200 sm:hover:text-yellow-300" target="_blank">
                                                            <span class="sr-only">
                                                                Facebook
                                                            </span>
                                                                <svg class="w-[18px] h-[18px]" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M18.893 0a1.065 1.065 0 0 1 .781.326 1.065 1.065 0 0 1 .326.781v17.786A1.112 1.112 0 0 1 18.893 20H13.8v-7.747h2.591l.391-3.021H13.8V7.3a1.668 1.668 0 0 1 .306-1.094 1.52 1.52 0 0 1 1.194-.36l1.588-.013v-2.7a17.453 17.453 0 0 0-2.318-.117 3.868 3.868 0 0 0-2.832 1.042 3.937 3.937 0 0 0-1.061 2.943v2.231h-2.6v3.021h2.6V20h-9.57a1.065 1.065 0 0 1-.781-.326A1.065 1.065 0 0 1 0 18.893V1.107A1.065 1.065 0 0 1 .326.326 1.065 1.065 0 0 1 1.107 0Z"/></svg>
                                                            </a>
                                                        </li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </h3>
                                        </div>
                                        <div class="text-[#B1B7D6] text-base font-bold leading-loose">
                                            <p>
                                                <?php the_content(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                    <?php
                            }
                        } wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
