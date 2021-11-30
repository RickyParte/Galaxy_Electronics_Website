<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.social a {
  padding: 0 .2em;
}


</style>

<body style="background-color:black;">
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand text-info" href="index.php"><strong>Galaxy Electronics</strong></a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample07" style="">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"> <i class="bi bi-house-door-fill pe-1"></i>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="cart.php"><i class="bi bi-bag-fill pe-1"></i>Buy Products</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-circle pe-1"></i>Login
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="AdminAuthenticate.php">For Admin</a></li>
            <li><a class="dropdown-item" href="registeruser.php">For User</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="file/GALAXY BROCHURE.pdf"><i class="bi bi-book-half pe-1"></i>Get Brochure</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="AboutUs.php"><i class="bi bi-emoji-smile-fill pe-1"></i>About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="ContactUs.php"><i class="bi bi-telephone-fill pe-1"></i>Contact Us</a>
          </li>
        </ul>
        <div class="social">
          <a href="https://wa.me/+918928007199" id="share-wa" class="sharer button"><i class="fa fa-3x fa-whatsapp"></i></a>
          <a href="mailto:fs19if043@gmail.com" id="share-em" class="sharer button"><i class="fa fa-3x fa-envelope-square"></i></a>
          <a href="tel:+918928007199" id="share-em" class="sharer button"><i class="fa fa-3x fa-phone-square"></i></a>

        </div>
      </div>
    </div>
  </nav>

<div class="container mt-4">
  <div class="row g-0">
        
        <div class="col-md-8">
          <div class="card-body">
          <h1 class="display-5 fw-bold text-warning">Galaxy Electronics</h1>
            <hr class="text-primary" >
                <h3 class="text-primary">LED Product's Manufacturer</h3>
                <p class="col-md-10 fs-4 text-white"><strong>WELCOME TO OUR GALAXY ELECTRONICS! </strong><br>
                We Are provider ems in pune, we began our business from the year of 2017. We provide complete solution for pcb assembly and LED product ,manufacturing ,LED lighting is
                an energy and cost efficient option that allow for more creative applications than traditional lighting...
                    </p>
                    <a href="cart.php"><button class="btn btn-primary btn-lg ms-2 mt-2"  type="button"><i class="bi bi-bag pe-3"></i>Buy Products</button></a>
                    <button class="btn btn-danger btn-lg ms-2 mt-2"  type="button"><i class="bi bi-tv pe-3"></i>View Products</button>

          </div>
          </div>
          <div class="col-md-4">
        <img src="src/light2.jpg" class="card-img-top" alt="...">
        </div>
        
      </div>
      </div>

        
    
    <div class="container pt-5">
    <h2 class="text-center text-primary pt-5">Our Clients</h2>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card bg-dark ">
      <img src="src/ark.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
      <strong class="d-inline-block mb-2 text-primary">Client</strong>
          <h3 class="mb-0 text-warning">A.R.K India Pvt.Ltd</h3>
          <p class="card-text mb-auto text-light pt-3"><strong>on Time Product Delivery With Quality Products.</strong></p>
          <a href="https://www.arkindia.co.in/" class="btn btn-primary mt-4"><i class="bi bi-exclamation-circle-fill pe-2"></i>More Info</a>

      </div>
    </div>
  </div>

  <div class="col">
    <div class="card bg-dark">
      <img src="src/sakal.png" class="card-img-top" alt="...">
      <div class="card-body text-center">
      <strong class="d-inline-block mb-2 text-success">Client</strong>
          <h3 class="mb-0 text-warning">Sakal Media</h3>
          <p class="mb-auto text-light pt-3"><strong>Best Products And Services.</strong></p>
          <a href="https://www.esakal.com/" class="btn btn-primary mt-5"><i class="bi bi-exclamation-circle-fill pe-2"></i>More Info</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card bg-dark">
      <img src="src/aura.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
      <strong class="d-inline-block mb-2 text-primary">Client</strong>
          <h3 class="mb-0 text-warning">AURA LASER FAB</h3>
          <p class="mb-auto text-light pt-3"><strong>Good Experience with Galaxy Electronics.</strong></p>
          <a href="https://www.auralaser.in/" class="btn btn-primary mt-5"><i class="bi bi-exclamation-circle-fill pe-2"></i>More Info</a>
      </div>
    </div>
  </div>
 
</div>

<!-- new -->
<div class="row pt-3 row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card bg-dark ">
      <img src="src/impetus.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
      <strong class="d-inline-block mb-2 text-success">Client</strong>
          <h3 class="mb-0 text-warning">Impetus Sporting Private Ltd</h3>
          <p class="mb-auto text-light pt-2"><strong>We have best experience with Galaxy Electronics.</strong></p>
          <a href="https://www.facebook.com/impetus.sporting" class="btn btn-primary mt-3"><i class="bi bi-exclamation-circle-fill pe-2"></i>More Info</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card bg-dark">
      <img src="src/admin.png" class="card-img-top" alt="...">
      <div class="card-body text-center">
      <strong class="d-inline-block mb-2 text-primary">Client</strong>
          <h3 class="mb-0 text-warning">Mary Jane</h3>
          <p class="mb-auto text-light pt-2"><strong>Management Team Is Supportive and Provide Full Support.</strong></p>
          <a href="#" class="btn btn-primary mt-5"><i class="bi bi-exclamation-circle-fill pe-2"></i>More Info</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card bg-dark ">
      <img src="src/mohite.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
      <strong class="d-inline-block mb-2 text-success">Client</strong>
          <h3 class="mb-0 text-warning">Mohite Electronics pvt Ltd</h3>
          <p class="mb-auto text-light"><strong>They Provide Quality Products with affordable rate.</strong></p>
          <a href="https://www.mohiteelectronics.com/" class="btn btn-primary mt-3"><i class="bi bi-exclamation-circle-fill pe-2"></i>More Info</a>
      </div>
    </div>
  </div>
 
</div>
  </div>
    

    <!-- <div class="container">
    <div class="row">
        <div class="col-md-4 d-grid">
        <button type="button" class="btn btn-primary">Primary</button>
        </div>
        <div class="col-md-4 d-grid">
        <button type="button" class="btn btn-primary">Primary</button>
        </div>
        <div class="col-md-4 d-grid">
        <button type="button" class="btn btn-primary">Primary</button>
        </div>
    </div>
    </div> -->
   



<div class="container pt-4">
<h3 class="text-center" style="color:#3CEA08">How You Benefits ? </h3>
<div class="row">
  <div class="col-md-3">
    <div class="card">
    <img src="src/bulb.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Warm white light</h5>
        <p class="card-text fs">Create a warm, cosy atmosphere with LED lighting.</p>
        
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card">
    <img src="src/charge.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Energy efficient</h5>
        <p class="card-text"> 
lifetime and uses up to 90% less energy than traditional sources</p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card">
    <img src="src/premium.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Quality of light</h5>
        <p class="card-text">Enjoy light quality, instant on with no warm up time</p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card">
    <img src="src/dim.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Dimmable</h5>
        <p class="card-text">Create the right atmosphere with dimmable LED lighting</p>

      </div>
    </div>
  </div>
</div>
</div>
    


  <footer class="bg-dark">
  <hr class="text-warning" style="height:2px;">
  <div class="container pt-5">
    <div class="row">
      <div class="col-6">
      <h3 class="text-warning">Galaxy Electronics</h3> 
       <hr class="text-primary"c>
       <h3 class="text-primary">LED Product's Manufacturer</h3>
      </div>
      <div class="col-5">
       <h4 class="text-warning"><i class="bi bi-headset pe-2"></i> Got a question? Call Us</h4>
       <h4 class="text-primary"><a href="tel:+918830994756">8830994756  </a>  OR  <a href="tel:+918208435604"> 8208435604</a></h4>
      </div>
    
       </div>
    <div class="row pt-5 text-warning">
      <div class="col-2">
        <h5>About</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0">About Us</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Products</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Broucher</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Reviews</a></li>
        </ul>
      </div>

      <div class="col-3">
        <h5>Achievement</h5>
        <ul class="nav flex-column">
          <p class="text-light">
          1) OUR UNIT IS ISO 9001:2015 CERTIFIED.<br>
          2) CERTIFICATE OF COMMITMENT. <br>
          3) MSME CERTIFICATION. <br>
          4) CERTIFICATE OF QUALITY POLICY.</p>
        </ul>
      </div>

      <div class="col-4 offset-1">
        <form method="POST">
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of whats new and exciting from us.</p>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" name="email" placeholder="Email address">
            <input class="btn-primary" type="submit" name="subscribe" value="Subscribe">
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex justify-content-between pb-2 border-top text-light">
      <p>© 2021 Galaxy Electronics, Inc. All rights reserved.</p>
      <div class="social">
          <a href="https://wa.me/+918928007199" id="share-wa" class="sharer button"><i class="fa fa-3x fa-whatsapp"></i></a>
          <a href="mailto:fs19if043@gmail.com" id="share-em" class="sharer button"><i class="fa fa-3x fa-envelope-square"></i></a>
          <a href="tel:+918928007199" id="share-em" class="sharer button"><i class="fa fa-3x fa-phone-square"></i></a>
      </div>
    </div>
    </div>
  </footer>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</body>
</html>

