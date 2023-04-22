<?php

namespace App\Controllers;

class Login extends BaseController
{
    
    public function index()
    {
        $data['meta_image'] = base_url('images/home/image-3.png');
        $data['og_title'] = "About | Tailoring Services in Dubai - The Artisans Dubai";
        $data['og_description'] = "Custom tailoring is offered by theartisans, a top men's clothing retailer in Dubai. Theartisans, a Dubai tailor, is a one-stop shop for all clothing needs and provides fabrics of the top class.";
        $data['og_image'] = base_url('images/home/image-1.png');
        $data['og_url'] = base_url('services');
        
        $data['meta_title'] = "About | Tailoring Services in Dubai - The Artisans Dubai";
        $data['description'] = "Custom tailoring is offered by theartisans, a top men's clothing retailer in Dubai. Theartisans, a Dubai tailor, is a one-stop shop for all clothing needs and provides fabrics of the top class.";
        $data['canonical'] = '';
        $data['title'] = 'About | Tailoring Services in Dubai - The Artisans Dubai';
        return view('header', $data)
            . view('about')
            . view('footer');
    }
}
