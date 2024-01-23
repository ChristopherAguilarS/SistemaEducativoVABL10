<?php

namespace App\Livewire\Contable\Genericas;

use App\Models\Generica;
use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        $genericas = Generica::paginate(10);
        return view('livewire.contable.genericas.table',['genericas'=>$genericas]);
    }
}
