<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Parallax Slider Homepage</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Swiper CSS (only once) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    /* small niceties */
    .parallax-bg {
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    html {
      scroll-behavior: smooth;
    }

    /* toast */
    #toast {
      position: fixed;
      right: 20px;
      bottom: 30px;
      z-index: 60;
      border-left-width: 4px;
      background: white;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
      padding: 12px 16px;
      border-radius: 8px;
      display: none;
      min-width: 220px;
    }

    #toast.show {
      display: block;
    }

    /* hide default swiper arrows until loaded (optional) */
    .swiper-button-next,
    .swiper-button-prev {
      color: #111827;
      /* default dark arrow */
    }
  </style>
</head>

<body class="font-sans bg-gray-50">

  <!-- Header -->
  <!-- header + responsive mobile menu -->
  <header id="site-header"
    class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-6 md:px-10 py-4 md:py-6 bg-white/90 backdrop-blur-sm transition-all duration-500">
    <div id="brand" class="text-xl font-bold">My Brand</div>

    <!-- Desktop nav -->
    <nav id="nav-links" class="hidden md:block">
      <ul class="flex items-center space-x-10 text-lg font-medium">
        <li><a href="#" class="hover:text-brandRed">Home</a></li>

        <!-- Desktop Dropdown -->
        <li class="relative group"> <!-- ADD 'group' here -->
          <!-- Use absolute path if relative might be wrong: href="/product.php" -->
          <a href="./product.php" class="inline-flex items-center gap-2 text-lg hover:text-brandRed focus:outline-none" id="productsTrigger" aria-haspopup="true" aria-expanded="false" tabindex="0">
            Products/Services
            <svg class="w-5 h-5 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>

          <!-- dropdown: show on hover (via group) or keyboard focus-within -->
          <ul
            class="absolute left-0  hidden rounded-lg shadow-lg w-56 bg-white text-black z-50
               group-hover:block group-focus:block"
            id="productsDropdown" role="menu" aria-label="Products menu">
            <li><a href="./product.php#product1" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">Product 1</a></li>
            <li><a href="./product.php#product1" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">Product 2</a></li>
            <li><a href="./product.php#product1" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">Service 1</a></li>
          </ul>
        </li>

        <li><a href="#contact" class="hover:text-brandRed">Contact Us</a></li>
      </ul>
    </nav>

    <!-- Mobile controls -->
    <div class="md:hidden flex items-center gap-4">
      <!-- Hamburger button -->
      <button id="mobile-menu-btn"
        aria-controls="mobile-menu"
        aria-expanded="false"
        class="p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandRed">
        <!-- Icon (3 bars) -->
        <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
          aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <!-- Close icon (hidden by default) -->
        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
          aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
  </header>

  <!-- Mobile menu (off-canvas / slide down) -->
  <nav id="mobile-menu"
    class="md:hidden fixed inset-x-4 top-[72px] z-40 bg-white rounded-xl shadow-lg transform transition-all duration-300 opacity-0 scale-95 pointer-events-none"
    aria-hidden="true">
    <div class="p-4">
      <ul class="space-y-2">
        <li><a href="#" class="block px-4 py-3 rounded-md text-lg hover:bg-gray-100">Home</a></li>

        <!-- Mobile dropdown: collapsible -->
       <li class="relative group">
  <a href="./product.php"
     class="inline-flex items-center gap-2 text-lg hover:text-brandRed focus:outline-none"
     id="productsTrigger"
     aria-haspopup="true"
     aria-expanded="false"
     tabindex="0">
    Products/Services
    <svg class="w-5 h-5 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M19 9l-7 7-7-7"></path>
    </svg>
  </a>

  <!-- NOTE: use top-full (no big mt-) so there's no gap when moving mouse -->
  <ul
    class="absolute left-0 top-full mt-0 hidden rounded-lg shadow-lg w-56 bg-white text-black z-50
           group-hover:block group-focus-within:block"
    id="productsDropdown"
    role="menu"
    aria-label="Products menu"
    style="min-width:14rem;">
    <li><a href="./product.php#product1" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">Product 1</a></li>
    <li><a href="./product.php#product2" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">Product 2</a></li>
    <li><a href="./product.php#product3" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">Service 1</a></li>
  </ul>
</li>


        <li><a href="#contact"  class="block px-4 py-3 text-lg rounded-md hover:bg-gray-100">Contact Us</a></li>
      </ul>
    </div>
  </nav>


  <!-- Optional overlay to darken background when mobile menu is open -->
  <div id="mobile-menu-overlay" class="fixed inset-0 bg-black/30 hidden z-30"></div>

  <!-- JS: toggle mobile menu, products dropdown, handle Escape & outside click -->
  <script>
    (function() {
      const menuBtn = document.getElementById('mobile-menu-btn');
      const mobileMenu = document.getElementById('mobile-menu');
      const overlay = document.getElementById('mobile-menu-overlay');
      const hamburgerIcon = document.getElementById('hamburger-icon');
      const closeIcon = document.getElementById('close-icon');

      const prodBtn = document.getElementById('mobile-products-btn');
      const prodList = document.getElementById('mobile-products-list');
      const prodIcon = document.getElementById('mobile-products-icon');

      function openMenu() {
        menuBtn.setAttribute('aria-expanded', 'true');
        mobileMenu.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
        mobileMenu.classList.add('opacity-100', 'scale-100');
        mobileMenu.setAttribute('aria-hidden', 'false');
        overlay.classList.remove('hidden');
        hamburgerIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
      }

      function closeMenu() {
        menuBtn.setAttribute('aria-expanded', 'false');
        mobileMenu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
        mobileMenu.classList.remove('opacity-100', 'scale-100');
        mobileMenu.setAttribute('aria-hidden', 'true');
        overlay.classList.add('hidden');
        hamburgerIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
        // also collapse products list
        collapseProducts();
      }

      function toggleMenu() {
        const expanded = menuBtn.getAttribute('aria-expanded') === 'true';
        if (expanded) closeMenu();
        else openMenu();
      }

      function expandProducts() {
        // Set max-height to a large value to allow CSS transition
        prodList.style.maxHeight = prodList.scrollHeight + 'px';
        prodIcon.classList.add('rotate-180');
      }

      function collapseProducts() {
        prodList.style.maxHeight = null;
        prodIcon.classList.remove('rotate-180');
      }

      function toggleProducts() {
        if (prodList.style.maxHeight) collapseProducts();
        else expandProducts();
      }

      // Events
      menuBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleMenu();
      });
      overlay.addEventListener('click', () => closeMenu());

      // products
      prodBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleProducts();
      });

      // close on Escape
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeMenu();
      });

      // close when clicking outside the menu
      document.addEventListener('click', (e) => {
        const target = e.target;
        if (!mobileMenu.contains(target) && !menuBtn.contains(target) && window.getComputedStyle(mobileMenu).visibility !== 'hidden') {
          // only close if menu is open
          if (menuBtn.getAttribute('aria-expanded') === 'true') closeMenu();
        }
      });

      // ensure menu hides on larger screens (if resized)
      window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
          closeMenu();
        }
      });
    })();
  </script>


  <!-- Banner slider (unique classes) -->
  <div class="swiper hero-swiper h-screen">
    <div class="swiper-wrapper">

      <!-- Slide 1 -->
      <div class="swiper-slide relative">
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/40 to-transparent"></div>
        <img src="./images/banner/herosection.jpg" class="h-screen w-full object-cover" />
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white px-6">
          <h1 class="text-6xl font-extrabold drop-shadow-lg mb-6">Luxury Remodeling Solutions</h1>
          <!-- <a href="#"
          class="px-8 py-3 border-2 border-white text-white font-semibold rounded-full transition hover:bg-white hover:text-black">
          Get Your Quote
        </a> -->
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide relative">
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/30 to-transparent"></div>
        <img src="./images/banner/herosection2.jpg" class="h-screen w-full object-cover" />
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white px-6">
          <h1 class="text-6xl font-extrabold drop-shadow-lg mb-6">Innovative Modern Designs</h1>
          <!-- <a href="#"
          class="px-8 py-3 border-2 border-white text-white font-semibold rounded-full transition hover:bg-white hover:text-black">
          Discover More
        </a> -->
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide relative">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent"></div>
        <img src="./images/banner/herosection3.jpg" class="h-screen w-full object-cover" />
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white px-6">
          <h1 class="text-6xl font-extrabold drop-shadow-lg mb-6">Redefine Your Living Space</h1>
          <!-- <a href="#"
          class="px-8 py-3 border-2 border-white text-white font-semibold rounded-full transition hover:bg-white hover:text-black">
          Start Today
        </a> -->
        </div>
      </div>

    </div>

    <!-- Controls -->
    <div class="swiper-pagination hero-pagination"></div>
    <div class="swiper-button-prev hero-prev"></div>
    <div class="swiper-button-next hero-next"></div>
  </div>


  <!-- About Section -->
  <section class="relative bg-white py-20 px-6 md:px-20">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

      <!-- Left Side (Image with parallax) -->
      <div class="relative rounded-2xl shadow-lg overflow-hidden h-[680px]">
        <img src="./images/banner/herosection3.jpg" alt="Vertivo Elevators"
          class="parallax-img absolute inset-0 w-full h-full object-cover md:object-center will-change-transform" />
      </div>

      <!-- Right Side (Text) -->
      <div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Elevating Reliability, Safety &amp; Innovation</h2>
        <p class="text-lg text-gray-700 leading-relaxed mb-4">
          With <span class="font-semibold text-[#DC0000]">Vertivo Elevators</span>, elevating is made reliable, safe and
          exciting. Serving as an integrated vertical transportation solutions provider, we stand in the forefront of
          innovative engineering and pledge our complete adherence to globally valued elevator safety standards.
        </p>
        <p class="text-lg text-gray-700 leading-relaxed mb-8">
          With industry defining homelifts and passenger elevator models, Vertivo Elevators are engineered for excellence
          in safety, durability and hassle-free travel experience.
        </p>
        <a href="#"
          class="inline-block px-6 py-3 bg-[#DC0000] text-white font-semibold rounded-lg shadow  transition">View Products</a>
      </div>

    </div>
  </section>

  <!-- Polished Elevator Quote Form -->
  <section class="flex items-center justify-center px-6">
    <form id="elevatorForm"
      class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl w-full bg-white rounded-2xl p-8"
      novalidate>

      <!-- First Name -->
      <div class="flex flex-col">
        <label for="firstName" class="mb-2 text-sm font-medium text-gray-700">First name <span
            class="text-red-500">*</span></label>
        <input id="firstName" name="firstName" type="text" required
          class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="John" />
        <p id="err-firstName" class="text-red-500 text-sm mt-1 hidden">Please enter your first name.</p>
      </div>

      <!-- Last Name -->
      <div class="flex flex-col">
        <label for="lastName" class="mb-2 text-sm font-medium text-gray-700">Last name</label>
        <input id="lastName" name="lastName" type="text"
          class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="Doe" />
      </div>

      <!-- Contact Number -->
      <div class="flex flex-col">
        <label for="contactNumber" class="mb-2 text-sm font-medium text-gray-700">Contact number <span
            class="text-red-500">*</span></label>
        <input id="contactNumber" name="contactNumber" inputmode="tel" required
          class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="98765 43210" />
        <p id="err-contact" class="text-red-500 text-sm mt-1 hidden">Enter a valid phone number (7–15 digits).</p>
      </div>

      <!-- Email -->
      <div class="flex flex-col md:col-span-2 lg:col-span-1">
        <label for="email" class="mb-2 text-sm font-medium text-gray-700">Email ID <span
            class="text-red-500">*</span></label>
        <input id="email" name="email" type="email" required
          class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="you@example.com" />
        <p id="err-email" class="text-red-500 text-sm mt-1 hidden">Enter a valid email address.</p>
      </div>

      <!-- Elevator For -->
      <div class="flex flex-col">
        <label for="elevatorFor" class="mb-2 text-sm font-medium text-gray-700">Elevator required for</label>
        <select id="elevatorFor" name="elevatorFor"
          class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <option value="" disabled selected>Select one</option>
          <option value="individual-house">Individual House</option>
          <option value="apartment">Apartment Building</option>
          <option value="commercial-building">Commercial Building</option>
          <option value="factory">Factory / Warehouse</option>
          <option value="others">Others</option>
        </select>
      </div>

      <!-- Floors -->
      <div class="flex flex-col">
        <label for="floors" class="mb-2 text-sm font-medium text-gray-700">Floors (stops)</label>
        <select id="floors" name="floors"
          class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <option value="" disabled selected>Select floors</option>
          <option>G+1 (2 stops)</option>
          <option>G+2 (3 stops)</option>
          <option>G+3 (4 stops)</option>
          <option>G+4 (5 stops)</option>
          <option>G+5 (6 stops)</option>
          <option>G+6 (7 stops) and above</option>
        </select>
      </div>

      <!-- Message (full width) -->
      <div class="flex flex-col md:col-span-2 lg:col-span-3">
        <label for="message" class="mb-2 text-sm font-medium text-gray-700">Additional details</label>
        <textarea id="message" name="message" rows="3"
          class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="Any special requirements..."></textarea>
      </div>

      <!-- Submit (full width center) -->
      <div class="md:col-span-2 lg:col-span-3 flex flex-col items-center">
        <div id="formStatus" class="text-sm text-gray-600 mb-2" aria-live="polite"></div>

        <button id="submitBtn" type="submit"
          class="px-8 py-3 bg-[#DC0000] text-white rounded-lg shadow hover:bg-indigo-700 transition inline-flex items-center">
          <svg id="btnSpinner" class="w-5 h-5 mr-3 animate-spin hidden" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor"
              d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
          </svg>
          <span id="btnText">Submit Request</span>
        </button>
      </div>
    </form>
  </section>

  <!-- Core Values Section (unchanged) -->
  <section class="py-12 bg-gray-50">
    <div class="  ">
      <!-- Two-column hero: image left / red panel right -->
      <div class="bg-white rounded-lg overflow-hidden shadow-sm">
        <div class="flex flex-col md:flex-row">

          <div class="md:w-1/2 w-full">
            <img
              src="/images/banner/schindler-ahead-digital-media-services.jpg"
              alt="Elevator digital media"
              class="object-cover w-full h-72 md:h-[420px] lg:h-[520px]" />
          </div>

          <!-- RIGHT: red panel -->
          <div class="md:w-1/2 w-full bg-red-700 text-white flex items-center">
            <div class="p-8 md:p-12 lg:p-16 max-w-2xl">
              <!-- <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold mb-4">Digital Media Services</h2> -->
              <p class="text-base md:text-lg text-red-100 mb-6 leading-relaxed">
                Customer obsession and business integrity remains the focal point of our management policies. We aim to develop and deliver products engineered to the highest quality; keeping user appreciation and comfort at the core of our design </p>
              <!-- <a href="#"
                class="inline-block bg-white text-red-700 font-semibold px-5 py-3 rounded shadow hover:opacity-95 transition">
                Know more
              </a> -->
            </div>
          </div>
        </div>
      </div>

      <!-- Spacer -->
      <div class="mt-10"></div>

      <!-- Existing 'Our Core Values' content (adapted to match look/spacing) -->
      <!-- <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Core Values</h2>
        <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
          The fundamental principles that guide our organization and define our commitment to excellence in every aspect of our business.
        </p>
      </div> -->

      <!-- <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
  
        <div class="bg-white rounded-lg border border-gray-200 p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
       
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-4">Customer Obsession</h3>
          <p class="text-gray-600 text-sm leading-relaxed">Customer needs and satisfaction drive every decision we make across our organization.</p>

        </div>
        <div class="bg-white rounded-lg border border-gray-200 p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
      
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-4">Customer Obsession</h3>
          <p class="text-gray-600 text-sm leading-relaxed">Customer needs and satisfaction drive every decision we make across our organization.</p>

        </div>
  
      </div> -->

      <!-- <div class="bg-white border border-gray-200 rounded-lg p-12">
        <div class="max-w-4xl mx-auto text-center">
          <h3 class="text-2xl font-semibold text-gray-900 mb-6">Our Commitment</h3>
          <blockquote class="text-lg text-gray-700 leading-relaxed font-medium">
            "Customer obsession and business integrity remain the focal point of our management policies. We aim to develop and deliver products engineered to the highest quality; keeping user appreciation and comfort at the core of our design."
          </blockquote>
        </div>

      </div> -->
    </div>
  </section>


  <!-- Products Slider Section (unique classes and nav) -->
  <div class="swiper products-swiper my-12 max-w-7xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 text-center p-5">Products</h2>
    <div class="swiper-wrapper">
      <!-- Product 1 -->
      <div class="swiper-slide">
        <a href="/products/premium-headphones" class="block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
          <div class="relative overflow-hidden">
            <img src="./images/banner/5581945_3650.jpg"
              alt="Premium Headphones"
              class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300">
            <div class="absolute bottom-6 left-6">
              <div class="bg-red-600 text-white px-4 py-3 rounded text-base font-semibold">
                Product 1
              </div>
            </div>
          </div>
        </a>
      </div>

      <!-- Product 2 -->
      <div class="swiper-slide">
        <a href="/products/smart-laptop" class="block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
          <div class="relative overflow-hidden">
            <img src="./images/banner/25.jpg"
              alt="Smart Laptop"
              class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300">
            <div class="absolute bottom-6 left-6">
              <div class="bg-red-600 text-white px-4 py-3 rounded text-base font-semibold">
                Product 2
              </div>
            </div>
          </div>
        </a>
      </div>

      <!-- Product 3 -->
      <div class="swiper-slide">
        <a href="/products/smartwatch-pro" class="block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
          <div class="relative overflow-hidden">
            <img src="./images/banner/6610172_3993.jpg" alt="Smartwatch Pro"
              class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300">
            <div class="absolute bottom-6 left-6">
              <div class="bg-red-600 text-white px-4 py-3 rounded text-base font-semibold">
                product 3
              </div>
            </div>
          </div>
        </a>
      </div>

      <!-- Product 4 -->
      <div class="swiper-slide">
        <a href="/products/wireless-speaker" class="block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
          <div class="relative overflow-hidden">
            <img src="./images/banner/8548770_2474.jpg" alt="Wireless Speaker"
              class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300">
            <div class="absolute bottom-6 left-6">
              <div class="bg-red-600 text-white px-4 py-3 rounded text-base font-semibold">
                product 4
              </div>
            </div>
          </div>
        </a>
      </div>

      <!-- Product 5 -->
      <div class="swiper-slide">
        <a href="/products/gaming-console" class="block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
          <div class="relative overflow-hidden">
            <img src="./images/banner/8548770_2474.jpg" alt="Gaming Console"
              class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300">
            <div class="absolute bottom-6 left-6">
              <div class="bg-red-600 text-white px-4 py-3 rounded text-base font-semibold">
                product 5
              </div>
            </div>
          </div>
        </a>
      </div>

      <!-- Product 6 - Extra for better carousel effect -->
      <!-- <div class="swiper-slide">
        <a href="/products/tablet-pro" class="block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
          <div class="relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?w=600&h=600&fit=crop&crop=center"
              alt="Tablet Pro"
              class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300">
            <div class="absolute bottom-6 left-6">
              <div class="bg-red-600 text-white px-4 py-3 rounded text-base font-semibold">
                Tablet Pro
              </div>
            </div>
          </div>
        </a>
      </div> -->
    </div>

    <!-- Product-specific controls -->
    <div class="swiper-pagination products-pagination"></div>
    <div class="swiper-button-next products-next"></div>
    <div class="swiper-button-prev products-prev"></div>
  </div>

  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <!-- Section Header -->
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Core Competencies</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          We specialize in providing end-to-end elevator solutions with a strong focus on quality, safety, and innovation.
        </p>
      </div>

      <!-- Grid Items -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Item -->
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
          <div class="text-blue-600 text-4xl mb-4">⚙️</div>
          <h3 class="text-xl font-semibold mb-2">Production & Installation</h3>
          <p class="text-gray-600">Complete solutions for production, supply, installation, testing, and commissioning of homelifts and passenger elevators.</p>
        </div>

        <!-- Item -->
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
          <div class="text-blue-600 text-4xl mb-4">📐</div>
          <h3 class="text-xl font-semibold mb-2">Consultancy & Site Planning</h3>
          <p class="text-gray-600">Expert consultancy services and site planning for efficient and safe elevator installations.</p>
        </div>

        <!-- Item -->
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
          <div class="text-blue-600 text-4xl mb-4">📊</div>
          <h3 class="text-xl font-semibold mb-2">Project Management</h3>
          <p class="text-gray-600">Comprehensive engineering project management ensuring on-time and cost-effective delivery.</p>
        </div>

        <!-- Item -->
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
          <div class="text-blue-600 text-4xl mb-4">🔬</div>
          <h3 class="text-xl font-semibold mb-2">Research & Development</h3>
          <p class="text-gray-600">Innovating elevator technologies for enhanced performance, safety, and user experience.</p>
        </div>

        <!-- Item -->
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
          <div class="text-blue-600 text-4xl mb-4">🛠️</div>
          <h3 class="text-xl font-semibold mb-2">Maintenance & AMCs</h3>
          <p class="text-gray-600">Reliable elevator maintenance and Annual Maintenance Contracts (AMCs) for uninterrupted service.</p>
        </div>

        <!-- Item -->
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
          <div class="text-blue-600 text-4xl mb-4">♻️</div>
          <h3 class="text-xl font-semibold mb-2">Modernisation</h3>
          <p class="text-gray-600">Upgrading old elevators with modern features, ensuring safety, comfort, and efficiency.</p>
        </div>

      </div>
    </div>
  </section>



  <!-- <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
  
        <div class="bg-white rounded-lg border border-gray-200 p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
       
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-4">Customer Obsession</h3>
          <p class="text-gray-600 text-sm leading-relaxed">Customer needs and satisfaction drive every decision we make across our organization.</p>

        </div>
        <div class="bg-white rounded-lg border border-gray-200 p-8 text-center hover:shadow-lg transition-shadow duration-300">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
      
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-4">Customer Obsession</h3>
          <p class="text-gray-600 text-sm leading-relaxed">Customer needs and satisfaction drive every decision we make across our organization.</p>

        </div>
  
      </div> -->

  <!-- toast element -->
  <div id="toast" role="status" aria-live="polite">
    <div id="toastMsg" class="text-sm"></div>
  </div>

  <!-- Swiper JS (only once) -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Init Swipers -->
  <script>
    // Banner swiper
    const bannerSwiper = new Swiper('.hero-swiper', {
      loop: true,
      effect: 'fade',
      freeMode: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: true,
      },
      pagination: {
        el: '.banner-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.banner-next',
        prevEl: '.banner-prev',
      },
      fadeEffect: {
        crossFade: true
      },
    });

    // Products swiper
    const productsSwiper = new Swiper('.products-swiper', {
      slidesPerView: 3,
      spaceBetween: 20,
      freeMode: true,
      effect: "coverflow",
      autoplay: {
        delay: 2000,

      },

      loop: true,
      pagination: {
        el: '.products-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.products-next',
        prevEl: '.products-prev',
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        480: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        640: {
          slidesPerView: 3,
          spaceBetween: 40
        },
      },
    });
  </script>

  <!-- Form & Parallax & Header scripts -->
  <script>
    (function() {
      const form = document.getElementById('elevatorForm');
      const status = document.getElementById('formStatus');
      const submitBtn = document.getElementById('submitBtn');
      const btnSpinner = document.getElementById('btnSpinner');
      const btnText = document.getElementById('btnText');
      const toast = document.getElementById('toast');
      const toastMsg = document.getElementById('toastMsg');

      function showToast(message, success = true) {
        toastMsg.textContent = message;
        toast.style.borderColor = success ? '#10B981' : '#F87171';
        toast.classList.add('show');
        setTimeout(() => {
          toast.classList.remove('show');
        }, 4200);
      }

      function setLoading(isLoading) {
        if (isLoading) {
          submitBtn.setAttribute('disabled', 'true');
          btnSpinner.classList.remove('hidden');
          btnText.textContent = 'Sending...';
        } else {
          submitBtn.removeAttribute('disabled');
          btnSpinner.classList.add('hidden');
          btnText.textContent = 'Submit Request';
        }
      }

      function validateEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
      }

      function validatePhone(num) {
        return /^\d{7,15}$/.test(num.replace(/\s+/g, ''));
      }

      // phone autoformat
      const phoneInput = document.getElementById('contactNumber');
      phoneInput.addEventListener('input', (e) => {
        const raw = e.target.value.replace(/[^\d]/g, '').slice(0, 15);
        e.target.value = raw.length > 5 ? raw.slice(0, 5) + ' ' + raw.slice(5) : raw;
      });

      form.addEventListener('submit', async (ev) => {
        ev.preventDefault();
        // hide errors
        document.querySelectorAll('[id^="err-"]').forEach(el => el.classList.add('hidden'));

        // gather values (no countryCode field present -> keep simple)
        const data = {
          firstName: form.firstName.value.trim(),
          lastName: form.lastName.value.trim(),
          contactNumber: form.contactNumber.value.replace(/\s+/g, ''),
          email: form.email.value.trim(),
          elevatorFor: form.elevatorFor.value,
          floors: form.floors.value,
          message: form.message.value.trim(),
        };

        // Basic validation
        if (!data.firstName) {
          document.getElementById('err-firstName').classList.remove('hidden');
          document.getElementById('firstName').focus();
          return;
        }
        if (!validatePhone(data.contactNumber)) {
          document.getElementById('err-contact').classList.remove('hidden');
          document.getElementById('contactNumber').focus();
          return;
        }
        if (!validateEmail(data.email)) {
          document.getElementById('err-email').classList.remove('hidden');
          document.getElementById('email').focus();
          return;
        }

        setLoading(true);
        status.textContent = 'Sending your request...';

        try {
          // TODO: replace with your backend endpoint
          // const res = await fetch('/api/lead', { method:'POST', headers:{'Content-Type':'application/json'}, body: JSON.stringify(data) });
          // const result = await res.json();
          // if (!res.ok) throw new Error(result.message || 'Network error');

          // Simulated send (replace in production)
          await new Promise(r => setTimeout(r, 900));

          showToast('Thank you — we received your request. Our elevator consultant will get in touch with you for further assistance.', true);
          status.textContent = '';
          form.reset();
        } catch (err) {
          showToast('Something went wrong. Please try again later.', false);
          status.textContent = 'There was a problem — please try again.';
        } finally {
          setLoading(false);
        }
      });
    })();
  </script>

  <script>
    (function() {
      // Parallax for the about image (only one .parallax-img)
      if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
      if (window.innerWidth < 768) return;

      const el = document.querySelector('.parallax-img');
      if (!el) return;
      const speed = 0.22;
      let ticking = false;

      function update() {
        const wrapper = el.parentElement;
        const rect = wrapper.getBoundingClientRect();
        if (rect.bottom > 0 && rect.top < window.innerHeight) {
          const offset = Math.round(-rect.top * speed);
          el.style.transform = `translate3d(0, ${offset}px, 0)`;
        }
        ticking = false;
      }

      function onScroll() {
        if (!ticking) {
          window.requestAnimationFrame(update);
          ticking = true;
        }
      }

      window.addEventListener('scroll', onScroll, {
        passive: true
      });
      window.addEventListener('resize', onScroll, {
        passive: true
      });
      update();
    })();
  </script>

  <script>
    // Header color change on scroll relative to banner height
    const header = document.getElementById("site-header");
    const brand = document.getElementById("brand");
    const nav = document.getElementById("nav-links");

    function updateHeader() {
      const banner = document.querySelector(".banner-swiper");
      const sliderHeight = banner ? banner.offsetHeight : 600;
      if (window.scrollY < sliderHeight - 50) {
        header.classList.remove("bg-white", "shadow-md");
        header.classList.add("bg-transparent");
        brand.classList.add("text-white");
        brand.classList.remove("text-black");
        nav.classList.add("text-white");
        nav.classList.remove("text-black");
      } else {
        header.classList.add("bg-white", "shadow-md");
        header.classList.remove("bg-transparent");
        brand.classList.add("text-black");
        brand.classList.remove("text-white");
        nav.classList.add("text-black");
        nav.classList.remove("text-white");
      }
    }

    window.addEventListener("scroll", updateHeader, {
      passive: true
    });
    window.addEventListener("resize", updateHeader, {
      passive: true
    });
    updateHeader();
  </script>

</body>

</html>