<html>
<head>
   <title> php is awesome! </title>
</head>
<body>
      <Header>
           <h1>  php  </h1>
     </header>
     <div>
     <form >
          <input type="text" name="search">
          <input type="submit" value="search">
          <input type="submit" value="add">
          <!-- <button type="button">Add</button> -->
     </form>
          <?php
          include "gameList.php";
          $filter = array();
          if($list as $originalKey => $item){
               if($progress === 100){
                    $complete = true && arsort($complete);
               }else{
                    $filter($progress);
               }

          }
     //      $status = "all";
     //      $field = "progress";
     //      $filter = array();
     //      foreach ($list as $originalKey => $item) {
     //      if ($status == "all" || $item["complete"] == $status){
     //           if (isset($field) && isset($item[$field])){
     //                $filter[$originalKey] = $item[$field];
     //           }else { 
     //                $filter[$originalKey] = $item["complete"];
     //           }
     //      }
     // }
     // arsort($filter);

               echo "<table>";
               echo "<tr>";
               echo "<th>Title</th>";
               echo "<th>Progress</th>";
               echo "<th>Complete</th>";
               echo "</tr>";
               foreach($filter as $id => $value){
               echo "<tr>";
               echo "<td>" . $list[$id]["title"] . "</td>\n";
               echo "<td>" . $list[$id]["progress"] . "</td>\n";
               echo "<td>";
                    if($list[$id]["complete"]) {
                         echo "Yes";
                    } else {
                         echo "No";
                    }
               echo "</td>\n";
               echo "</tr>";
               }
               echo "<table>";
          ?>

          <!-- (Heres where ill put an imput and add and search buttons)
(This will be the table of games i own.. maybe like cards? Or just a list with links on the title to drop down more info) (it will look like this 'title' - 
'%bar showing how complete. At the end of the row there will be a delete and edit button) -->
     </div>

<footer> &copy <?php echo date('Y');  ?> </footer>
</body>
</html>