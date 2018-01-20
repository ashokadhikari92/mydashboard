#### Laravel package developed using vue paper dashboard.

To use this package follow following steps:

* Since this is a private package, you have to add following blog of code in your composer.json file.



    "repositories": [
        {
          "type": "package",
          "package": {
            "name": "ashokadhikari92/mydashboard",
            "version": "v0.1.1",
            "source": {
              "url": "git@github.com:ashokadhikari92/mydashboard.git",
              "type": "git",
              "reference": "master"
            }
          }
        }
    ]
    
 
 
 * Then install the package using composer   

`composer require ashokadhikari92/mydashboard`


* Publish public assets using following command.

`php artisan vendor:publish --provider="MyPackage\Dashboard\DashboardServiceProvider" `

* Then your are ready to test. Open `<your-domain-name>/cms/dashboard` in your browser.
