@extends('layouts.main')
@section('title', 'Cart Page')
@section('content')

@php
    $months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
@endphp
<!-- Company Overview section START -->
<section class="container-fluid inner-Page" >
    <div class="card-panel">
        <div class="media wow fadeInUp" data-wow-duration="1s"> 
            <div class="companyIcon">
            </div>
            <div class="media-body">
                
                <div class="container">
                    @if(session('success_msg'))
                    <div class="alert alert-success fade in alert-dismissible show">                
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true" style="font-size:20px">×</span>
                        </button>
                        {{ session('success_msg') }}
                    </div>
                    @endif
                    @if(session('error_msg'))
                    <div class="alert alert-danger fade in alert-dismissible show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true" style="font-size:20px">×</span>
                        </button>    
                        {{ session('error_msg') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Payment</h1>
                        </div>                       
                    </div>    
                    <div class="row">                        
                        Thank You !
                                
                    </div>
                </div>
            </div>

        </div>
    </div> 
    <div class="clearfix"></div>
</section>        
@endsection