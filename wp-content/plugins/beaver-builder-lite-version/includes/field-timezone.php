<select name="<?php echo $name; ?>"<?php if ( isset( $field['class'] ) ) { echo ' class="' . $field['class'] . '"';
} if ( isset( $field['toggle'] ) ) { echo "data-toggle='" . json_encode( $field['toggle'] ) . "'";
} if ( isset( $field['hide'] ) ) { echo "data-hide='" . json_encode( $field['hide'] ) . "'";
} if ( isset( $field['trigger'] ) ) { echo "data-trigger='" . json_encode( $field['trigger'] ) . "'";} ?>>
<?php echo FLBuilderTimezones::build_timezones( $settings->time_zone ); ?>
</select>
