<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffiqon - Premium Digital Marketing Solutions</title>
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

        /* Enhanced Solar System Animation Styles */
        .solar-system {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            height: 400px;
            z-index: 1;
            opacity: 0.1;
            animation: solarPulse 8s ease-in-out infinite;
        }

        @keyframes solarPulse {
            0%, 100% { transform: translate(-50%, -50%) scale(1); }
            50% { transform: translate(-50%, -50%) scale(1.05); }
        }

        .ring {
            position: absolute;
            border: 1px solid rgba(88, 114, 255, 0.4);
            border-radius: 50%;
            animation: rotate 20s linear infinite;
            box-shadow: 0 0 20px rgba(88, 114, 255, 0.1);
        }

        .ring-1 { 
            width: 60px; height: 60px; top: 170px; left: 170px; 
            animation-duration: 12s; 
            border-color: rgba(16, 185, 129, 0.6);
            box-shadow: 0 0 15px rgba(16, 185, 129, 0.2);
        }
        .ring-2 { 
            width: 120px; height: 120px; top: 140px; left: 140px; 
            animation-duration: 16s; 
            border-color: rgba(59, 130, 246, 0.5);
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.15);
        }
        .ring-3 { 
            width: 180px; height: 180px; top: 110px; left: 110px; 
            animation-duration: 20s; 
            border-color: rgba(139, 92, 246, 0.4);
            box-shadow: 0 0 25px rgba(139, 92, 246, 0.1);
        }
        .ring-4 { 
            width: 240px; height: 240px; top: 80px; left: 80px; 
            animation-duration: 24s; 
            border-color: rgba(236, 72, 153, 0.3);
            box-shadow: 0 0 30px rgba(236, 72, 153, 0.08);
        }
        .ring-5 { 
            width: 300px; height: 300px; top: 50px; left: 50px; 
            animation-duration: 28s; 
            border-color: rgba(245, 158, 11, 0.2);
            box-shadow: 0 0 35px rgba(245, 158, 11, 0.05);
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .shooting-star {
            position: absolute;
            width: 3px;
            height: 3px;
            background: linear-gradient(45deg, #ffffff, #10b981);
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.9), 0 0 30px rgba(16, 185, 129, 0.5);
            animation: shoot 4s linear infinite;
            opacity: 0;
        }

        .shooting-star:nth-child(1) { top: 25px; left: 275px; animation-delay: 0s; }
        .shooting-star:nth-child(2) { top: 75px; left: 325px; animation-delay: 2s; }
        .shooting-star:nth-child(3) { top: 150px; left: 350px; animation-delay: 4s; }

        @keyframes shoot {
            0% { transform: translate(0, 0) scale(0); opacity: 0; }
            10% { transform: translate(5px, 5px) scale(1); opacity: 1; }
            50% { transform: translate(-100px, 100px) scale(1.2); opacity: 0.8; }
            100% { transform: translate(-300px, 300px) scale(0); opacity: 0; }
        }

        .moving-circle {
            position: absolute;
            background: radial-gradient(circle, rgba(88, 114, 255, 0.4), rgba(88, 114, 255, 0.1));
            border-radius: 50%;
            animation: fadeMove 6s ease-in-out infinite;
            box-shadow: 0 0 20px rgba(88, 114, 255, 0.3);
        }

        .circle-1 { 
            width: 15px; height: 15px; top: 50px; left: 50px; 
            animation-delay: 0s; 
            background: radial-gradient(circle, rgba(16, 185, 129, 0.6), rgba(16, 185, 129, 0.1));
            box-shadow: 0 0 15px rgba(16, 185, 129, 0.4);
        }
        .circle-2 { 
            width: 12px; height: 12px; top: 150px; left: 250px; 
            animation-delay: 1.5s; 
            background: radial-gradient(circle, rgba(59, 130, 246, 0.5), rgba(59, 130, 246, 0.1));
            box-shadow: 0 0 12px rgba(59, 130, 246, 0.3);
        }
        .circle-3 { 
            width: 18px; height: 18px; top: 250px; left: 100px; 
            animation-delay: 3s; 
            background: radial-gradient(circle, rgba(139, 92, 246, 0.4), rgba(139, 92, 246, 0.1));
            box-shadow: 0 0 18px rgba(139, 92, 246, 0.3);
        }

        @keyframes fadeMove {
            0%, 100% { 
                opacity: 0.2; 
                transform: translateY(0) scale(1); 
            }
            25% { 
                opacity: 0.6; 
                transform: translateY(-20px) scale(1.1); 
            }
            50% { 
                opacity: 0.8; 
                transform: translateY(-40px) scale(1.2); 
            }
            75% { 
                opacity: 0.4; 
                transform: translateY(-20px) scale(0.9); 
            }
        }

        /* Add floating particles */
        .solar-system::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
            animation: centerGlow 3s ease-in-out infinite;
        }

        @keyframes centerGlow {
            0%, 100% { 
                transform: translate(-50%, -50%) scale(1);
                box-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
            }
            50% { 
                transform: translate(-50%, -50%) scale(1.5);
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.9), 0 0 40px rgba(16, 185, 129, 0.3);
            }
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
                    <a href="about.php" class="text-gray-300 hover:text-primary font-medium transition-colors">About</a>
                    
                    <!-- Services Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-300 hover:text-primary font-medium transition-colors flex items-center">
                            Services
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="absolute top-full left-0 mt-3 w-64 dropdown-menu rounded-xl shadow-2xl opacity-0 invisible translate-y-[-10px] group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 z-50">
                            <div class="py-3">
                                <a href="services.php" class="block px-6 py-3 text-gray-300 hover:bg-primary/50 hover:text-primary transition-all">
                                    <i class="fas fa-th-large mr-3 text-lg"></i>All Services
                                </a>
                                <a href="meta-ads.php" class="block px-6 py-3 text-gray-300 hover:bg-primary/50 hover:text-blue-400 transition-all">
                                    <img src="assets/images/Meta Png.png" alt="Meta" class="w-7 h-7 mr-3 inline-block object-contain">Meta Ads
                                </a>
                                <a href="google-ads.php" class="block px-6 py-3 text-gray-300 hover:bg-primary/50 hover:text-red-400 transition-all">
                                    <img src="assets/images/Google Ads Png -.png" alt="Google Ads" class="w-7 h-7 mr-3 inline-block object-contain">Google Ads
                                </a>
                                <a href="youtube-ads.php" class="block px-6 py-3 text-gray-300 hover:bg-primary/50 hover:text-red-500 transition-all">
                                    <img src="assets/images/YouTube Png.png" alt="YouTube" class="w-7 h-7 mr-3 inline-block object-contain">YouTube Ads
                                </a>
                                <a href="website-development.php" class="block px-6 py-3 text-gray-300 hover:bg-primary/50 hover:text-purple-400 transition-all">
                                    <img src="assets/images/Html Png.png" alt="Web Development" class="w-7 h-7 mr-3 inline-block object-contain">Website Development
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="contact.php" class="glow-button px-6 py-2.5 rounded-full font-semibold">
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
                            <a href="meta-ads.php" class="text-gray-400 hover:text-blue-400 block py-1 flex items-center">
                                <img src="assets/images/Meta Png.png" alt="Meta" class="w-6 h-6 mr-3 object-contain">Meta Ads
                            </a>
                            <a href="google-ads.php" class="text-gray-400 hover:text-red-400 block py-1 flex items-center">
                                <img src="assets/images/Google Ads Png -.png" alt="Google Ads" class="w-6 h-6 mr-3 object-contain">Google Ads
                            </a>
                            <a href="youtube-ads.php" class="text-gray-400 hover:text-red-500 block py-1 flex items-center">
                                <img src="assets/images/YouTube Png.png" alt="YouTube" class="w-6 h-6 mr-3 object-contain">YouTube Ads
                            </a>
                            <a href="website-development.php" class="text-gray-400 hover:text-purple-400 block py-1 flex items-center">
                                <img src="assets/images/Html Png.png" alt="Web Development" class="w-6 h-6 mr-3 object-contain">Website Development
                            </a>
                        </div>
                    </div>
                    <a href="about.php" class="text-gray-300 hover:text-primary block px-3 py-2 font-medium">About</a>
                    <a href="services.php" class="text-gray-300 hover:text-primary block px-3 py-2 font-medium">Portfolio</a>
                    <a href="contact.php" class="glow-button block px-3 py-2 font-medium rounded-lg mx-3 mt-2 text-center">Let's Talk</a>
                </div>
            </div>
        </div>
    </nav>