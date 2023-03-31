<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "based");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "SELECT * FROM client WHERE id_clt LIKE '%".$search."%' OR uname_clt LIKE '%".$search."%' 
  OR mdp LIKE '%".$search."%'  OR cmdp LIKE '%".$search."%' OR qest LIKE '%".$search."%' ";
}
else
{
 $query = " SELECT * FROM client ORDER BY id_clt ";
}
$result = mysqli_query($connect, $query);

 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id_clt"].'</td>
    <td>'.$row["uname_clt"].'</td>
    <td>'.$row["mdp_clt"].'</td>
    <td>'.$row["cmdp_clt"].'</td>
    <td>'.$row["qest"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>