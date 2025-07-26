<!-- LATEST NEWS SECTION -->
<section class="py-5 position-relative" style="background-color: #ececfa;">
  <div class="container text-center py-5">
    
    <!-- Title -->
    <h2 class="fw-bold mb-3">Latest News & Updates</h2>
    
    <!-- Subtext -->
    <p class="mb-5" style="font-size: 18px;">
      Discover highlights from our recent web design work for startups and small businesses.
    </p>

    <!-- News Items -->
    <div class="row justify-content-center">
      <!-- News 1 -->
      <div class="col-md-4 mb-4 news-box aos-init" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('assets/images/pic11.jpg') }}" class="img-fluid shadow rounded" alt="News 1">
        <h6 class="fw-bold mt-3">Virtual County Fair Website Launch</h6>
        <p>We built a digital platform for the County Fair, attracting 4,100+ users and viewed by over 50,000 people globally.</p>
      </div>

      <!-- News 2 -->
      <div class="col-md-4 mb-4 news-box aos-init" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('assets/images/pic12.jpg') }}" class="img-fluid shadow rounded" alt="News 2">
        <h6 class="fw-bold mt-3">Small Business Website Package</h6>
        <p>Ideal for startups, our brochure-style websites include hosting, emails, SEO and more to get you online fast.</p>
      </div>

      <!-- News 3 -->
      <div class="col-md-4 mb-4 news-box aos-init" data-aos="fade-up" data-aos-delay="300">
        <img src="{{ asset('assets/images/pic13.jpg') }}" class="img-fluid shadow rounded" alt="News 3">
        <h6 class="fw-bold mt-3">Affordable Site for Local Nursery</h6>
        <p>Designed a cost-effective custom website with SEO, emails, hosting and domain — all under £200!</p>
      </div>
    </div>
  </div>

  <!-- Bottom Wave -->
  <div class="custom-wave-bottom-news"></div>
</section>

<!-- STYLING -->
<style>
  .custom-wave-bottom-news {
    width: 100%;
    height: 60px;
    background: #ececfa;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 1;
    border-top-left-radius: 50% 20%;
    border-top-right-radius: 50% 20%;
  }

  .news-box {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }

  .news-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  }
</style>

<!-- SCROLL ANIMATION -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>
