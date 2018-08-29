@extends('includes.head')
@section('middle')
<!-- Header -->

<!-- Banner -->
<div class="banner">
    <img   src="assets/images/banner/banner (1).jpg" alt="" >
    <div class="banner-overay">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7">
                <div class="caption h-white p-white">
                    <h1 class="font-cinzel">We establish an effecient, professional and statistically sound system in the KP Province.</h1>
                    <p>We formulate  inidcators and collect data against estabilshed indicators  periodically.</p>
<!--                    <img class="signature" src="assets/images/signature.png" alt="">-->
                    <form action="{{ url('search') }}" autocomplete="off" class="form-horizontal" method="post" accept-charset="utf-8">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="input-group">
                            <input name="keyword" value="" class="form-control" type="text" placeholder="Enter what u are looking for">
                    <span class="input-group-btn">
                       <button style="background:#3c8a50" class="btn btn-default" type="submit" id="addressSearch">
                           <span class="icon-search"></span>
                       </button>
                    </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner -->

<!-- Main Contetn -->
<main>

<!-- About Contribution -->
<!--<section class="about-contribution">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-4">-->
<!--                <div class="my-mission contribution-wigdet">-->
<!--                    <span class="theme-color font-montserrat">MY MISSION</span>-->
<!--                    <h4>Learn about <span class="theme-color">Adam’s vision</span> and the issues He’ll fight.</h4>-->
<!--                    <p>Hillary for America Foreign Policy Advisor Laura Rosenberger Issues Statement on the 25th Anniversary of Ukraine’s IndependenceHillary for America Foreign Policy Advisor Laura Rosenberger Issues Issues Statement on the Statement on the 25th Anniversary.</p>-->
<!--                    <p>Everything you need to know about Hillary and Tim Please Email <a href="#">info@adamsrooth.com</a></p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-4">-->
<!--                <div class="contribution-tabs">-->
<!--                    <ul class="nav-tabs" role="tablist">-->
<!--                        <li class="active"><a href="#contribution" role="tab" data-toggle="tab">Contribution</a></li>-->
<!--                        <li><a href="#profile" role="tab" data-toggle="tab">Volunteers</a></li>-->
<!--                    </ul>-->
<!--                    <div class="tab-content">-->
<!--                        <div role="tabpanel" class="tab-pane active" id="contribution">-->
<!--                            <div class="contribution content-wigdet">-->
<!--                                <p>OUR CAMPAIGN IS POWERED BY SUPPORTERS LIKE YOU</p>-->
<!--                                <strong class="font-montserrat">$734,234</strong>-->
<!--                                <p><b>Contiributions So Far</b></p>-->
<!--                                <div class="range-slider">-->
<!--                                    <input type="range">-->
<!--                                </div>-->
<!--                                <a class="btn" href="#">Contribute Now</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div role="tabpanel" class="tab-pane" id="profile">-->
<!--                            <div class="contribution content-wigdet">-->
<!--                                <p>OUR CAMPAIGN IS POWERED BY SUPPORTERS LIKE YOU</p>-->
<!--                                <strong class="font-montserrat">1,809</strong>-->
<!--                                <p>Volunteers Registerd so far</p>-->
<!--                                <ul class="click-users">-->
<!--                                    <li><a class="icon-man color" href="#"></a></li>-->
<!--                                    <li><a class="icon-man color" href="#"></a></li>-->
<!--                                    <li><a class="icon-man color" href="#"></a></li>-->
<!--                                    <li><a class="icon-man color" href="#"></a></li>-->
<!--                                    <li><a class="icon-man color" href="#"></a></li>-->
<!--                                    <li><a class="icon-man color" href="#"></a></li>-->
<!--                                    <li><a class="icon-man" href="#"></a></li>-->
<!--                                    <li><a class="icon-man" href="#"></a></li>-->
<!--                                    <li><a class="icon-man" href="#"></a></li>-->
<!--                                    <li><a class="icon-man" href="#"></a></li>-->
<!--                                </ul>-->
<!--                                <a class="btn" href="#">Contribute Now</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-4">-->
<!--                <div class="join-us contribution-wigdet">-->
<!--                    <span class="theme-color font-montserrat">JOIN MY MOVEMNET</span>-->
<!--                    <h4>Learn about Hillary’s vision and the issues she’ll fight for as president.</h4>-->
<!--                    <p>By clicking "Text me", you agree that you receive periodic text messages from Hillary for America.</p>-->
<!--                    <form>-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" placeholder="Enter Valid Email Address" class="form-control">-->
<!--                        </div>-->
<!--                        <div class="form-group width-btn">-->
<!--                            <input type="text" placeholder="Postel Code" class="form-control">-->
<!--                            <a class="btn" href="#">Count me In</a>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- About Contribution -->

<!-- Quick Links -->

<div class="container">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background: #3c8a50;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 align="center" style="color: white;" class="modal-title">Agriculture</h4>
                </div>
                <div class="modal-body">
                    <ul  style="font-weight: bold; margin-top: 1em;margin-bottom: 1em; margin-left: 0;margin-right: 0;padding-left: 40px; font-size: 16px;">
                        <li type="circle">Animal husbandry</li>
                        <li type="circle">Co-operative societies</li>
                        <li type="circle">Crop Acreage</li>
                        <li type="circle">Fertilizer</li>
                        <li type="circle">Food</li>
                        <li type="circle">Input</li>
                        <li type="circle">Land Use</li>
                        <li type="circle">Machinery</li>
                        <li type="circle">Metrology</li>
                        <li type="circle">Soil Conservation</li>

                    </ul>
                </div>

            </div>

        </div>
    </div>

</div>

<!--Department Section-->
<section class="quick-links tc-padding white-bg">
    <div class="container">
        <div class="row">
            <div class="main-heading" align="center">

                <h2>Departments</h2>
                <p>Bureau of Statistics is a provincial statistical organization and an attached department of Planning & Development Department mandated to collect, compile, analyze and disseminate official statistics relating to economic, social, demographic and other important dimensions </p>
            </div>

            <div class="col-sm-3 col-xs-6 xs-full-width"  data-toggle="modal" data-target="#myModal">
                <div class="quick-links-figure">
                    <img src="assets/images/quick-links-bg/img-01.jpg" alt="">

                    <div class="overlay">
                        <div class="position-center-x">
                            <h5>Agriculture</h5>
                            <span>(click for sub categories)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 xs-full-width">
                <div class="quick-links-figure">
                    <img src="assets/images/quick-links-bg/img-02.jpg" alt="">
                    <div class="overlay">
                        <div class="position-center-x">
                            <h5>Education</h5>
                            <span>(click for sub categories)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 xs-full-width">
                <div class="quick-links-figure">
                    <img src="assets/images/quick-links-bg/img-03.jpg" alt="">
                    <div class="overlay">
                        <div class="position-center-x">
                            <h5>CMI</h5>
                            <span>(click for sub categories)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 xs-full-width">
                <div class="quick-links-figure">
                    <img src="assets/images/quick-links-bg/img-04.jpg" alt="">
                    <div class="overlay">
                        <div class="position-center-x">
                            <h5>Enviroment</h5>
                            <span>(click for sub categories)</span>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-sm-3 col-xs-6 xs-full-width">
                <div class="quick-links-figure">
                    <img src="assets/images/quick-links-bg/img-01.jpg" alt="">
                    <div class="overlay">
                        <div class="position-center-x">
                            <h5>Fuel And Power</h5>
                            <span>(click for sub categories)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 xs-full-width">
                <div class="quick-links-figure">
                    <img src="assets/images/quick-links-bg/img-02.jpg" alt="">
                    <div class="overlay">
                        <div class="position-center-x">
                            <h5>Health</h5>
                            <span>(click for sub categories)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 xs-full-width">
                <div class="quick-links-figure">
                    <img src="assets/images/quick-links-bg/img-03.jpg" alt="">
                    <div class="overlay">
                        <div class="position-center-x">
                            <h5>Industries</h5>
                            <span>(click for sub categories)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6 xs-full-width">
                <div class="quick-links-figure">
                    <img src="assets/images/quick-links-bg/img-04.jpg" alt="">
                    <div class="overlay">
                        <div class="position-center-x">
                            <h5>Local Bodies</h5>
                            <span>(click for sub categories)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Quick Links -->

<!-- Video Section -->
<section class="video-section tc-padding" style=" background: url(assets/images/video-bg.jpg);">
    <div class="container p-relative">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-video h-white p-white after-clear">
                    <h2>About KPBOS</h2>

                    <p>The Bureau of Statistics (BOS) was established in 1971 after dissolution of one unit as a statistical arm of Planning and Development Department for the collection, consolidation, processing, analysis, publication and dissemination of statistics on economic, social, demographic and other important dimensions. Being a premier provincial statistical organization and an attached Department of Planning & Development Department, Government of Khyber Pakhtunkhwa the BOS caters to the data needs of diverse populace of data users while meeting national and international standards of data classifications and protocols.  It generates timely and reliable statistics through surveys and secondary data.  </p>
                    <h3>Vision</h3>
                    <p>Generate and dessiminate objective- oriented, credible and timely official statistics to facilitate policymakers, planners and other users of the data to take informed decisions and make the best use of data for sustainable and inclusive development.</p>
                    <h3>Prime Objectives</h3>
                    <p>
                    <ul>
                        <li><p>To establish an effecient, professional and statistically sound system in the Province.</p></li>
                        <li><p>To formulate  inidcators and collect data against estabilshed indicators  periodically.</p></li>
                        <li><p>To bring improvement in the scope and coverage of existing statistical reports making them more user friendly.</p></li>
                    </ul>
                    </p>
                  </div>

            </div>
        </div>
<!--        <a class="play-icon" href="http://www.youtube.com/watch?v=cH6kxtzovew" data-rel="prettyPhoto[video]"><i class="fa fa-play-circle"></i><span>Play Video</span></a>-->
    </div>
</section>
<!-- Video Section -->

<!-- Publications -->
<section class="tc-padding">
    <div class="container">

        <!-- Main Heading -->
        <div class="main-heading-holder">
            <div class="main-heading">
                <i class="heading-star icon-heading-icon"></i>
                <h2>Regular Publications</h2>
                <p>Bureau of Statistics is a provincial statistical organization and an attached department of Planning & Development Department mandated to collect, compile, analyze and disseminate official statistics relating to economic, social, demographic and other important dimensions </p>
            </div>
        </div>
        <!-- Main Heading -->

        <!-- Services -->
        <div class="row">
            <div class="services-columns">
                <!-- column -->
                <div class="col-sm-3 col-xs-6 xs-full-width">
                    <div class="services-column">
                        <div class="services-icon">
                            <img style="width: 150px; height: 200px;" class="img img-rounded" src="assets/images/services-icons/bg/bg-02.jpg" alt="">
                            <a href="/assets/images/quick-links-bg/img-01.jpg" download></a>
                        </div>
                        <h5>Book on Statistics</h5>
                    </div>
                </div>


                <!--  column -->
                <div class="col-sm-3 col-xs-6 xs-full-width">
                    <div class="services-column">
                        <div class="services-icon">
                            <img style="width: 150px; height: 200px;" class="img img-rounded" src="assets/images/services-icons/bg/2.png" alt="">
                        </div>
                        <h5>Book on Education</h5>
                    </div>
                </div>

                <!-- Servics column -->

                <!-- Servics column -->
                <div class="col-sm-3 col-xs-6 xs-full-width">
                    <div class="services-column">
                        <div class="services-icon">
                            <img style="width: 150px; height: 200px;" class="img img-rounded" src="assets/images/services-icons/bg/3.jpg" alt="">
                        </div>
                        <h5>Book on Health</h5>
                    </div>
                </div>

                <!-- Servics column -->

                <!-- Servics column -->
                <div class="col-sm-3 col-xs-6 xs-full-width">
                    <div class="services-column">
                        <div class="services-icon">
                            <img style="width: 150px; height: 200px;" class="img img-rounded" src="assets/images/services-icons/bg/4.png" alt="">
                        </div>
                        <h5>Book on Food</h5>
                    </div>
                </div>

                <!-- Servics column -->

                <!-- Servics column -->
                <div class="col-sm-3 col-xs-6 xs-full-width">
                    <div class="services-column">
                        <div class="services-icon">
                            <img style="width: 150px; height: 200px;" class="img img-rounded" src="assets/images/services-icons/bg/5.png" alt="">
                        </div>
                        <h5>Book on Industries</h5>
                    </div>
                </div>

                <!-- Servics column -->

                <!-- Servics column -->
                <div class="col-sm-3 col-xs-6 xs-full-width">
                    <div class="services-column">
                        <div class="services-icon">
                            <img style="width: 150px; height: 200px;" class="img img-rounded" src="assets/images/services-icons/bg/bg-02.jpg" alt="">
                        </div>
                        <h5>Book on CMI</h5>
                    </div>
                </div>

                <!-- Servics column -->
            </div>
        </div>
        <!-- Services -->

    </div>
</section>
<!-- End of regular publications section -->


<!-- Publications -->
<section class="tc-padding">
    <div class="container">

        <!-- Main Heading -->
        <div class="main-heading-holder">
            <div class="main-heading">
                <i class="heading-star icon-heading-icon"></i>
                <h2>Periodic Publications</h2>
                <p>Bureau of Statistics is a provincial statistical organization and an attached department of Planning & Development Department mandated to collect, compile, analyze and disseminate official statistics relating to economic, social, demographic and other important dimensions </p>
            </div>
        </div>
        <!-- Main Heading -->

        <!-- Services -->
        <div class="row">
            <div class="services-columns">
                <!-- column -->
                <div class="col-sm-3 col-xs-6 xs-full-width">
                    <div class="services-column">
                        <div class="services-icon">
                            <img style="width: 150px; height: 200px;" class="img img-rounded" src="assets/images/services-icons/bg/bg-02.jpg" alt="">
                        </div>
                        <h5>Book on Statistics</h5>
                    </div>
                </div>


                <!--  column -->
                <div class="col-sm-3 col-xs-6 xs-full-width">
                    <div class="services-column">
                        <div class="services-icon">
                            <img style="width: 150px; height: 200px;" class="img img-rounded" src="assets/images/services-icons/bg/2.png" alt="">
                        </div>
                        <h5>Book on Education</h5>
                    </div>
                </div>

                <!-- Servics column -->

                <!-- Servics column -->
                <div class="col-sm-3 col-xs-6 xs-full-width">
                    <div class="services-column">
                        <div class="services-icon">
                            <img style="width: 150px; height: 200px;" class="img img-rounded" src="assets/images/services-icons/bg/3.jpg" alt="">
                        </div>
                        <h5>Book on Health</h5>
                    </div>
                </div>

                <!-- Servics column -->

                <!-- Servics column -->
                <div class="col-sm-3 col-xs-6 xs-full-width">
                    <div class="services-column">
                        <div class="services-icon">
                            <img style="width: 150px; height: 200px;" class="img img-rounded" src="assets/images/services-icons/bg/4.png" alt="">
                        </div>
                        <h5>Book on Food</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services -->

    </div>
</section>
<!-- End of regular publications section -->






<!-- Featured News -->
<section class="tc-padding gray-bg">
    <div class="container">

        <!-- Main Heading -->
        <div class="main-heading-holder">
            <div class="main-heading">
                <i class="heading-star icon-heading-icon"></i>
                <h2>KPBOS News</h2>
            </div>
        </div>
        <!-- Main Heading -->

        <!-- Featured News Holder -->
        <div id="featured-news-slider" class="featured-news-slider">

            <!-- Featured News -->
            <div class="item">
                <div class="new-figure">
                    <div class="new-arthor">
                        <span>DECEMBER 27, 2016 <br>MY MISSION</span>
<!--                        <img src="assets/images/new-arthor/img-01.jpg" alt="">-->
                    </div>
                    <div class="news-img">
                        <img style="width: 350px; height: 250px" src="assets/images/featured-news/300px-Pakistan_Agriculture.png" alt="">
                    </div>
                    <h3><a href="blog-detail.html">We Have Published our book on agricutlture. So if anyone is interested can downlaod it from publications section</a></h3>
                </div>
            </div>
            <!-- Featured News -->

            <!-- Featured News -->
            <div class="item">
                <div class="new-figure">
                    <div class="new-arthor">
                        <span>DECEMBER 27, 2016 <br>MY MISSION</span>
                        <!--                        <img src="assets/images/new-arthor/img-01.jpg" alt="">-->
                    </div>
                    <div class="news-img">
                        <img style="width: 350px; height: 250px" src="assets/images/featured-news/food.jpg" alt="">
                    </div>
                    <h3><a href="blog-detail.html">We Have Published our book on Food. So if anyone is interested can downlaod it from publications section</a></h3>
                </div>
            </div>
            <!-- Featured News -->

            <!-- Featured News -->
            <div class="item">
                <div class="new-figure">
                    <div class="new-arthor">
                        <span>DECEMBER 27, 2016 <br>MY MISSION</span>
                        <!--                        <img src="assets/images/new-arthor/img-01.jpg" alt="">-->
                    </div>
                    <div class="news-img">
                        <img style="width: 350px; height: 250px" src="assets/images/featured-news/health.jpg" alt="">
                    </div>
                    <h3><a  href="blog-detail.html">We Have Published our book on Health. So if anyone is interested can downlaod it from publications section.</a></h3>
                </div>
            </div>


<!--            <div class="item">-->
<!--                <div class="new-figure">-->
<!--                    <div class="new-arthor">-->
<!--                        <span>DECEMBER 27, 2016 <br>MY MISSION</span>-->
<!--                        <img src="assets/images/new-arthor/img-03.jpg" alt="">-->
<!--                    </div>-->
<!--                    <h3><a href="blog-detail.html">Learn about Candidate vision and the issues she’ll fight.</a></h3>-->
<!--                    <div class="share-options">-->
<!--                        <a class="read-more" href="#"><i class="icon-arrow-right"></i>Read More</a>-->
<!--                        <ul>-->
<!--                            <li class="twitter"><i class="fa fa-facebook-square"></i><span>92</span></li>-->
<!--                            <li class="facebook"><i class="fa fa-twitter-square"></i><span>92</span></li>-->
<!--                            <li class="share"><i class="fa fa-share-alt-square"></i><span>92</span></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="news-img">-->
<!--                        <img src="assets/images/featured-news/img-03.jpg" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!-- Featured News -->

        </div>
        <!-- Featured News Holder -->

    </div>
</section>
<!-- Featured News -->

<!-- Event Section -->

<!-- Event Section -->

<!-- Event Acounter -->

<!-- Event Acounter -->

<!-- Campaign Media -->
<section class="campaign-media tc-padding has-layout white-bg">
    <div class="container">

        <!-- Main Heading -->
        <div class="main-heading-holder">
            <div class="main-heading">
                <i class="heading-star icon-heading-icon"></i>
                <h2>Gallery</h2>
                <p>Accusantium quam, ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam risus at semper amrper , magna quam. Cras...</p>
            </div>
        </div>
        <!-- Main Heading -->

        <!-- Campaign Media Gallery -->
        <div class="row no-gutters">
            <div class="col-sm-4 col-xs-4 xs-full-width">
                <a href="#" class="gallery-figure big">
                    <img src="assets/images/media-wall/img-01.jpg" alt="">
                    <div class="overlay">
                        <h5>Guest Appearance on in the The View”</h5>
                        <span class="post-icon"><i class="fa fa-instagram"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-sm-8 col-xs-8 xs-full-width">
                <div class="row no-gutters">
                    <div class="col-sm-3 col-xs-3 xs-full-width">
                        <a href="#" class="gallery-figure small">
                            <img src="assets/images/media-wall/img-05.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-3 xs-full-width">
                        <a href="#" class="gallery-figure small">
                            <img src="assets/images/media-wall/img-02.jpg" alt="">
                            <div class="overlay">
                                <span class="post-icon"><i class="fa fa-youtube-play"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-3 xs-full-width">
                        <a href="#" class="gallery-figure small">
                            <img src="assets/images/media-wall/img-04.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-3 xs-full-width">
                        <a href="#" class="gallery-figure small">
                            <img src="assets/images/media-wall/img-05.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-3 xs-full-width">
                        <a href="#" class="gallery-figure small style-2">
                            <img src="assets/images/media-wall/img-06.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-3 xs-full-width">
                        <a href="#" class="gallery-figure small style-2">
                            <img src="assets/images/media-wall/img-07.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-3 xs-full-width">
                        <a href="#" class="gallery-figure small style-2">
                            <img src="assets/images/media-wall/img-08.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-3 xs-full-width">
                        <a href="#" class="gallery-figure small style-2">
                            <img src="assets/images/media-wall/img-09.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Campaign Media Gallery -->

    </div>
</section>
<!-- Campaign Media -->

<!-- Testimonial -->
<section class="testimonial has-layout tc-padding" style=" background: url(assets/images/testimonial-bg.jpg);">
    <div class="container">
        <div class="testimonial-content">
            <div class="display-inline h-white p-white">
                <img src="assets/images/users-icon.png" alt="">
                <h2>Volunteer for the campaign</h2>
                <p>Always vote for principle, though you may vote alone, and you may cherish the sweetest<br> reflection that your vote is never lost</p>
                <a class="btn lg dark" href="#">Signup to Join us</a>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial -->

<!-- Facts -->
<section class="facts-section tc-padding has-layout white-bg">
    <div class="container">
        <div id="tc-counters" class="facts-lsit">
            <ul>
                <li>
                    <h6 class="">Chapters Nationwide</h6>
                    <h2 class="timer" id="chapters" data-to="10897" data-speed="3000">10,897</h2>
                </li>
                <li>
                    <h6 class="">Total Miles</h6>
                    <h2 class="timer" id="miles" data-to="33598" data-speed="3000">33,598</h2>
                </li>
                <li>
                    <h6 class="">Total Amount</h6>
                    <h2 class="timer" id="amount" data-to="2199" data-speed="3000">2.199M</h2><span>M</span>
                </li>
                <li>
                    <h6 class="">Facebook Following</h6>
                    <h2 class="timer" id="following" data-to="33598" data-speed="3000">33,598</h2>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Facts -->

<!-- Team -->
<section class="team none-margin tc-padding-top">

    <!-- Main Heading -->
    <div class="container">
        <div class="main-heading-holder">
            <div class="main-heading">
                <i class="heading-star icon-heading-icon"></i>
                <h2>Meet My Team</h2>
                <p>Accusantium quam, ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam risus at semper amrper , magna quam. Cras...</p>
            </div>
        </div>
    </div>
    <!-- Main Heading -->

    <!-- Team Columns -->
    <div class="row no-gutters">
        <div class="col-sm-3 col-xs-6 xs-full-width">
            <div class="team-column">
                <img src="assets/images/team/img-01.jpg" alt="">
                <div class="overlay">
                    <div class="detail h-white">
                        <h2><a href="#">NICK WALTER</a></h2>
                        <h6>Finanace Head</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 xs-full-width">
            <div class="team-column">
                <img src="assets/images/team/img-02.jpg" alt="">
                <div class="overlay">
                    <div class="detail h-white">
                        <h2><a href="#">Arron Hank</a></h2>
                        <h6>Finanace Head</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 xs-full-width">
            <div class="team-column">
                <img src="assets/images/team/img-03.jpg" alt="">
                <div class="overlay">
                    <div class="detail h-white">
                        <h2><a href="#">Abel Reuben</a></h2>
                        <h6>Finanace Head</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 xs-full-width">
            <div class="team-column">
                <img src="assets/images/team/img-04.jpg" alt="">
                <div class="overlay">
                    <div class="detail h-white">
                        <h2><a href="#">Abelson Hal</a></h2>
                        <h6>Finanace Head</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 xs-full-width">
            <div class="team-column">
                <img src="assets/images/team/img-05.jpg" alt="">
                <div class="overlay">
                    <div class="detail h-white">
                        <h2><a href="#">Adams John</a></h2>
                        <h6>Finanace Head</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 xs-full-width">
            <div class="team-column">
                <img src="assets/images/team/img-06.jpg" alt="">
                <div class="overlay">
                    <div class="detail h-white">
                        <h2><a href="#">Affleck Ben</a></h2>
                        <h6>Finanace Head</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 xs-full-width">
            <div class="team-column">
                <img src="assets/images/team/img-07.jpg" alt="">
                <div class="overlay">
                    <div class="detail h-white">
                        <h2><a href="#">Agena Keiko</a></h2>
                        <h6>Finanace Head</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 xs-full-width">
            <div class="team-column">
                <img src="assets/images/team/img-08.jpg" alt="">
                <div class="overlay">
                    <div class="detail h-white">
                        <h2><a href="#">Ah Koy James</a></h2>
                        <h6>Finanace Head</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Columns -->

</section>
<!-- Team -->

<!-- Products -->
<section class="products tc-padding gray-bg">
    <div class="container">

        <!-- Main Heading -->
        <div class="main-heading-holder">
            <div class="main-heading">
                <i class="heading-star icon-heading-icon"></i>
                <h2>Buy and Donate</h2>
                <p>Accusantium quam, ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam risus at semper amrper , magna quam. Cras...</p>
            </div>
        </div>
        <!-- Main Heading -->

        <!-- Products Columns -->
        <ul id="products-slider" class="products-slider">
            <li>
                <div class="product-column">
                    <div class="product-img">
                        <img src="assets/images/products/img-01.jpg" alt="">
                        <div class="overlay">
                            <a class="btn lg position-center-center" href="#">BUY NOW</a>
                        </div>
                        <span class="rate-batch">$14.00</span>
                    </div>
                    <div class="product-detail">
                        <h5><a href="product.html">Volunteer Shirt</a></h5>
                        <div class="rating-stars">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-column">
                    <div class="product-img">
                        <img src="assets/images/products/img-02.jpg" alt="">
                        <div class="overlay">
                            <a class="btn lg position-center-center" href="#">BUY NOW</a>
                        </div>
                        <span class="rate-batch">$14.00</span>
                    </div>
                    <div class="product-detail">
                        <h5><a href="product.html">Campaign Mug</a></h5>
                        <div class="rating-stars">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="product-column">
                    <div class="product-img">
                        <img src="assets/images/products/img-03.jpg" alt="">
                        <div class="overlay">
                            <a class="btn lg position-center-center" href="#">BUY NOW</a>
                        </div>
                        <span class="rate-batch">$14.00</span>
                    </div>
                    <div class="product-detail">
                        <h5><a href="product.html">Adam Badges</a></h5>
                        <div class="rating-stars">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <!-- Products Columns -->

    </div>
</section>
<!-- Products -->

<!-- Brands Icons -->
<div class="brands-icon">
    <div class="container">
        <ul id="brands-icon-slider" class="brands-icon-slider">
            <li><a href="#"><img src="assets/images/brands/img-02.jpg" alt=""></a></li>
            <li><a href="#"><img src="assets/images/brands/img-03.jpg" alt=""></a></li>
            <li><a href="#"><img src="assets/images/brands/img-04.jpg" alt=""></a></li>
            <li><a href="#"><img src="assets/images/brands/img-05.jpg" alt=""></a></li>
            <li><a href="#"><img src="assets/images/brands/img-04.jpg" alt=""></a></li>
        </ul>
    </div>
</div>
<!-- Brands Icons -->

</main>
<!-- Main Contetn -->
@endsection
</body>

<!-- Mirrored from techlinqs.com/html/politics/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jul 2018 10:43:04 GMT -->
</html>