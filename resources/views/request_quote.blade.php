<x-header/>

<section class="sub-banner d-inline-block w-100 position-relative" style="background: url(./images/conuy.jpg); background-size: cover; background-position: center;">
    <div class="container">
        <h1 class="page-titels"> ASAP Shipping Quote </h1>
        <nav>
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">ASAP Shipping Quote</li>
            </ol>
          </nav>
    </div>
    <div class="page-overlay"></div>
</section>

<form name="frmquote" action="{{ URL::to('requestquote') }}" method="POST">
    @csrf
<main class="float-start w-100">
    <section class="ship-form-diuv d-inline-block w-100">
        <div class="container">
            <h2 class="min-titels text-center"> Request <strong> for </strong> Quotation </h2>
            <p class="text-center"> Exhibit Materials Shipment - Request for Quote </p>
            <div class="form-quote-divu col-lg-11 mx-auto">
                <div class="row">
                    <div class="col-lg-4">
                       <div class="form-group">
                          <label class="form-label"> Customer Contact Name* </label>
                          <input type="text" name="customer_contact_name" class="form-control" required/>
                       </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                           <label class="form-label"> Email* </label>
                           <input type="email" name="email" class="form-control" required/>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                           <label class="form-label"> Phone* </label>
                           <input type="text" name="phone" class="form-control" required/>
                        </div>
                     </div>

                     <div class="col-lg-2">
                        <div class="form-group">
                           <label class="form-label"> Shipment Type </label>
                           <select name="shipment_type" id="shipment_type" class="form-select" required>
                                <option value=""></option>
                                <option value="Round trip">Round trip</option>
                                <option value="Inbound only">Inbound only</option>
                                <option value="Outbound only">Outbound only</option>
                                <option value="Show-to-show">Show-to-show</option>
                            </select>
                        </div>
                     </div>

                     <div class="col-lg-4">
                        <div class="form-group">
                           <label class="form-label"> Exhibitor Name </label>
                           <input type="text" name="exhibitor_name" class="form-control"/>
                        </div>
                     </div>

                     <div class="col-lg-2">
                        <div class="form-group">
                           <label class="form-label"> Booth # </label>
                           <input type="text" name="booth" class="form-control"/>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                           <label class="form-label"> Tradeshow Name * </label>
                           <select name="tradeshow_name" id="tradeshow" class="form-select" required>
                            <option value=""></option>
                            @php
                                $data = \DB::table('tradeshows')->get();
                                foreach($data as $val)
                                {
                            @endphp
                            <option value="{{ $val->id }}">{{ $val->show_name }}</option>
                             @php
                                }
                             @endphp
                          </select>
                        </div>
                     </div>

                     <div class="col-lg-12" id="return">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" name="return_to_origin" type="checkbox" value="Yes" id="return_to_origin" checked>
                                <label class="form-check-label" for="return">
                                    Return to Origin
                                </label>
                              </div>
                         </div>
                     </div>

                     <div class="row" id="show_m2" style="display: none;"></div>
                     <div class="col-lg-6" id="show_m">
                        <div class="form-group">
                           <label class="form-label"> Show Management Contractor </label>
                           <select name="show_management_contractor2" class="form-select">
                            <option value="">--Select--</option>
                        </select>
                        </div>
                     </div>

                     <div class="col-lg-6" id="tr_v">
                        <div class="form-group">
                           <label class="form-label"> Tradeshow Venue </label>
                           <select name="tradeshow_venue2" class="form-select" required>
                            <option value=""></option>
                          </select>
                        </div>
                     </div>

                     <div class="col-lg-4">
                        <div class="form-group">
                           <label class="form-label"> Show Destination* </label>

                           <div class="form-check">
                            <input class="form-check-input" type="radio" value="Advance Warehouse" name="show_destination" id="show1">
                            <label class="form-check-label" for="show1">
                                Advance Warehouse
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="Direct to Show" name="show_destination" id="show2" checked>
                            <label class="form-check-label" for="show2">
                                Direct to Show
                            </label>
                          </div>

                        </div>
                     </div>

                     <div class="col-lg-4">
                        <div class="form-group">
                           <label class="form-label"> Service Level </label>
                           <select name="service_level" class="form-select soy-hegiht">
                                <option value=""></option>
                                <option value="Standard Ground" selected>Standard Ground</option>
                                <option value="Expedited Ground">Expedited Ground</option>
                          </select>
                        </div>
                     </div>

                     <div class="col-lg-4">
                        <div class="form-group">
                           <label class="form-label"> Equipment </label>
                           <select name="equipment" class="form-select">
                            <option value="LTL Less-than-Truckload">LTL Less-than-Truckload</option>
                            <option value="Linehaul w/Shuttles">Linehaul w/Shuttles</option>
                            <option value="Full Truckload 53' Dry Van">Full Truckload 53' Dry Van</option>
                            <option value="Dropdeck Flatbed">Dropdeck Flatbed</option>
                            <option value="26' Straight Truck">26' Straight Truck</option>
                            <option value="16' Box Truck">16' Box Truck</option>
                            <option value="Sprinter Van">Sprinter Van</option>
                          </select>
                        </div>
                     </div>

                     <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label">  Detention Allowance </label>
                            <select name="detention_allowance" class="form-select soy-hegiht">
                                <option value=""></option>
                                <option value="30 Minutes" selected>30 Minutes</option>
                                <option value="1 Hour">1 Hour</option>
                                <option value="2 Hours">2 Hours</option>
                              </select>
                         </div>
                     </div>
                     <div class="col-lg-8">
                        <label class="form-label">  Accessorials </label>
                        <div class="d-flex flex-wrap align-items-center pso-gap">
                            <div class="form-check">
                                <input class="form-check-input" name="accessorials[]" type="checkbox" value="Scales Tickets" id="detention1">
                                <label class="form-check-label" for="detention1">
                                    Scales Tickets
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" name="accessorials[]" type="checkbox" value="Marshaling Yard" id="detention2">
                                <label class="form-check-label" for="detention2">
                                    Marshaling Yard
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" name="accessorials[]" type="checkbox" value="Liftgate" id="detention3">
                                <label class="form-check-label" for="detention3">
                                    Liftgate
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" name="accessorials[]" type="checkbox" value="Palletjack" id="detention4">
                                <label class="form-check-label" for="detention4">
                                    Palletjack
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" name="accessorials[]" type="checkbox" value="Inside Pickup/​Delivery" id="detention5">
                                <label class="form-check-label" for="detention5">
                                    Inside Pickup/​Delivery
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="detention6">
                                <input type="text" class="others" name="other" placeholder="Other" id="detention6"/>
                              </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="row row-cols-1 row-cols-lg-3 gy-5 g-lg-4 mt-0">
                            <div class="col" id="marshaling">
                                <div class="form-group">
                                    <p > Most tradeshow shipments going to the Advance Warehouse or direct to the showsite will require the driver to present light (empty) and heavy certified scale tickets.  Typically on LTL or
                                        Linehaul shipments the carriers billing weight is acceptable. </p>
                                </div>

                            </div>
                            <div class="col" id="marshaling2">
                                <div class="form-group">
                                    <p > If time permits, it's always most cost effective to ship to the Advance Warehouse as you have a large time window for delivery.  Typically there is little to no waiting time.  Your shipped items
                                         will already be in your booth space on move-in day. </p>
                                </div>

                            </div>
                        </div>
                     </div>
                     <div class="col-lg-12 mt-4">
                        <div class="form-group col-lg-8">
                            <p> If the pickup location does not have a forklift or a loading dock,
                                 it will be necessary to order a truck with a liftgate.  Be sure to also order a
                                palletjack as carriers may not have one on-board unless it is ordered. </p>
                        </div>
                     </div>

                     <div class="col-lg-6" id="origin">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Origin Location </label>
                                    <input type="text" class="form-control" name="origin_address_line_1" placeholder="Address Line 1" required/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="origin_address_line_2" placeholder="Address Line 2" required/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="origin_city" placeholder="City" required/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="origin_state" placeholder="State / Province / Region" required/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="origin_zipcode" placeholder="Postal / Zip Code" required/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="origin_country" class="form-select soy-hegiht" required>
                                        <option value=""></option>
                                        <option value="United States" selected>United States</option>
                                        <option value="Canada">Canada</option>
                                      </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label"> Origin Deadline </label>
                                <input type="date" class="form-control" name="pickup_date" placeholder="DD/MM/YYYY" required/>
                                <p class="nu-text mt-2"> Avoid weekends and holidays when possible. </p>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label"> Driver check-in before: </label>
                                <input type="time" name="driver_check_in" class="form-control" required/>
                                <p class="nu-text mt-2"> Choose a time at least 30 minutes before your warehouse closes. </p>
                            </div>
                        </div>
                     </div>

                     <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Destination Location </label>

                                    <select name="destination_address_line_1" id="advance" class="form-select" style="display: none;">

                                    </select>

                                    <select name="destination_address_line_1" id="direct" class="form-select">
                                       <option value="">--Choose one--</option>
                                        @php
                                            $venue = \DB::table('tradevenues')->get();
                                            foreach($venue as $val)
                                            {
                                                $entity = \DB::table('entities')->where('id', $val->entity_id)->get();
                                                $location = $entity[0]->legeal_name;
                                        @endphp
                                            <option value="{{ $val->entity_id }}">{{ $location }}</option>
                                        @php
                                            }
                                        @endphp
                                    </select>
                                </div>
                            </div>

                            <!--<div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="destination_address_line_2" placeholder="Address Line 2" required/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="destination_city" placeholder="City" required/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="destination_state" placeholder="State / Province / Region" required/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="destination_zipcode" placeholder="Postal / Zip Code" required/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="destination_country" class="form-select soy-hegiht" required>
                                        <option value="United States">United States</option>
                                        <option value="Canada">Canada</option>
                                      </select>
                                </div>
                            </div>-->

                            <div class="col-lg-6">
                                <label class="form-label"> Delivery Deadline </label>
                                <input type="date" class="form-control" placeholder="DD/MM/YYYY" name="delivery_deadline" required/>

                            </div>
                            <div class="col-lg-6">
                                <label class="form-label"> Driver Check-in Deadline </label>
                                <input type="time" class="form-control" name="driver_check_in_deadline" required/>

                            </div>
                        </div>
                     </div>

                     <div class="col-lg-6 mt-5" id="marhyard" style="display: none;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                <label class="form-label"> Marshaling Yard Address </label>
                                <select class="form-select" name="marshaling_address_line_1" id="marh">
                                    <option value="">--Select--</option>
                                     @php
                                        $value = \DB::table('locations')->get();
                                        foreach($value as $val)
                                        {
                                     @endphp
                                       <option value="{{ $val->id }}">
                                        {{ $val->location_descripton }}
                                      </option>
                                      @php
                                        }
                                     @endphp
                                </select>
                                </div>
                            </div>

                            <!--<div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="marshaling_address_line_2" placeholder="Address Line 2"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="marshaling_city" placeholder="City"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="marshaling_state" placeholder="State">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="marshaling_zipcode" placeholder="Zip Code">
                                </div>
                                <p class="nu-text mt-2"> (No worries. We'll look it up for you if it's not handy). </p>

                            </div>-->

                        </div>
                     </div>

                     <div class="col-lg-6 mt-5"  id="altaddress" style="display: none;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label"> Alternate Address </label>
                                    <input type="text" name="alt_address_line_1" class="form-control" placeholder="Address Line 1"/>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="alt_address_line_2" class="form-control" placeholder="Address Line 2"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="alt_city" class="form-control" placeholder="City"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="alt_state" class="form-control" placeholder="State"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="alt_zipcode" class="form-control" placeholder="Postal / Zip Code"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select name="alt_country" class="form-select">
                                        <option value="United States">United States</option>
                                        <option value="Canada">Canada</option>
                                   </select>
                                </div>
                            </div>
                        </div>
                     </div>

                     <div class="col-lg-12 mt-5">
                        <h5> Manifest </h5>
                        <p class="nu-text mt-2"> Items Being Shipped </p>
                     </div>

                     <div class="col-lg-12 mt-5">
                        <h5> Cargo Items </h5>
                        <p class="nu-text mt-2"> Please use inches for
                             item dimensions and the weight in pounds. </p>

                        <div class="adts d-inline-block w-100 mt-4">

                            <div class="row cbf">
                                <span class="remove ">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                      </svg>
                                    </span>
                                <h5 class="float-start mt-2">   Item  </h5>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="smal-label"> Type </label>
                                        <select name="type[]" class="form-select">
                                            <option value="Crate">Crate</option>
                                            <option value="Carton">Carton</option>
                                            <option value="Case">Case</option>
                                            <option value="Skid / Pallet">Skid / Pallet</option>
                                            <option value="Security Cage">Security Cage</option>
                                            <option value="Carpet Bag">Carpet Bag</option>
                                            <option value="Machine">Machine</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="smal-label"> Qty </label>
                                        <input type="text" name="qty[]" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="smal-label"> Length </label>
                                        <input type="text" name="length[]" class="form-control"/>
                                        <p class="nu-text mt-2"> (inches) </p>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="smal-label"> Width </label>
                                        <input type="text" name="width[]" class="form-control"/>
                                        <p class="nu-text mt-2"> (inches) </p>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="smal-label"> Height </label>
                                        <input type="text" name="height[]" class="form-control"/>
                                        <p class="nu-text mt-2"> (inches) </p>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="smal-label"> Weight </label>
                                        <input type="text" name="weight[]" class="form-control"/>
                                        <p class="nu-text mt-2"> (pounds) </p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="smal-label"> Description </label>
                                        <input type="text" name="description[]" class="form-control"/>
                                        <p class="nu-text mt-2"> Color, Material, Markings, Contents </p>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-check ps-4">
                                      <input class="form-check-input" type="checkbox" value="Y" name="Hazardous[]" id="flexCheckDefault">
                                      <label class="form-check-label m-0" for="flexCheckDefault">Hazardous</label>
                                    </div>
                               </div>

                               <div class="col-lg-2">
                                    <div class="form-check ps-4">
                                      <input class="form-check-input" type="checkbox" value="Y" name="Stackable[]" id="flexCheckDefault">
                                      <label class="form-check-label m-0" for="flexCheckDefault">Stackable</label>
                                    </div>
                               </div>
                            </div>
                        </div>

                        <div class="add-div05">
                            <div class="col-lg-12 ps-0 mt-4">
                                <button type="button" class="btn add">
                                   Add Items <span class="iou">
                                    <i class="fas fa-plus"></i>
                                </span> </button>
                            </div>
                        </div>
                     </div>
                </div>
            </div>

            <button type="submit" name="btnsubmit" class="btn add2 ms-5 mt-5">
                Submit <span class="iou">
                 <i class="fas fa-plus"></i>
             </span> </button>

        </div>
    </section>
</main>
</form>

<x-footer/>

