FROM php:7.2-cli

#Expõe a porta 8000
EXPOSE 8000

#RODA comando de sistema dentro do contêiner
RUN mkdir /myproject
#COPIA o arquivo index.php para dentro da pasta criada no comando anterior
COPY index.php  /myproject
#SET do diretório para /myproject
WORKDIR /myproject
#ARRAY de comandos
CMD ["php", "-S", "0.0.0.0:8000"]