<!-- SHOWCASE SECTION START -->
<section style="background-color:#F2F2FC; padding: 80px 0;"id="get">
  <div style="max-width: 1200px; margin: 0 auto; padding: 0 40px; display: flex; gap: 40px; justify-content: space-between; align-items: flex-start; flex-wrap: wrap;">

    <!-- LEFT CONTENT -->
    <div style="flex: 1 1 60%; min-width: 320px;">
      <h2 style="font-size: 30px; font-weight: 700; color: #111; margin-bottom: 20px;">
        Present Your Business with a Professional Website
      </h2>
      <p style="font-size: 17px; color: #333; margin-bottom: 20px;">
        A website helps build trust, makes your brand visible, and offers essential information about your services and products.
      </p>
      <p style="font-size: 17px; color: #333; margin-bottom: 20px;">
        Today, most consumers search online for businesses or services before making a purchase. Without an online presence, your business might be overlooked.
      </p>
      <p style="font-size: 17px; color: #333; margin-bottom: 20px;">
        You don’t have to break the bank for a professionally designed website. We understand that many businesses work with limited budgets. Our affordable web design solutions provide you with a stunning website at an excellent price.
      </p>
      <p style="font-size: 17px; color: #333; margin-bottom: 0;">
        With over 20 years of experience, Harris Digital specializes in affordable websites, allowing small businesses to get customized websites starting from only £299.
      </p>
    </div>

    <!-- TABLE OF CONTENTS BOX -->
    <div style="flex: 1 1 35%; min-width: 280px;">
      <div style="background-color: #e9eafc; border-radius: 6px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); overflow: hidden;">
        
        <!-- TOC HEADER -->
        <div onclick="toggleContent()" style="cursor: pointer; padding: 16px 20px; border-bottom: 1px solid #ccc; display: flex; align-items: center; justify-content: space-between;">
          <h3 style="font-size: 18px; font-weight: 600; margin: 0;">Table of Contents</h3>
          <span id="toc-arrow" style="font-size: 18px;">&#9650;</span> <!-- up arrow -->
        </div>

        <!-- TOC LIST -->
        <div id="toc-list-home" style="padding: 16px 20px; display: block;">
          <ul style="list-style: none; padding: 0; margin: 0; font-size: 16px; line-height: 1.8; color: #111;">
            <li><a href="#startup" class="toc-link">Small Business Website Packages</a></li>
            <li><a href="#business" class="toc-link">Business Website Packages</a></li>
            <li><a href="#cms" class="toc-link">CMS web design packages</a></li>
            <li><a href="#comerence" class="toc-link">Ecommerce website packages</a></li>
            <li><a href="#compare" class="toc-link">Compare website design packages</a></li>
            <li><a href="#web" class="toc-link">Web design package features</a></li>
            <li><a href="#get" class="toc-link">Get in touch</a></li>
            <li><a href="#faq" class="toc-link">Frequently Asked Questions</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- SHOWCASE SECTION END -->

<!-- COMMON STYLE (same for both) -->
<style>
  html {
    scroll-behavior: smooth;
  }

  .table-of-contents {
    background-color:#F2F2FC;
    padding: 20px;
    border-radius: 4px;
    border: 1px solid #ccc;
  }

  .toc-link {
    color: #222;
    text-decoration: none;
    font-weight: 500;
    display: block;
    padding: 6px 0;
    transition: all 0.3s ease;
  }

  .toc-link:hover {
    color: #007bff;
    text-decoration: underline;
  }
</style>

<!-- JAVASCRIPT FOR COLLAPSIBLE LIST -->
<script>
  function toggleContent() {
    const tocList = document.getElementById('toc-list-home');
    const arrow = document.getElementById('toc-arrow');
    
    if (tocList.style.display === 'none') {
      tocList.style.display = 'block';
      arrow.innerHTML = '&#9650;'; // up arrow
    } else {
      tocList.style.display = 'none';
      arrow.innerHTML = '&#9660;'; // down arrow
    }
  }
</script>
