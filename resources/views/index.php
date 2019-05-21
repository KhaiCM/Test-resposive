<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/fullpage.css"/>
    <link rel="stylesheet" type="text/css" href="css/app.css"/>
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div id="app"></div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 firstHeader">
                    <img src="images/logo1.svg" height="40px">
                    <div class="dropdown float-right" id="languege">
                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            English
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">Tiếng việt</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 notFirstHeader d-none">
                    <img src="images/logo2.svg" alt="" height="40px">
                    <div class="float-right">
                        <a href="#" class="btn btn-primary btn-lg mr-3">Try on browser</a>
                        <button class="btn btn-secondary">Download for free</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide-indicators animated fadeIn">
        <ol>
            <li data-slide-to="0" class="active"></li>
            <li data-slide-to="1"></li>
            <li data-slide-to="2"></li>
            <li data-slide-to="3"></li>
            <li data-slide-to="4"></li>
            <li data-slide-to="5"></li>
            <li data-slide-to="6"></li>
        </ol>
    </div>
    <div class="listSocial">
        <ol>
            <li class="animated fadeInLeft"><i class="fab fa-facebook-f"></i></li>
            <li class="animated fadeInLeft"><i class="fab fa-google-plus-g"></i></li>
            <li class="animated fadeInLeft"><i class="fab fa-twitter"></i></li>
        </ol>
    </div>

    <div id="video">
        <div>
            <iframe class="animated zoomIn" width="640" height="360" src="https://www.youtube.com/embed/jSv7DUqZ3pk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <button class="close">
            <span class="iconclosevideo"></span>
        </button>
    </div>

    <div id="fullpage">
        <div class="section" id="section_0">
            <div id="slide_1">
                <div class="tren">
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-5 trai">
                                    <img class="animated fadeInUp" src="images/logo_text.svg" alt="">
                                    <p class="animated fadeInUp">Simplest way to manage personal finances. Because money matters.</p>
                                    <div class="contain2button animated fadeInUp">
                                        <button type="button" class="btn btn-primary mr-2">Try on browser</button>
                                        <button type="button" class="btn btn-primary green-background"><i class="fas fa-cloud-download-alt mr-2"></i>Download for free</button>
                                    </div>
                                </div>
                                <div class="col-sm-7 phai">
                                    <img class="animated fadeInRight" src="images/screenshot1.png">
                                    <img class="animated fadeInRight" src="images/screenshot2.png">
                                    <img class="animated fadeInRight" src="images/screenshot3.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="duoi">

                </div>
            </div>
        </div>
        <div class="section" id="section_1">
            <div class="container">
                <div class="row content">
                    <div class="col-sm-6 video">
                        <img src="images/postervideo.png" alt="">
                        <button class="btn animated fadeIn">
                            <span id="triangle-right"></span>
                        </button>
                    </div>
                    <div class="col-sm-6 text">
                        <h3 class="animated fadeInUp">An intuitive and cross-platform finance app</h3>
                        <p class="animated fadeInUp">Money Lover helps you get just about everything managed. A smart, easy-to-use app that allows you to track and categorize your in-and-out money, create budgets that you can actually stick to. It works seamlessly across devices and platforms, available on phone, tablet, PC and Web.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 content">
                        <div class="khoitrai">
                            <div class="khoitext animated fadeInLeft" index="1">
                                <div>
                                    <h3>Simple money tracker</h3>
                                    <p>It takes seconds to record daily transactions. Put them into clear and visualized categories such as Expense: Food, Shopping or Income: Salary, Gift.</p>
                                </div>
                            </div>
                            <div class="khoitext animated fadeInLeft" index="2">
                                <div>
                                    <h3>Painless Budgeting</h3>
                                    <p>Set budgets that are easy to stick to, based on your own spending habits. You’re one step closer to that stuff you want to buy.</p>
                                </div>
                            </div>
                            <div class="khoitext animated fadeInLeft" index="3">
                                <div>
                                    <h3>The whole picture in one place</h3>
                                    <p>One report to give a clear view on your spending patterns. Understand where your money comes and goes with easy-to-read graphs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="containDeviceImage">
                            <div class="preview1 animated fadeInRight">
                                <img src="images/cash-book.png" alt="">
                            </div>
                            <div class="preview2 animated fadeInRight d-none">
                                <img src="images/budget_1.png" alt="">
                                <img src="images/budget_2.png" class="animated flipInX" alt="">
                                <img src="images/budget_3.png" class="animated flipInX" alt="">
                            </div>
                            <div class="preview3 animated fadeInRight d-none">
                                <img src="images/in_depth_1.png" alt="">
                                <img src="images/in_depth_1.gif" alt="">
                                <img src="images/in_depth_2.png" alt="">
                                <img src="images/in_depth_2.gif" alt="">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="section_3">
            <div class="container content">
                <div class="row text-center">
                    <div class="col-sm-4 mb-5 animated fadeIn">
                        <img src="images/feature1.png" alt="">
                        <h3>Multiple devices</h3>
                        <p>Safely synchronize across devices with Bank standard security.</p>
                    </div>
                    <div class="col-sm-4 mb-5 animated fadeIn">
                        <img src="images/feature2.png" alt="">
                        <h3>Recurring transaction</h3>
                        <p>Get notified of recurring bills and transactions before due date.</p>
                    </div>
                    <div class="col-sm-4 mb-5 animated fadeIn">
                        <img src="images/feature3.png" alt="">
                        <h3>Travel mode</h3>
                        <p>All currencies supported with up-to-date exchange rate.</p>
                    </div>
                    <div class="col-sm-4 animated fadeIn">
                        <img src="images/feature4.png" alt="">
                        <h3>Saving plan</h3>
                        <p>Keep track on savings process to meet your financial goals.</p>
                    </div>
                    <div class="col-sm-4 animated fadeIn">
                        <img src="images/feature5.png" alt="">
                        <h3>Debt and Loan</h3>
                        <p>Manage your debts, loans and payment process in one place.</p>
                    </div>
                    <div class="col-sm-4 animated fadeIn">
                        <img src="images/feature6.png" alt="">
                        <h3>Scan receipt</h3>
                        <p>Take pictures of your receipts to auto-process and organize them.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="section_4">
            
        </div>
        <div class="section" id="section_5">Some section</div>
        <div class="section" id="section_6">Some section</div>
    </div>

    <script type="text/javascript" src="js/fullpage.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>
