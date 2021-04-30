<header id="site-header" class="header fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            <a class="navbar-brand mr-xl-5 mr-lg-3" href="{{route('frontend.index')}}">
                <span class="fa fa-black-tie"></span> Reprise
            </a>
            <!-- if logo is image enable this
          <a class="navbar-brand" href="#index.html">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('frontend.index')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.category.posts.show', $category->id)}}">{{$category->name}}</a>
                    </li>
                    @endforeach
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('frontend.about')}}">About</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('frontend.services')}}">Services</a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item mr-lg-5">--}}
{{--                        <a class="nav-link" href="{{route('frontend.contact')}}">Contact</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
