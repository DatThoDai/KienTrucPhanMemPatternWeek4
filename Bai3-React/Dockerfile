FROM node:18-alpine

WORKDIR /app

COPY my-app/package.json my-app/package-lock.json ./
RUN npm install

COPY my-app/ ./

EXPOSE 3000

CMD ["npm", "start"]