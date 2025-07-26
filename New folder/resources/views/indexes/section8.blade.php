<!-- DESIGN PROCESS SECTION -->
<section id="design-process" style="padding: 60px 0; background: #fff; text-align: center;">
  <h2 style="font-size: 36px; font-weight: bold; margin-bottom: 10px;">Our web design process</h2>

  <div class="icons-row" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 40px; margin: 40px 0;">
    @php
      $steps = [
        ['icon' => 'fas fa-users', 'label' => 'Discuss'],
        ['icon' => 'fas fa-pen-square', 'label' => 'Design'],
        ['icon' => 'fas fa-cogs', 'label' => 'Build'],
        ['icon' => 'fas fa-mobile-alt', 'label' => 'Test'],
        ['icon' => 'fas fa-search', 'label' => 'SEO'],
        ['icon' => 'fas fa-rocket', 'label' => 'Launch'],
      ];
    @endphp

    @foreach ($steps as $step)
    <div class="process-step" style="display: flex; flex-direction: column; align-items: center; width: 100px;">
      <div class="icon-circle" style="
        background-color: #3b6fd3;
        color: white;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        overflow: hidden;
      ">
        <i class="{{ $step['icon'] }} scroll-icon" style="
          font-size: 24px;
          transition: transform 1s ease;
        "></i>
      </div>
      <div class="step-label" style="font-weight: bold;">{{ $step['label'] }}</div>
    </div>
    @endforeach
  </div>

  <div class="content" style="max-width: 900px; margin: auto; padding: 0 20px; text-align: left; font-size: 16px; line-height: 1.6;">
    <p>To get started, we discuss your business and any ideas you have. We then put together an initial layout to show you and welcome your feedback! Once you are 100% happy, we start turning it into a functioning website.</p>
    <p>When designing your website, we will keep you informed on progress throughout the web design build.</p>
    <p>Once we have completed your website, we begin testing it on desktop and mobile devices. We make sure your responsive website loads and displays correctly. Next, we optimise your new website for search engines. Once we’re happy everything is working correctly, we launch your website!</p>
    <p>The web design services process from start to finish takes around 5 – 7 days or sooner if you have all the information ready in advance.</p>
    <p>Before we start, we ask for a small deposit with the balance due on completion.</p>
    <p>Are you ready for a professional website design to showcase your small business online?</p>

    <a href="#" style="background-color: #3b6fd3; color: white; padding: 12px 25px; border-radius: 30px; text-decoration: none; display: inline-block; margin-top: 30px;">Get started today</a>
  </div>
</section>

<!-- ICON ROTATE SCRIPT -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const icons = document.querySelectorAll('.scroll-icon');

    function rotateOnScroll() {
      icons.forEach(icon => {
        const rect = icon.getBoundingClientRect();
        const inView = rect.top < window.innerHeight - 100;

        if (inView && !icon.classList.contains('rotated')) {
          icon.classList.add('rotated');
          icon.style.transform = 'rotateZ(180deg)';
        }
      });
    }

    window.addEventListener('scroll', rotateOnScroll);
    rotateOnScroll();
  });
</script>
