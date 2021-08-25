<?php
   $s = 0;
   $hostname = "remotemysql.com:3306";
   $dbname = "JTS0aupMYp";
   $username = "JTS0aupMYp";
   $password = "CItvVSACbc";

   $server = mysqli_connect($hostname, $username, $password, $dbname);

   if (!$server) {
       $error = mysqli_connect_error();
       echo 0;
       $s = 0;
   } else {
       $s = 1;
   }

   $t1 = "console-user";
   $t2 = "console-analytics";

   $table562 = "CREATE TABLE `$t1` (
    `id` int(8) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `info` varchar(1000) NULL,
    `disable` tinyint(1) NOT NULL DEFAULT '0',
    `verified` tinyint(1) NOT NULL DEFAULT '0',
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB;
 
   ALTER TABLE $t1 AUTO_INCREMENT = 10101010;";

 if (mysqli_query($server, $table562)) {
     # code...
 } else {
     # code...
 }

 $pr562 = "CREATE TABLE `$t2` (
    `id` int(8) NOT NULL,
    `user` tinyint(1) NOT NULL DEFAULT '0',
    `new` tinyint(1) NOT NULL DEFAULT '0',
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB;";

 if (mysqli_query($server, $pr562)) {
     # code...
 } else {
     # code...
 }

 if (empty($_SERVER['CONTENT_TYPE'])) {
     $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded";
 }

 /* INSERT INTO `console-user` (`id`, `username`, `password`, `info`, `disable`, `verified`) VALUES (NULL, 'Ubeyin Collaborator', 'ubeyin', 'admin', '0', '0');  */
 /* INSERT INTO `console-profile` (`id`, `client`, `password`, `name`, `birth`, `info`, `call`, `session`) VALUES (NULL, '10101010', 'ubeyin', 'Md nissndf', 'gfbfgb', 'gfbfg', '565', '2021'); */
?>