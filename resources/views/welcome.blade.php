@extends('layouts.app')

@section('content')
<div class="home">
  <div class="hero-text pt--5">
    <div class="row">
      {{--<div class="col-md-5 pt-4">
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
      </div>--}}
      <div class="hero-text-inner col-md-10 mx-auto">
        <div class="jumbotron h-100">
          <h1 class="font-weight-bold pt-4">Professional research paper writing services for students.</h1>
          <!-- <h3>From initial topic to finished paper</h3> -->
          <p class="lead3">Describe what you need done and get assistance. In order to write a good research paper, one needs a professional. We have a very qualified team of writers who can assist you with your research paper; they possess reputable qualifications and have undergone thorough vetting to produce unique and quality papers. Our services are quite affordable. As a reliable writing service provider, we understand that writing a research paper requires skills and expertise. Place an order on our website today and get research paper writing help.</p>
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
            <!-- <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/notification.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="pt-2 featurette">Email Notifications</h3>
            <!-- <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/chat.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="pt-2 featurette">Online Writer Chat</h3>
            <!-- <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p> -->
          </div>
        </div>
    </div>
    <div class="row justify-content-center container-fluid pt-3">
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/bargains.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="pt-2 featurette">Have the Bargaing Power</h3>
            <!-- <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/file.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="pt-2 featurette">Plagiarism Free Papers</h3>
            <!-- <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 align-items-center">
            <img src="./img/coin.svg" style="height: 60px; width: 60px" alt="">
            <h3 class="pt-2 featurette">Affordable Prices</h3>
            <!-- <p class="pt-2 lead2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima commodi autem, nam, a iste quia quos quidem provident magnam. Necessitatibus at ducimus odit amet mollitia facilis molestias iste pariatur atque.</p> -->
          </div>
        </div>
    </div>
</div>

<div class="row p-5 ml-5">
  <div class="col-md-3 offset-2 p-3 ml-10">
    <img class="img-fluid" src="./img/graph.jpg" alt="">
  </div>
  <div class="col-md-7 pt-5">
    <h3 class="featurette">Customized research paper writing.</h3>
    <p class="lead2 pt-3">We provide a customer-centered research paper writing service that will enable you to receive the paper the way you ordered it. To produce a successful research paper, we ensure requirements are followed accordingly to produce unique and excellent work. Our team can handle research from any level of study. You are guaranteed of a research paper that is outstanding and meets the required standards.</p>
  </div>
</div>

<div class="justify-content-center py-3">
  <div class="row justify-content-center">
    <h1 class="featurette text-center p-4">Why choose us!</h1>
    <!-- <hr/> -->
  </div>
  <div class="row">
    <div class="col-md-4">
      <h4 class="text-center px-5 featurette">Quality work</h4>
      <p class="text-justify px-5 lead2">Our company is made up of a large team of highly qualified writers from different fields with firsthand experience on handling essays. Such a team is dedicated to offer nothing short of quality. Each paper is done from scratch through extensive research on the topic. Moreover, our writers guarantee a paper free of grammar mistakes. With us, you can, therefore, bet on getting the best research paper. </p>
    </div>
    <div class="col-md-4">
      <h4 class="text-center px-5 featurette">Originality</h4>
      <p class="text-justify px-5 lead2">All our writers produce non-plagiarized research papers because we start each item from scratch following the order requirements and client’s preferences. Our writers conduct extensive research on the given topic and gather sufficient content, including evidence to include in your paper.</p>
    </div>
    <div class="col-md-4">
      <h4 class="text-center px-5 featurette">Timely delivery</h4>
      <p class="text-justify px-5 lead2">Our company is time conscious; submit an order to us if you need help writing research paper to avoid last minute panic or delayed delivery. All our writers are disciplined individuals who are very time conscious. We believe in working on a client’s work immediately and strive to submit it as early as possible. Most of our orders are submitted before the stipulated time.</p>
    </div>
  </div>
  <h4 class="featurette text-center px-5 pt-3">Let us take care of your order details while you enjoy your free time!</h4>
  <div class="center">
    <a href="" class="btn btn-lg btn-success">Make An Order</a>
  </div>
    <div class="row p-2">
    </div>
    <h4 class="featurette text-center px-5 pt-3">Subscribe to our Newsletter</h4>
    <div class="center p-2">
        <newsletter></newsletter>
    </div>
</div>

<div class="row p-2">

</div>

@endsection
