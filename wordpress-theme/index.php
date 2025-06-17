<?php
/**
 * Template Name: Architects Certificate Homepage
 * Description: Professional Architect's Certificate website theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="Professional Architect's Certificate services for building regulations compliance">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <?php wp_head(); ?>
    
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
        }
    </style>
</head>

<body <?php body_class(); ?>>

<!-- Navigation -->
<nav class="bg-white shadow-sm border-b border-gray-200 fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-3">
                <img 
                    src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=400&h=400&fit=crop&crop=center" 
                    alt="Architects Certificate Logo" 
                    class="h-10 w-auto"
                />
                <div class="text-xl font-bold text-blue-600">
                    ArchitectsCertificates.com
                </div>
            </div>
            
            <div class="hidden md:flex items-center space-x-8">
                <a href="#home" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Home</a>
                <a href="#services" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Services</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">About</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">Contact</a>
                <div class="flex items-center space-x-2 text-blue-600 font-medium">
                    <span>📞</span>
                    <span>020 3633 0802</span>
                </div>
                <a href="#quote" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition-colors">Get Quote</a>
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero-gradient py-20 pt-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                    Architect's Certificate
                    <span class="text-blue-600 block">for Building Regulations</span>
                </h1>
                
                <p class="text-lg text-gray-600 leading-relaxed">
                    Fast, reliable and cost-effective Architect's Certificates for Building Regulations. 
                    We provide professional certification services for residential and commercial projects across the UK.
                </p>
                
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                        <span class="text-green-500">✓</span>
                        <span class="text-gray-700">Quick turnaround times</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-green-500">✓</span>
                        <span class="text-gray-700">Competitive fixed prices</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-green-500">✓</span>
                        <span class="text-gray-700">Experienced qualified architects</span>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#quote" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-md text-center font-medium transition-colors">
                        Get Quote Online
                    </a>
                    <a href="tel:02036330802" class="border border-blue-600 text-blue-600 hover:bg-blue-50 px-8 py-3 rounded-md text-center font-medium transition-colors">
                        📞 Call Us: 020 3633 0802
                    </a>
                </div>
            </div>
            
            <div class="relative">
                <div class="bg-white border border-gray-200 rounded-lg p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Why Choose Our Service?</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-blue-600 rounded-full mt-2"></div>
                            <span class="text-gray-700">Over 10 years experience in building regulations</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-blue-600 rounded-full mt-2"></div>
                            <span class="text-gray-700">RIBA Chartered Architects</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-blue-600 rounded-full mt-2"></div>
                            <span class="text-gray-700">Professional indemnity insurance</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-blue-600 rounded-full mt-2"></div>
                            <span class="text-gray-700">Fast and efficient service</span>
                        </div>
                    </div>
                    
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600">From £295</div>
                            <div class="text-sm text-gray-600">for standard certificates</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Professional architectural services for building regulations compliance. 
                We make the process simple and straightforward.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center space-x-4 mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <span class="text-blue-600 text-xl">📄</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Architect's Certificate</h3>
                        <div class="text-blue-600 font-semibold">From £295</div>
                    </div>
                </div>
                <p class="text-gray-600">
                    Professional certification for building regulations compliance, ensuring your project meets all required standards.
                </p>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center space-x-4 mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <span class="text-blue-600 text-xl">🏗️</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Structural Calculations</h3>
                        <div class="text-blue-600 font-semibold">From £450</div>
                    </div>
                </div>
                <p class="text-gray-600">
                    Comprehensive structural analysis and calculations for extensions, loft conversions, and new builds.
                </p>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center space-x-4 mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <span class="text-blue-600 text-xl">🛡️</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Building Regulations</h3>
                        <div class="text-blue-600 font-semibold">From £795</div>
                    </div>
                </div>
                <p class="text-gray-600">
                    Complete building regulations application service including drawings, calculations, and submissions.
                </p>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition-shadow">
                <div class="flex items-center space-x-4 mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <span class="text-blue-600 text-xl">⚡</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Fast Track Service</h3>
                        <div class="text-blue-600 font-semibold">From £395</div>
                    </div>
                </div>
                <p class="text-gray-600">
                    Express service for urgent projects with guaranteed 48-hour turnaround for standard certificates.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">About Architect's Certificate</h2>
                
                <p class="text-lg text-gray-600 leading-relaxed">
                    We are a team of RIBA Chartered Architects with over 10 years of experience 
                    in providing building regulations services across the UK. Our focus is on 
                    delivering fast, reliable, and cost-effective solutions.
                </p>
                
                <p class="text-lg text-gray-600 leading-relaxed">
                    Whether you need an Architect's Certificate, structural calculations, or 
                    complete building regulations applications, we have the expertise to help 
                    your project succeed.
                </p>
                
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                        <span class="text-green-500">✓</span>
                        <span class="text-gray-700">RIBA Chartered Architects</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-green-500">✓</span>
                        <span class="text-gray-700">Professional indemnity insurance</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-green-500">✓</span>
                        <span class="text-gray-700">Fixed price quotations</span>
                    </div>
                </div>
                
                <a href="#quote" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-md font-medium transition-colors">
                    Get Your Quote Today
                </a>
            </div>
            
            <div class="grid grid-cols-2 gap-6">
                <div class="text-center p-6 bg-white rounded-lg shadow-md">
                    <div class="mx-auto w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-blue-600 text-xl">👥</span>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 mb-2">1000+</div>
                    <div class="text-gray-600 font-medium text-sm">Projects Completed</div>
                </div>
                
                <div class="text-center p-6 bg-white rounded-lg shadow-md">
                    <div class="mx-auto w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-blue-600 text-xl">🕒</span>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 mb-2">10+</div>
                    <div class="text-gray-600 font-medium text-sm">Years Experience</div>
                </div>
                
                <div class="text-center p-6 bg-white rounded-lg shadow-md">
                    <div class="mx-auto w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-blue-600 text-xl">🏆</span>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 mb-2">100%</div>
                    <div class="text-gray-600 font-medium text-sm">RIBA Qualified</div>
                </div>
                
                <div class="text-center p-6 bg-white rounded-lg shadow-md">
                    <div class="mx-auto w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <span class="text-blue-600 text-xl">⚡</span>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 mb-2">48hr</div>
                    <div class="text-gray-600 font-medium text-sm">Fast Track Service</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Get Your Quote Today</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to get started? Contact us for a free, no-obligation quote for your project.
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="space-y-8">
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-blue-600 text-xl">📞</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Phone</h3>
                            <p class="text-gray-600">Call us directly for immediate assistance</p>
                            <a href="tel:02036330802" class="text-blue-600 font-semibold hover:underline">020 3633 0802</a>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-blue-600 text-xl">✉️</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Email</h3>
                            <p class="text-gray-600">Send us your project details</p>
                            <a href="mailto:info@architectscertificates.com" class="text-blue-600 font-semibold hover:underline">info@architectscertificates.com</a>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-blue-600 text-xl">🕒</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Business Hours</h3>
                            <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday - Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-50 p-8 rounded-lg">
                <h3 class="text-xl font-bold text-gray-900 mb-6">Request a Quote</h3>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                        <input type="tel" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Service Required</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option>Architect's Certificate</option>
                            <option>Structural Calculations</option>
                            <option>Building Regulations</option>
                            <option>Fast Track Service</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Project Details</label>
                        <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Please describe your project..."></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-md font-medium transition-colors">
                        Submit Quote Request
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-2">
                <h3 class="text-2xl font-bold mb-4">ArchitectsCertificates.com</h3>
                <p class="text-gray-300 mb-6 max-w-md">
                    Professional Architect's Certificate services for building regulations. 
                    Fast, reliable, and cost-effective solutions from RIBA Chartered Architects.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">📘</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">🐦</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">💼</a>
                </div>
            </div>
            
            <div>
                <h4 class="text-lg font-semibold mb-4">Services</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Architect's Certificate</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Structural Calculations</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Building Regulations</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Fast Track Service</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="text-lg font-semibold mb-4">Contact</h4>
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                        <span class="text-gray-400">📞</span>
                        <span class="text-gray-300">020 3633 0802</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="text-gray-400">✉️</span>
                        <span class="text-gray-300">info@architectscertificates.com</span>
                    </div>
                </div>
                
                <div class="mt-6">
                    <h5 class="font-semibold mb-2">Business Hours</h5>
                    <p class="text-gray-300 text-sm">
                        Monday - Friday: 9:00 AM - 6:00 PM<br>
                        Saturday - Sunday: Closed
                    </p>
                </div>
            </div>
        </div>
        
        <div class="border-t border-gray-800 mt-8 pt-8 text-center">
            <p class="text-gray-400">
                © 2024 ArchitectsCertificates.com. All rights reserved. | Privacy Policy | Terms & Conditions
            </p>
        </div>
    </div>
</footer>

<script>
// Smooth scrolling for navigation links
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

<?php wp_footer(); ?>
</body>
</html>
