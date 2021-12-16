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

namespace CIHub\Bundle\PimcoreCIHubAdapterBundle\Loader;

use CIHub\Bundle\SimpleRESTAdapterBundle\Loader\ConfigurationLoaderInterface;

final class CIHubConfigurationLoader implements ConfigurationLoaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function configType(): string
    {
        return 'ciHub';
    }
}
