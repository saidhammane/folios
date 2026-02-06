<!-- menu bar -->
<div class="art-menu-bar">

    <!-- menu bar frame -->
    <div class="art-menu-bar-frame">

        <!-- menu bar header -->
        <div class="art-menu-bar-header">
            <!-- menu bar button -->
            <a class="art-menu-bar-btn">
                <!-- icon -->
                <span></span>
            </a>
            <!-- menu bar button end -->
        </div>
        <!-- menu bar header end -->

        <!-- current page title -->
        <div class="art-current-page"></div>
        <!-- current page title end -->

        <!-- scroll frame -->
        <div class="art-scroll-frame">

            <!-- menu -->
            <nav id="swupMenu">
                <!-- menu list -->
                @php
                    $locale = app()->getLocale();
                    $path = trim(request()->path(), '/');
                    $isHome = $path === $locale;
                    $isPortfolio = $path === $locale . '/portfolio';
                    $isHistory = $path === $locale . '/history';
                    $isContact = $path === $locale . '/contact';
                    $isBlog = $path === $locale . '/blog';
                @endphp
                <ul class="main-menu">
                    <!-- menu item -->
                    <li class="menu-item {{ $isHome ? 'current-menu-item' : '' }}"><a
                            href="{{ route('app', ['locale' => app()->getLocale()]) }}">{{ __('folio.menu.home') }}</a>
                    </li>
                    <!-- menu item -->
                    <li class="menu-item {{ $isPortfolio ? 'current-menu-item' : '' }}"><a
                            href="{{ route('portfolio', ['locale' => app()->getLocale()]) }}">{{ __('folio.menu.portfolio') }}</a>
                    </li>
                    <!-- menu item -->
                    <li class="menu-item {{ $isHistory ? 'current-menu-item' : '' }}"><a
                            href="{{ route('history', ['locale' => app()->getLocale()]) }}">{{ __('folio.menu.history') }}</a></li>
                    <!-- menu item -->
                    <li class="menu-item {{ $isContact ? 'current-menu-item' : '' }}"><a
                            href="{{ route('contact', ['locale' => app()->getLocale()]) }}">{{ __('folio.menu.contact') }}</a></li>
                    <!-- menu item -->
                    <li class="menu-item {{ $isBlog ? 'current-menu-item' : '' }}"><a
                            href="{{ route('blog', ['locale' => app()->getLocale()]) }}">{{ __('folio.menu.blog') }}</a></li>
                </ul>
                <!-- menu list end -->
            </nav>
            <!-- menu end -->

            <!-- language change -->
            @php
                $segments = request()->segments();
                $currentLocale = app()->getLocale();
                if (count($segments) > 0 && in_array($segments[0], ['en', 'fr'], true)) {
                    $segments[0] = 'fr';
                    $frPath = implode('/', $segments);
                    $segments[0] = 'en';
                    $enPath = implode('/', $segments);
                } else {
                    $frPath = 'fr';
                    $enPath = 'en';
                }
            @endphp
            <ul class="art-language-change">
                <li class="{{ $currentLocale === 'fr' ? 'art-active-lang' : '' }}">
                    <a href="/{{ $frPath }}">FR</a>
                </li>
                <li class="{{ $currentLocale === 'en' ? 'art-active-lang' : '' }}">
                    <a href="/{{ $enPath }}">EN</a>
                </li>
            </ul>
            <!-- language change end -->

        </div>
        <!-- scroll frame end -->

    </div>
    <!-- menu bar frame -->

</div>
<!-- menu bar end -->
