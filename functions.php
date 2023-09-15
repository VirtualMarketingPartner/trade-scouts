<?php
/**
 * Setup Child Theme Styles
 */
function trade_scouts_enqueue_styles() {
	wp_enqueue_script(
		'bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
		array('jquery'),
		'1',
		'true' // load in the footer
	);

	wp_enqueue_script(
		'bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
		array('jquery'),
		'1',
		'true' // load in the footer
	);

	wp_enqueue_script(
		'trade_scouts-js',
		get_stylesheet_directory_uri() . '/library/js/main.js', 
		array('jquery'),
		'1',
		'true' // load in the footer
	);

	wp_enqueue_script(
		'fontawesome',
		'https://kit.fontawesome.com/09807403fd.js',
		array('jquery'),
		'3.5.1',
		'true' // load in the footer
	);

	wp_enqueue_style(
		'trade_scouts-style', 
		get_stylesheet_directory_uri() . '/style.css', 
		false, 
		'1.0' 
	);

	wp_enqueue_style( 
		'trade_scouts-child', 
		get_stylesheet_directory_uri() . '/library/scss/main.css', 
		false, 
		'1.0' 
	);
}
add_action( 'wp_enqueue_scripts', 'trade_scouts_enqueue_styles', 20 );


/**
 * Setup Child Theme Palettes
 *
 * @param string $palettes registered palette json.
 * @return string
 */
function trade_scouts_change_palette_defaults( $palettes ) {
	$palettes = '{"palette":[{"color":"#004e74","slug":"palette1","name":"Palette Color 1"},{"color":"#d67a49","slug":"palette2","name":"Palette Color 2"},{"color":"#143a55","slug":"palette3","name":"Palette Color 3"},{"color":"#143a55","slug":"palette4","name":"Palette Color 4"},{"color":"#143a55","slug":"palette5","name":"Palette Color 5"},{"color":"#143a55","slug":"palette6","name":"Palette Color 6"},{"color":"#cae7f0","slug":"palette7","name":"Palette Color 7"},{"color":"#eef3f5","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"}],"second-palette":[{"color":"#2B6CB0","slug":"palette1","name":"Palette Color 1"},{"color":"#215387","slug":"palette2","name":"Palette Color 2"},{"color":"#1A202C","slug":"palette3","name":"Palette Color 3"},{"color":"#2D3748","slug":"palette4","name":"Palette Color 4"},{"color":"#4A5568","slug":"palette5","name":"Palette Color 5"},{"color":"#718096","slug":"palette6","name":"Palette Color 6"},{"color":"#EDF2F7","slug":"palette7","name":"Palette Color 7"},{"color":"#F7FAFC","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"}],"third-palette":[{"color":"#2B6CB0","slug":"palette1","name":"Palette Color 1"},{"color":"#215387","slug":"palette2","name":"Palette Color 2"},{"color":"#1A202C","slug":"palette3","name":"Palette Color 3"},{"color":"#2D3748","slug":"palette4","name":"Palette Color 4"},{"color":"#4A5568","slug":"palette5","name":"Palette Color 5"},{"color":"#718096","slug":"palette6","name":"Palette Color 6"},{"color":"#EDF2F7","slug":"palette7","name":"Palette Color 7"},{"color":"#F7FAFC","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"}],"active":"palette"}';
	return $palettes;
}
add_filter( 'kadence_global_palette_defaults', 'trade_scouts_change_palette_defaults', 20 );

/**
 * Setup Child Theme Defaults
 *
 * @param array $defaults registered option defaults with kadence theme.
 * @return array
 */
function trade_scouts_change_option_defaults( $defaults ) {
	$new_defaults = '{"custom_logo":78,"logo_width":{"size":{"mobile":"","tablet":"","desktop":96},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":true},"logo_layout":{"include":{"mobile":"","tablet":"","desktop":"logo_only"},"layout":{"mobile":"","tablet":"","desktop":"standard"},"flag":false},"page_title_layout":"normal","page_title_element_title":{"enabled":false,"flag":true},"page_title_element_meta":{"id":"meta","enabled":false,"divider":"dot","author":true,"authorImage":false,"authorEnableLabel":true,"authorLabel":"","date":true,"dateTime":false,"dateEnableLabel":false,"dateLabel":"","dateUpdated":false,"dateUpdatedTime":false,"dateUpdatedDifferent":false,"dateUpdatedEnableLabel":false,"dateUpdatedLabel":"","comments":false,"commentsCondition":false,"flag":false},"page_layout":"fullwidth","page_content_style":"unboxed","footer_navigation_stretch":true,"footer_navigation_vertical_align":{"mobile":"","tablet":"","desktop":"middle","flag":true},"footer_top_columns":"5","footer_top_layout":{"mobile":"row","tablet":"","desktop":"equal","flag":true},"footer_items":{"top":{"top_1":["footer-widget1"],"top_2":["footer-widget2"],"top_3":["footer-widget3"],"top_4":["footer-widget4"],"top_5":["footer-widget5"]},"middle":{"middle_1":[],"middle_2":[],"middle_3":[],"middle_4":[],"middle_5":[]},"bottom":{"bottom_1":["footer-html"],"bottom_2":[],"bottom_3":[],"bottom_4":[],"bottom_5":[]},"flag":true},"footer_html_content":"{copyright} {year} | Patent Pending |\u00a0<a href=\"https:\/\/taylor.mycareerprofile.net\/privacy-policy\">Privacy Policy<\/a>\u00a0|\u00a0<a href=\"mailto:support@tradescouts.com\">support@tradescouts.com<\/a>","site_background":{"desktop":{"color":"palette9","type":"color"},"flag":false},"link_color":{"highlight":"palette2","highlight-alt":"palette2","highlight-alt2":"palette9","style":"standard"},"buttons_background":{"color":"palette1","hover":"#2b6884"},"buttons_border_radius":{"size":{"mobile":"","tablet":"","desktop":2},"unit":{"mobile":"px","tablet":"px","desktop":"px"},"flag":true},"buttons_padding":{"size":{"desktop":[10,"25",10,"25"]},"flag":true,"locked":{"desktop":false}},"buttons_shadow":{"color":"rgba(0,0,0,0)","hOffset":0,"vOffset":0,"blur":0,"spread":0,"inset":false},"buttons_shadow_hover":{"color":"rgba(0,0,0,0.1)","hOffset":0,"vOffset":0,"blur":0,"spread":0,"inset":false},"base_font":{"size":{"desktop":17},"lineHeight":{"desktop":1.6},"family":"Poppins","google":true,"weight":"normal","variant":"regular","color":"palette4","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"sans-serif","flag":true},"h1_font":{"size":{"desktop":48},"lineHeight":{"desktop":1.5},"family":"inherit","google":false,"weight":"700","variant":"700","color":"palette3","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":false},"h2_font":{"size":{"desktop":28},"lineHeight":{"desktop":1.5},"family":"inherit","google":false,"weight":"700","variant":"700","color":"palette3","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":false},"h3_font":{"size":{"desktop":24},"lineHeight":{"desktop":1.5},"family":"inherit","google":false,"weight":"700","variant":"700","color":"palette3","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"","flag":false},"buttons_typography":{"size":{"desktop":14},"lineHeight":{"desktop":1.4},"family":"inherit","google":false,"weight":"700","variant":"700","sizeType":"px","lineType":"-","letterSpacing":{"desktop":2},"spacingType":"px","style":"normal","transform":"uppercase","fallback":"","flag":true},"header_sticky":"main","mobile_header_sticky":"main","footer_wrap_background":{"desktop":{"color":"palette1","type":"color"},"flag":true},"footer_html_align":{"mobile":"","tablet":"","desktop":"center","flag":true},"footer_html_vertical_align":{"mobile":"","tablet":"","desktop":"middle","flag":true},"footer_html_link_color":{"color":"palette9","hover":"palette2"},"footer_html_link_style":"plain"}';
	$new_defaults = json_decode( $new_defaults, true );
	return wp_parse_args( $new_defaults, $defaults );
}
add_filter( 'kadence_theme_options_defaults', 'trade_scouts_change_option_defaults', 20 );