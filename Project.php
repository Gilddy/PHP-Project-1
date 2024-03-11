<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <input type = 'text' name = 'num1' placeholder = 'Number 1'>    
    <input type = 'text' name = 'num2' placeholder = 'Number 2'> 
    <select name='operator'>
        <option>Add</option>
        <option>Sub</option>
        <option>Div</option>
        <option>Mul</option>
        <option>Mod</option>
        <option>Exp</option>
    </select>
    <br>
    <button type='submit' name='submit' value='submit'>Calculate</button>
    </form>
    <p>The answer is: </p>
    <?php
        if(isset($_GET['submit'])){
            $resuslt1 = $_GET['num1'];
            $resuslt2 = $_GET['num2'];
            $operator = $_GET['operator'];
        }
        switch($operator){
            case 'Add':
                echo  $resuslt1 + $resuslt2;
            break;
            case 'Sub':
                echo  $resuslt1 - $resuslt2;
            break;
            case 'Div':
                echo  $resuslt1 / $resuslt2;
            break;
            case 'Mul':
                echo  $resuslt1 * $resuslt2;
            break;
            case 'Mod':
                echo  $resuslt1 % $resuslt2;
            break;
            case 'Exp':
                echo  $resuslt1 ** $resuslt2;
            break;
            default:
                echo 'Do Choose An Operation';
        }
    ?>
</body>
</html>