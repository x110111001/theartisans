<?php

namespace App\Controllers;

class Services extends BaseController
{

    public function bespoke()
    {
        $this->cachePage(5);
        $data['meta_image'] = base_url('images/bespoke/image-2.png');

        $data['og_title'] = "Bespoke Tailors in Dubai | The Artisans";

        $data['og_description'] = "One of the fundamental ways to define a gentleman is by the suit that he wears. Owning a finely tailored suit brings it’s own advantages into your work life. When worn, it boosts confidence levels and self-esteem to great lengths, far greater than that achieved from suits bought off the shelf. You look great. You feel great.";

        $data['og_image'] = base_url('images/bespoke/image-2.png');

        $data['og_url'] = base_url('services/bespoke');
        
        $data['meta_title'] = "Bespoke Tailors in Dubai | The Artisans";
        $data['description'] = "One of the fundamental ways to define a gentleman is by the suit that he wears. Owning a finely tailored suit brings it’s own advantages into your work life. When worn, it boosts confidence levels and self-esteem to great lengths, far greater than that achieved from suits bought off the shelf. You look great. You feel great.";
        $data['canonical'] = '<link rel="canonical" href="'.base_url('services/bespoke').'">';
        $data['title'] = 'Bespoke Tailors in Dubai | The Artisans';
        return view('header', $data)
            . view('bespoke')
            . view('footer');
    }

    public function custom()
    {
        $this->cachePage(5);
        $data['meta_image'] = base_url('images/custom/image-1.png');
        $data['og_title'] = "Custom Tailoring in Dubai | The Artisans";
        $data['og_description'] = "When it comes to fashion, most women are more particular about dressing then men. By virtue of the values inherent in Artisans, we have a team who believe in the aesthetics of finesse dressmaking, who take great pride in the high quality finishing that they deliver. They strictly adhere to the notion of pattern drafting before cutting the actual piece. We’ve even had our first magazine feature!";
        $data['og_image'] = base_url('images/custom/image-1.png');
        $data['og_url'] = base_url('services/custom');
        
        $data['meta_title'] = "Custom Tailoring in Dubai | The Artisans";
        $data['description'] = "When it comes to fashion, most women are more particular about dressing then men. By virtue of the values inherent in Artisans, we have a team who believe in the aesthetics of finesse dressmaking, who take great pride in the high quality finishing that they deliver. They strictly adhere to the notion of pattern drafting before cutting the actual piece. We’ve even had our first magazine feature!";
        $data['canonical'] = '<link rel="canonical" href="'.base_url('services/custom').'"">';
        $data['title'] = 'Custom Tailoring in Dubai | The Artisans';
        return view('header', $data)
            . view('custom')
            . view('footer');
    }

    public function alterations()
    {
        $this->cachePage(5);
        $data['meta_image'] = base_url('images/alterations/image-1.png');

        $data['og_title'] = "Alteration Services in Dubai  | The Artisans";
        
        $data['og_description'] = "We have on board our team experienced master tailors and tailors, who can provide clever solutions to your most troubled clothing predicaments. We undertake almost any kind of alteration, which others will refuse.";
        
        $data['og_image'] = base_url('images/alterations/image-1.png');
        
        $data['og_url'] = base_url('services/alteration');
        
        $data['meta_title'] = "Alteration Services in Dubai  | The Artisans";

        $data['description'] = "We have on board our team experienced master tailors and tailors, who can provide clever solutions to your most troubled clothing predicaments. We undertake almost any kind of alteration, which others will refuse.";
        
        $data['canonical'] = '<link rel="canonical" href="'.base_url('services/alteration').'">';
        
        $data['title'] = 'Alteration Services in Dubai  | The Artisans';
        return view('header', $data)
            . view('alterations')
            . view('footer');
    }

    public function uniforms()
    {
        $this->cachePage(5);
        $data['meta_image'] = base_url('images/uniforms/image-2.png');
        
        $data['og_title'] = "Uniform Tailoring in Dubai  | The Artisans";

        $data['og_description'] = "At Artisans, we believe that employees need to feel elegant and sophisticated in order to showcase their foremost qualities when liaising with customers.";

        $data['og_image'] = base_url('images/uniforms/image-2.png');
        
        $data['og_url'] = base_url('services/uniforms');
        
        $data['meta_title'] = "Uniform Tailoring in Dubai  | The Artisans";
        
        $data['description'] = "At Artisans, we believe that employees need to feel elegant and sophisticated in order to showcase their foremost qualities when liaising with customers.";
        $data['canonical'] = '<link rel="canonical" href="'.base_url('services/uniforms').'">';
        
        $data['title'] = 'Uniform Tailoring in Dubai  | The Artisans';

        return view('header', $data)
            . view('uniforms')
            . view('footer');
    }

    public function kandura()
    {
        $this->cachePage(5);
        $data['meta_image'] = base_url('images/kandura/image-1.png');
        
        $data['og_title'] = "Emirati Kandura Tailoring in Dubai  | The Artisans";
        
        $data['og_description'] = "At Artisans, we deliver premium quality emirati kandura, kandoorah, kandora to showcase finest Arabic Men clothing.";
        
        $data['og_image'] = base_url('images/kandura/image-1.png');
        
        $data['og_url'] = base_url('services/emirati-kandura');
        
        $data['meta_title'] = "Emirati Kandura Tailoring in Dubai  | The Artisans";
        
        $data['description'] = "At Artisans, we deliver premium quality emirati kandura, kandoorah, kandora to showcase finest Arabic Men clothing.";
        
        $data['canonical'] = '<link rel="canonical" href="'.base_url('services/emirati-kandura').'">';
        
        $data['title'] = 'Emirati Kandura Tailoring in Dubai  | The Artisans';
        return view('header', $data)
            . view('kandura')
            . view('footer');
    }
}
