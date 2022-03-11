1.Create a databases and then import the MobileCRUDAPI/smreader_mobiles.sql file on it

2.Create a databases and then import the MobileList/smreader_mobile_Sync.sql file on it

3.Change the config parameters in the MobileList/dbcontroller.php file as per yours

4.Change the config parameters in the MobileCRUDAPI/dbcontroller.php file as per yours

5.Add Remote API(http://localhost/MobileCRUDAPI/mobile/list/) in MobileList/dbcontroller.php

6.Add MobileList/MobSync.php to cron job(set scheduling to once per minute)

7.Use these endpoints to perform CRUD
        http://localhost/MobileCRUDAPI/mobile/create/
        
        http://localhost/MobileCRUDAPI/mobile/update/YOUR_PRODUCT_ID
        
        http://localhost/MobileCRUDAPI/mobile/list/
        
        http://localhost/MobileCRUDAPI/api/mobile/delete/YOUR_PRODUCT_ID 

8.Use http://localhost/MobileList/MobileList.php (in browser) to view list
