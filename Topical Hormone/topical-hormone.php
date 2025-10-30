<?php

/*
 * Template Name: Topical Hormone
 * Version: 1.3.3
 * Description: Topical Hormone Order Form
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
$patient_city              = $gform->process_tags( $settings['order_form_patient_city'] ?? '', $form, $entry );
$patient_state             = $gform->process_tags( $settings['order_form_patient_state'] ?? '', $form, $entry );
$patient_zip               = $gform->process_tags( $settings['order_form_patient_zip'] ?? '', $form, $entry );
$patient_allergies         = $gform->process_tags( $settings['order_form_allergies'] ?? '', $form, $entry );
$billing                   = $gform->process_tags( $settings['order_form_billing'] ?? '', $form, $entry );
$scripts                   = $gform->process_tags( $settings['order_form_scripts'] ?? '', $form, $entry );
$prescriber_name           = $gform->process_tags( $settings['order_form_prescriber_name'] ?? '', $form, $entry );
$prescriber_phone          = $gform->process_tags( $settings['order_form_prescriber_phone'] ?? '', $form, $entry );
$prescriber_fax            = $gform->process_tags( $settings['order_form_prescriber_fax'] ?? '', $form, $entry );
$prescriber_street         = $gform->process_tags( $settings['order_form_prescriber_street_address'] ?? '', $form, $entry );
$prescriber_city_state_zip = $gform->process_tags( $settings['order_form_prescriber_city_state_zip'] ?? '', $form, $entry );
$prescriber_city           = $gform->process_tags( $settings['order_form_prescriber_city'] ?? '', $form, $entry );
$prescriber_state          = $gform->process_tags( $settings['order_form_prescriber_state'] ?? '', $form, $entry );
$prescriber_zip            = $gform->process_tags( $settings['order_form_prescriber_zip'] ?? '', $form, $entry );
$npi_dea                   = $gform->process_tags( $settings['order_form_prescriber_npi_dea'] ?? '', $form, $entry );
$date                      = $gform->process_tags( $settings['order_form_prescriber_date'] ?? '', $form, $entry );
$signature                 = $gform->process_tags( $settings['order_form_prescriber_signature'] ?? '', $form, $entry );

$billing_options           = $gform->process_tags( $settings['order_form_billing_options'] ?? '', $form, $entry );
$billing_options           = array_map( 'trim', explode( ',', $billing_options ) );

$estriol = $gform->process_tags( $settings['order_form_estriol'] ?? '', $form, $entry );

$biest_8020_prog = $gform->process_tags( $settings['order_form_biest_8020_prog'] ?? '', $form, $entry );
$biest_8020_prog_testosterone = $gform->process_tags( $settings['order_form_biest_8020_prog_testosterone'] ?? '', $form, $entry );

$biest_5050_prog = $gform->process_tags( $settings['order_form_biest_5050_prog'] ?? '', $form, $entry );
$biest_5050_prog_testosterone = $gform->process_tags( $settings['order_form_biest_5050_prog_testosterone'] ?? '', $form, $entry );

$progesterone = $gform->process_tags( $settings['order_form_progesterone'] ?? '', $form, $entry );
$testosterone = $gform->process_tags( $settings['order_form_testosterone'] ?? '', $form, $entry );
$scream_cream = $gform->process_tags( $settings['order_form_scream_cream'] ?? '', $form, $entry );
$anhydrous = $gform->process_tags( $settings['order_form_anhydrous'] ?? '', $form, $entry );
$gel_cream = $gform->process_tags( $settings['order_form_gel_cream'] ?? '', $form, $entry );
$solution = $gform->process_tags( $settings['order_form_solution'] ?? '', $form, $entry );
$custom_estriol = $gform->process_tags( $settings['order_form_custom_estriol'] ?? '', $form, $entry );
$custom_estradiol = $gform->process_tags( $settings['order_form_custom_estradiol'] ?? '', $form, $entry );
$custom_estrone = $gform->process_tags( $settings['order_form_custom_estrone'] ?? '', $form, $entry );
$custom_dhea = $gform->process_tags( $settings['order_form_custom_dhea'] ?? '', $form, $entry );
$custom_progesterone = $gform->process_tags( $settings['order_form_custom_progesterone'] ?? '', $form, $entry );
$custom_testosterone = $gform->process_tags( $settings['order_form_custom_testosterone'] ?? '', $form, $entry );
$custom_formulations = $gform->process_tags( $settings['order_form_custom_formulations'] ?? '', $form, $entry );
$custom_anhydrous = $gform->process_tags( $settings['order_form_custom_anhydrous'] ?? '', $form, $entry );
$custom_gel_cream = $gform->process_tags( $settings['order_form_custom_gel_cream'] ?? '', $form, $entry );
$custom_solution = $gform->process_tags( $settings['order_form_custom_solution'] ?? '', $form, $entry );

$directions                 = $gform->process_tags( $settings['order_form_directions'] ?? '', $form, $entry );
$quantity                   = $gform->process_tags( $settings['order_form_quantity'] ?? '', $form, $entry );
$refill                     = $gform->process_tags( $settings['order_form_refill'] ?? '', $form, $entry );

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
  /* Handle Gravity Forms CSS Ready Classes */
  .row-separator {
    clear: both;
    padding: 2mm 0;
    border-bottom: 1px solid #CCCCCC;
  }

  /* Handle GF2.5+ Columns */
  .grid {
    float: <?php echo ( $settings['rtl'] ?? 'No' ) === 'Yes' ? 'right' : '&nbsp;&nbsp;&nbsp;left'; ?>;
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
    font-family: Arial, sans-serif;
    font-weight: bold;
    font-size: 19pt;
  }

  /*
   * HTML
   */
  .gfpdf-html p {
    margin: 1.75mm 0;
    padding: 0;
  }

    /* Table Classes */
    /*td, th {*/
    /*  vertical-align: middle; !* Centers vertically *!*/
    /*}*/

    /* Utility Classes */
    .text-center {
        text-align: center;
    }
    .underline {
        text-decoration: underline;
    }
    .bottomline {
        border-bottom: 1px solid #000;
        display: inline-block;
        padding-bottom: 1mm;
    }
    .bold {
        font-weight: bold;
    }
    .flex {
        display: flex;
    }
    .flex-row {
        flex-direction: row;
    }
    .items-center {
        align-items: center;
    }
    .box {
        display: inline-block;
        width: 8mm;
        height: 8mm;
        border: 1px solid #000;
        text-align: center;
        line-height: 6mm;
        font-size: 10pt;
    }
</style>

<!-- Form Title -->
<div id="form-title"><?php echo $show_form_title ? wp_kses_post( $form_data['form_title'] ) : '&nbsp;&nbsp;&nbsp;'; ?></div>

<!-- Patient Information Table -->
<table style="width: 100%; border-collapse: collapse;">
    <tr>
        <td style="border: 2px solid #000; padding: 6px; width: 60%;"><strong>Patient Name:</strong>&nbsp;&nbsp;<?php echo esc_html( $patient_name ) ?></td>
        <td style="border: 2px solid #000; padding: 6px; width: 40%;"><strong>Date:</strong>&nbsp;&nbsp;<?php echo esc_html( $date ) ?></td>
    </tr>
    <tr>
        <td style="border: 2px solid #000; padding: 6px;"><strong>Mobile Number:</strong>&nbsp;&nbsp;<?php echo esc_html( $patient_phone ) ?></td>
        <td style="border: 2px solid #000; padding: 6px;"><strong>DOB:</strong>&nbsp;&nbsp;<?php echo esc_html( $patient_dob ) ?></td>
    </tr>
    <tr>
        <td style="border: 2px solid #000; padding: 6px;"><strong>Drug Allergies:</strong>&nbsp;&nbsp;<?php echo esc_html( $patient_allergies ) ?></td>
        <td style="border: 2px solid #000; padding: 6px;"><strong>Gender:</strong>&nbsp;&nbsp;<?php echo esc_html( $patient_gender ) ?></td>
    </tr>
</table>
<table style="width: 100%; border-collapse: collapse;">
    <tr>
        <td style="border-right: 2px solid #000; border-left: 2px solid #000; padding: 6px; width: 100%;"><strong>Address:</strong>&nbsp;&nbsp;<?php echo esc_html( $patient_street ) ?></td>
    </tr>
</table>
<table style="width: 100%; border-collapse: collapse; padding-bottom: 4mm;">
    <tr>
        <td style="border: 2px solid #000; padding: 6px;"><strong>City:</strong>&nbsp;&nbsp;<?php echo esc_html( $patient_city ) ?></td>
        <td style="border: 2px solid #000; padding: 6px;"><strong>State:</strong>&nbsp;&nbsp;<?php echo esc_html( $patient_state ) ?></td>
        <td style="border: 2px solid #000; padding: 6px;"><strong>Zip:</strong>&nbsp;&nbsp;<?php echo esc_html( $patient_zip ) ?></td>
    </tr>
</table>
<table style="width: 100%; border-collapse: collapse;">
    <tr>
        <td style="border-right: 2px solid #000; border-left: 2px solid #000; border-bottom: 2px solid #000; padding: 6px; width: 60%;"><strong>Billing:</strong>&nbsp;&nbsp;<?php echo esc_html( $billing ) ?></td>
        <td style="border-right: 2px solid #000; border-left: 2px solid #000; border-bottom: 2px solid #000; padding: 6px; width: 40%;"><strong>Total # of scripts in this order:</strong>&nbsp;&nbsp;<?php echo esc_html( $scripts ) ?></td>
    </tr>
</table>
<span>All formulas are customizable .</span>
<p>&nbsp;</p>
<!--  Prescription Table  -->
<table style="width: 100%; border-collapse: collapse;">
    <tbody>
    <tr>
        <td style="width: 50%;"><strong>Topical Formulations</strong></td>
        <td style="width: 10%;">&nbsp;</td>
        <td style="width: 50%;"><strong>Custom Formulations</strong></td>
    </tr>
    <tr>
        <td style="height:30px; width: 45%;"><span class="box"><?= $estriol ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Estriol
            <span class="underline">&nbsp;&nbsp;<?= $estriol ? esc_html( $estriol ) : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
        <td style="height:30px; width: 10%;">&nbsp;</td>
        <td style="height:30px; width: 45%;"><span class="box"><?= $custom_estriol ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Estriol
            <span class="underline">&nbsp;&nbsp;<?= $custom_estriol ? esc_html( $custom_estriol ) . '&nbsp;&nbsp;mg/g' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
    </tr>
    <tr>
        <td style="height:30px; width: 45%;">
            <span class="box"><?= $biest_8020_prog ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Bi-Est 0.25mg (80/20)/Prog 25mg</span>
            <br>
            <span>Add Testosterone <span class="underline">&nbsp;&nbsp;<?= $biest_8020_prog_testosterone ? esc_html( $biest_8020_prog_testosterone ) : '&nbsp;' ?>&nbsp;&nbsp;</span>
        </td>
        <td style="height:30px; width: 10%;">&nbsp;</td>
        <td style="height:30px; width: 45%;"><span class="box"><?= $custom_estradiol ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Estradiol
            <span class="underline">&nbsp;&nbsp;<?= $custom_estradiol ? esc_html( $custom_estradiol ) . '&nbsp;&nbsp;mg/g' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
    </tr>
    <tr>
        <td style="height:30px; width: 45%;">
            <span class="box"><?= $biest_5050_prog ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Bi-Est 0.25mg (50/50)/Prog 25mg</span>
            <br>
            <span>Add Testosterone <span class="underline">&nbsp;&nbsp;<?= $biest_5050_prog_testosterone ? esc_html( $biest_5050_prog_testosterone ) : '&nbsp;' ?>&nbsp;&nbsp;</span>
        </td>
        <td style="height:30px; width: 10%;">&nbsp;</td>
        <td style="height:30px; width: 45%;"><span class="box"><?= $custom_estrone ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Estrone
            <span class="underline">&nbsp;&nbsp;<?= $custom_estrone ? esc_html( $custom_estrone ) . '&nbsp;&nbsp;mg/g' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
    </tr>
    <tr>
        <td style="height:30px; width: 45%;"><span class="box"><?= $progesterone ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Progesterone
            <span class="underline">&nbsp;&nbsp;<?= $progesterone ? esc_html( $progesterone ) : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
        <td style="height:30px; width: 10%;">&nbsp;</td>
        <td style="height:30px; width: 45%;"><span class="box"><?= $custom_dhea ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; DHEA
            <span class="underline">&nbsp;&nbsp;<?= $custom_dhea ? esc_html( $custom_dhea ) . '&nbsp;&nbsp;mg/g' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
    </tr>
    <tr>
        <td style="height:30px; width: 45%;"><span class="box"><?= $testosterone ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Testosterone
            <span class="underline">&nbsp;&nbsp;<?= $testosterone ? esc_html( $testosterone ) : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
        <td style="height:30px; width: 10%;">&nbsp;</td>
        <td style="height:30px; width: 45%;"><span class="box"><?= $custom_progesterone ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Progesterone
            <span class="underline">&nbsp;&nbsp;<?= $custom_progesterone ? esc_html( $custom_progesterone ) . '&nbsp;&nbsp;mg/g' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
    </tr>
    <tr>
        <td style="height:30px; width: 45%;"><span class="box"><?= $scream_cream ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Scream Cream (Theophylline 2.4%/Arginine 6%/Ergoloid 0.05%/Pentoxifylline 5%/Sildenafil 1%/Testosterone 0.1%)</td>
        <td style="height:30px; width: 10%;">&nbsp;</td>
        <td style="height:30px; width: 45%;"><span class="box"><?= $custom_testosterone ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Testosterone
            <span class="underline">&nbsp;&nbsp;<?= $custom_testosterone ? esc_html( $custom_testosterone ) . '&nbsp;&nbsp;mg/g' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
    </tr>
    <tr>
        <td style="height:30px; width: 45%;">
            <span class="box"><?= $anhydrous ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp;Anhydrous Gel&nbsp;&nbsp;&nbsp;
            <span class="box"><?= $gel_cream ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp;Cream&nbsp;&nbsp;&nbsp;
            <span class="box"><?= $solution ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp;Solution
        </td>
        <td style="height:30px; width: 10%;">&nbsp;</td>
        <td style="height:30px; width: 45%;">
            <span class="box"><?= $custom_anhydrous ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp;Anhydrous Gel&nbsp;&nbsp;&nbsp;
            <span class="box"><?= $custom_gel_cream ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp;Cream&nbsp;&nbsp;&nbsp;
            <span class="box"><?= $custom_solution ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp;Solution
        </td>
    </tr>
    </tbody>
</table>
&nbsp;
<table style="width: 100%; border-collapse: collapse;">
    <tbody>
    <tr>
        <td style="width: 100%; height: 30px;"><strong>Directions:</strong> <span class="underline">&nbsp;&nbsp;<?php echo $directions ?>&nbsp;&nbsp;</span></td>
    </tr>
    <tr>
        <td style="width: 100%; height: 30px;">
            <strong>Qty:</strong> <span class="underline">&nbsp;&nbsp; <?php echo esc_html( $quantity ) ?> &nbsp;&nbsp;</span> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong>Refills:</strong> <span class="underline">&nbsp;&nbsp; <?php echo esc_html( $refill ) ?> &nbsp;&nbsp;</span>
        </td>
    </tr>
    </tbody>
</table>
<p>&nbsp;</p>
<!-- Footer Table -->
&nbsp;
&nbsp;
&nbsp;
<table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="border: 2px solid #000; padding: 6px; width: 50%; vertical-align: bottom;"><strong>Prescriber Name:</strong>&nbsp;&nbsp;<?php echo esc_html( $prescriber_name ) ?></td>
            <td style="border: 2px solid #000; padding: 6px; width: 50%; vertical-align: bottom;"><strong>Prescriber Signature:</strong>&nbsp;&nbsp;<?php if ( ! empty( $signature ) ) {
                    echo '<img src="' . esc_attr( $signature . '&t=1' ) . '" height="12mm" />';
                }
                ?></td>
        </tr>
        <tr>
            <td style="border: 2px solid #000; padding: 6px;"><strong>Prescriber Phone Number:</strong>&nbsp;&nbsp;<?php echo esc_html( $prescriber_phone ) ?></td>
            <td style="border: 2px solid #000; padding: 6px;"><strong>NPI:</strong>&nbsp;&nbsp;<?php echo esc_html( $npi_dea ) ?></td>
        </tr>
</table>
<table style="width: 100%; border-collapse: collapse;">
    <tr>
        <td style="border-right: 2px solid #000; border-left: 2px solid #000; padding: 6px; width: 100%;"><strong>Prescriber Address:</strong>&nbsp;&nbsp;<?php echo esc_html( $prescriber_street ) ?></td>
    </tr>
</table>
<table style="width: 100%; border-collapse: collapse;">
    <tr>
        <td style="border: 2px solid #000; padding: 6px;"><strong>City:</strong>&nbsp;&nbsp;<?php echo esc_html( $prescriber_city ) ?></td>
        <td style="border: 2px solid #000; padding: 6px;"><strong>State:</strong>&nbsp;&nbsp;<?php echo esc_html( $prescriber_state ) ?></td>
        <td style="border: 2px solid #000; padding: 6px;"><strong>Zip:</strong>&nbsp;&nbsp;<?php echo esc_html( $prescriber_zip ) ?></td>
    </tr>
</table>
