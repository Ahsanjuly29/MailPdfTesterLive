<?php

namespace App\Livewire\Customer;

use App\Models\Customers;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Customer extends Component
{
    #[Rule('required|min:2|max:50')]
    public $title;

    #[Rule('required|numeric|min:1|max:99')]
    public $age;


    public function createCustomer()
    {
        $this->validate();
        Customers::create([
            "title" => $this->title,
            "age" => $this->age,
        ]);
    }

    public function render()
    {
        return view('livewire.clicker', [
            'allCustomers' => Customers::all(),
        ]);
    }
}
