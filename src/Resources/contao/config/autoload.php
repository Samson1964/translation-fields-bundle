<?php

/*
 * This file is part of the Translation Fields Bundle.
 *
 * (c) Daniel Kiesel <https://github.com/iCodr8>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'TranslationFields',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Models
    'TranslationFields\TranslationFieldsModel'         => 'vendor/schachbulle/translation-fields-bundle/src/Resources/contao/models/TranslationFieldsModel.php',
    'TranslationFields\TranslationFieldsPageModel'     => 'vendor/schachbulle/translation-fields-bundle/src/Resources/contao/models/TranslationFieldsPageModel.php',
));
