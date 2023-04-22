<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $this->cachePage(5);
        $data['meta_image'] = base_url('images/home/image-3.png');
        $data['og_title'] = "About Us | Bespoke Tailors in Dubai | The Artisans";
        $data['og_description'] = "You might look at us from outside and think we are just another tailoring shop but we invite you to come in and see for yourself. We’re building a team that is innovative and flourishing with ideas.";
        $data['og_image'] = base_url('images/home/image-3.png');
        $data['og_url'] = base_url('about');
        
        $data['meta_title'] = "About Us | Bespoke Tailors in Dubai | The Artisans";
        $data['description'] = "You might look at us from outside and think we are just another tailoring shop but we invite you to come in and see for yourself. We’re building a team that is innovative and flourishing with ideas.";
        $data['canonical'] = '<link rel="canonical" href="'.base_url('about').'">';
        $data['title'] = 'About Us | Bespoke Tailors in Dubai | The Artisans';
        return view('header', $data)
            . view('about')
            . view('footer');
    }
}
