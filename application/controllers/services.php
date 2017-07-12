<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

    public function web_brochure(){
        $data['service_title'] = 'Brochure Website';
        
        $data['service_description'] = "Global Software Solutions offers top quality service when it comes to website design and development. Brochure Websites are our cheapest service that even small-to-medium enterprises can easily afford.";
        
        $this->load->view('service_view', $data);
    }
    
     public function web_migration(){
        $data['service_title'] = 'Website Migration';
        
        $data['service_description'] = "We are experts in migrating data and application to another platform. The pricing depends on how large the target is. Email us now at info@globalsoftwarespecialists.com to get a rough estimate. ";
        
        $this->load->view('service_view', $data);
    }
    
     public function eewa(){
        $data['service_title'] = 'E-Commerce & Enterprise Web Applications';
        
        $data['service_description'] = "GSS offers an unmatched quality service when it comes to website design and development. We are experts in developing a wide range of websites: from the basic and very affordable brochure website to dynamic and interactive web solutions for e-commerce and enterprise web applications serving different purposes via Internet or Intranet. Email us now at info@globalsoftwarespecialists.com to get a rough estimate.";
        
        $this->load->view('service_view', $data);
    }
}