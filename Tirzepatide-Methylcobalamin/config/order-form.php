<?php

namespace GFPDF\Templates\Config;

use GFPDF\Helper\Helper_Interface_Config;
use GFPDF\Helper\Helper_Abstract_Config_Settings;

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Order_Form
 *
 * @package  GFPDF\Templates\Config
 *
 * @Internal See https://docs.gravitypdf.com/v6/install-template-via-template-manager for more information about this class
 */
class Order_Form extends Helper_Abstract_Config_Settings implements Helper_Interface_Config {

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

				'order_form_city_state_zip' => [
					'id'         => 'order_form_city_state_zip',
					'name'       => esc_html__( 'City, State and Zip', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],

				'order_form_allergies' => [
					'id'         => 'order_form_allergies',
					'name'       => esc_html__( 'Allergies', 'gravity-forms-pdf-extended' ),
					'type'       => 'text',
					'inputClass' => 'merge-tag-support mt-hide_all_fields',
				],

				'order_form_billing_options' => [
					'id'         => 'order_form_billing_options',
					'name'       => esc_html__( 'Billing Options', 'gravity-forms-pdf-extended' ),
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
                
                'order_form_methylcobalamin' => [
                    'id'         => 'order_form_methylcobalamin',
                    'name'       => esc_html__( 'Methylcobalamin', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_b12_options' => [
                    'id'         => 'order_form_b12_options',
                    'name'       => esc_html__( 'B12 Options', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_b12_other' => [
                    'id'         => 'order_form_b12_other',
                    'name'       => esc_html__( 'B12 Other', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_month_1' => [
                    'id'         => 'order_form_month_1',
                    'name'       => esc_html__( 'Month 1', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_refill_1' => [
                    'id'         => 'order_form_refill_1',
                    'name'       => esc_html__( 'Refill 1', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_month_2' => [
                    'id'         => 'order_form_month_2',
                    'name'       => esc_html__( 'Month 2', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_refill_2' => [
                    'id'         => 'order_form_refill_2',
                    'name'       => esc_html__( 'Refill 2', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_month_3' => [
                    'id'         => 'order_form_month_3',
                    'name'       => esc_html__( 'Month 3', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_refill_3' => [
                    'id'         => 'order_form_refill_3',
                    'name'       => esc_html__( 'Refill 3', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_month_4' => [
                    'id'         => 'order_form_month_4',
                    'name'       => esc_html__( 'Month 4', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_refill_4' => [
                    'id'         => 'order_form_refill_4',
                    'name'       => esc_html__( 'Refill 4', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_month_5' => [
                    'id'         => 'order_form_month_5',
                    'name'       => esc_html__( 'Month 5', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_refill_5' => [
                    'id'         => 'order_form_refill_5',
                    'name'       => esc_html__( 'Refill 5', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_month_6' => [
                    'id'         => 'order_form_month_6',
                    'name'       => esc_html__( 'Month 6', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_refill_6' => [
                    'id'         => 'order_form_refill_6',
                    'name'       => esc_html__( 'Refill 6', 'gravity-forms-pdf-extended' ),
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

				'order_form_prescriber_city_state_zip' => [
					'id'         => 'order_form_prescriber_city_state_zip',
					'name'       => esc_html__( 'Prescriber City, State, and Zip', 'gravity-forms-pdf-extended' ),
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
