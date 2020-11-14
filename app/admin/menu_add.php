
<?php
include "header.php";
include "sidebar.php";
?>


  <div class="content">
    <div id="content_table" style="padding-top: 100px;padding-left: 200px;">


  <div class="card">
  <h3 class="card-header">Add New Menu</h5>
    
  <div class="card-body" style="padding-top: 5px;">
   
<form class="form-inline" action="../http/controller.php" method="POST">
  <label for="name">Menu Name</label>
<input class="" type="text" id="name" style="clear:left;" name="menu_name" placeholder="Menu Name">
<label for="link">Menu Link</label>
<input class="" type="text" id="link" name="menu_link" placeholder="Menu Link">
<br>
  <button class="btn success" type="submit">Save Menu</button>
</form>
  </div>
</div>
    </div>
  </div>



 
 </body>
 </html>