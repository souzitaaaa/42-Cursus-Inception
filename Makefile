NAME = inception
SRCS = ./srcs
COMPOSE_PATH = $(SRCS)/docker-compose.yml

all: up

create_vol_dir:
	sudo mkdir -p ~/data/db
	sudo mkdir -p ~/data/wp

up: create_vol_dir
	sudo hostsed add 127.0.0.1 dinoguei.42.fr > /dev/null 2>&1
	docker compose -p $(NAME) -f $(COMPOSE_PATH) up --build -d

down:
	docker compose -p $(NAME) -f $(COMPOSE_PATH) down --volumes

fclean:
	@sudo rm -rf ~/data
	@docker system prune -a