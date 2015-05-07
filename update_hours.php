


<?php
$weekDays = array('ראשון', 'שני', 'שלישי', 'רביעי',
                  'חמישי', 'שישי', 'שבת');
//echo var_dump($weekDays);				  
?>

<!DOCTYPE html>
<html >

    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="contact.css" />  
        <title>WH</title>
    </head>
    <body>                 
	
	    <form id="update-hours" method="post" action="update_hours.php"  name="form1" id="form1" >	
	        
			<h1>עדכון דיווח שעות לפרוייקט</h1>
	        
	        
			<table id="menus">
			  <tr> 
				  <td> <h3><a href=index.php> דיווח שעות עבודה</a> </h3> </td>
				  <td> <h3>| </h3>  </td> 
				  <td> <h3><a href=insert_training_hours.php> דיווח שעות הדרכה </a> </h3> </td>
				  <td> <h3>| </h3>  </td> 		  
				  <td> <h3><a href=rep_salary.php> דוח שעות עבור שכר</a> </h3> </td>
				  <td> <h3>| </h3>  </td>  
				  <td> <h3>דוח סיכום שעות</h3></td>
				  <td> <h3>| </h3>  </td>
				  <td> <h3><a href=admin.php> אדמין </a> </h3>  </td>
				  <td> <h3>| </h3>  </td>
				  <td> <h3>יציאה </h3>  </td>
			  </tr>
			</table>        
					
					
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
					<th>שבוע שמתחיל בתאריך:</th>
					<td><select>
							  <option value=""></option>	
							  <option value="projWeek1">18 - 26.04.15 - 02.05.15</option>
							  <option value="projWeek2">19 - 03.05.15 - 09.05.15</option>
							  <option value="projWeek3">20 - 10.05.15 - 16.05.15</option>
							  <option value="projWeek4">17 - 03.05.15 - 23.05.15</option>
						</select>
					</td>
															
				</tr>	            
							
			</table>
			
			<br>        
			
			<table id="contacts">
				<tr class="table-head">
					<th colspan="5">תאריכי דיווח</th>
					<?php foreach($weekDays as $day) {                	    	                  	       
							echo '<th colspan="2">' . $day .'</th>' . "\n";
						}
					?>
				</tr>
							
				<tr class="table-head">
					<th>מס' עובד</th>
					<th>שם משפחה</th>
					<th>שם פרטי</th>
					<th>ת.ז.</th>
					<th>תפקיד</th>
					<th>שעות</th>
					<th>נסיעות</th>
					<th>שעות</th>
					<th>נסיעות</th>
					<th>שעות</th>
					<th>נסיעות</th>
					<th>שעות</th>
					<th>נסיעות</th>
					<th>שעות</th>
					<th>נסיעות</th>
					<th>שעות</th>
					<th>נסיעות</th>
					<th>שעות</th>
					<th>נסיעות</th>
					
				</tr>
							
				<tr>   
				   <td> <a href=update_emp.php>123</a></td>
				   <td> אאאא</td>
				   <td> אאאא</td>
				   <td> 123456789</td>
				   <td> ראש צוות</td>
				   
				   <td><input type="text" name="hrsNum11" id="hrsNum11" value="4" size="4" /> 
					   <br>
					   <input type="radio" name="hrstype=1" value="training" checked>הדרכה
					   <input type="radio" name="hrstype=1" value="work">עבודה 
				   </td>
				   <td><input type="text" name="sumTravel11" id="sumTravel11" value="22.5" size="4" />
					   <br>&nbsp; <br>&nbsp; 
				   </td>
				   
				   <td><input type="text" name="hrsNum12" id="hrsNum12" size="4" /> 
					   <br>
					   <input type="radio" name="hrstype=2" value="training" >הדרכה
					   <input type="radio" name="hrstype=2" value="work">עבודה 
				   </td>
				   <td><input type="text" name="sumTravel12" id="sumTravel12" size="4" /> 
					   <br>&nbsp; <br>&nbsp;
				   </td>
				   
				   <td><input type="text" name="hrsNum13" id="hrsNum13" size="4" /> 
					   <br>
					   <input type="radio" name="hrstype=3" value="training" >הדרכה
					   <input type="radio" name="hrstype=3" value="work">עבודה 		
				   </td>						   
				   <td><input type="text" name="sumTravel13" id="sumTravel13" size="4" /> 
					   <br>&nbsp; <br>&nbsp;
				   </td>
				   
				   <td><input type="text" name="hrsNum14" id="hrsNum14" size="4" /> 
					   <br>
					   <input type="radio" name="hrstype=4" value="training" >הדרכה
					   <input type="radio" name="hrstype=4" value="work">עבודה 		
				   </td>				   
				   <td><input type="text" name="sumTravel14" id="sumTravel14" size="4" /> 
					   <br>&nbsp; <br>&nbsp; 
				   </td>
				   
				   <td><input type="text" name="hrsNum15" id="hrsNum15" size="4" /> 
					   <br>
					   <input type="radio" name="hrstype=5" value="training" >הדרכה
					   <input type="radio" name="hrstype=5" value="work">עבודה 							   
				   </td>
				   <td><input type="text" name="sumTravel15" id="sumTravel15" size="4" /> 
					   <br>&nbsp; <br>&nbsp;
				   </td>
				   
				   <td><input type="text" name="hrsNum16" id="hrsNum16" size="4" /> 
					   <br>
					   <input type="radio" name="hrstype=6" value="training" >הדרכה
					   <input type="radio" name="hrstype=6" value="work">עבודה 							   					   
				   </td>
				   <td><input type="text" name="sumTravel16" id="sumTravel16" size="4" /> 
					   <br>&nbsp; <br>&nbsp; 
				   </td>
				   
				   <td><input type="text" name="hrsNum17" id="hrsNum17" value="9" size="4" /> 
					   <br>
					   <input type="radio" name="hrstype=7" value="training" >הדרכה
					   <input type="radio" name="hrstype=7" value="work" checked>עבודה 							   					   
				   </td>
				   <td><input type="text" name="sumTravel17" id="sumTravel17" value="13.5" size="4" /> 
					   <br>&nbsp; <br>&nbsp;
				   </td>		               	               
				</tr>

				<tr>   
				   <td> <a href=update_emp.php>222</a></td>
				   <td> בבבבבב</td>
				   <td> אאאא</td>
				   <td> 987654321</td>
				   <td> דייל</td>
				   
				   <td><input type="text" name="hrsNum21" id="hrsNum21" value="4" size="4" /> 
					   <br>
					   <input type="radio" name="hrsType21" value="training" checked>הדרכה
					   <input type="radio" name="hrsType21" value="work">עבודה 
				   </td>
				   <td><input type="text" name="sumTravel21" id="sumTravel21" value="22.5" size="4" />
					   <br>&nbsp; <br>&nbsp; 
				   </td>
				   
				   <td><input type="text" name="hrsNum22" id="hrsNum22" size="4" value="10"/> 
					   <br>
					   <input type="radio" name="hrsType22" value="training" >הדרכה
					   <input type="radio" name="hrsType22" value="work" checked>עבודה 
				   </td>
				   <td><input type="text" name="sumTravel22" id="sumTravel22" size="4" value="22.5" /> 
					   <br>&nbsp; <br>&nbsp;
				   </td>
				   
				   <td><input type="text" name="hrsNum23" id="hrsNum23" size="4" value="13"/> 
					   <br>
					   <input type="radio" name="hrsType23" value="training" >הדרכה
					   <input type="radio" name="hrsType23" value="work" checked>עבודה 		
				   </td>						   
				   <td><input type="text" name="sumTravel23" id="sumTravel23" size="4" value="22.5"/> 
					   <br>&nbsp; <br>&nbsp;
				   </td>
				   
				   <td><input type="text" name="hrsNum24" id="hrsNum24" size="4" /> 
					   <br>
					   <input type="radio" name="hrsType24" value="training" >הדרכה
					   <input type="radio" name="hrsType24" value="work">עבודה 		
				   </td>				   
				   <td><input type="text" name="sumTravel24" id="sumTravel24" size="4" /> 
					   <br>&nbsp; <br>&nbsp; 
				   </td>
				   
				   <td><input type="text" name="hrsNum25" id="hrsNum25" size="4" /> 
					   <br>
					   <input type="radio" name="hrsType25" value="training" >הדרכה
					   <input type="radio" name="hrsType25" value="work">עבודה 							   
				   </td>
				   <td><input type="text" name="sumTravel25" id="sumTravel25" size="4" /> 
					   <br>&nbsp; <br>&nbsp;
				   </td>
				   
				   <td><input type="text" name="hrsNum26" id="hrsNum26" size="4" /> 
					   <br>
					   <input type="radio" name="hrsType26" value="training" >הדרכה
					   <input type="radio" name="hrsType26" value="work">עבודה 							   					   
				   </td>
				   <td><input type="text" name="sumTravel26" id="sumTravel26" size="4" /> 
					   <br>&nbsp; <br>&nbsp; 
				   </td>
				   
				   <td><input type="text" name="hrsNum27" id="hrsNum27" value="9" size="4" /> 
					   <br>
					   <input type="radio" name="hrsType27" value="training" >הדרכה
					   <input type="radio" name="hrsType27" value="work" checked>עבודה 							   					   
				   </td>
				   <td><input type="text" name="sumTravel27" id="sumTravel27" value="13.5" size="4" /> 
					   <br>&nbsp; <br>&nbsp;
				   </td>		               	               
				</tr>
											
			</table>
					
			<br><br> 
					
			<input type="submit" name="update_hours" value="שמור שינויים" 
						   onClick="doSubmit()" tabindex=1/>			
		</form>	
    </body>
</html>

