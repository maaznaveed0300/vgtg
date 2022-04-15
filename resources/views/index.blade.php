@extends('layouts.app')
@section('content')
<div role="main" class="main">
    <div class="container ">
        <div class="row text-center mt-5">
            <div class="owl-carousel owl-theme" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 3}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                <div>
                    {{-- <img class="img-fluid" src="img/logos/logo-1.png" alt=""> --}}
                    <h6 class="text-center font-weight-bold" style="color: red">Organize a group virtual get-to-gather</h6>
                </div>
                <div>
                    {{-- <img class="img-fluid" src="img/logos/logo-2.png" alt=""> --}}
                    <h6 class="text-center font-weight-bold" style="color: red">Arrange a concert or program with your favorite artist</h6>
                </div>
                <div>
                    {{-- <img class="img-fluid" src="img/logos/logo-3.png" alt=""> --}}
                    <h6 class="text-center font-weight-bold" style="color: red">Meet with anyone anywhere on demand</h6>
                </div>
                <div>
                    {{-- <img class="img-fluid" src="img/logos/logo-4.png" alt=""> --}}
                    <h6 class="text-center font-weight-bold" style="color: red">Virtual Events to Bridge the social distancing Gap</h6>
                </div>
                <div>
                    {{-- <img class="img-fluid" src="img/logos/logo-5.png" alt=""> --}}
                    <h6 class="text-center font-weight-bold" style="color: red">Arrange a Live show with your favorite performer</h6>
                </div>

            </div>
        </div>
        <div class="slider-container rev_slider_wrapper" style="height: 600px;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider
                data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                <ul>
                    <li data-transition="fade" class="">
                        <img src="vgtgimg/img1.jpg" alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                    </li>
                    <li data-transition="fade" class="">
                        <img src="vgtgimg/img2.jpg" alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                    </li>
                    <li data-transition="fade" class="">
                        <img src="vgtgimg/img3.jpg" alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                    </li>
                    <li data-transition="fade" class="">
                        <img src="vgtgimg/img4.jpg" alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                    </li>
                    <li data-transition="fade" class="">
                        <img src="vgtgimg/img5.jpg" alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                    </li>
                    <li data-transition="fade" class="">
                        <img src="vgtgimg/img6.jpg" alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br>

    <div class="section">
        <div class="container" id="artist">
            <div class="row text-center pb-5">
                <div class="col-md-9 mx-md-auto">
                    <div class="overflow-hidden mb-3">
                        <h1 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0" >
                            <span>Virtual Get-To-Gather Resources</span>

                        </h1>
                    </div>
                    <div class="divider divider-small divider-small-center">
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row mt-3 py-3 ">
                @foreach ($artists as $item)
                    <div class="col-lg-3 col-sm-6 mt-3">
                        <a href="#" onclick="clickme({{ $item->id }})" data-toggle="modal" data-target="#artistdetail" data-id="">
                            <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded">
                                <span class="thumb-info-wrapper" style="height: 300px;background-image:url('{{ asset('saved_images/'.$item->profile_picture) }}');background-size:  cover;background-position: center">
                                    {{-- <img src="{{ asset('saved_images/'.$item->profile_picture) }}"> --}}
                                        {{-- <img src="vgtgimg/karam.jpg" style="" class="img-fluid img-thumbnail" alt=""> --}}

                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">{{ $item['name'] }}</span>
                                        <span class="thumb-info-type">{{ $item['expertise'] }}</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container py-5" id="aboutus">
            <div class="row text-center pb-5">
                <div class="col-md-9 mx-md-auto">
                    <div class="overflow-hidden mb-3">
                        <h1 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0" >
                            <span>Founder's Message</span>
                        </h1>
                    </div>
                    <div class="divider divider-small divider-small-center">
                        <hr>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="overflow-hidden">
                            <h2 class="text-color-dark text-center text-8 mb-0 pt-0 mt-0 "><span style="color: red">About Us</span></h2>
                        </div>
                        <p class="lead text-center">We are living in a global village; the need to interact with anyone anywhere on-demand is increasing, technology is bridging distances; Virtual Get-To-Gather (VgTg.online) offers a platform for all sorts of (virtual) gathering; the opportunity of celebrities, artists and literary figures to meet with their fans globally in groups or individually on-demand, friends can request and invite other friends for an informal (virtual) get to gather.</p>
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        Expertise
                                    </td>
                                    <td>
                                        Presenter
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Introduction
                                    </td>
                                    <td>
                                        VgTg.online website has been created to hold virtual entertainment events watched by anyone globally; if you are an artists, poets, musicians, performers VgTg allows you to meet with your fans; wherever you live you can hold your own virtual entertainment event for your fans; load your profile on www.vgtg.online today to provide a chance to your fans to meet with you
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Promo Video
                                    </td>
                                    <td>
                                        <video width="320" height="240">
                                            <source src="vgtgvid/video_vgtg1.mp4" type="video/mp4">
                                            {{-- <source src="movie.ogg" type="video/ogg"> --}}
                                          Your browser does not support the video tag.
                                          </video>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Video
                                    </td>
                                    <td>
                                        <video width="320" height="240">
                                            <source src="vgtgvid/video_vgtg2.mp4" type="video/mp4">
                                            {{-- <source src="movie.ogg" type="video/ogg"> --}}
                                          Your browser does not support the video tag.
                                          </video>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="section-bg-white" id="faqs">
        <div class="container">
            <div class="row text-center pb-5">
                <div class="col-md-9 mx-md-auto">
                    <div class="overflow-hidden mb-3">
                        <h1 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0" >
                            <span>Frequently Ask Question</span>

                        </h1>
                    </div>
                    <div class="divider divider-small divider-small-center">
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row py-4 mb-2">
                <div class="col">
                    <div class="col">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple">
                                    <ul class="nav nav-tabs col-sm-3">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#tabsNavigationVertSimple1" data-toggle="tab">How can a I load my profile on VgTg.online?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tabsNavigationVertSimple2" data-toggle="tab">Is there an easier and faster way to upload my profile?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tabsNavigationVertSimple3" data-toggle="tab">How can anyone request a virtual get-to-gather with their favorite Celebrities, Artists, Performers or Poets?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tabsNavigationVertSimple4" data-toggle="tab">How long does it take to confirm a get-to-gather request?</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tabsNavigationVertSimple5" data-toggle="tab">Is a Virtual Get To Gather Free?</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="tab-pane tab-pane-navigation active" id="tabsNavigationVertSimple1">
                                    <h4 style="color: #3e4095">How can a I load my profile on VgTg.online?</h4>
                                    <p style="color: black"><strong>Step 1</strong> Sign-up to www.VgTg.online using your email or WhatsApp number
                                        Click on this YouTube video <strong><a href="https://youtu.be/4wztIWnVjVo" style="color: #3e4095">https://youtu.be/4wztIWnVjVo</a></strong></p>
                                    <p style="color: black"><strong>Step 2</strong> Sign-in to <strong><a href="www.VgTg.online" style="color: #3e4095">www.VgTg.online</a></strong> then click "Artist Section" on the top right corner, Enter and upload your details - name, picture, who introduced you, your brief introduction in few sentences, 30 seconds promo video or short audio introduction. Click on this YouTube video<strong><a href="https://youtu.be/8EIwAd0MLSA" style="color: #3e4095">https://youtu.be/8EIwAd0MLSA</a></strong> https://youtu.be/8EIwAd0MLSA</p>
                                </div>
                                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple2">
                                    <h4  style="color: #3e4095">Is there an easier and faster way to upload my profile?</h4>
                                    <p style="color: black">Yes; sent your details like name, WhatsApp number, picture, short audio and or video introduction to our WhatsApp number +1 416 567 4373</p>
                                </div>
                                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple3">
                                    <h4 style="color: #3e4095">How can anyone request a virtual get-to-gather with their favorite Celebrities, Artists, Performers or Poets?
                                    </h4>
                                    <p style="color: black">To book a virtual-get-together go to www.VgTg.online review the list of resources, click on any resource you wish to book, review the detailed profile, provide the date and time you need to meet with the resource.
                                        VgTg will inform you by email once your booking is confirmed.
                                        Click on this YouTube video (hyperlink to YouTube video for this FAQ)
                                        <strong><a href="https://youtu.be/GnDynquoBZc" style="color: #3e4095">https://youtu.be/GnDynquoBZc</a></strong></p>
                                </div>
                                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple4">
                                    <h4 style="color: #3e4095">How long does it take to confirm a get-to-gather request?</h4>
                                    <p style="color: black">Our goal is to get back with you within 24 hours of booking request; however, due to the lack for response from the resource our reply might be delayed.</p>
                                </div>
                                <div class="tab-pane tab-pane-navigation" id="tabsNavigationVertSimple5">
                                    <h4 style="color: #3e4095">Is a Virtual Get To Gather Free?</h4>
                                    <p style="color: black">The fee for the Virtual get-to-gather is determined by the resources you wish to book; we have requested the resources to initially provide a sample 15 to 30 minutes time for free.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="section" id="contactus">
        <div class="container">
            <div class="row text-center pb-5">
                <div class="col-md-9 mx-md-auto">
                    <div class="overflow-hidden mb-3">
                        <h1 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0" >
                            <span>Contact Us</span>

                        </h1>
                    </div>
                    <div class="divider divider-small divider-small-center">
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-lg-6">
                    <form class="" action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label class="required font-weight-bold text-dark text-2">Name</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="required font-weight-bold text-dark text-2">Email Address</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="required font-weight-bold text-dark text-2 text-color-black">Message</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="submit" value="Submit" class="btn btn-primary btn-block mb-2" >
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6">

                    <div class="" >
                        <h4 class="mt-2 mb-1">Email</h4>
                        <p style="color: black">info@virtualgettogather.com</p>
                    </div>
                    <div class="" >
                        <h4 class="mt-2 mb-1">Whatsapp</h4>
                        <p style="color: black">+1 416 567 4373</p>
                    </div>
                    <div class="" >
                        <h4 class="mt-2 mb-1">About</h4>
                        <p style="color: black">We are living in a global village; the need to interact with anyone anywhere on-demand is increasing, technology is bridging distances; Virtual Get-To-Gather (VgTg.online) offers a platform for all sorts of (virtual) gathering; the opportunity of celebrities, artists and literary figures to meet with their fans globally in groups or individually on-demand, friends can request and invite other friends for an informal (virtual) get to gather.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

<br><br><br>



</div>

@endsection
