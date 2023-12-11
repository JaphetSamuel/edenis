<?php

namespace App\View\Components;

use App\Models\Textes;
use Illuminate\View\Component;

class ecosystemmodal extends Component
{

    public Textes $textes;
//    public string $titre;
//    public string $contenu;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $tag)
    {
        $this->textes = Textes::query()->where('tag',$tag)->first();



    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ecosystemmodal');
    }
}
