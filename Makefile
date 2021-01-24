install:
	composer install

validate:
	composer validate

brain-games:
	php bin/brain-games

lint:install
	composer run-script phpcs -- --standard=PSR12 src bin

fix:
	composer run-script phpcs-fix -- --standard=PSR12 src bin