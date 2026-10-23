<?php
$slides = [
    [
        "eyebrow" => "FEATURED DESTINATION",
        "title" => "The Majestic<br>Swiss Alps",
        "description" => "Breathtaking landscapes, crystal-clear lakes and unforgettable adventures await you in the heart of Europe.",
        "image" => "https://images.unsplash.com/photo-1531366936337-7c912a4589a7?auto=format&fit=crop&w=2200&q=90",
        "alt" => "Mountain peaks and alpine landscape",
        "button" => "Explore Now"
    ],
    [
        "eyebrow" => "FIND YOUR PARADISE",
        "title" => "Escape to<br>Bali's Coast",
        "description" => "Discover turquoise waters, tropical forests and peaceful hideaways made for unforgettable moments.",
        "image" => "https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=2200&q=90",
        "alt" => "Tropical Bali landscape",
        "button" => "Discover Bali"
    ],
    [
        "eyebrow" => "A CITY TO REMEMBER",
        "title" => "Fall in Love<br>with Paris",
        "description" => "Wander romantic streets, savour local cuisine and experience the timeless charm of the City of Light.",
        "image" => "https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=2200&q=90",
        "alt" => "Paris and the Eiffel Tower",
        "button" => "Visit Paris"
    ]
];

$destinations = [
    [
        "location" => "Bali, Indonesia",
        "name" => "Tropical Paradise",
        "description" => "Sun, surf and serenity in one perfect place.",
        "price" => "$899",
        "image" => "https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=900&q=85",
        "alt" => "Turquoise tropical beach"
    ],
    [
        "location" => "Paris, France",
        "name" => "City of Love",
        "description" => "Romance, culture and timeless beauty.",
        "price" => "$1,099",
        "image" => "https://images.unsplash.com/photo-1499856871958-5b9627545d1a?auto=format&fit=crop&w=900&q=85",
        "alt" => "Paris rooftops and Eiffel Tower"
    ],
    [
        "location" => "Norway",
        "name" => "Fjord Adventures",
        "description" => "Majestic mountains, deep fjords, endless views.",
        "price" => "$1,299",
        "image" => "https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=900&q=85",
        "alt" => "Norwegian fjord surrounded by mountains"
    ],
    [
        "location" => "Swiss Alps",
        "name" => "Mountain Retreat",
        "description" => "Fresh alpine air and views worth the journey.",
        "price" => "$1,199",
        "image" => "https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=900&q=85",
        "alt" => "Alpine lake and mountains"
    ]
];
// Correct the Norway image URL to a known public Unsplash photo.
$destinations[2]["image"] = "https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=900&q=85";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Find your next unforgettable adventure with WanderMore travel experiences.">
    <title>WanderMore — Explore. Experience. Remember.</title>
    <link rel="preconnect" href="https://images.unsplash.com">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="site-header">
    <a class="brand" href="#home" aria-label="WanderMore home">
        <svg class="brand-mark" viewBox="0 0 64 42" aria-hidden="true"><path d="M3 32 20 12l10 12L40 5l21 27M12 32h45M27 20l5 6 8-12" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <span><strong>WanderMore</strong><small>Explore · Experience · Remember</small></span>
    </a>
    <button class="menu-toggle" aria-label="Open navigation" aria-expanded="false">☰</button>
    <nav class="main-nav" aria-label="Main navigation">
        <a href="#home">Home</a><a href="#destinations">Destinations</a><a href="#about">About</a><a href="#contact">Contact</a>
    </nav>
    <div class="header-actions">
        <button class="search-button" aria-label="Search destinations" title="Search destinations">⌕</button>
        <a class="outline-button" href="#destinations">Plan Your Trip</a>
    </div>
</header>

<main>
<section class="hero" id="home" aria-label="Featured destinations">
    <?php foreach ($slides as $index => $slide): ?>
    <article class="hero-slide <?= $index === 0 ? 'active' : '' ?>"
             style="--slide-image: url('<?= htmlspecialchars($slide['image'], ENT_QUOTES) ?>')"
             aria-hidden="<?= $index === 0 ? 'false' : 'true' ?>">
        <div class="hero-shade"></div>
        <div class="hero-content">
            <p class="eyebrow"><?= htmlspecialchars($slide['eyebrow']) ?></p>
            <h1><?= $slide['title'] ?></h1>
            <p class="hero-description"><?= htmlspecialchars($slide['description']) ?></p>
            <a class="primary-button" href="#destinations"><?= htmlspecialchars($slide['button']) ?> <span aria-hidden="true">→</span></a>
        </div>
    </article>
    <?php endforeach; ?>
    <button class="hero-arrow hero-prev" aria-label="Previous slide">‹</button>
    <button class="hero-arrow hero-next" aria-label="Next slide">›</button>
    <div class="hero-dots" aria-label="Choose slide">
        <?php foreach ($slides as $index => $slide): ?>
        <button class="hero-dot <?= $index === 0 ? 'active' : '' ?>" aria-label="Go to slide <?= $index + 1 ?>" aria-pressed="<?= $index === 0 ? 'true' : 'false' ?>"></button>
        <?php endforeach; ?>
    </div>
    <span class="slide-count"><b id="current-slide">1</b> / <?= count($slides) ?></span>
</section>

<section class="benefits section" id="about">
    <div class="section-heading">
        <p class="section-kicker">WHY TRAVEL WITH US?</p>
        <h2>More Than Just a Trip</h2>
        <p>We create unforgettable travel experiences with handpicked destinations,<br class="desktop-break"> trusted partners and 24/7 support.</p>
    </div>
    <div class="benefit-grid">
        <article class="benefit"><span class="benefit-icon">⌁</span><h3>Handpicked Destinations</h3><p>Carefully selected locations for the best experiences.</p></article>
        <article class="benefit"><span class="benefit-icon">♢</span><h3>Trusted Partners</h3><p>Work with local experts and reliable partners worldwide.</p></article>
        <article class="benefit"><span class="benefit-icon">♧</span><h3>24/7 Support</h3><p>We're always here to help, wherever you are.</p></article>
        <article class="benefit"><span class="benefit-icon">♧</span><h3>Sustainable Travel</h3><p>Travel responsibly and help preserve our planet.</p></article>
    </div>
</section>

<section class="destinations section" id="destinations">
    <div class="section-heading">
        <p class="section-kicker">POPULAR DESTINATIONS</p>
        <h2>Explore Our Top Picks</h2>
    </div>
    <div class="destination-wrap">
        <button class="destination-arrow destination-prev" aria-label="Scroll destinations left">‹</button>
        <div class="destination-track">
            <?php foreach ($destinations as $destination): ?>
            <article class="destination-card">
                <div class="destination-image">
                    <img src="<?= htmlspecialchars($destination['image'], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($destination['alt']) ?>" loading="lazy">
                    <span class="location-pill"><span aria-hidden="true">●</span> <?= htmlspecialchars($destination['location']) ?></span>
                </div>
                <div class="destination-info">
                    <h3><?= htmlspecialchars($destination['name']) ?></h3>
                    <p><?= htmlspecialchars($destination['description']) ?></p>
                    <div class="card-bottom"><strong>From <?= htmlspecialchars($destination['price']) ?></strong><a href="#contact" aria-label="Enquire about <?= htmlspecialchars($destination['name']) ?>">→</a></div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
        <button class="destination-arrow destination-next" aria-label="Scroll destinations right">›</button>
    </div>
</section>
</main>

<footer class="site-footer" id="contact">
    <a class="brand footer-brand" href="#home">
        <svg class="brand-mark" viewBox="0 0 64 42" aria-hidden="true"><path d="M3 32 20 12l10 12L40 5l21 27M12 32h45M27 20l5 6 8-12" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <span><strong>WanderMore</strong><small>Explore · Experience · Remember</small></span>
    </a>
    <nav class="footer-nav" aria-label="Footer navigation"><a href="#home">Home</a><a href="#destinations">Destinations</a><a href="#about">About</a><a href="mailto:hello@wandermore.example">Contact</a></nav>
    <div class="social-links" aria-label="Social links"><a href="#contact" aria-label="Facebook">f</a><a href="#contact" aria-label="Instagram">◎</a><a href="#contact" aria-label="Twitter">♥</a><a href="#contact" aria-label="YouTube">▶</a></div>
    <p class="copyright">© <?= date('Y') ?> WanderMore. All rights reserved.</p>
</footer>
<script src="script.js"></script>
</body>
</html>
