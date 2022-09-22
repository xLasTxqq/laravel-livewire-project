<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
class CreateCars extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $category = 0;
    public $description;
    public $model;
    public $wheels;
    public $power;
    public $engine;
    public $transmission;
    public $tires;
    public $tank;


    protected $rules = [
        'name' => 'required|string',
        'description' => 'required|string',
        'image'=>'required|image|mimes:jpg,jpeg,bmp,png|max:10000'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function create(){
        $this->validate();
        $name = Str::random(16).'.'.$this->image->extension();
        $this->image->storePubliclyAs('images', $name, 'public');

        Car::create([
            'name'=>$this->tank,
            'id_category'=>$this->category,
            'image'=>$name,
            'description'=>$this->description,
            'model'=>$this->model,
            'wheels'=>$this->wheels,
            'power'=>$this->power,
            'engine'=>$this->engine,
            'transmission'=>$this->transmission,
            'tires'=>$this->tires,
            'tank'=>$this->tank
        ]);
        $this->name='';
        $this->image='';
        $this->category = 0;
        $this->description='';
        $this->model='';
        $this->wheels='';
        $this->power='';
        $this->engine='';
        $this->transmission='';
        $this->tires='';
        $this->tank='';
    }

    public function render()
    {
        return view('livewire.create-cars',[
            'categories'=>Category::all()
        ]);
    }
}
