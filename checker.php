<?php

require 'pdoconn.php';

             $result = getData();
             while ($row = mysqli_fetch_assoc($result)){
                 component($row['c_title'], $row['c_des'], $row['t_name'], $row['c_link']);
             }
            ?>