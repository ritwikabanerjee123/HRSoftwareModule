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
    <section class="main-content">
    <!-- left menu section start here -->
    <section class="leftmenu">
      <div class="leftpadd">
        <a href="javascript:void(0);" class="leftlogo"><img src="images/logo.png" alt=""></a>
        <div class="leftmain-link">
        <ul class="listofnav">
          <li>
            <a href="javascript:void(0);"><i class="icon-home"></i> <span>Dashboard</span></a>
          </li>
          <li>
            <a href="javascript:void(0);"><i class="icon-list-of-works"></i> <span>Employee Record</span></a>
            <ul class="subchildlink">
              <li>View Records</li>
              <li>Add/New Records</li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);"><i class="icon-long-checklist"></i> <span>Employee Attendance</span></a>
          </li>
          <li>
            <a href="javascript:void(0);"><i class="icon-file"></i> <span>Employee Leave Request</span></a>
          </li>
          <li>
            <a href="javascript:void(0);"><i class="icon-department"></i> <span>Employee Designation</span></a>
          </li>
          <li>
            <a href="javascript:void(0);"><i class="icon-briefcase"></i> <span>Employee Department</span></a>
          </li>
        </ul>
      </div>
      </div>
    </section>
    <!-- left menu section end here -->

    <!-- right part section start here -->
    <section class="rightpart">
      <header class="header-resize">
      <div class="row">
        <div class="col-auto ml-auto align-middle">
         <div class="usernameboxdiv ml-auto">
          <span class="userpicbox mr-2"><img src="images/User.png" alt="Navsoft Training" title="Navsoft Training"></span>
          <span class="usernamed">Welcome Harry</span>
        </div>
        </div>
      </div>
    </header>

    <!-- body container start here -->
    <div class="bodytransition">
      <div class="bodypart">
        <div class="row pageheadertop mb-3">
        <div class="col"><h2>View Attendance List</h2></div>
        <div class="col-auto">
          <div class="form-group addcustomcss">
             <select class="form-control rounded-0">
              <option>Employee ID</option>
            </select> 
          </div>
        </div>
        <div class="col-auto">
          <div class="form-group addcustomcss">
             <select class="form-control rounded-0">
              <option>Employee Name</option>
            </select> 
          </div>
        </div>
        <div class="col-auto"><button type="button" class="btn orangebutton rounded-circle" data-toggle="modal" data-target="#errormessage"><i class="icon-download-1"></i></button></div>
      </div>
      <div>
        <table class="table employtable tablewhitespace">
  <thead>
    <tr>
      <th>Employee ID</th>
      <th>Emp Name</th>
      <th>Attendance Date</th>
      <th>In Time</th>
      <th>Out Time</th>
      <th>Shift</th>
      <th>Shift In Time</th>
      <th>Shift Out Time</th>
      <th>Work Duration</th>
      <th>OT</th>
      <th>Total Duration</th>
      <th>Late By</th>
      <th>Early Going By</th>
      <th>Attendance Status</th>
      <th>Punch Records</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($fileuploadrecord as $fileuploadrecord): ?>
            <tr>
                <td><?= $this->Number->format($fileuploadrecord->id) ?></td>
                <td><?= h($fileuploadrecord->month) ?></td>
                <td><?= $this->Number->format($fileuploadrecord->record_Year) ?></td>
                
                <td><?= h($fileuploadrecord->dtOfUpload) ?></td>
                <td><?= h($fileuploadrecord->att_sheetName) ?></td>
                <td><?= h($fileuploadrecord->att_sheetPath) ?></td>
               <?php $path= "http://localhost/HrSoft/webroot/".$fileuploadrecord->att_sheetPath ?>
                <td class="actions"><a href="<?php echo Router::url( ['action' => 'view', $fileuploadrecord->id])?>" > <i class="icon-file" style="right-padding:7px;"></i></a>&nbsp;
                <a download href="<?php echo $path;?>"><span class="glyphicon glyphicon-download-alt" style="right-padding:7px;"></span></a><?php $id = $fileuploadrecord->id ?>&nbsp;&nbsp;<a id="delete" onclick="deleteAjax(<?php echo $id ?>)"><i class="icon-trash-1" style="right-padding:7px;"></i></a> 
                </td> 
                <!-- <td class="action"><a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal"><i class="icon-pencil"></i></a> <a href="javascript:void(0)"><i class="icon-cancel-1"></i></a> <a href="javascript:void(0)"><i class="icon-trash-1"></i></a></td> -->
                <!-- <td class="actions">
                     $this->Html->link(__('View'), ['action' => 'view', $fileuploadrecord->id])
                    $this->Html->link(__('Edit'), ['action' => 'edit', $fileuploadrecord->id])
                     $this->Form->postLink(__('Delete'), ['action' => 'delete', $fileuploadrecord->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileuploadrecord->id)]) ?>
                </td> -->
            </tr>
            <?php endforeach; ?>
    <!-- <tr>
      <td>3049</td>
      <td>Kelly Carpenter</td>
      <td>27/08/1982</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
    </tr> -->
    <!-- <tr>
      <td>3049</td>
      <td>Kelly Carpenter</td>
      <td>27/08/1982</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
    </tr>
    <tr>
      <td>3049</td>
      <td>Kelly Carpenter</td>
      <td>27/08/1982</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
    </tr>
    <tr>
      <td>3049</td>
      <td>Kelly Carpenter</td>
      <td>27/08/1982</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
    </tr>
    <tr>
      <td>3049</td>
      <td>Kelly Carpenter</td>
      <td>27/08/1982</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
    </tr>
    <tr>
      <td>3049</td>
      <td>Kelly Carpenter</td>
      <td>27/08/1982</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
    </tr>
    <tr>
      <td>3049</td>
      <td>Kelly Carpenter</td>
      <td>27/08/1982</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
    </tr>
    <tr>
      <td>3049</td>
      <td>Kelly Carpenter</td>
      <td>27/08/1982</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
    </tr>
    <tr>
      <td>3049</td>
      <td>Kelly Carpenter</td>
      <td>27/08/1982</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
    </tr>
    <tr>
      <td>3049</td>
      <td>Kelly Carpenter</td>
      <td>27/08/1982</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
    </tr>
    <tr>
      <td>3049</td>
      <td>Kelly Carpenter</td>
      <td>27/08/1982</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
    </tr>
    <tr>
      <td>3049</td>
      <td>Kelly Carpenter</td>
      <td>27/08/1982</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td class="action">Day</td>
      <td>10:18:32 AM</td>
      <td>10:18:32 AM</td>
      <td>Active</td>
    </tr> -->
    
  </tbody>
</table>

      </div>
      <div class="row mb-5">
        <div class="col-auto">
          <div class="pageloadleft"><label>Show</label><select><option>Page 1</option></select><label>Entries</label></div>
        </div>
        <div class="col-auto ml-auto">
          <nav aria-label="Page navigation example">
  <ul class="pagination paginationcss">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        >
      </a>
    </li>
  </ul>
</nav>
        </div>
      </div>

      </div>
    </div>
    <!-- body container end here -->
    <footer><p>© 2019 All Right Reserved</p></footer>
    </section>
    <!-- right part section end here -->
    
    </section>

        <!--  modal box  -->
<div class="modal fade" id="errormessage" tabindex="-1" role="dialog" aria-labelledby="errormessage" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0 pb-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body text-center messagestatuspop">
        <div class="iconstatus redcolr mb-3"><i class="icon-error"></i></div>
        <h4 class="mb-3">Error</h4>
        <p class="mb-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p>
      </div>
      <div class="modal-footer border-top-0 justify-content-center mb-3">
        <button type="button" class="btn bluebutton">Continue</button>
      </div>
    </div>
  </div>
</div>


    <div class="modal fade" id="successmessage" tabindex="-1" role="dialog" aria-labelledby="successmessage" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0 pb-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-1"></i>
        </button>
      </div>
      <div class="modal-body text-center messagestatuspop">
        <div class="iconstatus redcolr mb-3"><i class="icon-success"></i></div>
        <h4 class="mb-3">Success</h4>
        <p class="mb-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p>
      </div>
      <div class="modal-footer border-top-0 justify-content-center mb-3">
        <button type="button" class="btn bluebutton">Download</button>
      </div>
    </div>
  </div>
</div>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script> 
$(document).ready(function(){
  $(".subchildlink").hide();
  $(".listofnav li a").click(function(){
     //$(this).toggleClass('activeclass').siblings().removeClass('activeclass');
      $(".listofnav li a").removeClass('activeclass');
      $(this).toggleClass('activeclass');
      $('.listofnav li .subchildlink').animate({
      height: 'toggle'
    });
  });
});
</script>

<script type="text/javascript">
      $('.uploadclss').on('shown.bs.modal', function () {
      $('#errormessage').trigger('focus')
      });
      $('.successm').on('shown.bs.modal', function () {
      $('#successmessage').trigger('focus')
      });
    </script>

  </body>
</html>


