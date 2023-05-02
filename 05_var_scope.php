<!--Demonstrating Variable Scopes (Local Scope)-->
<?php
    function local_var()
    {
        $num=67;
        echo "Local variable declared under the function is: $num";
    }

    local_var();
?>