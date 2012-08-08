<?php

	print "Note: This quiz is from the Munchkin's Guide to Power Gaming, which is an awesome book. If you like this, go pick it up! It's made by Steve Jackson Games (www.sjgames.com).<br><br>";

	print "<strong>Are You a Munchkin?</strong><hr>";

	$arrQuestions = array();

	$arrQuestions[] = array("What is your favorite roleplaying game?", 
								"<i>Bunnies and Burrows</i>&trade;.", 
								"<i>AD&D</i>&trade;.", 
								"<i>Feng Shui</i>&trade;.");

	$arrQuestions[] = array("What is your favorite character class?",
								"Thief.",
								"Warrior.",
								"Fighter/Mage/Thief half-ogre with psionic powers.");

	$arrQuestions[] = array("Swords. What do you carry?",
								"An epee.",
								"A two-handed sword.",
								"A two-handed greatsword that can only be lifted by someone with your superhuman strength, doubles your skill and damage, is totally indestructable, and was bequeathed to you by a god for no good reason.");

	$arrQuestions[] = array("Handguns. What's the bee's knees?",
								"A .38 police special.",
								"A .44 Magnum.",
								"A .50 caliber Desert Eagle with laser-sighting, custom grips, extended barrel, autofire conversion, and hand-packed rounds.");

	$arrQuestions[] = array("Ammunition. What do you pop to drop?",
								"Standard rounds.",
								"Hollow points.",
								"DPU with a titanium core, and a hollow tip containing a powerful neurotoxin.");

	$arrQuestions[] = array("An enemy is fleeing; what do you shout?",
								"Stop!",
								"Stop or I shoot!",
								"Blam! Blam! Blam! Blam! Blam! Blam! Freeze! (reload) Blam! Blam! Blam! Blam! Blam! Blam!");

	$arrQuestions[] = array("What superpowers?",
								"Telepathy.",
								"Super-speed.",
								"Super-strength, toughness, and the brain of a goat.");

	$arrQuestions[] = array("How does your garden grow?",
								"A neatly rolled lawn.",
								"Carnivorous plants.",
								"Land-mines, watch-towers, razor-wire, and dirt.");

	$arrQuestions[] = array("Which is your favorite character?",
								"Your insane vampire stamp-collector who spends every game sorting through his collection of rare foreign first-day covers.",
								"Your veteran soldier who, while crazy, still has some deep pathos at his core.",
								"Your 125th level fighter/mage/paladin who has become a god.");

	$arrQuestions[] = array("What do you keep your dice in?",
								"A fluffy pencil-case.",
								"A Tupperware box.",
								"A finely crafted mahogany box lined with velvit. Each die is in its own tiny hole, unsullied by the touch of any other mortal.");

	$arrQuestions[] = array("What condition is your character sheet in?",
								"Pristine in a plastic folder.",
								"Crumpled and well-used in a ring binder.",
								"Mashed and indecipherable in your pocket, but it doesn't matter ... \"You can remember it by heart.\"");

	$arrQuestions[] = array("What condition is your GM in?",
								"Calm, relaxed, and confident.",
								"On his toes, ready for anything.",
								"In a loony bin bouncing off the walls mumbling \"three criticals in a row\" to himself.");

	$arrQuestions[] = array("Complete this sentence, \"I love the smell of napalm in the morning, it smells like ...\"",
								"Combusting petroleum derivative.",
								"Victory.",
								"Burning flesh, burning flesh! Die, die, die!");

	$arrQuestions[] = array("What do you drive?",
								"A small-engined foreign car (probably French).",
								"A Harley-Davidson&trade;.",
								"An interdimensional super-fortress, which converts into a giant battle-bot and crushes everything in its path.");

	$arrQuestions[] = array("What do you wear?",
								"Loose clothes made of hemp.",
								"An armored business suit.",
								"A completely self-contained composite power-suit, indestructable, armed to the teeth and left to you by your eccentric genius father for no good reason.");

	$arrQuestions[] = array("What music do you listen to?",
								"Ambient techno.",
								"'70s heavy metal.",
								"Norwegian black metal bands, only you think they're nancies 'cause they only burn down churches, not cities.");

	$arrQuestions[] = array("What book is on your bedside table?",
								"<i>The Lion, the Witch and the Wardrobe</i>.",
								"A Tom Clancy novel.",
								"<i>The Anarchists' Cookbook</i>.");

	$arrQuestions[] = array("What is your favorite Web page?",
								"Naked pictures of the Spice Girls/Boyzone.",
								"Naked pictures of Gillian Anderson/David Duchovny.",
								"Naked pictures of Brigitte Nielsen/John Wayne.");

	$arrQuestions[] = array("In regard to food, what are you?",
								"Vegetarian.",
								"Omnivore.",
								"Carnivore.");

	$arrQuestions[] = array("Comedy. Who makes you laugh?",
								"Jay Leno.",
								"Dennis Leary.",
								"Charles Manson.");

	$arrQuestions[] = array("What pet do you own?",
								"Hamster.",
								"Big dog.",
								"Bruin the bear who you adopted because he was mistreated. Then you mistreated him as well to kep him mean.");

	$arrQuestions[] = array("What nationality do you admire?",
								"The French, for their culture and art.",
								"The Germans, for their industry and enterprise.",
								"The Americans, they got the bombs.");

	$arrQuestions[] = array("Adolf Hitler?",
								"A force for pure evil.",
								"A nasty, petty little man.",
								"A panty-waist, liberal pinko.");

	$arrQuestions[] = array("When the end of the world comes, you'll be ...",
								"Praying for your life.",
								"Running like hell.",
								"Holed up in the Appalachiant with your family and a case full of guns.");

	$arrQuestions[] = array("Blood. Is it...",
								"Icky?",
								"Thicker than water?",
								"Cool, huh-huh-huh-huh?");


	$arrResults = array("You total nancy! With luck, and <i>The Munchkin's Guide to Power Gaming</i>, you might just possibly be able to create a marginally munchikin character, given a couple of years' practice and the threat of a sound beating.",
						"Hmm. Not much to work with, but we'll try. You have some munchkin tendencies. We'll do what we can to encourage them. Don't get your hopes up too high. What you really need to do is get rid of that little bit of leftover personality that you have.",
						"Greatness awaits if you can push yourself that little bit further. Eat more red meat and orange sweeties and drink more coffee. You'll get there.",
						"Congratulations! You are an official munchkin.",
						"Total mucnkin. Well done! There is nothing more we can teach you! Return <i>The Munchkin's Guide to Power Gaming</i> to the store if you got it. You probably think we're a bunch of wusses who have no idea what a real mucnkin is anyway.",
						"You're a lying toad. This is and of itself <i>would</i> make you solid munchkin material, but you have to be more cautious while cheating to keep one step ahead of the GM.");

	if(!isset($_REQUEST['submit']))
	{
		print "<form action='index.php' method='get'>\n";
		$i = 0;
		foreach($arrQuestions as $arrQuestion)
		{
			print "	" . $arrQuestion[0] . "<br>\n";

			for($j = 1; $j < sizeof($arrQuestion); $j++)
				print "		<input type='radio' name='question$i' value='$j' " . ($j == 1 ? "checked" : '') . "> " . $arrQuestion[$j] . "<br>\n";

			print "		<hr>\n";
			$i++;
		}

		print "		<input type='checkbox' name='penalty'> Did you, at any point, wonder whether this was referring to your character or yourself? (Real mucnkins want to BE their favorite PC.<hr>";

		print "		<input type='submit' name='submit' value='Get results'>\n";
		print "	</form>";
	}
	else
	{
		$i = 0;
		$intTotal;

		while(isset($_REQUEST["question$i"]))
		{
			$intTotal += $_REQUEST["question$i"];
			$i++;
		}

		if(isset($_REQUEST['penalty']))
			$intTotal -= 10;

		print "Your total was $intTotal!<br><br>";

		print "<strong><em>";
		if($intTotal <= 25)
			print $arrResults[0];
		elseif($intTotal <= 40)
			print $arrResults[1];
		elseif($intTotal <= 60)
			print $arrResults[2];
		elseif($intTotal <= 74)
			print $arrResults[3];
		elseif($intTotal <= 75)
			print $arrResults[4];
		else
			print $arrResults[5];

		print "</em></strong>";
		print "<hr><a href='index.php'>Back</a>";
	}


?>
