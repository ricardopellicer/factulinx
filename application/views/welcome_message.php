<?php
    $data = array(
        'title' => $this->lang->line("sistema_nombre_menu"),
        'keywords' => 'Sistema de Facturacion On-line, Control de Stock, Ventas, Compras, Gastos, Proveedores',
        'author' => 'Ricardo Jose Pellicer',
        'description' => 'Es un sistema de facturacion on-line donde puedes crear una empresa y poder gestionar tus productos, proveedores, ventas, compras y hasta poder vender desde la web'
    );
    $this->load->view('html5/head', $data); ?>

<div id="container">
    <div class="nice contained tam_completo color_default">
        <!-- Aqui va el nombre del sitio -->
        <p class="titulo">Factulinx v4 - EMPRESA</p>
        <!-- Centrado a la derecha va un buscador -->
            <!-- Por la izquierda del buscador va una botonera -->
        <input title="Buscar" type="buscador_top" name="buscar" id="buscar" value="" class="active oversize"/>
    </div>

    <?php $this->load->view('menu'); ?>
    
    <dl class="nice contained tabs">
        <dd><a href="#ci" class="active">CodeIgniter</a></dd>
        <dd><a href="#foundation">Foundation</a></dd>
	<dd><a href="#igniterplate">IgniterPlate</a></dd>
    </dl>
    
    <ul class="nice contained tabs-content">
        <li class="active" id="ciTab">
		<?php $this->load->view('ci_welcome_message'); ?>
        </li>
        <li id="foundationTab">
		<?php $this->load->view('zurb_foundation'); ?>
        </li>
	<li id="igniterplateTab">
		<?php $this->load->view('igniterplate'); ?>
	</li>
    </ul>

</div>
<!-- #container -->

<?php $this->load->view('html5/scripts'); ?>