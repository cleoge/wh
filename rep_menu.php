


<?php
?>  		
			 <table id="menus">
			  <tr> 
			      <td> <h3><a href=index.php> ראשי </a> </h3> </td>
				  <td> <h3>| </h3>  </td> 
				  <?php if ($repSourceFile == 'salary') { ?>
	                            <td> <h3><a href=rep_proj_hours.php>דוח סיכום שעות לפרוייקט</a></h3></td> 							
                  <?php } else { ?>
	                            <td> <h3><a href=rep_salary.php> דוח שעות עבור שכר</a> </h3> </td>             
                  <?php }   ?>                   				  
				  <td> <h3>| </h3>  </td> 				  				  				  
				  <td> <h3>יציאה </h3>  </td>
			  </tr>
			 </table>               
					




