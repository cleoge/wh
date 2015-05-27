<?php
/**************************************************************
 * Display project details (if pid was passed)
 * OR
 * Display blank page to create new project
 *************************************************************/

// get project class + DB actions: select project, select all projects, insert project, update project
require_once ('includes/Project.php');

// check if project id was passed by search_project.php
if (isset($_GET['pid'])) {
	$projectId = $_GET['pid'];	
	//call method to get project details
	$project = Project::getProject($projectId);  
} else {
	// new project (the page is accessed through the URL)
	$projectId = null;	
}
 
// Handle user's input
// ---------------------
// if the user pressed the 'Save project' button
// get user's input from the form

if (isset($_POST['save_proj'])){
	if ($projectId) { 
		$newProjId   = $_POST['proj_id'];
	}	
	$newProjName = $_POST['proj_name'];
	$newFromDate = $_POST['from_date'];
    $newToDate   = $_POST['to_date'];
	
	//echo 'newProjName= ' .$newProjName;
	$newRow = new Project(null, $newProjName, null, null );
	$newRow = Project::saveProject();
    
    //header('Location: http://localhost/index.php');
}

?>

<!-- Dates part !-->

<!-- Define the calendar pop-up !-->
<!-- -------------------------- !-->
<script type="text/javascript" src="lib/jsdatepick-calendar/jsDatePick.min.1.3.js">
</script>

<script type="text/javascript">
//http://javascriptcalendar.org/javascript-date-picker.php
    // from date calendar
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"fromDate",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
		
		new JsDatePick({
			useMode:2,
			target:"toDate",
			dateFormat:"%d-%M-%Y"
		});
	};
</script>

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
        <form id="add_proj" method="post" action="project_card.php"  name="form1" id="form1" >
        
            <h1>כרטיס פרוייקט</h1>   

			 <!--  upper menu      !-->
             <?php include 'admin_menu.php';?>						
			
		    <table id="card">
			        <tr>
						<th>מס` פרוייקט: &nbsp;												
                          <input type="text" name="proj_id" id="proj_id" size="10" 						 
						         <?php if ($projectId) { ?>
												value="<?php echo $project->projId ?>" disabled />
								 <?php } else { ?>
												value= "" disabled />
								 <?php } ?> 
                        </th>
					</tr>
		            <tr>
						<th >שם פרוייקט:&nbsp;						
                          <input type="text" name="proj_name" id="proj_name" size="60" 
						         <?php if ($projectId) { ?>
												value="<?php echo $project->projName ?>" tabindex=1 required/>
								 <?php } else { ?>
												value= "" tabindex=1 required />
								 <?php } ?>
						         
                        </th>					
					</tr>
					
                    <tr>
						<th >תחנות:&nbsp;	
						   <input type="text" name="loc_name" id="locName" size="40" 
						          value="ללא" disabled />								  
		                          <a href="location_card.php" target="_blank">+ הוספת תחנה/ות</a>							
						</th>				
					</tr>
					
					<tr>
						<th >צוותים:&nbsp;	
						   <input type="text" name="team_name" id="teamName" size="40" 
						          value="ללא" disabled />								  
		                          <a href="team_card.php" target="_blank">+ הוספת צוות/ים</a>							
						</th>				
					</tr>
					
                    <tr>					
					    <th> מתאריך:&nbsp;                   	                    
	                          <input type="text" name="from_date"  id="fromDate"
							     <?php if ($projectId) { ?>
											value="<?php echo $project->fromDate ?>"
	                                        
								 <?php } else { ?>
												value= ""
								 <?php } ?>
							         size=18 onblur="check_date(this)"  tabindex=1>          			                  
						 	         &nbsp;&nbsp;&nbsp;
						
						    עד תאריך:&nbsp;                    	                    
	                          <input type="text" name="to_date"  id="toDate"
							     <?php if ($projectId) { ?>
											value="<?php echo $project->toDate ?>"	                                        
								 <?php } else { ?>
											value= ""
								 <?php } ?>							  
	                                 size=18 onblur="check_date(this)"  tabindex=1>  			                  
						</th>							
					</tr>                  		            	            
						            
	        </table>
			<br>
			
			<table id="card">
			        <tr>
						<th >שבועות קודמים של הפרוייקט:	(לא יופיע עבור פרוייקט חדש)	</th>					
					</tr>
            </table>
			
			<table id="card">
                    <tr>	
                        <th>  	מס` שבוע	</th>			
					    <th> מתאריך </th>                   	                    	                          						
						<th> עד תאריך</th>                    	                    	                        						
					</tr>   

					<tr>
					    <td>4 </td>
						<td>17.05.15 </td>
						<td>23.05.15 </td>						
					</tr>
					
										<tr>
					    <td> 3</td>
						<td>10.05.15 </td>
						<td>16.05.15 </td>
					</tr>
					
										<tr>
					    <td> 2</td>
						<td>03.05.15 </td>
						<td>09.05.15 </td>
					</tr>
					
					<tr>
					    <td> 1</td>
						<td> 26.04.15</td>
						<td>02.05.15 </td>
					</tr>
	        </table>
			<br>
			
	        <input type="submit" name="save_proj" value="שמור פרטי פרוייקט" 
	               onClick="doSubmit()" tabindex=1/>
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