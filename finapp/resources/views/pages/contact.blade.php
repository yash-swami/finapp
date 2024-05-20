
@extends('welcome')

@section('main-content')

    <!-- breadcrumb content begin -->
    <div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <ul class="uk-breadcrumb">
                        <li><a href="#">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb content end -->
    <main>
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center in-contact-6">
                <div class="uk-width-1-1">
                    <iframe class="uk-width-1-1 uk-height-large uk-border-rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10600.5248164368!2d144.95966577016594!3d-37.81707816290683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sid!4v1645280096951!5m2!1sen!2sid">
                    </iframe>
                </div>
                <div class="uk-width-3-5@m">
                    <div class="uk-grid uk-child-width-1-3@m uk-margin-medium-top uk-text-center" data-uk-grid="">
                        <div>
                            <h5 class="uk-margin-remove-bottom"><i class="fas fa-map-marker-alt fa-sm uk-margin-small-right"></i>Address</h5>
                            <p class="uk-margin-small-top">Satrio Tower 16th, Jl. Dr Satrio Kuningan, Jakarta</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-remove-bottom"><i class="fas fa-envelope fa-sm uk-margin-small-right"></i>Email</h5>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">hello@company.com</p>
                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">for public inquiries</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-remove-bottom"><i class="fas fa-phone-alt fa-sm uk-margin-small-right"></i>Call</h5>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">(888)234-5686</p>
                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">Mon - Fri, 9am - 5pm</p>
                        </div>
                    </div>
                    <hr class="uk-margin-medium">
                    <p class="uk-margin-remove-bottom uk-text-lead uk-text-muted uk-text-center">Have a questions?</p>
                    <h1 class="uk-margin-small-top uk-text-center">Let's <span class="in-highlight">get in touch</span></h1>
                    <form id="contact-form" class="uk-form uk-grid-small uk-margin-medium-top" data-uk-grid="">
                        <div class="uk-width-1-2@s uk-inline">
                            <span class="uk-form-icon fas fa-user fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="Full name">
                        </div>
                        <div class="uk-width-1-2@s uk-inline">
                            <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="Email address">
                        </div>
                        <div class="uk-width-1-1 uk-inline">
                            <span class="uk-form-icon fas fa-pen fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="Subject">
                        </div>
                        <div class="uk-width-1-1">
                            <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Message"></textarea>
                        </div>
                        <div class="uk-width-1-1">
                            <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" id="sendemail" type="submit" name="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    </main>
   

   
    <!-- javascript -->
    <script src="assets/js/utilities.min.js"></script>
    <script src="assets/js/config-theme.js"></script>


    @endsection
