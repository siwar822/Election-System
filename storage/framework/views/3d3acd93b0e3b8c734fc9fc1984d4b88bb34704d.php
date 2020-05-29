<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <title>dashbord</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">


  </head>

    

    <style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 11px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
  <body>
    
    <div class="wrapper d-flex align-items-stretch">

      <nav id="sidebar">
        <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
          <div class="user-logo">
            <div class="img" style="background-image: url(images/logo.jpg);"></div>
            <h3>Karim Joudi</h3>
          </div>
        </div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Dashboard</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Check Requests</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-trophy mr-3"></span> Announce Result</a>
          </li>
          <li>
            <a href="candidates"><span class="fa fa-cog mr-3"></span> Manage Candidates</a>
          </li>
          <li>
            <a href="#"><span class=" glyphicon glyphicon-plus mr-3"></span> Add Admin</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Manage Admins</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
          <li>
      
          </li>

        </ul>
      </nav>
    
    <div class="wrapper d-flex align-items-stretch">

        <!-- Page Content  -->

      <div id="content" class="p-4 p-md-5 pt-5">
     

      <div id="chartContainer" style="height: 550px; max-width: 920px; margin-top: 30px auto;"></div>
      <br>
             
        
          <?php
           $a = $candidats[0]->name;
           $av = $candidats[0]->votecount;
           $b = $candidats[1]->name;
           $bv = $candidats[1]->votecount;
           $c = $candidats[2]->name;
           $cv = $candidats[2]->votecount;
           $d = $candidats[3]->name;
           $dv = $candidats[3]->votecount;
           $f = $candidats[4]->name;
           $fv = $candidats[4]->votecount; 
          ?>
         
          
           
      <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
      <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
      </div>
    </div>
    <script>
window.onload = function () {


//Better to construct options first and then pass it as a parameter
var options = {
  title: {
    text: "Votes Statistics"              
  },
  data: [              
  {

    // Change type to "doughnut", "line", "splineArea", etc.
    type: "column",
    dataPoints: [
     
      { label: "<?php echo e($a); ?>",  y: <?php echo e($av); ?>  },
      { label: "<?php echo e($c); ?>", y: <?php echo e($cv); ?>  },
      { label: "<?php echo e($b); ?>", y: <?php echo e($bv); ?> },
      { label: "<?php echo e($f); ?>",  y: <?php echo e($fv); ?>  },
      { label: "<?php echo e($d); ?>",  y: <?php echo e($dv); ?>  }
      
    ]
  }
  ]
};

$("#chartContainer").CanvasJSChart(options);
}
</script>
   </body>


</html>

<?php /**PATH C:\Users\karim\Desktop\election\Election-System-authentification-model\election-system-auth-relation\resources\views/admin/dashbord.blade.php ENDPATH**/ ?>