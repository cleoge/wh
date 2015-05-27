


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
        <form id="add-hours" method="post" action="add_hours.php"  name="form1" id="form1" >

			<h1>דיווח שעות עבודה לפרוייקט</h1>
								
            <!--  upper menu      !-->
			
            <?php $sourceFile='work'; 
			      include 'index_menu.php';
		    ?>
					
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
								  <option value="projWeek1">1 - 26.04.15 - 02.05.15</option>
								  <option value="projWeek2">2 - 03.05.15 - 09.05.15</option>
								  <option value="projWeek3">3 - 10.05.15 - 16.05.15</option>
								  <option value="projWeek4">4 - 17.05.15 - 23.05.15</option>
							</select>
						</td>
						<th>סוג דיווח:</th>
						<!---Define form 
						<td><select>
								  <option value=""></option>	
								  <option value="repType1">הדרכה</option>
								  <option value="repType2">עבודה</option>
							</select>						
						</td> 
						-->
						<td><h3>עבודה </h3></td>					
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
					   <td> <a href=emp_card.php>123</a></td>
					   <td> אאאא</td>
					   <td> אאאא</td>
					   <td> 123456789</td>
					   <td> ראש צוות</td>
					   
					   <td><input type="text" name="hrsNum11" id="hrsNum11" size="4" value="8" disabled /> הדרכה</td>
					   <td><input type="text" name="sumTravel11" id="sumTravel11" size="4" value="20.5" disabled /> </td>
					   
					   <td><input type="text" name="hrsNum12" id="hrsNum12" size="4" value="10"/> </td>
					   <td><input type="text" name="sumTravel12" id="sumTravel12" size="4" value="22.5"/> </td>
					   
					   <td><input type="text" name="hrsNum13" id="hrsNum13" size="4" value="10"/> </td>
					   <td><input type="text" name="sumTravel13" id="sumTravel13" size="4" value="22.5"/> </td>
					   
					   <td><input type="text" name="hrsNum14" id="hrsNum14" size="4" /> </td>
					   <td><input type="text" name="sumTravel14" id="sumTravel14" size="4" /> </td>
					   
					   <td><input type="text" name="hrsNum15" id="hrsNum15" size="4" /> </td>
					   <td><input type="text" name="sumTravel15" id="sumTravel15" size="4" /> </td>
					   
					   <td><input type="text" name="hrsNum16" id="hrsNum16" size="4" /> </td>
					   <td><input type="text" name="sumTravel16" id="sumTravel16" size="4" /> </td>
					   
					   <td><input type="text" name="hrsNum17" id="hrsNum17" size="4" value="5"/> </td>
					   <td><input type="text" name="sumTravel17" id="sumTravel17" size="4" value="22.5"/> </td>		               	               
				   </tr>
				   
				   <tr>   
				   
					   <td> <a href=emp_card.php>222</a></td>
					   <td> בבבבבב</td>
					   <td> אאאא</td>
					   <td> 987654321</td>
					   <td> דייל</td>
					   
					   <td><input type="text" name="hrsNum21" id="hrsNum21" size="4" value="4" disabled /> הדרכה </td>
					   <td><input type="text" name="sumTravel21" id="sumTravel21" size="4" value="20.5" disabled /> </td>
					   
					   <td><input type="text" name="hrsNum22" id="hrsNum22" size="4" value="10"/> </td>
					   <td><input type="text" name="sumTravel22" id="sumTravel22" size="4" value="22.5"/> </td>
					   
					   <td><input type="text" name="hrsNum23" id="hrsNum23" size="4" value="10"/> </td>
					   <td><input type="text" name="sumTravel23" id="sumTravel23" size="4" value="22.5"/> </td>
					   
					   <td><input type="text" name="hrsNum24" id="hrsNum24" size="4" value="13" </td>
					   <td><input type="text" name="sumTravel24" id="sumTravel24" size="4" value="22.5"/> </td>
					   
					   <td><input type="text" name="hrsNum25" id="hrsNum25" size="4" /> </td>
					   <td><input type="text" name="sumTravel25" id="sumTravel25" size="4" /> </td>
					   
					   <td><input type="text" name="hrsNum26" id="hrsNum26" size="4" value="5" /> </td>
					   <td><input type="text" name="sumTravel26" id="sumTravel26" size="4" value="22.5"/> </td>
					   
					   <td><input type="text" name="hrsNum27" id="hrsNum27" size="4" /> </td>
					   <td><input type="text" name="sumTravel27" id="sumTravel27" size="4" /> </td>		               	               
					   
				   </tr>
				   
				   <tr>   
					   <td> <a href=emp_card.php>333</a></td>
					   <td> גגגג</td>
					   <td> גגגג1</td>
					   <td> 987654320</td>
					   <td> דייל</td>
					   
					   <td><input type="text" name="hrsNum31" id="hrsNum31" size="4" /> </td>
					   <td><input type="text" name="sumTravel31" id="sumTravel31" size="4" /> </td>
					   
					   <td><input type="text" name="hrsNum32" id="hrsNum32" size="4" /> </td>
					   <td><input type="text" name="sumTravel32" id="sumTravel32" size="4" /> </td>
					   
					   <td><input type="text" name="hrsNum33" id="hrsNum33" size="4" /> </td>
					   <td><input type="text" name="sumTravel33" id="sumTravel33" size="4" /> </td>
					   
					   <td><input type="text" name="hrsNum34" id="hrsNum34" size="4"  </td>
					   <td><input type="text" name="sumTravel34" id="sumTravel34" size="4" /> </td>
					   
					   <td><input type="text" name="hrsNum35" id="hrsNum35" size="4" value="13"/> </td>
					   <td><input type="text" name="sumTravel35" id="sumTravel35" size="4" value="22.5" /> </td>
					   
					   <td><input type="text" name="hrsNum36" id="hrsNum36" size="4" value="5" /> </td>
					   <td><input type="text" name="sumTravel36" id="sumTravel36" size="4" value="22.5"/> </td>
					   
					   <td><input type="text" name="hrsNum37" id="hrsNum37" size="4" value="5" /> </td>
					   <td><input type="text" name="sumTravel37" id="sumTravel37" size="4" value="22.5" /> </td>		               	               
				   </tr>		
			</table>
	        <br><br> 
	        <input type="submit" name="add_hours" value="שמור דיווח שעות עבודה" 
	               onClick="doSubmit()" tabindex=1/>
	    </form>
    </body>
</html>

