<?php
$lang = $modx->lexicon->fetch('geotv.', true);
$modx->smarty->assign('geotv', $lang);

$corePath = $modx->getObject('modNamespace', 'geotv')->getCorePath();
return $modx->smarty->fetch($corePath . 'tv/inputoptions/tpl/geotv.tpl');
