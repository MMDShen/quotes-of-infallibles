<?php
/**
 * @package Quotes_of_Infallibles
 * @version 1.2.0
 */

/*
Plugin Name: Quotes of Infallibles
Plugin URI: http://wordpress.org/plugins/morality-quotes/
Description: A package of Moral Quotes of 14 infallible of shia doctrine, consists of +150 Quote. bottom of each admin page is a random Moral Quote.
Author: Mohammad Sharafi
License: GNU General Public License
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Version: 1.2.0
*/
	function quotes_of_infallible(){
		/** These are the Quotes */
		/** quotes are gathered by help of Bing, unfortunately some are wrong, Imam Hasan al-askari & Imam Ali al-Hadi both are wrong */

		$quotes = array("Prophet Muhammad"=>[
											"The best among you is the one who doesn’t harm others with his tongue and hands.",
											"A good man treats women with honour.",
											"The greatest of richness is the richness of the soul.",
											"There is reward for kindness to every living thing.",
											"Strive always to excel in virtue and truth.",
											"The greatest jihad (struggle/striving) is to battle your own soul, to fight the evil within yourself.",
											"The strongest among you is the one who controls his anger.",
											"God does not look at your forms and possessions but he looks at your hearts and your deeds.",
											"Riches are not from an abundance of worldly goods but from a contented mind.",
											"Exchange gifts, you will love one another.",
											"The best among you are those who have the best manners and character.",
											"No two things have been combined better than knowledge and patience.",
											"Tell people of glad tidings and do not push them away.",
											"The best of houses is the house where an orphan gets love and kindness.",
											"The believer does not slander, curse, or speak in an obscene or foul manner.",
											"A kind word is a form of charity.",
											"A father gives nothing better than good education.",
											"Feed the hungry and visit a sick person, and free the captive, if he be unjustly confined. Assist any person oppressed whether Muslim or non-Muslim.",
											"Seek knowledge from cradle to the grave.",
											"Do not waste water even if you were at a running stream."
						],
						"Fatimah Zahra"=>[
											"You are Allah's slaves at His command and prohibition. You are the bearers of His religion and revelation. You are Allah's trusted ones with yourselves, and His messengers to the nations."
						],
						"Imam Ali"=>[
											"People who worship Allah to gain His Favors, this is the worship of traders; while there are some who worship Him to keep themselves free from His Wrath, this is the worship of slaves; a few who obey Him out of their sense of gratitude and obligations, this is the worship of free and noble men.",
											"He who is greedy is disgraced; he who discloses his hardship will always be humiliated; he who has no control over his tongue will often have to face discomfort.",
											"Avarice is disgrace; cowardice is a defect; poverty often disables an intelligent man from arguing his case; a poor man is a stranger in his own town; misfortune and helplessness are calamities; patience is a kind of bravery; to sever attachments with the wicked world is the greatest wealth; piety is the best weapon of defence.",
											"Submission to Allah’s Will is the best companion; wisdom is the noblest heritage; theoretical and practical knowledge are the best signs of distinction; deep thinking will present the clearest picture of every problem.",
											"The mind of a wise man is the safest custody of secrets; cheerfulness is the key to friendship; patience and forbearance will conceal many defects.",
											"A conceited and self-admiring person is disliked by others; charity and alms are the best remedy for ailments and calamities; one has to account in the next world for the deeds that he has done in this world.",
											"Man is a wonderful creature; he sees through the layers of fat (eyes), hears through a bone (ears) and speaks through a lump of flesh (tongue).",
											"Live amongst people in such a manner that if you die they weep over you and if you are alive they crave for your company.",
											"If you overpower your enemy, then pardon him by way of thankfulness to Allah, for being able to subdue him.",
											"Unfortunate is he who cannot gain a few sincere friends during his life and more unfortunate is the one who has gained them and then lost them (through his deeds).",
						],
						"Imam Hasan"=>[
											"Generosity is to help a deserving person without his request, and if you help him after his request, then it is either out of self-respect or to avoid rebuke.",
											"He who has no control over his tongue will often have to face discomfort.",
											"A fool’s mind is at the mercy of his tongue and a wise man’s tongue is under the control of his mind.",
											"One who rushes madly after inordinate desire, runs the risk of encountering destruction and death.",
											"Wisdom is the best inheritance.",
											"To fight against one's desires is the greatest of all fights.",
											"The most complete gift of God is a life based on knowledge.",
											"The tongue is a beast; if it is let loose, it devours.",
											"If you are not able to prevent a wrong, you should not commit it.",
											"Patience is of two kinds: patience over what pains you, and patience against what you covet."
						],
						"Imam Husayn"=>[
											"Death with dignity is better than a life of abasement.",
											"The most generous person is the one who offers help to those who do not expect him to help.",
											"Wisdom will not be complete except by following the truth.",
											"I never revolted in vain, as a rebel or as a tyrant; rather, I rose seeking reformation for the nation of Islam.",
											"Be steadfast and firm in the way toward what is right, even if your journey is full of pain and challenges.",
											"If you don’t believe in any religion, at least be free-spirited and honest in your actions.",
											"People are slaves of this world. Religion is just what they say. They use it as long as it provides them with their living. When they are tested, there remain only a few true religious ones.",
											"Beware! Do not be among those who are concerned about the sins of others while neglectful of their own sins.",
											"God will help the person who cares about other people’s needs, both in this world and the hereafter.",
											"To me, death for the sake of what is right, is nothing but happiness, and living under tyrants nothing but living in a hell."
						],
						"Imam Ali Zayn al-Abidin"=>[
											"Submission to Allah’s Will is the best companion; wisdom is the noblest heritage; theoretical and practical knowledge are the best signs of distinction; deep thinking will present the clearest picture of every problem.",
											"The mind of a wise man is the safest custody of secrets; cheerfulness is the key to friendship; patience and forbearance will conceal many defects.",
											"A conceited and self-admiring person is disliked by others; charity and alms are the best remedy for ailments and calamities; one has to account in the next world for the deeds that he has done in this world.",
											"Man is a wonderful creature; he sees through the layers of fat (eyes), hears through a bone (ears) and speaks through a lump of flesh (tongue).",
											"When this world favors somebody, it lends him the attributes, and surpassing merits of others and when it turns its face away from him it snatches away even his own excellences and fame.",
											"Live amongst people in such a manner that if you die they weep over you and if you are alive they crave for your company.",
											"If you overpower your enemy, then pardon him by way of thankfulness to Allah, for being able to subdue him.",
											"Unfortunate is he who cannot gain a few sincere friends during his life and more unfortunate is the one who has gained them and then lost them (through his deeds).",
											"When some blessings come to you, do not drive them away through thanklessness.",
											"He who is deserted by friends and relatives will often find help and sympathy from strangers."
						],
						"Imam Mohammad al-Bagir"=>[
											"Knowledge enlivens the soul.",
											"The light of everything is the truth, and the truth is the light of everything.",
											"He who has no manners has no knowledge; he who has no patience has no religion; and he who has no government over his tongue has no character.",
											"The worship of the wise over their Lord is to ponder over the wisdom of Allah, not extensive fasting and praying.",
											"The believer is not the one who eats his fill while his neighbor is hungry.",
											"The best of wealth is that which protects one's dignity.",
											"The strongest among you is the one who subdues his self.",
											"The most perfect of believers in faith are the best of them in morals.",
											"The most beloved of deeds to Allah is the one that is continuous, even if it is small.",
											"The best form of devotion to the service of Allah is not to make a show of it.",
						],
						"Imam Ja'far al-Sadiq"=>[
											"Be careful to have truthful friends and try to obtain them, for they are your support when you are in welfare, and your advocator when you have misfortune.",
											"Immorality and surliness make the human's life miserable and bitter.",
											"There are three things that signify the magnanimity of a person: good temper, patience, and to avoid aggressive gaze.",
											"Whenever the mind of a person is rectified, he becomes strong and powerful in appearance.",
											"Paying visits to one's own relatives prolongs the life of a person and prevents poverty and indigence.",
											"The person who is aware of the present situations of his time will never get involved with falsifying and wrongdoing.",
											"Having the foresight to plan to earn a living is half of the peace and leisure in life.",
											"One who does not use his intelligence will not succeed and one who does not use his knowledge will have no intellect.",
											"One who understands will attain nobility and excellence, and one who is tolerant will triumph.",
											"Knowledge is a shield (against evil), truth begets honour and ignorance disgrace, understanding is distinction, generosity is salvation and good manners command love and respect."
						],
						"Imam Musa al-Kazim"=>[
											"He who has no control over his tongue will often have to face discomfort.",
											"Avarice is disgrace; cowardice is a defect; poverty often disables an intelligent man from arguing his case; a poor man is a stranger in his own town; misfortune and helplessness are calamities; patience is a kind of bravery; to sever attachments with the wicked world is the greatest wealth; piety is the best weapon of defence.",
											"Submission to Allah’s Will is the best companion; wisdom is the noblest heritage; theoretical and practical knowledge are the best signs of distinction; deep thinking will present the clearest picture of every problem.",
											"The mind of a wise man is the safest custody of secrets; cheerfulness is the key to friendship; patience and forbearance will conceal many defects.",
											"A conceited and self-admiring person is disliked by others; charity and alms are the best remedy for ailments and calamities; one has to account in the next world for the deeds that he has done in this world.",
											"Man is a wonderful creature; he sees through the layers of fat (eyes), hears through a bone (ears) and speaks through a lump of flesh (tongue).",
											"When this world favors somebody, it lends him the attributes, and surpassing merits of others and when it turns its face away from him it snatches away even his own excellences and fame.",
											"Live amongst people in such a manner that if you die they weep over you and if you are alive they crave for your company.",
											"If you overpower your enemy, then pardon him by way of thankfulness to Allah, for being able to subdue him.",
											"Unfortunate is he who cannot gain a few sincere friends during his life and more unfortunate is the one who has gained them and then lost them (through his deeds).",
											"When some blessings come to you, do not drive them away through thanklessness."
						],
						"Imam Ali al-Rida"=>[
											"He who is greedy is disgraced; he who discloses his hardship will always be humiliated; he who has no control over his tongue will often have to face discomfort.",
											"Avarice is disgrace; cowardice is a defect; poverty often disables an intelligent man from arguing his case; a poor man is a stranger in his own town; misfortune and helplessness are calamities; patience is a kind of bravery; to sever attachments with the wicked world is the greatest wealth; piety is the best weapon of defence.",
											"Submission to Allah’s Will is the best companion; wisdom is the noblest heritage; theoretical and practical knowledge are the best signs of distinction; deep thinking will present the clearest picture of every problem.",
											"The mind of a wise man is the safest custody of secrets; cheerfulness is the key to friendship; patience and forbearance will conceal many defects.",
											"A conceited and self-admiring person is disliked by others; charity and alms are the best remedy for ailments and calamities; one has to account in the next world for the deeds that he has done in this world.",
											"Man is a wonderful creature; he sees through the layers of fat (eyes), hears through a bone (ears) and speaks through a lump of flesh (tongue).",
											"When this world favors somebody, it lends him the attributes, and surpassing merits of others and when it turns its face away from him it snatches away even his own excellences and fame.",
											"Live amongst people in such a manner that if you die they weep over you and if you are alive they crave for your company.",
											"If you overpower your enemy, then pardon him by way of thankfulness to Allah, for being able to subdue him.",
											"Unfortunate is he who cannot gain a few sincere friends during his life and more unfortunate is the one who has gained them and then lost them (through his deeds).",
											"When some blessings come to you, do not drive them away through thanklessness.",
											"He who is deserted by friends and relatives will often find help and sympathy from strangers."
						],
						"Imam Mohammad al-Taqi"=>[
											"Generosity has a limit, which when exceeded, becomes extravagance.",
											"One who seeks advice learns to recognize mistakes.",
											"Knowledge is a shield against the lures of sin.",
											"Silence is one of the gates to wisdom.",
											"Patience is to faith what the head is to the body; one who does not have patience does not have faith.",
											"To miss knowledge is worse than losing wealth.",
											"People are slaves to this world, and as long as they live favorable and comfortable lives, they are loyal to religious principles.",
											"He who does not have forbearance, has nothing.",
											"The best worship is to contemplate on God and His power.",
											"The most complete gift of God is a life based on knowledge."
						],
						"Imam Ali al-Hadi"=>[
											"He who is greedy is disgraced; he who discloses his hardship will always be humiliated; he who has no control over his tongue will often have to face discomfort.",
											"Avarice is disgrace; cowardice is a defect; poverty often disables an intelligent man from arguing his case; a poor man is a stranger in his own town; misfortune and helplessness are calamities; patience is a kind of bravery; to sever attachments with the wicked world is the greatest wealth; piety is the best weapon of defence.",
											"Submission to Allah’s Will is the best companion; wisdom is the noblest heritage; theoretical and practical knowledge are the best signs of distinction; deep thinking will present the clearest picture of every problem.",
											"The mind of a wise man is the safest custody of secrets; cheerfulness is the key to friendship; patience and forbearance will conceal many defects.",
											"A conceited and self-admiring person is disliked by others; charity and alms are the best remedy for ailments and calamities; one has to account in the next world for the deeds that he has done in this world.",
											"Man is a wonderful creature; he sees through the layers of fat (eyes), hears through a bone (ears) and speaks through a lump of flesh (tongue).",
											"When this world favors somebody, it lends him the attributes, and surpassing merits of others and when it turns its face away from him it snatches away even his own excellences and fame.",
											"Live amongst people in such a manner that if you die they weep over you and if you are alive they crave for your company.",
											"If you overpower your enemy, then pardon him by way of thankfulness to Allah, for being able to subdue him.",
											"Unfortunate is he who cannot gain a few sincere friends during his life and more unfortunate is the one who has gained them and then lost them (through his deeds).",
											"When some blessings come to you, do not drive them away through thanklessness.",
											"He who is deserted by friends and relatives will often find help and sympathy from strangers."
						],
						"Imam Hasan al-Askari"=>[
											"He who is greedy is disgraced; he who discloses his hardship will always be humiliated; he who has no control over his tongue will often have to face discomfort.",
											"Avarice is disgrace; cowardice is a defect; poverty often disables an intelligent man from arguing his case; a poor man is a stranger in his own town; misfortune and helplessness are calamities; patience is a kind of bravery; to sever attachments with the wicked world is the greatest wealth; piety is the best weapon of defence.",
											"Submission to Allah’s Will is the best companion; wisdom is the noblest heritage; theoretical and practical knowledge are the best signs of distinction; deep thinking will present the clearest picture of every problem.",
											"The mind of a wise man is the safest custody of secrets; cheerfulness is the key to friendship; patience and forbearance will conceal many defects.",
											"A conceited and self-admiring person is disliked by others; charity and alms are the best remedy for ailments and calamities; one has to account in the next world for the deeds that he has done in this world.",
											"Man is a wonderful creature; he sees through the layers of fat (eyes), hears through a bone (ears) and speaks through a lump of flesh (tongue).",
											"When this world favors somebody, it lends him the attributes, and surpassing merits of others and when it turns its face away from him it snatches away even his own excellences and fame.",
											"Live amongst people in such a manner that if you die they weep over you and if you are alive they crave for your company.",
											"If you overpower your enemy, then pardon him by way of thankfulness to Allah, for being able to subdue him.",
											"Unfortunate is he who cannot gain a few sincere friends during his life and more unfortunate is the one who has gained them and then lost them (through his deeds).",
											"When some blessings come to you, do not drive them away through thanklessness.",
											"He who is deserted by friends and relatives will often find help and sympathy from strangers."
						],
						"Imam Mohammad al-Mahdi"=>[
											"The most beloved thing to Allah is the act that a servant continues to perform regularly.",
											"The best deed of a great man is to forgive and forget.",
											"Silence is the best reply to a fool.",
											"Interaction with people in a good manner is half of wisdom.",
											"Your best provision is true piety.",
											"The peak of intellect after religious faith is loving for the sake of Allah and hating for the sake of Allah.",
											"Asking good questions is half of learning.",
											"Maintain the prayer, for if you abandon it, you may abandon all other acts of righteousness.",
											"People with strong faith have the best life.",
											"One who pursues a goal through sinful ways will ironically distance himself from that goal and will approach what he was afraid of.",
						],);

		/** this array is for choosing one of infallibles */
		/** I excluded wrong quotes by removing name of persons from here: Imam Ali al-Hadi & "Imam Hasan al-Askari" */
		$holy_persons = array("Prophet Muhammad","Fatimah Zahra","Imam Ali","Imam Hasan",
							"Imam Husayn","Imam Ali Zayn al-Abidin","Imam Mohammad al-Bagir","Imam Ja'far al-Sadiq",
							"Imam Musa al-Kazim","Imam Ali al-Rida","Imam Mohammad al-Taqi","Imam Mohammad al-Mahdi");
		$chosen = $holy_persons[wp_rand(0,11)]; //minus 2

		/** This is for getting length of array of quotes of chosen person in upper line */
		$quotesLength = count($quotes[$chosen]);

		/** This returns chosen person and his selected quote */
		/** i left unused $chosen variable for next versions */
		return [$chosen,$quotes[$chosen][wp_rand(0,$quotesLength - 1)]];
	}

	function select_chosen_quote(){
		/** copied and pasted! but is obvious what to do! */
		$lang   = '';
		if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
			$lang = ' lang="en"';
		}

		/** hint: %s in first line of below function is what we have to have a value for it */
		printf(   '<p id="quote" style=""><span %s>%s</span></p>',
			//__('quotes of Holy Persons'),
			esc_attr($lang),
			esc_html( "Infallible says: " . quotes_of_infallible()[1]));
	}

	/** here we attach our function to our hook, i tried admin_footer but result was not what i wish */
	add_action( 'admin_notices', 'select_chosen_quote' );

	/** required css file */
	function quote_css() {
		echo "
		<style type='text/css'>
		#quote {
			padding: 5px 10px;
			text-align: center;
			margin: 0;
			font-size: 12px;
			line-height: 1.6666;
			position: absolute;
			left: 0px;
			right:0px; 
			bottom: 2vw;
			padding-left: 1px;
		}
		</style>
		";
	}

	/** add upper css function to 'header div' of our admin section of wordpress project */
	add_action( 'admin_head', 'quote_css' );