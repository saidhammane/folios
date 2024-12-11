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
                            <h4>Contact information</h4>
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
                                    <h6>Country:</h6><span>Morocco</span>
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
                                    <h6>Email:</h6><span>said.hammane1@gmail.com</span>
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
                                    <h6>Personal:</h6><span>+212684756919</span>
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
                            <h4>Get in touch</h4>
                        </div>
                        <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                    <!-- contact form frame -->
                    <div class="art-a art-card">

                        <!-- contact form -->
                        <form  class="art-contact-form" action="send-mail"> 
                            <!-- form field -->
                            <div class="art-form-field">
                                <!-- name input -->
                                <input id="name" name="name" class="art-input" type="text" placeholder="Name"
                                    required>
                                <!-- label -->
                                <label for="name"><i class="fas fa-user"></i></label>
                            </div>
                            <!-- form field end -->
                            <!-- form field -->
                            <div class="art-form-field">
                                <!-- email input -->
                                <input id="email" name="email" class="art-input" type="email"
                                    placeholder="Email" required>
                                <!-- label -->
                                <label for="email"><i class="fas fa-at"></i></label>
                            </div>
                            <!-- form field end -->
                            <!-- form field -->
                            <div class="art-form-field">
                                <!-- name input -->
                                <input id="subject" name="subject" class="art-input" type="text" placeholder="Subject"
                                    required>
                                <!-- label -->
                                <label for="subject"><i class="fas fa-earth"></i></label>
                            </div>
                            <!-- form field end -->
                            <!-- form field -->
                            <div class="art-form-field">
                                <!-- message textarea -->
                                <textarea id="message" name="text" class="art-input" placeholder="Message" required></textarea>
                                <!-- label -->
                                <label for="message"><i class="far fa-envelope"></i></label>
                            </div>
                            <!-- form field end -->
                            <!-- button -->
                            <div class="art-submit-frame">
                                <button class="art-btn art-btn-md art-submit" type="submit"><span>Send
                                        message</span></button>
                                <!-- success -->
                                <div class="art-success">Success <i class="fas fa-check"></i></div>
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