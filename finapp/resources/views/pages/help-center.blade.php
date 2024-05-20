{{-- 
    <header>
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
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 in-content-10">
                    <div class="uk-card uk-card-primary uk-card-body uk-border-rounded uk-background-bottom-left uk-background-contain" style="background-image: url(assets/img/blockit/in-content-10-image.png);">                    
                        <div class="uk-grid uk-flex uk-flex-center">
                            <div class="uk-width-3-5@m uk-text-center">                            
                                <h1 class="uk-margin-small-top">Hi, we’re here to help.</h1>
                                <form class="uk-search uk-search-default uk-width-1-1 uk-margin-bottom">
                                    <span data-uk-search-icon></span>
                                    <input class="uk-search-input uk-border-pill" type="search" placeholder="Search for articles...">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid-divider uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top" data-uk-grid>
                        <div>
                            <h3 class="uk-heading-bullet"><a class="uk-link-text" href="#">How-tos & Tutorials</a></h3>
                            <div class="uk-grid uk-grid-small" data-uk-grid>                        
                                <div class="uk-width-expand@m">
                                    <p>Excepteur sint occaecat cupidatat non proident sunt et expedita</p>
                                  <a href="#" class="uk-button uk-button-text">More details<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                </div>
                                <div class="uk-width-auto@m">
                                  <div class="in-icon-wrap small transparent uk-margin-left">
                                    <i class="fas fa-question fa-3x"></i>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h3 class="uk-heading-bullet"><a class="uk-link-text" href="#">Security and Privacy</a></h3>
                            <div class="uk-grid uk-grid-small" data-uk-grid>                        
                                <div class="uk-width-expand@m">
                                    <p>Similique suculpa officia deserunt mollitia animi dolores ratione</p>
                                  <a href="#" class="uk-button uk-button-text">More details<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                </div>
                                <div class="uk-width-auto@m">
                                  <div class="in-icon-wrap small transparent uk-margin-left">
                                    <i class="fas fa-unlock-alt fa-3x"></i>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="uk-heading-bullet"><a class="uk-link-text" href="#">Open a Support ticket</a></h3>
                            <div class="uk-grid uk-grid-small" data-uk-grid>                        
                                <div class="uk-width-expand@m">
                                    <p>Voluptatibus maiores alias mauli consequatur aut perferendis</p>
                                  <a href="#" class="uk-button uk-button-text">More details<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                </div>
                                <div class="uk-width-auto@m">
                                  <div class="in-icon-wrap small transparent uk-margin-left">
                                    <i class="fas fa-life-ring fa-3x"></i>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-5@m">
                    <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-1@m in-content-11" data-uk-grid>
                        <div>
                            <a href="#" class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                                <div class="uk-grid" data-uk-grid>
                                    <div class="uk-width-auto@m uk-flex uk-flex-middle">
                                      <div class="in-icon-wrap in-margin-remove-left@s uk-margin-left">
                                        <i class="fas fa-book fa-lg"></i>
                                      </div>
                                    </div>
                                    <div class="uk-width-expand@m in-margin-top-10@s">
                                        <h4 class="uk-margin-small-bottom">Getting started with our product</h4>
                                        <img class="uk-border-pill uk-background-muted uk-float-left uk-margin-remove-adjacent uk-margin-small-right" src="assets/img/blockit/in-team-7.png" width="40" height="40" alt="author-image">
                                        <p class="uk-text-small uk-margin-remove-bottom">5 articles in this collection</p>
                                        <p class="uk-text-small uk-margin-remove-top">Written by Scott Baker</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                                <div class="uk-grid" data-uk-grid>
                                    <div class="uk-width-auto@m uk-flex uk-flex-middle">
                                     <div class="in-icon-wrap in-margin-remove-left@s uk-margin-left">
                                        <i class="fas fa-pen-nib fa-lg"></i>
                                      </div>
                                    </div>
                                    <div class="uk-width-expand@m in-margin-top-10@s">
                                        <h4 class="uk-margin-small-bottom">Contracts and E-Signatures</h4>
                                        <img class="uk-border-pill uk-background-muted uk-float-left uk-margin-remove-adjacent uk-margin-small-right" src="assets/img/blockit/in-team-8.png" width="40" height="40" alt="author-image">
                                        <p class="uk-text-small uk-margin-remove-bottom">2 articles in this collection</p>
                                        <p class="uk-text-small uk-margin-remove-top">Written by Timothy Watkins</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                                <div class="uk-grid" data-uk-grid>
                                    <div class="uk-width-auto@m uk-flex uk-flex-middle">
                                    <div class="in-icon-wrap in-margin-remove-left@s uk-margin-left">
                                        <i class="fas fa-file-invoice fa-lg"></i>
                                      </div>
                                    </div>
                                    <div class="uk-width-expand@m in-margin-top-10@s">
                                        <h4 class="uk-margin-small-bottom">Invoicing and Getting paid</h4>
                                        <img class="uk-border-pill uk-background-muted uk-float-left uk-margin-remove-adjacent uk-margin-small-right" src="assets/img/blockit/in-team-6.png" width="40" height="40" alt="author-image">
                                        <p class="uk-text-small uk-margin-remove-bottom">3 articles in this collection</p>
                                        <p class="uk-text-small uk-margin-remove-top">Written by Peter Jacobs</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#" class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                                <div class="uk-grid" data-uk-grid>
                                    <div class="uk-width-auto@m uk-flex uk-flex-middle">
                                      <div class="in-icon-wrap in-margin-remove-left@s uk-margin-left">
                                        <i class="fas fa-users fa-lg"></i>
                                      </div>
                                    </div>
                                    <div class="uk-width-expand@m in-margin-top-10@s">
                                        <h4 class="uk-margin-small-bottom">Project sources and Tracking</h4>
                                        <img class="uk-border-pill uk-background-muted uk-float-left uk-margin-remove-adjacent uk-margin-small-right" src="assets/img/blockit/in-team-3.png" width="40" height="40" alt="author-image">
                                        <p class="uk-text-small uk-margin-remove-bottom">8 articles in this collection</p>
                                        <p class="uk-text-small uk-margin-remove-top">Written by Evelyn Mason</p>
                                    </div>
                                </div>
                            </a>
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
