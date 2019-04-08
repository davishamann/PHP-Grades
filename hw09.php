<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="hw09.css"> 
</head>
<body>

<form action="hw09.php" method="post">
<h1> Select grade to list: </h1>
<input type="radio" name="grade" value="A">A <br>
<input type="radio" name="grade" value="B">B <br>
<input type="radio" name="grade" value="C">C <br>
<input type="radio" name="grade" value="D">D <br>
<input type="radio" name="grade" value="F">F <br>
<input type="submit" name="submit" value="Submit"/>
</form>

<?
$radio=$_POST['grade'];
if (isset($_POST['submit'])){
    print '<table>';
    print '<tr>';
    print '<th> Name </th>';
    print '<th> Grade </th>';
    print '</tr>';
    $grades = file("student.grades.txt");
    $names= file("student.names.txt"); 
    foreach($grades as $i=>$score){
    
    if($radio=="A" and $score>=90){
        print "<tr>";
        print "<td> $names[$i] </td><br>";
        print "<td> $grades[$i] </td><br>";
        print "</tr>";
    }  


    if($radio=="B" and $score>=80 and $score <90){
        print "<tr>";
        print "<td> $names[$i] </td><br>";
        print "<td> $grades[$i] </td><br>";
        print "</tr>";
    }   


    if($radio=="C" and $score>=70 and $score<80){
        print "<tr>";
        print "<td> $names[$i] </td><br>";
        print "<td> $grades[$i] </td><br>";
        print "</tr>";
    }   


    if($radio=="D" and $score>=60 and $score <70){
        print "<tr>";
        print "<td> $names[$i] </td><br>";
        print "<td> $grades[$i] </td><br>";
        print "</tr>";
    }   


    if($radio=="F" and $score>=0 and $score <60){
        print "<tr>";
        print "<td> $names[$i] </td><br>";
        print "<td> $grades[$i] </td><br>";
        print "</tr>";
    }
    

}
print '</table>';
}



?>
</body>
</html>