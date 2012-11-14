<?php
    $data = array(
        'title' => 'Welcome',
        'keywords' => 'CodeIgniter, Zurb, Foundation',
        'author' => 'Ellis Labs, Zurb'
    );
    $this->load->view('html5/head', $data); ?>

<div id="container">
    
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