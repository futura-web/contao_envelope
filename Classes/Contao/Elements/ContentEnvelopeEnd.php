<?php declare(strict_types = 1);
/**
 * @package     envelope
 * @filesource  ContentEnvelopeEnd.php
 * @version     1.0.0
 * @since       06.11.19 - 14:03
 * @since       06.11.2019 - 13:53
 * @author      Dinko Skopljak <ds@futura-web.de>
 * @link        https://futura-web.de
 * @copyright   Futura Web 2019
 * @license     EULA
 */
namespace FuturaWeb\Envelope\Classes\Contao\Elements;

/**
 * Class ContentEnvelopeEnd
 * @package Envelope\Classes\Contao\Elements
 */
class ContentEnvelopeEnd extends \ContentElement
{


    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_envelope_end';


    /**
     * Generate the content element
     */
    protected function compile(): void
    {
        if ('BE' === TL_MODE) {
            $this->genBeOutput();
        } else {
            $this->genFeOutput();
        }
    }


    /**
     * Erzeugt die Ausgabe für das Backend.
     */
    protected function genBeOutput(): void
    {
        $this->strTemplate        = 'be_wildcard';
        $this->Template           = new \BackendTemplate($this->strTemplate);
        $this->Template->title    = $this->headline;
        $this->Template->wildcard = '### ContentEnvelopeEnd ###';
    }


    /**
     * Erzeugt die Ausgabe für das Frontend.
     */
    protected function genFeOutput(): void
    {
    }
}
