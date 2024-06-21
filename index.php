<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
<body>
    @include('layouts.preloader')
    @include('layouts.navbar')
    <!-- Body start -->
    <div class="th-hero-wrapper hero-1" id="hero" data-bg-src="../assets/img/hero/hero_bg_1_2.jpg">
        <div class="swiper th-slider" id="heroSlide1" data-slider-options='{"effect":"fade"}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title" data-ani="slideinup" data-ani-delay="0.2s"><img src="../assets/img/theme-img/title_icon.svg" alt="shape">100% Quality Foods</span>
                                <h1 class="hero-title">
                                    <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                        <img class="title-img" src="../assets/img/hero/hero_title_shape.svg" alt="icon">
                                        Natural <span class="text-theme">Fruits</span> </span>
                                    <span class="title2" data-ani="slideinup" data-ani-delay="0.5s">Vegetable</span>
                                </h1>
                                <a href="about.html" class="th-btn" data-ani="slideinup" data-ani-delay="0.7s">Discover More<i class="fas fa-chevrons-right ms-2"></i></a>
                            </div>
                        </div>
                        <div class="hero-img" data-ani="slideinright" data-ani-delay="0.5s">
                            <img src="../assets/img/hero/hero_1_1.png" alt="Image">
                        </div>
                        <div class="hero-shape1" data-ani="slideinup" data-ani-delay="0.5s">
                            <img src="../assets/img/hero/hero_shape_1_1.png" alt="shape">
                        </div>
                        <div class="hero-shape2" data-ani="slideindown" data-ani-delay="0.6s">
                            <img src="../assets/img/hero/hero_shape_1_2.png" alt="shape">
                        </div>
                        <div class="hero-shape3" data-ani="slideinleft" data-ani-delay="0.7s">
                            <img src="../assets/img/hero/hero_shape_1_3.png" alt="shape">
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title" data-ani="slideinup" data-ani-delay="0.2s"><img src="../assets/img/theme-img/title_icon.svg" alt="shape">100% Organic Foods</span>
                                <h1 class="hero-title">
                                    <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                        <img class="title-img" src="../assets/img/hero/hero_title_shape.svg" alt="icon">
                                        Organic <span class="text-theme">Fruits</span> </span>
                                    <span class="title2" data-ani="slideinup" data-ani-delay="0.5s">For Health</span>
                                </h1>
                                <a href="about.html" class="th-btn" data-ani="slideinup" data-ani-delay="0.7s">Discover More<i class="fas fa-chevrons-right ms-2"></i></a>
                            </div>
                        </div>
                        <div class="hero-img" data-ani="slideinright" data-ani-delay="0.5s">
                            <img src="../assets/img/hero/hero_1_2.png" alt="Image">
                        </div>
                        <div class="hero-shape1" data-ani="slideinup" data-ani-delay="0.5s">
                            <img src="../assets/img/hero/hero_shape_1_1.png" alt="shape">
                        </div>
                        <div class="hero-shape2" data-ani="slideindown" data-ani-delay="0.6s">
                            <img src="../assets/img/hero/hero_shape_1_2.png" alt="shape">
                        </div>
                        <div class="hero-shape3" data-ani="slideinleft" data-ani-delay="0.7s">
                            <img src="../assets/img/hero/hero_shape_1_3.png" alt="shape">
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title" data-ani="slideinup" data-ani-delay="0.2s"><img src="../assets/img/theme-img/title_icon.svg" alt="shape">100% Fresh Foods</span>
                                <h1 class="hero-title">
                                    <span class="title1" data-ani="slideinup" data-ani-delay="0.4s">
                                        <img class="title-img" src="../assets/img/hero/hero_title_shape.svg" alt="icon">
                                        Quality <span class="text-theme">Fruits</span> </span>
                                    <span class="title2" data-ani="slideinup" data-ani-delay="0.5s">Farming</span>
                                </h1>
                                <a href="about.html" class="th-btn" data-ani="slideinup" data-ani-delay="0.7s">Discover More<i class="fas fa-chevrons-right ms-2"></i></a>
                            </div>
                        </div>
                        <div class="hero-img" data-ani="slideinright" data-ani-delay="0.5s">
                            <img src="../assets/img/hero/hero_1_3.png" alt="Image">
                        </div>
                        <div class="hero-shape1" data-ani="slideinup" data-ani-delay="0.5s">
                            <img src="../assets/img/hero/hero_shape_1_1.png" alt="shape">
                        </div>
                        <div class="hero-shape2" data-ani="slideindown" data-ani-delay="0.6s">
                            <img src="../assets/img/hero/hero_shape_1_2.png" alt="shape">
                        </div>
                        <div class="hero-shape3" data-ani="slideinleft" data-ani-delay="0.7s">
                            <img src="../assets/img/hero/hero_shape_1_3.png" alt="shape">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="hero-shape4">
            <img class="svg-img" src="../assets/img/hero/hero_shape_1_4.svg" alt="shape">
        </div>
    </div>
    @include('layouts.footer')
    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    @include('layouts.script')
</body>
</html>