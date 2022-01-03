{{--<section id="intro">--}}
{{--  <div class="intro-container wow fadeIn">--}}
{{--    <h1 class="mb-4 pb-0">{!! $settings['title'] ?? '' !!}</h1>--}}
{{--    <p class="mb-4 pb-0">{{ $settings['subtitle'] ?? '' }}</p>--}}
{{--    @if($settings['youtube_link'])--}}
{{--      <a href="{{ $settings['youtube_link'] }}" class="venobox play-btn mb-4" data-vbtype="video"--}}
{{--        data-autoplay="true"></a>--}}
{{--    @endif--}}
{{--    <a href="#about" class="about-btn scrollto">About The Event</a>--}}
{{--  </div>--}}
{{--</section>--}}

<!-- Google Fonts -->
<section>

<div id="topbar" class="d-none d-lg-flex align-items-center topbar-scrolled">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
            <i class="icofont-phone"></i> +1 5589 55488 55
            <i class="icofont-google-map"></i> A108 Adam Street, NY
        </div>
        <div class="social-links">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="skype"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
        </div>
    </div>
</div>
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <h1>{!! $settings['title'] !!}</h1>
        <h2>{!! $settings['subtitle'] !!}</h2>
{{--        <a href="#about" class="btn-get-started scrollto">Get Started</a>--}}
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>{!! $settings['why_us_title'] !!}</h3>
                        <p>
                            {!! $settings['why_us_description'] !!}
                        </p>
                        <div class="text-center">
                            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
{{--                            <div class="col-xl-4 d-flex align-items-stretch">--}}
{{--                                <div class="icon-box mt-4 mt-xl-0">--}}
{{--                                    <i class="bx bx-receipt"></i>--}}
{{--                                    <h4>Corporis voluptates sit</h4>--}}
{{--                                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Ullamco laboris ladore pan</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>Labore consequatur</h4>
                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section>
</main>
</section>
