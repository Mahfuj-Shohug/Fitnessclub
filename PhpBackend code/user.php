
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fitness Club</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<!-------------Log Out-------------->
<section id="logout">
<div class="container">
<div class="row">
<div class="col-md-6">
<?php
echo $name;
echo '<br>';
?>
</div>
<div class="col-md-6">
<a href="login.php">Log Out</a>
</div>
</div>
</div>
</section>
  <!------------------------header----------->

  <section id="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"><img src="images/icon.png" alt="icon"> Fitness Club</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Special Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#packages">Our Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#review">Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contacts</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
  <!----------------------Join Massage------------------->
  <section id="join">
    <div class="container">
      <div class="join text-center">
        <h1>Make your body fit and look smart</h1>
        <p>If you want to join our fitness club family, so never late join now quikly, limited seat only.
          *STAY HAPPY STAY COOL*
        </p>
        <a class="btn home-btn" href="#packages"> Purchase</a>
      </div>
    </div>
  </section>
  <!----------------About us section------------->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <img src="images/background3.jpg" class="img-fliud" alt="about pic">
        </div>
        <div class="col-md-6 text-justify">
          <h3>We have confortable morden equipments and air condition gymnasium</h3>
          <p>From former factories refurbished to become fitness hubs for the whole family to immersive brand events
            that feature drills led by professionals, modern fitness innovations provide an experiential aspect to the
            conventional workout routine that will re-motivate participants and help get you back on track to your goal.
          </p>
          <p>As consumers look to blend work and play, many aspects related to nightlife are being incorporated into
            fitness facility concepts. Similarly, brands looking to reach consumers amidst their regular routine are
            launching urban outdoor gym pop-ups in order to encourage community-based fitness.
          </p>
        </div>
        <div class="col-md-6 text-justify">
          <h3>Our honarable chairman and founder massage</h3>
          <p>Hello! this is Mahfuj hasan shohug. I am the founder of this fitness club. in this club you can find the
            most variable and mordan equipnment with very intaligents traineres who is 24/7 hour active of train you and
            make your body fit and strong.</p>
          <p>In addition, our friendly fitness professionals partner with you, whether your desire is simply good health
            or customized training for competitive sports. Trained and certified, knowledgeable and experienced, they
            guide you comfortably toward better wellbeing and a better life.
          </p>
        </div>
        <div class="col-md-6 text-center">
          <img src="images/founder.jpg" class="img-fliud" alt="about pic">
        </div>
      </div>
    </div>
  </section>
  <!----------------Services---------------------->
  <section id="services">
    <h1>Our Special Services</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="images/Gym.png" alt="gym">
          <h4>Gym for Fit</h4>
          <p>You can found here a graduate and expriences trainer for make your body fit and special things is they are
            active hare 24/7 hour and also can advice your food manu and regular activites.</p>
        </div>
        <div class="col-md-4">
          <img src="images/boxing.png" alt="gym">
          <h4>Boxing tips</h4>
          <p>If you want a world class boxer, so you are welcome here becouse, here we also train to make a boxer with
            expriences trainer for make you a great boxer where they active.</p>
        </div>
        <div class="col-md-4">
          <img src="images/yoga.png" alt="gym">
          <h4>Yoga class</h4>
          <p>This services special for women. Here they can also join a yoga class and every day morning they can attend
            this yoga class.Here also have expriences trainer for yoga where they active.</p>
        </div>
      </div>
    </div>
  </section>
  <!----------------Features----------->
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/featcher.png" alt="feature" class="img-fluid">
        </div>
        <div class="col-md-6">
          <div class="feature-box">
            <div class="feature-left">
              <i class="fa fa-trophy"></i>
            </div>
            <div class="feature-right">
              <h4>Certified Trainers</h4>
              <p>We have high quality and well certified trainers. They are always active and very friendly. They always
                advice for daily activites.</p>
            </div>
          </div>
          <div class="feature-box">
            <div class="feature-left">
              <i class="fa fa-heartbeat"></i>
            </div>
            <div class="feature-right">
              <h4>Free Consultation</h4>
              <p>Fitness consultation with every client and does a thorough assessment and evaluation to develop a
                customized fitness and nutrition program. </p>
            </div>
          </div>
          <div class="feature-box">
            <div class="feature-left">
              <i class="fa fa-clock-o"></i>
            </div>
            <div class="feature-right">
              <h4>Flexible Time</h4>
              <p>Every body is different, I would say take your time and enjoy the journey of discovering your own
                body's limits. Everybody can choose their own time</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----------------OUR Packages------------>
  <section id="packages">
    <div class="container">
      <h1>Our Packages</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="price-amount">
            <div class="price-head">
              <h3>Monthly <br> Membership</h3>
              <p>$50/<span>Month</span></p>
            </div>
            <div class="price-cont">
              <ul>
                <li>Make Individual Rutine Time</li>
                <li>5 Days per weak</li>
                <li>2 Hour per day</li>
                <li>Making group for your time</li>
                <li>Join the special trainer training session</li>
              </ul>
            </div>
            <div class="price-btn">
              <a class="buy-btn" href="#">Purchase</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="price-amount">
            <div class="price-head">
              <h3>Half Yearly Membership</h3>
              <p>$250/<span>Halfyear</span></p>
            </div>
            <div class="price-cont">
              <ul>
                <li>Special day invide health confarance free</li>
                <li>5 Days per weak</li>
                <li>Any hour in a day</li>
                <li>Making small group for your time</li>
                <li>Join the special trainer training</li>
              </ul>
            </div>
            <div class="price-btn">
              <a class="buy-btn" href="#">Purchase</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="price-amount">
            <div class="price-head">
              <h3>Yearly<br> Membership</h3>
              <p>$400/<span>Year</span></p>
            </div>
            <div class="price-cont">
              <ul>
                <li>Free to join in any health confarance</li>
                <li>Any time any hour</li>
                <li>Making small group for your time</li>
                <li>Join the special trainer training</li>
                <li>Finish the year make chance for trainer</li>
              </ul>
            </div>
            <div class="price-btn">
              <a class="buy-btn" href="#">Purchase</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------------------Review------------>
  <section id="review">
    <div class="container">
      <h1>Our Happiest Customers</h1>
      <p>Here our most usable and happiable customer are give some comment about our fitness club.</p>
      <div class="row">
        <div class="col-md-3">
          <p class="review">
            "Where do I start, this gym is what I think about when I think of the perfect gym. It started with the
            location and excellent breeze coming off the ocean. It quickly moved to the awesome energy and knowledge
            that you get from the trainers here, they are eager to help and will to take time with you."<br>
            <i class="fa fa-twitter"></i><span>@Mahfuj</span>
          </p>
          <img src="Images/user1.jpg" alt="user1">
        </div>
        <div class="col-md-3">
          <p class="review">
            "I just came back from my yearly visit to Cabarete. One of the main reasons I keep going back - Jeremy. You
            get a great workout, burn tons of calories and have a great time doing it. You leave each class sweaty and
            spent - and leaner. and never boring! Great for all levels.
            "<br>
            <i class="fa fa-twitter"></i><span>@Faruk</span>
          </p>
          <img src="Images/user2.jpg" alt="user2">
        </div>
        <div class="col-md-3">
          <p class="review">
            "Fantastic fitness bootcamp with Jeremy at Extreme Fitness Cabarete! He knows how to make you burn calories
            and build muscle! It is really amazing to come back from vacations in a better shape than when I left!
            Trainings are painful (in a good way :))again."<br>
            <i class="fa fa-twitter"></i><span>@Anu</span>
          </p>
          <img src="Images/user3.jpg" alt="user3">
        </div>
        <div class="col-md-3">
          <p class="review">
            "eXtreme Fitness Camps Cabarete is an open air gym on the north coast of the Dominican Republic. Here we
            live by the sun and we are powered by it, the only solar powered gym in the Caribbean! an awesome instructor
            and just so knowledgeable. You'll see me in the gym in 2020 -again"<br>
            <i class="fa fa-twitter"></i><span>@Bitto</span>
          </p>
          <img src="Images/user4.jpg" alt="user4">
        </div>
      </div>
    </div>
  </section>
  <!--------------------About Section------------------------->
  <section id="contact">
    <div class="container">
      <h1>Contact us any Time</h1>
      <div class="row">
        <div class="col-md-6">
          <form action="gustinfo.php" method="post" class="contact-form">
            <div class="form-group">
              <input type="text"  name="name" class="form-control" placeholder="Your Name">
              <input type="number" name="phone" class="form-control" placeholder="Phone Number">
              <input type="email" name="email" class="form-control" placeholder="Your Email">
              <textarea name="comment" class="form-control" rows="4" placeholder="Your Massage"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">
              SEND MASSAGE
            </button>
          </form>
        </div>
        <div class="col-md-6 contact-info">
          <div class="follow">
            <i class="fa fa-map-marker"></i><b> ADDRESS:</b> Dhanmondi Old/32 Road, Dhaka, Bangladesh.
          </div>
          <div class="follow">
            <i class="fa fa-phone"></i> <b> PHONE:</b> +88 01786-725669.
          </div>
          <div class="follow">
            <i class="fa fa-envelope-o"></i> <b> EMAIL:</b> mahfuj.shohug@gmail.com.
          </div>
          <div class="follow">
            <label><i class="fa fa-commenting-o"></i><b> SOCIAL MEDIA:</b></label>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!------------Fotter--------->
  <section id="fotter">
    <div class="container text-center">
      <p>This Site Made By Mahfuj and <i class="fa fa-copyright"></i>copyright all reserved by me at 2020</p>
    </div>
  </section>
  <!-------------JS LINK CDN----------->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
  </script>

</body>

</html>


