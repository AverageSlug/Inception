all:
	docker-compose -f srcs/docker-compose.yml up

clean:
	docker-compose -f srcs/docker-compose.yml down

fclean: clean
	docker rmi -f $(docker images -qa)
	docker volume rm $(docker volume ls -q)
	docker system prune -a --force

re: fclean all