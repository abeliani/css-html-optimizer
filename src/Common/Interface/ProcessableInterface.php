<?php

/**
 * This file is part of the CssJsHtmlOptimizer Project.
 *
 * @package     CssJsHtmlOptimizer
 * @author      Anatolii Belianin <belianianatoli@gmail.com>
 * @license     See LICENSE.md for license information
 * @link        https://github.com/abeliani/css-html-optimizer
 */

namespace Abeliani\CssJsHtmlOptimizer\Common\Interface;

use Abeliani\CssJsHtmlOptimizer\Common\ProcessorInterface;

interface ProcessableInterface
{
    public function optimize(ProcessorInterface ...$optimizers): void;
}