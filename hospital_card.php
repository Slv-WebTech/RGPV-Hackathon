<<<<<<< HEAD:hospital_card.php
<?php include 'db.php' ?>
=======
>>>>>>> 6d027370ed8519329c74e51a60da71c9010293ea:hospital_card.html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/hospital_card.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <title>Hospital Lists</title>
  </head>
  <body>
    <div class="mainDiv">
      <!-- <h1><em class="fas fa-hospital-alt"></em> Hospital Cards</h1> -->
      <h1>
        <img src="img/hospital.png" height="100rem" alt="" /> Hospital Cards
      </h1>
      <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320">
        <path
          fill="#34495e"
          fill-opacity="1"
          d="M0,96L60,112C120,128,240,160,360,149.3C480,139,600,85,720,85.3C840,85,960,139,1080,138.7C1200,139,1320,85,1380,58.7L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </div>
    <div class="cards">
<<<<<<< HEAD:hospital_card.php
        <!-- <div onmouseover="thisone()" class="card"> -->
            <?php 
                $sql = "SELECT * FROM hospital_cards";
                $result = mysqli_query($conn , $sql);
                if($result -> num_rows > 0 ){
                    while($row = $result->fetch_assoc()){
                
            ?>
        <div  class="card">
            <h2 class="card-title"><?php echo $row['hos_name']; ?></h2>
            <img src="<?php echo $row['hos_img']; ?>" alt="">
            <div class="card-desc">
                <div class="icons">
                    <span class="icon address-btn"><i class="fas fa-address-card"></i></span>
                    <span class="icon phone-btn"><i class="fas fa-phone"></i></span>
                    <span class="icon link-btn"><i class="fas fa-link"></i></span>
                </div>
                <p class="address"><?php echo $row['hos_address']; ?></p>
                    <br><hr><br>
                <p class="phone"><?php echo $row['hos_contact']; ?></p>
                <br><hr><br>
                <center>
                
                <p class="link"><a href="<?php echo $row['hos_link']; ?>">link</a></p>
            </center>
            </div>
        </div>
        <?php } } ?>
        <!-- <div  class="card">
            <h2 class="card-title">BIMR Hospital</h2>
            <img src="img/ho-2.jpg" alt="">
            <div class="card-desc">
                <div class="icons">
                    <span class="icon address-btn"><i class="fas fa-address-card"></i></span>
                    <span class="icon phone-btn"><i class="fas fa-phone"></i></span>
                    <span class="icon link-btn"><i class="fas fa-link"></i></span>
                </div>
                <p class="address">BIMR Hospitals Surya Mandir Road, Residency, Gwalior - 474005</p>
                    <br><hr><br>
                <p class="phone">0751-2405 617</p>
                <br><hr><br>
                <center>
                <p class="link"><a href="https://www.bimrhospital.com/">link</a></p>
            </center>
            </div>
=======
      <!-- <div onmouseover="thisone()" class="card"> -->
      <div class="card">
        <h2 class="card-title">Apollo spectra Hospital</h2>
        <img src="img/Apollo.jpg" alt="" />
        <div class="card-desc">
          <div class="icons">
            <span class="icon address-btn"
              ><em class="fas fa-address-card"></em
            ></span>
            <span class="icon phone-btn"><em class="fas fa-phone"></em></span>
            <span class="icon link-btn"><em class="fas fa-link"></em></span>
          </div>
          <p class="address">
            Gwalior, Vikas Nagar 18, Kila Gate Road, Vikas Nagar, Near Sai Baba
            Mandir, Gwalior, Madhya Pradesh 474002
          </p>
          <hr />
          <p class="phone">0751-245 4600</p>
          <hr />

          <p class="link">
            <a
              href="https://www.apollospectra.com/our-hospitals/gwalior/vikas-nagar/best-hospital-in-vikas-nagar-gwalior/"
              >link</a
            >
          </p>
        </div>
      </div>
      <div class="card">
        <h2 class="card-title">Apollo spectra Hospital</h2>
        <img src="img/ho-2.jpg" alt="" />
        <div class="card-desc">
          <div class="icons">
            <span class="icon address-btn"
              ><em class="fas fa-address-card"></em
            ></span>
            <span class="icon phone-btn"><em class="fas fa-phone"></em></span>
            <span class="icon link-btn"><em class="fas fa-link"></em></span>
          </div>
          <p class="address">
            Gwalior, Vikas Nagar 18, Kila Gate Road, Vikas Nagar, Near Sai Baba
            Mandir, Gwalior, Madhya Pradesh 474002
          </p>
          <hr />
          <p class="phone">0751-245 4600</p>
          <hr />

          <p class="link">
            <a
              href="https://www.apollospectra.com/our-hospitals/gwalior/vikas-nagar/best-hospital-in-vikas-nagar-gwalior/"
              >link</a
            >
          </p>
>>>>>>> 6d027370ed8519329c74e51a60da71c9010293ea:hospital_card.html
        </div>
      </div>
      <div class="card">
        <h2 class="card-title">Apollo spectra Hospital</h2>
        <img src="img/h4.jpg" alt="" />
        <div class="card-desc">
          <div class="icons">
            <span class="icon address-btn"
              ><em class="fas fa-address-card"></em
            ></span>
            <span class="icon phone-btn"><em class="fas fa-phone"></em></span>
            <span class="icon link-btn"><em class="fas fa-link"></em></span>
          </div>
          <p class="address">
            Gwalior, Vikas Nagar 18, Kila Gate Road, Vikas Nagar, Near Sai Baba
            Mandir, Gwalior, Madhya Pradesh 474002
          </p>
          <hr />
          <p class="phone">0751-245 4600</p>
          <hr />

          <p class="link">
            <a
              href="https://www.apollospectra.com/our-hospitals/gwalior/vikas-nagar/best-hospital-in-vikas-nagar-gwalior/"
              >link</a
            >
          </p>
        </div>
      </div>
      <div class="card">
        <h2 class="card-title">Apollo spectra Hospital</h2>
        <img src="img/ho-4.jpg" alt="" />
        <div class="card-desc">
          <div class="icons">
            <span class="icon address-btn"
              ><em class="fas fa-address-card"></em
            ></span>
            <span class="icon phone-btn"><em class="fas fa-phone"></em></span>
            <span class="icon link-btn"><em class="fas fa-link"></em></span>
          </div>
          <p class="address">
            Gwalior, Vikas Nagar 18, Kila Gate Road, Vikas Nagar, Near Sai Baba
            Mandir, Gwalior, Madhya Pradesh 474002
          </p>
          <hr />
          <p class="phone">0751-245 4600</p>
          <hr />

          <p class="link">
            <a
              href="https://www.apollospectra.com/our-hospitals/gwalior/vikas-nagar/best-hospital-in-vikas-nagar-gwalior/"
              >link</a
            >
          </p>
        </div>
<<<<<<< HEAD:hospital_card.php
        <div  class="card">
            <h2 class="card-title">Chandak Hospital </h2>
            <img src="img/h5.jpg" alt="">
            <div class="card-desc">
                <div class="icons">
                    <span class="icon address-btn"><i class="fas fa-address-card"></i></span>
                    <span class="icon phone-btn"><i class="fas fa-phone"></i></span>
                    <span class="icon link-btn"><i class="fas fa-link"></i></span>
                </div>
                <p class="address">No: 14, Hospital Road, Gwalior, Madhya Pradesh, 474009</p>
                    <br><hr><br>
                <p class="phone">2324 131</p>
                <br><hr><br>
                <center>
                <p class="link"><a href="https://www.facebook.com/pages/category/Hospital/Chandak-Hospital-and-Research-Institute-252287644956670/">link</a></p>
            </center>
            </div>
        </div> -->
=======
      </div>
      <div class="card">
        <h2 class="card-title">Apollo spectra Hospital</h2>
        <img src="img/h5.jpg" alt="" />
        <div class="card-desc">
          <div class="icons">
            <span class="icon address-btn"
              ><em class="fas fa-address-card"></em
            ></span>
            <span class="icon phone-btn"><em class="fas fa-phone"></em></span>
            <span class="icon link-btn"><em class="fas fa-link"></em></span>
          </div>
          <p class="address">
            Gwalior, Vikas Nagar 18, Kila Gate Road, Vikas Nagar, Near Sai Baba
            Mandir, Gwalior, Madhya Pradesh 474002
          </p>
          <hr />
          <p class="phone">0751-245 4600</p>
          <hr />

          <p class="link">
            <a
              href="https://www.apollospectra.com/our-hospitals/gwalior/vikas-nagar/best-hospital-in-vikas-nagar-gwalior/"
              >link</a
            >
          </p>
        </div>
      </div>
      <div class="card">
        <h2 class="card-title">Apollo spectra Hospital</h2>
        <img src="img/h5.jpg" alt="" />
        <div class="card-desc">
          <div class="icons">
            <span class="icon address-btn"
              ><em class="fas fa-address-card"></em
            ></span>
            <span class="icon phone-btn"><em class="fas fa-phone"></em></span>
            <span class="icon link-btn"><em class="fas fa-link"></em></span>
          </div>
          <p class="address">
            Gwalior, Vikas Nagar 18, Kila Gate Road, Vikas Nagar, Near Sai Baba
            Mandir, Gwalior, Madhya Pradesh 474002
          </p>
          <hr />
          <p class="phone">0751-245 4600</p>
          <hr />
>>>>>>> 6d027370ed8519329c74e51a60da71c9010293ea:hospital_card.html

          <p class="link">
            <a
              href="https://www.apollospectra.com/our-hospitals/gwalior/vikas-nagar/best-hospital-in-vikas-nagar-gwalior/"
              >link</a
            >
          </p>
        </div>
      </div>
      <div class="card">
        <h2 class="card-title">Apollo spectra Hospital</h2>
        <img src="img/h5.jpg" alt="" />
        <div class="card-desc">
          <div class="icons">
            <span class="icon address-btn"
              ><em class="fas fa-address-card"></em
            ></span>
            <span class="icon phone-btn"><em class="fas fa-phone"></em></span>
            <span class="icon link-btn"><em class="fas fa-link"></em></span>
          </div>
          <p class="address">
            Gwalior, Vikas Nagar 18, Kila Gate Road, Vikas Nagar, Near Sai Baba
            Mandir, Gwalior, Madhya Pradesh 474002
          </p>
          <hr />
          <p class="phone">0751-245 4600</p>
          <hr />

          <p class="link">
            <a
              href="https://www.apollospectra.com/our-hospitals/gwalior/vikas-nagar/best-hospital-in-vikas-nagar-gwalior/"
              >link</a
            >
          </p>
        </div>
      </div>
      <div class="card">
        <h2 class="card-title">Apollo spectra Hospital</h2>
        <img src="img/h5.jpg" alt="" />
        <div class="card-desc">
          <div class="icons">
            <span class="icon address-btn"
              ><em class="fas fa-address-card"></em
            ></span>
            <span class="icon phone-btn"><em class="fas fa-phone"></em></span>
            <span class="icon link-btn"><em class="fas fa-link"></em></span>
          </div>
          <p class="address">
            Gwalior, Vikas Nagar 18, Kila Gate Road, Vikas Nagar, Near Sai Baba
            Mandir, Gwalior, Madhya Pradesh 474002
          </p>
          <hr />
          <p class="phone">0751-245 4600</p>
          <hr />

          <p class="link">
            <a
              href="https://www.apollospectra.com/our-hospitals/gwalior/vikas-nagar/best-hospital-in-vikas-nagar-gwalior/"
              >link</a
            >
          </p>
        </div>
      </div>
    </div>
    <div class="form-container">
<<<<<<< HEAD:hospital_card.php
    <div class="form-container-back">
        <form action="/php/hakathon/RGPV-Hackathon/hospital_card_form.php" method="post" enctype="multipart/form-data">
        <div class="form">
=======
      <div class="form-container-back">
        <form action="">
          <div class="form">
>>>>>>> 6d027370ed8519329c74e51a60da71c9010293ea:hospital_card.html
            <div class="title">Add A Hospital</div>
            <div class="subtitle">Enter details of hospital</div>

            <div class="input-container ic1">
              <input
                id="hospital_name"
                class="input"
                type="text"
                placeholder=" "
                name="hospital_name"
                required
              />
              <div class="cut"></div>
              <label for="hospital_name" class="placeholder"
                >Hospital name</label
              >
            </div>

            <div class="input-container ic2">
              <textarea
                name="details"
                required
                class="input"
                placeholder=" "
                id="details"
                cols="30"
                rows="10"
                style="margin: 0px; height: 50px"
                ;
              ></textarea>
              <div class="cut"></div>
              <label for="details" class="placeholder">Address</label>
            </div>

            <div class="input-container ic2">
<<<<<<< HEAD:hospital_card.php
            <input id="contact" class="input" name="contact"  type="tel" placeholder=" " />
            <div class="cut cut-short"></div>
            <label for="contact" class="placeholder">Contact</>
=======
              <input id="contact" class="input" type="tel" placeholder=" " />
              <div class="cut cut-short"></div>
              <label for="contact" class="placeholder">Contact</label>
>>>>>>> 6d027370ed8519329c74e51a60da71c9010293ea:hospital_card.html
            </div>

            <div class="input-container ic2">
<<<<<<< HEAD:hospital_card.php
            <input id="link" class="input" name="link" type="text" placeholder=" " />
            <div class="cut cut-short"></div>
            <label for="Link" class="placeholder">Link</>
=======
              <input id="link" class="input" type="text" placeholder=" " />
              <div class="cut cut-short"></div>
              <label for="Link" class="placeholder">Link</label>
>>>>>>> 6d027370ed8519329c74e51a60da71c9010293ea:hospital_card.html
            </div>

            <div class="input-container ic2">
              <input
                id="photo"
                class="input"
                type="file"
                placeholder=" "
                name="photo"
                required
              />
              <div class="cut cut-short"></div>
              <label for="photo" class="placeholder">Choose image</label>
            </div>
<<<<<<< HEAD:hospital_card.php
            
            
            <input type="submit" name="submit" value="submit" class="submit">
        </div>
    </form>
        </div>
=======

            <button type="submit" class="submit">submit</button>
          </div>
        </form>
      </div>
>>>>>>> 6d027370ed8519329c74e51a60da71c9010293ea:hospital_card.html
    </div>
  </body>
  <!-- <script>

    
    // const address_btn = document.querySelector("obj .address-btn");
    // const phone_btn = document.querySelector(".phone-btn");
    // const address = document.querySelector(".address");
    // const phone = document.querySelector(".phone");
    address_btn.onclick = ()=>{
        address.classList.add("addressactive");  
        phone.classList.remove("phoneactive");  
    }
    phone_btn.onclick = ()=>{
        phone.classList.add("phoneactive");      
        address.classList.remove("addressactive");
    }

    
</script> -->
</html>
<!-- https://codepen.io/luanmanara/pen/poyLbWx?editors=1100 -->

<!-- https://codepen.io/Maza-designDev/pen/KKdmyGb?editors=1100 -->

<!-- https://codepen.io/RemiRuc/pen/PowrNmb -->
