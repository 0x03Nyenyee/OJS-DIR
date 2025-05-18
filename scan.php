<?php
// Coded By N4ST4R_ID
// www.nyamuxpl0it.xyz
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
echo "
 _   _  __     __ ______ 
| \ | | \ \   / /|  ____| 
|  \| |  \ \_/ / | |__   
| . ` |   \   /  |  __| 
| |\  |    | |   | |____
|_| \_|    |_|   |______| 
| \ | | \ \   / /|  ____| 
|  \| |  \ \_/ / | |__   
| . ` |   \   /  |  __| 
| |\  |    | |   | |____
|_| \_|    |_|   |______|  Directory Brute\n\n";
$pat = array("/files/","/file/","/journals/","/journal/","/jurnal/","/jurnals/",
"/jurnal_file","/jurnal_files/","/jurnal_data_file/","/jurnal_data_files/",
"/jurnalfile/","/jurnal_dat0_file/","/jurnalfiles/","/jurnaldatafile/","/jurnaldatafiles/","/data/",
"/datafile/","/datafiles/","/journalfile/","/journalfiles/","/journal_file/","/journal_files/",
"/journal_data/","/journal_data_file/","/journal_data_files/");
echo "Silahkeun Masukeun Webna: ";
$wb = trim(fgets(STDIN));
foreach($pat as $path) {
$c3k = get_headers($wb.$path);
if (preg_match("/200/", $c3k[0])) {
echo "[200] Zeeb > $wb/$path \nDone Yaq \n";
exit;
} elseif (preg_match("/403/", $c3k[0])) {
echo "[403] On > $wb/$path \nDone Yaq \n";
exit;
} else {
echo "[-] Ra nemu > $wb/$path \n";
}
}
echo "Done Yaq\n";
?>
