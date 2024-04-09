

    <?php  $today=getdate();
    $weekday=$today['weekday'];
    $numberOfTheday= $today['wday'];
    $month= $today['month'];
    $year= $today['year'];
    
    
    
    function convertsToItalian($weekday){
    switch($weekday){
case "Tuesday":
return "Martedi";

default:
return "error";
    }  
    }

    $italianday= convertsToItalian($weekday)
      ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>
        Today is :
    </h1>
  <?php echo $italianday . " " . $numberOfTheday . " " . $month . " " . $year;  ?>
       </body>
</html>