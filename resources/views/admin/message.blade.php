@if (Session::has('error'))
    <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4><i class="icon fa fa-ban"></i>Error</h4>
        {{Session::get('error')}}
    </div> -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <h4><i class="icon fa fa-ban"></i>Error</h4>
        {{Session::get('error')}}
    </div>
@endif
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <h4><i class="icon fa fa-ban"></i>Success</h4>
        {{Session::get('success')}}
    </div>
@endif