<?php
$var1 = $_POST ['nama'];

if ($var1 == "Hanif Inamullah") {
    # Selamat Datang
    echo "<a href='my_profile.html'>Go to HTML<br></a>Selamat Datang Pak Hanif";
} else {
    # Maaf
    echo "Maaf, anda tidak bisa mengakses data ini.";
}
 