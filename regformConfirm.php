<html>
<head>
    <title>Confirm Registration | BORS</title>
    <link rel="stylesheet" href="databaseView.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
</head>
    <body>
        <div>
            <h1>Barangka Online Registration System</h1>
        </div>
        <div id="pane">
            <div id="content">
                <div>
                    <h2>Student Database</h2>
                    <form>
                       
                        <div id="table" style="overflow:auto;">
                            <table>
                                <thead>
                                    <tr>
                                        <th>LRN</th> 
                                        <th>First Name</th> 
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Sex</th>
                                        <th>Birth Date</th>
                                        <th>Birth Place</th>
                                        <th>Email Address</th>
                                        <th>Landline</th>
                                        <th>Cellphone Number</th>
                                        <th>House Number</th>
                                        <th>Building Name</th>
                                        <th>Street Name</th>
                                        <th>Village Name</th>
                                        <th>Barangay Name</th>
                                        <th>City</th>
                                        <th>ZIP Code</th>
                                        <th>Province</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php
                                        include "borsAdminTable.php";
                                    ?>  
                                </tbody>
                                <tfoot> 
                                </tfoot>
                            </table>
                        </div>
                        <div class=submit>
                            <input class="MyButton" 
                                   type="button" 
                                   value="Back to Admin Homepage" onclick="window.location.href='adminHome.html'"/>
                        </div>   
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            Copyright &copy;2018 BORS-ConnectSix.
        </div>
    </body>
</html>