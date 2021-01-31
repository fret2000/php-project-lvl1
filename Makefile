install:
	composer install

validate:
	composer validate

brain-games:
	php bin/brain-games

brain-even:
	php bin/brain-even

brain-calc:
	php bin/brain-calc

brain-gcd:
	php bin/brain-gcd

brain-progression:
	php bin/brain-progression

brain-prime:
	php bin/brain-prime
	
lint:install
	composer run-script phpcs -- --standard=PSR12 src bin

fix:
	composer run-script phpcs-fix -- --standard=PSR12 src bin