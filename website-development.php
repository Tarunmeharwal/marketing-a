<?php
$page_title = "Website Development - Traffiqon | Custom Web Solutions";
$page_description = "Professional website development services. Custom websites, e-commerce solutions, and web applications built with modern technologies.";
include 'includes/header.php';
?>

        <!-- Hero Section -->
        <section class="relative py-32 overflow-hidden">
            <!-- Animated Background with Development Colors -->
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-900/30 via-gray-900 to-indigo-900/30"></div>
                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%238b5cf6\" fill-opacity=\"0.1\"%3E%3Ccircle cx=\"30\" cy=\"30\" r=\"2\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
                <div class="absolute top-10 left-10 w-96 h-96 bg-purple-500/10 rounded-full filter blur-3xl animate-pulse"></div>
                <div class="absolute bottom-10 right-10 w-96 h-96 bg-indigo-500/10 rounded-full filter blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            </div>
            
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <!-- Left Side -->
                    <div data-aos="fade-right">
                        <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full text-white text-sm font-semibold mb-8 shadow-lg">
                            <i class="fas fa-code mr-3"></i>
                            Custom Web Development
                        </div>
                        <h1 class="text-5xl lg:text-6xl font-bold text-white mb-8 leading-tight">
                            Websites That
                            <span class="block bg-gradient-to-r from-purple-400 to-indigo-400 bg-clip-text text-transparent">Convert & Scale</span>
                        </h1>
                        <p class="text-xl text-gray-300 mb-10 leading-relaxed max-w-2xl font-medium">
                            Transform your business with custom websites built for performance, conversion, and growth. From responsive designs to e-commerce solutions, we create digital experiences that drive results.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 mb-10">
                            <a href="contact.php" class="group bg-gradient-to-r from-purple-500 to-indigo-500 text-white px-10 py-5 rounded-xl font-bold text-lg hover:from-purple-600 hover:to-indigo-600 hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center shadow-lg">
                                <span class="flex items-center justify-center">
                                    <i class="fas fa-rocket mr-3"></i>
                                    Start Your Project
                                </span>
                            </a>
                            <a href="#features" class="group border-2 border-purple-400 text-white px-10 py-5 rounded-xl font-bold text-lg hover:bg-purple-400/10 hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center">
                                <span class="flex items-center justify-center">
                                    <i class="fas fa-info-circle mr-3"></i>
                                    Learn More
                                </span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Right Side - Development Stats -->
                    <div data-aos="fade-left" class="space-y-6">
                        <div class="bg-gray-800/90 backdrop-blur-sm rounded-2xl p-8 shadow-xl border border-gray-700">
                            <div class="text-center mb-6">
                                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-laptop-code text-white text-2xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-2">Custom Development</h3>
                                <p class="text-gray-400">Tailored to your business needs</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-purple-400 mb-1">100%</div>
                                    <div class="text-sm text-gray-400">Custom Built</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-purple-400 mb-1">24/7</div>
                                    <div class="text-sm text-gray-400">Support</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gray-800/90 backdrop-blur-sm rounded-2xl p-8 shadow-xl border border-gray-700">
                            <div class="text-center mb-6">
                                <div class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-mobile-alt text-white text-2xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-2">Responsive Design</h3>
                                <p class="text-gray-400">Perfect on all devices</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-emerald-400 mb-1">99%</div>
                                    <div class="text-sm text-gray-400">Mobile Optimized</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-emerald-400 mb-1">95+</div>
                                    <div class="text-sm text-gray-400">PageSpeed Score</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h6 class="text-purple-400 font-semibold text-sm uppercase tracking-wider mb-2">Our Development Services</h6>
                    <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">Complete Web Solutions</h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">From concept to launch, we handle every aspect of your web development project</p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Custom Websites -->
                    <div class="bg-gray-800/90 rounded-2xl p-8 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-700 hover:border-purple-400/50" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full flex items-center justify-center mb-6">
                            <i class="fas fa-globe text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Custom Websites</h3>
                        <p class="text-gray-400 mb-6">Unique, professional websites designed to reflect your brand and convert visitors into customers.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-300">
                                <i class="fas fa-check text-purple-400 mr-3"></i>
                                Responsive Design
                            </li>
                            <li class="flex items-center text-gray-300">
                                <i class="fas fa-check text-purple-400 mr-3"></i>
                                SEO Optimized
                            </li>
                            <li class="flex items-center text-gray-300">
                                <i class="fas fa-check text-purple-400 mr-3"></i>
                                Fast Loading
                            </li>
                        </ul>
                    </div>

                    <!-- E-commerce Solutions -->
                    <div class="bg-gray-800/90 rounded-2xl p-8 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-700 hover:border-emerald-400/50" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-full flex items-center justify-center mb-6">
                            <i class="fas fa-shopping-cart text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">E-commerce Solutions</h3>
                        <p class="text-gray-400 mb-6">Complete online stores with payment processing, inventory management, and customer analytics.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-300">
                                <i class="fas fa-check text-emerald-400 mr-3"></i>
                                Payment Integration
                            </li>
                            <li class="flex items-center text-gray-300">
                                <i class="fas fa-check text-emerald-400 mr-3"></i>
                                Inventory Management
                            </li>
                            <li class="flex items-center text-gray-300">
                                <i class="fas fa-check text-emerald-400 mr-3"></i>
                                Order Tracking
                            </li>
                        </ul>
                    </div>

                    <!-- Web Applications -->
                    <div class="bg-gray-800/90 rounded-2xl p-8 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-700 hover:border-blue-400/50" data-aos="fade-up" data-aos-delay="300">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mb-6">
                            <i class="fas fa-cogs text-white text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Web Applications</h3>
                        <p class="text-gray-400 mb-6">Custom web applications and dashboards to streamline your business operations.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-gray-300">
                                <i class="fas fa-check text-blue-400 mr-3"></i>
                                User Management
                            </li>
                            <li class="flex items-center text-gray-300">
                                <i class="fas fa-check text-blue-400 mr-3"></i>
                                Data Analytics
                            </li>
                            <li class="flex items-center text-gray-300">
                                <i class="fas fa-check text-blue-400 mr-3"></i>
                                API Integration
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="py-20 bg-gray-800/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">Modern Technologies</h2>
                    <p class="text-xl text-gray-400">We use cutting-edge technologies to build fast, secure, and scalable websites</p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Frontend -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-paint-brush text-white text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Frontend</h3>
                        <p class="text-gray-400">React, Vue.js, HTML5, CSS3, JavaScript ES6+</p>
                    </div>

                    <!-- Backend -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-server text-white text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Backend</h3>
                        <p class="text-gray-400">Node.js, Python, PHP, Laravel, Express.js</p>
                    </div>

                    <!-- Database -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="w-20 h-20 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-database text-white text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Database</h3>
                        <p class="text-gray-400">MySQL, PostgreSQL, MongoDB, Redis</p>
                    </div>

                    <!-- Cloud -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-cloud text-white text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Cloud</h3>
                        <p class="text-gray-400">AWS, Google Cloud, Azure, Vercel</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">Our Development Process</h2>
                    <p class="text-xl text-gray-400">A proven methodology for successful web development projects</p>
                </div>
                
                <div class="grid md:grid-cols-4 gap-8">
                    <!-- Step 1 -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl font-bold">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Discovery & Planning</h3>
                        <p class="text-gray-400">We analyze your requirements, target audience, and business goals to create a comprehensive project plan.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-20 h-20 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl font-bold">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Design & Prototyping</h3>
                        <p class="text-gray-400">We create wireframes, mockups, and interactive prototypes to visualize your website before development.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl font-bold">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Development & Testing</h3>
                        <p class="text-gray-400">We build your website using modern technologies and conduct thorough testing to ensure quality.</p>
                    </div>

                    <!-- Step 4 -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="w-20 h-20 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-2xl font-bold">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Launch & Support</h3>
                        <p class="text-gray-400">We deploy your website and provide ongoing support, maintenance, and optimization services.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-purple-500 via-indigo-500 to-blue-600 text-white relative overflow-hidden">
            <div class="absolute inset-0 bg-black/10"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6" data-aos="fade-up">
                    Ready to Build Something Amazing?
                </h2>
                <p class="text-xl mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Let's create a website that not only looks great but also drives business growth. Get started with a free consultation and project estimate.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                    <a href="contact.php" class="bg-white text-purple-600 px-10 py-4 rounded-xl font-bold text-lg hover:bg-gray-100 transition-colors duration-300 shadow-lg">
                        <i class="fas fa-rocket mr-2"></i>
                        Start Your Project
                    </a>
                    <a href="services.php" class="border-2 border-white text-white px-10 py-4 rounded-xl font-bold text-lg hover:bg-white hover:text-purple-600 transition-all duration-300">
                        <i class="fas fa-th-large mr-2"></i>
                        View All Services
                    </a>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>