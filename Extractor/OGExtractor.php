<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2017 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace CoreShop\Component\SEO\Extractor;

use CoreShop\Component\SEO\Model\SEOAwareInterface;
use CoreShop\Component\SEO\Model\SEOMetadataInterface;
use CoreShop\Component\SEO\Model\SEOOpenGraphAwareInterface;

final class OGExtractor implements ExtractorInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports($object)
    {
        return $object instanceof SEOOpenGraphAwareInterface;
    }

    /**
     * {@inheritdoc}
     */
    public function updateMetadata($object, SEOMetadataInterface $seoMetadata)
    {
        $seoMetadata->addExtraProperty('og:title', $object->getOGTitle());
        $seoMetadata->addExtraProperty('og:description', $object->getOGDescription());
        $seoMetadata->addExtraProperty('og:type', $object->getOGType());
    }
}