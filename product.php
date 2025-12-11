<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Vertivo Elivators</title>

  <!-- Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Poppins', 'ui-sans-serif', 'system-ui']
          },
          colors: {
            brandRed: '#1B6F5D'
          }
        }
      }
    }
  </script>

  <style>
    /* keep image crisp and avoid stretching on very tall screens */



    .hero-left img {
      object-fit: cover;
      object-position: center;
    }

    /* smooth transition for header background on scroll if you later enable it */
    .header-bg-transition {
      transition: background-color .25s ease, box-shadow .25s ease;
    }
  </style>
  <style>
    /* small niceties */
    .parallax-bg {
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
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


    .swiper-button-next,
    .swiper-button-prev {
      color: #111827;

    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>

<body class=" text-gray-800 font-sans">



  <header id="site-header"
    class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-6 md:px-10 py-4 md:py-6 bg-white/90 backdrop-blur-sm transition-all duration-500">
    <div id="brand" class="flex items-center">
      <!-- Default Logo -->
      <img
        src="./images/logo/Logo Source color.png"
        alt="Brand Logo"
        class="h-24 w-auto transition-all duration-300 default-logo">

      <!-- Scroll Logo -->
      <img
        src="./images/logo/vertivo-logo-small.png"
        alt="Brand Logo Small"
        class="h-12 w-auto transition-all duration-300 scroll-logo hidden">
    </div>


    <!-- Desktop nav -->
    <nav id="nav-links" class="hidden md:block">
      <ul class="flex items-center space-x-10 text-lg font-medium">
        <li><a href="./index.php" class="hover:text-brandRed">Home</a></li>

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
            <li><a href="./product.php#VERTICASA" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">VertiCASA</a></li>
            <li><a href="./product.php#VERTIPAX" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">VertiPAX</a></li>
            <li><a href="./product.php#VERTICARE" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">VertiCare</a></li>
          </ul>
        </li>

        <li><a href="./contact-us.php" class="hover:text-brandRed">Contact Us</a></li>
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
            <li><a href="./product.php#vertiCASA" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">VertiCASA</a></li>
            <li><a href="./product.php#VertiPAX" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">VertiPAX</a></li>
            <li><a href="./product.php#VertiCare" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">VertiCare</a></li>
          </ul>
        </li>


        <li><a href="./contact-us.php" class="block px-4 py-3 text-lg rounded-md hover:bg-gray-100">Contact Us</a></li>
      </ul>
    </div>
  </nav>

  <!-- FULLSCREEN HERO SWIPER -->
  <section class="relative w-full">
    <div class="swiper hero-swiper w-full h-screen">
      <div class="swiper-wrapper">

        <!-- Slide 1: VertiCASA -->
        <div class="swiper-slide relative h-screen">
          <img src="./images/banner/herosection.jpg" class="absolute inset-0 w-full h-full object-cover" />
          <div class="absolute inset-0 bg-black/45"></div>

          <div class="absolute inset-0 flex items-center" id="vertiCASA">
            <div class="max-w-5xl mx-auto px-6 text-white">
              <h1 class="text-4xl md:text-6xl font-bold">VertiCASA by Vertivo</h1>
              <p class="mt-4 text-lg md:text-2xl text-white/90">
                A premium homelift that is uniquely yours
              </p>

              <div class="mt-6 flex gap-4 items-center">
                <button class="cta-get-quote bg-brandRed px-6 py-3 rounded-md font-semibold"
                  data-slide="1">Get Quotation</button>

                <!-- Inline form container (hidden by default) -->
                <div id="form-container-1" data-product="VertiCASA" class="contact-panel mt-6 bg-white/95 text-black p-6 rounded-lg shadow-lg hidden">
                  <h3 class="text-xl font-semibold mb-3">Request a Quotation</h3>
                  <form class="space-y-3" data-form="1" onsubmit="submitForm(event, 1)">
                    <div class="flex gap-3">
                      <div>
                        <label class="text-sm block mb-1">First name*</label>
                        <input name="firstName" required class="w-[371px] border px-3 py-2 rounded" />
                      </div>
                      <div>
                        <label class="text-sm block mb-1">Last name*</label>
                        <input name="lastName" required class="w-[371px] border px-3 py-2 rounded" />
                      </div>
                    </div>

                    <div class="flex gap-3">
                      <div>
                        <label class="text-sm block mb-1">Contact number*</label>
                        <input name="phone" required type="tel" class="w-[371px] border px-3 py-2 rounded" />
                      </div>
                      <div>
                        <label class="text-sm block mb-1">Email ID*</label>
                        <input name="email" required type="email" class="w-[371px] border px-3 py-2 rounded" />
                      </div>
                    </div>

                    <div>
                      <label class="text-sm block mb-1">City*</label>
                      <select name="city" required class="w-[371px] border px-3 py-2 rounded">
                        <option value="">Select city</option>
                        <option>Bengaluru</option>
                        <option>Mysuru</option>
                        <option>Mangalore</option>
                        <option>Hubballi-Dharwad</option>
                        <option>Belagavi</option>
                        <option>Davangere</option>
                        <option>Ballari</option>
                        <option>Shivamogga</option>
                        <option>Udupi</option>
                        <option>Kalaburagi</option>
                        <option>Other</option>
                      </select>
                    </div>

                    <div class="flex items-center gap-3">
                      <button type="submit" class="bg-brandRed text-white px-5 py-2 rounded font-medium">Send</button>
                      <button type="button" onclick="toggleForm(1)" class="underline text-sm">Cancel</button>
                    </div>

                    <div class="mt-2 text-sm text-green-700 hidden" data-success="1">Thanks! We'll contact you soon.</div>
                    <div class="mt-2 text-sm text-red-700 hidden" data-error="1">Failed to submit. Try again.</div>
                  </form>
                </div>
                <!-- end inline form container -->
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2: VertiPAX -->
        <div class="swiper-slide relative h-screen">
          <img src="./images/banner/25.jpg" class="absolute inset-0 w-full h-full object-cover" />
          <div class="absolute inset-0 bg-black/45"></div>

          <div class="absolute inset-0 flex items-center">
            <div class="max-w-4xl mx-auto px-6 text-white text-center">
              <h2 class="text-4xl md:text-5xl font-bold">VertiPAX by Vertivo</h2>
              <p class="mt-3 text-lg md:text-xl text-white/90">
                High performance passenger elevators for low rise, mid rise and high rise apartments and commercial usage
              </p>

              <div class="mt-6">
                <button class="cta-get-quote bg-brandRed px-6 py-3 rounded-md font-semibold" data-slide="2">Get Quotation</button>

                <div id="form-container-2" data-product="VertiPAX" class="contact-panel mt-6 bg-white/95 text-black p-6 rounded-lg shadow-lg hidden mx-auto">
                  <h3 class="text-xl font-semibold mb-3">Request a Quotation</h3>
                  <form class="space-y-3" data-form="2" onsubmit="submitForm(event, 2)">
                    <div class="flex gap-3">
                      <div>
                        <label class="text-sm block mb-1">First name*</label>
                        <input name="firstName" required class="w-[371px] border px-3 py-2 rounded" />
                      </div>
                      <div>
                        <label class="text-sm block mb-1">Last name*</label>
                        <input name="lastName" required class="w-[371px] border px-3 py-2 rounded" />
                      </div>
                    </div>

                    <div class="flex gap-3">
                      <div>
                        <label class="text-sm block mb-1">Contact number*</label>
                        <input name="phone" required type="tel" class="w-[371px] border px-3 py-2 rounded" />
                      </div>
                      <div>
                        <label class="text-sm block mb-1">Email ID*</label>
                        <input name="email" required type="email" class="w-[371px] border px-3 py-2 rounded" />
                      </div>
                    </div>

                    <div>
                      <label class="text-sm block mb-1">City*</label>
                      <select name="city" required class="w-[371px] border px-3 py-2 rounded">
                        <option value="">Select city</option>
                        <option>Bengaluru</option>
                        <option>Mysuru</option>
                        <option>Mangalore</option>
                        <option>Hubballi-Dharwad</option>
                        <option>Belagavi</option>
                        <option>Davangere</option>
                        <option>Ballari</option>
                        <option>Shivamogga</option>
                        <option>Udupi</option>
                        <option>Kalaburagi</option>
                        <option>Other</option>
                      </select>
                    </div>

                    <div class="flex items-center gap-3">
                      <button type="submit" class="bg-brandRed text-white px-5 py-2 rounded font-medium">Send</button>
                      <button type="button" onclick="toggleForm(2)" class="underline text-sm">Cancel</button>
                    </div>

                    <div class="mt-2 text-sm text-green-700 hidden" data-success="2">Thanks! We'll contact you soon.</div>
                    <div class="mt-2 text-sm text-red-700 hidden" data-error="2">Failed to submit. Try again.</div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3: VertiCare -->
        <div class="swiper-slide relative h-screen">
          <img src="./images/banner/5581945_3650.jpg" class="absolute inset-0 w-full h-full object-cover" />
          <div class="absolute inset-0 bg-black/30"></div>

          <div class="absolute inset-0 flex items-center">
            <div class="max-w-4xl mx-auto px-6 text-white text-center">
              <h2 class="text-4xl md:text-5xl font-bold">VertiCare by Vertivo</h2>
              <p class="mt-3 text-lg md:text-xl text-white/90">
                Your elevator health checkup, simplified
              </p>

              <div class="mt-6">
                <button class="cta-get-quote bg-brandRed px-6 py-3 rounded-md font-semibold" data-slide="3">Book your free service checkup</button>

                <div id="form-container-3" data-product="VertiCARE" class="contact-panel mt-6 bg-white/95 text-black p-6 rounded-lg shadow-lg hidden mx-auto">
                  <h3 class="text-xl font-semibold mb-3">Book Free Service Checkup</h3>
                  <form class="space-y-3" data-form="3" onsubmit="submitForm(event, 3)">
                    <div class="flex gap-3">
                      <div>
                        <label class="text-sm block mb-1">First name*</label>
                        <input name="firstName" required class="w-[371px] border px-3 py-2 rounded" />
                      </div>
                      <div>
                        <label class="text-sm block mb-1">Last name*</label>
                        <input name="lastName" required class="w-[371px] border px-3 py-2 rounded" />
                      </div>
                    </div>

                    <div class="flex gap-3">
                      <div>
                        <label class="text-sm block mb-1">Contact number*</label>
                        <input name="phone" required type="tel" class="w-[371px] border px-3 py-2 rounded" />
                      </div>
                      <div>
                        <label class="text-sm block mb-1">Email ID*</label>
                        <input name="email" required type="email" class="w-[371px] border px-3 py-2 rounded" />
                      </div>
                    </div>

                    <div>
                      <label class="text-sm block mb-1">City*</label>
                      <select name="city" required class="w-[371px] border px-3 py-2 rounded">
                        <option value="">Select city</option>
                        <option>Bengaluru</option>
                        <option>Mysuru</option>
                        <option>Mangalore</option>
                        <option>Hubballi-Dharwad</option>
                        <option>Belagavi</option>
                        <option>Davangere</option>
                        <option>Ballari</option>
                        <option>Shivamogga</option>
                        <option>Udupi</option>
                        <option>Kalaburagi</option>
                        <option>Other</option>
                      </select>
                    </div>

                    <div class="flex items-center gap-3">
                      <button type="submit" class="bg-brandRed text-white px-5 py-2 rounded font-medium">Send</button>
                      <button type="button" onclick="toggleForm(3)" class="underline text-sm">Cancel</button>
                    </div>

                    <div class="mt-2 text-sm text-green-700 hidden" data-success="3">Thanks! We'll contact you soon.</div>
                    <div class="mt-2 text-sm text-red-700 hidden" data-error="3">Failed to submit. Try again.</div>
                  </form>
                </div>
              </div>
            </div>
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






  <!-- <section class="flex items-center justify-center px-6">
    <form id="elevatorForm"
      class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl w-full bg-white rounded-2xl p-8"
      novalidate>


      <div class="flex flex-col">
        <label for="firstName" class="mb-2 text-sm font-medium text-gray-700">First name <span
            class="text-red-500">*</span></label>
        <input id="firstName" name="firstName" type="text" required
          class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="John" />
        <p id="err-firstName" class="text-red-500 text-sm mt-1 hidden">Please enter your first name.</p>
      </div>


      <div class="flex flex-col">
        <label for="lastName" class="mb-2 text-sm font-medium text-gray-700">Last name</label>
        <input id="lastName" name="lastName" type="text"
          class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="Doe" />
      </div>

     
      <div class="flex flex-col">
        <label for="contactNumber" class="mb-2 text-sm font-medium text-gray-700">Contact number <span
            class="text-red-500">*</span></label>
        <input id="contactNumber" name="contactNumber" inputmode="tel" required
          class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="98765 43210" />
        <p id="err-contact" class="text-red-500 text-sm mt-1 hidden">Enter a valid phone number (7–15 digits).</p>
      </div>


      <div class="flex flex-col md:col-span-2 lg:col-span-1">
        <label for="email" class="mb-2 text-sm font-medium text-gray-700">Email ID <span
            class="text-red-500">*</span></label>
        <input id="email" name="email" type="email" required
          class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="you@example.com" />
        <p id="err-email" class="text-red-500 text-sm mt-1 hidden">Enter a valid email address.</p>
      </div>


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

 
      <div class="flex flex-col md:col-span-2 lg:col-span-3">
        <label for="message" class="mb-2 text-sm font-medium text-gray-700">Additional details</label>
        <textarea id="message" name="message" rows="3"
          class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="Any special requirements..."></textarea>
      </div>

 
      <div class="md:col-span-2 lg:col-span-3 flex flex-col items-center">
        <div id="formStatus" class="text-sm text-gray-600 mb-2" aria-live="polite"></div>

        <button id="submitBtn" type="submit"
          class="px-8 py-3 bg-[#DC0000] text-white rounded-lg shadow  transition inline-flex items-center">
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
  </section> -->

  <section class="py-16 bg-white" id="VERTICASA">
    <div class="max-w-7xl mx-auto px-6">
      <!-- Section Heading -->
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 text-center">VertiCASA</h2>

      <!-- Intro text -->
      <p class="text-center max-w-3xl mx-auto text-gray-600 mb-12 leading-relaxed">
        The very essence of VertiCASA is something you feel each time you take a ride on one of our home elevators.
        Our models blend iconic design, exceptional engineering and unrivalled craftsmanship to create an irresistible,
        emotional experience.
      </p>

      <!-- Layout: left card | center specs | right card -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">

        <!-- LEFT CARD -->
        <div class="border rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition p-6">
          <img src="./images/banner/25.jpg" alt="VertiCASA B-TRAC" class="w-full h-56 md:h-64 object-cover rounded-lg mb-4">
          <h3 class="text-xl font-semibold mb-1">VertiCASA B-TRAC Series</h3>
          <p class="text-gray-600 mb-2 text-sm">Belt driven homelift</p>
          <a href="#" class="text-brandRed text-sm font-medium hover:underline block mb-3">Data sheet</a>
          <p class="text-gray-500 mb-4 italic text-sm">Paradise in motion</p>

          <button onclick="openForm('btrac')"
            class="bg-brandRed text-white px-4 py-2 rounded-lg font-medium text-sm shadow-sm hover:brightness-105 transition">
            Get pricelists & catalogues
          </button>

          <!-- form (hidden) -->
          <div id="form-btrac" class="hidden mt-5">
            <div class="bg-white border rounded-xl p-5 shadow-sm">
              <div class="flex items-start justify-between">
                <h4 class="text-lg font-medium">Request pricelist</h4>
                <button class="text-sm text-gray-500 hover:text-gray-700" onclick="closeForm('btrac')" aria-label="Close form">✕</button>
              </div>

              <form class="mt-4 space-y-3" onsubmit="submitProductForm(event,'btrac')">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">First name*</span>
                    <input name="firstName" required
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                  <label class="block">
                    <span class="text-xs text-gray-600">Last name*</span>
                    <input name="lastName" required
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">Contact number*</span>
                    <input name="phone" type="tel" required placeholder="e.g. 98XXXXXXXX" pattern="[0-9+() -]{6,}"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>

                  <label class="block">
                    <span class="text-xs text-gray-600">Email ID*</span>
                    <input name="email" type="email" required placeholder="you@company.com"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                </div>

                <label class="block">
                  <span class="text-xs text-gray-600">City*</span>
                  <select name="city" required
                    class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brandRed transition">
                    <option value="">Select city</option>
                    <option>Bengaluru</option>
                    <option>Mysuru</option>
                    <option>Mangalore</option>
                    <option>Hubballi-Dharwad</option>
                    <option>Belagavi</option>
                    <option>Davangere</option>
                    <option>Ballari</option>
                    <option>Shivamogga</option>
                    <option>Udupi</option>
                    <option>Kalaburagi</option>
                    <option>Other</option>
                  </select>
                </label>

                <div class="flex items-center gap-3 mt-2">
                  <button type="submit" class="bg-brandRed text-white px-4 py-2 rounded-lg font-medium shadow-sm">Send</button>
                  <button type="button" class="text-sm text-gray-600 underline" onclick="closeForm('btrac')">Cancel</button>
                  <div class="ml-auto text-sm" aria-live="polite">
                    <span class="text-green-600 hidden" data-success>Thanks — we’ll contact you soon.</span>
                    <span class="text-red-600 hidden" data-fail>Submission failed. Try again.</span>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- end form -->
        </div>

        <!-- CENTER: exact specs from your image -->
        <div class="px-4 md:px-8">
          <ul class="list-disc list-inside space-y-2 text-sm md:text-base text-gray-700">
            <li><strong>Drive:</strong> MRL Gearless Belt Drive</li>
            <li><strong>Stops:</strong> Upto 6 Stops</li>
            <li><strong>Capacity:</strong> 260-450 kg</li>
            <li><strong>Rated speed:</strong> 0.30-0.50 m/s</li>
            <li><strong>Connection:</strong> 1-phase, 230V, 50/60 Hz</li>
            <li><strong>Power:</strong> 0.9-1.5 kW</li>
            <li><strong>Pit:</strong> min 500mm</li>
            <li><strong>Headroom:</strong> min 3000mm</li>
            <li><strong>Doors:</strong> Telescopic Sliding Auto-Doors</li>
          </ul>
        </div>

        <!-- RIGHT CARD -->
        <div class="border rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition p-6">
          <img src="./images/banner/5581945_3650.jpg" alt="VertiCASA HYDRA" class="w-full h-56 md:h-64 object-cover rounded-lg mb-4">
          <h3 class="text-xl font-semibold mb-1">VertiCASA TRAC-H Series</h3>
          <p class="text-gray-600 mb-2 text-sm">Advanced hydraulic homelift</p>
          <a href="#" class="text-brandRed text-sm font-medium hover:underline block mb-3">Data sheet</a>
          <p class="text-gray-500 mb-4 italic text-sm">Safety beyond measure</p>

          <button onclick="openForm('hydra')"
            class="bg-brandRed text-white px-4 py-2 rounded-lg font-medium text-sm shadow-sm hover:brightness-105 transition">
            Get pricelists & catalogues
          </button>

          <!-- form -->
          <div id="form-hydra" class="hidden mt-5">
            <div class="bg-white border rounded-xl p-5 shadow-sm">
              <div class="flex items-start justify-between">
                <h4 class="text-lg font-medium">Request pricelist</h4>
                <button class="text-sm text-gray-500 hover:text-gray-700" onclick="closeForm('hydra')" aria-label="Close form">✕</button>
              </div>

              <form class="mt-4 space-y-3" onsubmit="submitProductForm(event,'hydra')">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">First name*</span>
                    <input name="firstName" required
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                  <label class="block">
                    <span class="text-xs text-gray-600">Last name*</span>
                    <input name="lastName" required
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">Contact number*</span>
                    <input name="phone" type="tel" required placeholder="e.g. 98XXXXXXXX" pattern="[0-9+() -]{6,}"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>

                  <label class="block">
                    <span class="text-xs text-gray-600">Email ID*</span>
                    <input name="email" type="email" required placeholder="you@company.com"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                </div>

                <label class="block">
                  <span class="text-xs text-gray-600">City*</span>
                  <select name="city" required
                    class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brandRed transition">
                    <option value="">Select city</option>
                    <option>Bengaluru</option>
                    <option>Mysuru</option>
                    <option>Mangalore</option>
                    <option>Hubballi-Dharwad</option>
                    <option>Belagavi</option>
                    <option>Davangere</option>
                    <option>Ballari</option>
                    <option>Shivamogga</option>
                    <option>Udupi</option>
                    <option>Kalaburagi</option>
                    <option>Other</option>
                  </select>
                </label>

                <div class="flex items-center gap-3 mt-2">
                  <button type="submit" class="bg-brandRed text-white px-4 py-2 rounded-lg font-medium shadow-sm">Send</button>
                  <button type="button" class="text-sm text-gray-600 underline" onclick="closeForm('hydra')">Cancel</button>
                  <div class="ml-auto text-sm" aria-live="polite">
                    <span class="text-green-600 hidden" data-success>Thanks — we’ll contact you soon.</span>
                    <span class="text-red-600 hidden" data-fail>Submission failed. Try again.</span>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- end form -->
        </div>

      </div>
    </div>
  </section>



  <section class="py-16 bg-white" id="VERTIPAX">
    <div class="max-w-7xl mx-auto px-6">
      <!-- Section Heading -->
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 text-center">VertiPAX</h2>

      <!-- Intro text -->
      <p class="text-center max-w-3xl mx-auto text-gray-600 mb-12 leading-relaxed">
        Engineered to inspire — the VertiPAX series focuses on precision and the perfection of high-speed vertical flow.
        Solving heavy-duty, high-frequency vertical mobility, VertiPAX is the ideal passenger elevator for low, mid and
        high-rise properties.
      </p>

      <!-- Layout: left card | center bullets | right card -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
        <!-- LEFT CARD: GeoMet -->
        <div class="border rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition p-6">
          <img src="./images/banner/5581945_3650.jpg" alt="VertiPAX GeoMet" class="w-full h-56 md:h-64 object-cover rounded-lg mb-4">
          <h3 class="text-xl font-semibold mb-1">VertiPAX GeoMet Series</h3>
          <p class="text-gray-600 mb-2 text-sm">MRL passenger elevators</p>
          <a href="#" class="text-brandRed text-sm font-medium hover:underline block mb-3">Data sheet</a>
          <p class="text-gray-500 mb-4 italic text-sm">Refined performance delivered</p>

          <button onclick="openForm('geomet')"
            class="bg-brandRed text-white px-4 py-2 rounded-lg font-medium text-sm shadow-sm hover:brightness-105 transition">
            Get pricelists & catalogues
          </button>

          <!-- form (hidden) -->
          <div id="form-geomet" class="hidden mt-5">
            <div class="bg-white border rounded-xl p-5 shadow-sm">
              <div class="flex items-start justify-between">
                <h4 class="text-lg font-medium">Request pricelist</h4>
                <button class="text-sm text-gray-500 hover:text-gray-700" onclick="closeForm('geomet')" aria-label="Close form">✕</button>
              </div>

              <form class="mt-4 space-y-3" onsubmit="submitProductForm(event,'geomet')">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">First name*</span>
                    <input name="firstName" required
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                  <label class="block">
                    <span class="text-xs text-gray-600">Last name*</span>
                    <input name="lastName" required
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">Contact number*</span>
                    <input name="phone" type="tel" required placeholder="e.g. 98XXXXXXXX" pattern="[0-9+() -]{6,}"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>

                  <label class="block">
                    <span class="text-xs text-gray-600">Email ID*</span>
                    <input name="email" type="email" required placeholder="you@company.com"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                </div>

                <label class="block">
                  <span class="text-xs text-gray-600">City*</span>
                  <select name="city" required
                    class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brandRed transition">
                    <option value="">Select city</option>
                    <option>Bengaluru</option>
                    <option>Mysuru</option>
                    <option>Mangalore</option>
                    <option>Hubballi-Dharwad</option>
                    <option>Belagavi</option>
                    <option>Davangere</option>
                    <option>Ballari</option>
                    <option>Shivamogga</option>
                    <option>Udupi</option>
                    <option>Kalaburagi</option>
                    <option>Other</option>
                  </select>
                </label>

                <div class="flex items-center gap-3 mt-2">
                  <button type="submit" class="bg-brandRed text-white px-4 py-2 rounded-lg font-medium shadow-sm">Send</button>
                  <button type="button" class="text-sm text-gray-600 underline" onclick="closeForm('geomet')">Cancel</button>
                  <div class="ml-auto text-sm" aria-live="polite">
                    <span class="text-green-600 hidden" data-success>Thanks — we’ll contact you soon.</span>
                    <span class="text-red-600 hidden" data-fail>Submission failed. Try again.</span>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- end form -->
        </div>

        <!-- CENTER: Compact bullets (small) -->
        <div class="px-4 md:px-8">
          <ul class="list-disc list-inside space-y-2 text-sm md:text-sm text-gray-700">
            <li><strong>Series:</strong> GeoMet (MRL passenger elevators) &amp; Commer (custom built)</li>
            <li><strong>Use cases:</strong> Passenger — low/mid/high-rise; Goods/Cargo; Hospital lifts; High-speed apps</li>
            <li><strong>Performance:</strong> High-speed vertical flow, heavy-duty &amp; high-frequency operation</li>
            <li><strong>Design:</strong> Precision engineering for smooth rides and refined performance</li>
            <li><strong>Downloads:</strong> Data sheets available on each card</li>
            <li><strong>CTAs:</strong> GeoMet — Get pricelists &amp; catalogues; Commer — Enquire now</li>
          </ul>
        </div>

        <!-- RIGHT CARD: Commer -->
        <div class="border rounded-2xl shadow-sm overflow-hidden hover:shadow-md transition p-6">
          <img src="./images/banner/5581945_3650.jpg" alt="VertiPAX Commer" class="w-full h-56 md:h-64 object-cover rounded-lg mb-4">
          <h3 class="text-xl font-semibold mb-1">VertiPAX Commer Series</h3>
          <p class="text-gray-600 mb-2 text-sm">Custom built elevators for specialised applications</p>
          <a href="#" class="text-brandRed text-sm font-medium hover:underline block mb-3">Data sheet</a>
          <p class="text-gray-500 mb-4 italic text-sm">For Goods/Cargo, Hospital lifts, High-speed applications and more</p>

          <button onclick="openForm('commer')"
            class="bg-brandRed text-white px-4 py-2 rounded-lg font-medium text-sm shadow-sm hover:brightness-105 transition">
            Enquire now
          </button>

          <!-- form (hidden) -->
          <div id="form-commer" class="hidden mt-5">
            <div class="bg-white border rounded-xl p-5 shadow-sm">
              <div class="flex items-start justify-between">
                <h4 class="text-lg font-medium">Enquiry</h4>
                <button class="text-sm text-gray-500 hover:text-gray-700" onclick="closeForm('commer')" aria-label="Close form">✕</button>
              </div>

              <form class="mt-4 space-y-3" onsubmit="submitProductForm(event,'commer')">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">First name*</span>
                    <input name="firstName" required
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                  <label class="block">
                    <span class="text-xs text-gray-600">Last name*</span>
                    <input name="lastName" required
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">Contact number*</span>
                    <input name="phone" type="tel" required placeholder="e.g. 98XXXXXXXX" pattern="[0-9+() -]{6,}"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>

                  <label class="block">
                    <span class="text-xs text-gray-600">Email ID*</span>
                    <input name="email" type="email" required placeholder="you@company.com"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                </div>

                <label class="block">
                  <span class="text-xs text-gray-600">City*</span>
                  <select name="city" required
                    class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brandRed transition">
                    <option value="">Select city</option>
                    <option>Bengaluru</option>
                    <option>Mysuru</option>
                    <option>Mangalore</option>
                    <option>Hubballi-Dharwad</option>
                    <option>Belagavi</option>
                    <option>Davangere</option>
                    <option>Ballari</option>
                    <option>Shivamogga</option>
                    <option>Udupi</option>
                    <option>Kalaburagi</option>
                    <option>Other</option>
                  </select>
                </label>

                <div class="flex items-center gap-3 mt-2">
                  <button type="submit" class="bg-brandRed text-white px-4 py-2 rounded-lg font-medium shadow-sm">Send</button>
                  <button type="button" class="text-sm text-gray-600 underline" onclick="closeForm('commer')">Cancel</button>
                  <div class="ml-auto text-sm" aria-live="polite">
                    <span class="text-green-600 hidden" data-success>Thanks — we’ll contact you soon.</span>
                    <span class="text-red-600 hidden" data-fail>Submission failed. Try again.</span>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- end form -->
        </div>

      </div>
    </div>
  </section>

  <section class="py-16 bg-gray-50" id="VERTICARE">
    <div class="max-w-7xl mx-auto px-6">
      <!-- Heading -->
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 text-center">VertiCare</h2>
      <p class="text-center max-w-3xl mx-auto text-gray-600 mb-12 leading-relaxed">
        Elevate your peace of mind with VertiCare AMCs. Expert elevator maintenance services and genuine spare parts by Vertivo —
        because it's always better safe than sorry.
      </p>

      <!-- 2-column layout -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        <!-- Left: Image -->
        <div>
          <img src="./images/banner/Complete-Elevator-Care.png" alt="VertiCare Service"
            class="w-full h-72 md:h-96 object-cover rounded-2xl shadow-sm">
        </div>

        <!-- Right: Content + CTA + Form -->
        <div>
          <h3 class="text-xl font-semibold mb-3 text-gray-900">Complete Elevator Care</h3>
          <p class="text-gray-600 mb-4 leading-relaxed text-sm">
            Elevator health checkup, service maintenance, parts replacement, calibration, and complete elevator modernisation —
            all under one roof and safe hands.
          </p>

          <!-- CTA -->
          <button onclick="openForm('verticare')"
            class="bg-brandRed text-white px-5 py-2 rounded-lg font-medium text-sm shadow-sm hover:brightness-105 transition">
            Book Free Consultation
          </button>

          <!-- Form (hidden initially) -->
          <div id="form-verticare" class="hidden mt-6">
            <div class="bg-white border rounded-xl p-5 shadow-sm">
              <div class="flex items-start justify-between">
                <h4 class="text-lg font-medium">Book a free consultation</h4>
                <button class="text-sm text-gray-500 hover:text-gray-700" onclick="closeForm('verticare')" aria-label="Close form">✕</button>
              </div>

              <form class="mt-4 space-y-3" onsubmit="submitProductForm(event,'verticare')">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">First name*</span>
                    <input name="firstName" required
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                  <label class="block">
                    <span class="text-xs text-gray-600">Last name*</span>
                    <input name="lastName" required
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">Contact number*</span>
                    <input name="phone" type="tel" required placeholder="e.g. 98XXXXXXXX" pattern="[0-9+() -]{6,}"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                  <label class="block">
                    <span class="text-xs text-gray-600">Email ID*</span>
                    <input name="email" type="email" required placeholder="you@company.com"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brandRed transition" />
                  </label>
                </div>

                <label class="block">
                  <span class="text-xs text-gray-600">City*</span>
                  <select name="city" required
                    class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-brandRed transition">
                    <option value="">Select city</option>
                    <option>Bengaluru</option>
                    <option>Mysuru</option>
                    <option>Mangalore</option>
                    <option>Hubballi-Dharwad</option>
                    <option>Belagavi</option>
                    <option>Davangere</option>
                    <option>Ballari</option>
                    <option>Shivamogga</option>
                    <option>Udupi</option>
                    <option>Kalaburagi</option>
                    <option>Other</option>
                  </select>
                </label>

                <div class="flex items-center gap-3 mt-2">
                  <button type="submit" class="bg-brandRed text-white px-4 py-2 rounded-lg font-medium shadow-sm">Send</button>
                  <button type="button" class="text-sm text-gray-600 underline" onclick="closeForm('verticare')">Cancel</button>
                  <div class="ml-auto text-sm" aria-live="polite">
                    <span class="text-green-600 hidden" data-success>Thanks — we’ll contact you soon.</span>
                    <span class="text-red-600 hidden" data-fail>Submission failed. Try again.</span>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- end form -->
        </div>
      </div>
    </div>
  </section>

  <script>
    // open & close helpers
    function openForm(id) {
      const wrap = document.getElementById('form-' + id);
      if (!wrap) return;
      wrap.classList.remove('hidden');
      const form = wrap.querySelector('form');
      if (form) setTimeout(() => form.querySelector('input[name="firstName"]')?.focus(), 120);
    }

    function closeForm(id) {
      const wrap = document.getElementById('form-' + id);
      if (!wrap) return;
      wrap.querySelectorAll('[data-success],[data-fail]').forEach(n => n.classList.add('hidden'));
      wrap.querySelectorAll('[data-err]').forEach(n => n.classList.add('hidden'));
      wrap.querySelectorAll('input,select').forEach(i => i.classList.remove('ring', 'ring-2'));
      wrap.classList.add('hidden');
    }

    // generic submit handler for all product forms
    async function submitProductForm(e, id) {
      e.preventDefault();
      const form = e.target;
      const wrap = document.getElementById('form-' + id);
      if (!wrap) return; // safety
      const successEl = wrap.querySelector('[data-success]');
      const failEl = wrap.querySelector('[data-fail]');
      const submitBtn = form.querySelector('[data-submit]') || form.querySelector('button[type="submit"]');

      // simple front-end validation & show errors
      let ok = true;
      ['firstName', 'lastName', 'phone', 'email', 'city'].forEach(name => {
        const el = form.elements[name];
        if (!el) return;
        const err = wrap.querySelector(`[data-err="${name}"]`);
        if (!el.value || (el.type === 'email' && !/\S+@\S+\.\S+/.test(el.value))) {
          ok = false;
          if (err) err.classList.remove('hidden');
          el.classList.add('ring', 'ring-2');
        } else {
          if (err) err.classList.add('hidden');
          el.classList.remove('ring', 'ring-2');
        }
      });
      if (!ok) return;

      // disable + loading
      const original = submitBtn.innerHTML;
      submitBtn.disabled = true;
      submitBtn.innerHTML = 'Sending...';

      const payload = Object.fromEntries(new FormData(form).entries());
      payload.product = id;

      try {
        // TODO: Replace simulated delay with your actual API call:
        // const res = await fetch('/api/leads', {
        //   method: 'POST',
        //   headers: { 'Content-Type': 'application/json' },
        //   body: JSON.stringify(payload)
        // });
        // if (!res.ok) throw new Error('Network error');
        await new Promise(r => setTimeout(r, 600)); // simulate network

        successEl.classList.remove('hidden');
        failEl.classList.add('hidden');
        form.reset();

        setTimeout(() => closeForm(id), 1200);
      } catch (err) {
        failEl.classList.remove('hidden');
        successEl.classList.add('hidden');
      } finally {
        submitBtn.disabled = false;
        submitBtn.innerHTML = original;
      }
    }
  </script>



  <!-- <section class="py-12 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6">

     
      <div class="border-b border-gray-200">
        <div role="tablist" aria-label="Product tabs" class="flex gap-6 overflow-x-auto">
          <button class="tab-btn pb-4 text-red-600 font-medium relative focus:outline-none"
            role="tab" aria-selected="true" data-tab="features">
            Features
            <span class="absolute left-0 right-0 bottom-0 h-0.5 bg-red-600 transform scale-x-100 origin-left"></span>
          </button>

          <button class="tab-btn pb-4 text-gray-600 hover:text-gray-800 relative focus:outline-none"
            role="tab" aria-selected="false" data-tab="tech">
            Technical specifications
            <span class="absolute left-0 right-0 bottom-0 h-0.5 bg-red-600 transform scale-x-0 origin-left"></span>
          </button>

          <button class="tab-btn pb-4 text-gray-600 hover:text-gray-800 relative focus:outline-none"
            role="tab" aria-selected="false" data-tab="design">
            Design
            <span class="absolute left-0 right-0 bottom-0 h-0.5 bg-red-600 transform scale-x-0 origin-left"></span>
          </button>

          <button class="tab-btn pb-4 text-gray-600 hover:text-gray-800 relative focus:outline-none"
            role="tab" aria-selected="false" data-tab="connectivity">
            Connectivity
            <span class="absolute left-0 right-0 bottom-0 h-0.5 bg-red-600 transform scale-x-0 origin-left"></span>
          </button>
        </div>
      </div>

  
      <div class="pt-10">
       
        <div id="features" role="tabpanel" data-panel class="space-y-8">
       
          <div>
            <h2 class="text-3xl font-semibold text-red-600 mb-4">Engineered to Swiss standards</h2>
            <p class="text-gray-600 max-w-3xl">
              We’ve engineered the Schindler 3000 to ensure smooth, quiet, and economical operation throughout your elevator’s
              long life cycle, for every application, and in any environment.
            </p>
          </div>

   
          <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 items-start">
  
            <div class="text-left">
              <div class="mb-6 flex items-center justify-start">
                <svg class="w-20 h-20 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <rect x="2" y="4" width="20" height="16" rx="2" />
                  <path d="M7 8h10M7 12h10M7 16h4" />
                </svg>
              </div>
              <h4 class="text-sm font-semibold text-gray-900 mb-2">Latest technologies, greater comfort</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                Variable frequency drive systems deliver perfectly controlled power to traction machines and door drives,
                extending component lifetimes and increasing energy efficiency.
              </p>
            </div>

   
            <div class="text-left">
              <div class="mb-6 flex items-center justify-start">
                <svg class="w-20 h-20 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <rect x="3" y="3" width="18" height="18" rx="2" />
                  <circle cx="12" cy="12" r="3" />
                  <path d="M12 7v2M12 15v2M7 12h2M15 12h2" />
                </svg>
              </div>
              <h4 class="text-sm font-semibold text-gray-900 mb-2">State-of-the-art digital controller</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                Our scalable (universal) elevator controller offers more flexibility in the number of openings, number of stops,
                and car group size. Schindler’s EPIC absolute positioning system improves reliability and maintainability.
              </p>
            </div>

       
            <div class="text-left">
              <div class="mb-6 flex items-center justify-start">
                <svg class="w-20 h-20 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M12 3l2 4 4 .5-3 2 1 4-4-2-4 2 1-4-3-2 4-.5 2-4z" />
                  <circle cx="12" cy="12" r="10" />
                </svg>
              </div>
              <h4 class="text-sm font-semibold text-gray-900 mb-2">High-quality – at every level</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                Contact-free sensors ensure millimeter-precise leveling for safe, seamless movement of passengers and goods
                in and out of the elevator.
              </p>
            </div>

  
            <div class="text-left">
              <div class="mb-6 flex items-center justify-start">
                <svg class="w-20 h-20 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M12 3v18M5 8h14M5 16h14" />
                  <path d="M3 21h18" />
                </svg>
              </div>
              <h4 class="text-sm font-semibold text-gray-900 mb-2">Innovative drive technology</h4>
              <p class="text-gray-600 text-sm leading-relaxed">
                We’ve equipped the Schindler 3000 with regenerative drive technology. The system reduces travel energy by up to 30%
                compared to conventional technology.
              </p>
            </div>
          </div>
        </div>

 
        <div id="tech" role="tabpanel" data-panel hidden>
         
          <div class="max-w-full mx-auto px-6">
            <h3 class="text-3xl font-semibold text-red-600 mb-8">Key figures</h3>

           
            <dl class="divide-y divide-gray-200 border-t border-gray-200">
         
              <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-y-4 py-6 items-start">
                <dt class="font-semibold text-sm text-gray-900">Capacity</dt>
                <dd class="text-sm text-gray-700">340 - 1360 kg</dd>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-y-4 py-6 items-start">
                <dt class="font-semibold text-sm text-gray-900">Travel height</dt>
                <dd class="text-sm text-gray-700">Up to 80 m</dd>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-y-4 py-6 items-start">
                <dt class="font-semibold text-sm text-gray-900">Stops</dt>
                <dd class="text-sm text-gray-700">Max 30 stops</dd>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-y-4 py-6 items-start">
                <dt class="font-semibold text-sm text-gray-900">Speed</dt>
                <dd class="text-sm text-gray-700">1.0 - 2.5 m/s</dd>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-y-4 py-6 items-start">
                <dt class="font-semibold text-sm text-gray-900">Drive System</dt>
                <dd class="text-sm text-gray-700">
                  Machine-room-less, eco-friendly regenerative drive technology, frequency controlled
                </dd>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-y-4 py-6 items-start">
                <dt class="font-semibold text-sm text-gray-900">Group size</dt>
                <dd class="text-sm text-gray-700">Up to 6 cars</dd>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-y-4 py-6 items-start">
                <dt class="font-semibold text-sm text-gray-900">Entrances</dt>
                <dd class="text-sm text-gray-700">One- or two-sided</dd>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-y-4 py-6 items-start">
                <dt class="font-semibold text-sm text-gray-900">Interior</dt>
                <dd class="text-sm text-gray-700">
                  3 interior design lines, fresh wall colors and a wide range of fixtures as well as a bare car option
                </dd>
              </div>
            </dl>
          </div>
       
          <section class="w-full bg-white py-16">
            <div class="mx-auto px-6 lg:px-8 max-w-screen-2xl">
            
              <div class="max-w-3xl">
                <h2 class="text-3xl lg:text-4xl font-semibold text-brandRed mb-4">Less space, more capacity</h2>
                <p class="text-gray-600 mb-10">
                  Schindler 3000 has outstanding architectural flexibility for car, door, and shaft dimensions.
                  Less space taken up with components, more room for you to use profitably.
                </p>
              </div>

   
              <div class="grid grid-cols-1 lg:grid-cols-[280px_1fr_360px] gap-10 items-start">
           
                <div class="order-1 lg:order-none">
                  <div class="w-full h-[520px] lg:h-[640px] overflow-hidden rounded-sm">
                    <img src="./images/banner/schindler-elevators-shaft.jpg" alt="Elevator cutaway" class="w-full h-full object-cover object-top">
                  </div>
                </div>


                <div class="order-2 lg:order-none">
                  <div class="space-y-8">
                    <div>
                      <h3 class="text-lg font-semibold text-gray-900 mb-3">Machine-room-less design</h3>
                      <p class="text-gray-600 leading-relaxed">
                        All main drive, traction, and control equipment sits in the shaft, freeing up architects and designers
                        to use the extra space for more productive purposes. And thanks to the compact gearless machine,
                        a larger car can be fitted into a standard shaft space, reducing headroom space and pit depth.
                      </p>
                    </div>

                    <div>
                      <h4 class="text-base font-semibold text-gray-900 mb-2">Optimized headroom</h4>
                      <p class="text-gray-600 leading-relaxed">
                        Offering even more room for you making the installation highly flexible.
                      </p>
                    </div>

                    <div>
                      <h4 class="text-base font-semibold text-gray-900 mb-2">Modular system, scalable car and door dimensions</h4>
                      <p class="text-gray-600 leading-relaxed">
                        We can adjust car dimensions for you in any direction in 50 mm increments, with car widths available
                        from 1000 mm to 2000 mm, car depths from 950 mm to 2400 mm, and car heights up to 2800 mm.
                      </p>
                    </div>

                    <p class="text-gray-600 leading-relaxed">
                      Doors can be sized and positioned with millimeter accuracy. The door width is adjustable in 100 mm increments
                      for heights from 2000 mm to 2400 mm, with a choice of telescopic (T2) or center-opening doors (C2).
                    </p>
                  </div>
                </div>

         
                <aside class="order-3 lg:order-none">
                  <div class="space-y-8">
                    <div>
                      <h4 class="text-sm font-semibold text-gray-900 mb-2">Smaller motor and traction sheave</h4>
                      <p class="text-gray-600 leading-relaxed text-sm">
                        Our Suspension Traction Media (STM) system ensures a quieter, smoother ride and does not require any
                        lubricant. Our STM also saves shaft space because of the smaller motor and traction sheave needed – 70%
                        smaller than traditional systems.
                      </p>
                    </div>

                    <div>
                      <h4 class="text-sm font-semibold text-gray-900 mb-2">More usable building space</h4>
                      <p class="text-gray-600 leading-relaxed text-sm">
                        Less space for components, more usable building space and more room for passengers. Our platform ensures
                        that a standard-sized shaft can carry a wider car with a larger load capacity.
                      </p>
                    </div>

                    <div>
                      <h4 class="text-sm font-semibold text-gray-900 mb-2">Built-in inspection and test panel</h4>
                      <p class="text-gray-600 leading-relaxed text-sm">
                        The Schindler 3000’s inspection and test panel is built directly into a standard door frame at the top landing.
                        This solution simplifies elevator installation, provides easy access, and saves space.
                      </p>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
          </section>

        </div>

 
        <div id="design" role="tabpanel" data-panel hidden>
          
          <div class="max-w-full mx-auto px-6 py-12">

            <h3 class="text-3xl lg:text-4xl font-semibold text-brandRed mb-8">Interior design lines</h3>


            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

              <article class="space-y-4">
                <h4 class="text-base font-semibold text-gray-900">Navona - Functional and durable</h4>
                <p class="text-gray-600 leading-relaxed">
                  Introduce clarity and comfort in your car with this robust design line. Fresh colors, durable accessories,
                  and the option of five different floors make Navona an excellent choice for residential applications.
                  Stainless steel options are also available for rear and side walls.
                </p>
              </article>


              <article class="space-y-4">
                <h4 class="text-base font-semibold text-gray-900">Times Square - Modern and versatile</h4>
                <p class="text-gray-600 leading-relaxed">
                  A contemporary look. Choose from warm or cool colors or combine to enhance contrast for more depth.
                  Times Square adds distinctive features to any public, commercial or residential building.
                </p>
              </article>


              <article class="space-y-4">
                <h4 class="text-base font-semibold text-gray-900">Park Avenue - Sophisticated and elegant</h4>
                <p class="text-gray-600 leading-relaxed">
                  A touch of class. Wooden and textured laminates or back-painted glass walls for a rich, contemporary mode.
                  Or a luxury feel with stainless steel in several finishes or decorative glass. Matched lighting completes the elegance.
                </p>
              </article>
            </div>
          </div>


          <section class="w-full bg-white py-16">
            <div class="max-w-full mx-auto px-6">

              <h2 class="text-3xl lg:text-4xl font-semibold text-brandRed mb-10">
                Panels, handrails, mirrors and other accessories
              </h2>


              <div class="grid grid-cols-1 lg:grid-cols-[1fr_360px] gap-10 items-start">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
                  <div class="space-y-6">
                    <article>
                      <h4 class="font-semibold text-gray-900 mb-2">Linea 100</h4>
                      <p class="text-gray-600 leading-relaxed">
                        Linea 100 offers functional design in stainless steel. The integrated white glass display comes with
                        large, easily readable red LED dot matrix floor indicator. Push buttons have clear red illumination
                        when a call is recognized.
                      </p>
                    </article>

                    <article>
                      <h4 class="font-semibold text-gray-900 mb-2">Linea 100 Touch</h4>
                      <p class="text-gray-600 leading-relaxed">
                        The convenience of our classic user interface converted to a touch version. The stylish design is in
                        resistant glass with a light indication to signal all functions, and dot matrix displays with large,
                        easily readable red LEDs.
                      </p>
                    </article>
                  </div>


                  <div class="space-y-6">
                    <article>
                      <h4 class="font-semibold text-gray-900 mb-2">Linea 300</h4>
                      <p class="text-gray-600 leading-relaxed">
                        An upmarket user interface to enhance your elevator’s looks, with an intuitive, efficient design.
                        The display is in black glass, with buttons positioned on elegant black stainless steel, or white glass
                        display on a stainless steel color finishing.
                      </p>
                    </article>

      
                    <article>
                      <h4 class="font-semibold text-gray-900 mb-2">Other accessories</h4>
                      <p class="text-gray-600 leading-relaxed">
                        Handrails, mirrors, specialty finishes and bespoke fixtures are available to match your interior design
                        and functional requirements.
                      </p>
                    </article>
                  </div>
                </div>

        
                <div class="flex items-start justify-center lg:justify-end">
                  <div class="w-48 sm:w-56 lg:w-72 xl:w-80">
                    <img src="./images/banner/schindler-linea-300-cop-black.jpg" alt="Control panel vertical" class="w-full h-auto object-contain">
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="w-full bg-white py-16">
            <div class="mx-auto px-6 lg:px-8 max-w-screen-2xl">
              <div class="grid grid-cols-1 lg:grid-cols-[360px_1fr] gap-10 items-start">

                <figure class="w-full">
                  <div class="w-full h-[520px] lg:h-[640px] overflow-hidden rounded-sm shadow-sm">
                    <img src="./images/banner/image-352x528.jpg"
                      alt="Elevator interior with mirror and handrail"
                      class="w-full h-full object-cover object-center">
                  </div>
                </figure>

 
                <div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
           
                    <article>
                      <h4 class="font-semibold text-gray-900 mb-3">Mirrors</h4>
                      <p class="text-gray-600 leading-relaxed">
                        Mirrors enhance the sense of space, depth and comfort in elevators. Schindler 3000 elevators can be fitted
                        with a full-height or half-height safety-glass mirror on the side or rear wall of the car.
                      </p>
                    </article>

     
                    <article>
                      <h4 class="font-semibold text-gray-900 mb-3">Landing doors</h4>
                      <p class="text-gray-600 leading-relaxed">
                        How your elevator design immerses with your building can enhance your tenants’ response to the overall
                        building décor. We offer a full range of colors to help you unleash your building’s full design potential.
                      </p>
                    </article>

                    <article>
                      <h4 class="font-semibold text-gray-900 mb-3">Handrails</h4>
                      <p class="text-gray-600 leading-relaxed">
                        Handrails convey a feeling of security. Our stainless steel handrails are designed to blend with car interiors,
                        shapes and textures, and can be mounted to the side and rear walls. Available in curved, straight, and straight with curved ends.
                      </p>
                    </article>

         
                    <article>
                      <h4 class="font-semibold text-gray-900 mb-3">Bumper rails</h4>
                      <p class="text-gray-600 leading-relaxed">
                        Designed to protect your elevator car walls and prolong their sleek looks, Schindler’s damage bumper rails are
                        available in a variety of heights, in stainless steel finish.
                      </p>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </section>


        </div>


        <div id="connectivity" role="tabpanel" data-panel hidden>
       
          <section class="w-full bg-white py-16">
            <div class="mx-auto px-6 max-w-full">
         
              <h2 class="text-3xl lg:text-4xl font-semibold text-brandRed mb-6">
                Schindler elevators designed for next-generation technologies
              </h2>
              <p class="text-gray-600 max-w-3xl mb-10">
                Benefit from our tools, solutions, and latest innovations to support you throughout the entire product life cycle of your elevator.
                From planning to operation, we design our elevators to use state-of-the-art technologies.
              </p>

              <div class="grid grid-cols-1 lg:grid-cols-[420px_1fr] gap-10 items-start">
       
                <figure class="w-full">
                  <div class="w-full h-[520px] lg:h-[640px] overflow-hidden rounded-sm shadow-sm">
                    <img src="./images/banner/schindler-mediascreen-exterior-image.jpg" alt="Elevator open door"
                      class="w-full h-full object-cover object-center" />
                  </div>
                </figure>

       
                <div class="w-full">
                  <div class="space-y-8">
                    <div>
                      <h3 class="text-base font-semibold text-gray-900 mb-2">Plan &amp; Design online</h3>
                      <p class="text-gray-600 leading-relaxed">
                        With just a few clicks, you can plan exactly the right elevator for your building. Our online
                        <a href="#" class="text-brandRed underline">Plan &amp; Design tool</a> provides you with recommendations,
                        comprehensive product specifications, and detailed layout drawings.
                      </p>
                    </div>

                    <div>
                      <h3 class="text-base font-semibold text-gray-900 mb-2">Innovation in installation</h3>
                      <p class="text-gray-600 leading-relaxed">
                        Our new INEX (Installation Excellence) system reduces construction preparation and resources for our customers,
                        as well as improving safety and efficiency on site.
                      </p>
                    </div>

                    <div>
                      <h3 class="text-base font-semibold text-gray-900 mb-2">Smart operation - switching to digital</h3>
                      <p class="text-gray-600 leading-relaxed">
                        All our new elevators come fully enabled for
                        <a href="#" class="text-brandRed underline">Schindler Ahead</a> — our IoT portfolio of services.
                        With Schindler Ahead, we make sure our customers can step confidently into the digital era.
                      </p>

           
                      <ul class="mt-4 space-y-3 list-none">
                        <li class="text-gray-700 italic">
                          – <span class="font-medium">Maximize uptime with Ahead Remote Monitoring</span><br />
                          With digital connectivity, issues can be detected and addressed well before service is affected. Schindler
                          <a href="#" class="text-brandRed underline">Ahead Remote Monitoring</a> maximizes uptime thanks to instant, accurate insights.
                        </li>

                        <li class="text-gray-700 italic">
                          – <span class="font-medium">Real-time insights with Ahead ActionBoard</span><br />
                          Schindler <a href="#" class="text-brandRed underline">Ahead ActionBoard</a> provides operational, performance and commercial information
                          in real time, giving customers clear, instant oversight of their entire elevator and escalator portfolio.
                        </li>
                      </ul>
                    </div>

                    <div>
                      <h3 class="text-base font-semibold text-gray-900 mb-2">User experience on a higher level</h3>
                      <p class="text-gray-600 leading-relaxed">
                        Inform, engage, entertain. Display engaging multimedia content for your passengers and generate new revenue streams
                        through advertising. Turn your elevator into an infotainment hub with
                        <a href="#" class="text-brandRed underline">Ahead SmartMirror</a> and <a href="#" class="text-brandRed underline">MediaScreen</a>.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>

    <script>
      (function() {
        const tabButtons = Array.from(document.querySelectorAll('.tab-btn'));
        const panels = Array.from(document.querySelectorAll('[data-panel]'));

        function activateTab(btn) {
  
          tabButtons.forEach(b => {
            b.classList.remove('text-red-600', 'font-medium');
            b.classList.add('text-gray-600');
            b.setAttribute('aria-selected', 'false');
            const underline = b.querySelector('span');
            if (underline) underline.style.transform = 'scaleX(0)';
          });
          panels.forEach(p => p.hidden = true);


          btn.classList.remove('text-gray-600');
          btn.classList.add('text-red-600', 'font-medium');
          btn.setAttribute('aria-selected', 'true');
          const target = btn.dataset.tab;
          const panel = document.getElementById(target);
          if (panel) panel.hidden = false;

          const underline = btn.querySelector('span');
          if (underline) underline.style.transform = 'scaleX(1)';
        }

        tabButtons.forEach((btn, idx) => {

          btn.addEventListener('click', () => activateTab(btn));


          btn.addEventListener('keydown', (e) => {
            let nextIndex;
            if (e.key === 'ArrowRight') nextIndex = (idx + 1) % tabButtons.length;
            if (e.key === 'ArrowLeft') nextIndex = (idx - 1 + tabButtons.length) % tabButtons.length;
            if (e.key === 'Home') nextIndex = 0;
            if (e.key === 'End') nextIndex = tabButtons.length - 1;
            if (nextIndex !== undefined) {
              tabButtons[nextIndex].focus();
              activateTab(tabButtons[nextIndex]);
              e.preventDefault();
            }
          });
        });


        const initiallyActive = tabButtons.find(b => b.getAttribute('aria-selected') === 'true') || tabButtons[0];
        if (initiallyActive) activateTab(initiallyActive);
      })();
    </script>
  </section> -->
  <section class="py-12 bg-gray-50">
    <div class="  ">

      <section class="py-12 bg-gray-50">
        <div class="  ">
          <!-- Two-column hero: image left / red panel right -->
          <div class="bg-white rounded-lg overflow-hidden shadow-sm">
            <div class="flex flex-col md:flex-row">

              <div class="md:w-1/2 w-full">
                <img
                  src="/images/banner/customer-obsession.webp"
                  alt="Elevator digital media"
                  class="object-cover w-full h-72 md:h-[420px] lg:h-[520px]" />
              </div>

              <!-- RIGHT: red panel -->
              <div class="md:w-1/2 w-full bg-[#1B6F5D] text-white flex items-center">
                <div class="p-8 md:p-12 lg:p-16 max-w-2xl">
                  <!-- <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold mb-4">Digital Media Services</h2> -->
                  <p class="text-base md:text-xl text-red-100 mb-6 leading-relaxed">
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

      <!-- Spacer -->
      <div class="mt-10"></div>

      <!-- Existing 'Our Core Values' content (adapted to match look/spacing) -->
      <!-- <section class="py-12 bg-gray-50">
        <div class="max-w-screen-2xl mx-auto px-6">
          <h2 class="text-3xl font-semibold text-red-600 mb-4">Enhance your elevator</h2>

          <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-4">

            <div class="flex flex-col lg:gap-7 gap-5">

              <h2 class="font-bold">Lorem ipsum dolor sit.</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, iste.
              </p>
              <a href="#" class="flex text-red-600 text-lg"><span>learn more</span> &rarr;</a>

            </div>
            <div class="flex flex-col gap-7">

              <h2 class="font-bold">Lorem ipsum dolor sit.</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, iste.
              </p>
              <a href="#" class="flex text-red-600 text-lg"><span>learn more</span> &rarr;</a>

            </div>
            <div class="flex flex-col gap-7">

              <h2 class="font-bold">Lorem ipsum dolor sit.</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, iste.
              </p>
              <a href="#" class="flex text-red-600 text-lg"><span>learn more</span> &rarr;</a>

            </div>
            <div class="flex flex-col gap-7">

              <h2 class="font-bold">Lorem ipsum dolor sit.</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, iste.
              </p>
              <a href="#" class="flex text-red-600 text-lg"><span>learn more</span> &rarr;</a>

            </div>
          </div>
        </div>
      </section> -->
    </div>
  </section>


  <div id="toast" role="status" aria-live="polite">
    <div id="toastMsg" class="text-sm"></div>
  </div>


  <footer class="bg-gray-900 text-gray-300 mt-16">
    <!-- top -->
    <div class="max-w-7xl mx-auto px-6 py-14">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
        <!-- Brand / blurb -->
        <div>
          <a href="./index.php" class="inline-flex items-center gap-2">
            <span class="text-xl font-extrabold tracking-tight text-white">Vertivo Elevators</span>
          </a>
          <p class="mt-4 text-sm leading-relaxed text-gray-400">
            Reliable, safe and innovative vertical transportation solutions for homes, apartments and commercial spaces.
          </p>
          <!-- social -->
          <div class="mt-5 flex items-center gap-4">
            <a href="#" class="hover:text-white focus:outline-none" aria-label="WhatsApp">
              <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current">
                <path d="M.057 24l1.687-6.163A11.867 11.867 0 0112.02 0C18.627 0 24 5.373 24 11.98c0 6.607-5.373 11.98-11.98 11.98A11.94 11.94 0 015.9 21.86L.057 24zM6.6 19.214l.39.232a9.93 9.93 0 004.992 1.356h.004c5.488 0 9.962-4.474 9.962-9.962 0-5.486-4.474-9.96-9.962-9.96-5.487 0-9.96 4.474-9.96 9.96a9.93 9.93 0 001.356 4.992l.232.39-.996 3.642 3.642-.99zm11.387-5.48c-.062-.103-.23-.165-.48-.29-.25-.124-1.476-.727-1.705-.81-.228-.083-.394-.124-.56.125-.166.248-.644.81-.79.977-.145.165-.29.186-.54.062-.25-.125-1.056-.39-2.01-1.24-.742-.662-1.243-1.48-1.388-1.73-.145-.248-.016-.382.109-.507.112-.112.248-.29.373-.435.124-.145.165-.248.248-.414.083-.165.042-.31-.02-.435-.063-.124-.56-1.35-.767-1.857-.2-.48-.404-.414-.56-.414l-.477-.01c-.166 0-.435.062-.664.31-.228.248-.87.85-.87 2.072s.892 2.404 1.016 2.57c.124.165 1.755 2.68 4.253 3.757.595.256 1.058.41 1.418.525.595.19 1.137.163 1.566.099.478-.071 1.476-.603 1.686-1.186.207-.583.207-1.082.145-1.186z" />
              </svg>
            </a>
            <a href="#" class="hover:text-white focus:outline-none" aria-label="Instagram">
              <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current">
                <path d="M7 2C4.243 2 2 4.243 2 7v10c0 2.757 2.243 5 5 5h10c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5H7zm10 2c1.654 0 3 1.346 3 3v10c0 1.654-1.346 3-3 3H7c-1.654 0-3-1.346-3-3V7c0-1.654 1.346-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2.2A2.8 2.8 0 1112 16.8 2.8 2.8 0 0112 9.2zM18 6.5a1 1 0 11-2-.002 1 1 0 012 .002z" />
              </svg>
            </a>
            <a href="#" class="hover:text-white focus:outline-none" aria-label="LinkedIn">
              <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current">
                <path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM0 8h5v16H0zM8 8h4.8v2.2h.07c.67-1.2 2.3-2.47 4.73-2.47C21.6 7.73 24 10 24 14.14V24h-5v-8.6c0-2.05-.73-3.45-2.55-3.45-1.39 0-2.22.94-2.58 1.85-.13.32-.16.76-.16 1.2V24H8z" />
              </svg>
            </a>
          </div>
        </div>

        <!-- Quick links -->
        <div>
          <h3 class="text-white font-semibold tracking-wide">Quick Links</h3>
          <ul class="mt-4 space-y-3 text-sm">
            <li><a href="./index.php" class="hover:text-white">Home</a></li>
            <li><a href="./product.php" class="hover:text-white">Products / Services</a></li>
            <li><a href="./contact-us.php" class="hover:text-white">Contact Us</a></li>
            <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
            <li><a href="#" class="hover:text-white">Terms of Service</a></li>
          </ul>
        </div>

        <!-- Products anchors -->
        <div>
          <h3 class="text-white font-semibold tracking-wide">Product Lines</h3>
          <ul class="mt-4 space-y-3 text-sm">
            <li><a href="./product.php#VERTICASA" class="hover:text-white">VertiCASA Series</a></li>
            <li><a href="./product.php#VERTIPAX" class="hover:text-white">VertiPAX Series</a></li>
            <li><a href="./product.php#VERTICARE" class="hover:text-white">VertiCare (Service)</a></li>
          </ul>
        </div>

        <!-- Contact -->
        <div>
          <h3 class="text-white font-semibold tracking-wide">Contact</h3>
          <ul class="mt-4 space-y-3 text-sm">
            <li><span class="text-gray-400">Phone:</span> <a href="tel:+910000000000" class="hover:text-white">+91 00000 00000</a></li>
            <li><span class="text-gray-400">Email:</span> <a href="mailto:hello@vertivo.in" class="hover:text-white">hello@vertivo.in</a></li>
            <li><span class="text-gray-400">Address:</span> JP Nagar, Bengaluru, Karnataka</li>
          </ul>

          <!-- Tiny newsletter (optional) -->
          <!-- <form class="mt-5 flex gap-2" onsubmit="event.preventDefault(); alert('Subscribed!');">
            <input type="email" required placeholder="Your email"
              class="w-full px-3 py-2 rounded-lg bg-gray-800 text-gray-200 placeholder-gray-500 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500" />
            <button class="px-4 py-2 rounded-lg bg-red-600 text-white hover:bg-red-700">Subscribe</button>
          </form> -->
        </div>
      </div>
    </div>

    <!-- bottom -->
    <div class="border-t border-gray-800">
      <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
        <p class="text-sm text-gray-400">
          © <span id="year"></span> Vertivo Elevators. All rights reserved.
        </p>

      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    // Initialize Swiper
    const swiper = new Swiper('.hero-swiper', {
      loop: true,
      effect: "fade",
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      autoplay: {
        delay: 7000,
        disableOnInteraction: false
      }
    });

    // Toggle form visibility
    function toggleForm(n) {
      const el = document.getElementById('form-container-' + n);
      if (!el) return;
      el.classList.toggle('hidden');
      // scroll form into view if opened
      if (!el.classList.contains('hidden')) {
        el.scrollIntoView({
          behavior: 'smooth',
          block: 'center'
        });
      }
    }

    // Hook CTA buttons to open their respective forms
    document.querySelectorAll('.cta-get-quote').forEach(btn => {
      btn.addEventListener('click', (e) => {
        const slide = btn.getAttribute('data-slide');
        toggleForm(slide);
      });
    });

    // Basic front-end form submit (replace with real API)
    async function submitForm(e, id) {
      e.preventDefault();

      const formEl = document.querySelector(`[data-form="${id}"]`);
      const successEl = document.querySelector(`[data-success="${id}"]`);
      const errorEl = document.querySelector(`[data-error="${id}"]`);
      const submitBtn = formEl.querySelector('button[type="submit"]');

      // Clear old messages
      successEl.classList.add('hidden');
      errorEl.classList.add('hidden');

      // Gather all input values
      const formData = new FormData(formEl);
      const payload = Object.fromEntries(formData.entries());

      // 🔹 Add standard metadata
      // Auto-detect the page or section that triggered this form
      payload.sourcePage = payload.sourcePage ||
        document.title // e.g. "VertiPAX – Vertivo Elevators"
        ||
        location.pathname.split('/').pop() // fallback like "product.php"
        ||
        'unknown';
      payload.sourceUrl = location.href; // full URL for tracking
      payload.submittedAt = new Date().toISOString();

      // 🔹 If this form sits inside a product section, grab it
      const container = document.getElementById(`form-container-${id}`);
      const inferredProduct = container?.getAttribute('data-product');
      if (inferredProduct && !payload.product) payload.product = inferredProduct;

      // Button loading UX
      const origText = submitBtn.textContent;
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending...';

      try {
        // Send to your PHP API
        const res = await fetch('/api/send-lead.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(payload)
        });

        let json = {};
        try {
          json = await res.json();
        } catch (_) {}

        if (!res.ok || !json.ok) {
          const msg = json?.errors ?
            'Please check your details and try again.' :
            'Failed to submit. Try again.';
          errorEl.textContent = msg;
          errorEl.classList.remove('hidden');
          return;
        }

        // Success flow (same as before)
        successEl.classList.remove('hidden');
        formEl.reset();

        setTimeout(() => {
          if (typeof toggleForm === 'function') toggleForm(id);
          successEl.classList.add('hidden');
        }, 1600);

      } catch (err) {
        errorEl.textContent = 'Network error. Please retry.';
        errorEl.classList.remove('hidden');
      } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = origText;
      }
    }
  </script>

  <script>
    (function() {
      const trigger = document.getElementById('productsTrigger');

      // If some script intercepts navigation, this ensures clicks still navigate.
      trigger.addEventListener('click', function(e) {
        // If the default was prevented earlier, force navigation
        if (e.defaultPrevented) {
          window.location.href = this.getAttribute('href');
          return;
        }
        // Otherwise, let the browser handle the anchor naturally
      });

      // Keyboard: Enter should behave like click
      trigger.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
          // allow default but also ensure navigation as fallback
          e.preventDefault();
          const href = this.getAttribute('href');
          if (href) window.location.href = href;
        }
      });

      // Optional: close dropdown when clicking outside (accessibility nicety)
      document.addEventListener('click', (ev) => {
        const dropdown = document.getElementById('productsDropdown');
        if (!trigger.contains(ev.target) && (!dropdown || !dropdown.contains(ev.target))) {
          trigger.setAttribute('aria-expanded', 'false');
        }
      });

      // When focused inside the li (keyboard tabbing), set aria-expanded true
      trigger.addEventListener('focus', () => trigger.setAttribute('aria-expanded', 'true'));
    })();
  </script>

  <script>
    const navToggle = document.getElementById('navToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const hamburgerIcon = document.getElementById('hamburgerIcon');
    const closeIcon = document.getElementById('closeIcon');

    // If navToggle is missing (not present due to markup differences), safely guard
    if (navToggle && mobileMenu) {
      navToggle.addEventListener('click', () => {
        const isOpen = !mobileMenu.classList.contains('hidden');
        mobileMenu.classList.toggle('hidden');
        if (hamburgerIcon) hamburgerIcon.classList.toggle('hidden');
        if (closeIcon) closeIcon.classList.toggle('hidden');
      });
    }

    function closeMobileMenu() {
      if (mobileMenu) mobileMenu.classList.add('hidden');
      if (hamburgerIcon) hamburgerIcon.classList.remove('hidden');
      if (closeIcon) closeIcon.classList.add('hidden');
    }
  </script>

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


          console.log(data)
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

</body>

</html>