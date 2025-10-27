<?php

namespace GFPDF\Templates\Config;

use GFPDF\Helper\Helper_Interface_Config;
use GFPDF\Helper\Helper_Abstract_Config_Settings;

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Gastro
 *
 * @package  GFPDF\Templates\Config
 *
 * @Internal See https://docs.gravitypdf.com/v6/install-template-via-template-manager for more information about this class
 */
class Gastro extends Helper_Abstract_Config_Settings implements Helper_Interface_Config {

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
                
                'order_form_hemorrhoidal_ointment_quantity' => [
                    'id'         => 'order_form_hemorrhoidal_ointment_quantity',
                    'name'       => esc_html__( 'Hemorrhoidal Ointment Quantity', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_hemorrhoidal_ointment_refill' => [
                    'id'         => 'order_form_hemorrhoidal_ointment_refill',
                    'name'       => esc_html__( 'Hemorrhoidal Ointment Refill', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_hemorrhoidal_ointment_sig' => [
                    'id'         => 'order_form_hemorrhoidal_ointment_sig',
                    'name'       => esc_html__( 'Hemorrhoidal Ointment Sig', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_catinis_mouthwash_quantity' => [
                    'id'         => 'order_form_catinis_mouthwash_quantity',
                    'name'       => esc_html__( 'Catinis Mouthwash Quantity', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_catinis_mouthwash_refill' => [
                    'id'         => 'order_form_catinis_mouthwash_refill',
                    'name'       => esc_html__( 'Catinis Mouthwash Refill', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_catinis_mouthwash_sig' => [
                    'id'         => 'order_form_catinis_mouthwash_sig',
                    'name'       => esc_html__( 'Catinis Mouthwash Sig', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_rectal_salve_quantity' => [
                    'id'         => 'order_form_rectal_salve_quantity',
                    'name'       => esc_html__( 'Rectal Salve Quantity', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_rectal_salve_refill' => [
                    'id'         => 'order_form_rectal_salve_refill',
                    'name'       => esc_html__( 'Rectal Salve Refill', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_rectal_salve_sig' => [
                    'id'         => 'order_form_rectal_salve_sig',
                    'name'       => esc_html__( 'Rectal Salve Sig', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_gi_cocktail_quantity' => [
                    'id'         => 'order_form_gi_cocktail_quantity',
                    'name'       => esc_html__( 'GI Cocktail Quantity', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_gi_cocktail_refill' => [
                    'id'         => 'order_form_gi_cocktail_refill',
                    'name'       => esc_html__( 'GI Cocktail Refill', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_gi_cocktail_sig' => [
                    'id'         => 'order_form_gi_cocktail_sig',
                    'name'       => esc_html__( 'GI Cocktail Sig', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                
                'order_form_rectal_rocket_quantity' => [
                    'id'         => 'order_form_rectal_rocket_quantity',
                    'name'       => esc_html__( 'Rectal Rocket Quantity', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_rectal_rocket_refill' => [
                    'id'         => 'order_form_rectal_rocket_refill',
                    'name'       => esc_html__( 'Rectal Rocket Refill', 'gravity-forms-pdf-extended' ),
                    'type'       => 'text',
                    'inputClass' => 'merge-tag-support mt-hide_all_fields',
                ],
                'order_form_rectal_rocket_sig' => [
                    'id'         => 'order_form_rectal_rocket_sig',
                    'name'       => esc_html__( 'Rectal Rocket Sig', 'gravity-forms-pdf-extended' ),
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
