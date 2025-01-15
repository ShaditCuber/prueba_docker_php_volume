
<!-- comando para buildear imagen -->
# Build Image
```
docker build -t "nombre" "ruta_codigo"
```

# Ver imagenes
```
docker images
```

# Ejecutar imagen (crea contenedor)
-p para puerto salida : entrada
-d para mantener proceso segundo plano
```
docker run -p 80:80 "nombre" 
```

# Parar contenedor
```
docker ps
docker stop "3 digitos id"
```

# Borrar contenedor
```
docker ps
docker rm "3 digitos id" 
docker rm $(docker ps -aq) / borra todo
```

# Ocupar datos de maquina para docker 
```
docker run -p 80:80 -d -v "$(pwd)/src:/var/www/html"   "nombre" 
```

# Conectar a bash
```
docker exec -it "id" bash
```

# Borrar imagen
```
docker image rm "id"
```