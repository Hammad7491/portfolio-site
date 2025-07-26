<!-- FAQ SECTION -->
<section class="py-5 position-relative" style="background-color: #e9e9f4;" id="faqs">
  <div class="container py-4">
    <h2 class="text-center fw-bold mb-5">Frequently Asked Questions</h2>

    <div class="row justify-content-center">
      <div class="col-md-10">

        <!-- FAQ ITEMS -->
        <div class="faq-item mb-4">
          <h6 class="fw-bold">Can I get a website made for my local business?</h6>
          <p>Absolutely! We provide website development services for businesses across all regions and niches.</p>
        </div>

        <div class="faq-item mb-4">
          <h6 class="fw-bold">Our budget is small, can we still afford a website?</h6>
          <p>No worries! We offer affordable packages for small businesses. Just <a href="#">contact us</a> and we’ll guide you through.</p>
        </div>

        <div class="faq-item mb-4">
          <h6 class="fw-bold">What’s the average cost to build a website?</h6>
          <p>Our basic packages start from as low as £299, covering domain, hosting, SSL, SEO, and email setup.</p>
        </div>

        <div class="faq-item mb-4">
          <h6 class="fw-bold">How much time is needed to build a website?</h6>
          <p>Most websites are ready in 3–5 working days depending on the scope. E-commerce sites may take slightly longer.</p>
        </div>

        <div class="faq-item mb-4">
          <h6 class="fw-bold">Will my website be mobile responsive?</h6>
          <p>Yes! All our websites work seamlessly on mobiles, tablets, and desktops.</p>
        </div>

        <div class="faq-item mb-4">
          <h6 class="fw-bold">Can I use my own domain and hosting?</h6>
          <p>Yes, if you already have a domain or hosting, we can connect and configure everything for you.</p>
        </div>

        <div class="faq-item mb-4">
          <h6 class="fw-bold">Will you help with SEO setup?</h6>
          <p>Basic SEO is included in all packages. We also offer advanced SEO as an optional add-on.</p>
        </div>

        <div class="faq-item mb-4">
          <h6 class="fw-bold">Can I get a business email with the website?</h6>
          <p>Yes, we include custom business email setup (10GB per mailbox) with your domain.</p>
        </div>

        <div class="faq-item mb-4">
          <h6 class="fw-bold">Is there support after website delivery?</h6>
          <p>We offer 15 days free support post-delivery and additional maintenance plans if needed.</p>
        </div>

        <div class="faq-item mb-0">
          <h6 class="fw-bold">Do you offer custom designs or use templates?</h6>
          <p>We do both. Depending on your budget and preference, we create either a fully custom design or adapt a premium template.</p>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- FAQ STYLING -->
<style>
  .faq-item {
    border-bottom: 1px solid #ccc;
    padding-bottom: 15px;
    animation: fadeInUp 0.6s ease forwards;
    opacity: 0;
    transform: translateY(30px);
  }

  .faq-item h6 {
    margin-bottom: 10px;
  }

  @keyframes fadeInUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Scroll trigger */
  .faq-item.show {
    animation: fadeInUp 0.6s ease forwards;
  }
</style>

<!-- SCROLL ANIMATION SCRIPT -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".faq-item");
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    items.forEach(item => {
      observer.observe(item);
    });
  });
</script>
