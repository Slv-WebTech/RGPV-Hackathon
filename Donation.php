<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Donation</title>
    <link rel="stylesheet" href="css/donation.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
  </head>

  <body>
      <li class="nav-item">
        <a class="nav-link text-white" href="donationsignup.php">Donation</a>
      </li>
    <h1>welcome to donation page</h1>
    <div class="slider owl-carousel">
      <div class="card">
        <div class="img">
          <img src="1.jpg" alt="" />
        </div>
        <div class="content">
          <div class="title">Fund</div>
          <div class="sub-title">Graphic Designer</div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi
            dolorem quis quae animi nihil minus sed unde voluptas cumque.
          </p>
          <div class="btn">
            <button>
              <a href="fund.html" style="color: white; text-decoration: none"
                >Read more</a
              >
            </button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img">
          <img src=" images.jpg" alt="" />
        </div>
        <div class="content">
          <div class="title">Volunteer</div>
          <div class="sub-title">Web Developer</div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi
            dolorem quis quae animi nihil minus sed unde voluptas cumque.
          </p>
          <div class="btn">
            <button>
              <a
                href=" volunteer.html"
                style="color: white; text-decoration: none"
                >Read more</a
              >
            </button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img">
          <img src=" download.jpg" alt="" />
        </div>
        <div class="content">
          <div class="title">Information</div>
          <div class="sub-title">App Developer</div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi
            dolorem quis quae animi nihil minus sed unde voluptas cumque.
          </p>
          <div class="btn">
            <button>
              <a
                href=" information.html"
                style="color: white; text-decoration: none"
                >Read more</a
              >
            </button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img">
          <img src=" 2.jpg" alt="" />
        </div>
        <div class="content">
          <div class="title">Support</div>
          <div class="sub-title">App Developer</div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi
            dolorem quis quae animi nihil minus sed unde voluptas cumque.
          </p>
          <div class="btn">
            <button>
              <a
                href=" support.html"
                style="color: white; text-decoration: none"
                >Read more</a
              >
            </button>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="img">
          <img src=" 3.jpg" alt="" />
        </div>
        <div class="content">
          <div class="title">Other</div>
          <div class="sub-title">App Developer</div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi
            dolorem quis quae animi nihil minus sed unde voluptas cumque.
          </p>
          <div class="btn">
            <button>
              <a href=" other.html" style="color: white; text-decoration: none"
                >Read more</a
              >
            </button>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>
  </body>
</html>
