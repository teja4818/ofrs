<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
        }
        /* body{
           
            background-image: url('opening-page/ad3.png');
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }
        ul
        {
            display: flex;
            flex-direction: row;
            justify-content:space-around;
            position: relative;
            top: 20px;
           
        }
         ul li{
          display: flex;
          flex-direction: row;
          justify-content:space-around;
        }
        li a{
            color: white;
            padding: 12px 15px;
            background-color:black;
            border-radius: 10px;
        } */
        body,html {
  margin: 0;
  font: bold 14px/1.4 'Open Sans', arial, sans-serif;
  background: #000;
}
ul { 
  margin: 150px auto 0; 
  padding: 0; 
  list-style: none; 
  display: table;
  width: 600px;
  text-align: center;
}
li { 
  display: table-cell; 
  position: relative; 
  padding: 15px 0;
}
a {
  color: #fff;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 0.15em;
  
  display: inline-block;
  padding: 15px 20px;
  position: relative;
}
a:after {    
  background: none repeat scroll 0 0 transparent;
  bottom: 0;
  content: "";
  display: block;
  height: 2px;
  left: 50%;
  position: absolute;
  background: #fff;
  transition: width 0.3s ease 0s, left 0.3s ease 0s;
  width: 0;
}
a:hover:after { 
  width: 100%; 
  left: 0; 
}
@media screen and (max-height: 300px) {
	ul {
		margin-top: 40px;
	}
}

        

    </style>
</head>
<body>
    <nav>
        <div class="options">
            <ul>
            <li><a href="assignedteam.php">Allocate Team</a></li>
            <li><a href="adminupdatestatus.php">Update Status</a></li>
            <li><a href="adminchangepass.php">Account Settings</a></li>
            <li><a href="managestaff.php">Manage Team</a></li>
            <li><a href="index.html">LOGOUT.</a></li>
          </ul>
       </div>
    </nav>
</body>
</html>