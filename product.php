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
          fontFamily: { sans: ['Poppins','ui-sans-serif','system-ui'] },
          colors: { brandRed: '#d61a1a' }
        }
      }
    }
  </script>

  <style>
    /* keep image crisp and avoid stretching on very tall screens */
    .hero-left img { object-fit: cover; object-position: center; }
  </style>
</head>
<body class="bg-white text-gray-800 font-sans">

  <!-- Breadcrumbs strip -->
  <div class="w-full border-b">
    <div class="max-w-7xl mx-auto px-6 py-4">
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
  <section class="max-w-full">
    <div class="max-w-7xl mx-auto px-6">
      <!-- left fixed column (420px) + right flexible content -->
      <div class="grid grid-cols-1 lg:grid-cols-[420px_1fr] items-stretch">

        <!-- LEFT: fixed image column on lg+, stacked image on mobile -->
        <div class="hero-left">
          <!-- desktop: fixed narrow column -->
          <div class="hidden lg:block h-[86vh] w-full overflow-hidden">
            <!-- replace the URL below with your image path -->
            <img src="./images/banner/herosection.jpg" alt="Schindler 9300" class="h-full w-full">
          </div>

          <!-- mobile: stacked image at top -->
          <div class="lg:hidden">
            <img src="./images/banner/herosection.jpg" alt="Schindler 9300" class="w-full h-[44vh] object-cover">
          </div>
        </div>

        <!-- RIGHT: pale panel with centered content -->
        <div class=" flex items-center ">
          <div class="py-16 lg:py-24 px-6 sm:px-10 md:px-16 lg:px-28 max-w-3xl mx-auto ">

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

  <div class="h-20"></div>



  <!-- Specs section (place this below your Hero section) -->
<section class="max-w-full">
  <div class="max-w-7xl mx-auto px-6 lg:px-12 py-16">
    <!-- Heading + intro -->
    <div class="max-w-4xl">
      <h2 class="text-3xl lg:text-4xl font-semibold text-brandRed">
        When being on the fast track brings you peace of mind
      </h2>

      <p class="mt-4 text-base lg:text-lg text-gray-700 leading-relaxed">
        With dependable performance and passenger safety paired with streamlined and flexible in design, these units leave plenty of room for architectural expression, indoors or outside.
      </p>
    </div>

    <!-- Specs table / list -->
    <div class="mt-10 max-w-4xl">
      <ul class="divide-y divide-gray-300">
        <li class="flex flex-col md:flex-row md:items-center justify-between py-6">
          <span class="font-semibold text-sm md:text-base text-gray-800">Maximal rise</span>
          <span class="text-sm md:text-base text-gray-700 mt-2 md:mt-0">9.3 m at a pallet width 800 mm</span>
        </li>

        <li class="flex flex-col md:flex-row md:items-center justify-between py-6">
          <span class="font-semibold text-sm md:text-base text-gray-800">Nominal pallet width</span>
          <span class="text-sm md:text-base text-gray-700 mt-2 md:mt-0">800 / 1000 / 1100 mm</span>
        </li>

        <li class="flex flex-col md:flex-row md:items-center justify-between py-6">
          <span class="font-semibold text-sm md:text-base text-gray-800">Angle of inclination</span>
          <span class="text-sm md:text-base text-gray-700 mt-2 md:mt-0">10° to 12°</span>
        </li>

        <li class="flex flex-col md:flex-row md:items-center justify-between py-6">
          <span class="font-semibold text-sm md:text-base text-gray-800">Speed</span>
          <span class="text-sm md:text-base text-gray-700 mt-2 md:mt-0">0.5 / 0.65 m/s</span>
        </li>
      </ul>
    </div>
  </div>
</section>

</body>
</html>
