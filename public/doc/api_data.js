define({ "api": [
  {
    "type": "get",
    "url": "/cliente",
    "title": "Listar Clientes",
    "name": "APICrudLumen",
    "group": "Clientes",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data",
            "description": "<p>of the Cliente.</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/routes.php",
    "groupTitle": "Clientes"
  },
  {
    "type": "get",
    "url": "/cliente/:id",
    "title": "Obtener un Cliente",
    "name": "APICrudLumen",
    "group": "Clientes",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data",
            "description": "<p>of the Cliente.</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/routes.php",
    "groupTitle": "Clientes"
  },
  {
    "type": "get",
    "url": "/ejecutivo",
    "title": "listar Ejecutivos",
    "name": "APICrudLumen",
    "group": "Ejecutivos",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data",
            "description": "<p>of the Ejecutivo.</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/routes.php",
    "groupTitle": "Ejecutivos"
  },
  {
    "type": "post",
    "url": "/ejecutivo/new",
    "title": "Guardar nuevo ejecutivo",
    "name": "APICrudLumen",
    "group": "Ejecutivos",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data",
            "description": "<p>of the Ejecutivo.</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/routes.php",
    "groupTitle": "Ejecutivos"
  },
  {
    "type": "put",
    "url": "/ejecutivo/:id",
    "title": "Editar ejecutivo",
    "name": "APICrudLumen",
    "group": "Ejecutivos",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data",
            "description": "<p>of the Ejecutivo.</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/routes.php",
    "groupTitle": "Ejecutivos"
  },
  {
    "type": "get",
    "url": "/ejecutivo/:id",
    "title": "Obtener un ejecutivo",
    "name": "APICrudLumen",
    "group": "Ejecutivos",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data",
            "description": "<p>of the Ejecutivo.</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/routes.php",
    "groupTitle": "Ejecutivos"
  },
  {
    "type": "delete",
    "url": "/ejecutivo/:id",
    "title": "Request User information",
    "name": "GetEjecutivos",
    "group": "Ejecutivos",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "data",
            "description": "<p>of the Ejecutivo.</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/routes.php",
    "groupTitle": "Ejecutivos"
  }
] });
