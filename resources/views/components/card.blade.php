<div class="col-lg rounded-3 col-md mb-4">
  <a href='#' class='text-decoration-none'>
    <div class="card border-left-{{$cardColour}} shadow h-100 p-3">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-{{$cardColour}} text-uppercase mb-1">
              {{$cardName}}  
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              {{$cardText}}
            </div>
          </div>
          <div class="col-auto">
            <i class="{{$cardIcon}} fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </a>
</div>