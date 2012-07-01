<?php $this->pageTitle=Yii::app()->name; ?>

<div class="hero-unit visible-desktop">
	<h1>Welcome to <em><?php echo CHtml::encode(Yii::app()->name); ?></em></h1>
	<p>All the goodness of H5BP & Twitter Bootstrap wrapped up in a Yii theme.</p>
	<br />
	<p>
		<a class="btn btn-primary btn-large" href="http://www.yiiframework.com/doc/" target="_blank">
			Learn more
		</a>
	</p>
</div>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>
<p>
	Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
	should you have any questions.
</p>