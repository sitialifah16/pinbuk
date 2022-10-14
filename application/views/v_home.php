<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $this->load->view("_partials_home/header");
    ?>
</head>

<body id="myPage">
    <?php
    $this->load->view("_partials_home/loader");
    $this->load->view("_partials_home/content");
    ?>


    <?php
    $this->load->view("_partials_home/footer");
    ?>
</body>

</html>