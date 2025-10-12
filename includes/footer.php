</main>

         <footer>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <!-- Company Info -->
                        <div class="lg:col-span-2">
                            <div class="flex items-center mb-6">
                                <img src="assets/images/logo-white.svg" alt="Traffiqon Logo" class="h-10 w-auto">
                                <span class="ml-3 text-2xl font-bold bg-gradient-to-r from-emerald-400 to-teal-400 bg-clip-text text-transparent">Traffiqon</span>
                            </div>
                            <p class="text-gray-400 mb-6 max-w-md">
                                We help businesses scale their digital presence through expert marketing strategies, cutting-edge technology, and data-driven results.
                            </p>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 bg-gray-700 rounded-lg flex items-center justify-center hover:bg-emerald-600 transition-colors duration-200">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gray-700 rounded-lg flex items-center justify-center hover:bg-emerald-600 transition-colors duration-200">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gray-700 rounded-lg flex items-center justify-center hover:bg-emerald-600 transition-colors duration-200">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gray-700 rounded-lg flex items-center justify-center hover:bg-emerald-600 transition-colors duration-200">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Services -->
                        <div>
                            <h3 class="text-lg font-semibold text-white mb-6">Services</h3>
                            <ul class="space-y-3">
                                <li><a href="meta-ads.html" class="text-gray-400 hover:text-emerald-400 transition-colors duration-200">Meta Ads</a></li>
                                <li><a href="google-ads.html" class="text-gray-400 hover:text-emerald-400 transition-colors duration-200">Google Ads</a></li>
                                <li><a href="youtube-ads.html" class="text-gray-400 hover:text-emerald-400 transition-colors duration-200">YouTube Ads</a></li>
                                <li><a href="website-development.html" class="text-gray-400 hover:text-emerald-400 transition-colors duration-200">Website Development</a></li>
                                <li><a href="services.html" class="text-gray-400 hover:text-emerald-400 transition-colors duration-200">All Services</a></li>
                            </ul>
                        </div>
                        
                        <!-- Company -->
                        <div>
                            <h3 class="text-lg font-semibold text-white mb-6">Company</h3>
                            <ul class="space-y-3">
                                <li><a href="about.html" class="text-gray-400 hover:text-emerald-400 transition-colors duration-200">About Us</a></li>
                                <li><a href="portfolio.html" class="text-gray-400 hover:text-emerald-400 transition-colors duration-200">Portfolio</a></li>
                                <li><a href="contact.html" class="text-gray-400 hover:text-emerald-400 transition-colors duration-200">Contact</a></li>
                                <li><a href="privacy-policy.html" class="text-gray-400 hover:text-emerald-400 transition-colors duration-200">Privacy Policy</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-emerald-400 transition-colors duration-200">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-700 mt-12 pt-8">
                        <div class="flex flex-col md:flex-row justify-between items-center">
                            <p class="text-gray-400 text-sm">© 2024 Traffiqon. All rights reserved.</p>
                            <p class="text-gray-400 text-sm mt-4 md:mt-0">Made with ❤️ for growing businesses</p>
                        </div>
                    </div>
                </div>
            </footer>

        <!-- Scripts -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="assets/js/main.js"></script>
        
        <script>
            // Initialize AOS
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
            
            // Mobile menu toggle
            document.getElementById('mobile-menu-button').addEventListener('click', function() {
                const mobileMenu = document.getElementById('mobile-menu');
                mobileMenu.classList.toggle('hidden');
            });
        </script>
    </div>
</body>
</html>