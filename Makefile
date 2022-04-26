NAME = inception

all: $(NAME)

$(NAME):
	sudo docker-compose -f srcs/docker-compose.yml up -d

clean:
	sudo docker-compose -f srcs/docker-compose.yml down

fclean: clean
	sh script.sh

re: fclean all