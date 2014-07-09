<?php
/**
 * Modifier_nl2br
 * Uses PHP's native nl2br() to convert newlines to <br>
 *
 * @author  Ray Gesualdo <ray@rjgesualdo.com>
 * @link    https://github.com/raygesualdo/statamic-nl2br
 */

class Modifier_nl2br extends Modifier
{
    var $meta = array(
        'name'       => 'nl2br',
        'version'    => '1.0',
        'author'     => 'Ray Gesualdo',
        'author_url' => 'http://rjgesualdo.com'
    );
    
    public function index($value, $parameters=array()) 
    {
        if (!is_string($value)) 
        {
            return $value;
        }
        elseif (isset($parameters[0]) && $parameters[0] === "xml") 
        {
            return nl2br($value);
        }
        else
        {
            return nl2br($value, false);
        }
    }
}