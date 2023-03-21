<html>
    <body>
<?php
    $name="John Smith";
    $age=56;
    function display(){
    global $name,$age;
    echo "My name is $name and my age is $age";
    }
    display();
    function display1(){
        global $name,$age;
        $GLOBALS['name']="BlackAdam";
        echo "<br>" .$GLOBALS['name']."<br>";
    }
    display1();
    display();
    
    ?>
    </body>
</html>
