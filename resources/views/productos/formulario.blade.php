@csrf
<div class="block">
    <x-jet-label for="id" value="{{ __('Id')}}" />
    <x-jet-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id', $producto->id)" required autofocus />
    <x-jet-label for="nombre" value="{{ __('Nombre')}}" />
    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $producto->nombre)" required autofocus />
    <x-jet-label for="precio" value="{{ __('Precio')}}" />
    <x-jet-input id="precio" class="block mt-1 w-full" type="number" name="precio" :value="old('precio', $producto->precio)" required autofocus />
    <x-jet-label for="cantidad" value="{{ __('Cantidad')}}" />
    <x-jet-input id="cantidad" class="block mt-1 w-full" type="number" name="cantidad" :value="old('cantidad', $producto->cantidad)" required autofocus />
    <x-jet-label for="fecha" value="{{ __('Fecha de compra')}}" />
    <x-jet-input id="fecha" class="block mt-1 w-full" type="date" name="fecha" :value="old('fecha', $producto->fecha)" required autofocus />


    <div class="flex justify-center">
        <div class="p-2">
            <div class="flex justify-end">
                <a href="{{ route('productos.create') }}">
                    <x-jet-button type="submit">
                        Guardar
                    </x-jet-button>
            </div>
        </div>
    </div>    
</div>