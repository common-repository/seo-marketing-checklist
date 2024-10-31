<?php





/**



 * The form to be loaded on the plugin's admin page



 */



	if( current_user_can( 'edit_users' ) ) {		



		



		// Populate the dropdown list with exising users.



        $dropdown_html = '<select required id="prwirepro_user_select" name="prwirepro[user_select]">



                            <option value="">'.__( 'Select a WP User', $this->plugin_text_domain ).'</option>';



        $wp_users = get_users( array( 'fields' => array( 'user_login', 'display_name' ) ) );		



		



		foreach ( $wp_users as $user ) {



			$user_login = esc_html( $user->user_login );



			$user_display_name = esc_html( $user->display_name );



			



			$dropdown_html .= '<option value="' . $user_login . '">' . $user_login . ' (' . $user_display_name  . ') ' . '</option>' . "\n";



		}



        $dropdown_html .= '</select>';



		



		// Generate a custom nonce value.



		$prwirepro_add_meta_nonce = wp_create_nonce( 'prwirepro_add_user_meta_form_nonce' ); 



		



		// Build the Form



?>			

<style>

table {
  width:100%;
	font-size:20px;
	font-weight:bold;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: #a9a9a9;
  color: white;
}
</style>

	
		<br>


<div style="padding: 30px;">
	
<h1>
Keyword Monitoring Tools
</h1>

	<table id="t01">
		
	<br>	
  <tr>
    <th>URL</th>
    <th></th> 
    <th></th>
  </tr>
		
		
  <tr>
    <td><a href="https://search.google.com/search-console" target="_blank">Google Search Console</a></td>
    <td></td> 
    <td></td>
  </tr>
		
		
  <tr>
    <td><a href="https://www.bing.com/toolbox/webmaster/" target="_blank">Bing Webmaster Tools</a></td>
    <td></td> 
    <td></td>
  </tr>
		
		
	
		
		
</table>
		
	
	
	
	
	<br>
	<h1>
Backlink Checking Tools
</h1>

	<table id="t01">
		
	<br>	
  <tr>
    <th>URL</th>
    <th></th> 
    <th></th>
  </tr>
		
		
  <tr>
    <td><a href="https://openlinkprofiler.org" target="_blank">Openlinkprofiler.org</a></td>
    <td></td> 
    <td></td>
  </tr>
		
		
  <tr>
    <td><a href="https://ahrefs.com/backlink-checker" target="_blank">Ahrefs.com</a></td>
    <td></td> 
    <td></td>
  </tr>
		
		
	
		
		
</table>
	
	
	
	
	
	
	<br>
	<h1>
Social Bookmarking and Automated Posting Tools
</h1>

	<table id="t01">
		
	<br>	
  <tr>
    <th>URL</th>
    <th></th> 
    <th></th>
  </tr>
		
		
  <tr>
    <td><a href="https://Onlywire.com" target="_blank">Onlywire.com</a></td>
    <td></td> 
    <td></td>
  </tr>
		
		
  <tr>
    <td><a href="https://Buffer.com" target="_blank">Buffer.com</a></td>
    <td></td> 
    <td></td>
  </tr>
		
		
	
		
		
</table>
	
	
	
	
		<br>
<h1>
Business Listings and Local Map Citation Websites
</h1>
<br>

	<table id="t01">
		
		
  <tr>
    <th>URL</th>
    <th></th> 
    <th></th>
  </tr>
		
		
  <tr>
    <td><a href="https://yellowpages.com" target="_blank">Yellow Pages</a></td>
    <td></td> 
    <td></td>
  </tr>
		
		
  <tr>
    <td><a href="https://superpages.com" target="_blank">Super Pages</a></td>
    <td></td> 
    <td></td>
  </tr>
		
		  <tr>
    <td><a href="https://appleid.apple.com/account#!&page=create" target="_blank">Apple Maps</a></td>
    <td></td> 
    <td></td>
  </tr>
		
		
	  <tr>
    <td><a href="https://business.google.com/create" target="_blank">Google My Business</a></td>
    <td></td> 
    <td></td>
  </tr>	
				
		
	  <tr>
    <td><a href="https://Yelp.com" target="_blank">Yelp.com</a></td>
    <td></td> 
    <td></td>
  </tr>	
		
				
		
	  <tr>
    <td><a href="https://angieslist.com" target="_blank">Angieslist.com/</a></td>
    <td></td> 
    <td></td>
  </tr>	
		
		
						
		
	  <tr>
    <td><a href="https://Mapquest.com" target="_blank">Mapquest.com</a></td>
    <td></td> 
    <td></td>
  </tr>	
		
		
</table>
	
	
	
	
	
	
	<br>
<h1>
Press Release Distribution Sites
</h1>
<br>

	<table id="t01">
		
		
  <tr>
    <th>URL</th>
    <th>Free</th> 
    <th>Paid</th>
  </tr>
		
		
  <tr>
    <td><a href="https://Prwirepro.com" target="_blank">Prwirepro.com</a></td>
    <td>Yes</td> 
    <td>Yes</td>
  </tr>
		
		
  <tr>
    <td><a href="https://Marketpressrelease.com" target="_blank">Marketpressrelease.com</a></td>
    <td>Yes</td> 
    <td>Yes</td>
  </tr>
		
		
	  <tr>
    <td><a href="https://prlog.org" target="_blank">Prlog.org</a></td>
    <td>Yes</td> 
    <td>Yes</td>
  </tr>	
				
		
	  <tr>
    <td><a href="https://seowired.net" target="_blank">SeoWired.net</a></td>
    <td>No</td> 
    <td>Yes</td>
  </tr>	
		
				
		
	  <tr>
    <td><a href="https://www.briefingwire.com" target="_blank">Briefingwire.com</a></td>
    <td>No</td> 
    <td>Yes</td>
  </tr>	
		
		
</table>
	
	
	
	
	
	
	
	<br>
<h1>
Social Bookmarking Posting Websites
</h1>
<br>

	<table id="t01">
		
		
  <tr>
    <th>URL</th>
    <th></th> 
    <th></th>
  </tr>
		
		
  <tr>
    <td><a href="https://Plurk.com" target="_blank">Plurk.com</a></td>
    <td></td> 
    <td></td>
  </tr>
		
		
  <tr>
    <td><a href="https://Medium.com" target="_blank">Medium.com</a></td>
    <td></td> 
    <td></td>
  </tr>
		
		
	  <tr>
    <td><a href="https://Slashdot.com" target="_blank">Slashdot.com</a></td>
    <td></td> 
    <td></td>
  </tr>	
				
		
	  <tr>
    <td><a href="https://Instapaper.com" target="_blank">Instapaper.com</a></td>
    <td></td> 
    <td></td>
  </tr>	
		
				
		
	  <tr>
    <td><a href="https://Slashdot.com" target="_blank">Slashdot.com</a></td>
    <td></td> 
    <td></td>
  </tr>	
		
		
</table>
	
	
	
	

 </div>



		



	<?php    



	}



	else {  



	?>



		<p> <?php __("You are not authorized to perform this operation.", $this->plugin_name) ?> </p>



	<?php   



	}



