<h1>Inception (Docker)</h1>
The purpose of this project is to help us learn <b><a href="https://www.docker.com/">Docker</a></b> by configuring <b><a href="https://www.nginx.com/">Nginx</a></b> for the HTTP server, <b><a href="https://mariadb.org/">MariaDB</a></b> for the database, and <b><a href="https://wordpress.com/">WordPress</a></b> for the website.<br>
Each service is running in a separate container.
<h2>Launching the Containers</h2>
To launch the containers, we will use <b><a href="https://docs.docker.com/compose">Docker Compose</a></b>, which can be seen as the conductor of the containers. It is responsible for managing the communication between services.<br><br>
<b>To launch the project:</b>
<pre>make build</pre>
