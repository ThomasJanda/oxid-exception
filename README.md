# Oxid Exception

## Description 

Display Exception Log in the Admin.

Module based on code of https://github.com/ssemiz/Cookbook-OXID

This module was created for Oxid 6.x.

## Install

1. Copy files into following directory

        source/modules/rs/exception
        
        
2. Add to composer.json at shop root
  
        "autoload": {
            "psr-4": {
                "rs\\exception\\": "./source/modules/rs/exception"
            }
        },

3. Refresh autoloader files with composer in the oxid root directory.

        composer dump-autoload
        
4. Enable module in the oxid admin area, Extensions => Modules