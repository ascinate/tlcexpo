<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('updateshipment') }}" method="POST" class="forms-sample">
            <input type="hidden" name="id" value="{{ $data['id'] }}">
            @csrf

            <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit Shipment</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Customer</label>
                                        <select name="customer" id="customers" class="form-select">
                                            <option value=""></option>
                                            @php
                                                $customer = \DB::table('customers')->get();
                                                foreach($customer as $cust)
                                                {
                                            @endphp
                                            <option value="{{ $cust->id }}"@php
                                                if($cust->id==$data['customer']){ echo 'selected'; }
                                            @endphp>{{ $cust->customer_name }}</option>
                                            @php
                                                }
                                            @endphp
                                        </select>
                                    </div>
                                    </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Order No </label>
                                    <input type="text" name="order_no" value="{{ $data['order_no'] }}" class="form-control" readonly />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Trip</label>
                                    <select name="trip" class="form-select">
                                        <option value=""></option>
                                        <option value="Inbound"@php if($data['trip']=='Inbound') { echo 'selected'; } @endphp>Inbound</option>
                                        <option value="Outbound"@php if($data['trip']=='Outbound') { echo 'selected'; } @endphp>Outbound</option>
                                    </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Load</label>
                                        <div id="xload"></div>

                                        <select name="loads[]" class="form-select" multiple id="loads">
                                            @php
                                               $loads = explode(",", $data['loads']);
                                                $datas = \DB::table('loads')->where('customer_id',$data['customer'])->get();
                                                foreach ($datas as $value) {
                                            @endphp
                                                <option value="{{ $value->id }}"@php if(in_array($value->id, $loads)) { echo 'selected'; } @endphp>
                                                    {{ $value->load_id }}
                                                </option>
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
                                     <option value="{{ $val->id }}"@php if($val->id==$data['quote']) { echo 'selected'; } @endphp>
                                        {{ $val->customer_contact_name }}
                                     </option>
                                    @php
                                        }
                                    @endphp
                                </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Trade Show </label>
                                        <select name="tradeshow" class="form-select">
                                            <option value=""></option>
                                            @php
                                                $tradeshows = \DB::table('tradeshows')->get();
                                                foreach($tradeshows as $trade)
                                                {
                                            @endphp
                                            <option value="{{ $trade->id }}"@php if($trade->id==$data['tradeshow']) { echo 'selected'; } @endphp>
                                                {{ $trade->show_name }}
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
                                    <input type="text" name="invoice_no" value="{{ $data['invoice_no'] }}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Invoice Date </label>
                                    <input type="date" name="invoice_date" value="{{ $data['invoice_date'] }}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label class="form-label"> Paid Date </label>
                                    <input type="date" name="paid_date" value="{{ $data['paid_date'] }}" class="form-control"/>
                                </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label"> Comments </label>
                                        <textarea name="comments" rows="5" cols="20" class="form-control">{{ $data['comments'] }}</textarea>
                                    </div>
                                </div>
                            </div>

                      </div>
                    </div>
                  </div>

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
