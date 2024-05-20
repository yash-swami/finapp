
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
    <main data-title="blog">
        <!-- blog content begin -->
        <div class="uk-section uk-margin-small-top">
            <div class="uk-container">
                <div class="uk-grid" data-uk-grid>
                    <div class="uk-width-2-3@m">
                        <div class="in-blog-1" data-uk-grid>
                            <div class="in-stretch">
                                <article class="uk-card uk-card-default uk-border-rounded">
                                    <div class="uk-card-media-top">
                                        <img src="assets/img/user/image-featured-a4DfvV.jpg" alt="The typical U.S. household is spending $445 more a month due to inflation">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3>
                                            <a href="blog/the-typical-us-household-is-spending-445-more-a.html" class="link-primary text-decoration-none">The typical U.S. household is spending $445 more a month due to inflation</a>
                                        </h3>
                                        <p>Inflation is causing American households to spend $445 more per month buying the same items they did a year ago, according to an estimate from Moody’s Analytics.</p>
                                        <div class="uk-flex">
                                            <div class="uk-margin-small-right">
                                                <img class="uk-border-pill uk-background-muted" src="assets/img/user/author-85z9UC.jpg" alt="image-team" width="32" height="32">
                                            </div>
                                            <div class="uk-flex uk-flex-middle">
                                                <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                    Warren Wong
                                                    <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                                </p>
                                            </div>
                                            <div class="uk-flex uk-flex-middle">
                                                <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                    December 29, 2022
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-footer uk-clearfix">
                                        <div class="uk-float-left">
                                            <span class="uk-label uk-label-warning in-label-small">Investing</span>
                                        </div>
                                        <div class="uk-float-right">
                                            <a href="blog/the-typical-us-household-is-spending-445-more-a.html" class="uk-button uk-button-text">Read more<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="in-stretch">
                                <article class="uk-card uk-card-default uk-border-rounded">
                                    <div class="uk-card-body">
                                        <h3>
                                            <a href="blog/biden-and-harris-celebrate-kwanzaa-in-social-media.html" class="link-primary text-decoration-none">Biden and Harris celebrate Kwanzaa in social media posts</a>
                                        </h3>
                                        <p>The White House celebrated Kwanzaa in a pair of pre-recorded videos posted to Twitter on Monday, marking the seven-day non-denominational holiday aimed at honoring African Americans’ ancestral roots.</p>
                                        <div class="uk-flex">
                                            <div class="uk-margin-small-right">
                                                <img class="uk-border-pill uk-background-muted" src="assets/img/user/author-85z9UC.jpg" alt="image-team" width="32" height="32">
                                            </div>
                                            <div class="uk-flex uk-flex-middle">
                                                <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                    Warren Wong
                                                    <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                                </p>
                                            </div>
                                            <div class="uk-flex uk-flex-middle">
                                                <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                    December 29, 2022
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-footer uk-clearfix">
                                        <div class="uk-float-left">
                                            <span class="uk-label uk-label-warning in-label-small">Politics</span>
                                        </div>
                                        <div class="uk-float-right">
                                            <a href="blog/biden-and-harris-celebrate-kwanzaa-in-social-media.html" class="uk-button uk-button-text">Read more<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="in-stretch">
                                <article class="uk-card uk-card-default uk-border-rounded">
                                    <div class="uk-card-body">
                                        <h3>
                                            <a href="blog/amazons-started-to-deliver-orders-by-drones-in-california.html" class="link-primary text-decoration-none">Amazon’s started to deliver orders by drones in California and Texas</a>
                                        </h3>
                                        <p>The retail giant already flew out some packages to customers in Northern California and a medium-sized Texan city in the run-up to Christmas.</p>
                                        <div class="uk-flex">
                                            <div class="uk-margin-small-right">
                                                <img class="uk-border-pill uk-background-muted" src="assets/img/user/author-85z9UC.jpg" alt="image-team" width="32" height="32">
                                            </div>
                                            <div class="uk-flex uk-flex-middle">
                                                <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                    Warren Wong
                                                    <span class="uk-margin-small-left uk-margin-small-right">•</span>
                                                </p>
                                            </div>
                                            <div class="uk-flex uk-flex-middle">
                                                <p class="uk-text-small uk-text-muted uk-margin-remove">
                                                    December 29, 2022
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-card-footer uk-clearfix">
                                        <div class="uk-float-left">
                                            <span class="uk-label uk-label-warning in-label-small">Technology</span>
                                        </div>
                                        <div class="uk-float-right">
                                            <a href="blog/amazons-started-to-deliver-orders-by-drones-in-california.html" class="uk-button uk-button-text">Read more<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- pagination begin -->
                        <ul class="uk-pagination uk-flex-center uk-margin-medium-top"></ul>
                        <!-- pagination end -->
                    </div>
                    <div class="uk-width-expand@m">
                        <!-- widget search begin -->
                        <aside class="uk-margin-medium-bottom">
                            <form name="blog-search" class="uk-search uk-search-default uk-width-1-1">
                                <a href="" class="uk-search-icon-flip" data-uk-search-icon></a>
                                <input class="uk-input uk-border-rounded" type="search" placeholder="Search here...">
                            </form>
                        </aside>
                        <!-- widget search end -->
                        <!-- widget categories begin -->
                        <aside class="uk-margin-medium-bottom">
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">        
                                <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Categories</h5>
                                <ul class="uk-list widget-categories"></ul>
                            </div>
                        </aside>
                        <!-- widget categories end -->
                        <!-- widget lates begin -->
                        <aside class="uk-margin-medium-bottom">
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Latest News</h5>
                                <ul class="uk-list uk-list-divider uk-list-large widget-latest"></ul>        
                            </div>
                        </aside>
                        <!-- widget lates end -->
                        <!-- widget tags begin -->
                        <aside class="uk-margin-medium-bottom">
                            <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Tags</h5>
                                <div class="uk-margin-top widget-tag"></div>
                            </div>
                        </aside>
                        <!-- widget tags end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- blog content end -->
    </main>


   
    <!-- javascript -->
    <script src="assets/js/utilities.min.js"></script>
    <script src="assets/js/config-theme.js"></script>

@endsection