<?
$arJsConfig = array( 
	'custom_main' => array( 
		'js' => '/local/components/floor/calculator/assets/js/script.js', 
		'rel' => array(), 
	) 
); 
foreach ($arJsConfig as $ext => $arExt) { 
	\CJSCore::RegisterExt($ext, $arExt); 
}
?>