<!-- WEBSITE DESIGN PAGES SECTION -->
<section id="design-pages" class="py-5" style="background-color: #f9f9f9;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Pages included in your website</h2>
            <p class="text-muted w-75 mx-auto">
                You can choose which pages to include in your website — it’s completely your decision. 
                However, for better visibility in search engine results, we suggest including the following pages as part of your site.
            </p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-6 card-transition">
                <div class="d-flex align-items-start p-4 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-home fa-2x text-primary me-3"></i>
                    <div>
                        <h5 class="fw-bold">Home Page</h5>
                        <p class="mb-0 text-muted">This is the main landing page that users see when they visit your website.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-6 card-transition">
                <div class="d-flex align-items-start p-4 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-id-card-alt fa-2x text-primary me-3"></i>
                    <div>
                        <h5 class="fw-bold">About</h5>
                        <p class="mb-0 text-muted">Use this page to share your business story, values, and what makes you unique.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-6 card-transition">
                <div class="d-flex align-items-start p-4 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-cogs fa-2x text-primary me-3"></i>
                    <div>
                        <h5 class="fw-bold">Products/Services</h5>
                        <p class="mb-0 text-muted">This section highlights what you offer, including product or service details.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-6 card-transition">
                <div class="d-flex align-items-start p-4 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-briefcase fa-2x text-primary me-3"></i>
                    <div>
                        <h5 class="fw-bold">Portfolio</h5>
                        <p class="mb-0 text-muted">Showcase your past work or case studies to demonstrate your expertise.</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-6 card-transition">
                <div class="d-flex align-items-start p-4 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-phone-alt fa-2x text-primary me-3"></i>
                    <div>
                        <h5 class="fw-bold">Contact</h5>
                        <p class="mb-0 text-muted">Let users know how to reach you. Include a contact form and a map if possible.</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-6 card-transition">
                <div class="d-flex align-items-start p-4 bg-light rounded shadow-sm h-100">
                    <i class="fas fa-file-alt fa-2x text-primary me-3"></i>
                    <div>
                        <h5 class="fw-bold">Legal Page</h5>
                        <p class="mb-0 text-muted">Share details about how you handle personal data and follow GDPR rules.</p>
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
