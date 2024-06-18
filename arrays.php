<h1>Arrays</h1>
<?php

$color = array("black","green");

print_r($color);

?>
<pre>
    <?php print_r($color); ?>
</pre>


<h1>Associative Arrays</h1>
<?php


$user_emails= array(
    "Alex"=>"aokama@yahoo.com",
    "peter"=>"pokama@yahoo.com",
    "Amani"=>"amani@yahoo.com"
);
?>
<pre>
    <?php print_r($user_emails); ?>
</pre>

<h1>Multidimensional Arrays</h1>
<?php
$user_details = [
    "Director"=> [
        "Fullname"=>" Alex Okama",
        "Email"=> "Okama@yahoo.com",
        "Address"=> "mada",
        "phone"=>[
            "Mobile"=> "0790727208",
            "Cell"=> "0720819692",
            "Work"=>"0722828803"
        ],
    ],
    "Manager" =>[
        "fullname" => "Juliette Okama",
        "email" => "jokama@yahoo.com",
        "address" => "Mada",
        "phone" => [
               "mobile " => "+254737882823",
               "cell" => "+25473756823",
               "work" => "+254737882823",
        ],
    ],

    "Secretary"=>[
        "fullname" => "Juliette Okama",
        "email" => "jokama@yahoo.com",
        "address" => "Mada",
        "phone" => [
               "mobile " => "+254737882823",
               "cell" => "+25473756823",
               "work" => "+254737882823",
        ],
    ],
];

?>

<pre>
    <?php print_r($user_details); ?>
</pre>
4