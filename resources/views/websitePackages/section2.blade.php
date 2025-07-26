<!-- SHOWCASE SECTION START -->
<section style="background-color:#F2F2FC; padding: 80px 0;">
  <div style="max-width: 1200px; margin: 0 auto; padding: 0 40px; display: flex; gap: 40px; justify-content: space-between; align-items: flex-start; flex-wrap: wrap;">

    <!-- LEFT CONTENT -->
    <div style="flex: 1 1 60%; min-width: 320px;">
      <h2 style="font-size: 30px; font-weight: 700; color: #111; margin-bottom: 20px;">
        Present your business through a professional website
      </h2>
      <p style="font-size: 17px; color: #333; margin-bottom: 20px;">
        A website enhances your trustworthiness, helps people discover your brand, and provides essential details about your offerings.
      </p>
      <p style="font-size: 17px; color: #333; margin-bottom: 20px;">
        Most consumers check online for a business or service before deciding to buy. Without a website, your business might not be visible.
      </p>
      <p style="font-size: 17px; color: #333; margin-bottom: 20px;">
        Owning a professionally designed website doesn't have to break the bank. We know many businesses operate with limited budgets. If you're after a visually impressive website at a fair price, our budget-friendly web design is just right for you.
      </p>
      <p style="font-size: 17px; color: #333; margin-bottom: 0;">
        Harris Digital has been delivering affordable website solutions for more than 20 years. Our competitive rates allow small businesses to get tailor-made websites starting from only £299.
      </p>
    </div>

   <!-- TABLE OF CONTENTS BOX -->
<div style="flex: 1 1 35%; min-width: 280px;">
  <div style="background-color: #e9eafc; border-radius: 6px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); overflow: hidden;">
    
    <!-- TOC HEADER -->
    <div onclick="toggleContent()" style="cursor: pointer; padding: 16px 20px; border-bottom: 1px solid #ccc; display: flex; align-items: center; justify-content: space-between;">
      <h3 style="font-size: 18px; font-weight: 600; margin: 0;">Table of contents</h3>
      <span id="toc-arrow" style="font-size: 18px;">&#9650;</span> <!-- up arrow -->
    </div>

    <!-- TOC LIST -->
    <div id="toc-list-home" style="padding: 16px 20px; display: block;">
      <ul style="list-style: disc; padding-left: 20px; margin: 0; font-size: 16px; line-height: 1.8; color: #111;">
        <li><a href="#package" style="text-decoration: none; color: #111;">What’s part of our budget web design package?</a></li>
        <li><a href="#us" style="text-decoration: none; color: #111;">Reasons to choose us</a></li>
        <li><a href="#our-services" style="text-decoration: none; color: #111;">What we offer</a></li>
        <li><a href="#design-pages" style="text-decoration: none; color: #111;">Website content sections</a></li>
        <li><a href="#standard-package" style="text-decoration: none; color: #111;">What comes standard with each website</a></li>
        <li><a href="#design-process" style="text-decoration: none; color: #111;">Our design workflow</a></li>
        <li><a href="#get-started" style="text-decoration: none; color: #111;">Ready to begin?</a></li>
        <li><a href="#faqs" style="text-decoration: none; color: #111;">Common questions answered</a></li>
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

  .table-of-contents a {
    color: #222;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.2s ease-in-out;
  }

  .table-of-contents a:hover {
    text-decoration: underline;
    color: #007bff;
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

