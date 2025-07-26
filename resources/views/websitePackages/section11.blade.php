<!-- WEB DESIGN INSPIRATION SECTION -->
<section style="background-color: #FFFFFF; padding: 80px 0;">
  <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
    <h2 style="font-size: 36px; font-weight: 700; color: #111; margin-bottom: 20px;">
      WEB DESIGNS FOR INSPIRATION
    </h2>
    <p style="font-size: 18px; color: #333; margin-bottom: 40px;">
      Below are just a small selection of website designs. They include small businesses, financial services and ecommerce web design projects.
    </p>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(270px, 1fr)); gap: 20px;">
      <!-- Web Design Cards -->
      <div class="design-card">
        <img src="{{ asset('assets/images/pic16.jpg') }}" alt="Small Business Website" style="width: 100%; height: auto; border-radius: 10px;">
        <h4 style="font-size: 18px; font-weight: 600; color: #333; margin-top: 10px;">Small Business</h4>
      </div>
      
      <div class="design-card">
        <img src="{{ asset('assets/images/pic17.jpg') }}" style="width: 100%; height: auto; border-radius: 10px;">
        <h4 style="font-size: 18px; font-weight: 600; color: #333; margin-top: 10px;">Fitness Trainer</h4>
      </div>

      <div class="design-card">
        <img src="{{ asset('assets/images/pic18.jpg') }}" style="width: 100%; height: auto; border-radius: 10px;">
        <h4 style="font-size: 18px; font-weight: 600; color: #333; margin-top: 10px;">Wedding</h4>
      </div>

      <div class="design-card">
        <img src="{{ asset('assets/images/pic19.jpg') }}" style="width: 100%; height: auto; border-radius: 10px;">
        <h4 style="font-size: 18px; font-weight: 600; color: #333; margin-top: 10px;">Pet Care/Dog Walker</h4>
      </div>

      <div class="design-card">
        <img src="{{ asset('assets/images/pic20.jpg') }}" alt="Accountant Website" style="width: 100%; height: auto; border-radius: 10px;">
        <h4 style="font-size: 18px; font-weight: 600; color: #333; margin-top: 10px;">Accountant</h4>
      </div>

      <div class="design-card">
        <img src="{{ asset('assets/images/pic21.jpg') }}" alt="Gardener Website" style="width: 100%; height: auto; border-radius: 10px;">
        <h4 style="font-size: 18px; font-weight: 600; color: #333; margin-top: 10px;">Gardener</h4>
      </div>

      <div class="design-card">
        <img src="{{ asset('assets/images/pic22.jpg') }}" alt="Electrician Website" style="width: 100%; height: auto; border-radius: 10px;">
        <h4 style="font-size: 18px; font-weight: 600; color: #333; margin-top: 10px;">Electrician</h4>
      </div>

      <div class="design-card">
        <img src="{{ asset('assets/images/pic23.jpg') }}" alt="Plumber Website" style="width: 100%; height: auto; border-radius: 10px;">
        <h4 style="font-size: 18px; font-weight: 600; color: #333; margin-top: 10px;">Plumber</h4>
      </div>
    </div>
  </div>

  <style>
    /* Grid Layout for the Design Cards */




.design-card {
  background-color: #fff;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.design-card img {
  border-radius: 10px;
  transition: transform 0.3s ease;
}

/* Hover Effect */
.design-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
}

.design-card:hover img {
  transform: scale(1.05);
}

.design-card h4 {
  font-size: 18px;
  font-weight: 600;
  color: #333;
  margin-top: 10px;
}

h2 {
  font-size: 36px;
  font-weight: 700;
  color: #111;
  margin-bottom: 20px;
}

section p {
  font-size: 18px;
  color: #333;
  margin-bottom: 40px;
}

  </style>
</section>
