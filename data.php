<?php
require_once 'places.php';
 
    if (!isset($_GET['province']) && !isset($_GET['district'])) {

        echo "<option value=''>---Select---</option>";

        foreach ($provinces as $option) {
            echo '<option> ' . $option . '</option>';
        }
    }

    if (isset($_GET['province']) && !isset($_GET['district'])) {
        $dis = $districts[$_GET['province']];
        #var_dump($dis);
        echo "<option value=''>---Select---</option>";
        foreach ($dis as $option) {
            echo '<option> ' . $option . '</option>';
        }
    }
    if (isset($_GET['province']) && isset($_GET['district'])) {
        $secs = $sectors [$_GET['province']][$_GET['district']];

        echo "<option value=''>---Select---</option>";

        foreach ($secs as $option) {
            echo '<option> ' . $option . '</option>';
        }
    }


?>