include ./srcs/.env
export

all: #ajoute DOMAIN dans le hostfile, puis build et up les containers
	sudo echo "127.0.0.1 $(DOMAIN)" >> /etc/hosts
	mkdir -p $(VOLUME_PATH)
	chmod 777 $(VOLUME_PATH)
	cd srcs && sudo docker compose build && sudo docker compose up -d

clean: #down les containers
	cd srcs && sudo docker-compose down

fclean: #clean les fichiers persistents
	make clean
	sudo docker system prune --all
	sudo rm -rf $(VOLUME_PATH)

re:
	make fclean
	make all