<?php

/**
 * HumHub
 * Copyright © 2014 The HumHub Project
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 */

namespace humhub\widgets;

/**
 * MarkdownEditorWidget replaces a textarea element with bootstrap-markdown editor
 *
 * @todo Allow multiple MarkdownEditorWidget instances on a page
 *
 * @author luke
 * @since 0.11
 */
class MarkdownEditor extends \yii\base\Widget
{

    /**
     * Html field id of textarea which should be Markdown editor
     *
     * @var string
     */
    public $fieldId = "";

    /**
     * HMarkdown parser class used for preview
     *
     * @var string
     */
    public $parserClass = "HMarkdown";

    /**
     * Stylesheet for Highlight.js for preview
     */
    public $highlightJsCss = "github";

    /**
     * Optional markdown preview url
     *
     * @var string
     */
    public $previewUrl = "";

    public function init()
    {
        if ($this->previewUrl == "") {
            $this->previewUrl = \yii\helpers\Url::toRoute(['/markdown/preview', 'parser' => $this->parserClass]);
        }
    }

    public function run()
    {
        return $this->render('markdownEditor', array(
                    'fieldId' => $this->fieldId
        ));
    }

}
