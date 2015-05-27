<?php
/**
 * Display contact person's details 
 **/
// connect to db -include the connection file
//include 'OpenConn.php';

// Handle user's input
// ---------------------
// if the user pressed the 'Save new contact' button
// get user's input from the form
/*
if (isset($_POST['add_contact'])){
	$newName  = $_POST['new_Name'];
	$newEmail = $_POST['new_Email'];
	$newPhone = $_POST['new_Phone'];

	// insert new row in contacts table
    $sqlIns = "INSERT INTO contacts (id,name,email,phone) VALUES (?,?,?,?)";
    $newRow = array(NULL, $newName, $newEmail, $newPhone );
    $stmt = $dbh->prepare($sqlIns);
    $stmt->execute($newRow);
    
    header('Location: http://localhost/index.php');
}
*/
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
        <form id="add-location" method="post" action="save_location.php"  name="form1" id="form1" >
        
            <h1>תחנות של פרוייקט - תחבורה כפר סבא</h1>   
			
			   		
		    <table id="card">
		            <tr>
						<th >שם תחנה:&nbsp;			</th>					
					</tr>
					
                    <tr>
						<td>
                          <input type="text" name="locName1" id="locName1" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="locName2" id="locName2" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="locName2" id="locName2" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="locName2" id="locName2" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="locName2" id="locName2" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="locName2" id="locName2" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="locName2" id="locName2" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="locName2" id="locName2" size="30" tabindex=1 />
						</td>				
					</tr>					

	        </table>
			
			<br>
			<input type="button" value="הוסף תחנה" onClick="AddLine()"></input>
			<br>

			<p align="center">			
				<input type="submit" name="save_location" value="שמור פרטי תחנות" 
					   onClick="doSubmit()" tabindex=1/>
			</p>		   
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