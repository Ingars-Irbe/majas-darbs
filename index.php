<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sākums</title>
    <link href="./css/reset.css" rel="stylesheet">
    <link href = "./libs/bootstrap/css/bootstrap.css" rel ="stylesheet">
    <script src="./libs/jQuery/jquery2.1.4.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.js"> </script>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/css.css">
</head>
<body>

<header class="virsraksts">Kalendārs.lv</header>


<nav class="navbar navbar-inverse navbar-custom">
    <div class="container-fluid krasa">
        <div class="navbar-header krasa">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="./index">Kalendārs.lv</a>
        </div>
        <div class="collapse navbar-collapse bottons" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="./index">Sākums</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Galereja
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./Foto">Foto</a></li>
                        <li><a href="./Video">Video</a></li>
                    </ul>
                </li>
                <li><a href="./kontakti">Kontakti</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="container">
    <section class="row">
        <div class="col-md-8 article">
            <div style="font-size: 32px; text-align: center" >
                Tagad jūs varam mūs skatīties Youtube.com
            </div>
            <div class="video" style="text-align: center">
            <iframe width="420" height="250"
                    src="https://www.youtube.com/embed/tHpZCCf1HWo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            </div>
        </div>

        <div class="col-md-4 article colum3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.75577161406!2d24.101799015757884!3d56.95298550625578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfda67021dff%3A0x711687e2890a9815!2zS3JpxaFqxIHFhmEgVmFsZGVtxIFyYSBpZWxhIDFDLCBDZW50cmEgcmFqb25zLCBSxKtnYSwgTFYtMTAxMA!5e0!3m2!1sen!2slv!4v1484561109413" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </section>
</section>

</body>
</html>