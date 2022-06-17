<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Insumo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $insumos->nombre)" readonly />

                <x-jet-label for="fecha" value="{{ __('Fecha') }}" />
                <x-jet-input id="fecha" class="block mt-1 w-full" type="text" name="fecha" :value="old('fecha', $insumos->fecha)" readonly />

                <x-jet-label for="tipo" value="{{ __('Tipo') }}" />
                <x-jet-input id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="old('tipo', $insumos->tipo)" readonly />

                <x-jet-label for="operacion" value="{{ __('Operacion') }}" />
                <x-jet-input id="operacion" class="block mt-1 w-full" type="text" name="operacion" :value="old('operacion', $insumos->operacion)" readonly />

                <x-jet-label for="cantidad" value="{{ __('Cantidad') }}" />
                <x-jet-input id="cantidad" class="block mt-1 w-full" type="text" name="cantidad" :value="old('cantidad', $insumos->cantidad)" readonly />

                <x-jet-label for="almacen" value="{{ __('Almacen') }}" />
                <x-jet-input id="almacen" class="block mt-1 w-full" type="text" name="almacen" :value="old('almacen', $insumos->almacen)" readonly />

                <x-jet-label for="trabajador" value="{{ __('Trabajador') }}" />
                <x-jet-input id="trabajador" class="block mt-1 w-full" type="text" name="trabajador" :value="old('trabajador', $insumos->trabajador)" readonly />

                <x-jet-label for="numeroLote" value="{{ __('Numero Lote') }}" />
                <x-jet-input id="numeroLote" class="block mt-1 w-full" type="text" name="numeroLote" :value="old('numeroLote', $insumos->numeroLote)" readonly />

                <x-jet-label for="numeroFactura" value="{{ __('Numero Factura') }}" />
                <x-jet-input id="numeroFactura" class="block mt-1 w-full" type="text" name="numeroFactura" :value="old('numeroFactura', $insumos->numeroFactura)" readonly />
                </div>
            </div>
            <a href="{{ route('insumos.index',$insumos) }}"> 
            <x-jet-button>Volver</x-jet-button>
        </div>
    </div>
</x-app-layout>