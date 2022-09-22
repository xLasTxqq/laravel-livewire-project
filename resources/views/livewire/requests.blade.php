<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Заявки') }}
    </h2>
</x-slot>

<div class="w-max-full mt-6 px-6 py-4 mx-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
    <table class="table-auto w-full text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $request)
            <tr>
                <td>{{$request->id}}</td>
                <td>{{$request->name}}</td>
                <td>{{$request->phone}}</td>
                <td><x-button wire:click="delete({{$request->id}})" class="ml-3">
                {{ __('Удалить заявку') }}
            </x-button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>