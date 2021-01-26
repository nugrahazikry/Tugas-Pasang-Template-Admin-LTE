<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
  </head>
  <body>
    <header>
      <h1>Buat Account Baru!</h1>
      <h2>Sign Up Form</h2>
    </header>
    <form action="/welcome2" method="POST">
      @csrf
      <p>First Name:<p>
        <input type="text" name="first_name">
      <p>Last name: </p>
        <input type="text" name="last_name">
      <br>
      <p>Gender:</p>
        <input type="radio" name="Gender" value="0">Male <br>
        <input type="radio" name="Gender" value="1">Female <br>
        <input type="radio" name="Gender" value="2">Other <br>
      <p>Nationality:</p>
        <select id="nationality">
          <option value="country">Indonesia</option>
          <option value="Singapore">Singapore</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Australia">Australia</option>
        </select>
      <br>
      <p>Language Spoken:</p>
      <input type="checkbox" name="Language_spoken" value="0">Bahasa Indonesia <br>
      <input type="checkbox" name="Language_spoken" value="1"> English <br>
      <input type="checkbox" name="Language_spoken" value="2">Other <br>
      <p>Bio:</p>
        <textarea cols="30" rows="7"></textarea>
        <br>
        <input class="contact-submit" type="submit" value="Sign up">
    </form>
  </body>
</html>