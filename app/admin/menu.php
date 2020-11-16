
<?php
include "header.php";
include "sidebar.php";

$menu = $db->prepare("SELECT * FROM menu");
$menu->execute();

// $menu_get = $menusor->fetch(PDO::FETCH_ASSOC);


?>


  <div class="content">
    <div id="content_table" style="padding-top: 100px;padding-left: 200px;">


  <div class="card">
  <h3 class="card-header">Menu Settings</h5>
     <a href="menu_add.php"><button class="btn success">Add Menu</button></a>
  <div class="card-body" style="padding-top: 5px;">
   
      <table>
  <thead>
    <tr>
      <th>#</th>
      <th>Menu Name</th>
      <th>Menu Link</th>
      <th>Menu Edit And Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
  
    foreach ($menu as $index=>$row){ ?>
    <tr>
      <th scope="row"><?php echo $index+1; ?></th>
      <td><?php echo $row['menu_name']; ?></td>
      <td><?php echo $row['menu_link']; ?></td>
      <td>
        <a href="../http/controller?menu_id=<?php echo $row['id']; ?>">
          <button class="btn info" style="margin-right: 5px;">Edit</button>
        </a>
        <a href="">
            <button class="btn danger">Delete</button>
        </a>
      
      </td>
    </tr>
      <?php } ?>



  </tbody>
</table>
  </div>
</div>
    </div>
  </div>



 
 </body>
 </html>