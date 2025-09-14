
<?php
require 'ClassAutoLoad.php';
$mailCnt = [
    'name_from' => 'Shali',
    'mail_from' => 'roselyne.mwalagho@strathmore.edu',
    'name_to' => 'Salama',
    'mail_to' => 'salamaroselyne@gmail.com',
    'subject' => 'Welcome to our BBIT TUTORIALS',
    'body' => 'This is a new year <b>Lets enjoy coding and have fun </b>'
];

$ObjSendMail->Send_Mail($conf, $mailCnt);
