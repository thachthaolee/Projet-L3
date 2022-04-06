<?php

//Cette page récupère la liste des pays de l'autocomplétion des input des pays de la page comparer et les renvoie

require('bd.php');
$connect = getBD();


if(isset($_POST['query']))
{
//requete
 $query = "
 SELECT DISTINCT Nom_Pays
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
   <a href="comparer.php?continent=1&pays='.$row["Nom_Pays"].'" class="gsearch">'.$row["Nom_Pays"].'</a>
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
