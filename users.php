<?php
include_once "library/conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- start head section -->
    <?php
    include_once "library/head.php";
    ?>
    <!-- end head section -->
    <style>
        /* Sidebar and content layout adjustment */
        body {
            margin-left: 250px; /* Adjust according to the sidebar width */
        }

        /* Sidebar positioning */
        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px; /* Adjust the width as needed */
            height: 100vh;
            z-index: 10;
        }

        /* Ensure content stays to the right of the sidebar */
        #content {
            margin-left: 150px; /* Adjust according to the sidebar width */
            padding: 20px;
        }

        /* Add margin to the main content */
        .card-body {
            margin-top: 20px;
        }

        /* Table layout */
        .table {
            width: calc(100% - 250px); /* Subtract the sidebar width */
        }
    </style>
</head>
<body>

<!-- start Navbar section -->
<?php
include_once "library/navbar.php";
?>
<!-- end Navbar section -->

<!-- start Sidebar section -->
<?php
include_once "library/sidebar.php";
?>
<!-- end Sidebar section -->

<!-- start main section -->
<div id="content">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" id="example">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Your data rows will go here -->
                    <!-- Example data row -->
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end main section -->

<!-- start script section -->
<?php
include_once "library/script.php";
?>
<!-- end script section -->

</body>
</html>
