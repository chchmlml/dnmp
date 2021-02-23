FROM java:8

VOLUME /tmp
WORKDIR /
ADD ./redis-admin-server.jar redis-admin-server.jar
EXPOSE 8081
ENTRYPOINT ["java","-jar","/redis-admin-server.jar"]
