<!DOCTYPE html>
    <html>
    <head><meta charset="UTF-8">
    <title>calculator</title>
    </head>
    <body>
        <form>
            <input type="text" name="num1" placeholder="Number 1">
            <input type="text" name="num2" placeholder="Number 2">
            <select name="operator">
                <option>Select an Option</option>
                <option>Add</option>
                <option>Sub</option>
                <option>Mul</option>
                <option>Div</option>
            </select>
            <button type="submit" name="submit" value="submit">Calculate</button>
        </form>
        
        <p>The answer is:</p>
        <?php
        if(isset($_GET['submit']))
        {
            $result1=$_GET['num1'];
            $result2=$_GET['num2'];
            $operator=$_GET['operator'];
            switch($operator)
            {
                case "Select an Option":
                echo "Please select an operation";
                break;
                case "Add":
                echo $result1 + $result2;
                break;
                case "Sub":
                echo $result1 - $result2;
                break;
                case "Mul":
                echo $result1 * $result2;
                break;
                case "Div":
                echo $result1 / $result2;
                break;
                
            }

        }
        ?>

        
</body>

    </html>