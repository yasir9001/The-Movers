<!DOCTYPE html>

<html>
    
<head>
    <link href="admin-style.css" rel="stylesheet" type="text/css">
    
    <title>Admin Panel-The Movers</title>
</head>

<body>
    <h1>Admin Panel</h1>
    

    <div class="main">
        
        
        <div class="left-side">
            
            
            
            
            <div class="insert">
                
                <form action="http://www.example.com/form.php" method="post">
                    <fieldset>
                        <legend>Add a Recored</legend>
                        
                            <label class="title" for="name">Name:</label>
                            <input type="text" name="name" id="name">
                            
                            <br />
                            
                            
                            <label class="title" for="surname">Surname:</label>
                            <input type="text" name="surname" id="surname">
                            
                            <br />
                        
                            
                            <label class="title" for="email">Email:</label>
                            <input type="text" name="email" id="email">
                            <br />
                            
                            
                            <label class="title" for="cont">Contact:</label>
                            <input type="text" name="contact" id="cont">
                            <br />
                            
                            
                            <label class="title" for="pass">Password:</label>
                            <input type="password" name="password" id="pass">
                            
                            <div class="submit"><input type="submit" value="  Add  " /></div>
                    
                    </fieldset>
                            
                        
                            
                            
                </form>
            </div>
            
            
            
            
                <div class="delete">
                
                <form action="http://www.example.com/form.php" method="post">
                    <fieldset>
                        <legend>Remove a Recored</legend>
                        
                            <label class="title" for="name">Delete where ID is:</label>
                            <input type="text" name="del-id" id="name">
                            
                            <div class="submit"><input type="submit" value="Delete" /></div>
                    
                    </fieldset>
                            
                        
                            
                            
                </form>
            </div>
        
            
            
            
            
            
            
            
        </div>
        
        
        
        
        
        
        <div class="right-side">
            
            <div class="record-table">
                 <table width="200" border="1">
                  <tr>
                    <th>ID</th>
                    <th>username</th>
                    <th>password</th>
                  </tr>
<p>
  <?php
while($result=mysqli_fetch_array($record))
{
echo"<tr>";
echo"<td>".$result['ID']."</td>";
echo"<td>".$result['username']."</td>";
echo"<td>".$result['password']."</td>";
}
?>
</p>

            </div>
            
        </div>
    
    
    
    </div>    
    

</body>
</html>