
import { Button } from "@/components/ui/button";
import { Award, Clock, Users, Star } from "lucide-react";

const About = () => {
  const stats = [
    { icon: Users, number: "500+", label: "Projects Completed" },
    { icon: Clock, number: "25+", label: "Years Experience" },
    { icon: Award, number: "100%", label: "Compliance Rate" },
    { icon: Star, number: "5.0", label: "Client Rating" }
  ];

  return (
    <section id="about" className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div className="space-y-8">
            <h2 className="text-3xl md:text-4xl font-bold text-gray-900">
              About Architects Certificate
            </h2>
            
            <p className="text-lg text-gray-600 leading-relaxed">
              With over 25 years of experience in the construction industry, we are the UK's 
              leading provider of architectural certification services. Our team of qualified 
              architects and engineers ensures your project meets all regulatory requirements.
            </p>
            
            <p className="text-lg text-gray-600 leading-relaxed">
              We pride ourselves on delivering fast, reliable, and cost-effective solutions 
              for residential and commercial construction projects across the United Kingdom.
            </p>
            
            <Button size="lg" className="bg-blue-900 hover:bg-blue-800">
              Learn More About Us
            </Button>
          </div>
          
          <div className="grid grid-cols-2 gap-6">
            {stats.map((stat, index) => (
              <div key={index} className="text-center p-6 bg-gray-50 rounded-lg">
                <div className="mx-auto w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                  <stat.icon className="h-6 w-6 text-blue-900" />
                </div>
                <div className="text-3xl font-bold text-blue-900 mb-2">{stat.number}</div>
                <div className="text-gray-600 font-medium">{stat.label}</div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;
