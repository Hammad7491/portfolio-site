<!-- WORDPRESS HOSTING SECTION START -->
<section id="wordpress-hosting" class="py-5" style="background-color: #ffffff;">
  <div class="container text-center">

    <!-- WordPress Logo -->
    <img src="{{ asset('assets/images/pic28.png') }}" alt="WordPress Logo" class="img-fluid mb-4" style="width: 150px;">

    <!-- Headline -->
    <h2 class="fw-bold mb-3" style="font-size: 30px; color: #111;">WEBSITE HOSTING OPTIMIZED FOR WORDPRESS</h2>
    <p class="fs-6 text-muted mb-5" style="max-width: 800px; margin: auto;">
      WordPress is the most widely used CMS worldwide, trusted by over 40% of websites globally. It’s known for its customizability, making it ideal for everything from blogs to complex e-commerce platforms.
    </p>

    <!-- Key Features Title -->
    <h4 class="fw-semibold mb-4" style="font-size: 20px; color: #333;">Key Features</h4>

    <!-- Features Grid -->
    <div class="row g-4">
      @php
        $features = [
          [
            'icon' => 'fas fa-cogs',
            'color' => '#3366cc',
            'title' => 'Specialized Hosting for WordPress',
            'desc'  => 'Optimized infrastructure specifically built for WordPress websites to ensure reliability and performance.'
          ],
          [
            'icon' => 'fas fa-tachometer-alt',
            'color' => '#ff6f61',
            'title' => 'Speed and Security',
            'desc'  => 'Fast loading speeds and top-notch security features to keep your WordPress site safe and optimized.'
          ],
          [
            'icon' => 'fas fa-sync-alt',
            'color' => '#36b9cc',
            'title' => 'Automatic WordPress Updates',
            'desc'  => 'We keep your WordPress core updated automatically to ensure that your website stays secure and up to date.'
          ],
          [
            'icon' => 'fas fa-shield-alt',
            'color' => '#1cc88a',
            'title' => 'Secure UK Data Centers',
            'desc'  => 'Our UK-based data centers provide an extra layer of security and reliability for your WordPress site.'
          ],
          [
            'icon' => 'fas fa-headset',
            'color' => '#e74a3b',
            'title' => 'Expert UK-Based Support',
            'desc'  => 'Get reliable support from experts who understand WordPress hosting inside and out, available when you need it.'
          ],
        ];
      @endphp

      @foreach($features as $index => $feature)
        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="{{ 100 * $index }}">
          <div class="bg-light rounded shadow p-4 h-100">
            <div class="mb-3" style="font-size: 40px; color: {{ $feature['color'] }};">
              <i class="{{ $feature['icon'] }}"></i>
            </div>
            <h5 class="fw-semibold" style="font-size: 18px; color: #333;">{{ $feature['title'] }}</h5>
            <p class="text-muted fs-6">{{ $feature['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>

    <!-- Hosting Tailored -->
    <h4 class="fw-semibold mt-5" style="font-size: 20px; color: #333;">Hosting Tailored for WordPress</h4>
    <p class="fs-6 text-muted mx-auto" style="max-width: 800px;">
      We offer a hosting environment designed specifically for WordPress. Our platform includes advanced load balancing, SSD storage, superior caching, and robust database management to guarantee excellent speed and reliability.
    </p>
    <p class="fs-6 text-muted mt-3 mx-auto" style="max-width: 800px;">
      As your WordPress site grows, our hosting solution scales to ensure it continues to perform at its best, regardless of traffic spikes.
    </p>

  </div>
</section>
<!-- WORDPRESS HOSTING SECTION END -->
