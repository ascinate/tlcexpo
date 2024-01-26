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
                                    <h2 class="mt-2 d-block"> 19.89 </h2>
                                </div>
                                <span class="iconu-comon one1">
                                    <i data-feather="truck"></i>
                                </span>
                                </div>
                                <div class="stat-txer mt-3">
                                    Overview of Last month
                                    <span class="float-end">70%</span>
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
                                    <h2 class="mt-2 d-block"> 25.45 </h2>
                                </div>
                                <span class="iconu-comon one2">
                                    <i data-feather="archive"></i>
                                </span>
                                </div>
                                <div class="stat-txer mt-3">
                                    Overview of Last month
                                    <span class="float-end">60%</span>
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
                                    <h5> Tradeshows </h5>
                                    <h2 class="mt-2 d-block"> 48.89 </h2>
                                </div>
                                <span class="iconu-comon one3">
                                    <i data-feather="box"></i>
                                </span>
                                </div>
                                <div class="stat-txer mt-3">
                                    Overview of Last month
                                    <span class="float-end">55%</span>
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
                                <div class="dropdown comu08">
                                    <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">
                                        <span class="icou">
                                            <i data-feather="eye"></i>
                                        </span>
                                        <span> View all</span>
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <span class="icou">
                                            <i data-feather="download-cloud"></i>
                                        </span>
                                        <span> Download </span>
                                    </a></li>
                                    </ul>
                                </div>
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
                                        <tr>
                                            <td>20756</td>
                                            <td>ATMIA 2024</td>
                                            <td>R23-151</td>
                                            <td>2075601</td>
                                            <td>Standby</td>
                                        </tr>

                                        <tr>
                                            <td>20756</td>
                                            <td>ATMIA 2024</td>
                                            <td>R23-151</td>
                                            <td>2075601</td>
                                            <td>Standby</td>
                                        </tr>
                                        <tr>
                                            <td>20756</td>
                                            <td>ATMIA 2024</td>
                                            <td>R23-151</td>
                                            <td>2075601</td>
                                            <td>Tendered</td>
                                        </tr>

                                        <tr>
                                            <td>20752</td>
                                            <td>ATMIA 2024</td>
                                            <td>R23-151</td>
                                            <td>2075601</td>
                                            <td>Standby</td>
                                        </tr>
                                        <tr>
                                            <td>20756</td>
                                            <td>ATMIA 2024</td>
                                            <td>R23-151</td>
                                            <td>2075601</td>
                                            <td>Tendered</td>
                                        </tr>

                                        <tr>
                                            <td>20756</td>
                                            <td>ATMIA 2024</td>
                                            <td>R23-151</td>
                                            <td>2075601</td>
                                            <td>Standby</td>
                                        </tr>
                                        <tr>
                                            <td>20756</td>
                                            <td>ATMIA 2024</td>
                                            <td>R23-151</td>
                                            <td>2075601</td>
                                            <td>Standby</td>
                                        </tr>
                                        <tr>
                                            <td>20756</td>
                                            <td>ATMIA 2024</td>
                                            <td>R23-151</td>
                                            <td>2075601</td>
                                            <td>Standby</td>
                                        </tr>
                                        <tr>
                                            <td>20756</td>
                                            <td>ATMIA 2024</td>
                                            <td>R23-151</td>
                                            <td>2075601</td>
                                            <td>Standby</td>
                                        </tr>
                                        <tr>
                                            <td>20756</td>
                                            <td>ATMIA 2024</td>
                                            <td>R23-151</td>
                                            <td>2075601</td>
                                            <td>Standby</td>
                                        </tr>
                                        <tr>
                                            <td>20756</td>
                                            <td>ATMIA 2024</td>
                                            <td>R23-151</td>
                                            <td>2075601</td>
                                            <td>Standby</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1 col-lg-4 col-xl-4">
                        <div class="tradeb-div">
                            <div class="d-flex top-head05 align-items-center justify-content-between">
                                <h2 class="box-headr"> Tradeshows </h2>
                                <div class="dropdown comu08">
                                    <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">
                                            <span class="icou">
                                                <i data-feather="eye"></i>
                                            </span>
                                            <span> View all</span>
                                        </a></li>
                                        <li><a class="dropdown-item" href="#">
                                            <span class="icou">
                                                <i data-feather="download-cloud"></i>
                                            </span>
                                            <span> Download </span>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr/>
                            <div class="tard-show-div">
                                <div class="comon-shouwi">
                                    <h5> Impressions LB 2024 - Long Beach, CA  </h5>
                                    <p> <span class="clae"><i data-feather="calendar"></i> </span> 2024-01-19 </p>
                                </div>
                                <div class="comon-shouwi">
                                    <h5> Impressions LB 2024 - Long Beach, CA  </h5>
                                    <p> <span class="clae"><i data-feather="calendar"></i> </span> 2024-01-19 </p>
                                </div>
                                <div class="comon-shouwi">
                                    <h5> Impressions LB 2024 - Long Beach, CA  </h5>
                                    <p> <span class="clae"><i data-feather="calendar"></i> </span> 2024-01-19 </p>
                                </div>
                                <div class="comon-shouwi">
                                    <h5> Impressions LB 2024 - Long Beach, CA  </h5>
                                    <p> <span class="clae"><i data-feather="calendar"></i> </span> 2024-01-19 </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-1 col-lg-12 col-xl-12">
                        <div class="table-cart">
                            <div class="d-flex top-head05 align-items-center justify-content-between">
                                <h2 class="box-headr"> Current Loads </h2>
                                <div class="dropdown comu08">
                                    <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">
                                            <span class="icou">
                                                <i data-feather="eye"></i>
                                            </span>
                                            <span> View all</span>
                                        </a></li>
                                        <li><a class="dropdown-item" href="#">
                                            <span class="icou">
                                                <i data-feather="download-cloud"></i>
                                            </span>
                                            <span> Download </span>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <hr class="my-0"/>

                            <div class="g table-responsive">
                                <table id="example" class="table table-striped nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Load</th>
                                        <th>Pickup</th>
                                        <th>Deliver By</th>
                                        <th>Status</th>
                                        <th>Ship Type</th>
                                        <th>Customer</th>
                                        <th>Booth#</th>
                                        <th>Tradeshow</th>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2075501</td>
                                            <td>02/07/2024</td>
                                            <td></td>
                                            <td>Pending</td>
                                            <td>TL-From Show</td>
                                            <td>Alvarado Dormakaba Group</td>
                                            <td>213</td>
                                            <td>NRF Protect 2022</td>
                                            <td>Cleveland, OH</td>
                                            <td>Chino, CA</td>
                                        </tr>
                                        <tr>
                                            <td>2075501</td>
                                            <td>02/07/2024</td>
                                            <td></td>
                                            <td>Pending</td>
                                            <td>TL-From Show</td>
                                            <td>Alvarado Dormakaba Group</td>
                                            <td>213</td>
                                            <td>NRF Protect 2022</td>
                                            <td>Cleveland, OH</td>
                                            <td>Chino, CA</td>
                                        </tr>
                                        <tr>
                                            <td>2075501</td>
                                            <td>02/07/2024</td>
                                            <td></td>
                                            <td>Pending</td>
                                            <td>TL-From Show</td>
                                            <td>Alvarado Dormakaba Group</td>
                                            <td>213</td>
                                            <td>NRF Protect 2022</td>
                                            <td>Cleveland, OH</td>
                                            <td>Chino, CA</td>
                                        </tr>
                                        <tr>
                                            <td>2075501</td>
                                            <td>02/07/2024</td>
                                            <td></td>
                                            <td>Pending</td>
                                            <td>TL-From Show</td>
                                            <td>Alvarado Dormakaba Group</td>
                                            <td>213</td>
                                            <td>NRF Protect 2022</td>
                                            <td>Cleveland, OH</td>
                                            <td>Chino, CA</td>
                                        </tr>
                                        <tr>
                                            <td>2075501</td>
                                            <td>02/07/2024</td>
                                            <td></td>
                                            <td>Pending</td>
                                            <td>TL-From Show</td>
                                            <td>Alvarado Dormakaba Group</td>
                                            <td>213</td>
                                            <td>NRF Protect 2022</td>
                                            <td>Cleveland, OH</td>
                                            <td>Chino, CA</td>
                                        </tr>
                                        <tr>
                                            <td>2075501</td>
                                            <td>02/07/2024</td>
                                            <td></td>
                                            <td>Pending</td>
                                            <td>TL-From Show</td>
                                            <td>Alvarado Dormakaba Group</td>
                                            <td>213</td>
                                            <td>NRF Protect 2022</td>
                                            <td>Cleveland, OH</td>
                                            <td>Chino, CA</td>
                                        </tr>
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
