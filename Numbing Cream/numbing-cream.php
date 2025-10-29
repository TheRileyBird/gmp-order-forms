<?php

/*
 * Template Name: Numbing Cream
 * Version: 1.0
 * Description: Numbing Cream Order Form
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

$lidocaine_23_tetracaine_7 = $gform->process_tags( $settings['order_form_lidocaine_23_tetracaine_7'] ?? '', $form, $entry );
$benzocaine_20_lidocaine_10_tetracaine_10 = $gform->process_tags( $settings['order_form_benzocaine_20_lidocaine_10_tetracaine_10'] ?? '', $form, $entry );
$benzocaine_20_lidocaine_10_tetracaine_10_bupivacaine_4 = $gform->process_tags( $settings['order_form_benzocaine_20_lidocaine_10_tetracaine_10_bupivacaine_4'] ?? '', $form, $entry );
$lidocaine_23_tetracaine_7_phenylephrine_1 = $gform->process_tags( $settings['order_form_lidocaine_23_tetracaine_7_phenylephrine_1'] ?? '', $form, $entry );
$customizable_formulation = $gform->process_tags( $settings['order_form_customizable_formulation'] ?? '', $form, $entry );
$benzocaine_20_lidocaine_10_tetracaine_10_bupivacaine_2 = $gform->process_tags( $settings['order_form_benzocaine_20_lidocaine_10_tetracaine_10_bupivacaine_2'] ?? '', $form, $entry );
$lidocaine_23_tetracaine_7_phenylephrine_2 = $gform->process_tags( $settings['order_form_lidocaine_23_tetracaine_7_phenylephrine_2'] ?? '', $form, $entry );

$pump_jar_tube = $gform->process_tags( $settings['order_form_pump_jar_tube'] ?? '', $form, $entry );
$customizable_formulation_checkbox = $gform->process_tags( $settings['order_form_customizable_formulation_checkbox'] ?? '', $form, $entry );

/* Ingredient percents (free text fields for custom %) */
$benzocaine_percent = $gform->process_tags( $settings['order_form_benzocaine_percent'] ?? '', $form, $entry );
$lidocaine_percent = $gform->process_tags( $settings['order_form_lidocaine_percent'] ?? '', $form, $entry );
$tetracaine_percent = $gform->process_tags( $settings['order_form_tetracaine_percent'] ?? '', $form, $entry );
$phenylephrine_percent = $gform->process_tags( $settings['order_form_phenylephrine_percent'] ?? '', $form, $entry );
$bupivacaine_percent = $gform->process_tags( $settings['order_form_bupivacaine_percent'] ?? '', $form, $entry );

/* Packaging choices broken out if you want separate fields */
$pump_choice = $gform->process_tags( $settings['order_form_pump_choice'] ?? '', $form, $entry );
$jar_choice = $gform->process_tags( $settings['order_form_jar_choice'] ?? '', $form, $entry );
$tube_choice = $gform->process_tags( $settings['order_form_tube_choice'] ?? '', $form, $entry );



    $directions                  = $gform->process_tags( $settings['order_form_directions'] ?? '', $form, $entry );
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
<p>All formulas are customizable.</p>
&nbsp;
<!--  Prescription Table  -->
<table style="width: 100%; border-collapse: collapse;">
    <tbody>
        <tr style="width: 100%; text-align: left;">
            <td><strong>Face Creams</strong></td>
        </tr>
        <tr style="height:50px;">
            <td style="width: 50%;"><span class="box"><?= $hydroquinone_12 ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Hydroquinone 12% Cream</td>
            <td style="width: 50%;"><span class="box"><?= $hydroquinone_8 ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Hydroquinone 8%/Tretinoin 0.1%/Fluocinolone 0.01% Cream</td>
        </tr>
        <tr style="height:50px;">
            <td style="width: 50%;"><span class="box"><?= $hydroquinone_8_tretinoin ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Hydroquinone 8% Cream</td>
            <td style="width: 50%;"><span class="box"><?= $hydroquinone_7_tretinoin ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Hydroquinone 7%/Tretinoin 0.05%/
                Fluocinolone 0.01% Cream</td>
        </tr>
        <tr style="height:50px;">
            <td style="width: 50%;"><span class="box"><?= $hydroquinone_4_tretinoin ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Hydroquinone 4%/Tretinoin 0.025%/
                Hydrocortisone 1%/Kojic Acid 4% Cream</td>
            <td style="width: 50%;"></td>
        </tr>
    </tbody>
</table>
&nbsp;
<table style="width: 100%; border-collapse: collapse;">
    <tbody>
    <tr style="width: 100%; text-align: left;">
        <td><strong>Acne Creams</strong></td>
    </tr>
    <tr style="height:50px;">
        <td style="width: 50%;"><span class="box"><?= $tretinoin_niacinamide_025 ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Tretinoin 0.025%/Niacinamide 5% Cream</td>
        <td style="width: 50%;"><span class="box"><?= $tretinoin_niacinamide_05 ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Tretinoin 0.1%/Niacinamide 5% Cream</td>
    </tr>
    <tr style="height:50px;">
        <td style="width: 50%;"><span class="box"><?= $tretinoin_niacinamide_1 ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Tretinoin 0.05%/Niacinamide 5% Cream</td>
        <td style="width: 50%;"><span class="box"><?= $tretinoin_clindamycin ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Tretinoin 0.025%/Clindamycin 1% Cream</td>
    </tr>
    </tbody>
</table>
&nbsp;
<table style="width: 100%; border-collapse: collapse;">
    <tbody>
    <tr style="width: 100%; text-align: left;">
        <td><strong>Custom Fomulations</strong></td>
    </tr>
    <tr style="height:50px;">
        <td style="width: 33%;"><span class="box"><?= $tretinoin ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Tretinoin
            <span class="underline">&nbsp;&nbsp;<?= $tretinoin_percent ? esc_html( $tretinoin_percent ) . '%' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
        <td style="width: 33%;"><span class="box"><?= $kojic ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Kojic Acid
            <span class="underline">&nbsp;&nbsp;<?= $kojic_percent ? esc_html( $kojic_percent ) . '%' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
        <td style="width: 34%;"><span class="box"><?= $vitamin_e ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Vitamin E
            <span class="underline">&nbsp;&nbsp;<?= $vitamin_e_percent ? esc_html( $vitamin_e_percent ) . '%' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
    </tr>
    <tr style="height:50px;">
        <td style="width: 33%;"><span class="box"><?= $hydroquinone ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Hydroquinone
            <span class="underline">&nbsp;&nbsp;<?= $hydroquinone_percent ? esc_html( $hydroquinone_percent ) . '%' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
        <td style="width: 33%;"><span class="box"><?= $azelaic ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Azelaic Acid
            <span class="underline">&nbsp;&nbsp;<?= $azelaic_percent ? esc_html( $azelaic_percent ) . '%' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
        <td style="width: 34%;"><span class="box"><?= $lipoic ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Lipoic Acid
            <span class="underline">&nbsp;&nbsp;<?= $lipoic_percent ? esc_html( $lipoic_percent ) . '%' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
    </tr>
    <tr style="height:50px;">
        <td style="width: 33%;"><span class="box"><?= $fluocinolone ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Fluocinolone
            <span class="underline">&nbsp;&nbsp;<?= $fluocinolone_percent ? esc_html( $fluocinolone_percent ) . '%' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
        <td style="width: 33%;"><span class="box"><?= $niacinamide ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Niacinamide
            <span class="underline">&nbsp;&nbsp;<?= $niacinamide_percent ? esc_html( $niacinamide_percent ) . '%' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
        <td style="width: 34%;"></td>
    </tr>
    <tr style="height:50px;">
        <td style="width: 33%;"><span class="box"><?= $ascorbic ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Ascorbic Acid
            <span class="underline">&nbsp;&nbsp;<?= $ascorbic_percent ? esc_html( $ascorbic_percent ) . '%' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
        <td style="width: 33%;"><span class="box"><?= $hydrocortisone ? '&#10004;' : '&nbsp;&nbsp;&nbsp;' ?></span>&nbsp; Hydrocortisone
            <span class="underline">&nbsp;&nbsp;<?= $hydrocortisone_percent ? esc_html( $hydrocortisone_percent ) . '%' : '&nbsp;' ?>&nbsp;&nbsp;</span></td>
        <td style="width: 34%;"></td>
    </tr>
    </tbody>
</table>
&nbsp;
<table style="width: 100%; border-collapse: collapse;">
    <tbody>
    <tr>
        <td style="width: 100%; height: 30px;"><strong>Directions:</strong> <span class="underline">&nbsp;&nbsp;<?php echo esc_html( $directions ) ?>&nbsp;&nbsp;</span></td>
    </tr>
    <tr>
        <td style="width: 100%; height: 30px;">
            <strong>Qty:</strong> <span class="underline">&nbsp;&nbsp; <?php echo esc_html( $quantity ) ?> &nbsp;&nbsp;</span> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong>Refills:</strong> <span class="underline">&nbsp;&nbsp; <?php echo esc_html( $refill ) ?> &nbsp;&nbsp;</span>
        </td>
    </tr>
    </tbody>
</table>

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
