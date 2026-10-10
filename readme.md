**Autor:** David Albarrán  
**Materia:** Aplicaciones Web  

Este proyecto consiste en una aplicación web básica desarrollada en HTML5 y PHP puro para resolver dos casos prácticos de cálculo financiero y facturación mediante el envío y procesamiento de datos por el método `POST`.

---

## Estructura del Proyecto

* **`main.html`**: Interfaz de usuario estructurada con etiquetas `<details>` que contiene los formularios independientes para cada ejercicio.
* **`procesarQuincena.php`**: Script que procesa los datos del Ejercicio 1, calculando los salarios por turnos y aplicando las deducciones correspondientes.
* **`procesarFacturacion.php`**: Script que procesa los datos del Ejercicio 2, calculando montos (subtotales y total), IVA, aplicación condicional de descuentos y emisión del desglose de factura.

---

## Funcionalidad de los Ejercicios

### 1. Cálculo de Quincena por Turnos (`procesarQuincena.php`)
Permite calcular el sueldo neto quincenal de un trabajador a partir de su nombre, cédula y las horas acumuladas en tres turnos específicos:
* **Turno Diurno:** 675 Bs./hora.
* **Turno Vespertino:** 700 Bs./hora.
* **Turno Nocturno:** 956.23 Bs./hora.

A partir del sueldo bruto acumulado, el sistema aplica las retenciones de **Ahorro Habitacional** y **Seguro Social** según las escalas establecidas:
* **Menor a 85,000 Bs.:** Ahorro Habitacional = 0.1%, Seguro Social = 0.15%.
* **Entre 85,000 Bs. y 150,000 Bs. (inclusive):** Ahorro Habitacional = 0.15%, Seguro Social = 0.2%.
* **Mayor a 150,000 Bs.:** Ahorro Habitacional = 0.3%, Seguro Social = 0.25%.

### 2. Facturación de Artículo (`procesarFacturacion.php`)
Permite emitir una factura de compra a partir de la descripción del producto, la cantidad adquirida y el precio unitario:
* Calcula el precio base (subtotal).
* Aplica el **12% de IVA**.
* Evalúa si el total con IVA supera los **150 $**; de ser así, aplica un **descuento del 15%**.
* Muestra el desglose detallado con el subtotal, el monto del IVA, el estado del descuento y el total neto a cancelar.

---

## Requisitos y Ejecución en Local

Para ejecutar el proyecto se requiere un entorno con soporte para PHP. En caso de ser XAMPP:

1. Copiar la carpeta del proyecto dentro del directorio `htdocs` de XAMPP (por ejemplo: `C:/xampp/htdocs/`).
2. Iniciar el servicio **Apache** desde el panel de control de XAMPP.
3. Abrir el navegador e ingresar a la dirección:
http://localhost/main.html
o en caso de haber includo los archivos en una carpeta dentro de `htdocs`:
http://localhost/nombre_de_la_carpeta/main.html

En caso de ser cualquier otro servidor con integrado de PHP
1. Abrir una terminal en el directorio del proyecto.
2. Iniciar el servidor local ejecutando en la termina:
php -S localhost:8000
3. Abrir el navegador e ingresar la direccion:
http://localhost:8000/main.html

---

## Tecnologías Utilizadas
HTML 5: Formularios, etiquetas desplegables y validación nativa de campos.
PHP: Manejo de peticiones HTTP POST a través de $_POST, funciones personalizadas, control de flujo condicional y formateo numérico.