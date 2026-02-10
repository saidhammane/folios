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

    <!-- swup container -->
    <div class="transition-fade" id="swup">

        <!-- scroll frame -->
        <div id="scrollbar" class="art-scroll-frame">

            <!-- container -->
            <div class="container-fluid">

                <!-- row -->
                <div class="row p-60-0 p-lg-30-0 p-md-15-0">
                    <!-- col -->
                    <div class="col-lg-12">

                        <!-- banner -->
                        <div class="art-a art-banner" style="background-image: url(img/bg.jpg)">
                            <!-- banner back -->
                            <div class="art-banner-back"></div>
                            <!-- banner dec -->
                            <div class="art-banner-dec"></div>
                            <!-- banner overlay -->
                            <div class="art-banner-overlay">
                                <!-- main title -->
                                <div class="art-banner-title">
                                    <!-- title -->
                                    <h1 class="mb-15">{{ __('folio.hero.title') }}</h1>
                                    <!-- suptitle -->
                                    <div class="art-lg-text art-code mb-25">&lt;<i>code</i>&gt; {{ __('folio.hero.code_prefix') }}
                                        <span class="txt-rotate" data-period="2000"
                                            data-rotate='@json(__('folio.hero.rotate'))'></span>&lt;/<i>code</i>&gt;
                                    </div>
                                    <div class="art-buttons-frame">
                                        <!-- button -->
                                        <a href="{{ route('portfolio', ['locale' => app()->getLocale()]) }}"
                                            class="art-btn art-btn-md"><span>{{ __('folio.explore_now') }}</span></a>
                                    </div>
                                </div>
                                <!-- main title end -->
                                <!-- photo -->
                                <img src="img/face-2.png" class="art-banner-photo" alt="{{ __('folio.profile.avatar_alt') }}">
                            </div>
                            <!-- banner overlay end -->
                        </div>
                        <!-- banner end -->

                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->

            </div>
            <!-- container end -->

            <!-- container -->
            <div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                </div>
                <!-- row end -->

            </div>
            <!-- container end -->

            <!-- container -->
            <div class="container-fluid">

                <!-- row -->
                <div class="row">

                    <!-- col -->
                    <div class="col-lg-12">

                        <!-- section title -->
                        <div class="art-section-title">
                            @php
                                $expertise = trans('folio.expertise');
                            @endphp
                            <!-- title frame -->
                            <div class="art-title-frame">
                                <!-- title -->
                            <h4>{{ $expertise['title'] }}</h4>
                            </div>
                            <!-- title frame end -->
                        </div>
                        <!-- section title end -->

                    </div>
                    <!-- col end -->

                    <!-- col -->
                    @foreach ($expertise['cards'] as $card)
                        <div class="col-lg-4 col-md-6">

                            <!-- service -->
                            <div class="art-a art-service-icon-box">
                                <!-- service content -->
                                <div class="art-service-ib-content">
                                    <!-- title -->
                                    <h5 class="mb-15">
                                        {{ $card['title'] }}
                                        @if (!empty($card['badge']))
                                            <span class="art-badge-yellow">{{ $card['badge'] }}</span>
                                        @endif
                                    </h5>
                                    <!-- text -->
                                    <div class="mb-15 art-service-desc">{{ $card['desc'] }}</div>
                                    <!-- button -->
                                    <div class="art-buttons-frame"><a
                                            href="https://wa.me/212684756919" target="_blank" rel="noopener noreferrer"
                                            class="art-link art-color-link art-w-chevron">{{ $expertise['cta'] }}</a>
                                    </div>
                                </div>
                                <!-- service content end -->
                            </div>
                            <!-- service end -->

                        </div>
                        <!-- col end -->
                    @endforeach
                </div>
                <!-- row end -->

            </div>
            <!-- container end -->

            @include('folio.layouts.footer')

        </div>
        <!-- scroll frame end -->

    </div>
    <!-- swup container end -->
</div>
<!-- content end -->





