
import { Button } from "@/components/ui/button";
import { CheckCircle, Phone } from "lucide-react";

const Hero = () => {
  return (
    <section id="home" className="bg-gradient-to-br from-slate-50 to-white py-16">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div className="space-y-6">
            <h1 className="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
              Architect's Certificate
              <span className="text-blue-600 block">for Building Regulations</span>
            </h1>
            
            <p className="text-lg text-gray-600 leading-relaxed">
              Fast, reliable and cost-effective Architect's Certificates for Building Regulations. 
              We provide professional certification services for residential and commercial projects across the UK.
            </p>
            
            <div className="space-y-3">
              <div className="flex items-center space-x-3">
                <CheckCircle className="h-5 w-5 text-green-500" />
                <span className="text-gray-700">Quick turnaround times</span>
              </div>
              <div className="flex items-center space-x-3">
                <CheckCircle className="h-5 w-5 text-green-500" />
                <span className="text-gray-700">Competitive fixed prices</span>
              </div>
              <div className="flex items-center space-x-3">
                <CheckCircle className="h-5 w-5 text-green-500" />
                <span className="text-gray-700">Experienced qualified architects</span>
              </div>
            </div>
            
            <div className="flex flex-col sm:flex-row gap-4">
              <Button size="lg" className="bg-blue-600 hover:bg-blue-700 px-8">
                Get Quote Online
              </Button>
              <Button size="lg" variant="outline" className="border-blue-600 text-blue-600 hover:bg-blue-50 flex items-center gap-2">
                <Phone className="h-4 w-4" />
                Call Us: 020 3633 0802
              </Button>
            </div>
          </div>
          
          <div className="relative">
            <div className="bg-white border border-gray-200 rounded-lg p-8 shadow-lg">
              <h3 className="text-xl font-bold text-gray-900 mb-6">Why Choose Our Service?</h3>
              <div className="space-y-4">
                <div className="flex items-start space-x-3">
                  <div className="w-2 h-2 bg-blue-600 rounded-full mt-2"></div>
                  <span className="text-gray-700">Over 10 years experience in building regulations</span>
                </div>
                <div className="flex items-start space-x-3">
                  <div className="w-2 h-2 bg-blue-600 rounded-full mt-2"></div>
                  <span className="text-gray-700">RIBA Chartered Architects</span>
                </div>
                <div className="flex items-start space-x-3">
                  <div className="w-2 h-2 bg-blue-600 rounded-full mt-2"></div>
                  <span className="text-gray-700">Professional indemnity insurance</span>
                </div>
                <div className="flex items-start space-x-3">
                  <div className="w-2 h-2 bg-blue-600 rounded-full mt-2"></div>
                  <span className="text-gray-700">Fast and efficient service</span>
                </div>
              </div>
              
              <div className="mt-6 pt-6 border-t border-gray-200">
                <div className="text-center">
                  <div className="text-2xl font-bold text-blue-600">From £295</div>
                  <div className="text-sm text-gray-600">for standard certificates</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
