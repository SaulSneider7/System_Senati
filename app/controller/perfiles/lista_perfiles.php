<?php
    $sql = "SELECT * FROM perfiles";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $perfiles = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        $perfiles = [];
    }
?>