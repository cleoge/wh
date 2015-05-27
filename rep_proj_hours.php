
<!DOCTYPE html>


<html >

    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="contact.css" />  
        <title>WH</title>
    </head>
    <body>                 
	        <h1>דוח סיכום שעות לפרוייקט</h1>
	        	        
	        <!--  upper menu      !-->
			
            <?php $repSourceFile='hours'; 
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
						
						<th>ייצוא לאקסל</th>				
		            </tr>
		            
	
		            
	        </table>
	
	        <br>        
		    <table id="contacts">
		            
		            <tr class="table-head">
		                <th>חודש-שנה</th> 		                
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
		               <td> נובמבר 2014</td> 
                       <td> 716</td>
		               <td>5446</td>	               
		               <td>138.75</td>
		               <td>99.75</td>	               
		               <td>9822</td>
		               <td>132 </td>	               
		               <td> 754</td>
		               <td>1991.8 </td>					   		              		               
		           </tr>
		           
		           <tr>   
		               <td> אוקטובר 2014</td>               		               
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
		               <td> ספטמבר 2014</td>               		               
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

