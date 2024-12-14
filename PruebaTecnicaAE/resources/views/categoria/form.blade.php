<div class="row">
    <div class="input-group col-5">
        
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas"><i class="bi bi-layout-text-window-reverse"></i></span>
            </div>
        </div>
        
        <input id="nom_categoria" type="text" class="form-control @error('nom_categoria') is-invalid @enderror" name="nom_categoria" value="{{ old('nom_categoria', $categoria?->nom_categoria) }}"
                    required autocomplete="nom_categoria" autofocus placeholder="Nombre de la Categoria">
        {!! $errors->first('ind_activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
    <div class="input-group col-3">

        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas"><i class="bi bi-check-circle-fill"></i></span>
            </div>
            
        </div>

        <select class="form-control @error('ind_activo') is-invalid @enderror" value="{{ old('ind_activo', $categoria?->ind_activo) }}" name="ind_activo" id="ind_activo" required placeholder="Aplica">
            <option value="" disabled selected>Seleccione el estado</option>    
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>
        {!! $errors->first('ind_activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
</div>