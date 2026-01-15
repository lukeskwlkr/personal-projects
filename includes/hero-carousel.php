<?php
// includes/hero-carousel.php

$heroSlides = [
  [
    'img' => 'assets/img/polestar2-hero.jpg',
    'alt' => 'Polestar 2',
    'title' => 'Polestar 2',
    'desc' => 'La fastback nata per il piacere della guida elettrica.',
    'prezzo_gino' => '€42.900',
    'listino' => '€45.400',
    'risparmi' => '€2.500',
    'cta' => 'Richiedi Info →'
  ],
  [
    'img' => 'assets/img/polestar4-hero.jpg',
    'alt' => 'Polestar 3',
    'title' => 'Polestar 3',
    'desc' => 'SUV premium: spazio, tecnologia, performance.',
    'prezzo_gino' => '€72.900',
    'listino' => '€76.400',
    'risparmi' => '€3.500',
    'cta' => 'Richiedi Info →'
  ],
  
];
?>

<div class="carousel-container js-hero-carousel" data-carousel="hero">
  <div class="hero-carousel-viewport">
    <div class="hero-carousel-track">
      <?php foreach ($heroSlides as $i => $s): ?>
        <div class="hero-carousel-slide" data-slide="<?php echo (int)$i; ?>">
          <div class="carousel-card">
            <img src="<?php echo htmlspecialchars($s['img']); ?>" alt="<?php echo htmlspecialchars($s['alt']); ?>">
            <h3><?php echo htmlspecialchars($s['title']); ?></h3>
            <p><?php echo htmlspecialchars($s['desc']); ?></p>
            <hr class="divider">
            <div class="price">
              <div><span class="price-label">Prezzo Gino:</span> <span class="price-value"><?php echo htmlspecialchars($s['prezzo_gino']); ?></span></div>
              <div><span class="price-label">Listino:</span> <span class="crossed-price"><?php echo htmlspecialchars($s['listino']); ?></span><span class="savings">Risparmi: <?php echo htmlspecialchars($s['risparmi']); ?></span> </div>
            </div>

            <p class="info"><?php echo htmlspecialchars($s['cta']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Carousel Controls -->
  <div class="carousel-controls">
    <button class="carousel-btn js-carousel-prev" type="button" aria-label="Precedente">‹</button>
    <button class="carousel-btn js-carousel-next" type="button" aria-label="Successivo">›</button>
  </div>
</div>
