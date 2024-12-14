@extends('layouts.admin')


@section('content-admin')


  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Ver Producto</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Productos</li>
            <li class="breadcrumb-item active">Ver Producto</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content-->
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
            <form>
                @csrf

                <div class="row">
                    <div class="input-group col-5">
                    
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas"><i class="bi bi-bag-check-fill"></i></span>
                            </div>
                        </div>
                        
                        <input type="text" class="form-control" value="{{ $producto->nom_producto }}" 
                            placeholder="Nombre del Producto" disabled>
                        
                    </div>

                    <div class="input-group col-2">
                    
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas"><i class="bi bi-cash-stack"></i></span>
                            </div>
                        </div>
                        
                        <input type="number" class="form-control" value="{{ $producto->precio }}" 
                            placeholder="Precio" disabled>
                        
                    </div>

                    <div class="input-group col-2">
                    
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas"><i class="bi bi-clipboard2-check-fill"></i></span>
                            </div>
                        </div>
                        
                        <input type="number" class="form-control" value="{{ $producto->stock }}" 
                            placeholder="Stock" disabled>
                        
                    </div>

                    <div class="input-group col-3">
                    
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas"><i class="bi bi-check-circle-fill"></i></span>
                            </div>
                        </div>
                        
                        <input type="text" class="form-control" 
                            value="@if ( $producto->ind_activo == 0) Inactivo @else Activo @endif" 
                            placeholder="Precio" disabled>
                        
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
