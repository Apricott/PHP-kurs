<?php

$data = date("Y-m-d");
$czas = date("H:i");

echo "Stronę wyświetlono dnia $data o godzinie $czas";

?>


<?php
$data = date("y-m-d, H:i", mktime (0,0,0,10,15,1985));
echo $data;

// time() - czas od 1 stycznia 1970 w sekundach
// microtime() - w milisekundach
?>


