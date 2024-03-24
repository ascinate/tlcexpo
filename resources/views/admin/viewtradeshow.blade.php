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
                        <h4 class="card-title">View Tradeshow</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Show Name</label>
                                    <span class="d-block">{{ $data['show_name'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Main Venue </label>
                                    <select name="main_venue" class="form-select" @readonly(true)>
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

                            </div>

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Start Publishing </label>
                                    <span class="d-block">{{ $data['start_publishing'] }}</span>
                                    </div>
                               </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Stop Publishing</label>
                                    <span class="d-block">{{ $data['stop_publishing'] }}</span>
                                </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Show Manager </label>
                                        <select name="show_management" style="border:none;" class="form-select" readonly>
                                            <option value="">--Select--</option>
                                            @php
                                                $datas = \DB::table('managecontractors')->get();
                                                foreach($datas as $ar) {
                                            @endphp
                                            <option value="{{ $ar->id }}"@php
                                                if($ar->id==$data['show_management']) { echo 'selected'; }
                                            @endphp>
                                                {{ $ar->contractor_name }}
                                            </option>
                                            @php
                                                }
                                            @endphp
                                    </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>  NAICS Industry Sector </label>
                                    <select name="naics_industry_sector" style="border:none;" class="form-select" readonly>
                                        <option value="">--Select--</option>
                                        <option value="Construction"@php
                                            if($data['naics_industry_sector']=='Construction') { echo 'selected'; }
                                        @endphp>Construction</option>
                                        <option value="Manufacturing"@php
                                        if($data['naics_industry_sector']=='Manufacturing') { echo 'selected'; }
                                    @endphp>Manufacturing</option>
                                    </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Frequency </label>
                                    <select name="frequency" style="border:none;" class="form-select" readonly>
                                        <option value="">--Select--</option>
                                        <option value="1 week" @php
                                        if($data['frequency']=='1 week') { echo 'selected'; }
                                    @endphp>1 week</option>
                                        <option value="1 month" @php
                                        if($data['frequency']=='1 month') { echo 'selected'; }
                                    @endphp>1 month</option>
                                    </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Sponsoring Entity</label>
                                    <span class="d-block">{{ $data['sponsoring_entity'] }}</span>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label> Total Attendance </label>
                                    <span class="d-block">{{ $data['total_attendance'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label>Total Exhibitors</label>
                                    <span class="d-block">{{ $data['total_exhibitors'] }}</span>
                                </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label>Open to Public</label><br/>
                                    <span class="d-block">{{ $data['open_to_public'] }}</span>
                                 </div>
                                </div>

                            </div>
                          <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Back</button>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
