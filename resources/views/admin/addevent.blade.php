<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                <form name="addfrm" action="{{ URL::to('insertevent') }}" method="POST" class="forms-sample">
                 @csrf
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add Event</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Event Name</label>
                                    <input type="text" class="form-control" name="event_name" placeholder="TradeShow Name">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Main Venue </label>
                                    <input type="text" name="main_venue" class="form-control" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Show Site</label>
                                    <input type="text" name="showsite" class="form-control" required/>
                                </div>
                                </div>
                            </div>
                      </div>

                        <div class="card-body">
                          <h4 class="card-title">Exhibit Hours</h4>
                              <div class="row input-form">
                                <div class="col-lg-1">&nbsp;</div>
                                  <div class="col-lg-1">
                                      <div class="form-group">
                                        <label style="padding-top:30px;">
                                            <i class="mdi mdi-delete" style="font-size: 35px;"></i>

                                        </label>
                                      </div>
                                  </div>
                                  <div class="col-lg-1">&nbsp;</div>
                                  <div class="col-lg-3">
                                      <div class="form-group">
                                      <label> Exhibit date</label>
                                      <input type="date" name="exhibit_date[]" class="form-control txt" required/>
                                  </div>
                                  </div>

                                  <div class="col-lg-3">
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

                              </div>
                              <div class="row">
                                <div class="col-lg-3">
                                    <button  type='button' id='but_add' class="btn btn-gradient-primary me-2">Add new</button>
                                 </div>
                              </div>
                              <div>&nbsp;</div>
                        </div>

                        <div class="card-body">

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


                        </div>
                      </div>
                  </div>
               </div>

               <button type="submit" class="btn btn-gradient-primary me-2" align="right">Submit</button>
               <button class="btn btn-light" onclick="javascript:history.go(-1);" align="right">Cancel</button>
             </form>
           </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
