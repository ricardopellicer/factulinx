<div class="row">
    <h2>Welcome to IgniterPlate</h2>
    <p>
        Uniting the power of CodeIgniter, HTML5 Boilerplate, and Zurb's Foundation
        rapid prototyping tool so you can code the faster, more powerful, responsive websites... Now!
    </p>
    <hr />
</div>


<div class="row">

    <div class="eight columns">
        <div class="panel">
            <h3>Changes to CodeIgniter</h3>
            
            <h4>application/config/autoload.php</h4>
            <ul class="disc">
                <li>
                    url helper autoloaded to provide absolute paths to scripts and styles.
                    Make sure to define your $config['base_url'] in application/config/config.php.
                </li>
            </ul>
            
            <h4>application/config/routes.php</h4>
            <ul class="disc">
                <li>
                    $route['404_override'] = 'error/page_not_found' to load the HTML5 Boilerplate 404 page.
                </li>
            </ul>
            
            <h4>application/config/config.php</h4>
            <ul class="disc">
                <li>
                    Removed 'index.php' from $config['index_page'] because urls are rewritten without index.php via .htaccess.
                </li>
            </ul>
            
            <h4>application/controllers</h4>
            <ul class="disc">
                <li>
                    error.php added to control 404 errors.
                </li>
            </ul>
            
            
            
            <h4>application/views</h4>
            <ul class="disc">
                <li>
                    html5/head and html5/scripts added to place before and after the main content of a view to load the HTML5 Boilerplate,
                    scripts, and styles &mdash; inculding those needed for Foundation CSS Framework.
                </li>
                <li>
                    zurb_foundation.php and igniterplate.php included to provide relevant welcome documentation.
                </li>
                <li>
                    welcome_message.php modified to include above views, along with CodeIgniter's welcome_message,
                    renamed to ci_welcome_message.php
                </li>
            </ul>
            
            <h4>.htaccess</h4>
            <ul class="disc">
                <li>
                    Using HTML5 Boilerplate default .htaccess, plus rewrite rules to strip index.php from CodeIgniter urls.
                </li>
            </ul>
            
            <h4>build, css, img, js, &amp; test directories</h4>
            <ul class="disc">
                <li>
                    Directories added within the root directory to contain tools, scripts, stylesheets, and images added by HTML5 Boilerplate,
                    Foundation CSS Framework, as well as your own.
                </li>
                <li>
                    Once Build script is run, intermediate and publish directories may also be added.
                </li>
            </ul>
            
            <h4>apple touch icons, favicon, crossdomain.xml, humans.txt, robots.txt</h4>
            <ul>
                <li>
                    Inserted in the root directory for HTML5 Boilerplate (icons modified to display IgniterPlate branding).
                    <a href="http://html5boilerplate.com/docs/">Read the docs</a> on HTML5 Boilerplate for more information.
                </li>
            </ul>
        </div>
    </div>
    
    <div class="four columns">
        <h3>Ant Build Script</h3>
        <h4>Installation and Use</h4>
        <ul>
            <li>
                <a href="http://html5boilerplate.com/docs/Build-script/">Read the docs</a> on how to install Apache Ant and use the build tool.
            </li>
            <li>
                You can also try digging into /build/config/project.properties to add or change the behavior of the build script.
            </li>
        </ul>
        
        <h4>Pointers</h4>
        <ul class="disc">
            <li>
                Use @import at the bottom style.css to import other css files (so the build tool will concatenate them all).
                The ant build tool doesn't seem to like concatenating and minifying the html/head css files.
            </li>
            <li>
                But also include them in the html5/head view so they load into view before the build.
                (Don't worry. The ant build tool will remove these.)
            </li>
        </ul>
    </div>
    
</div>