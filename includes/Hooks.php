<?php
namespace TrimTag;

use Parser;
use PPFrame;
use Html;
use OutputPage;
use Skin;

class Hooks {
	public static function onParserFirstCallInit( Parser $parser ) {
		$parser->setHook( 'trim', [ self::class, 'renderTrim' ] );
		return true;
	}

	public static function renderTrim( $input, array $args, Parser $parser, PPFrame $frame ) {
		$input = trim( $input );

		if ( preg_match( '#^<p([^>]*)>(.*?)</p>$#si', $input, $matches ) ) {
			$attrs = $matches[1];
			$content = $matches[2];
			if ( strpos( $attrs, 'data-trim=' ) === false ) {
				$attrs .= ' data-trim="true"';
			}
			return "<p$attrs>$content</p>";
		}

		return Html::rawElement(
			'p',
			[ 'class' => 'trim-wrapper', 'data-trim' => 'true' ],
			$input
		);
	}

	public static function onBeforePageDisplay( OutputPage $out, Skin $skin ) {
		$out->addModules( 'ext.trimtag' );
		return true;
	}
}
