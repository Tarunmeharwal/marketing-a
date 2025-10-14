<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Avedh - Premium Digital Marketing Solutions</title>
    <meta name="description" content="Premium digital marketing services for global success. SEO, PPC, Social Media Marketing and more.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        input, select, textarea {
            font-family: 'Inter', sans-serif;
        }
        /* Ensure content is readable over background */
        .content-container {
            position: relative;
            z-index: 10;
        }
        /* Fixed navbar with consistent black background */
        nav {
            background: rgba(17, 24, 39, 0.9); /* Consistent dark background */
            backdrop-filter: blur(10px);
        }
        /* Richer footer styling */
        footer {
            background: rgba(17, 24, 39, 0.95); /* Slightly transparent dark background */
            backdrop-filter: blur(10px);
        }
        /* Ticker animation */
        .ticker {
            animation: scroll 30s linear infinite;
        }
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
    </style>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
</head>
<body class="bg-gray-900 text-white">
    
    <!-- Full-page Background -->
    <div class="fixed inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/50 via-gray-900 to-teal-900/50"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"100\" height=\"100\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%2310b981\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M50 10 L90 50 L50 90 L10 50 Z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        <div class="absolute top-10 left-10 w-64 h-64 bg-emerald-500/10 rounded-full filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-teal-500/10 rounded-full filter blur-3xl animate-pulse animation-delay-2000"></div>
    </div>

    <!-- Content Container -->
    <div class="content-container">
        
        <!-- Navigation -->
        <nav class="fixed top-0 left-0 right-0 z-50 bg-gray-900/90 backdrop-filter backdrop-blur-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="index.php" class="flex items-center">
                            <img src="assets/images/logo.svg" alt="Traffiqon Logo" class="h-10 w-auto">
                            <span class="ml-3 text-2xl font-bold bg-gradient-to-r from-emerald-400 to-teal-400 bg-clip-text text-transparent">Traffiqon</span>
                        </a>
                    </div>
                    
                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex lg:items-center lg:space-x-8">
                        <a href="index.php" class="text-gray-300 hover:text-emerald-400 font-medium transition-all duration-300 relative group px-3 py-2">
                            Home
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-400 group-hover:w-full transition-all duration-300 rounded-full"></span>
                        </a>
                        
                        <!-- Services Dropdown -->
                        <div class="relative group">
                            <button class="text-gray-300 hover:text-emerald-400 font-medium transition-all duration-300 relative group px-3 py-2 flex items-center">
                                Services
                                <i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-300 group-hover:rotate-180"></i>
                                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-400 group-hover:w-full transition-all duration-300 rounded-full"></span>
                            </button>
                            <div class="absolute top-full left-0 mt-3 w-72 bg-gray-800 rounded-xl shadow-2xl border border-gray-700 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 transform translate-y-2 group-hover:translate-y-0">
                                <!-- Dropdown Header -->
                                <div class="px-6 py-4 border-b border-gray-700 bg-gradient-to-r from-emerald-900/50 to-teal-900/50 rounded-t-xl">
                                    <h3 class="text-sm font-bold text-white uppercase tracking-wider">Our Services</h3>
                                    <p class="text-xs text-gray-400 mt-1">Choose your marketing solution</p>
                                </div>
                                
                                <!-- Dropdown Items -->
                                <div class="py-3">
                                    <a href="services.php" class="group/item block px-6 py-4 text-gray-300 hover:bg-gradient-to-r hover:from-emerald-900 hover:to-teal-900 hover:text-emerald-400 transition-all duration-200 border-l-4 border-transparent hover:border-emerald-400">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-200">
                                                <i class="fas fa-th-large text-white text-sm"></i>
                                            </div>
                                            <div>
                                                <div class="font-semibold text-sm">All Services</div>
                                                <div class="text-xs text-gray-400">Complete marketing suite</div>
                                            </div>
                                        </div>
                                    </a>
                                    
                                    <a href="meta-ads.php" class="group/item block px-6 py-4 text-gray-300 hover:bg-gradient-to-r hover:from-blue-900 hover:to-indigo-900 hover:text-blue-400 transition-all duration-200 border-l-4 border-transparent hover:border-blue-400">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-200">
                                                <i class="fab fa-facebook text-white text-sm"></i>
                                            </div>
                                            <div>
                                                <div class="font-semibold text-sm">Meta Ads</div>
                                                <div class="text-xs text-gray-400">Facebook & Instagram</div>
                                            </div>
                                        </div>
                                    </a>
                                    
                                    <a href="google-ads.php" class="group/item block px-6 py-4 text-gray-300 hover:bg-gradient-to-r hover:from-red-900 hover:to-pink-900 hover:text-red-400 transition-all duration-200 border-l-4 border-transparent hover:border-red-400">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gradient-to-r from-red-500 to-pink-600 rounded-lg flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-200">
                                                <i class="fab fa-google text-white text-sm"></i>
                                            </div>
                                            <div>
                                                <div class="font-semibold text-sm">Google Ads</div>
                                                <div class="text-xs text-gray-400">Search & Display</div>
                                            </div>
                                        </div>
                                    </a>
                                    
                                    <a href="youtube-ads.php" class="group/item block px-6 py-4 text-gray-300 hover:bg-gradient-to-r hover:from-red-900 hover:to-pink-900 hover:text-red-400 transition-all duration-200 border-l-4 border-transparent hover:border-red-400">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gradient-to-r from-red-500 to-pink-600 rounded-lg flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-200">
                                                <i class="fab fa-youtube text-white text-sm"></i>
                                            </div>
                                            <div>
                                                <div class="font-semibold text-sm">YouTube Ads</div>
                                                <div class="text-xs text-gray-400">Video advertising</div>
                                            </div>
                                        </div>
                                    </a>
                                    
                                    <a href="website-development.php" class="group/item block px-6 py-4 text-gray-300 hover:bg-gradient-to-r hover:from-purple-900 hover:to-indigo-900 hover:text-purple-400 transition-all duration-200 border-l-4 border-transparent hover:border-purple-400">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-lg flex items-center justify-center mr-4 group-hover/item:scale-110 transition-transform duration-200">
                                                <i class="fas fa-code text-white text-sm"></i>
                                            </div>
                                            <div>
                                                <div class="font-semibold text-sm">Website Development</div>
                                                <div class="text-xs text-gray-400">Custom web solutions</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                
                                <!-- Dropdown Footer -->
                                <div class="px-6 py-3 border-t border-gray-700 bg-gray-900/50 rounded-b-xl">
                                    <a href="contact.php" class="block w-full text-center bg-gradient-to-r from-emerald-500 to-teal-600 text-white py-2 px-4 rounded-lg text-sm font-semibold hover:from-emerald-600 hover:to-teal-700 transition-all duration-200">
                                        Get Free Consultation
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <a href="about.php" class="text-gray-300 hover:text-emerald-400 font-medium transition-all duration-300 relative group px-3 py-2">
                            About
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-400 group-hover:w-full transition-all duration-300 rounded-full"></span>
                        </a>
                        <a href="portfolio.php" class="text-gray-300 hover:text-emerald-400 font-medium transition-all duration-300 relative group px-3 py-2">
                            Portfolio
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-400 group-hover:w-full transition-all duration-300 rounded-full"></span>
                        </a>
                        <a href="contact.php" class="text-gray-300 hover:text-emerald-400 font-medium transition-all duration-300 relative group px-3 py-2">
                            Contact
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-400 group-hover:w-full transition-all duration-300 rounded-full"></span>
                        </a>
                        <a href="#contact" class="bg-gradient-to-r from-emerald-500 to-teal-500 text-white px-6 py-2.5 rounded-lg font-semibold hover:from-emerald-600 hover:to-teal-600 hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                            <span class="flex items-center">
                                <i class="fas fa-envelope mr-3"></i>
                                Get In Touch
                            </span>
                        </a>
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <div class="lg:hidden">
                        <button id="mobile-menu-button" class="text-gray-300 hover:text-emerald-400 focus:outline-none focus:text-emerald-400">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Mobile Menu -->
                <div id="mobile-menu" class="lg:hidden hidden">
                    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-gray-800/90 border-t border-gray-700">
                        <a href="index.php" class="text-gray-300 hover:text-emerald-400 block px-3 py-2 text-base font-semibold">Home</a>
                        
                        <!-- Mobile Services Submenu -->
                        <div class="px-3 py-2">
                            <div class="text-gray-300 text-base font-semibold mb-3 flex items-center">
                                <i class="fas fa-th-large mr-2 text-emerald-400"></i>
                                Services
                            </div>
                            <div class="pl-4 space-y-2">
                                <a href="services.php" class="flex items-center text-gray-400 hover:text-emerald-400 px-3 py-2 rounded-lg hover:bg-emerald-900/50 transition-all duration-200">
                                    <div class="w-8 h-8 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center mr-3">
                                        <i class="fas fa-th-large text-white text-xs"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sm">All Services</div>
                                        <div class="text-xs text-gray-400">Complete suite</div>
                                    </div>
                                </a>
                                <a href="meta-ads.php" class="flex items-center text-gray-400 hover:text-blue-400 px-3 py-2 rounded-lg hover:bg-blue-900/50 transition-all duration-200">
                                    <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center mr-3">
                                        <i class="fab fa-facebook text-white text-xs"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sm">Meta Ads</div>
                                        <div class="text-xs text-gray-400">Facebook & Instagram</div>
                                    </div>
                                </a>
                                <a href="google-ads.php" class="flex items-center text-gray-400 hover:text-red-400 px-3 py-2 rounded-lg hover:bg-red-900/50 transition-all duration-200">
                                    <div class="w-8 h-8 bg-gradient-to-r from-red-500 to-pink-600 rounded-lg flex items-center justify-center mr-3">
                                        <i class="fab fa-google text-white text-xs"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sm">Google Ads</div>
                                        <div class="text-xs text-gray-400">Search & Display</div>
                                    </div>
                                </a>
                                <a href="youtube-ads.php" class="flex items-center text-gray-400 hover:text-red-400 px-3 py-2 rounded-lg hover:bg-red-900/50 transition-all duration-200">
                                    <div class="w-8 h-8 bg-gradient-to-r from-red-500 to-pink-600 rounded-lg flex items-center justify-center mr-3">
                                        <i class="fab fa-youtube text-white text-xs"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sm">YouTube Ads</div>
                                        <div class="text-xs text-gray-400">Video advertising</div>
                                    </div>
                                </a>
                                <a href="website-development.php" class="flex items-center text-gray-400 hover:text-purple-400 px-3 py-2 rounded-lg hover:bg-purple-900/50 transition-all duration-200">
                                    <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-lg flex items-center justify-center mr-3">
                                        <i class="fas fa-code text-white text-xs"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-sm">Website Development</div>
                                        <div class="text-xs text-gray-400">Custom web solutions</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <a href="about.php" class="text-gray-300 hover:text-emerald-400 block px-3 py-2 text-base font-semibold">About</a>
                        <a href="portfolio.php" class="text-gray-300 hover:text-emerald-400 block px-3 py-2 text-base font-semibold">Portfolio</a>
                        <a href="contact.php" class="bg-gradient-to-r from-emerald-500 to-teal-600 text-white block px-3 py-2 text-base font-semibold rounded-lg mx-3 mt-2">Contact</a>
                        <a href="privacy-policy.php" class="text-gray-300 hover:text-emerald-400 block px-3 py-2 text-base font-semibold mx-3 mt-2">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Ticker Banner -->
        <!-- <div class="bg-gradient-to-r from-emerald-600 to-teal-600 text-white py-4 overflow-hidden mt-20">
            <div class="flex whitespace-nowrap ticker">
                <div class="flex items-center space-x-8 px-8">
                    <span class="text-lg font-semibold italic">✦ Data-driven strategy</span>
                    <span class="text-lg font-semibold italic">✦ Transparency and insight</span>
                    <span class="text-lg font-semibold italic">✦ Continuous optimization</span>
                    <span class="text-lg font-semibold italic">✦ Flexible collaboration</span>
                    <span class="text-lg font-semibold italic">✦ Personal attention</span>
                    <span class="text-lg font-semibold italic">✦ Results-oriented strategy</span>
                    <span class="text-lg font-semibold italic">✦ Transparency and insight</span>
                </div>
                <div class="flex items-center space-x-8 px-8">
                    <span class="text-lg font-semibold italic">✦ Data-driven strategy</span>
                    <span class="text-lg font-semibold italic">✦ Transparency and insight</span>
                    <span class="text-lg font-semibold italic">✦ Continuous optimization</span>
                    <span class="text-lg font-semibold italic">✦ Flexible collaboration</span>
                    <span class="text-lg font-semibold italic">✦ Personal attention</span>
                    <span class="text-lg font-semibold italic">✦ Results-oriented strategy</span>
                    <span class="text-lg font-semibold italic">✦ Transparency and insight</span>
                </div>
            </div>
        </div> -->

         <div class="bg-black text-emerald-400 py-4 overflow-hidden mt-20">
            <div class="flex whitespace-nowrap ticker">
                <div class="flex items-center space-x-8 px-8">
                    <span class="text-lg font-semibold italic">✦ Data-driven strategy</span>
                    <span class="text-lg font-semibold italic">✦ Transparency and insight</span>
                    <span class="text-lg font-semibold italic">✦ Continuous optimization</span>
                    <span class="text-lg font-semibold italic">✦ Flexible collaboration</span>
                    <span class="text-lg font-semibold italic">✦ Personal attention</span>
                    <span class="text-lg font-semibold italic">✦ Results-oriented strategy</span>
                    <span class="text-lg font-semibold italic">✦ Transparency and insight</span>
                </div>
                <div class="flex items-center space-x-8 px-8">
                    <span class="text-lg font-semibold italic">✦ Data-driven strategy</span>
                    <span class="text-lg font-semibold italic">✦ Transparency and insight</span>
                    <span class="text-lg font-semibold italic">✦ Continuous optimization</span>
                    <span class="text-lg font-semibold italic">✦ Flexible collaboration</span>
                    <span class="text-lg font-semibold italic">✦ Personal attention</span>
                    <span class="text-lg font-semibold italic">✦ Results-oriented strategy</span>
                    <span class="text-lg font-semibold italic">✦ Transparency and insight</span>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main class="flex-1">
