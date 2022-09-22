<x-slot name="header">
    <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Главная тут контакты') }}
    </h2> -->
    <div id="contacts" class="flex justify-evenly items-center w-full">
        <div class="w-max-1/4"><img class="w-max-1/4" src="https://acavto.ru/assets/templates/v1/img/logo.svg"></div>
        <div>
            <a target="_blank" class="flex items-center justify-center" href="https://t.me/acavto">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4BB0FE" class="bi bi-telegram mr-2" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
                </svg>
                {{ __('Телеграм') }}
            </a>
        </div>
        <div>
            <a class="flex items-center justify-center" href="tel: +78002007476">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4BB0FE" class="bi bi-telephone-fill mr-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
                {{ __('Телефон') }}
            </a>
        </div>
        <div>
            <a target="_blank" class="flex items-center justify-center" href="https://www.youtube.com/channel/UCXMWTK2FgE-1gqH3nlGqlmw">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4BB0FE" class="bi bi-youtube mr-2" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                </svg>
                {{ __('Ютуб') }}
            </a>
        </div>
    </div>
</x-slot>
<div class="mb-6">
    <div class="w-max-full mt-6 p-2 sm:p-24 mx-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="flex flex-col min-w-fit w-full justify-center">
            <h1 class="font-bold text-5xl text-center">{{$car->name}}</h1>
            <image class="2xl:max-w-6xl xl:max-w-6xl" src="{{route('main').'/storage/images/'.$car->image}}">
                <h1 class="font-bold text-3xl py-2">Описание:</h1>
                <h1 class="py-2 max-w-3x l">{{$car->description}}</h1>
                <h1 class="font-bold text-3xl py-2">Технические характеристики:</h1>
                <div class="min-w-fit max-w-3xl flex justify-between items-center">
                    <h1>Модель </h1><span class="mx-2 border-b-2 border-black-200 border-dotted w-full text-black underline-offset-1"></span>
                    <h1> {{$car->model}}</h1>
                </div>
                <div class="min-w-fit max-w-3xl flex justify-between items-center">
                    <h1>Колесная формула </h1><span class="mx-2 border-b-2 border-black-200 w-full border-dotted text-black underline-offset-1"></span>
                    <h1> {{$car->wheels}}</h1>
                </div>
                <div class="min-w-fit max-w-3xl flex justify-between items-center">
                    <h1>Мощность двигателя </h1><span class="mx-2 border-b-2 border-black-200 w-full border-dotted text-black underline-offset-1"></span>
                    <h1> {{$car->power}}</h1>
                </div>
                <div class="min-w-fit max-w-3xl flex justify-between items-center">
                    <h1>Модель двигателя </h1><span class="mx-2 border-b-2 border-black-200 w-full border-dotted text-black underline-offset-1"></span>
                    <h1> {{$car->engine}}</h1>
                </div>
                <div class="min-w-fit max-w-3xl flex justify-between items-center">
                    <h1>Модель КПП </h1><span class="mx-2 border-b-2 border-black-200 w-full border-dotted text-black underline-offset-1"></span>
                    <h1> {{$car->transmission}}</h1>
                </div>
                <div class="min-w-fit max-w-3xl flex justify-between items-center">
                    <h1>Шины </h1><span class="mx-2 border-b-2 border-black-200 w-full border-dotted text-black underline-offset-1"></span>
                    <h1> {{$car->tires}}</h1>
                </div>
                <div class="min-w-fit max-w-3xl flex justify-between items-center">
                    <h1>Бак </h1><span class="mx-2 border-b-2 border-black-200 w-full border-dotted text-black underline-offset-1"></span>
                    <h1> {{$car->tank}}</h1>
                </div>
        </div>



    </div>
    <div class="w-max-full mt-6 p-2 sm:p-24 mx-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <h1 class="font-bold text-3xl my-4 text-center">Другие машины из этой категории</h1>
        <div class="w-full overflow-y-scroll 2xl:grid-cols-4 xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-2 max-h-screen grid gap-4">
            @foreach($othercars as $car)
            <a href="{{route('viewcar',['id'=>$car->id])}}" class="flex flex-col items-center rounded-lg bg-gray-100 justify-center">
                <h1>{{$car->name}}</h1>
                <image src="{{route('main').'/storage/images/'.$car->image}}">
                    @auth
                    <x-button wire:click="deletecar({{$car->id}})" class="w-fit ml-3">
                        {{ __('Удалить') }}
                    </x-button>
                    @endauth
                    <!-- <h1>{{$car->image}}</h1> -->
            </a>
            @endforeach
        </div>

    </div>
</div>