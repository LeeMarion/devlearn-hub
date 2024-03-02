<section class="section courses" data-section="section2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Choose Your Course</h2>
          </div>
        </div>
            
        <div class="owl-carousel owl-theme">

          @foreach ($data as $modules)
          
          <div class="item">
            <img style="height: 200px; width: 234px" src="module/{{$modules->moduleimage}}" alt="image">
            <div class="down-content">
              <h4>{{$modules->modulename}}</h4>
              <p></p>
              <div class="text-button-pay">
                <a href="{{url('module_details',$modules->id)}}">See more <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>

          @endforeach
          
          
        </div>
      </div>
    </div>
  </section>