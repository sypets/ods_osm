<?php
return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xlf:tx_odsosm_vector',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY title',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:ods_osm/Resources/Public/Icons/icon_tx_odsosm_vector.png',
    ),
    'interface' => array(
        'showRecordFieldList' => 'hidden,title,data,min_lat,min_lon,max_lat,max_lon'
    ),
    'columns' => array(
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 0,
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ]
        ],
        'title' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xlf:tx_odsosm_vector.title',
            'config' => array(
                'type' => 'input',
                'size' => 30,
            )
        ),
        'data' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xlf:tx_odsosm_vector.data',
            'config' => array(
                'type' => 'text',
                'rows' => 10,
                'cols' => 60,
                'max' => 20000,
                'fieldControl' => [
                    'coordinatepickerControl' => [
                        'renderType' => 'coordinatepickerControl'
                    ]
                ]
            )
        ),
        'color' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xlf:tx_odsosm_track.color',
            'config' => array(
                'type' => 'input',
                'size' => 10,
                'max' => 10,
                'default' => '#3388ff',
                'eval' => 'nospace,trim',
                'renderType' => 'colorpicker',
            )
        ),
        'width' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xlf:tx_odsosm_track.width',
            'config' => array(
                'type' => 'input',
                'size' => 3,
                'max' => 3,
                'default' => 3,
                'range' => array(
                    'lower' => 0,
                    'upper' => 255
                ),
                'eval' => 'int',
            )
        ),
        'file' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xlf:tx_odsosm_vector.file',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'file',
                [
                    'maxitems' => 1,
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db:tx_odsosm_vector.file.add'
                    ],
                    'foreign_match_fields' => [
                        'fieldname' => 'file',
                        'tablenames' => 'tx_odsosm_vector',
                        'table_local' => 'sys_file',
                    ],
                    'default' => 0,
                ],
                'geojson,json'
            )
        ),
        'min_lon' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xlf:tx_odsosm_track.min_lon',
            'config' => array(
                'type' => 'none',
                'size' => 8,
            )
        ),
        'min_lat' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xlf:tx_odsosm_track.min_lat',
            'config' => array(
                'type' => 'none',
                'size' => 8,
            )
        ),
        'max_lon' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xlf:tx_odsosm_track.max_lon',
            'config' => array(
                'type' => 'none',
                'size' => 8,
            )
        ),
        'max_lat' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ods_osm/Resources/Private/Language/locallang_db.xlf:tx_odsosm_track.max_lat',
            'config' => array(
                'type' => 'none',
                'size' => 8,
            )
        ),
    ),
    'types' => [
        '0' => [
            'showitem' => 'hidden, title, data, color, width, file,
            --palette--;;lonlatinfo'
        ]
    ],
    'palettes' => [
        'lonlatinfo' => [
            'showitem' => 'min_lon, min_lat, max_lon, max_lat'
        ]
    ]
);
