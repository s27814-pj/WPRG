<?php
$sites = [
    "https://www.khanacademy.org" => "A non-profit educational organization providing free online lessons and practice in various subjects.",
    "https://www.coursera.org" => "An online learning platform offering courses, specializations, and degrees from universities and companies.",
    "https://ed.ted.com" => "An educational platform that offers animated videos to help educators and students with lessons on a variety of topics.",
    "https://www.code.org" => "A non-profit dedicated to expanding access to computer science in schools and increasing participation by women and underrepresented minorities.",
    "https://kids.nationalgeographic.com" => "A website offering educational games, videos, and information on animals and nature to help kids learn about the world."
];

$file = fopen("sites.txt", "w");
foreach ($sites as $site => $desc){
    fwrite($file, $site . ";" . $desc . "\n");
}
fclose($file);

$file = fopen("sites.txt", "r");
while (($line = fgets($file)) !== false) {
    $line = trim($line);
    list($name, $value) = explode(';', $line);
    echo "<a href=\"" . $name . "\">" . $value . "</a></br>";
}