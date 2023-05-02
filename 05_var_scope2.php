<!--Demonstrating Variable Scopes(Global Scope)-->
<?php
    $gnum=69;
    function local_var()
    {
        $num=67;
        global $gnum;
        echo "Local variable declared under the function is: $num<br/>"; //local variable
        echo "Global variable declared under the function is: $gnum<br/>"; //global variable inside function
    }

    local_var();
    echo "Global variable declared outside the function is: $gnum<br/>"; //global function outside function
?>