<section id="buy-tickets" class="section-with-bg wow fadeInUp" style="visibility: visible">
  <div class="container">

    <div class="section-header">
      <h2>Donations</h2>
      <p>{!! $settings['donate_description'] !!}</p>
    </div>

    <div class="row">
      @foreach($prices as $price)
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">{{ $price->name }}</h5>
              <h6 class="card-price text-center">${{ number_format($price->price) }}</h6>
              <hr>
              <ul class="fa-ul">
                @foreach($amenities as $amenity)
                  <li @if(!$price->amenities->contains($amenity->id))class="text-muted"@endif>
                    <span class="fa-li"><i class="fa fa-{{ $price->amenities->contains($amenity->id) ? 'check' : 'times' }}"></i></span>{{ $amenity->name }}
                  </li>
                @endforeach
              </ul>
              <hr>
              <div class="text-center">
                <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="{{ Str::slug($price->name) }}">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      @endforeach
  </div>

  <!-- Modal Order Form -->
  <div id="buy-ticket-modal" class="modal fade">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Donates</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="#">
            <div class="form-group">
              <input type="text" class="form-control" name="your-name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="your-email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <select id="ticket-type" name="ticket-type" class="form-control" >
                <option value="">-- Select Your Donation Type --</option>
                @foreach($prices as $price)
                  <option value="{{ Str::slug($price->name) }}">{{ $price->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class="btn">Buy Now</button>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</section>
{{--<html>--}}
{{--<style>--}}
{{--    .theme-blue {--}}
{{--        color: #427bb8;--}}
{{--    }--}}
{{--    .theme-orange {--}}
{{--        color: #cc851c;--}}
{{--    }--}}
{{--    .theme-green {--}}
{{--        color: #8ab042;--}}
{{--    }--}}
{{--    .theme-grey {--}}
{{--        color: #666666;--}}
{{--    }--}}
{{--    .theme-white {--}}
{{--        color: #fff;--}}
{{--    }--}}
{{--    .theme-background-blue {--}}
{{--        background-color: #427bb8;--}}
{{--        color: #fff;--}}
{{--    }--}}
{{--    .theme-background-orange {--}}
{{--        background-color: #cc851c;--}}
{{--        color: #fff;--}}
{{--    }--}}
{{--    .theme-background-green {--}}
{{--        background-color: #8ab042;--}}
{{--        color: #fff;--}}
{{--    }--}}
{{--    .theme-background-grey {--}}
{{--        background-color: #666666;--}}
{{--        color: #fff;--}}
{{--    }--}}
{{--    .theme-background-white {--}}
{{--        background-color: #fff;--}}
{{--        color: #4c4c4c;--}}
{{--    }--}}
{{--    .donate-bar {--}}
{{--        padding: 32px 23px 28px;--}}
{{--    }--}}
{{--    .donate-bar > div:first-child {--}}
{{--        font-family: 'Roboto Condensed', sans-serif;--}}
{{--        font-weight: bold;--}}
{{--        border-right: 1px dotted #2a4f76;--}}
{{--        margin-top: 19px;--}}
{{--        font-size: 25px;--}}
{{--        padding: 0;--}}
{{--    }--}}
{{--    .donate-buttons>li>a {--}}
{{--        font-size: 17px;--}}
{{--        font-family: 'Roboto Condensed', sans-serif;--}}
{{--        font-weight: bold;--}}
{{--        position: relative;--}}
{{--        display: block;--}}
{{--        padding: 10px 3px;--}}
{{--        border-radius: 5px;--}}
{{--    }--}}
{{--    .btn-blue-other,--}}
{{--    .btn-blue {--}}
{{--        font-family: 'Roboto Condensed', sans-serif;--}}
{{--        font-weight: bold;--}}
{{--        background-color: #427bb8;--}}
{{--        color: #fff;--}}
{{--        border-radius: 5px;--}}
{{--        border: 0;--}}
{{--        padding: 0;--}}
{{--        width: 75px;--}}
{{--        height: 37px;--}}
{{--        margin-top: 8px;--}}
{{--    }--}}
{{--    .btn-green {--}}
{{--        font-family: 'Roboto Condensed', sans-serif;--}}
{{--        font-weight: bold;--}}
{{--        background-color: #8ab042;--}}
{{--        color: #fff;--}}
{{--        border-radius: 5px;--}}
{{--        border: 0;--}}
{{--        padding: 0;--}}
{{--        width: 114px;--}}
{{--        height: 37px;--}}
{{--        margin-top: 8px;--}}
{{--    }--}}
{{--    #other-input {--}}
{{--        display: none;--}}
{{--    }--}}
{{--    #other-input input {--}}
{{--        position: relative;--}}
{{--        font-weight: bold;--}}
{{--        background-color: #fff;--}}
{{--        color: #427bb8;--}}
{{--        border-radius: 5px;--}}
{{--        border: 0;--}}
{{--        border: 5px solid #427bb8;--}}
{{--        padding: 0 0 3px 15px;--}}
{{--        width: 75px;--}}
{{--        height: 37px;--}}
{{--        margin: 18px 3px 0;--}}
{{--    }--}}
{{--    input[type=number]::-webkit-inner-spin-button,--}}
{{--    input[type=number]::-webkit-outer-spin-button {--}}
{{--        -webkit-appearance: none;--}}
{{--        margin: 0;--}}
{{--    }--}}
{{--    #other-input span {--}}
{{--        font-family: inherit;--}}
{{--        font-weight:bold;--}}
{{--        color: #427bb8;--}}
{{--        position: absolute;--}}
{{--        padding: 23px 12px;--}}
{{--        z-index: 10;--}}
{{--        pointer-events: none;--}}
{{--    }--}}
{{--    .impact {--}}
{{--        font-size: 1.1em;--}}
{{--        font-weight: bold;--}}
{{--        clear: both;--}}
{{--    }--}}
{{--    .nav>li>a:hover, .nav>li>a:focus {--}}
{{--        text-decoration: none;--}}
{{--        background-color: transparent;--}}
{{--    }--}}
{{--    .donate-buttons .active {--}}
{{--        background-color: #fff;--}}
{{--        border: 5px solid #427bb8;--}}
{{--        color: #427bb8;--}}
{{--    }--}}
{{--    .donate-buttons:focus {--}}
{{--        outline: -webkit-focus-ring-color auto 0px;--}}
{{--    }--}}
{{--    .donate-buttons li:last-child {--}}
{{--        font-size: 17px;--}}
{{--        line-height: 37px;--}}
{{--        padding-left: 20px;--}}
{{--        padding-top: 15px;--}}
{{--    }--}}

{{--</style>--}}
{{--<section id="donate" class="faq section-bg">--}}
{{--    <div class="container">--}}
{{--        <div class="section-title">--}}
{{--            <h2>Make A Donation</h2>--}}
{{--            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
{{--        </div>--}}
{{--        <div class="container theme-background-white main-body">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="row donate-bar">--}}
{{--                    <div class="col-md-4 theme-blue">--}}
{{--                        GIVE WHERE NEEDED MOST--}}
{{--                    </div>--}}
{{--                    <div class="col-md-8">--}}
{{--                        <ul class="nav navbar-nav navbar-left donate-buttons" id="donate-buttons">--}}
{{--                            <li><a href="#"><button class="btn-blue active" data-dollars='25' data-impact="">--}}
{{--                                        $25    </button></a></li>--}}
{{--                            <li><a href="#">--}}
{{--                                    <button class="btn-blue" data-dollars='50' data-impact="">--}}
{{--                                        $50</button></a></li>--}}
{{--                            <li><a href="#">--}}
{{--                                    <button class="btn-blue" data-dollars='100' data-impact="">--}}
{{--                                        $100--}}
{{--                                    </button></a></li>--}}
{{--                            <li><a href="#">--}}
{{--                                    <button class="btn-blue" data-dollars='500' data-impact="">--}}
{{--                                        $500--}}
{{--                                    </button></a></li>--}}
{{--                            <li id="other"><a href="#">--}}
{{--                                    <button class="btn-blue-other" data-dollars='other' data-impact="Thank you!">--}}
{{--                                        OTHER--}}
{{--                                    </button>--}}
{{--                                </a></li>--}}
{{--                            <li id="other-input">--}}
{{--                                <span>$</span>--}}
{{--                                <input data-impact="That’s great. Thank you!">--}}
{{--                            </li>--}}
{{--                            <li><a href="#">--}}
{{--                                    <button class="btn-green" data-toggle="modal" data-target="#myModal">--}}
{{--                                        DONATE--}}
{{--                                    </button>--}}
{{--                                </a></li>--}}
{{--                            <li style="display: none;"><a href="#">--}}
{{--                                    LEARN MORE<i class="fa fa-chevron-right margin-left"></i>--}}
{{--                                </a></li>--}}
{{--                        </ul>--}}
{{--                        <p class="impact">--}}
{{--                            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.--}}
{{--                        </p>--}}
{{--                        <!-- Modal -->--}}
{{--                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--                            <div class="modal-dialog">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header well text-center theme-background-blue">--}}
{{--                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>--}}
{{--                                        <h2>You’re Donating:</h2>--}}
{{--                                        <h1 style="font-size: 5.5em; margin-top: 0;">$<span id="price"></span></h1>--}}
{{--                                        <em>Thank you!</em>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <div class="row">--}}
{{--                                            <section class="col-md-12">--}}
{{--                                                <form>--}}
{{--                                                    <fieldset class="col-md-6">--}}
{{--                                                        <legend>--}}
{{--                                                            Your personal info--}}
{{--                                                        </legend>--}}
{{--                                                        <label>Your Name</label>--}}
{{--                                                        <input type="string" class="form-control">--}}
{{--                                                        <label>Your email</label>--}}
{{--                                                        <input type="email" class="form-control">--}}
{{--                                                        <label>Address</label>--}}
{{--                                                        <input type="email" class="form-control">--}}
{{--                                                        <label>City, State, Zip Code</label>--}}
{{--                                                        <input type="email" class="form-control">--}}
{{--                                                    </fieldset>--}}
{{--                                                    <fieldset class="col-md-6">--}}
{{--                                                        <legend>--}}
{{--                                                            Credit Card Information--}}
{{--                                                        </legend>--}}
{{--                                                        <label for="card-number">Credit Card Number</label>--}}
{{--                                                        <input placeholder="1234 5678 9012 3456" pattern="[0-9]*" type="text" class="form-control card-number" id="card-number">--}}
{{--                                                        <label for="card-number">Expiration Date</label>--}}
{{--                                                        <input placeholder="MM/YY" pattern="[0-9]*" type="text" class="form-control card-expiration" id="card-expiration">--}}
{{--                                                        <label for="card-number">CVV Number</label>--}}
{{--                                                        <input placeholder="CVV" pattern="[0-9]*" type="text" class="form-control card-cvv" id="card-cvv">--}}
{{--                                                        <label for="card-number">Billing Zip Code</label>--}}
{{--                                                        <input placeholder="ZIP" pattern="[0-9]*" type="text" class="form-control card-zip" id="card-zip">--}}
{{--                                                    </fieldset>--}}
{{--                                                </form>--}}
{{--                                            </section>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-footer">--}}
{{--                                        <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button>--}}
{{--                                        <button type="button" class="btn-green">CONTINUE</button>--}}
{{--                                    </div>--}}
{{--                                </div><!-- /.modal-content -->--}}
{{--                            </div><!-- /.modal-dialog -->--}}
{{--                        </div><!-- /.modal -->--}}
{{--                    </div>--}}
{{--                </div><!--/.donate-bar-->--}}
{{--            </div><!-- /.col-md-12 -->--}}

{{--        </div>--}}
{{--</section>--}}
{{--</html>--}}

