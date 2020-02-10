<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
         
    <?php
        //Defino tag a ser pesquisada
        $tag = 'the-king-of-fighters-98';

        //Url informando a tag
        $url = 'https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key=ec8563e863a7fc30f6f1798812176636&tags='.$tag.'&format=json&nojsoncallback=1';
        
        //Converte o valor da url pra json
        $data = json_decode(file_get_contents($url));
            
        //atribui o valor da variável photos, pra resgatar os dados das imagens.
            $photos = $data->photos->photo;
            $i = 0;
            foreach( $photos as $photo):

            $i++;
                if($i <= 6):
                    $url = 'http://farm'.$photo->farm.'.staticflickr.com/'.$photo->server.'/'.$photo->id.'_'.$photo->secret.'.jpg';

    ?>
            <div class="col-6 col-lg-3 p-4">
                <img class="img-fluid" src="<?=$url?>">
            </div>  
    <?php                
        endif;
        endforeach;
    ?>
       
    </div>
</div>


</body>

<footer>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</footer>