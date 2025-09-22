<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Fullscreen Hero Swiper</title>

  <!-- Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['Poppins', 'ui-sans-serif', 'system-ui'] },
          colors: { brandRed: '#d61a1a' }
        }
      }
    }
  </script>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>
<body class="bg-white text-gray-800 font-sans">

  <!-- HEADER -->
  <header id="site-header" 
          class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-6 md:px-10 py-4 bg-white/70 backdrop-blur-sm">
    <div id="brand" class="text-xl font-bold">My Brand</div>

    <!-- Desktop nav -->
    <nav class="hidden md:block">
      <ul class="flex items-center space-x-10 text-lg font-medium">
        <li><a href="#" class="hover:text-brandRed">Home</a></li>
        <li class="relative group">
          <button class="inline-flex items-center gap-2 hover:text-brandRed focus:outline-none">
            Products
            <svg class="w-5 h-5 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <ul class="absolute left-0 hidden group-hover:block bg-white shadow-lg rounded-lg mt-2 w-56">
            <li><a href="#product1" class="block px-5 py-3 hover:bg-gray-100">Product 1</a></li>
            <li><a href="#product2" class="block px-5 py-3 hover:bg-gray-100">Product 2</a></li>
            <li><a href="#product3" class="block px-5 py-3 hover:bg-gray-100">Product 3</a></li>
          </ul>
        </li>
        <li><a href="#contact" class="hover:text-brandRed">Contact Us</a></li>
      </ul>
    </nav>

    <!-- Mobile button -->
    <div class="md:hidden">
      <button id="mobile-menu-btn">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
  </header>

  <!-- FULLSCREEN HERO SWIPER -->
  <section class="relative w-full">
    <div class="swiper hero-swiper w-full h-screen">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide relative h-screen">
          <img src="./images/banner/herosection.jpg" class="absolute inset-0 w-full h-full object-cover" />
          <div class="absolute inset-0 bg-black/40"></div>
          <div class="absolute inset-0 flex items-center">
            <div class="max-w-5xl mx-auto px-6 text-white">
              <h1 class="text-4xl md:text-6xl font-bold">Product 1</h1>
              <p class="mt-4 text-lg md:text-2xl text-white/90">Escalator for commercial & public spaces</p>
              <a href="#product1" class="mt-6 inline-block bg-brandRed px-6 py-3 rounded-md font-semibold">View Product</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide relative h-screen">
          <img src="./images/banner/25.jpg" class="absolute inset-0 w-full h-full object-cover" />
          <div class="absolute inset-0 bg-black/40"></div>
          <div class="absolute inset-0 flex items-center justify-center">
            <h2 class="text-white text-4xl md:text-5xl font-bold">Maintenance & Service</h2>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide relative h-screen">
          <img src="./images/banner/5581945_3650.jpg" class="absolute inset-0 w-full h-full object-cover" />
          <div class="absolute inset-0 bg-black/30"></div>
          <div class="absolute inset-0 flex items-center justify-center">
            <h2 class="text-white text-4xl md:text-5xl font-bold">Digital Media Services</h2>
          </div>
        </div>

      </div>

      <!-- Arrows -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- Example content below -->


  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    new Swiper('.hero-swiper', {
      loop: true,
      autoplay: { delay: 4000 },
      pagination: { el: '.swiper-pagination', clickable: true },
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    });
  </script>
</body>
</html>
