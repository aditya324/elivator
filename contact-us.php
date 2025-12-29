<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Contact — Vertivo Elevators</title>

  <!-- Tailwind CDN (demo). Replace with compiled Tailwind in production -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    :root {
      --brand: #1B6F5D;
    }

    /* brandRed */
    .brand {
      background-color: var(--brand);
    }

    .brand-text {
      color: var(--brand);
    }
  </style>

  <!-- Structured data (fill real details later) -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Vertivo Elevators",
      "url": "https://www.vertivo.example",
      "logo": "https://via.placeholder.com/200x200?text=V",
      "email": "sales@vertivo.com",
      "telephone": "+91-98xx-xxx-xxx",
      "sameAs": [],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "No. 123, MG Road",
        "addressLocality": "Bengaluru",
        "addressRegion": "Karnataka",
        "postalCode": "560001",
        "addressCountry": "IN"
      },
      "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        "opens": "09:30",
        "closes": "18:30"
      }]
    }
  </script>
</head>

<body class="bg-gray-50 text-gray-800 antialiased ">

  <!-- NAVBAR -->
  <header
    id="site-header"
    class="sticky top-0 z-[9999]
         w-full flex justify-between items-center
         px-6 md:px-10 py-4 md:py-6
         font-bold 
         bg-white">
    <div id="brand" class="flex items-center">

      <img
        src="./images/logo/vertivo logo color.jpg"
        alt="Brand Logo"
        class="h-24 w-auto transition-all duration-300 default-logo rounded-lg">


      <img
        src="./images/logo/vertivo-logo-small.png"
        alt="Brand Logo Small"
        class="h-12 w-auto transition-all duration-300 scroll-logo hidden">
    </div>



    <nav id="nav-links" class="hidden md:block">
      <ul class="flex items-center space-x-10 text-lg font-medium">
        <li><a href="./index.php" class="hover:text-brandRed text-[#1A705D]">Home</a></li>

        <li class="relative group">
          <a href="./product.php" class=" text-[#1A705D] inline-flex items-center gap-2 text-lg hover:text-brandRed focus:outline-none" id="productsTrigger" aria-haspopup="true" aria-expanded="false" tabindex="0">
            Products/Services
            <svg class="w-5 h-5 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>

          <ul
            class="absolute left-0  hidden rounded-lg shadow-lg w-56 bg-white  z-50
               group-hover:block group-focus:block text-[#1A705D]"
            id="productsDropdown" role="menu" aria-label="Products menu">
            <li><a href="./product.php#VERTICASA" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">VertiCASA</a></li>
            <li><a href="./product.php#VERTIPAX" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">VertiPAX</a></li>
            <li><a href="./product.php#VERTICARE" class="block px-5 py-3 hover:bg-gray-100" role="menuitem">VertiCare</a></li>
          </ul>
        </li>

        <li><a href="./contact-us.php" class="hover:text-brandRed text-[#1A705D]">Contact Us</a></li>
      </ul>
    </nav>


    <div class="md:hidden flex items-center gap-4">

      <button id="mobile-menu-btn"
        aria-controls="mobile-menu"
        aria-expanded="false"
        class="p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brandRed">
        <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
          aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
          aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
  </header>
  <nav id="mobile-menu"
class="md:hidden fixed inset-x-4 top-[72px] z-40 bg-white rounded-xl shadow-lg transform transition-all duration-300 opacity-0 scale-95 pointer-events-none mt-14"    aria-hidden="true">
    <div class="p-4">
      <ul class="space-y-2">
        <li><a href="#" class="block px-4 py-3 rounded-md text-lg hover:bg-gray-100">Home</a></li>

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

  <!-- MAIN -->
  <main class="py-16" id="contact">
    <h1 class="text-center text-4xl font-bold p-5">Contact us</h1>
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- LEFT: Enquiry form (spans 2 columns on desktop) -->
        <section class="lg:col-span-2">
          <div class="bg-white border rounded-2xl p-6 shadow-sm">
            <h1 class="text-2xl font-bold mb-2">Let's build the perfect elevator that is uniquely yours</h1>
            <p class="text-sm text-gray-600 mb-6">To enquire, help us with the details below. Our elevator consultant will contact you.</p>

            <form id="contactForm" class="space-y-6" onsubmit="handleContactSubmit(event)" novalidate>
              <!-- Your details -->
              <div>
                <h2 class="text-sm font-semibold text-gray-700 mb-2">Your details</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">First name*</span>
                    <input name="firstName" required autocomplete="given-name"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-opacity-60" />
                    <p class="text-xs text-red-600 mt-1 hidden" data-err="firstName">Please enter first name</p>
                  </label>

                  <label class="block">
                    <span class="text-xs text-gray-600">Last name</span>
                    <input name="lastName" autocomplete="family-name"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2" />
                  </label>
                </div>
                <input type="hidden" name="sourcePage" value="contact">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">Contact number*</span>
                    <input name="phone" required type="tel" placeholder="98XXXXXXXX"
                      pattern="[0-9+() \-]{6,}" inputmode="tel" autocomplete="tel"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2" />
                    <p class="text-xs text-red-600 mt-1 hidden" data-err="phone">Please enter a valid phone</p>
                  </label>

                  <label class="block">
                    <span class="text-xs text-gray-600">Email ID*</span>
                    <input name="email" required type="email" placeholder="you@company.com" autocomplete="email"
                      class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2" />
                    <p class="text-xs text-red-600 mt-1 hidden" data-err="email">Please enter a valid email</p>
                  </label>
                </div>
              </div>

              <!-- Requirements -->
              <div class="pt-2 border-t">
                <h2 class="text-sm font-semibold text-gray-700 mb-2">Requirements</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">Elevator required for*</span>
                    <select name="application" required class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2">
                      <option value="">Select an option</option>
                      <option>Residential - Individual house</option>
                      <option>Residential - Apartments building</option>
                      <option>Commercial building</option>
                      <option>Commercial - Factories / Warehouse</option>
                      <option>Others</option>
                    </select>
                    <p class="text-xs text-red-600 mt-1 hidden" data-err="application">Please select an option</p>
                  </label>

                  <label class="block">
  <span class="text-xs text-gray-600">City*</span>
  <select
    name="city"
    required
    class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2">
    <option value="">Select city</option>
    <option>Bengaluru</option>
    <option>Mysuru</option>
    <option>Mangaluru</option>
    <option>Hubballi–Dharwad</option>
    <option>Belagavi</option>
    <option>Shivamogga</option>
    <option>Ballari</option>
    <option>Davangere</option>
    <option>Kalaburagi</option>
    <option>Udupi</option>
    <option>Other</option>
  </select>
  <p class="text-xs text-red-600 mt-1 hidden" data-err="city">Please select a city</p>
</label>


                  <label class="block">
                    <span class="text-xs text-gray-600">Floors (stops)*</span>
                    <select name="floors" required class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2">
                      <option value="">Select floors</option>
                      <option>G+1 (2 stops)</option>
                      <option>G+2 (3 stops)</option>
                      <option>G+3 (4 stops)</option>
                      <option>G+4 (5 stops)</option>
                      <option>G+5 (6 stops)</option>
                      <option>G+6 (7 stops) and above</option>
                    </select>
                    <p class="text-xs text-red-600 mt-1 hidden" data-err="floors">Please select floors</p>
                  </label>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-3">
                  <label class="block">
                    <span class="text-xs text-gray-600">Product interested in (optional)</span>
                    <select name="product" class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2">
                      <option value="">-- Select product (if any) --</option>
                      <option>VertiCASA (Homelift)</option>
                      <option>VertiPAX (Passenger)</option>
                      <option>VertiCare (Maintenance & AMCs)</option>
                    </select>
                  </label>

                  <label class="block">
                    <span class="text-xs text-gray-600">Preferred service state (optional)</span>
                    <input name="statePref" class="mt-1 w-full md:max-w-[371px] border rounded-lg px-3 py-2" placeholder="If different from site" />
                  </label>
                </div>

                <label class="block mt-3">
                  <span class="text-xs text-gray-600">Message (optional)</span>
                  <textarea name="message" rows="4" class="mt-1 w-full border rounded-lg px-3 py-2" placeholder="Share site constraints, timelines, or questions"></textarea>
                </label>
              </div>

              <!-- Actions -->
              <div class="flex items-center gap-3">
                <button id="submitBtn" type="submit" class="brand text-white px-5 py-2 rounded-lg font-semibold">Send Enquiry</button>
                <button type="button" class="text-sm text-gray-600 underline" onclick="document.getElementById('contactForm').reset()">Reset</button>

                <div class="ml-auto text-sm" aria-live="polite">
                  <span id="successMsg" class="text-green-600 hidden">Thanks — our consultant will contact you soon.</span>
                  <span id="errorMsg" class="text-red-600 hidden">Submission failed. Try again.</span>
                </div>
              </div>

              <p class="text-xs text-gray-500 mt-2">
                By submitting you agree to be contacted by Vertivo for product consultation.
              </p>
            </form>
          </div>
        </section>

        <!-- RIGHT: Company information -->
        <aside class="lg:col-span-1">
          <div class="bg-white border rounded-2xl shadow-sm overflow-hidden">
            <!-- Header -->
            <div class="p-5 border-b">
              <div class="flex items-center gap-3">
                <img src="./images/logo/Logo Source color.png" alt="Vertivo" class="h-full w-40 rounded-md object-cover" />
                <div>
                  <h2 class="text-base font-semibold">Vertivo Elevators</h2>
                  <p class="text-xs text-gray-500">Production · Installation · Maintenance · Modernisation</p>
                </div>
              </div>
            </div>

            <!-- Addresses -->
            <div class="p-5 space-y-5">
              <section>
                <h3 class="text-sm font-semibold text-gray-700 mb-1">Head Office</h3>
                <address class="not-italic text-sm text-gray-700 leading-relaxed">
                  2nd Floor, Survey no: 19, Site no 20,<br />
                  Nagarbhavi 2nd stage,Bangalore-560072
                </address>
                <div class="mt-2 text-sm">
                  <div>Sales: <a class="brand-text underline" href="tel:+919036172223">+91 9036172223</a></div>
                  <div>Email: <a class="underline" href="mailto:info@vertivoelevators.com">info@vertivoelevators.com</a></div>
                  <div class="mt-1">WhatsApp: <a class="underline" href="https://wa.me/9036172223" target="_blank" rel="noopener">Chat with us</a></div>
                </div>
              </section>
              <section class="pt-4 border-t">
                <h3 class="text-sm font-semibold text-gray-700 mb-1">Working Hours</h3>
                <ul class="text-sm text-gray-700">
                  <li>Mon – Sat: 10:00 AM – 8:00 PM</li>
                  <li>Sun: Closed</li>
                </ul>
              </section>

              <!-- Optional: other branches -->
              <!--
              <section class="pt-4 border-t">
                <h3 class="text-sm font-semibold text-gray-700 mb-1">Branch — Hyderabad</h3>
                <address class="not-italic text-sm text-gray-700 leading-relaxed">
                  45/2, Banjara Hills,<br/> Hyderabad, Telangana 500034
                </address>
              </section>
              -->

              <!-- Map -->
              <section class="pt-4 border-t">
                <h3 class="sr-only">Map</h3>

                <div class="rounded-lg overflow-hidden">
                  <iframe class="h-52" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3887.8928436546917!2d77.50891192752975!3d12.978705009910405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTDNEpUTHQoQUJMHLrErGJyHg89uy71MyuHF!5e0!3m2!1sen!2sin!4v1766727955765!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <a
                  class="mt-2 inline-block text-sm underline"
                  target="_blank"
                  rel="noopener"
                  href="https://maps.app.goo.gl/acrqXpiRhr439KNn8">
                  Open in Google Maps
                </a>
              </section>


            </div>
          </div>
        </aside>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
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
            <li><span class="text-gray-400">Phone:</span> <a href="tel:+919036172223" class="hover:text-white">+919036172223</a></li>
            <li><span class="text-gray-400">Email:</span> <a href="mailto:info@vertivoelevators.com" class="hover:text-white">info@vertivoelevators.com</a></li>
            <li><span class="text-gray-400">Address:</span>2nd Floor, Survey no: 19, Site no 20, Nagarbhavi 2nd stage,Bangalore-560072</li>
          </ul>

          <!-- Tiny newsletter (optional) -->

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


  <script>
     document.getElementById('mobileMenuBtn').addEventListener('click', function() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('hidden');
    });
  </script>

  <!-- SCRIPTS -->
  <script>
    // Mobile menu toggle
   


    function validateForm(form) {
      const required = ['firstName', 'phone', 'email', 'application', 'floors', 'sourcePage'];
      const errors = {};
      required.forEach(name => {
        const el = form.elements[name];
        if (!el) return;
        const val = (el.value || '').trim();
        if (!val) errors[name] = true;
        if (el.type === 'email' && val && !/^\S+@\S+\.\S+$/.test(val)) errors[name] = true;
      });

      const phone = form.elements['phone'];
      if (phone && phone.value && !/^[0-9+() \-]{6,}$/.test(phone.value)) {
        errors.phone = true;
      }
      

      return {
        ok: Object.keys(errors).length === 0,
        errors
      };
    }

    // Submit handler (unchanged)
   async function handleContactSubmit(e) {
  e.preventDefault();

  const form = document.getElementById('contactForm');
  const submitBtn = document.getElementById('submitBtn');
  const successMsg = document.getElementById('successMsg');
  const errorMsg = document.getElementById('errorMsg');

  const payload = Object.fromEntries(new FormData(form).entries());

  payload.state_pref = payload.statePref || null;
  payload.source_page = payload.sourcePage || null;
  delete payload.statePref;
  delete payload.sourcePage;

  submitBtn.disabled = true;
  submitBtn.innerText = 'Sending...';

  try {
    const res = await fetch('./api/leads.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload)
    });

    const json = await res.json();
    if (!res.ok || !json.ok) throw new Error();

    successMsg.classList.remove('hidden');
    errorMsg.classList.add('hidden');
    form.reset();

  } catch {
    errorMsg.classList.remove('hidden');
    successMsg.classList.add('hidden');
  } finally {
    submitBtn.disabled = false;
    submitBtn.innerText = 'Send Enquiry';
  }
}

  </script>
</body>

</html>