<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('folio.layouts.header')
    <title>{{ __('folio.meta.home') }}</title>
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
                @include('folio.layouts.art')
                @include('folio.layouts.menuBar')
            </div>
            <!-- app container end -->
        </div>
        <!-- app wrapper end -->
        @include('folio.layouts.preloader')
    </div>
    @include('folio.layouts.scripts')
</body>
