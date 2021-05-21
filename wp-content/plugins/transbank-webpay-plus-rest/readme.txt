=== Transbank Webpay Plus REST ===
Contributors: TransbankDevelopers
Tags: transbank, webpay, rest, chile
Requires at least: 4.0
Tested up to: 5.6
Requires PHP: 5.6
Stable tag: 1.4.1
License: 3-Clause BSD License
License URI: https://opensource.org/licenses/BSD-3-Clause

Recibe pagos en línea con tarjetas de crédito, débito y prepago en tu WooCommerce a través de Webpay Plus.

== Description ==
Recibe pagos en línea con tarjetas de crédito, débito y prepago en tu WooCommerce a través de Webpay Plus.

== Changelog ==
= 1.4.1 =
* Ahora el API 1.2 de Transbank a veces redirige por GET al finalizar el flujo y el plugin no funcionaba bien cuando esto pasaba. Ya está arreglado.

= 1.4.0 =
* Se utiliza el nuevo SDk de PHP versión 2.0
* Ya no es compatible con PHP 5.6.
* Ahora es compatible de PHP 7.0 a PHP 8.0
* Ahora se puede completar el formulario de validación directamente desde el plugin
* Se soluciona warning de jQuery [PR 57](https://github.com/TransbankDevelopers/transbank-plugin-woocommerce-webpay-rest/pull/57)
* Se aplica coding style de StyleCI.


= 1.3.4 =
* Se mejora compatibilidad con PHP 7.0
* El plugin ya no debería fallar si no existe la extensión ext-soap de PHP

= 1.3.3 =
* Se actualiza el logo de webpay en el formulario de pago
* Se arregla error de tipeo en la página de éxito
* Se añade soporte a Wordpress 5.6
* Se mejora el detalle de las notas del pedido en transacciones aprobadas y rechazadas.


= 1.3.2 =
* Ahora la módulo de "verificar conexión" funciona correctamente cuando el plugin está configurado en modo Producción.

= 1.3.1 =
* Se cambia la posición del menú "Webpay Plus" que antes estaba en el menú principal y ahora bajo el menú WooCommerce

= 1.3.0 =
Agregado:
* Se reemplaza el modal de diagnóstico por pantallas especiales
* Se añade menú 'Webpay plus' en el menú lateral de la administración de Wordpress
* Se añade mensaje de bienvenida al instalar el plugin
* Se mejora compatibilidad con otros plugins
* Se actualiza SDK de PHP a la versión 1.10.0
* Se elimina Boostrap para los estilos de la administración

Arreglado:
* Se arreglan "issues" internas destacadas por el equipo de Wordpress para subir el plugin al repositorio de wordpress.org

= 1.2.0 =
Agregado:
* Ahora se puede consultar el estado de una transacción hecha con webpay plus dentro del detalle de una orden [PR #21](https://github.com/TransbankDevelopers/transbank-plugin-woocommerce-webpay-rest/pull/21)
* Se incluye funcionalidad para realizar anulaciones de un pago dentro del detalle de una orden [PR #20](https://github.com/TransbankDevelopers/transbank-plugin-woocommerce-webpay-rest/pull/20)
* Mejora página de configuración con mejores textos de ayuda [PR #22](https://github.com/TransbankDevelopers/transbank-plugin-woocommerce-webpay-rest/pull/22)

Arreglado:
* Soluciona PDF que no se exportaba [PR #22](https://github.com/TransbankDevelopers/transbank-plugin-woocommerce-webpay-rest/pull/22)

= 1.1.0 =
Agregado:
* Mejora compatibilidad con Wordpress MU [PR #9](https://github.com/TransbankDevelopers/transbank-plugin-woocommerce-webpay-rest/pull/9)
* Añade mensaje cuando Woocommerce no está configurado en Pesos chilenos [PR #15](https://github.com/TransbankDevelopers/transbank-plugin-woocommerce-webpay-rest/pull/15)


= 1.0.1 =
Arreglado:
* Se soluciona error que ocasionaba que al pasar a producción se siguiera utilizando el ambiente de prueba [PR #6](https://github.com/TransbankDevelopers/transbank-plugin-woocommerce-webpay-rest/pull/6)

= 1.0.0 =
* Initial release.

== Upgrade Notice ==
= 1.4.1 =
* Se utiliza el nuevo SDk de PHP versión 2.0
* Ya no es compatible con PHP 5.6.
* Ahora es compatible de PHP 7.0 a PHP 8.0
* Ahora se puede completar el formulario de validación directamente desde el plugin
* Se soluciona warning de jQuery [PR 57](https://github.com/TransbankDevelopers/transbank-plugin-woocommerce-webpay-rest/pull/57)
* Se aplica coding style de StyleCI.
