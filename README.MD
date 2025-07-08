1. Create `docker-data\mysql` directory
2. `docker build -t php-app .`
2. `docker-compose up -d`

Ensure proper permissions:
sudo chown -R $USER:$USER docker-data/
sudo chmod -R 755 docker-data/
