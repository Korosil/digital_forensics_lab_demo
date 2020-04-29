## In order to be able to execute these three files on a LAMP server, you must first edit them all and fill in the credentials of  MySQL server that are going to be executed on (eg username & password). 
## Otherwise you will not be able to procceed.




### Assuming that you are using a LAMP stack server and as long as the configuration of the three files has been completed, you are advised to copy the whole folder under ```/var/www``` directory. 




#### Execution of the scripts should be SEQUENTIAL.
1. <LAMPserver_ip>/db_configuration/db_create.php
2. <LAMPserver_ip>/db_configuration/db_create_table.php
3. <LAMPserver_ip>/db_configuration/db_add_users.php




##### As long as everything goes as planned, you should see a new database named "ilias_korompilis_demo_db", which consists of a new table named "persons". This table includes three (test) users.

