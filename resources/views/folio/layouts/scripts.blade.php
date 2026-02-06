
    <!-- jquery js -->
    <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
    <!-- anime js -->
    <script src="{{ asset('js/plugins/anime.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/plugins/swiper.min.js') }}"></script>
    <!-- progressbar js -->
    <script src="{{ asset('js/plugins/progressbar.min.js') }}"></script>
    <!-- smooth scrollbar js -->
    <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
    <!-- overscroll js -->
    <script src="{{ asset('js/plugins/overscroll.min.js') }}"></script>
    <!-- typing js -->
    <script src="{{ asset('js/plugins/typing.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('js/plugins/isotope.min.js') }}"></script>
    <!-- fancybox js -->
    <script src="{{ asset('js/plugins/fancybox.min.js') }}"></script>
    <!-- swup js -->
    <script src="{{ asset('js/plugins/swup.min.js') }}"></script>


    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        document.getElementById("currentYear").textContent = new Date().getFullYear();
    </script>
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        (function () {
            function initContactForm() {
                const form = document.querySelector('.art-contact-form[data-ajax="true"]');
                if (!form || form.dataset.bound === 'true') return;
                form.dataset.bound = 'true';

                const submitBtn = form.querySelector('.art-submit');
                const btnText = submitBtn ? submitBtn.querySelector('.btn-text') : null;

                form.addEventListener('submit', async (e) => {
                    e.preventDefault();

                    const name = form.querySelector('input[name="name"]')?.value.trim();
                    const email = form.querySelector('input[name="email"]')?.value.trim();
                    const subject = form.querySelector('input[name="subject"]')?.value.trim();
                    const message = form.querySelector('textarea[name="message"]')?.value.trim();

                    if (!name || !email || !subject || !message) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Missing fields',
                            text: 'Please fill in all fields before sending.'
                        });
                        return;
                    }

                    if (submitBtn) {
                        submitBtn.classList.add('is-loading');
                        submitBtn.setAttribute('disabled', 'disabled');
                    }
                    if (btnText) btnText.textContent = 'Sending...';

                    try {
                        const formData = new FormData(form);
                        const response = await fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
                            },
                            body: formData
                        });

                        if (response.ok) {
                            form.reset();
                            Swal.fire({
                                icon: 'success',
                                title: 'Message sent',
                                text: 'Thank you! I will get back to you soon.'
                            });
                            return;
                        }

                        if (response.status === 422) {
                            const data = await response.json();
                            const messages = Object.values(data.errors || {}).flat().join('\n');
                            Swal.fire({
                                icon: 'error',
                                title: 'Validation error',
                                text: messages || 'Please check your input and try again.'
                            });
                            return;
                        }

                        const errorText = await response.text();
                        Swal.fire({
                            icon: 'error',
                            title: 'Send failed',
                            text: errorText || 'Something went wrong. Please try again.'
                        });
                    } catch (err) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Network error',
                            text: 'Could not send your message. Please try again.'
                        });
                    } finally {
                        if (submitBtn) {
                            submitBtn.classList.remove('is-loading');
                            submitBtn.removeAttribute('disabled');
                        }
                        if (btnText) btnText.textContent = 'Send message';
                    }
                });
            }

            initContactForm();
            document.addEventListener('swup:contentReplaced', initContactForm);
        })();
    </script>
