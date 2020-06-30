<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Form</title>
</head>
<body>
    <h2><b>Buat Account Baru!</b></h2>
    <h4>Sign Up Form</h4>
    <form action="{{ url('welcome') }}" method="POST">
        {{ csrf_field() }}
    <label>First name:</label><br><br>
    <input type="text" name="first"><br><br>
    <label>Last name:</label><br><br>
    <input type="text" name="last"></br><br>
    <label>Gender:</label><br><br>
        <input type="radio" name="jk" value="laki-laki" /> 
            Male
            <br>
        <input type="radio" name="jk" value="perempuan" /> 
            Female
            <br>
        <input type="radio" name="jk" value="other" />
            Other
            <br><br>
        <label>Nationality: </label><br><br>
    <select>
        <option>Indonesia</option>
        <option>Turki</option>
    </select>
<br><br>
    Language Spoken: <br><br>
        <input type="checkbox" name="idn"> Indonesia <br>
        <input type="checkbox" name="eng"> English <br>
        <input type="checkbox" name="oth"> Other <br>
    <br/>
    <label>Bio: </label><br><br>
    <textarea>
        
    </textarea>
    <br/>
    <button type="submit">Sign Up</button>
</form>
</html>