FROM java:8

VOLUME /tmp
WORKDIR /
ADD ./redis-admin-server.jar redis-admin-server.jar
EXPOSE 8081
ENTRYPOINT ["java","-Xmx512m -Xms128m -jar","/redis-admin-server.jar"]
