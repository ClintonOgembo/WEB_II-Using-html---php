<?php
// set cookies 
/* syntax 
          setcookie(name-string, value-string, expire-integer, path-string, domain-string, secure-boolean, httponly-boolean)
*/
setcookie("user_name", "M.Masood", time()+ 180,'/',"localhost",1,1 );  
setcookie("user_password", "abcd1234", time()+ 180,'/',"localhost",1,1 );  
echo 'the cookie has been set for 180 seconds<br>'; 

// Read or Accsess Cookie values.  
// Print all cookies
print_r($_COOKIE);

// Access specific cookies
echo "<br> User name is " . $_COOKIE['user_name'];
echo "<br> User Password is " . $_COOKIE['user_password'];

// To delete a cookie we set the cookie to a past time using the setcookie() function.
// syntax: setcookie(name,time()-3600);

// Set the expiration date to one second ago 
setcookie("user_name", "Mr.Masood", time()-1,"/"); 
setcookie("user_password", "xyzbcd1234", time()-1,"/");  
echo " Cookies has been delete….<br>"; 

print_r($_COOKIE);
 

?> 