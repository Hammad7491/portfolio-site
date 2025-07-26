<!-- SECTION 4: BUSINESS WEBSITE PACKAGES -->
<section id="business" style="background-color: #f1f2fc; padding: 80px 0;">
  <div class="container">
    
    <!-- CENTERED HEADING -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-uppercase">Business Website Packages</h2>
      <h4 class="fw-semibold">Small business website design packages from £299</h4>
    </div>

    <div class="row align-items-center">
      
      <!-- LEFT CONTENT -->
      <div class="col-md-6">
        <p style="font-size: 18px;">
          Our cheap small business website design packages are perfect for new businesses on a budget.
          We include everything you need to get your business online. Hassle-free web design and <span style="color: #0056b3;">hosting</span>
          as we manage the website for you including updates. Each affordable website design is custom built,
          with a responsive web design and includes <span style="color: #0056b3;">search engine optimisation</span>.
        </p>

        <p style="font-size: 18px;" class="mt-4">
          <strong>What’s included in our website packages for small business:</strong>
        </p>

        <ul style="font-size: 18px; line-height: 1.8;">
          <li>Website design and hosting</li>
          <li>Responsive web design</li>
          <li>Custom domain name</li>
          <li>12 months free web hosting</li>
          <li>Custom email address</li>
          <li>SSL Certificate</li>
          <li>Search Engine Optimisation</li>
          <li>Facebook integration</li>
          <li>Support, 7 Days a Week</li>
        </ul>

        <p class="mt-4" style="font-size: 18px;">
          <strong>How much does it cost?</strong><br>
          A single payment of £299 which includes 12 months web hosting.<br>
          After the first year, you only pay for web hosting.
        </p>

        <p style="font-size: 18px;">
          Our great value business web design packages are the perfect solution for new businesses.
        </p>

        <a href="#contact" class="btn btn-primary mt-3">Get in touch</a>
      </div>

      <!-- RIGHT IMAGE WITH TRANSITION -->
      <div class="col-md-6">
        <img  src="{{ asset('assets/images/pic2.webp') }}" alt="Business Website Packages" class="img-fluid animate-right" style="max-width: 100%;">
      </div>
    </div>
  </div>
</section>

<!-- ANIMATION STYLES -->
<style>
  .animate-right {
    transform: translateX(100px);
    opacity: 0;
    transition: all 1s ease-out;
  }

  .animate-right.visible {
    transform: translateX(0);
    opacity: 1;
  }
</style>

<!-- JAVASCRIPT FOR SCROLL ANIMATION -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, {
      threshold: 0.1
    });

    const image = document.querySelector('.animate-right');
    if (image) {
      observer.observe(image);
    }
  });
</script>
