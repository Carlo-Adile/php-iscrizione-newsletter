<?php
function checkEmail($mail)
{
  if (str_contains($mail, '@') && str_contains($mail, '.')) {
    return [
      'status' => 'success',
      'text' => 'Success! You are now subscribed.'
    ];
  } else {
    return [
      'status' => 'danger',
      'text' => 'You entered an incorrect email, please try again.'
    ];
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>functions</title>
</head>

<body>

</body>

</html>