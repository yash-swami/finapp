<header>
    <div class="uk-section uk-padding-remove-vertical">        
        <nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="index.html">
                        <img src="assets/img/user/header-logo-Uw3Zp9.svg" alt="logo" width="146" height="40">
                    </a>
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="index.html">Home<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="{{url('/home2')}}">Homepage 2</a></li>
                                    <li><a href="{{url('/home3')}}">Homepage 3</a></li>
                                    <li><a href="{{url('/home4')}}">Homepage 4</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{url('/markets')}}">Markets</a>
                        </li>
                        <li><a href="#">Company<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="{{url('/About')}}">About</a></li>
                                    <li><a href="{{url('/Blog')}}">Blog</a></li>
                                    <li><a href="{{url('/Careers')}}">Careers</a></li>
                                    <li><a href="{{url('/Contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{url('/education')}}">Education</a>
                        </li>
                        <li><a href="#">Resources<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                    <div>
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="https://getuikit.com/docs/introduction">Documentation<i class="fas fa-square-arrow-up-right fa-sm"></i></a></li>
                                            <li><a href="{{url('/Help-Center')}}">Help Center</a></li>
                                            <li><a href="{{url('/Customers')}}">Customers</a></li>
                                            <li><a href="{{url('/Roadmap')}}">Roadmap</a></li>
                                            <li><a href="{{url('/Legal-Docs')}}">Legal Docs<i class="fas fa-gavel fa-sm"></i></a></li>
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
                        <a href="{{url('/Log-in')}}" class="uk-button uk-button-text">Log in<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        <a href="{{url('/Sign up')}}" class="uk-button uk-button-primary">Sign up<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>  
</header>
<!-- header end -->