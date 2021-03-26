<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
      <li class="breadcrumb-item"><a href="<?= WEBROOT ?>"><i class="fas fa-home"></i></a></li>
      <?php foreach ( $data as $key => $value): ?>
      	<?php if($key === count($data) - 1){ ?>
	      	<li class="breadcrumb-item  active" aria-current="page"><?= $value["name"] ?></li>
	    <?php } else { ?>
	    	<li class="breadcrumb-item"><a href="<?= WEBROOT.$value['path'] ?>"><?= $value["name"] ?></a></li>
	    <?php } ?> 
      <?php endforeach ?>
    </ol>
 </nav>