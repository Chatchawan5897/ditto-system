# nginx version 1.10
FROM nginx:1.10

RUN echo "upload_max_filesize=12M\npost_max_size=12M" > /usr/local/etc/php/conf.d/uploads.ini


# เป็นคำสั่งสำหรับการ add config nginx จากเครื่องเข้าไปใน container นะครับ
     # host         # container
ADD ./default.conf /etc/nginx/conf.d/default.conf
