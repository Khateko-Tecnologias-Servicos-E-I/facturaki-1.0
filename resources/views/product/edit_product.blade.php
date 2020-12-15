@extends('layouts.app')
@section('title',$product->name.' | Edit Product')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Editar detalhes de Produto</h5>
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
                    <form action="{{ URL::to('update_product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Nome *</label>
                            <div class="col-sm-10"><input type="text" name="name" class="form-control" value="{{ $product->name }}" placeholder="Descrição do item..." required></div>
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Categoria *</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="category_id" required>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id?'selected':'' }}>{{ $category->cate_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label text-right">Fornecedor *</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="supplier_id" required>
                                    @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}" {{ $supplier->id == $product->supplier_id?'selected':'' }}>{{ $supplier->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Código *</label>
                            <div class="col-sm-4"><input type="text" class="form-control" name="product_code" value="{{ $product->product_code }}" required>
                            </div>
                            <label class="col-sm-2 col-form-label text-right">Armazém *</label>
                            <div class="col-sm-4"><input type="text" class="form-control" name="product_garage" value="{{ $product->product_garage }}" required>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Rota</label>
                            <div class="col-sm-10"><input type="text" name="product_route" class="form-control" value="{{ $product->product_route }}"><span class="form-text m-b-none"></span></div>
                        </div>
                        <div class="hr-line-dashed"></div>



                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Data de Aquisição</label>
                            <div class="col-sm-4"><input type="date" class="form-control" name="buy_date" value="{{ $product->buy_date }}">
                            </div>
                            <label class="col-sm-2 col-form-label text-right">Data de Expiração</label>
                            <div class="col-sm-4"><input type="date" class="form-control" name="expire_date" value="{{ $product->expire_date }}">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Preço de Compra *</label>
                            <div class="col-sm-10"><input type="number" name="buying_price" class="form-control"  min="1" value="{{ $product->buying_price }}" required><span class="form-text m-b-none"></span></div>
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Preço de Venda *</label>
                            <div class="col-sm-10"><input type="number" name="selling_price" class="form-control" min="1"  value="{{ $product->selling_price }}" required><span class="form-text m-b-none"></span></div>
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group  row"><label class="col-sm-2 col-form-label text-right">Imagem</label>
                            <div class="col-sm-6">
                                <input type="file" id="file" onchange="productPhoto1(this);" name="image" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <img src="" id="productphoto1">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>


                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary btn-sm" type="submit">Gravar alterações</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mainly scripts -->

<script>

    function productPhoto1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#productphoto1')
                .attr('src', e.target.result)
                .attr("class","img-thumbnail mb-2")
                .attr("height",'180px')
                .attr("width",'180px')
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
