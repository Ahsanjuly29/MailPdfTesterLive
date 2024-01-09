<div>
    <form class="border p-5" wire:submit="createCustomer">
        <label for="title">Title:</label>
        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model="title" type="text" id="title" maxlength="50"/>
        @error('title')
            <p class="text-danger-500 text-xs">
                {{ $message }}
            </p>
        @enderror

        <label for="title">Age:</label>
        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model="age" type="number" id="age" step="0.01" min="0" max="99"/>
        @error('age')
            <p class="text-danger-500 text-xs">
                {{ $message }}
            </p>
        @enderror

        <button class="block rounded px-3 py-1 bg-gray-400 text-white">Save</button>
    </form>

    <table class="border-collapse table-auto text-sm">
        <thead>
            <tr>
                <th
                    class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                    id</th>
                <th
                    class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                    title</th>
                <th
                    class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                    age</th>
            </tr>
        </thead>
        <tbody class="bg-white dark:bg-slate-800">
            @foreach ($allCustomers as $customer)
                <tr>
                    <td
                        class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                        {{ $loop->iteration }}</td>
                    <td
                        class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                        {{ $customer->title }}</td>
                    <td
                        class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                        {{ $customer->age }}</td>
                </tr>
            @endforeach
                <tr>
                    <td colspan="3">
                        {!! $allCustomers->links() !!}
                    </td>
                </tr>
        </tbody>
    </table>
</div>
