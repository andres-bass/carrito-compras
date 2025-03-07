# Sistema de Carro de Compras y Productos en Laravel

Este proyecto es un sistema básico para la gestión de productos y un carrito de compras, desarrollado en **Laravel**. Se compone de dos módulos principales:

- **Products:** Gestión y administración de productos.
- **Cart:** Carrito de compras, que utiliza la variable `producto_id` para identificar y agregar productos.

---

## Tabla de Contenidos

- [Requisitos](#requisitos)
- [Instalación y Configuración](#instalación-y-configuración)
  - [Clonar el Repositorio](#clonar-el-repositorio)
  - [Ejecutar el Backend](#ejecutar-el-backend)
  - [Ejecutar la Migración](#ejecutar-la-migración)
  - [Instalación del Frontend](#instalación-del-frontend)
  - [Ejecutar el Frontend](#ejecutar-el-frontend)
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

## Instalación y Configuración

### Clonar el Repositorio

Desde tu terminal, ejecuta:

```bash
git clone https://github.com/tu-usuario/nombre-del-repositorio.git
cd carrito-compras
