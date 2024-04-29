<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Dewi Formulir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Buat Akun Baru</h1>
    <h2>Sign Up Form</h2>

    <form action="welcome.php" method="get">
        <label for="first-name">First Name :</label>
        <input type="text" id="first-name" name="first-name" required/><br/><br/>

        <label for="last-name">Last Name :</label>
        <input type="text" id="last-name" name="last-name" required/><br/><br/>

        <label>Gender :</label><br/>
        <input type="radio" name="gender" value="men"/>Laki-laki<br/>
        <input type="radio" name="gender" value="girl"/>Perempuan<br/><br/>

        <label for="negara">Nationality :</label><br/>
        <select id="negara" name="negara">
            <option value="Indonesia">Indonesia</option>
            <option value="America">America</option>
            <option value="English">English</option>
        </select><br/><br/>

        <label>Language Spoken :</label><br/>
        <input type="checkbox" id="buatbox1" name="buatbox1" value="bahasa"/>
        <label for="buatbox1">Bahasa Indonesia</label><br/>
        <input type="checkbox" id="buatbox2" name="buatbox2" value="bahasa"/>
        <label for="buatbox2">English</label><br/>
        <input type="checkbox" id="buatbox3" name="buatbox3" value="bahasa"/>
        <label for="buatbox3">Other</label><br/><br/>
        
        <label for="bio">Bio :</label><br/>
        <textarea id="bio" name="bio" rows="10" cols="30"></textarea><br/><br/>

        <input type="submit" value="Sign Up"/>
    </form>
</body>
</html>
