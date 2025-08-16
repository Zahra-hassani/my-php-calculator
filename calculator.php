


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
    <!-- <link rel="stylesheet" href="Calc.css"> -->
     <style>
        body{
            height:100vh;
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items:center;
        }
        form{
            width: 30%;
            display:flex;
            flex-direction: column;
            align-items:center;
            gap: 8px;
            background-color:rgb(192, 194, 194);
            padding:8px;
            margin: 12px auto;
            border-radius: 10px;
        }
        form input,select{
            padding: 3px 4px;
            height:30px;
            width:100%;
            border: 1px solid black;
            border-radius: 10px;
            margin:12px 0;
            outline: 0;
        }
        form input:focus{
            outline: 0;
        }
        form label{
            font-family: monospace;
            font-size: 23px;
            margin:2px 0;
        }
        form>button{
            padding:12px 23px;
            background-color:rgb(52, 189, 253);
            border-radius: 8px;
            margin:0 auto;
            color:white;
            border:0;
            font-weight: bold;
        }
        form>button:hover{
            background-color:rgb(18, 161, 197);
            text-shadow:0 0 4px black;
            color:cyan;
            box-shadow:0 0 4px cyan,0 0 4px cyan,0 0 4px cyan,0 0 4px cyan;
        }
        .error{
            color:darkred;
            text-align: center;
            font-size: 23px;
        }
        .result{
            color: green;
            text-align: center;
            font-size: 24px;
        }
     </style>
</head>
<body>
    <form method="post" action=<?php echo $_SERVER["PHP_SELF"]; ?>     >
        <label for="num1">First number</label>
        <input name="num1" placeholder="Enter the first number" type="number">
        <select name="operator" id="">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
            <option value="module">%</option>
        </select>
        <label for="num2">Second number</label>
        <input name="num2" placeholder="Enter the second number" type="number">
        <button>Calculate</button>
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"]=== "POST") {
        $num1 = filter_input(INPUT_POST,"num1",FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 = filter_input(INPUT_POST,"num2",FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        $error = false;
        if (empty($num1) || empty($num2) || empty($operator)) {
            $error = true;
            echo "<p class='error'>Fill all the feilds!</p>";
        }
        if (!is_numeric($num1) && !is_numeric($num2)) {
            $error = true;
            echo "<p class='error'>Enter a number!</p>";
        }
        if (!$error) {
            $value = 0;
            switch ($operator) {
                case "plus":
                    $value= $num1+$num2;
                    break;
                case "minus":
                    $value= $num1-$num2;
                    break;
                case "multiply":
                    $value= $num1*$num2;
                    break;
                case "divide":
                    $value= $num1/$num2;
                    break;
                case "module":
                    $value= $num1%$num2;
                    break;
                default:
                    echo "<p class='error'>Something went wrong!</p>";
                    break;
            }
                echo "<p class='result'>".$value."</p>";   
            
        }
    }
    ?>
</body>
</html>