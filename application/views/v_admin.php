<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $this->load->view("_partials_admin/header");
    ?>
    <style>
        div.menu-download {
            float: right;
        }

        .listviewtable {
            display: block;
            width: 50%;
            height: auto;
        }

        .listviewtable:hover {
            opacity: 0.45;
        }

        .listview {
            display: block;
            width: 25%;
            height: auto;
            margin-top:.35rem;
        }

        .listview:hover {
            opacity: 0.45;
        }

        .help-block {
            color: red;
        }
    </style>
</head>

<body>

    <?php
    $this->load->view("_partials_home/loader");
    $this->load->view("_partials_admin/navbar");
    ?>
    <div class="container-fluid page-body-wrapper">
        <?php
        $this->load->view("_partials_admin/leftnav");
        ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <?php
                $this->load->view("_partials_admin/content");
                ?>
                <?php
                $this->load->view("_partials_admin/footer");
                ?>
            </div>
        </div>
    </div>

</body>

</html>