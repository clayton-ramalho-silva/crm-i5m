<?php

namespace App\Http\Livewire\Painel;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.painel.index')
        ->extends('layout.app')
        ->section('content');
    }
}
