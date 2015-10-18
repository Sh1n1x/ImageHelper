<?php
<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Intervention\Image\ImageManager;

class ImageHelper extends Helper
{
    public $helpers = array('Html','Form');
    /**
     * Generate an image with a specific size
     * @param  string   $image path of the image (from the webroot directory)
     * @param  int      $width
     * @param  int      $height
     * @param  array    $options Options (same that HtmlHelper::image)
     * @param  int      $quality
     * @return string   <img> tag
     */
    public function resize($image, $width, $height, $options = array(), $quality = 100){
        $options['width'] = $width;
        $options['height'] = $height;
        return $this->Html->image($this->resizedUrl($image, $width, $height, $quality), $options);
    }
}
