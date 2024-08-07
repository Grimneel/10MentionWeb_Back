const movies = [
    {
        title: 'Avatar',
        director: 'James Cameron',
        image:'http://fr.web.img6.acsta.net/r_1920_1080/medias/nmedia/18/78/95/70/19485155.jpg',
        actors: ['Sam Worthington', 'Zoe Saldana', 'Sigourney Weaver', 'Stephen Lang'],
        genre: ['Science fiction'],
        duration: '2h42min',
        date: '16 décembre 2009',
		resume:`Malgré sa paralysie, Jake Sully, un ancien marine immobilisé dans un fauteuil roulant, est resté un combattant au plus profond de son être. Il est recruté pour se rendre à des années-lumière de la Terre, sur Pandora, où de puissants groupes industriels exploitent un minerai rarissime destiné à résoudre la crise énergétique sur Terre. Parce que l'atmosphère de Pandora est toxique pour les humains, ceux-ci ont créé le Programme Avatar, qui permet à des " pilotes " humains de lier leur esprit à un avatar, un corps biologique commandé à distance, capable de survivre dans cette atmosphère létale. Ces avatars sont des hybrides créés génétiquement en croisant l'ADN humain avec celui des Na'vi, les autochtones de Pandora.`,
		traileryt:'60tCdBxn3E0',
    },
    
    {
        title: 'Interstellar',
        director: 'Christopher Nolan',
        image:'http://fr.web.img6.acsta.net/r_1920_1080/pictures/14/09/24/12/08/158828.jpg',
        actors: ['Matthew McConaughey', 'Anne Hathaway', 'Michael Caine'],
        genre: ['Drame'],
        duration: '2h49min',
        date: '5 novembre 2014',
		resume:`Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire. `,
		traileryt:'zSWdZVtXT7E',
    },

    {
        title: 'Matrix',
        director: `Wachowski sisters`,
        image:'http://fr.web.img6.acsta.net/r_1920_1080/medias/04/34/49/043449_af.jpg',
        actors: ['Keanu Reeves', 'Laurence Fishburne', 'Carrie-Anne Moss'],
        genre: ['Action'],
        duration: '2h15min',
        date: '24 mai 1999',
		resume:`Programmeur anonyme dans un service administratif le jour, Thomas Anderson devient Neo la nuit venue. Sous ce pseudonyme, il est l'un des pirates les plus recherchés du cyber-espace. A cheval entre deux mondes, Neo est assailli par d'étranges songes et des messages cryptés provenant d'un certain Morpheus. Celui-ci l'exhorte à aller au-delà des apparences et à trouver la réponse à la question qui hante constamment ses pensées : qu'est-ce que la Matrice ? Nul ne le sait, et aucun homme n'est encore parvenu à en percer les defenses. Mais Morpheus est persuadé que Neo est l'Elu, le libérateur mythique de l'humanité annoncé selon la prophétie. Ensemble, ils se lancent dans une lutte sans retour contre la Matrice et ses terribles agents...`,
		traileryt:'m8e-FF8MsqU',
    },

    {
        title: 'Wall-E',
        director: 'Andrew Stanton',
        image:'http://fr.web.img3.acsta.net/r_1920_1080/medias/nmedia/18/63/93/01/18948378.jpg',
        actors: ['Ben Burtt', 'Elissa Knight', 'Jeff Garlin'],
        genre: ['Animation'],
        duration: '1h37min',
        date: '30 juillet 2008',
		resume:`Faites la connaissance de WALL•E (prononcez "Walli") : WALL•E est le dernier être sur Terre et s'avère être un... petit robot ! 700 ans plus tôt, l'humanité a déserté notre planète laissant à cette incroyable petite machine le soin de nettoyer la Terre. Mais au bout de ces longues années, WALL•E a développé un petit défaut technique : une forte personnalité. Extrêmement curieux, très indiscret, il est surtout un peu trop seul...
        Cependant, sa vie s'apprête à être bouleversée avec l'arrivée d'une petite "robote", bien carénée et prénommée EVE. Tombant instantanément et éperdument amoureux d'elle, WALL•E va tout mettre en oeuvre pour la séduire. Et lorsqu'EVE est rappelée dans l'espace pour y terminer sa mission, WALL•E n'hésite pas un seul instant : il se lance à sa poursuite... Hors de question pour lui de laisser passer le seul amour de sa vie... Pour être à ses côtés, il est prêt à aller au bout de l'univers et vivre la plus fantastique des aventures !`,
		traileryt:'qGBZWbg_26A',
    },

    {
        title: `E.T.`,
        director: 'Steven Spielberg',
        image:'http://fr.web.img4.acsta.net/r_1920_1080/medias/nmedia/00/02/36/52/affet.jpg',
        actors: ['Henry Thomas', 'Drew Barrymore', 'Dee Wallace'],
        genre: ['Famille'],
        duration: '2h00min',
        date: '3 avril 2002',
		resume:`Une soucoupe volante atterrit en pleine nuit près de Los Angeles. Quelques extraterrestres, envoyés sur Terre en mission d'exploration botanique, sortent de l'engin, mais un des leurs s'aventure au-delà de la clairière où se trouve la navette. Celui-ci se dirige alors vers la ville. C'est sa première découverte de la civilisation humaine. Bientôt traquée par des militaires et abandonnée par les siens, cette petite créature apeurée se nommant E.T. se réfugie dans une résidence de banlieue.`,
		traileryt:'qYAETtIIClk',
    },

    {
        title: `Avengers`,
        director: 'Joss Whedon',
        image:'http://fr.web.img3.acsta.net/r_1920_1080/medias/nmedia/18/85/31/58/20042068.jpg',
        actors: ['Robert Downey Jr.', 'Chris Evans', 'Mark Ruffalo'],
        genre: ['Action', 'Aventure', 'Science Fiction'],
        duration: '2h23min',
        date: '20 avril 2012',
		resume:`Lorsque Nick Fury, le directeur du S.H.I.E.L.D., l'organisation qui préserve la paix au plan mondial, cherche à former une équipe de choc pour empêcher la destruction du monde, Iron Man, Hulk, Thor, Captain America, Hawkeye et Black Widow répondent présents.
        Les Avengers ont beau constituer la plus fantastique des équipes, il leur reste encore à apprendre à travailler ensemble, et non les uns contre les autres, d'autant que le redoutable Loki a réussi à accéder au Cube Cosmique et à son pouvoir illimité...`,
		traileryt:'6ZfuNTqbHE8',
    }
]