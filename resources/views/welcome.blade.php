
@extends('layouts.master')

@section('title', 'Getsporty::Home')
<!-- 
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop -->

@section('content')
   <!--  <p>This is my body content.</p> -->

<div class="banner"> <div class="container-fluid" id="know_about"> <div class="container"> <div class="row"> <div class="col-sm-6"> <div class="banner-img-wrap animated fadeInLeft" style="padding-top: 100px;text-align: center;padding-bottom: 20px;">

 <img id="mainslider" src="{{asset('assets/img/freezeimage1.png')}}" class="img-responsive wd250 " /> 

<!--   <img src="img/11.jpg"  id="thisImg1" alt="img" style="width:224px; margin-left:-45%;height:366px;margin-bottom:-10%;"> -->

</div> </div> <div class="col-sm-6"> <div class="head1 animated fadeInRight"> Indian first Mobile App <br>for  Aspiring Sports Professionals <br><br> <div class="linkto"> <a href="#about">LEARN MORE</a> <span> <a href="https://play.google.com/store/apps/details?id=getsportylite.darkhoprsesport.com.getsportylite&hl=en">GET APP</a> </span> </div> 
<br>
<div class="linkto" id="slid"> 
<a id="url" class="nav-link" style="width: 217px;text-align: center;" onmousemove="textchangestop(this)"  onmouseleave="textstart()" href="#res" >View Articles</a>
</div>
 </div> </div>

<div style="margin-left: 40%;">
<input type='radio' onclick="dotfunction(this)"  style="position: relative;left: 104px;visibility: visible" class="radio" name='a' id="1" />
<input type='radio' onclick="dotfunction(this)" id="2" style="position: relative;left: 104px;visibility: visible" class="radio" name='a'/>
<input type='radio' onclick="dotfunction(this)" id="3" style="position: relative;left: 104px;visibility: visible" class="radio" name='a'/>
<input type='radio' onclick="dotfunction(this)" id="4" style="position: relative;left: 104px;visibility: visible" class="radio" name='a'/>
</div>
<!--  <ol>
        <li id="1" onclick="dotfunction(this)"></li>
        <li id="2" onclick="dotfunction(this)"></li>
        <li id="3" onclick="dotfunction(this)"></li>
        <li id="4" onclick="dotfunction(this)"></li>
    </ol> -->






  </div> </div> </div> </div> <!--know about us--> <section class="know_about"  id="about" > <div class="container-fluid" id="know_about" > <div class="container"> <div class="row"> <div class="col-sm-12 spaceAll"> <div class="title" >App Features</div> <div class="sub-heading">Learn more about this feature packed App</div> </div> <div class="col-sm-12 scrollpoint sp-effect1 active animated fadeInLeft" style="margin-bottom: 70px; margin-top: 30px;"> <div class="row"> <div class="col-sm-12 col5 center"> <div class="rel"> <a  class="clk" href="#"> <img class="wd35" src="{{asset('assets/img/siteicons/Events.png')}}" /> </a> </div> <div class="media-body"> <h3 class="media-heading">Events</h3> </div> <div class="detail img-1"> We bring you the latest updates on all the big sports events to your GetSporty App. Be it an upcoming sports trial or just a weekend sporting event, get all the information on your phone </div> <div class="mr25"></div> </div> <div class="col-sm-12 col5 center"> <div class="rel"> <a  class="clk" href="#"> <img class="wd35" style="width:60px;" src="{{asset('assets/img/siteicons/Tournaments.png')}}" /> </a> </div> <div class="media-body"> <h3 class="media-heading">Tournaments</h3> </div> <div class="detail img-1"> Never miss an opportunity to impress and be never short on practice. Get all the updates on the latest and the upcoming sports tournaments in the area near you </div> <div class="mr25"></div> </div> <div class="col-sm-12 col5 center"> <div class=" rel"> <a id="img-5" class="clk" href="#"> <img class="wd35" src="{{asset('assets/img/siteicons/performance.png')}}" /> </a> </div> <div class="media-body"> <h3 class="media-heading">Assessment</h3> </div> <div class="detail img-5">Get your daily performance assessed by professionals or be the master of your own training sessions </div> <div class="mr25"></div> </div> <div class="col-sm-12 col5 center"> <div class="rel"> <a class="clk" href="#"> <img class="wd35" src="{{asset('assets/img/siteicons/Jobs.png')}}" /> </a> </div> <div class="media-body"> <h3 class="media-heading">Job Listing</h3> </div> <div class="detail img-3">Find your dream sports job. Browse through all the latest sports jobs in the Goverment or private sector through our specially devoted &quot;Sports Job Portal&quot; </div> <div class="mr25"></div> </div> <div class=" col-sm-12 col5 center"> <div class="rel"> <a  class="clk" href="#"> <img class="wd35" src="{{asset('assets/img/siteicons/Log.png')}}" /> </a> </div> <div class="media-body"> <h3 class="media-heading">Resources</h3> </div> <div class="detail img-4">Not an everyday content but a fearsome approach to take on the state of Indian sports and a complete guide to reveal the path for sports enthusiasts to reach the pinnacle of their sport </div> <div class="mr25"></div> </div> </div> </div> <br><br> <div class="col-sm-12 scrollpoint sp-effect2 active animated fadeInRight"> <div class="row"> <div class="col-sm-12 col5 center"> <div class=" rel"> <a id="img-5" class="clk" href="#"> <img class="wd35" style="    margin-bottom: 4.5%;" src="{{asset('assets/img/siteicons/Coach.png')}}" /> </a> </div> <div class="media-body"> <h3 class="media-heading">Coach</h3> </div> <div class="detail img-5">Want to become a professional player? For the best result, contact the best coach and train harder and smarter </div> <div class="mr25"></div> </div> <div class="col-sm-12 col5 center"> <div class="rel"> <a id="img-6" class="clk" href="#" onclick="return false;" > <img class="wd35" src="{{asset('assets/img/siteicons/Trainer.png')}}" /> </a> </div> <div class="media-body"> <h3 class="media-heading">Training Log</h3> </div> <div class="detail img-6">Track your workouts, save your history and manage your performance with this dedicated training log </div> <div class="mr25"></div> </div> <div class="col-sm-12 col5 center"> <div class=" rel"> <a id="img-7" class="clk" href="#"> <img class="wd35" style="width:33px;" src="{{asset('assets/img/siteicons/medal.png')}}" /> </a> </div> <div class="media-body"> <h3 class="media-heading">Post Results</h3> </div> <div class="detail img-7">Give yourself remarks and compare your last day&#39;s performance with your recent results </div> <div class="mr25"></div> </div> <div class="col-sm-12 col5 center"> <div class="rel"> <a id="img-8" class="clk" href="#"> <img class="wd35" src="{{asset('assets/img/siteicons/Connect.png')}}" /> </a> </div> <div class="media-body"> <h3 class="media-heading">Connect</h3> </div> <div class="detail img-8">Contact the best professionals, trainers or the coaches to help you refine your skills and be the player that you have always dreamt about </div> <div class="mr25"></div> </div> <div class="col-sm-12 col5 center"> <div class="rel"> <a id="img-9" class="clk" href="#"> <img class="wd35" src="{{asset('assets/img/siteicons/Parent.png')}}" /> </a> </div> <div class="media-body"> <h3 class="media-heading">Parent</h3> </div> <div class="detail img-9">Book an upcoming event or tournament or just hire a personal trainer or coach for your child. Keep a tab on your ward&#39;s performance through this unique feature </div> <div class="mr25"></div> </div> </div> </div> </div> </div> </div> </section>


   <section class="latest_new" id="news" style="background-color: rgba(9, 40, 213, 0.04);"> <div class="container-fluid" id="res"> <div class="container"> <div class="col-sm-12 spaceAll"> <div class="title">Latest Resources</div> <div class="sub-heading">See what’s included in the App </div> </div> <!-- Nav tabs --> <div class="row"> <div class="col-md-12"> <!-- Tab panels --> <div class="tab-content vertical"> <!--Panel 1--> <div class="tab-pane fade in show active" id="panel21" role="tabpanel"> <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel"> <!--Controls --> <div class="controls-top"> <a style="position:inherit;" class="btn-floating btn-small" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a> <a style="position:inherit;" class="btn-floating btn-small" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a> </div> <div id="img1" style="top: 0px; background-color: transparent; width: 100%; height: 300px; opacity: 0.7;"> <div  class="loader1"> </div> </div> <!--Slides--> 
    <div class="carousel-inner" role="listbox" id="id1"> <!--/.Second slide--> <!--/.Slides--> </div></div> </div> </section>

                    <!--        Job Information  -->

<section class="latest_new" id="news" style="background-color:rgb(222, 240, 249);"> <div class="container-fluid" id="job_div"> <div class="container"> <div class="col-sm-12 spaceAll"> <div class="title"><a href="job_list.html" target="_blank"> Job </a></div> <div class="sub-heading">See what’s included in the App </div> </div> <!-- Nav tabs --> <div class="row"> <div class="col-md-12"> <!-- Tab panels --> <div class="tab-content vertical"> <!--Panel 1--> <div class="tab-pane fade in show active" id="panel21" role="tabpanel"> <div id="multi-item-exampl2" class="carousel slide carousel-multi-item" data-ride="carousel"> <!--Controls --> <div class="controls-top"> <a style="position:inherit;" class="btn-floating btn-small" href="#multi-item-exampl2" data-slide="prev"><i class="fa fa-chevron-left"></i></a> <a style="position:inherit;" class="btn-floating btn-small" href="#multi-item-exampl2" data-slide="next"><i class="fa fa-chevron-right"></i></a> </div>  <!--Slides--> 
    <div class="carousel-inner" role="listbox" id="id3"> <!--/.Second slide--> <!--/.Slides--> </div></div> </div> </section>

        <!--        Latest Event & Tournament    -->

   <section class="latest_new" id="news"> <div class="container-fluid" id="evt_tourn"> <div class="container"> <div class="col-sm-12 spaceAll"> <div class="title"><a href="event_tournament.html" target="_blank">Event</a> & <a href="tournament_list.html" target="_blank"> Tournament</a></div> <div class="sub-heading">See what’s included in the App </div> </div>  <div class="row"> <div class="col-md-12"> <div class="tab-content vertical">  <div class="tab-pane fade in show active" id="panel21" role="tabpanel"> <div id="multi-item-exampl" class="carousel slide carousel-multi-item" data-ride="carousel">   <div class="controls-top"> <a style="position:inherit;" class="btn-floating btn-small" href="#multi-item-exampl" data-slide="prev"><i class="fa fa-chevron-left"></i></a> <a style="position:inherit;" class="btn-floating btn-small" href="#multi-item-exampl" data-slide="next"><i class="fa fa-chevron-right"></i>
   </a> </div> 
   <div class="carousel-inner" role="listbox" id="id2"></div> </div></div></section> 


<section class="get-app" id="app">
<div class="container-fluid">
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="animated fadeInLeft">
<h2 id="getApp">Get App</h2>
<p>Choose your native platform and get started!</p>
<a class="btn btn-primary" href="https://play.google.com/store/apps/details?id=getsportylite.darkhoprsesport.com.getsportylite&hl=en"><i class="fa fa-android" aria-hidden="true"></i> Download For Android<span class="glyphicon glyphicon-user"></span></a>

</div>

</div>

<div class="col-sm-6">

<div class="animated fadeInRight">

<div class="img-wrap1">

<img style="max-width:120%" src="{{asset('assets/img/freezeimage2.png')}}" />

</div>

</div>

</div>



</div>

</div>

</div>  

</section>
<div class="cut" style="position: relative;"> <section id="team" style="    background: url(assets/img/bg2.jpg)no-repeat center /cover; background-attachment: fixed;"> <div class="container"> <div style="text-align: center; margin-bottom:2%; color:white;"> <h2> Our Team</h2> </div> <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> <div class="carousel-inner" role="listbox"> <div class="carousel-item active"> <div class="row" style="    margin-left: 5%;"> <div class="col-md-4 col-sm-6"> </div> <div class="col-md-4 col-sm-12 cent"> <div class="our-team" style="width: 87.5%;"> <img src="{{asset('assets/img/team/team-02.jpg')}}"> <div class="team-content"> <h3 class="title">Anirudh Singh</h3> <span class="post">Founder & Product Architect</span> <ul class="icon"> <li><a href="#"><i class="fa fa-facebook"></i></a></li> <li><a href="#"><i class="fa fa-twitter"></i></a></li> <li><a href="#"><i class="fa fa-google-plus"></i></a></li> </ul> </div> </div> </div> <div class="col-md-4 col-sm-6"> </div> </div> </div> <div class="carousel-item"> <div class="row"> <div class="col-md-4 col-sm-6 cent"> <div class="our-team"> <img src="{{asset('assets/img/team/team-08.jpg')}}"> <div class="team-content"> <h3 class="title">Nitin Agarwal</h3> <span class="post">Head, Web Development</span> <ul class="icon"> <li><a href="#"><i class="fa fa-facebook"></i></a></li> <li><a href="#"><i class="fa fa-twitter"></i></a></li> <li><a href="#"><i class="fa fa-google-plus"></i></a></li> </ul> </div> </div> </div> <div class="col-md-4 col-sm-6 cent"> <div class="our-team"> <img src="{{asset('assets/img/team/team-03.jpg')}}"> <div class="team-content"> <h3 class="title">Sandeep Kumar Singh</h3> <span class="post">Head, Android Development</span> <ul class="icon"> <li><a href="#"><i class="fa fa-facebook"></i></a></li> <li><a href="#"><i class="fa fa-twitter"></i></a></li> <li><a href="#"><i class="fa fa-google-plus"></i></a></li> </ul> </div> </div> </div> <div class="col-md-4 col-sm-6 cent"> <div class="our-team"> <img src="{{asset('assets/img/team/team-06.jpg')}}"> <div class="team-content"> <h3 class="title">Kumar Gaurav</h3> <span class="post">Head, IOS Development</span> <ul class="icon"> <li><a href="#"><i class="fa fa-facebook"></i></a></li> <li><a href="#"><i class="fa fa-twitter"></i></a></li> <li><a href="#"><i class="fa fa-google-plus"></i></a></li> </ul> </div> </div> </div> </div> </div> <div class="carousel-item"> <div class="row"> <div class="col-md-4 col-sm-6 cent"> <div class="our-team"> <img src="{{asset('assets/img/team/team-05.jpg')}}"> <div class="team-content"> <h3 class="title">Nikhil Mehta</h3> <span class="post">Android Developer</span> <ul class="icon"> <li><a href="#"><i class="fa fa-facebook"></i></a></li> <li><a href="#"><i class="fa fa-twitter"></i></a></li> <li><a href="#"><i class="fa fa-google-plus"></i></a></li> </ul> </div> </div> </div> <div class="col-md-4 col-sm-6 cent"> <div class="our-team"> <img src="{{asset('assets/img/team/team-04.jpg')}}"> <div class="team-content"> <h3 class="title">Harshvardhan</h3> <span class="post">PHP Developer</span> <ul class="icon"> <li><a href="#"><i class="fa fa-facebook"></i></a></li> <li><a href="#"><i class="fa fa-twitter"></i></a></li> <li><a href="#"><i class="fa fa-google-plus"></i></a></li> </ul> </div> </div> </div> <div class="col-md-4 col-sm-6 cent"> <div class="our-team"> <img src="{{asset('assets/img/team/team-01.jpg')}}"> <div class="team-content"> <h3 class="title">Devendra Pandey</h3> <span class="post">PHP Developer</span> <ul class="icon"> <li><a href="#"><i class="fa fa-facebook"></i></a></li> <li><a href="#"><i class="fa fa-twitter"></i></a></li> <li><a href="#"><i class="fa fa-google-plus"></i></a></li> </ul> </div> </div> </div> </div> </div> <div class="carousel-item"> <div class="row"> <div class="col-md-4 col-sm-6 cent"> <div class="our-team"> <img src="{{asset('assets/img/team/team-09.jpg')}}"> <div class="team-content"> <h3 class="title">Himanshu Joshi</h3> <span class="post">Frontend Developer</span> <ul class="icon"> <li><a href="#"><i class="fa fa-facebook"></i></a></li> <li><a href="#"><i class="fa fa-twitter"></i></a></li> <li><a href="#"><i class="fa fa-google-plus"></i></a></li> </ul> </div> </div> </div> <div class="col-md-4 col-sm-6 cent"> <div class="our-team"> <img src="{{asset('assets/img/team/team-07.jpg')}}"> <div class="team-content"> <h3 class="title">Shekhar Kashyap</h3> <span class="post">Android Developer</span> <ul class="icon"> <li><a href="#"><i class="fa fa-facebook"></i></a></li> <li><a href="#"><i class="fa fa-twitter"></i></a></li> <li><a href="#"><i class="fa fa-google-plus"></i></a></li> </ul> </div> </div> </div> <div class="col-md-4 col-sm-6 cent"> <div class="our-team"> <img src="{{asset('assets/img/team/team-10.jpg')}}"> <div class="team-content"> <h3 class="title">Anurag Tyagi</h3> <span class="post">Content Writer</span> <ul class="icon"> <li><a href="#"><i class="fa fa-facebook"></i></a></li> <li><a href="#"><i class="fa fa-twitter"></i></a></li> <li><a href="#"><i class="fa fa-google-plus"></i></a></li> </ul> </div> </div> </div> </div> </div> </div> <ol class="carousel-indicators" style="margin-top: 7%;position: relative;"> <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> </ol> </div> </div> </section> </div>





<!--Section: Contact v.1-->

<section class="section mb-4 support" id="support"> <div class="container-fluid"> <div class="container"> <div class="col-sm-12 spaceAll"> <div class="title" >Support</div> <div class="sub-heading">For more info and support, contact us!</div> </div> <div class="row"> <!--First column--> <div class="col-md-8"> <form name="form"> <!--First row--> <div class="row"> <!--First column--> <div class="col-md-6"> <div class="md-form"> <div class="md-form"> <input name="name" type="text" id="form41" class="form-control"> <label id="name" for="form41" class="">Your name</label> </div> </div> </div> <!--Second column--> <div class="col-md-6"> <div class="md-form"> <div class="md-form"> <input type="text" name="email" id="form52" class="form-control" > <label id="email" for="form52" class="">Your email</label> </div> </div> </div> </div> <!--/.First row--> <!--Second row--> <div class="row"> <div class="col-md-12"> <div class="md-form"> <input type="text" name="subject" id="form51" class="form-control"> <label id="subject" for="form51" class="">Subject</label> </div> </div> </div> <!--/Second row--> <!--Third row--> <div class="row"> <!--First column--> <div class="col-md-12"> <div class="md-form"> <textarea type="text" name="message" id="form76" class="md-textarea"></textarea> <label id="message" for="form76">Your message</label> </div> </div> </div> <!--/.Third row--> </form> <div class="center-on-small-only"> <button type="button" id="save" onclick="valname()" style="position: inherit;" class="btn btn-primary">Send</button> <!--  <a class="btn btn-primary">Send</a>  --> </div> </div> <!--.First column--> <!-- modalpopup--> <div id="myModal" class="modal fade" role="dialog"> </div> <!--LOADER... DO NOT DELETE--> <div id="img" style="    position: fixed; top: 0px; background-color: black; width: 100%; left:0px; height: 100%; opacity: 0.7;"> <div  class="loader"></div> </div> <!--Second column--> <div class="col-md-4"> <ul class="contact-icons"> <li><i class="fa fa-map-marker fa-2x"></i> <p>A 29, Sector 7, Noida, India ,201301</p> </li> <li><i class="fa fa-phone fa-2x"></i> <p><a href="tel:+91 120 4081135" style="color:#292b2c;">+91 120 4081135</a></p> </li> <li><i class="fa fa-envelope fa-2x"></i> <p><a href="mailto:info@darkhorsesports.in" style="color:#292b2c;">info@darkhorsesports.in</a></p> </li> </ul> </div> <!--.Second column--> </div> <!--/Section: Contact v.2--> </div> </div> </section> <!--/Section: Contact v.1-->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

@stop
