<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Swiper</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
    <style>
        /* Custom styles to ensure Swiper works properly */
        .swiper {
            overflow: hidden;
            position: relative;
        }
        .swiper-wrapper {
            display: flex;
        }
        .swiper-slide {
            flex-shrink: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Our Products
                </h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Discover our premium product lineup, engineered with precision and designed for excellence.
                </p>
            </div>

            <!-- Swiper Container -->
            <div class="swiper productsSwiper">
                <div class="swiper-wrapper">
                    <!-- Product 1 -->
                    <div class="swiper-slide">
                        <a href="/products/premium-headphones" class="block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=600&fit=crop&crop=center" 
                                     alt="Premium Headphones" 
                                     class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute bottom-6 left-6">
                                    <div class="bg-red-600 text-white px-4 py-3 rounded text-base font-semibold">
                                        Premium Headphones
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Product 2 -->
                    <div class="swiper-slide">
                        <a href="/products/smart-laptop" class="block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=600&fit=crop&crop=center" 
                                     alt="Smart Laptop" 
                                     class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute bottom-6 left-6">
                                    <div class="bg-red-600 text-white px-4 py-3 rounded text-base font-semibold">
                                        Smart Laptop
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Product 3 -->
                    <div class="swiper-slide">
                        <a href="/products/smartwatch-pro" class="block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=600&h=600&fit=crop&crop=center" 
                                     alt="Smartwatch Pro" 
                                     class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute bottom-6 left-6">
                                    <div class="bg-red-600 text-white px-4 py-3 rounded text-base font-semibold">
                                        Smartwatch Pro
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Product 4 -->
                    <div class="swiper-slide">
                        <a href="/products/wireless-speaker" class="block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?w=600&h=600&fit=crop&crop=center" 
                                     alt="Wireless Speaker" 
                                     class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute bottom-6 left-6">
                                    <div class="bg-red-600 text-white px-4 py-3 rounded text-base font-semibold">
                                        Wireless Speaker
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Product 5 -->
                    <div class="swiper-slide">
                        <a href="/products/gaming-console" class="block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 group">
                            <div class="relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1586953208448-b95a79798f07?w=600&h=600&fit=crop&crop=center" 
                                     alt="Gaming Console" 
                                     class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute bottom-6 left-6">
                                    <div class="bg-red-600 text-white px-4 py-3 rounded text-base font-semibold">
                                        Gaming Console
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Product 6 - Extra for better carousel effect -->
                    <div class="swiper-slide">
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
                    </div>
                </div>
                
                <!-- Navigation -->
                <div class="swiper-button-next !text-blue-600"></div>
                <div class="swiper-button-prev !text-blue-600"></div>
                
                <!-- Pagination -->
                <div class="swiper-pagination !bottom-[-40px]"></div>
            </div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.productsSwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    bulletClass: 'swiper-pagination-bullet',
                    bulletActiveClass: 'swiper-pagination-bullet-active',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 25,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1280: {
                        slidesPerView: 3,
                        spaceBetween: 35,
                    }
                }
            });

            // Debug: Log the current slidesPerView
            console.log('Initial slidesPerView:', swiper.params.slidesPerView);
            
            // Listen for breakpoint changes
            swiper.on('breakpoint', (swiper, breakpointParams) => {
                console.log('Breakpoint changed. New slidesPerView:', breakpointParams.slidesPerView);
            });
        });
    </script>
</body>
</html>