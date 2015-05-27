
<!DOCTYPE html>


<html>

    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="contact.css" />  
        <title>WH</title>
    </head>
	
    <body>                 
	
	  <h1>דוח שעות עבור שכר לפי חברות כ"א</h1>
	                
	        <!--  upper menu      !-->
			
            <?php $repSourceFile='salary'; 
			      include 'rep_menu.php';
		    ?>    
	     
	       
	        <table id="contacts">
		            <tr class="table-head">
		                <th>פרוייקט: &nbsp;
						    <select>
								  <option value=""></option>	
								  <option value="projName1">תחבורה ירושלים</option>
								  <option value="projName2">תחבורה חיפה</option>
								  <option value="projName3">מטרונית חיפה</option>
								  <option value="projName4">תחבורה שרון</option>
							</select>
						</th>
						
						<th>חודש הדיווח:&nbsp;
						    <select>
								  <option value=""></option>	
								  <option value="m1">ינואר</option>
								  <option value="m2">פברואר</option>
								  <option value="m3">מרץ</option>
								  <option value="m4">אפריל</option>
								  <option value="m5">מאי</option>
							</select>
							&nbsp;
							<select>
								  <option value=""></option>	
								  <option value="y1">2015</option>
								  <option value="y2">2014</option>
								  <option value="y3">2013</option>
							</select>
						</th>
						<th>ייצוא לאקסל</th>				
		            </tr>		            			            
	        </table>
	
	        <br>        
		    <table id="contacts">
		            
		            <tr class="table-head">
		                <th>חברת כ"א</th> 
		                <th>שם משפחה עובד</th>
		                <th>שם פרטי עובד</th>
		                <th>ת.ז. עובד</th>
		                <th>מספר ימי פעילות</th>
						<th>כמות שעות פעילות 100%</th>
		                <th>כמות שעות נוספות 125%</th>
						<th>כמות שעות נוספות 150%</th>
		                <th>תשלום נסיעות פעילות</th>
						<th>מספר ימי הדרכה</th>
		                <th>כמות שעות הדרכה</th>
						<th>תשלום נסיעות הדרכה</th>
		
		            </tr>
		            
		           <tr>   
		               <td> מנפאואר</td>               
		               <td> אאאא</td>
		               <td> בבב</td>
		               <td> 123456789</td>
		               <td> 12</td>
		               <td>86.5</td>	               
		               <td>1.5 </td>
		               <td>0</td>	               
		               <td>165.6 </td>
		               <td>1 </td>	               
		               <td> 6</td>
		               <td>20.8 </td>
		               
		           </tr>
		           
		           <tr>   
		               <td> מנפאואר</td>               
		               <td> גגג</td>
		               <td> דדדד</td>
		               <td> 023456789</td>
		               <td> 7</td>
		               <td>52</td>	               
		               <td>0 </td>
		               <td>0</td>	               
		               <td>96.6 </td>
		               <td>1 </td>	               
		               <td> 6</td>
		               <td>13.8 </td>
 
		           </tr>

		           <tr>   
		               <td> אתגר</td>               
		               <td> ההה</td>
		               <td> ווו</td>
		               <td> 023456321</td>
		               <td> 8</td>
		               <td>59.5</td>	               
		               <td>0 </td>
		               <td>0</td>	               
		               <td>110.4 </td>
		               <td>1 </td>	               
		               <td> 6</td>
		               <td>13.8 </td>
 
		           </tr>		            
	        </table>
    </body>
</html>

