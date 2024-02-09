<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iRepair.com</title>
    <link rel="icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,700&display=swap">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="header">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">iRepair.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link home" aria-current="page" href="#cover">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#devices">С чем мы работаем</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">Работа у нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacts">Контактные данные</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>
<main>
    <video autoplay loop muted  class="background-video">
        <source src="img/planet.mp4" type='video/mp4'>
    </video>
    <a href="#cover" class="slider">
        <i class="material-icons">
            keyboard_arrow_up
        </i>
    </a>
    <div class="container-xxl cover" id="cover">
        <div class="row p-5">
            <div class="col-12 mt-5 company">
                <h1>iRepair.com</h1>
            </div>
            <div class="col-12 mt-5 additional">
                <h2>О нас</h2>
                <span>
                    Мы - интернациональная компания. <br> Работаем уже 2 дня по всему миру, нам можно верить!
                </span>
            </div>
            <div class="col-12 mt-5 more">
                <a href="#about-us" class="btn btn-light more-btn">
                    О нас

                    <i class="material-icons">
                        done
                    </i>
                </a>
            </div>
        </div>
    </div>
    <div class="container-xxl about-us page-element" id="about-us">
        <div class="row">
            <div class="col-md-12 col-xxl-6">
                <img src="img/about-us-photo.jpg" alt="photo" class="w-100">
            </div>
            <div class="col-md-12 col-xxl-6 about-us-info page-element-text">
                <h2>О нас</h2>
                <span>
                    Мы - интернациональная компания. <br>
                    Мы занимаемся ремонтом техники уже достаточно длительный срок. <br>
                    За всё время нашей работы люди не оставляли ни одного негативного отзыва.
                </span>
            </div>
        </div>
    </div>
    <div class="container-xxl devices page-element" id="devices">
        <div class="row">
            <div class="col-md-12 col-xxl-6">
                <img src="img/devices-photo.jpg" alt="photo" class="w-100">
            </div>
            <div class="col-md-12 col-xxl-6 page-element-text">
                <h2>С чем мы работаем</h2>
                <span>
                    Мы работаем почти с любой техникой.
                    Чаще всего ремонтируем телефоны, компьютеры, ноутбуки,
                    часы и фитнес браслеты.
                    <br>
                    Но в целом Вы можете приносить любую технику.
                </span>
            </div>
        </div>
    </div>
    <div class="container-xxl work page-element page-element-text" id="work">
        <div class="row">
            <div class="col-md-12 col-xxl-6">
                <img src="img/work-photo.jpg" alt="photo" class="w-100">
            </div>
            <div class="col-md-12 col-xxl-6 page-element-text">
                <h2>Как к нам устроиться</h2>
                <span>
                    Мы всегда ещем новых сотрудников в колектив.
                    <br>
                    Если Вы всегда хотели работать в данной сфере, то можете позвонить нам.
                    <br>
                    *Место для номера*
                    <br>
                    *Место для электронной почты*
                </span>
            </div>
        </div>
    </div>
    <div class="container-xxl contacts page-element page-element-text" id="contacts">
        <div class="row">
            <div class="col-md-12 col-xxl-6">
                <img src="img/contacts-photo.jpg" alt="photo" class="w-100">
            </div>
            <div class="col-md-12 col-xxl-6 page-element-text">
                <h2>Как отдать свою технику на ремонт</h2>
                <span>
                    Всё очень просто. Вам всего лишь нужно позвонить нашему мастеру
                    и отдать своё устройство лично в руки или отправить по почте.
                    <br>
                    *Место для номера*
                    <br>
                    *Место для электронной почты*
                </span>
            </div>
        </div>
    </div>
</main>
<script src="jQuery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
<script src="script/script.js"></script>
</body>
</html>