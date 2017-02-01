<?php

namespace Website;

use Phalcon\Mvc\Controller as PhController;

use Website\Constants\Environment;

/**
 * Class Controller
 *
 * @property \Phalcon\Config $config
 * @property \Website\Utils  $utils
 */
class Controller extends PhController
{
    /**
     * Initializes the controller
     */
    public function onConstruct()
    {
        /**
         * Collections
         */
        $this
            ->assets
            ->collection("header_css")
            ->addCss('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', false)
            ->addCss('//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css', false)
            ->addCss('//fonts.googleapis.com/css?family=Open+Sans:700,400', false);

        $this
            ->assets
            ->collection("footer_js")
            ->addJs('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false)
            ->addJs('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js', false)
            ->addJs($this->utils->getCdnUrl() . 'js/plugins/jquery.lazyload.min.js', $this->utils->isCdnLocal())
            ->addJs($this->utils->getCdnUrl() . 'js/plugins/jquery.magnific-popup.min.js', $this->utils->isCdnLocal())
            ->addJs($this->utils->getCdnUrl() . 'js/plugins/highlight.pack.js', $this->utils->isCdnLocal())
            ->addJs($this->utils->getCdnUrl() . 'js/plugins/jquery.ajaxchimp.min.js', $this->utils->isCdnLocal())
            ->addJs($this->utils->getCdnUrl() . 'js/plugins/jquery.backstretch.min.js', $this->utils->isCdnLocal())
            ->addJs($this->utils->getCdnUrl() . 'js/custom.js');
    }

    protected function getLanguages($language)
    {
        /**
         * Find the languages available
         */
        $languages             = $this->config->get('languages');
        $documentationLanguage = $this->config->get('doc_languages')->get(0, $language);
        $languagesAvailable    = '';
        $url                   = $this->request->getScheme() . '://'
                               . $this->request->getHttpHost()
                               . $this->config->get('app')->get('baseUri');
        $uri                   = $this->router->getRewriteUri();
        foreach ($languages as $key => $value) {
            $selected            = ($key == $language) ? " selected='selected'" : '';
            $href                = $url . str_replace("/{$language}", "{$key}", $uri);
            $languagesAvailable .= sprintf(
                "<a role='menuitem' tabindex='-1' href='%s' class='flag-%s'%s>%s</a>",
                $href,
                $key,
                $selected,
                $value
            );
        }

        return $languagesAvailable;
    }



//		if (!$release = $this->cacheData->get('gh_release')) {
//			$options = [
//				CURLOPT_RETURNTRANSFER => true,
//				CURLOPT_AUTOREFERER    => true,
//				CURLOPT_FOLLOWLOCATION  => true,
//				CURLOPT_MAXREDIRS       => 20,
//				CURLOPT_HEADER          => true,
//				CURLOPT_PROTOCOLS       => CURLPROTO_HTTP | CURLPROTO_HTTPS,
//				CURLOPT_REDIR_PROTOCOLS => CURLPROTO_HTTP | CURLPROTO_HTTPS,
//				CURLOPT_USERAGENT       => 'Phalcon HTTP/' . \Phalcon\Version::get() . ' (Curl)',
//				CURLOPT_CONNECTTIMEOUT  => 30,
//				CURLOPT_TIMEOUT         => 30,
//				CURLOPT_URL             => 'https://api.github.com/repos/phalcon/cphalcon/releases/latest',
//				CURLOPT_HTTPGET         => true,
//				CURLOPT_CUSTOMREQUEST   => 'GET'
//			];
//
//			$ch = curl_init();
//
//			curl_setopt_array($ch, $options);
//
//			$content    = curl_exec($ch);
//			$headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
//			$body       = substr($content, $headerSize);
//
//			if ($errno = curl_errno($ch)) {
//				error_log("Get GitHub release error: " . curl_error($ch));
//			}
//
//			curl_close($ch);
//
//			$response = json_decode($body);
//
//			if (JSON_ERROR_NONE !== json_last_error()) {
//				error_log("Decode GitHub response error: " . json_last_error_msg());
//			}
//
//			if (isset($response->tag_name)) {
//				$release = str_replace('phalcon-v', '', strtolower(trim($response->tag_name)));
//
//				$this->cacheData->save('gh_release', $release, 60 * 60 * 24);
//			}
//		}
//
//		$this->view->setVar('release', $release);
//  }
//
//	public function requestInitialize()
//	{
//		if ($this->config->application->debug) {
//            $cdnUrl = $this->config->application->baseUri;
//		} else {
//            $cdnUrl = $this->config->application->cdn;
//		}
//
//		$baseUrl = $this->config->application->baseUri;
//
//		/**
//		 * Docs path and CDN url
//		 */
//		$lang = $this->getLang();
//
//		/**
//		 * Find the languages available
//		 */
//		$languages              = $this->config->languages;
//		$documentationLanguage  = $this->config->doclanguages->get(0,$lang);
//		$languagesAvailable     = '';
//		$selected               = '';
//		$url                    = $this->request->getScheme() . '://'
//							    . $this->request->getHttpHost()
//							    . $this->config->application->baseUri;
//		$uri                    = $this->router->getRewriteUri();
//		foreach ($languages as $key => $value) {
//			$selected = ($key == $lang) ? " selected='selected'" : '';
//			$href     = $url .  str_replace("/{$lang}", "{$key}", $uri);
//			$languagesAvailable .= "<a role='menuitem' tabindex='-1' href='{$href}' class='flag-{$key}'>{$value}</a>";
//
//			#$languagesAvailable .= "<option value='{$href}'{$selected}>{$value}</option>"; // old way to do it
//		}
//
//		$this->view->setVar('language', $lang);
//		$this->view->setVar('baseurl', $baseUrl);
//		$this->view->setVar('languages_available', $languagesAvailable);
//		$this->view->setVar('docs_root', 'http://docs.phalconphp.com/'.$documentationLanguage.'/latest/');
//		$this->view->setVar('cdn_url', $cdnUrl);
//        $this->view->setVar('isFrontpage', true);
//	}
//
//
//	protected function getUriParameter($parameter)
//	{
//		return $this->dispatcher->getParam($parameter);
//	}

//    protected function getLang()
//    {
//        $lang = $this->getUriParameter('language');
//
//        if (!$lang) {
//            $languagesAvailable = array_keys($this->config->languages->toArray());
//
//            foreach ($this->request->getLanguages() as $httpLang) {
//                $httpLang = mb_strtolower(substr($httpLang['language'], 0, 2));
//                if (in_array($httpLang, $languagesAvailable)) {
//                    return $httpLang;
//                }
//            }
//        } else {
//            return $lang;
//        }
//
//        return 'en';
//    }

    /**
     * Gets the contributors from the cached file
     *
     * @return array
     */
    protected function getContributors()
    {
        $contributors = [];
        $fileName     = APP_PATH . '/storage/cache/data/contributors.json';
        if (true == file_exists($fileName)) {
            $contributors = file_get_contents($fileName);
            $contributors = json_decode($contributors, true);
        }

        return $contributors;
    }
}
