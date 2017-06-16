<?php
require_once "dbConnect.php";
// database functions ************************************************

function fDvdInsertToDatabase($asin,$title,$price) {
  $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
  // TODO: Fill in the rest of the function
    $write = fConnectToDatabase('WRITE');
    $statement = $write->query($sql);
    echo $statement . PHP_EOL;

}

function fDeleteFromDvdTitlesDatabase($asin ) {
  $sql = "DELETE FROM dvdtitles WHERE asin=:asin";
  $write = fConnectToDatabase('WRITE');
  $stmt = $write->prepare($sql);
  $stmt->bindParam(':asin',$asin);
  $stmt->execute();
}

function fDvdListFromDatabase() {
      $read = fConnectToDatabase('READ');
      $sql = 'SELECT asin, title, price FROM dvdtitles ORDER BY title';
      // TODO: Fill in the rest of the function
      $statement = $read->query($sql);
      $results = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $results;
}


function fDvdActorListFromDatabase() {
    $read = fConnectToDatabase('READ');
    $sql = 'SELECT actorID, fname, lname FROM dvdActor ORDER BY fname';
    // TODO: Fill in the rest of the function
    $statement = $read->query($sql);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function fDvdActorInsertToDatabase($fname,$lname) {
    $sql = "INSERT INTO dvdActor(fname, lname) VALUES ('$fname', '$lname')";
    // TODO: Fill in the rest of the function
    $write = fConnectToDatabase('WRITE');
    $statement = $write->query($sql);

}
?>
