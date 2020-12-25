
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>landing</title>

    <style>
        body {
    font-family: 'Montserrat', sans-serif;
    background: #ffffff;
    padding: 0;
    margin: 0
}

.menu {
    width: 44px;
    position: relative;
    top: -10px;
    height: 3px;
    background: #00000054;
    box-shadow: 0px 11px #ff00006b, 1px 22px #66b78d
}

nav {
    padding: 8px;
    height: 44px;
    color: #909090;
    font-weight: lighter;
    display: flex;
    justify-content: space-between;
    align-items: center
}

h2 {
    font-weight: lighter
}

header {
    width: 100%;
    height: auto;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.15)
}

.about {
    text-align: center;
    color: gray;
    padding: 40px
}

.title {
    font-size: 22px;
    color: #2c2c2c
}

.desc {
    color: #909090;
    font-weight: 300;
    font-size: 1.1em;
    line-height: 1.45em;
    margin-bottom: 15px;
    margin-top: 30px;
    width: 70%;
    margin: 0 auto
}

@media (max-width: 630px) {
    .title {
        font-size: 18px
    }
}

.row {
    width: 95%;
    display: flex;
    padding: 10px;
    justify-content: center
}

@media (max-width: 494px) {
    .row {
        flex-direction: column
    }
}

.card {
    display: flex;
    text-align: center;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    margin: 10px
}

.card_img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    box-shadow: 0 9px 30px -6px rgba(24, 206, 15, 0.3);
    position: relative;
    transition: transform .4s
}

.fas,
.fab {
    display: inline-block;
    position: absolute;
    color: #63b563;
    transform: translate(-52%, 75%);
    font-size: 40px
}

.card_title {
    font-size: 20px;
    margin: 12px;
    font-weight: bold;
    color: #000000a8;
    transition: color .2s
}

.card:hover .card_title {
    color: #4bd482
}

.card:hover .card_img {
    transform: translate(0px, -10px)
}

.card_body {
    color: #8c9490;
    font-size: 16px;
    padding: 0 5px;
    line-height: 1.5;
    word-spacing: 4px
}
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/landing">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/aboutus">about us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/service">service</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/contactus">Contact us</a>
      </li>
    </ul>
    
  </div>
</nav>



<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


<main>
    <div class="about">
        <div class="title">
            <h1>About The Company</h1>
        </div>
        <div class="desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores modi vel blanditiis doloribus commodi impedit!. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card_img"> <i class="fas fa-rocket"></i> </div>
            <div class="card_title">HTML</div>
            <div class="card_body">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="card">
            <div class="card_img"> <i class="fab fa-cloudversify"></i> </div>
            <div class="card_title">CSS</div>
            <div class="card_body">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="card">
            <div class="card_img"> <i class="fas fa-user-astronaut"></i> </div>
            <div class="card_title">JAVASCRIPT</div>
            <div class="card_body">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
</main>
</body>
</html>