<?php

namespace App\Http\Livewire;

use App\Models\Request;
use Livewire\Component;

class Requests extends Component
{
    public function delete($id){
        Request::where('id',$id)->delete();
    }

    public function render()
    {
        return view('livewire.requests',['requests'=>Request::all()])->layout('layouts.app'); 
    }
}
