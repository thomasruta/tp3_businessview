<?php
defined('TYPO3_MODE') || die('Access denied.');



        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Tp3.Tp3Businessview',
            'Tp3businessview',
            [
                'Tp3BusinessView' => 'list,show,new,update,updatepano,updateaddress'
            ],
            // non-cacheable actions
            [
                'Tp3BusinessView' => 'createpano,create'
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					tp3businessview {
                        iconIdentifier = ext-'.$_EXTKEY.'-wizard-icon
						title = LLL:EXT:tp3_businessview/Resources/Private/Language/locallang_db.xlf:tx_tp3_businessview_domain_model_tp3businessview
						description = LLL:EXT:tp3_businessview/Resources/Private/Language/locallang_db.xlf:tx_tp3_businessview_domain_model_tp3businessview.description
						tt_content_defValues {
							CType = list
							list_type = tp3businessview_tp3businessview
						}
					}
				}
				show = *
			}
	   }'
	);
    /*
    * Icons
    */
    if (TYPO3_MODE === 'BE') {
        $icons = [
            'ext-'.$_EXTKEY.'-wizard-icon' => 'user_plugin_tp3businessview.svg',
        ];
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        foreach ($icons as $identifier => $path) {
            $iconRegistry->registerIcon(
                $identifier,
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => 'EXT:'.$_EXTKEY.'/Resources/Public/Icons/' . $path]
            );
        }
    }
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-postProcess'][] = \Tp3\Tp3Businessview\Frontend\PageRenderer\Tp3PageRenderer::class . '->render';

