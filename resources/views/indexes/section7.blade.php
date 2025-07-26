<!-- INCLUDED FEATURES -->
<section class="included-features bg-light py-5" id="standard-package">
  <div class="container">

    <!-- Section Title -->
    <div class="text-center mb-5">
      <h2 class="fw-bold">What comes with every website we build</h2>
      <p class="text-muted">Our budget-friendly websites come packed with all the essentials you need.</p>
    </div>

    <!-- Grid -->
    <div class="row gy-4">
      @php
        $features = [
          ['icon' => 'fas fa-pen-nib', 'title' => 'Custom Website Design', 'desc' => 'Your site is tailor-made to fit your needs, and we offer unlimited revisions until you’re happy.'],
          ['icon' => 'fas fa-mobile-alt', 'title' => 'Mobile-Friendly Design', 'desc' => 'Our websites are fully responsive, so they look great on phones, tablets, and desktops.'],
          ['icon' => 'fab fa-wordpress', 'title' => 'Content Management System', 'desc' => 'Easily update text and images anytime, or let us manage changes for you.'],
          ['icon' => 'fas fa-globe', 'title' => 'Free Domain Name', 'desc' => 'We include a .co.uk or .com domain, registered in your name for the first 12 months.'],
          ['icon' => 'fas fa-cloud', 'title' => 'High-Speed Hosting', 'desc' => 'Enjoy 12 months of fast, SSD-based hosting designed for reliability and performance.'],
          ['icon' => 'fas fa-lock', 'title' => 'Free SSL Certificate', 'desc' => 'SSL keeps your website secure and protects users’ data while they browse.'],
          ['icon' => 'fas fa-envelope', 'title' => 'Professional Email', 'desc' => 'You’ll get 10GB business email inboxes that match your domain for a polished appearance.'],
          ['icon' => 'fas fa-search', 'title' => 'Search Engine Optimisation', 'desc' => 'We help your site get noticed on Google, Bing, and other major search engines.'],
          ['icon' => 'fas fa-paper-plane', 'title' => 'Easy Contact Form', 'desc' => 'Visitors can send messages straight to your email using a built-in contact form.'],
          ['icon' => 'fab fa-facebook-f', 'title' => 'Social Media Integration', 'desc' => 'Link your social profiles to help grow your online presence.'],
          ['icon' => 'fas fa-map-marker-alt', 'title' => 'Google Map Embed', 'desc' => 'Adding a map makes it easier for local customers to find your business.'],
          ['icon' => 'fas fa-headset', 'title' => 'Reliable Support', 'desc' => 'We offer unlimited help and usually respond to your messages within minutes.']
        ];
      @endphp

      @foreach ($features as $feature)
        <div class="col-md-4 feature-transition">
          <div class="feature-box h-100">
            <div class="icon"><i class="{{ $feature['icon'] }}"></i></div>
            <h5 class="fw-semibold">{{ $feature['title'] }}</h5>
            <p>{{ $feature['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <!-- STYLES -->
  <style>
    .included-features {
      background-color: #f1f1fc;
    }

    .feature-box {
      background: #ffffff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.05);
      height: 100%;
      transition: all 0.7s ease;
    }

    /* Scroll transition */
    .feature-transition {
      opacity: 0;
      transform: translate(-50px, -50px);
      transition: all 0.8s ease;
    }

    .feature-transition.visible {
      opacity: 1;
      transform: translate(0, 0);
    }

    .feature-box .icon {
      font-size: 30px;
      color: #4066ff;
      margin-bottom: 12px;
    }
  </style>

  <!-- SCROLL SCRIPT -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const cards = document.querySelectorAll(".feature-transition");

      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            obs.unobserve(entry.target); // Run only once
          }
        });
      }, { threshold: 0.2 });

      cards.forEach(card => observer.observe(card));
    });
  </script>
</section>
