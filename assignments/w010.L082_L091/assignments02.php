<?php 


/* 

التكليف 02

    قم بحساب مساحة أي ملف فيديو عندك في جهازك
    في السطر الأول قم بطباعة المساحة بالميجا بايت
    في السطر الثاني قم بطباعة المساحة بالكيلو بايت
    دع ال Script يحسب الملف في مكانه بدون نقله إلى أي مكان آخر

// Output
"Size In Megabyte Is 32"
"Size In Kilobyte Is 33261"


*/
$path_file = "C:\\temp file\H  x   H\\[Coalgirls] Hunter X Hunter 001 (1280x720 Blu-ray FLAC) [E9537D90].mkv" ;
$size_file_in_byte = filesize($path_file); 
echo "Size In Megabyte Is  :  " . ($size_file_in_byte / 1024/1024) ."<br>";
echo "Size In Kilobyte Is  :  " . ($size_file_in_byte / 1024) ."<br>";
