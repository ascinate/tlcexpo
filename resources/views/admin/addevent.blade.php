<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <form name="addfrm" action="{{ URL::to('insertevent') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
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
                                              <option value="{{ $show->id }}">{{ $show->show_name }}</option>
                                            @php
                                                }
                                            @endphp
                                        </select>
                                    </div>
                                    </div>

                               <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Event Name</label>
                                    <input type="text" class="form-control" name="event_name" placeholder="TradeShow Name">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Main Venue </label>
                                    <select name="main_venue" class="form-select">
                                        <option value="">--Select--</option>
                                        @php
                                          $venues = \DB::table('tradevenues')->get();
                                          foreach($venues as $venue)
                                          {
                                            $parent = \DB::table('entities')->where('id',$venue->entity_id)->get();
                                            $venueentity = @$parent[0]->legeal_name;
                                        @endphp
                                          <option value="{{ $venueentity }}">
                                            {{ $venueentity }}
                                         </option>
                                        @php
                                            }
                                        @endphp
                                    </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Show Contractor </label>
                                    <select name="show_contractor" class="form-select">
                                        <option value="">--Select--</option>
                                        @php
                                          $contractors = \DB::table('managecontractors')->get();
                                          foreach($contractors as $contract)
                                          {
                                        @endphp
                                          <option value="{{ $contract->id }}">
                                            {{ $contract->contractor_name }}
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
                                    <input type="text" name="showsite" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Start Date</label>
                                    <input type="date" name="event_start_date" class="form-control" required/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> End Date</label>
                                    <input type="date" name="event_end_date" class="form-control" required/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Event Photo</label>
                                    <input type="file" name="event_logo" class="form-control" />
                                </div>
                                </div>
                            </div>
                      </div>

                        <div class="card-body add-remove-div">
                          <h4 class="card-title">Exhibit Hours</h4>

                              <div class="row input-form" id="primary-div">
                                 <div class="col-lg-12 mb-2">
                                     <h5> Day 1 </h5>
                                 </div>
                                  <div class="col-lg-4">
                                      <div class="form-group">
                                      <label> Exhibit date</label>
                                      <input type="date" name="exhibit_date[]" class="form-control txt" required/>
                                  </div>
                                  </div>

                                  <div class="col-lg-4">
                                      <div class="form-group">
                                      <label> Opening Time</label>
                                      <input type="time" name="exhibit_open_time[]" class="form-control txt" required/>
                                  </div>
                                  </div>

                                  <div class="col-lg-3">
                                      <div class="form-group">
                                      <label> Close Time</label>
                                      <input type="time" name="exhibit_closed_time[]" class="form-control txt" required/>
                                     </div>
                                </div>
                                  <div class="col-lg-1 ps-1">
                                      <a class="btn btn-default delBtnh p-0">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg>
                                      </a>
                                  </div>

                              </div>
                              <div id="ccolone" class="col-lg-12"></div>
                              <div class="row">
                                <div class="col-lg-3">
                                    <button  type='button' id='but_add' class="btn btn-gradient-primary me-2">Add new</button>
                                 </div>
                              </div>

                        </div>

                        <div class="card-body">
                         <div class="row">
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Location Address</label>
                                     <select name="location" id="eventloc" class="form-select" required>
                                        <option value=""></option>
                                         @php
                                            $value = \DB::table('locations')->get();
                                            foreach($value as $val)
                                            {
                                         @endphp
                                           <option value="{{ $val->id }}"> {{ $val->location_descripton }}</option>
                                          @php
                                            }
                                         @endphp
                                      </select>
                                </div>
                         </div>
                        </div>

                        <!--<div id="addrss">
                            <div class="card-body" id="wareh">

                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Warehouse Address</label>
                                        <input type="text" class="form-control" name="warehouse_address" required>
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label> Address line 1 </label>
                                        <input type="text" name="address_line_1" class="form-control" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Address line 2</label>
                                        <input type="text" class="form-control" name="address_line_2">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label> Address line 3 </label>
                                        <input type="text" name="address_line_3" class="form-control"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">City</label>
                                        <input type="text" class="form-control" name="city">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label> State </label>
                                        <input type="text" name="state" class="form-control"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Zipcode</label>
                                        <input type="text" class="form-control" name="zipcode">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label> Country </label>
                                        <input type="text" name="country" class="form-control"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Open Date</label>
                                        <input type="date" class="form-control" name="open_date">
                                    </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label> Adv Whse Deadline </label>
                                        <input type="date" name="whse_deadline" class="form-control"/>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label> Operation Days / Hours </label>
                                        <input type="text" name="operation_days_hours" class="form-control"/>
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
                                        <input type="checkbox" name="marshaling_yard" value="Y" class="checkbox" />
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
                                        <input type="text" class="form-control" name="marshaling_address">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label> Address line 1 </label>
                                        <input type="text" name="marshaling_address_line_1" class="form-control"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Marshaling Address line 2</label>
                                        <input type="text" class="form-control" name="marshaling_address_line_2">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Marshaling  Address line 3 </label>
                                        <input type="text" name="marshaling_address_line_3" class="form-control"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Marshaling City</label>
                                        <input type="text" class="form-control" name="marshaling_city">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Marshaling  State </label>
                                        <input type="text" name="marshaling_state" class="form-control"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Marshaling Zipcode</label>
                                        <input type="text" class="form-control" name="marshaling_zipcode">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Marshaling Country </label>
                                        <input type="text" name="marshaling_country" class="form-control"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Marshaling Services</label>&nbsp;
                                            <input type="checkbox" value="Y" name="marshaling_services">
                                        </div>
                                        </div>

                                        <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Yard Fee($)</label>
                                            <input type="text" class="form-control" name="yard_fee">
                                        </div>
                                        </div>

                                        <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Marshaling Instruction</label>
                                            <input type="text" class="form-control" name="marshaling_instruction">
                                        </div>
                                        </div>
                                </div>

                            </div>
                        </div>-->

                        <div id="addrss2" style="display: none;"></div>

                      </div>
                  </div>

                  <div class="crm-div my-5">
                      <h3 class="mb-3"> Exhibitor Move-in </h3>
                      <div class="card">
                          <div class="card-body">
                            <div class="from-invoice-01 bort-y" id="show-pri">
                                <a class="btn btn-default delBtnhn p-0 float-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg>
                                </a>
                                <h4 class="card-title col-lg-10 float-start ms-2">Target Sechedule 1</h4>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <label> Target Area Description </label>
                                        <input type="text" name="move_in_description[]" class="form-control txt" />
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
                                                <input type="date" name="move_in_date[]" class="form-control txt" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Opens </label>
                                                <input type="time" name="move_in_open_time[]" class="form-control txt" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Close </label>
                                                <input type="time" name="move_in_closed_time[]" class="form-control txt" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Deadline </label>
                                                <input type="time" name="move_in_deadline[]" class="form-control txt" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                            <div class="from-invoice-01 bort-y" id="show-pri2">
                                <a class="btn btn-default delBtnhn2 p-0 float-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg>
                                </a>
                                <h4 class="card-title col-lg-10 float-start ms-2">Target Sechedule 1</h4>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <label> Target Area Description </label>
                                        <input type="text" name="move_out_description[]" class="form-control txt" />
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
                                                <input type="date" name="move_out_date[]" class="form-control txt"/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Opens </label>
                                                <input type="time" name="move_out_open_time[]" class="form-control txt"/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Close </label>
                                                <input type="time" name="move_out_closed_time[]" class="form-control txt"/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label> Deadline </label>
                                                <input type="time" name="move_out_deadline[]" class="form-control txt"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                            </div>

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

                            </textarea>
                        </div>
                    </div>
                </div>

               </div>

               <button type="submit" class="btn btn-gradient-primary me-2" align="right">Submit</button>
               <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);" align="right">Cancel</button>
             </form>
           </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
