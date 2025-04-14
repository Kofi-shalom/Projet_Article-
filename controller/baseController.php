<?php
class Article{
    static function userArticle(){


        $articles = [
            "cover"=>"./asset/cover.jpg",
            "title"=>"Description de l'article",
            "content"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Velit, minima!Sapiente, labore.
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, hic?Lorem ipsum dolor sit,
                          amet consectetur adipisicing elit. Impedit, veniam!
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, aperiam.
                          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis, 
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, ad.
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, ipsam. Optio cumque quo laudantium ducimus fugit
                           ipsam libero eum aliquid doloribus sed? Unde doloremque quam, modi ea id temporibus quod."
            
        ];
    
        return $articles;
    
    }
}

$articles = Article::userArticle();


   /* $articles = Article::userArticle();

        //  print_r($articles)  # test à regarder dans le tableau les donnés

 
        foreach ($articles as $key => $value) {
           $key === "cover" ? print "<img src=".$value.">" : false;
        }

        print "<figcaption>
                <h2>"
                .$articles["title"]."</h2>
                <p>".$articles["content"]."</p>
                <figcaption>";

    */            
               

        
?>

