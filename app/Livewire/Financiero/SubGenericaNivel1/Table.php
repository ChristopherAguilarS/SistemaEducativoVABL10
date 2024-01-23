<?php

namespace App\Livewire\Financiero\SubGenericaNivel1;

use App\Models\SubGenericaNivel1;
use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        $subgenericas = SubGenericaNivel1::paginate(10);
        return view('livewire.financiero.sub-generica-nivel-1.table',['subgenericas'=>$subgenericas]);
    }
}
