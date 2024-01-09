<?php

namespace App\Livewire\Customer;

use App\Models\Customers;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Customer extends Component
{

    use WithPagination;

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

        $this->reset();
    }

    public function render()
    {
        return view('livewire.customer.customer', [
            'allCustomers' => Customers::paginate(3),
        ]);
    }
}
