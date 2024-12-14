@extends('layouts.admin')

@section('content-admin')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Detalle de Categorias</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
            <li class="breadcrumb-item active">Detalle de Categorias</li>
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
        <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    Categorias por Producto
                </span>

                <div class="float-right">
                    <a href="{{ route('detalle-categorias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                        <i class="fa fa-fw fa-plus"></i> Crear Detalle
                    </a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success m-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="card-body bg-white">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead">
                        <tr>
                            <th>N°</th>
                            
                        <th >Categoria</th>
                        <th >Producto</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detalleCategorias as $detalleCategoria)
                            <tr>
                                <td>{{ ++$i }}</td>
                                
                            <td >{{ $detalleCategoria->categoria->nom_categoria }}</td>
                            <td >{{ $detalleCategoria->producto->nom_producto }}</td>

                                <td>
                                    <form action="{{ route('detalle-categorias.destroy', $detalleCategoria->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('detalle-categorias.show', $detalleCategoria->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('detalle-categorias.edit', $detalleCategoria->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Esta seguro de eliminar el detalle?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>  
      </div>
      {!! $detalleCategorias->withQueryString()->links() !!}
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
