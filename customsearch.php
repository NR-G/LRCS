<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Undeviating 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140322

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<style type="text/css">
.div-table {
  display: table;         
  width: auto;         
  border: 1px solid #666666;         
  border-spacing: 5px; /* cellspacing:poor IE support for  this */
}
.div-table-row {
  display: table-row;
  width: auto;
  clear: both;
  padding-bottom:20px;
}
.div-table-col1 {
  float: left; /* fix for  buggy browsers */
  display: table-column;         
  width:300px;         
}
.div-table-col2 {
  float: left; /* fix for  buggy browsers */
  display: table-column;         
  width:300px;         
}
</style>
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
        	<span class="icon icon-cog"></span>
			<h1><a href="#">LA Ranking</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.php" accesskey="1" title="">Homepage</a></li>
				<li><a href="topJournals.php" accesskey="2" title="">Top Journals</a></li>
				<li><a href="topConferences.php" accesskey="3" title="">Top Conferences</a></li>
				<li><a href="CitedJournals.php" accesskey="4" title="">Most Cited Journals</a></li>
				<li><a href="CitedConferences.php" accesskey="5" title="">Most Cited Conferences</a></li>
				<li class="active"><a href="customsearch.php" accesskey="5" title="">Custom Search</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="wrapper">
	<div id="welcome" class="container">
    	
<div class="title">
	  <h2>Search</h2>
	  <div class="searchui">
	  					<div class="div-table-row">
				<div class="div-table-col1">
				<label for="Keywords">Keywords: </label>
				</div>
				<div class="div-table-col2">
				<input type="text" name="search_by_keyword" id="keywords">
				</div>
				</div>
				<div class="div-table-row">
				<div class="div-table-col1">
				<label for="conferences">Scopus Sub-Subject Area: </label>
				</div>
				<div class="div-table-col2">
				<input type="text" name="search_by_name" id="sub_area"><br>
				</div>
				</div>
				<div class="div-table-row">
				
				<div class="div-table-col1">
				<label for="Publications">Rank</label>
				</div>
				<div class="div-table-col2">
				<input type="text" name="min_publctns" id="min_rank"
					style="border: 0; color: #b9cd6d; font-weight: bold; width: 50px;">
				<input type="text" name="max_publctns" id="max_rank"
					style="border: 0; color: #b9cd6d; font-weight: bold; width: 50px;">
				
				<div id="slider-3"></div>
				</div>
				</div>
				<div class="div-table-row">
				<div class="div-table-col1">
				<label for="accprate">Scholarly Output</label>
				</div>
				<div class="div-table-col2">
				<input type="text" id="min_schopt" name="min_accpt_rate"
					style="border: 0; color: #b9cd6d; font-weight: bold; width: 50px;">
				<input type="text" id="max_schopt" name="max_accpt_rate"
					style="border: 0; color: #b9cd6d; font-weight: bold; width: 50px;">
				
				<div id="slider-4"></div>
				</div>
				</div>
				<div class="div-table-row">
				
				<div class="div-table-col1">
				<label for="citation">Average Citation Count</label>
				</div>
				<div class="div-table-col2">
				<input type="text" id="min-acite" name="min_avg_cit"
					style="border: 0; color: #b9cd6d; font-weight: bold; width: 50px;">
				<input type="text" id="max-acite" name="max_avg_cit"
					style="border: 0; color: #b9cd6d; font-weight: bold; width: 50px;">
				
				<div id="slider-5"></div>
				</div>
				</div>
				<div class="div-table-row">
				<div class="div-table-col1">
				<label for="Publishers List">Publisher: </label>
				</div>
				<div class="div-table-col2">
				<input type="text" name="publishers" id="publishers"><br>
				</div>
				</div>
				<div class="div-table-row">
				<div class="div-table-col1">
				<label for="Years">Year: </label>
				</div>
				<div class="div-table-col2">
				<input type="text" name="year" id="years"><br>
				</div>
				</div>
				<div class="div-table-row">
                <input type="button" name="filter" id="filter" value="Search" class="btn btn-info" />  
				</div>
	  	
	  	
	  </div>
	  <!--End of Search UI-->
	  <div class="searchresults">
	  	
	  	<div id="order_table"></div>
	  	
	  </div>
	  
		</div>
	</div>
		
	</div>
</div>
<div id="copyright">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>

<script> 

$(document).ready(function() {
    $( "#slider-3" ).slider({
       range:true,
       min: 1,
       max: 408,
       values: [ 1, 408 ],
       slide: function( event, ui ) {
          $( "#min_rank" ).val( ui.values[ 0 ]);
          $( "#max_rank" ).val( ui.values[ 1 ]);
       }
    });
    $( "#min_rank" ).val(  $( "#slider-3" ).slider( "values", 0 ) );
    $( "#max_rank" ).val(  $( "#slider-3" ).slider( "values", 1 ) );
    
    $( "#slider-4" ).slider({
       range:true,
       min: 0,
       max: 99,
       values: [ 0, 99 ],
       slide: function( event, ui ) {
          $( "#min_schopt" ).val(ui.values[ 0 ]);
          $( "#max_schopt" ).val( ui.values[ 1 ]);
       }
    });
    $( "#min_schopt" ).val( $( "#slider-4" ).slider( "values", 0 ) );
    $( "#max_schopt" ).val( $( "#slider-4" ).slider( "values", 1 ) );
    
    $( "#slider-5" ).slider({
       range:true,
       min: 0,
       max: 46041,
       values: [ 0, 46041 ],
       slide: function( event, ui ) {
          $( "#min-acite" ).val( ui.values[ 0 ]);
          $( "#max-acite" ).val( ui.values[ 1 ]);
       }
    });
    $( "#min-acite").val( $( "#slider-5" ).slider( "values", 0 ) );
    $( "#max-acite").val( $( "#slider-5" ).slider( "values", 1 ) );
    
    $('#filter').click(function(){
    	var keywords = $('#keywords').val();
    	var sub_area = $('#sub_area').val();
    	var publishers = $('#publishers').val();
    	var years = $('#years').val();
    	var min_rank = $('#min_rank').val();
    	var max_rank = $('#max_rank').val();
    	var min_schopt = $('#min_schopt').val();
    	var max_schopt = $('#max_schopt').val();
    	var min_acite = $('#min-acite').val();
    	var max_acite = $('#max-acite').val();
    	load_data(); 
      	function load_data(page)  
    	{
    		$.ajax({  
                          url:"searchresults.php",  
                          method:"POST",  
                          data:{
                          	page:page,
                          	keywords:keywords,
                          	sub_area:sub_area,
                          	publishers:publishers,
                          	min_rank:min_rank,
                          	max_rank:max_rank,
                          	min_schopt:min_schopt,
                          	max_schopt:max_schopt,
                          	min_acite:min_acite,
                          	max_acite:max_acite},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     }); 
           }
           $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
    });
 });



</script>
