<?php declare(strict_types=1);

class SwagCustomFieldSetService
{
    /**
     * @var EntityRepositoryInterface
     */
    private $customFieldSetRepository;

    public function __construct(
        EntityRepositoryInterface $customFieldSetRepository
    ) {
        $this->customFieldSetRepository = $customFieldSetRepository;
        $this->customFieldSetRepository->create(
            [
                [
                    'name' => 'audioSamples',
                    'global' => true,
                    'config' => [
                        'label' => [
                            'de-DE' => 'AudioSamples Plugin Zusatzfeld Set',
                            'en-GB' => 'AudioSamples plugin custom field set',
                        ],
                    ],
                    'relations' => [
                        [
                            'entityName' => 'product',
                        ],
                    ],
                    'customFields' => [
                        [
                            'name' => 'audiosample_track_01',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'Audio 01',
                                    'en-GB' => 'Audio 01',
                                ],
                                'componentName' => 'sw-media-field',
                                'customFieldType' => 'media',
                                'customFieldPosition' => 1,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'audioSampleName',
                    'global' => true,
                    'config' => [
                        'label' => [
                            'de-DE' => 'AudioSamples Plugin Zusatzfeld Set',
                            'en-GB' => 'AudioSamples plugin custom field set',
                        ],
                    ],
                    'relations' => [
                        [
                            'entityName' => 'media',
                        ],
                    ],
                    'customFields' => [
                        [
                            'name' => 'audiosample_track_01',
                            'type' => CustomFieldTypes::TEXT,
                            'config' => [
                                'label' => [
                                    'de-DE' => 'AudioSample Name',
                                    'en-GB' => 'audioSample name',
                                ],
                                'componentName' => 'sw-text-field',
                                'customFieldType' => 'text',
                                'customFieldPosition' => 1,
                            ],
                        ],
                    ],
                ],
            ],
            $context
        );
    }

    // ...
}
