<?php
require_once '../../net/sfws/home/Portfolio.php';

// initializations
$portfolio = new Portfolio("../../data/portfolio.xml");
$singlePortfolio = $portfolio->getSinglePortfolio($_POST['portfolio']);
?>
<html>
<head>
	<title>Ajax-Request: Requested Portfolio: <?php echo $_POST['portfolio'] ?></title>
</head>
<body>
	<div id="success">ok</div>

	<div id="modal-header">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h5 class="modal-title" id="myModalLabel"><?php echo $singlePortfolio['name'] ?></h5>
		</div>
	</div>
	
	<div id="carousel-indicators">
		<ol class="carousel-indicators">
			<?php if (key_exists(0, $singlePortfolio['pictures']['image'])) { ?>
				<?php for ($i=0; $i<count($singlePortfolio['pictures']['image']); $i++) { ?>
					<?php $image = $singlePortfolio['pictures']['image'][$i]; ?>
					<li data-target="#carousel-portfolio" data-slide-to="<?php echo $i ?>"<?php if ($i == 0) { echo " class=\"active\""; } ?>></li>
				<?php } ?>
			<?php } else { ?>
				<li data-target="#carousel-portfolio" data-slide-to="0" class="active"></li>
			<?php } ?>
		</ol>
	</div>
	
	<div id="carousel-inner">
		<div class="carousel-inner" role="listbox">
			<?php if (key_exists(0, $singlePortfolio['pictures']['image'])) { ?>
				<?php $i = 0; ?>
				<?php foreach ($singlePortfolio['pictures']['image'] as &$image) { ?>
					<?php $i++; ?>
					<div class="item <?php if ($i == 1) { echo " active"; } ?>">
						<img src="../<?php echo $image['path'] ?>" alt="<?php echo $image['description'] ?>" style="width:100%;">
						<div class="carousel-caption">
							<?php echo $image['description'] ?>
						</div>
					</div>
				<?php } ?>
			<?php } else { ?>
				<?php $image = $singlePortfolio['pictures']['image']; ?>
				<div class="item active">
					<img src="../<?php echo $image['path'] ?>" alt="<?php echo $image['description'] ?>">
					<div class="carousel-caption">
						<?php echo $image['description'] ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	
	<div id="info">
		<div id="info">
			Company: <?php echo $singlePortfolio['company'] ?><br>
			<?php if (!$singlePortfolio['url'] == "") { ?>
				URL: <a href="<?php echo $singlePortfolio['url'] ?>" target="_new"><?php echo $singlePortfolio['url'] ?></a>
			<?php } ?>
			<h6>Done work:</h6>
			<ul>
				<?php if (is_array($singlePortfolio['notes']['note'])) { ?>
					<?php foreach ($singlePortfolio['notes']['note'] as &$note) { ?>
						<li><?php echo $note ?></li>
					<?php } ?>
				<?php } else { ?>
					<?php $note = $singlePortfolio['notes']['note']; ?>
					<li><?php echo $note ?></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</body>
</html>