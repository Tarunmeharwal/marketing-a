<?php
// Page Configuration
$current_page = 'home';
$page_title = 'Traffiqon - Turn Your Traffic Into Revenue';
$page_description = 'Transform your digital presence with expert marketing strategies. We help businesses grow through Meta Ads, Google Ads, YouTube Ads, and Website Development.';

// Include Header
include 'includes/header.php';

?>
            <!-- Hero Section -->
            <section id="home" class="relative min-h-screen flex items-center">
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-24">
                    <div class="grid lg:grid-cols-2 gap-16 items-center">
                        <!-- Left Side - Main Content -->
                        <div data-aos="fade-right" data-aos-delay="200">
                            <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-full text-white text-sm font-semibold mb-8 shadow-lg">
                                <div class="w-2 h-2 bg-white rounded-full mr-3 animate-pulse"></div>
                                Trusted by 500+ Global Companies
                            </div>
                            <h1 class="text-5xl lg:text-7xl font-bold text-white mb-8 leading-tight">
                                Turn Your Traffic Into
                                <span class="block bg-gradient-to-r from-emerald-400 to-teal-400 bg-clip-text text-transparent">Revenue</span>
                            </h1>
                            <p class="text-xl text-gray-300 mb-10 leading-relaxed max-w-2xl font-medium">
                                We help businesses maximize their online presence with strategic digital marketing, stunning web development, and data-driven advertising campaigns that deliver real results.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 mb-10">
                                <a href="#contact" class="group bg-gradient-to-r from-emerald-500 to-teal-600 text-white px-10 py-5 rounded-xl font-bold text-lg hover:from-emerald-600 hover:to-teal-700 hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center shadow-lg">
                                    <span class="flex items-center justify-center">
                                        <i class="fas fa-rocket mr-3"></i>
                                        Get In Touch
                                    </span>
                                </a>
                                <a href="#services" class="group border-2 border-emerald-400 text-white px-10 py-5 rounded-xl font-bold text-lg hover:bg-emerald-400/10 hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 text-center">
                                    <span class="flex items-center justify-center">
                                        <i class="fas fa-cog mr-3"></i>
                                        Our Services
                                    </span>
                                </a>
                            </div>
                            <!-- Stats -->
                           <div class="grid grid-cols-3 gap-8 pt-12 border-t border-gray-700">
  <div class="text-center">
    <div class="text-4xl font-bold bg-gradient-to-r from-emerald-400 to-teal-400 bg-clip-text text-transparent mb-3">
      30+
    </div>
    <div class="text-gray-400 text-sm font-semibold uppercase tracking-wide">
      Happy Clients
    </div>
  </div>

  <div class="text-center">
    <div class="text-4xl font-bold bg-gradient-to-r from-emerald-400 to-teal-400 bg-clip-text text-transparent mb-3">
      50 Lakh+
    </div>
    <div class="text-gray-400 text-sm font-semibold uppercase tracking-wide">
      Monthly Adspend
    </div>
  </div>

  <div class="text-center">
    <div class="text-4xl font-bold bg-gradient-to-r from-emerald-400 to-teal-400 bg-clip-text text-transparent mb-3">
      15+
    </div>
    <div class="text-gray-400 text-sm font-semibold uppercase tracking-wide">
      Team Size
    </div>
  </div>
</div>

                        </div>
                        
                        <!-- Right Side - Services with Results -->
                        <div data-aos="fade-left" data-aos-delay="400" class="space-y-6">
                            <h3 class="text-2xl font-bold text-white mb-6 text-center">Our Services</h3>
                            
                            <!-- Meta Ads Toggle -->
                            <div class="flex items-center justify-between bg-gray-800/90 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-700">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fab fa-facebook text-white text-lg"></i>
                                    </div>
                                    <span class="text-white font-semibold">Meta Ads</span>
                                </div>
                                <div class="toggle-switch" data-service="meta">
                                    <div class="toggle-track">
                                        <div class="toggle-thumb"></div>
                                    </div>
                                    <span class="toggle-label">OFF</span>
                                </div>
                            </div>
                            
                            <!-- Google Ads Toggle -->
                            <div class="flex items-center justify-between bg-gray-800/90 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-700">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fab fa-google text-white text-lg"></i>
                                    </div>
                                    <span class="text-white font-semibold">Google Ads</span>
                                </div>
                                <div class="toggle-switch" data-service="google">
                                    <div class="toggle-track">
                                        <div class="toggle-thumb"></div>
                                    </div>
                                    <span class="toggle-label">OFF</span>
                                </div>
                            </div>
                            
                            <!-- Website Development Toggle -->
                            <div class="flex items-center justify-between bg-gray-800/90 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-700">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-code text-white text-lg"></i>
                                    </div>
                                    <span class="text-white font-semibold">Website Development</span>
                                </div>
                                <div class="toggle-switch" data-service="website">
                                    <div class="toggle-track">
                                        <div class="toggle-thumb"></div>
                                    </div>
                                    <span class="toggle-label">OFF</span>
                                </div>
                            </div>
                            
                            <!-- Animated Results Box -->
                            <div class="results-box bg-gradient-to-r from-emerald-500 to-teal-600 rounded-2xl p-8 shadow-xl border border-emerald-400 relative overflow-hidden">
                                <!-- Background Pattern -->
                                <div class="absolute inset-0 opacity-10">
                                    <div class="absolute top-4 left-4 w-2 h-2 bg-white rounded-full animate-pulse"></div>
                                    <div class="absolute top-8 right-8 w-1 h-1 bg-white rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                                    <div class="absolute bottom-6 left-8 w-1.5 h-1.5 bg-white rounded-full animate-pulse" style="animation-delay: 1s;"></div>
                                    <div class="absolute bottom-4 right-4 w-2 h-2 bg-white rounded-full animate-pulse" style="animation-delay: 1.5s;"></div>
                                </div>
                                
                                <div class="relative z-10">
                                    <div class="text-center mb-6">
                                        <h4 class="text-white font-bold text-xl mb-2">Results We Deliver</h4>
                                        <p class="text-white/90 text-sm">Real growth for your business</p>
                                    </div>
                                    
                                    <div class="grid grid-cols-2 gap-8">
                                        <!-- Traffic Growth -->
                                        <div class="text-center">
                                            <div class="relative mb-4">
                                                <div class="w-40 h-24 mx-auto relative bg-white/10 rounded-lg p-2">
                                                    <!-- Simple animated bars -->
                                                    <div class="flex items-end justify-center space-x-1 h-full">
                                                        <div class="bg-white/30 rounded-t w-3 traffic-bar-1" style="height: 0%;"></div>
                                                        <div class="bg-white/30 rounded-t w-3 traffic-bar-2" style="height: 0%;"></div>
                                                        <div class="bg-white/30 rounded-t w-3 traffic-bar-3" style="height: 0%;"></div>
                                                        <div class="bg-white/30 rounded-t w-3 traffic-bar-4" style="height: 0%;"></div>
                                                        <div class="bg-white/30 rounded-t w-3 traffic-bar-5" style="height: 0%;"></div>
                                                        <div class="bg-white/30 rounded-t w-3 traffic-bar-6" style="height: 0%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="text-white font-bold text-lg mb-1">Traffic Growth</h5>
                                            <p class="text-white/80 text-sm">Exponential increase</p>
                                        </div>
                                        
                                        <!-- Sales Increase -->
                                        <div class="text-center">
                                            <div class="relative mb-4">
                                                <div class="w-40 h-24 mx-auto relative bg-white/10 rounded-lg p-2">
                                                    <!-- Simple animated bars -->
                                                    <div class="flex items-end justify-center space-x-1 h-full">
                                                        <div class="bg-white/30 rounded-t w-3 sales-bar-1" style="height: 0%;"></div>
                                                        <div class="bg-white/30 rounded-t w-3 sales-bar-2" style="height: 0%;"></div>
                                                        <div class="bg-white/30 rounded-t w-3 sales-bar-3" style="height: 0%;"></div>
                                                        <div class="bg-white/30 rounded-t w-3 sales-bar-4" style="height: 0%;"></div>
                                                        <div class="bg-white/30 rounded-t w-3 sales-bar-5" style="height: 0%;"></div>
                                                        <div class="bg-white/30 rounded-t w-3 sales-bar-6" style="height: 0%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="text-white font-bold text-lg mb-1">Sales Increase</h5>
                                            <p class="text-white/80 text-sm">Revenue growth</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>

            <!-- Brief Services Overview -->
            <section id="services" class="py-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h6 class="text-emerald-400 font-semibold text-sm uppercase tracking-wider mb-2">Our Services</h6>
                        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">Premium Digital Marketing Solutions</h2>
                        <p class="text-xl text-gray-400 max-w-3xl mx-auto">Comprehensive digital marketing services designed to drive growth and maximize ROI</p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <!-- Meta Ads -->
                        <div class="group bg-gray-800/90 rounded-2xl p-8 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-700 hover:border-blue-400/20" data-aos="fade-up" data-aos-delay="100">
                            <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i class="fab fa-facebook text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-blue-400 transition-colors duration-300">Meta Ads</h3>
                            <p class="text-gray-400 mb-6">Facebook & Instagram advertising campaigns that drive targeted traffic and conversions.</p>
                            <a href="meta-ads.html" class="text-blue-400 font-semibold hover:text-blue-500 transition-colors duration-200">Learn More →</a>
                        </div>
                        
                        <!-- Google Ads -->
                        <div class="group bg-gray-800/90 rounded-2xl p-8 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-700 hover:border-red-400/20" data-aos="fade-up" data-aos-delay="200">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-pink-600 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i class="fab fa-google text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-red-400 transition-colors duration-300">Google Ads</h3>
                            <p class="text-gray-400 mb-6">Search and display advertising on the world's largest search platform.</p>
                            <a href="google-ads.html" class="text-red-400 font-semibold hover:text-red-500 transition-colors duration-200">Learn More →</a>
                        </div>
                        
                        <!-- YouTube Ads -->
                        <div class="group bg-gray-800/90 rounded-2xl p-8 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-700 hover:border-red-400/20" data-aos="fade-up" data-aos-delay="300">
                            <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-600 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i class="fab fa-youtube text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-red-400 transition-colors duration-300">YouTube Ads</h3>
                            <p class="text-gray-400 mb-6">Video advertising that converts viewers into customers.</p>
                            <a href="youtube-ads.html" class="text-red-400 font-semibold hover:text-red-500 transition-colors duration-200">Learn More →</a>
                        </div>
                        
                        <!-- Website Development -->
                        <div class="group bg-gray-800/90 rounded-2xl p-8 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300 border border-gray-700 hover:border-purple-400/20" data-aos="fade-up" data-aos-delay="400">
                            <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i class="fas fa-code text-white text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-purple-400 transition-colors duration-300">Website Development</h3>
                            <p class="text-gray-400 mb-6">Custom websites that convert visitors into customers.</p>
                            <a href="website-development.html" class="text-purple-400 font-semibold hover:text-purple-500 transition-colors duration-200">Learn More →</a>
                        </div>
                    </div>
                    
                    <div class="text-center mt-12">
                        <a href="services.html" class="bg-gradient-to-r from-emerald-500 to-teal-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200">
                            View All Services
                        </a>
                    </div>
                </div>
            </section>

            <!-- Brief About Section -->
            <section id="about" class="py-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div data-aos="fade-right">
                            <h6 class="text-emerald-400 font-semibold text-sm uppercase tracking-wider mb-2">About Us</h6>
                            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">Driving Digital Success Through Innovation</h2>
                            <p class="text-xl text-gray-400 mb-8 leading-relaxed">
                                We are a team of passionate digital marketers dedicated to helping businesses achieve their online goals. With years of experience and a data-driven approach, we deliver results that matter.
                            </p>
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <i class="fas fa-chart-line text-emerald-400 text-xl mr-4"></i>
                                    <span class="text-lg text-gray-300">Data-Driven Strategies</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-users text-emerald-400 text-xl mr-4"></i>
                                    <span class="text-lg text-gray-300">Expert Team</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-trophy text-emerald-400 text-xl mr-4"></i>
                                    <span class="text-lg text-gray-300">Proven Results</span>
                                </div>
                            </div>
                            <div class="mt-8">
                                <a href="about.html" class="bg-gradient-to-r from-emerald-500 to-teal-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200">
                                    Learn More About Us
                                </a>
                            </div>
                        </div>
                        <div data-aos="fade-left" class="text-center">
                            <img src="assets/images/1536748_4541.png" alt="Digital Marketing Innovation" class="w-full max-w-lg mx-auto rounded-3xl transform hover:scale-105 transition-transform duration-300">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="py-20">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h6 class="text-emerald-400 font-semibold text-sm uppercase tracking-wider mb-2">Get In Touch</h6>
                        <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">Ready to Grow Your Business?</h2>
                        <p class="text-xl text-gray-400">Let's discuss how we can help you achieve your digital marketing goals</p>
                    </div>
                    
                    <div class="bg-gray-800/90 rounded-2xl shadow-xl p-8 lg:p-12 backdrop-filter backdrop-blur-sm" data-aos="fade-up" data-aos-delay="100">
                        <form action="process.php" method="POST" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Full Name</label>
                                    <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-600 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 bg-gray-700 text-white placeholder-gray-400 transition-all duration-300">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                                    <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-600 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 bg-gray-700 text-white placeholder-gray-400 transition-all duration-300">
                                </div>
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-600 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 bg-gray-700 text-white placeholder-gray-400 transition-all duration-300">
                            </div>
                            <div>
                                <label for="service" class="block text-sm font-medium text-gray-300 mb-2">Service Interest</label>
                                <div class="relative">
                                    <select id="service" name="service" class="w-full px-4 py-3 border border-gray-600 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 bg-gray-700 text-white placeholder-gray-400 transition-all duration-300 appearance-none">
                                        <option value="">Select a service</option>
                                        <option value="meta-ads">Meta Ads (Facebook & Instagram)</option>
                                        <option value="google-ads">Google Ads</option>
                                        <option value="youtube-ads">YouTube Ads</option>
                                        <option value="website-development">Website Development</option>
                                        <option value="seo">Search Engine Optimization</option>
                                        <option value="social">Social Media Marketing</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <i class="fas fa-chevron-down text-gray-400 text-sm"></i>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Message</label>
                                <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 border border-gray-600 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 bg-gray-700 text-white placeholder-gray-400 transition-all duration-300 resize-none"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="bg-gradient-to-r from-emerald-500 to-teal-600 text-white px-8 py-4 rounded-full font-semibold text-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
      

<?php
// Include Footer
include 'includes/footer.php';
?>