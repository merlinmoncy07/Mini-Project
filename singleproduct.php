<!DOCTYPE html>
<html lang="en">

<head>
  <title>User Registration</title>
  <meta charset="utf-8" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <script src="dist/sweetalert.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
  <style>
    body {
      background-image: url('images/l.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
  <style>
    .error-message {
      color: red;
      font-size: 14px;
      margin-top: -20px;
    }

    @import url("https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;600;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Noto Sans", sans-serif;
      background-color: #f2f2f2;
      background-color: #444;
    }

    .section-products {
      height: 100vh;
      padding: 50px 0;
      overflow: hidden;
    }

    .section-products .container {
      padding-left: 15px;
      padding-right: 15px;
      max-width: 800px;
      margin: 0 auto;
    }

    .section-products .list-products {
      display: flex;
      justify-content: space-between;
    }

    .section-products .product {
      width: 32%;
      background-color: #fff;
      border-radius: 2px;
      overflow: hidden;
      margin-top: 30px;
      transition: box-shadow 0.2s linear;
    }

    .section-products .product:hover {
      box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .section-products .product .top {
      position: relative;
      overflow: hidden;
    }

    .section-products .product .top::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.2);
      opacity: 0;
      transition: opacity 0.2s linear;
    }

    .section-products .product:hover .top::before {
      opacity: 1;
      z-index: 2;
    }

    .section-products .product .img-product {
      max-width: 100%;
      display: block;
      transition: transform 0.2s ease-in;
      min-height: 200px;
      max-height: 200px;
    }


    .section-products .product:hover .img-product {
      transform: scale(1.2) translateX(15px);
    }

    .section-products .product .btn {
      position: absolute;
      left: 5px;
      top: -40px;
      background-color: #fff;
      height: 35px;
      width: 35px;
      text-align: center;
      line-height: 40px;
      color: #333;
      transition: top 0.2s linear;
      z-index: 3;
    }

    .section-products .product .btn:hover {
      color: lightsalmon;
    }

    .section-products .product:hover .btn-view {
      transition-delay: 0.1s;
      top: 5px;
    }

    .section-products .product:hover .btn-love {
      transition-delay: 0.2s;
      top: 45px;
    }

    .section-products .product:hover .btn-buy {
      transition-delay: 0.3s;
      top: 85px;
    }

    .section-products .product .btn .icon {
      font-size: 16px;
    }

    .section-products .product .bottom {
      text-align: center;
      padding: 10px 5px;
    }

    .section-products .product .product-name {
      font-size: 20px;
      color: #555;
    }

    .section-products .product .product-price {
      margin-top: 7px;
    }

    .section-products .product .product-price span {
      font-size: 16px;
    }

    @media only screen and (max-width: 400px) {
      .section-products {
        height: auto;
      }

      .section-products .container {
        max-width: 300px;
      }

      .section-products .list-products {
        display: block;
      }

      .section-products .list-products .product {
        width: 100%;
      }
    }
  </style>

</head>


<body>
  <nav class="nav-menu">
    <div class="burger-container" id="burger">
      <i class="fa-solid fa-bars"></i>
    </div>
    <h3>EYE MATIC</h3>
    <ul class="menu">
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>
        <a href="about.php">about us</a>
      </li>
      <li>
        <a href="products.php">Products</a>
      </li>
      <li>
        <a href="login.php">Login</a>
      </li>
      <li>
        <a href="register.php">Patient Register</a>
      </li>
      <li>
        <a href="doctorreg.php">Doctor Register</a>
      </li>

    </ul>
  </nav>
  <div class="row">
    <section class="section-products">
      <div class="container">
        <div class="list-products">
          <div class="product">
            <div class="top">
              <img src="/assets/images/products/ointment.jpg" alt="product" class="img-product">
            </div>
            <div class="bottom">
              <h3 class="product-name">Sunglasses</h3>
              <h4 class="product-price">$ <span>55</span></h4>
            </div>
          </div>
          <div class="product">
            <div class="top">
              <img src="/assets/images/products/1.jpg" alt="product" class="img-product">

            </div>
            <div class="bottom">
              <h3 class="product-name">Gameboy</h3>
              <h4 class="product-price">$ <span>47</span></h4>
            </div>
          </div>
          <div class="product">
            <div class="top">
              <img src="/assets/images/products/lol.jpg" alt="product" class="img-product">

            </div>
            <div class="bottom">
              <h3 class="product-name">Sket</h3>
              <h4 class="product-price">$ <span>73</span></h4>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</html>