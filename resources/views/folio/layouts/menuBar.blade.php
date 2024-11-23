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
                <ul class="main-menu">
                    <!-- menu item -->
                    <li class="menu-item current-menu-item"><a href={{ route('app') }}>Home</a>
                    </li>
                    <!-- menu item -->
                    <li class="menu-item current-menu-item"><a href={{ route('portfolio') }}>Portfolio</a>
                    </li>
                    <!-- menu item -->
                    <li class="menu-item"><a href={{ route('history') }}>History</a></li>
                    <!-- menu item -->
                    <li class="menu-item"><a href={{ route('contact') }}>Contact</a></li>
                    <!-- menu item -->
                    <li class="menu-item"><a href={{ route('blog') }}>Blog</a></li>
                </ul>
                <!-- menu list end -->
            </nav>
            <!-- menu end -->

            <!-- language change -->
            <ul class="art-language-change">
                <!-- language item -->
                <li><a>FR</a></li>
                <!-- language item -->
                <li class="art-active-lang"><a>EN</a></li>
            </ul>
            <!-- language change end -->

        </div>
        <!-- scroll frame end -->

    </div>
    <!-- menu bar frame -->

</div>
<!-- menu bar end -->
