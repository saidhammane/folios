
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
                              <button type="button" class="art-avatar-curtain" data-avatar-open>
                                  <img src="{{ asset('img/face-1.jpg') }}" alt="{{ __('folio.profile.avatar_alt') }}">
                                  <i class="fas fa-expand"></i>
                              </button>
                              <!-- available -->
                              <div class="art-lamp-light">
                                  <!-- add class 'art-not-available' if not available-->
                                  <div class="art-available-lamp"></div>
                              </div>
                          </div>
                          <div class="art-avatar-modal" aria-hidden="true">
                              <div class="art-avatar-modal__overlay" data-avatar-close></div>
                              <div class="art-avatar-modal__content" role="dialog" aria-modal="true" aria-label="Avatar">
                                  <button type="button" class="art-avatar-modal__close" aria-label="{{ __('folio.ui.close') }}" data-avatar-close>&times;</button>
                                  <img src="{{ asset('img/face-1.jpg') }}" alt="{{ __('folio.profile.avatar_alt') }}">
                              </div>
                          </div>
                          <!-- avatar end -->
                          <!-- name -->
                          <h5 class="art-name mb-10">
                              <a href="{{ route('app', ['locale' => app()->getLocale()]) }}">{{ $profile?->name ?? 'Said HAMMANE' }}</a>
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
                                      <h6>{{ __('folio.profile.residence') }}:</h6><span>{{ $profile?->residence ?? __('folio.profile.residence_value') }}</span>
                                  </li>
                                  <!-- city -->
                                  <li>
                                      <h6>{{ __('folio.profile.city') }}:</h6><span>{{ $profile?->city ?? __('folio.profile.city_value') }}</span>
                                  </li>
                                  <!-- age -->
                                  <li>
                                      <h6>{{ __('folio.profile.age') }}:</h6><span>{{ $profile?->age ?? __('folio.profile.age_value') }}</span>
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
                              <li>{{ __('folio.skills.other_prefix') }} {{ __('folio.skills.web_dash') }}</li>
                          </ul>
                          <!-- knowledge list end -->

                          <!-- divider -->
                          <div class="art-ls-divider"></div>

                          <!-- links frame -->
                          <div class="art-links-frame p-15-15">

                              <!-- download cv button -->
                              <a href="{{ route('download.cv') }}" class="art-link js-download-cv" data-no-swup download>{{ __('folio.profile.download_resume') }}<i
                                      class="fas fa-download"></i></a>

                          </div>
                          <!-- links frame end -->

                          <div class="art-links-frame p-15-15">
                              <a href="https://wa.me/212684756919" target="_blank" rel="noopener noreferrer"
                                  class="art-btn art-btn-md" style="width:100%; display:flex; align-items:center; justify-content:center; gap:10px;">
                                  <i class="fab fa-whatsapp" style="font-size:18px;"></i>
                                  <span>{{ __("folio.ui.whatsapp") }}</span>
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
                          <a target="_blank" href="https://saidhammane.space/"><i class="fas fa-globe"></i></i></a>
                          <!-- social link -->
                          <a target="_blank" href="https://wa.me/212684756919"><i class="fab fa-whatsapp"></i></a>
                      </div>
                      <!-- sidebar social end -->

                  </div>
                  <!-- menu bar frame end -->

              </div>
              <!-- info bar end -->

