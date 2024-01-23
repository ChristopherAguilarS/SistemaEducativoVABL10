<?php

namespace App\Livewire\Financiero\TipoTransaccion;

use App\Models\TipoTransaccion;
use Livewire\Component;

class Table extends Component
{
    public function render()
    {
        $tipoTransacciones = TipoTransaccion::paginate(10);
        return view('livewire.financiero.tipo-transaccion.table',['tipoTransacciones'=>$tipoTransacciones]);
    }
}
