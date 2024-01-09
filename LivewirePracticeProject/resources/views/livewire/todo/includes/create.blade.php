<div class="container content py-6 mx-auto">

    <h1 class="font-bold text-xl text-center text-dark-800 mb-5">Livewire Crud Practice</h1>

    <div class="mx-auto">
        <div id="create-form" class="hover:shadow p-6 bg-white border-blue-500 border-t-2">
            <div class="flex ">
                <h2 class="font-semibold text-lg text-gray-800 mb-5">Create New Todo</h2>
            </div>
            <div>
                <form>
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">*
                            Todo </label>
                        <input type="text" id="name" wire:model="name" placeholder="Todo.."
                            class="bg-gray-100  text-gray-900 text-sm rounded block w-full p-2.5">
                        @error('name')
                            <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                        @enderror

                    </div>
                    <button wire:click.prevent="create"
                        class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Create
                        +</button>

                        @if (session('successMessage'))
                        <span class="text-green-500 text-xs">
                            {{ session('successMessage') }}
                        </span>
                        @elseif (session('errorMessage'))
                        <span class="text-red-500 text-xs">
                            {{ session('errorMessage') }}
                        </span>
                        @endif


                </form>
            </div>
        </div>
    </div>
</div>
