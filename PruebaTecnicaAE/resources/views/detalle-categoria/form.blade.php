<div class="row">
    <div class="input-group col-6">

        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas"><i class="bi bi-layout-text-window-reverse"></i></span>
            </div>
            
        </div>

        <select class="form-control @error('categoria_id') is-invalid @enderror" value="{{ old('categoria_id', $detalleCategoria?->categoria_id) }}" name="categoria_id" id="categoria_id" required placeholder="Categorias">
            
            @if ( $detalleCategoria?->categoria_id != null) 
                <option value="{{ $detalleCategoria?->categoria->id }}" selected>{{ $detalleCategoria?->categoria->nom_categoria }}</option> 
                @foreach ($categorias as $categoria)
                    @if ( $categoria?->id != $detalleCategoria?->categoria_id )
                        <option value="{{ $categoria?->id }}">{{ $categoria?->nom_categoria }}</option>
                    @endif
                @endforeach
            @else
                <option value="" disabled selected>Seleccione una Categoria</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria?->id }}">{{ $categoria?->nom_categoria }}</option>
                @endforeach
            @endif   
        </select>
        {!! $errors->first('categoria_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
    <div class="input-group col-6">

        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas"><i class="bi bi-bag-check-fill"></i></span>
            </div>
            
        </div>

        <select class="form-control @error('producto_id') is-invalid @enderror" value="{{ old('producto_id', $detalleCategoria?->producto_id) }}" name="producto_id" id="producto_id" required placeholder="Productos">
            
            @if ( $detalleCategoria?->producto_id != null) 
                <option value="{{ $detalleCategoria?->producto->id }}" selected>{{ $detalleCategoria?->producto->nom_producto }}</option> 
                @foreach ($productos as $producto)
                    @if ( $producto?->id != $detalleCategoria?->producto_id )
                        <option value="{{ $producto?->id }}">{{ $producto?->nom_producto }}</option>
                    @endif
                @endforeach
            @else
                <option value="" disabled selected>Seleccione un Producto</option>
                @foreach ($productos as $producto)
                    <option value="{{ $producto?->id }}">{{ $producto?->nom_producto }}</option>
                @endforeach
            @endif   
        </select>
        {!! $errors->first('categoria_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
</div>