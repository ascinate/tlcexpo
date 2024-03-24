<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('insertshipment') }}" method="POST" class="forms-sample">
            @csrf
            <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add Shipment</h4>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Load</label>
                                    <select name="loads" class="form-select">
                                        <option value="">--Select--</option>
                                        @php
                                            $loads = \DB::table('loads')->get();
                                            foreach($loads as $load)
                                            {
                                                $cust = \DB::table('customers')->where('id', $load->customer_id)->get();
                                                $cname = @$cust[0]->customer_name;

                                                $trade = \DB::table('tradeshows')->where('id', $load->destination_tradeshow_id)->get();
                                                $sname = @$trade[0]->show_name;

                                                $shipment = $load->load_id.'-'.$cname.'-'.$sname;
                                        @endphp
                                         <option value="{{ $load->id }}">{{ $shipment }}</option>
                                        @php
                                            }
                                        @endphp
                                    </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Order No </label>
                                    <input type="text" name="order_no" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Trip</label>
                                    <select name="trip" class="form-select">
                                        <option value=""></option>
                                        <option value="Inbound">Inbound</option>
                                        <option value="Outbound">Outbound</option>
                                    </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Customer</label>
                                    <select name="customer" class="form-select">
                                        <option value=""></option>
                                        @php
                                            $customer = \DB::table('customers')->get();
                                            foreach($customer as $cust)
                                            {
                                        @endphp
                                        <option value="{{ $cust->id }}">{{ $cust->customer_name }}</option>
                                        @php
                                            }
                                        @endphp
                                    </select>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label> Select A Quote Request </label>
                                    <select name="quote" class="form-select">
                                        <option value="">--Select--</option>
                                    @php
                                         $entity = \DB::table('requestquotes')->get();
                                         foreach($entity as $val)
                                          {
                                    @endphp
                                     <option value="{{ $val->id }}">
                                        {{ $val->customer_contact_name }}
                                     </option>
                                    @php
                                        }
                                    @endphp
                                </select>
                                </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Invoice No </label>
                                    <input type="text" name="invoice_no" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Invoice Date </label>
                                    <input type="date" name="invoice_date" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label class="form-label"> Paid Date </label>
                                    <input type="date" name="paid_date" class="form-control"/>
                                </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label"> Comments </label>
                                        <input type="text" name="comments" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                      </div>
                    </div>
                  </div>

                  <!--<div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body add-remove-div">
                            <h4 class="card-title">Additional Address</h4>

                            <div class="row input-form" id="addr-div">

                                <div class="col-lg-11 mb-2">
                                    <h5> Contact 1 </h5>
                                </div>
                                <div class="col-lg-1 mb-2">
                                    <a class="btn btn-default deladdr p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg>
                                    </a>
                                </div>

                                 <div class="col-lg-6">
                                     <div class="form-group">
                                     <label> Address</label>
                                     <input type="text" name="add_address[]" class="form-control txt"/>
                                 </div>
                                 </div>

                                 <div class="col-lg-6">
                                     <div class="form-group">
                                     <label>Address 1</label>
                                     <input type="text" name="add_address1[]" class="form-control txt"/>
                                 </div>
                                 </div>

                                 <div class="col-lg-6">
                                     <div class="form-group">
                                     <label>Address 2</label>
                                     <input type="text" name="add_address2[]" class="form-control txt"/>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="add_city[]" class="form-control txt"/>
                                   </div>
                               </div>

                               <div class="col-lg-4">
                                <div class="form-group">
                                <label>State</label>
                                <input type="text" name="add_state[]" class="form-control txt"/>
                               </div>
                             </div>

                             <div class="col-lg-4">
                                <div class="form-group">
                                <label>Zipcode</label>
                                <input type="text" name="add_zipcode[]" class="form-control txt"/>
                               </div>
                             </div>

                             <div class="col-lg-4">
                                <div class="form-group">
                                <label>Country</label>
                                <input type="text" name="add_country[]" class="form-control txt"/>
                               </div>
                             </div>

                             </div>
                             <div id="addrclone" class="col-lg-12"></div>
                             <div class="row">
                               <div class="col-lg-3">
                                   <button  type='button' id='addi_addr' class="btn btn-gradient-primary me-2">Add new</button>
                                </div>
                             </div>

                        </div>
                    </div>
                  </div>-->

                  <div class="col-lg-3">
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>

                    <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                  </div>

            </div> <!---- End main row ------->
           </form>

         </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <x-adminfooter/>
