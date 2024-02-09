<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <form name="addfrm" action="{{ URL::to('updateevent') }}" method="POST" class="forms-sample">
            <input type="hidden" name="id" value="{{ $data['id'] }}" />
            @csrf
            <div class="row">

               <div class="col-12 grid-margin stretch-card d-inline-block">
                   <h3 class="mb-3 col-lg-12"> Edit Event </h3>
                   <div class="card col-lg-12">
                      <div class="card-body">

                            <div class="row gy-4 g-lg-4">
                               <div class="col-lg-6">
                                    <div class="form-group crm-oi">
                                        <label for="exampleInputName1">Choose Tradeshow</label>
                                        <select name="tradeshow" class="form-select">
                                            <option value="">--Select--</option>
                                            @php
                                            $shows = \DB::table('tradeshows')->get();
                                            foreach($shows as $show)
                                            {
                                            @endphp
                                            <option value="{{ $show->id }}"@php
                                                if($show->id==$data['tradeshow']) { echo 'selected'; }
                                            @endphp>
                                                {{ $show->show_name }}
                                            </option>
                                            @php
                                                }
                                            @endphp
                                        </select>
                                    </div>
                                </div>

                               <div class="col-lg-6">
                                   <div class="form-group crm-oi">
                                        <label for="exampleInputName1">Event Name</label>
                                        <span class="d-block">
                                        {{ $data['event_name'] }}
                                        </span>
                                   </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group crm-oi">
                                      <label> Main Venue </label>
                                        <span class="d-block">
                                        @php
                                            $venue = \DB::table('venues')->where('id',$data['main_venue'])->get();
                                            echo $venue[0]->address;
                                        @endphp
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group crm-oi">
                                        <label> Show Site</label>
                                        <span class="d-block">
                                        {{ $data['showsite'] }}
                                        </span>
                                   </div>
                                </div>
                            </div>
                      </div>
                   </div>
               </div>

                <div class="col-12 grid-margin stretch-card d-inline-block">
                    <h3 class="mb-3 col-lg-12"> Exhibit Hours </h3>
                         <div class="card col-lg-12">
                            <div class="card-body add-remove-div">
                                @php
                                    $exhibit = json_decode($data['exhibit_hours'],true);

                                    $count = count($exhibit['exhibit_date']);
                                    for($x=1;$x<=($count);$x++)
                                    {
                                @endphp
                                <div class="row input-form gy-4 g-lg-4" id="primary-div">
                                    <div class="col-lg-12">
                                        <h5> Day {{ $x }} </h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group crm-oi">
                                            <label> Exhibit date</label>
                                            <span class="d-block">
                                            @php
                                                $ex_dt = explode("-", @$exhibit['exhibit_date'][$x-1]);
                                                $exdt = mktime(12,0,0, $ex_dt[1],$ex_dt[2],$ex_dt[0]);
                                                echo date('F j, Y', $exdt);
                                            @endphp
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group crm-oi">
                                                <label> Opening Time</label>
                                                <span class="d-block">
                                                {{ @$exhibit['exhibit_open_time'][$x-1] }}
                                                </span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group crm-oi">
                                            <label> Close Time</label>
                                            <span class="d-block">
                                            {{ @$exhibit['exhibit_closed_time'][$x-1] }}
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                @php
                                    }
                                @endphp
                                <div id="ccolone" class="col-lg-12"></div>
                            </div>
                        </div>

                        <div class="comi mt-5">
                           <h3 class="mb-3 col-lg-12"> Warehouse </h3>
                            <div class="card">
                                <div class="card-body">

                                    <div class="row gy-4 g-lg-4">
                                        <div class="col-lg-6">
                                            <div class="form-group crm-oi">
                                                <label for="exampleInputName1">Warehouse Address</label>
                                                <span class="d-block">
                                                {{ $data['warehouse_address'] }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group crm-oi">
                                                <label> Address line 1 </label>
                                                <span class="d-block">
                                                {{ $data['address_line_1'] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group crm-oi">
                                                <label for="exampleInputName1">Address line 2</label>
                                                <span class="d-block">
                                                {{ $data['address_line_2'] }}
                                            </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group crm-oi">
                                                <label> Address line 3 </label>
                                                <span class="d-block">
                                                {{ $data['address_line_3'] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group crm-oi">
                                                <label for="exampleInputName1">City</label>
                                                <span class="d-block">
                                                {{ $data['city'] }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group crm-oi">
                                                <label> State </label>
                                                <span class="d-block">
                                                {{ $data['state'] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                        <div class="form-group crm-oi">
                                            <label for="exampleInputName1">Zipcode</label>
                                            <span class="d-block">
                                            {{ $data['zipcode'] }}
                                            </span>
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group crm-oi">
                                                    <label> Country </label>
                                                    <span class="d-block">
                                                    {{ $data['country'] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                        <div class="form-group crm-oi">
                                            <label for="exampleInputName1">Open Date</label>
                                                <span class="d-block">
                                                @php
                                                    $open_date = explode("-", $data['open_date']);
                                                    $podt = mktime(12,0,0, $open_date[1],$open_date[2],$open_date[0]);
                                                    echo date('F j, Y', $podt);
                                                @endphp
                                            </span>
                                        </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group crm-oi">
                                                <label> Adv Whse Deadline </label>
                                                    <span class="d-block">
                                                    @php
                                                        $whse_deadline = explode("-", $data['whse_deadline']);
                                                        $whdt = mktime(12,0,0, $whse_deadline[1],$whse_deadline[2],$whse_deadline[0]);
                                                        echo date('F j, Y', $whdt);
                                                    @endphp
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group crm-oi">
                                                    <label> Operation Days / Hours </label>
                                                    <span class="d-block">
                                                    {{ $data['operation_days_hours'] }}
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            if($data['marshaling_yard']=='Y')
                        @endphp
                        <div class="comi mt-5">
                            <h3 class="mb-3 col-lg-12"> Marshaling </h3>

                            <div class="card">
                                <div id="sho-card" class="card-body pb-0">

                                    <div class="row gy-4 g-lg-4">
                                        <div class="col-lg-6">
                                        <div class="form-group  crm-oi">
                                            <label for="exampleInputName1">Marshaling Address</label>
                                            <span class="d-block">
                                            {{ $data['marshaling_address'] }}
                                        </span>
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group  crm-oi">
                                            <label> Address line 1 </label>
                                            <span class="d-block">
                                            {{ $data['marshaling_address_line_1'] }}
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                        <div class="form-group  crm-oi">
                                            <label for="exampleInputName1">Marshaling Address line 2</label>
                                            <span class="d-block">
                                            {{ $data['marshaling_address_line_2'] }}
                                            </span>
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group  crm-oi">
                                            <label>Marshaling  Address line 3 </label>
                                            <span class="d-block">
                                            {{ $data['marshaling_address_line_3'] }}
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                        <div class="form-group  crm-oi">
                                            <label for="exampleInputName1">Marshaling City</label>
                                            <span class="d-block">
                                            {{ $data['marshaling_city'] }}
                                            </span>
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group  crm-oi">
                                            <label>Marshaling  State </label>
                                            <span class="d-block">
                                            {{ $data['marshaling_state'] }}
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                        <div class="form-group  crm-oi">
                                            <label for="exampleInputName1">Marshaling Zipcode</label>
                                            <span class="d-block">
                                            {{ $data['marshaling_zipcode'] }}
                                            </span>
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group  crm-oi">
                                            <label>Marshaling Country </label>
                                            <span class="d-block">
                                            {{ $data['marshaling_country'] }}
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group  crm-oi">
                                                <label for="exampleInputName1">Marshaling Services</label>&nbsp;
                                                <span class="d-block">
                                                @php if($data['marshaling_services']=='Y') { echo 'Yes'; } @endphp
                                                </span>
                                            </div>
                                            </div>

                                            <div class="col-lg-4">
                                            <div class="form-group  crm-oi">
                                                <label for="exampleInputName1">Yard Fee($)</label>
                                                <span class="d-block">
                                                {{ $data['yard_fee'] }}
                                                </span>
                                            </div>
                                            </div>

                                            <div class="col-lg-4">
                                            <div class="form-group  crm-oi">
                                                <label for="exampleInputName1">Marshaling Instruction</label>
                                                <span class="d-block">
                                                {{ $data['marshaling_instruction'] }}
                                                </span>
                                            </div>
                                            </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                </div>

                <div class="crm-div my-5">
                      <h3 class="mb-3"> Exhibitor Move-in </h3>
                      <div class="card">
                          <div class="card-body">

                          @php
                            $exhibitor_movein = json_decode($data['exhibitor_movein'],true);

                            $count_movein = count($exhibitor_movein['move_in_description']);

                            for($i=1;$i<=($count_movein);$i++)
                            {
                          @endphp

                            <div class="from-invoice-01 bort-y" id="show-pri">
                            <h4 class="card-title col-lg-10 float-start ms-2">Target Sechedule {{ $i }}</h4>
                               <div class="col-lg-12">
                                     <div class="form-group  crm-oi mt-3 d-inline-block">
                                        <label class="mb-0"> Target Area Description </label>
                                        <span class="ms-3 ">
                                            {{ $exhibitor_movein['move_in_description'][$i-1] }}
                                        </span>
                                    </div>
                               </div>

                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group  crm-oi">
                                                <label> Weekday </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group  crm-oi">
                                                <label> Date </label>
                                                <span class="d-block">
                                                @php
                                                    $ex_mi = explode("-", @$exhibitor_movein['move_in_date'][$i-1]);
                                                    $exmi = mktime(12,0,0, $ex_mi[1],$ex_mi[2],$ex_mi[0]);
                                                    echo date('F j, Y', $exmi);
                                                @endphp
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group  crm-oi">
                                                <label> Opens </label>
                                                <span class="d-block">
                                                {{ $exhibitor_movein['move_in_open_time'][$i-1] }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group  crm-oi">
                                                <label> Close </label>
                                                <span class="d-block">
                                                {{ $exhibitor_movein['move_in_closed_time'][$i-1] }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group  crm-oi">
                                                <label> Deadline </label>
                                                <span class="d-block">
                                                {{ $exhibitor_movein['move_in_deadline'][$i-1] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                              }
                            @endphp
                          </div>
                      </div>
                  </div>

                  <div class="crm-div my-5">
                      <h3 class="mb-3"> Exhibitor Move-Out </h3>
                      <div class="card">
                          <div class="card-body">
                            @php
                            $exhibitor_moveout = json_decode($data['exhibitor_moveout'],true);

                            $count_moveout = count($exhibitor_moveout['move_out_description']);

                            for($k=1;$k<=($count_moveout);$k++)
                            {
                           @endphp

                            <div class="from-invoice-01 bort-y" id="show-pri2">
                             <h4 class="card-title col-lg-10 float-start ms-2">Target Sechedule {{ $k }}</h4>
                               <div class="col-lg-12">
                                    <div class="form-group crm-oi mt-3 d-inline-block">
                                            <label class="mb-0"> Target Area Description </label>
                                                <span class="ms-3">
                                                {{ $exhibitor_moveout['move_out_description'][$k-1] }}
                                                </span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group crm-oi">
                                                <label> Weekday </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group crm-oi">
                                                <label> Date </label>
                                                <span class="d-block">
                                                @php
                                                    $ex_mo = explode("-", @$exhibitor_moveout['move_out_date'][$k-1]);
                                                    $exmo = mktime(12,0,0, $ex_mo[1],$ex_mo[2],$ex_mo[0]);
                                                    echo date('F j, Y', $exmo);
                                                @endphp
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group crm-oi">
                                                <label> Opens </label>
                                                <span class="d-block">
                                                {{ $exhibitor_moveout['move_out_open_time'][$k-1] }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group crm-oi">
                                                <label> Close </label>
                                                <span class="d-block">
                                                {{ $exhibitor_moveout['move_out_closed_time'][$k-1] }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group crm-oi">
                                                <label> Deadline </label>
                                                <span class="d-block">
                                                {{ $exhibitor_moveout['move_out_deadline'][$k-1] }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>

                            @php
                             }
                            @endphp

                          </div>

                      </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <label for="exampleInputName1" class="mb-0">Notes</label>
                                    <span class="ms-3">   {{ $data['notes'] }} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div>&nbsp;</div>
                <div class="row">
                    <div class="col-lg-3">
                     <button type="button" class="btn btn-gradient-primary me-2" onclick="javascript:history.go(-1);">Back</button>
                    </div>
                </div>

               </div>
            </form>


           </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
