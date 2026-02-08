
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
    <style>
        .art-modal-overlay {position:fixed; inset:0; background:rgba(0,0,0,0.6); display:none; align-items:center; justify-content:center; padding:16px; z-index:9999; opacity:0; transition:opacity 200ms cubic-bezier(0.2,0.8,0.2,1);}
        .art-modal-overlay.is-open {display:flex;}
        .art-modal-overlay.is-visible {opacity:1;}
        .art-modal-box {background:#1f222a; border:1px solid rgba(255,255,255,0.08); border-radius:14px; box-shadow:0 12px 40px rgba(0,0,0,0.35); max-width:420px; width:100%; padding:24px; color:#f2f2f2; font-family:inherit; opacity:0; transform:translateY(12px) scale(0.98); transition:opacity 220ms cubic-bezier(0.2,0.8,0.2,1), transform 220ms cubic-bezier(0.2,0.8,0.2,1);}
        .art-modal-overlay.is-visible .art-modal-box {opacity:1; transform:translateY(0) scale(1);}
        .art-modal-title {font-size:20px; font-weight:700; margin:0 0 10px;}
        .art-modal-text {margin:0 0 18px; color:#d6d6d6;}
        .art-modal-actions {display:flex; gap:10px; flex-wrap:wrap;}
        .art-btn-primary {background:#ffb400; color:#1b1e24; border:none; border-radius:10px; padding:12px 16px; font-weight:700; cursor:pointer; transition:transform 120ms ease, box-shadow 120ms ease;}
        .art-btn-primary:hover {transform:scale(1.02); box-shadow:0 8px 24px rgba(0,0,0,0.35);}
        .art-btn-primary:active {transform:scale(0.98);}
        .art-modal-icon {color:#ffb400; margin-right:8px;}
    </style>
    <!-- floating whatsapp -->
    <a href="https://wa.me/212684756919" target="_blank" rel="noopener noreferrer" aria-label="Contacter sur WhatsApp"
        class="art-whatsapp-fab">
        <i class="fab fa-whatsapp"></i>
    </a>
    <script>
        (function () {
            function initContactForm() {
                const form = document.querySelector('.art-contact-form[data-ajax="true"]');
                if (!form || form.dataset.bound === 'true') return;
                form.dataset.bound = 'true';

                const submitBtn = form.querySelector('.art-submit');
                const btnText = submitBtn ? submitBtn.querySelector('.btn-text') : null;

                // Stable success state: modal stays visible until user clicks OK.
                let showSuccess = false;
                let successOverlay;

                function setShowSuccess(next) {
                    showSuccess = !!next;
                    if (showSuccess) openSuccessModal();
                    else closeSuccessModal();
                }

                function ensureSuccessOverlay() {
                    if (successOverlay) return successOverlay;

                    successOverlay = document.createElement('div');
                    successOverlay.className = 'art-modal-overlay';
                    successOverlay.style.display = 'none';
                    successOverlay.innerHTML = `
                        <div class="art-modal-box" role="dialog" aria-modal="true" aria-labelledby="success-title" aria-describedby="success-text">
                            <div class="art-modal-title" id="success-title">Message envoy&eacute; <span aria-hidden="true">&#9989;</span></div>
                            <p class="art-modal-text" id="success-text">Merci ! Je vous r&eacute;ponds rapidement.</p>
                            <div class="art-modal-actions">
                                <button type="button" class="art-btn-primary" data-modal-ok>OK</button>
                            </div>
                        </div>
                    `;
                    document.body.appendChild(successOverlay);

                    successOverlay
                        .querySelector('[data-modal-ok]')
                        ?.addEventListener('click', () => setShowSuccess(false));

                    return successOverlay;
                }

                function openSuccessModal() {
                    const overlay = ensureSuccessOverlay();
                    overlay.style.display = 'flex';
                    overlay.classList.add('is-open');
                    requestAnimationFrame(() => overlay.classList.add('is-visible'));
                    overlay.querySelector('[data-modal-ok]')?.focus();
                }

                function closeSuccessModal() {
                    if (!successOverlay) return;
                    successOverlay.classList.remove('is-visible');
                    successOverlay.classList.remove('is-open');
                    successOverlay.style.display = 'none';
                }

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
                            setShowSuccess(true);
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
