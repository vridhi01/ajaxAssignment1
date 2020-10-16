<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Ajax paginattion</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <table id="userTable" class="table table-striped">
            <thead>
               <tr>
                  <th>S.no</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Date</th>
               </tr>
            </thead>
            <tbody></tbody>
         </table>
      </div>
      <?php   
         include 'config.php';
         $limit = 5;
         $sql = "SELECT * FROM `json`"; 
         $result = $mysqli->query($sql);
         if($result->num_rows > 0){
          $total_record  = $result->num_rows;
          $total_pages = ceil($total_record / $limit);
          echo '<nav aria-label="Page navigation example">';
          echo '<ul class="pagination">' ;
          // if($page > 1){
          //   echo ' <li class="page-item"><a class="page-link" id='.($page-1).' data-id='.($page-1).'href="">Previous</a></li> ';
          // }
          for($i=1; $i<=$total_pages;$i++)  {
              if($i == $page) {
                $active = "active";
              }
              else{
                $active = "";
              }
                echo '<li class="page-item '.$active.'"><a class="page-link" id='.$i.' data-id='.$i.' href="">'.$i.'</a></li>';
          }
          // if($total_pages > $page){
          //     echo '<li class="page-item"><a class="page-link" id='.($page+1).' data-id='.($page+1).' href="">Next</a></li>';
          //   }
          echo '</ul>';
          echo '</nav>';
        }
         ?>
      <script src="assignment1.js"></script>
   </body>
</html>