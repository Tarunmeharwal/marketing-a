
    <!-- Footer -->
    <footer class="py-16 px-6 border-t border-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <div class="md:col-span-2">
                    <div class="flex items-center mb-6">
                        <span class="ml-3 text-2xl font-bold">Traffiqon</span>
                    </div>
                    <p class="text-gray-400 mb-6 max-w-md">
                        Premium digital marketing solutions that drive real results. We help businesses maximize their online presence and grow their revenue.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-emerald-600 transition-colors duration-200">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-emerald-600 transition-colors duration-200">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-emerald-600 transition-colors duration-200">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-emerald-600 transition-colors duration-200">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="meta-ads.php" class="text-gray-400 hover:text-emerald-600 transition-colors">Meta Ads</a></li>
                        <li><a href="google-ads.php" class="text-gray-400 hover:text-emerald-600 transition-colors">Google Ads</a></li>
                        <li><a href="youtube-ads.php" class="text-gray-400 hover:text-emerald-600 transition-colors">YouTube Ads</a></li>
                        <li><a href="website-development.php" class="text-gray-400 hover:text-emerald-600 transition-colors">Web Development</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="about.php" class="text-gray-400 hover:text-emerald-600 transition-colors">About Us</a></li>
                        <li><a href="contact.php" class="text-gray-400 hover:text-emerald-600 transition-colors">Contact</a></li>
                        <li><a href="services.php" class="text-gray-400 hover:text-emerald-600 transition-colors">All Services</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400">&copy; 2024 Traffiqon. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/1234567890" target="_blank" rel="noopener noreferrer" 
       class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-green-500 hover:bg-green-600 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 group">
        <i class="fab fa-whatsapp text-white text-2xl"></i>
        <div class="absolute right-16 bg-gray-800 text-white px-3 py-2 rounded-lg text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
            Chat with us on WhatsApp
        </div>
    </a>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
        
        // Toggle switches functionality
        document.querySelectorAll('.toggle-switch').forEach(toggle => {
            toggle.addEventListener('click', function() {
                this.classList.toggle('active');
                const label = this.querySelector('.toggle-label');
                label.textContent = this.classList.contains('active') ? 'ON' : 'OFF';
            });
        });
        
        // Counter animation for stats
        const counters = document.querySelectorAll('[data-target]');
        const speed = 200;
        
        const animateCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / speed;
            
            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(() => animateCounter(counter), 1);
            } else {
                counter.innerText = target + (target === 98 ? '%' : '+');
            }
        };
        
        // Intersection Observer for counter animation
        const observerOptions = {
            threshold: 0.5
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    if (counter.innerText === '0') {
                        animateCounter(counter);
                    }
                }
            });
        }, observerOptions);
        
        counters.forEach(counter => observer.observe(counter));
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>