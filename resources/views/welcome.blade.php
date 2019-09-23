@extends('layouts.app')

@section('content')
<div class="home">
  <div class="hero-text pt--5">
    <div class="row">
      <div class="col-md-5 pt-4">
        <div class="card mx-auto">
          <h3 class="py-4 colorw">Submit your order</h3>
          <form class="p-2 order-form">
            <input class="form-control mb-3" type="text" name="email" placeholder="Enter your Email">
            <input class="form-control mb-3" type="text" name="papertype" placeholder="Select Paper Type">
            <input class="form-control mb-3" type="number" name="pages" placeholder="Enter no. of pages">
            <input class="form-control mb-3" type="date" name="deadline" placeholder="Deadline for the job">
            <button class="btn btn-lg btn-success">Make an Order</button>
          </form>
        </div>
      </div>
      <div class="hero-text-inner col-md-7 mx-auto">
        <div class="jumbotron h-100">
          <h1 class="font-weight-bold pt-4"> We Will Help You Do Your Assignments
          <h3>From initial topic to finished paper</h3>
          <p class="lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="home">
    <div class="hero-text">
        <h1 class="font-weight-bold pt-4"> We Will Help You Do Your Assignments</h1>
        <h4>From initial topic to finished paper</h4>
        <a href="" class="btn btn-lg btn-success mt-5">Make An Order</a>
    </div>
</div> -->

<div class="justify-content-center py-3 px-5 bg-custom">
     <div class="row justify-content-center pb-2">
        <h1 class="featurette px-4">Features</h1>
    </div>
    <div class="row justify-content-center container-fluid pt-3">
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/contract.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="pt-2 featurette">Any Deadline - Any Subject</h3>
            <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/notification.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="pt-2 featurette">Email Notifications</h3>
            <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/chat.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="pt-2 featurette">Online Writer Chat</h3>
            <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
          </div>
        </div>
    </div>
    <div class="row justify-content-center container-fluid pt-3">
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/bargains.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="pt-2 featurette">Have the Bargaing Power</h3>
            <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/file.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="pt-2 featurette">Plagiarism Free Papers</h3>
            <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/coin.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="pt-2 featurette">Affordable Prices</h3>
            <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p>
          </div>
        </div>
    </div>
</div>

<div class="row p-5 ml-5">
  <div class="col-md-3 offset-2 p-3 ml-10">
    <img class="img-fluid" src="./img/graph.jpg" alt="">
  </div>
  <div class="col-md-7 pt-5">
    <h3 class="featurette">Choose your preferred writer
    <span class="text-muted">It’ll blow your mind.</span></h3>
    <p class="lead2 pt-3">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
</div>

<div class="justify-content-center py-3">
  <div class="row justify-content-center">
    <h1 class="featurette text-center p-4">Why choose us!</h1>
    <!-- <hr/> -->
  </div>
  <div class="row">
    <div class="col-md-4">
      <h4 class="text-center px-5 featurette">24/7 Customer Support</h4>
      <p class="text-justify px-5 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quod , possimus, minus, culpa recusandae nesciunt dolor magni! Itaque, dolorum iste!</p>
    </div>
    <div class="col-md-4">
      <h4 class="text-center px-5 featurette">First Class Papers</h4>
      <p class="text-justify px-5 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quod , possimus, minus, culpa recusandae nesciunt dolor magni! Itaque, dolorum iste!</p>
    </div>
    <div class="col-md-4">
      <h4 class="text-center px-5 featurette">On Time Delivery</h4>
      <p class="text-justify px-5 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quod , possimus, minus, culpa recusandae nesciunt dolor magni! Itaque, dolorum iste!</p>
    </div>
  </div>
  <h4 class="featurette text-center px-5 pt-3">Let us take care of your order details while you enjoy your free time!</h4>
  <div class="center">
    <a href="" class="btn btn-lg btn-success">Make An Order</a>
  </div>
  
</div>
<div class="row p-2">
  
</div>
 
@include('includes.footer')
@endsection
