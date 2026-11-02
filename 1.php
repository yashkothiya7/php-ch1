<html>
    <body>
        <form method="POST">
            Input number1:
            <input type="number" name="n1"><br>
            <input type="submit" name="demo" value="submit">
        </form>
    </body>
</html>

<?php


function sumofdigit($num){
    $sum = 0;
    while($num > 0){
        $sum += $num % 10;
        $num = (int) ($num / 10);
    }
    echo "sum of digit is : $sum";
}

if(isset($_POST['demo'])){
    $num = $_POST['n1'];
    

    sumofdigit($num);
    
}
?>