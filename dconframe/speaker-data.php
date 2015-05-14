<?php

class Speaker {
    
    public function __construct($first_name, $last_name, $title, $mini_bio, $blurb, $website, $twitter_name, $is_workshop, $audio, $huffduffer) {
        
        $this->id = strtolower($first_name) . "-" . strtolower($last_name);
        
        // Personal details
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->full_name = $first_name . " " . $last_name;
        
        // Presentation details
        $this->title = $title;
        $this->mini_bio = $mini_bio;
        $this->blurb = $blurb;
        $this->is_workshop = $is_workshop;
		$this->audio = $audio;
		$this->huffduffer = $huffduffer;
        
        // Social media stuff
        $this->website = $website;
        $this->twitter_name = $twitter_name;
        
        // Internals
        $this->full_url = "/speakers/" . $this->id;
    }
}



class SpeakerData {
    
    private static $speaker_data;
    
    function build_data() {
        self::$speaker_data = array(
            "jeremy-keith" => new Speaker(
                "Jeremy",
                "Keith",
                "Workshop: HTML5 for Web Designers",
                "<p><strong>Jeremy Keith</strong> is an Irish web developer living in Brighton, England where he works with the web consultancy firm Clearleft. He has written two books, <a href=\"http://domscripting.com/book/\">DOM Scripting</a> and <a href=\"http://bulletproofajax.com/\">Bulletproof Ajax</a>, but what he really wants to do is direct. His latest project is <a href=\"http://huffduffer.com/\">Huffduffer</a>, a service for creating podcasts of found sounds. When he&#8217;s not making websites, Jeremy plays bouzouki in the band <a href=\"http://saltercane.com/\">Salter Cane</a>. His loony bun is fine benny lava.</p>",
                "<p>Quite simply, HTML5 is the most exciting thing to happen to markup in years.</p>
                <p>Jeremy&#8217;s workshop will distil the most relevant parts of the daunting HTML5 specification into a day of hands-on discovery and exploration. Discover the design principles that are informing the latest version of the web&#8217;s lingua franca, and find out why HTML5 is more of an evolution than a revolution.</p>
                <p>This workshop will help you get to grips with the new features in HTML5, from audio and video to more powerful forms and new structural elements. You&#8217;ll gain an understanding of the new semantics and get an insight into how new features should be used. Focusing on the practicalities of using HTML5 today, this workshop will benefit any web designer who wants to stay up-to-date with the latest standards.</p>",
                "adactio.com",
                "adactio",
                true
            ),
            "curtis-james" => new Speaker(
                "Curtis",
                "James",
                "Workshop: Improving your productivity",
                "<p><strong>Curtis James</strong> is a director of <a href=\"peoplewhodo.co.uk\">People Who Do</a>, manager of The Simon Sound, father, book binder, Samaritan and marathon runner (almost). Curtis has worked as a musician, audio producer and managing director across a range of creative businesses: his own and other peoples&#8217;. He still leads a creative life running a small letterpress studio and collecting anything he thinks looks or feels awesome, but concentrates on helping individuals and organisations get the most out of themselves and their lives, which he has been doing for over a decade.</p>",
                "<p>In the face of global recession it is our creativity that gives us the edge. Yet finding the space to be creative is harder than ever. Modern working practices mean we juggle diverse work loads whilst fielding increasing interruptions from email, tweets, text, phone, letters and colleagues.</p>
                <p>Curtis, alongside his colleague <a href=\"/speakers/steven-stark\">Steven Stark</a>, will run a practical workshop that will help you improve your productivity, and increase your capacity for creative thinking and doing.</p>
                <p>You&#8217;ll learn a brilliantly simple and straight forward framework designed to be habit forming: fading into the background of your work and freeing your brain to focus on what really makes a difference. It&#8217;s an intense day but you&#8217;ll enjoy the benefits immediately: feeling in control and on top of your work.</p>",
                "notkindacool.com",
                "oswald808",
                true
            ),
            "steven-stark" => new Speaker(
                "Steven",
                "Stark",
                "Workshop: Improving your productivity",
                "<p><strong>Steven Stark</strong> is a director of <a href=\"peoplewhodo.co.uk\">People Who Do</a>, an organisational and personal development consultancy that seeks to make work better. He has founded, built up, bought or sold nine terrestrial and digital radio stations, led an audio production company, launched a music festival and consulted for clients ranging from Virgin Media to The Department of Health. In his spare time he shares the childcare, cleans the house, and looks after bees.</p>",
                "<p>In the face of global recession it is our creativity that gives us the edge. Yet finding the space to be creative is harder than ever. Modern working practices mean we juggle diverse work loads whilst fielding increasing interruptions from email, tweets, text, phone, letters and colleagues.</p>
                <p>Steven, alongside his colleague <a href=\"/speakers/curtis-james\">Curtis James</a>, will run a practical workshop that will help you improve your productivity, and increase your capacity for creative thinking and doing.</p>
                <p>You&#8217;ll learn a brilliantly simple and straight forward framework designed to be habit forming: fading into the background of your work and freeing your brain to focus on what really makes a difference. It&#8217;s an intense day but you&#8217;ll enjoy the benefits immediately: feeling in control and on top of your work.</p>",
                "peoplewhodo.co.uk",
                "",
                true
            ),
            "mark-boulton" => new Speaker(
                "Mark",
                "Boulton",
                "Workshop: Design 101",
                "<p><strong>Mark Boulton</strong> runs his own studio, <a href=\"http://www.markboultondesign.com/\">Mark Boulton Design</a> and the co-founder of small indie publisher, <a href=\"http://fivesimplesteps.com/\">Five Simple Steps</a>, a publisher hell-bent on producing simple and practical books for the web professional.</p>
                <p>Mark started designing web sites when he was the &#8216;young guy&#8217; in the studio back in 1997 and he&#8217;s been banging on about applying the fundamentals of good graphic design on the web ever since. He is the author of the bestselling &#8216;Designing for the Web&#8217; and is currently working on writing more books. The fool.</p>",
                "<p>Visual design is not magic, or the result of some God-given talent, but the result of applying rules, techniques and practice.</p>
                <p>Mark&#8217;s workshop will cover the basics of visual design. From collaborative idea generation and visualising ideas, to the fundamentals of typography, grid design, composition and colour theory. Good visual design is like good jazz; it&#8217;s about having the chops to improvise around the constraints. That&#8217;s what this workshop will do: it will give you the chops. All you will need to do afterwards, is practice.</p>",
                "markboulton.co.uk",
                "markboulton",
                true
            ),
            "simon-collison" => new Speaker(
                "Simon",
                "Collison",
                "Workshop: Defining a Flexible Process",
                "<p><strong>Simon Collison</strong> is a designer, author and speaker with a decade of experience at the sharp end. He started the hugely successful Erskine Design back in 2006, but left earlier this year to pursue new and exciting challenges, which he can&#8217;t talk about yet. Simon lives in Nottingham but finds himself working all over the planet. He is owned by a cat.</p>",
                "<p>Simon has spent a decade working with some of the most demanding projects and clients known to man (with scars to prove it), and has established a rigorous yet flexible approach to getting the best from the brief, the client and the creative team, whilst never compromising on audience needs.</p>
                <p>Theoretical, practical and hands-on, Simon&#8217;s workshop will follow the project journey from beginning to launch&mdash;and beyond. You&#8217;ll learn about backbone and research, collaboration, methodology, convention, prototyping, testing, narrative and much more, with a strong emphasis on maximising creativity throughout. Whatever your experience, you&#8217;ll learn common sense and engaging approaches for dealing with client projects big or small.</p>",
                "colly.com",
                "simoncollison",
                true
            ),
            "brendan-dawes" => new Speaker(
                "Brendan",
                "Dawes",
                "Boil, Simmer, Reduce",
                "<p><strong>Brendan Dawes</strong> is Creative Director for magneticNorth, a digital design company based in Manchester, UK. Over the years he&#8217;s helped realise projects for a wide range of brands including Sony Records, Diesel, BBC, Fox Kids, Channel 4, Disney, Benetton, Kellogg&#8217;s, The Tate and Coca-Cola.In 2009 he was listed among the top twenty web designers in the world by .net magazine and was featured in the &#8220;Design Icon&#8221; series in Computer Arts.</p>",
                "<p>The actual process of design, the path you take on the way to creating something, is in many ways a &#8220;meta object&#8221; that can be applied to any design problem.</p>
                <p>Ever since his first experiences with the humble ZX81 back in the early eighties, Brendan has continued to explore the interplay of people, code, design and art both in his role leading the team at <a href=\"http://mnatwork.com\">mN</a> and on <a href=\"http://brendandawes.com\">brendandawes.com</a>, a personal space where he publishes random thoughts, toys and projects created from an eclectic mix of digital and analog objects.</p>
                <p>In this session Brendan talks through his three step process: boil&mdash;filling your head with many ideas and possibilties, simmer&mdash;taking time to consider, and finally reduce&mdash;removing things till there&#8217;s nothing left to take away.</p>",
                "brendandawes.com",
                "brendandawes",
                false,
				"http://dconstruct.s3.amazonaws.com/2010/podcast/dconstruct2010-dawes.mp3",
				25222
            ),
            "david-mccandless" => new Speaker(
                "David",
                "McCandless",
                "Information is Beautiful",
                "<p><strong>David McCandless</strong> is a London-based author, data-journalist and information designer, working across print, advertising, TV and web. His design work has appeared in over forty publications internationally including The Guardian and Wired. He champions the use of data visualisations to explore new directions for journalism and to discover new stories in the seas of data surrounding us. His blog and book &#8216;Information Is Beautiful&#8217; are dedicated to visualising ideas, issues, knowledge and data—all with the minimum of text.</p>",
                "<p>In an age of high-speed living and info overload, visualized information has incredible potential to help us quickly understand, navigate and find meaning in a complex world.</p>
                <p>The use of infographics, data visualisations and information design is a rising trend across many disciplines: science, design, journalism and web.  At the same time, daily exposure to the web is creating a incredibly design-literate population.  Could this be a new language?</p>
                <p>In his session, David will share his passion for this merging of design, information, text and story to unveil some of the interesting, unexpected and sometimes magical things that happen when you visualise data, knowledge and ideas. And, admitting that his book is as full of mistakes as it is successes, he&#8217;ll also explore some of the common pitfalls, traps and FAILS that dog this young design form. </p>
                <p>Using examples from his book and blog, he&#8217;ll share thoughts on what makes a successful information visualisation and journalistic tips, especially for designers, on how to zero in on interesting data and subjects&mdash;and how designing information can expose your own biases and change your views about the world. Oh yeah!</p>",
                "www.davidmccandless.com",
                "mccandelish",
                false,
				"http://dconstruct.s3.amazonaws.com/2010/podcast/dconstruct2010-mccandless.mp3",
				25223
            ),
            "hannah-donovan" => new Speaker(
                "Hannah",
                "Donovan",
                "Jam session: what improvisation can teach us about design",
                "<p>Originally from Canada&#8217;s icy north, <strong>Hannah Donovan</strong> is creative director at Last.fm, where she&#8217;s worked for the last four years. Before moving to London, she designed websites for Canada&#8217;s largest youth-focused agency, working on brands such as Hershey, Heineken and Bic. Hannah also plays the cello with an orchestra and draws monsters.</p>",
                "<p>Have you ever had a spontaneous creative triumph, perfectly in sync with your team?</p>
                <p>A passionate believer in improvisation as a design skill, Hannah&#8217;s session will talk about the importance of this technique in her own design process and what lessons can be borrowed from improvised music.</p>
                <p>From the jazz masters to the humble basement band practice, musical concepts such as timing, structure, rolls and expression have many lessons for designers creating an off-the-cuff interface.</p>
                <p>Hannah will explore how the methods of music translate for a design/development team, as well as sharing personal stories and techniques for those times when you need a bit of a jam session.</p>",
                "",
                "han",
                false,
				"http://dconstruct.s3.amazonaws.com/2010/podcast/dconstruct2010-donovan.mp3",
				25255
            ),
            "james-bridle" => new Speaker(
                "James",
                "Bridle",
                "The value of ruins",
                "<p>With a background in both computing and traditional publishing <strong>James Bridle</strong> attempts to bridge the gaps between technology and literature. He runs <a href=\"http://bookkake.com/\">Bookkake</a>, a small independent publisher and writes about books and the publishing industry at <a href=\"http://booktwo.org\">booktwo.org</a>. In 2009 he helped launch <a href=\"http://www.enhanced-editions.com/\">Enhanced Editions</a>, the first e-reading application with integrated audiobooks.</p>",
                "<p>Between The Alexandrian War of 48 BCE and the Muslim conquest of  642 CE, the Library of Alexandria, containing a million scrolls and tens of thousands of individual works was completely destroyed, its contents scattered and lost. An appreciable percentage of all human knowledge to that point in history was erased. Yet in his novella &#8220;The Congress&#8221;, Jorge Luis Borges wrote that &#8220;every few centuries, it&#8217;s necessary to burn the Library of Alexandria&#8221;.</p>
                <p>In his session James will ask if, as we build ourselves new structures of knowledge and certainty, as we design our future, should we be concerned with the value of our ruins?</p>",
                "shorttermmemoryloss.com",
                "stml",
                false,
				"http://dconstruct.s3.amazonaws.com/2010/podcast/dconstruct2010-bridle.mp3",
				25256
            ),
            "john-gruber" => new Speaker(
                "John",
                "Gruber",
                "The Auteur Theory of Design",
                "<p><strong>John Gruber</strong> writes and publishes <a href=\"http://daringfireball.net\">Daring Fireball</a>, a somewhat popular weblog ostensibly focused on Mac and web nerdery. He has been producing Daring Fireball as a full-time endeavour since April 2006.</p>
                <p>He lives in Philadelphia with his wife and son.</p>",
                "<p>Why is it that some projects never rise to the level of the talent of those who made it? It&#8217;s oft said regarding good work that the whole is greater than the sum of its parts. But sometimes the whole is <em>less</em> than the sum of its parts&mdash;a company or team comprised of good people, but yet which produces work that isn&#8217;t good.</p>
                In his session, John will explain his theory to explain how this happens&mdash;in both directions&mdash;based on the longstanding collaborative art of filmmaking. Learn how to recognise when a project is doomed to mediocrity, and, more importantly, how best to achieve collaborative success.</p>",
                "daringfireball.net",
                "gruber",
                false,
				"http://dconstruct.s3.amazonaws.com/2010/podcast/dconstruct2010-gruber.mp3",
				25253
            ),
            "marty-neumeier" => new Speaker(
                "Marty",
                "Neumeier",
                "The Designful Company",
                "<p><strong>Marty Neumeier</strong> began his career as a designer, but soon added writing and strategy to his repertoire, working variously as a designer, copywriter, journalist, magazine publisher and brand consultant. Having developed brand identities for companies such as Apple, Adobe, Kodak and Hewlett-Packard. He has also authored three bestselling books (‘The Brand Gap, &#8216;Zag&#8217; and &#8216;The Designful Company&#8217;) which discuss how organisations can bridge the gap between business strategy and customer experience.</p>",
                "<p>In an era of fast-moving markets and leap-frogging innovators, companies can no longer merely &#8220;unlock&#8221; wealth. Today they have to actively &#8220;create&#8221; wealth, or end up in the fossil layers of business history. As a result, brand-builders have a once-in-a-lifetime opportunity to play a key role in the next management revolution&mdash;the rise of the designful company.</p>
                <p>In his session, Marty will explain why design thinking&mdash;in its broadest sense&mdash;will become the new best practice, and how you can leverage your unique position as a brand-builder to transform the way business does business in the 21st century.</p>",
                "",
                "martyneumeier",
                false,
				"http://dconstruct.s3.amazonaws.com/2010/podcast/dconstruct2010-neumeier.mp3",
				25201
            ),
            "merlin-mann" => new Speaker(
                "Merlin",
                "Mann",
                "Kerning, Orgasms <abbr title=\"and\" class=\"embellished\">&amp;</abbr> Those Goddamned Japanese Toothpicks",
                "<p><strong>Merlin Mann</strong> is best known as the creator of <a href=\"http://43folders.com\">43folders.com</a>, a popular American website about finding the time and attention to do your best creative work.</p>",
                "<p>Freud popularised the term, &#8220;The Narcissism of Minor Differences&#8221;, to describe how adjacent villages&#8212;identical for all practical purposes&#8212;would struggle to amplify their tiniest distinctions in order to justify how much they despised one other. So you have to guess how much he would have enjoyed design mailing lists. And, Perl.</p>
                <p>Truth is, to the untrained (un-washed, un-nuanced, un-Paul-Rand&#8217;d, and un-Helvetica&#8217;d) outsider, discourse in the design community can sometimes look a lot like a cluster of tightly-wound Freudian villages.</p>
                <p>So, how is the role of design perceived by the people who are <em>using</em> the stuff you make? What role (if any) should users expect in the process of how their world is made and remade? What contexts might be useful in helping us turn all of our obsessions into useful and beautiful work?</p>
                <p>Can an Aeron chair ever be <em>truly</em> &#8216;Black&#8217;? Will there ever be a way to get Marketing people to stop calling typefaces &#8216;fonts&#8217;? And, when, at last, will the international community finally speak as one regarding the overuse of Mistral and stock photos of foreshortened Asian women?</p>
                <p>By leveraging his uniquely unqualified understanding of design, Merlin will propose some promising patterns for fording the gap between end-users and the unhappy-looking people in costly European eyeglasses who are designing their world.</p>
                <p>Is there hope? Come to Brighton, pull up a flawlessly-executed mid-century-Modern seating affordance, and we'll see what we can figure out together. One village to another.</p>",
                "www.merlinmann.com",
                "hotdogsladies",
                false,
				"http://dconstruct.s3.amazonaws.com/2010/podcast/dconstruct2010-mann.mp3"
            ),
            "samantha-warren" => new Speaker(
                "Samantha",
                "Warren",
                "The Power &amp; Beauty of Typography",
                "<p><strong>Samantha Warren</strong> loves big concepts as much as she loves badass typography and thrives on telling interesting stories through usable interfaces. She has written articles for .net Magazine, regularly speaks at industry events and is on the Board of the Art Directors Club of Washington DC. When she is not doing any of the above you can find her enthusiastically teaching typography and web design at the Center for Digital Imaging Arts at Boston University.",
                "<p>Web typography has come a long way, but how do you find inspiration to push your designs forward online? Letters can say far more than the words they spell.</p>
                <p>In her session, Samantha will look at the lettering surrounding us everyday, tapping into the way it makes us feel. If you don&#8217;t already get emotional about which font to use, you will, looking at letters in a whole new way and learning how to translate those feelings into your web designs.</p>",
                "www.badassideas.com",
                "samanthatoy",
                false,
				"http://dconstruct.s3.amazonaws.com/2010/podcast/dconstruct2010-warren.mp3",
				25252
            ),
            "tom-coates" => new Speaker(
                "Tom",
                "Coates",
                "Everything The Network Touches",
                "<p><strong>Tom Coates</strong> is a technologist and writer, focused on the shape of the web to come and on developing new concepts that thrive in it. He&#8217;s worked for many prominent web companies including Time Out, the BBC and Yahoo! where he was Head of Product for the Brickhouse innovation team. He&#8217;s most known for the Fire Eagle location-sharing service, and for his work on social software, future media and the web of data.</p>",
                "<p>The work we&#8217;re collectively doing&mdash;opening up gradually all of human information and media, making it recombinable, helping people create and share their work&mdash;is a huge unspoken, sexy, world-redefining mission.</p>
                <p>It&#8217;s a mission that many of us have become blas&#233; about, almost unaware of. It&#8217;s a project so large that it&#8217;s hard to get a grasp on. And the next few years are going to get even more interesting as the network pervades physical objects and environments, sensing and manifesting information in the real world.</p>
                <p>It's time to recognise the scale of the project we have in front of us, the breadth of the material we have to work with, and the possibilities of design within it. All of human knowledge, creativity&mdash;even the planet itself&mdash;is our canvas.</p>",
                "www.plasticbag.org",
                "tomcoates",
                false,
				"http://dconstruct.s3.amazonaws.com/2010/podcast/dconstruct2010-coates.mp3",
				25257
            )

        );
    }
    
    
    function get_data() {
        if (count(self::$speaker_data) < 1) {
            self::build_data();
        }
        return self::$speaker_data;
    }
    
    function get_speaker($speaker) {
        if (count(self::$speaker_data) < 1) {
            self::build_data();
        }
        if (array_key_exists($speaker, self::$speaker_data)) {
            return self::$speaker_data[$speaker];
        }
    }
    
}

?>