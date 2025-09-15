<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Schindler 9300 — product hero (Tailwind)</title>

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
            brandRed: '#d61a1a'
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
</head>

<body class="bg-white text-gray-800 font-sans">

  <!-- HEADER (bigger) -->
  <header class="absolute top-0 left-0 w-full z-30 bg-transparent header-bg-transition">
    <nav class="flex items-center justify-between px-6 md:px-12 py-6 md:py-8 text-white">
      <!-- Logo -->
      <div class="text-3xl md:text-4xl font-bold leading-none text-brandRed">LOGO</div>

      <!-- Desktop menu -->
      <ul class="hidden md:flex items-center space-x-10 text-lg">
        <li><a href="#" class="hover:text-brandRed">Home</a></li>

        <!-- Dropdown -->
        <li class="relative group">
          <button class="hover:text-brandRed flex items-center gap-2 text-lg">
            <span>Products</span>
            <svg class="w-5 h-5 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <ul class="absolute hidden group-hover:block bg-white text-black mt-3 rounded-lg shadow-lg w-56">
            <li><a href="#" class="block px-5 py-3 hover:bg-gray-100">Product 1</a></li>
            <li><a href="#" class="block px-5 py-3 hover:bg-gray-100">Product 2</a></li>
            <li><a href="#" class="block px-5 py-3 hover:bg-gray-100">Product 3</a></li>
          </ul>
        </li>

        <li><a href="#contact" class="hover:text-brandRed">Contact Us</a></li>
      </ul>

      <!-- Mobile hamburger -->
      <div class="md:hidden">
        <button id="navToggle" aria-controls="mobileMenu" aria-expanded="false" class="p-3 rounded-md focus:outline-none focus:ring">
          <!-- hamburger -->
          <svg id="hamburgerIcon" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
          <!-- close (hidden) -->
          <svg id="closeIcon" class="w-8 h-8 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
            <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>

      <!-- Mobile menu (slides up) -->
      <div id="mobileMenu" class="fixed inset-0 z-40 bg-black/60 backdrop-blur-sm hidden">
        <div class="absolute top-0 right-0 w-3/4 max-w-xs h-full bg-white text-black p-6 shadow-lg">
          <nav class="flex flex-col gap-4">
            <a href="#" class="py-3 text-lg" onclick="closeMobileMenu()">Home</a>
            <details class="py-2">
              <summary class="cursor-pointer py-3 text-lg">Products</summary>
              <div class="pl-4">
                <a href="#" class="block py-2">Product 1</a>
                <a href="#" class="block py-2">Product 2</a>
              </div>
            </details>
            <a href="#contact" class="py-3 text-lg" onclick="closeMobileMenu()">Contact Us</a>
          </nav>
        </div>
      </div>
    </nav>
  </header>

  <!-- Breadcrumbs strip (pushed down to avoid header overlap) -->
  <div class="w-full border-b mt-28">
    <div class="max-w-screen-2xl mx-auto px-6">
      <nav class="text-sm text-gray-500" aria-label="Breadcrumb">
        <ol class="flex items-center gap-2">
          <li><a href="#" class="hover:underline">Home</a></li>
          <li>&gt;</li>
          <li><a href="#" class="hover:underline">Escalators &amp; Moving walks</a></li>
          <li>&gt;</li>
          <li><a href="#" class="hover:underline">Escalators</a></li>
          <li>&gt;</li>
          <li class="text-brandRed font-medium">Schindler 9300</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero -->
  <section class="max-w-full bg-[#F7F7F7] ">
    <div class="max-w-screen-2xl mx-auto px-6">
      <!-- left fixed column (420px) + right flexible content -->
      <div class="grid grid-cols-1 lg:grid-cols-[420px_1fr] items-stretch">

        <!-- LEFT: fixed image column on lg+, stacked image on mobile -->
        <div class="hero-left">
          <!-- desktop: fixed narrow column -->
          <div class="hidden lg:block h-[86vh] w-full overflow-hidden">
            <img src="./images/banner/herosection.jpg" alt="Schindler 9300" class="h-full w-full">
          </div>
          <!-- mobile: stacked image at top -->
          <div class="lg:hidden">
            <img src="./images/banner/herosection.jpg" alt="Schindler 9300" class="w-full h-[44vh] object-cover">
          </div>
        </div>

        <!-- RIGHT: pale panel with centered content -->
        <div class="flex items-center">
          <div class="py-16 lg:py-24 px-6 sm:px-10 md:px-16 lg:px-28 max-w-3xl mx-auto">

            <!-- Big red title -->
            <h1 class="text-[48px] lg:text-[56px] leading-tight font-semibold text-brandRed">
              Schindler 9300
            </h1>

            <!-- Large grey subtitle -->
            <p class="mt-3 text-[28px] lg:text-[36px] font-light text-gray-500">
              The escalator for commercial &amp; public spaces
            </p>

            <!-- Description -->
            <p class="mt-6 text-base md:text-lg text-gray-700 leading-relaxed max-w-prose">
              With enhanced safety features, energy efficiency, and space savings, the Schindler 9300 escalator defines state-of-the-art mobility for commercial buildings and public spaces.
            </p>

            <!-- Buttons -->
            <div class="mt-8 flex items-center gap-4">
              <a href="#" class="inline-flex items-center justify-center px-6 py-3 rounded-md text-white font-semibold shadow-sm bg-brandRed hover:bg-red-700">
                Configure
              </a>
              <a href="#" class="inline-flex items-center justify-center px-6 py-3 rounded-md text-brandRed font-semibold border-2 border-brandRed bg-white hover:bg-red-50">
                Get in touch
              </a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Tabs section (TailwindCSS required) -->
  <section class="py-12 bg-white">
    <div class="max-w-screen-2xl mx-auto px-6">

      <!-- Tabs nav -->
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

      <!-- Content panels -->
      <div class="pt-10">
        <!-- FEATURES (default visible) -->
        <div id="features" role="tabpanel" data-panel class="space-y-8">
          <!-- Heading / intro -->
          <div>
            <h2 class="text-3xl font-semibold text-red-600 mb-4">Engineered to Swiss standards</h2>
            <p class="text-gray-600 max-w-3xl">
              We’ve engineered the Schindler 3000 to ensure smooth, quiet, and economical operation throughout your elevator’s
              long life cycle, for every application, and in any environment.
            </p>
          </div>

          <!-- 4-column features row -->
          <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 items-start">
            <!-- Card 1 -->
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

            <!-- Card 2 -->
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

            <!-- Card 3 -->
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

            <!-- Card 4 -->
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

        <!-- Technical specifications -->
        <div id="tech" role="tabpanel" data-panel hidden>
          <!-- Technical specifications — Key figures -->
          <div class="max-w-full mx-auto px-6">
            <h3 class="text-3xl font-semibold text-red-600 mb-8">Key figures</h3>

            <!-- definition list for semantically correct label/value pairs -->
            <dl class="divide-y divide-gray-200 border-t border-gray-200">
              <!-- row -->
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
          <!-- Feature trio: tall left image + 2 text columns -->
          <section class="w-full bg-white py-16">
            <div class="mx-auto px-6 lg:px-8 max-w-screen-2xl">
              <!-- Intro heading + lead -->
              <div class="max-w-3xl">
                <h2 class="text-3xl lg:text-4xl font-semibold text-brandRed mb-4">Less space, more capacity</h2>
                <p class="text-gray-600 mb-10">
                  Schindler 3000 has outstanding architectural flexibility for car, door, and shaft dimensions.
                  Less space taken up with components, more room for you to use profitably.
                </p>
              </div>

              <!-- Grid: image | main content | sidebar -->
              <div class="grid grid-cols-1 lg:grid-cols-[280px_1fr_360px] gap-10 items-start">
                <!-- Left: tall visual -->
                <div class="order-1 lg:order-none">
                  <div class="w-full h-[520px] lg:h-[640px] overflow-hidden rounded-sm">
                    <img src="./images/banner/schindler-elevators-shaft.jpg" alt="Elevator cutaway" class="w-full h-full object-cover object-top">
                  </div>
                </div>

                <!-- Middle: primary text column -->
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

                    <!-- optional extra paragraph(s) -->
                    <p class="text-gray-600 leading-relaxed">
                      Doors can be sized and positioned with millimeter accuracy. The door width is adjustable in 100 mm increments
                      for heights from 2000 mm to 2400 mm, with a choice of telescopic (T2) or center-opening doors (C2).
                    </p>
                  </div>
                </div>

                <!-- Right: smaller sidebar column -->
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

        <!-- Design -->
        <div id="design" role="tabpanel" data-panel hidden>
          <!-- Design — Interior design lines -->
          <div class="max-w-full mx-auto px-6 py-12">
            <!-- Heading -->
            <h3 class="text-3xl lg:text-4xl font-semibold text-brandRed mb-8">Interior design lines</h3>

            <!-- 3-column grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
              <!-- Column 1 -->
              <article class="space-y-4">
                <h4 class="text-base font-semibold text-gray-900">Navona - Functional and durable</h4>
                <p class="text-gray-600 leading-relaxed">
                  Introduce clarity and comfort in your car with this robust design line. Fresh colors, durable accessories,
                  and the option of five different floors make Navona an excellent choice for residential applications.
                  Stainless steel options are also available for rear and side walls.
                </p>
              </article>

              <!-- Column 2 -->
              <article class="space-y-4">
                <h4 class="text-base font-semibold text-gray-900">Times Square - Modern and versatile</h4>
                <p class="text-gray-600 leading-relaxed">
                  A contemporary look. Choose from warm or cool colors or combine to enhance contrast for more depth.
                  Times Square adds distinctive features to any public, commercial or residential building.
                </p>
              </article>

              <!-- Column 3 -->
              <article class="space-y-4">
                <h4 class="text-base font-semibold text-gray-900">Park Avenue - Sophisticated and elegant</h4>
                <p class="text-gray-600 leading-relaxed">
                  A touch of class. Wooden and textured laminates or back-painted glass walls for a rich, contemporary mode.
                  Or a luxury feel with stainless steel in several finishes or decorative glass. Matched lighting completes the elegance.
                </p>
              </article>
            </div>
          </div>

          <!-- Panels, handrails, mirrors and other accessories -->
          <section class="w-full bg-white py-16">
            <div class="max-w-full mx-auto px-6">
              <!-- Heading -->
              <h2 class="text-3xl lg:text-4xl font-semibold text-brandRed mb-10">
                Panels, handrails, mirrors and other accessories
              </h2>

              <!-- Layout: text (2 columns on md+) | image (right) -->
              <div class="grid grid-cols-1 lg:grid-cols-[1fr_360px] gap-10 items-start">
                <!-- Left: two text columns (becomes 1 column on small screens) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                  <!-- Col A -->
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

                  <!-- Col B -->
                  <div class="space-y-6">
                    <article>
                      <h4 class="font-semibold text-gray-900 mb-2">Linea 300</h4>
                      <p class="text-gray-600 leading-relaxed">
                        An upmarket user interface to enhance your elevator’s looks, with an intuitive, efficient design.
                        The display is in black glass, with buttons positioned on elegant black stainless steel, or white glass
                        display on a stainless steel color finishing.
                      </p>
                    </article>

                    <!-- optional extra item -->
                    <article>
                      <h4 class="font-semibold text-gray-900 mb-2">Other accessories</h4>
                      <p class="text-gray-600 leading-relaxed">
                        Handrails, mirrors, specialty finishes and bespoke fixtures are available to match your interior design
                        and functional requirements.
                      </p>
                    </article>
                  </div>
                </div>

                <!-- Right: image -->
                <div class="flex items-start justify-center lg:justify-end">
                  <div class="w-48 sm:w-56 lg:w-72 xl:w-80">
                    <img src="./images/banner/schindler-linea-300-cop-black.jpg" alt="Control panel vertical" class="w-full h-auto object-contain">
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Mirrors / landing doors / handrails / bumper rails -->
          <section class="w-full bg-white py-16">
            <div class="mx-auto px-6 lg:px-8 max-w-screen-2xl">
              <div class="grid grid-cols-1 lg:grid-cols-[360px_1fr] gap-10 items-start">
                <!-- Left: tall image -->
                <figure class="w-full">
                  <div class="w-full h-[520px] lg:h-[640px] overflow-hidden rounded-sm shadow-sm">
                    <img src="./images/banner/image-352x528.jpg"
                      alt="Elevator interior with mirror and handrail"
                      class="w-full h-full object-cover object-center">
                  </div>
                </figure>

                <!-- Right: 2x2 features grid -->
                <div>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Mirrors -->
                    <article>
                      <h4 class="font-semibold text-gray-900 mb-3">Mirrors</h4>
                      <p class="text-gray-600 leading-relaxed">
                        Mirrors enhance the sense of space, depth and comfort in elevators. Schindler 3000 elevators can be fitted
                        with a full-height or half-height safety-glass mirror on the side or rear wall of the car.
                      </p>
                    </article>

                    <!-- Landing doors -->
                    <article>
                      <h4 class="font-semibold text-gray-900 mb-3">Landing doors</h4>
                      <p class="text-gray-600 leading-relaxed">
                        How your elevator design immerses with your building can enhance your tenants’ response to the overall
                        building décor. We offer a full range of colors to help you unleash your building’s full design potential.
                      </p>
                    </article>

                    <!-- Handrails -->
                    <article>
                      <h4 class="font-semibold text-gray-900 mb-3">Handrails</h4>
                      <p class="text-gray-600 leading-relaxed">
                        Handrails convey a feeling of security. Our stainless steel handrails are designed to blend with car interiors,
                        shapes and textures, and can be mounted to the side and rear walls. Available in curved, straight, and straight with curved ends.
                      </p>
                    </article>

                    <!-- Bumper rails -->
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

        <!-- Connectivity -->
        <div id="connectivity" role="tabpanel" data-panel hidden>
          <!-- Next section: left tall image + right content -->
          <section class="w-full bg-white py-16">
            <div class="mx-auto px-6 max-w-full">
              <!-- Section heading -->
              <h2 class="text-3xl lg:text-4xl font-semibold text-brandRed mb-6">
                Schindler elevators designed for next-generation technologies
              </h2>
              <p class="text-gray-600 max-w-3xl mb-10">
                Benefit from our tools, solutions, and latest innovations to support you throughout the entire product life cycle of your elevator.
                From planning to operation, we design our elevators to use state-of-the-art technologies.
              </p>

              <div class="grid grid-cols-1 lg:grid-cols-[420px_1fr] gap-10 items-start">
                <!-- LEFT: tall image -->
                <figure class="w-full">
                  <div class="w-full h-[520px] lg:h-[640px] overflow-hidden rounded-sm shadow-sm">
                    <img src="./images/banner/schindler-mediascreen-exterior-image.jpg" alt="Elevator open door"
                      class="w-full h-full object-cover object-center" />
                  </div>
                </figure>

                <!-- RIGHT: content column -->
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

                      <!-- italic callouts -->
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
    </div>

    <!-- Inline JavaScript for tabs -->
    <script>
      (function() {
        const tabButtons = Array.from(document.querySelectorAll('.tab-btn'));
        const panels = Array.from(document.querySelectorAll('[data-panel]'));

        function activateTab(btn) {
          // deactivate all
          tabButtons.forEach(b => {
            b.classList.remove('text-red-600', 'font-medium');
            b.classList.add('text-gray-600');
            b.setAttribute('aria-selected', 'false');
            const underline = b.querySelector('span');
            if (underline) underline.style.transform = 'scaleX(0)';
          });
          panels.forEach(p => p.hidden = true);

          // activate clicked
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
          // click handler
          btn.addEventListener('click', () => activateTab(btn));

          // keyboard navigation (Left/Right + Home/End)
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

        // Initialize first tab active (ensures underline visible)
        const initiallyActive = tabButtons.find(b => b.getAttribute('aria-selected') === 'true') || tabButtons[0];
        if (initiallyActive) activateTab(initiallyActive);
      })();
    </script>
  </section>
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
              <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold mb-4">Digital Media Services</h2>
              <p class="text-base md:text-lg text-red-100 mb-6 leading-relaxed">
                Share spectacular entertainment and important information with passengers quickly and easily with Schindler Digital Media Services.
              </p>
              <a href="#"
                class="inline-block bg-white text-red-700 font-semibold px-5 py-3 rounded shadow hover:opacity-95 transition">
                Know more
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Spacer -->
      <div class="mt-10"></div>

      <!-- Existing 'Our Core Values' content (adapted to match look/spacing) -->
      <section class="py-12 bg-gray-50">
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
      </section>
    </div>
  </section>
  <div class="h-20"></div>

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

</body>

</html>