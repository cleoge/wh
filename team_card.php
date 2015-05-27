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

// function to add new contact (tm_ageing_cont_card.asp)
// ---------------------------	
function AddLine() 
{
 var new_cont_flag = 0;
 
 for (var x=1; x<=5; x++)
 {
   if( (document.getElementById("new_cont_"+x).style.display=='none') && 
       (new_cont_flag == 0) )
   {
     document.getElementById("new_cont_"+x).style.display = '';
     new_cont_flag = 1;
   }
 }
}

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
        <form id="add-team" method="post" action="save_team.php"  name="form1" id="form1" >
        
            <h1>צוותים של פרוייקט - תחבורה כפר סבא</h1>   
			
			   		
		    <table id="card">
		            <tr>
						<th >שם צוות:&nbsp;			</th>					
					</tr>
					
                    <tr>
						<td>
                          <input type="text" name="teamName1" id="teamName1" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="teamName2" id="teamName2" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="teamName2" id="teamName2" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="teamName2" id="teamName2" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="teamName2" id="teamName2" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="teamName2" id="teamName2" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="teamName2" id="teamName2" size="30" tabindex=1 />
						</td>				
					</tr>
					
					<tr>
						<td>
                          <input type="text" name="teamName2" id="teamName2" size="30" tabindex=1 />
						</td>				
					</tr>					

	        </table>
			<br>
			
			<input type="button" value="הוסף צוות" onClick="AddLine()"></input>
			
			<br>
			<p align="center">	
	            <input type="submit" name="save_team" value="שמור פרטי צוותים" 
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