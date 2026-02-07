
                <!-- info bar -->
                <div class="art-info-bar">

                  <!-- menu bar frame -->
                  <div class="art-info-bar-frame">

                      <!-- info bar header -->
                      <div class="art-info-bar-header">
                          <!-- info bar button -->
                          <a class="art-info-bar-btn">
                              <!-- icon -->
                              <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <!-- info bar button end -->
                      </div>
                      <!-- info bar header end -->

                      <!-- info bar header -->
                      <div class="art-header">
                          <!-- avatar -->
                          <div class="art-avatar">
                              <a data-fancybox="avatar" href="{{ asset('img/face-1.jpg') }}" class="art-avatar-curtain">
                                  <img src="{{ asset('img/face-1.jpg') }}" alt="avatar">
                                  <i class="fas fa-expand"></i>
                              </a>
                              <!-- available -->
                              <div class="art-lamp-light">
                                  <!-- add class 'art-not-available' if not available-->
                                  <div class="art-available-lamp"></div>
                              </div>
                          </div>
                          <!-- avatar end -->
                          <!-- name -->
                          <h5 class="art-name mb-10">
                              <a href="/folio/en/home.html">{{ $profile?->name ?? 'Said HAMMANE' }}</a>
                          </h5>
                          <!-- post -->
                          <div class="art-sm-text" style="line-height: 1.35;">
                              {{ __('folio.profile.title') }}
                          </div>
                      </div>
                      <!-- info bar header end -->

                      <!-- scroll frame -->
                      <div id="scrollbar2" class="art-scroll-frame">

                          <!-- info bar about -->
                          <div class="art-table p-15-15">
                              <!-- about text -->
                              <ul>
                                  <!-- country -->
                                  <li>
                                      <h6>{{ __('folio.profile.residence') }}:</h6><span>{{ $profile?->residence ?? 'Morocco' }}</span>
                                  </li>
                                  <!-- city -->
                                  <li>
                                      <h6>{{ __('folio.profile.city') }}:</h6><span>{{ $profile?->city ?? 'CASABLANCA' }}</span>
                                  </li>
                                  <!-- age -->
                                  <li>
                                      <h6>{{ __('folio.profile.age') }}:</h6><span>{{ $profile?->age ?? '24' }}</span>
                                  </li>
                              </ul>
                          </div>
                          <!-- info bar about end -->

                          <!-- divider -->
                          <div class="art-ls-divider"></div>

                          <!-- language skills removed -->

                          <!-- hard skills -->
                          <div class="art-hard-skills p-30-15">
                              <div class="art-hard-skills-item">
                                  <div class="art-skill-heading"><h6>{{ __('folio.skills.bi') }}</h6></div>
                                  <div class="art-line-progress" data-progress="0.9"></div>
                              </div>
                              <div class="art-hard-skills-item">
                                  <div class="art-skill-heading"><h6>{{ __('folio.skills.sql_excel') }}</h6></div>
                                  <div class="art-line-progress" data-progress="0.88"></div>
                              </div>
                              <div class="art-hard-skills-item">
                                  <div class="art-skill-heading"><h6>{{ __('folio.skills.modeling') }}</h6></div>
                                  <div class="art-line-progress" data-progress="0.82"></div>
                              </div>
                              <div class="art-hard-skills-item">
                                  <div class="art-skill-heading"><h6>{{ __('folio.skills.automation') }}</h6></div>
                                  <div class="art-line-progress" data-progress="0.8"></div>
                              </div>
                          </div>
                          <!-- language skills end -->

                          <!-- divider -->
                          <div class="art-ls-divider"></div>

                          <!-- knowledge list -->
                          <ul class="art-knowledge-list p-15-0">
                              <li>{{ __('folio.tags.kpi') }}</li>
                              <li>{{ __('folio.tags.dashboards') }}</li>
                              <li>{{ __('folio.tags.bi') }}</li>
                              <li>Autres compétences : {{ __('folio.skills.web_dash') }}</li>
                          </ul>
                          <!-- knowledge list end -->

                          <!-- divider -->
                          <div class="art-ls-divider"></div>

                          <!-- links frame -->
                          <div class="art-links-frame p-15-15">

                              <!-- download cv button -->
                              <a href="files/cv.pdf" class="art-link" download>{{ __('folio.profile.download_resume') }}<i
                                      class="fas fa-download"></i></a>

                          </div>
                          <!-- links frame end -->

                          <div class="art-links-frame p-15-15">
                              <a href="https://wa.me/212684756919" target="_blank" rel="noopener noreferrer"
                                  class="art-btn art-btn-md" style="width:100%; display:flex; align-items:center; justify-content:center; gap:10px;">
                                  <i class="fab fa-whatsapp" style="font-size:18px;"></i>
                                  <span>WhatsApp</span>
                              </a>
                          </div>

                      </div>
                      <!-- scroll frame end -->

                      <!-- sidebar social -->
                      <div class="art-ls-social">
                          <!-- social link -->
                          <a target="_blank" href="https://www.linkedin.com/in/said-hammane-07926b1a0/"><i
                                  class="fab fa-linkedin"></i></a>
                          <!-- social link -->
                          <a target="_blank" href="https://saidhammane.cloud/"><i class="fas fa-globe"></i></i></a>
                          <!-- social link -->
                          <a target="_blank" href="https://wa.me/212684756919"><i class="fab fa-whatsapp"></i></a>
                      </div>
                      <!-- sidebar social end -->

                  </div>
                  <!-- menu bar frame end -->

              </div>
              <!-- info bar end -->

