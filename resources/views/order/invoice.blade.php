@extends('layouts.app')
@section('title',$customer->name.' | Invoice')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Recibo</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item">
                POS
            </li>
            <li class="breadcrumb-item active">
                <strong>Recibo</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-4">
        <div class="title-action">
            <a href="#" class="btn btn-white"><i class="fa fa-pencil"></i> Editar </a>
            <a href="#" class="btn btn-white"><i class="fa fa-check "></i> Gravar </a>
            <a href="" onclick="window.print()" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Imprimir </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox-content p-xl">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5><img src="{{ asset('back/img/facturaki-logo.png') }}"></h5>
                            <address>
                                								<strong> FacturAKI - Sistema de Registo de Vendas</strong><br>
                                                                Endereço : Rua dos CFM, nr, 480<br>
                                                                Cidade : Maputo, Mocambique<br>
                                                                Telefone : 8400000000, 210000000
                            </address>


                            <address>
{{--								<strong>{{ $setting->name }}</strong><br>--}}
{{--                                Address : {{ $setting->address }}<br>--}}
{{--                                City : {{ $setting->city }}, {{ $setting->country }}<br>--}}
{{--                                Phone : {{ $setting->phone }},{{ $setting->mobile }}							--}}
                            </address>
                        </div>

                        <div class="col-sm-6 text-right">
                            <h4>Recibo Nr.</h4>
                            <h4 class="text-navy">INV-000567F7-00</h4>
                            <span>Para:</span>
                            <address>
                                <strong>{{ $customer->name }}</strong><br>
                                <strong>{{ $customer->shopname }}</strong><br>
                                Endereço :{{ $customer->address }}<br>
                                Cidade : {{ $customer->city }}<br>
                                Telefone : {{ $customer->phone }}
                            </address>
                            <p>
                                <span><strong>Data: </strong>{{ date('l jS \of F Y') }}</span><br/>
                                <span><strong>Validade:</strong> March 24, 2014</span>
                            </p>
                        </div>
                    </div>

                    <div class="table-responsive m-t">
                        <table class="table invoice-table">
                            <thead>
                            <tr>
                                <th>Itens</th>
                                <th>Quantidade</th>
                                <th>Preço Unitário</th>
                                <th>Preço Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contents as $content)
                            <tr>
                                <td><div><strong>{{ $content->name }}</strong></div></td>
                                <td>{{ $content->qty }}</td>
                                <td>{{ $content->price }}</td>
                                <td>{{ $content->price * $content->qty }}</td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div><!-- /table-responsive -->

                    <table class="table invoice-total">
                        <tbody>
                        <tr>
                            <td><strong>Sub Total :</strong></td>
                            <td>{{ Cart::subtotal() }}</td>
                        </tr>
                        <tr>
                            <td><strong>IVA (17%) :</strong></td>
                            <td>{{ Cart::tax() }}</td>
                        </tr>
                        <tr>
                            <td><strong>TOTAL :</strong></td>
                            <td>{{ Cart::total() }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"><i class="fa fa-dollar"></i> PAGAMENTO</button>
                    </div>

{{--                    <div class="well m-t"><strong>Comments</strong>--}}
{{--                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less--}}
{{--                    </div>--}}
                </div>
        </div>
    </div>
</div>




{{-- Invoice confirmation modal here --}}
<form action="{{ url('/finalinvoice') }}" method="POST" enctype="multipart/form-data">
	@csrf
<div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Método de Pagamento <span class="pull-right">Total: {{ Cart::total() }}</span></h4>
                <small class="font-bold">Recibo para o cliente {{ $customer->name }}.</small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <label>Método</label>
                        <select class="form-control" name="payment_status">
                        	<option value="Handcash">Cash</option>
                        	<option value="Chaque">Cheque</option>
                        	<option value="Due">Mobile-money</option>
                        </select>
                    </div>

                    <div class="col-lg-4">
                        <label>Descrição</label>
                        <input type="text" name="pay" class="form-control" placeholder="">
                    </div>

                    <div class="col-lg-4">
                        <label>Lorem</label>
                        <input type="hidden" name="due" class="form-control" placeholder="" value="{{ str_replace(',', '', Cart::subtotal()) }}">
                    </div>
                </div>

                <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                <input type="hidden" name="order_date" value="{{ date('d-m-y') }}">
                <input type="hidden" name="order_status" value="Pending">
                <input type="hidden" name="total_product" value="{{ Cart::count() }}">
                <input type="hidden" name="subtotal" value="{{ Cart::subtotal() }}">
                <input type="hidden" name="vat" value="{{ Cart::tax() }}">
                <input type="hidden" name="total" value="{{ Cart::total() }}">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </div>
    </div>
</div>

</form>
@endsection
