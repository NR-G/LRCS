<?php  
 //pagination.php  
 $connect = mysqli_connect("localhost", "LAUser", "LApass", "LARanking");  
 
 $eval = $_POST['eval'];
 $type = $_POST['type'];

 $queryType="";
 $querySort="";
 
 if(strcmp($eval,'cite')==0){
 	$querySort="CiteScore";
 }
 elseif(strcmp($eval,'top')==0){
 	$querySort="CiteScore";
 }
 else{
 	echo "Error in Data";
 }
 
  if(strcmp($type,'journals')==0){
 	$queryType="Journal";
 }
 elseif(strcmp($type,'conferences')==0){
 	$queryType="Conference Proceedings";
 }
 else{
 	echo "Error in Data";
 }
 
 
 if ($connect) {
 $record_per_page = 5;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT Title,CiteScore,Percent_Cited,Year  FROM cite_score where type='" . $queryType . "' ORDER by " . $querySort . " DESC LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($connect, $query);  
 if(!$result){
 	echo mysqli_error($connect);
 }
 $output .= "  
      <table class='table table-bordered'>  
           <tr>  
                <th>Title</th>  
                <th>CiteScore</th>
                <th>Percent_Cited</th>  
                <th>Year</th>  
           </tr>  
 ";  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
           <tr>  
                <td>'.$row["Title"].'</td>  
                <td>'.$row["CiteScore"].'</td>
                <td>'.$row["Percent_Cited"].'</td>  
                <td>'.$row["Year"].'</td>  
           </tr>  
      ';  
 }  
 $output .= '</table><br /><div align="center">';  
 $page_query = "SELECT Title,CiteScore,Percent_Cited,Year  FROM cite_score where type='" . $queryType . "' ORDER by " . $querySort . " DESC";  
 $page_result = mysqli_query($connect, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = min(ceil($total_records/$record_per_page),5);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;
} else {
  echo 'not conected';
}

   
 ?>