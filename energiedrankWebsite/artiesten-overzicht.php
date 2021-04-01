

<!DOCTYPE html>
<html lang="nl" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="language" content="nl">
  <meta name="description" content="Vitality, website">
  <meta name="keywords" content="Vitality, energiedrank, website">
  <meta name="author" content="Mica Paulo, Sijme Heemskerk, Mike van Duyvenbode, Dinand Dummer">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Artiesten overzicht</title>
  <link rel="stylesheet" type="text/css" href="./css/artiesten-overzicht.css">
</head>

<body>
  <header><img class="logo" class="logo" src="./images/mini-logo.gif" alt=logo""></header>
  <details>
    <summary class="hamburger-icon">&#9776;</summary>
    <nav class="mobile-nav">
      <ul>
        <li><a href="homepage.php">Homepage</a></li>
        <li><a href="Evenementen-overzicht.php">Events</a></li>
        <li><a href="artiesten-overzicht.php">Artiesten</a></li>
        <li><a href="producten.php">Producten</a></li>
        <li><a href="aanbiedingen-overzicht.php">Aanbiedingen</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="overons.php">Over Ons</a></li>
      </ul>
    </nav>
  </details>
  <nav class="bigscreen-nav">
    <ul>
      <li><a href="homepage.php">Homepage</a></li>
      <li><a href="Evenementen-overzicht.php">Events</a></li>
      <li><a href="artiesten-overzicht.php">Artiesten</a></li>
      <li><a href="producten.php">Producten</a></li>
      <li><a href="aanbiedingen-overzicht.php">Aanbiedingen</a></li>
      <li><a href="faq.php">FAQ</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="overons.php">Over Ons</a></li>
    </ul>
  </nav>
  <section class="title-image-container">
    <h1>Wie komen er allemaal</h1>
  </section>

  <section class="artiesten1">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "energy";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$artiesten = "SELECT naam FROM artiesten";
if ($result = $conn->query($artiesten)) {
  while ($row = $result->fetch_array(MYSQLI_BOTH)) {
    echo "$artiesten"
  }
}
?>
  </section>

  <section class="artiesten2">

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "energy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT naam FROM artiesten";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo " . $row["naam"]. ""<br>";
  }
}


?>
  </section>










  <!--Niet onder deze groep code zetten! Boven wel!-->
  <p class="copyright">© 2021 Vitality Energy. All rights reserved</p>
  <section class="backgroundImage-container">
    <img class="website-background" src="./images/background.png" alt="website-background">
    <img class="mobile-background" src="./images/mobile-achtergrond.png" alt="mobile-background">
  </section>
</body>

</html>