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

		
function doLoad() {
}

// function to get employees for project assignment
// -----------------------------------------------------------------
function assignEmp() {
	var frmItems = form1.all;
	var vInvToUpdate = '';
	for (var i=0; i<frmItems.length; i++)
		if (frmItems[i].type == 'checkbox' && frmItems[i].checked)
			vInvToUpdate += frmItems[i].M_Id + ',';
			
	InvIdToUpd = vInvToUpdate.substr(0,vInvToUpdate.length-1)
	form1.action='emp_assign.php?assignEmpId=' + InvIdToUpd;
	//form1.action='tm_ageing_search.asp?UpdateInvoices=' + vInvToUpdate;
	form1.submit();
	//alert ('העידכון בוצע בהצלחה');
	return;
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
        <form id="assign-emp" method="post" action="save_assign_emp.php"  name="form1" id="form1" >
        
            <h1>רשימת עובדים להשמה בפרוייקט</h1>   
			 							
		    <table id="contacts">
			
	                <tr class="table-head">		
			            <th>פרוייקט:</th>
						<td><select>
								  <option value=""></option>	
								  <option value="projName1">תחבורה ירושלים</option>
								  <option value="projName2">תחבורה חיפה</option>
								  <option value="projName3">מטרונית חיפה</option>
								  <option value="projName4">תחבורה שרון</option>
							</select>
						</td>
					</tr>
					
		            <tr class="table-head">					    
					    <th>מס' עובד</th>
						<th>שם משפחה</th>						
						<th>שם פרטי</th>
						<th>תפקיד</th>
						<th>חברת כ"א</th>
						<th>ת.ז.</th>						
						<th>מס' טלפון</th>
						<th>עיר</th>  
                        <th>תחנה</th> 
                        <th>צוות</th>						
		            </tr> 
					
		            <tr>
					   <td> 123</td>
					   <td> אאאא</td>
					   <td> אאאא</td>					   
					   <td> ראש צוות</td>
					   <td> מנפאואר</td>
					   <td> 123456789</td>
					   <td> 050-1234567</td>
					   <td> כפר סבא</td>
					   <td><select>
								  <option value=""></option>	
								  <option value="loc1">תחנה 1</option>
								  <option value="loc2">תחנה 2</option>
								  <option value="loc3">תחנה 3</option>
								  <option value="loc4">תחנה 4</option>
							</select>
						</td>
						<td><select>
								  <option value=""></option>	
								  <option value="team1">צוות 1</option>
								  <option value="team2">צוות 2</option>
								  <option value="team3">צוות 3</option>
								  <option value="team4">צוות 4</option>
							</select>
						</td>
					</tr>
										   					   					   
					<tr>
					   <td> 222</td>
					   <td> בבבבבב</td>
					   <td> אאאא</td>					   
					   <td> דייל</td>
					   <td> מנפאואר</td>
					   <td> 987654321</td>
					   <td> 054-7654321</td>
					   <td> הוד השרון</td>
					   <td><select>
								  <option value=""></option>	
								  <option value="loc1">תחנה 1</option>
								  <option value="loc2">תחנה 2</option>
								  <option value="loc3">תחנה 3</option>
								  <option value="loc4">תחנה 4</option>
							</select>
						</td>
						<td><select>
								  <option value=""></option>	
								  <option value="team1">צוות 1</option>
								  <option value="team2">צוות 2</option>
								  <option value="team3">צוות 3</option>
								  <option value="team4">צוות 4</option>
							</select>
						</td>
					</tr>					
	        </table>
			<br><br>
	        <input type="submit" name="save_emp_assign" value="בצע השמה" 
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