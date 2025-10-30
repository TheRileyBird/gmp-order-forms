<?php

namespace GFPDF\Templates\Config;

use GFPDF\Helper\Helper_Interface_Config;
use GFPDF\Helper\Helper_Abstract_Config_Settings;

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Topical Hormone
 *
 * @package  GFPDF\Templates\Config
 *
 * @Internal See https://docs.gravitypdf.com/v6/install-template-via-template-manager for more information about this class
 */
class Topical_Hormone extends Helper_Abstract_Config_Settings implements Helper_Interface_Config {

	/**
	 * Return the templates configuration structure which control what extra fields will be shown in the "Template" tab when configuring a form's PDF.
	 *
	 * @return array The array, split into core components and custom fields
	 *
	 * @since 1.0
	 */
	public function configuration() {
		return [
			'core' => [
				'show_form_title'      => true,
				'show_page_names'      => true,
				'show_html'            => true,
				'show_section_content' => true,
				'enable_conditional'   => true,
				'show_empty'           => true,
			],

			/* Create custom fields to control the look and feel of a template */
			'fields' => [
				'order_form_patient_section' => [
					'id'    => 'order_form_patient_section',
					'type'  => 'descriptive_text',
					'desc'  => '<h2>' . esc_html__( 'Patient Section', 'gravity-pdf' ) . '</h2>',
					'class' => 'gfpdf-no-padding',
				],

				'order_form_patient_name' => [
					'id'         => 'order_form_patient_name',
					'name'       => esc_html__( 'Patient Name', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],

				'order_form_gender' => [
					'id'         => 'order_form_gender',
					'name'       => esc_html__( 'Gender', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],

				'order_form_dob' => [
					'id'         => 'order_form_dob',
					'name'       => esc_html__( 'Date of Birth', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],

				'order_form_phone' => [
					'id'         => 'order_form_phone',
					'name'       => esc_html__( 'Phone Number', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],

				'order_form_street_address' => [
					'id'         => 'order_form_street_address',
					'name'       => esc_html__( 'Street Address', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],
                
                'order_form_city' => [
                    'id'         => 'order_form_patient_city',
                    'name'       => esc_html__( 'City', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_state' => [
                    'id'         => 'order_form_patient_state',
                    'name'       => esc_html__( 'State', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_zip' => [
                    'id'         => 'order_form_patient_zip',
                    'name'       => esc_html__( 'Zip', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],

				'order_form_allergies' => [
					'id'         => 'order_form_allergies',
					'name'       => esc_html__( 'Allergies', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],

                'order_form_billing' => [
                    'id'         => 'order_form_billing',
                    'name'       => esc_html__( 'Billing Choice', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_scripts' => [
                    'id'         => 'order_form_scripts',
                    'name'       => esc_html__( 'Total # Of Scripts', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                
                // Form Section
                'order_form_prescription_section' => [
                    'id'    => 'order_form_prescription_section',
                    'type'  => 'descriptive_text',
                    'desc'  => '<h2>' . esc_html__( 'Prescription Section', 'gravity-pdf' ) . '</h2>',
                    'class' => 'gfpdf-no-padding',
                ],
                
                'order_form_estriol' => [
                    'id' => 'order_form_estriol',
                    'name' => esc_html__( 'Estriol 0.6%', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_biest_8020_prog' => [
                    'id' => 'order_form_biest_8020_prog',
                    'name' => esc_html__( 'Bi-Est 0.25mg (80/20)/Prog 25mg', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_biest_8020_prog_testosterone' => [
                    'id' => 'order_form_biest_8020_prog_testosterone',
                    'name' => esc_html__( 'Bi-Est 0.25mg (80/20)/Prog 25mg add Testosterone 0.5mg/g or 1mg/g', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_biest_5050_prog' => [
                    'id' => 'order_form_biest_5050_prog',
                    'name' => esc_html__( 'Bi-Est 0.25mg (50/50)/Prog 25mg', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_biest_5050_prog_testosterone' => [
                    'id' => 'order_form_biest_5050_prog_testosterone',
                    'name' => esc_html__( 'Bi-Est 0.25mg (50/50)/Prog 25mg add Testosterone 0.5mg/g or 1mg/g', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_progesterone' => [
                    'id' => 'order_form_progesterone',
                    'name' => esc_html__( 'Progesterone 5% / 10% / 20%', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_testosterone' => [
                    'id' => 'order_form_testosterone',
                    'name' => esc_html__( 'Testosterone 0.2% / 1% / 2% / 5%', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_scream_cream' => [
                    'id' => 'order_form_scream_cream',
                    'name' => esc_html__( 'Scream Cream (Theophylline 2.4% / Arginine 6% / Ergoloid 0.05% / Pentoxifylline 5% / Sildenafil 1% / Testosterone 0.1%)', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_anhydrous' => [
                    'id' => 'order_form_anhydrous',
                    'name' => esc_html__( 'Anhydrous', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_gel_cream' => [
                    'id' => 'order_form_gel_cream',
                    'name' => esc_html__( 'Gel Cream', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_solution' => [
                    'id' => 'order_form_solution',
                    'name' => esc_html__( 'Solution', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_custom_estriol' => [
                    'id' => 'order_form_custom_estriol',
                    'name' => esc_html__( 'Custom Estriol mg/g', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_custom_estradiol' => [
                    'id' => 'order_form_custom_estradiol',
                    'name' => esc_html__( 'Custom Estradiol mg/g', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_custom_estrone' => [
                    'id' => 'order_form_custom_estrone',
                    'name' => esc_html__( 'Custom Estrone mg/g', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_custom_dhea' => [
                    'id' => 'order_form_custom_dhea',
                    'name' => esc_html__( 'Custom DHEA mg/g', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_custom_progesterone' => [
                    'id' => 'order_form_custom_progesterone',
                    'name' => esc_html__( 'Custom Progesterone mg/g', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_custom_testosterone' => [
                    'id' => 'order_form_custom_testosterone',
                    'name' => esc_html__( 'Custom Testosterone mg/g', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_custom_formulations' => [
                    'id' => 'order_form_custom_formulations',
                    'name' => esc_html__( 'Custom Formulations', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_custom_anhydrous' => [
                    'id' => 'order_form_custom_anhydrous',
                    'name' => esc_html__( 'Custom Anhydrous', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_custom_gel_cream' => [
                    'id' => 'order_form_custom_gel_cream',
                    'name' => esc_html__( 'Custom Gel Cream', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_custom_solution' => [
                    'id' => 'order_form_custom_solution',
                    'name' => esc_html__( 'Custom Solution', 'gravity-forms-pdf-extended' ),
                    'type' => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                
                'order_form_directions' => [
                    'id'         => 'order_form_directions',
                    'name'       => esc_html__( 'Directions', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_quantity' => [
                    'id'         => 'order_form_quantity',
                    'name'       => esc_html__( 'Quantity', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_refill' => [
                    'id'         => 'order_form_refill',
                    'name'       => esc_html__( 'Refill', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                
                // Prescriber Section
				'order_form_prescriber_section' => [
					'id'    => 'order_form_prescriber_section',
					'type'  => 'descriptive_text',
					'desc'  => '<h2>' . esc_html__( 'Prescriber Section', 'gravity-pdf' ) . '</h2>',
					'class' => 'gfpdf-no-padding',
				],

				'order_form_prescriber_name' => [
					'id'         => 'order_form_prescriber_name',
					'name'       => esc_html__( 'Prescriber Name', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],

				'order_form_prescriber_phone' => [
					'id'         => 'order_form_prescriber_phone',
					'name'       => esc_html__( 'Prescriber Phone Number', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],

				'order_form_prescriber_fax' => [
					'id'         => 'order_form_prescriber_fax',
					'name'       => esc_html__( 'Prescriber Fax Number', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],

				'order_form_prescriber_street_address' => [
					'id'         => 'order_form_prescriber_street_address',
					'name'       => esc_html__( 'Prescriber Street Address', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],
                
                'order_form_prescriber_city' => [
                    'id'         => 'order_form_prescriber_city',
                    'name'       => esc_html__( 'City', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_prescriber_state' => [
                    'id'         => 'order_form_prescriber_state',
                    'name'       => esc_html__( 'State', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_prescriber_zip' => [
                    'id'         => 'order_form_prescriber_zip',
                    'name'       => esc_html__( 'Zip', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],

				'order_form_prescriber_npi_dea' => [
					'id'         => 'order_form_prescriber_npi_dea',
					'name'       => esc_html__( 'NPI/DEA#', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],

				'order_form_prescriber_date' => [
					'id'         => 'order_form_prescriber_date',
					'name'       => esc_html__( 'Date', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],

				'order_form_prescriber_signature' => [
					'id'         => 'order_form_prescriber_signature',
					'name'       => esc_html__( 'Signature', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],
			],
		];
	}
}
