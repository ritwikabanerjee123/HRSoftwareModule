<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/iconfonts.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <title>Welcome to Navsoft Training</title>
  </head>
  <body>
    <div class="loginbody vh-height">

    <!-- body start here -->
    <div class="logincontainer d-flex align-items-center">
      <div class="container">
        <div class="text-center mb-5"><img src="images/logo.png" class="logo" alt="Navsoft Training" title="Navsoft Training"></div>
        <div class="loginbox">
          <h2 class="mb-4 text-center"><i class="icon-avatar-inside-a-circle mb-4"></i> User Login</h2>
          <?= $this->Form->create(); ?>
          <?php
            if($_COOKIE["p11"] && $_COOKIE["p22"])
            {
              echo  $this->Form->input('username',array(
                'value' => $_COOKIE['p11'],
                'class'=>'form-group addcustomcss mb-sm-4'
                
            ));
            echo  $this->Form->input('password',array(
              'value' => $_COOKIE['p22'],
              'class'=>'form-group addcustomcss mb-sm-4'
              
          ));
           // echo ' <div class="form-group addcustomcss mb-sm-4"><input name="username" value="$_COOKIE[p3]" class="form-control rounded-0" type="text" placeholder="username"></div>';  
           
           // echo ' <div class="form-group addcustomcss mb-sm-4"><input name="password" value="$_COOKIE[p2]" class="form-control rounded-0" type="text" placeholder="username"></div>';  
           
          
          
             }
             else{
              echo $this->Form->input('username',array(
                'class'=>'form-group addcustomcss mb-sm-4'
            ));
            echo $this->Form->input('password',array(
              'class'=>'form-group addcustomcss mb-sm-4'
          ));

              //echo  '<div class="form-group addcustomcss mb-sm-4"><input name="username" class="form-control rounded-0" type="text" placeholder="username"></div>';
              //echo  '<div class="form-group addcustomcss mb-sm-4"><input name="password" class="form-control rounded-0" type="password" placeholder="password"></div>';
             }

        ?>

          
          <div class="form-group addcustomcss mb-sm-4">
            <div class="w-50 d-inline-block">
              <div class="form-check">
                <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                <!-- <label class="form-check-label" for="exampleCheck1">Remember me</label> -->
                <?php echo $this->Form->checkbox('remember_me');?>Remember me

              </div>
            </div>
            <div class="w-50 d-inline-block text-right" style="margin-left: -5px;"><a href="">Forgot password</a></div>
          </div>
          <?= $this->Form->button(__('Sign in'),['class'=>'btn bluebutton rounded-0 w-100']); ?>
        <!-- <button type="button" class="btn bluebutton rounded-0 w-100">Sign In</button> -->
        </div>
        <?= $this->Form->end();?>
      </div>
    </div>
    <!-- body start here -->


    <!-- footer div start here -->
    <!-- <footer><p class="mb-0">©2019 GolfTown Golf Company, Inc. All Rights Reserved.</p></footer> -->
    <!-- footer div start here -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $( ".navbutton" ).click(function(){
        $( ".mobilemenu" ).toggleClass( "menuleftpos" );
      });
      
    </script>
    
  </body>
</html>