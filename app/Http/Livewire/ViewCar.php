<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class ViewCar extends Component
{
    public $id_car;

    public function mount($id){
        $this->id_car = Car::where('id',$id)->first();
    }

    public function render()
    {
        return view('livewire.view-car',[
            'car'=>$this->id_car,
            'othercars'=>Car::where('id','!=',$this->id_car->id)->where('id_category',$this->id_car->id_category)->get()
        ])->layout('layouts.app');
    }
}
