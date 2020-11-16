
<?php
include "header.php";
include "sidebar.php";


$menu = $db->prepare("SELECT * FROM menu WHERE id=");
?>


  <div class="content">
    <div id="content_table" style="padding-top: 100px;padding-left: 200px;">


  <div class="card">
  <h3 class="card-header">Update Menu</h5>
    
  <div class="card-body" style="padding-top: 5px;">


   <?php
   if($_GET['status']=='ok'){ ?>
   <div class="alert" style="background-color:#1ACA5A">
    <span class="closebtn" >Success! Menu saved</span>
   </div>
  <?php } else if($_GET['status']=='no'){ ?>
   <div class="alert" style="background-color:#E34343">
    <span class="closebtn" >Error! Could not add menu</span>
   </div>
  <?php } ?>

<form class="form-inline" action="../http/controller.php" method="POST">
  <label for="name">Menu Name</label>
<input class="" type="text" id="name" name="menu_name" placeholder="Menu Name">
<label for="link">Menu Link</label>
<input class="" type="text" id="link" name="menu_link" placeholder="Menu Link">
<br>
  <button class="btn success" name="menu_add" type="submit">Save Menu</button>
</form>
  </div>
</div>
    </div>
  </div>



 
 </body>
 </html>