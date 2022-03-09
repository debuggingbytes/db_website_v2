{{-- @props(['icon', 'title']) --}}
<div class="col-md d-flex client-fade">
    <div class="col-md mt-4">
      <div class="card border-left-orange shadow h-100 position-relative">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2 ">                
              <div class="h5 mb-0 font-weight-bold text-gray-800">                 
                <h4><i class="{{$service->icon}}"></i> {{$service->title}}</h4>                 
                <p class='lead mt-3 py-2'>
                {{$service->content}}
                </p>                  
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer">
          {{-- <a href="#"><button class="btn btn-light-orange">Learn More</button></a>   --}}
        </div>          
      </div>
    </div>
</div>