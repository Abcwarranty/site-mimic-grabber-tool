
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { FileText, Shield, Building, Users } from "lucide-react";

const Services = () => {
  const services = [
    {
      icon: FileText,
      title: "Building Regulations",
      description: "Complete building regulations applications and approvals for residential and commercial projects."
    },
    {
      icon: Shield,
      title: "Safety Certificates",
      description: "Comprehensive safety assessments and certification for existing and new constructions."
    },
    {
      icon: Building,
      title: "Structural Reports",
      description: "Detailed structural analysis and reporting for renovation, extension, and new build projects."
    },
    {
      icon: Users,
      title: "Planning Applications",
      description: "Professional planning application services to navigate local authority requirements."
    }
  ];

  return (
    <section id="services" className="py-20 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
            Our Professional Services
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            We provide comprehensive architectural certification services to ensure your project 
            meets all regulatory requirements and safety standards.
          </p>
        </div>
        
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {services.map((service, index) => (
            <Card key={index} className="text-center hover:shadow-lg transition-shadow duration-300">
              <CardHeader>
                <div className="mx-auto w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                  <service.icon className="h-8 w-8 text-blue-900" />
                </div>
                <CardTitle className="text-xl font-bold text-gray-900">
                  {service.title}
                </CardTitle>
              </CardHeader>
              <CardContent>
                <CardDescription className="text-gray-600">
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
