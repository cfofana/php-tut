<?php 

    /////     MAIN NAVIGATION MENU     /////
    $nav_items = [
        [ 
            slug => "index.php",
            title => "Home"
            ],
        [
            slug => "contact.php",
            title => "Contact"
            ],
        [
            slug => "menu.php",
            title => "Menu"
            ],
        [
            slug => "team.php",
            title => "Team"
            ]
        ];

        
        /////     EMPLOYEES     /////
        $employees = [
            [
                name => "Frankie III",
                position => "Owner",
                bio => "Frankie is the great-grandson of the original 
                Franklin. He is the owner of Franklin's Fine Dining. He cooks a mean fritatta.",
                img => "frankie"
            ],
            [
                name => "Francis",
                position => "General Manager",
                bio => "Francis knows her stuff. The big sister of Frankie 
                himself, she runs the show. Don't miss her margharita Mondays.",
                img => "francis"
            ],
            [
                name => "Carlos",
                position => "Head Chef",
                bio => "Carlos is the epitome of the phrase &ldquo;Don't judge a 
                book by it's cover.&rdquo; You simply cannot find a better chef.",
                img => "carlos"
            ]
        ];

        /////     MENU ITEMS     /////
        $food_menu_items = [
            "club_sandwich" => [
                title => "Club Sandwich",
                price => 11,
                blurb => "Bacon ipsum dolor amet corned beef hamburger shoulder, flank ball tip brisket boudin ground round meatloaf fatback. Short ribs tri-tip pork ground round pancetta. Tongue bresaola burgdoggen, t-bone",
                drink => "Club Soda"
            ],
            "dill_salmon" => [
                title => "Lemon &amp; Dill Salmon",
                price => 18,
                blurb => "Alcatra chislic beef ribs pancetta. Ham hock beef meatball capicola brisket pork shankle pastrami. Ke",
                drink => "Fancy wine"
            ],
            "super_salad" => [
                title => "The Super Salad<sup>&reg;</sup>",
                price => 34,
                blurb => "Indian spiced Sicilian pistachio pesto scotch bonnet pepper sweet potato black bean burrito chocolate peanut butter dip ",
                drink => "Jug O' Water"
            ],
            "mexican_barbacoa" => [
                title => "Mexican Barbacoa",
                price => 23,
                blurb => "Tri-tip capicola ball tip cow corned beef salami. Bacon pancetta pork belly, pork drumstick ball tip jowl frankfurter short loin",
                drink => "Beer with a lime"
            ]
        ];




        $animals = [
            [
                slug => "animals.php",
                title => "Animals"
            ],
            [
                slug => "giraffe.php",
                title => "Giraffe"
            ],
            [
                slug => "rabbit.php",
                title => "Rabbit"
            ],
            [
                slug => "sheep.php",
                title => "Sheep"
            ]
        ];

        $us_states = [
            [
                name => "North Carolina",
                abbr => "NC"
            ],
            [
                name => "Massachusetts",
                abbr => "MA"
            ],
            [
                name => "Washington",
                abbr => "WA"
            ],
            [
                name => "Arkansas",
                abbr => "AR"
            ]
        ];
        $countries = [
            [
                name => "Gambia",
                continent => "Africa"
            ],
            [
                name => "Bulgaria",
                continent => "Europe"
            ],
            [
                name => "United States",
                continent => "USA"
            ]
        ];
?>