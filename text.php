<?php
include_once "base.php";

$total=new db('total');

?>

<pre>
<?php print_r($total->find(1));?>
</pre>