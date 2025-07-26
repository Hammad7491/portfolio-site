<!-- WEB DESIGN PACKAGE FEATURES SECTION -->
<section style="background-color: #f2f2fc; padding: 80px 0;">
  <div style="max-width: 1200px; margin: 0 auto; display: flex; gap: 40px; justify-content: space-between; align-items: center; flex-wrap: wrap; text-align: center;">
    <h2 style="width: 100%; font-size: 30px; font-weight: 700; color: #111; margin-bottom: 40px;">
      WEB DESIGN PACKAGE FEATURES
    </h2>

    <!-- Feature Cards -->
    <div class="feature-card" style="flex: 1 1 30%; min-width: 270px; background-color: #fff; border-radius: 10px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">
      <div class="icon" style="font-size: 40px; color: #4e73df; margin-bottom: 20px;">
        <i class="fas fa-pencil-alt"></i>
      </div>
      <h4 style="font-size: 20px; font-weight: 600; color: #333; margin-bottom: 20px;">Bespoke Web Design</h4>
      <p style="font-size: 16px; color: #555;">
        We design your website closely following your requirements. Our bespoke web design includes an unlimited number of revisions.
      </p>
    </div>

    <div class="feature-card" style="flex: 1 1 30%; min-width: 270px; background-color: #fff; border-radius: 10px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">
      <div class="icon" style="font-size: 40px; color: #ff6f61; margin-bottom: 20px;">
        <i class="fas fa-mobile-alt"></i>
      </div>
      <h4 style="font-size: 20px; font-weight: 600; color: #333; margin-bottom: 20px;">Mobile Website Design</h4>
      <p style="font-size: 16px; color: #555;">
        All of our designs include mobile website design, so no matter what device your website is being viewed on, it'll look great!
      </p>
    </div>

    <div class="feature-card" style="flex: 1 1 30%; min-width: 270px; background-color: #fff; border-radius: 10px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">
      <div class="icon" style="font-size: 40px; color: #36b9cc; margin-bottom: 20px;">
        <i class="fas fa-globe"></i>
      </div>
      <h4 style="font-size: 20px; font-weight: 600; color: #333; margin-bottom: 20px;">Domain Name</h4>
      <p style="font-size: 16px; color: #555;">
        We include a .co.uk or .com domain name with all of our web designs, registered in your name for 12 months.
      </p>
    </div>

    <div class="feature-card" style="flex: 1 1 30%; min-width: 270px; background-color: #fff; border-radius: 10px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">
      <div class="icon" style="font-size: 40px; color: #1cc88a; margin-bottom: 20px;">
        <i class="fas fa-cloud"></i>
      </div>
      <h4 style="font-size: 20px; font-weight: 600; color: #333; margin-bottom: 20px;">Cloud Web Hosting</h4>
      <p style="font-size: 16px; color: #555;">
        Our cloud web hosting is 100% SSD and scalable for ultimate performance and reliability. Included for 12 months.
      </p>
    </div>

    <div class="feature-card" style="flex: 1 1 30%; min-width: 270px; background-color: #fff; border-radius: 10px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">
      <div class="icon" style="font-size: 40px; color: #ffb602; margin-bottom: 20px;">
        <i class="fas fa-lock"></i>
      </div>
      <h4 style="font-size: 20px; font-weight: 600; color: #333; margin-bottom: 20px;">SSL Certificate</h4>
      <p style="font-size: 16px; color: #555;">
        We add an SSL Certificate to ensure information is kept secure and private. (https:// prefix)
      </p>
    </div>

    <div class="feature-card" style="flex: 1 1 30%; min-width: 270px; background-color: #fff; border-radius: 10px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">
      <div class="icon" style="font-size: 40px; color: #e74a3b; margin-bottom: 20px;">
        <i class="fas fa-search"></i>
      </div>
      <h4 style="font-size: 20px; font-weight: 600; color: #333; margin-bottom: 20px;">Search Engine Optimisation</h4>
      <p style="font-size: 16px; color: #555;">
        Every website we create is optimised for search engines, to help your website rank higher in Google and other major search engines.
      </p>
    </div>

    <div class="feature-card" style="flex: 1 1 30%; min-width: 270px; background-color: #fff; border-radius: 10px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); margin-bottom: 30px;">
      <div class="icon" style="font-size: 40px; color: #5a6f70; margin-bottom: 20px;">
        <i class="fas fa-cogs"></i>
      </div>
      <h4 style="font-size: 20px; font-weight: 600; color: #333; margin-bottom: 20px;">Feature Packed Websites</h4>
      <p style="font-size: 16px; color: #555;">
        We can include forms, maps, image and video galleries, social media and more.
      </p>
    </div>
  </div>
</section>

<!-- ADDITIONAL STYLES -->
<style>
  /* Style for the feature cards */
  .feature-card {
    opacity: 0; /* Initially hidden */
    transform: translateY(30px); /* Move the card down initially */
    transition: all 0.6s ease-out; /* Apply transition to opacity and transform */
  }

  .feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    cursor: pointer;
  }

  .feature-card.is-visible {
    opacity: 1; /* Make cards visible */
    transform: translateY(0); /* Reset position */
  }

  .feature-card .icon {
    text-align: center;
    margin-bottom: 20px;
  }

  .feature-card h4 {
    font-size: 20px;
    font-weight: 600;
    color: #333;
    margin-bottom: 20px;
  }

  .feature-card p {
    font-size: 16px;
    color: #555;
  }

  /* Scroll Animation */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .feature-card {
    animation: fadeInUp 1s forwards;
  }

  .feature-card:nth-child(even) {
    animation-delay: 0.3s;
  }

  .feature-card:nth-child(odd) {
    animation-delay: 0.6s;
  }
</style>

<!-- JAVASCRIPT FOR SCROLL EFFECT -->
<script>
  const cards = document.querySelectorAll('.feature-card');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
      }
    });
  }, { threshold: 0.3 });

  cards.forEach(card => observer.observe(card));
</script>
