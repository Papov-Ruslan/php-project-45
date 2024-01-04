install:
	composer install
brain-games:
	./bin/brain-games
validate:
	composer validate
lint:
	 phpcs -v --standard=PSR12 src bin