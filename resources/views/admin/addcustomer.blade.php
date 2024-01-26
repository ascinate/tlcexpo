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
                        <h4 class="card-title">Add Customer</h4>
                        <form name="addfrm" action="{{ URL::to('adduser') }}" method="POST" class="forms-sample">
                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" name="customer_name" placeholder="Name">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Address </label>
                                    <input type="text" name="address" class="form-control" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Address 1</label>
                                    <input type="text" name="address_line_1" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label> Address 2</label>
                                    <input type="text" name="address_line_2" class="form-control"/>
                                </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label> Address 3</label>
                                    <input type="text" name="address_line_3" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Website</label>
                                    <input type="text" class="form-control" name="website" placeholder="Website">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">City</label>
                                    <input type="text" class="form-control" name="city" placeholder="City">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">State</label>
                                    <input type="text" class="form-control" name="state" placeholder="State">
                                </div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputCity1">Zip code</label>
                                    <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label"> Country </label>
                                    <select name="country" class="form-select">
                                    <option value="USA">USA</option>
                                    <option value="Canada">CANADA</option>
                                </select>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Sales Representative </label>
                                    <input type="text" name="sales_rep" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Initials </label>
                                    <input type="text" name="initials" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label> Commision </label>
                                    <input type="text" name="commission" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Terms </label>
                                    <input type="text" name="terms" class="form-control"/>
                                </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Margin </label>
                                    <input type="text" name="margin" class="form-control"/>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label"> Limitation </label>
                                    <select id="limitation" name="limitation" class="form-select">
                                        <option value="No Loading Dock">No Loading Dock</option>
                                        <option value="Limited Access"> Limited Access</option>
                                        <option value="Other"> Other</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group" style="display: none;" id="xother">
                                    <label class="form-label"> Other </label>
                                    <input type="text" name="other_limitation" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label"> Notes </label>
                                        <input type="text" name="notes" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                          <button class="btn btn-light">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <x-adminfooter/>
