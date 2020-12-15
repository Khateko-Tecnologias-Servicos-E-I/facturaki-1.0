@extends('layouts.app')
@section('title','Lista de Itens')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Lista de Itens</h5>
{{--                    <div class="ibox-tools">--}}
{{--                        <a class="collapse-link">--}}
{{--                            <i class="fa fa-chevron-up"></i>--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
{{--                            <i class="fa fa-wrench"></i>--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu dropdown-user">--}}
{{--                            <li><a href="#" class="dropdown-item">Config option 1</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="#" class="dropdown-item">Config option 2</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <a class="close-link">--}}
{{--                            <i class="fa fa-times"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th width="15%">#</th>
                    <th>Nome </th>
                    <th>Código</th>
                    <th>Preço de venda</th>
                    <th>Imagem</th>
                    <th>Armazém</th>
                    <th>Rota</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($products as $product)
                <tr class="gradeX">
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->product_code }}</td>
                    <td>{{ $product->selling_price }}</td>
                    <td>
                        @if($product->image)
                        <img src="{{ asset('storage/app/public/'.$product->image) }}" height="30px" width="40px">
                        @endif
                    </td>
                    <td>{{ $product->product_garage }}</td>
                    <td>{{ $product->product_route }}</td>
                    <td>
                        <a href="{{ url('/edit_product/'.$product->id) }}" class="btn btn-success btn-xs"> <i class="fa fa-edit"></i> Editar</a>
                        <a href="{{ url('/delete_product/'.$product->id) }}" class="btn btn-danger btn-xs" id="delete"><i class="fa fa-trash"></i> Remover</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th width="15%">#</th>
                    <th>Nome </th>
                    <th>Código</th>
                    <th>Preço de venda</th>
                    <th>Imagem</th>
                    <th>Armazém</th>
                    <th>Rota</th>
                    <th></th>
                </tr>
                </tfoot>
                </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
