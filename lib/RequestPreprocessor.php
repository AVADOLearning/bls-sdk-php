<?php

/**
 * BLS SDK for PHP.
 *
 * @author Luke Carrier <luke.carrier@avadolearning.com>
 * @copyright 2017 AVADO Learning
 */

namespace AvadoLearning\BusinessLogicServices;

use DOMDocument;

/**
 * Request preprocessor.
 */
interface RequestPreprocessor {
    /**
     * Preprocess a request document.
     *
     * @param \DOMDocument $document
     * @param string       $location
     * @param string       $action
     * @param integer      $version
     * @param integer      $oneway
     *
     * @return void
     */
    public function preprocess(DOMDocument $document, $location, $action,
                               $version, $oneway);
}
