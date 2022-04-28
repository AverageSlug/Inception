NAME = inception

all: $(NAME)

$(NAME):
	docker-compose -f srcs/docker-compose.yml up -d

clean:
	docker-compose -f srcs/docker-compose.yml down

fclean: clean
	sh script.sh

re: fclean all