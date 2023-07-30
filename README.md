![Banner](/images/7.png "banner")

# wordpress
If you can find vulnerability find it 

### Useful information 
* Once you have completely setup the wordpress you can login using
<b>username : theM7 
password : Password123
</b>

* Submit the screenshot of executing the vulnerability to 0xthem7@gmail.com  <b>there is no flag you have to find bugs not flags</b>


# How to setup the lab

* Make sure your databases are up and running fine
`sudo systemctl status mysql`
![SQL](/images/1.png "SQL image")
* If it's disbaled like mine start with the following command 
`sudo systemctl start mysql`
![SQL](/images/2.png "SQL image")
* Check you sql credentials
`sudo mysql_secure_installation`
* Provide password for root it is required later on
![ROOT](/images/3.png "Root")
* Make sure to select **No** on this step
* Login to mysql
![Login](/images/4.png "mysql login")
* Show databases
`show databases;`
![Databases](/images/5.png "Databases")
in your case it may be different
* Note the database which contains user  in my case its **mysql**
`use <database name>`
`show <tables>`
Note the database name and table name
![Databases](/images/6.png "Creds")

* Now make changes according to the creds we get from mysql
![Database wordpress](/images/6.png "Changes")

* Fill the data and you are ready to go
![Database login](/images/8.png "Image")


* Run the server using

`php -S 127.0.0.1:8080 -t . ` 
