<?php
// includes/gamma-products.php

$products = [
  [
    'name' => 'Polestar 2',
    'subtitle' => 'Noleggio a lungo termine',
    'image' => 'assets/img/polestar2.jpg',
    'prezzo_gino' => '€380',
    'listino' => '€400',
    'risparmi' => '€20'
  ],
  [
    'name' => 'Polestar 3',
    'subtitle' => 'Noleggio a lungo termine',
    'image' => 'assets/img/polestar3.jpg',
    'prezzo_gino' => '€720',
    'listino' => '€755',
    'risparmi' => '€35'
  ],
  [
    'name' => 'Polestar 4',
    'subtitle' => 'Noleggio a lungo termine',
    'image' => 'assets/img/polestar4.jpg',
    'prezzo_gino' => '€520',
    'listino' => '€550',
    'risparmi' => '€30'
  ],
  [
    'name' => 'Polestar 5',
    'subtitle' => 'Noleggio a lungo termine',
    'image' => 'assets/img/polestar5.jpg',
    'prezzo_gino' => '€1.250',
    'listino' => '€1.300',
    'risparmi' => '€50'
  ]
];
?>

<div class="row">
  <?php foreach ($products as $product): ?>
    <div class="col-md-6">
      <div class="product-card">
        <h3><?php echo htmlspecialchars($product['name']); ?></h3>
        <p class="subtitle-card"><?php echo htmlspecialchars($product['subtitle']); ?></p>
        <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">

        <div class="price">
          <div class="price-row price-gino">
            <span class="price-label">Prezzo Gino:</span>
            <span class="price-value"><?php echo htmlspecialchars($product['prezzo_gino']); ?>/mese + IVA</span>
          </div>

          <div class="price-row">
            <span class="price-label">Listino:</span>
            <span class="crossed-price"><?php echo htmlspecialchars($product['listino']); ?>/mese + IVA</span>
          </div>

          <div class="price-row green">
            <span class="price-label">Risparmi:</span>
            <span class="price-value"><?php echo htmlspecialchars($product['risparmi']); ?>/mese</span>
          </div>
        </div>

        <button class="btn" type="button">Richiedi Offerta</button>
      </div>
    </div>
  <?php endforeach; ?>
</div>
