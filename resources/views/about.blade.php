@extends('layouts.app')

@section('content')
<header class="about">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <h1 class="font-weight-light">About Us</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</header>
<section class="about_p1">
	<div class="row">
		<div class="col-md-6">
			<div class= "image mt-5">
				<img src="./img/relax.jpg" alt="" class="w-100 mt-3">
			</div>
		</div>
		<div class="card col-md-6">
			<h2 class="header font-weight-bold p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
			<div class="steps">
				<ul>
					<li>
						<h4 class="featurette pl-3">Lorem ipsum dolor sit amet</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam accusantium voluptatum doloremque quibusdam veritatis accusamus adipisci dolores error saepe, esse odit sed, fugit laudantium corporis culpa harum, atque ratione! Nulla?Lorem ipsum dolor sit amet, </p>
					</li>
					<li>
						<h4 class="featurette pl-3">Lorem ipsum dolor sit amet</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam accusantium voluptatum doloremque quibusdam veritatis accusamus adipisci dolores error saepe, esse odit sed, fugit laudantium corporis culpa harum, atque ratione! Nulla?Lorem ipsum dolor sit amet,</p>
					</li>
					<li>
						<h4 class="featurette pl-3">Lorem ipsum dolor sit amet</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam accusantium voluptatum doloremque quibusdam veritatis accusamus adipisci dolores error saepe, esse odit sed, fugit laudantium corporis culpa harum, atque ratione! Nulla?Lorem ipsum dolor sit amet,</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="about_p2">
	<div class="row justify-content-center py-5">
		<h2 class="text-center pt-5 featurette">Lorem ipsum dolor sit amet, consectetur Quo.</h2>
		<div class="row px-5 pt-3">
			<div class="col-md-6 lead">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam accusantium voluptatum doloremque quibusdam veritatis accusamus adipisci dolores error saepe, esse odit sed, fugit laudantium corporis culpa harum, atque ratione! Nulla?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam accusantium voluptatum doloremque quibusdam veritatis accusamus adipisci dolores error saepe, esse odit sed, fugit laudantium corporis culpa harum, atque ratione! Nulla?
			</div>
			<div class="col-md-6 lead">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam accusantium voluptatum doloremque quibusdam veritatis accusamus adipisci dolores error saepe, esse odit sed, fugit laudantium corporis culpa harum, atque ratione! Nulla?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam accusantium voluptatum doloremque quibusdam veritatis accusamus adipisci dolores error saepe, esse odit sed, fugit laudantium corporis culpa harum, atque ratione! Nulla?
			</div>
		</div>
	</div>
</section>
@include('includes.footer')
@endsection