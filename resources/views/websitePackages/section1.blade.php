<!-- SECTION 1: HERO SECTION -->
<section class="hero-section" style="background-image: url('{{ asset('assets/images/banner1.webp') }}'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
  <!-- Overlay to make text more visible -->
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.4); z-index: 1;"></div>

  <div class="container text-center" style="position: relative; z-index: 2;">
    <!-- Title -->
    <h1 class="fw-bold text-white" style="font-size: 3.5rem; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);">Affordable Website Packages for Your Business</h1>

    <!-- Subtext -->
    <p class="text-white" style="font-size: 1.25rem; max-width: 700px; margin: 0 auto; text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.6);">
      Our budget-friendly website design packages provide everything you need to get your business online quickly and efficiently, with great hosting and exceptional support.
    </p>

    <!-- CTA Button -->
    <a href="#package" class="btn btn-primary mt-4 px-5 py-2" style="font-size: 1.1rem; background-color: #007bff; border: none; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); transition: background-color 0.3s;">
      Get Started Now
    </a>
  </div>

  <!-- Remove Shutterstock watermark -->
  <style>
    .hero-section::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: inherit;
      z-index: -1;
    }
  </style>
</section>
