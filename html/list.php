<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Crittenden | List</title>
<meta name="author" content="SmashBrand">
<meta name="viewport" content="960px">
<link href="assets/twitter-bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/twitter-bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="assets/css/_global.css" rel="stylesheet">
<link href="assets/css/page-list.css" rel="stylesheet">
<link href="assets/js/chosen/chosen/chosen.css" rel="stylesheet">
<link href="assets/js/jquery-ui-1.9.0/css/start/jquery-ui-1.9.0.custom.min.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

</head>

<body>

<?php include 'inc/header.php'; ?>

<div class="container-fluid content-area" role="main">

<?php include 'inc/search_small.php'; ?>
	
	<div class="clear">&nbsp;</div>
	
	<div class="row-fluid filters">
	
			<div class="span3">
	
				<div class="columnL">
		
					<form action="#" class="pull-left">
						
						<div class="filters_title">
						
							<h2 class="pull-left">Filters</h2>
							
							<a class="filters_clear" href="#">Clear All Filters</a>
						
						</div><!-- .filters_title -->
						
						<div class="filters_options">
						
							<h3 class="pull-left" class="pull-left">Property Type -</h3>
							
							<a class="filters_clear" href="#">Clear All Filters</a>
							
							<div class="clear">&nbsp;</div>
							
							<label class="checkbox">
							<input type="checkbox" value="option1"> <span>Downtown</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option2"> <span>Shopping Center</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option3"> <span>Freestanding Pad</span>
							</label>					
							<label class="checkbox">
							<input type="checkbox" value="option4"> <span>Lifestyle Center</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option5"> <span>Outlet Center</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option6"> <span>Regional Mall</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option7"> <span>Entertainment Complex</span>
							</label>									
						
						</div><!-- .filters_options -->
		
						<div class="filters_options">
						
							<h3 class="pull-left">Business Type -</h3>
							
							<a class="filters_clear" href="#">Clear All Filters</a>
							
							<div class="clear">&nbsp;</div>
							
							<label class="checkbox">
							<input type="checkbox" value="option1"> <span>Arts / Crafts / Hobby</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option2"> <span>Auto Accessories / Parts / Service</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option3"> <span>Apparel &amp; Accesories</span>
							</label>					
							<label class="checkbox">
							<input type="checkbox" value="option4"> <span>Check Cashing / Loan / Pawnshop</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option5"> <span>Beauty, Health, Spa</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option6"> <span>Books</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option7"> <span>Department Store</span>
							</label>							
							<label class="checkbox">
							<input type="checkbox" value="option8"> <span>Drugstore / Eyewear / Optical</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option9"> <span>Electronics / Entertainment</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option10"> <span>Fitness / Weight Loss</span>
							</label>					
							<label class="checkbox">
							<input type="checkbox" value="option11"> <span>Hardware / Home Improvement</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option12"> <span>Home Furnishings</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option13"> <span>Jewelry &amp; Accessories</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option14"> <span>Laundromat / Dry Cleaner</span>
							</label>								
							<label class="checkbox">
							<input type="checkbox" value="option15"> <span>Membership / Warehouse Club</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option16"> <span>Miscellaneous</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option17"> <span>Movie Theaters</span>
							</label>					
							<label class="checkbox">
							<input type="checkbox" value="option18"> <span>Office / Shipping / Business</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option19"> <span>Party Supply</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option20"> <span>Pets, Pet Supplies / Services</span>
							</label>
							<label class="checkbox">
							<input type="checkbox" value="option21"> <span>Restaurant</span>
							</label>	
							<label class="checkbox">
							<input type="checkbox" value="option22"> <span>Shoes</span>
							</label>							
											
						</div><!-- .filters_options -->
						
						<div class="filters_options">
						
							<h3>Square Footage -</h3>
							
							<p>
							<input type="text" id="amount">
							</p>
							
							<div class="slider-range-container">
							
								<div id="slider-range"></div>
														
							</div><!-- .slider-range-container -->
							
						</div><!-- .filters_options -->			
		
						<div class="filters_options">
						
							<h3>Territory -</h3>
		
							<select data-placeholder="Please select State(s)" multiple class="chzn-select search-box-inline" tabindex="8">
								<option value=""></option>
								<option selected>AZ</option>
								<option selected>CA</option>
								<option>MA</option>
								<option>NJ</option>
								<option>NY</option>
								<option>UT</option>
							</select>	
							
						</div><!-- .filters_options -->	
						
						<div class="filters_options paddingT20px paddingB20px">
		
							<button type="submit" class="btn btn-primary btn-large">Submit</button>
						
						</div><!-- .filters_options -->
							
					</form>
					
					<div class="clear">&nbsp;</div>
								
				</div><!-- .columnL -->				
				
			</div><!-- .span3 .columnL -->
			
			<div class="span9 columnR">
			
				<div class="columnR-title">
			
					<h3 class="pull-left">Title of Search Results</h3>
					
					<div class="pull-right search_results_filter_options">
					
						<span class="pull-left search_results_filter_options_title">Sort by:</span>
						
						<select class="pull-left search_results_filter_options_sort">
							<option>Name (a-z)</option>
							<option>Name (z-a)</option>
							<option>Price (high to low)</option>
							<option>Price (low to high)</option>
						</select>		
						
						<p class="pull-left search_results_filter_options_showing"><b>147 of 256</b> Showing</p>
					
					</div><!-- .pull-right search_results_filter_options -->
					
				<div class="clear">&nbsp;</div>
				
				</div><!-- .columnR-title -->

				
				<div class="search_results">
				
					<div class="search_results_listing">
					
						<div class="search_results_listing_padding">
						
							<h4><a href="#">Ann Taylor LOFT</a></h4>
							
							<div class="search_results_listing_locations">
							
								<p>Locations:  574</p>
								
							</div><!-- .search_results_listing_locations -->
							
							<div class="search_results_listing_info">
							
								<div class="search_results_listing_info_business">
								
									<p><b>Business: </b>Apparel &amp; Accessories (Women's)</p>
								
								</div><!-- .search_results_listing_info_business -->
								
								<div class="search_results_listing_info_property">
								
									<p><b>Property: </b>Downtown or Streetfront, Lifestyle Center, Regional Mall</p>
								
								</div><!-- .search_results_listing_info_property -->
	
								<div class="search_results_listing_info_growth">
								
									<p><b>Growth 2012: </b>10 New Locations<br>
									<b>Growth 2012: </b>10 New Locations</p>
								
								</div><!-- .search_results_listing_info_growth -->
							
							</div><!-- .search_results_listing_info -->
												
						</div><!-- .search_results_listing_padding -->						
					
					</div><!-- .search_results_listing -->
					
					<div class="search_results_listing">
					
						<div class="search_results_listing_padding">
						
							<h4><a href="#">Nike</a></h4>
							
							<div class="search_results_listing_locations">
							
								<p>Locations:  574</p>
								
							</div><!-- .search_results_listing_locations -->
							
							<div class="search_results_listing_info">
							
								<div class="search_results_listing_info_business">
								
									<p><b>Business: </b>Apparel &amp; Accessories (Women's)</p>
								
								</div><!-- .search_results_listing_info_business -->
								
								<div class="search_results_listing_info_property">
								
									<p><b>Property: </b>Downtown or Streetfront, Lifestyle Center, Regional Mall</p>
								
								</div><!-- .search_results_listing_info_property -->
	
								<div class="search_results_listing_info_growth">
								
									<p><b>Growth 2012: </b>10 New Locations<br>
									<b>Growth 2012: </b>10 New Locations</p>
								
								</div><!-- .search_results_listing_info_growth -->
							
							</div><!-- .search_results_listing_info -->
												
						</div><!-- .search_results_listing_padding -->						
					
					</div><!-- .search_results_listing -->	
					
					<div class="search_results_listing">
					
						<div class="search_results_listing_padding">
						
							<h4><a href="#">McDonald's USA</a></h4>
							
							<div class="search_results_listing_locations">
							
								<p>Locations:  574</p>
								
							</div><!-- .search_results_listing_locations -->
							
							<div class="search_results_listing_info">
							
								<div class="search_results_listing_info_business">
								
									<p><b>Business: </b>Apparel &amp; Accessories (Women's)</p>
								
								</div><!-- .search_results_listing_info_business -->
								
								<div class="search_results_listing_info_property">
								
									<p><b>Property: </b>Downtown or Streetfront, Lifestyle Center, Regional Mall</p>
								
								</div><!-- .search_results_listing_info_property -->
	
								<div class="search_results_listing_info_growth">
								
									<p><b>Growth 2012: </b>10 New Locations<br>
									<b>Growth 2012: </b>10 New Locations</p>
								
								</div><!-- .search_results_listing_info_growth -->
							
							</div><!-- .search_results_listing_info -->
												
						</div><!-- .search_results_listing_padding -->						
					
					</div><!-- .search_results_listing -->
					
					<div class="search_results_listing">
					
						<div class="search_results_listing_padding">
						
							<h4><a href="#">Ann Taylor LOFT</a></h4>
							
							<div class="search_results_listing_locations">
							
								<p>Locations:  574</p>
								
							</div><!-- .search_results_listing_locations -->
							
							<div class="search_results_listing_info">
							
								<div class="search_results_listing_info_business">
								
									<p><b>Business: </b>Apparel &amp; Accessories (Women's)</p>
								
								</div><!-- .search_results_listing_info_business -->
								
								<div class="search_results_listing_info_property">
								
									<p><b>Property: </b>Downtown or Streetfront, Lifestyle Center, Regional Mall</p>
								
								</div><!-- .search_results_listing_info_property -->
	
								<div class="search_results_listing_info_growth">
								
									<p><b>Growth 2012: </b>10 New Locations<br>
									<b>Growth 2012: </b>10 New Locations</p>
								
								</div><!-- .search_results_listing_info_growth -->
							
							</div><!-- .search_results_listing_info -->
												
						</div><!-- .search_results_listing_padding -->						
					
					</div><!-- .search_results_listing -->	
					
					<div class="search_results_listing">
					
						<div class="search_results_listing_padding">
						
							<h4><a href="#">Ann Taylor LOFT</a></h4>
							
							<div class="search_results_listing_locations">
							
								Locations:  574
								
							</div><!-- .search_results_listing_locations -->
							
							<div class="search_results_listing_info">
							
								<div class="search_results_listing_info_business">
								
									<p><b>Business: </b>Apparel &amp; Accessories (Women's)</p>
								
								</div><!-- .search_results_listing_info_business -->
								
								<div class="search_results_listing_info_property">
								
									<p><b>Property: </b>Downtown or Streetfront, Lifestyle Center, Regional Mall</p>
								
								</div><!-- .search_results_listing_info_property -->
	
								<div class="search_results_listing_info_growth">
								
									<p><b>Growth 2012: </b>10 New Locations<br>
									<b>Growth 2012: </b>10 New Locations</p>
								
								</div><!-- .search_results_listing_info_growth -->
							
							</div><!-- .search_results_listing_info -->
												
						</div><!-- .search_results_listing_padding -->						
					
					</div><!-- .search_results_listing -->
					
					<div class="search_results_listing">
					
						<div class="search_results_listing_padding">
						
							<h4><a href="#">Ann Taylor LOFT</a></h4>
							
							<div class="search_results_listing_locations">
							
								Locations:  574
								
							</div><!-- .search_results_listing_locations -->
							
							<div class="search_results_listing_info">
							
								<div class="search_results_listing_info_business">
								
									<p><b>Business: </b>Apparel &amp; Accessories (Women's)</p>
								
								</div><!-- .search_results_listing_info_business -->
								
								<div class="search_results_listing_info_property">
								
									<p><b>Property: </b>Downtown or Streetfront, Lifestyle Center, Regional Mall</p>
								
								</div><!-- .search_results_listing_info_property -->
	
								<div class="search_results_listing_info_growth">
								
									<p><b>Growth 2012: </b>10 New Locations<br>
									<b>Growth 2012: </b>10 New Locations</p>
								
								</div><!-- .search_results_listing_info_growth -->
							
							</div><!-- .search_results_listing_info -->
												
						</div><!-- .search_results_listing_padding -->						
					
					</div><!-- .search_results_listing -->	
					
					<div class="search_results_listing">
					
						<div class="search_results_listing_padding">
						
							<h4><a href="#">Ann Taylor LOFT</a></h4>
							
							<div class="search_results_listing_locations">
							
								Locations:  574
								
							</div><!-- .search_results_listing_locations -->
							
							<div class="search_results_listing_info">
							
								<div class="search_results_listing_info_business">
								
									<p><b>Business: </b>Apparel &amp; Accessories (Women's)</p>
								
								</div><!-- .search_results_listing_info_business -->
								
								<div class="search_results_listing_info_property">
								
									<p><b>Property: </b>Downtown or Streetfront, Lifestyle Center, Regional Mall</p>
								
								</div><!-- .search_results_listing_info_property -->
	
								<div class="search_results_listing_info_growth">
								
									<p><b>Growth 2012: </b>10 New Locations<br>
									<b>Growth 2012: </b>10 New Locations</p>
								
								</div><!-- .search_results_listing_info_growth -->
							
							</div><!-- .search_results_listing_info -->
												
						</div><!-- .search_results_listing_padding -->						
					
					</div><!-- .search_results_listing -->
					
					<div class="search_results_listing">
					
						<div class="search_results_listing_padding">
						
							<h4><a href="#">Ann Taylor LOFT</a></h4>
							
							<div class="search_results_listing_locations">
							
								Locations:  574
								
							</div><!-- .search_results_listing_locations -->
							
							<div class="search_results_listing_info">
							
								<div class="search_results_listing_info_business">
								
									<p><b>Business: </b>Apparel &amp; Accessories (Women's)</p>
								
								</div><!-- .search_results_listing_info_business -->
								
								<div class="search_results_listing_info_property">
								
									<p><b>Property: </b>Downtown or Streetfront, Lifestyle Center, Regional Mall</p>
								
								</div><!-- .search_results_listing_info_property -->
	
								<div class="search_results_listing_info_growth">
								
									<p><b>Growth 2012: </b>10 New Locations<br>
									<b>Growth 2012: </b>10 New Locations</p>
								
								</div><!-- .search_results_listing_info_growth -->
							
							</div><!-- .search_results_listing_info -->
												
						</div><!-- .search_results_listing_padding -->						
					
					</div><!-- .search_results_listing -->																			
					
				<div class="clear">&nbsp;</div>
				
				</div><!-- .search_results -->
					
				<div class="clear">&nbsp;</div>
				
				<div class="pagination pagination-centered">
					<ul>
						<li class="disabled"><a href="#">&laquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
				</div><!-- .pagination -->
			
			</div><!-- .span9 columnR-->
	
	</div><!-- .row-fluid -->	

</div><!-- .container-fluid .content-area -->

<?php include 'inc/footer.php'; ?>

<?php include 'inc/footer_js.php'; ?>

<!-- BEGIN: jQuery Slider -->
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
<script>
$(function() {
    $( "#slider-range" ).slider({
        range: true,
        min: 1500,
        max: 15000,
        values: [ 1500, 15000 ],
        step: 100,
        slide: function( event, ui ) {
            $( "#amount" ).val( ui.values[ 0 ] + " sqft to " + ui.values[ 1 ] + " sqft" );
        }
    });
    $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) +
        " sqft to " + $( "#slider-range" ).slider( "values", 1 ) + " sqft" );
});
</script>
<!-- END: jQuery Slider -->

</body>

</html>