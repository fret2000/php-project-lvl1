install:
	composer install

validate:
	composer validate

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime
	
lint:install
	composer run-script phpcs -- --standard=PSR12 src bin

fix:
	composer run-script phpcs-fix -- --standard=PSR12 src bin