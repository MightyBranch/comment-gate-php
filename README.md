Comment Gate for PHP
=========

A Comment-based **If Statement** for PHP.

Comment Gate is a simple template to convert comments into **If Statements** in PHP.

You can use it when you are developing something and you want to quickly toggle between 2 blocks of code, while you decide which one you want to keep. Without the need to use an if statement.

Installation
-------------
Just copy and paste the contents of the template to any PHP file where you want to use it.

Usage
-------------- 

Simply define the condition value acording to this table:

| Value        | String           | Why |
| :-------------: |:-------------:| :-----:|
| true      | // | looks like an open gate |
| false  | /*/      | looks like a closed gate |

Add the corresponding string between `###### IF:` and `###### THEN:` like this:

````php
###### IF:

	//

###### THEN:

	// First block of code
	echo ("something here");

/*/### ELSE:

	// Second block of code
	echo ("something different here");

//*/## ENDIF;
```

In the example above, the first block will be executed because the gate string is `//`.

To run the second block instead, just replace the string between `###### IF:` and `###### THEN:` with `/*/`.

License
----

[MIT](http://opensource.org/licenses/MIT)
