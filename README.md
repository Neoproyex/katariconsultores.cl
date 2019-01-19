# KATARI CONSULTORES ®
[http://www.katariconsultores.cl/](http://www.katariconsultores.cl/)

_Sitio web desarrollado para nuestros clientes "Katari Consultores®", estilo landing page.
Basado en template [Katari extends Synthetica](https://github.com/diegoulloao/katari-extends-synthetica) para Wordpress._
###### @neoproyex
---

<br/>

## 1. Generación de Contenidos
Ésta página permite generar sus contenidos fácilmente mediante el uso de shortcodes desde el editor de texto para páginas.

<br/>

#### 1.1 Sección + Encabezado de título

![section-title](https://i.imgur.com/FA1T7Yl.png "Título")

<br/>

**Para agregar una nueva sección con encabezado de título, copiar y pegar en el editor y reemplazar los valores entre paréntesis por los deseados:**

<br/>

```
[section title="(título aquí)" sub="(subtítulo aquí)" trans="(bajo-subtítulo aquí)"]
  ...
[/section]
```

<br/>

#### 1.2 Cabeceras de página
Cada página o sección puede tener como cabecera alguno de los siguientes widgets:

<br/>

###### 1.2.1 Imágen estática

![top-image](https://i.imgur.com/ZCejEia.jpg "Cabecera imágen estática")

<br/>

**Para agregar una imágen estática al encabezado de la nueva página, copiar y pegar en el editor y reemplazar los valores entre paréntesis por los deseados:**

<br/>

```
[top] (link de la imágen aquí) [/top]
```

<br/>

###### 1.2.2 Carousel de imágenes

![top-carousel](https://i.imgur.com/rXic3VH.jpg "Cabecera carousel de imágenes")

<br/>

**Para agregar un carousel de imágenes al encabezado de la nueva página, copiar y pegar en el editor y reemplazar los valores entre paréntesis por los deseados:**

<br/>

```
[slider]

  [img] (link de la imágen 1 aquí) [/img]
  [img] (link de la imágen 2 aquí) [/img]
  [img] (link de la imágen 3 aquí) [/img]
  ...
  [img] (link de la imágen N aquí) [/img]

[/slider]
```

<br/>

###### 1.2.3 Mapa de Google Maps (http://snazzymaps.com)

![top-snazzymap](https://i.imgur.com/AhJpCPH.png "Cabecera Snazzy Maps")

<br/>

También la página ofrece la posibilidad de agregar un mapa directamente desde snazzymaps. **Para ello basta con cambiar al modo "editor de código" de wordpress y agregar la línea de código:**

<br/>

```
<iframe class="map wp3" src="(url de snazzymaps aquí)"></iframe>
```

<br/>

_* Los mapas pueden ser personalizados directamente desde la página de [snazzy maps.](https://snazzymaps.com)_

<br/>

Éstas cabeceras de páginas se pueden usar indistintamente como pié de una sección. Para hacer esto sólo bastaría con colocar la porción de código al final de toda la edición (después de **[section]**).

<br/>

#### 1.3 Contenedores de contenido
La página otorga soporte básicamente para 3 disposiciones de contenidos:

<br/>

* **Full Content:** Contenedor de ancho completo.
* **Side & Content:** Espacio lateral (con contenido o vacío) y Contenido.
* **Columns:** Separación del contenido en 2 columnas.

<br/>

**Éstos van SIEMPRE dentro de un shortcode de sección [section].**

<br/>

###### 1.3.1 Full Content
Es una capa de contenido que otorga el 100% del ancho de la pantalla disponible. No importa cuál sea ésta.

<br/>

![full-content](https://i.imgur.com/JHxW3kd.png)

<br/>

**Para agregar esta capa de contenido, especificar y reemplazar por su respectivo contenido:**

<br/>

```
[fullcontent] (contenido aquí) [/fullcontent]
```

<br/>

**Por lo tanto, la estructura completa con su correspondiente shortcode padre [section] sería:**

<br/>

```
[section title="(título aquí)" sub="(subtítulo aquí)" trans="(bajo-subtítulo aquí)"]

  [fullcontent] (contenido aquí) [/fullcontent]

[/section]
```

<br/>

###### 1.3.2 Side & Content
**Consta de una estructura de 2 capas:** Una lateral, y otra principal de contenido a su lado. Ésta capa de contenido principal otorga 2/3 del ancho de la pantalla disponible (+ margen lado derecho especificado por diseño), mientras que la capa lateral ocupa el 1/3 restante.

<br/>

![side-content](https://i.imgur.com/AnWH4Jy.png)

<br/>

**Para agregar esta estructura de capas de contenido, especificar y reemplazar por su respectivo contenido:**

<br/>

```
[side][/side]
[content] (contenido principal aquí) [/content]
```

<br/>

***La capa [side] va siempre vacía, debido a que está diseñada para que desaparezca en diseño responsivo (adaptación a otros dispositivos). Si se desea poner contenido en ella cambiar la especificación del elemento [side] por [sidecontent], de la siguiente manera:**

<br/>

```
[sidecontent] (contenido de costado aquí) [/sidecontent]
[content] (contenido principal aquí) [/content]
```

<br/>

**Por lo tanto, la estructura completa con su correspondiente shortcode padre [section] sería:**

<br/>

```
[section title="(título aquí)" sub="(subtítulo aquí)" trans="(bajo-subtítulo aquí)"]

  [side][/side]
  [content] (contenido principal aquí) [/content]

[/section]
```

<br/>

**Y:**

<br/>

```
[section title="(título aquí)" sub="(subtítulo aquí)" trans="(bajo-subtítulo aquí)"]

  [sidecontent] (contenido de costado aquí) [/sidecontent]
  [content] (contenido principal aquí) [/content]

[/section]
```

<br/>

**para [sidecontent] con contenido, correspondientemente.**

<br/>

###### 1.3.3 Columns
Consta de una estructura simple de 2 columnas de igual ancho. La organización de texto bajo este modelo puede resultar más simple.

<br/>

![columns](https://i.imgur.com/IuWa5Yx.png)

<br/>

**Para agregar esta estructura de capas de contenido, especificar y reemplazar por su respectivo contenido:**

<br/>

```
[contentleft] (contenido columna izquierda aquí) [/contentleft]
[contentright] (contenido columna derecha aquí) [/contentright]
```

<br/>

**Por lo tanto, la estructura completa con su correspondiente shortcode padre [section] sería:**

<br/>

```
[section title="(título aquí)" sub="(subtítulo aquí)" trans="(bajo-subtítulo aquí)"]

  [contentleft] (contenido columna izquierda aquí) [/contentleft]
  [contentright] (contenido columna derecha aquí) [/contentright]

[/section]
```

<br/>

#### 1.4 Componentes / widgets

Además de poder generar contenido usando las prestaciones que el editor de Wordpress trae por defecto, también la página otorga la posibilidad de crear contenidos con compontentes interactivos más complejos.

<br/>

**Los componentes / widgets van SIEMPRE dentro de una capa para contenido _(a excepción de 1.4.1 Slider principal de página)_, capa que a su vez va SIEMPRE dentro de una sección [section].**

<br/>

Dentro de las disponibilidades figuran:

<br/>

###### 1.4.1 Slider principal de página

El slider principal de la página hace **exposición** de las imágenes más **descriptivas** del sitio web. Además integra la posibilidad de añadir un **_título y descripción_** referente a la imágen o alguna **temática** "libre" de importancia.

<br/>

![slider-principal](https://i.imgur.com/JODWZpa.jpg)

<br/>

Este componente se incluye una **única vez** en toda la página.

<br/>

Para personalizar este componente, en primer lugar debe asegurarse de crear una página **_tipo "inicio"_**.
**Para eso basta con dirigirse a los "campos personalizados" del editor de Wordpress y en el campo _tipo_ agregar el valor _"inicio"_, tal y como se muestra en la imágen siguiente:**

<br/>

![campos-personalizados](https://i.imgur.com/JJ7ZK2h.png)

<br/>

_(Si no se muestran los campos personalizados activarlos -> Ir a línea punteada vertical **(...)** al lado de la tuerca de herramientas del editor -> Escoger **Opciones** -> En **"Paneles avanzados"** activar **"campos personalizados"**)._

<br />

**Una vez que la página ha sido marcada como _página de inicio_ basta con añadir las siguientes líneas en el editor y reemplazar los valores por los deseados:**

<br/>

```
[slideritem texto1="(título 1 aquí)" texto2="(descripción 1 aquí)"] (enlace de la imágen 1 aquí) [/slideritem]
[slideritem texto1="(título 2 aquí)" texto2="(descripción 2 aquí)"] (enlace de la imágen 2 aquí) [/slideritem]
...
[slideritem texto1="(título N aquí)" texto2="(descripción N aquí)"] (enlace de la imágen N aquí) [/slideritem]
```

<br/>

###### 1.4.2 Tabs

Los Tabs son formas estratégicas de segmentar el contenido. Ayudan a reducir espacio y además organizan los textos bajo una temática específica.

<br/>

![tabs](https://i.imgur.com/uLPMQXI.png)

<br/>

La estructura para crear un componente de Tab puede resultar algo más compleja que las anteriormente vistas pero realmente su lógica es sencilla. **Para crearlo seguir siguiente estructura y reemplazar por lo deseado:**

<br/>

```
[listgroup]

  [listcontrol]
    [control title="(título tab 1 aquí)" hand="(id-tab-1-aquí)" active="1"]
    [control title="(título tab 2 aquí)" hand="(id-tab-2-aquí)"]
    ...
    [control title="(título tab N aquí)" hand="(id-tab-N-aquí)"]
  [/listcontrol]

  [listcontent]
    [c hand="(id-tab-1-aquí)" active="1"] (contenido tab 1 aquí) [/c]
    [c hand="(id-tab-2-aquí)"] (contenido tab 2 aquí) [/c]
    ...
    [c hand="(id-tab-N-aquí)"] (contenido tab N aquí) [/c]
  [/listcontent]

[/listgroup]
```

<br/>

Básicamente la estructura se compone de **2 secciones principales**. Aquella que hace referencia a los selectores **[listcontrol]** (parte izquierda en la imágen y primer segmento en el código) y aquella que hace referencia a los contenidos como tal **[listcontent]** (parte derecha en la imágen y segundo segmento en el código).

<br/>

**A TENER EN CONSIDERACIÓN!**

* El parámetro _active="1"_ hace referencia al tab que se mostrará activo de todos. Puede ser cualquiera, no necesariamente el primero. Asegurarse de poner este parámetro sobre el control del tab **[control]** y sobre su contenido **[c]**.

* **Los valores de los parámetros _hand_ no pueden contener espacios! Éstos deben ser del tipo _hand="id-de-ejemplo-1" ó hand="iddeejemplo1"_ y son únicos, eso quiere decir que no deben repetirse JAMÁS.**

<br/>

**Se sugiere usar siempre dentro de [fullcontent] para mejores resultados. Entonces la estructura correcta completa sería:**

<br/>

```
[section title="(título aquí)" sub="(subtítulo aquí)" trans="(bajo-subtítulo aquí)"]

  [fullcontent]
  
    [listgroup]
      [listcontrol]
        [control title="(título tab 1 aquí)" hand="(id-tab-1-aquí)" active="1"]
        [control title="(título tab 2 aquí)" hand="(id-tab-2-aquí)"]
        ...
        [control title="(título tab N aquí)" hand="(id-tab-N-aquí)"]
      [/listcontrol]

      [listcontent]
        [c hand="(id-tab-1-aquí)" active="1"] (contenido tab 1 aquí) [/c]
        [c hand="(id-tab-2-aquí)"] (contenido tab 2 aquí) [/c]
        ...
        [c hand="(id-tab-N-aquí)"] (contenido tab N aquí) [/c]
      [/listcontent]
    [/listgroup]
    
  [/fullcontent]

[/section]
```

<br/>

###### 1.4.3 Expo-team

Este widget permite mostrar a los miembros del equipo que forman la empresa. Tiene una estructura algo más compleja, pero manejable (debido a su funcionalidad). **El componente maneja internamente 2 capas de contenido (_side & content_, por lo que no es necesario poner unas)**: Al costado izquierdo (se muestra nombre y rol de la persona en la empresa) y costado derecho (se muestra galería de fotos para selección y desplegamiento de la biografía o reseña de la persona en cuestión).

<br/>

![expo-team](https://i.imgur.com/AIzBHtf.png)

<br/>

**Para mostrarlo en la página basta con seguir la estructura indicada y reemplazar por los valores deseados. Se muestra inmediatamente su versión completa incluyendo su elemento padre [section] que define la sección:**

<br/>

```
[section title="(título aquí)" sub="(subtítulo aquí)" trans="(bajo-subtítulo aquí)"]
  [expoleft id="(id-expo-team-aquí)"]

  [exporight id="(id-expo-team-aquí)"]
    [expoteam]

      [person name="(nombre1 aquí)" rol="(rol persona1 aquí)" hand="(id-persona1-aquí)" active="1"]
      (enlace imágen persona 1 aquí) [/person]
      ...
      [person name="(nombre N aquí)" rol="(rol persona N aquí)" hand="(id-personaN-aquí)"]
      (enlace imágen persona N aquí) [/person]

    [/expoteam]

    [expocontent]

      [profile hand="(id-persona1-aquí)" active="1"]
        [grades] (estudios persona 1 aquí) [/grades]
        [bio] (reseña persona 1 aquí) [/bio]
      [/profile]
      ...
      [profile hand="(id-personaN-aquí)"]
        [grades] (estudios persona N aquí) [/grades]
        [bio] (reseña persona N aquí) [/bio]
      [/profile]

    [/expocontent]
  [/exporight]
[/section]
```

<br/>

Básicamente la estructura se divide en 2 partes, en donde la última, se divide a la vez en 2 partes. En la primera tenemos el contenedor de la izquierda **[expoleft]** el cuál contiene un display del nombre y rol de la persona en la empresa.
Seguidamente la segunda parte **[exporight]** se divide en: la parte que muestra la galera de fotos de los perfiles **[expoteam]** y la parte que despliega toda la información acerca de la persona **[expocontent]** como sus estudios y reseña.

<br/>

**A TENER EN CONSIDERACIÓN!**

* Al igual que en Tabs, el parámetro _active="1"_ hace referencia al perfil de persona que se mostrará activo. Puede ser cualquiera, no necesariamente la primera. Asegurarse de poner este parámetro tanto sobre el display de nombre de la persona **[person]** y sobre su estructura de perfil **[profile]**.

* **Los valores de los parámetros _hand_ no pueden contener espacios! Éstos deben ser del tipo _hand="id-de-ejemplo-1" ó hand="iddeejemplo1"_ y son únicos, eso quiere decir que no deben repetirse JAMÁS.**

<br/>

#### 1.5 Accesorios para Contenido

<br/>

###### 1.5.1 Sets

Los set son disposiciones para mostrar una pequeña información importante acompañada de un ícono.

<br/>

![font-awesome](https://i.imgur.com/krW1LOa.png)

<br/>

**Su uso debe seguir la siguiente estructura:**

<br/>

```
[set ico="(*clases del ícono 1 aquí)"] (información 1 aquí) [/set]
[set ico="(*clases del ícono 2 aquí)"] (información 2 aquí) [/set]
```

<br/>

**Las clases del ícono son referencias a un ícono proporcionado por la plataforma [Font Awesome.](https://fontawesome.com/icons?d=gallery)**

<br/>

Para obtener las clases asociadas al icono (luego de seleccionar éste en la página oficial) copiar y pegar el valor que está entre comillas en el atributo _ico_ correspondiente a clases clases del ícono en la estructura del set. En este caso, _fab fa-500px_, como se muestra en la imágen a continuación:

<br/>

![font-awesome](https://i.imgur.com/58JH2iq.png)

<br/>

**Se recomienda hacer uso de los sets en contenedores [sidecontent], que van a su vez dentro de un elemento [section].**

<br/>

**El ejemplo concreto de la imágen correspondería a la porción de código:**

<br/>

```
[section title="(título aquí)" sub="(subtítulo aquí)" trans="(bajo-subtítulo aquí)"]
  
  [sidecontent]
    [set ico="fab fa-500px"] (información 1 aquí) [/set]
    [set ico="far fa-address-book"] (información 2 aquí) [/set]
    [set ico="fab fa-angellist"] (información 3 aquí) [/set]
  [/sidecontent]
  
  [content] (contenido principal aquí) [/content]
  
[/section]
```

<br/>

## 2. Personalización de colores

La página incluye 3 tipos de esquema de colores disponibles para ser utilizados. **Éstos son declarados en los _campos personalizados_ en cada una de sus páginas** a través de la clave _fondo_ y los valores posibles son:

<br/>

* normal
* alternativo
* alternativo-gris

<br/>

![campos-personalizados-bg](https://i.imgur.com/K4M3KPr.png)

<br/>

_(Si no se muestran los campos personalizados activarlos -> Ir a línea punteada vertical **(...)** al lado de la tuerca de herramientas del editor -> Escoger **Opciones** -> En **"Paneles avanzados"** activar **"campos personalizados"**)._

<br/>

**A continuación se presentan las muestras:**

<br/>

#### 2.1 Esquema por defecto (normal)

Es un esquema basado el colores blancos y claros, con letras contrastates.

<br/>

![normal-bg](https://i.imgur.com/krW1LOa.png)

<br/>

#### 2.2 Esquema alternativo

Es un esquema basado en colores oscuros que proporcionan un quiebre o resalte de la sección por entre las demás.

<br/>

![alternative-bg](https://i.imgur.com/LKyTwZB.png)

<br/>

#### 2.3 Esquema alternativo-gris

Es un esquema basados en colores derivados del blanco pero opacados. Reduce la luz.

<br/>

![alternative-gray-bg](https://i.imgur.com/ijwZqaO.png)

<br/>

## 3. Plugins Wordpress

La página incorpora los siguientes plugins Wordpress:

* **Polylang:** Soporte para versiones de la página multilenguaje. _(versión 2.5.1)_
* **Contact Form 7:** Integración y creación para formularios de contactos _(versión 5.1.1)_
* **Enhanced Media Library:** Para el manejo mejorado de biblioteca Multimedia _(versión 2.7.2)_
* **Simple Custom Post Order:** Para manejar ordenamiento de páginas, entradas, etc. _(versión 2.4.0)_
* **Autoptimize:** Para la comprensión de archivos enviados al cliente durante las peticiones HTTP. _(versión 2.4.4)_

<br/>

## 4. Soporte Multilenguaje

La página incorpora total soporte para el manejo de versiones multilenguaje.
<br/>
Consultar la especificación de [Polylang](https://es.wordpress.org/plugins/polylang/) para más información o contactar con el desarrollador.

<br/>

## 5. Desarrollo

* **Diseño e imágenes:** César Cáceres Olarte / <ccaceres.neo@gmail.com>
* **Programación front y back-end:** Diego Ulloa Ormeño / [@diegoulloao](https://github.com/diegoulloao)
---
[Neoproyex® 2019.](http://www.neoproyex.com/)