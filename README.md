# login_register_using-php

#### This is a login and register file using php, it allows you to register first and then login on localhost only. if you are not using localhost then change server, username and password in config.php file.

#### Create a databese named "login" and then create a table named "users" in it.

##### users -> there are 4 column i) id ii) username iii) password iv) created_at
##### id with auto-increment, type -> int, length -> 4
##### username, type -> varchar, length -> 50
##### password, type -> varchar, length -> 255
##### created_at, type -> datetime, default -> current_timestamp()

#### After creating table, its done, you have created a login_register file but remember that hashed value of passwords are stored in table instead of original passwords.
