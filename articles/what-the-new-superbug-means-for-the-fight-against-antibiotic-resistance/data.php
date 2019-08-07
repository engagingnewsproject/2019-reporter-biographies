<?php

// Everything ends up in one $article array to make it easier to dump everything and see what we're working with. Makes it easier to transition
// to a class or database in the future as well since things are more organized.

$featuredImage = array(
    'caption' => 'The discovery of bacteria that is resistant to our &ldquo;last resort&rdquo; antibiotic means we need new antibiotics. Pictured: E. coli bacteria.',
    'src' => getDistURL().'/img/e-coli-bacteria.jpg',
);

$article = array(
    'author' => AUTHOR,
    'pubdate' => PUBDATE,
    'title' => 'What The New Superbug Means For The Fight Against Antibiotic Resistance',
    'featuredImage' => $featuredImage,
    'content' => '<p>SAN FRANCISCO &mdash; Experts say a Pennsylvania woman&rsquo;s recent case of an antibiotic-resistant infection shows the urgency for new antibiotics.</p>
    <p>In the case, the E. coli bacteria causing the 49-year-old woman&rsquo;s urinary tract infection were found in lab testing to be resistant to an antibiotic called colistin. Doctors consider colistin a &ldquo;last resort&rdquo; drug — it can have serious side effects, such as kidney damage, so it is used only when other antibiotics do not work.</p>
    <p>Currently, colistin is mainly used to treat people infected with a type of bacteria called CRE, or carbapenem-resistant enterobacteriaceae. E. coli is one type of enterobacteria, though not all E. coli strains have acquired resistance to carbapenem.</p>
    <p>Infections caused by CRE have limited treatment options and have been associated with high mortality rates, according to a report by Neil Gupta, MD, and his team at the Centers for Disease Control and Prevention.</p>
    <p>Bacteria that are resistant to multiple antibiotics are the sort of thing that &ldquo;[keeps] us awake at night,&rdquo; said Dr. William Schaffner, an infectious-disease specialist and professor of preventive medicine at Vanderbilt University School of Medicine.</p>
    <p>Although doctors were able to treat the woman&rsquo;s infection with other antibiotics, the discovery of a colistin-resistant bug in the United States has experts on high alert.</p>
    <p>News of the superbug in US patients came as no surprise to Barbara Murray, MD, director of the division of infectious diseases at the University of Texas Health Science Center at Houston and an internationally recognized expert on antibiotic resistance. &ldquo;Once [resistance has] appeared somewhere, you know it&rsquo;s going to appear other places, so it was just a matter of time,&rdquo; said Murray, a past president of the Infectious Diseases Society of America. &ldquo;I&rsquo;ve been working on antibiotic resistance for 30 years, and it always happens [this way].&rdquo;</p>
    <p>This particular superbug will not only spread farther but could also give rise to completely new strains of superbugs, according to Gupta&rsquo;s report.</p>
    <p>That&rsquo;s because the genetic element that makes the bacteria resistant to colistin is found on a small, circular piece of DNA called a plasmid.</p>
    <p>&ldquo;There are certain plasmids that can transfer from bacterium to bacterium. Some of them can transfer widely, to whole different species and genre of bacteria,&rdquo; Murray said. &ldquo;These plasmid-mediated things can spread like wildfire, and they can spread from species to species. Then they have their own resistances, which just makes the problem exponentially worse.&rdquo;</p>
    <p>But if the plasmid that makes bacteria resistant to colistin were to spread to a CRE strain of bacteria (that was already resistant to carbapenem), doctors would not be able to use either powerful antibiotic to treat the infection.</p>
    <p>In these cases, doctors may see if any experimental drugs are available or may try using combinations of antibiotics, Schaffner said. By combining drugs, it is sometimes possible to kill the bacteria, he said.</p>
    <p>There will always be mechanisms that allow bacteria to evade or become resistant to an antibiotic, Schaffner said. In other words, as researchers develop new drugs, bacteria will mutate to become resistant to them, and so on.</p>
    <p>Therefore, there is a need to keep looking for and creating new antibiotics, Schaffner said.</p>
    <p>The search is more difficult than it once was. The antibiotics that were the easiest to discover were found back in the 1940s and 1950s, Schaffner said. &ldquo;These days, it will take more work&rdquo; to find new drugs, he said.</p>
    <p>But although more research on antibiotics is imperative, the detection of the superbug in the United States is not a cause for panic, experts say.</p>
    <p>&ldquo;I think, for the moment, those in [the fields of] public health and infectious disease will do the worrying for everyone,&rdquo; Schaffner said.</p>
    <p>The most important thing that people can do is to not argue with a doctor if he or she tells you that you don&rsquo;t need antibiotics, Schaffner said. Don&rsquo;t insist on them, he said.</p>',
    'comments' => array(),
);
?>
