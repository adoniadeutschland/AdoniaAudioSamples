<?php

declare(strict_types=1);

namespace AdoniaAudioSamples\Service;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\Uuid\Uuid;
use Shopware\Core\System\CustomField\CustomFieldTypes;
use Shopware\Core\System\SalesChannel\SalesChannelDefinition;
use Symfony\Component\DependencyInjection\ContainerInterface;

class CustomFieldService
{
    /**
     * @var ContainerInterface
     */
    protected $container;
    /**
     * @var EntityRepository
     */
    protected $entityRepository;

    /**
     * CustomFieldService constructor.
     * @param ContainerInterface $container
     * @param EntityRepository $entityRepository
     */
    public function __construct(
        ContainerInterface $container,
        EntityRepository $entityRepository
    ) {
        $this->container = $container;
        $this->entityRepository = $entityRepository;
    }

    /**
     * @param Context $context
     */
    public function createCustomFields(Context $context)
    {
        $this->entityRepository->upsert(
            [
                [
                    'id' => Uuid::randomHex(),
                    'name' => 'audioSamples',
                    'global' => false,
                    'config' => [
                        'label' => [
                            'de-DE' => 'AudioSamples',
                            'en-GB' => 'AudioSamples',
                        ],
                    ],
                    'relations' => [
                        [
                            'id' => Uuid::randomHex(),
                            'entityName' => 'product',
                        ],
                    ],
                    'customFields' => [
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_enabled',
                            'type' => CustomFieldTypes::BOOL,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Hörbeispiele Anzeigen',
                                    'en-GB' => 'display audiosamples',
                                ],
                                'helpText' => [
                                    'de-DE' => 'Hörbeispiele im Produkt anzeigen',
                                    'en-GB' => 'display the audiosamples in this product',
                                ],
                                'type' => 'switch',
                                'componentName' => 'sw-field',
                                'customFieldType' => CustomFieldTypes::SWITCH,
                                'customFieldPosition' => 1,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_01',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 01',
                                    'en-GB' => 'Audio 01',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 2,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_02',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 02',
                                    'en-GB' => 'Audio 02',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 3,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_03',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 03',
                                    'en-GB' => 'Audio 03',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 4,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_04',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 04',
                                    'en-GB' => 'Audio 04',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 5,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_05',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 05',
                                    'en-GB' => 'Audio 05',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 6,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_06',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 06',
                                    'en-GB' => 'Audio 06',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 7,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_07',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 07',
                                    'en-GB' => 'Audio 07',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 8,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_08',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 08',
                                    'en-GB' => 'Audio 08',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 9,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_09',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 09',
                                    'en-GB' => 'Audio 09',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 10,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_10',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 10',
                                    'en-GB' => 'Audio 10',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 11,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_11',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 11',
                                    'en-GB' => 'Audio 11',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 12,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_12',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 12',
                                    'en-GB' => 'Audio 12',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 13,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_13',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 13',
                                    'en-GB' => 'Audio 13',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 14,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_14',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 14',
                                    'en-GB' => 'Audio 14',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 15,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_15',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 15',
                                    'en-GB' => 'Audio 15',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 16,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_16',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 16',
                                    'en-GB' => 'Audio 16',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 17,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_17',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 17',
                                    'en-GB' => 'Audio 17',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 18,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_18',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 18',
                                    'en-GB' => 'Audio 18',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 19,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_19',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 19',
                                    'en-GB' => 'Audio 19',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 20,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_20',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 20',
                                    'en-GB' => 'Audio 20',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 21,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_21',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 21',
                                    'en-GB' => 'Audio 21',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 22,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_22',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 22',
                                    'en-GB' => 'Audio 22',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 23,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_23',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 23',
                                    'en-GB' => 'Audio 23',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 24,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_24',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 24',
                                    'en-GB' => 'Audio 24',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 25,
                            ],
                        ],
                        [
                            'id' => Uuid::randomHex(),
                            'name' => 'custom_audiosample_track_25',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 25',
                                    'en-GB' => 'Audio 25',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => CustomFieldTypes::MEDIA,
                                'customFieldPosition' => 26,
                            ],
                        ],
                    ],
                ],
            ],
            $context
        );
    }
}
