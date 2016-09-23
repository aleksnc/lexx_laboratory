<!DOCTYPE html>
<html lang="en">
<style>
    *{
        box-sizing: border-box;
    }

    .menu{
        display: inline-block;
        width: 150px;
        padding: 10px;
        margin: 0 5px;
        text-decoration: none;
        border: 2px solid lightblue;
        text-align: center;
    }

    .menu:hover{
        background-color: lightblue;
    }

    .menu__wrapper{
        max-width: 1000px;
        margin: 0 auto;
    }


</style>

    <?php if(isset($MainPage[0])) :?>
        <?php
//        $linkHeight=count($link);
//        $linkHeight=$linkHeight-1;
//        $link[$linkHeight];
//        if($link[$linkHeight]==null||$link[$linkHeight]=='null'){
//            $linkName=$link[$linkHeight-1];
//        } else{
//            $linkName=$link[$linkHeight];
//        }

        $linkName=$link;
        ?>


        <?php foreach ($MainPage[0] as $item): ?>
            <?php
                if($item['link']==$linkName) {
                    $title = $item['title'];
                    $content = $item['content'];
                }
            ?>
        <?php endforeach; ?>
                <head>
                    <meta charset="UTF-8">
                    <title>ЛЭКС СПБ : <?php echo $title; ?></title>
                </head>
                <body>
                
                <div class="menu__wrapper">
                    <?php foreach ($MainPage[0] as $item): ?>
                        <?php if($item['header_menu']=='1') :?>
                            <a class="menu" href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                        <div><?php echo $content; ?></div>
                </body>
    <?php endif; ?>
</html>