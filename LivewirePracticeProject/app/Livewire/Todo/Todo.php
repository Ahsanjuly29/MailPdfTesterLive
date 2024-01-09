<?php

namespace App\Livewire\Todo;

use App\Models\TodoList\TodoList;
use Livewire\Component;
use Livewire\WithPagination;

class Todo extends Component
{

    use WithPagination;
    public $name, $search;

    public function create()
    {
        $validated = $this->validate([
            'name' => 'required|min:5|max:50|unique:todo_lists,name'
        ]);


        try {
            TodoList::create($validated);
            $this->reset();
            session()->flash('successMessage', 'Created successfully');

        } catch (\Exception $e) {
            session()->flash('errorMessage', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.todo.todo', [
            'createdName' => $this->name??'',
            'todolists' => TodoList::latest()->where('name', 'like', "%{$this->search}%")->paginate(5),
        ]);
    }
}
