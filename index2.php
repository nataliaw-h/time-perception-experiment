
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="mystyle.css">
    <title>Experiment</title>
</head>

<body>	

<footer>
    <p>&copy 2022 Natalia Woropay-Hordziejewicz | email: <a href="mailto:nataliaworopay@gmail.com"><font color = "green"> nataliaworopay@gmail.com</font></a></p>
</footer>

<div id="6">
    <section2>
        <center><font size="25">Click NEXT to go to the second experiment.</font></center>
        <p><center> <font size="5"><button style=" width: 400px; height: 100px; background-color: #e3fbe3; border-radius: 40%" onclick="secondStudy()">DALEJ</font></button></center></p>
    </section2>
</div>

<script>
    document.getElementById('6').style.visibility='visible';
    var id;
    function secondStudy(){
        id = "<?php $id = $_GET['id']; echo $id; ?>";
        window.location.href = `index3.php?id=${id}`;
    }
</script>


<?php

$id = $_GET['id'];
$w1 = $_GET['w1'];
$w2 = $_GET['w2'];
$w3 = $_GET['w3'];
$w4 = $_GET['w4'];
$w5 = $_GET['w5'];

$servername = "localhost";
$username = "id18564971_timetest";
$password = "Time.test2223";
$dbname = "id18564971_time";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO wyniki (id, w1, w2, w3, w4, w5)
VALUES ('$id', '$w1', '$w2', '$w3', '$w4', '$w5')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    echo "";
}   //else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    //}

$conn->close();
?>

</body>
</html>
  
