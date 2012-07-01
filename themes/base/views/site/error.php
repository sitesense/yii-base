<?php
$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2>Error <?php echo $code; ?></h2>

<?php if ($code === 404) { ?>
<div class="alert alert-error">
    <h3><?php echo CHtml::encode($message); ?></h3>
    <p>Sorry, but the page you were trying to view does not exist.</p>
    <p>It looks like this was the result of either:</p>
    <ul>
		<li>a mistyped address</li>
		<li>an out-of-date link</li>
    </ul>
</div>
<div class="well">
<script>
	var GOOG_FIXURL_LANG = (navigator.language || '').slice(0,2),GOOG_FIXURL_SITE = location.host;
</script>
<script src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
</div>
<?php } else { ?>
<div class="alert alert-error">
	<?php echo CHtml::encode($message); ?>
</div>
<?php } ?>
<br />