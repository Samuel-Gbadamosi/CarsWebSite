<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
    <!-- header -->
    <header>
        <?php include('header.php'); ?>

    </header>
    <!-- header close -->
    <main>

    <section class="sect2 mb-4">
        <!-- the row we suppose to send in a button -->
                <div class="row">
                    <div class="text-center">
                        <!-- <h1>04</h1> -->
                        <h2>Contact Us</h2>
                    </div>

                </div>
                <!-- end row  -->
            </section>
            <section class="base">
                <div class="row container pt-4">
                    <div class="offset-2 col-6">
                        <div class="cont">
                            <div class="row">
                                <div class="col-6">
                                    <form action="index.html" method="post">
                                    <div class="mb-3 p-2">
                                        <input type="text" required class="form-control" id="exampleInputEmail1" placeholder="Your Name" aria-describedby="emailHelp">
                                      </div>

                                </div>
                                <div class="col-6">
                                    <div class="mb-3 p-2">
                                        <input type="email" required class="form-control" id="exampleInputEmail1" placeholder="Your Email" aria-describedby="emailHelp">
                                      </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="mb-3 ml-2 col-11 p-2">
                                    <input type="text" required class="form-control" id="exampleInputEmail1" placeholder="Subject" aria-describedby="emailHelp">
                                  </div>

                            </div>
                            <div class="row">
                                <div class="ml-2 col-11 form-floating p-2">
                                    <textarea class="form-control" required placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
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
    <footer>

    <?php include('footer.php') ?>

    </footer>
    
</body>
</html>