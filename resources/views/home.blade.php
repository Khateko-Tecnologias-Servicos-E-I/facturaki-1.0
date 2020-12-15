@extends('layouts.app')
@section('title',' Dashboard')

@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Administrador(es)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($admins) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small># Total</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Colaborador(es)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($employee) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Activo(s)</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Cliente(s)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($customer) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Activo(s)</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Fornecedor(es)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($supplier) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Activo(s) </small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Producto(s)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($products) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small># Total</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Vendas</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($orders) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small># Total</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Vendas Pendentes</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($pandingorders) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small># Total</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Vendas Concluidas</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($shippedorders) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small># Total</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Total Invest</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $products->sum('buying_price') }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total current</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Target</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $products->sum('selling_price') }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Benefit Target</h5>
                </div>
                @php
                $buy = $products->sum('buying_price');
                $sell = $products->sum('selling_price');
                $main = $sell - $buy;
                @endphp
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $main }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small>Total income</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Hoje </span>
                    <h5>Despesas(MZN)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ $expensetoday->sum('ammount') }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small># Total</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Total </span>
                    <h5>Vendas(MZN)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">###</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small># Total</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Recente(s) </span>
                    <h5>Vendas (MZN)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">####</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small># Total</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Concluidas </span>
                    <h5>Vendas (MZN)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">####</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small># Total</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox ">
                <div class="ibox-title">
                    <span class="label label-success float-right">Hoje </span>
                    <h5>Act. Atendete(s)</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{ count($attendencetoday) }}</h1>
                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                    <small># Total</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
