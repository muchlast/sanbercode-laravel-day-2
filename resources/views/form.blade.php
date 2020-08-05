<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sanbercode</title>
</head>
<body>

        <!--menu website-->
     
    <img src="https://blog.sanbercode.com/wp-content/uploads/2019/01/untitled.png" alt="logo sanberscode" width="210">
    
        <h1>Buat Account Baru!</h1>
            <h2>Sign Up Form</h2>
        <!--Form nama-->
        <form action="/selamat" method='post'>
        @csrf
        <label for="fn">First Name: </label>
    <br><br>
        
            <input type="text" id="fn" name='namad'>
        
        <br><br>    
        <Label for="ln">Last Name: </Label>
    <br><br>
        
            <input type="text" id="ln" name='namab'>
        
<br><br>
        <!--Form Gender-->
    <label>Gender:</label>
        <br><br>
        <input type="radio" name="Gender" value="0"> Male <br>
        <input type="radio" name="Gender" value="1"> Female <br>
        <input type="radio" name="Gender" value="2"> Other <br>

        <br>
        <!--Form Nationality-->
    <label>Nationality:</label><br><br>
        <select>
            <option value="indo">Indonesia</option>
            <option value="luar">Luar Indonesia</option>
        </select>
        <br>
        <br>

        <!--Form Language-->
    <label>Language Spoken</label>
        <br><br>
        <input type="checkbox" name="lang" value="0"> Bahasa Indonesia <br>
        <input type="checkbox" name="lang" value="1"> English <br>
        <input type="checkbox" name="lang" value="2"> Other <br>
       <br>
        <!--Form bio-->
        
    <label for=bio>Bio:</label>
        <br><br>
        <textarea cols="20" rows="10" id="bio"></textarea>
        
        <br>
        
        <input type="submit" value="Sign Up">
    </form>
    
</body>
</html>