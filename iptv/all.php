    <?php  
    $url="https://raw.githubusercontent.com/luisms123/tdt/master/peliculas.m3u"; // url de la pagina que queremos obtener  
    $url_content = '';  
    $file = @fopen($url, 'r');  
    if($file){  
      while(!feof($file)) {  
        $url_content .= @fgets($file, 4096);  
      }  
      fclose ($file);  
    }  
    ?>  
