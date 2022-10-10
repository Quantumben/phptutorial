<html>

<body>

    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        // collect value of input field
        $name = $_GET['fname'];

        if (empty($name)) {
            echo "Name is empty";
        }
         
        if(!empty($name)){
            echo $name;
        }
    

    }
    ?>

</body>

</html>