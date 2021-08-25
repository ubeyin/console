<?php
    include_once "../../config.php";

    if ($s == 1) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_REQUEST['code'])) {
                $p324 = mysqli_real_escape_string($server, $_REQUEST['code']);
 
                $p324 = "select * from `$t2` where new = 1";

                if ($uyh = mysqli_query($server, $p324)) {
                  $i = 0;
                    while ($result = mysqli_fetch_assoc($uyh) ) {
                       $i++;
                    }
                   echo $i;
                } else {
                    # code...
                    echo 'FAILED';
                }
            } else {
                echo 'ERROR';
            }

            mysqli_close($server);
        } else {
            echo 'ERROR';
        }
    }
?>