<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <link href="{{ asset('back/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('back/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('back/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('back/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

    <link href="{{ asset('back/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('back/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('back/css/tagsinput.css')}}">

    {{-- database table --}}
    <link href="{{ asset('back/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="{{ asset('back/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

    {{-- iCheck --}}

    <link href="{{ asset('back/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link rel="icon"
          type="image/png"
          href="{{ asset('back/img/favicon.jpg') }}">


</head>

<body>
    <div id="wrapper">

        {{-- Left Sidebar Start --}}

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a href="{{ route('/') }}"> <img alt="image" style="width: 95%;" class="rounded" src="{{ asset('back/img/facturaki-logo.jpg') }}"></a>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Utilizador</span>
                            <span class="text-muted text-xs block">Cargo de Utilizador<b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Perfil</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contactos</a></li>
                            <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout">Sair</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        <img src="{{ asset('back/img/favicon.png') }}" />
                    </div>
                </li>
                <li>
                    <a href="{{ route('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>
                    <a href="{{ route('pos') }}"><i class="fa fa-shopping-cart"></i> <span class="nav-label">POS</span> </a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Produtos</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('add.product') }}">Adicionar Produto</a></li>
                        <li><a href="{{ route('all.product') }}">Todos Produtos</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-balance-scale"></i> <span class="nav-label">Vendas</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('pending.order') }}">Vendas Pendentes</a></li>
                        <li><a href="{{ route('shipped.order') }}">Vendas Concluidas</a></li>

                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-list"></i> <span class="nav-label">Categorias</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('add.category') }}">Adicionar Categoria</a></li>
                        <li><a href="{{ route('all.category') }}">Todas Categorias</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-user-plus"></i> <span class="nav-label">Clientes</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('add.customer') }}">Adicionar Cliente</a></li>
                        <li><a href="{{ route('all.customer') }}">Todos Clientes</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-truck"></i> <span class="nav-label">Fornecedores</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('add.supplier') }}">Adicionar Fornecedor</a></li>
                        <li><a href="{{ route('all.supplier') }}">Todos Fornecedores</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-exclamation-circle"></i> <span class="nav-label">Despesas</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('add.expense') }}">Adicionar Despesa</a></li>
                        <li><a href="{{ route('today.expense') }}">Despesas de Hoje</a></li>
                        <li><a href="{{ route('monthly.expense') }}">Despesas Mensais</a></li>
                        <li><a href="{{ route('yearly.expense') }}">Despesas Anuais</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Presenças</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('add.attendence') }}">Registar Presenças</a></li>
                        <li><a href="{{ route('all.attendence') }}">Todos Presenças</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Colaboradores</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('add.employee') }}">Adicionar Colaborador</a></li>
                        <li><a href="{{ route('all.employee') }}">Todos Colaboradores</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Salários</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ route('add.advance.salary') }}">Registar Adiantamento</a></li>
                        <li><a href="{{ route('all.advance.salary') }}">Todos Adiantamentos</a></li>
                        <li><a href="{{ route('pay.salary') }}">Registar Salário</a></li>
                        {{--  <li><a href="{{ route('list.month.salary') }}">List Monthly Salaries</a></li> --}}
                    </ul>
                </li>

                @php
                $setting = App\Setting::all();
                @endphp
                    @if($setting == null )
                        <li><a href="{{ route('add.setting') }}"><i class="fa fa-users"></i>Add Settings</a></li>
                    @else
                        @foreach($setting as $set)
                        <li><a href="{{ URL::to('show_setting/'.$set->id) }}">Show Settings</a></li>
                        @endforeach
                    @endif

				<li class="landing_link">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> <span class="nav-label">Sair </span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </li>

					{{--<li class="special_link">
                    <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
					</li>--}}
            </ul>

        </div>
    </nav>
        {{--// Left Side Navbar End Here--}}

        {{-- Top Navbar Start --}}
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Busca..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Bem-vindo(a) a plataforma de vendas FacturAki</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/a7.jpg">
                                    </a>
                                    <div>
                                        <small class="float-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/a4.jpg">
                                    </a>
                                    <div>
                                        <small class="float-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/profile.jpg">
                                    </a>
                                    <div>
                                        <small class="float-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html" class="dropdown-item">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="float-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="profile.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="float-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="grid_options.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="float-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html" class="dropdown-item">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Sair
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li>
                        <a class="right-sidebar-toggle">
                            <i class="fa fa-tasks"></i>
                        </a>
                    </li>
                </ul>

            </nav>
        </div>


        {{-- Content Section here --}}
        {{-- Content Section here --}}
        {{-- Content Section here --}}

        @yield('content')

        {{-- //end contend section --}}
        {{-- //end contend section --}}
        {{-- //end contend section --}}


        <div class="footer">
            <div class="float-right">
                {{--10GB of <strong>250GB</strong> Free.--}}
            </div>
            <div>
                <strong>&copy; 2021 FacturAki</strong> um produto da <a href="https://khateko.com" target="_blank">Khateko Tecnologias & Servicos </a>
            </div>
        </div>
        </div>
        <div class="small-chat-box fadeInRight animated">

            <div class="heading" draggable="true">
                <small class="chat-date float-right">
                    02.19.2015
                </small>
                Small chat
            </div>

            <div class="content">

                <div class="left">
                    <div class="author-name">
                        Monica Jackson <small class="chat-date">
                        10:02 am
                    </small>
                    </div>
                    <div class="chat-message active">
                        Lorem Ipsum is simply dummy text input.
                    </div>

                </div>
                <div class="right">
                    <div class="author-name">
                        Mick Smith
                        <small class="chat-date">
                            11:24 am
                        </small>
                    </div>
                    <div class="chat-message">
                        Lorem Ipsum is simpl.
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Alice Novak
                        <small class="chat-date">
                            08:45 pm
                        </small>
                    </div>
                    <div class="chat-message active">
                        Check this stock char.
                    </div>
                </div>
                <div class="right">
                    <div class="author-name">
                        Anna Lamson
                        <small class="chat-date">
                            11:24 am
                        </small>
                    </div>
                    <div class="chat-message">
                        The standard chunk of Lorem Ipsum
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Mick Lane
                        <small class="chat-date">
                            08:45 pm
                        </small>
                    </div>
                    <div class="chat-message active">
                        I belive that. Lorem Ipsum is simply dummy text.
                    </div>
                </div>


            </div>
            <div class="form-chat">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control">
                    <span class="input-group-btn"> <button
                        class="btn btn-primary" type="button">Send
                </button> </span></div>
            </div>

        </div>
        <div id="small-chat">

            <span class="badge badge-warning float-right">5</span>
            <a class="open-small-chat" href="">
                <i class="fa fa-comments"></i>

            </a>
        </div>

    </div>

<!-- Mainly scripts -->
<script src="{{ asset('back/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('back/js/popper.min.js') }}"></script>
<script src="{{ asset('back/js/bootstrap.js') }}"></script>
<script src="{{ asset('back/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('back/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('back/js/tagsinput.js')}}"></script>

<!-- Flot -->
<script src="{{ asset('back/js/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('back/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('back/js/plugins/flot/jquery.flot.spline.js') }}"></script>
<script src="{{ asset('back/js/plugins/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('back/js/plugins/flot/jquery.flot.pie.js') }}"></script>

<!-- Peity -->
<script src="{{ asset('back/js/plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('back/js/demo/peity-demo.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('back/js/inspinia.js') }}"></script>
<script src="{{ asset('back/js/plugins/pace/pace.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('back/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- GITTER -->
<script src="{{ asset('back/js/plugins/gritter/jquery.gritter.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ asset('back/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Sparkline demo data  -->
<script src="{{ asset('back/js/demo/sparkline-demo.js') }}"></script>

<!-- ChartJS-->
<script src="{{ asset('back/js/plugins/chartJs/Chart.min.js') }}"></script>

<!-- Toastr -->
<script src="{{ asset('back/js/plugins/toastr/toastr.min.js') }}"></script>

{{-- database table --}}
<script src="{{ asset('back/js/plugins/dataTables/datatables.min.js') }}"></script>
<script src="{{ asset('back/js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                 customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                    }
                }
            ]

        });

    });

</script>

{{-- toastr js --}}
<script>
    @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('messege') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
      @endif
</script>

{{-- ckeditor --}}
<script src="{{ asset('back/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('summary-ckeditor');
    CKEDITOR.replace('summary-ckeditor1');
</script>


<!-- Sweet alert -->
<script src="{{ asset('back/js/sweetalert.min.js') }}"></script>
<script>
//Delete Alert
$(document).on("click","#delete", function(e){
  e.preventDefault();
  var link = $(this).attr("href");
    swal({
      title: "Are you sure?",
      text: "Delete for everytime!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href = link;
      } else {
        swal("Your file is safe!");
      }
    });
});

</script>


    <!-- iCheck -->
    <script src="{{ asset('back/js/plugins/iCheck/icheck.min.js') }}"></script>
        <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>
</html>
