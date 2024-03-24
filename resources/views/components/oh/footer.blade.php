<footer class="float-start w-100">

    <div class="container">
       <div class="row row-cols-1  row-cols-sm-2 row-cols-lg-4 gy-5 g-lg-0">
          <div class="col">
              <div class="left-footer d-inline-block w-100">
                 <a href="#" class="logo-footer">
                    <img alt="ser" src="images/ft-logo.png"/>
                 </a>
                 <p class="mt-3 text-white"> TLC-Expo is your best choice for tradeshow logistics consulting. We help you get your trade show materials
                    to and from the venue with excellent service every step of the way. </p>

              </div>
          </div>
          <div class="col d-grid justify-content-lg-center">
             <div class="right-footer d-inline-block w-100">
                 <h2 class="text-white"> Links </h2>
                 <ul class="clio">
                   <li>
                      <a href="{{ URL::to('/') }}" class="cou"> Home </a>
                   </li>
                   <li>
                     <a href="{{ URL::to('about-us') }}" class="cou">  About us  </a>
                  </li>
                  <li>
                   <a href="{{ URL::to('why-tlc-expo') }}" class="cou">  why tlc-expo  </a>
                  </li>
                  <li>
                   <a href="{{ URL::to('events') }}" class="cou">   Events  </a>
                  </li>
                  <li>
                   <a href="{{ URL::to('contact') }}" class="cou">   Contact  </a>
                  </li>
                 </ul>
             </div>
          </div>

          <div class="col d-grid justify-content-center pe-lg-5">
           <div class="right-footer d-inline-block w-100">
               <h2 class="text-white"> Business Info </h2>
               <p class="text-white mt-4">  <i class="fas fa-map-marker-alt me-2"></i>  7927 Garden Grove Blvd #456
                Garden Grove, CA 92841-4225 </p>
               <p class="text-white mt-3"> <i class="fas fa-phone-alt"></i> <b class="call ms-2"> (888) 852-3976 </b> </p>

               <ul class="mt-4">
                 <li>
                   <a href="#" class="btn soclai"> <i class="fab fa-facebook-f"></i> </a>
                   <a href="#" class="btn soclai ms-3"> <i class="fab fa-linkedin-in"></i> </a>
                 </li>
               </ul>

           </div>
         </div>

          <div class="col d-grid justify-content-end">
            <div class="right-footer d-inline-block w-100">
                <h2 class="text-white"> Email Newsletter</h2>
                <p class="text-white mt-4"> Join our email newsletter and stay up to date with the trade show logistics industry.</p>

                <div class="mt-3">
                   <input type="text" class="form-control" placeholder="Enter your email"/>
                   <button type="submit" class="btn btn-submit w-100 mt-3">Subscribe </button>
                </div>


            </div>
          </div>
       </div>
       <hr class="mt-4"/>
       <p class="text-white text-center copty my-3"> Copyright {{ date('Y') }} All Rights Reserved. </p>
    </div>
 </footer>


 <!-- mobile menu -->
 <div class="offcanvas offcanvas-end mobile-menu-div" id="mobile-menu">
   <div class="offcanvas-header">
      <button type="button" class="close-menu" data-bs-dismiss="offcanvas">
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
       </svg>
      </button>
   </div>

     <div class="offcanvas-body">
       <div class="head-contact">
          <a href="{{ URL::to('/') }}" class="logo-side">
          <img src="images/logo.png" alt="logo">
          </a>

          <div class="mobile-menu-sec mt-3">
             <ul class="list-unstyled">
                <li class="active-m">
                   <a href="index.html"> Home </a>
                </li>
                <li>
                  <a href="{{ URL::to('request-a-quote') }}"> ASAP Shipping Quote </a>
                </li>
                <li>
                 <a href="{{ URL::to('why-tlc-expo') }}"> TLC-Expo </a>
                </li>
                <li>
                   <a href="{{ URL::to('about-us') }}"> About </a>
                </li>

                <li class="dropdown">
                 <a href="{{ URL::to('about-us') }}" class="dropdown-toggle" data-bs-toggle="dropdown">
                   About
                 </a>
                 <ul class="dropdown-menu" >
                    <li><a class="dropdown-item" href="{{ URL::to('value-added-services') }}">Value-Added Service</a></li>
                    <li><a class="dropdown-item" href="{{ URL::to('preparing-for-pickup') }}">Preparing for Pickup</a></li>
                    <li><a class="dropdown-item" href="{{ URL::to('venue-freight-supervision') }}">Venue Freight Supervision</a></li>
                    <li><a class="dropdown-item" href="{{ URL::to('post-event-pickup-prep') }}">Post-Event Pickup Prep</a></li>
                 </ul>
               </li>

               <li>
                 <a href="{{ URL::to('events') }}"> Upcoming Events </a>
               </li>

               <li>
                 <a href="{{ URL::to('contact') }}"> Contact </a>
               </li>
             </ul>
          </div>

          <ul class="side-media list-unstyled">
             <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
             <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
          </ul>
       </div>
     </div>
 </div>

 <script src="js/bootstrap.bundle.min.js" ></script>
 <script src="js/jquery.min.js" ></script>
 <script src="js/custom.js" ></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="https://unpkg.com/feather-icons"></script>
 <script>
   feather.replace();
 </script>
<script>
    $(document).ready(function(){
        $("#limitation").change(function(){
            var lim = $("#limitation").val();

            if(lim=='Other')
            {
                $("#xother").show();
            }
            else
            {
                $("#xother").hide();
            }
        });
    });
</script>

<script>
    $(function () {
        $("#return_to_origin").click(function () {
            if ($(this).is(":checked")) {
                $("#altaddress").hide();
            } else {
                $("#altaddress").show();
            }
        });
    });
</script>

<script>
    $(document).ready(function(){

        $("#tradeshow").change(function(){
        var tradeid = $("#tradeshow").val();
       // alert(tradeid);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "https://ascinate.in/projects/tclexpo/showmanagement",
            type: 'POST',
            data: {id:tradeid},
            success: function(data)
            {
                $("#show_m").hide();
                $("#tr_v").hide();
                $("#marhyard").show();

                $("#show_m2").show();
                $("#show_m2").html(data);
            }
        });
    });

    if($("#war2").prop("checked", true))
    {
        $("#advance").hide();
        $("#direct").show();
    }

    if($("#war1").prop("checked", true))
    {
        var contractor = $("#contractor").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "https://ascinate.in/projects/tclexpo/destination",
            type: 'POST',
            data: {id:contractor},
            success: function(data)
            {
                $("#direct").hide();

                $("#advance").show();
                $("#advance").html(data);
            }
        });

    }

    $("#shipment_type").change(function(){

        var type = $("#shipment_type").val();
        if(type == 'Inbound only')
        {
            $("#return").hide();
            $("#origin").show();
        }
        else if(type == 'Outbound only')
        {
            $("#return").show();
            $("#origin").hide();
        }
        else
        {
            $("#return").show();
            $("#origin").show();
        }
        });

    });
</script>
 </body>
 </html>
