
import { Button } from "@/components/ui/button";
import { Award, Clock, Users, CheckCircle } from "lucide-react";

const About = () => {
  const stats = [
    { icon: Users, number: "1000+", label: "Projects Completed" },
    { icon: Clock, number: "10+", label: "Years Experience" },
    { icon: Award, number: "100%", label: "RIBA Qualified" },
    { icon: CheckCircle, number: "48hr", label: "Fast Track Service" }
  ];

  return (
    <section id="about" className="py-20 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div className="space-y-8">
            <h2 className="text-3xl md:text-4xl font-bold text-gray-900">
              About Architect's Certificate
            </h2>
            
            <p className="text-lg text-gray-600 leading-relaxed">
              We are a team of RIBA Chartered Architects with over 10 years of experience 
              in providing building regulations services across the UK. Our focus is on 
              delivering fast, reliable, and cost-effective solutions.
            </p>
            
            <p className="text-lg text-gray-600 leading-relaxed">
              Whether you need an Architect's Certificate, structural calculations, or 
              complete building regulations applications, we have the expertise to help 
              your project succeed.
            </p>
            
            <div className="space-y-3">
              <div className="flex items-center space-x-3">
                <CheckCircle className="h-5 w-5 text-green-500" />
                <span className="text-gray-700">RIBA Chartered Architects</span>
              </div>
              <div className="flex items-center space-x-3">
                <CheckCircle className="h-5 w-5 text-green-500" />
                <span className="text-gray-700">Professional indemnity insurance</span>
              </div>
              <div className="flex items-center space-x-3">
                <CheckCircle className="h-5 w-5 text-green-500" />
                <span className="text-gray-700">Fixed price quotations</span>
              </div>
            </div>
            
            <Button size="lg" className="bg-blue-600 hover:bg-blue-700">
              Get Your Quote Today
            </Button>
          </div>
          
          <div className="grid grid-cols-2 gap-6">
            {stats.map((stat, index) => (
              <div key={index} className="text-center p-6 bg-white rounded-lg shadow-md">
                <div className="mx-auto w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                  <stat.icon className="h-6 w-6 text-blue-600" />
                </div>
                <div className="text-3xl font-bold text-blue-600 mb-2">{stat.number}</div>
                <div className="text-gray-600 font-medium text-sm">{stat.label}</div>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;
