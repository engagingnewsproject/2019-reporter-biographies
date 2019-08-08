
<?php 
/**
 * IMPORTANT: Use this file to set the custom info in the study.
 * Any data that will be consistently used across all items are defined here. Think of this like defaults and global info. 
 * Go through each of these sections when you set-up your study.
 */


 /**
  * 1. What is the name of the directory you'll use when you upload this to thenewsbeat.org? 
  *    If you'll be at thenewsbeat.org/2019-reporter-biographies/, enter '2019-reporter-biographies'
  */
define('NEWSBEAT_DIRECTORY_NAME', '2019-reporter-biographies');

/**
 * 2. What is the prefix for your study? This will be used in the comment logging and creating people's unique user IDs.
 *    This will get stored to their localStorage and used from there after the first time. So, if you update it, you'll need 
 *    to clear your localStorage to see the effect.
 */
define('STUDY_PREFIX', 'bio_');

define('IS_DEV', $_SERVER[HTTP_HOST] !== 'thenewsbeat.org');
define('SITE_NAME', 'The Gazette Star');
define('DIST_URL', IS_DEV ? "https://$_SERVER[HTTP_HOST]/dist" : "https://$_SERVER[HTTP_HOST]/".NEWSBEAT_DIRECTORY_NAME."/dist");


/**
 * In this config example, we’ll need five versions of each article:
 * 
 * 1. No bio, only a byline                 /
 * 2. Personal photo with personal bio      /?author_photo=personal&author_bio=personal
 * 3. Personal photo with basic bio         /?author_photo=personal&author_bio=basic
 * 4. Professional photo with personal bio  /?author_photo=professional&author_bio=personal
 * 5. Professional photo with basic bio     /?author_photo=professional&author_bio=basic
 */


/**
 * 3. Set the query parameters that will define the variations of the study.
 *    This could be something like:
 *       - using a photo or not: /?photo=true
 *       - varying a template: /?template=trust
 *       - multiple things at once: /?tempalate=trust&author_photo=professional
 *    
 *    IMPORTANT: You'll need to touch most of the lines here
 */
$authorPhotoKey = isset($_GET['author_photo']) ? $_GET['author_photo'] : false;
$authorBioKey = isset($_GET['author_bio']) ? $_GET['author_bio'] : false;


/**
 * 4. Set the default identifier for each variation of the study.
 *    This is used to send to the log which variation of the study is being used. 
 */
$identifier = 'no_photo_no_bio';

// IMPORTANT: This is done manually.
if($authorPhotoKey || $authorBioKey) {
    $identifier = (!empty($authorPhotoKey) ? 'photo_'.$authorPhotoKey : '') . (!empty($authorBioKey) && !empty($authorPhotoKey) ? '_' : '') .(!empty($authorBioKey) ? 'bio_'.$authorBioKey : '');
}

// DON'T CHANGE THIS ONE
// IMPORTANT: This is always necessary for every study.
define('IDENTIFIER', $identifier);


/**
 * 5. Set the values based on your potential $_GET values. The keys in the arrays below should match
 *    the valid $_GET values for your parameters. So, if you do /?author_photo=personal, there should 
 *    be a key in your $authorPhotos array for 'personal'
 */

$authorPhotos = array(
    'personal' => DIST_URL.'/img/author-image-personal.jpg',
    'professional' => DIST_URL.'/img/author-image-professional.jpg',
);

$authorBios = array(
    'personal' => '<p>Jim Phelps is a science reporter for '.SITE_NAME.'. His coverage of energy and the environment has appeared in the Dallas Morning News, The Atlantic and Newsweek. A Colorado native and life-long Broncos fan, he began his career at the Denver Post, where he was part of a team that won a Pulitzer Prize for their story about the pollution of popular hot springs in Aspen. He graduated with a journalism degree from Vanderbilt University where he served as the editor-in-chief of the student newspaper. His simple pleasures in life include hiking with his wife and two sons and the smell of barbecue on the lakefront after surviving a cold winter.</p>',
    'basic' => '<p>Jim Phelps is a science reporter for '.SITE_NAME.'. His coverage of energy and the environment has appeared in the Dallas Morning News, The Atlantic and Newsweek. He began his career at the Denver Post, where he was part of a team that won a Pulitzer Prize for their story about the pollution of popular hot springs in Aspen. He graduated with a journalism degree from Vanderbilt University and served as editor-in-chief of the student newspaper.</p>',
);


/**
 * 6. Set the constants for the articles. These can be based on the $_GET values or just a simple string/bool value. 
 *    These are used to display the articles.
 */

// Author constants
define('AUTHOR_BIO', isset($authorBios[$authorBioKey]) ? $authorBios[$authorBioKey] : false);
define('AUTHOR_PHOTO', isset($authorPhotos[$authorPhotoKey]) ? $authorPhotos[$authorPhotoKey] : false);
define('AUTHOR_PHOTO_ALT', '');
define('AUTHOR_NAME', 'Jim Phipps');
// Study variations
define('USE_AUTHOR_PHOTO', isset($authorPhotos[$authorPhotoKey]));
define('USE_AUTHOR_BIO', isset($authorBios[$authorBioKey]));

// Article constants
define('PUBDATE', 'Aug. 6, 2019');



/**
 * 7. NEXT STEPS: All done with the config! Now go and set all the constants you defined for the 
 * study wherever they need to get set. The main files you'll likely touch:
 * 
 * 1. /articles/path-to-article/data.php - the "database" for the article
 * 2. /articles/includes/main.php - the article template file
 * 3. /article-list.html - the list of possible article links to make it easy for everyone to review
 */


// include the functions file
include ('inc/functions.php');