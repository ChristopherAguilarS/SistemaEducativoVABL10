<?php

namespace App\Livewire\Financiero\EspecificaNivel1;

use App\Models\EspecificaNivel1;
use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        $especificas = EspecificaNivel1::paginate(10);
        return view('livewire.financiero.especifica-nivel-1.table',['especificas'=>$especificas]);
    }
}
