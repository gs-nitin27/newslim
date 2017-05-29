<?php
    
    
    $output = shell_exec( 'cd /home/getsport/public_html/newslim ; git pull origin master;'  );
    echo "<pre>$output</pre>";
    
    ?>