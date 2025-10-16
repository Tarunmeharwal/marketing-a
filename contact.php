<?php
$page_title = "Contact Us - Traffiqon | Get Your Free Marketing Audit";
$page_description = "Get in touch with Traffiqon for expert digital marketing services. Free consultation and audit available. Contact us today to start growing your business.";
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative py-28 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="moving-circle circle-1"></div>
            <div class="moving-circle circle-2"></div>
            <div class="moving-circle circle-3"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Side: Text Content -->
                <div class="text-left">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight tracking-tight">
                        <span class="block">Let's Elevate Your Business</span>
                        <span class="block gradient-text">Contact Traffiqon Today</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-gray-300 max-w-lg mb-8">
                        Partner with us to unlock your brand's potential. Request a free marketing audit or consultation to start driving results.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#contact" class="inline-flex items-center glow-button px-6 py-4 rounded-xl font-semibold text-lg">
                            <i class="fas fa-paper-plane mr-3"></i>
                            Start Now
                        </a>
                        <a href="tel:+15551234567" class="inline-flex items-center bg-transparent border-2 border-primary px-6 py-4 rounded-xl font-semibold text-lg hover:bg-primary/20 transition-all">
                            <i class="fas fa-phone mr-3"></i>
                            Call Us
                        </a>
                    </div>
                </div>
                <!-- Right Side: Visual Element -->
                <div class="relative hidden lg:block">
                    <div class="relative w-full h-96 glass-effect rounded-2xl shadow-2xl transform rotate-3">
                        <div class="absolute inset-2 bg-primary rounded-xl flex items-center justify-center">
                            <div class="text-center">
                                <i class="fas fa-rocket text-primary text-5xl mb-4"></i>
                                <p class="text-xl font-semibold text-white">Launch Your Growth</p>
                                <p class="text-gray-400">Expert strategies for digital success</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact" class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">
            <!-- Contact Form -->
            <div class="glass-effect rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-semibold text-white mb-4 text-center">Contact Us</h2>
                <p class="text-gray-400 mb-8 text-center text-sm">Let us help you grow your business. Fill out the form below, and we'll get back to you within 24 hours.</p>
                
                <form id="contact-form" class="space-y-5">
                    <div class="space-y-5">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-1.5">Full Name *</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-user text-gray-400 text-sm"></i>
                                </span>
                                <input type="text" id="name" name="name" required class="w-full pl-10 pr-4 py-2.5 border border-primary/20 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-slate-800/50 text-white placeholder-gray-400 transition-all duration-300" placeholder="Enter your full name">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-1.5">Email Address *</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-envelope text-gray-400 text-sm"></i>
                                </span>
                                <input type="email" id="email" name="email" required class="w-full pl-10 pr-4 py-2.5 border border-primary/20 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-slate-800/50 text-white placeholder-gray-400 transition-all duration-300" placeholder="Enter your email">
                            </div>
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-300 mb-1.5">Phone Number</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-phone text-gray-400 text-sm"></i>
                                </span>
                                <input type="tel" id="phone" name="phone" class="w-full pl-10 pr-4 py-2.5 border border-primary/20 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-slate-800/50 text-white placeholder-gray-400 transition-all duration-300" placeholder="Enter your phone number">
                            </div>
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-300 mb-1.5">Company Name</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-building text-gray-400 text-sm"></i>
                                </span>
                                <input type="text" id="company" name="company" class="w-full pl-10 pr-4 py-2.5 border border-primary/20 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-slate-800/50 text-white placeholder-gray-400 transition-all duration-300" placeholder="Enter your company name">
                            </div>
                        </div>
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-300 mb-1.5">Service Interested In</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-th-large text-gray-400 text-sm"></i>
                                </span>
                                <select id="service" name="service" class="w-full pl-10 pr-4 py-2.5 border border-primary/20 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-slate-800/50 text-white placeholder-gray-400 transition-all duration-300 appearance-none">
                                    <option value="">Select a service</option>
                                    <option value="meta-ads">Meta Ads (Facebook & Instagram)</option>
                                    <option value="google-ads">Google Ads</option>
                                    <option value="youtube-ads">YouTube Ads</option>
                                    <option value="website-development">Website Development</option>
                                    <option value="all-services">All Services</option>
                                    <option value="consultation">Free Consultation</option>
                                </select>
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <i class="fas fa-chevron-down text-gray-400 text-sm"></i>
                                </span>
                            </div>
                        </div>
                        <div>
                            <label for="budget" class="block text-sm font-medium text-gray-300 mb-1.5">Monthly Budget</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-dollar-sign text-gray-400 text-sm"></i>
                                </span>
                                <select id="budget" name="budget" class="w-full pl-10 pr-4 py-2.5 border border-primary/20 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-slate-800/50 text-white placeholder-gray-400 transition-all duration-300 appearance-none">
                                    <option value="">Select budget range</option>
                                    <option value="under-5k">Under $5,000</option>
                                    <option value="5k-10k">$5,000 - $10,000</option>
                                    <option value="10k-25k">$10,000 - $25,000</option>
                                    <option value="25k-50k">$25,000 - $50,000</option>
                                    <option value="over-50k">Over $50,000</option>
                                </select>
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <i class="fas fa-chevron-down text-gray-400 text-sm"></i>
                                </span>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300 mb-1.5">Message *</label>
                            <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2.5 border border-primary/20 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-slate-800/50 text-white placeholder-gray-400 transition-all duration-300 resize-none" placeholder="Tell us about your project..."></textarea>
                        </div>
                        <button type="submit" class="w-full glow-button py-3 rounded-xl font-medium text-lg flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Submit Message
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div class="mt-12 max-w-4xl mx-auto">
                <h2 class="text-2xl font-semibold text-white mb-6 text-center">Other Ways to Reach Us</h2>
                <p class="text-gray-400 mb-8 text-center text-sm">Choose your preferred method to connect with our team.</p>
                
                <div class="grid sm:grid-cols-2 gap-6">
                    <div class="glass-effect rounded-lg p-6 card-hover">
                        <div class="flex items-center">
                            <div class="w-10 h-10 glow-button rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-white text-base"></i>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-white">Email</h3>
                                <a href="mailto:hello@traffiqon.com" class="text-gray-400 text-sm hover:text-primary">hello@traffiqon.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="glass-effect rounded-lg p-6 card-hover">
                        <div class="flex items-center">
                            <div class="w-10 h-10 glow-button rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-white text-base"></i>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-white">Phone</h3>
                                <a href="tel:+15551234567" class="text-gray-400 text-sm hover:text-primary">+1 (555) 123-4567</a>
                            </div>
                        </div>
                    </div>
                    <div class="glass-effect rounded-lg p-6 card-hover">
                        <div class="flex items-center">
                            <div class="w-10 h-10 glow-button rounded-full flex items-center justify-center mr-4">
                                <i class="fab fa-whatsapp text-white text-base"></i>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-white">WhatsApp</h3>
                                <a href="https://wa.me/15551234567" class="text-gray-400 text-sm hover:text-primary">+1 (555) 123-4567</a>
                            </div>
                        </div>
                    </div>
                    <div class="glass-effect rounded-lg p-6 card-hover">
                        <div class="flex items-center">
                            <div class="w-10 h-10 glow-button rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-white text-base"></i>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-white">Address</h3>
                                <p class="text-gray-400 text-sm">123 Business Street, Suite 100<br>City, State 12345</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="mt-8 text-center">
                    <h3 class="text-sm font-medium text-white mb-4">Follow Us</h3>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center text-gray-300 hover:bg-primary hover:text-white transition-all duration-300">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center text-gray-300 hover:bg-primary hover:text-white transition-all duration-300">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center text-gray-300 hover:bg-primary hover:text-white transition-all duration-300">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center text-gray-300 hover:bg-primary hover:text-white transition-all duration-300">
                            <i class="fab fa-linkedin-in text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold text-white mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-400">Get answers to common questions about our services</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div class="glass-effect rounded-xl p-6 card-hover">
                        <h3 class="text-lg font-semibold text-white mb-3">How long does it take to see results?</h3>
                        <p class="text-gray-400">Most clients start seeing initial results within 2-4 weeks, with significant improvements typically visible within 3-6 months of consistent optimization.</p>
                    </div>
                    
                    <div class="glass-effect rounded-xl p-6 card-hover">
                        <h3 class="text-lg font-semibold text-white mb-3">What's included in the free audit?</h3>
                        <p class="text-gray-400">Our free audit includes a comprehensive analysis of your current marketing efforts, competitor research, and actionable recommendations for improvement.</p>
                    </div>
                    
                    <div class="glass-effect rounded-xl p-6 card-hover">
                        <h3 class="text-lg font-semibold text-white mb-3">Do you work with small businesses?</h3>
                        <p class="text-gray-400">Absolutely! We work with businesses of all sizes, from startups to enterprise companies. We tailor our strategies to fit your budget and goals.</p>
                    </div>
                </div>
                
                <div class="space-y-6">
                    <div class="glass-effect rounded-xl p-6 card-hover">
                        <h3 class="text-lg font-semibold text-white mb-3">What's your minimum contract length?</h3>
                        <p class="text-gray-400">We typically work on a month-to-month basis with a 3-month minimum to ensure we can deliver meaningful results for your business.</p>
                    </div>
                    
                    <div class="glass-effect rounded-xl p-6 card-hover">
                        <h3 class="text-lg font-semibold text-white mb-3">How do you measure success?</h3>
                        <p class="text-gray-400">We track key metrics like ROI, conversion rates, cost per acquisition, and overall revenue growth to ensure your campaigns are delivering real business value.</p>
                    </div>
                    
                    <div class="glass-effect rounded-xl p-6 card-hover">
                        <h3 class="text-lg font-semibold text-white mb-3">Can you help with existing campaigns?</h3>
                        <p class="text-gray-400">Yes! We can audit and optimize your existing campaigns, or take over management completely. We'll work with your current setup to maximize results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Contact form submission
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sending...';
            submitBtn.disabled = true;
            
            // Simulate form submission (replace with actual form handling)
            setTimeout(() => {
                // Show success message
                alert('Thank you for your message! We\'ll get back to you within 24 hours.');
                
                // Reset form
                this.reset();
                
                // Reset button
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });
    </script>

<?php include 'includes/footer.php'; ?>
