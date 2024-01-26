<x-header/>

<section class="sub-banner d-inline-block w-100 position-relative" style="background: url(./images/conuy.jpg); background-size: cover; background-position: center;">
    <div class="container">
        <h1 class="page-titels"> Free Register </h1>
        <!--<nav>
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Free Register</li>
            </ol>
          </nav>-->
    </div>
    <div class="page-overlay"></div>
</section>

<main class="float-start w-100">
    <section class="ship-form-diuv register01 d-inline-block w-100">
        <div class="container">
            <h2 class="min-titels text-center"> Create Your <strong> Free </strong> Account </h2>
            <p class="text-center col-lg-7 mx-auto"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>

            <form name="addcustomer" action="{{ URL::to('addcustomer') }}" method="POST">
                @csrf
            <div class="form-quote-divu col-lg-8 mx-auto">
                <div class="row">
                    <div class="col-lg-6">
                       <div class="form-group">
                          <label class="form-label"> Your Name </label>
                          <input type="text" name="customer_name" class="form-control" required/>
                       </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label"> Address </label>
                           <input type="text" name="address" class="form-control" required/>
                        </div>
                     </div>

                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label"> Address 1</label>
                           <input type="text" name="address_line_1" class="form-control"/>
                        </div>
                     </div>

                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label"> Address 2</label>
                           <input type="text" name="address_line_2" class="form-control"/>
                        </div>
                     </div>

                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label"> Address 3</label>
                           <input type="text" name="address_line_3" class="form-control"/>
                        </div>
                     </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label"> City </label>
                           <input type="text" name="city" class="form-control" required/>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label"> State </label>
                           <input type="text" name="state" class="form-control" required/>
                        </div>
                     </div>

                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label"> Zipcode </label>
                           <input type="text" name="zipcode" class="form-control" required/>
                        </div>
                     </div>

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
                           <label class="form-label"> Sales Representative </label>
                           <input type="text" name="sales_rep" class="form-control"/>
                        </div>
                     </div>

                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label"> Initials </label>
                           <input type="text" name="initials" class="form-control"/>
                        </div>
                     </div>

                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label"> Commision </label>
                           <input type="text" name="commission" class="form-control"/>
                        </div>
                     </div>

                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label"> Email </label>
                           <input type="email" name="email" class="form-control"/>
                        </div>
                     </div>

                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label"> Create Password </label>
                           <input type="password" name="password" class="form-control"/>
                        </div>
                     </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label"> Your Phone </label>
                           <input type="text" name="phone" class="form-control" required/>
                        </div>
                     </div>

                     <div class="col-lg-6">
                        <div class="form-group">
                           <label class="form-label"> Website </label>
                           <input type="text" name="website" class="form-control" required/>
                        </div>
                     </div>

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

                     <div class="col-lg-6" style="display: none;" id="xother">
                        <div class="form-group">
                           <label class="form-label"> Other </label>
                           <input type="text" name="other_limitation" class="form-control"/>
                        </div>
                     </div>

                     <div class="col-lg-12">
                        <button type="submit" name="btnsubmit" class="btn add2">
                            Create Account <span class="iou">
                                <i class="fas fa-user"></i>
                         </span> </button>
                     </div>

                </div>
            </div>
            </form>

        </div>
    </section>
</main>

<x-footer/>
