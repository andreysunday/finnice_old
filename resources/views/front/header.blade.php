<div id="header" class="sticky clearfix dark">

    <!-- TOP NAV -->
    <header id="topNav">
        <div class="container">

            <!-- Mobile Menu Button -->
            <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>

            <!-- BUTTONS -->
            <ul class="pull-right nav nav-pills nav-second-main">

                <!-- SEARCH -->
                <li class="search">
                    <a href="javascript:;">
                        <i class="fa fa-search"></i>
                    </a>
                    <div class="search-box">
                        <form action="page-search-result-1.html" method="get">
                            <div class="input-group">
                                <input type="text" name="src" placeholder="Search" class="form-control"/>
                                <span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- /SEARCH -->

            </ul>
            <!-- /BUTTONS -->

            <!-- Logo -->
            <a class="logo pull-left" href="index.html">
                <img src="assets/images/_smarty/logo_light.png" alt=""/>
            </a>

            <!--
                Top Nav

                AVAILABLE CLASSES:
                submenu-dark = dark sub menu
            -->

            <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                <nav class="nav-main">

                    <!--
                        NOTE

                        For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                        Direct Link Example:

                        <li>
                            <a href="#">HOME</a>
                        </li>
                    -->

                    <ul id="topMain" class="nav nav-pills nav-main">
                        @foreach($menuItems as $item)
                            @if($item->children->count() > 0)
                                @if($item->alias == 'regions')
                                    <li class="dropdown mega-menu">
                                        <a class="dropdown-toggle uppercase" href="#">
                                            {{ $item->name }}
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="row">
                                                    @foreach($item->children->chunk(5) as $chunk)
                                                        <div class="col-md-3">
                                                            <ul class="list-unstyled">
                                                                @foreach($chunk as $submenu)
                                                                    <li><a href="#">{{ $submenu->name }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="dropdown">
                                        <a class="dropdown-toggle uppercase" href="#">
                                            {{ $item->name }}
                                        </a>
                                        <ul class="dropdown-menu">
                                            @foreach($item->children as $submenu)
                                                <li class="dropdown">

                                                    <a class="dropdown-toggle" href="#">{{ $submenu->name }} </a>

                                                    <ul class="dropdown-menu">
                                                        @foreach($submenu->children as $submenu1)
                                                            <li>
                                                                <a class="" href="#">{{ $submenu1->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>

                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                @endif
                            @else
                                <li>
                                    <a class="uppercase" href="#">
                                        {{ $item->name }}
                                    </a>
                                </li>
                        @endif

                    @endforeach
                    <!-- Languages -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle uppercase">
                                {{ app()->getLocale() }}
                            </a>

                            <ul class="dropdown-menu">

                                @foreach (config('translatable.locales') as $lang => $language)
                                    {{--{{ dump(app()->getLocale()) }}--}}
                                    @if ($lang != app()->getLocale())
                                        <li>
                                            <a href="{{ route('lang.switch', $lang) }}">
                                                {{ $language }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach

                            </ul>

                        </li>
                        <!-- End Languages -->

                    </ul>

                </nav>
            </div>

        </div>
    </header>
    <!-- /Top Nav -->

</div>