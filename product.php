<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Product 1</title>

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

<body class="bg-white text-gray-800 font-sans">



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
            <svg class="w-5 h-5 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M19 9l-7 7-7-7"></path>
            </svg>
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
  </section>

  <section class="py-16 bg-white" id="product1">
    <div class="max-w-7xl mx-auto px-6">
      <!-- Section Header -->
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12 text-center">
        Features
      </h2>

      <!-- Grid -->
      <div class=" grid grid-cols-1 md:grid-cols-3 gap-12">

        <!-- Item 1 -->
        <div>
          <img src="./images/banner/25.jpg" alt="Elevator Dummy" class="rounded-lg shadow-md mb-6 w-full h-64 object-cover">
          <h3 class="text-xl font-semibold mb-2">Heading One</h3>
          <p class="text-gray-600">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.
          </p>
        </div>

        <!-- Item 2 -->
        <div id="product2">
          <img src="./images/banner/5581945_3650.jpg" alt="Elevator Dummy" class="rounded-lg shadow-md mb-6 w-full h-64 object-cover">
          <h3 class="text-xl font-semibold mb-2">Heading Two</h3>
          <p class="text-gray-600">
            Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper.
          </p>
        </div>

        <!-- Item 3 -->
        <div id="product3">
          <img src="./images/banner/6610172_3993.jpg" alt="Elevator Dummy" class="rounded-lg shadow-md mb-6 w-full h-64 object-cover">
          <h3 class="text-xl font-semibold mb-2">Heading Three</h3>
          <p class="text-gray-600">
            Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit.
          </p>
        </div>

        <!-- Item 4 -->
      

      </div>
    </div>
  </section>

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


  <div id="toast" role="status" aria-live="polite">
    <div id="toastMsg" class="text-sm"></div>
  </div>
  <div class="h-20"></div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    new Swiper('.hero-swiper', {
      loop: true,
      effect: 'fade',
      autoplay: {
        delay: 4000
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
    });
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