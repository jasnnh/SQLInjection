# SQLInjection
This is a SQL injection example

SQL Injection is getting malicious code executed by injecting it into normal code. for example a user login using their username and password
and the hacker injects a small code into the login that runs with the normal code by doing this the hacker can steal data and also do irreversible
damage such as destroying tables and databases.

In this example we use the ' or ''=' code to return a true statement when logging in for both username and password fields, so even if we don't enter
the correct username and password it will always return true tricking the system to allow us to login.

if you look at the login.php i commented out 2 lines of code
//$name = mysqli_real_escape_string($link, $name);
//$pass = mysqli_real_escape_string($link, $pass);

this actually prevents SQL injection, it removes the symbols and leaves just the string part of the string making SQL injection not possible.

![Screenshot](https://github.com/jasnnh/SQLInjection/blob/main/ss.PNG)

this login is using the code ' or ''=' as the username and password.
if we wanted to do more damage we can use the code DROP to drop the tables and if no backup then all the data is gone.
