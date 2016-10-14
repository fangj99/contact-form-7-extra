# contact-form-7-extra
Change receipent's email according to the radio group's selection in contac-form-7

These plugin of wordpress can help you change receipent's email according to the radio group's selection in contac-form-7


##Modification
###change the form id accordingly, mine is 469
```
if (469 == $WPCF7_ContactForm->id()) 
```

###change radio box group name accordingly, our name is ['your-query'] in the contact-form-7
```
$query = array_values( $data['your-query'])[0];
```
###change if else block accordingly to set your own email address and condition
```
			if ($query == "Partnership") {
				$mail['recipient'] = "Partnership <partnership@usens.com>";
			}elseif ($query == "Press"){
				$mail['recipient'] = "Press <press@usens.com>";
			}elseif ($query == "Developers"){
				$mail['recipient'] = "Developers <developers@usens.com>";
			}	
```


##installation
After modification, you can put folder "contact-form-7-extra" into  "wp-content/plugins" then activate the plugin in wordpress's admin

##debug
You can use function my_log_file to watch any object's detail in the log file, currently, we set log file in /tmp, you can change it to anywhere you like


```
$error_dir = '/tmp/php_error.log';
```

```
my_log_file($mail, '' );
my_log_file( $WPCF7_ContactForm , '' );
my_log_file( $data ,'');
my_log_file(array_values( $data['your-query'])[0] ,'');
```

