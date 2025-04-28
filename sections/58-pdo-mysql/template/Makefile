# build development environment
build:
	docker-compose -f docker/docker-compose.yml -p video-corso-php down && \
	docker-compose -f docker/docker-compose.yml -p video-corso-php rm -f && \
	docker-compose -f docker/docker-compose.yml -p video-corso-php build && \
	docker-compose -f docker/docker-compose.yml -p video-corso-php up -d
