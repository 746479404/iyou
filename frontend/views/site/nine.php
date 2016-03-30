<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

?>
 <h1><?= Html::encode($nine) ?></h1>
<?php
for($i=1;$i<=9;$i++){
	for($v=$i;$v<=9;$v++){
		echo $i.'*'.$v.'='.$i*$v.'&nbsp;&nbsp;&nbsp;&nbsp;';
	}
	echo '<br>';
}
echo "<hr>";
for($i=1;$i<=9;$i++){
	for($v=1;$v<=$i;$v++){
		echo $i.'*'.$v.'='.$i*$v.'&nbsp;&nbsp;&nbsp;&nbsp;';
	}
	echo '<br>';
}
echo "<hr>";
for($i=9;$i>=1;$i--){
	for($v=1;$v<=$i;$v++){
		echo $i.'*'.$v.'='.$i*$v.'&nbsp;&nbsp;&nbsp;&nbsp;';
	}
	echo '<br>';
}
echo "<hr>";
?>
