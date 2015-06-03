<?php
/**
 * Display all projects 
 **/

// get project class + DB actions: select specific project, select all projects, insert project,
// update project
// 
require_once ('includes/Project.php');


?>

<script language="javascript">

// save in the db
// --------------
function doSubmit() 
{
    // check required fields
	if ((form1.new_name.value == ''))
	  {
		alert ('Please enter contact person name!');
		return false;
	  } else {
           // submit 
	       form1.submit();
	  }
	
// end of function doSubmit
}

function doLoad() {
	   form1.new_name.focus();  
	}
	
</script>
    
    
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8" />  
        <link type="text/css" rel="stylesheet" href="contact.css" />  
        <title>WH</title>
    </head>
    <body onload="doLoad()">
        <!---Define form -->
        <form id="add-emp" method="post" action="save_emp.php"  name="form1" id="form1" >
        
            <h1>רשימת כל הפרוייקטים</h1>   

			 <!--  upper menu      !-->
             <?php include 'admin_menu.php';?>						
			 
		    <table id="contacts">
			        <tr>
			           <td class="addCont" colspan="4"> 
		                   <a href=project_card.php>+ פתיחת פרוייקט  </a>
		               </td>
					</tr>   
		            <tr class="table-head">
					    <th>מס` פרוייקט</th>
						<th>שם פרוייקט</th>
						<th>מתאריך</th>
						<th>עד תאריך</th>										
					</tr>

					<?php foreach (Project::getAllProjects() as $project) { ?>
			           <tr>
					       <?php echo '<td><a href=project_card.php?pid=' . $project->projId . '> ' . 
			           			              $project->projId . ' </a></td>' . "\n";	
						   ?>												
							<td><?php echo $project->projName ?></td>
							<td><?php echo $project->fromDate ?></td>
							<td><?php echo $project->toDate   ?></td>
			           </tr>	
		            <?php } ?>
                    
	        </table>
			<br>
	        
	    </form>      	            
    </body>
</html>

<?php
/**
 * Functions go here
 */

// disconnect from db -include the close connection file
//include 'CloseConn.php';

?>