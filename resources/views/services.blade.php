@extends('layouts.app')

@section('content')
	<header class="service">
	  <div class="container h-100">
	    <div class="row h-100 align-items-center">
	      <div class="col-12 text-center">
	        <h1 class="font-weight-light">List of Services we Offer</h1>
	        <p class="lead">These are the simple steps one can follow to me an order</p>
	      </div>
	    </div>
	  </div>
	</header>
	<div class="justify-content-center py-3">
        <div class="row justify-content-center">
           <h2 class="featurette px-4">Academic Paper Writing Service</h2>
       </div>
       <div class="row justify-content-center container-fluid pt-3">
           <div class="col-md-4">
               <ul class="list-group">
                 <li class="list-group-item">Accounting</li>
                 <li class="list-group-item">Advertising</li>
                 <li class="list-group-item">Aeronautical Engineering</li>
                 <li class="list-group-item">Aeronautics</li>
                 <li class="list-group-item">Aerospace Science</li>
                 <li class="list-group-item">African-American Studies</li>
                 <li class="list-group-item">Agricultural Studies</li>
                 <li class="list-group-item">American History</li>
                 <li class="list-group-item">American-Literature</li>
                 <li class="list-group-item">Anthropology</li>
                 <li class="list-group-item">Antique Literature</li>
               </ul>
           </div>
           <div class="col-md-4">
               <ul class="list-group">
                 <li class="list-group-item">Cras justo odio</li>
                 <li class="list-group-item">Dapibus ac facilisis in</li>
                 <li class="list-group-item">Morbi leo risus</li>
                 <li class="list-group-item">Porta ac consectetur ac</li>
                 <li class="list-group-item">Vestibulum at eros</li>
               </ul>
           </div>
           <div class="col-md-4">
               <ul class="list-group">
                 <li class="list-group-item">Cras justo odio</li>
                 <li class="list-group-item">Dapibus ac facilisis in</li>
                 <li class="list-group-item">Morbi leo risus</li>
                 <li class="list-group-item">Porta ac consectetur ac</li>
                 <li class="list-group-item">Vestibulum at eros</li>
               </ul>
           </div>
       </div>
    </div>
    @include('includes.footer')
@endsection