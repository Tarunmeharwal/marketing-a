<?php
$page_title = "Website Development - Traffiqon | Custom Web Solutions";
$page_description = "Build a stunning, high-performance website with our expert web development services. Tailored solutions for your business.";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="pt-32 pb-20 px-6 relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <div class="web-orbit" style="width: 300px; height: 300px; top: 20%; left: 10%;"></div>
        <div class="web-orbit" style="width: 400px; height: 400px; top: 40%; right: 10%; animation-duration: 15s;"></div>
        <div class="web-orbit" style="width: 200px; height: 200px; bottom: 20%; left: 50%; animation-duration: 25s;"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full text-white text-sm font-semibold mb-8 shadow-lg">
                    <i class="fas fa-code mr-3"></i>
                    Web Development Services
                </div>
                <h1 class="text-5xl lg:text-6xl font-bold mb-8 leading-tight">
                    Websites That
                    <span class="block gradient-text">Engage & Convert</span>
                </h1>
                <p class="text-gray-300 text-xl mb-10 leading-relaxed max-w-2xl font-medium">
                    Create a powerful online presence with our custom website development services. We build responsive, high-performance websites tailored to your business goals.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mb-10">
                    <a href="contact.html" class="glow-button px-10 py-5 rounded-full font-bold text-lg text-center shadow-lg">
                        <span class="flex items-center justify-center">
                            <i class="fas fa-rocket mr-3"></i>
                            Start Your Website
                        </span>
                    </a>
                    <a href="#features" class="border-2 border-purple-500 px-10 py-5 rounded-full font-bold text-lg hover:bg-purple-500/20 transition-all text-center">
                        <span class="flex items-center justify-center">
                            <i class="fas fa-info-circle mr-3"></i>
                            Learn More
                        </span>
                    </a>
                </div>
                <div class="glass-effect rounded-2xl p-6">
                    <div class="flex items-center space-x-4">
                        <div class="flex text-yellow-400 text-2xl">★★★★★</div>
                        <div>
                            <p class="font-bold text-white">Rated 5.0 on Google</p>
                            <p class="text-gray-400 text-sm">Based on 500+ client reviews</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="float" data-aos="fade-left">
                <div class="glass-effect rounded-3xl p-8 space-y-6">
                    <div class="flex items-center justify-between bg-gradient-to-r from-purple-500/20 to-indigo-500/20 rounded-xl p-6 border border-purple-500/30">
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 bg-purple-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-code text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-bold text-xl">Custom Websites</h3>
                                <p class="text-gray-400 text-sm">Tailored to your brand</p>
                            </div>
                        </div>
                        <div class="text-green-400 font-bold text-2xl">+150%</div>
                    </div>
                    <div class="flex items-center justify-between bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-xl p-6 border border-blue-500/30">
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-bold text-xl">Responsive Design</h3>
                                <p class="text-gray-400 text-sm">Optimized for all devices</p>
                            </div>
                        </div>
                        <div class="text-green-400 font-bold text-2xl">+200%</div>
                    </div>
                    <div class="bg-gradient-to-r from-purple-600 to-indigo-600 rounded-xl p-6">
                        <h4 class="text-white font-bold text-lg mb-4">Average Results</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-white mb-1">2.5x</div>
                                <div class="text-white/80 text-sm">Conversion Rate</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-white mb-1">+30%</div>
                                <div class="text-white/80 text-sm">User Engagement</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h6 class="text-purple-400 font-semibold text-sm uppercase tracking-wider mb-2">Our Web Development Services</h6>
            <h2 class="text-4xl lg:text-5xl font-bold mb-4">Complete Web Development Solutions</h2>
            <p class="text-gray-300 text-xl max-w-3xl mx-auto">From design to deployment, we handle every aspect of your website development.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="glass-effect rounded-2xl p-8 card-hover" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-code text-purple-400 text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-purple-400 mb-4">Custom Development</h3>
                <p class="text-gray-400 mb-6">Tailored websites built to meet your unique business needs.</p>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-center"><i class="fas fa-check text-purple-400 mr-3"></i>Custom Features</li>
                    <li class="flex items-center"><i class="fas fa-check text-purple-400 mr-3"></i>Scalable Solutions</li>
                    <li class="flex items-center"><i class="fas fa-check text-purple-400 mr-3"></i>Modern Technologies</li>
                </ul>
            </div>
            <div class="glass-effect rounded-2xl p-8 card-hover" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-blue-500/20 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-mobile-alt text-blue-400 text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-purple-400 mb-4">Responsive Design</h3>
                <p class="text-gray-400 mb-6">Websites optimized for seamless performance across all devices.</p>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-center"><i class="fas fa-check text-blue-400 mr-3"></i>Mobile-Friendly</li>
                    <li class="flex items-center"><i class="fas fa-check text-blue-400 mr-3"></i>Cross-Browser Support</li>
                    <li class="flex items-center"><i class="fas fa-check text-blue-400 mr-3"></i>Fast Loading</li>
                </ul>
            </div>
            <div class="glass-effect rounded-2xl p-8 card-hover" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-emerald-500/20 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-cogs text-emerald-400 text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-purple-400 mb-4">SEO & Performance</h3>
                <p class="text-gray-400 mb-6">Optimized websites for search engines and high performance.</p>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-center"><i class="fas fa-check text-emerald-400 mr-3"></i>SEO Optimization</li>
                    <li class="flex items-center"><i class="fas fa-check text-emerald-400 mr-3"></i>Speed Optimization</li>
                    <li class="flex items-center"><i class="fas fa-check text-emerald-400 mr-3"></i>Analytics Integration</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Web Development Features Section -->
<section class="py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl lg:text-5xl font-bold mb-4">Why Choose Our Web Development?</h2>
            <p class="text-gray-300 text-xl">We build websites that combine design, functionality, and performance.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center card-hover" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-code text-white text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-purple-400 mb-3">Custom Solutions</h3>
                <p class="text-gray-400">Tailored websites to meet your unique business goals.</p>
            </div>
            <div class="text-center card-hover" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-mobile-alt text-white text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-purple-400 mb-3">Responsive Design</h3>
                <p class="text-gray-400">Seamless performance across all devices and browsers.</p>
            </div>
            <div class="text-center card-hover" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-chart-bar text-white text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-purple-400 mb-3">SEO Optimization</h3>
                <p class="text-gray-400">Built-in SEO to improve search engine rankings.</p>
            </div>
            <div class="text-center card-hover" data-aos="fade-up" data-aos-delay="400">
                <div class="w-20 h-20 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-cogs text-white text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-purple-400 mb-3">Ongoing Support</h3>
                <p class="text-gray-400">Continuous maintenance and updates for your website.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 px-6 bg-black/20">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl lg:text-5xl font-bold mb-4">Our Web Development Process</h2>
            <p class="text-gray-300 text-xl">A proven methodology for successful web development projects.</p>
        </div>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center card-hover" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-2xl font-bold">1</span>
                </div>
                <h3 class="text-xl font-bold text-purple-400 mb-3">Discovery & Planning</h3>
                <p class="text-gray-400">We analyze your requirements and business goals to create a project plan.</p>
            </div>
            <div class="text-center card-hover" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-2xl font-bold">2</span>
                </div>
                <h3 class="text-xl font-bold text-purple-400 mb-3">Design & Prototyping</h3>
                <p class="text-gray-400">We create wireframes and mockups to visualize your website.</p>
            </div>
            <div class="text-center card-hover" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-2xl font-bold">3</span>
                </div>
                <h3 class="text-xl font-bold text-purple-400 mb-3">Development & Testing</h3>
                <p class="text-gray-400">We build and test your website for quality and performance.</p>
            </div>
            <div class="text-center card-hover" data-aos="fade-up" data-aos-delay="400">
                <div class="w-20 h-20 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-2xl font-bold">4</span>
                </div>
                <h3 class="text-xl font-bold text-purple-400 mb-3">Launch & Support</h3>
                <p class="text-gray-400">We deploy your website and provide ongoing support.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="contact" class="py-20 px-6">
    <div class="max-w-4xl mx-auto">
        <div class="glass-effect rounded-3xl p-12 text-center" data-aos="fade-up">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                Ready to Build Your <span class="gradient-text">Dream Website?</span>
            </h2>
            <p class="text-gray-300 text-xl mb-8 max-w-3xl mx-auto">
                Let's create a website that drives business growth. Get started with a free consultation.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="contact.html" class="glow-button px-10 py-4 rounded-full font-bold text-lg inline-block">
                    <i class="fas fa-rocket mr-2"></i>
                    Start Your Project
                </a>
                <a href="services.html" class="border-2 border-purple-500 px-10 py-4 rounded-full font-bold text-lg hover:bg-purple-500/20 transition-all inline-block">
                    <i class="fas fa-th-large mr-2"></i>
                    View All Services
                </a>
            </div>
            <p class="text-gray-400 text-sm mt-4">No commitment required • Trusted by 500+ businesses</p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>