<!-- ECOMMERCE WEBSITE PACKAGES SECTION -->
<section style="background-color: #f2f2fc; padding: 80px 0;">
  <div style="max-width: 1200px; margin: 0 auto; display: flex; gap: 40px; justify-content: space-between; align-items: center; flex-wrap: wrap;">

    <!-- LEFT CONTENT -->
    <div style="flex: 1 1 60%; min-width: 320px;">
      <h2 style="font-size: 30px; font-weight: 700; color: #111; margin-bottom: 20px;">
        Affordable E-Commerce Website Packages
      </h2>
      <p style="font-size: 17px; color: #333; margin-bottom: 20px;">
        We provide great value, affordable ecommerce website design packages. Sell your products or services online with a professionally built online store.
      </p>
      <p style="font-size: 17px; color: #333; margin-bottom: 20px;">
        Our eCommerce packages include everything you need to start selling online. The package is custom-designed with an integrated shopping cart and a responsive design.
      </p>
      <p style="font-size: 17px; color: #333; margin-bottom: 20px;">
        Each eCommerce website is optimized for search engines, and includes a domain name and SSL certificate, so your business can be secure and get discovered online.
      </p>

      <h5 class="fw-semibold" style="margin-top: 20px; font-size: 18px;">
        What's included in our eCommerce website design packages:
      </h5>
      <ul style="list-style: disc; padding-left: 20px; margin: 0; color: #222; font-size: 16px; line-height: 1.7;">
        <li>Website design & build</li>
        <li>Unlimited products</li>
        <li>PayPal shopping cart integration</li>
        <li>Custom domain name (.co.uk or .com)</li>
        <li>12 months web hosting</li>
        <li>Custom email address</li>
        <li>SSL Certificate</li>
        <li>Search Engine Optimisation (SEO)</li>
        <li>Support, 7 Days a Week</li>
      </ul>

      <h5 class="fw-semibold mt-4" style="font-size: 18px;">
        How much does it cost?
      </h5>
      <p style="font-size: 17px; color: #333; margin-bottom: 20px;">
        A single payment of £299 which includes 12 months web hosting. After the first year, you only pay for web hosting.
      </p>

      <p style="font-size: 17px; color: #333; margin-bottom: 20px;">
        Get your eCommerce business online today with our affordable web design packages. Start selling in just a couple of days!
      </p>
      
      <a href="#" class="btn btn-primary mt-4 px-5 py-2" style="font-size: 1.1rem;">
        Start my project
      </a>
    </div>

    <!-- RIGHT IMAGE WITH TRANSITION -->
    <div style="flex: 1 1 35%; min-width: 320px;">
      <img src="{{ asset('assets/images/pic15.jpg') }}" alt="Ecommerce Website" class="ecommerce-image" style="width: 100%; height: auto; border-radius: 4px;">
    </div>
  </div>

  <!-- ADDITIONAL STYLES -->
  <style>
    /* Adding the right-to-left scroll transition */
    @keyframes slideInRight {
      0% {
        transform: translateX(100%);
        opacity: 0;
      }
      100% {
        transform: translateX(0);
        opacity: 1;
      }
    }

    /* Style for the section */
    .ecommerce-section {
      background-color: #f2f2fc;
      padding: 80px 0;
    }

    /* Center image vertically */
    .ecommerce-section .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    /* Adjusting the layout for mobile view */
    @media (max-width: 768px) {
      .ecommerce-section .container {
        flex-direction: column;
        text-align: center;
      }
    }

    /* Apply animation on scroll */
    .ecommerce-image {
      opacity: 0;
      animation: slideInRight 1s forwards;
    }

    /* To trigger the animation when the element is visible */
    .ecommerce-image.is-visible {
      opacity: 1;
    }
  </style>
  
  <!-- JAVASCRIPT TO TRIGGER SCROLL EFFECT -->
  <script>
    // Detecting when the image is in the viewport
    const image = document.querySelector('.ecommerce-image');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
        }
      });
    }, { threshold: 0.5 });

    observer.observe(image);
  </script>
</section>
