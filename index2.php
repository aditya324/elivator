<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banner with Header, Carousel & Contact Form</title>

  <!-- Poppins font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ["Poppins", "sans-serif"],
          },
          colors: {
            brandRed: "#E33333",
          },
        },
      },
    };
  </script>



</head>

<body class="font-sans">

  <!-- Header -->
  <header class="absolute top-0 left-0 w-full z-30 bg-transparent">
    <nav class="flex items-center justify-between px-6 md:px-12 py-4 text-white">
      <!-- Logo -->
      <div class="text-2xl font-semibold text-brandRed">LOGO</div>

      <!-- Desktop menu -->
      <ul class="hidden md:flex items-center space-x-8">
        <li><a href="#" class="hover:text-brandRed">Home</a></li>

        <!-- Dropdown -->
        <li class="relative group">
          <button class="hover:text-brandRed flex items-center gap-1">
            Products
            <svg class="w-4 h-4 mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <ul class="absolute hidden group-hover:block bg-white text-black mt-2 rounded-lg shadow-lg w-40">
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Product 1</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Product 2</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Product 3</a></li>
          </ul>
        </li>

        <li><a href="#contact" class="hover:text-brandRed">Contact Us</a></li>
      </ul>

      <!-- Mobile hamburger -->
      <div class="md:hidden">
        <button id="navToggle" aria-controls="mobileMenu" aria-expanded="false" class="p-2 rounded-md focus:outline-none focus:ring">
          <!-- simple hamburger icon -->
          <svg id="hamburgerIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
          <!-- close icon (hidden by default) -->
          <svg id="closeIcon" class="w-6 h-6 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>

      <!-- Mobile menu (slides up) -->
      <div id="mobileMenu" class="fixed inset-0 z-40 bg-black/60 backdrop-blur-sm hidden">
        <div class="absolute top-0 right-0 w-3/4 max-w-xs h-full bg-white text-black p-6 shadow-lg">
          <nav class="flex flex-col gap-4">
            <a href="#" class="py-2" onclick="closeMobileMenu()">Home</a>
            <details class="py-2">
              <summary>Products</summary>
              <div class="pl-4">
                <a href="#" class="block py-1">Product 1</a>
                <a href="#" class="block py-1">Product 2</a>
              </div>
            </details>
            <a href="#contact" class="py-2" onclick="closeMobileMenu()">Contact Us</a>
          </nav>
        </div>
      </div>
    </nav>
  </header>

  <!-- Hero Carousel -->
  <section class="relative h-[90vh] overflow-hidden">
    <div id="carousel" class="relative w-full h-full">
      <!-- Slides: keep one element per slide (background images) -->
      <div class="slide w-full h-full absolute inset-0 transition-opacity duration-1000 opacity-100"
        data-index="0"
        style="background-image: url('./images/banner/herosection.jpg'); background-size: cover; background-position: center;">
      </div>

      <div class="slide w-full h-full absolute inset-0 transition-opacity duration-1000 opacity-0"
        data-index="1"
        style="background-image: url('./images/banner/herosection2.jpg'); background-size: cover; background-position: center;">
      </div>

      <div class="slide w-full h-full absolute inset-0 transition-opacity duration-1000 opacity-0"
        data-index="2"
        style="background-image: url('./images/banner/herosection3.jpg'); background-size: cover; background-position: center;">
      </div>


      <div class="absolute inset-0 flex items-center">
        <div id="heroContent" class="relative z-10 max-w-3xl px-6 md:px-12 text-left">
          <h1 id="heroTitle" class="text-4xl md:text-5xl font-light mb-4 text-white transition-opacity duration-700 opacity-100">
            Moving People, Shaping Cities
          </h1>
          <p id="heroSubtitle" class="text-lg md:text-xl mb-6 text-white transition-opacity duration-700 opacity-100">
            Innovative elevator and escalator solutions for a better urban experience.
          </p>
          <a id="heroCta" href="#services" class="inline-block bg-brandRed text-white hover:bg-red-700 px-6 py-3 rounded-lg text-lg font-medium transition transform">
            Learn more
          </a>
        </div>
      </div>

      <!-- Optional: slide indicators -->
      <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex gap-3 z-20">
        <button class="indicator w-3 h-3 rounded-full bg-white/60" data-to="0" aria-label="Slide 1"></button>
        <button class="indicator w-3 h-3 rounded-full bg-white/30" data-to="1" aria-label="Slide 2"></button>
        <button class="indicator w-3 h-3 rounded-full bg-white/30" data-to="2" aria-label="Slide 3"></button>
      </div>
    </div>
  </section>

  <!-- Contact Form Section -->
  <!-- Contact Form Section -->
  <!-- Contact Form Section -->
  <section id="contact" class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-semibold text-center mb-10 text-brandRed">Contact Us</h2>

      <form class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Name -->
        <div class="flex flex-col">
          <label for="name" class="mb-2 font-medium">Name</label>
          <input type="text" id="name" name="name"
            class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brandRed"
            placeholder="Enter your name" required>
        </div>

        <!-- Email -->
        <div class="flex flex-col">
          <label for="email" class="mb-2 font-medium">Email</label>
          <input type="email" id="email" name="email"
            class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brandRed"
            placeholder="Enter your email" required>
        </div>

        <!-- Phone -->
        <div class="flex flex-col">
          <label for="phone" class="mb-2 font-medium">Phone</label>
          <input type="tel" id="phone" name="phone"
            class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brandRed"
            placeholder="Enter your phone number" required>
        </div>

        <!-- State -->
        <div class="flex flex-col">
          <label for="state" class="mb-2 font-medium">State</label>
          <select id="state" name="state"
            class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brandRed">
            <option value="">Select State</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Delhi">Delhi</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Other">Other</option>
          </select>
        </div>


        <div class="flex flex-col">
          <label for="product" class="mb-2 font-medium">Product Interested In</label>
          <select id="product" name="product"
            class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brandRed">
            <option value="">Select Product</option>
            <option value="Elevator">Elevator</option>
            <option value="Escalator">Escalator</option>
            <option value="Lift">Lift</option>
            <option value="Other">Other</option>
          </select>
        </div>


        <div class="flex flex-col md:col-span-2 lg:col-span-3">
          <label for="message" class="mb-2 font-medium">Message</label>
          <textarea id="message" name="message" rows="4"
            class="px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brandRed"
            placeholder="Write your message..." required></textarea>
        </div>


        <div class="md:col-span-2 lg:col-span-3 flex justify-center">
          <button type="submit"
            class="bg-brandRed text-white px-8 py-3 rounded-lg font-medium text-lg hover:bg-red-700 transition">
            Send Message
          </button>
        </div>
      </form>
    </div>
  </section>


  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <section id="products" class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-semibold text-center mb-10 text-brandRed">
        Our Products
      </h2>


      <div class="swiper mySwiper relative">
        <div class="swiper-wrapper">


          <div class="swiper-slide">
            <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl">
              <img src="./images/banner/herosection.jpg" alt="E200 Lift"
                class="h-80 w-full object-cover transition-transform duration-500 group-hover:scale-110" />


              <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-center items-center text-white p-6">
                <h3 class="text-2xl font-bold mb-3">E200</h3>
                <ul class="text-sm mb-4 space-y-1 text-left">
                  <li>➤ Elegance Cabin</li>
                  <li>➤ Speed 0.15–0.3 m/s</li>
                  <li>➤ Capacity up to 400 kg</li>
                  <li>➤ Travel Height up to 13m</li>
                  <li>➤ 24V Control Voltage</li>
                </ul>
                <a href="#"
                  class="px-4 py-2 bg-red-600 rounded-lg hover:bg-red-700 transition transform hover:scale-110">
                  Explore More →
                </a>
              </div>
            </div>
          </div>


          <div class="swiper-slide">
            <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl">
              <img src="./images/banner/herosection2.jpg" alt="E300 Lift"
                class="h-80 w-full object-cover transition-transform duration-500 group-hover:scale-110" />


              <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-center items-center text-white p-6">
                <h3 class="text-2xl font-bold mb-3">E300</h3>
                <ul class="text-sm mb-4 space-y-1 text-left">
                  <li>➤ Gearless Cogbelt Drive System</li>
                  <li>➤ Spacious 400 kg Capacity</li>
                  <li>➤ Up to 6 Stops</li>
                  <li>➤ Indoor & Outdoor Feasibility</li>
                  <li>➤ Battery-Operated Emergency Lowering</li>
                </ul>
                <a href="#"
                  class="px-4 py-2 bg-red-600 rounded-lg hover:bg-red-700 transition transform hover:scale-110">
                  Explore More →
                </a>
              </div>
            </div>
          </div>


          <div class="swiper-slide">
            <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl">
              <img src="./images/banner/herosection3.jpg" alt="X300 Lift"
                class="h-80 w-full object-cover transition-transform duration-500 group-hover:scale-110" />


              <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-center items-center text-white p-6">
                <h3 class="text-2xl font-bold mb-3">X300</h3>
                <ul class="text-sm mb-4 space-y-1 text-left">
                  <li>➤ Xtreme Performance</li>
                  <li>➤ Exclusively 4 Modes</li>
                  <li>➤ Remote Monitoring with Smart Connectivity</li>
                  <li>➤ Error Notification System</li>
                  <li>➤ Soft Start and Stop</li>
                </ul>
                <a href="#"
                  class="px-4 py-2 bg-red-600 rounded-lg hover:bg-red-700 transition transform hover:scale-110">
                  Explore More →
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="group relative bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-500 hover:scale-105 hover:shadow-2xl">
              <img src="./images/banner/herosection3.jpg" alt="X300 Lift"
                class="h-80 w-full object-cover transition-transform duration-500 group-hover:scale-110" />


              <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-center items-center text-white p-6">
                <h3 class="text-2xl font-bold mb-3">X300</h3>
                <ul class="text-sm mb-4 space-y-1 text-left">
                  <li>➤ Xtreme Performance</li>
                  <li>➤ Exclusively 4 Modes</li>
                  <li>➤ Remote Monitoring with Smart Connectivity</li>
                  <li>➤ Error Notification System</li>
                  <li>➤ Soft Start and Stop</li>
                </ul>
                <a href="#"
                  class="px-4 py-2 bg-red-600 rounded-lg hover:bg-red-700 transition transform hover:scale-110">
                  Explore More →
                </a>
              </div>
            </div>
          </div>

        </div>


        <div class="swiper-button-next "></div>
        <div class="swiper-button-prev "></div>

        <div class="swiper-pagination mt-6"></div>
      </div>
    </div>
  </section>
  <footer id="footer" class="mt-auto bg-[#0b1220] text-gray-200">
    <div class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Column 1: Brand + description -->
      <div>
        <div class="flex items-center gap-3 mb-4">

          <div>
            <h3 class="text-xl font-semibold">LOGO</h3>
            <p class="text-sm text-gray-300">Moving people, shaping cities — reliable elevator & escalator solutions for residential and commercial projects.</p>
          </div>
        </div>


        <div class="flex gap-3 mt-4">
          <!-- social icons (inline SVGs) -->
          <a href="#" aria-label="Twitter" class="p-2 rounded-md bg-white/5 hover:bg-white/10">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0012 7v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a href="#" aria-label="LinkedIn" class="p-2 rounded-md bg-white/5 hover:bg-white/10">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-14h4v2"></path>
            </svg>
          </a>
          <a href="#" aria-label="Facebook" class="p-2 rounded-md bg-white/5 hover:bg-white/10">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
        </div>
      </div>


      <!-- Column 2: Quick links -->
      <div class="md:col-span-1">
        <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:text-white">Home</a></li>
          <li><a href="#products" class="hover:text-white">Products</a></li>
          <li><a href="#services" class="hover:text-white">Services</a></li>
          <li><a href="#contact" class="hover:text-white">Contact</a></li>
          <li><a href="#" class="hover:text-white">Careers</a></li>
        </ul>
      </div>


      <!-- Column 3: Contact details -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Contact</h4>
        <p class="text-sm text-gray-300">Head Office: 123, Example Street, Mumbai, India</p>
        <p class="text-sm mt-2"><strong>Phone:</strong> <a href="tel:+911234567890" class="hover:text-white">+91 12345 67890</a></p>
        <p class="text-sm mt-1"><strong>Email:</strong> <a href="mailto:info@example.com" class="hover:text-white">info@example.com</a></p>


        <!-- <div class="mt-6">
<h5 class="text-sm font-semibold mb-2">Subscribe to our newsletter</h5>
<form class="flex gap-2" onsubmit="event.preventDefault(); alert('Subscribed (demo)')">
<input type="email" placeholder="Email address" class="px-3 py-2 rounded-md bg-white/5 text-sm w-full focus:outline-none focus:ring-2 focus:ring-brandRed" required>
<button class="px-4 py-2 rounded-md bg-brandRed text-white text-sm hover:bg-red-700">Subscribe</button>
</form>
</div> -->
      </div>
    </div>


    <div class="border-t border-white/10">
      <div class="max-w-6xl mx-auto px-6 py-4 flex flex-col md:flex-row items-center justify-between text-sm text-gray-400">
        <p>© <span id="year"></span> LOGO. All rights reserved.</p>
        <div class="flex items-center gap-4 mt-3 md:mt-0">
          <a href="#" class="hover:text-white">Privacy Policy</a>
          <a href="#" class="hover:text-white">Terms</a>
          <!-- Back to top -->
          <button id="backToTop" class="ml-2 px-3 py-1 rounded-md bg-white/5 hover:bg-white/10">Back to top</button>
        </div>
      </div>
  </footer>
  <script>
(async function pageLoaderLottie() {
  const MODULE_URL = 'https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js';
  const MAX_WAIT_MS = 4000; // wait for custom element
  const AUTO_REMOVE_MS = 8000; // fallback auto remove if load event doesn't fire

  // small util sleep
  const sleep = ms => new Promise(r => setTimeout(r, ms));

  // 1) ensure module/custom element exists (try dynamic import, then script inject)
  try {
    if (!customElements.get || !customElements.get('dotlottie-wc')) {
      try {
        await import(MODULE_URL);
        // imported successfully
      } catch (err) {
        // fallback to injecting script tag
        if (!document.querySelector('script[data-dotlottie-module]')) {
          const s = document.createElement('script');
          s.type = 'module';
          s.src = MODULE_URL;
          s.setAttribute('data-dotlottie-module', '1');
          document.head.appendChild(s);
        }
      }

      // wait until custom element is defined or timeout
      const start = Date.now();
      while (!customElements.get('dotlottie-wc') && (Date.now() - start) < MAX_WAIT_MS) {
        await sleep(100);
      }
    }
  } catch (err) {
    console.error('Error ensuring dotlottie module:', err);
  }

  // 2) If still unavailable, log and bail (optionally show an image fallback)
  if (!customElements.get || !customElements.get('dotlottie-wc')) {
    console.error('dotlottie-wc element not available. Loader will not show.');
    return;
  }

  // 3) prevent duplicates
  if (document.getElementById('page-loader')) return;

  // 4) create loader overlay
  const overlay = document.createElement('div');
  overlay.id = 'page-loader';
  overlay.setAttribute('aria-hidden', 'false');
  overlay.style.cssText = [
    'position:fixed',
    'inset:0',
    'display:flex',
    'align-items:center',
    'justify-content:center',
    'background:linear-gradient(180deg, rgba(255,255,255,1), rgba(250,250,250,1))',
    'z-index:99999',
    'transition:opacity 450ms ease, visibility 450ms',
    'opacity:1',
    'visibility:visible'
  ].join(';');

  // inner card (keeps lottie centered and optionally shows brand)
  const card = document.createElement('div');
  card.style.cssText = 'display:flex;flex-direction:column;align-items:center;gap:12px;padding:8px;border-radius:12px;';

  // insert dotlottie web component
  card.innerHTML = `
    <dotlottie-wc
      src="https://lottie.host/e8555b36-7d50-46e4-bfb3-55edda9b786d/ldAC2vwTSX.lottie"
      style="width:220px;height:220px;display:block"
      autoplay
      loop
      aria-label="Loading animation"
    ></dotlottie-wc>
    <div aria-hidden="true" style="font-family:inherit;color:#444;font-size:14px">Loading…</div>
  `;

  overlay.appendChild(card);
  // insert as first child so it appears above everything
  document.documentElement.appendChild(overlay);

  // helper to hide & remove with fade
  const hideAndRemove = () => {
    if (!document.body.contains(overlay) && !document.documentElement.contains(overlay)) return;
    overlay.style.opacity = '0';
    overlay.style.visibility = 'hidden';
    overlay.setAttribute('aria-hidden', 'true');
    // remove after transition
    setTimeout(() => {
      if (overlay.parentNode) overlay.parentNode.removeChild(overlay);
    }, 500);
  };

  // Remove loader when full page loads
  window.addEventListener('load', () => {
    // small delay so user sees loader briefly even on fast loads (optional)
    setTimeout(hideAndRemove, 220);
  }, { once: true });

  // fallback: auto remove after AUTO_REMOVE_MS
  setTimeout(() => {
    hideAndRemove();
  }, AUTO_REMOVE_MS);

  // optional: allow users to dismiss early via click/tap (uncomment if you want this)
  // overlay.addEventListener('click', hideAndRemove);

  // Accessibility: if user presses Escape, remove loader
  const escHandler = (e) => {
    if (e.key === 'Escape') {
      hideAndRemove();
      document.removeEventListener('keydown', escHandler);
    }
  };
  document.addEventListener('keydown', escHandler);
})();
</script>


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        640: {
          slidesPerView: 1
        },
        768: {
          slidesPerView: 2
        },
        1024: {
          slidesPerView: 3
        },
      },
    });
  </script>



  <script>
    // MOBILE MENU TOGGLE
    const navToggle = document.getElementById('navToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const hamburgerIcon = document.getElementById('hamburgerIcon');
    const closeIcon = document.getElementById('closeIcon');

    function openMobileMenu() {
      mobileMenu.classList.remove('hidden');
      navToggle.setAttribute('aria-expanded', 'true');
      hamburgerIcon.classList.add('hidden');
      closeIcon.classList.remove('hidden');
    }

    function closeMobileMenu() {
      mobileMenu.classList.add('hidden');
      navToggle.setAttribute('aria-expanded', 'false');
      hamburgerIcon.classList.remove('hidden');
      closeIcon.classList.add('hidden');
    }

    navToggle.addEventListener('click', () => {
      if (mobileMenu.classList.contains('hidden')) openMobileMenu();
      else closeMobileMenu();
    });

    // close when clicking overlay area (outside side panel)
    mobileMenu.addEventListener('click', (e) => {
      if (e.target === mobileMenu) closeMobileMenu();
    });

    // HERO SLIDES + TEXT
    const slides = document.querySelectorAll('.slide');
    const titleEl = document.getElementById('heroTitle');
    const subtitleEl = document.getElementById('heroSubtitle');
    const ctaEl = document.getElementById('heroCta');
    const indicators = document.querySelectorAll('.indicator');

    // content for each slide — edit text/links here
    const slideContents = [{
        title: "Moving People, Shaping Cities",
        subtitle: "Innovative elevator and escalator solutions for a better urban experience.",
        ctaText: "Learn more",
        ctaHref: "#services"
      },
      {
        title: "Smart Maintenance, Safer Rides",
        subtitle: "Predictive maintenance and remote monitoring to reduce downtime.",
        ctaText: "View maintenance",
        ctaHref: "#maintenance"
      },
      {
        title: "Design that Fits Your Space",
        subtitle: "Customisable lifts and escalators for residential and commercial projects.",
        ctaText: "Explore designs",
        ctaHref: "#designs"
      }
    ];

    let current = 0;
    let intervalId = null;
    const INTERVAL = 4000;

    function setActiveIndicator(index) {
      indicators.forEach((btn, i) => {
        btn.classList.toggle('bg-white/60', i === index);
        btn.classList.toggle('bg-white/30', i !== index);
      });
    }

    function fadeTextOutIn(newIndex) {
      // fade out
      titleEl.style.opacity = 0;
      subtitleEl.style.opacity = 0;
      ctaEl.style.opacity = 0;

      // after fade out duration (matching Tailwind duration-700)
      setTimeout(() => {
        // update text
        const content = slideContents[newIndex];
        titleEl.textContent = content.title;
        subtitleEl.textContent = content.subtitle;
        ctaEl.textContent = content.ctaText;
        ctaEl.setAttribute('href', content.ctaHref);

        // fade in
        titleEl.style.opacity = 1;
        subtitleEl.style.opacity = 1;
        ctaEl.style.opacity = 1;
      }, 300); // small delay to smooth; adjust if you change CSS durations
    }

    function showSlide(index) {
      slides.forEach((s, i) => {
        s.style.opacity = i === index ? '1' : '0';
      });

      // text swap with a small fade
      fadeTextOutIn(index);

      // indicators
      setActiveIndicator(index);

      current = index;
    }

    // auto-play
    function startAutoPlay() {
      intervalId = setInterval(() => {
        const next = (current + 1) % slides.length;
        showSlide(next);
      }, INTERVAL);
    }

    function stopAutoPlay() {
      clearInterval(intervalId);
      intervalId = null;
    }

    // indicator click to jump to slide
    indicators.forEach(btn => {
      btn.addEventListener('click', (e) => {
        const to = Number(btn.dataset.to);
        showSlide(to);
        stopAutoPlay();
        startAutoPlay();
      });
    });

    // Pause autoplay while hovering hero (optional)
    const carouselEl = document.getElementById('carousel');
    carouselEl.addEventListener('mouseenter', stopAutoPlay);
    carouselEl.addEventListener('mouseleave', startAutoPlay);

    // init
    showSlide(0);
    startAutoPlay();

    document.getElementById('year').textContent = new Date().getFullYear();
    document.getElementById('backToTop').addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  </script>

</body>

</html>