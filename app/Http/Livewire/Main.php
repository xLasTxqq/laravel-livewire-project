<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Category;
use App\Models\Request;
use Livewire\Component;

class Main extends Component 
{
    public $category=1;
    public $addcategory;

    public $name;
    public $phone;

    public function change($id){
        $this->category=$id;
    }

    public function addcategory(){
        Category::create([
            'name'=>$this->addcategory
        ]);
        $this->addcategory='';
    }

    public function deletecategory($id){
        Category::where('id',$id)->delete();
    }

    public function deletecar($id){
        Car::where('id',$id)->delete();
    }

    public function addrequest(){
        Request::create([
            'name'=>$this->name,
            'phone'=>$this->phone
        ]);
        $this->name='';
        $this->phone='';
    }

    public function render()
    {
        return view('livewire.main',[
            'categories'=>Category::all(),
            'cars'=>Car::where('id_category',$this->category)->get()
        ])->layout('layouts.app');
    }
}
