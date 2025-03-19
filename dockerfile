# Basis image
FROM node:18

# Werkomgeving instellen
WORKDIR /app

# Dependencies kopiëren
COPY package*.json ./

# Dependencies installeren
RUN npm install

# Code kopiëren
COPY . .

# App starten
CMD ["npm", "start"]

# Poort openen
EXPOSE 3000
