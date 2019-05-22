<!DOCTYPE html>
<html>
    <head>
        <title>forms</title>
    </head>
    <body>
        <section>
            Welcome
            <?php
            $un=$_GET["reg_un"];
            $pw=$_GET["reg_pass"];
            if($un=="Linoy" && $pw=="11111")
                echo "<h2>Good Morning" . $un . "</h2>";
            else
                echo "<h2>Who are you? you can't get in</h2>";
            ?>
        </section>
    </body>
</html>