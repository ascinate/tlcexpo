<x-header/>

<main class="float-start dahsbo-body w-100">

    <div class="container">
        <div class="contentoi">
                <div class="min-menus-dahsborad">
                    <ul class="d-flex align-items-center">
                        <li>
                            <a href="{{ URL::to('dashboard') }}" class="link05">
                                <span class="cion02">
                                    <i data-feather="airplay"></i>
                                </span>
                                <span> Dashboard </span>
                             </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('shipments') }}" class="link05 active-me">
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
                    <h1 class="headm-dash"> Shipments </h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shipments</li>
                        </ol>
                    </nav>
                </div>
                <div class="row gy-4 bpot">

                    <div class="col-sm-1 col-lg-12 col-xl-12">
                        <div class="table-cart">
                            <div class="d-flex top-head05 align-items-center justify-content-between">
                                <h2 class="box-headr"> Shipments </h2>

                            </div>

                            <hr class="my-0"/>

                            <div class="g detailso table-responsive mt-4">
                                <table id="example" class="table table-striped nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                        <th> # </th>
                                        <th>Shipment</th>
                                        <th>Customer Id</th>
                                        <th>Tradeshow(s)</th>
                                        <th>RFQ</th>
                                        <th>Loads</th>
                                        <th>Status</th>
                                        <th>Invoice No</th>
                                        <th>Last Updated</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $datas = \DB::table('shipments')->where('customer', session('id'))->get();
                                            $i=1;
                                            foreach($datas as $data)
                                            {
                                        @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td> <a href="{{ URL::to('shipment-details') }}/{{ $data->id }}"> {{ 'T00'.$data->order_no }} </a> </td>
                                            <td>{{ session('name') }}</td>
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
                                            <td>{{ $data->invoice_no }}</td>
                                            <td>{{ $data->updated_at }}</td>
                                        </tr>
                                        @php
                                            $i++;
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
