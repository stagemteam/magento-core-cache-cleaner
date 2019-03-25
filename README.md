# Magento Core Cache Cleaner

The module allows clearing `core_cache` table by cron schedule.

## Instalation

#### Old school way

Copty-past `app` folder in root of your project.

#### Composer
If you use [`magento-composer-installer`](https://github.com/Cotya/magento-composer-installer) for managing your project dependencies
then you can simply run 

```bash
composer require stagem/magento-core-cache-cleaner
```

After that, clear cache and go to admin *System - Configuration - Core Cache*. There you can configure cron schedule time.

 
