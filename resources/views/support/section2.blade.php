<!-- WEBSITE SUPPORT SECTION START -->
<section id="website-support" class="py-5" style="background-color: #f2f2fc;">
  <div class="container text-center">

    <!-- Section Heading -->
    <h2 class="fw-bold mb-3" style="font-size: 36px;">UNBEATABLE WEBSITE SUPPORT 7 DAYS A WEEK</h2>
    <p class="fs-6 text-muted mb-5">
      All our web design customers benefit from FREE ongoing website support. We don’t charge any monthly fees.
    </p>

    <!-- Key Features Cards -->
    <div class="row g-4 mb-5">
      <!-- Card 1 -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-card bg-white p-4 rounded shadow h-100">
          <div style="font-size: 40px; color: #007bff;" class="mb-3"><i class="fas fa-headset"></i></div>
          <h5 class="fw-semibold mb-2">Support</h5>
          <p class="text-muted fs-6">We provide unlimited ongoing support and respond to emails normally within a few minutes. You can contact us during the day, evening or weekend.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card bg-white p-4 rounded shadow h-100">
          <div style="font-size: 40px; color: #ff6f61;" class="mb-3"><i class="fas fa-sync-alt"></i></div>
          <h5 class="fw-semibold mb-2">Website Updates</h5>
          <p class="text-muted fs-6">All our WordPress websites come with an easy-to-use Content Management System, so you can easily update your website yourself.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-card bg-white p-4 rounded shadow h-100">
          <div style="font-size: 40px; color: #36b9cc;" class="mb-3"><i class="fas fa-cogs"></i></div>
          <h5 class="fw-semibold mb-2">Web Hosting</h5>
          <p class="text-muted fs-6">We provide premium web hosting for all our customers, which includes free SSL, domain name, unlimited web hosting and 10GB business mailboxes.</p>
        </div>
      </div>
    </div>

    <!-- Help Section -->
    <h4 class="fw-semibold mb-3" style="font-size: 20px; color: #333;">Need help with your website?</h4>
    <p class="text-muted fs-6 mb-5">We can help you with your domain name registration, WordPress plugin updates, make your current website responsive, optimise your website so you can be found on Google and more...</p>

    <!-- Additional Services Cards -->
    <div class="row g-4">
      @php
        $services = [
          ['icon' => 'fa-mobile-alt', 'color' => '#ffb602', 'title' => 'Responsive Websites', 'desc' => 'We can convert existing websites and make them responsive, so they display correctly on mobile devices and tablets.'],
          ['icon' => 'fa-sync', 'color' => '#e74a3b', 'title' => 'WordPress Updates', 'desc' => 'We have been building WordPress websites since 2004. If you have issues with your current WordPress website and need help, please get in touch.'],
          ['icon' => 'fa-tools', 'color' => '#5a6f70', 'title' => 'Website Maintenance', 'desc' => 'Do you have a website but haven’t got the time to manage it yourself? We can maintain your website on a monthly or weekly basis.'],
          ['icon' => 'fa-search', 'color' => '#007bff', 'title' => 'Search Engine Optimisation', 'desc' => 'SEO ensures your site can be seen by Google and other major search engines.'],
          ['icon' => 'fa-cloud-upload-alt', 'color' => '#36b9cc', 'title' => 'Microsoft Office 365', 'desc' => 'We can integrate your business domain name with your Microsoft Office 365 Premium services.'],
          ['icon' => 'fa-certificate', 'color' => '#1cc88a', 'title' => 'FREE SSL Certificate', 'desc' => 'Avoid "Not Secure" warnings. We provide FREE SSL with all hosting packages.'],
          ['icon' => 'fa-shield-alt', 'color' => '#ffb602', 'title' => 'Data Security', 'desc' => 'We use high-level encryption to secure your website and protect against cyber threats.'],
          ['icon' => 'fa-users', 'color' => '#ff6f61', 'title' => 'Customer Support', 'desc' => 'Our expert team provides customer support to assist with all aspects of your website management.'],
          ['icon' => 'fa-link', 'color' => '#1cc88a', 'title' => 'Link Building', 'desc' => 'Increase your search engine ranking through professional link building techniques.'],
        ];
      @endphp

      @foreach($services as $i => $service)
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
        <div class="feature-card bg-white p-4 rounded shadow h-100">
          <div style="font-size: 40px; color: {{ $service['color'] }};" class="mb-3"><i class="fas {{ $service['icon'] }}"></i></div>
          <h5 class="fw-semibold mb-2">{{ $service['title'] }}</h5>
          <p class="text-muted fs-6">{{ $service['desc'] }}</p>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>
<!-- WEBSITE SUPPORT SECTION END -->

<!-- AOS + FONT AWESOME -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- STYLES (OPTIONAL) -->
<style>
  .btn-primary {
    font-weight: bold;
    box-shadow: 0 5px 15px rgba(0, 140, 186, 0.2);
    border: 2px solid #008CBA;
    transition: all 0.3s ease-in-out;
  }
  .btn-primary:hover {
    background-color: #005f73;
    color: #fff;
    border-color: #005f73;
    transform: translateY(-5px);
  }
</style>
