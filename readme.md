## Symfony-SPA-Vue
Building a web application with Symfony as backend, VueJS as SPA frontend and JWT for authentication.

Making this while reading the blog post by @thecodingmachine thanks <3
https://thecodingmachine.io/building-a-single-page-application-with-symfony-4-and-vuejs


My intention for making this is as an introduction to Symfony as a backend service communicating with a DB and serving an API for consumption by
a decoupled Vue frontend.

It will start as a monolit, and after I get Symfony going as I want, I will decouple the applications.
The frontend should be served from an HTML file on a CDN, and authenticate API calls using JWT, and Symfony will handle logic and DB connection.

The goal:
    - Client application is served from a CDN with DNS Balancing.
    - Client consumes API from Backend Service running Symfony.
    - Backend Service is connected to a Database Service.
    - Backend Service can authenticate users.
    - Client can persist the application using service workers.
        - The application can be updated when it changes.
            - The application version has a unique ID
            - On opening a TCP socket, the client sends their application version to the server
            - If the Clients application version !== Servers Application Version => Tell Client to fetch new version
        - The service worker can do work in the background.
            - Prefetch other assets.
