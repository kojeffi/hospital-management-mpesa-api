<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipa na mpesa</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="" rel="stylesheet" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" ">
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    ></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap");

      body {
        background-color: #eaedf4;
        font-family: "Rubik", sans-serif;
      }

      .card {
        width: 310px;
        border: none;
        border-radius: 15px;
      }

      .justify-content-around div {
        border: none;
        border-radius: 20px;
        background: #f3f4f6;
        padding: 5px 20px 5px;
        color: #8d9297;
      }

      .justify-content-around span {
        font-size: 12px;
      }

      .justify-content-around div:hover {
        background: #545ebd;
        color: #fff;
        cursor: pointer;
      }

      .justify-content-around div:nth-child(1) {
        background: #545ebd;
        color: #fff;
      }

      span.mt-0 {
        color: #8d9297;
        font-size: 12px;
      }

      h6 {
        font-size: 15px;
      }
      .mpesa {
        background-color: green !important;
      }

      img {
        border-radius: 15px;
      }
    </style>
  </head>

  <html>
<head>
	<title>HMS</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<link rel="stylesheet" type="text/css" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style >
    body {
    /* background: -webkit-linear-gradient(left, #3931af, #00c6ff); */
    background-size: cover;
    background-image: url(images/ku.avif);
}

     .form-control {
    border-radius: 0.75rem;
}
.enlarge-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #007bff; /* Blue button color */
            color: #ffffff; /* White text color */
            border-radius: 50%; /* Rounded border */
            transition: transform 0.3s ease-in-out; /* Transition for smooth effect */
        }

        .enlarge-button:hover {
            transform: scale(1.1); /* Enlarge the button on hover */
        }

        .pulsate {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #007bff; /* Blue button color */
            color: #ffffff; /* White text color */
            border-radius: 50%; /* Rounded border */
            animation: pulsate 2s infinite; /* Pulsating animation */
        }

        @keyframes pulsate {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
</style>

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>
<style>
  .navbar-nav .nav-link {
    position: relative;
    color: white;
    font-family: 'IBM Plex Sans', sans-serif;
    transition: color 0.3s, text-decoration-color 0.3s;
  }

  .navbar-nav .nav-link:hover {
    text-decoration-color: #ff6347; /* Change to the color you prefer */
  }

  .navbar-nav .nav-link::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 0;
    height: 2px;
    background-color: #ff6347; /* Change to the color you prefer */
    transition: width 0.3s;
  }

  .navbar-nav .nav-link:hover::after {
    width: 100%;
  }
</style>
<style>
  .navbar-nav .nav-link {
    position: relative;
    color: white;
    font-family: 'IBM Plex Sans', sans-serif;
    transition: color 0.3s;
  }

  .navbar-nav .nav-link:hover {
    color: #ff6347; /* Change to the color you prefer */
  }

  .navbar-nav .nav-link::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 0;
    height: 2px;
    background-color: transparent; /* Change to transparent */
    transition: width 0.3s, background-color 0.3s; /* Added background-color transition */
  }

  .navbar-nav .nav-link:hover::after {
    width: 100%;
    background-color: #ff6347; /* Change to the color you prefer */
  }


  /* CSS for Navbar with bg-info */
.navbar {
    background-color: #17a2b8; /* Darker shade of bg-info */
}

.navbar-brand,
.navbar-nav .nav-link {
    color: #fff; /* White text for better contrast */
}

/* Active link color */
.navbar-nav .nav-item.active .nav-link {
    color: #ffd700; /* Yellow color for active link */
}

/* Hover link color */
.navbar-nav .nav-link:hover {
    color: #fff; /* White color on hover */
}

/* About Section */
#about .section-heading {
    color: #17a2b8; /* Darker shade of bg-info for section heading */
}

#about .about-line {
    border-top-color: #17a2b8; /* Darker shade of bg-info for line */
}

/* Services Section */
#services .section-heading {
    color: #17a2b8; /* Darker shade of bg-info for section heading */
}

#services .service-icon {
    color: #17a2b8; /* Darker shade of bg-info for icon */
}

/* Gallery Section */
#gallery .section-heading {
    color: #17a2b8; /* Darker shade of bg-info for section heading */
}

#gallery .gallery-icon {
    color: #17a2b8; /* Darker shade of bg-info for icon */
}

/* Footer Section (if applicable) */
#footer {
    background-color: #17a2b8; /* Darker shade of bg-info for footer background */
    color: #fff; /* White text for better contrast */
}

</style>



</head>

<!------ Include the above in your HEAD tag ---------->
<body oncontextmenu="return false" class="snippet-body">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top text-white" id="mainNav" >
    <div class="container">

      <a class="navbar-brand js-scroll-trigger text-white" href="#" style="margin-top: 10px;margin-left:-65px;font-family: 'IBM Plex Sans', sans-serif;"><h4><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp Jamy Hospital</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="index1.php"><button class="pulsate bg-success">Book Appointment</button></a>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger text-white" href="index.php" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>Home</h6></a>
          </li>
  
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger text-white" href="#about" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>About Us</h6></a>
          </li>
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger text-white" href="#gallery" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>Gallery</h6></a>
          </li>
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger text-white" href="#services" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>Services</h6></a>
          </li>
          <li class="nav-item" style="margin-right: 40px;">
            <a class="nav-link js-scroll-trigger text-white" href="#team" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>Team</h6></a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger text-white" href="contact.html" style="color: white;font-family: 'IBM Plex Sans', sans-serif;"><h6>Contact</h6></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br>
  
    <div class="container d-flex justify-content-center">
      <div class="card mt-5 px-3 py-4">
        <div class="d-flex flex-row justify-content-around">
          <div class="mpesa"><span>Mpesa </span></div>
        </div>
        <div class="media mt-4 pl-2">
          <img src="image/1200px-M-PESA_LOGO-01.svg.png" class="mr-3" height="75" />
          <div class="media-body">
            <h6 class="mt-1">Enter Amount & Number</h6>
          </div>
        </div>
        <div class="media mt-3 pl-2">
                          <!--bs5 input-->

            <form class="row g-3" action="./stk_initiate.php" method="POST">
            
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Amount</label>
                  <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label" >Phone Number</label>
                  <input type="text" class="form-control" name="phone"  placeholder="Enter Phone Number">
                </div>
             
                <div class="col-12">
                  <button type="submit" class="btn btn-info" name="submit" value="submit">Submit</button>
                </div>
              </form>
              <!--bs5 input-->
          </div>
        </div>
      </div>
    </div>


    

    
    <style>
            .card {
  transition: transform 0.3s ease-in-out;
}

.card:hover {
  transform: translateY(-5px);
}

        </style>
       
<footer class="footer bg-secondary text-white">
<br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Vision</h4>
        <p>To provide accessible and high-quality healthcare services to every individual, regardless of their background or location.</p>
      </div>
      <div class="col-md-4">
        <h4>Mission</h4>
        <p>Our mission is to deliver compassionate care, innovate healthcare solutions, and empower communities to lead healthier lives.</p>
      </div>
      <div class="col-md-4">
        <h4>Follow Us</h4>
        <ul class="list-unstyled">
          <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
          <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
          <li><a href="#"><i class="fa fa-instagram"></i> Instagram</a></li>
        </ul>
      </div>
    </div>
    <hr class="my-4">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>&copy; 2024 Your Health Inc. All rights reserved. | "Your health is your wealth. Take care of it."</p>
      </div>
    </div>
  </div>
</footer>


    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </html>
    <script
      type="text/javascript"
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    ></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
    <script type="text/Javascript"></script>
  </body>
</html>
