                                                                               ![descargar__1_-removebg-preview](https://github.com/KNDJDVV/SAPI/assets/116231229/f7bfdf76-fd8c-4d91-b658-48c9a87b1a84)


# Sistema de Administración de Propiedades Inmobiliarias (SAPI)

## Introducción
El Sistema de Administración de Propiedades Inmobiliarias (SAPI) es una aplicación desarrollada en Laravel que facilita la gestión de propiedades inmobiliarias, clientes y transacciones. Esta documentación proporciona instrucciones sobre cómo configurar y operar el sistema.

## Configuración del Sistema
Para configurar el sistema, sigue estos pasos:

## 1. **Requisitos Previos**:
   - PHP >= 7.4
   - Composer
   - MySQL o cualquier otro sistema de gestión de bases de datos compatible

## 2 **Clonar el Repositorio**:

######  git clone <https://github.com/KNDJDVV/SAPI.git>


## 3  **Instalar Dependencias**:
###### cd sapi
###### composer install


## 4. **Copiar el Archivo de Configuración**:
###### cp .env.example .env


## 5. **Generar Clave de Aplicación**:
###### php artisan key:generate


##  6. **Configurar la Base de Datos**:
###### - Edita el archivo `.env` y configura los detalles de conexión a tu base de datos.

## 7. **Ejecutar Migraciones**:
###### php artisan migrate


## 8. **Iniciar el Servidor**:
 ###### php artisan serve
 
 
## 9. **Acceder al Sistema**:
Abre tu navegador web y navega a `http://localhost:8000` (o al puerto que se especifique).

## Operación del Sistema
Una vez configurado, el Sistema de Administración de Propiedades Inmobiliarias (SAPI) está listo para ser utilizado. A continuación, se presentan las principales funcionalidades del sistema:

## - **Gestión de Propiedades**:
- Agregar nuevas propiedades con detalles como dirección, tipo, tamaño, etc.
- Ver la lista de propiedades existentes.
- Actualizar los detalles de una propiedad.
- Eliminar propiedades.

## - **Gestión de Clientes**:
- Agregar nuevos clientes con información como nombre, apellido, teléfono, etc.
- Ver la lista de clientes registrados.
- Actualizar la información de un cliente.
- Eliminar clientes.

 ##  **Gestión de Transacciones**:
- Registrar transacciones relacionadas con la compra, venta o arrendamiento de propiedades.
- Asociar propiedades y clientes a cada transacción.
- Ver el historial de transacciones realizadas.
