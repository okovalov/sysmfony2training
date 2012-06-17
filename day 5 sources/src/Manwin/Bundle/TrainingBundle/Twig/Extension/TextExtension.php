<?php

namespace Manwin\Bundle\TrainingBundle\Twig\Extension;

class TextExtension extends \Twig_Extension
{
    public function getName() {
    	return 'manwin_text';
    }
    
    public function getFunctions() {
        return array(
            'paragraph' =>  new \Twig_Function_Method($this, 'paragraph', array(
                'is_safe' => array('html')
            ))
        );	
    }
    
    public function paragraph($text, array $options = array()) {
		$css = (isset($options['class'])) ? ' class="'.$options['class'].'"' : '';
		$patterns = array("/(\r\n|\r)/", "/\n{2,}/");
		$replacements = array("\n", "</p><p$css>");
		# turn two and more newlines into paragraph
		$text = preg_replace($patterns, $replacements, $text);
		# turn single newline into <br/>
		$text = str_replace("\n", "\n<br />", $text);
		return '<p'.$css.'>'.$text.'</p>';    	
    }
    
    public function getFilters() {
    	return array(
    	   'truncate' => new \Twig_Filter_Method($this, 'truncate')
    	);
    }
    
    public function truncate($text, $max = 30) {
    	
		if (mb_strlen($text) > $max) {
			$text = mb_substr($text, 0, $max);
			$text = mb_substr($text, 0, mb_strrpos($text,' ')).'...';
		}
		
		return $text;    	
    }
    
}