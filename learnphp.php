<html>
<head>
  <title>PHP Information Gathered:</title>
</head>
<body>
  
  <?php
    $usersName = $_POST['name'];
    $addressName = $_POST['address'];
    $cityName = $_POST['city'];

    echo '<p>Customer Info:</p>';
    echo $usersName . "<br />";
    echo $addressName . "<br />";
    echo $cityName . "<br />";

    echo "<br />";

    $message = 
    <<<EOD
      The customers name is 
      $usersName, 
      and the customer lives in 
      $addressName, $cityName<br />
EOD;

    echo $message;

    define('PI', 3.14);
    echo PI;

    echo "<br />";

    if(5 == 10) {
      echo '<p>True</p>';
    } else {
      echo '<p>5 is not equal to 10</p>';
    };

    $numOfOranges = 4;
    $numOfBananas = 36;

    if($numOfOranges > 25 || $numOfBananas > 30) {
      echo '<p>25% Discount!</p>';
    } else {
      echo '<p>No Discount</p>';
    };
    
    echo "<br />";

    $num = 0;

    while($num < 20) {
      $num++;
      echo $num . '<br />';
    };

    echo "<br />";

    for($num = 1; $num <= 20; $num++) {
      echo $num . '<br />';
    };

    $bestFriends = array('Jack', 'John', 'Radio');
    for($num = 0; $num < sizeof($bestFriends); $num++) {
      echo $bestFriends[$num] . "<br />";
    };

    foreach($bestFriends as $friend) {
      echo $friend . "<br />";
    };

    function addNumbers($num1, $num2) {
      echo $num1 + $num2;
    };

    addNumbers(2, 2);
  ?>

</body>
</html>