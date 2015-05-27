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
        <form id="add-emp" method="post" action="save_emp.php"  name="form1" id="form1" >
        
            <h1>כרטיס עובד</h1>   

			 <!--  upper menu      !-->
             <?php include 'admin_menu.php';?>						
			
		    <table id="card">
			        <tr>
						<th>מס` עובד: &nbsp;	</th>					
						<td colspan="3">						
                          <input type="text" name="empNum" id="empNum" size="10" disabled />
                        </td>
					</tr>
					
		            <tr>
						<th>שם משפחה: &nbsp;	</th>					
						<td>
                          <input type="text" name="lastName" id="lastName" size="10" tabindex=1 required/>
                        </td>
						
						<th>שם פרטי: &nbsp;	</th>					
						<td>					
                          <input type="text" name="firstName" id="firstName" size="10" tabindex=1 required/>
                        </td>
					</tr>	
					
					<tr>
						<th>ת.ז. &nbsp;	</th>					
						<td colspan="3">						
                          <input type="text" name="idNum" id="idNum" size="10" tabindex=1 required/>
                        </td>
					</tr>
					
					<tr>
						<th >מס` נייד: &nbsp; </th>					
						<td colspan="3">
						    <input type="text" name="phoneNum" id="phoneNum" size="10" 
						         onblur='check_phone_field(this)' tabindex=1 required/>
								 -
						    <select>
								  <option value=""></option>	
								  <option value="050">050</option>
								  <option value="052">052</option>
								  <option value="053">053</option>
								  <option value="054">054</option>
								  <option value="057">057</option>
								  <option value="058">058</option>
								  <option value="more">ערכים מטבלת קידומות</option>
							</select>
						</td>
                    </tr>    
						
					<tr>	
						<th>עיר: &nbsp;	</th>					
						<td colspan="3">					
						    <select>
								  <option value=""></option>	
								  <option value="jer">ירושלים</option>
								  <option value="tlv">תל אביב</option>
								  <option value="kfs">כפר סבא</option>
								  <option value="more">ערכים מטבלת ישובים</option>
							</select>
						</td>
					</tr>

                    <tr>					
                        <th>חברת כ"א: &nbsp; </th>					
						<td>					
						    <select>
								  <option value=""></option>	
								  <option value="c1">אורפז</option>
								  <option value="c2">טרגט</option>
								  <option value="c3">יישום</option>
								  <option value="c4">מנפאואר</option>
								  <option value="c5">עבודה עברית</option>
								  <option value="c6">תיגבור</option>
								  <option value="c7">ערכים מטבלת חברות כ"א</option>
							</select>
						</td>	
						
						<th>תפקיד: &nbsp;	</th>					
						<td>					
						    <select>
								  <option value=""></option>	
								  <option value="j1">דייל</option>
								  <option value="j2">ראש צוות</option>								  
								  <option value="c7">ערכים מטבלת תפקידים</option>
							</select>
						</td>	
					</tr>
					
                    <tr>						
						<th>פרוייקט נוכחי: &nbsp;	</th>					
						<td colspan="4" disabled> תחבורה ירושלים
					    </td>
		            </tr> 
					
                    <tr>		
						<th>צוות: &nbsp;</th>					
						<td  disabled>	צוות 1	</td>
						
						<th>אזור / תחנה &nbsp;	</th>					
						<td> צוות 3		   </td>	
					</tr>                  		            	            
					
					<tr>						
						<th>הערות: &nbsp;	</th>					
						<td colspan="4">	הערות - אם יש הערות		</td>
		            </tr>                  		            	            
		            
	        </table>
			<br>
	        <input type="submit" name="save_emp" value="שמור פרטי עובד" 
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