public static function onBeforePageDisplay( OutputPage $out, Skin $skin ) {
	$out->addModules( 'ext.trimtag' );
	return true;
}
