# Freemium Base Theme

Tema custom WordPress con Vite + Alpine.js + SCSS.

---

## 🚀 Instalación

1. Clonar este repo en `/wp-content/themes/freemium-base-theme`
2. Instalar dependencias:

```bash
npm install
```

3. (Opcional) Agregar `.env.local` para desarrollo:

```
WP_ENV=development
```

---

## 🛠 Modo desarrollo

Esto usa Vite con HMR (recarga en caliente) y carga JS/CSS desde `localhost:5173`.

1. Levantar el servidor de desarrollo:

```bash
npm run dev
```

2. En WordPress, asegurate de que `WP_ENV=development` esté definido (puede estar en `wp-config.php` o como `.env.local`)
3. Visitá el sitio: `http://localhost:8000`

Cambios en JS o SCSS se recargan automáticamente 💨

---

## 🏗 Build para producción

Esto compila y copia el `manifest.json` necesario para encolar los assets en WordPress.

```bash
npm run build
```

Esto genera:

```
/build/assets/js/main-XYZ.js
/build/assets/css/style-XYZ.css
/build/manifest.json
```

Y WordPress los encola automáticamente usando `enqueue.php`.

---

## 📁 Estructura

```
freemium-base-theme/
├── assets/
│   ├── js/main.js         # Punto de entrada JS
│   └── css/style.scss     # Estilos SCSS
├── build/
├── build/                 # Archivos compilados por Vite
├── functions.php
├── enqueue.php
├── style.css              # Cabecera del tema WP
├── vite.config.mjs
├── package.json
└── ...
```

---

## 🧪 Requisitos

- Node.js 18+
- WordPress 6.0+
- Docker (opcional, pero recomendado para dev)

---

¡Listo! A codear tranquilo. 😎
