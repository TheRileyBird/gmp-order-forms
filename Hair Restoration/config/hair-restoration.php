<?php

namespace GFPDF\Templates\Config;

use GFPDF\Helper\Helper_Interface_Config;
use GFPDF\Helper\Helper_Abstract_Config_Settings;

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Hair Restoration
 *
 * @package  GFPDF\Templates\Config
 *
 * @Internal See https://docs.gravitypdf.com/v6/install-template-via-template-manager for more information about this class
 */
class Hair_Restoration extends Helper_Abstract_Config_Settings implements Helper_Interface_Config {

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
                
                'order_form_biotin_10mg_ml_injectable_solution' => [
                    'id'          => 'order_form_biotin_10mg_ml_injectable_solution',
                    'name'        => esc_html__( 'Biotin 10mg/ml Injectable Solution', 'gravity-forms-pdf-extended' ),
                    'type'        => 'text',
                    'inputClass'  => 'merge-tag-support mt-hide_all_fields',
                ],
        
                'order_form_minoxidil_5_azelaic_acid_12_5_spray' => [
                            'id'          => 'order_form_minoxidil_5_azelaic_acid_12_5_spray',
                            'name'        => esc_html__( 'Minoxidil 5%/Azelaic Acid 12.5% Spray', 'gravity-forms-pdf-extended' ),
                            'type'        => 'text',
                            'inputClass'  => 'merge-tag-support mt-hide_all_fields',
                        ],
                
                'order_form_metformin_5_cream' => [
                            'id'          => 'order_form_metformin_5_cream',
                            'name'        => esc_html__( 'Metformin 5% Cream', 'gravity-forms-pdf-extended' ),
                            'type'        => 'text',
                            'inputClass'  => 'merge-tag-support mt-hide_all_fields',
                        ],
                
                'order_form_minoxidil_5_azelaic_acid_12_5_finasteride_0_1_spray' => [
                            'id'          => 'order_form_minoxidil_5_azelaic_acid_12_5_finasteride_0_1_spray',
                            'name'        => esc_html__( 'Minoxidil 5%/Azelaic Acid 12.5%/Finasteride 0.1% Spray', 'gravity-forms-pdf-extended' ),
                            'type'        => 'text',
                            'inputClass'  => 'merge-tag-support mt-hide_all_fields',
                        ],
                
                'order_form_metformin_10_cream' => [
                            'id'          => 'order_form_metformin_10_cream',
                            'name'        => esc_html__( 'Metformin 10% Cream', 'gravity-forms-pdf-extended' ),
                            'type'        => 'text',
                            'inputClass'  => 'merge-tag-support mt-hide_all_fields',
                        ],
                
                'order_form_minoxidil_5_finasteride_0_1_spray' => [
                            'id'          => 'order_form_minoxidil_5_finasteride_0_1_spray',
                            'name'        => esc_html__( 'Minoxidil 5%/Finasteride 0.1% Spray', 'gravity-forms-pdf-extended' ),
                            'type'        => 'text',
                            'inputClass'  => 'merge-tag-support mt-hide_all_fields',
                        ],
                
                'order_form_estradiol_0_1_cream' => [
                            'id'          => 'order_form_estradiol_0_1_cream',
                            'name'        => esc_html__( 'Estradiol 0.1% Cream', 'gravity-forms-pdf-extended' ),
                            'type'        => 'text',
                            'inputClass'  => 'merge-tag-support mt-hide_all_fields',
                        ],
                
                'order_form_minoxidil_5_finasteride_0_1_tretinoin_0_025_spray' => [
                            'id'          => 'order_form_minoxidil_5_finasteride_0_1_tretinoin_0_025_spray',
                            'name'        => esc_html__( 'Minoxidil 5%/Finasteride 0.1%/Tretinoin 0.025% Spray', 'gravity-forms-pdf-extended' ),
                            'type'        => 'text',
                            'inputClass'  => 'merge-tag-support mt-hide_all_fields',
                        ],
                
                'order_form_estradiol_0_06_melatonin_0_05_spiro_0_1_fin_0_5_minox_2_spray' => [
                            'id'          => 'order_form_estradiol_0_06_melatonin_0_05_spiro_0_1_fin_0_5_minox_2_spray',
                            'name'        => esc_html__( 'Estradiol 0.06%/Melatonin 0.05%/Spirolactone 0.1%/Finastride 0.5%/Minoxidil 2% Spray', 'gravity-forms-pdf-extended' ),
                            'type'        => 'text',
                            'inputClass'  => 'merge-tag-support mt-hide_all_fields',
                        ],
                
                'order_form_minoxidil_5_azelaic_acid_12_5_finasteride_0_1_ketoconazole_2_spray' => [
                            'id'          => 'order_form_minoxidil_5_azelaic_acid_12_5_finasteride_0_1_ketoconazole_2_spray',
                            'name'        => esc_html__( 'Minoxidil 5%/Azelaic Acid 12.5%/Finasteride 0.1%/Ketoconazole 2% Spray', 'gravity-forms-pdf-extended' ),
                            'type'        => 'text',
                            'inputClass'  => 'merge-tag-support mt-hide_all_fields',
                        ],
                
                'order_form_testosterone_0_5_spiro_0_1_fin_0_5_minox_5_spray' => [
                            'id'          => 'order_form_testosterone_0_5_spiro_0_1_fin_0_5_minox_5_spray',
                            'name'        => esc_html__( 'Testosterone 0.5%/Spirolactone 0.1%/Finastride 0.5%/Minoxidil 5% Spray', 'gravity-forms-pdf-extended' ),
                            'type'        => 'text',
                            'inputClass'  => 'merge-tag-support mt-hide_all_fields',
                        ],
                
                'order_form_minoxidil_5_hydrocortisone_1_spray' => [
                            'id'          => 'order_form_minoxidil_5_hydrocortisone_1_spray',
                            'name'        => esc_html__( 'Minoxidil 5%/Hydrocortisone 1% Spray', 'gravity-forms-pdf-extended' ),
                            'type'        => 'text',
                            'inputClass'  => 'merge-tag-support mt-hide_all_fields',
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
