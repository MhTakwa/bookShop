<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Book;
use AppBundle\Entity\Category;
use AppBundle\Entity\Rating;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	//////romance
        $romance=new Category();
    	$romance->setLibelle("Romance");
    	$romance->setDescription("romance");
    	$romance->setImage("https://cdn.pixabay.com/photo/2017/06/20/22/14/men-2425121__340.jpg");
    	$manager->persist($romance);
    	///horror
    	$horror=new Category();
    	$horror->setLibelle("Horror");
    	$horror->setDescription("horror");
    	$horror->setImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYQ5xrZuyHvBiX87eDBzhAA10B3g4yToNSW9ZQW3w_HSbeSNf6");
    	$manager->persist($horror);
    	///comedy
    	$comedy=new Category();
    	$comedy->setLibelle("Comedy");
    	$comedy->setDescription("comedy");
    	$comedy->setImage("https://pixabay.com/fr/clown-com%C3%A9die-visage-funny-joker-159118/");
    	$manager->persist($comedy);

    	///biography
    	$bio=new Category();
    	$bio->setLibelle("Biography");
    	$bio->setDescription("biography");
    	$bio->setImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvMemZkfOMvVoiFKTEuCcefB9QTwILBZQ60BWIVIE3DeO-tn8j");
    	$manager->persist($bio);


    	///Science fiction
    	$sc=new Category();
    	$sc->setLibelle("Science fiction");
    	$sc->setDescription("Science fiction");
    	$sc->setImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQj0AJyfukWzQJUYgnFK328W_zM_dV3nQYm7ZIWI7j6MQTeqihcGA");
    	$manager->persist($sc);
    	
    	///History
    	$history=new Category();
    	$history->setLibelle("History");
    	$history->setDescription("history");
    	$history->setImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH8HtZWoDdcbqZwmzM_-RjFbmEWs6Rmj2XFnVm-T2Pi19hSsO_Ew");
    	$manager->persist($history);
    	
    	
    	///Cook
    	$cook=new Category();
    	$cook->setLibelle("Cooking");
    	$cook->setDescription("cook");
    	$cook->setImage("https://pixabay.com/go/?t=image-list-shutterstock&id=673620520");
    	$manager->persist($cook);
    	


      /////////////////////////////////////////////////////////////////////////////

        ///love
        $love=new Book();
        $love->setTitle("Love story");
        $love->setShortDesc("Oliver Barrett IV, a wealthy jock from a stuffy WASP family on his way to a Harvard degree and a career in law . . . Jenny Cavilleri, a sharp-tongued, working-class beauty studying music at Radcliffe . . .");
        $love->setLongDesc("A book is both a usually portable physical object and the body of immaterial representations or intellectual object whose material signs—written or drawn lines or other two-dimensional media—the physical object contains or houses.

As a physical object, a book is a stack of usually rectangular pages (made of papyrus, parchment, vellum, or paper) oriented with one side (either left or right, depending on the direction in which one reads a script) tied, sewn, or otherwise fixed together and then bound to the flexible spine of a protective cover of heavier, relatively inflexible material so that, when the opened front cover has received a massy enough stack of sheets, the book can lie flat.[1] The technical term for this physical arrangement is codex (in the plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its immediate predecessor, the scroll.

As an intellectual object, a book is prototypically a composition of such great length that it takes a considerable investment of time to compose and a still considerable, though not so extensive, investment of time to read. This sense of book has a restricted and an unrestricted sense. In the restricted sense, a book is a self-sufficient section or part of a longer composition, a usage that reflects the fact that, in antiquity, long works had to be written on several scrolls, and each scroll had to be identified by the book it contained. So, for instance, each part of Aristotle's Physics is called a book, as of course the Bible encompasses many different books. In the unrestricted sense, a book is the compositional whole of which such sections, whether called books or chapters or parts, are parts. ");
        $love->setPrincipImg("https://images.gr-assets.com/books/1388812297l/73968.jpg");
        $love->setImg1("https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/hostedimages/1380334546i/693856._SX540_.jpg");
        $love->setImg2("https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/hostedimages/1380334546i/693857.jpg");
        $love->setAuthor(" Erich Segal");
        $love->setPages(254);
        $love->setEditor("takwa");
        $love->setPrice(25);
        $love->addCategory($romance);
        $manager->persist($love);
        

        ///A Bolt from the Blue and Other Essays  
        $ball=new Book();
        $ball->setTitle("A Bolt from the Blue and Other Essays  ");
        $ball->setShortDesc("Mary McCarthy was one of the leading literary figures of her time. In addition to the novels and memoirs for which she is best remembered, she was also a tireless literary and social critic. ");
        $ball->setLongDesc("A book is both a usually portable physical object and the body of immaterial representations or intellectual object whose material signs—written or drawn lines or other two-dimensional media—the physical object contains or houses.

As a physical object, a book is a stack of usually rectangular pages (made of papyrus, parchment, vellum, or paper) oriented with one side (either left or right, depending on the direction in which one reads a script) tied, sewn, or otherwise fixed together and then bound to the flexible spine of a protective cover of heavier, relatively inflexible material so that, when the opened front cover has received a massy enough stack of sheets, the book can lie flat.[1] The technical term for this physical arrangement is codex (in the plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its immediate predecessor, the scroll.

As an intellectual object, a book is prototypically a composition of such great length that it takes a considerable investment of time to compose and a still considerable, though not so extensive, investment of time to read. This sense of book has a restricted and an unrestricted sense. In the restricted sense, a book is a self-sufficient section or part of a longer composition, a usage that reflects the fact that, in antiquity, long works had to be written on several scrolls, and each scroll had to be identified by the book it contained. So, for instance, each part of Aristotle's Physics is called a book, as of course the Bible encompasses many different books. In the unrestricted sense, a book is the compositional whole of which such sections, whether called books or chapters or parts, are parts. ");
        $ball->setPrincipImg("https://images.gr-assets.com/books/1171906303l/125842.jpg");
        $ball->setImg1("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxGW0WZX1pXPZYW17HsdKYgnZA9ZmhZzQvGEgjm_bppqRZ6XHx");
        $ball->setImg2("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWfRCOZuqwsYkgZieSwqmachpJLHu0Fp_h-HDIEu18B5cIInlq");
        $ball->setAuthor("Donald Kagan");
        $ball->setPages(254);
        $ball->setEditor("takwa");
        $ball->setPrice(19);
        $ball->addCategory($bio);
        $ball->addCategory($romance);
        $manager->persist($ball);

        


    
       

        ///Twilight  
        $twilight=new Book();
        $twilight->setTitle("Twilight");
        $twilight->setShortDesc("When 17 year old Isabella Swan moves to Forks, Washington to live with her father she expects that her new life will be as dull as the town. ");
        $twilight->setLongDesc("A book is both a usually portable physical object and the body of immaterial representations or intellectual object whose material signs—written or drawn lines or other two-dimensional media—the physical object contains or houses.

As a physical object, a book is a stack of usually rectangular pages (made of papyrus, parchment, vellum, or paper) oriented with one side (either left or right, depending on the direction in which one reads a script) tied, sewn, or otherwise fixed together and then bound to the flexible spine of a protective cover of heavier, relatively inflexible material so that, when the opened front cover has received a massy enough stack of sheets, the book can lie flat.[1] The technical term for this physical arrangement is codex (in the plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its immediate predecessor, the scroll.

As an intellectual object, a book is prototypically a composition of such great length that it takes a considerable investment of time to compose and a still considerable, though not so extensive, investment of time to read. This sense of book has a restricted and an unrestricted sense. In the restricted sense, a book is a self-sufficient section or part of a longer composition, a usage that reflects the fact that, in antiquity, long works had to be written on several scrolls, and each scroll had to be identified by the book it contained. So, for instance, each part of Aristotle's Physics is called a book, as of course the Bible encompasses many different books. In the unrestricted sense, a book is the compositional whole of which such sections, whether called books or chapters or parts, are parts. ");
        $twilight->setPrincipImg("https://images-eu.ssl-images-amazon.com/images/I/41t3eFaENZL.jpg");
        $twilight->setImg1("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRsp23mmK8c2pI82J_MFYNAyONh2tQKWxq_V34kNje6aaEaMuTZg");
        $twilight->setImg2("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHcTaFJFpR2FoTpLG4lKfT45Qc1ZnLAJqn3YMwL37I1AZI1A1_");
        $twilight->setAuthor("stephanie mayer");
        $twilight->setPages(254);
        $twilight->setEditor("takwa");
        $twilight->setPrice(16);
        $twilight->addCategory($romance);
        $manager->persist($twilight);

        

              ///Sixtine   
        $sixtine =new Book();
        $sixtine ->setTitle("Sixtine");
        $sixtine ->setShortDesc("Sixtine a trois jours pour percer les mystères de l'affaire de la Pyramide. Mais elle va découvrir que la vérité est parfois pire que les mensonges... ");
        $sixtine->setLongDesc("A book is both a usually portable physical object and the body of immaterial representations or intellectual object whose material signs—written or drawn lines or other two-dimensional media—the physical object contains or houses.

As a physical object, a book is a stack of usually rectangular pages (made of papyrus, parchment, vellum, or paper) oriented with one side (either left or right, depending on the direction in which one reads a script) tied, sewn, or otherwise fixed together and then bound to the flexible spine of a protective cover of heavier, relatively inflexible material so that, when the opened front cover has received a massy enough stack of sheets, the book can lie flat.[1] The technical term for this physical arrangement is codex (in the plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its immediate predecessor, the scroll.

As an intellectual object, a book is prototypically a composition of such great length that it takes a considerable investment of time to compose and a still considerable, though not so extensive, investment of time to read. This sense of book has a restricted and an unrestricted sense. In the restricted sense, a book is a self-sufficient section or part of a longer composition, a usage that reflects the fact that, in antiquity, long works had to be written on several scrolls, and each scroll had to be identified by the book it contained. So, for instance, each part of Aristotle's Physics is called a book, as of course the Bible encompasses many different books. In the unrestricted sense, a book is the compositional whole of which such sections, whether called books or chapters or parts, are parts. ");
        $sixtine->setPrincipImg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScV_GgakQOi-3exA47jt21xOEoh0DjH_QsKFRs4KuU4uFrJSl9");
        $sixtine->setImg1("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2ilEew_gImyK9RlJSuSFMLqNJ2tpNx0YaqrdkaD2xa8nhqLmL");
        $sixtine->setImg2("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBN0EgtJMK5Uogb1_gTunyJbU0Dp3cmbwec1PsB1tUTDGNCRXbaA");
        $sixtine->setAuthor("Catoline valmar");
        $sixtine->setPages(254);
        $sixtine ->setEditor("takwa");
        $sixtine->setPrice(30);
        $sixtine->addCategory($romance);
        $sixtine->addCategory($sc);
        $manager->persist($sixtine);

        
        ///Capture-Moi   
        $capture =new Book();
        $capture->setTitle("Capture-Moi");
        $capture ->setShortDesc("Yulia Tzakova a l’habitude des hommes dangereux. Elle a grandi avec eux. Et elle a survécu. Mais quand elle rencontre Lucas Kent, elle comprend que cet ancien soldat risque d’être le plus dangereux de tous.");
        $capture->setLongDesc("A book is both a usually portable physical object and the body of immaterial representations or intellectual object whose material signs—written or drawn lines or other two-dimensional media—the physical object contains or houses.

As a physical object, a book is a stack of usually rectangular pages (made of papyrus, parchment, vellum, or paper) oriented with one side (either left or right, depending on the direction in which one reads a script) tied, sewn, or otherwise fixed together and then bound to the flexible spine of a protective cover of heavier, relatively inflexible material so that, when the opened front cover has received a massy enough stack of sheets, the book can lie flat.[1] The technical term for this physical arrangement is codex (in the plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its immediate predecessor, the scroll.

As an intellectual object, a book is prototypically a composition of such great length that it takes a considerable investment of time to compose and a still considerable, though not so extensive, investment of time to read. This sense of book has a restricted and an unrestricted sense. In the restricted sense, a book is a self-sufficient section or part of a longer composition, a usage that reflects the fact that, in antiquity, long works had to be written on several scrolls, and each scroll had to be identified by the book it contained. So, for instance, each part of Aristotle's Physics is called a book, as of course the Bible encompasses many different books. In the unrestricted sense, a book is the compositional whole of which such sections, whether called books or chapters or parts, are parts. ");
        $capture->setPrincipImg("https://images-eu.ssl-images-amazon.com/images/I/51pAa9zr%2BAL._SY346_.jpg");
        $capture->setImg1("https://images-eu.ssl-images-amazon.com/images/I/51pAa9zr%2BAL._SY346_.jpg");
        $capture->setImg2("https://images-eu.ssl-images-amazon.com/images/I/51pAa9zr%2BAL._SY346_.jpg");
        $capture->setAuthor("Anna Zaires");
        $capture->setPages(254);
        $capture->setEditor("takwa");
        $capture->setPrice(30);
        $capture->addCategory($romance);
        $capture->addCategory($history);
        $manager->persist($capture);

        ///Baking class
        $baking =new Book();
        $baking->setTitle("Baking class");
        $baking ->setShortDesc("Yulia Tzakova a l’habitude des hommes dangereux. Elle a grandi avec eux. Et elle a survécu. Mais quand elle rencontre Lucas Kent, elle comprend que cet ancien soldat risque d’être le plus dangereux de tous.");
        $baking->setLongDesc("A book is both a usually portable physical object and the body of immaterial representations or intellectual object whose material signs—written or drawn lines or other two-dimensional media—the physical object contains or houses.

As a physical object, a book is a stack of usually rectangular pages (made of papyrus, parchment, vellum, or paper) oriented with one side (either left or right, depending on the direction in which one reads a script) tied, sewn, or otherwise fixed together and then bound to the flexible spine of a protective cover of heavier, relatively inflexible material so that, when the opened front cover has received a massy enough stack of sheets, the book can lie flat.[1] The technical term for this physical arrangement is codex (in the plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its immediate predecessor, the scroll.

As an intellectual object, a book is prototypically a composition of such great length that it takes a considerable investment of time to compose and a still considerable, though not so extensive, investment of time to read. This sense of book has a restricted and an unrestricted sense. In the restricted sense, a book is a self-sufficient section or part of a longer composition, a usage that reflects the fact that, in antiquity, long works had to be written on several scrolls, and each scroll had to be identified by the book it contained. So, for instance, each part of Aristotle's Physics is called a book, as of course the Bible encompasses many different books. In the unrestricted sense, a book is the compositional whole of which such sections, whether called books or chapters or parts, are parts. ");
        $baking->setPrincipImg("https://images-na.ssl-images-amazon.com/images/I/61uv2wp2usL._AC_SR201,266_.jpg");
        $baking->setImg1("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTijce6LxFW6xtZ8Xa47IR3lXGF97tPIpDMrxFbepqcRXoQC--aXA");
        $baking->setImg2("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTay-3aKToSm2wYyCJwzp559aRMHI8w-KMkIxg0vJq6pkQDnex");
        $baking->setAuthor("Deana F.cook");
        $baking->setPages(254);
        $baking->setEditor("takwa");
        $baking->setPrice(30);
        $baking->addCategory($cook);
        $manager->persist($baking);


         ///Deepa's secret
        $deepa =new Book();
        $deepa->setTitle("Deepa's secret");
        $deepa ->setShortDesc("Yulia Tzakova a l’habitude des hommes dangereux. Elle a grandi avec eux. Et elle a survécu. Mais quand elle rencontre Lucas Kent, elle comprend que cet ancien soldat risque d’être le plus dangereux de tous.");
        $deepa->setLongDesc("A book is both a usually portable physical object and the body of immaterial representations or intellectual object whose material signs—written or drawn lines or other two-dimensional media—the physical object contains or houses.

As a physical object, a book is a stack of usually rectangular pages (made of papyrus, parchment, vellum, or paper) oriented with one side (either left or right, depending on the direction in which one reads a script) tied, sewn, or otherwise fixed together and then bound to the flexible spine of a protective cover of heavier, relatively inflexible material so that, when the opened front cover has received a massy enough stack of sheets, the book can lie flat.[1] The technical term for this physical arrangement is codex (in the plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its immediate predecessor, the scroll.

As an intellectual object, a book is prototypically a composition of such great length that it takes a considerable investment of time to compose and a still considerable, though not so extensive, investment of time to read. This sense of book has a restricted and an unrestricted sense. In the restricted sense, a book is a self-sufficient section or part of a longer composition, a usage that reflects the fact that, in antiquity, long works had to be written on several scrolls, and each scroll had to be identified by the book it contained. So, for instance, each part of Aristotle's Physics is called a book, as of course the Bible encompasses many different books. In the unrestricted sense, a book is the compositional whole of which such sections, whether called books or chapters or parts, are parts. ");
        $deepa->setPrincipImg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBuKe1n853IK60IPRGMu9s2JyRqNbQZjLGiJcV0dAZLEitlgtfbw");
        $deepa->setImg1("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2PDfjlzEZjDQGfBxRCOhnBlv-teR0OlNhAk7T9HccNzZC-xJTLQ");
        $deepa->setImg2("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSNDTYcV4mWOFj4wBQ0sDPlAIneV0ZH7UXoX1qv1dg_dpGKyz5dw");
        $deepa->setAuthor("Deepa");
        $deepa->setPages(254);
        $deepa->setEditor("takwa");
        $deepa->setPrice(30);
        $deepa->addCategory($cook);
        $manager->persist($deepa);


        
         ///The Ugly Truth (Diary of a Wimpy Kid, Book 5)
        $diary =new Book();
        $diary->setTitle("The Ugly Truth (Diary of a Wimpy Kid, Book 5)");
        $diary->setShortDesc("Yulia Tzakova a l’habitude des hommes dangereux. Elle a grandi avec eux. Et elle a survécu. Mais quand elle rencontre Lucas Kent, elle comprend que cet ancien soldat risque d’être le plus dangereux de tous.");
        $diary->setLongDesc("A book is both a usually portable physical object and the body of immaterial representations or intellectual object whose material signs—written or drawn lines or other two-dimensional media—the physical object contains or houses.

As a physical object, a book is a stack of usually rectangular pages (made of papyrus, parchment, vellum, or paper) oriented with one side (either left or right, depending on the direction in which one reads a script) tied, sewn, or otherwise fixed together and then bound to the flexible spine of a protective cover of heavier, relatively inflexible material so that, when the opened front cover has received a massy enough stack of sheets, the book can lie flat.[1] The technical term for this physical arrangement is codex (in the plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its immediate predecessor, the scroll.

As an intellectual object, a book is prototypically a composition of such great length that it takes a considerable investment of time to compose and a still considerable, though not so extensive, investment of time to read. This sense of book has a restricted and an unrestricted sense. In the restricted sense, a book is a self-sufficient section or part of a longer composition, a usage that reflects the fact that, in antiquity, long works had to be written on several scrolls, and each scroll had to be identified by the book it contained. So, for instance, each part of Aristotle's Physics is called a book, as of course the Bible encompasses many different books. In the unrestricted sense, a book is the compositional whole of which such sections, whether called books or chapters or parts, are parts. ");
        $diary->setPrincipImg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJL6vFLf5Uw67O6TRmMwHmVVi7KZ1BWTNCq5ItZfikIqdJ55yzBQ");
        $diary->setImg1("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJL6vFLf5Uw67O6TRmMwHmVVi7KZ1BWTNCq5ItZfikIqdJ55yzBQ");
        $diary->setImg2("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJL6vFLf5Uw67O6TRmMwHmVVi7KZ1BWTNCq5ItZfikIqdJ55yzBQ");
        $diary->setAuthor("Jeff Kinney");
        $diary->setPages(254);
        $diary->setEditor("takwa");
        $diary->setPrice(10);
        $diary->addCategory($comedy);

        $diary->addCategory($sc);

        $diary->addCategory($history);
        $manager->persist($diary);

         ///Harry Potter And The Goblet Of Fire
        $harry=new Book();
        $harry->setTitle("Harry Potter And The Goblet Of Fire");
        $harry->setShortDesc("Yulia Tzakova a l’habitude des hommes dangereux. Elle a grandi avec eux. Et elle a survécu. Mais quand elle rencontre Lucas Kent, elle comprend que cet ancien soldat risque d’être le plus dangereux de tous.");
        $harry->setLongDesc("A book is both a usually portable physical object and the body of immaterial representations or intellectual object whose material signs—written or drawn lines or other two-dimensional media—the physical object contains or houses.

As a physical object, a book is a stack of usually rectangular pages (made of papyrus, parchment, vellum, or paper) oriented with one side (either left or right, depending on the direction in which one reads a script) tied, sewn, or otherwise fixed together and then bound to the flexible spine of a protective cover of heavier, relatively inflexible material so that, when the opened front cover has received a massy enough stack of sheets, the book can lie flat.[1] The technical term for this physical arrangement is codex (in the plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its immediate predecessor, the scroll.

As an intellectual object, a book is prototypically a composition of such great length that it takes a considerable investment of time to compose and a still considerable, though not so extensive, investment of time to read. This sense of book has a restricted and an unrestricted sense. In the restricted sense, a book is a self-sufficient section or part of a longer composition, a usage that reflects the fact that, in antiquity, long works had to be written on several scrolls, and each scroll had to be identified by the book it contained. So, for instance, each part of Aristotle's Physics is called a book, as of course the Bible encompasses many different books. In the unrestricted sense, a book is the compositional whole of which such sections, whether called books or chapters or parts, are parts. ");
        $harry->setPrincipImg("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTIaTqbONH4_qCvxURIdLUv_gf302ik56GHj9f5ePlKt9ZxzOLyQ");
        $harry->setImg1("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTIaTqbONH4_qCvxURIdLUv_gf302ik56GHj9f5ePlKt9ZxzOLyQ");
        $harry->setImg2("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTIaTqbONH4_qCvxURIdLUv_gf302ik56GHj9f5ePlKt9ZxzOLyQ");
        $harry->setAuthor("Jeff Kinney");
        $harry->setPages(254);
        $harry->setEditor("takwa");
        $harry->setPrice(10);
        $harry->addCategory($comedy);
        $harry->addCategory($history);
        $harry->addCategory($sc);
        $manager->persist($harry);
        
             ///Evicted: Poverty and Profit in the American CityF
        $poverty=new Book();
        $poverty->setTitle("Harry Potter And The Goblet Of Fire");
        $poverty->setShortDesc("Yulia Tzakova a l’habitude des hommes dangereux. Elle a grandi avec eux. Et elle a survécu. Mais quand elle rencontre Lucas Kent, elle comprend que cet ancien soldat risque d’être le plus dangereux de tous.");
        $poverty->setLongDesc("A book is both a usually portable physical object and the body of immaterial representations or intellectual object whose material signs—written or drawn lines or other two-dimensional media—the physical object contains or houses.

As a physical object, a book is a stack of usually rectangular pages (made of papyrus, parchment, vellum, or paper) oriented with one side (either left or right, depending on the direction in which one reads a script) tied, sewn, or otherwise fixed together and then bound to the flexible spine of a protective cover of heavier, relatively inflexible material so that, when the opened front cover has received a massy enough stack of sheets, the book can lie flat.[1] The technical term for this physical arrangement is codex (in the plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its immediate predecessor, the scroll.

As an intellectual object, a book is prototypically a composition of such great length that it takes a considerable investment of time to compose and a still considerable, though not so extensive, investment of time to read. This sense of book has a restricted and an unrestricted sense. In the restricted sense, a book is a self-sufficient section or part of a longer composition, a usage that reflects the fact that, in antiquity, long works had to be written on several scrolls, and each scroll had to be identified by the book it contained. So, for instance, each part of Aristotle's Physics is called a book, as of course the Bible encompasses many different books. In the unrestricted sense, a book is the compositional whole of which such sections, whether called books or chapters or parts, are parts. ");
        $poverty->setPrincipImg("https://images-na.ssl-images-amazon.com/images/I/81Eu9KUYmGL._AC_SR201,266_.jpg");
        $poverty->setImg1("");
        $poverty->setImg2("");
        $poverty->setAuthor("Jeff Kinney");
        $poverty->setPages(254);
        $poverty->setEditor("takwa");
        $poverty->setPrice(10);
        $poverty->addCategory($comedy);
        $poverty->addCategory($history);
        $poverty->addCategory($sc);
        $manager->persist($harry);
        

        ///Drakula
        $drakula=new Book();
        $drakula->setTitle("Dracula  ");
        $drakula->setShortDesc("Mary McCarthy was one of the leading literary figures of her time. In addition to the novels and memoirs for which she is best remembered, she was also a tireless literary and social critic. ");
        $drakula->setLongDesc("A book is both a usually portable physical object and the body of immaterial representations or intellectual object whose material signs—written or drawn lines or other two-dimensional media—the physical object contains or houses.

As a physical object, a book is a stack of usually rectangular pages (made of papyrus, parchment, vellum, or paper) oriented with one side (either left or right, depending on the direction in which one reads a script) tied, sewn, or otherwise fixed together and then bound to the flexible spine of a protective cover of heavier, relatively inflexible material so that, when the opened front cover has received a massy enough stack of sheets, the book can lie flat.[1] The technical term for this physical arrangement is codex (in the plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its immediate predecessor, the scroll.

As an intellectual object, a book is prototypically a composition of such great length that it takes a considerable investment of time to compose and a still considerable, though not so extensive, investment of time to read. This sense of book has a restricted and an unrestricted sense. In the restricted sense, a book is a self-sufficient section or part of a longer composition, a usage that reflects the fact that, in antiquity, long works had to be written on several scrolls, and each scroll had to be identified by the book it contained. So, for instance, each part of Aristotle's Physics is called a book, as of course the Bible encompasses many different books. In the unrestricted sense, a book is the compositional whole of which such sections, whether called books or chapters or parts, are parts. ");
        $drakula->setPrincipImg("https://images-na.ssl-images-amazon.com/images/I/31-Y9OuRCaL._AC_UL320_SR198,320_.jpg");
        $drakula->setImg1("https://images-na.ssl-images-amazon.com/images/I/31-Y9OuRCaL._AC_UL320_SR198,320_.jpg");
        $drakula->setImg2("https://images-na.ssl-images-amazon.com/images/I/31-Y9OuRCaL._AC_UL320_SR198,320_.jpg");
        $drakula->setAuthor("Donald Kagan");
        $drakula->setPages(254);
        $drakula->setEditor("takwa");
        $drakula->setPrice(16);
        $drakula->addCategory($horror);
        $drakula->addCategory($romance);
        $manager->persist($drakula);

        
        ///Oasis
        $oasis=new Book();
        $oasis->setTitle("Oasis");
        $oasis->setShortDesc("Mary McCarthy was one of the leading literary figures of her time. In addition to the novels and memoirs for which she is best remembered, she was also a tireless literary and social critic. ");
        $oasis->setLongDesc("A book is both a usually portable physical object and the body of immaterial representations or intellectual object whose material signs—written or drawn lines or other two-dimensional media—the physical object contains or houses.

As a physical object, a book is a stack of usually rectangular pages (made of papyrus, parchment, vellum, or paper) oriented with one side (either left or right, depending on the direction in which one reads a script) tied, sewn, or otherwise fixed together and then bound to the flexible spine of a protective cover of heavier, relatively inflexible material so that, when the opened front cover has received a massy enough stack of sheets, the book can lie flat.[1] The technical term for this physical arrangement is codex (in the plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its immediate predecessor, the scroll.

As an intellectual object, a book is prototypically a composition of such great length that it takes a considerable investment of time to compose and a still considerable, though not so extensive, investment of time to read. This sense of book has a restricted and an unrestricted sense. In the restricted sense, a book is a self-sufficient section or part of a longer composition, a usage that reflects the fact that, in antiquity, long works had to be written on several scrolls, and each scroll had to be identified by the book it contained. So, for instance, each part of Aristotle's Physics is called a book, as of course the Bible encompasses many different books. In the unrestricted sense, a book is the compositional whole of which such sections, whether called books or chapters or parts, are parts. ");
        $oasis->setPrincipImg("https://images-eu.ssl-images-amazon.com/images/I/51h+DIqqmDL._AC_SR320,320_.jpg");
        $oasis->setImg1("https://images-eu.ssl-images-amazon.com/images/I/51h+DIqqmDL._AC_SR320,320_.jpg");
        $oasis->setImg2("https://images-eu.ssl-images-amazon.com/images/I/51h+DIqqmDL._AC_SR320,320_.jpg");
        $oasis->setAuthor("Donald Kagan");
        $oasis->setPages(254);
        $oasis->setEditor("takwa");
        $oasis->setPrice(19);
        $oasis->addCategory($horror);
        $oasis->addCategory($romance);
        $oasis->addCategory($sc);
        $manager->persist($oasis);

        ////////////////////////////////////////////////////////////
        ////love
  $r1=new Rating();
        $r1->setStars(5);
        $r1->setReview('I really loved the book and enjoyed reading such beautiful story ');
        $r1->setBook($love);
         $manager->persist($r1);
  $r2=new Rating();
        $r2->setStars(5);
        $r2->setReview('a beautiful story and amazing plot ');
        $r2->setBook($love);
        $manager->persist($r2);
  $r3=new Rating();
        $r3->setStars(3);
        $r3->setReview(' beautiful but ordinary story ');
        $r3->setBook($love);
        $manager->persist($r3);
 $r4=new Rating();
        $r4->setStars(2);
        $r4->setReview('so ordinary ');
        $r4->setBook($love);
        $manager->persist($r4);
$r5=new Rating();
        $r5->setStars(1);
        $r5->setReview('hate love stories');
        $r5->setBook($love);
        $manager->persist($r5);
$r6=new Rating();
        $r6->setStars(5);
        $r6->setReview('I really loved the book and enjoyed reading such beautiful story ');
        $r6->setBook($oasis);
        $manager->persist($r6);
$r7=new Rating();
        $r7->setStars(2);
        $r7->setReview(' beautiful story ');
        $r7->setBook($oasis);
         $manager->persist($r7);
 $r8=new Rating();
        $r8->setStars(3);
        $r8->setReview(' beautiful but ordinary story ');
        $r8->setBook($oasis);
        $manager->persist($r8);
 $r9=new Rating();
        $r9->setStars(2);
        $r9->setReview('so ordinary ');
        $r9->setBook($ball);
        $manager->persist($r9);
$r10=new Rating();
        $r10->setStars(1);
        $r10->setReview('hate the writer');
        $r10->setBook($ball);
        $manager->persist($r10);
$r11=new Rating();
        $r11->setStars(5);
        $r11->setReview('I really loved the book and enjoyed reading such beautiful story ');
        $r11->setBook($ball);
        $manager->persist($r11);
 $r12=new Rating();
        $r12->setStars(3);
        $r12->setReview(' beautiful but ordinary story ');
        $r12->setBook($drakula);
        $manager->persist($r12);
 $r27=new Rating();
        $r27->setStars(5);
        $r27->setReview('so amazing ');
        $r27->setBook($drakula);
        $manager->persist($r27);
$r13=new Rating();
        $r13->setStars(5);
        $r13->setReview('wow can t describe this book but its really a master piece');
        $r13->setBook($drakula);
        $manager->persist($r13);
$r14=new Rating();
        $r14->setStars(5);
        $r14->setReview('beatiful book ');
        $r14->setBook($drakula);
        $manager->persist($r14);
 $r15=new Rating();
        $r15->setStars(3);
        $r15->setReview(' beautiful but ordinary story ');
        $r15->setBook($sixtine);
        $manager->persist($r15);
 $r16=new Rating();
        $r16->setStars(5);
        $r16->setReview('so extraordinary ');
        $r16->setBook($sixtine);
        $manager->persist($r16);
$r17=new Rating();
        $r17->setStars(1);
        $r17->setReview('hate kids stories');
        $r17->setBook($harry);
        $manager->persist($r17);
$r18=new Rating();
        $r18->setStars(5);
        $r18->setReview('I really loved the book and enjoyed reading such beautiful story ');
        $r18->setBook($harry);
        $manager->persist($r18);
 $r19=new Rating();
        $r19->setStars(3);
        $r19->setReview(' beautiful  story ');
        $r19->setBook($harry);
        $manager->persist($r19);
 $r20=new Rating();
        $r20->setStars(2);
        $r20->setReview('so ordinary ');
        $r20->setBook($twilight);
        $manager->persist($r20);
$r21=new Rating();
        $r21->setStars(1);
        $r21->setReview('hate love stories');
        $r21->setBook($twilight);
        $manager->persist($r21);
$r22=new Rating();
        $r22->setStars(5);
        $r22->setReview('I really loved the book and enjoyed reading such beautiful story ');
        $r22->setBook($twilight);
        $manager->persist($r22);
 $r23=new Rating();
        $r23->setStars(3);
        $r23->setReview(' beautiful but ordinary story ');
        $r23->setBook($twilight);
        $manager->persist($r23);
 $r24=new Rating();
        $r24->setStars(5);
        $r24->setReview('so extraordinary ');
        $r24->setBook($twilight);
        $manager->persist($r24);
$r25=new Rating();
        $r25->setStars(1);
        $r25->setReview('hate love stories');
        $r25->setBook($capture);
        $manager->persist($r25);
$r26=new Rating();
        $r26->setStars(5);
        $r26->setReview('I really loved the book and enjoyed reading such beautiful story ');
        $r26->setBook($capture);
        $manager->persist($r26);

        










    	$manager->flush();
    	
    	


    }
}
?>