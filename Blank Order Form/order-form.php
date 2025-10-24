<?php

/*
 * Template Name: Order Form
 * Version: 1.0
 * Description: A universal template that includes a fixed header/footer with patient and providing information
 * Author: Gravity PDF
 * Author URI: https://gravitypdf.com
 * Group: Team Riley Web
 * Required PDF Version: 6.0
 * Tags: core-booster-supported
 */

/* Prevent direct access to the template */
if ( ! class_exists( 'GFForms' ) ) {
	return;
}

/**
 * All Gravity PDF v4/v5/v6 templates have access to the following variables:
 *
 * @var array  $form      The current Gravity Form array
 * @var array  $entry     The raw entry data
 * @var array  $form_data The processed entry data stored in an array
 * @var object $settings  The current PDF configuration
 * @var array  $fields    An array of Gravity Form fields which can be accessed with their ID number
 * @var array  $config    The initialised template config class – eg. /config/zadani.php
 * @var object $gfpdf     The main Gravity PDF object containing all our helper classes
 * @var array  $args      Contains an array of all variables - the ones being described right now - passed to the template
 */

/*
  PDF Settings
  Font: Dejavu Sans Condensed
  Font-size: 10pt
  Font-Color: #000000
 */

$gform = GPDFAPI::get_form_class();
$misc  = GPDFAPI::get_misc_class();

$patient_name              = $gform->process_tags( $settings['order_form_patient_name'] ?? '', $form, $entry );
$patient_gender            = $gform->process_tags( $settings['order_form_gender'] ?? '', $form, $entry );
$patient_dob               = $gform->process_tags( $settings['order_form_dob'] ?? '', $form, $entry );
$patient_phone             = $gform->process_tags( $settings['order_form_phone'] ?? '', $form, $entry );
$patient_street            = $gform->process_tags( $settings['order_form_street_address'] ?? '', $form, $entry );
$patient_city_state_zip    = $gform->process_tags( $settings['order_form_city_state_zip'] ?? '', $form, $entry );
$patient_allergies         = $gform->process_tags( $settings['order_form_allergies'] ?? '', $form, $entry );
$prescriber_name           = $gform->process_tags( $settings['order_form_prescriber_name'] ?? '', $form, $entry );
$prescriber_phone          = $gform->process_tags( $settings['order_form_prescriber_phone'] ?? '', $form, $entry );
$prescriber_fax            = $gform->process_tags( $settings['order_form_prescriber_fax'] ?? '', $form, $entry );
$prescriber_street         = $gform->process_tags( $settings['order_form_prescriber_street_address'] ?? '', $form, $entry );
$prescriber_city_state_zip = $gform->process_tags( $settings['order_form_prescriber_city_state_zip'] ?? '', $form, $entry );
$npi_dea                   = $gform->process_tags( $settings['order_form_prescriber_npi_dea'] ?? '', $form, $entry );
$date                      = $gform->process_tags( $settings['order_form_prescriber_date'] ?? '', $form, $entry );
$signature                 = $gform->process_tags( $settings['order_form_prescriber_signature'] ?? '', $form, $entry );

$billing_options = $gform->process_tags( $settings['order_form_billing_options'] ?? '', $form, $entry );
$billing_options = array_map( 'trim', explode( ',', $billing_options ) );

/*
 * Load our core-specific styles from our PDF settings which will be passed to the PDF template $config array
 */
$show_form_title      = ( $settings['show_form_title'] ?? '' ) === 'Yes';
$show_page_names      = ( $settings['show_page_names'] ?? '' ) === 'Yes';
$show_html            = ( $settings['show_html'] ?? '' ) === 'Yes';
$show_section_content = ( $settings['show_section_content'] ?? '' ) === 'Yes';
$enable_conditional   = ( $settings['enable_conditional'] ?? '' ) === 'Yes';
$show_empty           = ( $settings['show_empty'] ?? '' ) === 'Yes';

/**
 * Set up our configuration array to control what is and is not shown in the generated PDF
 *
 * @var array
 */
$html_config = [
	'settings' => $settings,
	'meta'     => [
		'echo'                     => true, /* whether to output the HTML or return it */
		'exclude'                  => true, /* whether we should exclude fields with a CSS value of 'exclude'. Default to true */
		'empty'                    => $show_empty, /* whether to show empty fields or not. Default is false */
		'conditional'              => $enable_conditional, /* whether we should skip fields hidden with conditional logic. Default to true. */
		'show_title'               => false,
		'section_content'          => $show_section_content, /* whether we should include a section breaks content. Default to false */
		'page_names'               => $show_page_names, /* whether we should show the form's page names. Default to false */
		'html_field'               => $show_html, /* whether we should show the form's html fields. Default to false */
		'individual_products'      => false, /* Whether to show individual fields in the entry. Default to false - they are grouped together at the end of the form */
		'enable_css_ready_classes' => true, /* Whether to enable or disable Gravity Forms CSS Ready Class support in your PDF */
	],
];

?>

<!-- Include styles needed for the PDF -->
<style>
  @page {
    margin: 89.4mm 21.5mm 56mm 21.5mm;
    header: html_Header;
    footer: html_Footer;

    margin-header: 14.4mm;
    margin-footer: 56mm;
    background: url('<?php echo __DIR__ . "/images/Semaglutide-SL-Order-Form-background.png"; ?>') no-repeat 0 0;
    background-image-resize: 6;
  }

  /* Handle Gravity Forms CSS Ready Classes */
  .row-separator {
    clear: both;
    padding: 2mm 0;
    border-bottom: 1px solid #CCCCCC;
  }

  /* Handle GF2.5+ Columns */
  .grid {
    float: <?php echo ( $settings['rtl'] ?? 'No' ) === 'Yes' ? 'right' : 'left'; ?>;
  }

  .grid .inner-container {
    width: 95%;
  }

  .grid-3 {
    width: 25%;
  }

  .grid-4 {
    width: 33.33%;
  }

  .grid-5 {
    width: 41.66%;
  }

  .grid-6 {
    width: 50%;
  }

  .grid-7 {
    width: 58.33%;
  }

  .grid-8 {
    width: 66.66%;
  }

  .grid-9 {
    width: 75%
  }

  .grid-10 {
    width: 83.33%;
  }

  .grid-11 {
    width: 91.66%;
  }

  .grid-12,
  .grid-12 .inner-container {
    width: 100%;
  }

  /* Handle Legacy Columns */
  .gf_left_half,
  .gf_left_third, .gf_middle_third,
  .gf_first_quarter, .gf_second_quarter, .gf_third_quarter,
  .gf_list_2col li, .gf_list_3col li, .gf_list_4col li, .gf_list_5col li {
    float: left;
  }

  .gf_right_half,
  .gf_right_third,
  .gf_fourth_quarter {
    float: right;
  }

  .gf_left_half, .gf_right_half,
  .gf_list_2col li {
    width: 49%;
  }

  .gf_left_third, .gf_middle_third, .gf_right_third,
  .gf_list_3col li {
    width: 32.3%;
  }

  .gf_first_quarter, .gf_second_quarter, .gf_third_quarter, .gf_fourth_quarter {
    width: 24%;
  }

  .gf_list_4col li {
    width: 24%;
  }

  .gf_list_5col li {
    width: 19%;
  }

  .gf_left_half, .gf_right_half {
    padding-right: 1%;
  }

  .gf_left_third, .gf_middle_third, .gf_right_third {
    padding-right: 1.505%;
  }

  .gf_first_quarter, .gf_second_quarter, .gf_third_quarter, .gf_fourth_quarter {
    padding-right: 1.333%;
  }

  .gf_right_half, .gf_right_third, .gf_fourth_quarter {
    padding-right: 0;
  }

  /* Don't double float the list items if already floated (mPDF does not support this ) */
  .gf_left_half li, .gf_right_half li,
  .gf_left_third li, .gf_middle_third li, .gf_right_third li {
    width: 100% !important;
    float: none !important;
  }

  /*
   * Headings
   */
  h3 {
    margin: 1.5mm 0 0.5mm;
    padding: 0;
  }

  /*
   * Quiz Style Support
   */
  .gquiz-field {
    color: #666;
  }

  .gquiz-correct-choice {
    font-weight: bold;
    color: black;
  }

  .gf-quiz-img {
    padding-left: 5px !important;
    vertical-align: middle;
  }

  /*
   * Survey Style Support
   */
  .gsurvey-likert-choice-label {
    padding: 4px;
  }

  .gsurvey-likert-choice, .gsurvey-likert-choice-label {
    text-align: center;
  }

  /*
   * Terms of Service (Gravity Perks) Support
   */
  .terms-of-service-agreement {
    padding-top: 2px;
    font-weight: bold;
  }

  .terms-of-service-tick {
    font-size: 150%;
  }

  /*
   * List Support
   */
  ul, ol {
    margin: 0;
    padding-left: 1mm;
    padding-right: 1mm;
  }

  li {
    margin: 0;
    padding: 0;
    padding-left: 3mm;
    list-style-position: inside;
  }

  /*
   * Form Title
   */
  #form-title {
    position: absolute;
    width: 173mm;
    font-family: Arial, sans-serif;
    font-weight: bold;
    font-size: 19pt;
  }

  /*
   * Section Break
   */
  .gfpdf-section-description {
    padding-bottom: 2mm;
  }

  /*
   * HTML
   */
  .gfpdf-html p {
    margin: 1.75mm 0;
    padding: 0;
  }

  /*
   * Independant Template Styles
   */
  /* Header Fields */
  #patient-name {
    top: 29.2mm;
    left: 53mm;
    width: 93.5mm;
  }

  #gender {
    top: 29.2mm;
    left: 163mm;
    width: 24.5mm;
  }

  #date-of-birth {
    top: 36mm;
    left: 52mm;
    width: 55.5mm;
  }

  #phone {
    top: 36mm;
    left: 122mm;
    width: 65.5mm;
  }

  #address {
    top: 43.2mm;
    left: 43.5mm;
    width: 143.5mm;
  }

  #city-state-zip {
    top: 50mm;
    left: 54.5mm;
    width: 133.5mm;
  }

  #allergy {
    top: 57mm;
    left: 44.5mm;
    width: 143.5mm;
  }

  /* Checkboxes */
  #bill-clinic-patient-pickup,
  #bill-clinic-clinic-pickup,
  #bill-patient-patient-pickup,
  #bill-clinic-mail-patient,
  #bill-clinic-mail-clinic,
  #bill-patient-mail-patient {
    font-size: 23pt;
    line-height: 23pt;
    font-family: dejavusans
  }

  #bill-clinic-patient-pickup,
  #bill-clinic-mail-patient {
    left: 27.8mm;
  }

  #bill-clinic-clinic-pickup,
  #bill-clinic-mail-clinic {
    left: 82.3mm;
  }

  #bill-patient-patient-pickup,
  #bill-patient-mail-patient {
    left: 135.3mm;
  }

  #bill-clinic-patient-pickup,
  #bill-clinic-clinic-pickup,
  #bill-patient-patient-pickup {
    top: 67mm;
  }

  #bill-clinic-mail-patient,
  #bill-clinic-mail-clinic,
  #bill-patient-mail-patient {
    top: 75.5mm;
  }

  /* Footer Section */
  #prescriber-name {
    bottom: 41mm;
    left: 54mm;
    width: 136mm;
  }

  #office-phone {
    bottom: 34mm;
    left: 48.5mm;
    width: 55mm;
  }

  #fax {
    bottom: 34mm;
    left: 112mm;
    width: 78mm;
  }

  #prescriber-address {
    bottom: 27mm;
    left: 40mm;
    width: 69mm;
  }

  #prescriber-city-state-zip {
    bottom: 27mm;
    left: 136.5mm;
    width: 53mm;
  }

  #npi-dea {
    bottom: 20mm;
    left: 46mm;
    width: 67mm;
  }

  #prescriber-date {
    bottom: 20mm;
    left: 125mm;
    width: 65mm;
  }

  #prescriber-signature {
    bottom: 13mm;
    left: 60mm;
    height: 15mm;
  }

  /* Shared Field CSS */
  #patient-name,
  #gender,
  #date-of-birth,
  #phone,
  #address,
  #city-state-zip,
  #allergy,
  #bill-clinic-patient-pickup,
  #bill-clinic-clinic-pickup,
  #bill-patient-patient-pickup,
  #bill-clinic-mail-patient,
  #bill-clinic-mail-clinic,
  #bill-patient-mail-patient,
  #prescriber-name,
  #office-phone,
  #fax,
  #prescriber-address,
  #prescriber-city-state-zip,
  #npi-dea,
  #prescriber-date,
  #prescriber-signature {
    position: absolute;
  }

  #patient-name,
  #gender,
  #date-of-birth,
  #phone,
  #address,
  #city-state-zip,
  #allergy,
  #prescriber-name,
  #office-phone,
  #fax,
  #prescriber-address,
  #prescriber-city-state-zip,
  #npi-dea,
  #prescriber-date {
    height: 10mm;
    line-height: 10.8pt;
  }
</style>

<htmlpageheader name="Header">
	<!-- Form Title -->
	<div id="form-title"><?php echo $show_form_title ? wp_kses_post( $form_data['form_title'] ) : ''; ?></div> &nbsp;

	<!-- Header Questions -->
	<div id="patient-name"><?php echo esc_html( $patient_name ) ?></div> &nbsp;
	<div id="gender"><?php echo esc_html( $patient_gender ) ?></div> &nbsp;
	<div id="date-of-birth"><?php echo esc_html( $patient_dob ) ?></div> &nbsp;
	<div id="phone"><?php echo esc_html( $patient_phone ) ?></div> &nbsp;
	<div id="address"><?php echo esc_html( $patient_street ) ?></div> &nbsp;
	<div id="city-state-zip"><?php echo esc_html( $patient_city_state_zip ); ?></div> &nbsp;
	<div id="allergy"><?php echo esc_html( $patient_allergies ) ?></div> &nbsp;

	<!-- Checkboxes Header -->
	<?php
	$options = [
		'bill-clinic-patient-pickup'  => 'Bill Clinic | Patient Pickup',
		'bill-clinic-clinic-pickup'   => 'Bill Clinic | Clinic Pickup',
		'bill-patient-patient-pickup' => 'Bill Patient | Patient Pickup',
		'bill-clinic-mail-patient'    => 'Bill Clinic | Mail to Patient',
		'bill-clinic-mail-clinic'     => 'Bill Clinic | Mail to Clinic',
		'bill-patient-mail-patient'   => 'Bill Patient | Mail to Patient',
	];

	foreach ( $options as $id => $label ) {
		if ( in_array( $label, $billing_options, true ) ) {
			echo '<div id="' . esc_attr( $id ) . '">&#10004;</div> &nbsp;';
		}
	}
	?>
</htmlpageheader>

<!-- Content -->
<?php
$pdf = GPDFAPI::get_pdf_class();
$pdf->process_html_structure( $entry, GPDFAPI::get_pdf_class( 'model' ), $html_config );
?>

<!-- Footer Questions -->
<htmlpagefooter name="Footer">
	<div id="prescriber-name"><?php echo esc_html( $prescriber_name ) ?></div> &nbsp;
	<div id="office-phone"><?php echo esc_html( $prescriber_phone ) ?></div> &nbsp;
	<div id="fax"><?php echo esc_html( $prescriber_fax ) ?></div> &nbsp;
	<div id="prescriber-address"><?php echo esc_html( $prescriber_street ) ?></div> &nbsp;
	<div id="prescriber-city-state-zip"><?php echo esc_html( $prescriber_city_state_zip ); ?></div> &nbsp;
	<div id="npi-dea"><?php echo esc_html( $npi_dea ) ?></div> &nbsp;
	<div id="prescriber-date"><?php echo esc_html( $date ) ?></div> &nbsp;

	<div id="prescriber-signature">
		<?php if ( ! empty( $signature ) ) {
			echo '<img src="' . esc_attr( $signature . '&t=1' ) . '" height="12mm" />';
		}
		?>
		&nbsp;
	</div>
</htmlpagefooter>
