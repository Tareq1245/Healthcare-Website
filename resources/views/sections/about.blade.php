
<section id="abouts" class="about">
    <div class="container-fluid">

        <div class="row">

            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            </div>

            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">

                {{--                    @if(($about->title->count())>=2)--}}

                <h3>{!! $settings['about_title'] !!}
                </h3>
                <p>{!! $settings['about_description'] !!}</p>
                @foreach($hotels as $hotel)
                    <div class="icon-box">
                        <div class="icon"><i class="{{ $hotel->address }}" ></i></div>
                        <h4 class="title"><a href="">{{$hotel->name}}</a></h4>
                        <p class="description">{{$hotel->description}}</p>
                    </div>
                @endforeach

            </div>

        </div>


    </div>
</section>
