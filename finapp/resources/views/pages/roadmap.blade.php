
  
    {{-- <header>
        <div class="uk-section uk-padding-remove-vertical">        
            <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo" href="index.html">
                            <img src="img/user/header-logo-Uw3Zp9.svg" alt="logo" width="146" height="40">
                        </a>
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="index.html">Home<span data-uk-navbar-parent-icon></span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="homepage2.html">Homepage 2</a></li>
                                        <li><a href="homepage3.html">Homepage 3</a></li>
                                        <li><a href="homepage4.html">Homepage 4</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="markets.html">Markets</a>
                            </li>
                            <li><a href="#">Company<span data-uk-navbar-parent-icon></span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="education.html">Education</a>
                            </li>
                            <li><a href="#">Resources<span data-uk-navbar-parent-icon></span></a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="https://getuikit.com/docs/introduction">Documentation<i class="fas fa-square-arrow-up-right fa-sm"></i></a></li>
                                                <li><a href="help-center.html">Help Center</a></li>
                                                <li><a href="customers.html">Customers</a></li>
                                                <li><a href="roadmap.html">Roadmap</a></li>
                                                <li><a href="legal-docs.html">Legal Docs<i class="fas fa-gavel fa-sm"></i></a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a class="uk-disabled" href="#">Adipiscing elit sed do eiusmod incididunt ut labore dolore magna lorem ipsum sit dolor amet consectetur</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <a href="signin.html" class="uk-button uk-button-text">Log in<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                            <a href="#" class="uk-button uk-button-primary">Sign up<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>  
    </header> --}}

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
    <!-- sectio content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m uk-margin-medium-bottom">
                        <h1 class="uk-margin-remove">We're constantly updating our <span class="in-highlight">roadmap.</span></h1>
                        <p class="uk-text-lead">We're constantly updating our roadmap to bring transparency for our users and to get your feedback - please tell us what is important for you!</p>
                      <p>You can follow our progress here or follow us on Twitter   <a href="#"><i class="fab fa-twitter"></i><span class="uk-text-lowercase">@equity-fx</span></a></p>
                    </div>
                </div>
                <div class="uk-width-1-1 in-timeline-1">
                    <hr>
                    <div class="uk-grid uk-child-width-1-1 uk-child-width-1-3@m">
                        <div>
                            <div class="in-timeline-branch">
                                <div class="uk-flex">
                                  <div class="in-icon-wrap primary-color">
                                    <i class="fas fa-clipboard-check fa-lg"></i>
                                  </div>
                                    <div class="in-timeline-title uk-flex uk-flex-middle">
                                        <h4 class="uk-margin-remove-bottom">Q4 2019</h4>
                                        <span class="uk-label uk-label-success in-label-small">completed</span>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-box-shadow-small uk-width-expand">
                                <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                    <ul class="uk-list in-list-check">
                                        <li>Wireframe</li>
                                        <li>Design</li>
                                        <li>Documentation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="in-timeline-branch">
                                <div class="uk-flex">
                                  <div class="in-icon-wrap primary-color">
                                    <i class="fas fa-cog fa-lg"></i>
                                  </div>
                                    <div class="in-timeline-title uk-flex uk-flex-middle">
                                        <h4 class="uk-margin-remove-bottom">Q2 2020</h4>
                                        <span class="uk-label uk-border-rounded in-label-small">on progress</span>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-box-shadow-small uk-width-expand">
                                <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                    <ul class="uk-list in-list-check">
                                        <li>Chart with base functional</li>
                                        <li>Launching plans and billings</li>
                                        <li>Improvement of the rest of the functions of the Chart</li>
                                        <li>Availability panel</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="in-timeline-branch">
                                <div class="uk-flex">
                                  <div class="in-icon-wrap primary-color">
                                    <i class="fas fa-flask fa-lg"></i>
                                  </div>
                                    <div class="in-timeline-title uk-flex uk-flex-middle">
                                        <h4 class="uk-margin-remove-bottom">Q3 2020</h4>
                                        <span class="uk-label uk-label-warning in-label-small">planned</span>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-box-shadow-small uk-width-expand">
                                <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded">
                                    <ul class="uk-list in-list-check">
                                        <li>Extensions for other popular browsers</li>
                                        <li>List View for your tasks</li>
                                        <li>Apps for iOS & Android</li>
                                        <li>New cool skin for Default View</li>
                                        <li>Community formation and the subsequent cyclic completion of the product based on the wishes of customers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
