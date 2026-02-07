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

            <!-- row -->
            <div class="row p-30-0">

                <div class="col-lg-12">
                    <h4 class="mb-10">Démo KPI (48h)</h4>
                    <div class="art-sm-text mb-30">Je vous prépare une démo KPI sur vos données (Excel/CSV/SQL) en 48h.</div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-card">
                        <h5 class="mb-10">Démo KPI (48h) — Ce que vous recevez</h5>
                        <ul class="portfolio-list">
                            <li>1 page KPI (10 indicateurs)</li>
                            <li>Filtres + vues (ventes / stock / performance)</li>
                            <li>Connexion SQL (si disponible) + requêtes optimisées / préparation dataset</li>
                            <li>Nettoyage + structuration des données (si besoin)</li>
                            <li>Vidéo explicative courte</li>
                            <li>1 révision incluse</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-card">
                        <h5 class="mb-10">Comment ça se passe ?</h5>
                        <ol class="portfolio-steps">
                            <li>Vous envoyez un export Excel/CSV (ventes/stock).</li>
                            <li>Je construis une démo Power BI en 48h.</li>
                            <li>Livraison + ajustements (1 révision).</li>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-card">
                        <h5 class="mb-10">Pour qui ?</h5>
                        <div>
                            <span class="portfolio-chip">PME</span>
                            <span class="portfolio-chip">Distribution</span>
                            <span class="portfolio-chip">Retail</span>
                            <span class="portfolio-chip">E-commerce</span>
                            <span class="portfolio-chip">Cabinets comptables</span>
                            <span class="portfolio-chip">Équipes commerciales</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-card portfolio-cta">
                        <h5 class="mb-5">Demander une démo</h5>
                        <div class="art-sm-text">Prêt à voir un aperçu sur vos propres données ?</div>
                        <a class="art-btn art-btn-md" href="{{ route('contact', ['locale' => app()->getLocale()]) }}" aria-label="Aller à la page Contact"><span>Aller à la page Contact →</span></a>
                        <div class="art-sm-text">WhatsApp ou formulaire, au choix.</div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio-card">
                        <h5 class="mb-10">FAQ</h5>
                        <div class="mb-10"><strong>Vos données sont-elles partagées ?</strong><br>Non. Je travaille uniquement sur vos exports. Aucun accès à vos systèmes.</div>
                        <div class="mb-10"><strong>Quel format ?</strong><br>Excel/CSV. Si besoin, je vous aide à préparer l’export.</div>
                        <div><strong>Délais ?</strong><br>48h pour une démo KPI.</div>
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
