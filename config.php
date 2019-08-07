
<?php 
/**
 * Use this file to set the custom info in the study
 * Any data that will be consistently used across all items are defined here. Think of this like defaults and global info. 
 */

define('SITE_NAME', 'The Gazette Star');
define('DIST_URL', "https://$_SERVER[HTTP_HOST]/dist");
define('STUDY_PREFIX', 'bio_');

// We’d need five versions of the site:

// 1. No bio, only a byline                 /
// 2. Personal photo with personal bio      /?author_photo=personal&author_bio=personal
// 3. Personal photo with basic bio         /?author_photo=personal&author_bio=basic
// 4. Professional photo with personal bio  /?author_photo=professional&author_bio=personal
// 5. Professional photo with basic bio     /?author_photo=professional&author_bio=basic

$authorPhotoKey = isset($_GET['author_photo']) ? $_GET['author_photo'] : false;
$authorBioKey = isset($_GET['author_bio']) ? $_GET['author_bio'] : false;

// set the default identifier
$identifier = 'no_photo_no_bio';

// build a new identifier based on what's on/off
if($authorPhotoKey || $authorBioKey) {
    $identifier = (!empty($authorPhotoKey) ? 'photo_'.$authorPhotoKey : '') . (!empty($authorBioKey) && !empty($authorPhotoKey) ? '_' : '') .(!empty($authorBioKey) ? 'bio_'.$authorBioKey : '');
}

// IMPORTANT: This is always necessary for every study
define('IDENTIFIER', $identifier);


$authorPhotos = array(
    'personal' => DIST_URL.'/img/author-image-personal.jpg',
    'professional' => DIST_URL.'/img/author-image-professional.jpg',
);

$authorBios = array(
    'personal' => '<p>Jim Phelps is a science reporter for '.SITE_NAME.'. His coverage of energy and the environment has appeared in the Dallas Morning News, The Atlantic and Newsweek. A Colorado native and life-long Broncos fan, he began his career at the Denver Post, where he was part of a team that won a Pulitzer Prize for their story about the pollution of popular hot springs in Aspen. He graduated with a journalism degree from Vanderbilt University where he served as the editor-in-chief of the student newspaper. His simple pleasures in life include hiking with his wife and two sons and the smell of barbecue on the lakefront after surviving a cold winter.</p>',
    'basic' => '<p>Jim Phelps is a science reporter for '.SITE_NAME.'. His coverage of energy and the environment has appeared in the Dallas Morning News, The Atlantic and Newsweek. He began his career at the Denver Post, where he was part of a team that won a Pulitzer Prize for their story about the pollution of popular hot springs in Aspen. He graduated with a journalism degree from Vanderbilt University and served as editor-in-chief of the student newspaper.</p>',
);

define('AUTHOR_BIO', isset($authorBios[$authorBioKey]) ? $authorBios[$authorBioKey] : false);
define('AUTHOR_PHOTO', isset($authorPhotos[$authorPhotoKey]) ? array('src' => $authorPhotos[$authorPhotoKey], 'alt' => '') : false);
define('AUTHOR', array(
    'image' => AUTHOR_PHOTO,
    'name'  => 'Jim Phipps',
    'content' => AUTHOR_BIO
));
define('USE_AUTHOR_PHOTO', !empty(AUTHOR_PHOTO));
define('USE_AUTHOR_BIO',!empty(AUTHOR_BIO));
define('PUBDATE', 'Aug. 6, 2019');



// include the functions file
include ('inc/functions.php');