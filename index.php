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
          Search: <input type="text" name="search">
          <input type="submit" value="search">
          <button type="button">Add</button>
     </form>
          <?php
          include "gameList.php";
          // include "connect.php";
          $status = false;
          $field = "priority";
          $filter = array();
          foreach ($list as $originalKey => $item) {
          if ($status == "all" || $item["complete"] == $status){
               if (isset($field) && isset($item[$field])){
                    $filter[$originalKey] = $item[$field];
               }else { 
               $filter[$originalKey] = $item["progress"] + 12;
               }
          }
          }
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
               echo "<td>" . $list[$id]["complete"] . "</td>\n";
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