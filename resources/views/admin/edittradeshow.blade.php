<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit Tradeshow</h4>
                        <form name="addfrm" action="{{ URL::to('updatetradeshow') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{ $data['id'] }}"/>
                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Show Name</label>
                                    <input type="text" class="form-control" name="show_name" value="{{ $data['show_name'] }}">
                                </div>
                                </div>

                             <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>  NAICS Industry Sector </label>
                                    <select name="naics_industry_sector" class="form-select">
                                        <option value="">--Select--</option>
                                        <option value="Agriculture, Forestry, Fishing & Hunting">Agriculture, Forestry, Fishing & Hunting</option>
                                            <option value="Mining, Quarrying, & Oil & Gas Extraction">Mining, Quarrying, & Oil & Gas Extraction</option>
                                            <option value="Utilities">Utilities</option>
                                            <option value="Construction">Construction</option>
                                            <option value=Manufacturing">Manufacturing</option>
                                            <option value="Wholesale Trade">Wholesale Trade</option>
                                            <option value="Retail Trade">Retail Trade</option>
                                            <option value="Transportation & Warehousing">Transportation & Warehousing</option>
                                            <option value="Information">Information</option>
                                            <option value="Finance & Insurance">Finance & Insurance</option>
                                            <option value="Real Estate, Rental, Leasing">Real Estate, Rental, Leasing</option>
                                            <option value="Professional, Scientific, Technical Services">Professional, Scientific, Technical Services</option>
                                            <option value="Management of Companies & Enterprises">Management of Companies & Enterprises</option>
                                            <option value="Educational Services">Educational Services</option>
                                            <option value="Health Care & Social Assistance">Health Care & Social Assistance</option>
                                            <option value="Arts, Entertainment, & Recreation">Arts, Entertainment, & Recreation</option>
                                            <option value="Accommodation & Food Services">Accommodation & Food Services</option>
                                            <option value="Public Administration">Public Administration</option>
                                            <option value="Other Services">Other Services</option>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Frequency </label>
                                    <select name="frequency" class="form-select">
                                        <option value="">--Select--</option>
                                        <option value="Annual" @php
                                        if($data['frequency']=='Annual') { echo 'selected'; }
                                    @endphp>Annual</option>
                                        <option value="Semi Annual" @php
                                        if($data['frequency']=='Semi Annual') { echo 'selected'; }
                                    @endphp>Semi Annual</option>
                                    </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Sponsoring Entity</label>
                                    <select name="sponsoring_entity" class="form-select">
                                        <option value="">--Select--</option>
                                        <option value="Entity Workshop"@php
                                        if($data['sponsoring_entity']=='Entity Workshop') { echo 'selected'; }
                                    @endphp>Entity Workshop</option>
                                    </select>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Total Attendance </label>
                                    <input type="text" name="total_attendance" value="{{ $data['total_attendance'] }}" class="form-control" />
                                </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label>Total Exhibitors</label>
                                    <input type="text" name="total_exhibitors" value="{{ $data['total_exhibitors'] }}" class="form-control" />
                                </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label>Open to Public</label><br/>
                                    <input type="radio" name="open_to_public" value="Yes" @php
                                    if($data['open_to_public']=='Yes') { echo 'checked'; }
                                @endphp> Yes
                                    &nbsp;&nbsp;<input type="radio" name="open_to_public" value="No"  @php
                                    if($data['open_to_public']=='No') { echo 'checked'; }
                                @endphp> No
                                </div>
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Tradeshow Photo </label>
                                    <input type="file" name="logo" class="form-control" />
                                    &nbsp;
                                    @php
                                        if($data['logo']!='')
                                        {
                                    @endphp
                                    <img src="../../uploads/{{ $data['logo'] }}" width="120" height="80"/>
                                    @php
                                        }
                                        else
                                        {
                                    @endphp
                                    <img src="../../images/placeholder.png" width="120" height="80"/>
                                    @php
                                        }
                                    @endphp
                                    </div>
                                </div>
                            </div>

                          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                          <button class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
