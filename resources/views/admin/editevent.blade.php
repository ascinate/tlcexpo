<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
            <form name="addfrm" action="{{ URL::to('updateevent') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $data['id'] }}" />
                @csrf
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add Event</h4>

                          <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
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
                                <div class="form-group">
                                    <label for="exampleInputName1">Event Name</label>
                                    <input type="text" class="form-control" name="event_name" value="{{ $data['event_name'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Main Venue </label>
                                    <select name="main_venue" class="form-select">
                                        <option value="">--Select--</option>
                                        @php
                                        $venues = \DB::table('venues')->get();
                                        foreach($venues as $venue)
                                        {
                                        @endphp
                                          <option value="{{ $venue->id }}"@php
                                            if($venue->id==$data['main_venue']) { echo 'selected'; }
                                        @endphp>
                                            {{ $venue->address }}
                                        </option>
                                        @php
                                            }
                                        @endphp
                                    </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Show Site</label>
                                    <input type="text" name="showsite" class="form-control"  value="{{ $data['showsite'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Start Date</label>
                                    <input type="date" name="event_start_date" class="form-control" value="{{ $data['event_start_date'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> End Date</label>
                                    <input type="date" name="event_end_date" class="form-control" value="{{ $data['event_end_date'] }}"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Event Photo</label>
                                    <input type="file" name="event_logo" class="form-control" />
                                    &nbsp;<img src="../../uploads/{{ $data['event_logo'] }}" width="120" height="100" />
                                </div>
                                </div>

                           </div>
                      </div>

                        <div class="card-body add-remove-div">
                          <h4 class="card-title">Exhibit Hours</h4>
                            @php
                                $exhibit = json_decode($data['exhibit_hours'],true);

                                $count = count($exhibit['exhibit_date']);
                                for($x=1;$x<=($count);$x++)
                                {
                            @endphp
                              <div class="row input-form" id="primary-div">
                                 <div class="col-lg-12 mb-2">
                                     <h5> Day {{ $x }} </h5>
                                 </div>
                                  <div class="col-lg-4">
                                      <div class="form-group">
                                      <label> Exhibit date</label>
                                      <input type="date" name="exhibit_date[]" value="{{ $exhibit['exhibit_date'][$x-1] }}" class="form-control txt"/>
                                  </div>
                                  </div>

                                  <div class="col-lg-4">
                                      <div class="form-group">
                                      <label> Opening Time</label>
                                      <input type="time" name="exhibit_open_time[]" value="{{ $exhibit['exhibit_open_time'][$x-1] }}" class="form-control txt"/>
                                  </div>
                                  </div>

                                  <div class="col-lg-3">
                                      <div class="form-group">
                                      <label> Close Time</label>
                                      <input type="time" name="exhibit_closed_time[]" value="{{ $exhibit['exhibit_closed_time'][$x-1] }}" class="form-control txt" required/>
                                     </div>
                                </div>
                                  <div class="col-lg-1 ps-1">
                                      <a class="btn btn-default delBtnh p-0">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg>
                                      </a>
                                  </div>

                              </div>
                              @php
                                }
                            @endphp
                              <div id="ccolone" class="col-lg-12"></div>
                              <div class="row">
                                <div class="col-lg-3">
                                    <button  type='button' id='but_add' class="btn btn-gradient-primary me-2">Add new</button>
                                 </div>
                              </div>

                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Warehouse Address</label>
                                    <input type="text" class="form-control" name="warehouse_address" value="{{ $data['warehouse_address'] }}" required>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Address line 1 </label>
                                    <input type="text" name="address_line_1" class="form-control" value="{{ $data['address_line_1'] }}" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Address line 2</label>
                                    <input type="text" class="form-control" name="address_line_2" value="{{ $data['address_line_2'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Address line 3 </label>
                                    <input type="text" name="address_line_3" class="form-control" value="{{ $data['address_line_3'] }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">City</label>
                                    <input type="text" class="form-control" name="city" value="{{ $data['city'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> State </label>
                                    <input type="text" name="state" class="form-control" value="{{ $data['state'] }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Zipcode</label>
                                    <input type="text" class="form-control" name="zipcode" value="{{ $data['zipcode'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Country </label>
                                    <input type="text" name="country" class="form-control" value="{{ $data['country'] }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">Open Date</label>
                                    <input type="date" class="form-control" name="open_date" value="{{ $data['open_date'] }}">
                                </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Adv Whse Deadline </label>
                                    <input type="date" name="whse_deadline" class="form-control" value="{{ $data['whse_deadline'] }}"/>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Operation Days / Hours </label>
                                    <input type="text" name="operation_days_hours" class="form-control" value="{{ $data['operation_days_hours'] }}"/>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div class="d-flex align-items-center">
                              <h4 class="card-title">Marshaling Yard</h4>
                              <div class="toggle-button-cover">
                                <div class="button-cover">
                                    <div class="button r" id="button-1">
                                    <input type="checkbox" name="marshaling_yard" value="Y" class="checkbox">
                                    <div class="knobs"></div>
                                    <div class="layer"></div>
                                </div>
                              </div>
                            </div>

                           </div>
                        </div>

                        <div id="sho-card" class="card-body pb-0">

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Marshaling Address</label>
                                    <input type="text" class="form-control" value="{{ $data['marshaling_address'] }}" name="marshaling_address">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Address line 1 </label>
                                    <input type="text" name="marshaling_address_line_1" value="{{ $data['marshaling_address_line_1'] }}" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Marshaling Address line 2</label>
                                    <input type="text" class="form-control" name="marshaling_address_line_2" value="{{ $data['marshaling_address_line_2'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Marshaling  Address line 3 </label>
                                    <input type="text" name="marshaling_address_line_3" class="form-control" value="{{ $data['marshaling_address_line_3'] }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Marshaling City</label>
                                    <input type="text" class="form-control" name="marshaling_city" value="{{ $data['marshaling_city'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Marshaling  State </label>
                                    <input type="text" name="marshaling_state" class="form-control" value="{{ $data['marshaling_state'] }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Marshaling Zipcode</label>
                                    <input type="text" class="form-control" name="marshaling_zipcode" value="{{ $data['marshaling_zipcode'] }}">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Marshaling Country </label>
                                    <input type="text" name="marshaling_country" class="form-control" value="{{ $data['marshaling_country'] }}"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Marshaling Services</label>&nbsp;
                                        <input type="checkbox" value="Y" name="marshaling_services" @php
                                            if($data['marshaling_services']=='Y') { echo 'checked'; }
                                        @endphp>
                                    </div>
                                    </div>

                                    <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Yard Fee($)</label>
                                        <input type="text" class="form-control" name="yard_fee" value="{{ $data['yard_fee'] }}">
                                    </div>
                                    </div>

                                    <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Marshaling Instruction</label>
                                        <input type="text" class="form-control" name="marshaling_instruction" value="{{ $data['marshaling_instruction'] }}">
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
                            for($d=1;$d<=($count_movein);$d++)
                             {
                            @endphp
                            <div class="from-invoice-01 bort-y" id="show-pri">
                                <a class="btn btn-default delBtnhn p-0 float-start">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg>
                                </a>
                                <h4 class="card-title col-lg-10 float-start ms-2">Target Sechedule  {{ $d }}</h4>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <label> Target Area Description </label>
                                        <input type="text" name="move_in_description[]" value="{{ $exhibitor_movein['move_in_description'][$d-1] }}" class="form-control txt" />
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Weekday </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Date </label>
                                                <input type="date" name="move_in_date[]" value="{{ $exhibitor_movein['move_in_date'][$d-1] }}" class="form-control txt" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Opens </label>
                                                <input type="time" name="move_in_open_time[]" value="{{ $exhibitor_movein['move_in_open_time'][$d-1] }}" class="form-control txt" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Close </label>
                                                <input type="time" name="move_in_closed_time[]" value="{{ $exhibitor_movein['move_in_closed_time'][$d-1] }}" class="form-control txt" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Deadline </label>
                                                <input type="time" name="move_in_deadline[]" value="{{ $exhibitor_movein['move_in_deadline'][$d-1] }}" class="form-control txt" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                              }
                            @endphp
                            <div id="ccolonej" class="col-lg-12"></div>
                            <div class="pt-0">
                                    <button type="button" id="sh-add" class="btn btn btn-success">
                                        Add Target Schedule
                                    </button>
                            </div>
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
                                <a class="btn btn-default delBtnhn2 p-0 float-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg>
                                </a>
                                <h4 class="card-title col-lg-10 float-start ms-2">Target Sechedule  {{ $k }}</h4>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <label> Target Area Description </label>
                                        <input type="text" name="move_out_description[]" value="{{ $exhibitor_moveout['move_out_description'][$k-1] }}" class="form-control txt" />
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Weekday </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Date </label>
                                                <input type="date" name="move_out_date[]" value="{{ $exhibitor_moveout['move_out_date'][$k-1] }}" class="form-control txt"/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Opens </label>
                                                <input type="time" name="move_out_open_time[]" value="{{ $exhibitor_moveout['move_out_open_time'][$k-1] }}" class="form-control txt"/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Close </label>
                                                <input type="time" name="move_out_closed_time[]" value="{{ $exhibitor_moveout['move_out_closed_time'][$k-1] }}" class="form-control txt"/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Deadline </label>
                                                <input type="time" name="move_out_deadline[]" value="{{ $exhibitor_moveout['move_out_deadline'][$k-1] }}" class="form-control txt"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                            @php
                            }
                            @endphp
                            <div id="ccolonej2" class="col-lg-12"></div>
                            <div class=" pt-0">
                                <button type="button" id="sh-add2" class="btn btn btn-success">
                                    Add Target Schedule
                                </button>
                            </div>
                          </div>

                      </div>
                  </div>


                  <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Notes</label>
                            <textarea name="notes" rows="5" cols="20" class="form-control">
                                {{ $data['notes'] }}
                            </textarea>
                        </div>
                    </div>
                </div>

               </div>

               <button type="submit" class="btn btn-gradient-primary me-2" align="right">Submit</button>
               <button class="btn btn-light" type="button" onclick="javascript:history.go(-1);" align="right">Cancel</button>
             </form>
           </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
