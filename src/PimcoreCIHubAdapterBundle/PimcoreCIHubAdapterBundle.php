<?php
/**
 * CI HUB Adapter.
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2021 CI HUB GmbH (https://ci-hub.com)
 * @license    https://github.com/ci-hub-gmbh/PimcoreCIHubAdapterBundle/blob/master/gpl-3.0.txt GNU General Public License version 3 (GPLv3)
 */

namespace CIHub\Bundle\PimcoreCIHubAdapterBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\PimcoreBundleAdminClassicInterface;
use Pimcore\Extension\Bundle\Traits\BundleAdminClassicTrait;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;

class PimcoreCIHubAdapterBundle extends AbstractPimcoreBundle implements PimcoreBundleAdminClassicInterface
{
    use BundleAdminClassicTrait;
    use PackageVersionTrait;

    public const PACKAGE_NAME = 'ci-hub/pimcore-ci-hub-adapter-bundle';

    /**
     * {@inheritdoc}
     */
    public function getCssPaths(): array
    {
        return [
            '/bundles/pimcorecihubadapter/pimcore/css/icons.css',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getJsPaths(): array
    {
        return [
            '/bundles/pimcorecihubadapter/pimcore/js/startup.js',
            '/bundles/pimcorecihubadapter/pimcore/js/adapter.js',
            '/bundles/pimcorecihubadapter/pimcore/js/config-item.js',
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function getComposerPackageName(): string
    {
        return self::PACKAGE_NAME;
    }
}
