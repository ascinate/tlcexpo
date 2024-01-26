<x-header/>

<section class="sub-banner d-inline-block w-100 position-relative" style="background: url(./images/conuy.jpg); background-size: cover; background-position: center;">
    <div class="container">
        <h1 class="page-titels"> Sign In </h1>

    </div>
    <div class="page-overlay"></div>
</section>

<main class="float-start w-100">
    <section class="ship-form-diuv register01 d-inline-block w-100">
        <div class="container">
            <h2 class="min-titels text-center">  <strong> Login </strong> Here </h2>
            <p class="text-center col-lg-7 mx-auto"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>

            <p class="text-center col-lg-7 mx-auto" style="color:red; margin-top:20px;">{{ session('error') }}</p>

            <form name="frmlogin" action="{{ URL::to('customerlogin') }}" method="POST">
                @csrf
                <div class="form-quote-divu col-lg-8 mx-auto">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                            <label class="form-label"> Email Address  </label>
                            <input type="email" name="email" class="form-control" required/>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                            <label class="form-label"> Password </label>
                            <input type="password" name="password" class="form-control" required/>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="submit" name="btnlogin" class="btn add2">
                                Login <span class="iou">
                                    <i class="fas fa-lock"></i>
                            </span> </button>
                        </div>

                        <div class="col-lg-12 mt-5">
                            <p> Do not have an account? <a href="{{ URL::to('register') }}" class="reight-btn"> <strong> Register </strong> </a> </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

<x-footer/>
