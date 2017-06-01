@extends( 'dashboard.layout.master' )

@section( 'dashboard.body' )

<div class="padding">
	<div class="row">
        <div class="col-md-12">
          <div class="row">
            @for( $i = 0; $i < 10; $i++ )
            <div class="col-xs-6 col-sm-3 col-md-2">
              <div class="box p-a-xs">
                <a href="#"><img src="images/a0.jpg" alt="" class="img-responsive"></a>
                <div class="p-a-sm">
                  <div class="text-ellipsis">Skyline collection</div>
                </div>
              </div>
            </div>
            @endfor          
          </div>
          <div>
            <div class="btn-group m-r">
              <button type="button" class="btn btn-sm white"><i class="fa fa-angle-left"></i></button>
              <button type="button" class="btn btn-sm white"><i class="fa fa-angle-right"></i></button>
            </div>
            Showing <strong>8</strong> of 25
          </div>
        </div>
    </div>
</div>

@endsection