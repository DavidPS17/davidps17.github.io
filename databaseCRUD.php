<?php
$server = "btt7xthk1crkkjjgzel8-mysql.services.clever-cloud.com:3306";
$username = "uccjxpluaheuiatn";
$password = "EpL70aYrrsI5Euzu3x38";
$database = "btt7xthk1crkkjjgzel8";
$charset = "utf8";

$connect = new mysqli($server,$username,$password,$database);



$sql = "select Question, Answer1, Answer2, Answer3, AnswerCorrect from QuestionTable";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "Question:".$row['Question']."|Answer1:".$row['Answer1']."|Answer2:".$row['Answer2']."|Answer3:".$row['Answer3']."|AnswerCorrect:".$row['AnswerCorrect'].";";
    }
}
?>