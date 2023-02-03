<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <!-- bootsrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header starts here -->
    <header>
        <!-- header top -->
        <?php include('header.php'); ?>
    </header>
    <!-- header ends here -->
    <!-- main starts here -->
    <main>
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img class="imgpic" src="porsche.jpeg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="mysecttt">
                            <p>RENT A CAR</p>
                            <h1>Best Rental Cars with Unlimited Miles</h1>
                            <button class="sk">Reserve Now</button>

                        </div>


                    </div>

                </div>
                <div class="carousel-item">
                    <img class="imgpic" src="porshewhite.jpeg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="mysecttt">
                            <p>RENT A BENZ</p>
                            <h1>Best Rental Electric Cars with Unlimited Miles</h1>
                            <button class="sk">Reserve Now</button>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="imgpic" src="porsche.jpeg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="mysecttt">
                            <p>RENT A CAR</p>
                            <h1>Best Rental Cars with Unlimited Miles</h1>
                            <button class="sk">Reserve Now</button>

                        </div>
                    </div>

                </div>
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
        <section class="sect2">
            <div class="row">
                <div class="text-center">
                    <h1>01</h1>
                    <h2>WELCOME TO <small>Royal Cars</small></h2>
                </div>

            </div>
            <div class="row offset-3 pt-3 col-6 text-center">
                <img src="cars.png" alt="collections_cars">

                <p>Justo et eos et ut takimata sed sadipscing dolore lorem, et elitr labore labore voluptua no rebum
                    sed, stet voluptua amet sed elitr ea dolor dolores no clita. Dolores diam magna clita ea eos amet,
                    amet rebum voluptua vero vero sed clita accusam takimata. Nonumy labore ipsum sea voluptua sea eos
                    sit justo, no ipsum sanctus sanctus no et no ipsum amet, tempor labore est labore no. Eos diam
                    eirmod lorem ut eirmod, ipsum diam sadipscing stet dolores elitr elitr eirmod dolore. Magna elitr
                    accusam takimata labore, et at erat eirmod consetetur tempor eirmod invidunt est, ipsum nonumy at
                    et.</p>

            </div>

        </section>
        <section class="sect3 ml-5">
            <div class="row mt-4">
                <div class="col-4">
                    <div class="box1 text-center">
                        <div class="box  col-4 list-unstyled">
                            <li><i class="fa-solid fa-headphones" style="font-size: 40px; "></i></li>

                        </div>
                        <div class="offset-3 col-8">
                            <p class="myh">24/7 Car Rental Support</p>


                        </div>

                    </div>

                </div>
                <div class="col-4">
                    <div class="box1 text-center" style="background-color: #2B2E4A; ;">
                        <div class="box  col-4 list-unstyled">
                            <li><i class="fa-solid fa-car" style="font-size: 40px; "></i></li>


                        </div>
                        <div class="offset-3 col-8">
                            <p class="myh" style="color: white;">Car Reservation Anytime</p>


                        </div>



                    </div>



                </div>
                <div class="col-4">
                    <div class="box1 text-center">
                        <div class="box  col-4 list-unstyled">
                            <li><i class="fa-solid fa-location-dot" style="font-size: 40px; "></i></li>

                        </div>
                        <div class="offset-3 col-8">
                            <p class="myh">Lots of Pickup Locations</p>
                        </div>
                    </div>


                </div>

            </div>

        </section>
        <section class="sect2 mb-4">
            <div class="row">
                <div class="text-center">
                    <h1>02</h1>
                    <h2>Our Services</h2>
                </div>

            </div>

        </section>
        <section class="renta container-fluid d-flex">
            <div class="row justify-content-around mt-4">
                <div class="col-3   boche">
                    <div class="row">
                        <div class="col-3 pt-3">
                            <div class="boxed ">

                                <i class="fa-solid fa-taxi p-4" style="font-size: 40px; "></i>


                            </div>

                        </div>
                        <div class="offset-5 col-3 ">

                            <h1 class="digit">01</h1>

                        </div>

                    </div>
                    <div class="row">
                        <h3 class="ren pt-3">CAR RENTAL</h3>
                        <p class="text-secondary">kasd dolor no lorem nonunny sit labore tempor at justo rebum rebum
                            stet,justo elitr dolor amet sit sea sed</p>

                    </div>

                </div>
                <div class="col-3 boche bo">

                    <div class="row ">
                        <div class="col-3">
                            <div class="boxed">

                                <i class="fa fa-2x fa-money-check-alt p-4" style="font-size: 40px; "></i>

                            </div>

                        </div>
                        <div class="offset-5 col-3 ">

                            <h1 class="digit" style="color: #1c1e32;">02</h1>

                        </div>

                    </div>
                    <div class="row">
                        <h3 class="ren pt-3">CAR FINANCING</h3>
                        <p class="text-secondary">kasd dolor no lorem nonunny sit labore tempor at justo rebum rebum
                            stet,justo elitr dolor amet sit sea sed</p>

                    </div>

                </div>
                <div class="col-3  boche">
                    <div class="row">
                        <div class="col-3">
                            <div class="boxed">

                                <i class="fa-solid fa-car p-4" style="font-size: 40px; "></i>


                            </div>

                        </div>
                        <div class="offset-5 col-3">

                            <h1 class="digit">03</h1>

                        </div>

                    </div>
                    <div class="row">
                        <h3 class="ren">CAR INSPECTION</h3>
                        <p class="text-secondary">kasd dolor no lorem nonunny sit labore tempor at justo rebum rebum
                            stet,justo elitr dolor amet sit sea sed</p>

                    </div>

                </div>

            </div>



        </section>
        <section class="renta container-fluid d-flex">
            <div class="row justify-content-around mt-2">
                <div class="col-3   boche">
                    <div class="row">
                        <div class="col-3 pt-3">
                            <div class="boxed ">

                                <i class="fa-solid fa-cogs p-4" style="font-size: 40px; "></i>


                            </div>

                        </div>
                        <div class="offset-5 col-3 ">

                            <h1 class="digit">04</h1>

                        </div>

                    </div>
                    <div class="row">
                        <h3 class="ren pt-3">AUTO REPAIRING</h3>
                        <p class="text-secondary">kasd dolor no lorem nonunny sit labore tempor at justo rebum rebum
                            stet,justo elitr dolor amet sit sea sed</p>

                    </div>

                </div>
                <div class="col-3 boche">

                    <div class="row">
                        <div class="col-3">
                            <div class="boxed">

                                <i class="fa-solid fa-spray-can p-4" style="font-size: 40px; "></i>


                            </div>

                        </div>
                        <div class="offset-5 col-3 ">

                            <h1 class="digit">05</h1>

                        </div>

                    </div>
                    <div class="row">
                        <h3 class="ren pt-3">AUTO PAINTING</h3>
                        <p class="text-secondary">kasd dolor no lorem nonunny sit labore tempor at justo rebum rebum
                            stet,justo elitr dolor amet sit sea sed</p>

                    </div>

                </div>
                <div class="col-3  boche">
                    <div class="row">
                        <div class="col-3">
                            <div class="boxed">

                                <i class="fa-solid fa-pump-soap p-4" style="font-size: 40px; "></i>


                            </div>

                        </div>
                        <div class="offset-5 col-3">

                            <h1 class="digit">06</h1>

                        </div>

                    </div>
                    <div class="row">
                        <h3 class="ren">AUTO CLEANING</h3>
                        <p class="text-secondary">kasd dolor no lorem nonunny sit labore tempor at justo rebum rebum
                            stet,justo elitr dolor amet sit sea sed</p>

                    </div>

                </div>

            </div>



        </section>
        <section class="sect2 mb-4">
            <div class="row">
                <div class="text-center">
                    <h1>03</h1>
                    <h2>Find your car</h2>
                </div>

            </div>

        </section>
        <section class="benx container">
            <div class="row">
                <div class="col-3">
                    <div class="brod text-center">

                        <img class="car" src="benzo.png" alt="">
                        <h3>MERCEDES YELLOW R3</h3>
                        <div>
                            <ul class="d-flex list-unstyled justify-content-center">
                                <li><i class="fa fa-car"></i> 2015</li>
                                <li> <i class="fa fa-cogs"></i> AUTO</li>
                                <li><i class="fa fa-road"></i> 25K</li>
                            </ul>

                            <button class="btn-lg btn-warning"
                                style="background-color: #D56A07; border: none; color: white; ">$99.00/Day</button>
                        </div>
                    </div>

                </div>
                <div class="col-3 offset-1">
                    <div class="brod text-center">

                        <img class="car" src="bmwjeep.png" alt="">
                        <h3>MERCEDES WHITE R3</h3>
                        <div>
                            <ul class="d-flex list-unstyled justify-content-center">
                                <li><i class="fa fa-car"></i> 2015</li>
                                <li> <i class="fa fa-cogs"></i> AUTO</li>
                                <li><i class="fa fa-road"></i> 25K</li>
                            </ul>

                            <button class="btn-lg btn-warning"
                                style="background-color: #D56A07; border: none; color: white; ">$99.00/Day</button>
                        </div>
                    </div>

                </div>
                <div class="col-3 offset-1">
                    <div class="brod text-center">

                        <img class="car" src="spider.png" alt="">
                        <h3>AUDI SPIDER</h3>
                        <div>
                            <ul class="d-flex list-unstyled justify-content-center">
                                <li><i class="fa fa-car"></i> 2015</li>
                                <li> <i class="fa fa-cogs"></i> AUTO</li>
                                <li><i class="fa fa-road"></i> 25K</li>
                            </ul>

                            <button class="btn-lg btn-warning"
                                style="background-color: #D56A07; border: none; color: white; ">$99.00/Day</button>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <section class="benx container mt-5 ">
            <div class="row">
                <div class="col-3">
                    <div class="brod text-center">

                        <img class="car" src="audi.png" alt="audicar">
                        <h3>MERCEDES ORANGE</h3>
                        <div>
                            <ul class="d-flex list-unstyled justify-content-center">
                                <li><i class="fa fa-car"></i> 2015</li>
                                <li> <i class="fa fa-cogs"></i> AUTO</li>
                                <li><i class="fa fa-road"></i> 25K</li>
                            </ul>

                            <button class="btn-lg btn-warning"
                                style="background-color: #D56A07; border: none; color: white; ">$120.00/Day</button>
                        </div>
                    </div>

                </div>
                <div class="col-3 offset-1">
                    <div class="brod text-center">

                        <img class="car" src="ben10.png" alt="">
                        <h3>MERCEDES BENZ BLUE</h3>
                        <div>
                            <ul class="d-flex list-unstyled justify-content-center">
                                <li><i class="fa fa-car"></i> 2015</li>
                                <li> <i class="fa fa-cogs"></i> AUTO</li>
                                <li><i class="fa fa-road"></i> 25K</li>
                            </ul>

                            <button class="btn-lg btn-warning"
                                style="background-color: #D56A07; border: none; color: white; ">$99.00/Day</button>
                        </div>
                    </div>

                </div>
                <div class="col-3 offset-1">
                    <div class="brod text-center">

                        <img class="car" src="audon.png" alt="">
                        <h3>AUDI SPECS</h3>
                        <div>
                            <ul class="d-flex list-unstyled justify-content-center">
                                <li><i class="fa fa-car"></i> 2015</li>
                                <li> <i class="fa fa-cogs"></i> AUTO</li>
                                <li><i class="fa fa-road"></i> 25K</li>
                            </ul>

                            <button class="btn-lg btn-warning"
                                style="background-color: #D56A07; border: none; color: white; ">$299.00/Day</button>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <section class="drv  row mt-4  ">
            <div class="col-6">
                <div class="row myc">
                    <div class="col-4">

                        <img height="200px;" src="reswhi.png" alt="">
                    </div>
                    <div class="col-7">
                        <div style="padding: 28px;">
                            <h2>WANT TO BE DRIVER ?</h2>
                            <p>Lorem Justo sit sit ipsum eos lorem kasd, kasd labore</p>

                            <button class="btn-lg btn-warning border border-0"
                                style="background-color: #D56A07; border: none; color: white; ">Start Now</button>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-6">
                <div class="row myz">

                    <div class=" col-7">
                        <div style="padding:28px;">
                            <h2>LOOKING FOR A CAR</h2>
                            <p>Lorem justso sit sit ipsum eos lorem kasd, kasd labore</p>
                            <button class="btn-lg btn-warning"
                                style="background-color: #D56A07; border: none; color: white;">Start Now</button>
                        </div>

                    </div>
                    <div class="offset-2 col-3">
                        <img height="191px;" src="benwhit.png" alt="">

                    </div>

                </div>

            </div>

        </section>
        <section class="sect2 mb-4">
            <div class="row">
                <div class="text-center">
                    <h1>04</h1>
                    <h2>Our Client's say</h2>
                </div>

            </div>

        </section>
        <section class="base">
            <div class="row container pt-4">
                <div class="offset-2 col-6">
                    <div class="cont">
                        <div class="row">
                            <div class="col-6">
                                <form action="index.html" method="post">
                                    <div class="mb-3 p-2">
                                        <input type="text" required class="form-control" id="exampleInputEmail1"
                                            placeholder="Your Name" aria-describedby="emailHelp">
                                    </div>

                            </div>
                            <div class="col-6">
                                <div class="mb-3 p-2">
                                    <input type="email" required class="form-control" id="exampleInputEmail1"
                                        placeholder="Your Email" aria-describedby="emailHelp">
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="mb-3 ml-2 col-11 p-2">
                                <input type="text" required class="form-control" id="exampleInputEmail1"
                                    placeholder="Subject" aria-describedby="emailHelp">
                            </div>

                        </div>
                        <div class="row">
                            <div class="ml-2 col-11 form-floating p-2">
                                <textarea class="form-control" required placeholder="Leave a comment here"
                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Message</label>
                                <button class="jumi">Send Message</button>

                            </div>
                            </form>

                        </div>

                    </div>

                </div>
                <div class="col-4">
                    <div class="bhuo">
                        <div class="row">
                            <div class="col-2">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-location p-3"></i></li>
                                </ul>


                            </div>
                            <div class="col-9 pt-2">
                                <h5>Head Office</h5>
                                <p>123 Street, New YORK , USA</p>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-2">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-location p-3"></i></li>
                                </ul>


                            </div>
                            <div class="col-9 pt-2">
                                <h5>Branch Office</h5>
                                <p>12 Street avenue, Allen Town , USA</p>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-2">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-location p-3"></i></li>
                                </ul>


                            </div>
                            <div class="col-9 pt-2">
                                <h5>Customer Service</h5>
                                <p>40 jersey street, San Ford , USA</p>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-2">
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-envelope p-3"></i></li>
                                </ul>


                            </div>
                            <div class="col-9 pt-2">
                                <h5>Return & Refund</h5>
                                <p>refund@example.com</p>

                            </div>

                        </div>


                    </div>


                </div>

            </div>




        </section>



    </main>
    <!-- main ends here -->
    <!-- footer starts here -->
    <footer>
        <?php include('footer.php'); ?>

    </footer>
    <!-- footer ends here -->
    <!-- footer ends here -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- footer ends here  -->

</body>

</html>