<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('folio.layouts.header')
    <title>{{ __('folio.meta.contact') }}</title>
</head>

<body>
    <!-- app -->
    <div class="art-app">
        <!-- mobile top bar -->
        <div class="art-mobile-top-bar"></div>
        <!-- app wrapper -->
        <div class="art-app-wrapper">
            <!-- app container end -->
            <div class="art-app-container">
                @include('folio.layouts.infoBar')

                <!-- content -->
                <div class="art-content">

                    <!-- curtain -->
                    <div class="art-curtain"></div>

                    <!-- top background -->
                    <div class="art-top-bg" style="background-image: url(img/bg.jpg)">
                        <!-- overlay -->
                        <div class="art-top-bg-overlay"></div>
                        <!-- overlay end -->
                    </div>
                    <!-- top background end -->
                    @include('folio.layouts.contact')
                </div>
                <!-- content end -->
                @include('folio.layouts.menuBar')
            </div>
            <!-- app container end -->
        </div>
        <!-- app wrapper end -->
        @include('folio.layouts.preloader')
    </div>
    @include('folio.layouts.scripts')
</body>
