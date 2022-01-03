
<section id="facilities" class="departments">

    <div class="container">

        <div class="section-title">
            <h2>EmmanuelHealth Facility</h2>
            <p>{!! $settings['facility_description'] !!}</p>
        </div>

        <div class="row">

                <div class="col-lg-3">

                    <ul class="nav nav-tabs flex-column">
                        @foreach($facilities as $index => $team)
                        <li class="nav-item {{ ($index == 0) ? 'active show':'' }}">
                            <a class="nav-link" data-toggle="tab" href="#tab-{{ $team->id }}">{{$team->title}}</a>
                        </li>
                        @endforeach
                    </ul>

                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        @foreach($facilities as $index => $team)
                        <div class="tab-pane {{ ($index == 0) ? 'active show':'' }}" id="tab-{{ $team->id }}">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>{{$team->title}}</h3>

                                    <p>{{$team->message}}</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{asset('storage/service/'.$team->image)}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

        </div>

    </div>

</section>
