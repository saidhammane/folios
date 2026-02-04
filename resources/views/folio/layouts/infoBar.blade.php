
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
                              <a data-fancybox="avatar" href="img/face-1.jpg" class="art-avatar-curtain">
                                  <img src="img/face-1.jpg" alt="avatar">
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
                              Data Analyst
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
                                      <h6>Residence:</h6><span>{{ $profile?->residence ?? 'Morocco' }}</span>
                                  </li>
                                  <!-- city -->
                                  <li>
                                      <h6>City:</h6><span>{{ $profile?->city ?? 'CASABLANCA' }}</span>
                                  </li>
                                  <!-- age -->
                                  <li>
                                      <h6>Age:</h6><span>{{ $profile?->age ?? '24' }}</span>
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
                                  <div class="art-skill-heading"><h6>Business Intelligence (Power BI)</h6></div>
                                  <div class="art-line-progress" data-progress="0.9"></div>
                              </div>
                              <div class="art-hard-skills-item">
                                  <div class="art-skill-heading"><h6>Data & Reporting (SQL + Excel)</h6></div>
                                  <div class="art-line-progress" data-progress="0.88"></div>
                              </div>
                              <div class="art-hard-skills-item">
                                  <div class="art-skill-heading"><h6>Data Modeling & Metrics</h6></div>
                                  <div class="art-line-progress" data-progress="0.82"></div>
                              </div>
                              <div class="art-hard-skills-item">
                                  <div class="art-skill-heading"><h6>Automation & Data Pipelines (Python)</h6></div>
                                  <div class="art-line-progress" data-progress="0.8"></div>
                              </div>
                              <div class="art-hard-skills-item">
                                  <div class="art-skill-heading"><h6>Web Dashboards (React)</h6></div>
                                  <div class="art-line-progress" data-progress="0.7"></div>
                              </div>
                          </div>
                          <!-- language skills end -->

                          <!-- divider -->
                          <div class="art-ls-divider"></div>

                          <!-- knowledge list -->
                          <ul class="art-knowledge-list p-15-0">
                              <li>KPI Dashboards • Reporting Automation • Data Quality</li>
                              <li>Dashboards • Reporting Automation • Data Quality</li>
                              <li>Business Intelligence • KPI Systems • Data Automation</li>
                          </ul>
                          <!-- knowledge list end -->

                          <!-- divider -->
                          <div class="art-ls-divider"></div>

                          <!-- links frame -->
                          <div class="art-links-frame p-15-15">

                              <!-- download cv button -->
                              <a href="files/cv.pdf" class="art-link" download>Télécharger CV<i
                                      class="fas fa-download"></i></a>

                          </div>
                          <!-- links frame end -->

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
                          <a target="_blank" href="https://x.com/overload0x"><i class="fab fa-twitter"></i></a>
                      </div>
                      <!-- sidebar social end -->

                  </div>
                  <!-- menu bar frame end -->

              </div>
              <!-- info bar end -->
