<!DOCTYPE html>
    <html>
    <head><meta charset="UTF-8">
    <title>calculator</title>
    </head>
    <body>
        <form>
<input type="text" name="num1" placeholder="Number 1">
<input type="text" name="num2" placeholder="Number 2">
<button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The answer is:</p>
        <?php
        if(isset($_GET['submit']))
        {
            $result1=$_GET['num1'];
            $result2=$_GET['num2'];
            echo $result1 + $result2;
        }
        ?>
        </body>

</html>