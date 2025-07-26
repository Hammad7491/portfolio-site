<!-- CMS WEB DESIGN PACKAGES SECTION -->
<section style="background-color: #ffffff; padding: 80px 0;">
  <div style="max-width: 1200px; margin: 0 auto; padding: 0 40px;">
    
    <!-- Section Heading -->
    <div style="text-align: center; margin-bottom: 40px;">
      <h2 style="font-size: 36px; font-weight: bold;">CMS WEB DESIGN PACKAGES</h2>
      <h3 style="font-size: 24px; font-weight: 600; margin-top: 10px;">WORDPRESS WEBSITE DESIGN PACKAGES FROM £299</h3>
    </div>

    <!-- Section Content -->
    <div style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center; justify-content: space-between;">
      <!-- Image Column with Transition -->
      <div class="animate-left" style="flex: 1 1 45%; min-width: 280px;">
        <img src="{{ asset('assets/images/pic14.jpg') }}" alt="CMS Web Design" style="max-width: 100%; border-radius: 6px;">
      </div>

      <!-- Text Column -->
      <div style="flex: 1 1 50%; min-width: 300px;">
        <p style="font-size: 17px; color: #333;">
          Perfect for a small business looking for a cheap CMS website design. Our <span style="color: #3366cc;">WordPress</span> website designs include an easy-to-use Content Management System, so you can edit the images and text at any time. Every WordPress website package is custom designed and works great across different devices and browsers.
        </p>

        <p style="font-size: 17px; color: #333;">We include everything you need with our great value WordPress websites.</p>

        <ul style="font-size: 16px; color: #222; line-height: 1.8; padding-left: 20px;">
          <li>Website design & build</li>
          <li>Responsive design</li>
          <li>Custom domain name (.co.uk or .com)</li>
          <li>12 months web hosting</li>
          <li>Professional email address to match your domain</li>
          <li>SSL Certificate</li>
          <li>Search Engine Optimisation (SEO)</li>
          <li>Support, 7 Days a Week</li>
        </ul>

        <p style="font-weight: 600; margin-top: 20px;">How much does it cost?</p>
        <p style="font-size: 16px; color: #333;">
          A single payment of £299 which includes 12 months web hosting. After the first year, you only pay for web hosting.
        </p>
      </div>
    </div>

    <!-- Bottom Note -->
    <div style="margin-top: 40px; text-align: center;">
      <p style="font-size: 16px;">
        While our standard WordPress websites meet the needs for most businesses, we do offer custom WordPress web design packages and pricing.
        <br>Please get in touch to discuss a bespoke solution for your new business website.
      </p>
      <a href="#contact" style="display: inline-block; margin-top: 20px; padding: 10px 25px; font-size: 16px; background-color: #3366cc; color: white; border-radius: 6px; text-decoration: none;">Contact us</a>
    </div>
  </div>

  <!-- SCROLL ANIMATION -->
  <style>
    .animate-left {
      opacity: 0;
      transform: translateX(-50px);
      transition: all 0.8s ease-in-out;
    }
    .animate-left.visible {
      opacity: 1;
      transform: translateX(0);
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
          }
        });
      });

      const image = document.querySelector('.animate-left');
      if (image) observer.observe(image);
    });
  </script>
</section>
