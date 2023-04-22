<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->cachePage(5);
        $data['meta_image'] = base_url('images/uniforms/image-1.png');
        $data['og_title'] = "Bespoke Tailors in Dubai | The Artisans";
        $data['og_description'] = "We believe in transpiring your ideas into tailor-fit clothes. A one-stop shop to your sartorial needs.";
        $data['og_image'] = base_url('images/uniforms/image-1.png');
        $data['og_url'] = base_url();
        
        $data['meta_title'] = "Bespoke Tailors in Dubai | The Artisans";
        $data['description'] = "We believe in transpiring your ideas into tailor-fit clothes. A one-stop shop to your sartorial needs.";
        $data['title'] = 'Bespoke Tailors in Dubai | The Artisans';
        $data['canonical'] = '';
        return view('header', $data)
            . view('home')
            . view('footer');
    }

    public function subscribe()
    {
        $input = $this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email Address is required',
                    'valid_email' => 'Invalid Email Address',
                ],
            ],
        ]);

        if (!$input) {

            $session = session();

            $uri = $this->request->getPost('uri');

            $session->setTempdata('subscribe_error', 'Invalid Email Address.', 20);
            
            return redirect($uri);

        } else {

            $session = session();

            $session->setTempdata('subscribe_success', 30);

            return redirect()->to('success');

        }
    }

    public function success()
    {
        if(session()->getTempdata('subscribe_success'))
        {

            unset($_SESSION['subscribe_error']);
            
            $data['meta_image'] = base_url('images/home/image-1.png');
            $data['og_title'] = "Bespoke Tailors in Dubai | The Artisans";
            $data['og_description'] = "Custom tailoring is offered by theartisans, a top men's clothing retailer in Dubai. Theartisans, a Dubai tailor, is a one-stop shop for all clothing needs and provides fabrics of the top class.";
            $data['og_image'] = base_url('images/home/image-1.png');
            $data['og_url'] = base_url();
            
            $data['meta_title'] = "Bespoke Tailors in Dubai | The Artisans";
            $data['description'] = "Custom tailoring is offered by theartisans, a top men's clothing retailer in Dubai. Theartisans, a Dubai tailor, is a one-stop shop for all clothing needs and provides fabrics of the top class.";
            $data['title'] = 'Thank You for subscribing | Bespoke Tailors in Dubai | The Artisans';
            $data['canonical'] = '';
            return view('header', $data)
                . view('success')
                . view('footer');
            

        } else {

            return redirect()->to('home');

        } 
    }
}
