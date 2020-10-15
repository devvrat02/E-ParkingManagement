# E-ParkingManagement
_______________________________________________________________________________________________________________________________________
Website Mappping                                         
front page                             index.php              
user login /register			login.php/register.php		     -check_login.php //For checking the user is authentic
user dashboard {															
		dashboard		userdashboard		user/index.php  
		bookparking		bookparking				book.php          //book parking according to parking status
		location/path		location/path			path.php  	    //parking location 
		}
---------------------------------------------------------------------------------------------------------------------------------------
admin login				admin_login.php-admincheck.php to the 
admin dashboard       admin/index.php		
		your parking location	admindashboard		      Show the parking location that are in the database 
		vehicals		vehicals.php                      //show details	sh_details.php			slots are book /status empty status			
   	rates				rate.php //Change the price of the parking -upprice.php 
	
------------------------------------------------------------------------------------------------------------------------------

king login //prompt js 			  -kings.php 
king dashboard                -king/index.php					        	
				parkings detais	      -king/park.php    //Show the  parking  details								
				                       --king/slots{update or change}				//Update no of slots in the parking
			                         //print the tables of parkings like Parking user ,password ,Parking admin, no of slots,price
				
		create parking			--add_park.php			add parking in table with// name //slots //admin //location// 
		delete parkings			--del_park.php			//		delete the parking from all database table values
