<html>
<head>
    <title>Admin Classes | BORS</title>
    <link rel="stylesheet" href="classes.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" >
</head>
    <body>
        <div>
            <h1> Barangka Online Registration System</h1>
        </div>
        <div id="pane">
        <div id="content">
            <div>
                <h2>Student Classes</h2>
                <form>
                    <div class=submit>
                        <input class="MyButton" 
                               type="button" 
                               value="Back to Admin Homepage" onclick="window.location.href='adminHome.html'"/>
                        <input class="MyButton" 
                               type="button" 
                               value="Create New Classes" onclick="window.location.href='regformClasses.html'"/>
                    </div>  
                     

                    <div id="table" style="overflow:auto;">
                        <table>
                            <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Grade Level</th>
                                    <th>Subject</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include "borsClassAdminTable.php"
                                 ?>
                            </tbody>
                            <tfoot> 
                            </tfoot>
                        </table>
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