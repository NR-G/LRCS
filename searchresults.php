<?php  
 //pagination.php  
 $connect = mysqli_connect("localhost", "LAUser", "LApass", "LARanking");  
  
$keywords = $_POST['keywords'];
$sub_area = $_POST['sub_area'];
$publishers = $_POST['publishers'];
$min_rank = $_POST['min_rank'];
$max_rank = $_POST['max_rank'];
$min_sopt = $_POST['min_schopt'];
$max_sopt = $_POST['max_schopt'];
$min_acite = $_POST['min_acite'];
$max_acite = $_POST['max_acite'];
$years = $_POST['years'];

$query_keywords = "";
$query_sub_area = "";
$query_publishers = "";
$query_years = "";
$query_rank = "RANK between " . $min_rank . " and " . $max_rank;
$query_sopt = "Scholarly_Output between " . $min_sopt . " and " . $max_sopt;
$query_acite = "Citation_count between " . $min_acite . " and " . $max_acite;
 
if(strcmp($keywords,'')==0){
 	$query_keywords="Title IS NOT NULL";
}
else{
	$query_keywords="Title like '%" . $keywords . "%'";
}

if(strcmp($sub_area,'')==0){
	$query_sub_area = "'Scopus Sub-Subject Area' IS NOT NULL";
}
else{
	$query_sub_area = "'Scopus Sub-Subject Area' like '%" . ' ' . $conferences . "%'";
}

if(strcmp($publishers,'')==0){
	$query_publishers = "Publisher IS NOT NULL";
}
else{
	$query_publishers = "Publisher like '" . ' ' . $publishers . "'";
}

if(strcmp($years,'')==0){
	$query_years = "Year IS NOT NULL";
}
else{
	$query_years = "Year = " . ' ' . $years;
}
 
$query_text = "Select Title,Rank,`Scopus Sub-Subject Area`,Citation_Count,Scholarly_Output,Publisher,Year from cite_score Where " . $query_keywords . " and " . $query_sub_area . " and " . $query_publishers . " and " . $query_years . " and " . $query_rank . " and " . $query_sopt . " and " . $query_acite;

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
 $query = $query_text . " LIMIT $start_from, $record_per_page;";
 
 echo $query;
 
 $result = mysqli_query($connect, $query);  
 if(!$result){
 	echo mysqli_error($connect);
 }
 $output .= "  
      <table class='table table-bordered'>  
           <tr>  
                <th>Title</th>  
                <th>Rank</th>
                <th>Scopus Sub-Subject Area</th>
                <th>Citation_Count</th>  
                <th>Scholarly_Output</th>
                <th>Publisher</th>
                <th>Year</th>  
           </tr>  
 ";  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
           <tr>  
                <td>'.$row["Title"].'</td>  
                <td>'.$row["Rank"].'</td>
                <td>'.$row["Scopus Sub-Subject Area"].'</td>                
                <td>'.$row["Citation_Count"].'</td> 
                <td>'.$row["Scholarly_Output"].'</td> 
                <td>'.$row["Publisher"].'</td>  
                <td>'.$row["Year"].'</td>  
           </tr>  
      ';  
 }  
 $output .= '</table><br /><div align="center">';  
 $page_query = $query_text;  
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