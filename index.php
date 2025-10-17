<?php
// Page Configuration
$current_page = 'home';
$page_title = 'Traffiqon - Turn Your Traffic Into Revenue';
$page_description = 'Transform your digital presence with expert marketing strategies. We help businesses grow through Meta Ads, Google Ads, YouTube Ads, and Website Development.';

// Include Header
include 'includes/header.php';

?>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 px-6 relative overflow-hidden">
        <div class="solar-system">
            <div class="ring ring-1"></div>
            <div class="ring ring-2"></div>
            <div class="ring ring-3"></div>
            <div class="ring ring-4"></div>
            <div class="ring ring-5"></div>
            <div class="shooting-star" style="top: 50px; left: 550px;"></div>
            <div class="moving-circle circle-1"></div>
            <div class="moving-circle circle-2"></div>
            <div class="moving-circle circle-3"></div>
        </div>
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left Side - Main Content -->
                <div>
                    <div class="text-center lg:text-left mb-8">
                        <span class="text-sm text-gray-300">No Jargon. Just one KPI - </span>
                        <span class="glow-button px-4 py-1 rounded-full text-sm font-semibold ml-2">Profits</span>
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl font-bold mb-8 leading-tight">
                        Turn Your Traffic Into<br>
                        <span class="gradient-text">Revenue</span>
                    </h1>
                    
                    <p class="text-gray-300 text-xl mb-10 leading-relaxed">
                        We help businesses maximize their online presence with strategic digital marketing, stunning web development, and data-driven advertising campaigns that deliver real results.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 mb-16">
                        <a href="#contact" class="glow-button px-10 py-4 rounded-full font-bold text-lg text-center">
                            <i class="fas fa-rocket mr-2"></i> Get Started
                        </a>
                        <a href="#services" class="border-2 border-primary px-10 py-4 rounded-full font-bold text-lg hover:bg-primary/20 transition-all text-center">
                            <i class="fas fa-cog mr-2"></i> Our Services
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-8">
                        <div class="glass-effect rounded-2xl p-6 text-center card-hover">
                            <div class="text-4xl font-bold gradient-text mb-2" data-target="500">0</div>
                            <div class="text-gray-400 font-semibold text-sm">Happy Clients</div>
                        </div>
                        <div class="glass-effect rounded-2xl p-6 text-center card-hover">
                            <div class="text-4xl font-bold gradient-text mb-2" data-target="1000">0</div>
                            <div class="text-gray-400 font-semibold text-sm">Projects Completed</div>
                        </div>
                        <div class="glass-effect rounded-2xl p-6 text-center card-hover">
                            <div class="text-4xl font-bold gradient-text mb-2" data-target="98">0</div>
                            <div class="text-gray-400 font-semibold text-sm">Success Rate</div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side - Interactive Services -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-white mb-6 text-center">Our Services</h3>
                    
                    <!-- Meta Ads Toggle -->
                    <div class="flex items-center justify-between glass-effect rounded-xl p-4 shadow-lg">
                        <div class="flex items-center">
                            <div class="w-14 h-10 flex items-center justify-center mr-4">
                                <img src="assets/images/Meta Png.png" alt="Meta" class="w-14 h-10">
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
                    <div class="flex items-center justify-between glass-effect rounded-xl p-4 shadow-lg">
                        <div class="flex items-center">
                            <div class="w-14 h-10 flex items-center justify-center mr-4">
                                <img src="assets/images/Google Ads Png -.png" alt="Google Ads" class="w-14 h-10">
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
                    
                    <!-- YouTube Ads Toggle -->
                    <div class="flex items-center justify-between glass-effect rounded-xl p-4 shadow-lg">
                        <div class="flex items-center">
                            <div class="w-14 h-10 flex items-center justify-center mr-4">
                                <img src="assets/images/YouTube Png.png" alt="YouTube" class="w-14 h-10">
                            </div>
                            <span class="text-white font-semibold">YouTube Ads</span>
                        </div>
                        <div class="toggle-switch" data-service="youtube">
                            <div class="toggle-track">
                                <div class="toggle-thumb"></div>
                            </div>
                            <span class="toggle-label">OFF</span>
                        </div>
                    </div>
                    
                    <!-- Website Development Toggle -->
                    <div class="flex items-center justify-between glass-effect rounded-xl p-4 shadow-lg">
                        <div class="flex items-center">
                            <div class="w-14 h-10 flex items-center justify-center mr-4">
                                <img src="assets/images/Html Png.png" alt="Web Development" class="w-14 h-10">
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
                    
                    <!-- Results Box -->
                    <div class="glow-button rounded-2xl p-8 shadow-xl relative overflow-hidden">
                        <div class="absolute inset-0 opacity-10">
                            <div class="absolute top-4 left-4 w-2 h-2 bg-white rounded-full animate-pulse"></div>
                            <div class="absolute top-8 right-8 w-1 h-1 bg-white rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                            <div class="absolute bottom-6 left-8 w-1.5 h-1.5 bg-white rounded-full animate-pulse" style="animation-delay: 1s;"></div>
                        </div>
                        
                        <div class="relative z-10">
                            <div class="text-center mb-6">
                                <h4 class="text-white font-bold text-xl mb-2">Results We Deliver</h4>
                                <p class="text-white/90 text-sm">Real growth for your business</p>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-8">
                                <div class="text-center">
                                    <div class="w-full h-24 bg-white/10 rounded-lg p-2 mb-4">
                                        <div class="flex items-end justify-center space-x-1 h-full">
                                            <div class="bg-white/30 rounded-t w-3 traffic-bar-1"></div>
                                            <div class="bg-white/30 rounded-t w-3 traffic-bar-2"></div>
                                            <div class="bg-white/30 rounded-t w-3 traffic-bar-3"></div>
                                            <div class="bg-white/30 rounded-t w-3 traffic-bar-4"></div>
                                            <div class="bg-white/30 rounded-t w-3 traffic-bar-5"></div>
                                            <div class="bg-white/30 rounded-t w-3 traffic-bar-6"></div>
                                        </div>
                                    </div>
                                    <h5 class="text-white font-bold text-lg mb-1">Traffic Growth</h5>
                                    <p class="text-white/80 text-sm">Exponential increase</p>
                                </div>
                                
                                <div class="text-center">
                                    <div class="w-full h-24 bg-white/10 rounded-lg p-2 mb-4">
                                        <div class="flex items-end justify-center space-x-1 h-full">
                                            <div class="bg-white/30 rounded-t w-3 sales-bar-1"></div>
                                            <div class="bg-white/30 rounded-t w-3 sales-bar-2"></div>
                                            <div class="bg-white/30 rounded-t w-3 sales-bar-3"></div>
                                            <div class="bg-white/30 rounded-t w-3 sales-bar-4"></div>
                                            <div class="bg-white/30 rounded-t w-3 sales-bar-5"></div>
                                            <div class="bg-white/30 rounded-t w-3 sales-bar-6"></div>
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

    <!-- Services Section -->
    <section id="services" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h6 class="text-primary font-semibold text-sm uppercase tracking-wider mb-3">Our Services</h6>
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Premium Digital Solutions</h2>
                <p class="text-gray-400 text-xl max-w-2xl mx-auto">Comprehensive marketing services designed to drive growth and maximize ROI</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Meta Ads -->
                <div class="glass-effect rounded-3xl p-8 card-hover meta-card border border-gray-700">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <img src="assets/images/Meta Png.png" alt="Meta Ads" class="w-12 h-12 object-contain">
                    </div>
                    <span class="bg-blue-500/20 text-blue-400 text-xs px-3 py-1 rounded-full">SOCIAL MEDIA</span>
                    <h3 class="text-2xl font-bold mt-4 mb-3">Meta Ads</h3>
                    <p class="text-gray-400 mb-4">Facebook & Instagram advertising campaigns that drive targeted traffic</p>
                    <a href="meta-ads.php" class="text-blue-400 font-semibold hover:opacity-80">Learn More →</a>
                </div>

                <!-- Google Ads -->
                <div class="glass-effect rounded-3xl p-8 card-hover google-card border border-gray-700">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <img src="assets/images/Google Ads Png -.png" alt="Google Ads" class="w-12 h-12 object-contain">
                    </div>
                    <span class="bg-red-500/20 text-red-400 text-xs px-3 py-1 rounded-full">SEARCH ADS</span>
                    <h3 class="text-2xl font-bold mt-4 mb-3">Google Ads</h3>
                    <p class="text-gray-400 mb-4">Search and display advertising on the world's largest platform</p>
                    <a href="google-ads.php" class="text-red-400 font-semibold hover:opacity-80">Learn More →</a>
                </div>

                <!-- YouTube Ads -->
                <div class="glass-effect rounded-3xl p-8 card-hover youtube-card border border-gray-700">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <img src="assets/images/YouTube Png.png" alt="YouTube Ads" class="w-12 h-12 object-contain">
                    </div>
                    <span class="bg-red-500/20 text-red-400 text-xs px-3 py-1 rounded-full">VIDEO ADS</span>
                    <h3 class="text-2xl font-bold mt-4 mb-3">YouTube Ads</h3>
                    <p class="text-gray-400 mb-4">Video advertising that converts viewers into customers</p>
                    <a href="youtube-ads.php" class="text-red-400 font-semibold hover:opacity-80">Learn More →</a>
                </div>

                <!-- Website Development -->
                <div class="glass-effect rounded-3xl p-8 card-hover web-card border border-gray-700">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <img src="assets/images/Html Png.png" alt="Web Development" class="w-12 h-12 object-contain">
                    </div>
                    <span class="bg-purple-500/20 text-purple-400 text-xs px-3 py-1 rounded-full">DEVELOPMENT</span>
                    <h3 class="text-2xl font-bold mt-4 mb-3">Web Development</h3>
                    <p class="text-gray-400 mb-4">Custom websites that convert visitors into customers</p>
                    <a href="website-development.php" class="text-purple-400 font-semibold hover:opacity-80">Learn More →</a>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="services.php" class="glow-button px-8 py-4 rounded-full font-bold text-lg inline-block">
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- One KPI Section -->
    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="glass-effect rounded-3xl p-12 md:p-16">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="glow-button rounded-3xl p-10 inline-block">
                            <h3 class="text-2xl font-bold mb-2">No Jargons.</h3>
                            <h3 class="text-2xl font-bold mb-2">Just One KPI -</h3>
                            <h2 class="text-6xl font-bold">Profits 📈</h2>
                        </div>
                    </div>
                    <div>
                        <p class="text-gray-300 text-lg mb-6">
                            We are hyper focused on increasing your profits, month over month.
                        </p>
                        <p class="text-gray-300 text-lg">
                            <strong class="text-white">No fluff. High impact. No ad spend wasted.</strong> We leverage learnings from thousands of experiments with successful businesses to create a robust marketing engine which generates compounding growth, rather than linear growth.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h6 class="text-primary font-semibold text-sm uppercase tracking-wider mb-2">About Us</h6>
                    <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">Driving Digital Success Through Innovation</h2>
                    <p class="text-xl text-gray-400 mb-8 leading-relaxed">
                        We are a team of passionate digital marketers dedicated to helping businesses achieve their online goals. With years of experience and a data-driven approach, we deliver results that matter.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center">
                            <div class="w-12 h-12 glow-button rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-chart-line text-white text-xl"></i>
                            </div>
                            <span class="text-lg text-gray-300">Data-Driven Strategies</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 glow-button rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-users text-white text-xl"></i>
                            </div>
                            <span class="text-lg text-gray-300">Expert Team</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 glow-button rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-trophy text-white text-xl"></i>
                            </div>
                            <span class="text-lg text-gray-300">Proven Results</span>
                        </div>
                    </div>
                    <a href="about.php" class="glow-button px-8 py-4 rounded-full font-bold text-lg inline-block">
                        Learn More About Us
                    </a>
                </div>
                <div class="text-center">
                    <div class="glass-effect rounded-3xl p-8 inline-block">
                        <img src="assets/images/1536748_4541.png" alt="Digital Marketing Innovation" class="w-full max-w-md mx-auto rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Results/Testimonial Section -->
    <section class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="glass-effect rounded-3xl p-16 text-center" style="background: rgba(30, 27, 75, 0.5);">
                <h2 class="text-4xl md:text-5xl font-bold mb-8">
                    "65% of our clients have tripled their profits in<br class="hidden md:block">the first 6 months."
                </h2>
                <p class="text-gray-300 mb-8 text-lg max-w-3xl mx-auto">
                    We leverage learnings from thousands of experiments with successful brands to maximize returns and boost growth.
                </p>
                <a href="#contact" class="glow-button px-10 py-4 rounded-full font-bold text-lg inline-block mb-4">
                    Let's Talk
                </a>
                <p class="text-sm text-gray-400">Connect with us to scale your business</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h6 class="text-primary font-semibold text-sm uppercase tracking-wider mb-3">Get In Touch</h6>
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Ready to Grow Your Business?</h2>
                <p class="text-gray-400 text-xl">Let's discuss how we can help you achieve your goals</p>
            </div>

            <div class="glass-effect rounded-3xl p-10">
                <form action="process.php" method="POST" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Full Name</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl bg-slate-800/50 border border-primary/20 focus:border-primary focus:outline-none transition-colors text-white" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Email Address</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl bg-slate-800/50 border border-primary/20 focus:border-primary focus:outline-none transition-colors text-white" placeholder="john@example.com">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Phone Number</label>
                        <input type="tel" name="phone" class="w-full px-4 py-3 rounded-xl bg-slate-800/50 border border-primary/20 focus:border-primary focus:outline-none transition-colors text-white" placeholder="+1 234 567 8900">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Service Interest</label>
                        <select name="service" class="w-full px-4 py-3 rounded-xl bg-slate-800/50 border border-primary/20 focus:border-primary focus:outline-none transition-colors text-white">
                            <option>Select a service</option>
                            <option>Meta Ads</option>
                            <option>Google Ads</option>
                            <option>YouTube Ads</option>
                            <option>Website Development</option>
                            <option>SEO</option>
                            <option>Social Media Marketing</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Message</label>
                        <textarea name="message" rows="5" required class="w-full px-4 py-3 rounded-xl bg-slate-800/50 border border-primary/20 focus:border-primary focus:outline-none transition-colors resize-none text-white" placeholder="Tell us about your project..."></textarea>
                    </div>
                    <button type="submit" class="w-full glow-button py-4 rounded-xl font-bold text-lg">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

<style>
/* Inline Toggle Styles */
.toggle-switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 24px;
  margin-left: 10px;
}

.toggle-track {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #374151;
  border-radius: 12px;
  transition: all 0.8s ease;
  cursor: pointer;
  border: 1px solid #4b5563;
}

.toggle-track.active {
  background-color: #10b981;
  border-color: #059669;
}

.toggle-thumb {
  position: absolute;
  top: 1px;
  left: 1px;
  width: 22px;
  height: 22px;
  background-color: white;
  border-radius: 50%;
  transition: all 0.8s ease;
  cursor: pointer;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
}

.toggle-thumb.active {
  transform: translateX(26px);
  background-color: #f0fdf4;
}

.toggle-label {
  margin-left: 8px;
  font-size: 11px;
  font-weight: 600;
  color: #9ca3af;
  transition: all 0.8s ease;
  display: inline-block;
  min-width: 25px;
}

.toggle-label.active {
  color: #10b981;
  font-weight: 700;
}

.results-box.animate {
  animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
  0%, 100% { transform: scale(1); }
  50% { transform: scale(1.02); }
}
</style>

<script>
// Toggle Animation - Immediate Activation
document.addEventListener('DOMContentLoaded', function() {
    function activateToggle(serviceName) {
        const toggle = document.querySelector('[data-service="' + serviceName + '"]');
        
        if (toggle) {
            const track = toggle.querySelector('.toggle-track');
            const thumb = toggle.querySelector('.toggle-thumb');
            const label = toggle.querySelector('.toggle-label');
            
            if (track && thumb && label) {
                track.classList.add('active');
                thumb.classList.add('active');
                label.classList.add('active');
                label.textContent = 'ON';
            }
        }
    }
    
    // Activate toggles with slow staggered timing
    activateToggle('meta');
    setTimeout(function() { activateToggle('google'); }, 1000);
    setTimeout(function() { activateToggle('youtube'); }, 2000);
    setTimeout(function() { activateToggle('website'); }, 3000);
    
    // Animate results box
    setTimeout(function() {
        const resultsBox = document.querySelector('.results-box');
        if (resultsBox) {
            resultsBox.classList.add('animate');
        }
    }, 4000);
});
</script>

<?php
// Include Footer
include 'includes/footer.php';
?>