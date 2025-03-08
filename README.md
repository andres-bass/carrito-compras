# Sistema de Carro de Compras y Productos en Laravel

Este proyecto es un sistema básico para la gestión de productos y un carrito de compras, desarrollado en **Laravel**. Se compone de dos módulos principales:

- **Products:** Gestión y administración de productos.
- **Cart:** Carrito de compras, que utiliza la variable `producto_id` para identificar y agregar productos.

---

## Tabla de Contenidos

- [Requisitos](#requisitos)
- [Instalación y Configuración](#instalación-y-configuración)
  - [Clonar el Repositorio](#clonar-el-repositorio)
  - [Ejecución del Backend](#ejecución-del-backend)
  - [Ejecución de la Migración](#ejecución-de-la-migración)
  - [Instalación del Frontend](#instalación-del-frontend)
  - [Ejecución del Frontend](#ejecución-del-frontend)
- [Uso de Git](#uso-de-git)
- [Detalle de las APIs](#detalle-de-las-apis)
  - [API de Products](#api-de-products)
  - [API de Cart](#api-de-cart)
- [Ejemplo de Uso de la API](#ejemplo-de-uso-de-la-api)
- [Consideraciones Adicionales](#consideraciones-adicionales)
- [Contacto](#contacto)

---

## Requisitos

- **PHP:** Versión 7.4 o superior.
- **Composer:** Administrador de dependencias para PHP.
- **Node.js y NPM:** Para la gestión de recursos del frontend (opcional).
- **Base de Datos:** MySQL, PostgreSQL u otra compatible.
- **Git:** Para clonar y versionar el repositorio.

---



# API de Productos y Carrito de Compras

Este documento describe las APIs disponibles para la gestión de productos y el carrito de compras.

## **APIs para `products` (Productos)**

### **1. Obtener todos los productos**  
**GET** `/api/products`
```json
[
  {
    "id": 1,
    "name": "Laptop",
    "price": 1200.99,
    "description": "Laptop de última generación",
    "stock": 10
  }
]
```
```

---

## **APIs para `cart` (Carrito de Compras)**

### **1. Ver el carrito de un usuario**  
**GET** `/api/cart`
```json
{
  "user_id": 1,
  "items": [
    {
      "product_id": 1,
      "name": "Laptop",
      "price": 1200.99,
      "quantity": 1,
      "total": 1200.99
    }
  ],
  "total_price": 1200.99
}
```

### **2. Agregar un producto al carrito**  
**POST** `/api/cart`
```json
{
  "product_id": 2,
}
```



## Instalación y Configuración

### Clonar el Repositorio

Desde tu terminal, ejecuta:

```bash
git clone https://github.com/tu-usuario/nombre-del-repositorio.git
cd carrito-compras

## 2. Instalar Dependencias
```bash
composer install
npm install  # Si el proyecto usa assets con Vite o Laravel Mix
```

## 3. Configurar el Archivo de Entorno
```bash
cp .env.example .env
```
Edita el archivo `.env` y configura la conexión a la base de datos y otras variables necesarias.

## 4. Generar la Clave de la Aplicación
```bash
php artisan key:generate
```

## 5. Configurar la Base de Datos
```bash
php artisan migrate --seed  # Ejecuta migraciones y semillas
```

## 6. Iniciar el Servidor
```bash
php artisan serve
```
La aplicación estará disponible en `http://127.0.0.1:8000/`.

# Configuración del React 


## 2. Instalar Dependencias
```bash
npm install
```

## 3. Configurar Variables de Entorno (Opcional)
Si el proyecto requiere variables de entorno, copia el archivo de ejemplo:
```bash
cp .env.example .env
```
Luego, edita el archivo `.env` y configura las variables necesarias.

## 4. Iniciar el Servidor de Desarrollo
```bash
npm start
```
La aplicación estará disponible en `http://localhost:3000/`.

```
La aplicación estará disponible en `http://localhost:3000/`.

## 5. Compilar para Producción
```bash
npm run build
```
Esto generará los archivos optimizados en la carpeta `build/`.

## 6. Configurar ESLint y Prettier (Opcional)
Si el proyecto usa ESLint y Prettier, puedes configurarlos con:
```bash
npm run lint  # Para revisar errores de linting
npm run format  # Para formatear el código
```

## 7. Docker (Opcional)
Si el proyecto incluye configuración para Docker, levanta los contenedores con:
```bash
docker-compose up --build
