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
                                    <span class="d-block">
                                        @php
                                        $venues = \DB::table('venues')->where('id', $data['main_venue'])->get();
                                        echo $venues[0]->address;
                                        @endphp
                                    </span>
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
                                        <span class="d-block">
                                            @php
                                                $datas = \DB::table('managecontractors')->where('id',$data['show_management'])->get();
                                                echo @$datas[0]->contractor_name;
                                            @endphp
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>  NAICS Industry Sector </label>
                                    <span class="d-block">
                                        {{ $data['naics_industry_sector'] }}
                                    </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Frequency </label>
                                    <span class="d-block">
                                        {{ $data['frequency'] }}
                                    </span>
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
                          <button type="button" class="btn btn-gradient-primary me-2" onclick="javascript:history.go(-1);">Back</button>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
