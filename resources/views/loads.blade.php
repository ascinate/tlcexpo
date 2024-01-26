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
                                        <td> <a href="{{ URL::to('load-details') }}"> 2075501 </a> </td>
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
                                        <td> <a href="{{ URL::to('load-details') }}"> 2075501 </a> </td>
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
                                        <td> <a href="{{ URL::to('load-details') }}"> 2075508 </a> </td>
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
                                        <td> <a href="{{ URL::to('load-details') }}"> 2075508 </a> </td>
                                        <td>02/07/2024</td>
                                        <td>01/23/2024</td>
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
</main>

<x-footer/>
