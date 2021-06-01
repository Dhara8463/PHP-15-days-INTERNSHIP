//Take values from user in checkbox and print as a String.
<html>
    <body>
        <form method="post">
            programming:
            MY<input type="checkbox" name="cbox[]" value="MY" />
            NAME<input type="checkbox" name="cbox[]" value="NAME" />
            IS<input type="checkbox" name="cbox[]" value="IS" />
            DHARA<input type="checkbox" name="cbox[]" value="DHARA" />
            <input type="submit">
        </form>
       <?php
        if($_POST)
        {
        $programming=$_POST['cbox'];
        $string=implode(" ",$programming);
        echo $string;
        }
        ?>
    </body>    
</html>  
 