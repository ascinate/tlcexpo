<x-header/>

<main class="float-start dahsbo-body w-100">

    <div class="container">
        <div class="contentoi">
                <div class="min-menus-dahsborad">
                    <ul class="d-flex align-items-center">
                        <li>
                            <a href="{{ URL::to('dashboard') }}" class="link05 active-me">
                                <span class="cion02">
                                    <i data-feather="airplay"></i>
                                </span>
                                <span> Dashboard </span>
                             </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('shipments') }}" class="link05">
                                <span class="cion02">
                                    <i data-feather="truck"></i>
                                </span>
                                <span> Shipments </span>
                             </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('loads') }}" class="link05">
                                <span class="cion02">
                                    <i data-feather="box"></i>
                                </span>
                                <span> Loads </span>
                             </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('tradeshows') }}" class="link05">
                                <span class="cion02">
                                    <i data-feather="package"></i>
                                </span>
                                <span> Tradeshows </span>
                             </a>
                        </li>
                    </ul>
                </div>
                <div class="berdcurm-div d-flex align-items-center justify-content-between">
                    <h1 class="headm-dash"> Dashboard </h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
                <div class="row gy-4 bpot">
                    <div class="col-sm-6 col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="amount-shopiments01 d-flex align-items-start justify-content-between">
                                <div class="tec-div">
                                    <h5> Total Shipments </h5>
                                    @php
                                        $shipcount = \DB::table('shipments')->where('customer', session('id'))->count();
                                    @endphp
                                    <h2 class="mt-2 d-block"> {{  $shipcount }} </h2>
                                </div>
                                <span class="iconu-comon one1">
                                    <i data-feather="truck"></i>
                                </span>
                                </div>

                                <div class="progress mt-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-4">
                        <div class="card p2">
                            <div class="card-body">
                                <div class="amount-shopiments01 d-flex align-items-start justify-content-between">
                                <div class="tec-div">
                                    <h5> Total Loads </h5>
                                    @php
                                        $loadcount = \DB::table('loads')->where('customer_id', session('id'))->count();
                                    @endphp
                                    <h2 class="mt-2 d-block"> {{ $loadcount }} </h2>
                                </div>
                                <span class="iconu-comon one2">
                                    <i data-feather="archive"></i>
                                </span>
                                </div>

                                <div class="progress mt-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-4">
                        <div class="card p3">
                            <div class="card-body">
                                <div class="amount-shopiments01 d-flex align-items-start justify-content-between">
                                <div class="tec-div">
                                    <h5> Cargo Items </h5>
                                    <h2 class="mt-2 d-block"> N/A </h2>
                                </div>
                                <span class="iconu-comon one3">
                                    <i data-feather="box"></i>
                                </span>
                                </div>

                                <div class="progress mt-2">
                                    <div class="progress-bar progress-bar-striped  progress-bar-animated" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-1 col-lg-8 col-xl-8">
                        <div class="table-cart">
                            <div class="d-flex top-head05 align-items-center justify-content-between">
                                <h2 class="box-headr"> Current Shipments </h2>
                            </div>

                            <div class="g table-responsive">
                                <table class="table border text-nowrap mb-0">
                                    <thead>
                                        <tr>
                                        <th>Shipment</th>
                                        <th>Tradeshow(s)</th>
                                        <th>RFQ</th>
                                        <th>Loads</th>
                                        <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $datas = \DB::table('shipments')->where('customer', session('id'))->get();
                                            foreach($datas as $data)
                                            {
                                        @endphp
                                        <tr>
                                            <td>{{ 'T00'.$data->order_no }}</td>
                                            <td>
                                                @php
                                                    $tradeshow = \DB::table('tradeshows')->where('id', $data->tradeshow)->get();
                                                    $sname = @$tradeshow[0]->show_name;
                                                    echo $sname;
                                                @endphp
                                           </td>
                                            <td>
                                                @php
                                                    $quote = \DB::table('requestquotes')->where('id',$data->quote)->get();
                                                    echo @$quote[0]->customer_contact_name;
                                                @endphp
                                           </td>
                                            <td>
                                                @php
                                                    $exp = explode(",",$data->loads);
                                                    for($i=0;$i<=count($exp)-1;$i++)
                                                    {
                                                        $load = \DB::table('loads')->where('id', $exp[$i])->get();
                                                        echo @$load[0]->load_id.'-'.$sname.'<br>';
                                                    }
                                                @endphp
                                            </td>
                                            <td>{{ $data->status }}</td>
                                        </tr>
                                        @php
                                            }
                                        @endphp

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 col-lg-4 col-xl-4">
                        <div class="tradeb-div">
                            <div class="d-flex top-head05 align-items-center justify-content-between">
                                <h2 class="box-headr"> Tradeshows </h2>
                            </div>
                            <hr/>
                            <div class="tard-show-div">
                                @php
                                    $shows = \DB::table('tradeshows')->get();
                                    foreach($shows as $trade)
                                    {
                                @endphp
                                <div class="comon-shouwi">
                                    <h5>{{ $trade->show_name }}</h5>
                                    <!--<p> <span class="clae"><i data-feather="calendar"></i> </span> 2024-01-19 </p>-->
                                </div>
                                @php
                                    }
                                @endphp

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-1 col-lg-12 col-xl-12">
                        <div class="table-cart">
                            <div class="d-flex top-head05 align-items-center justify-content-between">
                                <h2 class="box-headr"> Current Loads </h2>
                            </div>

                            <hr class="my-0"/>

                            <div class="g table-responsive">
                                <table id="example" class="table table-striped nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Load</th>
                                            <th>Shipment Type</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Tradeshow</th>
                                            <th>Origin</th>
                                            <th>Destination</th>
                                            <th>Billing Entity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $loads = \DB::table('loads')->where('customer_id',session('id'))->get();
                                            foreach($loads as $data)
                                            {
                                        @endphp
                                        <tr>
                                            <td>{{ $data->load_id }}</td>
                                            <td>{{ $data->shipment_type }}</td>
                                            <td>
                                                @php
                                                    $customer = \DB::table('customers')->where('id', $data->customer_id)->get();
                                                    echo @$customer[0]->customer_name;
                                                @endphp
                                            </td>
                                            <td>{{ $data->status }}</td>
                                            <td>
                                                @php
                                                    $tradeshow = \DB::table('tradeshows')->where('id', $data->destination_tradeshow_id)->get();
                                                    echo @$tradeshow[0]->show_name;
                                                @endphp
                                            </td>
                                            <td>{{ $data->origin }}</td>
                                            <td>{{ $data->destination }}</td>
                                            <td>
                                                @php
                                                    $entitie = \DB::table('entities')->where('id', $data->billing_entity_name)->get();
                                                    echo @$entitie[0]->legeal_name;
                                                @endphp
                                           </td>
                                        </tr>
                                        @php
                                            }
                                        @endphp

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
        </div>
    </div>
</main>


<x-footer/>
