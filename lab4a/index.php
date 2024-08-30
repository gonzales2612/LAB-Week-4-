<?php

require "Profile.php";

$first_name = "Juan";
$middle_name = "Dipasisiil";
$last_name = "Dela Cruz";
$email = "juan@delacruz.ph";
$contact_number = "09166314611";
$address = "Barangay Mintal, Davao City, Philippines 8000";

$profile = new Profile($first_name, $middle_name, $last_name, $email, $contact_number, $address);
$profile->setFavoriteQuote("To be or not to be, that is the question.");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile: <?php echo $profile->getCompleteName(); ?></title>
</head>
<body>
    <h1><?php echo $profile->getCompleteName(); ?></h1>
    <h2><?php echo $profile->getEmail();?></h2>
    <h2><?php echo $profile->getContactNumber();?></h2>
    <h2><?php echo $profile->getAddress();?></h2>
    <p>
        <?php echo $profile->getFavoriteQuote(); ?>
    </p>
</body>
</html>