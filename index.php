<?php

#-----------------------------------------------------------------------
# Comment Gate
#-----------------------------------------------------------------------
#
# A Comment-based If statement for PHP.
# To use it simply define either true or false acording to this table:
#
# +---------+---------+
# |  value  |  string |
# |===================|
# |  true   |   //    | open the gate
# +---------+---------+
# |  false  |   /*/   | close the gate
# +---------+---------+
#
# Add the corresponding string between "###### IF:" and "###### THEN:".
#
#-----------------------------------------------------------------------



###### IF:

	//

###### THEN:

	echo 'Gate is TRUE';

/*/### ELSE:

	echo 'Gate is FALSE';

//*/## ENDIF;

echo '<br>(this is outside the Comment Gate)';
