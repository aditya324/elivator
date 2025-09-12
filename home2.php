<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parallax Slider Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <style>
        .parallax-bg {
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            /* Parallax effect */
        }
    </style>
</head>

<body class="font-sans">

    <!-- Header -->
    <!-- Header -->
    <header id="site-header"
        class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-10 py-6 transition-all duration-500">
        <div id="brand" class="text-xl font-bold">My Brand</div>
        <nav id="nav-links" class="space-x-6 font-medium">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Work</a>
            <a href="#">Contact</a>
        </nav>
    </header>




    <!-- Slider -->
    <div class="swiper h-screen">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="h-screen w-full flex items-center parallax-bg" style="background-image: url('./images/banner/herosection.jpg');">
                    <div class=" bg-opacity-50 p-8 rounded-lg ml-16 text-white max-w-lg">
                        <h1 class="text-5xl font-bold mb-6">Exceptional Home Remodeling & Renovations</h1>
                        <a href="#"
                            class="px-6 py-3 bg-white text-black font-semibold rounded shadow hover:bg-gray-200">Get A Free Estimate</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="h-screen w-full flex items-center parallax-bg" style="background-image: url('./images/banner/herosection2.jpg');">
                    <div class=" bg-opacity-50 p-8 rounded-lg ml-16 text-white max-w-lg">
                        <h1 class="text-5xl font-bold mb-6">Modern Designs & Custom Builds</h1>
                        <a href="#"
                            class="px-6 py-3 bg-white text-black font-semibold rounded shadow hover:bg-gray-200">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="h-screen w-full flex items-center parallax-bg" style="background-image: url('./images/banner/herosection3.jpg');">
                    <div class=" bg-opacity-50 p-8 rounded-lg ml-16 text-white max-w-lg">
                        <h1 class="text-5xl font-bold mb-6">Transform Your Living Space</h1>
                        <a href="#"
                            class="px-6 py-3 bg-white text-black font-semibold rounded shadow hover:bg-gray-200">Learn More</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Slider controls -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>


    <!-- About Section -->
<section class="relative bg-white py-20 px-6 md:px-20">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

    <!-- Left Side (Image with parallax) -->
    <div class="relative rounded-2xl shadow-lg overflow-hidden h-[680px]">
      <!-- parallax layer (absolute, fills wrapper) -->
      <img src="./images/banner/herosection3.jpg"
           alt="Vertivo Elevators"
           class="parallax-img absolute inset-0 w-full h-full object-cover md:object-center will-change-transform"/>
    </div>

    <!-- Right Side (Text) -->
    <div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
        Elevating Reliability, Safety & Innovation
      </h2>
      <p class="text-lg text-gray-700 leading-relaxed mb-4">
        With <span class="font-semibold text-indigo-600">Vertivo Elevators</span>, elevating is made reliable, safe and exciting. Serving as an integrated vertical transportation solutions provider, we stand in the forefront of innovative engineering and pledge our complete adherence to globally valued elevator safety standards.
      </p>
      <p class="text-lg text-gray-700 leading-relaxed mb-8">
        With industry defining homelifts and passenger elevator models, Vertivo Elevators are engineered for excellence in safety, durability and hassle-free travel experience.
      </p>
      <a href="#"
         class="inline-block px-6 py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow hover:bg-indigo-700 transition">
        More About Us
      </a>
    </div>

  </div>
</section>

<!-- Polished Elevator Quote Form -->
<section class="bg-gray-50 py-16 px-6 md:px-20">
  <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-md p-8">
    <h3 class="text-2xl font-semibold text-gray-800 mb-1">Request an Elevator Quote</h3>
    <p class="text-gray-600 mb-6">Fill in the details and we'll get back to you shortly.</p>

    <form id="elevatorForm" class="grid grid-cols-1 md:grid-cols-2 gap-4" novalidate>
      <!-- Honeypot (hidden) -->
      <input type="text" name="website" tabindex="-1" autocomplete="off" style="display:none" />

      <!-- First Name -->
      <div class="flex flex-col">
        <label for="firstName" class="mb-2 text-sm font-medium text-gray-700">
          First name <span class="text-red-500" aria-hidden="true">*</span>
        </label>
        <div class="relative">
          <input id="firstName" name="firstName" type="text" required
                 class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                 placeholder="John" aria-required="true" />
        </div>
        <p class="mt-1 text-xs text-red-600 hidden" id="err-firstName">Please enter your first name.</p>
      </div>

      <!-- Last Name -->
      <div class="flex flex-col">
        <label for="lastName" class="mb-2 text-sm font-medium text-gray-700">Last name</label>
        <input id="lastName" name="lastName" type="text"
               class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
               placeholder="Doe" />
      </div>

      <!-- Contact (country + number) full width -->
      <div class="md:col-span-2 grid grid-cols-3 gap-3">
        <div class="flex flex-col col-span-1">
          <label for="countryCode" class="mb-2 text-sm font-medium text-gray-700">Country</label>
          <select id="countryCode" name="countryCode" class="block w-full px-3 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" aria-label="Country code">
            <option value="+91" selected>🇮🇳 +91</option>
            <option value="+1">🇺🇸 +1</option>
            <option value="+44">🇬🇧 +44</option>
            <option value="+61">🇦🇺 +61</option>
            <option value="+971">🇦🇪 +971</option>
            <!-- add more if needed -->
          </select>
        </div>

        <div class="flex flex-col col-span-2">
          <label for="contactNumber" class="mb-2 text-sm font-medium text-gray-700">
            Contact number <span class="text-red-500" aria-hidden="true">*</span>
          </label>
          <input id="contactNumber" name="contactNumber" inputmode="tel" required
                 class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                 placeholder="98765 43210" aria-describedby="contactHelp" />
          <p id="contactHelp" class="mt-1 text-xs text-gray-500">Digits only, include area code when required.</p>
          <p class="mt-1 text-xs text-red-600 hidden" id="err-contact">Please enter a valid contact number.</p>
        </div>
      </div>

      <!-- Email -->
      <div class="md:col-span-2 flex flex-col">
        <label for="email" class="mb-2 text-sm font-medium text-gray-700">
          Email ID <span class="text-red-500" aria-hidden="true">*</span>
        </label>
        <input id="email" name="email" type="email" required
               class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
               placeholder="you@example.com" />
        <p class="mt-1 text-xs text-red-600 hidden" id="err-email">Please enter a valid email address.</p>
      </div>

      <!-- Elevator required for -->
      <div class="md:col-span-2 flex flex-col">
        <label for="elevatorFor" class="mb-2 text-sm font-medium text-gray-700">Elevator required for</label>
        <select id="elevatorFor" name="elevatorFor"
                class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <option value="" disabled selected>Select one</option>
          <option value="individual-house">Residential — Individual House</option>
          <option value="apartment">Residential — Apartment Building</option>
          <option value="commercial-building">Commercial Building</option>
          <option value="factory">Commercial — Factory / Warehouse</option>
          <option value="others">Others</option>
        </select>
      </div>

      <!-- Floors -->
      <div class="md:col-span-2 flex flex-col">
        <label for="floors" class="mb-2 text-sm font-medium text-gray-700">Floors (stops)</label>
        <select id="floors" name="floors"
                class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <option value="" disabled selected>Select floors</option>
          <option>G+1 (2 stops)</option>
          <option>G+2 (3 stops)</option>
          <option>G+3 (4 stops)</option>
          <option>G+4 (5 stops)</option>
          <option>G+5 (6 stops)</option>
          <option>G+6 (7 stops) and above</option>
        </select>
      </div>

      <!-- Message -->
      <div class="md:col-span-2 flex flex-col">
        <label for="message" class="mb-2 text-sm font-medium text-gray-700">Additional details (optional)</label>
        <textarea id="message" name="message" rows="4"
                  class="block w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                  placeholder="Any special requirements, timeline, site access info..."></textarea>
      </div>

      <!-- Submit -->
      <div class="md:col-span-2 flex items-center justify-between">
        <div id="formStatus" class="text-sm text-gray-600" role="status" aria-live="polite"></div>

        <button id="submitBtn" type="submit"
                class="inline-flex items-center gap-3 px-6 py-3 bg-indigo-600 text-white rounded-lg font-medium shadow hover:bg-indigo-700 transition disabled:opacity-60"
                aria-disabled="false">
          <svg id="btnSpinner" class="hidden animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
          </svg>
          <span id="btnText">Submit Request</span>
        </button>
      </div>
    </form>
  </div>

  <!-- toast -->
  <div id="toast" class="fixed right-6 bottom-6 hidden max-w-sm bg-white border rounded-lg shadow-lg p-4">
    <p id="toastMsg" class="text-sm text-gray-800"></p>
  </div>
</section>

<script>
  (function () {
    const form = document.getElementById('elevatorForm');
    const status = document.getElementById('formStatus');
    const submitBtn = document.getElementById('submitBtn');
    const btnSpinner = document.getElementById('btnSpinner');
    const btnText = document.getElementById('btnText');
    const toast = document.getElementById('toast');
    const toastMsg = document.getElementById('toastMsg');

    // simple helpers
    function showToast(message, success = true) {
      toastMsg.textContent = message;
      toast.classList.remove('hidden');
      toast.style.borderColor = success ? '#10B981' : '#F87171';
      setTimeout(() => { toast.classList.add('hidden'); }, 4200);
    }

    function setLoading(isLoading) {
      if (isLoading) {
        submitBtn.setAttribute('disabled', 'true');
        submitBtn.setAttribute('aria-disabled', 'true');
        btnSpinner.classList.remove('hidden');
        btnText.textContent = 'Sending...';
      } else {
        submitBtn.removeAttribute('disabled');
        submitBtn.setAttribute('aria-disabled', 'false');
        btnSpinner.classList.add('hidden');
        btnText.textContent = 'Submit Request';
      }
    }

    // basic validation functions
    function validateEmail(email) {
      return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }
    function validatePhone(num) {
      return /^\d{7,15}$/.test(num.replace(/\s+/g, ''));
    }

    // phone autoformat (simple spacing)
    const phoneInput = document.getElementById('contactNumber');
    phoneInput.addEventListener('input', (e) => {
      // remove non-digit except + sign
      const raw = e.target.value.replace(/[^\d]/g, '').slice(0, 15);
      // insert a space after 5 digits for readability (simple rule)
      e.target.value = raw.length > 5 ? raw.slice(0,5) + ' ' + raw.slice(5) : raw;
    });

    form.addEventListener('submit', async (ev) => {
      ev.preventDefault();

      // hide previous errors
      document.querySelectorAll('[id^="err-"]').forEach(el => el.classList.add('hidden'));

      // gather values
      const data = {
        firstName: form.firstName.value.trim(),
        lastName: form.lastName.value.trim(),
        countryCode: form.countryCode.value,
        contactNumber: form.contactNumber.value.replace(/\s+/g, ''),
        email: form.email.value.trim(),
        elevatorFor: form.elevatorFor.value,
        floors: form.floors.value,
        message: form.message.value.trim(),
      };

      // honeypot check
      if (form.website && form.website.value) {
        // bot likely — silently stop
        return;
      }

      // validate
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

      // show loading
      setLoading(true);
      status.textContent = 'Sending your request...';

      try {
        // TODO: replace URL with your backend endpoint
        // const res = await fetch('/api/lead', {
        //   method: 'POST',
        //   headers: { 'Content-Type': 'application/json' },
        //   body: JSON.stringify(data)
        // });
        // const result = await res.json();
        // if (!res.ok) throw new Error(result.message || 'Network error');

        // Simulate network call for demo
        await new Promise(r => setTimeout(r, 900));

        // success
        showToast('Thank you — we received your request. We will contact you soon.', true);
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
  (function () {
    // Respect reduced motion preference
    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    // Disable on small screens for performance / UX
    if (window.innerWidth < 768) return;

    const speed = 0.22; // smaller = subtler parallax (tune to taste)
    const el = document.querySelector('.parallax-img');
    if (!el) return;

    let ticking = false;

    function update() {
      const wrapper = el.parentElement;
      const rect = wrapper.getBoundingClientRect();

      // Only update when wrapper is (partially) in the viewport
      if (rect.bottom > 0 && rect.top < window.innerHeight) {
        // We want image to move slower than scroll: offset = -rect.top * speed
        const offset = Math.round(-rect.top * speed);
        // Use translate3d for GPU acceleration
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

    // Init
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll, { passive: true });
    // set initial position
    update();
  })();
</script>






    <script>
        const header = document.getElementById("site-header");
        const brand = document.getElementById("brand");
        const nav = document.getElementById("nav-links");

        window.addEventListener("scroll", () => {
            const sliderHeight = document.querySelector(".swiper").offsetHeight;

            if (window.scrollY < sliderHeight - 50) {
                // Inside carousel → transparent
                header.classList.remove("bg-white", "shadow-md");
                header.classList.add("bg-transparent");

                brand.classList.add("text-white");
                brand.classList.remove("text-black");

                nav.classList.add("text-white");
                nav.classList.remove("text-black");
            } else {
                // Past carousel → solid
                header.classList.add("bg-white", "shadow-md");
                header.classList.remove("bg-transparent");

                brand.classList.add("text-black");
                brand.classList.remove("text-white");

                nav.classList.add("text-black");
                nav.classList.remove("text-white");
            }
        });
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'fade'
        });
    </script>

</body>

</html>