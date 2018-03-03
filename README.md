## GhRegionsDistrict
Laravel package for retreiving Ghana's regions and districts

## Installation
[PHP](https://php.net) 5.4+ and [Composer](https://getcomposer.org) are required.

To get the latest version of this package add the following block of code to the require block of your project's composer.json

```
"wapnen/GHRegionsDistrict": "1.0.*"
```
You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

Once GhRegionsDistrict is installed, you need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `Wapnen\GhRegionDistrict\GhRegionDistrictServiceProvider::class,`

## Configuration

To start using this package, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="Wapnen\GhRegionDistrict\GhRegionDistrictServiceProvider"
```

Now migrate your database to include the regions and districts tables

```bash
$ php artisan migrate
```
Add the following to your application's Databaseseeder.php file

```
        $this->call(RegionTableSeeder::class);
        $this->call(District1TableSeeder::class);
        $this->call(District2TableSeeder::class);	
        $this->call(District3TableSeeder::class);
        $this->call(District4TableSeeder::class);
        $this->call(District5TableSeeder::class);
        $this->call(District6TableSeeder::class);
        $this->call(District7TableSeeder::class);
        $this->call(District8TableSeeder::class);
        $this->call(District9TableSeeder::class);
        $this->call(District10TableSeeder::class);
```
Finally run the following command to seed to your database
```bash
$ php artisan db:seed
```

## Usage
To retrieve all the regions 
```
$regions = DB::table('regions')->get();

```
To retrieve one region
```
$region = DB::table('regions')->where('name', 'Ashanti)->first();
```

To get all the districts for a particular region
```
$region = DB::table('regions')->where('name', 'Ashanti)->first();
$districts = DB::table('districts)->where('region_id' , $region->id)->get();
```
## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

## Want to link up?

You can [follow me on twitter](https://twitter.com/_wapnen)!

## License

The MIT License (MIT).





