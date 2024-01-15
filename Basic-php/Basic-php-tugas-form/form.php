<!DOCTYPE html>
<html>
    <head>
        <title> formulir</title>
    </head>
    <body>
        <h1> Buat Account Baru </h1>
        <h2> Sign Up Form </h2>
       <form method="post" action="welcome.php">
        <label for="firstname"> first name :</label><br>
        <input type="text" name="firstname"><br>
        <label for="lastname"> Last name :</label><br>
        <input type="text" name="lastname"><br>
        <p>Gender</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">male </label><br>
            <input type="radio" id="Female" name="gender" value="Female">
            <label for="Female">Female</label><br>
        <label for="nationality">kewarganegaraan</label>
        <select name="nationality" id="Nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="inggris">inggris</option>
            <option value="Jerman">Jerman</option>
        </select>
        <p>Bahasa yang dikuasai</p>
            <input type="checkbox" id="Bahasa Indonesia" name="bahasa[]" value="Indonesia">
            <label for="Bahasa Indonesia">Indonesia</label><br>
            <input type="checkbox" id="Jerman" name="bahasa[]" value="Jerman">
            <label for="inggris">inggris</label><br> 
            <input type="checkbox" id="Inggris" name="bahasa[]" value="Inggris">
            <label for="Jerman">Jerman</label><br>
        <P> Bio </P>
         
        <textarea rows="10" cols="40" placeholder name="bio" placeholder=" Tulis Bio anda di sini..."></textarea><br>
        <button type="submit" name="submit">Sign up</button>
    </form>
    </body>
</html>