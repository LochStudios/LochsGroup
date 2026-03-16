<?php
// index.php - Loch's Group main page
$title = "Loch's Group | The Group Behind the Studios";
$activePage = 'home';
ob_start();
?>

<!-- ── Hero ──────────────────────────────────────────────── -->
<section class="hero is-fullheight hero-gradient">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-half">
                    <div class="glass-card p-6">
                        <img src="4803721.png" alt="Loch's Group" style="max-width: 100%; height: auto;">
                    </div>
                </div>
                <div class="column is-half">
                    <div class="content has-text-white">
                        <h1 class="title is-1 has-text-white mb-4">
                            Welcome to <span class="has-text-warning">Loch's Group</span>
                        </h1>
                        <h2 class="subtitle is-4 has-text-white-bis mb-5">
                            The Holding Group Behind LochStudios
                        </h2>
                        <p class="is-size-5 has-text-white-bis mb-6">
                            Loch's Group is the parent organisation for all LochStudios brands and subsidiaries.
                            From digital infrastructure and web development to talent management and gaming platforms,
                            we bring together a diverse portfolio of services built to support businesses and individuals
                            across Australia and beyond.
                        </p>
                        <div class="buttons">
                            <a href="#subsidiaries" class="button modern-button is-large">
                                <span class="icon"><i class="fas fa-building"></i></span>
                                <span>Our Companies</span>
                            </a>
                            <a href="#contact" class="button is-light is-large is-rounded">
                                <span class="icon"><i class="fas fa-phone"></i></span>
                                <span>Get In Touch</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── About ─────────────────────────────────────────────── -->
<section id="about" class="section section-modern">
    <div class="container">
        <div class="has-text-centered mb-6">
            <h2 class="title is-2 gradient-text mb-4">About Loch's Group</h2>
            <p class="subtitle is-5 has-text-grey">Who we are and what drives us</p>
        </div>
        <div class="columns is-vcentered mb-6">
            <div class="column is-two-thirds">
                <div class="content">
                    <p class="is-size-5 has-text-grey-dark mb-4">
                        Loch's Group is an Australian-based holding organisation founded with a clear mission:
                        to deliver comprehensive, modern digital solutions under one trusted brand family.
                        What started as a single venture has grown into a network of specialised companies,
                        each focused on a distinct area of the digital landscape.
                    </p>
                    <p class="has-text-grey">
                        Headquartered in Sydney, New South Wales, with a presence across multiple countries,
                        we proudly serve clients in Australia, New Zealand, the United States, and the United Kingdom.
                        Our support lines run 24 hours a day, 7 days a week — because our clients' businesses
                        never stop, and neither do we.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="notification is-info is-light" style="border-radius: 16px; padding: 1.5rem;">
                    <p class="mb-3"><strong>ABN:</strong> 20 447 022 747</p>
                    <p class="mb-3"><strong>Headquarters:</strong><br>Level 5, 115 Pitt Street, Sydney NSW 2000</p>
                    <p class="mb-3"><strong>Mailing:</strong><br>PO Box 219, South Grafton NSW 2460</p>
                    <p><strong>Support:</strong> 24 / 7</p>
                </div>
            </div>
        </div>

        <!-- Values -->
        <div class="columns is-multiline">
            <div class="column is-one-third">
                <div class="value-card">
                    <div class="icon-modern" style="margin: 0 auto 1rem;">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4 class="title is-5">Innovation</h4>
                    <p class="has-text-grey">We stay ahead of the curve, building products and platforms that embrace the latest technology to deliver real-world results.</p>
                </div>
            </div>
            <div class="column is-one-third">
                <div class="value-card">
                    <div class="icon-modern" style="margin: 0 auto 1rem;">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4 class="title is-5">Reliability</h4>
                    <p class="has-text-grey">Uptime, consistency, and accountability are at the heart of everything we build and every service we provide.</p>
                </div>
            </div>
            <div class="column is-one-third">
                <div class="value-card">
                    <div class="icon-modern" style="margin: 0 auto 1rem;">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 class="title is-5">Community</h4>
                    <p class="has-text-grey">From gaming networks to talent agencies, we build communities that connect people and create lasting value.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── What We Do ─────────────────────────────────────────── -->
<section id="what-we-do" class="section section-modern has-background-light">
    <div class="container">
        <div class="has-text-centered mb-6">
            <h2 class="title is-2 gradient-text mb-4">What We Do</h2>
            <p class="subtitle is-5 has-text-grey">Eight pillars that define the Loch's Group portfolio</p>
        </div>
        <div class="pillar-grid">
            <div class="pillar-item">
                <div class="icon-modern" style="width:44px; height:44px; font-size:1.1rem; margin-bottom:0.75rem;">
                    <i class="fas fa-server"></i>
                </div>
                <p class="pillar-title">Web Hosting &amp; Infrastructure</p>
                <p>Managed hosting packages, domain services, and cloud infrastructure designed to scale with your business.</p>
            </div>
            <div class="pillar-item">
                <div class="icon-modern" style="width:44px; height:44px; font-size:1.1rem; margin-bottom:0.75rem;">
                    <i class="fas fa-globe"></i>
                </div>
                <p class="pillar-title">Web Design &amp; Development</p>
                <p>Custom website creation from concept to launch, tailored to the unique needs of each client.</p>
            </div>
            <div class="pillar-item">
                <div class="icon-modern" style="width:44px; height:44px; font-size:1.1rem; margin-bottom:0.75rem;">
                    <i class="fas fa-tools"></i>
                </div>
                <p class="pillar-title">IT Support &amp; Computer Repair</p>
                <p>On-site and remote repair, diagnostics, and maintenance for businesses and home users.</p>
            </div>
            <div class="pillar-item">
                <div class="icon-modern" style="width:44px; height:44px; font-size:1.1rem; margin-bottom:0.75rem;">
                    <i class="fas fa-photo-video"></i>
                </div>
                <p class="pillar-title">Multimedia &amp; Media Production</p>
                <p>Creative media solutions including photography, videography, and digital content production.</p>
            </div>
            <div class="pillar-item">
                <div class="icon-modern" style="width:44px; height:44px; font-size:1.1rem; margin-bottom:0.75rem;">
                    <i class="fas fa-star"></i>
                </div>
                <p class="pillar-title">Talent Management</p>
                <p>Professional agency services connecting talent with opportunities across entertainment and media industries.</p>
            </div>
            <div class="pillar-item">
                <div class="icon-modern" style="width:44px; height:44px; font-size:1.1rem; margin-bottom:0.75rem;">
                    <i class="fas fa-gamepad"></i>
                </div>
                <p class="pillar-title">Gaming &amp; Community Platforms</p>
                <p>Online gaming communities and social platforms that bring players and creators together worldwide.</p>
            </div>
            <div class="pillar-item">
                <div class="icon-modern" style="width:44px; height:44px; font-size:1.1rem; margin-bottom:0.75rem;">
                    <i class="fas fa-database"></i>
                </div>
                <p class="pillar-title">Cloud Storage &amp; Data Management</p>
                <p>Secure, accessible cloud storage solutions for businesses requiring reliable data anywhere, anytime.</p>
            </div>
            <div class="pillar-item">
                <div class="icon-modern" style="width:44px; height:44px; font-size:1.1rem; margin-bottom:0.75rem;">
                    <i class="fas fa-robot"></i>
                </div>
                <p class="pillar-title">Developer Tools &amp; Bot Services</p>
                <p>Automation bots and developer-focused tools for content creators, streamers, and community managers.</p>
            </div>
        </div>
    </div>
</section>

<!-- ── Our Companies ─────────────────────────────────────── -->
<section id="subsidiaries" class="section section-modern">
    <div class="container">
        <div class="has-text-centered mb-6">
            <h2 class="title is-2 gradient-text mb-4">Our Companies</h2>
            <p class="subtitle is-5 has-text-grey">Ten specialised brands operating under Loch's Group</p>
        </div>
        <div class="columns is-multiline">

            <div class="column is-half">
                <div class="card floating-card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon-modern"><i class="fas fa-server"></i></div>
                            </div>
                            <div class="media-content">
                                <p class="title is-5">Automated Hosting</p>
                                <p class="subtitle is-6 has-text-grey">Professional managed hosting solutions</p>
                            </div>
                        </div>
                        <div class="content">
                            <p class="has-text-grey mb-4">Scalable hosting packages for businesses of all sizes, with automated provisioning and a straightforward control panel.</p>
                            <a href="https://packages.lochstudios.com/" target="_blank" class="button is-fullwidth modern-button">
                                <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                                <span>packages.lochstudios.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-half">
                <div class="card floating-card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon-modern"><i class="fas fa-photo-video"></i></div>
                            </div>
                            <div class="media-content">
                                <p class="title is-5">LochStudios Media</p>
                                <p class="subtitle is-6 has-text-grey">Creative multimedia services</p>
                            </div>
                        </div>
                        <div class="content">
                            <p class="has-text-grey mb-4">Photography, videography, and digital media production tailored for brands, events, and content creators.</p>
                            <a href="https://media.lochstudios.com/" target="_blank" class="button is-fullwidth modern-button">
                                <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                                <span>media.lochstudios.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-half">
                <div class="card floating-card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon-modern"><i class="fas fa-globe"></i></div>
                            </div>
                            <div class="media-content">
                                <p class="title is-5">Get Your Website</p>
                                <p class="subtitle is-6 has-text-grey">Custom website creation</p>
                            </div>
                        </div>
                        <div class="content">
                            <p class="has-text-grey mb-4">End-to-end website design and development for businesses and individuals ready to establish a strong online presence.</p>
                            <a href="https://getyourwebsite.net.au/" target="_blank" class="button is-fullwidth modern-button">
                                <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                                <span>getyourwebsite.net.au</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-half">
                <div class="card floating-card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon-modern"><i class="fas fa-tools"></i></div>
                            </div>
                            <div class="media-content">
                                <p class="title is-5">LS Computer Repair</p>
                                <p class="subtitle is-6 has-text-grey">Professional IT support &amp; repair</p>
                            </div>
                        </div>
                        <div class="content">
                            <p class="has-text-grey mb-4">On-site and remote IT support, hardware repair, and diagnostics for homes and small-to-medium businesses.</p>
                            <a href="https://lscomputerrepair.com/" target="_blank" class="button is-fullwidth modern-button">
                                <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                                <span>lscomputerrepair.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-half">
                <div class="card floating-card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon-modern"><i class="fas fa-star"></i></div>
                            </div>
                            <div class="media-content">
                                <p class="title is-5">Aetia Talent Agency</p>
                                <p class="subtitle is-6 has-text-grey">Professional talent management</p>
                            </div>
                        </div>
                        <div class="content">
                            <p class="has-text-grey mb-4">Connecting talented individuals with the right opportunities in entertainment, media, and the creative industries.</p>
                            <a href="https://aetia.com.au/" target="_blank" class="button is-fullwidth modern-button">
                                <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                                <span>aetia.com.au</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-half">
                <div class="card floating-card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon-modern"><i class="fas fa-database"></i></div>
                            </div>
                            <div class="media-content">
                                <p class="title is-5">Files Anywhere Anytime</p>
                                <p class="subtitle is-6 has-text-grey">Cloud storage &amp; data management — Coming Soon</p>
                            </div>
                        </div>
                        <div class="content">
                            <p class="has-text-grey mb-4">Secure and accessible cloud storage platform built for businesses that need their data available wherever they are.</p>
                            <a href="https://filesanywhereanytime.com/" target="_blank" class="button is-fullwidth modern-button">
                                <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                                <span>filesanywhereanytime.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-half">
                <div class="card floating-card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon-modern"><i class="fas fa-gamepad"></i></div>
                            </div>
                            <div class="media-content">
                                <p class="title is-5">Sentral Network</p>
                                <p class="subtitle is-6 has-text-grey">Gaming community platform</p>
                            </div>
                        </div>
                        <div class="content">
                            <p class="has-text-grey mb-4">A centralised online gaming network and community platform connecting players and fostering competitive communities.</p>
                            <a href="https://sentral.network/" target="_blank" class="button is-fullwidth modern-button">
                                <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                                <span>sentral.network</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-half">
                <div class="card floating-card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon-modern"><i class="fas fa-cloud"></i></div>
                            </div>
                            <div class="media-content">
                                <p class="title is-5">Your Host Zone</p>
                                <p class="subtitle is-6 has-text-grey">Premium web hosting</p>
                            </div>
                        </div>
                        <div class="content">
                            <p class="has-text-grey mb-4">Premium domain registration and web hosting services with a focus on performance, reliability, and customer support.</p>
                            <a href="https://yourhostzone.com/" target="_blank" class="button is-fullwidth modern-button">
                                <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                                <span>yourhostzone.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-half">
                <div class="card floating-card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon-modern"><i class="fas fa-video"></i></div>
                            </div>
                            <div class="media-content">
                                <p class="title is-5">Your Streaming Tools</p>
                                <p class="subtitle is-6 has-text-grey">For content creators, by content creators</p>
                            </div>
                        </div>
                        <div class="content">
                            <p class="has-text-grey mb-4">A suite of streaming tools, overlays, and utilities designed to help content creators grow and deliver professional broadcasts.</p>
                            <a href="https://yourstreamingtools.com/" target="_blank" class="button is-fullwidth modern-button">
                                <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                                <span>yourstreamingtools.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-half">
                <div class="card floating-card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon-modern"><i class="fas fa-robot"></i></div>
                            </div>
                            <div class="media-content">
                                <p class="title is-5">BotOfTheSpecter</p>
                                <p class="subtitle is-6 has-text-grey">Twitch chat bot with Discord companion</p>
                            </div>
                        </div>
                        <div class="content">
                            <p class="has-text-grey mb-4">A comprehensive Twitch chat bot with an integrated Discord companion, packed with moderation, loyalty, and engagement features.</p>
                            <a href="https://botofthespecter.com/" target="_blank" class="button is-fullwidth modern-button">
                                <span class="icon"><i class="fas fa-external-link-alt"></i></span>
                                <span>botofthespecter.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ── Contact ────────────────────────────────────────────── -->
<section id="contact" class="section section-modern has-background-light">
    <div class="container">
        <div class="has-text-centered mb-6">
            <h2 class="title is-2 gradient-text mb-4">Get In Touch</h2>
            <p class="subtitle is-5 has-text-grey">We're available 24 hours a day, 7 days a week</p>
        </div>
        <div class="contact-grid">

            <div class="contact-item">
                <div class="icon-modern"><i class="fas fa-map-marker-alt"></i></div>
                <h4 class="title is-5">Our Locations</h4>
                <div class="content">
                    <p><strong>Mailing Address:</strong><br>
                    PO Box 219, South Grafton, NSW 2460, Australia</p>
                    <p><strong>Office:</strong><br>
                    Level 5, 115 Pitt Street, Sydney, NSW 2000, Australia</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="icon-modern"><i class="fas fa-phone"></i></div>
                <h4 class="title is-5">Phone Numbers</h4>
                <div class="content">
                    <p><strong>Australia:</strong> <a href="tel:+61256323092">+61 (2) 5632-3092</a></p>
                    <p><strong>New Zealand:</strong> <a href="tel:+6498731233">+64 (9) 873-1233</a></p>
                    <p><strong>United States:</strong> <a href="tel:+13158796488">+1 (315) 879-6488</a></p>
                    <p><strong>United Kingdom:</strong> <a href="tel:+442080899548">+44 2080 899 548</a></p>
                    <p><strong>Remote Support:</strong> <a href="tel:1300989567">1300 989 567</a></p>
                    <p><strong>Reception:</strong> <a href="tel:+61253222433">(02) 5322-2433</a></p>
                </div>
            </div>

            <div class="contact-item">
                <div class="icon-modern"><i class="fas fa-envelope"></i></div>
                <h4 class="title is-5">Email</h4>
                <div class="content">
                    <p><strong>Customer Care:</strong><br>
                    <a href="mailto:customercare@lochstudios.com">customercare@lochstudios.com</a></p>
                    <p><strong>Sales:</strong><br>
                    <a href="mailto:sales@lochstudios.com">sales@lochstudios.com</a></p>
                    <p><strong>Support:</strong><br>
                    <a href="mailto:support@lochstudios.com">support@lochstudios.com</a></p>
                    <p><strong>Media:</strong><br>
                    <a href="mailto:media@lochstudios.com">media@lochstudios.com</a></p>
                </div>
            </div>

            <div class="contact-item">
                <div class="icon-modern"><i class="fas fa-headset"></i></div>
                <h4 class="title is-5">Computer Repair Workshop</h4>
                <div class="content">
                    <p><strong>Phone:</strong> <a href="tel:+61256112099">(02) 5611-2099</a></p>
                    <p><strong>Office:</strong> <a href="mailto:office@lscomputerrepair.com">office@lscomputerrepair.com</a></p>
                    <p><strong>Support:</strong> <a href="mailto:support@lscomputerrepair.com">support@lscomputerrepair.com</a></p>
                    <p><strong>Billing:</strong> <a href="mailto:billing@lscomputerrepair.com">billing@lscomputerrepair.com</a></p>
                </div>
            </div>

        </div>

        <div class="has-text-centered mt-6">
            <a href="mailto:customercare@lochstudios.com" class="button modern-button is-large">
                <span class="icon"><i class="fas fa-envelope"></i></span>
                <span>Email Customer Care</span>
            </a>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include __DIR__ . '/layout.php';
?>
