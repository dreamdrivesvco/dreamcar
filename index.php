<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Dreaam Drive - Find your Dream Car">
<meta name="author" content="">
<title>Dream Drive</title>

<link rel="stylesheet" href="css/liteaccordion.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">

</head>

<body>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               	    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="">Dream Drive</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Location</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
   	    <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="two">
                        <ol>
                            <li><h2><span><img src="images/lic.png"></span></h2>
                                <div class="dream">
                                    <form role="form" action="submit.php" method="post">
                                        <select class="form-control" id="slct" name="budget" required>
                                            <option value="" disabled selected>Budget</option>
                                            <option value="Be1l">Below 1 Lakh</option>
                                            <option value="1lto5l">1 Lakh - 5 Lakh</option>
                                            <option value="5lto20l">5 Lakh - 20 Lakh</option>
                                            <option value="ab20l">Above 20 Lakh </option>
                                        </select>
                                        <select class="form-control" id="slct" style="margin-left:10px" name="usage" required>
                                            <option value="" disabled selected>Select..</option>
                                            <option value="dc">Daily Commute</option>
                                            <option value="pf">Performance</option>
                                            <option value="pw">Power</option>
                                            <option value="ut">Utility</option>
                                        </select>
                                        <select class="form-control" id="slct" style="margin-left:10px" name="brand" required>
                                            <option value="" disabled selected>Brand</option>
                                            <option value="toyota">Toyota</option>
                                        </select>
                                        <select class="form-control" id="slct" style="margin-left:10px" name="mileage" required>
                                            <option value="" disabled selected>Mileage</option>
                                            <option value="150">150km</option>
                                        </select><br/>
                                        <input type="submit" class="btn btn-success" style="margin:0 auto;margin-left:10px" value="Search">
                                    </form>
                                </div>
                            </li>
                            <li><h2><span><img src="images/fic.png"></span></h2>
                                <div class="fresh">
                                    <form role="form" action="submit.php" method="post">
                                        <input type="text" name="cname" class="form-control" placeholder="Search Here..." required/>
                                        <input type="submit" class="btn btn-success" style="margin:0 auto;margin-left:10px" value="Search"/>
                                    </form>
                                </div>
                            </li>
                        
                            <li>
                                <h2><span><img src="images/uic.png"></span></h2>
                                <div class="used">
                                    <form role="form" action="submit.php" method="post">
                                        <input type="text" name="cname" class="form-control" placeholder="Search Here..." required/>
                                            <select class="form-control" id="slct" name="year" style="margin:0 auto;margin-left:10px" required>
                                            <option value="" selected>Select..</option>
                                            <option value="Be1l">Below 1 Year</option>
                                            <option value="1lto5l">1 Year to 5 Years </option>
                                            <option value="1lto5l">5 Years to 10 Years</option>
                                            <option value="1lto5l">Above 10 Years </option>
                                        </select>
                                        <select class="form-control" id="slct" name="place" style="margin:0 auto;margin-left:10px" required>
                                            <option value="" selected>Select..</option>
                                            <option value="Be1l">Kochi</option>
                                            <option value="1lto5l">Kollam</option>
                                            <option value="1lto5l">Trivandrum</option>
                                            <option value="1lto5l">Kozhikode </option>
                                        </select>
                                        <br/>
                                        <input type="submit" class="btn btn-success" style="margin:0 auto;margin-left:10px" value="Search">
                                    </form>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <footer>
        <div class="container">
            <p>&copy; 2016 . All Rights Reserved.</p>
        </div>
    </footer>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/liteaccordion.jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
    <script>
        (function($, d) {
                $('#two').liteAccordion();
        })(jQuery, document);
    </script>

</body>
</html>
