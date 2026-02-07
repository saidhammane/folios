<!-- swup container -->
<div class="transition-fade" id="swup">

    <!-- scroll frame -->
    <div id="scrollbar" class="art-scroll-frame">

        <!-- container -->
        <div class="container-fluid">

            @php
                $isFr = app()->getLocale() === 'fr';

                $educationTitle = $isFr ? 'Formation' : 'Education';
                $workTitle = $isFr ? 'Exp&eacute;riences professionnelles' : 'Work History';
                $toggleMoreText = $isFr ? 'Voir plus' : 'Show more';
                $toggleLessText = $isFr ? 'Voir moins' : 'Show less';

                $educationItems = $isFr
                    ? [
                        [
                            'title' => 'Institut Sup&eacute;rieur d&#39;Ing&eacute;nierie &amp; des Affaires (ISGA), Casablanca',
                            'subtitle' => "Dipl&ocirc;me d'Ing&eacute;nieur d'&Eacute;tat (en cours)",
                            'date' => '2024 &ndash; Pr&eacute;sent',
                            'desc' => "Dipl&ocirc;me orient&eacute; Data/IA et analyse pour r&eacute;soudre des probl&eacute;matiques m&eacute;tier.",
                        ],
                        [
                            'title' => 'FSJES Ain Seba&acirc;, Universit&eacute; Hassan II de Casablanca, Maroc',
                            'subtitle' => 'Licence professionnelle',
                            'date' => '2021 - 2022',
                            'desc' => "Programme combinant informatique et gestion, orient&eacute; conception et mise en oeuvre de solutions SI pour l'entreprise.",
                        ],
                        [
                            'title' => 'Lyc&eacute;e Moulay Ismail, Mekn&egrave;s, Maroc',
                            'subtitle' => 'Brevet de Technicien Sup&eacute;rieur (BTS)',
                            'date' => '2019 - 2021',
                            'desc' => "Bases solides en d&eacute;veloppement web/desktop et gestion de bases de donn&eacute;es.",
                        ],
                    ]
                    : [
                        [
                            'title' => 'Higher Institute of Engineering &amp; Business (ISGA) Casablanca',
                            'subtitle' => 'State Engineer Diploma (in progress)',
                            'date' => '2024 - Present',
                            'desc' => 'Currently pursuing an advanced degree focused on innovative technologies, including AI and data analysis, to solve complex business problems.',
                        ],
                        [
                            'title' => 'FSJES Ain Seba&acirc;, Hassan II University Casablanca, Morocco',
                            'subtitle' => "Professional Bachelor's Degree",
                            'date' => 'From 2021 to 2022',
                            'desc' => 'Completed a program blending IT and business management, emphasizing the design and implementation of IT solutions for enterprises.',
                        ],
                        [
                            'title' => 'Moulay Ismail High School Meknes, Morocco',
                            'subtitle' => 'Advanced Technician Certificate (BTS)',
                            'date' => 'From 2019 to 2021',
                            'desc' => 'Gained practical skills in IT system development, including web and desktop application development, and database management.',
                        ],
                    ];

                $workItems = $isFr
                    ? [
                        [
                            'title' => 'Autoplus | Maghreb Accessoires',
                            'subtitle' => 'Charg&eacute; de projet BI &amp; DATA',
                            'date' => 'janv. 2025 - janv. 2026',
                            'desc' => "D&eacute;veloppement et maintien de solutions d&eacute;cisionnelles bas&eacute;es sur Power BI, optimisation des donn&eacute;es et automatisation des reportings.",
                            'bullets_primary' => [
                                'Conception de tableaux de bord Power BI (ventes, stock, achats, finance).',
                                'Mod&eacute;lisation (mod&egrave;le &eacute;toile), DAX, Power Query : nettoyage, fusion, transformations.',
                                'Connexion aux sources (SAP HANA, SQL Server, PostgreSQL, MySQL).',
                                'Rafra&icirc;chissements planifi&eacute;s + optimisation des temps de chargement.',
                                'Cr&eacute;ation de KPI et indicateurs de performance.',
                                'Collaboration avec les &eacute;quipes m&eacute;tiers + contr&ocirc;le qualit&eacute; des donn&eacute;es.',
                            ],
                            'bullets_more' => [
                                'Documentation technique (datasets, KPI, mod&egrave;le, flux).',
                                'Participation aux flux ETL (SSIS/Power Query) : extraction, transformation, automatisation.',
                            ],
                        ],
                        [
                            'title' => 'Autoplus &mdash; Support SAP Business One',
                            'subtitle' => 'Charg&eacute; de d&eacute;veloppement et support SAP',
                            'date' => 'janv. 2024 - d&eacute;c. 2024',
                            'desc' => "Support fonctionnel et technique sur SAP Business One (HANA &amp; SQL Server), d&eacute;veloppement d'outils internes et gestion des incidents utilisateurs.",
                            'bullets' => [
                                'Support SAP B1 (L1/L2) : r&eacute;solution d&#39;incidents, assistance utilisateurs, formation.',
                                'Param&eacute;trage SAP B1 (achats, ventes, stock, comptabilit&eacute;, logistique).',
                                'Reprise/migration de donn&eacute;es HANA &amp; SQL Server.',
                                'D&eacute;veloppement d&#39;AddOns SAP en C# (SDK) pour automatiser et &eacute;tendre les fonctionnalit&eacute;s.',
                                'Optimisation et &eacute;criture de requ&ecirc;tes SQL, T-SQL et SAP HANA.',
                                'Cr&eacute;ation de rapports et &eacute;tats (Crystal Reports).',
                                'R&eacute;daction de proc&eacute;dures internes et documentation technique.',
                            ],
                        ],
                        [
                            'title' => 'KSoft, Maroc',
                            'subtitle' => 'D&eacute;veloppeur .NET',
                            'date' => 'mai 2023 - ao&ucirc;t 2023',
                            'desc' => "Participation &agrave; la refonte d'une application desktop et &agrave; son &eacute;volution vers une solution plus moderne. C#/.NET, ASP.NET et DevExpress.",
                        ],
                        [
                            'title' => 'On Wave Group, USA',
                            'subtitle' => 'D&eacute;veloppeur full-stack web - Freelance',
                            'date' => 'f&eacute;vrier 2023 - avril 2023',
                            'desc' => "Conception et d&eacute;veloppement d'une solution SaaS (UI, API, backend) avec Node.js et MySQL. Livraison de bout en bout &agrave; distance.",
                        ],
                        [
                            'title' => 'MDCALLCENTER, Maroc',
                            'subtitle' => 'D&eacute;veloppeur Laravel',
                            'date' => 'f&eacute;vrier 2023 - avril 2023',
                            'desc' => "D&eacute;veloppement d'une solution SaaS avec Laravel : back-end, int&eacute;grations, et front-end HTML/CSS/JS.",
                        ],
                        [
                            'title' => 'KSoft, Maroc',
                            'subtitle' => "Stage de fin d'&eacute;tudes (Master) - D&eacute;veloppeur .NET",
                            'date' => 'mai 2022 - juillet 2022',
                            'desc' => "Automatisation de traitements de donn&eacute;es internes avec .NET et Windows Server pour am&eacute;liorer l'efficacit&eacute; op&eacute;rationnelle.",
                        ],
                        [
                            'title' => 'SIRWAH, Maroc',
                            'subtitle' => "Stage de fin d'&eacute;tudes (BTS) - D&eacute;veloppeur .NET",
                            'date' => 'mai 2022 - juillet 2022',
                            'desc' => "D&eacute;veloppement d'une application desktop de suivi des factures (Sage100c) avec .NET et SQL Server.",
                        ],
                    ]
                    : [
                        [
                            'title' => 'Autoplus | Maghreb Accessoires',
                            'subtitle' => 'BI &amp; Data Project Specialist',
                            'date' => 'Jan 2025 - Jan 2026',
                            'desc' => 'Built and maintained decision-ready Power BI solutions, optimized datasets, and automated reporting for business teams.',
                            'bullets_primary' => [
                                'Designed Power BI dashboards (sales, inventory, purchasing, finance).',
                                'Data modeling (star schema), DAX, and Power Query (cleaning, merges, transformations).',
                                'Connected to sources (SAP HANA, SQL Server, PostgreSQL, MySQL).',
                                'Scheduled refresh + optimized performance and load times.',
                                'Defined KPIs and performance indicators.',
                                'Worked with business teams + ensured data quality.',
                            ],
                            'bullets_more' => [
                                'Technical documentation (datasets, KPIs, model, flows).',
                                'Contributed to ETL flows (SSIS/Power Query): extraction, transformation, automation.',
                            ],
                        ],
                        [
                            'title' => 'Autoplus &mdash; SAP Business One Support',
                            'subtitle' => 'SAP Development and Support Specialist',
                            'date' => 'Jan 2024 - Dec 2024',
                            'desc' => 'Functional and technical support for SAP Business One (HANA & SQL Server), internal tooling, and incident management.',
                            'bullets' => [
                                'L1/L2 support: incident resolution, user assistance, and training.',
                                'SAP B1 configuration (purchasing, sales, inventory, accounting, logistics).',
                                'Data migrations and imports (HANA & SQL Server).',
                                'Developed SAP AddOns in C# (SDK) to automate and extend features.',
                                'Wrote and optimized SQL/T-SQL and SAP HANA queries.',
                                'Built reports (Crystal Reports) and operational exports.',
                                'Created internal procedures and technical documentation.',
                            ],
                        ],
                        [
                            'title' => 'KSoft, Morocco',
                            'subtitle' => '.Net Developer',
                            'date' => 'May 2023 - August 2023',
                            'desc' => 'I contributed to the redesign of a desktop application into a modern solution, using C#/.Net, ASP.NET, and DevExpress to improve usability and performance.',
                        ],
                        [
                            'title' => 'On Wave Group, USA',
                            'subtitle' => 'Full Stack Web Developer - Freelancer',
                            'date' => 'February 2023 - April 2023',
                            'desc' => 'As a freelancer, I built a SaaS solution end-to-end (UI, backend, APIs) using HTML/CSS/JavaScript, Node.js, and MySQL, delivering remotely.',
                        ],
                        [
                            'title' => 'MDCALLCENTER, Morocco',
                            'subtitle' => 'Laravel Developer',
                            'date' => 'February 2023 - April 2023',
                            'desc' => 'I helped develop a SaaS solution using Laravel, implementing features and integrations, plus front-end work with HTML, CSS, and JavaScript.',
                        ],
                        [
                            'title' => 'KSoft, Morocco',
                            'subtitle' => ".Net Developer (End-of-Studies Internship - Master's Degree)",
                            'date' => 'May 2022 - July 2022',
                            'desc' => 'I automated internal data processing to improve operational efficiency using the .Net Framework and Windows Server.',
                        ],
                        [
                            'title' => 'SIRWAH, Morocco',
                            'subtitle' => '.Net Developer (End-of-Studies Internship - BTS)',
                            'date' => 'May 2022 - July 2022',
                            'desc' => 'I developed a desktop application to track invoices for Sage100c, using the .Net Framework and SQL Server.',
                        ],
                    ];
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
                            <h4>{!! $educationTitle !!}</h4>
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
                                            <h5>{!! $item['title'] !!}</h5>
                                            <div class="art-el-suptitle mb-15">{!! $item['subtitle'] !!}</div>
                                        </div>
                                        <div class="art-right-side">
                                            <span class="art-date">{!! $item['date'] !!}</span>
                                        </div>
                                    </div>

                                    <p>{!! $item['desc'] !!}</p>
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
                            <h4>{!! $workTitle !!}</h4>
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
                                            <h5>{!! $item['title'] !!}</h5>
                                            <div class="art-el-suptitle mb-15">{!! $item['subtitle'] !!}</div>
                                        </div>
                                        <div class="art-right-side">
                                            <span class="art-date">{!! $item['date'] !!}</span>
                                        </div>
                                    </div>
                                    <p>{!! $item['desc'] !!}</p>
                                    @if (!empty($item['bullets_primary']))
                                        <ul class="art-custom-list">
                                            @foreach ($item['bullets_primary'] as $bullet)
                                                <li>{!! $bullet !!}</li>
                                            @endforeach
                                        </ul>
                                        @if (!empty($item['bullets_more']))
                                            @php
                                                $toggleId = 'work-more-' . $loop->index;
                                            @endphp
                                            <input class="art-exp-toggle" type="checkbox" id="{{ $toggleId }}">
                                            <ul class="art-custom-list art-exp-more">
                                                @foreach ($item['bullets_more'] as $bullet)
                                                    <li>{!! $bullet !!}</li>
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
                                                <li>{!! $bullet !!}</li>
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
