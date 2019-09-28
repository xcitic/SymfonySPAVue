#!/bin/bash
cp .env.template .env
docker-compose up -d
docker-compose exec app bash
