<!-- swup container -->
<div class="transition-fade" id="swup">

    <!-- scroll frame -->
    <div id="scrollbar" class="art-scroll-frame">

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row p-30-0">

                <!-- col -->
                <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                        <!-- title frame -->
                        <div class="art-title-frame">
                            <!-- title -->
                            <h4>{{ __('folio.contact.info_title') }}</h4>
                        </div>
                        <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                </div>
                <!-- col end -->
                <!-- col -->
                <div class="col-lg-4">
                    <!-- contact card -->
                    <div class="art-a art-card">
                        <div class="art-table p-15-15">
                            <ul>
                                <li>
                                    <h6>{{ __('folio.contact.country') }}:</h6><span>{{ __('folio.contact.country_value') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- contact card end -->
                </div>
                <!-- col end -->
                <!-- col -->
                <div class="col-lg-4">
                    <!-- contact card -->
                    <div class="art-a art-card">
                        <div class="art-table p-15-15">
                            <ul>
                                <li>
                                    <h6>{{ __('folio.contact.email') }}:</h6><span>{{ __('folio.contact.email_value') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- contact card end -->
                </div>
                <!-- col end -->
                <!-- col -->
                <div class="col-lg-4">
                    <!-- contact card -->
                    <div class="art-a art-card">
                        <div class="art-table p-15-15">
                            <ul>
                                <li>
                                    <h6>{{ __('folio.contact.personal') }}:</h6><span>{{ __('folio.contact.personal_value') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- contact card end -->

                </div>
                <!-- col end -->

                <!-- col -->
                <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                        <!-- title frame -->
                        <div class="art-title-frame">
                            <!-- title -->
                            <h4>{{ __('folio.contact.get_in_touch') }}</h4>
                        </div>
                        <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                    <!-- contact form frame -->
                    <div class="art-a art-card">

                        <!-- contact form -->
                        <form class="art-contact-form" method="POST"
                            action="{{ route('send-mail', ['locale' => app()->getLocale()]) }}"
                            data-ajax="true">
                            @csrf
                            <!-- form field -->
                            <div class="art-form-field">
                                <!-- name input -->
                                <input id="name" name="name" class="art-input" type="text"
                                    placeholder="{{ __('folio.contact.name_placeholder') }}">
                                <!-- label -->
                                <label for="name"><i class="fas fa-user"></i></label>
                            </div>
                            <!-- form field end -->
                            <!-- form field -->
                            <div class="art-form-field">
                                <!-- email input -->
                                <input id="email" name="email" class="art-input" type="email"
                                    placeholder="{{ __('folio.contact.email_placeholder') }}">
                                <!-- label -->
                                <label for="email"><i class="fas fa-at"></i></label>
                            </div>
                            <!-- form field end -->
                            <!-- form field -->
                            <div class="art-form-field">
                                <!-- name input -->
                                <input id="subject" name="subject" class="art-input" type="text"
                                    placeholder="{{ __('folio.contact.subject_placeholder') }}">
                                <!-- label -->
                                <label for="subject"><i class="fas fa-earth"></i></label>
                            </div>
                            <!-- form field end -->
                            <!-- form field -->
                            <div class="art-form-field">
                                <!-- message textarea -->
                                <textarea id="message" name="message" class="art-input"
                                    placeholder="{{ __('folio.contact.message_placeholder') }}"></textarea>
                                <!-- label -->
                                <label for="message"><i class="far fa-envelope"></i></label>
                            </div>
                            <!-- form field end -->
                            <!-- button -->
                            <div class="art-submit-frame">
                                <button class="art-btn art-btn-md art-submit" type="submit">
                                    <span class="btn-text">{{ __('folio.contact.send_message') }}</span>
                                    <span class="btn-loader" aria-hidden="true"></span>
                                </button>
                                <!-- success -->
                                <div class="art-success">{{ __('folio.ui.success_inline') }} <i class="fas fa-check"></i></div>
                            </div>
                        </form>
                        <!-- contact form end -->

                    </div>
                    <!-- contact form frame end -->

                </div>
                <!-- col end -->

            </div>
            <!-- row end -->

        </div>
        <!-- container end -->


        @include('folio.layouts.footer')

    </div>
    <!-- scroll frame end -->

</div>
<!-- swup container end -->

<style>
    .art-submit {
        position: relative;
    }

    .art-submit.is-loading {
        pointer-events: none;
        opacity: 0.85;
    }

    .art-submit .btn-loader {
        display: none;
        width: 14px;
        height: 14px;
        margin-left: 10px;
        border: 2px solid rgba(255, 255, 255, 0.4);
        border-top-color: #fff;
        border-radius: 50%;
        animation: btnSpin 0.8s linear infinite;
    }

    .art-submit.is-loading .btn-loader {
        display: inline-block;
    }

    @keyframes btnSpin {
        to {
            transform: rotate(360deg);
        }
    }
</style>
