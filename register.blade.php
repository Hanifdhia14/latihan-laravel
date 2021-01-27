<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-AKIO</title>

</head>

<body>
  <form action="/home" method="POST">
    @csrf

    <h1> Buat Akun Baru !</h1> <br>
    <h3> Sign Up form </h3> <br>
    <label for="firstname"> First Name : </label> <br><br>
    <input type="text" name="firstname" value=""> <br><br>
    <label for="lastname"> Last Name :</label> <br><br>
    <input type="text" name="lastname" value=""> <br><br>

    <div class="">
      <label for="">Gender :</label> <br><br>
      <input type="radio" name="gender" value="">
      <label for="male">Male</label><br>
      <input type="radio" name="gender" value="">
      <label for="male">Female</label> <br>
      <input type="radio" name="gender" value="">
      <label for="male"> Other <label>
    </div> <br>

    <div class="">
      <label for=" country">Nationaly :</label> <br><br>
      <select class="" name="country">
        <optgroup label="Asia">
          <option value="">Indonesia</option>
          <option value="">Malaysia</option>
          <option value="">Singapure</option>
        </optgroup>
        <optgroup label="Eropa">
          <option value="">German</option>
          <option value="">Polandia</option>
          <option value="">Italy</option>
        </optgroup>
      </select>
    </div> <br>

    <div class="">
      <label for="">Language Spoke :</label> <br> <br>
      <input type="checkbox" name="Bahasa1" value="Indonesia">
      <label for="Bahasa1">Bahasa Indonesia</label><br>
      <input type="checkbox" name="Bahasa2" value="english">
      <label for="Bahasa2">English</label><br>
      <input type="checkbox" name="Bahasa3" value="Indonesia">
      <label for="Bahasa3">Other</label>
    </div><br>

    <div class="">
      <label for="bio">Bio:</label><br>
      <textarea name="bio" rows="10" cols="30"></textarea><br>
    </div>
    <button type="submit" name="button"> Sign Up</button>

  </form>
</body>

</html>
