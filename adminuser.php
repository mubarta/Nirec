<?php
include $_SERVER['DOCUMENT_ROOT']."/os0072/connection.php";
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body >
    <div class='dashboard-container'>
    <div class='sideboardcover'>
      <?php
        include "sideboard.php";
        ?>
          
          <div class style='padding-left: 50px; padding-top: 30px; width: 100%'>
           <span>search user</span> <input type="search">
           <div><button>add user</button></div>
           <div class='table-body'>
            <div class='table-container'>

            </div>
          <table >
  <tr>
    <th class='thead'>Name</th>
    <th class='thead'>Date of birth</th>
    <th class='thead'>NIN</th>
    <th class='thead'><button>view</button></th>
    <th class='thead'></th>
  </tr>
    <?php
        $query= "SELECT email, first_name, middle_name, last_name, dateofbirth, nin from persons";
        $data = mysqli_query($mysqli, $query);
        $dataArr = $data -> fetch_all(MYSQLI_ASSOC);//mysqli_fetch_array($data0, MYSQLI_NUM);
        print_r($dataArr);
        echo sizeof($dataArr);
        for ($i=0; $i <sizeof($dataArr) ; $i++) { 
          echo "<tr>
                  <td class='tname'>".$dataArr[$i]['first_name'].' '.$dataArr[$i]['middle_name'].' '.$dataArr[$i]['last_name']."</td></tr>
                  <td>".$dataArr[$i]['nin']."</td>
                  ";
        }
       
    ?>

</table> 
          </div>
          </div>
          </div>
    </div>
</body>
<script src=''></script>
  
</html>