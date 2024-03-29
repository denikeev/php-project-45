install: 
				composer install

brain-games:
				./bin/brain-games

validate:
				composer validate
			
lint:
				composer exec --verbose phpcs -- --standard=PSR12 src bin

lint-fix:
				composer exec --verbose phpcbf -- --standard=PSR12 src bin

# Games
brain-even:
				./bin/brain-even

brain-calc:
				./bin/brain-calc

brain-gcd:
				./bin/brain-gcd

brain-progression:
				./bin/brain-progression
