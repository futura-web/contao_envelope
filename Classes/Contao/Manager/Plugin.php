<?php declare(strict_types = 1);
/**
 * @package     envelope
 * @filesource  Plugin.php
 * @version     1.0.0
 * @since       06.11.2019 - 13:53
 * @author      Dinko Skopljak <ds@futura-web.de>
 * @link        https://futura-web.de
 * @copyright   Futura Web 2019
 * @license     EULA
 */
namespace FuturaWeb\Envelope\Classes\Contao\Manager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Class Plugin
 * @package FuturaWeb\Envelope\Classes\Contao\Manager
 */
class Plugin implements BundlePluginInterface
{


    /**
     * @param  ParserInterface                                             $parser
     * @return array|\Contao\ManagerPlugin\Bundle\Config\ConfigInterface[]
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(\FuturaWeb\Envelope\FuturaWebEnvelopeBundle::class)
                ->setLoadAfter([\Contao\CoreBundle\ContaoCoreBundle::class])
        ];
    }
}
