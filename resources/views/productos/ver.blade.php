<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Movimiento') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
    <x-jet-label for="id" value="{{ __('Id')}}" />
    <x-jet-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id', $producto->id)" readonly />
    <x-jet-label for="nombre" value="{{ __('Nombre')}}" />
    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $producto->nombre)" readonly />
    <x-jet-label for="precio" value="{{ __('Precio')}}" />
    <x-jet-input id="precio" class="block mt-1 w-full" type="number" name="precio" :value="old('precio', $producto->precio)" readonly />
    <x-jet-label for="cantidad" value="{{ __('Cantidad')}}" />
    <x-jet-input id="cantidad" class="block mt-1 w-full" type="number" name="cantidad" :value="old('cantidad', $producto->cantidad)" readonly />
    <x-jet-label for="fecha" value="{{ __('Fecha de compra')}}" />
    <x-jet-input id="fecha" class="block mt-1 w-full" type="date" name="fecha" :value="old('fecha', $producto->fecha)" readonly />

                </div>
            </div>
        </div>    
    </div>
</x-app-layout>