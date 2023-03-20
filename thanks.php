<?php

if (empty($_POST)) {
  // traitement du formulaire
  // puis redirection
  header('Location: form.php');
}
var_dump($_POST);

$lastname = $_POST['user_lastname'];
$email = $_POST['user_email'];
$phoneNumber = $_POST['user_phonenumber'];
$message = $_POST['user_message'];

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // nettoyage et validation des données soumises via le formulaire 
  if (!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '')
  $errors[] = "Did you forget your first name ?";
  else
  $firstname = $_POST['user_firstname'];

  if (!isset($_POST['user_lastname']) || trim($_POST['user_lastname']) === '')
  $errors[] = "Did you forget your last name ?";
  if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '' || !filter_var($email, FILTER_VALIDATE_EMAIL))
    $errors[] = "Did you forget your email ? Please enter a valid email address";
  if (!isset($_POST['user_phonenumber']) || trim($_POST['user_phonenumber']) === '')
  $errors[] = "Did you forget your phone number ?";
  if (!isset($_POST['user_subject']) || trim($_POST['user_subject']) === '')
  $errors[] = "Please, pick a song ;)";
  else
  $subject = $_POST['user_subject'];
  
}

?>

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

    <?php // Affichage des éventuelles erreurs 
if (count($errors) > 0) : ?>
  <div class="border border-danger rounded p-3 m-5 bg-danger">
    <h1>Wrong ! Please, try again</h1>
    <ul>
      <?php foreach ($errors as $error) : ?>
        <li><?= $error ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
<?php endif;

  if(count($errors) == 0) : ?>
    <p> Thank you <?php echo $firstname . ' ' . $lastname; ?> for contacting us about “<?php echo $subject; ?>”.</p>
    <p> One of our advisors will contact you, either at <?php echo $email ?>, or by phone at <?php echo $phoneNumber ?>, as soon as possible, to process your request : </p>
    <p><?php echo $message ?></p>
    <?php endif; ?>
  </div>
  </section>
  </body>
  
  </html>