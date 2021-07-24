# How to Prevent XSS by PHP Filtering

<h3>Oki i'll write a php code it will be "xss.php" i'll create input and with no filter<h3>

<h3>the code will be<h3>

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
