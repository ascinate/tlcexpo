<x-header/>
@php
    $tradeshow = \DB::table('tradeshows')->where('id', $data['tradeshow'])->get();
    $quote = \DB::table('requestquotes')->where('id', $data['quote'])->get();
@endphp
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
                    <h1 class="headm-dash"> Shipment Details #T00{{ $data['order_no'] }}
                        <small class="d-block col-subt mt-2">  Peripheral Dynamics, Inc  </small>
                    </h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shipment Details</li>
                        </ol>
                    </nav>
                </div>
                <div class="row gy-4 bpot">

                    <div class="col-lg-7">
                        <div class="comon-bolock-div">
                            <div class="top-header08">
                                <h3> Load: 2075601 <span class="start-text">Pending</span> </h3>
                            </div>
                            <div class="textr-block">
                                <div class="top-serct-para">
                                    <div class="row row-cols-1 row-cols-lg-2">
                                        <div class="col">
                                            <ul class="top-heaght">
                                                <li>
                                                   <span class="ogrinala-texr"> Origin </span>
                                                </li>
                                                <li>
                                                   <strong>  Peripheral Dynamics </strong>
                                                </li>
                                                <li>
                                                    5150 Campus Dr Plymouth Meeting, PA 19462
                                                </li>

                                            </ul>

                                            <ul class="mt-4">
                                                <li>
                                                   <strong> Pickup:</strong> Thu, 01/25-01/26 - 08:00-15:00
                                                </li>
                                                <li>
                                                   <strong>  Contact: </strong> John Hanna - 610-246-5659 - jhanna@pdiscan.com
                                                </li>


                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul class="top-heaght">
                                                <li>
                                                  <span class="ogrinala-texr"> Destination </span>
                                                </li>
                                                <li>
                                                   <strong>  Peripheral Dynamics/Booth TBD </strong>
                                                </li>
                                                <li>
                                                    c/o ATMIA US Conference
                                                    Willwork Global Event Services
                                                    7015 Corporate Plaza Drive, Suite 100/Door 1
                                                    Las Vegas, NV 89118
                                                </li>

                                            </ul>
                                            <ul class="mt-4">
                                                <li>
                                                   <strong> Pickup:</strong> Thu, 01/25-01/26 - 08:00-15:00
                                                </li>
                                                <li>
                                                   <strong>  Contact: </strong> John Hanna - 610-246-5659 - jhanna@pdiscan.com
                                                </li>


                                            </ul>
                                        </div>
                                    </div>

                                    <div class="g table-responsive mt-5">
                                        <table class="table border text-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                <th>Shipping Units</th>
                                                <th>Description</th>
                                                <th>L x W x H (in)</th>
                                                <th>Weight (lbs)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1 - Pallet</td>
                                                    <td>Exhibit Materials</td>
                                                    <td>	48 X 48 X 52</td>
                                                    <td> 550 </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="mt-3"> Pieces: 1 - Weight: 550 lbs</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="comon-bolock-div">
                            <div class="top-header08">
                                <h3> Status </h3>
                            </div>
                            <div class="textr-block">
                                <div class="top-serct-para">
                                    <select name="status" class="form-select" aria-label="Default select example">
                                        <option value="Pending"@php
                                            if($data['status']=='Pending') { echo 'selected'; }
                                        @endphp>Pending</option>
                                        <option value="Standby"@php
                                        if($data['status']=='Standby') { echo 'selected'; }
                                    @endphp>Standby</option>
                                        <option value="Completed"@php
                                        if($data['status']=='Completed') { echo 'selected'; }
                                    @endphp>Completed</option>
                                      </select>
                                </div>
                            </div>
                        </div>

                        <div class="comon-bolock-div mt-4">
                            <div class="top-header08">
                                <h3> Tradeshow Information </h3>
                            </div>
                            <div class="textr-block">
                                <div class="top-serct-para">
                                    <ul>
                                        <li>
                                            <strong> Frequency: </strong> {{ $tradeshow[0]->frequency }}
                                        </li>
                                        <li>
                                            <strong> Tradeshow:  </strong> {{ $tradeshow[0]->show_name }}
                                        </li>
                                        <li>
                                            <strong> Venue:  </strong> Caesar's Resort and Casino - Las Vegas, NV 89109
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="top-footer">
                                <h3> Tradeshow Information: 0.0 miles </h3>
                            </div>
                        </div>

                        <div class="comon-bolock-div mt-4">
                            <div class="top-header08">
                                <h3> Quote Information </h3>
                            </div>
                            <div class="textr-block">

                                <div class="top-serct-para">

                                    <div class="top-serct-para">
                                        <ul>
                                            <li>
                                                <strong> Contact: </strong> {{ $quote[0]->customer_contact_name }}
                                            </li>
                                            <li>
                                                <strong> Shipment:  </strong> {{ $quote[0]->shipment_type }}
                                            </li>
                                            <li>
                                                <strong> Venue:  </strong> {{ $quote[0]->tradeshow_venue }}
                                            </li>
                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="comon-bolock-div">
                            <div class="top-header08">
                                <h3> Comments </h3>
                            </div>
                            <div class="textr-block">

                                <p> Created from RFQ </p>

                            </div>

                        </div>
                    </div>
                </div>
        </div>
    </div>
</main>

<x-footer/>
