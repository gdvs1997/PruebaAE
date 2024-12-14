@extends('layouts.admin')


@section('content-admin')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Actualizar Producto</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Productos</li>
            <li class="breadcrumb-item active">Actualizar Producto</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Informacion del Producto</h3>
          <div class="card-tools">
            <a class="btn btn-secondary btn-sm" href="{{ route('productos.index') }}">
              <i class="fa fa-fw"><i class="bi bi-arrow-left"></i></i> Regresar
            </a>
          </div>
        </div>
        <div class="card-body bg-white">
            <form method="POST" action="{{ route('productos.update', $producto->id) }}" >
                {{ method_field('PATCH') }}
                @csrf

                <div class="row">
                    <div class="input-group col-5">
                        
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas"><i class="bi bi-bag-check-fill"></i></span>
                            </div>

                            @error('nom_producto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        
                        <input id="nom_producto" type="text" class="form-control @error('nom_producto') is-invalid @enderror" name="nom_producto" value="{{ $producto->nom_producto }}" 
                                    required autocomplete="nom_producto" autofocus placeholder="Nombre del Producto">
                        
                    </div>

                    <div class="input-group col-2">
                        
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas"><i class="bi bi-cash-stack"></i></span>
                            </div>

                            @error('precio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    
                        <input id="precio" type="number" class="form-control @error('precio') is-invalid @enderror" name="precio" value="{{ $producto->precio }}" 
                                    required autocomplete="precio" placeholder="Precio">
                        
                    </div>

                    <div class="input-group col-2">
                        
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas"><i class="bi bi-clipboard2-check-fill"></i></span>
                            </div>

                            @error('stock')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        
                        <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ $producto->stock }}" 
                                    required autocomplete="stock" placeholder="Cantidad en Stock">
                        
                    </div>

                    <div class="input-group col-3">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas"><i class="bi bi-check-circle-fill"></i></span>
                            </div>

                            @error('ind_activo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <select class="form-control" name="ind_activo" id="ind_activo" required autocomplete="ind_activo" placeholder="Aplica" value="{{ $producto->ind_activo }}" >
                            <option value="" disabled selected>Seleccione el estado</option>    
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-2">
                        <button type="submit" class="btn btn-success btn-block">
                            <i class="fa"><i class="bi bi-floppy2-fill"></i></i>
                            &nbsp;Guardar Cambios
                        </button>
                    </div>
                </div>  

            </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->

@endsection