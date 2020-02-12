# Mage2 Module Cel Integrator

    ``cel/module-integrator``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)


## Main Functionalities
API Integrator - Extend Magento2 API options

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Cel`
 - Enable the module by running `php bin/magento module:enable Cel_Integrator`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`