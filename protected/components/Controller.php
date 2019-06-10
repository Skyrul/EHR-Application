<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/custom';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
	/**
	 * Return data to browser as JSON and end application.
	 * @param array $data
	 */
	protected function dd($data) {
	    header('Content-type: application/json');
	    echo CJSON::encode($data);
	    
	    foreach (Yii::app()->log->routes as $route) {
	        if ($route instanceof CWebLogRoute) {
	            $route->enabled = false; // disable any weblogroutes
	        }
	    }
	    Yii::app()->end();
	}
	
	/**
	 * Return data to browser as JSON.
	 * @param array $data
	 */
	protected function returnJSON($data) {
	    //header('Content-type: application/json');
	    echo CJSON::encode($data);
	}
	
	protected function require_auth() {
	    $AUTH_USER = 'admin';
	    $AUTH_PASS = 'LetmeIN';
	    header('Cache-Control: no-cache, must-revalidate, max-age=0');
	    $has_supplied_credentials = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
	    $is_not_authenticated = (
	        !$has_supplied_credentials ||
	        $_SERVER['PHP_AUTH_USER'] != $AUTH_USER ||
	        $_SERVER['PHP_AUTH_PW']   != $AUTH_PASS
	        );
	    
	    if ($is_not_authenticated) {
	        header('HTTP/1.1 401 Authorization Required');
	        header('WWW-Authenticate: Basic realm="Access denied"');
	        exit;
	    }
	}
	
	/**
	 * Send email
	 */
	protected function sendMail($info) {
	    $allowed = array('sent_to',
	        'sent_name',
	        'subject',
	        'bodytext',
	        'bodyhtml',
	        'attachment');
	    
	    foreach ($info as $key => $value) {
	        if (!in_array($key, $allowed))
	            throw new CException('Your array field are invalid.');
	    }	    
	    // Compose
	    $mail = new Zend_Mail('utf-8');
	    $mail->setHeaderEncoding(Zend_Mime::ENCODING_QUOTEDPRINTABLE);
	    $mail->addTo($info['sent_to'], $info['sent_name']);
	    $mail->setFrom(Yii::app()->params['messenger'], Yii::app()->name);
	    $mail->setSubject($info['subject']);
	    $mail->setBodyText(isset($info['bodytext']) ? $info['bodytext'] : '');
	    $mail->setBodyHtml(isset($info['bodyhtml']) ? $info['bodyhtml'] : '');
	    
	    try {
	        $mail->send();
	        $mail = null;
	        sleep(1);
	        return true;
	    } catch (Exception $e) {
	        $this->dd($e->getMessage());
	        return false;
	    }
	}
	
	/**
	 * Return program URL
	 */
	protected function programURL() {
	    if (isset($_SERVER['HTTPS'])) {
	        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
	    } else {
	        $protocol = 'http';
	    }
	    return $protocol . "://" . $_SERVER['HTTP_HOST'];
	}
	
	/**
	 * Return program URL
	 */
	protected function programAuthURL() {
	    if (isset($_SERVER['HTTPS'])) {
	        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
	    } else {
	        $protocol = 'http';
	    }
	    return $protocol . "://" . Yii::app()->params['authUrl'] . '@' . $_SERVER['HTTP_HOST'];
	}
}