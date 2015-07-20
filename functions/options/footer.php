<?php

add_action( 'admin_menu', 'smamo_add_footer_menu' );
add_action( 'admin_init', 'smamo_footer_menu_init' );


function  smamo_add_footer_menu(  ) {

	add_submenu_page( 'themes.php', 'Footer', 'Footer', 'manage_options', 'smamo', 'smamo_footer_function' );

}


function smamo_footer_menu_init(  ) {

	register_setting( 'footer_section_0', 'footer_options' );

	add_settings_section(
		'footer_section_0_section',
		__( 'Stamoplysninger', 'smamo' ),
		'footer_section_0_callback',
		'footer_section_0'
	);

    add_settings_field(
		'firma',
		__( 'Firmanavn', 'smamo' ),
		'firma_render',
		'footer_section_0',
		'footer_section_0_section'
	);

	add_settings_field(
		'adresse',
		__( 'Adresselinje', 'smamo' ),
		'adresse_render',
		'footer_section_0',
		'footer_section_0_section'
	);

    add_settings_field(
		'postby',
		__( 'Postnummer og by', 'smamo' ),
		'postby_render',
		'footer_section_0',
		'footer_section_0_section'
	);

    add_settings_field(
		'cvr',
		__( 'CVR', 'smamo' ),
		'cvr_render',
		'footer_section_0',
		'footer_section_0_section'
	);

    add_settings_field(
		'tlf',
		__( 'Telefon', 'smamo' ),
		'tlf_render',
		'footer_section_0',
		'footer_section_0_section'
	);

    add_settings_field(
		'email',
		__( 'Email', 'smamo' ),
		'email_render',
		'footer_section_0',
		'footer_section_0_section'
	);


}

function firma_render(  ) {

	$options = get_option( 'footer_options' );
	?>
	<input type='text' name='footer_options[firma]' value='<?php echo $options['firma']; ?>'>
	<?php

}

function adresse_render(  ) {

	$options = get_option( 'footer_options' );
	?>
	<input type='text' name='footer_options[adresse]' value='<?php echo $options['adresse']; ?>'>
	<?php

}

function postby_render(  ) {

	$options = get_option( 'footer_options' );
	?>
	<input type='text' name='footer_options[postby]' value='<?php echo $options['postby']; ?>'>
	<?php

}

function cvr_render(  ) {

	$options = get_option( 'footer_options' );
	?>
	<input type='text' name='footer_options[cvr]' value='<?php echo $options['cvr']; ?>'>
	<?php

}


function tlf_render(  ) {

	$options = get_option( 'footer_options' );
	?>
	<input type='text' name='footer_options[tlf]' value='<?php echo $options['tlf']; ?>'>
	<?php

}

function email_render(  ) {

	$options = get_option( 'footer_options' );
	?>
	<input type='text' name='footer_options[email]' value='<?php echo $options['email']; ?>'>
	<?php

}


function footer_section_0_callback(  ) {

	echo __( 'Tilføj stamoplynsinger til hjemmesidens footer', 'smamo' );

}


function smamo_footer_function(  ) {

	?>
	<form action='options.php' method='post'>

		<h2>Footer</h2>

		<?php
		settings_fields( 'footer_section_0' );
		do_settings_sections( 'footer_section_0' );
		submit_button();
		?>

	</form>
	<?php

}

?>
