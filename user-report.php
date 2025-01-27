<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css-files/reporttable.css">
</head>
<body>
            <form method="post" action="user-report1.php">
                <table class=" table-bordered">
              
                  <tbody>
                    <tr>
                      <th>Name</th>
                      <td><input type="text" name="fullname" class="form-control" required></td>
                    </tr>
                    <tr>
                      <th>Mobile Number</th>
                      <td><input type="tel" name="mobilenumber" class="form-control"  placeholder="0123456789"required></td>
                    </tr>
                    <tr>
                      <th>Email-id</th>
                      <td><input type="email" class="form-control" required name="emailid"></td>
                    </tr>
                    <tr>
                      <th>Location</th>
                      <td><textarea class="form-control" required name="location"></textarea></td>
                    </tr>
                    
              
                        <tr>
                            <th>Message</th>
                            <td><textarea class="form-control"  name="message"></textarea></td>
                        </tr>
                        <tr>
                          <th>User-name(Your's registered name)</th>
                          <td><textarea class="form-control" required name="username"></textarea></td>
                      </tr>
              
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Report"  class="btn btn-primary"></td>
                        </tr>
              
                </tbody>
                </table>
                </form>
        
</body>
</html>