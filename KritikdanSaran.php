<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$kritik_saran = $_POST['kritik_saran'];

$file = fopen('kritik_saran.txt', 'a');
fwrite($file, "Nama: $nama\n");
fwrite($file, "Email: $email\n");
fwrite($file, "Kritik dan Saran: $kritik_saran\n");
fclose($file);

// Kirim email ke alamat email Anda
$to = 'sinatriapamungkas0@gmail.com';
$subject = 'Kritik dan Saran dari Pembaca Blog';
$message = "Nama: $nama\nEmail: $email\nKritik dan Saran: $kritik_saran";
mail($to, $subject, $message);

echo 'Terima kasih atas kritik dan saran Anda!';
?>