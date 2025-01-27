<html>
    <head>
        <title>OFRS Project</title>
                <style>
                  
                    body
                            {
                                background-image:url('./opening-page/frs.jpg');
                                background-repeat:no-repeat;
                                background-size:cover;
                                /* background-position:center; */
                            }

                            table
                            {
                                /* padding: 10px 10px; */
                                width: 400px;
                                /* border-radius:18px; */
                                /* position: relative;
                                 left: 400px;
                                 top: 70px; */
                            }
                            tr
                            {
                                background-color:black;
                                padding: 10px 10px;
                                border-radius:18px;
                                color:white;
                                /* position: relative;
                                 left: 400px;
                                 top: 70px; */
                                
                            }
                </style>
</head>
<body >
    <!-- <img src="images/head1.png" alt="head1 image"><br><br> -->
<table width=100% align=left>
    <tr> <td width="50%">
    <form action="adddept1.php" method="POST">
    <table width=80%  cellspacing=5 cellpadding=5>
     <tr> <td  colspan=2>Staff Details </td> </tr>
     <tr> <td> StaffName</td> <td> <input type=text name=deptname required> </td></tr>
     <tr> <td> StaffLead-Name:</td> <td> <input type=text name=deptlead required > </td></tr>
     <tr> <td> Staff-members:</td> <td> <input type=text name=teamlist required> </td></tr>
     <tr> <td> Password:</td> <td> <input type=text name=deptpassword required> </td></tr>
     <tr> <td> </td> <td> <input type=submit name=Login> </td></tr>
    </table>
    
</form>
</table>
<!-- <table width=100%>
    <tr height=80><td></td></tr>
</table> -->

<!-- <img src="images/head2.png" alt="head2  image"> -->

</body>
</html>
