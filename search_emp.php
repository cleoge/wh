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
        <form id="add-emp" method="post" action="save_emp.php"  name="form1" id="form1" >
        
            <h1>רשימת כל העובדים</h1>   

			 <!--  upper menu      !-->
             <?php include 'admin_menu.php';?>						
			
		    <table id="contacts">
			
			        <tr>
			           <td class="addCont" colspan="11"> 
		                   <a href=emp_card.php>+ פתיחת כרטיס עובד</a>
		               </td>
					</tr>
					
		            <tr class="table-head">
					    <th>בחירה להשמה</th>
					    <th>מס' עובד</th>
						<th>שם משפחה</th>						
						<th>שם פרטי</th>
						<th>תפקיד</th>
						<th>חברת כ"א</th>
						<th>ת.ז.</th>						
						<th>מס' טלפון</th>
						<th>עיר</th>                        											
		            </tr> 
					
		            <tr>
					   <td>
       					   <INPUT type="checkbox" id="assignEmp_" M_Id="13592" name="assignEmp_">
                       </td> 
					   <td> <a href=emp_card.php>123</a></td>
					   <td> אאאא</td>
					   <td> אאאא</td>					   
					   <td> ראש צוות</td>
					   <td> מנפאואר</td>
					   <td> 123456789</td>
					   <td> 050-1234567</td>
					   <td> כפר סבא</td>
					</tr>
										   					   					   
					<tr>
					   <td>
       					   <INPUT type="checkbox" id="assignEmp_" M_Id="13592" name="assignEmp_">
                       </td> 
					   <td> <a href=emp_card.php>222</a></td>
					   <td> בבבבבב</td>
					   <td> אאאא</td>					   
					   <td> דייל</td>
					   <td> מנפאואר</td>
					   <td> 987654321</td>
					   <td> 054-7654321</td>
					   <td> הוד השרון</td>
					</tr>
					
                    <tr>
					  <td colspan="11">	             
	                      <INPUT type="button" value="להשמה" id="btnAssignEmp" 
	                             name="btnAssignEmp" onclick="assignEmp();">
                           <a href=emp_assign.php>זמני בלבד - איך מגיעים למסך הזה?</a>								 
	                 </td>
                    </tr>
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