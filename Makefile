NAME = inception

all: $(NAME)

$(NAME):
	sudo docker-compose -f srcs/docker-compose.yml up -d

clean:
	sudo docker-compose -f srcs/docker-compose.yml down

fclean: clean
	sudo docker rmi $(sudo docker images -qa)
	sudo docker volume rm $(sudo docker volume ls -q)
	sudo docker network rm $(sudo docker network ls -q) 2>/dev/null
	sudo docker system prune -a --force

re: fclean all