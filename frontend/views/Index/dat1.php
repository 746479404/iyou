<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<h1><?= Html::encode($aa) ?></h1>
<?php
 for ($i=1;$i<=9;$i++){
	for ($j=1;$j<=$i;$j++) {
		echo "$i*$j=".$i*$j." ";
	}
	echo "<br>\n";
}
?>