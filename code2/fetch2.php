<?php

//fetch.php;

require('bd.php');
$connect = getBD();


if(isset($_POST['query']))
{
 $query = "
 SELECT DISTINCT Nom_Pays, Id_Pays
 FROM pays
 WHERE pays.Nom_Pays LIKE'%".trim($_POST["query"])."%'
 LIMIT 5
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $output = '';

 foreach($result as $row)
 {
  $output .=  '
  <li class="list-group-item contsearch">
   <a href="continents3.php?id_pays='.$row['Id_Pays'].'&annee=avg" class="gsearch">'.$row["Nom_Pays"].'</a>
  </li>
  ';
 }

 echo $output;
}
/*
if(isset($_POST['email']))
{
 $query = "
 SELECT * FROM customer_table 
 WHERE customer_email = '".trim($_POST["email"])."' 
 LIMIT 1
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $output = '
 <table class="table table-bordered table-striped">
  <tr>
   <th>First Name</th>
   <th>Last Name</th>
   <th>Email</th>
   <th>Gender</th>
  </tr>
 ';

 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["customer_first_name"].'</td>
   <td>'.$row["customer_last_name"].'</td>
   <td>'.$row["customer_email"].'</td>
   <td>'.$row["customer_gender"].'</td>
  </tr>
  ';
 }
 $output .= '</table>';

 echo $output;
}
*/
?>
