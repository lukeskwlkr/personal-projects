
        
        
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('mainNavbar');
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Chiusura automatica navbar mobile dopo click
    document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
        link.addEventListener('click', function() {
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                bsCollapse.hide();
            }
        });
    });
    
    
    // Smooth scroll per anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '#contactModal') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const offsetTop = target.offsetTop - 80; // Offset per navbar fissa
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });



    //Parallax Effect Hero
    window.addEventListener('scroll',function() {
        const scrolled = window.pageYOffset;
        const heroImage = document.querySelector('.hero-img');
        if (heroImage){
            heroImage.style.transform = 'translateY(' + scrolled * 0.5 + 'px)';
        } 

    });



/// Form handling
document.addEventListener('DOMContentLoaded', function() {
    console.log('Aston Martin Website Loaded');

    // Form validation and submission
    const contactForm = document.getElementById('contactForm');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            e.stopPropagation();

            // Check if form is valid
            if (contactForm.checkValidity() === false) {
                contactForm.classList.add('was-validated');
                return;
            }

            // Get form data
            const formData = new FormData(contactForm);
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });

            console.log('Form data:', data);

            // Reset form after 3 seconds and close modal
            setTimeout(function() {
                contactForm.reset();
                contactForm.classList.remove('was-validated');
                contactForm.style.display = 'block';
                document.getElementById('formSuccess').style.display = 'none';

                // Close modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('leadModal'));
                if (modal) {
                    modal.hide();
                }
            }, 3000);
        });
    }


    // Reset form when modal is closed
    const leadModal = document.getElementById('leadModal');
    if (leadModal) {
        leadModal.addEventListener('hidden.bs.modal', function() {
            contactForm.reset();
            contactForm.classList.remove('was-validated');
            contactForm.style.display = 'block';
            document.getElementById('formSuccess').style.display = 'none';
        });
    }
});
