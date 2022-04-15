@extends('layouts.app')
@section('content')


<div class="main" role="main">
    <div class="section">
        <div class="container py-5">
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
                <div class="col-md-12">
                    <form  action="{{ route('sent') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="required font-weight-bold text-dark text-2">Name of Requester</label>
                                <input type="text" value="" data-msg-required="Please enter your name."
                                maxlength="100" class="form-control" name="name" required>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="required font-weight-bold text-dark text-2">Email Address</label>
                                <input type="email" value="" data-msg-required="Please enter your email address."
                                data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="required font-weight-bold text-dark text-2">Phone(Whatsapp)</label>
                                <input type="tel" value="" data-msg-required="Please Enter Your Phone Number" maxlength="100"
                                class="form-control" name="phone" required>
                            </div>

                        </div>
                        <div class="row py-2">
                            <div class="col-md-12">
                                <div class="row py-2">
                                    <div class="col-md-6">
                                        <div class="overflow-hidden mb-1">
                                            <h2 class="font-weight-normal text-7 mt-2 mb-0" >Event Details</h2>
                                        </div>
                                        {{-- <div class="contact-form-success alert alert-success d-none mt-4">
                                            <strong>Success!</strong> Your message has been sent to us.
                                        </div>

                                        <div class="contact-form-error alert alert-danger d-none mt-4">
                                            <strong>Error!</strong> There was an error sending your message.
                                            <span class="mail-error-message text-1 d-block"></span>
                                        </div> --}}

                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">Date Event is Requested</label>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                                class="form-control" name="date" required>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">City</label>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                                class="form-control" name="city" required>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">Country</label>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                                class="form-control" name="country" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">TimeZone</label>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                                class="form-control" name="timezone" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">
                                                    Name of the Artist or Celebrity or Literary person requested *</label>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                                class="form-control" name="artist_request" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">Type of Event Requested</label>
                                                <select name="eve_request" class="form-control form-control-sm mb-3">
                                                    <option value="selected">Select</option>
                                                    <option>One-on-One Session</option>
                                                    <option>Musical Program</option>
                                                    <option>Stage Show</option>
                                                    <option>Literary Reading</option>
                                                    <option>Musharia</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">Any Other Special Requirements
                                                </label>
                                                <input type="text" value="" data-msg-required="Please Enter Your Phone Number" maxlength="100"
                                                class="form-control" name="spec_req" required>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="overflow-hidden mb-1">
                                            <h2 class="font-weight-normal text-7 mt-2 mb-0" >Audience Details</h2>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">Number Of Expected Audience For This Event</label>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                                class="form-control" name="aud_event" required>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">How Many **First Row Audience Expected?</label>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                                class="form-control" name="aud_exp" required>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">How Many General Audience Expected?</label>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                                class="form-control" name="gen_exp" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">Audience City</label>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                                class="form-control" name="aud_city" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">
                                                    Audience Country</label>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                                                class="form-control" name="aud_country" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">Audience TimeZone
                                                </label>

                                                <input type="text" value="" data-msg-required="Please Enter Your Phone Number" maxlength="100"
                                                class="form-control" name="aud_time" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">Will This Be An Exclusive and Private Event (Yes/ No)</label>
                                                <select name="priv_eve" class="form-control form-control-sm mb-3">
                                                    <option value="selected">Select</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark text-2">Will You Need Our Assistance Selling Tickets For This Event? (Yes/ No)
                                                </label>
                                                <select name="ticket" class="form-control form-control-sm mb-3">
                                                    <option value="selected">Select</option>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <input type="submit" value="Submit" class="btn btn-primary btn-modern" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row text-center pb-5 py-4">
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
    </div>
</div>
@endsection
