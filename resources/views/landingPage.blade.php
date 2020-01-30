@extends('layouts.GuestDashboard')
@section('title', 'Welcome to tamBuy')
@section('content')
    <!-- carousel -->
    <div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php
                $img=[['/image/landingPage/shoppingPoster.jpg','First slide','active'],['/image/landingPage/shoppingPoster2.jpg','Second slide',''],['/image/landingPage/shoppingPoster3.jpg','Third slide','']];
                foreach($img as $pic){
                    echo "<div class='carousel-item ".$pic[2]."'><img class='d-block w-100' src='".$pic[0]."' alt='".$pic[1]."'></div>";
                }      
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <div>
    <!-- details of app -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2>About Us</h2>
                <div id="summary">
                    <p class="collapse" id="about">
                        We strive to have a positive impact on customers, employees,
                        small businesses, the economy, and communities where we’re located. Amazonians are smart,
                        passionate builders with different backgrounds and goals, who share a common desire to
                        alwaysbe learning and inventing on behalf of our customers.
                    </p>
                    <a class="collapsed" data-toggle="collapse" href="#about" aria-expanded="false" aria-controls="collapseSummary"></a>
                </div>
            </div>
            <div class="col-md-6">
            <h2>Supporting small businesses</h2>
                <div id="summary">
                    <p class="collapse" id="support">
                        Amazon is committed to helping small businesses and entrepreneurs grow sales and reach
                        new customers. Today, more than 1.9 million businesses, content creators and developers 
                        in the U.S. use Amazon products and services to follow their dreams and reach customers.        
                    
                    <b>Job creation and investment</b>
                    
                    Amazon contributes to economic growth through direct and indirect job creation and 
                    investment in communities where we operate. Amazon employs more than 275,000 people in 
                    the U.S. and our investments have led to the creation of more than 680,000 
                    jobs in the U.S. in addition to our direct hires.
                    </p>
                    <a class="collapsed" data-toggle="collapse" href="#support" aria-expanded="false" aria-controls="collapseSummary"></a>
                </div>
            </div>
        </div>   
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">   
            <div class="col-md-6">
                <h2>Our mission</h2>
                <div id="summary">
                    <p class="collapse" id="mission">
                        serve consumers through online and physical stores and focus on selection,
                        price, and convenience.” Amazon vision statement is “to be Earth’s most customer-centric
                        company, where customers can find and discover anything they might want to buy online,
                        and endeavors to offer its customers the lowest possible prices.
                    </p>
                    <a class="collapsed" data-toggle="collapse" href="#mission" aria-expanded="false" aria-controls="collapseSummary"></a>
                </div>
            </div>    
            <div class="col-md-6">
            <h2>Our vision</h2>
                <div id="summary">
                    <p class="collapse" id="vision">
                        Our vision is to be earth's most customer-centric company; to build a place where
                        people can come to find and discover anything they might want to buy online
                    </p>
                    <a class="collapsed" data-toggle="collapse" href="#vision" aria-expanded="false" aria-controls="collapseSummary"></a>
                </div>
            </div>
        </div>
    </div>
   <!-- about the devs -->
    <div class="container-fluid">
    <hr>
    <center>
        <h2>developers</h2>
    </center>
    <div class="container-fluid" id="developers">
        <div class="row">
            <div class="col-md-4" >
                <div style="background-color:#e9e8e8;width:90%;padding:5%;">
                    <img src="./image/dev/patchan.png" id="dev" >
                    <div id="summary">
                        <p class="collapse" id="collapseSummary">
                            <b>Mr. John Patrick Tancinco</b> adipiscing elit. Nunc porttitor maximus laoreet.
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. In hac habitasse platea dictumst. Suspendisse venenatis sollicitudin erat in gravida.
                            Sed eget nisl tristique, commodo lectus sit amet, vulputate sem. Cras porttitor lorem ipsum, sit amet iaculis massa feugiat vitae. Curabitur sapien odio, ullamcorper tincidunt interdum vitae, vestibulum eu neque. Nam leo massa, fringilla eget mauris feugiat, auctor suscipit justo.
                        </p>
                        <a class="collapsed" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a>
                    </div>
                </div>        
            </div>


            <div class="col-md-4" >
                <div style="background-color:#e9e8e8;width:90%;padding:5%;">
                    <img src="./image/dev/josephine.png" id="dev" >
                    <div id="summary">
                        <p class="collapse" id="collapseSummary1">
                            <b>Ms. josephine Morre</b> adipiscing elit. Nunc porttitor maximus laoreet.
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. In hac habitasse platea dictumst. Suspendisse venenatis sollicitudin erat in gravida.
                            Sed eget nisl tristique, commodo lectus sit amet, vulputate sem. Cras porttitor lorem ipsum, sit amet iaculis massa feugiat vitae. Curabitur sapien odio, ullamcorper tincidunt interdum vitae, vestibulum eu neque. Nam leo massa, fringilla eget mauris feugiat, auctor suscipit justo.
                        </p>
                        <a class="collapsed" data-toggle="collapse" href="#collapseSummary1" aria-expanded="false" aria-controls="collapseSummary"></a>
                    </div>
                </div>
            </div>          
            <div class="col-md-4" >
                <div style="background-color:#e9e8e8;width:90%;padding:5%;">
                    <img src="./image/dev/marion.jpg" id="dev">
                    <div id="summary">
                        <p class="collapse" id="collapseSummary2">
                            <b>Mr. Marion Jay M. Balugo</b>, consectetur adipiscing elit. Nunc porttitor maximus laoreet.
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. In hac habitasse platea dictumst. Suspendisse venenatis sollicitudin erat in gravida.
                            Sed eget nisl tristique, commodo lectus sit amet, vulputate sem. Cras porttitor lorem ipsum, sit amet iaculis massa feugiat vitae. Curabitur sapien odio, ullamcorper tincidunt interdum vitae, vestibulum eu neque. Nam leo massa, fringilla eget mauris feugiat, auctor suscipit justo.
                        </p>
                        <a class="collapsed" data-toggle="collapse" href="#collapseSummary2" aria-expanded="false" aria-controls="collapseSummary"></a>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <section id="footer">
        <div style="margin-left:20px">
            <br>
            <p>@copyright 2020-2022 | all rights reserved</p>
        </div>
    </section>
    <br>
@endsection


    

