<!-- WEBSITE DESIGN PAGES SECTION -->
<section id="design-pages" class="py-5" style="background-color: #f9f9f9;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Website design pages</h2>
            <p class="text-muted w-75 mx-auto">
                When it comes to creating your website, it's totally up to you what pages it contains. However, for search engines to effectively search and index your website, we recommend the following pages as part of your design.
            </p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-6 card-transition">
                <div class="d-flex align-items-start p-4 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-home fa-2x text-primary me-3"></i>
                    <div>
                        <h5 class="fw-bold">Home Page</h5>
                        <p class="mb-0 text-muted">This is the front page visitors land on when they visit your domain name.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-6 card-transition">
                <div class="d-flex align-items-start p-4 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-id-card-alt fa-2x text-primary me-3"></i>
                    <div>
                        <h5 class="fw-bold">About</h5>
                        <p class="mb-0 text-muted">Your about page is where you tell visitors more about your business and what you stand for.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-6 card-transition">
                <div class="d-flex align-items-start p-4 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-cogs fa-2x text-primary me-3"></i>
                    <div>
                        <h5 class="fw-bold">Products/Services</h5>
                        <p class="mb-0 text-muted">You should have a page with details about the products you sell or the services you provide.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-6 card-transition">
                <div class="d-flex align-items-start p-4 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-briefcase fa-2x text-primary me-3"></i>
                    <div>
                        <h5 class="fw-bold">Portfolio</h5>
                        <p class="mb-0 text-muted">A portfolio page is where you would showcase examples of your work.</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-6 card-transition">
                <div class="d-flex align-items-start p-4 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-phone-alt fa-2x text-primary me-3"></i>
                    <div>
                        <h5 class="fw-bold">Contact</h5>
                        <p class="mb-0 text-muted">This is where you tell visitors how to contact you. Include a map to show your location and a form.</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-6 card-transition">
                <div class="d-flex align-items-start p-4 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-file-alt fa-2x text-primary me-3"></i>
                    <div>
                        <h5 class="fw-bold">Legal Page</h5>
                        <p class="mb-0 text-muted">This is where you tell website visitors how you will process their personal data and comply with GDPR.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Animation CSS -->
<style>
.card-transition {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.8s ease-out;
}
.card-transition.visible {
    opacity: 1;
    transform: translateY(0);
}
</style>

<!-- IntersectionObserver Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll('.card-transition');

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                obs.unobserve(entry.target); // Animate only once
            }
        });
    }, {
        threshold: 0.2
    });

    cards.forEach(card => {
        observer.observe(card);
    });
});
</script>
