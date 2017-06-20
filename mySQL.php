<?php
<<<<<<< HEAD
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

function listDVDAndActors()
{
    $read = fConnectToDatabase('READ');
    $sql = "select dt.title, a.fname, a.lastname from dvdtitles dt inner join dvdActors da on da.asin = dt.asin inner join Actors a on a.actorID = da.actorID";
    $statement = $read->query($sql);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $results;

}

=======
// database functions ************************************************

function fInsertToDatabase() {
  $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
  // TODO: Fill in the rest of the fuction
}

function fDeleteFromDatabase() {
  $sql = "DELETE FROM tblCustomers WHERE CustID=$deleteID";
  // TODO: Fill in the rest of the fuction
}

function fListFromDatabase() {
  $sql = 'SELECT custID, nameF, nameL FROM tblCustomers ORDER BY CustID';
  // TODO: Fill in the rest of the fuction
}
>>>>>>> 2e34a21fbe6558dadca1afba9666d79050003e80
?>
