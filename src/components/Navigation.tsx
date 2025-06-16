
import { Button } from "@/components/ui/button";
import { Menu, X, Phone } from "lucide-react";
import { useState } from "react";

const Navigation = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  return (
    <nav className="bg-white shadow-sm border-b border-gray-200">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center h-16">
          <div className="flex items-center">
            <div className="text-xl font-bold text-blue-600">
              ArchitectsCertificate.co.uk
            </div>
          </div>
          
          {/* Desktop Menu */}
          <div className="hidden md:flex items-center space-x-8">
            <a href="#home" className="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
              Home
            </a>
            <a href="#services" className="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
              Services
            </a>
            <a href="#about" className="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
              About
            </a>
            <a href="#contact" className="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors">
              Contact
            </a>
            <div className="flex items-center space-x-2 text-blue-600 font-medium">
              <Phone className="h-4 w-4" />
              <span>020 3633 0802</span>
            </div>
            <Button className="bg-blue-600 hover:bg-blue-700">
              Get Quote
            </Button>
          </div>

          {/* Mobile menu button */}
          <div className="md:hidden">
            <Button
              variant="ghost"
              size="icon"
              onClick={() => setIsMenuOpen(!isMenuOpen)}
            >
              {isMenuOpen ? <X className="h-6 w-6" /> : <Menu className="h-6 w-6" />}
            </Button>
          </div>
        </div>
      </div>

      {/* Mobile Menu */}
      {isMenuOpen && (
        <div className="md:hidden">
          <div className="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
            <a href="#home" className="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">
              Home
            </a>
            <a href="#services" className="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">
              Services
            </a>
            <a href="#about" className="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">
              About
            </a>
            <a href="#contact" className="block px-3 py-2 text-base font-medium text-gray-700 hover:text-blue-600">
              Contact
            </a>
            <div className="px-3 py-2 text-blue-600 font-medium">
              Call: 020 3633 0802
            </div>
            <Button className="w-full mt-2 bg-blue-600 hover:bg-blue-700">
              Get Quote
            </Button>
          </div>
        </div>
      )}
    </nav>
  );
};

export default Navigation;
