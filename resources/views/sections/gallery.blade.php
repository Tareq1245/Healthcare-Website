<section id="gallery" class="wow fadeInUp" style="visibility: visible;animation-name: fadeInUp;">

    <div class="container">
        <div class="section-header">
            <h2>Gallery</h2>
            <p>Check our gallery from the recent events</p>
        </div>
    </div>

        <div class="owl-carousel gallery-carousel owl-loaded owl-drag">
            @foreach($galleries as $gallery)
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transition: all 0s ease 0s; width: 5038px; transform: translate3d(-839px, 0px, 0px);">
                    @foreach($gallery->photos as $photo)
                    <div class="owl-item cloned" style="width: 279.84px;">
                <a href="{{ $photo->getUrl() }}" class="venobox" data-gall="gallery-carousel"><img src="{{ $photo->getUrl() }}" alt="{{ $gallery->name }}" title="{{ $gallery->name }}"></a>
            </div>
                    @endforeach
                </div>
            </div>
            @endforeach


            <div class="owl-nav disabled">
                <div class="owl-prev">prev</div>
                <div class="owl-next">next</div>
            </div>
            <div class="owl-dots">
                <div class="owl-dot active">
                    <span></span>
                </div>
                <div class="owl-dot">
                    <span></span>
                </div>
                <div class="owl-dot">
                    <span></span>
                </div>
                <div class="owl-dot">
                    <span></span>
                </div><div class="owl-dot">
                    <span></span>
                </div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div>
            </div>
        </div>


</section>
