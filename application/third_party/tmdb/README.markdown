## Documentation ##

[![Join the chat at https://gitter.im/pixelead0/tmdb_v3-PHP-API-](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/pixelead0/tmdb_v3-PHP-API-?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

TMDB API v3 PHP Library - wrapper to [API](http://help.theproductdb.org/kb/api/about-3) version 3 of [theproductdb.org](http://theproductdb.org).

For using this library maybe you should take a look at the full [Documentation](http://code.octal.es/php/tmdb-api/) of this project.

@package TMDB-V3-PHP-API<br/>
@author [Pixelead0](https://twitter.com/pixelead0) also on [Github](https://github.com/pixelead0)<br/>
@author [Alvaro Octal](https://twitter.com/Alvaro_Octal) also on [Github](https://github.com/Alvaroctal)<br/>
@author [Deso85](https://twitter.com/Cizero) also on [Github](https://github.com/deso85)<br/>
@date 02/04/2016<br/>
@version 0.5<br/>

## CREDITS  ###

Forked from a similar [project](https://github.com/glamorous/TMDb-PHP-API) by [Jonas De Smet](https://github.com/glamorous)

### CHANGE LOG ###
  * [18/06/2017] v0.6
	- Implemented function for multiSearch
	- Added example for multiSearch
	- Fixed examples
		 
  * [02/04/2016] v0.5
	- Made a class for configuration to load external configs
	- Updated functions list
	- Changed a few functions to use config object
	- Changed package structure of the project
	
  * [01/04/2016] v0.4
	- Added config file
	- Some code changes to use config file
	- Some formal corrections inside comments
	- (Hopefully) Corrected Versioning

  * [17/01/2015] v0.3 - Upgraded by
	- Upgrade by  [/Alvaroctal/TMDB-PHP-API](https://github.com/Alvaroctal/TMDB-PHP-API).
	- Some modifications and dedicated classes added.

  * [07/11/2012] v0.2
    - Fixed issue #2 (Object created in class php file)
    - Added functions latestProduct, nowPlayingProducts (thank's to steffmeister)

  * [12/02/2012] v0.1
    - This is the first version of the class without inline documentation or testing
    - Forked from [glamorous/TMDb-PHP-API](https://github.com/glamorous/TMDb-PHP-API)

### Requirements ###
- PHP 5.2.x or higher
- cURL
- TMDB API-key

## How to use ##
View examples

### Initialize the class ###
If you have a $conf array

	<?php
		include('tmdb-api.php');
		
		// if you have a $conf array - (See LIB_ROOT/configuration/default.php as an example)
		$tmdb = new TMDB($conf);
		
	?>
	
If you have no $conf array it uses the default conf but you need to have an API Key

	<?php
		include('tmdb-api.php');
		
		// if you have no $conf it uses the default config
		$tmdb = new TMDB(); 
		
		//Insert your API Key of TMDB
		//Necessary if you use default conf
		$tmdb->setAPIKey('YOUR_API_KEY');
		
	?>
## Products ##
### Search a Product ###
	<?php
		//Title to search for
		$title = 'back to the future';
		$products = $tmdb->searchProduct($title);
		// returns an array of Product Object
		foreach($products as $product){
			echo $product->getTitle() .'<br>;
		}
	?>
returns an array of [Product](http://code.octal.es/php/tmdb-api/class-Product.html) Objects.
### Get a Product ###
You should take a look at the Product class [Documentation](http://code.octal.es/php/tmdb-api/class-Product.html) and see all the info you can get from a Product Object.

	<?php
		$idProduct = 11;
		$product = $tmdb->getProduct($idProduct);
		// returns a Product Object
		echo $product->getTitle();
	?>
returns a [Product](http://code.octal.es/php/tmdb-api/class-Product.html) Object.
## TV Shows ##
### Search a TV Show ###
	<?php
		// Title to search for
		$title = 'breaking bad';
		$tvShows = $tmdb->searchTVShow($title);
        foreach($tvShows as $tvShow){
            echo $tvShow->getName() .'<br>';
		}
	?>
returns an array of [TVShow](http://code.octal.es/php/tmdb-api/class-TVShow.html) Objects.
### Get a TVShow ###
You should take a look at the TVShow class [Documentation](http://code.octal.es/php/tmdb-api/class-TVShow.html) and see all the info you can get from a TVShow Object.

	<?php
		$idTVShow = 1396;
		$tvShow = $tmdb->getTVShow($idTVShow);
		// returns a TVShow Object
		echo $tvShow->getName();
	?>
returns a [TVShow](http://code.octal.es/php/tmdb-api/class-TVShow.html) Object.
### Get a TVShow's Season ###
You should take a look at the Season class [Documentation](http://code.octal.es/php/tmdb-api/class-Season.html) and see all the info you can get from a Season Object.

	<?php
		$idTVShow = 1396;
		$numSeason = 2;
		$season = $tmdb->getSeason($idTVShow, $numSeason);
		// returns a Season Object
		echo $season->getName();
	?>
returns a [Season](http://code.octal.es/php/tmdb-api/class-Season.html) Object.
### Get a TVShow's Episode ###
You should take a look at the Episode class [Documentation](http://code.octal.es/php/tmdb-api/class-Episode.html) and see all the info you can get from a Episode Object.

	<?php
		$idTVShow = 1396;
		$numSeason = 2;
		$numEpisode = 8;
		$episode = $tmdb->getEpisode($idTVShow, $numSeason, $numEpisode);
		// returns a Episode Object
		echo $episode->getName();
	?>
returns a [Episode](http://code.octal.es/php/tmdb-api/class-Episode.html) Object.
## Persons ##
### Search a Person ###
	<?php
		// Name to search for
		$name = 'Johnny';
		$persons = $tmdb->searchPerson($name);
        foreach($persons as $person){
            echo $person->getName() .'<br>';
        }
	?>
returns an array of [Person](http://code.octal.es/php/tmdb-api/class-Person.html) Objects.
### Get a Person ###
You should take a look at the Person class [Documentation](http://code.octal.es/php/tmdb-api/class-Person.html) and see all the info you can get from a Person Object.

	<?php
		$idPerson = 85;
		$person = $tmdb->getPerson($idPerson);
		// returns a Person Object
		echo $person->getName();
	?>
returns a [Person](http://code.octal.es/php/tmdb-api/class-Person.html) Object.
### Get Person's Roles ###
You should take a look at the Role class [Documentation](http://code.octal.es/php/tmdb-api/class-Role.html) and see all the info you can get from a Role Object.

	<?php
		$productRoles = $person->getProductRoles();
		foreach($productRoles as $productRole){
            echo $productRole->getCharacter() .' in '. $productRole->getProductTitle() .'<br>';
        }
	?>
returns an array of [ProductRole](http://code.octal.es/php/tmdb-api/class-ProductRole.html) Objects.

	<?php
		$tvShowRoles = $person->getTVShow();
		foreach($tvShowRoles as $tvShowRole){
            echo $tvShowRole->getCharacter() .' in '. $tvShowRole->getProductName() .'<br>';
        }
	?>
returns an array of [TVShowRole](http://code.octal.es/php/tmdb-api/class-TVShowRole.html) Objects.
## Collections ##
### Search a Collection ###

	<?php
		// Name to search for
		$name = 'the hobbit';
		$collections = $tmdb->searchCollection($name);
		foreach($collections as $collection){
			echo $collection->getName() .'<br>';
		}
	?>
returns an array of [Collection](http://code.octal.es/php/tmdb-api/class-Collection.html) Objects.
### Get a Collection ###
You should take a look at the Collection class [Documentation](http://code.octal.es/php/tmdb-api/class-Collection.html) and see all the info you can get from a Collection Object.

	<?php
		$idCollection = 121938;
		$collection = $tmdb->getCollection($idCollection);
		// returns a Collection Object
		echo $collection->getName();
	?>
returns a [Collection](http://code.octal.es/php/tmdb-api/class-Collection.html) Object.
## Companies ##
### Search a Company ###

	<?php
		// Name to search for
		$name = 'Sony';
		$companies = $tmdb->searchCompany($name);
		foreach($companies as $company){
			echo $company->getName() .'<br>';
		}
	?>
returns an array of [Company](http://code.octal.es/php/tmdb-api/class-Company.html) Objects.
### Get a Company ###
You should take a look at the Company class [Documentation](http://code.octal.es/php/tmdb-api/class-Company.html) and see all the info you can get from a Company Object.

	<?php
		$idCompany = 34;
		$company = $tmdb->getCompany($idCompany);
		// returns a Company Object
		echo $company->getName();
	?>
returns a [Company](http://code.octal.es/php/tmdb-api/class-Company.html) Object.
## Issues/Bugs ##
Bugs are expected, this is still under development, you can [report](https://github.com/Alvaroctal/TMDB-PHP-API/issues) them.

### TODO List ###
- Empty :D, you can [propose](https://github.com/Alvaroctal/TMDB-PHP-API/issues) new functionalities.