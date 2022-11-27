USER = tweimer
DOCKER = docker compose -p "inception"
HOME	= /home/tweimer
IMAGE=
# /Users/$(USER)/Documents/Docker/Inception/home

all: up

up:
	@mkdir -p $(HOME)/data
	@mkdir -p $(HOME)/data/data_base
	@mkdir -p $(HOME)/data/wp
	@$(DOCKER)  -f srcs/docker-compose.yml  up -d

down: 
	@$(DOCKER) -f srcs/docker-compose.yml  down
ps:
	@$(DOCKER) ps
stop:
	@$(DOCKER) -f srcs/docker-compose.yml stop

clean:
	@$(DOCKER) -f srcs/docker-compose.yml down
	@docker image prune -a -f

fclean:
	@$(DOCKER) -f srcs/docker-compose.yml down --volumes
	@docker image prune -a -f
	@rm -rf $(HOME)/data/data_base
	@rm -rf  $(HOME)/data/wp
	@rm -rf  $(HOME)/data
	

re: fclean all
.PHONY: all fclean clean ps
