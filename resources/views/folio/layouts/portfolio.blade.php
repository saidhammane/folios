<!-- swup container -->
<div class="transition-fade" id="swup">

    <!-- scroll frame -->
    <div id="scrollbar" class="art-scroll-frame">

        <!-- container -->
        <div class="container-fluid">

            <style>
                .portfolio-chip {display:inline-block;padding:6px 12px;border-radius:999px;border:1px solid #ffc000;color:#eaeaea;background:rgba(255,255,255,0.03);margin:4px 8px 0 0;font-size:12px;line-height:1.4;}
                .portfolio-card {padding:20px;border-radius:12px;border:1px solid rgba(255,255,255,0.08);background:rgba(255,255,255,0.03);margin-bottom:30px;}
                .portfolio-steps li,.portfolio-list li {margin-bottom:6px;}
                .portfolio-cta {display:flex;flex-direction:column;gap:10px;align-items:flex-start;}
                @media (max-width:576px){.portfolio-chip{padding:6px 10px;font-size:11px;}}
            </style>

            @php
                $portfolio = trans('folio.portfolio');
            @endphp

            <!-- row -->
            <div class="row p-30-0">

                <div class="col-lg-12">
                    <h4 class="mb-10">{{ $portfolio['title'] }}</h4>
                    <div class="art-sm-text mb-30">{{ $portfolio['subtitle'] }}</div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-card">
                        <h5 class="mb-10">{{ $portfolio['demo_title'] }}</h5>
                        <ul class="portfolio-list">
                            @foreach ($portfolio['demo_items'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-card">
                        <h5 class="mb-10">{{ $portfolio['process_title'] }}</h5>
                        <ol class="portfolio-steps">
                            @foreach ($portfolio['process_steps'] as $step)
                                <li>{{ $step }}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-card">
                        <h5 class="mb-10">{{ $portfolio['audience_title'] }}</h5>
                        <div>
                            @foreach ($portfolio['audience_chips'] as $chip)
                                <span class="portfolio-chip">{{ $chip }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-card portfolio-cta">
                        <h5 class="mb-5">{{ $portfolio['cta_title'] }}</h5>
                        <div class="art-sm-text">{{ $portfolio['cta_subtitle'] }}</div>
                        <a class="art-btn art-btn-md" href="{{ route('contact', ['locale' => app()->getLocale()]) }}" aria-label="{{ $portfolio['cta_primary'] }}"><span>{{ $portfolio['cta_primary'] }}</span></a>
                        <div class="art-sm-text">{{ $portfolio['cta_note'] }}</div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-card">
                        <h5 class="mb-10">{{ $portfolio['faq_title'] }}</h5>
                        @foreach ($portfolio['faq'] as $item)
                            <div class="mb-10"><strong>{{ $item['q'] }}</strong><br>{{ $item['a'] }}</div>
                        @endforeach
                    </div>
                </div>

            </div>
            <!-- row end -->

        </div>
        <!-- container end -->

        @include('folio.layouts.footer')
    </div>
    <!-- scroll frame end -->

</div>
<!-- swup container end -->
