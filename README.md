# catalogo-inventario-pyme
Proyecto para formalizar conocimientos en Vuejs3, Laravel y SQL.
Sistema gestor CRUD de productos digitalizados que registra los movimientos de los productos, su stock e información básica. Contará con una validación de seguridad básica de usuarios.

# Stack
 ## Backend
 Laravel 11 PHP 8.2
 Laravel Sanctum
 MySQL8
 ORM: Elocuent
 ## Frontend
 Vuejs3
 Vite
 Axios
 Vue Router
 Pinia
 TailwindCSS

 ## Hosting
 Railway para backend y Vercel para Frontend

# Alcance
  Nada de roles y permisos complejos
  Nada de reportes en PDF o exportación — eso es fase 2
  Un solo idioma, un solo tema visual simple

# Funcionalidades
  1.- Auth básico. login/registro básico.
  2.- CRUD de productos por unidad y en grupos filtrados.
  3.- Registro de movimientos de stock (entrada/salida).
  4.- Alerta de stock bajo, endpoint que muestre productos bajo un cierto umbral, lógica de negocio.
  5.- Dashboard simple, para aplicar ETL y manejo de datos.
## Instalación

## Demo

## TEST
Se utiliza Postman para probar el end-to-end al terminar los controladores.

# TEST REGISTER
<img width="1116" height="807" alt="image" src="https://github.com/user-attachments/assets/db199968-6a7c-424e-acb3-95de8c69d659" />
<img width="1092" height="785" alt="image" src="https://github.com/user-attachments/assets/7cb292e9-69ec-48df-b4e6-e864bb91c54d" />

# TEST LOGIN
<img width="1112" height="829" alt="image" src="https://github.com/user-attachments/assets/593335fb-3ad7-4c3c-a18d-c54ec0f80247" />

# TEST ME (obtener datos con token)
<img width="1096" height="814" alt="image" src="https://github.com/user-attachments/assets/38d5ee6f-0f02-4909-98e3-8532e679572e" />

# TEST LOGOUT
<img width="1070" height="703" alt="image" src="https://github.com/user-attachments/assets/aba95cdf-2af4-4d9c-988f-8ab9797f46f0" />

## Roadmap futuro
- Migrar autenticación de localStorage a cookies httpOnly para mayor seguridad (mitigar riesgo XSS)
- Sistema de tags/categorías múltiples para mejorar recomendaciones y búsqueda