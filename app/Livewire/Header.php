<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.header');
    }

    public function home()
    {
        $this->redirectRoute('sarda.index');
    }

    public function portfolio()
    {
        $this->redirectRoute('sarda.portfolio');
    }

    public function contact()
    {
        $this->redirectRoute('sarda.contact');
    }

    public function about()
    {
        $this->redirectRoute('sarda.about');
    }

    public function leadership()
    {
        $this->redirectRoute('sarda.leadership');
    }

    public function news()
    {
        $this->redirectRoute('sarda.news');
    }
}
