<!-- INCLUDED FEATURES -->
<section class="included-features bg-light py-5">
  <div class="container">

    <!-- Section Title -->
    <div class="text-center mb-5">
      <h2 class="fw-bold">What's included with every website design</h2>
      <p class="text-muted">Our affordable web design comes with everything you need.</p>
    </div>

    <!-- Grid -->
    <div class="row gy-4">
      @php
        $features = [
          ['icon' => 'fas fa-pen-nib', 'title' => 'Bespoke Web Design', 'desc' => 'A custom built website designed to your specific requirements. We include an unlimited amount of revisions.'],
          ['icon' => 'fas fa-mobile-alt', 'title' => 'Responsive Web Design', 'desc' => "All of our designs are mobile friendly, so no matter what device your website is being viewed on, it'll look great!"],
          ['icon' => 'fab fa-wordpress', 'title' => 'CMS', 'desc' => 'You can edit the images and text at any time, with an easy to use Content Management System, or we can do the updates for you.'],
          ['icon' => 'fas fa-globe', 'title' => 'Domain Name', 'desc' => 'We include a free .co.uk or .com domain with all of our web designs, registered in your name for 12 months.'],
          ['icon' => 'fas fa-cloud', 'title' => 'Web Hosting', 'desc' => 'Our super fast hosting is 100% SSD and scalable, for ultimate performance and reliability. Included for 12 months.'],
          ['icon' => 'fas fa-lock', 'title' => 'SSL Certificate (Free)', 'desc' => 'SSL is the standard technology for keeping an internet connection secure and safeguarding any sensitive data.'],
          ['icon' => 'fas fa-envelope', 'title' => 'Business Email', 'desc' => 'All our web packages include 10GB business mailboxes which will match your domain for that professional look.'],
          ['icon' => 'fas fa-search', 'title' => 'SEO', 'desc' => 'We optimise your website to increase its visibility when people search for your business using Google, Bing, etc.'],
          ['icon' => 'fas fa-paper-plane', 'title' => 'Contact Form', 'desc' => 'Receive form submissions instantly by email. The most convenient way for clients to get in touch with you.'],
          ['icon' => 'fab fa-facebook-f', 'title' => 'Social Media', 'desc' => 'Add social media links on your website to help you grow your followers.'],
          ['icon' => 'fas fa-map-marker-alt', 'title' => 'Google Map', 'desc' => 'Adding a Google map to your website helps local customers or visitors get directions to your business.'],
          ['icon' => 'fas fa-headset', 'title' => 'Support', 'desc' => 'We provide unlimited ongoing support and respond to emails normally within a few minutes.']
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
