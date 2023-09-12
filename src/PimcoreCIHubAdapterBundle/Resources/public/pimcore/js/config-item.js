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

pimcore.registerNS("pimcore.plugin.pimcoreCIHubAdapterBundle.configuration.configItem");
pimcore.plugin.pimcoreCIHubAdapterBundle.configuration.configItem = Class.create(pimcore.plugin.simpleRestAdapterBundle.configuration.configItem, {

    getDeliverySettings: function () {
        const apikeyField = new Ext.form.field.Text({
            xtype: 'textfield',
            labelWidth: 200,
            width: 600,
            fieldLabel: t('plugin_pimcore_datahub_security_datahub_apikey'),
            name: 'apikey',
            value: this.data.deliverySettings ? this.data.deliverySettings.apikey : '',
            minLength: 16,
        });

        this.deliverySettingsForm = new Ext.form.FormPanel({
            bodyStyle: 'padding:10px;',
            autoScroll: true,
            defaults: {
                labelWidth: 200,
            },
            border: false,
            title: t('plugin_pimcore_datahub_simple_rest_configpanel_delivery_settings'),
            items: [
                {
                    xtype: 'fieldcontainer',
                    layout: 'hbox',
                    items: [
                        apikeyField,
                        {
                            xtype: 'button',
                            width: 32,
                            style: 'margin-left: 8px',
                            iconCls: 'pimcore_icon_clear_cache',
                            handler: () => {
                                apikeyField.setValue(md5(uniqid()));
                            },
                        },
                    ],
                },
                {
                    xtype: 'displayfield',
                    hideLabel: false,
                    value: t('plugin_pimcore_datahub_simple_rest_security_apikey_description'),
                    cls: 'pimcore_extra_label_bottom',
                    readOnly: true,
                    disabled: true,
                },
            ],
        });

        return this.deliverySettingsForm;
    },
});
