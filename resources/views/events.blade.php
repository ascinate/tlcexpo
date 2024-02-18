<x-header/>

<section class="sub-banner d-inline-block w-100 position-relative" style="background: url(./images/conuy.jpg); background-size: cover; background-position: center;">
    <div class="container">
        <h1 class="page-titels"> Our Events </h1>
        <nav>
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Events </li>
            </ol>
          </nav>
    </div>
    <div class="page-overlay"></div>

</section>

<main class="float-start w-100">
    <section class="events-page-part w-100 d-inline-block">
       <div class="container">
        <h2 class=" min-titels text-center"> See you at <strong> these </strong> shows </h2>
        <p class="col-lg-7 d-table text-center mx-auto"> Here’s a sampling of events for which TLC-Expo has been retained by
            clients for the safe, secure, on-time delivery of their tradeshow booths and materials.</p>

          <div class="filter-by d-none">
            <div class="col-lg-6 ms-auto">
               <div class="d-flex align-items-center">
                <label for="datePicker">Filter By:</label>
                <input type="text" class="form-control" id="datePicker" placeholder="DD/MM/YYYY">
                <button type="submit" class="btn btn-submit"> Search </button>
               </div>

            </div>
          </div>
          <div class="events-slider01 owl-carousel owl-theme sp-maring">

            @php
                date_default_timezone_set('America/New_York');
                $data = \DB::table('events')->get();

                for($x=2024;$x<=2025;$x++)
                {

                for($i=1; $i<=12; $i++)
                {
                    $month = date('F', mktime(0, 0, 0, $i, 10));

            @endphp

            <div class="itemsr-headr">
               <h2> {{ $month.', '.$x }} </h2>
               <div class="row row-cols-1 row-cols-lg-2 w-100 blog-posts">

                @php
                   foreach($data as $value)
                    {
                        $event_start_date = explode("-", $value->event_start_date);
                        $start = mktime(12,0,0, @$event_start_date[1], @$event_start_date[2], @$event_start_date[0]);
                        $start_dt = date('F j, Y',$start);

                        $event_end_date = explode("-", @$value->event_end_date);
                        $end = mktime(12,0,0, $event_end_date[1],$event_end_date[2],$event_end_date[0]);
                        $end_dt = date('F j, Y',$end);

                        $year = @$event_start_date[0];
                        $month = @$event_start_date[1];

                        if(($month==$i) && ($year==$x))
                        {
                @endphp
                <div class="col">
                  <article class="comonevents d-inline-block w-100">
                      <div class="img-boxu w-100 d-inline-block">
                        @php
                            if($value->event_logo!='')
                            {
                        @endphp
                          <img alt="evnts" src="uploads/{{ $value->event_logo }}"/>
                        @php
                            }
                            else {
                                @endphp
                                <img alt="evnts" src="images/eventplace.jpg" height="225" width="300"/>
                                @php
                            }
                        @endphp
                      </div>
                      <div class="text-ar-events w-100">
                          <div class="dater">
                              <span>
                                  <i class="fas fa-calendar-alt"></i>
                                  @php
                                        echo @$start_dt.' - '.$end_dt;
                                  @endphp
                              </span>
                          </div>
                          <h2 class="events-timles">
                            {{ $value->event_name }}
                          </h2>
                          <p> Lorem Ipsum is simply dummy text of the printing
                              and typesetting industry. Lorem Ipsum has been the industry </p>

                          <div class="shared d-flex align-items-center">
                              <h5> Share </h5>
                              <ul class="d-flex align-items-center">
                                  <li>
                                      <a href="#" class="btn btnface"> <i class="fab fa-facebook-f"></i> </a>
                                  </li>
                                  <li>
                                      <a href="#" class="btn btnface"> <i class="fab fa-linkedin-in"></i> </a>
                                  </li>
                                  <li>
                                      <a href="#" class="btn btnface"> <i class="fab fa-twitter"></i> </a>
                                  </li>
                              </ul>
                          </div>

                      </div>
                  </article>
                </div>
                @php
                      }
                    }
                @endphp

              </div>
           </div>

            @php
                }
             }
            @endphp

          </div>
       </div>
    </section>
</main>

<x-footer/>
