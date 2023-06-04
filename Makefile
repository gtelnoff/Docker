all:
	docker compose -f ./srcs/docker-compose.yml down
	docker compose -f ./srcs/docker-compose.yml build
	docker compose -f ./srcs/docker-compose.yml up -d

fclean:
	docker compose -f ./srcs/docker-compose.yml down
	docker system prune -af
	docker volume prune -af
	sudo rm -rf /home/gtelnoff/data/*