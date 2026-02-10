<!-- swup container -->
<div class="transition-fade" id="swup">

    <!-- scroll frame -->
    <div id="scrollbar" class="art-scroll-frame">

        <!-- container -->
        <div class="container-fluid">

            @php
                $history = trans('folio.history');
                $educationTitle = $history['education_title'];
                $workTitle = $history['work_title'];
                $toggleMoreText = $history['toggle_more'];
                $toggleLessText = $history['toggle_less'];
                $educationItems = $history['education']['items'];
                $workItems = $history['work']['items'];
            @endphp

            <style>
                /* Reduce visual clutter: keep yellow accent on bullets/CTAs, not decorative timeline dots */
                .art-timeline .art-timeline-item .art-timeline-mark {border-color: rgba(140,140,142,0.35) !important;}
                .art-timeline .art-timeline-item .art-timeline-mark-light {display:none !important;}

                /* "Voir plus / Voir moins" toggle for long bullet lists */
                .art-exp-toggle {position:absolute; opacity:0; pointer-events:none;}
                .art-exp-more {display:none; margin-top: 12px;}
                .art-exp-toggle:checked ~ .art-exp-more {display:block;}
                .art-exp-less {display:none;}
                .art-exp-toggle:checked ~ .art-exp-toggle-link .art-exp-more-text {display:none;}
                .art-exp-toggle:checked ~ .art-exp-toggle-link .art-exp-less {display:inline;}
                .art-exp-toggle-link {cursor:pointer; margin-bottom:0;}
            </style>

            <!-- row -->
            <div class="row p-30-0">

                <!-- col -->
                <div class="col-lg-6">

                    <!-- section title -->
                    <div class="art-section-title">
                        <!-- title frame -->
                        <div class="art-title-frame">
                            <!-- title -->
                            <h4>{{ $educationTitle }}</h4>
                        </div>
                        <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                    <!-- timeline -->
                    <div class="art-timeline art-gallery">
                        @foreach ($educationItems as $item)
                            <div class="art-timeline-item">
                                <div class="art-timeline-mark-light"></div>
                                <div class="art-timeline-mark"></div>

                                <div class="art-a art-timeline-content">
                                    <div class="art-card-header">
                                        <div class="art-left-side">
                                            <h5>{{ $item['title'] }}</h5>
                                            <div class="art-el-suptitle mb-15">{{ $item['subtitle'] }}</div>
                                        </div>
                                        <div class="art-right-side">
                                            <span class="art-date">{{ $item['date'] }}</span>
                                        </div>
                                    </div>

                                    <p>{{ $item['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- timeline end -->

                </div>
                <div class="col-lg-6">

                    <!-- section title -->
                    <div class="art-section-title">
                        <!-- title frame -->
                        <div class="art-title-frame">
                            <!-- title -->
                            <h4>{{ $workTitle }}</h4>
                        </div>
                        <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                    <!-- timeline -->
                    <div class="art-timeline">
                        @foreach ($workItems as $item)
                            <div class="art-timeline-item">
                                <div class="art-timeline-mark-light"></div>
                                <div class="art-timeline-mark"></div>
                                <div class="art-a art-timeline-content">
                                    <div class="art-card-header">
                                        <div class="art-left-side">
                                            <h5>{{ $item['title'] }}</h5>
                                            <div class="art-el-suptitle mb-15">{{ $item['subtitle'] }}</div>
                                        </div>
                                        <div class="art-right-side">
                                            <span class="art-date">{{ $item['date'] }}</span>
                                        </div>
                                    </div>
                                    <p>{{ $item['desc'] }}</p>
                                    @if (!empty($item['bullets_primary']))
                                        @php
                                            $toggleId = 'exp-toggle-' . $loop->index;
                                        @endphp
                                        <ul class="art-custom-list">
                                            @foreach ($item['bullets_primary'] as $bullet)
                                                <li>{{ $bullet }}</li>
                                            @endforeach
                                        </ul>
                                        @if (!empty($item['bullets_more']))
                                            <input class="art-exp-toggle" type="checkbox" id="{{ $toggleId }}">
                                            <ul class="art-custom-list art-exp-more">
                                                @foreach ($item['bullets_more'] as $bullet)
                                                    <li>{{ $bullet }}</li>
                                                @endforeach
                                            </ul>
                                            <label class="art-link art-color-link art-exp-toggle-link" for="{{ $toggleId }}">
                                                <span class="art-exp-more-text">{{ $toggleMoreText }} &rarr;</span>
                                                <span class="art-exp-less">{{ $toggleLessText }}</span>
                                            </label>
                                        @endif
                                    @elseif (!empty($item['bullets']))
                                        <ul class="art-custom-list">
                                            @foreach ($item['bullets'] as $bullet)
                                                <li>{{ $bullet }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- timeline end -->

                </div>
                <!-- col end -->

            </div>
            <!-- row end -->

        </div>
        <!-- container end -->

        <!-- container -->
        <div class="container-fluid">
            @include('folio.layouts.footer')
        </div>
        <!-- container end -->

    </div>
    <!-- scroll frame end -->

</div>
<!-- swup container end -->
