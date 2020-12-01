
minikube start --vm-driver=virtualbox

minikube addons enable metallb
kubectl apply -f srcs/yamls/metallb.yaml

eval $(minikube docker-env)

docker build srcs/containers/nginx/ -t nginx
docker build srcs/containers/wordpress/ -t wordpress
docker build srcs/containers/mysql/ -t mysql
docker build srcs/containers/phpmyadmin/ -t phpmyadmin
docker build srcs/containers/ftps/ -t ftps
docker build srcs/containers/influx/ -t influxdb
docker build srcs/containers/grafana/ -t grafana
docker build srcs/containers/telegraf/ -t telegraf

kubectl apply -f srcs/yamls/volumes.yaml
kubectl apply -f srcs/yamls/nginx.yaml
kubectl apply -f srcs/yamls/mysql.yaml
kubectl apply -f srcs/yamls/wordpress.yaml
kubectl apply -f srcs/yamls/phpmyadmin.yaml
kubectl apply -f srcs/yamls/ftps.yaml
kubectl apply -f srcs/yamls/influx.yaml
kubectl apply -f srcs/yamls/grafana.yaml
kubectl apply -f srcs/yamls/telegraf.yaml

minikube addons enable dashboard
minikube dashboard
