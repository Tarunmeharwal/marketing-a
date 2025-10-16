<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Avedh - Premium Digital Marketing Solutions</title>
    <meta name="description" content="Premium digital marketing services for global success. SEO, PPC, Social Media Marketing and more.">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%);
            background-attachment: fixed;
        }
        
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(88, 114, 255, 0.3);
        }
        
        .glow-button {
            background: linear-gradient(90deg, #5872FF 0%, #474BFA 100%);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(88, 114, 255, 0.4);
        }
        
        .glow-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(88, 114, 255, 0.6);
        }
        
        .glass-effect {
            background: rgba(30, 27, 75, 0.4);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(88, 114, 255, 0.2);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #5872FF 0%, #474BFA 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .text-primary {
            color: #5872FF;
        }
        
        .border-primary {
            border-color: #5872FF;
        }
        
        .bg-primary {
            background-color: #1e1b4b;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        /* Service card brand colors */
        .meta-card:hover {
            border-color: rgba(24, 119, 242, 0.5);
        }
        
        .google-card:hover {
            border-color: rgba(234, 67, 53, 0.5);
        }
        
        .youtube-card:hover {
            border-color: rgba(255, 0, 0, 0.5);
        }
        
        .web-card:hover {
            border-color: rgba(147, 51, 234, 0.5);
        }
        
        /* Toggle Switch Styles */
        .toggle-switch {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }
        
        .toggle-track {
            width: 50px;
            height: 26px;
            background: rgba(75, 85, 99, 0.5);
            border-radius: 13px;
            position: relative;
            transition: background 0.3s ease;
        }
        
        .toggle-thumb {
            width: 22px;
            height: 22px;
            background: white;
            border-radius: 50%;
            position: absolute;
            top: 2px;
            left: 2px;
            transition: transform 0.3s ease;
        }
        
        .toggle-switch.active .toggle-track {
            background: linear-gradient(90deg, #5872FF 0%, #474BFA 100%);
        }
        
        .toggle-switch.active .toggle-thumb {
            transform: translateX(24px);
        }
        
        .toggle-label {
            font-size: 14px;
            font-weight: 600;
            color: #9ca3af;
        }
        
        .toggle-switch.active .toggle-label {
            color: #5872FF;
        }
        
        /* Animation for bars */
        @keyframes growBar {
            from { height: 0%; }
        }
        
        .traffic-bar-1 { animation: growBar 1s ease-out 0.2s forwards; }
        .traffic-bar-2 { animation: growBar 1s ease-out 0.4s forwards; }
        .traffic-bar-3 { animation: growBar 1s ease-out 0.6s forwards; }
        .traffic-bar-4 { animation: growBar 1s ease-out 0.8s forwards; }
        .traffic-bar-5 { animation: growBar 1s ease-out 1s forwards; }
        .traffic-bar-6 { animation: growBar 1s ease-out 1.2s forwards; }
        
        .sales-bar-1 { animation: growBar 1s ease-out 0.3s forwards; }
        .sales-bar-2 { animation: growBar 1s ease-out 0.5s forwards; }
        .sales-bar-3 { animation: growBar 1s ease-out 0.7s forwards; }
        .sales-bar-4 { animation: growBar 1s ease-out 0.9s forwards; }
        .sales-bar-5 { animation: growBar 1s ease-out 1.1s forwards; }
        .sales-bar-6 { animation: growBar 1s ease-out 1.3s forwards; }
        
        .traffic-bar-1 { height: 30%; }
        .traffic-bar-2 { height: 45%; }
        .traffic-bar-3 { height: 55%; }
        .traffic-bar-4 { height: 70%; }
        .traffic-bar-5 { height: 85%; }
        .traffic-bar-6 { height: 100%; }
        
        .sales-bar-1 { height: 25%; }
        .sales-bar-2 { height: 40%; }
        .sales-bar-3 { height: 60%; }
        .sales-bar-4 { height: 75%; }
        .sales-bar-5 { height: 90%; }
        .sales-bar-6 { height: 100%; }

        /* Enhanced Dropdown Styles */
        .dropdown-menu {
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);
            border: 1px solid rgba(88, 114, 255, 0.3);
            box-shadow: 0 10px 30px rgba(88, 114, 255, 0.2);
        }

        .dropdown-menu a {
            transition: all 0.3s ease;
        }

        .dropdown-menu a:hover {
            transform: translateX(5px);
            background: linear-gradient(90deg, rgba(88, 114, 255, 0.1) 0%, rgba(88, 114, 255, 0.2) 100%);
        }

        /* Solar System Animation Styles */
        .solar-system {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            height: 600px;
            z-index: 0;
            opacity: 0.3;
        }

        .ring {
            position: absolute;
            border: 1px solid rgba(88, 114, 255, 0.4);
            border-radius: 50%;
            animation: rotate 20s linear infinite;
        }

        .ring-1 { width: 100px; height: 100px; top: 250px; left: 250px; animation-duration: 15s; }
        .ring-2 { width: 200px; height: 200px; top: 200px; left: 200px; animation-duration: 18s; }
        .ring-3 { width: 300px; height: 300px; top: 150px; left: 150px; animation-duration: 22s; }
        .ring-4 { width: 400px; height: 400px; top: 100px; left: 100px; animation-duration: 25s; }
        .ring-5 { width: 500px; height: 500px; top: 50px; left: 50px; animation-duration: 28s; }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .shooting-star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
            animation: shoot 3s linear infinite;
            opacity: 0;
        }

        @keyframes shoot {
            0% { transform: translate(0, 0); opacity: 0; }
            10% { opacity: 1; }
            50% { opacity: 0.8; }
            100% { transform: translate(-600px, 600px); opacity: 0; }
        }

        .moving-circle {
            position: absolute;
            background: rgba(88, 114, 255, 0.2);
            border-radius: 50%;
            animation: fadeMove 5s ease-in-out infinite;
        }

        .circle-1 { width: 20px; height: 20px; top: 100px; left: 100px; animation-delay: 0s; }
        .circle-2 { width: 15px; height: 15px; top: 300px; left: 500px; animation-delay: 1s; }
        .circle-3 { width: 25px; height: 25px; top: 500px; left: 200px; animation-delay: 2s; }

        @keyframes fadeMove {
            0%, 100% { opacity: 0.2; transform: translateY(0); }
            50% { opacity: 0.5; transform: translateY(-30px); }
        }
    </style>
</head>
<body class="text-white">

        <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 glass-effect">
        <div class="max-w-7xl mx-auto px-6 py-5">
            <div class="flex justify-between items-center">
               <div class="flex items-center">
  <a href="index.php" class="text-3xl font-bold gradient-text">
    Traffiqon
  </a>
</div>

                <button id="mobile-menu-button" class="lg:hidden text-white">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="index.php" class="text-gray-300 hover:text-primary font-medium transition-colors">Home</a>
                    
                    <!-- Services Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-300 hover:text-primary font-medium transition-colors flex items-center">
                            Services
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="absolute top-full left-0 mt-3 w-64 dropdown-menu rounded-xl shadow-2xl opacity-0 invisible translate-y-[-10px] group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 z-50">
                            <div class="py-3">
                                <a href="services.php" class="block px-6 py-3 text-gray-300 hover:bg-primary/50 hover:text-primary transition-all">
                                    <i class="fas fa-th-large mr-3"></i>All Services
                                </a>
                                <a href="meta-ads.php" class="block px-6 py-3 text-gray-300 hover:bg-primary/50 hover:text-blue-400 transition-all">
                                    <i class="fab fa-facebook mr-3"></i>Meta Ads
                                </a>
                                <a href="google-ads.php" class="block px-6 py-3 text-gray-300 hover:bg-primary/50 hover:text-red-400 transition-all">
                                    <i class="fab fa-google mr-3"></i>Google Ads
                                </a>
                                <a href="youtube-ads.php" class="block px-6 py-3 text-gray-300 hover:bg-primary/50 hover:text-red-500 transition-all">
                                    <i class="fab fa-youtube mr-3"></i>YouTube Ads
                                </a>
                                <a href="website-development.php" class="block px-6 py-3 text-gray-300 hover:bg-primary/50 hover:text-purple-400 transition-all">
                                    <i class="fas fa-code mr-3"></i>Website Development
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="about.php" class="text-gray-300 hover:text-primary font-medium transition-colors">About</a>
                    <a href="contact.php" class="text-gray-300 hover:text-primary font-medium transition-colors">Contact</a>
                    <a href="#contact" class="glow-button px-6 py-2.5 rounded-full font-semibold">
                        Let's Talk
                    </a>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="lg:hidden hidden mt-4">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#home" class="text-gray-300 hover:text-primary block px-3 py-2 font-medium">Home</a>
                    <div class="px-3 py-2">
                        <div class="text-gray-300 font-semibold mb-2">Services</div>
                        <div class="pl-4 space-y-2">
                            <a href="services.php" class="text-gray-400 hover:text-primary block py-1">All Services</a>
                            <a href="meta-ads.php" class="text-gray-400 hover:text-blue-400 block py-1">Meta Ads</a>
                            <a href="google-ads.php" class="text-gray-400 hover:text-red-400 block py-1">Google Ads</a>
                            <a href="youtube-ads.php" class="text-gray-400 hover:text-red-500 block py-1">YouTube Ads</a>
                            <a href="website-development.php" class="text-gray-400 hover:text-purple-400 block py-1">Website Development</a>
                        </div>
                    </div>
                    <a href="about.php" class="text-gray-300 hover:text-primary block px-3 py-2 font-medium">About</a>
                    <a href="portfolio.php" class="text-gray-300 hover:text-primary block px-3 py-2 font-medium">Portfolio</a>
                    <a href="contact.php" class="glow-button block px-3 py-2 font-medium rounded-lg mx-3 mt-2 text-center">Contact</a>
                </div>
            </div>
        </div>
    </nav>