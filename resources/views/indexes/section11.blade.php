<!-- RECENT PROJECTS SECTION -->
<section class="py-5 position-relative" style="background-color: #f1f2fc;">
  <div class="custom-wave-top"></div>

  <div class="container text-center py-5">
    <!-- Title -->
    <h2 class="fw-bold mb-3">Latest Website Projects</h2>

    <!-- Subtext -->
    <p class="mb-5" style="font-size: 18px;">
      Take a look at some of our latest client websites. More samples are available on our 
      <a href="#" class="text-primary text-decoration-underline">portfolio</a> page.
    </p>

    <!-- Projects -->
    <div class="row justify-content-center">
      <div class="col-md-4 mb-4 scroll-fade">
        <div class="project-image">
          <img src="{{ asset('assets/images/pic6.webp') }}" class="img-fluid shadow rounded" alt="Project 1">
        </div>
      </div>
      <div class="col-md-4 mb-4 scroll-fade">
        <div class="project-image">
          <img src="{{ asset('assets/images/pic7.webp') }}" class="img-fluid shadow rounded" alt="Project 2">
        </div>
      </div>
      <div class="col-md-4 mb-4 scroll-fade">
        <div class="project-image">
          <img src="{{ asset('assets/images/pic8.webp') }}" class="img-fluid shadow rounded" alt="Project 3">
        </div>
      </div>
    </div>
  </div>

  <div class="custom-wave-bottom"></div>
</section>

<!-- STYLES -->
<style>
  .custom-wave-top,
  .custom-wave-bottom {
    width: 100%;
    height: 60px;
    background: #f1f2fc;
    position: absolute;
    left: 0;
    z-index: 1;
  }

  .custom-wave-top {
    top: 0;
    border-bottom-left-radius: 50% 20%;
    border-bottom-right-radius: 50% 20%;
  }

  .custom-wave-bottom {
    bottom: 0;
    border-top-left-radius: 50% 20%;
    border-top-right-radius: 50% 20%;
  }

  .project-image {
    overflow: hidden;
    border-radius: 8px;
  }

  .project-image img {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }

  .project-image img:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
  }

  /* Scroll fade-in effect */
  .scroll-fade {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s ease, transform 0.8s ease;
  }

  .scroll-fade.show {
    opacity: 1;
    transform: translateY(0);
  }
</style>

<!-- SCROLL SCRIPT -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const scrollElements = document.querySelectorAll(".scroll-fade");

    const scrollObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
        }
      });
    }, { threshold: 0.2 });

    scrollElements.forEach(el => scrollObserver.observe(el));
  });
</script>
