<?php
$file = "students.txt";

file_put_contents($file, "");

echo "<script>alert('All student records have been cleared!'); window.location.href='form.html';</script>";
?>
