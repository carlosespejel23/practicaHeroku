<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <title>Document</title>
</head>
<body>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
      </ul>
      <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
        </div>
      </nav>

      <div class="parallax-container">
        <div class="parallax"><img src="/img/img1.png"></div>
      </div>

      <div class="carousel">
        <a class="carousel-item" href="#one!"><img src="/img/img1.png"></a>
        <a class="carousel-item" href="#two!"><img src="/img/img2.png"></a>
        <a class="carousel-item" href="#three!"><img src="/img/img3.png"></a>
        <a class="carousel-item" href="#four!"><img src="/img/img4.png"></a>
        <a class="carousel-item" href="#five!"><img src="/img/img5.png"></a>
      </div>

      <ul class="collapsible">
        <li>
          <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
          <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
      </ul>

      <a class="btn-floating pulse"><i class="material-icons">menu</i></a>
      <a class="btn-floating btn-large pulse"><i class="material-icons">cloud</i></a>
      <a class="btn-floating btn-large cyan pulse"><i class="material-icons">edit</i></a>

      <a class="waves-effect waves-light btn">button</a>
      <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>button</a>
      <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>

      <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="images/sample-1.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>

    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>