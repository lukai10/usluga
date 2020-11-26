	

	FROM httpd:2.4.46-alpine
	RUN apk update; \
	    apk upgrade;
	COPY serwer.apache.conf /usr/local/apache2/conf/serwer.apache.conf
	RUN echo "Include /usr/local/apache2/conf/serwer.apache.conf" \
	    >> /usr/local/apache2/conf/httpd.conf

