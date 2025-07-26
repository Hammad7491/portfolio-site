<!-- DESIGN PROCESS SECTION -->
<section id="design-process" style="padding: 60px 0; background: #fff; text-align: center;">
  <h2 style="font-size: 36px; font-weight: bold; margin-bottom: 10px;">How we design your website</h2>

  <div class="icons-row" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 40px; margin: 40px 0;">
    @php
      $steps = [
        ['icon' => 'fas fa-users', 'label' => 'Consult'],
        ['icon' => 'fas fa-pen-square', 'label' => 'Plan'],
        ['icon' => 'fas fa-cogs', 'label' => 'Develop'],
        ['icon' => 'fas fa-mobile-alt', 'label' => 'Test'],
        ['icon' => 'fas fa-search', 'label' => 'Optimise'],
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
    <p>We begin by understanding your business, goals, and ideas. Next, we create a draft layout and gather your feedback. Once you're completely satisfied, we begin building the live website.</p>
    <p>Throughout the design phase, we keep you updated so you’re always in the loop as your site takes shape.</p>
    <p>After development, we test the site on both desktop and mobile to ensure everything looks great and functions smoothly. Then we perform SEO optimization so your website ranks better. Once everything’s ready, we take it live.</p>
    <p>Most projects are completed within 5 to 7 days — or faster if you’ve prepared your content in advance.</p>
    <p>To start the process, we just ask for a small deposit. The remaining balance is due once your site is ready to launch.</p>
    <p>Want a professionally designed website to represent your small business online?</p>

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
