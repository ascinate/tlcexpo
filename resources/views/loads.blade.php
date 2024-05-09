<x-header/>

<main class="float-start dahsbo-body w-100">

    <div class="container">
        <div class="contentoi">
                <div class="min-menus-dahsborad">
                    <ul class="d-flex align-items-center">
                        <li>
                            <a href="{{ URL::to('dashboard') }}" class="link05 ">
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
                            <a href="{{ URL::to('loads') }}" class="link05 active-me">
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
                    <h1 class="headm-dash"> Current Loads
                    </h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Loads</li>
                        </ol>
                    </nav>
                </div>
                <div class="row gy-4 bpot">

                    <div class="col-lg-12">
                        <div class="g bg-white detailso p-4 table-responsive">
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
                                        <td><a href="{{ URL::to('load-details') }}/{{ $data->id }}">{{ $data->load_id }}</a></td>
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
</main>

<x-footer/>
