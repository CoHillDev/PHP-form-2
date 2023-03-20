<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <section>
    <div class="container">
      <h2 class="text-center">Is this a Form ?</h2>
      <p class="text-center">I guess it is...</p>
      
      <form action="thanks.php" method="post">
        <fieldset>
          <legend>Fill this (please;)</legend>
          <div>
            <label for="firstname">First name :</label>
            <input type="text" id="firstname" name="user_firstname"><!-- class="form-control" required -->
          </div>
          <div>
            <label for="lastname">Last name :</label>
            <input type="text" id="lastname" name="user_lastname"><!-- class="form-control" required -->
          </div>
          <div>
            <label for="email">eMail :</label>
            <input type="email" id="email" name="user_email"><!-- class="form-control" required -->
          </div>
          <div>
            <label for="phone">Phone number :</label>
            <input type="text" id="phone" name="user_phonenumber"><!-- class="form-control" required -->
          </div>
          <div>
            <label for="subject">Pick one :</label>
            <select id="subject" name="user_subject" selected="selected"><!-- class="form-control" required -->
              <option value="" selected disabled hidden>... in here</option>
              <option value="HTML">You might need Somebody</option>
              <option value="PHP">That Thing</option>
              <option value="JS">Someday I'll Find You</option>
              <option value="CSS">Still Believe</option>
            </select>
          </div>
          <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" rows="5"></textarea><!-- class="form-control" required -->
          </div>
          <button type="submit">Go! Go! Go!</button>
        </fieldset>
      </form>
    </div>
  </section>

</html>
</body>