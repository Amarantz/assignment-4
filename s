[33mcommit 1dd5110c9b504e0fd2e2318c36f765518d5b3a4c[m
Author: darkmist <me@donbstringham.us>
Date:   Mon Jun 12 12:47:33 2017 -0600

    Create mySQL.php

[1mdiff --git a/MySQL.php b/MySQL.php[m
[1mdeleted file mode 100644[m
[1mindex ed50af7..0000000[m
[1m--- a/MySQL.php[m
[1m+++ /dev/null[m
[36m@@ -1,18 +0,0 @@[m
[31m-<?php[m
[31m-// database functions ************************************************[m
[31m-[m
[31m-function fInsertToDatabase() {[m
[31m-  $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";[m
[31m-  // TODO: Fill in the rest of the fuction[m
[31m-}[m
[31m-[m
[31m-function fDeleteFromDatabase() {[m
[31m-  $sql = "DELETE FROM tblCustomers WHERE CustID=$deleteID";[m
[31m-  // TODO: Fill in the rest of the fuction[m
[31m-}[m
[31m-[m
[31m-function fListFromDatabase() {[m
[31m-  $sql = 'SELECT custID, nameF, nameL FROM tblCustomers ORDER BY CustID';[m
[31m-  // TODO: Fill in the rest of the fuction[m
[31m-}[m
[31m-?>[m
[1mdiff --git a/mySQL.php b/mySQL.php[m
[1mnew file mode 100644[m
[1mindex 0000000..ed50af7[m
[1m--- /dev/null[m
[1m+++ b/mySQL.php[m
[36m@@ -0,0 +1,18 @@[m
[32m+[m[32m<?php[m
[32m+[m[32m// database functions ************************************************[m
[32m+[m
[32m+[m[32mfunction fInsertToDatabase() {[m
[32m+[m[32m  $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";[m
[32m+[m[32m  // TODO: Fill in the rest of the fuction[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32mfunction fDeleteFromDatabase() {[m
[32m+[m[32m  $sql = "DELETE FROM tblCustomers WHERE CustID=$deleteID";[m
[32m+[m[32m  // TODO: Fill in the rest of the fuction[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32mfunction fListFromDatabase() {[m
[32m+[m[32m  $sql = 'SELECT custID, nameF, nameL FROM tblCustomers ORDER BY CustID';[m
[32m+[m[32m  // TODO: Fill in the rest of the fuction[m
[32m+[m[32m}[m
[32m+[m[32m?>[m
