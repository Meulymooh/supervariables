# PHP Global Supervariables

No link. PHP exercise, the server-related instructions won't work.

## What I learned

### About PHP

* Post / Get: https://www.w3schools.com/php/php_forms.asp
* Upload file: https://www.w3schools.com/php/php_file_upload.asp
* Set cookie: https://www.w3schools.com/php/php_cookies.asp
* Check server info: https://www.w3schools.com/php/php_superglobals.asp
* Check environment info: http://www.cramerz.com/php/php_env/
* Associative arrays (for key => value instruction): https://www.w3schools.com/php/func_array.asp
* Session: https://www.w3schools.com/php/php_sessions.asp
* Login: https://www.tutorialspoint.com/php/php_login_example.htm
* ob_start(): https://www.geeksforgeeks.org/php-ob_start-function/

### About Bootstrap

* Tabs: https://www.w3schools.com/bootstrap/bootstrap_tabs_pills.asp
* Signin form: https://getbootstrap.com/docs/4.1/examples/sign-in/

## Difficulties

### Session

The hardest part for me was to save the session data. The logic was ok but I didn't use associative arrays (just arrays with values). It took me a little while to figure that out.

### Login

After entering the right username and password, I wanted to redirect the user to the setup page automatically but got the following error message: "PHP redirect Cannot modify header information". To solve the problem, I added the "ob_start()" function to enable output buffering.

## Feedback

I read a lot of documentation about PHP for two whole days before starting the exercises and I made my own Cheat Sheet because writing also helps me learn. I think it's been very useful and the exercise was completed in a smooth way.

I've also decided not to display "Hello [username]" after logging in. I redirect the user to the setup page instead. It seems more consistent and adds a link to all the pages I've created.

## Layout

I first didn't follow the "tab" requirement in the "bonus" part because I found it nicer to work in a bootstrap table instead. But it got tricky when I inserted the SERVER and ENVIRONMENT variables (too much information messing up with the layout).

