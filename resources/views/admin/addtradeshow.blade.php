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
                        <h4 class="card-title">Add Tradeshow</h4>
                        <form name="addfrm" action="{{ URL::to('inserttradeshow') }}" method="POST" class="forms-sample">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Show Name</label>
                                    <input type="text" class="form-control" name="show_name" placeholder="TradeShow Name">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Start Publishing </label>
                                    <input type="date" name="start_publishing" class="form-control" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Stop Publishing</label>
                                    <input type="date" name="stop_publishing" class="form-control" required/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Show Manager </label>
                                        <select name="show_management" class="form-select" required>
                                            <option value="">--Select--</option>
                                            @php
                                                $datas = \DB::table('managecontractors')->get();
                                                foreach($datas as $data) {
                                            @endphp
                                            <option value="{{ $data->id }}">{{ $data->contractor_name }}</option>
                                            @php
                                                }
                                            @endphp
                                    </select>
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
