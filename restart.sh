kubectl delete svc --all
kubectl delete deploy --all
kubectl delete pod --all
kubectl delete pvc --all
kubectl delete pv --all

minikube stop
sleep 1
./setup.sh