<?php include('pat_app.php') ?>
<?php include('auth.php') ?>
<?php include('header.php') ?>


<style media="screen">
*{
  box-sizing: border-box;
  padding: 0;
  margin: 0;

}
body{
  background: url('/hos/images/hos8.jpg') no-repeat;
  background-position: top;
  background-size:cover;
  height:100%;

}

.navbar-custom {
  background:  #001a00;
  opacity: .8;
  font-size: 15px;

}

.navbar-custom .nav-link,.navbar-brand{
  color:white;
}
form label{
  color:green;
  border-bottom:1px solid green;
  font-weight: bold;

}
.main_form{
  background: white;
  opacity: .9;
  padding: 15px;
  margin-top: 15px;

}


form input[type=radio]{
  display: none;
}

/*  checked; */
form input[type=radio]:checked + label{
  background: black;
  color:green;
  padding: 10px;
  border-bottom: none;
}
form input[type=radio] + label:hover{
  cursor: pointer;
  transition: .2s;
}
/* avalibele */
form .avaliable + label{
  background: green;
  color:white;
  padding: 10px;
  border-bottom: none;
}

/* not avalibele */
form .not_avaliable + label{
  background: lightgreen;
  color:white;
  padding: 10px;
  border-bottom: none;
}

</style>


<nav class="navbar navbar-expand-md navbar-custom fixed-top  ">
  <a href="index.php" class="navbar-brand">AL-BUSTAN</a>
  <button type="button" class='navbar-toggler' data-toggle='collapse' data-target='#mynav'>
    <span class='navbar-toggler-icon'></span>
  </button>
  <div class="navbar-collapse collapse" id="mynav">
    <ul class="navbar-nav ml-auto">
      <li class="list-item">
        <a href="pat_page.php" class="nav-link">Appointment</a>
      </li>
      <li class="list-item">
        <a href="pat_det.php" class="nav-link">My details & treatments</a>
      </li>
      <li class="list-item">
        <a href="cancelBooking.php" class="nav-link">cancelBooking</a>
      </li>
      <li class="list-item">
        <a href="feedback.php" class='nav-link'>Feedback</a>
      </li>
      <li class="list-item">
        <a href="logout.php" class='nav-link'>logout</a>
      </li>
    </ul>
    </ul>
  </div>
</nav>
<div class="container-fluid pl-0">
  <div class="row">
    <div class=" col-12 col-md-4">
      <div class="card " style='max-width:400px; background:#000; margin-top:5px;'>
        <div class="card-header">
          <h3 style='color:white;'><i class="far fa-lightbulb"></i>  Welcome</h3>
        </div>
        <div class="card-body">
          <h3 style='color:#004d00;' class='card-title'><i class="far fa-user" style='margin-right:5px;'></i><?php echo $name; ?></h3>
          <h4 style='color:#004d00;'><i class="far fa-envelope" style='margin-right:5px;'></i><?php echo $email; ?></h4>
        </div>
        </div>
      </div>
  <div class="col-12 col-md-8">
    <div class="main_form">
      <form  action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
        <?php if($msg!=''): ?>
          <div class="alert-dismissible fade show alert <?php echo $msgClass;  ?>"><?php echo $msg; ?>
            <button type="button" class='close' data-dismiss='alert'>&times;</button>
          </div>
        <?php endif; ?>
        <fieldset>
          <legend class=' text-center' style='border-bottom:2px solid green;'>Make an Appointment</legend>
         <div class="form-group-inline">
          <label>Id number</label>
          <input type="text" class='form-control' name="id" value="<?php echo $pat_id; ?> "disabled>
         </div>
         <div class="form-group-inline">
          <label>Name</label>
          <input type="text" class='form-control' name="<?php $name; ?>" value="<?php echo $name; ?> " disabled>
         </div>

         <div class="form-group-inline">
          <label for="sel1">Choose category:</label>
          <select class="category form-control" name='category' id='category' required>
            <option selected hidden ><?php echo isset($category)? $category:'--Category--'?></option>
            <option value="Orthopedic">Orthopedic(A|B)</option>
            <option value="Generalphysian">Generalphysian(C|D)</option>
            <option value="Nevrology">Nevrology(E|F)</option>
          </select>
        </div>
        <div class=" form-group-inline">
         <label>Choose Doctor:</label>
         <select  class="doc_list form-control" name='doc_name' id='doc_list' required >
           <option selected hidden ><?php echo isset($doc_name)? $doc_name:'--Doctor--'?></option>

           <div>
             <option class="AAA" value="AAA">AAA</option>
             <option class="BBB" value="BBB">BBB</option>
           </div>

           <div>
             <option  class="CCC" value="CCC">CCC</option>
             <option  class="DDD" value="DDD">DDD</option>
           </div>

           <div>
             <option class="EEE" value="EEE">EEE</option>
             <option class="FFF" value="FFF">FFF</option>
           </div>
         </select>
        </div>
        <div class="form-group datepicker">
          <label>Choose a day:</label>
          <input id="datepicker" placeholder="mm/dd//yyyy" class="form-control" value='<?php echo isset($app_date)?$app_date:null; ?>'  name='app_date' required>
       </div>
      <input type="submit" name="check" value="check" class='mb-1 check btn btn-success'><br>

     </fieldset>
    </form>
  <?php if(isset($_POST['check']) && ($category!='--Category--' && $doc_name!='--Doctor--')) : ?>
  <center>
  <div id="timeslots">
  <form  action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

    <input type="radio" id="2:00" name="timing" value='2:00 PM' class='<?php echo $two>=1?'not_avaliable':'avaliable'; ?>' <?php echo $two>=1?'disabled':''; ?> required >
    <label for="2:00">2:00 PM</label>

    <input type="radio" id="3:00" name="timing" value='3:00 PM' class='<?php echo $three>=1?'not_avaliable':'avaliable'; ?>' <?php echo $three>=1?'disabled':''; ?> required>
    <label for="3:00">3:00 PM</label>

    <input type="radio" id="4:00" name="timing" value='4:00 PM' class='<?php echo $four>=1?'not_avaliable':'avaliable'; ?>' <?php echo $four>=1?'disabled':''; ?> required>
    <label for="4:00">4:00 PM</label>

    <input type="radio" id="5:00" name="timing" value='5:00 PM' class='<?php echo $five>=1?'not_avaliable':'avaliable'; ?>' <?php echo $five>=1?'disabled':''; ?> required>
    <label for="5:00">5:00 PM</label>

    <input type="submit" name="submit" value="submit" class='float-right submit btn btn-success'>
 </form>
 </div>
</center>
<?php endif; ?>
  </div>
  </div>
 </div>
</div>
<script>

$(function(){


  // $('.category').change(function(){
  //   $('#timeslots').hide();
  // })

    // $('.check').attr('disabled',true);

    // $('.doc_list').change(function(){
    //   if($('#doc_list').val()==''){
    //     $('.check').attr('disabled',true);
    //
    //   }else{
    //     $('.check').attr('disabled',false);
    //
    //   }
    // })
    var today ,show;
    var d=new Date();
    var mm=d.getMonth() + 1;
    var dd=d.getDate();
    var yyyy=d.getFullYear();
    var show = '0' + mm + '/0' + dd + '/' + yyyy;
    today= new Date(new Date().getFullYear(),new Date().getMonth(),new Date().getDate());
  $('#datepicker').datepicker({
    uiLibrary:'bootstrap4',
    disableDaysOfWeek:[0],
    minDate: today,


  });

  $('.AAA,.BBB,.CCC,.DDD,.EEE,.FFF').hide();

  //display doctors list according to the category;
  $('#category').change(function(){
    $('.AAA,.BBB,.CCC,.DDD,.EEE,.FFF').hide();

    var value=$(this).val();
    switch (value) {
      case 'Orthopedic':
          $('.AAA,.BBB').show();
        break;
      case 'Generalphysian':
          $('.CCC,.DDD').show();

        break;
      case 'Nevrology':
          $('.EEE,.FFF').show();

          break;
          default:
        alert('no');

    }
  })


})

</script>
<?php include('footer.php') ?>
