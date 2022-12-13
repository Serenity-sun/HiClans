PHP       = ../../bin/php7/bin/php		# your php path
COMPOSER  = /usr/bin/composer			# composer path
PHP-FIXER = ./vendor/bin/php-cs-fixer	# fixer path
PHPSTAN	  = ./vendor/bin/phpstan		# phpstan path

install:
	$(PHP) $(COMPOSER) install

fix:
	$(PHP) $(PHP-FIXER) fix src

analyze:
	$(PHP) $(PHPSTAN)