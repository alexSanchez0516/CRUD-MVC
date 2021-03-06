<main class="wrap">
    <?php if (isset($message)) : ?>
        <div class="alert alert-success state col-auto text-center" role="alert">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
    <section class="banner w-100">
        <h1 class="title-banner text-white" data-cy='heading-site'>Servicios de diseño y desarrollo de sitios web.</h1>
        <span class="subtitle-banner">¿Eres autónomo o empresa?</span>
        <span class="subtitle-banner">"Somos la solución perfecta para digitalizar tu negocio"</span>
        <span class="subtitle-banner ">Llámanos <a class="subtitle-banner text-decoration-underline" href="https://api.whatsapp.com/send?phone=0034634749073">634749073</a></span>


        <div class="content-btn-banner">
            <button type="button" class="btn btn-primary"><a class="subtitle-banner" href="https://api.whatsapp.com/send?phone=0034634749073">¿Tiene un proyecto? &raquo;</a></button>
            <button type="button" class="btn btn-primary"><a class="subtitle-banner" href="https://api.whatsapp.com/send?phone=0034634749073">Presupuesto &raquo;</a></button>
        </div>

    </section>
    <section class="packages" data-cy='packages'>
        <h2 class="title-packages" data-cy='heading-subtitle'>Paquetes web y Servicios a la carta</h2>


        <div class="content-pack" data-cy='content-pack'>
            <div class="package">
                <img src="build/img/web-icon-design-2.webp" class="img-packs" loading="lazy">
                <h2 class="title-package  w-100">Desarrollo de sitios web y SEO</h2>
                <p class="description.package text-justify">Te ofrecemos diferentes tipos de sitios web, en función de tus necesidades y enfocadas a tu sector, desde una web corporativa perfecta para darte a conocer y mostrar tus servicios, un proyecto más avanzado y profesional en el que poder compartir contenido y publicaciones a cerca de tus productos, o una página web a medida con todo lo que necesitas para llevar a cabo tu negocio.
                    Nos adaptamos a tus necesidades y al sector al que pertenezcas para crear el diseño web que mejor se adapte a tu negocio. Las posibilidades pueden variar desde una One Page Website, pasando por una web corporativa, hasta el diseño de una tienda online.</p>
            </div>
            <div class="package" id="fix-responsive-package">
                <img src="build/img/web-icon-code-2-1.webp" class="img-packs" id="photo_fix_package" loading="lazy">

                <h2 class="title-package ">Estrategia de marca</h2>
                <p class="description.package text-justify">
                    Diseñamos tu identidad corporativa, la publicidad de tu negocio y el aspecto de tu web o de tus redes sociales.

                    Tanto si acabas de comenzar con tu negocio, como si necesitas renovar y actualizar tu logotipo e identidad corporativa a los nuevos tiempos o quieres cambiar la imagen de tu página web o tienda online para adaptarla a nuevas campañas o temporadas.

                    Imagen corporativa



                    Logotipo.
                    Tarjetas de visita.
                    Vídeo promocional.
                    Rediseño de marca.
                    Packaging y papelería.
                    Flyers y tripticos.
                    Banners para sitios web. Adaptamos tu imagen corporativa a todo tu entorno digital.
                </p>
            </div>
        </div>
        <div class="packs" data-cy='packs'>
            <?php foreach ($services as $service) : ?>
                <div class="pack">

                    <div class="content-service">
                        <h3 class="title-pack"><?php echo $service->name ?></h3>
                        <i class="fas fa-caret-down"></i>
                    </div>
                    <div class="desc">
                        <span class="text-special">Consigue una cotización &raquo;</span>
                        <span class="price-cot">Desde €<?php echo $service->price ?></span>
                    </div>
                    <div class="infoServices">
                        <?php
                        $listServices = explode(",", $service->nameService);
                        ?>
                        <ul>
                            <?php foreach ($listServices as $ServiceName) : ?>
                                <li><?php echo $ServiceName ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


    </section>

    <section class="content-websites d-flex flex-column w-100">
        <span class="title-websites">Paquetes de sitios web completos</span>
        <img src="build/img/web-dev-26.webp" alt="services" loading="lazy" class="img-fluid">
        <div class="wrap-box">
            <div class="box d-flex flex-column" data-cy='box'>
                <img src="build/img/web-icon-light-bulb.webp" alt="services" loading="lazy" class="img-box">
                <span class="text-left text-secondary m-2 font-weight-bold">IDEA</span>
                <p class="content-text-box">
                    Te asesoraremos en tu idea, te guiaremos en el tedioso camino de emprender
                </p>
            </div>
            <div class="box d-flex flex-column" data-cy='box'>
                <img src="build/img/web-icon-design.webp" alt="services" loading="lazy" class="img-box">
                <span class="text-left text-secondary m-2 font-weight-bold">DISEÑO</span>
                <p class="content-text-box">
                    Realizaremos un diseño totalmente adaptable a todo tipo de pantallas
                </p>
            </div>
            <div class="box d-flex flex-column" data-cy='box'>
                <img src="build/img/web-icon-adjust.webp" alt="services" loading="lazy" class="img-box">
                <span class="text-left text-secondary m-2 font-weight-bold">REFINAR</span>
                <p class="content-text-box">
                    Nos adaptaremos a tus necesidades, para Divisione tu eres parte del equipo.
                </p>
            </div>
            <div class="box d-flex flex-column" data-cy='box'>
                <img src="build/img/web-icon-code.webp" alt="services" loading="lazy" class="img-box">
                <span class="text-left text-secondary m-2 font-weight-bold">CONSTRUIR</span>
                <p class="content-text-box">
                    Tu página será desarrollada con las mejores tecnologias del mercado
                </p>
            </div>
        </div>
        <button type="button" class="btn btn-outline-primary" data-cy='btn btn-outline-primary'>Proyectos &raquo;</button>
    </section>

    <section class="wrap-service-deluxe">
        <div class="content-deluxe d-flex flex-column m-4">
            <span class="title-deluxe">Rediseño del sitio web</span>
            <h2 class="name-service-deluxe">Paquete Deluxe para sitio web</h2>
            <p class="desciption-content">
                Rediseñaremos tu web, adaptándonos a tu nuevos requerimientos. CRM-STORE-CRUD
            </p>
            <ul class="d-flex flex-column">
                <li class="list-unset">Te diseñaremos una LandPage impresionante.</li>
                <li class="list-unset">Obtendras con un soporte 24/7 durante 1 mes.</li>
                <li class="list-unset">Diseño autogestionable.</li>
                <li class="list-unset">Optimizada para buscadores.</li>
                <li class="list-unset">Dominio, correo y alojamiento.</li>
                <li class="list-unset">Certificados de seguridad SSL.</li>
                <li class="list-unset">Redes Sociales</li>
                <li class="list-unset">LOPD y RGPD</li>
            </ul>
        </div>
        <img src="build/img/web-dev-25.webp" alt="service deluxe" loading="lazy">
    </section>
    <section class="wrap-website-design-package d-flex justify-content-center m-2">
        <img src="build/img/web-dev-10.webp" loading="lazy" alt="Website Design Package" class="img-fluid w-100">
        <div class="content-deluxe d-flex flex-column m-4 w-100">
            <span class="title-deluxe">Desarrollo web</span>
            <p class="desciption-content">
                Nos gusta trabajar con la ilusión de los nuevos proyectos, que transmitan confianza y profesionalidad desde un primer momento, capaces de vender y orientados a la consecución de los objetivos marcados por cada cliente.
            </p>
            <ul class="d-flex flex-column">
                <li class="list-unset">Hasta 15 páginas/apartados.</li>
                <li class="list-unset">100% responsive.</li>
                <li class="list-unset">Web autogestionable.</li>
                <li class="list-unset">Diseño personalizado.</li>
                <li class="list-unset">conos Sociales.</li>
                <li class="list-unset">Multi idioma.</li>
                <li class="list-unset">Botón Whatsapp.</li>
                <li class="list-unset">Sección de noticias.</li>
                <li class="list-unset">30 Imágenes premium.</li>
                <li class="list-unset">Control de estadísticas.</li>
                <li class="list-unset">Tutoría y uso.</li>
                <li class="list-unset">Optimización buscadores.</li>
                <li class="list-unset">Cumplimiento RGPD y LOPD.</li>
                <li class="list-unset">Página de Facebook</li>
                <li class="list-unset">Soporte 24/7</li>
            </ul>
        </div>
    </section>
    <section class="content-other-packages d-flex flex-column ">
        <h2 class="title-websites mb-4">Otros servicios</h2>
        <div class="box-other  m-2">
            <div class="content-other">
                <i class="fas fa-chart-bar threm m-right-1"></i>
                <span class="text-darkness">Paquete de SEO y análisis</span>
                <p class="text-packages mt-2">
                    Gestionamos el contenido de tu blog o sitio web, realizamos descripciones únicas para tus servicios y artículos y evitamos el “copy-past” tan utilizado hoy en día y que tan nefastos resultados trae para el posicionamiento en buscadores. <br>
                    Redactamos entradas para blogs corporativos de todo tipo y cualquier clase de documento o escrito oficial.
                </p>
                <div class="desc">
                    <span class="text-orange">Consigue una cotización &raquo;</span>
                    <span class="price-cot">Desde €100</span>
                </div>
            </div>
            <div class="content-other">
                <i class="far fa-envelope threm m2 m-right-1"></i>
                <span class="text-darkness">Construya una base de suscriptores</span>
                <p class="text-packages mt-2">
                    El plan de trabajo Social Media es la solución completa para cubrir todas las necesidades de tu negocio en Internet, ya que se trata de una gestión total de todo su entorno online, desde el desarrollo y optimización de su página web, la gestión completa de sus medios y redes sociales, el posicionamiento de su marca en Internet, y por encima de todo el cuidado de su reputación online y la atención e interacción con sus clientes y usuarios.
                </p>
                <div class="desc">
                    <span class="text-orange">Consigue una cotización &raquo;</span>
                    <span class="price-cot mt-2">Desde €400</span>
                </div>
            </div>
        </div>
        <div class="box-other m-2">
            <div class="content-other">
                <i class="fas fa-exchange-alt threm m2 m-right-1"></i>
                <span class="text-darkness">Re-plataforma o migración del sitio web</span>
                <p class="text-packages mt-2">
                    Nos adaptamos a tus necesidades y al sector al que pertenezcas para crear el diseño web que mejor se adapte a tu negocio. Las posibilidades pueden variar desde una One Page Website, pasando por una web corporativa, hasta el diseño de una tienda online.
                </p>
                <div class="desc">
                    <span class="text-orange">Consigue una cotización &raquo;</span>
                    <span class="price-cot">Desde €100</span>
                </div>
            </div>
            <div class="content-other">
                <i class="far fa-wrench threm m-2 m-right-1"></i>
                <span class="text-darkness">Mantenimiento web</span>
                <p class="text-packages mt-2">
                    Ofrecemos un servicio de mantenimiento para tu sitio web, independientemente del gestor o tipo de web que tengas.
                    Dispones de 2 tipos de servicio a elegir, en base a tus necesidades, mantenimiento web técnico y mantenimiento web integral.
                </p>
                <div class="desc">
                    <span class="text-orange">Consigue una cotización &raquo;</span>
                    <span class="price-cot">Desde €100</span>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-foot">
        <h3 class="title-contact-foot title-deluxe text-center m-4 text-light">Obtenga un presupuesto gratuito</h3>
        <form action="/" method="POST" class="w-100 form-contact-foot d-flex flex-column">
            <div class="content-contact-foot">
                <input type="text" name="contact[name]" id="name" placeholder="Nombre" required>
                <input type="email" name="contact[email]" id="email" placeholder="Correo electrónico" required>
                <input type="text" name="contact[company]" id="company" placeholder="Compañia" required>
                <input type="text" name="contact[url]" id="url" placeholder="URL del sitio web" required>
            </div>
            <input type="text" name="contact[content]" id="content" required placeholder="¿Qué contenido principal necesitas en tu sitio web?">
            <input type="text" name="contact[func]" id="func" required placeholder="¿Qué funcionalidad imprescindible necesitas?">
            <input type="text" name="contact[state]" id="state" required placeholder="¿Cuál es el estado actual de su sitio web?">
            <input type="text" name="contact[xp]" id="xp" required placeholder="¿Cuál es su experiencia con la gestión de su propio sitio web?">
            <textarea class="text-area-contact" name="contact[msg]" id="details" cols="40" rows="6" required placeholder="Proporcione cualquier otro detalle o pregunta que tenga sobre su sitio web"></textarea>
	    <label class="pol" for="polict"><input class="p-2" type="checkbox" name="contact[polict]" id="polict" value="Si" required>Con anterioridad a la remisión de mis datos, he leído la advertencia y la Política de Privacidad incluida en esta página Web, y me muestro expresamente de acuerdo con sus términos.</label>

	    <input type="submit" class="w-25" name="Enviar" value="Enviar" />
        </form>
    </section>
    <div class="cookies m-4">
        <img src="build/img/cookie.svg" alt="politicas de cookies" class="cookies-img w-25">
        <h3 id="cookies__title">Cookies</h3>
        <p id="cookies__text" class="text-center">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
        <button class="btn btn-primary" id="btn-aceptar-cookies">De acuerdo</button>
		<a class="enlace" href="/cookies">Aviso de Cookies</a>
    </div>
</main>
