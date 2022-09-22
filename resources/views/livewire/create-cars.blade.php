<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Заявки') }}
    </h2>
</x-slot>
<div class="w-max-full mt-6 px-6 py-4 mx-6 bg-white shadow-md overflow-hidden sm:rounded-lg">

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form wire:submit.prevent="create">
        <div>
            <x-label for="name" :value="__('Название')" />
            <x-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>

        <div class="mt-4">
            <x-label for="image" :value="__('Картинка')" />
            <x-input wire:model="image" id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required />
        </div>

        <div class="mt-4">
            <x-label for="category" :value="__('Категория')" />
            <select id="category" wire:model="category" class="block mt-1 w-full"  name="category" :value="old('category')" required>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                <option value="0" hidden>Выберите категорию</option>
            </select>
        </div>

        <div class="mt-4">
            <x-label for="description" :value="__('Описание')" />
            <x-input wire:model="description" id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />
        </div>
        <div class="mt-4">
            <x-label for="model" :value="__('Модель')" />
            <x-input wire:model="model" id="model" class="block mt-1 w-full" type="text" name="model" :value="old('model')" required  />
        </div>
        <div class="mt-4">
            <x-label for="wheels" :value="__('Колесная формула')" />
            <x-input wire:model="wheels" id="wheels" class="block mt-1 w-full" type="text" name="wheels" :value="old('wheels')" required  />
        </div>
        <div class="mt-4">
            <x-label for="power" :value="__('Мощность')" />
            <x-input wire:model="power" id="power" class="block mt-1 w-full" type="text" name="power" :value="old('power')" required />
        </div>
        <div class="mt-4">
            <x-label for="engine" :value="__('Модель двигателя')" />
            <x-input wire:model="engine" id="engine" class="block mt-1 w-full" type="text" name="engine" :value="old('engine')" required />
        </div>
        <div class="mt-4">
            <x-label for="transmission" :value="__('Модель КПП')" />
            <x-input wire:model="transmission" id="transmission" class="block mt-1 w-full" type="text" name="transmission" :value="old('transmission')" required />
        </div>
        <div class="mt-4">
            <x-label for="tires" :value="__('Шины')" />
            <x-input wire:model="tires" id="tires" class="block mt-1 w-full" type="text" name="tires" :value="old('tires')" required />
        </div>
        <div class="mt-4">
            <x-label for="tank" :value="__('Бак')" />
            <x-input wire:model="tank" id="tank" class="block mt-1 w-full" type="text" name="tank" :value="old('tank')" required />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-3">
                {{ __('Создать') }}
            </x-button>
        </div>
    </form>
</div>