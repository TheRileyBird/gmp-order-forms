<?php

namespace GFPDF\Templates\Config;

use GFPDF\Helper\Helper_Interface_Config;
use GFPDF\Helper\Helper_Abstract_Config_Settings;

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NAD
 *
 * @package  GFPDF\Templates\Config
 *
 * @Internal See https://docs.gravitypdf.com/v6/install-template-via-template-manager for more information about this class
 */
class NAD extends Helper_Abstract_Config_Settings implements Helper_Interface_Config {

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
                
                'order_form_nad_100_option_1' => [
                    'id'         => 'order_form_nad_100_option_1',
                    'name'       => esc_html__( 'NAD 100 Option 1', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_100_option_2' => [
                    'id'         => 'order_form_nad_100_option_2',
                    'name'       => esc_html__( 'NAD 100 Option 2', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_100_option_3' => [
                    'id'         => 'order_form_nad_100_option_3',
                    'name'       => esc_html__( 'NAD 100 Option 3', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_100_quantity' => [
                    'id'         => 'order_form_nad_100_quantity',
                    'name'       => esc_html__( 'NAD 100 Quantity', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_100_refill' => [
                    'id'         => 'order_form_nad_100_refill',
                    'name'       => esc_html__( 'NAD 100 Refill', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_100_sig' => [
                    'id'         => 'order_form_nad_100_sig',
                    'name'       => esc_html__( 'NAD 100 Sig', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                
                'order_form_nad_topical_option_1' => [
                    'id'         => 'order_form_nad_topical_option_1',
                    'name'       => esc_html__( 'NAD Topical Option 1', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_topical_option_2' => [
                    'id'         => 'order_form_nad_topical_option_2',
                    'name'       => esc_html__( 'NAD Topical Option 2', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_topical_option_3' => [
                    'id'         => 'order_form_nad_topical_option_3',
                    'name'       => esc_html__( 'NAD Topical Option 3', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_topical_quantity' => [
                    'id'         => 'order_form_nad_topical_quantity',
                    'name'       => esc_html__( 'NAD Topical Quantity', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_topical_refill' => [
                    'id'         => 'order_form_nad_topical_refill',
                    'name'       => esc_html__( 'NAD Topical Refill', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_topical_sig' => [
                    'id'         => 'order_form_nad_topical_sig',
                    'name'       => esc_html__( 'NAD Topical Sig', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                
                'order_form_nad_200_option_1' => [
                    'id'         => 'order_form_nad_200_option_1',
                    'name'       => esc_html__( 'NAD 200 Option 1', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_200_option_2' => [
                    'id'         => 'order_form_nad_200_option_2',
                    'name'       => esc_html__( 'NAD 200 Option 2', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_200_option_3' => [
                    'id'         => 'order_form_nad_200_option_3',
                    'name'       => esc_html__( 'NAD 200 Option 3', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_200_quantity' => [
                    'id'         => 'order_form_nad_200_quantity',
                    'name'       => esc_html__( 'NAD 200 Quantity', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_200_refill' => [
                    'id'         => 'order_form_nad_200_refill',
                    'name'       => esc_html__( 'NAD 200 Refill', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_200_sig' => [
                    'id'         => 'order_form_nad_200_sig',
                    'name'       => esc_html__( 'NAD 200 Sig', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                
                'order_form_nad_rdt_option_1' => [
                    'id'         => 'order_form_nad_rdt_option_1',
                    'name'       => esc_html__( 'NAD RDT Option 1', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_rdt_option_2' => [
                    'id'         => 'order_form_nad_rdt_option_2',
                    'name'       => esc_html__( 'NAD RDT Option 2', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_rdt_option_3' => [
                    'id'         => 'order_form_nad_rdt_option_3',
                    'name'       => esc_html__( 'NAD RDT Option 3', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_rdt_quantity' => [
                    'id'         => 'order_form_nad_rdt_quantity',
                    'name'       => esc_html__( 'NAD RDT Quantity', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_rdt_refill' => [
                    'id'         => 'order_form_nad_rdt_refill',
                    'name'       => esc_html__( 'NAD RDT Refill', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_rdt_sig' => [
                    'id'         => 'order_form_nad_rdt_sig',
                    'name'       => esc_html__( 'NAD RDT Sig', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                
                'order_form_nad_nasal_option_1' => [
                    'id'         => 'order_form_nad_nasal_option_1',
                    'name'       => esc_html__( 'NAD Nasal Option 1', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_nasal_option_2' => [
                    'id'         => 'order_form_nad_nasal_option_2',
                    'name'       => esc_html__( 'NAD Nasal Option 2', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_nasal_option_3' => [
                    'id'         => 'order_form_nad_nasal_option_3',
                    'name'       => esc_html__( 'NAD Nasal Option 3', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_nasal_quantity' => [
                    'id'         => 'order_form_nad_nasal_quantity',
                    'name'       => esc_html__( 'NAD Nasal Quantity', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_nasal_refill' => [
                    'id'         => 'order_form_nad_nasal_refill',
                    'name'       => esc_html__( 'NAD Nasal Refill', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_nasal_sig' => [
                    'id'         => 'order_form_nad_nasal_sig',
                    'name'       => esc_html__( 'NAD Nasal Sig', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                
                'order_form_nad_lollipop_option_1' => [
                    'id'         => 'order_form_nad_lollipop_option_1',
                    'name'       => esc_html__( 'NAD Lollipop Option 1', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_lollipop_option_2' => [
                    'id'         => 'order_form_nad_lollipop_option_2',
                    'name'       => esc_html__( 'NAD Lollipop Option 2', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_lollipop_option_3' => [
                    'id'         => 'order_form_nad_lollipop_option_3',
                    'name'       => esc_html__( 'NAD Lollipop Option 3', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_lollipop_quantity' => [
                    'id'         => 'order_form_nad_lollipop_quantity',
                    'name'       => esc_html__( 'NAD Lollipop Quantity', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_lollipop_refill' => [
                    'id'         => 'order_form_nad_lollipop_refill',
                    'name'       => esc_html__( 'NAD Lollipop Refill', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_nad_lollipop_sig' => [
                    'id'         => 'order_form_nad_lollipop_sig',
                    'name'       => esc_html__( 'NAD Lollipop Sig', 'gravity-forms-pdf-extended' ),
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
