# Stage 1: Build
FROM node:18 AS builder

WORKDIR /app

COPY package.json .
RUN npm install

COPY . .

# Stage 2: Run
FROM node:18-alpine

WORKDIR /app

COPY --from=builder /app/package.json .
COPY --from=builder /app/node_modules ./node_modules
COPY --from=builder /app/app.js .

EXPOSE 3000

CMD ["node", "app.js"]