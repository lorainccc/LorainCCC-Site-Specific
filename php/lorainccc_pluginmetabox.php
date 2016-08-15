<?php
/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */


/************************
*Dashboard Icons MetaBox*
************************/

function lorainccc_db_icons_box_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function lorainccc_db_icons_box_add_meta_box() {
	add_meta_box(
		'lorainccc_db_icons_box-event-meta-box',
		__( 'Dashboard Icon Meta Box', 'lorainccc_db_icons_box' ),
		'lorainccc_db_icons_box_html',
		array('dashboard_icons'),
		'advanced',
		'core'
	);
}
add_action( 'add_meta_boxes', 'lorainccc_db_icons_box_add_meta_box' );


function lorainccc_db_icons_box_html( $post) {
	wp_nonce_field( '_lorainccc_db_icons_box_nonce', 'lorainccc_db_icons_box_nonce' ); ?>

<script>
jQuery(document).ready(function(){
jQuery('#event_start_date').datepicker({
	dateFormat: "yy-mm-dd"
});
jQuery('#event_start_time').timepicker({
	timeFormat: "hh:mm tt"
});
jQuery('#event_end_date').datepicker({
	dateFormat: "yy-mm-dd"
});
jQuery('#event_end_time').timepicker({
	timeFormat: "hh:mm tt"
});

});
</script>

<h4>Associated Link:</h4>
	<p>
		<label for="lorainccc_db_icons_box_link"><?php _e( 'Associated Link', 'lorainccc_db_icons_box' ); ?></label><br>
		<input class="widefat" type="text" name="lorainccc_db_icons_box_link" id="lorainccc_db_icons_box_link" value="<?php echo lorainccc_db_icons_box_get_meta( 'lorainccc_db_icons_box_link' ); ?>">

	</p>

<?php
}

function lorainccc_db_icons_box_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['lorainccc_db_icons_box_nonce'] ) || ! wp_verify_nonce( $_POST['lorainccc_db_icons_box_nonce'], '_lorainccc_db_icons_box_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['lorainccc_db_icons_box_link'] ) )
		update_post_meta( $post_id, 'lorainccc_db_icons_box_link', esc_attr( $_POST['lorainccc_db_icons_box_link'] ) );

}
add_action( 'save_post', 'lorainccc_db_icons_box_save' );

/************************
*Spotlight MetaBox*
************************/

function lorainccc_spotlight_box_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}
function lorainccc_spotlight_box_add_meta_box() {
	add_meta_box(
		'lorainccc_spotlight_box-event-meta-box',
		__( 'Spotlight Meta Box', 'lorainccc_spotlight_box' ),
		'lorainccc_spotlight_box_html',
		array('spotlights'),
		'advanced',
		'core'
	);
}
add_action( 'add_meta_boxes', 'lorainccc_spotlight_box_add_meta_box' );

function lorainccc_spotlight_box_html( $post) {
	wp_nonce_field( '_lorainccc_spotlight_box_nonce', 'lorainccc_spotlight_box_nonce' ); ?>

<script>
jQuery(document).ready(function(){
jQuery('#event_start_date').datepicker({
	dateFormat: "yy-mm-dd"
});
jQuery('#event_start_time').timepicker({
	timeFormat: "hh:mm tt"
});
jQuery('#event_end_date').datepicker({
	dateFormat: "yy-mm-dd"
});
jQuery('#event_end_time').timepicker({
	timeFormat: "hh:mm tt"
});

});
</script>

<h4>Associated Link:</h4>
	<p>
		<label for="lorainccc_spotlight_box_link"><?php _e( 'Associated Link', 'lorainccc_spotlight_box' ); ?></label><br>
		<input class="widefat" type="text" name="lorainccc_spotlight_box_link" id="lorainccc_spotlight_box_link" value="<?php echo lorainccc_spotlight_box_get_meta( 'lorainccc_spotlight_box_link' ); ?>">

	</p>

<?php
}

function lorainccc_spotlight_box_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['lorainccc_spotlight_box_nonce'] ) || ! wp_verify_nonce( $_POST['lorainccc_spotlight_box_nonce'], '_lorainccc_spotlight_box_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['lorainccc_spotlight_box_link'] ) )
		update_post_meta( $post_id, 'lorainccc_spotlight_box_link', esc_attr( $_POST['lorainccc_spotlight_box_link'] ) );

}
add_action( 'save_post', 'lorainccc_spotlight_box_save' );

/************************
*Highlight MetaBox*
************************/

function lorainccc_high_light_box_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}
function lorainccc_high_light_box_add_meta_box() {
	add_meta_box(
		'lorainccc_high_light_box-event-meta-box',
		__( 'Highlight Meta Box', 'lorainccc_high_light_box' ),
		'lorainccc_high_light_box_html',
		array('highlight'),
		'advanced',
		'core'
	);
}
add_action( 'add_meta_boxes', 'lorainccc_high_light_box_add_meta_box' );

function lorainccc_high_light_box_html( $post) {
	wp_nonce_field( '_lorainccc_high_light_box_nonce', 'lorainccc_high_light_box_nonce' ); ?>

<script>
jQuery(document).ready(function(){
jQuery('#event_start_date').datepicker({
	dateFormat: "yy-mm-dd"
});
jQuery('#event_start_time').timepicker({
	timeFormat: "hh:mm tt"
});
jQuery('#event_end_date').datepicker({
	dateFormat: "yy-mm-dd"
});
jQuery('#event_end_time').timepicker({
	timeFormat: "hh:mm tt"
});

});
</script>

<h4>Associated Link:</h4>
	<p>
		<label for="lorainccc_high_light_box_link"><?php _e( 'Associated Link', 'lorainccc_high_light_box' ); ?></label><br>
		<input class="widefat" type="text" name="lorainccc_high_light_box_link" id="lorainccc_high_light_box_link" value="<?php echo lorainccc_high_light_box_get_meta( 'lorainccc_high_light_box_link' ); ?>">

	</p>
<h4>Background Color</h4>
<p>

		<input type="radio" name="lorainccc_lccc_highlight_box_bg_color" id="lorainccc_lccc_highlight_box_bg_color_0" value="#6DB400" <?php echo ( badge_metabox_get_meta( 'badge_metabox_color_scheme_select' ) === 'Green' ) ? 'checked' : ''; ?>>
<label for="badge_metabox_color_scheme_select_0">Green</label><br>

		<input type="radio" name="lorainccc_lccc_highlight_box_bg_color" id="lorainccc_lccc_highlight_box_bg_color_1" value="#67296E" <?php echo ( badge_metabox_get_meta( 'badge_metabox_color_scheme_select' ) === 'Purple' ) ? 'checked' : ''; ?>>
<label for="badge_metabox_color_scheme_select_1">Purple</label><br>

		<input type="radio" name="lorainccc_lccc_highlight_box_bg_color" id="lorainccc_lccc_highlight_box_bg_color_2" value="#068795" <?php echo ( badge_metabox_get_meta( 'badge_metabox_color_scheme_select' ) === 'Teal' ) ? 'checked' : ''; ?>>
<label for="badge_metabox_color_scheme_select_2">Teal</label><br>

		<input type="radio" name="lorainccc_lccc_highlight_box_bg_color" id="lorainccc_lccc_highlight_box_bg_color_3" value="#E36000" <?php echo ( badge_metabox_get_meta( 'badge_metabox_color_scheme_select' ) === 'Orange' ) ? 'checked' : ''; ?>>
<label for="badge_metabox_color_scheme_select_3">Orange</label><br>

	</p>

<?php
}

function lorainccc_high_light_box_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['lorainccc_high_light_box_nonce'] ) || ! wp_verify_nonce( $_POST['lorainccc_high_light_box_nonce'], '_lorainccc_high_light_box_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['lorainccc_high_light_box_link'] ) )
		update_post_meta( $post_id, 'lorainccc_high_light_box_link', esc_attr( $_POST['lorainccc_high_light_box_link'] ) );
if ( isset( $_POST['lorainccc_lccc_highlight_box_bg_color'] ) )
		update_post_meta( $post_id, 'lorainccc_lccc_highlight_box_bg_color', esc_attr( $_POST['lorainccc_lccc_highlight_box_bg_color'] ) );
}
add_action( 'save_post', 'lorainccc_high_light_box_save' );



?>