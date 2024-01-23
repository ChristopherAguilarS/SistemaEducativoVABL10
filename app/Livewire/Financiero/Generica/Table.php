<?php

namespace App\Livewire\Financiero\Generica;

use App\Models\Generica;
use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        $genericas = Generica::paginate(10);
        return view('livewire.financiero.generica.table',['genericas'=>$genericas]);
    }
}
