install:
	composer install
brain-games:
	./bin/brain-games
validate:
	composer validate
lint:
	 phpcs -v --standard=PSR12 src bin
brain-even:
	 php ./bin/brain-even
brain-calc:
	php ./bin/brain-calc
brain-gcd:
	php ./bin/brain-gcd
brain-progression:
	php ./bin/brain-progression
brain-prime:
	php ./bin/brain-prime
