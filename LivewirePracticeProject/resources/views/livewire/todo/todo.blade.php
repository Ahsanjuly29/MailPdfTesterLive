<div>

    {{-- Create Form  --}}
    @include ('livewire.todo.includes.create')

    {{-- Search Box  --}}
    @include('livewire.todo.includes.search')

    {{-- Table Lists --}}
    <div id="todos-list">
        @foreach ($todolists as $todoItem)
            @include('livewire.todo.includes.table')
        @endforeach

        <div class="my-2">
            {{ $todolists->links() }}
        </div>
    </div>
</div>
