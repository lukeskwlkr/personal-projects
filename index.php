
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Luxury G - Polestar da Gino Spa</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
      <a class="logo" href="#">
        <img src="assets/img/logo-gino.png" alt="LuxuryG">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#gamma">Gamma</a></li>
          <li class="nav-item"><a class="nav-link" href="#incentivi">Incentivi</a></li>
          <li class="nav-item"><a class="nav-link" href="#sede">Sede</a></li>
        </ul>
        <a href="#" class="btn btn-richiedi">Richiedi Informazioni ora</i></a>
      </div>
    </div>
  </nav>

  <!-- Hero Section (include carousel) -->
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center">

        <!-- Left Column - Text Content -->
        <div class="col-lg-6">
          <div class="hero-content">
            <h1>Polestar da Gino Spa.<br>Performance elettrica,<br>senza compromessi.</h1>
            <p>Scopri le offerte esclusive Polestar con Gino Spa, concessionaria ufficiale. Design scandinavo, tecnologia avanzata e mobilità sostenibile.</p>
            <div class="hero-buttons">
              <button class="btn" type="button">Richiedi Informazioni <i class="bi bi-arrow-right"></i></button>
              <button class="btn" type="button">Prenota un test drive</button>
            </div>
          </div>
        </div>

        <!-- Right Column - Carousel -->
        <div class="col-lg-6">
          <?php require __DIR__ . '/includes/hero-carousel.php'; ?>
        </div>

      </div>
    </div>
  </section>

  <!-- Gamma Section -->
  <section class="gamma-section" id="gamma">
    <div class="container">
      <h2>La nostra gamma Polestar</h2>
      <p class="subtitle">
        Configura la tua prossima Polestar scegliendo tra i noleggi a lungo termine disponibili.
        <br>Per te saranno inclusi:
      </p>

      <div class="features">
        <div class="feature-item">
          <img src="assets/img/settings.png" alt="settings">
          </svg>
          <p>Manutenzione</p>
        </div>

        <div class="feature-item">
          <img src="assets/img/phone.png" alt="settings">
          <p>Assistenza<br>24H/24</p>
        </div>

        <div class="feature-item">
          <img src="assets/img/shield1.png" alt="settings">
          <p>Kasko</p>
        </div>

        <div class="feature-item">
          <img src="assets/img/car.png" alt="settings">
          <p>RCA</p>
        </div>

        <div class="feature-item">
          <img src="assets/img/shield2.png" alt="settings">
          <p>Furto<br>& Incendio</p>
        </div>
      </div>

      <?php require __DIR__ . '/includes/gamma-products.php'; ?>
    </div>
  </section>

  <!-- Incentivi Section -->
   <section class="img-divider"></section>
  <section class="incentivi-section" id="incentivi">
    <div class="container">
      <div class="incentivi-content">
        <h2>Vivi la gamma Polestar con 8000€ di incentivi</h2>
        <p>Approfitta ora! Polestar oggi è ancora più conveniente grazie agli incentivi statali,<br>fino ad 8000€ per l'acquisto di una Polestar con rottamazione.</p>
        <button class="btn" type="button">Scopri di più <i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
  </section>

  <!-- Innovation Section -->
  <section class="innovation-section">
    <div class="container">
      <h2>Pensata per il futuro.<br>Guidata dall'innovazione.</h2>

      <div class="row g-5">
        <div class="col-md-4">
          <div class="innovation-card">
            <img src="assets/img/design1.jpg" alt="Design">
            <h4>Design scandinavo essenziale</h4>
            <p>Linee pulite, proporzioni equilibrate e un’estetica funzionale. Ogni Polestar nasce per eliminare il superfluo per valorizzare l’essenziale.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="innovation-card">
            <img src="assets/img/design2.jpg" alt="Tecnologia">
            <h4>Tecnologia che lavora per te</h4>
            <p>Sistemi di assistenza alla guida avanzati, per un’esperienza digitale intuitiva, sempre aggiornata.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="innovation-card">
            <img src="assets/img/design3.jpg" alt="Sostenibilità">
            <h4>Sostenibile senza compromessi</h4>
            <p>Materiali riciclati e tracciabili, processi produttivi trasparenti e un impegno concreto per ridurre l’impatto ambientale.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- About Gino & location -->
  <section class="about-gino">
    <div class="container about">
      <div class="row align-items-center">
        <div class="col-md-2 logo-base">
          <img src="assets/img/logo-gino-base.png" alt="logo-gino">
          </svg>
        </div>
        <div class="col-md-10">
          <h3>Gino S.p.A. oltre 60 anni di esperienza e innovazione</h3>
          <p>Siamo concessionaria ufficiale Polestar a Pescara al punto di riferimento per la mobilità<br>premium nel Nord-Ovest Italia. Ti accompagniamo in ogni fase, dalla scelta alla manutenzione,<br>per offrirti un servizio di eccellenza.</p>
        </div>
      </div>
    </div>

    <hr class="about-divider">

    <div class="container location">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h3>Vieni a trovarci nella nostra sede Polestar</h3>
          <p><strong>CONCESSIONARIA - Torino Gino S.p.A.</strong><br>
            Via Lando Conti 11 10042 – Nichelino (TO)
          </p>
        </div>
        <div class="col-md-4 text-end">
          <button class="btn btn-visit" type="button">Vieni a trovarci per un test drive <i class="bi bi-arrow-right"></i></button>
        </div>
      </div>
    </div>
  </section>


  <!-- Final Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row mb-3">
        <div class="logo col-12 text-center">
          <img src="assets/img/logo-gino.png" alt="LuxuryG">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <p>Gino S.p.A. | Via Torino, 234 - 12100 CUNEO - Italy | P.Iva e C.F. 00180290041</p>
          <div class="mb-3"><a href="">Privacy</a> | <a href="">Cookie policy</a></div>
          <br>
          <span >© 2026 Concept & Design - </span><a href="https://www.amalthea.it/">Amalthea – Branding & Digital Marketing</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>

<!-- Modale -->
   <div class="modal fade" id="leadModal" tabindex="-1" aria-labelledby="leadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="leadModalLabel">Richiedi informazioni o prenota un test drive</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   
                    <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
                    <script>
                      hbspt.forms.create({
                        portalId: "25303312",
                        formId: "85ca1937-033d-4491-93d1-8b16fb064ead",
                        region: "eu1"
                      });
                    </script>

                </div>
            </div>
        </div>
    </div>

   <!-- Modale -->
    <div class="mobile-cta-box">
      <a class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#leadModal">
          Richiedi informazioni
      </a>
    </div>