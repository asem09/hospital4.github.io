
<?php include('pat_login.php') ?>
  <?php include('header.php') ?>
<body data-spy="scroll" data-target=".navbar" data-offset="150">
  <div class="container-fluid header " id='header'>
    <nav class="navbar navbar-expand-md navbar-custom fixed-top  ">
      <a href="index.php" class="navbar-brand"><i style='color:green;'class="fas fa-plus"></i> AL-BUSTAN </a>
      <button type="button" class='navbar-toggler' data-toggle='collapse' data-target='#mynav'>
        <span class='navbar-toggler-icon'></span>
      </button>
      <div class="collapse navbar-collapse" id="mynav">
        <ul class="navbar-nav ml-auto">
          <li class="active nav-item"><a href="#header" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="#test" class="nav-link">Testmonial</a></li>
          <li class="nav-item"><a href="#footer" class="nav-link">About</a></li>
          <li class="nav-item"><a href="#" data-toggle='modal' data-target='#mymodal' class="nav-link">Register</a></li>
        </ul>
      </div>
    </nav>
      <div class="header-text col-12">
        <h2 class='display-2'><i style='color:green; margin-left:-100px;' class="fas fa-clinic-medical"></i> Al-BUSTAN</h2>
        <h3 class='display-6'>"HEALTHCARE AT YOUR DISK!"</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, sunt ex quas! Suscipit maiores sapiente, totam vitae laborum error est.</p>
        <button type="button" name="button" data-toggle='modal' data-target='#login' class='bttn btn' style='background:green; color:white;'>Make an Appointment</button><br><br>
        <center>
        <?php if($msg!=''): ?>
          <div style='max-width:600px; font-family:Sans-serif; text-shadow:0 0 0;s' class="alert-dismissible fade show alert <?php echo $msgClass; ?>"><?php echo $msg; ?>
            <button type="button" class='close' data-dismiss='alert'>&times;</button>
          </div>
        <?php endif; ?>
      </center>
    </div>
  </div>
<div class="container-fluid  " id='services' data-aos="zoom-in-out">
      <div class="row A " >
        <div class="col-md-4 col-12" >
          <h2>Our Services</h2>
          <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero nisi illo veniam. Non, consequatur, consequuntur!</p>
        </div>
        <div class="col-md-4 col-12">
          <i style='font-size:50px; color:green; margin-bottom:15px;' class="fas fa-stethoscope"></i>
          <h4>24 Hour Support</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas laudantium consequatur aut ipsum tenetur cupiditate sed, omnis doloribus harum mollitia!</p>
          <i  style='font-size:50px; color:green; margin-bottom:15px;'class="fas fa-ambulance"></i>
          <h4>Emergency Services</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, debitis id repellendus quae ipsam laboriosam voluptas vel soluta sed dignissimos.</p>
        </div>
        <div class="col-md-4 col-12">
          <i style='font-size:50px; color:green; margin-bottom:15px;' class="fas fa-user-md"></i>
          <h4>Medical Counceling</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nobis accusamus, vero quam unde necessitatibus recusandae explicabo quidem quis blanditiis!</p>
          <i style='font-size:50px; color:green; margin-bottom:15px;' class="fas fa-medkit"></i>
          <h4>Permium Healthcare</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, cum placeat perferendis numquam nemo quae, unde nobis aperiam culpa amet.</p>
        </div>
      </div>
</div>
  <div class="container-fluid" id='test' >
  <div class="row B">
    <div class="card-deck mx-auto " style="max-width:100%;" data-aos="zoom-out-right">
      <div class="card bg-success" style="color:white;">
        <div class="card-body text-center">
          <h4 class="card-title text-left">Emergency Case</h4>
          <p class='card-text text-left'>Lorem ipsu Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.cabo saepe dolore temporibus exercitationem magnam placeat maiores!</p>
          <button type="button" class='btn btn-success' name="button">READ MORE</button>
        </div>
      </div>
      <div class="card bg-success" style="color:white;" data-aos="zoom-in" >
        <div class="card-body text-center">
          <h4 class="card-title text-left">Emergency Case</h4>
          <p class="card-text text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod rem aut perferendis, ea inventore cum assumenda adipisci fugit, at omnis.</p>
          <button type="button" class='btn btn-success' name="button">READ MORE</button>
        </div>
      </div>
      <div class="card bg-success" style="color:white;" data-aos="zoom-out-left">
        <div class="card-body text-center">
          <h4 class="text-title text-left">Opening Hours</h4>
          <p class='card-text text-left'>Monday-Friday <span>8:00 - 18:00</span></p>
          <p class='card-text text-left'>Saturday <span>9:00 - 17:00</span></p>
          <p class='card-text text-left'>Sunday  <span>10:00 - 15:00</span></p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" style='margin:0 0 50px 0;'>
  <div class="row C">
    <div class="col-12 col-md-4" data-aos="zoom-out-right">
      <h4 style='border-bottom:2px solid green'>THE MEDILAP<br>ULTIMATE DREAM</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius minima facere fugiat dolores, recusandae id iusto in iste nemo sequi.</p>
      <a href="index.php">Read More...</a>
    </div>
    <div class="col-12 col-md-6 ml-5" data-aos="zoom-out-left">
      <h4><i style='font-size:30px; color:green; margin:0 20px 0 -50px;'  class="fas fa-arrow-circle-right"></i>It's something important you want to know.</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
      <h4><i style='font-size:30px; color:green; margin:0 20px 0 -50px;' class="fas fa-arrow-circle-right"></i>It's something important you want to know.</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
    </div>
  </div>
</div>
<div class="container-fluid "  style="background:#061306; color:white;" >
  <div class="row D">
    <div class="col-12 col-md-6" data-aos="zoom-in">
    <h2 class=''>« A FEW WORDS<br>ABOUT US »</h2>
    </div>
    <div class="col-12 col-md-6" data-aos="zoom-in">
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typek</p>
    <p class=' text-success'>—<i>Lorem ipsum .<i></p>
    </div>
  </div>
</div>
<div class="container-fluid " id='footer' style='background:  #267326; color:white; margin-top:20px' data-aos="slide-up">
  <div class="row E">
    <div class="col-12 col-md-4">
      <h5>About us</h5>
      <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
    </div>
    <div class="col-12 col-md-4">
      <h5>Quick Links</h5>
      <li><a href="">Home</a></li>
      <li><a href="">Services</a></li>
      <li><a href="">Appointment</a></li>
    </div>
    <div class="col-12 col-md-4">
      <h5>Follow Us</h5>
      <span><i style='font-size:30px;' class="fab fa-facebook" data-aos="flip-down"></i></span>
      <span><i style='font-size:30px;' class="fab fa-twitter" data-aos="flip-down"></i></span>
    </div>
  </div>
  <div class="row F" style="border-top:1px solid white; padding-top:20px;">
    <div class="col-12">
      <h6 class='text-center'>&copy;copyright ASEM.All Right Reserved</h6>
    </div>
  </div>
</div>

  <!-- regestration form -->
  <div class="modal fade" id='mymodal' style="opacity:.9;">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content" >
        <div class="modal-header">
          <h3 class="modal-title text-center text-success" style='border-bottom:2px solid green;'>Sign Up</h3>
          <button type="button" class='close' data-dismiss='modal' name="button">&times;</button>
        </div>
        <div class="modal-body" >
          <form  action="pat_reg.php" method="post" style= 'margin:0 auto'>
            <div class="form-group">
              <input type="text" class='form-control' placeholder="Enter Your name" name="pat_name" value="" required>
            </div>
            <div class="form-group">
              <input type="text" class='form-control' placeholder="Enter your id card number" name="pat_id" value="" required>
            </div>
            <div class="form-group">
              <input type="email" class='form-control' placeholder="Enter your Email" name="pat_email" value="" required>
            </div>
            <div class="form-group">
              <input type="password" class='form-control' placeholder="Enter your Password" name="pat_password" value="" required>
            </div>
            <div class="form-group">
              <input type="tel" class='form-control' placeholder="Enter your Phone number" name="pat_num" value="" required>
            </div>
            <span>Gender:</span>
          <div class="form-check-inline">
            <label class='form-check-label'>
              <input type="radio" name="pat_gender" value='male' class='form-check-input' required>Male
            </label>
          </div>
          <div class="form-check-inline">
            <label class='form-check-label'>
              <input type="radio" name="pat_gender" value='female' class='form-check-input' required>Female
            </label>
          </div><br><br>
            <input type="submit" class='btn btn-success' name="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id='login' style="opacity:.9; ">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content" >
        <div class="modal-header">
          <h3 class="modal-title  text-success" style='border-bottom:2px solid green;'>Sign in</h3>
          <button type="button" class='close' data-dismiss='modal' name="button">&times;</button>
        </div>
        <div class="modal-body" style="margin:10px;">
          <form  action="<?php $_SERVER['PHP_SELF']; ?>" method="post" style= 'margin:0 auto'>
            <fieldset>
            <div class="form-group">
              <input type="text" class='form-control' placeholder="Enter your id card number" name="pat_id" value="" required>
            </div>
            <div class="form-group">
              <input type="password" class='form-control' placeholder="Enter your Password" name="pat_password" value="" required>
            </div><br>
            <input type="submit" class='btn btn-success'  name="login" value="Login" style='width:100%;'>
          </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <script type="text/javascript">

    $(function(){
      //smooth scroll
      $(".nav-link ").click(function(){
        $("html,body").animate({
          scrollTop:$(this.hash).offset().top-50
        },1000)
      })

    //add effect to navber while Scrolling
    $(window).scroll(function(){
      if($(window).scrollTop()){
        $('.navbar-custom').addClass('effect')
      }else{
        $('.navbar-custom').removeClass('effect');
      }
    })

    $('.nav-item').click(function(){
      $('.nav-item').removeClass('active');
      $(this).addClass('active');
    })

    // Animate Scrolling Efect

      AOS.init();

      AOS.init({


    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll

    // Settings that can be overriden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 2000, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    });



      })



  </script>

<?php include('footer.php'); ?>
