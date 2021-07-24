# How to Prevent XSS by PHP Filtering

## Oki i'll write a php code it will be "xss.php" i'll create input and with no filter

### the code will be

```
<?php

// Mahmoud Ashraf
// https://www.facebook.com/mrmahmoudashraf8/

header ("X-XSS-Protection: 1; mode=block");

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
    // i'll echo
    echo '<pre> ' . $_GET[ 'name' ] . '</pre>';


}
?> 
	<html>
		<body>
			
			<style>
.center {
  text-align: center;
  border: 3px solid white;
}
</style>
<div class="center">
  <h2>Let's Prevent Xss</h2>
</div>

<form name="XSS" action="#" method="GET">
    <p>
	Put Your XSS Payload...
	<input type="text" name="name">
	<input type="submit" value="Submit">
    </p>

</form>


</body>
</html>

```
so let's open my apache2 sevrer by **service apache2 start** and i'll type http://localhost/xss.php

![Image of mahmoudashraf1344](https://github.com/mahmoudashraf1344/PreventXSS/blob/main/xss.png)

### so here we go let's move to the next step i'll type "Hello"

![Image of mahmoudashraf1344](https://github.com/mahmoudashraf1344/PreventXSS/blob/main/xss1.png)

### and it's printing "Hello"
### let's type a html code like this `"<h1>Mahmoud</h1>"`

![Image of mahmoudashraf1344](https://github.com/mahmoudashraf1344/PreventXSS/blob/main/xss2.png)

#### so let's move forward to the next step i'll type a javascript payload "xss payload" the most popular one is `<script>alert(1)</script>`

![Image of mahmoudashraf1344](https://github.com/mahmoudashraf1344/PreventXSS/blob/main/xss3.png)

now it's alert **1** now we can steal cookies and doing more and more...

now the parameter "?name=" is vulneravle with xss now how to fix this so i'm not gonna to explain how to block by WAF or rejecting and blocking special character i'm just using the the php filtering the advanced one so let's use **FILTER_SANITIZE_STRING** and i'll update the code

```
// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
    // Feedback for end user
    echo '<pre> ' . filter_var($_GET[ 'name' ], FILTER_SANITIZE_STRING) . '</pre>';
```
as you can see i added **FILTER_SANITIZE_STRING** so let's try to put my xss payload
