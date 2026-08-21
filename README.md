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
  1.- CRUD de productos por unidad y en grupos filtrados.
  2.- Registro de movimientos de stock (entrada/salida).
  3.- Alerta de stock bajo, endpoint que muestre productos bajo un cierto umbral, lógica de negocio.
  4.- Dashboard simple, para aplicar ETL y manejo de datos.
  5.- Auth básico. login/registro básico. 
