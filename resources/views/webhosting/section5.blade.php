<!-- WORDPRESS HOSTING SECTION START -->
<section style="background-color: #ffffff; padding: 80px 0;">
  <div style="max-width: 1200px; margin: 0 auto; padding: 0 40px; text-align: center;">
    
    <!-- WordPress Logo -->
    <img src="{{ asset('assets/images/pic28.png') }}" alt="WordPress Logo" style="width: 150px; margin-bottom: 40px;">
    
    <!-- LEFT CONTENT -->
    <div>
      <h2 style="font-size: 30px; font-weight: 700; color: #111; margin-bottom: 20px;">
        WEBSITE HOSTING OPTIMIZED FOR WORDPRESS
      </h2>
      <p style="font-size: 17px; color: #333; margin-bottom: 20px;">
        WordPress is the most widely used CMS worldwide, trusted by over 40% of websites globally. It’s known for its customizability, making it ideal for everything from blogs to complex e-commerce platforms.
      </p>

      <h4 style="font-size: 20px; font-weight: 600; margin-top: 40px; color: #333;">Key Features</h4>
      
      <!-- Key Features Grid -->
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 20px;">
        <div class="key-feature" style="background-color: #f8f9fa; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); opacity: 0; transform: translateY(30px); transition: all 0.3s ease;">
          <div style="font-size: 40px; color: #3366cc; text-align: center; margin-bottom: 15px;">
            <i class="fas fa-cogs"></i>
          </div>
          <h5 style="font-size: 18px; font-weight: 600; color: #333; text-align: center; margin-bottom: 10px;">
            Specialized Hosting for WordPress
          </h5>
          <p style="font-size: 16px; color: #555; text-align: center;">
            Optimized infrastructure specifically built for WordPress websites to ensure reliability and performance.
          </p>
        </div>

        <div class="key-feature" style="background-color: #f8f9fa; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); opacity: 0; transform: translateY(30px); transition: all 0.3s ease;">
          <div style="font-size: 40px; color: #ff6f61; text-align: center; margin-bottom: 15px;">
            <i class="fas fa-tachometer-alt"></i>
          </div>
          <h5 style="font-size: 18px; font-weight: 600; color: #333; text-align: center; margin-bottom: 10px;">
            Speed and Security
          </h5>
          <p style="font-size: 16px; color: #555; text-align: center;">
            Fast loading speeds and top-notch security features to keep your WordPress site safe and optimized.
          </p>
        </div>

        <div class="key-feature" style="background-color: #f8f9fa; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); opacity: 0; transform: translateY(30px); transition: all 0.3s ease;">
          <div style="font-size: 40px; color: #36b9cc; text-align: center; margin-bottom: 15px;">
            <i class="fas fa-sync-alt"></i>
          </div>
          <h5 style="font-size: 18px; font-weight: 600; color: #333; text-align: center; margin-bottom: 10px;">
            Automatic WordPress Updates
          </h5>
          <p style="font-size: 16px; color: #555; text-align: center;">
            We keep your WordPress core updated automatically to ensure that your website stays secure and up to date.
          </p>
        </div>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 20px;">
        <div class="key-feature" style="background-color: #f8f9fa; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); opacity: 0; transform: translateY(30px); transition: all 0.3s ease;">
          <div style="font-size: 40px; color: #1cc88a; text-align: center; margin-bottom: 15px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h5 style="font-size: 18px; font-weight: 600; color: #333; text-align: center; margin-bottom: 10px;">
            Secure UK Data Centers
          </h5>
          <p style="font-size: 16px; color: #555; text-align: center;">
            Our UK-based data centers provide an extra layer of security and reliability for your WordPress site.
          </p>
        </div>

        <div class="key-feature" style="background-color: #f8f9fa; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); opacity: 0; transform: translateY(30px); transition: all 0.3s ease;">
          <div style="font-size: 40px; color: #e74a3b; text-align: center; margin-bottom: 15px;">
            <i class="fas fa-headset"></i>
          </div>
          <h5 style="font-size: 18px; font-weight: 600; color: #333; text-align: center; margin-bottom: 10px;">
            Expert UK-Based Support
          </h5>
          <p style="font-size: 16px; color: #555; text-align: center;">
            Get reliable support from experts who understand WordPress hosting inside and out, available when you need it.
          </p>
        </div>
      </div>

      <h4 style="font-size: 20px; font-weight: 600; margin-top: 40px; color: #333;">Hosting Tailored for WordPress</h4>
      <p style="font-size: 17px; color: #333;">
        We offer a hosting environment designed specifically for WordPress. Our platform includes advanced load balancing, SSD storage, superior caching, and robust database management to guarantee excellent speed and reliability.
      </p>
      <p style="font-size: 17px; color: #333; margin-top: 20px;">
        As your WordPress site grows, our hosting solution scales to ensure it continues to perform at its best, regardless of traffic spikes.
      </p>
    </div>

  </div>
</section>
<!-- WORDPRESS HOSTING SECTION END -->

<!-- ANIMATION ON SCROLL SCRIPT -->
<script>
  // Scroll animation for key features
  const keyFeatures = document.querySelectorAll('.key-feature');

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = 1;
        entry.target.style.transform = "translateY(0)";
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  keyFeatures.forEach(feature => {
    observer.observe(feature);
  });
</script>
