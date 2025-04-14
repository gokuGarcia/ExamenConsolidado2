Sistema de Gestión de Eventos: 

Este proyecto es un sistema de gestión de eventos desarrollado en Laravel. Permite gestionar eventos, organizadores y participaciones de manera ágil y profesional.

--------------------------------------------------

Requisitos Previos:

Antes de comenzar, asegúrate de tener instalados los siguientes componentes en tu máquina:

- PHP: Versión 8.1 o superior.
- Composer: Para la gestión de dependencias de PHP.
- Node.js y npm: Para compilar los assets del frontend.
- MySQL: Para la base de datos.
- Servidor Web: Apache.

--------------------------------------------------------

Instalación:

configurar y ejecutar el proyecto:

1. Clonar el Repositorio:

git clone https://github.com/gokuGarcia/ExamenConsolidado2.git
cd Examen-Sconsolidado


2. Instalar dependencias.

composer install
npm install


3. Configurar el Archivo .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=parcial
DB_USERNAME=root
DB_PASSWORD=

4. Generar la Clave de la Aplicación

php artisan key:generate


5. Ejecutar las Migraciones

php artisan migrate


6. Compilar los Assets

npm run dev



Estructura del Proyecto:

1. Rutas
Las rutas principales están definidas en el archivo routes/web.php. Incluyen:

/: Página de bienvenida.
/dashboard: Dashboard protegido por autenticación.
/profile: Gestión del perfil del usuario.
CRUD para eventos, organizadores y participaciones.

2. Controladores:

Los controladores están ubicados en app/Http/Controllers:

ProfileController: Gestión del perfil del usuario.
EventoController: CRUD para eventos.
OrganizadorController: CRUD para organizadores.
ParticipacionController: CRUD para participaciones.

3. Vistas:

Las vistas están ubicadas en resources/views:

welcome.blade.php: Página de bienvenida.
dashboard.blade.php: Dashboard principal.
Carpetas adicionales para las vistas de eventos, organizadores y participaciones.

4. Estilos:

Los estilos personalizados están en resources/css y se compilan en public/css.

-----------------------------------------------------------------------
MEGD
STVQ
├── composer.json
└── README.md


