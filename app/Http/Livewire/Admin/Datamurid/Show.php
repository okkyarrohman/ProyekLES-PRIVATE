<?php

namespace App\Http\Livewire\Admin\Datamurid;

use Livewire\Component;
use App\Models\Murid;

class Show extends Component
{

    public $name;
    public $email;
    public $phone;


    public function inputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
    }

    public function store()
    {
        $validateData = $this->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'phone'=> 'required',

        ]);

        Murid::create($validateData);
        session()->flash('message','Data Berhasil Disimpan');
        $this->inputFields();
        $this->emit('MuridAdded');
    }
    public function render()
    {

        $Murids = Murid::orderBy('id','DESC')->get();
        return view('livewire.admin.datamurid.show', ['show'=>$Murids]);
    }
}
