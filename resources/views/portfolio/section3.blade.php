<!-- WEB DESIGN PORTFOLIO FOR INSPIRATION START -->
<section style="background-color: #e8f1fb; padding: 100px 20px; text-align: center;">
  <div style="max-width: 1200px; margin: 0 auto;">

    <!-- Heading -->
    <h2 style="font-size: 36px; font-weight: bold; margin-bottom: 10px;">
      WEB DESIGN PORTFOLIO FOR INSPIRATION
    </h2>

    <!-- Paragraph -->
    <p style="max-width: 850px; margin: 0 auto 60px; font-size: 16px; color: #333;">
      Below is a small selection of website designs from our portfolio collections. They include small businesses,
      financial services and ecommerce web design projects. We have experience in creating websites for all business types.
    </p>

    <!-- First Row -->
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 40px; margin-bottom: 40px;">

      <div style="flex: 0 0 30%; max-width: 30%;">
        <div class="portfolio-card">
          <img src="{{ asset('assets/images/pic60.webp') }}" alt="Small Business" class="portfolio-image">
        </div>
        <p style="margin-top: 10px; font-style: italic;">SMALL BUSINESS</p>
      </div>

      <div style="flex: 0 0 30%; max-width: 30%;">
        <div class="portfolio-card">
          <img src="{{ asset('assets/images/pic61.webp') }}" alt="Make-Up Artist" class="portfolio-image">
        </div>
        <p style="margin-top: 10px; font-style: italic;">MAKE-UP ARTIST</p>
      </div>

      <div style="flex: 0 0 30%; max-width: 30%;">
        <div class="portfolio-card">
          <img src="{{ asset('assets/images/pic62.webp') }}" alt="Fitness Trainer" class="portfolio-image">
        </div>
        <p style="margin-top: 10px; font-style: italic;">FITNESS TRAINER</p>
      </div>

    </div>

    <!-- Second Row -->
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 40px;">

      <div style="flex: 0 0 30%; max-width: 30%;">
        <div class="portfolio-card">
          <img src="{{ asset('assets/images/pic63.webp') }}" alt="Printer" class="portfolio-image">
        </div>
        <p style="margin-top: 10px; font-style: italic;">PRINTER</p>
      </div>

      <div style="flex: 0 0 30%; max-width: 30%;">
        <div class="portfolio-card">
          <img src="{{ asset('assets/images/pic64.webp') }}" alt="Wedding" class="portfolio-image">
        </div>
        <p style="margin-top: 10px; font-style: italic;">WEDDING</p>
      </div>

      <div style="flex: 0 0 30%; max-width: 30%;">
        <div class="portfolio-card">
          <img src="{{ asset('assets/images/pic65.webp') }}" alt="Pet Care/Dog Walker" class="portfolio-image">
        </div>
        <p style="margin-top: 10px; font-style: italic;">PET CARE/DOG WALKER</p>
      </div>

    </div>

  </div>
</section>
<!-- WEB DESIGN PORTFOLIO FOR INSPIRATION END -->

<!-- Hover Effect CSS -->
<style>
  .portfolio-card {
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
  }

  .portfolio-card:hover {
    transform: translateY(-8px);
  }

  .portfolio-image {
    width: 100%;
    display: block;
    transition: transform 0.3s ease;
  }

  .portfolio-card:hover .portfolio-image {
    transform: scale(1.05);
  }

  @media (max-width: 992px) {
    div[style*="flex: 0 0 30%"] {
      flex: 0 0 45% !important;
      max-width: 45% !important;
    }
  }

  @media (max-width: 600px) {
    div[style*="flex: 0 0 30%"] {
      flex: 0 0 100% !important;
      max-width: 100% !important;
    }
  }
</style>







<!-- CONTINUED WEB DESIGN PORTFOLIO FOR INSPIRATION -->
<!-- WEB DESIGN PORTFOLIO SECTION -->
<section style="background-color: #e8f1fb; padding: 80px 20px; text-align: center;">
  <div class="portfolio-container">

    <!-- Grid -->
    <div class="portfolio-grid">

      <!-- Card 1 -->
      <div class="portfolio-item">
        <div class="portfolio-card">
          <img src="{{ asset('assets/images/pic66.webp') }}" alt="Accountant" class="portfolio-image">
        </div>
        <p class="portfolio-title">ACCOUNTANT</p>
      </div>

      <!-- Card 2 -->
      <div class="portfolio-item">
        <div class="portfolio-card">
          <img src="{{ asset('assets/images/pic67.webp') }}" alt="Electrician" class="portfolio-image">
        </div>
        <p class="portfolio-title">ELECTRICIAN</p>
      </div>

      <!-- Card 3 -->
      <div class="portfolio-item">
        <div class="portfolio-card">
          <img src="{{ asset('assets/images/pic68.webp') }}" alt="Hotel/B&B" class="portfolio-image">
        </div>
        <p class="portfolio-title">HOTEL/B&B</p>
      </div>

      <!-- Card 4 -->
      <div class="portfolio-item">
        <div class="portfolio-card">
          <img src="{{ asset('assets/images/pic69.webp') }}" alt="Gym" class="portfolio-image">
        </div>
        <p class="portfolio-title">GYM</p>
      </div>

      <!-- Card 5 -->
      <div class="portfolio-item">
        <div class="portfolio-card">
          <img src="{{ asset('assets/images/pic70.webp') }}" alt="Gardener" class="portfolio-image">
        </div>
        <p class="portfolio-title">GARDENER</p>
      </div>

      <!-- Card 6 -->
      <div class="portfolio-item">
        <div class="portfolio-card">
          <img src="{{ asset('assets/images/pic71.webp') }}" alt="Plumber" class="portfolio-image">
        </div>
        <p class="portfolio-title">PLUMBER</p>
      </div>

    </div>
  </div>
</section>

<!-- CSS -->
<style>
  .portfolio-container {
    max-width: 1200px;
    margin: 0 auto;
  }

  .portfolio-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 40px;
  }

  .portfolio-item {
    flex: 1 1 calc(33.333% - 40px);
    max-width: calc(33.333% - 40px);
    box-sizing: border-box;
  }

  .portfolio-card {
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
  }

  .portfolio-card:hover {
    transform: translateY(-8px);
  }

  .portfolio-image {
    width: 100%;
    display: block;
    transition: transform 0.3s ease;
  }

  .portfolio-card:hover .portfolio-image {
    transform: scale(1.05);
  }

  .portfolio-title {
    margin-top: 10px;
    font-style: italic;
    font-size: 16px;
    color: #222;
  }

  @media (max-width: 992px) {
    .portfolio-item {
      flex: 1 1 calc(50% - 40px);
      max-width: calc(50% - 40px);
    }
  }

  @media (max-width: 576px) {
    .portfolio-item {
      flex: 1 1 100%;
      max-width: 100%;
    }
  }
</style>
