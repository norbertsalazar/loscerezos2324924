@csrf 
<div class ="block">
    <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $insumos->nombre)" required autofocus />

    <x-jet-label for="fecha" value="{{ __('Fecha') }}" />
    <x-jet-input id="fecha" class="block mt-1 w-full" type="text" name="fecha" :value="old('fecha', $insumos->fecha)" required autofocus />

    <x-jet-label for="tipo" value="{{ __('Tipo') }}" />
    <x-jet-input id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="old('tipo', $insumos->tipo)" required autofocus />

    <x-jet-label for="operacion" value="{{ __('Operacion') }}" />
    <x-jet-input id="operacion" class="block mt-1 w-full" type="text" name="operacion" :value="old('operacion', $insumos->operacion)" required autofocus />

    <x-jet-label for="cantidad" value="{{ __('Cantidad') }}" />
    <x-jet-input id="cantidad" class="block mt-1 w-full" type="text" name="cantidad" :value="old('cantidad', $insumos->cantidad)" required autofocus />

    <x-jet-label for="almacen" value="{{ __('Almacen') }}" />
    <x-jet-input id="almacen" class="block mt-1 w-full" type="text" name="almacen" :value="old('almacen', $insumos->almacen)" required autofocus />

    <x-jet-label for="trabajador" value="{{ __('Trabajador') }}" />
    <x-jet-input id="trabajador" class="block mt-1 w-full" type="text" name="trabajador" :value="old('trabajador', $insumos->trabajador)" required autofocus />

    <x-jet-label for="numeroLote" value="{{ __('Numero Lote') }}" />
    <x-jet-input id="numeroLote" class="block mt-1 w-full" type="text" name="numeroLote" :value="old('numeroLote', $insumos->numeroLote)" required autofocus />

    <x-jet-label for="numeroFactura" value="{{ __('Numero Factura') }}" />
    <x-jet-input id="numeroFactura" class="block mt-1 w-full" type="text" name="numeroFactura" :value="old('numeroFactura', $insumos->numeroFactura)" required autofocus />

    <div class="flex justify-center">
        <div class="p-2">
            <div class="flex justify-end">
                <a href="{{ route('insumos.create') }}">
                    <x-jet-button type="submit">
                        Guardar
                    </x-jet-button>
            </div>
        </div>
    </div>

</div>