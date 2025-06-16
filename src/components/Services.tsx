
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { FileText, Shield, Building, Zap } from "lucide-react";

const Services = () => {
  const services = [
    {
      icon: FileText,
      title: "Architect's Certificate",
      description: "Professional certification for building regulations compliance, ensuring your project meets all required standards.",
      price: "From £295"
    },
    {
      icon: Building,
      title: "Structural Calculations",
      description: "Comprehensive structural analysis and calculations for extensions, loft conversions, and new builds.",
      price: "From £450"
    },
    {
      icon: Shield,
      title: "Building Regulations",
      description: "Complete building regulations application service including drawings, calculations, and submissions.",
      price: "From £795"
    },
    {
      icon: Zap,
      title: "Fast Track Service",
      description: "Express service for urgent projects with guaranteed 48-hour turnaround for standard certificates.",
      price: "From £395"
    }
  ];

  return (
    <section id="services" className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
            Our Services
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Professional architectural services for building regulations compliance. 
            We make the process simple and straightforward.
          </p>
        </div>
        
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
          {services.map((service, index) => (
            <Card key={index} className="hover:shadow-lg transition-shadow duration-300 border border-gray-200">
              <CardHeader>
                <div className="flex items-center space-x-4">
                  <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <service.icon className="h-6 w-6 text-blue-600" />
                  </div>
                  <div>
                    <CardTitle className="text-lg font-bold text-gray-900">
                      {service.title}
                    </CardTitle>
                    <div className="text-blue-600 font-semibold">{service.price}</div>
                  </div>
                </div>
              </CardHeader>
              <CardContent>
                <CardDescription className="text-gray-600 text-base">
                  {service.description}
                </CardDescription>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Services;
